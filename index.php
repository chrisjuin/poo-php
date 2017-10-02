<?php
    
    //creation de la classe "Perso"
    
    class Voiture 

    {
        private $_contenuReservoir = 0; 
        private $_indicateurReservoirRouge = true;
        
        //Méthode

        public function add contenuReservoir()
            {
            $this ->_contenuReservoir += $contenu; 
            if ($this ->_contenuReservoir < 20) {          
                $this ->_indicateurReservoirRouge = true; 
            } else $this ->_indicateurReservoirRouge = false; 

            }

            
        }

    $Voiture = new Voiture;
    $Voiture->contenuReservoir();
    

    // on va chercher l'objet ($Perso) et on invoque la méthode public function "dommages"() sur l'objet avec '->'
    //$this représente l'objet que l'on utilise ($Perso)  
    
    
    
    
    


//class perso
//{
    
    
    // private $_force = 57;
    //private $_localisation = 'cosmos'; 
    //private $_experience = 'expert'; 
    //private $_degats = 78; 
    
    //private $_Experience = '20'; 
    
    
    //public function afficherExperience()
    //{
        //  echo $this->_Experience; 
        //}
        
        
        //  public function gagnerExperience()
        //{
            //on ajoute 1 a notre attribut $_experience
            //$this->_Experience = $this->_Experience + 1;
            //}
            
            //}
            
            
            
            //$perso = new perso; 
            // $perso->gagnerExperience();
            //$perso->afficherExperience(); 
            
            
            
            
            //$perso = new Personnage;
            //$perso->_experience = $perso->_experience + 1; //  erreur fatale suite à cette instruction.
            
            
            
            
            //déclaration d'une méthode dont le but est d'afficher du text 
            
            //public function parler()
            //{
                //echo "double cio " ;
                //}
                
                //}
                
                //$perso = new Perso; 
                
//$perso->parler(); 


?>