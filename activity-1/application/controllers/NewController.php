<?php

class NewController extends CI_Controller {
    
    public function index(){
        $data = array('title'=>"HOMEPAGE",'message'=>"Hellow World!");
        $this->load->view('newcontroller/includes/header',$data);
        $this->load->view('newcontroller/index');
        $this->load->view('newcontroller/includes/footer');
    }
    
    public function function2(){
        $data = array('title'=>"HOMEPAGE",'message'=>"Hellow World!");
        $this->load->view('newcontroller/includes/header',$data);
        $this->load->view('newcontroller/function2');
        $this->load->view('newcontroller/includes/footer');
    }
    
    
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>