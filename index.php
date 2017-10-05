<?php    
    
        class Voiture {
        
        //proprietes = variables
        private $indicateurReserve;
        private $reservoir;
        
        //Constructeur(1 constructeur par class)
    
        public function __construct($nbLitre){
            $this->setreservoir = ($nbLitre);
            //faire l'affectation de $indicateurReserve
            //TRUE si $reservoir < 20, sinon FALSE
            $this->setReservoir($nbLitre);
        }
        
        //Accesseurs pour acceder en lecture (Getter) ou en ecriture (Setter) aux attributs:
        //get pour obtenir une valeur, set c'est pour lui donner une valeur
        public function getIndicateurReserve(){
            return $this->indicateurReserve;
        }
        
        public function setIndicateurReserve($indicateur){
            $this->indicateurReserve = $indicateur;
        }
        
        //Accesseur $reservoir
        public function getReservoir(){
            return $this->reservoir;
        }
        
        public function setReservoir($nbLitre){
            $this->reservoir = $nbLitre;
            if ($nbLitre >= 20){
                $this->setIndicateurReserve(FALSE);
                echo "on peut rouler !";
            }else{
                $this->setIndicateurReserve(TRUE);
                echo "Attention ! ";
            }
        }
    }

    
    //instensiation de la classe 
    $maVoiture = new Voiture($nbLitre);
    // $maVoiture->getReservoir() 15;
    // $maVoiture->setIndicateurReserve(16);
    // $maVoiture->getReservoir() 16;
    ?>