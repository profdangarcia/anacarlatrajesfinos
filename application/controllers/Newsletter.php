<?php

    class Newsletter extends CI_Controller{
        
        //a função construct será carregada em todas os métodos desta classe
        public function __construct(){
            parent::__construct();

            //primeiro parametro é o nome do modelo e o segundo o apelido que usarei
            $this->load->model("News_model", "news");
        }


        public function index(){

            if($this->input->post('submit') != NULL ){
                $verifica = $this->news->select_email($this->input->post('email'));
                if($verifica == NULL){
                    $this->news->inserir_email();
                    redirect(site_url('site/index/ok'));
                }
                else{
                    redirect(site_url('site/index/nok'));
                }
            } else{
                redirect(site_url('site/'));
            }


           
           

        }

       
    }
?>