<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');

		$this->load->library('grocery_CRUD');
	}

	public function show_output($output = null)
	{
		$this->load->view('admin/content_wrapper',$output);
	}

	

	public function index()
	{
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('stts')=="administrator")
		{
		$data['data_featured'] = $this->model_native->get_featured();
		$data['data_quote'] = $this->model_native->get_quote();
		$data['data_chooseus'] = $this->model_native->get_chooseus();

		$html_title ="NATIVE SPEAKER | Language School";
		$this->load->vars( array( 'html_title' => $html_title) );

		$page_header ="Home Content";
		$this->load->vars( array( 'page_header' => $page_header) );

		$this->load->view('admin/home',$data);		
		}
		else
		{
			redirect('auth');
		}
	}

	public function about()
	{
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('stts')=="administrator")
		{
			$crud = new grocery_CRUD();
			$crud->set_table('tbl_about');
			$crud->set_theme('datatables');
			$crud->set_subject('About');
			$crud->unset_add();
			$crud->unset_delete();
			$crud->unset_print();
			$crud->unset_export();
			$html_title ="NATIVE SPEAKER | Language School";
		$this->load->vars( array( 'html_title' => $html_title) );

		$page_header ="Home Content";
		$this->load->vars( array( 'page_header' => $page_header) );
			$output = $crud->render();
			$this->show_output($output);
			}
		else
		{
			redirect('auth');
		}

	}

	public function facilities()
	{
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('stts')=="administrator")
		{
			$crud = new grocery_CRUD();
			$crud->set_table('tbl_facilities');
			$crud->set_theme('datatables');
			$crud->set_subject('Facilities');
			
			$crud->unset_delete();
			$crud->unset_print();
			$crud->unset_export();
			$html_title ="NATIVE SPEAKER | Language School";
		$this->load->vars( array( 'html_title' => $html_title) );

		$page_header ="Home Content";
		$this->load->vars( array( 'page_header' => $page_header) );
			$output = $crud->render();
			$this->show_output($output);
			}
		else
		{
			redirect('auth');
		}
	}

	public function class_study()
	{
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('stts')=="administrator")
		{
			$crud = new grocery_CRUD();
			$crud->set_table('tbl_classstudy');
			$crud->set_theme('datatables');
			$crud->set_subject('Class Study');
			$crud->set_field_upload('file_url','assets\uploads\files');
			$crud->unset_delete();
			$crud->unset_print();
			$crud->unset_export();
			$html_title ="NATIVE SPEAKER | Language School";
		$this->load->vars( array( 'html_title' => $html_title) );

		$page_header ="Home Content";
		$this->load->vars( array( 'page_header' => $page_header) );
			$output = $crud->render();
			$this->show_output($output);
			}
		else
		{
			redirect('auth');
		}
	}

	public function contact()
	{
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('stts')=="administrator")
		{
			$crud = new grocery_CRUD();
			$crud->set_table('tbl_contactus');
			$crud->set_theme('datatables');
			$crud->set_subject('Contact Us');
			$crud->set_field_upload('file_url','assets\uploads\files');
			$crud->unset_delete();
			$crud->unset_print();
			$crud->unset_export();
			$html_title ="NATIVE SPEAKER | Language School";
		$this->load->vars( array( 'html_title' => $html_title) );

		$page_header ="Home Content";
		$this->load->vars( array( 'page_header' => $page_header) );
			$output = $crud->render();
			$this->show_output($output);
			}
		else
		{
			redirect('auth');
		}
	}

	public function featured()
	{
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('stts')=="administrator")
		{
			$crud = new grocery_CRUD();
			$crud->set_table('tbl_featured');
			$crud->set_theme('datatables');
			$crud->set_subject('Featured');
			$crud->set_field_upload('file_url','assets\uploads\files');
			$crud->unset_add();
			$crud->unset_delete();
			$crud->unset_print();
			$crud->unset_export();
			$html_title ="NATIVE SPEAKER | Language School";
		$this->load->vars( array( 'html_title' => $html_title) );

		$page_header ="Home Content";
		$this->load->vars( array( 'page_header' => $page_header) );
			$output = $crud->render();
			$this->show_output($output);
			}
		else
		{
			redirect('auth');
		}
	}

	public function quote()
	{
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('stts')=="administrator")
		{
			$crud = new grocery_CRUD();
			$crud->set_table('tbl_quote');
			$crud->set_theme('datatables');
			$crud->set_subject('Quote');
			$crud->set_field_upload('file_url','assets\uploads\files');
			$crud->unset_delete();
			$crud->unset_add();
			$crud->unset_print();
			$crud->unset_export();
			$html_title ="NATIVE SPEAKER | Language School";
		$this->load->vars( array( 'html_title' => $html_title) );

		$page_header ="Home Content";
		$this->load->vars( array( 'page_header' => $page_header) );
			$output = $crud->render();
			$this->show_output($output);
			}
		else
		{
			redirect('auth');
		}
	}

	public function choose_us()
	{
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('stts')=="administrator")
		{
			$crud = new grocery_CRUD();
			$crud->set_table('tbl_chooseus');
			$crud->set_theme('datatables');
			$crud->set_subject('Choose Us');
			$crud->set_field_upload('file_url','assets\uploads\files');
			$crud->unset_add();
			$crud->unset_delete();
			$crud->unset_print();
			$crud->unset_export();
			$html_title ="NATIVE SPEAKER | Language School";
		$this->load->vars( array( 'html_title' => $html_title) );

		$page_header ="Home Content";
		$this->load->vars( array( 'page_header' => $page_header) );
			$output = $crud->render();
			$this->show_output($output);
			}
		else
		{
			redirect('auth');
		}
	}

	public function left_footer()
	{
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('stts')=="administrator")
		{
			$crud = new grocery_CRUD();
			$crud->set_table('tbl_footer_1');
			$crud->set_theme('datatables');
			$crud->set_subject('Left Footer');
			$crud->set_field_upload('file_url','assets\uploads\files');
			
			$crud->unset_print();
			$crud->unset_export();
			$html_title ="NATIVE SPEAKER Language School - Left Footer";
			$this->load->vars( array( 'html_title' => $html_title) );
			$page_header ="Left Footer";
			$this->load->vars( array( 'page_header' => $page_header) );
			$output = $crud->render();
			$this->show_output($output);
		}
		else
		{
			redirect('auth');
		}
	}

	public function right_footer()
	{
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('stts')=="administrator")
		{
			$crud = new grocery_CRUD();
			$crud->set_table('tbl_footer_3');
			$crud->set_theme('datatables');
			$crud->set_subject('Right Footer');
			$crud->set_field_upload('file_url','assets\uploads\files');
			$crud->unset_add();
			$crud->unset_delete();
			$crud->unset_print();
			$crud->unset_export();
			$html_title ="NATIVE SPEAKER Language School - Right Footer";
			$this->load->vars( array( 'html_title' => $html_title) );
			$page_header ="Right Footer";
			$this->load->vars( array( 'page_header' => $page_header) );
			$output = $crud->render();
			$this->show_output($output);
		}
		else
		{
			redirect('auth');
		}
	}


  
	function edit_profile()
	{

			$data['data_profile'] = $this->model_native->get_profile();
			$data['judul']	    ='Ubah Profil';
			$data['output']	=$this->load->view('admin/ubah_profil',$data,TRUE);
			$this->load->view('admin/content_wrapper_home',$data);
			
	}

	

	

}