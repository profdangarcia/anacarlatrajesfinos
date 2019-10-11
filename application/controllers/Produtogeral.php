<?php

    class Produtogeral extends CI_Controller {
        

        
        function __construct() {
            parent::__construct();
            //carregando a biblioteca de controle de acesso criada
            $this->load->library('controle_acesso');
            //utilizando a função de controlar
            $this->controle_acesso->controlar();
        }


        public function index() {
            
            $crud = new Grocery_CRUD();
            
            $crud->set_table('produto');
            $crud->set_relation_n_n('ocasiao', 'produto_por_ocasiao', 'ocasiao', 'produto_idproduto', 'ocasiao_idocasiao', 'descricao');
            //Altera o texto que segue os campos como Adicionar, Alterar
            $crud->set_subject('Produtos (Geral)');

            $crud->required_fields('descricao','grupo_idgrupo', 'subgrupo_idsubgrupo');
            $crud->unique_fields('descricao');
            $crud->display_as('descricao', 'Descrição');

            $crud->fields('descricao', 'grupo_idgrupo', 'subgrupo_idsubgrupo', 'ocasiao');

            $crud->display_as('grupo_idgrupo', 'Grupo');
            $crud->display_as('subgrupo_idsubgrupo', 'Subgrupo');
            $crud->display_as('ocasiao', 'Ocasião');

            $crud->set_relation("grupo_idgrupo", "grupo", "descricao");
            $crud->set_relation("subgrupo_idsubgrupo", "subgrupo", "descricao");

            $crud->columns('descricao', 'grupo_idgrupo', 'subgrupo_idsubgrupo');
            //renderiza um formulario, deve ser a ultima configuração
            $form = $crud->render();

            //carregar uma view criada e passamos para a visão a variável que é um objeto renderizado
            
            $this->template->load('template/restrito', 'crud/index', $form);

       
        }

        

    }

?>