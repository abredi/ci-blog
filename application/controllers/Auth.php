<?php
class Auth extends CI_Controller
{
  public function __construct()
  { 
    parent::__construct();
    $this->load->helper('form');
  }

  public function index()
  {
    $data['brand'] = 'Crescent';
    $this->load->view('templates/header', $data);
    $this->load->view('auth/login');
    $this->load->view('templates/footer');
  }
}
