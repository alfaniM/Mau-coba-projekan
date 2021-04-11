<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Halaman Utama';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer');
    }

    public function edit()
    {
        $data['title'] = 'Edit Profil';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('name', 'Full Name', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $name = $this->input->post('name');
            $email = $this->input->post('email');

            //CEK JIKA ADA GAMBAR YANG AKAN DIUPLOAD
            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']      = '2048';
                $config['max_width']     = '1024';
                $config['max_height']     = '768';
                $config['upload_path']   = './assets/img/profiles/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $data['user']['image'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/img/profiles/' . $old_image);
                    }

                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $this->db->set('name', $name);
            $this->db->where('email', $email);
            $this->db->update('user');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Profil Anda telah diperbarui!</div>');
            redirect('user');
        }
    }

    public function changePassword()
    {
        $data['title'] = 'Change Password';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
        $this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|min_length[3]|matches[new_password2]');
        $this->form_validation->set_rules('new_password2', 'Current New Password', 'required|trim|min_length[3]|matches[new_password1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/changepassword', $data);
            $this->load->view('templates/footer');
        } else {
            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('new_password1');
            if (!password_verify($current_password, $data['user']['password'])) {

                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Salah Memasukkan Kata Sandi Saat Ini!</div>');
                redirect('user/changepassword');
            } else {
                if ($current_password == $new_password) {

                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Kata Sandi Baru Tidak Boleh Sama Dengan Kata Sandi Saat Ini!</div>');
                    redirect('user/changepassword');
                } else {
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

                    $this->db->set('password', $password_hash);
                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->update('user');

                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Kata Sandi Berubah!</div>');
                    redirect('user/changepassword');
                }
            }
        }
    }

    public function persuratan()
    {
        $data['title'] = 'Halaman Persuratan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/persuratan', $data);
        $this->load->view('templates/footer');
    }

    public function pdf()
    {
        //Form PENILAIAN PKL PEMBIMBING BIDANG PENULISAN LAPORAN
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('forms/penilaian_pkl', $data);


        $html = $this->output->get_output();
        $this->load->library('pdf');
        $this->pdf->loadHtml($html);
        $this->pdf->setPaper('A4', 'portrait');
        $this->pdf->render();

        $this->pdf->stream("html_contents.pdf", array("Attachment" => 0));
        // $paper_size = 'A4';
        // $orientation = 'landscape';
        // $html = $this->output->get_output();
        // $this->dompdf->load_html($html);
        // $this->dompdf->render();
        // $this->dompdf->stream("Form PKL.pdf", array('Attachement' => 0));

        // $this->pdf->setPaper('A4', 'potrait');
        // $this->pdf->filename = "laporan-petanikode.pdf";
        // $this->pdf->load_view('laporan_pdf', $data);
    }
    public function pdf2()
    {
        //Form PENILAIAN PKL PEMBIMBING BIDANG KEGIATAN
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('forms/penilaian_pkl2', $data);


        $html = $this->output->get_output();
        $this->load->library('pdf');
        $this->pdf->loadHtml($html);
        $this->pdf->setPaper('A4', 'portrait');
        $this->pdf->render();

        $this->pdf->stream("html_contents.pdf", array("Attachment" => 0));
        // $paper_size = 'A4';
        // $orientation = 'landscape';
        // $html = $this->output->get_output();
        // $this->dompdf->load_html($html);
        // $this->dompdf->render();
        // $this->dompdf->stream("Form PKL.pdf", array('Attachement' => 0));

        // $this->pdf->setPaper('A4', 'potrait');
        // $this->pdf->filename = "laporan-petanikode.pdf";
        // $this->pdf->load_view('laporan_pdf', $data);
    }
    public function pdf3()
    {
        //Form REKAPITULASI PENILAIAN PRAKTEK KERJA LAPANG (PKL)
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('forms/rekap_pkl', $data);


        $html = $this->output->get_output();
        $this->load->library('pdf');
        $this->pdf->loadHtml($html);
        $this->pdf->setPaper('A4', 'portrait');
        $this->pdf->render();

        $this->pdf->stream("html_contents.pdf", array("Attachment" => 0));
        // $paper_size = 'A4';
        // $orientation = 'landscape';
        // $html = $this->output->get_output();
        // $this->dompdf->load_html($html);
        // $this->dompdf->render();
        // $this->dompdf->stream("Form PKL.pdf", array('Attachement' => 0));

        // $this->pdf->setPaper('A4', 'potrait');
        // $this->pdf->filename = "laporan-petanikode.pdf";
        // $this->pdf->load_view('laporan_pdf', $data);
    }

    public function pdf4()
    {
        //Form NILAI PENGUJI SEMINAR PROPOSAL PENELITIAN
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('forms/npj_seminar_proposal', $data);


        $html = $this->output->get_output();
        $this->load->library('pdf');
        $this->pdf->loadHtml($html);
        $this->pdf->setPaper('A4', 'portrait');
        $this->pdf->render();

        $this->pdf->stream("html_contents.pdf", array("Attachment" => 0));
        // $paper_size = 'A4';
        // $orientation = 'landscape';
        // $html = $this->output->get_output();
        // $this->dompdf->load_html($html);
        // $this->dompdf->render();
        // $this->dompdf->stream("Form PKL.pdf", array('Attachement' => 0));

        // $this->pdf->setPaper('A4', 'potrait');
        // $this->pdf->filename = "laporan-petanikode.pdf";
        // $this->pdf->load_view('laporan_pdf', $data);
    }
    public function pdf5()
    {
        //Form NILAI PEMBIMBING SEMINAR PROPOSAL PENELITIAN
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('forms/np_seminar_proposal', $data);


        $html = $this->output->get_output();
        $this->load->library('pdf');
        $this->pdf->loadHtml($html);
        $this->pdf->setPaper('A4', 'portrait');
        $this->pdf->render();

        $this->pdf->stream("html_contents.pdf", array("Attachment" => 0));
        // $paper_size = 'A4';
        // $orientation = 'landscape';
        // $html = $this->output->get_output();
        // $this->dompdf->load_html($html);
        // $this->dompdf->render();
        // $this->dompdf->stream("Form PKL.pdf", array('Attachement' => 0));

        // $this->pdf->setPaper('A4', 'potrait');
        // $this->pdf->filename = "laporan-petanikode.pdf";
        // $this->pdf->load_view('laporan_pdf', $data);
    }

    public function pdf6()
    {
        //Form REKAPITULASI NILAI SEMINAR PROPOSAL PENELITIAN
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('forms/rekap_seminar_proposal', $data);


        $html = $this->output->get_output();
        $this->load->library('pdf');
        $this->pdf->loadHtml($html);
        $this->pdf->setPaper('A4', 'portrait');
        $this->pdf->render();

        $this->pdf->stream("html_contents.pdf", array("Attachment" => 0));
        // $paper_size = 'A4';
        // $orientation = 'landscape';
        // $html = $this->output->get_output();
        // $this->dompdf->load_html($html);
        // $this->dompdf->render();
        // $this->dompdf->stream("Form PKL.pdf", array('Attachement' => 0));

        // $this->pdf->setPaper('A4', 'potrait');
        // $this->pdf->filename = "laporan-petanikode.pdf";
        // $this->pdf->load_view('laporan_pdf', $data);
    }


    public function pdf7()
    {
        //Form NILAI PEMBIMBING SEMINAR HASIL PENELITIAN
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('forms/np_seminar_proposal', $data);


        $html = $this->output->get_output();
        $this->load->library('pdf');
        $this->pdf->loadHtml($html);
        $this->pdf->setPaper('A4', 'portrait');
        $this->pdf->render();

        $this->pdf->stream("html_contents.pdf", array("Attachment" => 0));
        // $paper_size = 'A4';
        // $orientation = 'landscape';
        // $html = $this->output->get_output();
        // $this->dompdf->load_html($html);
        // $this->dompdf->render();
        // $this->dompdf->stream("Form PKL.pdf", array('Attachement' => 0));

        // $this->pdf->setPaper('A4', 'potrait');
        // $this->pdf->filename = "laporan-petanikode.pdf";
        // $this->pdf->load_view('laporan_pdf', $data);
    }
    public function pdf8()
    {
        //Form NILAI PENGUJI SEMINAR HASIL PENELITIAN
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('forms/npj_seminar_hasil', $data);


        $html = $this->output->get_output();
        $this->load->library('pdf');
        $this->pdf->loadHtml($html);
        $this->pdf->setPaper('A4', 'portrait');
        $this->pdf->render();

        $this->pdf->stream("html_contents.pdf", array("Attachment" => 0));
        // $paper_size = 'A4';
        // $orientation = 'landscape';
        // $html = $this->output->get_output();
        // $this->dompdf->load_html($html);
        // $this->dompdf->render();
        // $this->dompdf->stream("Form PKL.pdf", array('Attachement' => 0));

        // $this->pdf->setPaper('A4', 'potrait');
        // $this->pdf->filename = "laporan-petanikode.pdf";
        // $this->pdf->load_view('laporan_pdf', $data);
    }
    public function pdf9()
    {
        //Form REKAPITULASI NILAI SEMINAR HASIL PENELITIAN
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('forms/npj_seminar_hasil', $data);


        $html = $this->output->get_output();
        $this->load->library('pdf');
        $this->pdf->loadHtml($html);
        $this->pdf->setPaper('A4', 'portrait');
        $this->pdf->render();

        $this->pdf->stream("html_contents.pdf", array("Attachment" => 0));
        // $paper_size = 'A4';
        // $orientation = 'landscape';
        // $html = $this->output->get_output();
        // $this->dompdf->load_html($html);
        // $this->dompdf->render();
        // $this->dompdf->stream("Form PKL.pdf", array('Attachement' => 0));

        // $this->pdf->setPaper('A4', 'potrait');
        // $this->pdf->filename = "laporan-petanikode.pdf";
        // $this->pdf->load_view('laporan_pdf', $data);
    }

    public function pdf10()
    {
        //Form NILAI SKRIPSI UNTUK PEMBIMBING
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('forms/np_skripsi', $data);


        $html = $this->output->get_output();
        $this->load->library('pdf');
        $this->pdf->loadHtml($html);
        $this->pdf->setPaper('A4', 'portrait');
        $this->pdf->render();

        $this->pdf->stream("html_contents.pdf", array("Attachment" => 0));
        // $paper_size = 'A4';
        // $orientation = 'landscape';
        // $html = $this->output->get_output();
        // $this->dompdf->load_html($html);
        // $this->dompdf->render();
        // $this->dompdf->stream("Form PKL.pdf", array('Attachement' => 0));

        // $this->pdf->setPaper('A4', 'potrait');
        // $this->pdf->filename = "laporan-petanikode.pdf";
        // $this->pdf->load_view('laporan_pdf', $data);
    }
    public function pdf11()
    {
        //Form NILAI SKRIPSI UNTUK PENGUJI
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('forms/npj_skripsi', $data);


        $html = $this->output->get_output();
        $this->load->library('pdf');
        $this->pdf->loadHtml($html);
        $this->pdf->setPaper('A4', 'portrait');
        $this->pdf->render();

        $this->pdf->stream("html_contents.pdf", array("Attachment" => 0));
        // $paper_size = 'A4';
        // $orientation = 'landscape';
        // $html = $this->output->get_output();
        // $this->dompdf->load_html($html);
        // $this->dompdf->render();
        // $this->dompdf->stream("Form PKL.pdf", array('Attachement' => 0));

        // $this->pdf->setPaper('A4', 'potrait');
        // $this->pdf->filename = "laporan-petanikode.pdf";
        // $this->pdf->load_view('laporan_pdf', $data);
    }
    public function pdf12()
    {
        //Form BERITA ACARA UJIAN SKRIPSI
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('forms/skripsi_us', $data);


        $html = $this->output->get_output();
        $this->load->library('pdf');
        $this->pdf->loadHtml($html);
        $this->pdf->setPaper('A4', 'portrait');
        $this->pdf->render();

        $this->pdf->stream("html_contents.pdf", array("Attachment" => 0));
        // $paper_size = 'A4';
        // $orientation = 'landscape';
        // $html = $this->output->get_output();
        // $this->dompdf->load_html($html);
        // $this->dompdf->render();
        // $this->dompdf->stream("Form PKL.pdf", array('Attachement' => 0));

        // $this->pdf->setPaper('A4', 'potrait');
        // $this->pdf->filename = "laporan-petanikode.pdf";
        // $this->pdf->load_view('laporan_pdf', $data);
    }
}
