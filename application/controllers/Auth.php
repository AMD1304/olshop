<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function login_user()
    {
        $data = [
            'title' => 'Login'

        ];

        $this->load->view('v_login_user', $data, false);
    }
}
