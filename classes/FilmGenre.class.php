<?php

class FilmGenre{

  private $ID_film;
  private $ID_genre;



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

        case 'ID_genre': $this->setID_Genre($valeur);
            break;

      }
    }
  }

  public function getID_Film(){
    return $this->ID_film;
  }

  public function getID_Genre(){
    return $this->ID_genre;
  }




  public function setID_Film($ID_film){
    $this->ID_film=$ID_film;
  }
  public function setID_Genre($ID_genre){
    $this->ID_genre=$ID_genre;
  }


}


?>
