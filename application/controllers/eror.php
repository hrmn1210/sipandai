<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        
        $this->load->helper(array('url'));
    }

    public function index()
    {
        $this->load->view('eror404.php');
    }
}