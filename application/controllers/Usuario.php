<?php

    class Usuario extends CI_Controller {
        

        
        function __construct() {
            parent::__construct();
            //carregando a biblioteca de controle de acesso criada
            $this->load->library('controle_acesso');
            //utilizando a função de controlar
            $this->controle_acesso->controlar();
        }


        public function index() {
            
            $crud = new Grocery_CRUD();
            //alterando o tema
			// $crud->set_theme('tablestrap');
			
            //definir a tabela do banco de dados
            $crud->set_table('usuario');
            
            //Altera o texto que segue os campos como Adicionar, Alterar
            $crud->set_subject('Usuários');

            //definir os campos que estarão presentes no formulario de adição e edição 
            //também definea ordem que irão aparecer
            //também é possível adicionar um campo que não existe, como o confirma abaixo
            $crud->fields( 'nome', 'sobrenome', 'login', 'senha', 'confirma', 'foto_perfil');         
            // $crud->edit_fields('nome', 'login');   //somente para edição

            $crud->set_field_upload('foto_perfil');

            //definir quais colunas do baco de dados serão exibidas na listagem
            $crud->columns('nome',  'foto_perfil');

            //definir os campos obrigatórios do formulário
            $crud->required_fields('nome', 'login', 'senha', 'confirma');

            //definir campos que não podem se repetir no banco de dados
            $crud->unique_fields('login');


            //alterar o tipo de um campo (tipo de banco de dados) -- field_type('campo', 'tipo_campo')
            $crud->field_type('senha', 'password');
            $crud->field_type('confirma', 'password');

            //criando regras de validação (procurar google code igniter validation form)
         
            $crud->set_rules("confirma", "Confirma Senha", "matches[senha]|min_length[6]");

            //alterar como o campo será exibido
            $crud->display_as('confirma', 'Confirmar Senha');
            $crud->display_as('foto_perfil', 'Foto de Perfil');
            $crud->display_as('login', 'Usuário');

            //remover o campo de confirmar senha para que não tente salvar no banco de dados
            //antes de inserir será executada a função definida, no caso: 'remove_confirma
            $crud->callback_before_insert( array($this, "remove_confirma") );
            $crud->callback_before_update( array($this, "remove_confirma") );

            

           
            //renderiza um formulario, deve ser a ultima configuração
            $form = $crud->render();

            //carregar uma view criada e passamos para a visão a variável que é um objeto renderizado
            
            $this->template->load('template/restrito', 'crud/index', $form);

            // $this->load->view('template/restrito');
        }

        // função para remover um campo para que não seja salvo no banco de dados
        // essa função receberá o post completo, removerá o campo de confirmação, 
        // criptografa a senha antes de salvar no banco, e retorna o restante
        public function remove_confirma($post_array){
            unset($post_array['confirma']);

            $post_array['senha'] = md5($post_array['senha']);

            return($post_array);
        }

    }

?>