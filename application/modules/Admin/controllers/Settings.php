<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends MX_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('xcrud');
        $result = check_admin();
        if(empty($result))
        {
            redirect(ADMINURI.'login');
        }
        $this->load->model('Modules_Model', 'mm');
        $this->load->model('Auth_Model', 'am');
        $this->load->Model('Setting_Model', 'SM');
        $data = getAllObjects();
        $this->load->vars($data);
    } 

    public function index()
    {
        $data['title'] = 'Settings';
        $this->load->library('upload');
        $data['crumbdata'] = array('Settings');
        $data['crumb'] = 'Admin/crumb';
        $this->load->Model('Setting_Model', 'SM');
        $this->load->helper(array('form', 'url'));
        $dir    = FCPATH.'themes';
        $themes_array = array_diff(scandir($dir), array('..', '.'));
        $data["themes"] = $themes_array;
        $post = $this->input->post();
        $image_path = FCPATH.FRONT_IMG_SETTING;
        $data["result"] = $this->SM->get_settings();
        if (!empty($post)) {
            $config['upload_path'] = $image_path ;
            $config['allowed_types'] = 'png|jpg|gif';
            $config['max_size'] = 2048;
            $config['overwrite'] = TRUE;
            $config['file_name'] = "favicon";

            $this->upload->initialize($config);
            if (!empty($_FILES["favicon"]["name"])) {
                if (!empty($_FILES['favicon']['name'])) {
                    if (!$this->upload->do_upload('favicon')) {
                        $data['errors_view'] = $this->upload->display_errors();
                        $error = true;
                    } else {
                        $favicon = $this->upload->data("file_name");
                        $post["favicon"] = $favicon;
                    }
                }
            }

            $config['file_name'] = "logo";
            $this->upload->initialize($config);

            if (!empty($_FILES['logo']['name'])) {
                if (!$this->upload->do_upload('logo')) {
                    $errors = $this->upload->display_errors();
                    $data['errors_view'] = $errors;
                    $error = true;
                } else {
                    $logo = $this->upload->data("file_name");
                    $post["logo"] = $logo;
                }
            }
            if (empty($error)) {
                $this->SM->update_settings($post);
                $data["success_view"] = "Update Successfully";
                $data["result"] = $this->SM->get_settings();
            }
            $data['main_content'] = 'Admin/settings';
            $this->load->view('Admin/template', $data);
        } else {
            $data['main_content'] = 'Admin/settings';
            $this->load->view('Admin/template', $data);
        }
    }

    public function modules()
    {
        $xcrud = xcrud_get_instance();
        $xcrud->table('modules');
        $xcrud->unset_title();
        $data['title'] = 'Modules';
        $data['head'] = 'Modules';
        $xcrud->column_callback('active', 'change_modules_status');
        $data['content'] = $xcrud->render();
        $data['main_content'] = 'Admin/xcrud';
        $data['crumbdata'] = array('Settings','Modules');
        $data['crumb'] = 'Admin/crumb';
        $data['base_url'] = base_url(ADMINURI.'settings/delete_all');
        $this->load->view('Admin/template', $data);
    }
    public function update_status()
    {

        echo $this->sm->activiate_modules($this->input->post());
    }
    public function delete_all()
    {
        echo $this->sm->delete_all_modules($this->input->post('primery_keys'));

    }
    public function delete_all_currencies()
    {
        echo $this->sm->delete_all_currencies($this->input->post('primery_keys'));

    }
    public function delete_all_gateways()
    {
        echo $this->sm->delete_all_gateways($this->input->post('primery_keys'));

    }
    public function delete_all_icons()
    {
        echo $this->sm->delete_all_icons($this->input->post('primery_keys'));

    }

    public function currencies()
    {
        $xcrud = xcrud_get_instance();
        $xcrud->table('global_currencies');
        $xcrud->unset_title();
        $data['title'] = 'Currencies';
        $data['head'] = 'Currencies';
        $data['content'] = $xcrud->render();
        $data['main_content'] = 'Admin/xcrud';
        $data['crumbdata'] = array('Settings','Currencies');
        $data['base_url'] = base_url(ADMINURI.'settings/delete_all_currencies');
        $data['crumb'] = 'Admin/crumb';
        $this->load->view('Admin/template', $data);
    }


    public function payment_gateways()
    {
        $xcrud = xcrud_get_instance();
        $xcrud->table('global_payment_gateways');
        $xcrud->columns('payment_status,payment_name,payment_percentage,payment_show');
        $xcrud->unset_title();
        $data['title'] = 'Payment Gateways';
        $data['head'] = 'Payment Gateways';
        $data['content'] = $xcrud->render();
        $data['main_content'] = 'Admin/xcrud';
        $data['crumbdata'] = array('Settings','Payment Gateways');
        $data['base_url'] = base_url(ADMINURI.'settings/delete_all_gateways');

        $data['crumb'] = 'Admin/crumb';
        $this->load->view('Admin/template', $data);
    }

    public function social()
    {
        $xcrud = xcrud_get_instance();
        $xcrud->table('global_social_icons');
        $xcrud->no_editor('url');
        $xcrud->unset_title();
        $data['title'] = 'Social Icons';
        $data['head'] = 'Social Icons';
        $data['content'] = $xcrud->render();
         $data['main_content'] = 'Admin/xcrud';
        $data['crumbdata'] = array('Settings','Social');
        $data['crumb'] = 'Admin/crumb';
        $this->load->view('Admin/template', $data);
    }

    // sliders

    public function sliders()
    {
        $xcrud = xcrud_get_instance();
        $xcrud->table('sliders');
        $xcrud->no_editor('url');
        // $xcrud->unset_title();
        $xcrud->change_type('image', 'image', false, array(
        'width' => 1920,
        'path' => '..\..\uploads\slider',
        'thumbs' => array(array(
        'height' => 55,
        'width' => 120,
        'marker' => '_th'))));
        $data['base_url'] = base_url(ADMINURI.'settings/delete_all_icons');
        $data['title'] = 'Sliders';
        $data['head'] = 'Sliders';
        $data['content'] = $xcrud->render();
        $data['main_content'] = 'Admin/xcrud';
        $data['crumbdata'] = array('Settings','sliders');
        $data['crumb'] = 'Admin/crumb';
        $this->load->view('Admin/template', $data);
    }


       public function service()
    {
        $xcrud = xcrud_get_instance();
        $xcrud->table('service');
        $xcrud->no_editor('url');
        // $xcrud->unset_title();
        $xcrud->change_type('image', 'image', false, array(
        'width' => 450,
        'path' => '..\..\uploads\service',
        'thumbs' => array(array(
        'height' => 55,
        'width' => 120,
        'marker' => '_th'))));
        $data['base_url'] = base_url(ADMINURI.'settings/delete_all_icons');
        $data['title'] = 'Service';
        $data['head'] = 'Service';
        $data['content'] = $xcrud->render();
        $data['main_content'] = 'Admin/xcrud';
        $data['crumbdata'] = array('Settings','service');
        $data['crumb'] = 'Admin/crumb';
        $this->load->view('Admin/template', $data);
    }

           public function team()
    {
        $xcrud = xcrud_get_instance();
        $xcrud->table('team');
        $xcrud->no_editor('url');
        // $xcrud->unset_title();
        $xcrud->change_type('image', 'image', false, array(
        'width' => 450,
        'path' => '..\..\uploads\team', 
        'thumbs' => array(array(
        'height' => 55,
        'width' => 120,
        'marker' => '_th'))));
        $data['base_url'] = base_url(ADMINURI.'settings/delete_all_icons');
        $data['title'] = 'Team';
        $data['head'] = 'Team';
        $data['content'] = $xcrud->render();
        $data['main_content'] = 'Admin/xcrud';
        $data['crumbdata'] = array('Settings','team');
<<<<<<< HEAD
        $data['crumb'] = 'Admin/crumb';
        $this->load->view('Admin/template', $data);
    }

       public function events()
    {
        $xcrud = xcrud_get_instance();
        $xcrud->table('events');
        // $xcrud->unset_title();
        $data['base_url'] = base_url(ADMINURI.'settings/delete_all_icons');
        $data['title'] = 'Events';
        $data['head'] = 'Events';
        $data['content'] = $xcrud->render();
        $data['main_content'] = 'Admin/xcrud';
        $data['crumbdata'] = array('Settings','events');
=======
>>>>>>> 737f267dcc1b6ba94f7944cf6d70ca0ab7502f87
        $data['crumb'] = 'Admin/crumb';
        $this->load->view('Admin/template', $data);
    }
       public function about_us() 
    {
        $xcrud = xcrud_get_instance();
        $xcrud->table('about_us');
        $xcrud->columns('madaris,mosques,students,imams');
        $xcrud->change_type('image1', 'image', false, array(
        'width' => 450,
        'path' => '..\..\uploads\about_us',
        'thumbs' => array(array(
        'height' => 55,
        'width' => 120,
        'marker' => '_th'))));   
        $xcrud->change_type('image2', 'image', false, array(
        'width' => 450,
        'path' => '..\..\uploads\about_us',
        'thumbs' => array(array(
        'height' => 55,
        'width' => 120,
        'marker' => '_th'))));
        $xcrud->change_type('image3', 'image', false, array(
        'width' => 450,
        'path' => '..\..\uploads\about_us',
        'thumbs' => array(array(
        'height' => 55,
        'width' => 120,
        'marker' => '_th'))));
        $data['base_url'] = base_url(ADMINURI.'settings/delete_all_icons');
        $data['title'] = 'about_us';
        $data['head'] = 'about_us';
        $data['content'] = $xcrud->render();
        $data['main_content'] = 'Admin/xcrud';
        $data['crumbdata'] = array('Settings','about_us');
        $data['crumb'] = 'Admin/crumb';
        $this->load->view('Admin/template', $data);
    }

       public function gallery()
    {

        $this->load->view('Admin/header');
        $data['files'] = $this->SM->getimage();
        // Pass the files data to view
        $this->load->view('Admin/gallery', $data);
        $this->load->view('Admin/footer');
    }

    public function do_upload_img()
    {
if(!empty($_FILES['file']['name'])){

     // Set preference
     $config['upload_path'] = 'uploads/gallery'; 
     $config['allowed_types'] = 'jpg|jpeg|png|gif';
     $config['max_size'] = '1024'; // max_size in kb
     $config['file_name'] = $_FILES['file']['name'];

     //Load upload library
     $this->load->library('upload',$config); 

     // File upload
     if($this->upload->do_upload('file')){
       // Get data about the file
    $uploadData = $this->upload->data('file_name');
    $this->SM->image_up($uploadData);
     }
    }

     // Get files data from the database
        $data['files'] = $this->SM->getimage();
        // Pass the files data to view
        $this->load->view('Admin/gallery', $data);
    }

        public function deleteimg(){
        $id   = $this->input->post('imgid');
        $result = $this->SM->deleteimg($id);
        $msg['success'] = false;
        if($result){
            $msg['success'] = true;
        }
        echo json_encode($msg);
        }

    public function deleteimgarray()
    {
        $imgidarray = $this->input->post('ids');
         $this->db->where_in('id', explode(",", $imgidarray));
        $this->db->delete('gallery');
        echo json_encode(['success'=>"Item Deleted successfully."]);
    }
    public function approve()
    {
        $id = $this->input->post('imgid');
        $this->db->set('active', 0); //value that used to update column  
        $this->db->where('id',$id);
        $this->db->update('gallery');
        echo json_encode(['success'=>"Item Update successfully."]);
    }
        public function reject()
    {
        $id = $this->input->post('imgid');
        $this->db->set('active', 1); //value that used to update column  
        $this->db->where('id',$id);
        $this->db->update('gallery');
        echo json_encode(['success'=>"Item Update successfully."]);
    }
        public function thumbapprove()
    {
    $id = $this->input->post('imgid');
    $Thumbnail = $this->db->select('Thumbnail')
    ->from('gallery')->get()->result();
    foreach($Thumbnail as $Thumb):
    $Thumbnail = $Thumb->Thumbnail;
    if($Thumbnail == 1)
    {
        $Thumbnail = 0;
    }
    else
    {
        $Thumbnail = 0;
    }
    $data=array('Thumbnail'=>$Thumbnail);
    $this->db->update('gallery',$data);
    endforeach;
    $row = $this->db->get_where('gallery', array('id' => $id))->row()->Thumbnail;
    if($row == 0)
    {
        $row = 1;
    } 
    else 
    {
        $row = 1;
    }
    $data=array('Thumbnail'=>$row);
    $this->db->where('id',$id);
    $this->db->update('gallery',$data);
 
    echo json_encode(['success'=>"Item Update successfully."]);
    }
        public function updateorder()
    {
        $imgid = $this->input->post('imgid');
        $id = $this->input->post('ids');
        $this->db->set('orders_id', $imgid); //value that used to update column  
        $this->db->where('id',$id);
        $this->db->update('gallery');
        echo json_encode(['success'=>"Item Update successfully."]);
    }

       public function events()
    {
        $xcrud = xcrud_get_instance();
        $xcrud->table('events');
        // $xcrud->unset_title();
        $data['base_url'] = base_url(ADMINURI.'settings/delete_all_icons');
        $data['title'] = 'Events';
        $data['head'] = 'Events';
        $data['content'] = $xcrud->render();
        $data['main_content'] = 'Admin/xcrud';
        $data['crumbdata'] = array('Settings','events');
        $data['crumb'] = 'Admin/crumb';
        $this->load->view('Admin/template', $data);
    }



}