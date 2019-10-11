<?php

    class Galeria extends CI_Controller {
        

        
        function __construct() {
            parent::__construct();
            //carregando a biblioteca de controle de acesso criada
            $this->load->library('controle_acesso');
            //utilizando a função de controlar
            $this->controle_acesso->controlar();
           
        }


        public function index() {
            
            $crud = new Grocery_CRUD();
            
            $crud->set_table('galeria');
            
            //Altera o texto que segue os campos como Adicionar, Alterar
            $crud->set_subject('Galeria');

            $crud->fields('titulo', 'descricao', 'foto', 'tipo');

            $crud->required_fields('titulo', 'descricao', 'foto', 'tipo');
            

            $crud->display_as('titulo', 'Título');
            $crud->display_as('descricao', 'Descrição');
            $crud->display_as('foto', 'Foto');
            $crud->set_field_upload('foto');


            

             $crud->columns('titulo', 'foto', 'tipo');
           
            //renderiza um formulario, deve ser a ultima configuração
            $form = $crud->render();

            //carregar uma view criada e passamos para a visão a variável que é um objeto renderizado
            
            $this->template->load('template/restrito', 'crud/index', $form);

       
        }

    }

?>