<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Model_skripsi extends CI_Model
{
    public function get_data()
    {
        $getclass = $this->db->get('pkl_data')->result_array();

        $array = array();
        foreach($getclass as $class):

            $arr = array(
                'pkl_id' => $class['pkl_id'],
                'nama_pembimbing' => $class['nama_pembimbing'],
                'mhs_id' => $class['mhs_id'],
                'lokasi' => $class['lokasi']
            );
            array_push($array, $arr);
        endforeach;

        return $array;
    }
}