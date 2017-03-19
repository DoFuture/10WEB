<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project extends CI_Controller {
    public function __construct(){
    	parent::__construct();
    	$this->load->library('session');
    }

    public function index()
    {  
       if(isset($this->session->userdata['info'])){
          $data = array(
          "user" => $this->session->userdata['info'][0]
          );
       }; 

       $this->load->view('/project/project');
    }   
}

?>


