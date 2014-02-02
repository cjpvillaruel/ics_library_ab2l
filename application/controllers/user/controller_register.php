<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
Author: Aristotle Martinez
Controller for Registration
Includes PHP Validation per item
Reference: CI User Guide
*/


class Controller_register extends CI_Controller{
 public function __construct()
 {
  parent::__construct();
  $this->load->model('model_register');
 }
 public function index()
 {
   $data['title']= 'Home';
   $this->load->view("user/view_registration.php", $data);
 }
 
 public function registration()
 {
  $this->load->library('form_validation');
  // field name, error message, validation rules
  $this->form_validation->set_rules('fname', 'First Name', 'trim|required|alpha|xss_clean');
  $this->form_validation->set_rules('minit', 'Middle Initial', 'trim|required|xss_clean');
  $this->form_validation->set_rules('lname', 'Last Name', 'trim|required|alpha|xss_clean');

   $this->form_validation->set_rules('stdNum', 'Student Number', 'trim|required|min_length[10]|alpha_dash|xss_clean');
  $this->form_validation->set_rules('college', 'College', 'trim|min_length[3]|alpha|xss_clean');
  $this->form_validation->set_rules('course', 'Course', 'trim|min_length[3]|xss_clean');
  $this->form_validation->set_rules('classi', 'Classification', 'trim|alpha|xss_clean');
  
  $this->form_validation->set_rules('eadd', 'Your Email', 'trim|required|valid_email');

  $this->form_validation->set_rules('uname', 'Username', 'trim|required|min_length[4]|alpha_dash|xss_clean');
  $this->form_validation->set_rules('pass', 'Password', 'trim|required|min_length[5]|max_length[32]|alpha_numeric');
  $this->form_validation->set_rules('cpass', 'Password Confirmation', 'trim|required|matches[pass]');

  if($this->form_validation->run() == FALSE)
  {
   $this->index();
   echo "Oops, something went wrong with your registration. Better Try Again";
  echo validation_errors(); 
  }
  else
  {
   $this->model_register->add_user();
  $this->load->view("user/view_register_Success.php");
  }
 }
 
}
?>