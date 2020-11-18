<?php  

/**
* 
*/
class Login extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model("M_users");
	}

	function index(){
		if (!empty($this->session->userdata("NO_USER")))
			redirect(base_url("dashboard"));

		$this->load->view("v_login");
	}

	function login_proses(){
		$username=$this->input->post("no_user");
		$password=($this->input->post("password"));
		$user=$this->M_users->login($username,$password);
		
		if ($user) {
			$this->session->set_userdata((array)$user);
			redirect(site_url("dashboard"));
		}else{
			redirect($this->index());
		}
	}

	function logout(){
		$array_items = array('ID_USER,NO_USER,NAME,EMAIL,NO_TELP,LEVEL,PASSWORD');
		$this->session->unset_userdata($array_items);
		$this->session->sess_destroy();
		redirect('mainmenu');
	}
}

?>