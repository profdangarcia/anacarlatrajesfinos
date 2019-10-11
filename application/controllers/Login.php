<?php


class Login extends CI_Controller {


	public function index()
	{
		$this->template->load("template/simples2", "login/form" );
	
	}

	public function entrar(){

		$login = $this->input->post('login');
		$senha = md5($this->input->post('senha'));
		//o correto seria criar um modelo para receber os dados da busca
		$this->db->where('login', $login);
		$this->db->where('senha', $senha);
		$query = $this->db->get('usuario');

		if($query->num_rows() == 1){
			//criando uma sessão com o nome do usuário (lembrar habilitar session em autoload)
			$usuario = $query->row();
			//usuario é o nome dado a variável de sessão
			$this->session->set_userdata("usuario", $usuario->nome);
			$this->session->set_userdata("idusuario", $usuario->idusuario);
			$this->session->set_userdata("fotoperfil", $usuario->foto_perfil);
			redirect("bemvindo/index");
		}else{
			redirect("login/index");
		}
	}

	public function sair(){
		$this->session->set_userdata("usuario", '');
		redirect("site/index");
	}
}
