<?php
class Crud extends CI_Model {
    function insert_id($table, $data){
        $this->db->trans_begin();
        $this->db->insert($table, $data);
        $last_id = $this->db->insert_id();
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return 0;
        }
        else {
            $this->db->trans_commit();
            return $last_id;
        }
    }

    function update($table, $field, $data, $id){
        $this->db->trans_begin();
        $this->db->update($table, $data, array($field => $id));
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return 0;
        }
        else {
            $this->db->trans_commit();
            return 1;
        }
    }
    
    function delete($table, $field, $id) {
        $this->db->trans_begin();
        $this->db->delete($table, array($field => $id));
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return 0;
        }
        else {
            $this->db->trans_commit();
            return 1;
        }
    }
}