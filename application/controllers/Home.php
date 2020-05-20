<?php

class Home extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Tanaman_model');
    }

    public function index(){
        $data['judul'] = 'Home';
        $data['tanaman'] = $this->Tanaman_model->getTanaman();
        $this->load->view('template/header', $data);
        $this->load->view('template/navbar');
        $this->load->view('template/sidebar');
        $this->load->view('home/index', $data);
        $this->load->view('home/desc', $data);
        $this->load->view('home/control');
        $this->load->view('template/footer');
    }
}