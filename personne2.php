<?php
class Personne2
{

    private $prenom;

    public function __construct($prenom)
    {
        $this->prenom = $prenom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    public function getPrenom()
    {
        return $this->prenom;   
    }

}

$perso1 = new Personne2("olivier ");
$perso2 = $perso1;
$perso2->setPrenom("tom ");
echo $perso1->getPrenom();

$perso3 = clone $perso2;
$perso3->setPrenom("jacque ");
echo $perso3->getPrenom(); 
