<?php


    class Controle_acesso {

        public function controlar(){
            $CI = &get_instance();
            //definindo uma variável para a sessão
            $user = $CI->session->userdata('usuario');
            //caso não haja sessão redireciona para o controlador login
            if(empty($user)){
                redirect('login');
            }
        }
    }