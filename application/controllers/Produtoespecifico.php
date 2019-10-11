<?php

    class Produtoespecifico extends CI_Controller {
        

        
        function __construct() {
            parent::__construct();
            //carregando a biblioteca de controle de acesso criada
            $this->load->library('controle_acesso');
            //utilizando a função de controlar
            $this->controle_acesso->controlar();
           
        }


        public function index() {
            
            $crud = new Grocery_CRUD();
            
            $crud->set_table('dados_produto');
            
            //Altera o texto que segue os campos como Adicionar, Alterar
            $crud->set_subject('Produtos (Específico)');

            $crud->required_fields('informacao','produto_idproduto',  'cor_idcor', 'tamanho_idtamanho');
            

            $crud->unique_fields('informacao');
            $crud->display_as('informacao', 'Descrição');
           

            $crud->fields('informacao', 'produto_idproduto', 'cor_idcor', 'tamanho_idtamanho', 'valor_primeiro_aluguel', 'valor_aluguel',  'foto_frente', 'foto_tras');

            

            $crud->display_as('cor_idcor', 'Cor');
            $crud->display_as('tamanho_idtamanho', 'Tamanho');
            $crud->display_as('produto_idproduto', 'Produto Associado');
            $crud->display_as('valor_primeiro_aluguel', 'Valor Primeiro Aluguel (R$)');
            $crud->display_as('valor_aluguel', 'Valor Aluguel (R$)');
            $crud->display_as('informacao', 'Informações Adicionais');
            $crud->display_as('foto_frente', 'Foto de Frente');
            $crud->display_as('foto_tras', 'Foto de Trás');

            $crud->set_relation("produto_idproduto", "produto", "descricao");
            $crud->set_relation("cor_idcor", "cor", "descricao");
            $crud->set_relation("tamanho_idtamanho", "tamanho", "descricao");

            $crud->set_field_upload('foto_frente');
            $crud->set_field_upload('foto_tras');

         

            $crud->columns('informacao', 'produto_idproduto', 'cor_idcor','tamanho_idtamanho', 'foto_frente', 'valor_aluguel', 'data_ultimo_aluguel' );
            
            $crud->callback_before_insert( array($this, "valor_float") );
            $crud->callback_before_update( array($this, "valor_float") );
            //renderiza um formulario, deve ser a ultima configuração
            $form = $crud->render();

            //carregar uma view criada e passamos para a visão a variável que é um objeto renderizado
            
            $this->template->load('template/restrito', 'crud/index', $form);

       
        }

        public function valor_float($post_array){
            
            
            $post_array['valor_primeiro_aluguel'] = floatval($post_array['valor_primeiro_aluguel']);
            $post_array['valor_aluguel'] = floatval($post_array['valor_aluguel']);
            echo $post_array['valor_primeiro_aluguel'];
            echo $post_array['valor_aluguel'];
            return($post_array);
        }
    }

?>