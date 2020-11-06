<?php
class GenreJeuVideoManager{

    public function __construct($db){
        $this->db=$db;
    }

    public function getListeGenreJeuVideo(){
        $sql = 'SELECT * from genreJeuVideo order by name asc';
        $req=$this->db->prepare($sql);
        $req->execute();

        $listeGenre = array();
        while ($res = $req->fetch(PDO::FETCH_OBJ)){
            $listeGenre[] = new genrejeuvideo($res);
        }
        $req->closeCursor();

        return $listeGenre;
    }
}
