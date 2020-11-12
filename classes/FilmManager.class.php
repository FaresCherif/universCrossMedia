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


    public function getFilm($id_Film){
        $sql = 'SELECT * from film where ID=:id_film ';
        $req=$this->db->prepare($sql);
        $req->bindValue(':id_film', $id_Film);

        $req->execute();

        $res = $req->fetch(PDO::FETCH_OBJ);

        return new Film($res);
    }

    public function getFilmNom($film_nom){
        $sql = 'SELECT * from film where name=:name ';
        $req=$this->db->prepare($sql);
        $req->bindValue(':name', $film_nom);

        $req->execute();

        $res = $req->fetch(PDO::FETCH_OBJ);

        return new Film($res);
    }

    public function getListeAvisFilm($idFilm){
        $sql = 'SELECT * from film join avisutilisateur on film.ID=avisutilisateur.ID_film where avisutilisateur.ID_film=:id_film order by name asc';
        $req=$this->db->prepare($sql);
        $req->bindValue(':id_film', $idFilm);

        $req->execute();

        $listeAvis = array();
        while ($res = $req->fetch(PDO::FETCH_OBJ)){
            $listeAvis[] = new Avis($res);
        }
        $req->closeCursor();

        return $listeAvis;
    }


    public function ajouterFilm($name,$description,$image){
        $sql = 'INSERT INTO film (`name`, `description`,`image`) VALUES  (:name,:description,:image) ';
        $req=$this->db->prepare($sql);

        $req->bindValue(':name', $name);
        $req->bindValue(':image', $image);
        $req->bindValue(':description', $description);

        $req->execute();
    }

    public function updateFilm($id,$name,$description,$image){
        $sql = 'UPDATE film set `image`=:image, `name`=:name,`description`=:description where `ID`=:ID ';
        $req=$this->db->prepare($sql);

        $req->bindValue(':name', $name);
        $req->bindValue(':image', $image);
        $req->bindValue(':ID', $id);
        $req->bindValue(':description', $description);

        $req->execute();
    }

    public function getFilmGenre($film_nom){
        $sql = 'SELECT genre.name from film join film_genre on film.ID=film_genre.ID_film join genre on film_genre.ID_genre=genre.ID where film.name=:name ';
        $req=$this->db->prepare($sql);
        $req->bindValue(':name', $film_nom);

        $req->execute();

        $res = $req->fetch(PDO::FETCH_OBJ);

        return new Film($res);
    }


    public function getFilmUnivers($film_nom){
        $sql = 'SELECT univers.name from film join partofunivers on film.ID=partofunivers.ID_film join univers on partofunivers.ID_univers=univers.ID where film.name=:name ';
        $req=$this->db->prepare($sql);
        $req->bindValue(':name', $film_nom);

        $req->execute();

        $res = $req->fetch(PDO::FETCH_OBJ);

        return new Film($res);
    }
}
