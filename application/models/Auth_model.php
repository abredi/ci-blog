<?php
class Auth_model extends CI_Model
{
  public function __construct()
  {
    $this->load->database();
  }

  public function login()
  {
    $query = $this->db->get_where('users', [
      'username' => $this->input->post('inputEmail'),
      'password' => $this->input->post('inputPassword')
    ]);
    // print_r($query->result_array()); die;
    if (count($query->result_array()) > 0) {
      $this->session->set_userdata('is_logged_in', true);
      return true;
    }
      return false;
    
  }

  public function signup()
  {

    $data = array(
      'username' => $this->input->post('inputEmail'),
      'password' => $this->input->post('inputPassword')
    );


    return $this->db->insert('users', $data);
  }
}
