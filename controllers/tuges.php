
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tuges extends CI_Controller {

	public function index($value = 'konten')
	{
	$this->load->view('pages/'.$value);
	}

	public function coment()
	{
		$data['coment']=$this->input->post('message');
		$this->load->view('pages/konten', $data);
	}

}

/* End of file tuges.php */
/* Location: ./application/controllers/tuges.php */
 ?>