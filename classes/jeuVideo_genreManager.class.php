<?php
class jeuvideo_genreManager{

    public function __construct($db){
        $this->db=$db;
    }

    public function addJeuGenre($id_JeuVideo,$id_Genre){
      $sql = 'INSERT INTO jeuvideo_genre (`ID_jeuVideo`, `ID_genreJeuVideo`) VALUES  (:ID_jeuVideo,:ID_genreJeuVideo) ';
      $req=$this->db->prepare($sql);

      $req->bindValue(':ID_jeuVideo', $id_JeuVideo);
      $req->bindValue(':ID_genreJeuVideo', $id_Genre);

      $req->execute();
    }

}
