 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Register extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->library(array('form_validation'));
		$this->load->helper(array('url','form'));
		$this->load->model('Insert_Model');
	}

	public function index() {

		$this->load->view('register_view');
	}
	public function create() {

         $this->load->helper('url','form');  
         $this->load->library('form_validation');
         $this->load->model('Insert_Model');
         $this->form_validation->set_rules('nama', 'Nama','trim|required');
         $this->form_validation->set_rules('alamat', 'Alamat','trim|required');
         $this->form_validation->set_rules('email','Email','required|valid_email');
         $this->form_validation->set_rules('username', 'Username','trim|required');
         //$this->form_validation->set_rules('password','password','required');
         //$this->form_validation->set_rules('password_conf','password','trim|required|matches[password]');
         if($this->form_validation->run() == FALSE) {
             $this->load->view('register_view');
         }else{
 
            $this->Insert_Model->insert();
            $this->load->view('register_sukses');
         }
     }
}
 ?>