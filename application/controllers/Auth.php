<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index() // PENGATURAN FORM LOGIN
    {
        //MENAMBAH SESSION KETIKA JADI USER SAAT KETIK DI URL UNTUK KEMBALI KE AUTH
        if ($this->session->userdata('email')) {
            redirect('user');
        }
        // ATURAN YANG BERLAKU UNTUK FORM LOGIN
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email', [
            'required' => 'Mohon isikan email anda!',
            'valid_email' => 'Email tidak valid ! Gunakan email lain',
        ]);
        $this->form_validation->set_rules('password', 'Password', 'trim|required', [
            'required' => 'Mohon isikan password anda!'
        ]);

        // VALIDASI SESSION_USER LOGIN
        if ($this->form_validation->run() == false) {   // DIJALANKAN KETIKA SESSION_USER TIDAK VALID
            $data['title'] = 'Halaman Login';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/login');
            $this->load->view('templates/auth_footer');
        } else {    // DIJALANKAN KETIKA SESSION_USER VALID
            $this->_login();
        }
    }

    private function _login()   // FUNGSI VALIDASI LOGIN
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        // CEK DATA-DATA DI DATABASE
        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        // VALIDASI USER
        if ($user) {    // JIKA EMAIL USER TERDAFTAR
            if ($user['is_active'] == 1) {  // JIKA EMAIL USER AKTIF
                if (password_verify($password, $user['password'])) { // JIKA PASSWORD BENAR
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id']
                    ];
                    $this->session->set_userdata($data);
                    if ($user['role_id'] == 1) {    // VALIDASI ROLE_ID
                        redirect('admin');  // MASUK SEBAGAI ADMIN
                    } else {
                        redirect('user');   // MASUK SEBAGAI USER
                    }
                } else {    // JIKA PASSWORD SALAH
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password anda salah!</div>');
                    redirect('auth');
                }
            } else {    // JIKA EMAIL USER TIDAK AKTIF
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email belum diaktivasi!</div>');
                redirect('auth');
            }
        } else {    // JIKA EMAIL USER TIDAK TERDAFTAR
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email belum terdaftar! Segera lakukan registrasi</div>');
            redirect('auth');
        }
    }

    public function registrasi()    // PENGATURAN FORM VALIDASI
    {
        //MENAMBAH SESSION KETIKA JADI USER SAAT KETIK DI URL UNTUK KEMBALI AUTH TIDAK BISA
        if ($this->session->userdata('email')) {
            redirect('user');
        }
        // ATURAN YANG BERLAKU UNTUK FORM REGISTRASI
        $this->form_validation->set_rules('name', 'Name', 'required|trim', [
            'required' => 'Mohon isikan nama lengkap anda!'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'required' => 'Mohon isikan email anda!',
            'valid_email' => 'Email tidak valid ! Gunakan email lain',
            'is_unique' => 'Email ini telah digunakan !'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'required' => 'Mohon isikan password anda!',
            'matches' => 'Kata sandi tidak sama!',
            'min_length' => 'Password terlalu pendek!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        // VALIDASI SESSION REGISTRASI
        if ($this->form_validation->run() == false) {   // DIJALANKAN KETIKA SESSION_USER TIDAK VALID
            $data['title'] = 'Halaman Registrasi';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/registrasi');
            $this->load->view('templates/auth_footer');
        } else {    // DIJALANKAN KETIKA SESSION_USER VALID
            $email = $this->input->post('email', true);
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($email),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 0, //AGAR TIDAK TERAKTIVASI OTOMATIS
                'date_created' => time()
            ];

            //SIAPKAN TOKEN BILANGAN RANDOM
            $token = base64_encode(random_bytes(32));
            $user_token = [
                'email' => $email ,
                'token' => $token ,
                'date_created' => time()
            ];

            // KELUAR DARI FORM REGISTRASI DAN KEMBALI KE FORM LOGIN
            $this->db->insert('user', $data);
            $this->db->insert('user_token', $user_token);

            $this->_sendEmail($token, 'verify');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Akun berhasil dibuat ! Silahkan Aktivasi akun anda.</div>');
            redirect('auth');
        
        }
    }

    private function _sendEmail($token, $type){
        $config = [
            'protocol'  => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_user' => 'erik@gmail.com',
            'smtp_pass' => 'erik',
            'smtp_port' => 465,
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'newline'   => "\r\n"
        ];

        // $this->load->library('email', $config);
        $this->email->initialize($config);

        $this->email->from('erik@gmail.com', 'Erik Rahman');
        $this->email->to($this->input->post('email'));

        if($type == 'verify'){
            $this->email->subject('Account Verification');
            $this->email->message('Click this link to verify you account : <a href="'. base_url() . 'auth/verify?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Activate</a>');            
        }

        if($this->email->send()){
            return true;
        } else {
            echo $this->email->print_debugger();
            die;
        }
    }

    public function verify(){

        $email = $this->input->get('email');
        $token = $this->input->get('token');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if($user){
            $user_token = $this->db->get_where('user_token',['token' => $token ])->row_array();

            if($user_token){
                if(time() - $user_token['date_created'] < (60*60*24)){
                    $this->db->set('is_active', 1);
                    $this->db->where('email', $email);
                    $this->db->update('user');

                    $this->db->delete('user_token', ['email' => $email]);

                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">'. $email .' telah teraktivasi. Silahkan login.</div>');
                    redirect('auth');
                }else{

                    $this->db->delete('user', ['email' => $email]);
                    $this->db->delete('user_token', ['email' => $email]);

                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Aktivasi akun gagal! Token kadaluarsa.</div>');
                    redirect('auth');
                }
            }
            else{
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Aktivasi akun gagal! Token salah.</div>');
                redirect('auth');
            }

        } else{
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Aktivasi akun gagal! Email Salah.</div>');
            redirect('auth');
        }
    }

    public function logout()    // LOGOUT AKUN
    {
        // MEMBERSIHKAN DATA EMAIL DAN ROLE DARI SESSION_LOGIN
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        // KELUAR DARI FORM USER DAN KEMBALI KE FORM LOGIN
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Anda telah logout!</div>');
        redirect('auth');
    }

    public function blocked()
    {
        $this->load->view('auth/blocked');
    }
}
