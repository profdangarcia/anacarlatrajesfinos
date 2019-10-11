<?php

    class Galeria_model extends CI_Model{

        
    
        function buscarVestidos(){
            $this->db->where("tipo",'Vestido' );
            return $this->db->get("galeria")->result();
        }

        function buscarTernos(){
            $this->db->where("tipo",'Terno' );
            return $this->db->get("galeria")->result();
        }

        
    }