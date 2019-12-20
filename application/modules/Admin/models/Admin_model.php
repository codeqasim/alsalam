<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model{
 
 
//start header menu & sub menu functions
		public function h_menus()
	{
		$this->db->select('*');
        $this->db->from('module_cms_menus');
        $this->db->order_by("ordering", "asc");
		$this->db->where('header = 1');
        $this->db->where('parent_id', 0);
        $parent = $this->db->get();
        $categories = $parent->result();
        $i=0;
        foreach($categories as $p_cat){

            $categories[$i]->sub = $this->sub_categories($p_cat->id);
            $i++;
        }
        return $categories;
    }


     public function sub_categories($id){

        $this->db->select('*');
        $this->db->from('module_cms_menus');
        $this->db->order_by("ordering", "asc");
		$this->db->where('header = 1');
        $this->db->where('parent_id', $id);

        $child = $this->db->get();
        $categories = $child->result();
        $i=0;
        foreach($categories as $p_cat){

            $categories[$i]->sub = $this->sub_categories($p_cat->id);
            $i++;
        }
        return $categories;       
    }


    public function update_menu($list, $parent_id = 0, &$ordering = 0) {
    foreach ($list as $item) {
        $ordering++;
        $data = array(
            'parent_id' => $parent_id,
            'ordering' => $ordering,
        );
        if ($parent_id != $item['id']) {

            $where = array('id' => $item['id']);
            var_dump($data . ':' . $where);
            $this->db->where($where);
            $this->db->update('module_cms_menus', $data);
        }
        if (array_key_exists("children", $item)) {
            $this->update_menu($item["children"], $item["id"], $ordering);
        }
    }


    
}
    //End header menu & sub menu functions


    //start footer menu & sub menu functions
    public function f_menus()
    {
        $this->db->select('*');
        $this->db->from('module_cms_menus');
        $this->db->order_by("ordering", "asc");
        $this->db->where('footer = 1');
        $this->db->where('parent_id', 0);

        $parent = $this->db->get();
        
        $categories = $parent->result();
        $i=0;
        foreach($categories as $p_cat){

            $categories[$i]->sub = $this->sub_categorie($p_cat->id);
            $i++;
        }
        return $categories;
    }


     public function sub_categorie($id){

        $this->db->select('*');
        $this->db->from('module_cms_menus');
        $this->db->order_by("ordering", "asc");
        $this->db->where('footer = 1');
        $this->db->where('parent_id', $id);

        $child = $this->db->get();
        $categories = $child->result();
        $i=0;
        foreach($categories as $p_cat){

            $categories[$i]->sub = $this->sub_categories($p_cat->id);
            $i++;
        }
        return $categories;       
    }
    
    public function update_footermenu($list, $parent_id = 0, &$ordering = 0) {
    foreach ($list as $item) {
        $ordering++;
        $data = array(
            'parent_id' => $parent_id,
            'ordering' => $ordering,
        );
        if ($parent_id != $item['id']) {

            $where = array('id' => $item['id']);
            // var_dump($data . ':' . $where);
            $this->db->where($where);
            $this->db->update('module_cms_menus', $data);
        }
        if (array_key_exists("children", $item)) {
            $this->update_footermenu($item["children"], $item["id"], $ordering);
        }
    }
}

//End footer menu & sub menu functions



// ChangeStatus
    public function ChangeStatus($post)
    {

        $update_array  = array("status"=>$post["value"]);
        $this->db->where('id',$post["id"]);
        $this->db->update('module_cms_menus',$update_array);
    }

}