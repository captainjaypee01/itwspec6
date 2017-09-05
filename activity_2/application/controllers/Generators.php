<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Generators extends CI_Controller {

    public function index(){
        
        $this->load->view('generators/includes/header');
        $this->load->view('generators/first');
        $this->load->view('generators/includes/footer');
    }

    public function first(){
        $this->load->view('generators/includes/header');
        $this->load->view('generators/first');
        $this->load->view('generators/includes/footer');
        
    }
    
    public function second(){
        $this->load->view('generators/includes/header');
        $this->load->view('generators/second');
        $this->load->view('generators/includes/footer');
        
    }
  
    public function third(){
        $this->load->view('generators/includes/header');
        $this->load->view('generators/third');
        $this->load->view('generators/includes/footer');
        
    }
    
}

