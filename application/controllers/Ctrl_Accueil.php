<?php
class Ctrl_Accueil extends CI_Controller{
     function __construct() { 
         parent::__construct(); 
         $this->load->helper('url'); 
         $this->load->database();
         $this->load->model("Model_Accueil");
        } 
    
    public function index(){
        $data['lesSecteurs']=$this->Model_Accueil->getAllSecteurs();
        $data["lesRayons"] = $this->Model_Accueil->getAllRayons($data['lesSecteurs'][0]->numS);
        $data["lesEmployes"] = $this->Model_Accueil->getAllEmploye($data["lesRayons"][0]->numR);
        $this->load->view('v_acceuil',$data);
    }
    
    public function afficherRayons(){
           $numSecteur =$_GET['numSecteur']; 
           $data["lesRayons"] = $this->Model_Accueil->getAllRayons($numSecteur);
           
           $this->load->view('v_rayons',$data);
     }
    
     public function AfficherEmployes(){
           $numR =$_GET['numR']; 
//           var_dump($numR);
//           die;
           $data["lesEmployes"] = $this->Model_Accueil->getAllEmploye($numR);
           $this->load->view('v_employes',$data);
     }
     
     public function AfficherTempsTotal(){
         $numR =$_GET['numR'];
         $data["lesTempsTotal"] = $this->Model_Accueil->getAllTempsTotal($numR);
         $this->load->view('v_temps',$data);
     }
}