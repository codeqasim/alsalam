<?php

class Airbnb extends MX_Controller {

    public function index()
    {
    	$this->theme->view('modules/airbnb/home');
    }

    // public function list()
    // { 
    // $this->theme->view('modules/airbnb/listing');

    // }

     public function details()
    { 
    $this->theme->view('modules/airbnb/detail');
    
    }

    public function booking()
    { 
    $this->theme->view('modules/airbnb/booking');
    }


    public function help()
    { 
    $this->theme->view('modules/airbnb/help');
    
    }

    public function policies()
    { 
    $this->theme->view('modules/airbnb/policies');
    }

    public function reservation()
    { 
    $this->theme->view('modules/airbnb/reservation');
    
    }

}