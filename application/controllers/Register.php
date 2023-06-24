<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    public function index() {
        $this->load->view('login/login');
    }

    public function process_register() {
    // Load form validation library
    $this->load->library('form_validation');

    // Set rules for form validation
    $this->form_validation->set_rules('username', 'Username', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required');

    if ($this->form_validation->run() === FALSE) {
        // Validation failed, show the registration form again with error messages
        $this->load->view('login/login');
    } else {
        // Validation successful, process the registration
        $this->load->model('register_model');

        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));

        // Check if username already exists
        if ($this->register_model->is_username_exists($username)) {
		// redirect('login');
			$this->session->set_flashdata('error', 'Akun sudah terdaftar!');
			redirect('login');
        } else {
            $this->register_model->register_user($username, $password);
          //   redirect('dashboard');
		// $this->load->view('dasbor/dasbor');
		// redirect('login');
		echo 'Berhasil register, silahkan login!';
        }
    }
}

}