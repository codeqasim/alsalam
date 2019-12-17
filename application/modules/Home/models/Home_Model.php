<?php
class Home_Model extends CI_model
{


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

	


}
    
   
   
