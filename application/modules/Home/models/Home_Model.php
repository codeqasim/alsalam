<?php
class Home_Model extends CI_model
{



    public function sliders()
    {
    
        return $this->db->get('sliders')->result();
    
    }

    public function service()
    {
    
        return $this->db->get('service')->result();
    
    }

    public function team()
    {
    
        return $this->db->get('team')->result();
    
    }

    public function events()
    {
    
        return $this->db->get('events')->result();
    
    }
    public function blogs()
    {
    
        return $this->db->get('module_blogs')->result();
    
    }

    public function social_icons()
    {
    
        return $this->db->get('global_social_icons')->result();
    
    }


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

	
    public function subscribe_email($email){
        $field = array(
            'email'=>$email
            );
        $query = $this->db->insert('newsletter', $field);
            return $query;
        }
}
    
   
   
