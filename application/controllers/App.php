<?php
class App extends CI_Controller{
    function __construct(){
        parent::__construct();
    }
    function logout(){
        $data = array(
            'title'=>'PadiApp Login Page',
            'pagetitle'=>'Login',
            'pagesubtitle'=>'padi Internet',
            'breadcrumbs'=>array(
                'first'=>'Home',
                'firsturl'=>'/',
                'second'=>'Admin',
                'secondurl'=>'/admin_users',
                'third'=>'Users',
                'thirdurl'=>'/admin_users',
            ),
        );
        $this->load->view('admin/login_soft',$data);
    }
    function login_handler(){
        redirect('admin_users');
    }
    function lock(){
        $data = array(
            'title'=>'PadiApp Lock'
        );
        $this->load->view('admin/extra_lock',$data);
    }
}