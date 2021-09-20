<?php
 class Personne
{
    public $id;
    public $nom;
    public $sexe;
    public $codepostale;
    public $adresse;

    function __construct($id,$nom,$age,$sexe,$codepostale,$adresse)
    {
        $this->nom=$nom;
        $this->age=$age;
        $this->sexe=$sexe;
        $this->codepostale=$codepostale;
        $this->adresse=$adresse;
    }
    function get_personne()
    {
        return $this->nom.' '. $this->age.' '.$this->sexe.' '.$this->codepostale.' '.$this->adresse;
    }
}
    $personne=new Personne(1,"teste",22,"homme",6033,"Lyon");
echo $personne->get_personne();


?>