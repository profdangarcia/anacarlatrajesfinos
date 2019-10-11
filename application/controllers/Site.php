<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {


	function __construct(){
		parent::__construct();
		$this->load->model("galeria_model", "galeria");
	}

	public function index($check = '')
	{
		$vetor['check'] = $check;
		$this->load->view('template/principal2', $vetor);
		
	
	}

	public function vestidos(){
		$vetor['fotos'] = $this->galeria->buscarVestidos();
		$this->template->load("template/simples2", "site/galeria", $vetor );
	}

	public function ternos(){
		$vetor['fotos'] = $this->galeria->buscarTernos();
		$this->template->load("template/simples2", "site/galeria", $vetor );
	}


}
