<?php
class Personne
{
//Propriété d'objet
    protected $id;
    protected $nom;
    protected $prenom;

    //Propriété de classe
    public static $prochainId = 1;
    public function __construct($prenom, $nom)
    {
    // self = Nom de la classe
    // :: pour apeller la propriété de classe
        $this->id = self::$prochainId++;
        $this->prenom = $prenom;
        $this->nom = $nom;
    }
    
// Definition d'un conportement de Classe
    public function __toString()
    {
        return get_class($this) . ": Id: " . $this->id .
            " Prenom:" . $this->prenom .
            " Nom: " . $this->nom;
    }
    //le getter() ne prend jamais de parametre
    public static function getProchainId()
    {
        return self::$prochainId;
    }
}
