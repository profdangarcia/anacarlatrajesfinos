<?php

    class News_model extends CI_Model{

        
    
        function inserir_email(){
            $this->email = $this->input->post('email');
            $this->db->insert("newsletter", $this);
        }

        public function select_email($email){
            $this->db->where("email", $email);
            //row indica que será retornado apenas um item
            return $this->db->get('newsletter')->row();
        }
       
        
    }