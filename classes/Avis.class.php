<?php

class Avis{

  private $note;
  private $commentaire;
  private $ID_utilisateur;
  private $ID_film;



  public function __construct($valeurs = array()){
    if(!empty($valeurs)){
      $this->affecte($valeurs);
    }
  }

  public function affecte($donnees){
    foreach($donnees as $attribut => $valeur){
      switch ($attribut){
        case 'note': $this->setNote($valeur);
            break;

        case 'commentaire': $this->setCommentaire($valeur);
            break;

        case 'ID_utilisateur': $this->setID_utilisateur($valeur);
            break;

        case 'ID_film': $this->setID_film($valeur);
            break;
      }
    }
  }

  public function getNote(){
    return $this->note;
  }

  public function getCommentaire(){
    return $this->commentaire;
  }

  public function getID_utilisateur(){
    return $this->ID_utilisateur;
  }

  public function getID_film(){
    return $this->ID_film;
  }



  public function setNote($note){
    $this->note=$note;
  }
  public function setCommentaire($commentaire){
    $this->commentaire=$commentaire;
  }

  public function setID_utilisateur($ID_utilisateur){
    $this->ID_utilisateur=$ID_utilisateur;
  }
  public function setID_film($ID_film){
    $this->ID_film=$ID_film;
  }

}

?>
