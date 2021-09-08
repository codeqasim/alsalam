<?php 

class Home extends MX_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('Home_Model','Home');
    } 
    public function index()
    {
    $data ['get_settings'] = $this->Home->get_settings();
    $data ['about_us'] = $this->Home->about_us();
    $data ['header_menus'] = $this->Home->h_menus();
    $data ['footer_menus'] = $this->Home->f_menus();
    $data ['sliders'] = $this->Home->sliders();
    $data ['service'] = $this->Home->service();
    $data ['team'] = $this->Home->team(); 
    // $data ['gallery'] = $this->Home->gallery();
    // print_r(array_chunk($input_array,2));
    // $one = array_chunk($this->Home->gallery(),2);
    // $two = array_chunk($one,1);

    $data ['events'] = $this->Home->events();
    $data ['blogs'] = $this->Home->blogs();
    $data ['social_icons'] = $this->Home->social_icons();
    // salat api code start
    if ($this->session->userdata('session_id')) {
    $session_id = $this->session->userdata('session_id');
    $array = array($session_id);
    $data ['salat'] = $array;
     }else{
    $ch = curl_init();
    $time=time();
    $getloc = json_decode(file_get_contents("http://ipinfo.io/"));
    $latANDlong = explode(",", $getloc->loc);
    $latitude =$latANDlong[0]; 
    $longitude =$latANDlong[1];
    curl_setopt($ch, CURLOPT_URL,"http://api.aladhan.com/v1/timings/$time?latitude=".$latitude."&longitude=".$longitude."&method=1");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result= curl_exec($ch);
    curl_close($ch);
    $result = json_decode($result);
    $this->session->set_userdata('session_id',$result);
    $session_id = $this->session->userdata('session_id');
    $array = array($session_id);
    $data ['salat'] = $array;
     }
    // salat api code end
    $this->theme->view('index',$data);
    }


    public function contact()
    {
    $this->theme->view('contact');

    }


    public function signup()
    {
    $this->theme->view('accounts/signup');
    }

    public function register_action()
    {
    $email=$this->input->post('email');

    $this->load->model('MainModel');
    $ch=$this->MainModel->verify_email($email);

    if($ch){
    $data['error']='Email Already Exits';
    $this->theme->view('accounts/signup',$data);
    }else{
    $data=array(
    'first_name'=>$this->input->post('first_name'),
    'last_name'=>$this->input->post('last_name'),
    'email'=>$this->input->post('email'),
    'phone'=>$this->input->post('phone'),
    'password'=>$this->input->post('password'),
    );
    $this->load->model('MainModel');
    $id=$this->MainModel->add_user($data);
    if($id){
    $this->session->set_userdata('id',$id);
    redirect('home');
    }
    else{
    echo '';
    }
    }
    }


    public function signin()
    {
    $this->theme->view('accounts/signin');
    }

    public function login_action()
    {
    $email=$this->input->post('email');
    $password=$this->input->post('password');

    $this->load->model('MainModel');
    $id=$this->MainModel->verify($email,$password);

    if($id){
    $this->session->set_userdata('id',$id);
    redirect('airbnb');
    }else{
    $data['error']='Email doest Not Exists';
    $this->theme->view('accounts/singin',$data);
    }
    }

    public function logout()
    {
     $this->session->unset_userdata('id');
    redirect('airbnb');
    }

    public function blogs(){
        $data["blogs"] = $this->BlogModel->get_blogs();
        $data["categories"] = $this->BlogModel->get_category();
        $data['metas'] =  signup_meta();
        render('front/blogs', $data);
    }
    public function blog_detail(){
        $data["blog"] = $this->BlogModel->get_by_category_blogs($this->uri->segment(2));
        $data["categories"] = $this->BlogModel->get_category();
        $data['metas'] =  signup_meta();
        render('front/blog_detail', $data);
    }
    public function profile()
    {
        $profile = $this->HomeModel->getProfile($this->user_data->id);
        dd($profile );
    }
    public function error(){
        $this->output->set_status_header('404');
        $data['metas'] =  error_meta();
        $this->load->view('front/404', $data);
    }
    public function media() {
        $data['metas'] =  media_meta();
        $data['icon'] = "pe-7s-display2";
        $data['title'] = "Brand Logo";
        $data['tag'] = "Use mainly the color logo whenever possible to represent <strong>tecfare</strong>";
        $data['head'] =  'front/head';
        render('front/media_kit', $data);
    }
    public function cms()
    {
        $data["cms"] = $this->Home->getCmsbySlug($this->uri->segment(2));
        dd($data["cms"] );
    }

        public function subscribe(){
        $email   = $this->input->post('email',TRUE);
        $result = $this->Home->subscribe_email($email);
        $msg['success'] = false;
        $msg['type'] = 'subscribe';
        if($result){
            $msg['success'] = true;
        }
        echo json_encode($msg);
    }

}
