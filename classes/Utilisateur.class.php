<?php

class Utilisateur{

  private $ID;
  private $pseudo;
  private $mdp;


  public function __construct($valeurs = array()){
    if(!empty($valeurs)){
      $this->affecte($valeurs);
    }
  }

  public function affecte($donnees){
    foreach($donnees as $attribut => $valeur){
      switch ($attribut){
        case 'ID': $this->setId($valeur);
            break;

        case 'pseudo': $this->setPseudo($valeur);
            break;

        case 'mdp': $this->setMdp($valeur);
            break;

      }
    }
  }

  public function getId(){
    return $this->ID;
  }

  public function getPseudo(){
    return $this->pseudo;
  }

  public function getMdp(){
    return $this->mdp;
  }





  public function setId($id){
    $this->ID=$id;
  }
  public function setPseudo($pseudo){
    $this->pseudo=$pseudo;
  }
  public function setMdp($mdp){
    $this->mdp=$mdp;
  }



}




?>
