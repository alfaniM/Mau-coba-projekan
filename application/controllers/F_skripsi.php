<?php use Restserver\Libraries\REST_Controller;
defined('BASEPATH') OR exit('No direct script access allowed');
// import library dari REST_Controller
require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';


class F_skripsi extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('model_skripsi');
        $this->load->model('crud');
        // $this->methods['users_get']['limit'] = 500; // 500 requests per hour per user/key
        // $this->methods['users_post']['limit'] = 100; // 100 requests per hour per user/key
        // $this->methods['users_delete']['limit'] = 50; // 50 requests per hour per user/key
    }

    public function list_get()
    {
        $alldata = $this->model_skripsi->get_data();
        $response = array(
            'status' => 'success',
            'data' => $alldata,
        );


        $this->output
            ->set_status_header(200)
            ->set_content_type('application/json', 'utf-8')
            ->set_output(json_encode($response, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
            ->_display();
        exit;
        
    }

    public function create_post()
    {
            $json = file_get_contents('php://input');
            $jsondata = json_decode($json, true);

            $schema = array(
                'nama_pembimbing' => array(
                    'type' => 'string',
                    'required' => true
                ),

                'mhs_id' => array(
                    'type' => 'string',
                    'required' => true
                ),
                'lokasi' => array(
                    'type' => 'string',
                    'required' => true
                ),
                'nama_perusahaan' => array(
                    'type' => 'string',
                    'required' => true
                ),
                'jobdesk' => array(
                    'type' => 'string',
                    'required' => true
                ),
            );

             
                    $data['nama_pembimbing'] = $jsondata['nama_pembimbing'];
                    $data['mhs_id'] = $jsondata['mhs_id'];
                    $data['lokasi'] = $jsondata['lokasi'];
                    $data['nama_perusahaan'] = $jsondata['nama_perusahaan'];
                    $data['jobdesk'] = $jsondata['jobdesk'];

                    $insert = $this->crud->insert_id('pkl_data', $data);
                    $result = array(
                        'status' => 'success',
                        'id_data' => $insert
                    );
                    $this->set_response($result, REST_Controller::HTTP_CREATED); 
        }
}