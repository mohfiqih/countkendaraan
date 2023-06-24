<?php
class Dashboard extends CI_Controller
{
    public function index()
    {
        $username = $this->session->userdata('username');
		$data['username'] = $username;
        $this->load->view('dasbor/dasbor', $data);
        // if ($username) {
        //     $data['username'] = $username;
        //     $this->load->view('dasbor/dasbor', $data);
        // } else {
        //     redirect('login');
        // }
    }

	
}
?>
