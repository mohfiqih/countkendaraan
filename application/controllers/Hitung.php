<?php
class Hitung extends CI_Controller
{
    public function index()
    {
        $username = $this->session->userdata('username');
	   $data['username'] = $username;
        $this->load->view('hitung/hitung', $data);
        
    }

	public function jbb()
    {
        $username = $this->session->userdata('username');
	   $data['username'] = $username;
        $this->load->view('hitung/jbb', $data);
        
    }

	public function pickupkijang()
    {
        $username = $this->session->userdata('username');
		$data['username'] = $username;
        $this->load->view('hitung/pickupkijang', $data);
    }
}
?>