<?php

class jeuvideo_genre{

  private $ID_jeuVideo;
  private $ID_genreJeuVideo;



  public function __construct($valeurs = array()){
    if(!empty($valeurs)){
      $this->affecte($valeurs);
    }
  }

  public function affecte($donnees){
    foreach($donnees as $attribut => $valeur){
      switch ($attribut){
        case 'ID_jeuVideo': $this->setID_jeuVideo($valeur);
            break;

        case 'ID_genreJeuVideo': $this->setID_genreJeuVideo($valeur);
            break;

      }
    }
  }

  public function getID_jeuVideo(){
    return $this->ID_jeuVideo;
  }

  public function getID_genreJeuVideo(){
    return $this->ID_genreJeuVideo;
  }




  public function setID_jeuVideo($ID_jeuVideo){
    $this->ID_jeuVideo=$ID_jeuVideo;
  }
  public function setID_genreJeuVideo($ID_genreJeuVideo){
    $this->ID_genreJeuVideo=$ID_genreJeuVideo;
  }


}


?>
