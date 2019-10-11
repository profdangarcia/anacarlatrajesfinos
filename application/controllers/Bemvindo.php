<?php

    class Bemvindo extends CI_Controller {
        

        
        function __construct() {
            parent::__construct();
            //carregando a biblioteca de controle de acesso criada
            $this->load->library('controle_acesso');
            //utilizando a função de controlar
            $this->controle_acesso->controlar();
        }


        public function index() {
            
           
            
            $this->template->load('template/restrito', 'restrito/bemvindo');

       
        }

        

    }

?>