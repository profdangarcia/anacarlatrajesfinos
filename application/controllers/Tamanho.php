<?php

    class Tamanho extends CI_Controller {
        

        
        function __construct() {
            parent::__construct();
            //carregando a biblioteca de controle de acesso criada
            $this->load->library('controle_acesso');
            //utilizando a função de controlar
            $this->controle_acesso->controlar();
        }


        public function index() {
            
            $crud = new Grocery_CRUD();
            
            $crud->set_table('tamanho');
            
            //Altera o texto que segue os campos como Adicionar, Alterar
            $crud->set_subject('Tamanhos');

            $crud->required_fields('descricao');
            $crud->unique_fields('descricao');
            $crud->display_as('descricao', 'Descrição');

            //renderiza um formulario, deve ser a ultima configuração
            $form = $crud->render();

            //carregar uma view criada e passamos para a visão a variável que é um objeto renderizado
            
            $this->template->load('template/restrito', 'crud/index', $form);

       
        }

        

    }

?>