<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['data_featured'] = $this->model_native->get_featured();
		$data['data_quote'] = $this->model_native->get_quote();
		$data['data_chooseus'] = $this->model_native->get_chooseus();
		$data['data_contact'] = $this->model_native->get_contact();
		$data['data_left_footer'] = $this->model_native->get_left_footer();
		$data['data_right_footer'] = $this->model_native->get_right_footer();
		$html_title ="NATIVE SPEAKER | Language School";
		$this->load->vars( array( 'html_title' => $html_title) );
		
		$this->load->view('home',$data);
		
	}

	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */