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


  
	function manage_user()
	{
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('stts')=="administrator")
			{
				$data['data_profile'] = $this->model_native->get_profile();
				$data['judul']	    ='Ubah Profil';
				$html_title ="Manage User";
				$this->load->vars( array( 'html_title' => $html_title) );
				$data['output']	=$this->load->view('admin/manage_user',$data,TRUE);
				$this->load->view('admin/content_wrapper_home',$data);
			}
			else {
				redirect('auth');		
			}
			
	}

	function add_user()
	{

			if($this->session->userdata('logged_in')!="" && $this->session->userdata('stts')=="administrator")
			{
				$d['id_param'] = "";
				$d['username'] = ""; 
				$d['password'] = ""; 
				$d['nama_lengkap'] = ""; 
				$d['st'] = "tambah";
				//$this->load->view('dashboard_admin/user/input',$d);
				$d['output']	=$this->load->view('admin/add_user',$d,TRUE);
				$html_title ="Add User";
				$this->load->vars( array( 'html_title' => $html_title) );
				$this->load->view('admin/content_wrapper_home',$d);
			}
			else
			{
				redirect('auth');
			}
	}

	public function simpan()
	{
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('stts')=="administrator")
		{


			$in['username'] = $this->input->post("username");
						$in['nama_lengkap'] = $this->input->post("nama_lengkap");
						$in['stts'] = "administrator";
						$in['password'] = md5($this->input->post("password").'AppSimpeg32');
						$this->db->insert("tbl_user_login",$in);
						redirect('admin/manage_user');

		}
		else {
			redirect('auth');
		}
			
	}

	public function hapus()
	{
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('stts')=="administrator")
		{
			$id['id_user_login'] = $this->uri->segment(3);
			$this->db->delete("tbl_user_login",$id);
			redirect('admin/manage_user');
		}
		else
		{
			redirect('auth');
		}
	} 

	public function edit()
	{
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('stts')=="administrator")
		{
			$id['id_user_login'] = $this->uri->segment(3);
			$q = $this->db->get_where("tbl_user_login",$id);
			$d = array();
			foreach($q->result() as $dt)
			{
				$d['id_user_login'] = $dt->id_user_login;
				$d['username'] = $dt->username; 
				$d['password'] = $dt->password; 
				$d['nama_lengkap'] = $dt->nama_lengkap; 
			}
			$d['st'] = "edit";
			$d['output']	=$this->load->view('admin/edit_user',$d,TRUE);
			$html_title ="NATIVE SPEAKER Language School - Edit Profile";
			$this->load->vars( array( 'html_title' => $html_title) );
			$this->load->view('admin/content_wrapper_home',$d);
		}
		else
		{
			redirect('auth');
		}
	}

	public function simpan_edit()
	{
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('stts')=="administrator")
		{
			//$id['id_user_login'] = $this->uri->segment(3);
			$id['id_user_login'] = $this->input->post("id_user_login");
			$upd['username'] = $this->input->post("username");
			$upd['nama_lengkap'] = $this->input->post("nama_lengkap");
			if($this->input->post("password")!="")
				{
					$upd['password'] = md5($this->input->post("password").'AppSimpeg32');
				}
				$this->db->update("tbl_user_login",$upd,$id);
				redirect('admin/manage_user');
		}
		else {
			redirect('auth');
		}
	}

	

	

	

}