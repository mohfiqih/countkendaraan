<?php
class Login extends CI_Controller
{
    public function index()
    {
        $this->load->view('login/login');
    }

    public function process_login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $this->load->model('User_model');
        $user = $this->User_model->get_user($username, $password);

        if ($user) {
            // Login berhasil
            $data['username'] = $user->username;
			redirect('dashboard');
            // $this->load->view('dasbor/dasbor', $data);
        } else {
            // Login gagal
            $this->session->set_flashdata('error', 'Username atau password salah.');
            redirect('login');
        }
    }
}
?>