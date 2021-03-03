<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu_model extends CI_Model
{
    public function getSubMenu()
    {
        $submenu = $this->db->query("SELECT `user_sub_menu`.*,`user_menu`.`menu`
                                    FROM `user_sub_menu` JOIN `user_menu`
                                    ON `user_sub_menu`.`menu_id` = `user_menu`.`id`")->result_array();
    
        return $submenu;
    }

    public function deleteMenu($id)
    {
        $this->crud->delete('user_menu', 'id', $id);
        // $this->db->where('id', $id);
        // $this->db->delete('user_menu');
    }
}
