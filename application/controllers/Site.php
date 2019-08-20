<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

	
	function __construct () {
		
		parent::__construct();
		$this->load->helper('url');
		
	}

	public function index()
	
	{	

		$this->db->select('*');

		//array de configuração da pagina
		$dados = array(	 
			"pagina" => "guests",
			"pagina_js" => "guests.js",
			"pagina_css" => "guests.css",
			"all_guest" => $this->db->get("vw_allgest")->result_array(),
			"recent_gest" => $this->db->get("vw_recent_gest")->result_array()
		);
		
		$this->load->view('site',$dados);
		
	}


	public function new_guest()	{

		//array de configuração da pagina
		$dados = array(	 
			"pagina" => "new_guest",
			"pagina_js" => "new_guest.js",
			"pagina_css" => "new_guest.css"
		);
		
		$this->load->view('site',$dados);
		
	}

	public function register_guest(){
		
		//obtendo os dados enviados por post
		$data['FirstName'] = $this->input->post('inputFirstName');
		$data['LastName'] = $this->input->post('inputLastName');
		$data['Email'] = $this->input->post('inputEmail');
		$data['Phone'] = $this->input->post('inputPhone');
		$data['Sex'] = $this->input->post('inputSex');
		$data['Country'] = $this->input->post('inputCountry');
		$data['City'] = $this->input->post('inputCity');
		$data['Address'] = $this->input->post('inputAddress');
		$data['IDGroup'] = $this->input->post('inputGroup');

		if ($this->db->insert("tblguest" , $data )) {

			header('Location: '.base_url());

		}

	}

	public function get_guest(){	

		$user_id = $this->input->get('user_id');	

		$this->db->select('*');
		
		$this->db->where("IDGuest = ".$user_id);

		$dados =  $this->db->get("vw_gest")->result_array();

		echo json_encode($dados, JSON_UNESCAPED_UNICODE);
				
	}

	public function update_group(){	

		$iduser = $this->input->get('iduser');
		$idgroup = $this->input->get('idgroup');	
		
		$this->db->where("IDGuest = ".$iduser);
		$this->db->set('IDGroup',$idgroup);

		if ($this->db->update("tblguest" )) {
			echo 1;
		}
				
	}	

}
