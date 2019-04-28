<?php
class Auth extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->helper('form');
    $this->load->model('auth_model');
  }

  public function login()
  {
    $this->load->library('form_validation');

    $data['page'] = 'Login';
    $data['brand'] = 'Crescent';

    $this->form_validation->set_rules('inputPassword', 'Password', 'required');
    $this->form_validation->set_rules('inputEmail', 'Email', 'required|valid_email');

    if ($this->form_validation->run() === FALSE) {
      $this->load->view('templates/header', $data);
      $this->load->view('auth/login', $data);
      $this->load->view('templates/footer');
    } else {
      if ($this->auth_model->login()) {
        redirect('news');
      } else {
        $this->session->set_flashdata(
          'alert',
          [
            'type' => 'danger',
            'msg' => "Wrong username or password"
          ]
        );
        redirect('auth/login');
      }
    }
  }

  public function logout()
  {
    // $this->session->destroy();
    unset($_SESSION['is_logged_in']);
    redirect('auth/login');
  }

  public function signup()
  {
    $this->load->library('form_validation');

    $data['page'] = 'Sign Up';
    $data['brand'] = 'Crescent';

    $this->form_validation->set_rules('inputPassword', 'Password', 'trim|required||min_length[5]|max_length[255]');
    $this->form_validation->set_rules('inputEmail', 'Email', 'trim|required|valid_email|is_unique[users.username]|max_length[255]');

    if ($this->form_validation->run() === FALSE) {
      $this->load->view('templates/header', $data);
      $this->load->view('auth/signup', $data);
      $this->load->view('templates/footer');
    } else {
      if ($this->auth_model->signup()) {
        $this->session->set_flashdata(
          'alert',
          [
            'type' => 'success',
            'msg' => "You account created succesdfully please login"
          ]
        );
        redirect('auth/login');
      } else {
        redirect('auth/signup');
      }
    }
  }
}
