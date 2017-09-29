<?php
    
    //creation de la classe "personnage"
    
    class perso 

    {
        private $_helf = 100;
        private $_level = 1;
        private $_stamina = 100;
        private $_XP = 50;
        
        
        public function upXP()
        {
            $this->_XP = $this->_XP + 2; 
            echo $this->_XP;
        }
        
    }   
    
    $perso = new perso;
    $perso->upXP();
    
        // on va chercher l'objet ($perso) et on invoque la méthode upXP() sur l'objet avec '->'
        //$this représente l'objet que l'on utilise ($perso)  
















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











