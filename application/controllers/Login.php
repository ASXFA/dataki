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

	function changePassword()
	{
		$this->load->library('form_validation');
		$this->load->view('template/header');
        $this->load->view('changePassForm');
        $this->load->view('template/footer');
	}

	function action_changePass()
	{
		$this->load->library('form_validation');
		$this->_rules();
		if ($this->form_validation->run() == FALSE) {
			$this->changePassword();
		}else{
			$uname = $this->session->userdata('NO_USER');
			$psw_lama = $this->input->post('PASSWORD_LAMA');
			$cek = $this->M_users->loginCek($uname,$psw_lama);
			if ($cek->num_rows() > 0) {
				$psw_baru = $this->input->post('PASSWORD_BARU');
				$psw_conf = $this->input->post('PASSWORD_KONFIRMASI');
				if ($psw_baru == $psw_conf) {
					$id = $this->session->userdata('ID_USER');
					$query = $this->M_users->gantiPassword($id,$psw_baru);
					$this->session->set_flashdata('cpAlert','Password Berhasi; diganti !');
					redirect('login/logout');
				}else{
					$this->session->set_flashdata('cpAlert','Password baru dan konfirmasi tidak cocok !');
					redirect('login/changePassword');
				}
			}else{
				$this->session->set_flashdata('cpAlert','Password Lama anda Salah !');
				redirect('login/changePassword');
			}
		}
	}

	function logout(){
		$array_items = array('ID_USER,NO_USER,NAME,EMAIL,NO_TELP,LEVEL,PASSWORD');
		$this->session->unset_userdata($array_items);
		$this->session->sess_destroy();
		redirect('mainmenu');
	}
	public function _rules() 
    {
		$this->form_validation->set_rules('PASSWORD_LAMA', 'Password Lama', 'trim|required');
		$this->form_validation->set_rules('PASSWORD_BARU', 'Password Baru', 'trim|required');
		$this->form_validation->set_rules('PASSWORD_KONFIRMASI', 'Password Konfirmasi', 'trim|required');
		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

?>