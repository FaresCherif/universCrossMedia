<?php
class FilmGenreManager{

    public function __construct($db){
        $this->db=$db;
    }

    public function addFilmGenre($id_Film,$id_Genre){
      $sql = 'INSERT INTO film_genre (`ID_film`, `ID_genre`) VALUES  (:ID_film,:ID_genre) ';
      $req=$this->db->prepare($sql);

      $req->bindValue(':ID_film', $id_Film);
      $req->bindValue(':ID_genre', $id_Genre);

      $req->execute();
    }

}
