<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{


    public function index()
    {
        $data = [
            'title' => 'Admin',
            'isi' => 'v_admin'
        ];

        $this->load->view('layout/v_wrapper_backend', $data, false);
    }
}
