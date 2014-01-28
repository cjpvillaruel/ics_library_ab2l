<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Controller_home extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('user_model','',TRUE);
        $this->load->helper('url');
        $this->load->library(array('form_validation','session'));
    }

 
    function index() {
        $this->load->helper(array('form','html'));
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];   
            $data['results']=$this->user_model->getUserInfo(  $data['username'] );
            
            $this->form_validation->set_rules('new_username', 'Username', 'callback_new_username_check');
            $this->load->view("user/view_header");
            $this->load->view("user/view_home", $data);    
      
        } else {
        //If no session, redirect to login page
            redirect('user/controller_login', 'refresh');
        }
    }


    //throws the data go from the db into  the view_profile
    function viewProfile() {
        $this->load->helper(array('form','html'));
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];   
            $data['results']=$this->user_model->getUserInfo(  $data['username'] );
            
            $this->form_validation->set_rules('new_username', 'Username', 'callback_new_username_check');
            $this->load->view("user/view_header");
            $this->load->view("user/view_profile", $data);    
      
        } else {
        //If no session, redirect to login page
            redirect('user/controller_login', 'refresh');
        }
    }
 
   
    function logout() {
         //remove all session data
         $this->session->unset_userdata('logged_in');
         $this->session->sess_destroy();
         redirect('user/controller_home', 'refresh');
     }


 
}
/* End of file home_controller.php */
/* Location: ./application/controllers/user/controller_home.php */