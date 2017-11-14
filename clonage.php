<?php
class Personne
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

    public function getPersonne()
    {
        return $this->prenom;
    }
}


$pers1 = new Personne("Pierre");
$pers2 = $pers1;
$pers2->setPrenom("Louis");
echo $pers1->getPersonne();

$pers3 = clone $pers1;
$pers3->setPrenom("Jean");
echo $pers3->getPersonne();
// var_dump($pers1, $pers2, $pers3);      