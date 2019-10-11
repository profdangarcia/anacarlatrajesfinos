<?php

    class Cliente extends CI_Controller {
        

        
        function __construct() {
            parent::__construct();
            //carregando a biblioteca de controle de acesso criada
            $this->load->library('controle_acesso');
            //utilizando a função de controlar
            $this->controle_acesso->controlar();
           
        }

        public function index() {
            
            $crud = new Grocery_CRUD();
            
            $crud->set_table('cliente');
            
            //Altera o texto que segue os campos como Adicionar, Alterar
            $crud->set_subject('Cliente');

           $crud->fields('nome', 'sobrenome', 'cpf_cnpj', 'rg_ie', 'data_nascimento', 'sexo', 'endereco', 'end_numero', 'end_complemento', 'bairro',  'cidade', 'estado', 'cep', 'email', 'tel1', 'tel2', 'cel', 'obs');

            $crud->required_fields('nome', 'sobrenome', 'cpf_cnpj');
            $crud->unique_fields('cpf_cnpj');
            
            $estados = array( "AC", "AL", "AM", "AP", "BA", "CE", "DF", "ES", "GO", "MA", "MT", "MS", "MG", "PA", "PB", "PR", "PE", "PI", "RJ", "RN", "RO", "RS", "RR", "SC", "SE", "SP", "TO" );
            $crud->field_type('sexo', 'enum', array('M', 'F'));
            $crud->field_type('estado', 'enum', $estados);

            $crud->display_as('endereco', 'Endereço');
            $crud->display_as('end_numero', 'Número');
            $crud->display_as('end_complemento', 'Complemento');
            $crud->display_as('cep', 'CEP');

           
            $crud->display_as('email', 'E-mail');
            $crud->display_as('tel1', 'Telefone 1');
            $crud->display_as('tel2', 'Telefone 2');
            $crud->display_as('cel', 'Celular');

            $crud->display_as('cpf_cnpj', 'CPF/CNPJ');
            $crud->display_as('data_nascimento', 'Data de Nascimento');
            $crud->display_as('rg_ie', 'RG/IE');

            $crud->display_as('obs', 'Observações');

            $crud->columns('nome', 'sobrenome', 'cpf_cnpj', 'obs');
            
         
            //renderiza um formulario, deve ser a ultima configuração
            $form = $crud->render();

            //carregar uma view criada e passamos para a visão a variável que é um objeto renderizado
            
            $this->template->load('template/restrito', 'crud/index', $form);

       
        }

   
    }

?>