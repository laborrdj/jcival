<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index(){

        $data['main'] = 'home_view';
        $this->load->view('layouts/main_view', $data);
    }

    public function about(){

        $data['main'] = 'about_view';
        $this->load->view('layouts/main_view', $data);
    }

    public function profile(){

        $data['main'] = 'profile_view';
        $this->load->view('layouts/main_view', $data);
    }

    public function program(){

        $data['main'] = 'program_view';
        $this->load->view('layouts/main_view', $data);
    }

    public function members(){

        $data['main'] = 'members_view';
        $this->load->view('layouts/main_view', $data);
    }

    public function historical(){

        $data['main'] = 'historical_view';
        $this->load->view('layouts/main_view', $data);
    }

    public function login(){

        $data['main'] = 'login_view';
        $this->load->view('layouts/main_view', $data);
    }

    public function registration(){

        $data['main'] = 'registration_view';
        $this->load->view('layouts/main_view', $data);
    }
}

?>