<?php
class FilmManager{

    public function __construct($db){
        $this->db=$db;
    }

    public function getListeFilm(){
        $sql = 'SELECT * from film order by name asc';
        $req=$this->db->prepare($sql);
        $req->execute();

        $listeFilm = array();
        while ($res = $req->fetch(PDO::FETCH_OBJ)){
            $listeFilm[] = new Film($res);
        }
        $req->closeCursor();

        return $listeFilm;
    }

    public function getListeFilmGenre($idGenre){
        $sql = 'SELECT * from film join film_genre on film.ID=film_genre.ID_film where film_genre.ID_genre=:id_genre order by name asc';
        $req=$this->db->prepare($sql);
        $req->bindValue(':id_genre', $idGenre);

        $req->execute();

        $listeFilm = array();
        while ($res = $req->fetch(PDO::FETCH_OBJ)){
            $listeFilm[] = new Film($res);
        }
        $req->closeCursor();

        return $listeFilm;
    }


    public function getListeFilmUnivers($idUnivers){
        $sql = 'SELECT * from film join partofunivers on film.ID=partofunivers.ID_film where partofunivers.ID_univers=:id_univers order by name asc';
        $req=$this->db->prepare($sql);
        $req->bindValue(':id_univers', $idUnivers);

        $req->execute();

        $listeFilm = array();
        while ($res = $req->fetch(PDO::FETCH_OBJ)){
            $listeFilm[] = new Film($res);
        }
        $req->closeCursor();

        return $listeFilm;
    }
}
