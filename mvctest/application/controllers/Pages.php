<?php

class Pages extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('mymath');
    }

    public function view($page = 'home'){

        $data['title'] = 'Brad Super Big Company';
        $data['result'] = $this->mymath->add(100,3);

        $this->load->view('templates/header', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer', $data);
    }
}

?>