<?php

class lienunivers{

  private $ID_univers1;
  private $ID_univers2;
  private $description;


  public function __construct($valeurs = array()){
    if(!empty($valeurs)){
      $this->affecte($valeurs);
    }
  }

  public function affecte($donnees){
    foreach($donnees as $attribut => $valeur){
      switch ($attribut){
        case 'ID_univers1': $this->setID_univers1($valeur);
            break;

        case 'ID_univers2': $this->setID_univers2($valeur);
            break;

      case 'description': $this->setDescription($valeur);
          break;
    }

    }
  }

  public function getID_univers1(){
    return $this->ID_univers1;
  }

  public function getID_univers2(){
    return $this->ID_univers2;
  }

  public function getDescription(){
    return $this->description;
  }


  public function setID_univers1($ID_univers1){
    $this->ID_univers1=$ID_univers1;
  }
  public function setID_univers2($ID_univers2){
    $this->ID_univers2=$ID_univers2;
  }
  public function setDescription($description){
    $this->description=$description;
  }


}




?>
