<?php
class GenreManager{

    public function __construct($db){
        $this->db=$db;
    }

    public function getListeGenre(){
        $sql = 'SELECT * from genre order by name asc';
        $req=$this->db->prepare($sql);
        $req->execute();

        $listeGenre = array();
        while ($res = $req->fetch(PDO::FETCH_OBJ)){
            $listeGenre[] = new Genre($res);
        }
        $req->closeCursor();

        return $listeGenre;
    }
}
