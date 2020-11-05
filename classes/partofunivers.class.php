<?php

class partofunivers{

  private $ID_film;
  private $ID_univers;



  public function __construct($valeurs = array()){
    if(!empty($valeurs)){
      $this->affecte($valeurs);
    }
  }

  public function affecte($donnees){
    foreach($donnees as $attribut => $valeur){
      switch ($attribut){
        case 'ID_film': $this->setID_Film($valeur);
            break;

        case 'ID_univers': $this->setID_Univers($valeur);
            break;

      }
    }
  }

  public function getID_Film(){
    return $this->ID_film;
  }

  public function getID_Univers(){
    return $this->ID_univers;
  }




  public function setID_Film($ID_film){
    $this->ID_film=$ID_film;
  }
  public function setID_Univers($ID_univers){
    $this->ID_univers=$ID_univers;
  }


}


?>
