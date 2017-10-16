<?php
class Model_Accueil extends CI_Model{
    
    public function getAllSecteurs(){
         $sql=$this->db->query("select * from secteur");
        return $sql->result();
    }
    
    public function getAllRayons($numero){
         $sql = $this->db->query("select * from rayon where numSecteur=".$numero);
         $tab=array();
         foreach ($sql->result()as $row){
             $tab[]=$row;
         }
       return $tab;
    }
    
    public function getAllEmploye($numR){
        $sql=$this->db->query("SELECT * FROM employe, rayon, travailler WHERE travailler.codeR=rayon.numR AND travailler.codeE=employe.numE AND numR =".$numR);

        $tab=array();
         foreach ($sql->result()as $row){
             $tab[]=$row;
         }
       return $tab;
    }
    
    public function getAllTempsTotal($numR){
          $sql=$this->db->query("SELECT temps FROM employe, rayon, travailler WHERE travailler.codeR=rayon.numR AND travailler.codeE=employe.numE AND numR =".$numR);
         $tab=array();
         foreach ($sql->result()as $row){
             $tab[]=$row;
         }
       return $tab;
    }
}