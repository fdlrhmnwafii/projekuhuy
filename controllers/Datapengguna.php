<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datapengguna extends CI_Controller {
    public function index(){
        $this->load->model('users_model','users');

        $list_users = $this->users->getAll();
        $data['list_users'] = $list_users;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('datapengguna/index',$data);
        $this->load->view('layout/footer');
        
    }
    public function view(){
        $_username = $this->input->get('id');
        $this->load->model('users_model','users');
        $data['usr']=$this->users->findById($_username);

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('datapengguna/view',$data);
        $this->load->view('layout/footer');


    }
    public function delete(){
        $_id = $this->input->get('id'); 
        $this->load->model('users_model','users');
        $this->users->delete($_id);
        redirect(base_url(). 'index.php/datapengguna','refresh');
    }
}

?>