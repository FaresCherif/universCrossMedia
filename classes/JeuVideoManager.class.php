<?php
class JeuVideoManager{

    public function __construct($db){
        $this->db=$db;
    }

    public function getListeJeu(){
        $sql = 'SELECT * from jeuvideo order by name asc';
        $req=$this->db->prepare($sql);
        $req->execute();

        $listeJeu = array();
        while ($res = $req->fetch(PDO::FETCH_OBJ)){
            $listeJeu[] = new JeuVideo($res);
        }
        $req->closeCursor();

        return $listeJeu;
    }



    public function getListeJeuGenre($idGenre){
        $sql = 'SELECT * from jeuvideo join jeuvideo_genre on jeuvideo.ID=jeuvideo_genre.ID_jeuvideo where jeuvideo_genre.ID_genreJeuVideo=:id_genre order by name asc';
        $req=$this->db->prepare($sql);
        $req->bindValue(':id_genre', $idGenre);

        $req->execute();

        $listeJeu = array();
        while ($res = $req->fetch(PDO::FETCH_OBJ)){
            $listeJeu[] = new JeuVideo($res);
        }
        $req->closeCursor();

        return $listeJeu;
    }


    public function getListeJeuUnivers($idUnivers){
        $sql = 'SELECT * from jeuvideo join partofunivers on jeuvideo.ID=partofunivers.ID_jeuvideo where partofunivers.ID_univers=:id_univers order by name asc';
        $req=$this->db->prepare($sql);
        $req->bindValue(':id_univers', $idUnivers);

        $req->execute();

        $listeJeu = array();
        while ($res = $req->fetch(PDO::FETCH_OBJ)){
            $listeJeu[] = new JeuVideo($res);
        }
        $req->closeCursor();

        return $listeJeu;
    }


    public function getJeuVideo($id_JeuVideo){
        $sql = 'SELECT * from jeuvideo where ID=:id_jeuvideo ';
        $req=$this->db->prepare($sql);
        $req->bindValue(':id_jeuvideo', $id_JeuVideo);

        $req->execute();

        $res = $req->fetch(PDO::FETCH_OBJ);

        return new JeuVideo($res);
    }


    public function getJeuVideoNom($name_JeuVideo){
        $sql = 'SELECT * from jeuvideo where name=:name ';
        $req=$this->db->prepare($sql);
        $req->bindValue(':name', $name_JeuVideo);

        $req->execute();

        $res = $req->fetch(PDO::FETCH_OBJ);

        return new JeuVideo($res);
    }

    public function ajouterJeuVideo($name,$description,$image){
        $sql = 'INSERT INTO jeuvideo (`name`, `description`,`image`) VALUES  (:name,:description,:image) ';
        $req=$this->db->prepare($sql);

        $req->bindValue(':name', $name);
        $req->bindValue(':image', $image);
        $req->bindValue(':description', $description);

        $req->execute();
    }

    public function getListeAvisJeuVideo($idJeu){
        $sql = 'SELECT * from jeuvideo join avisutilisateur on jeuvideo.ID=avisutilisateur.ID_jeuVideo where avisutilisateur.ID_jeuVideo=:id_jeu order by name asc';
        $req=$this->db->prepare($sql);
        $req->bindValue(':id_jeu', $idJeu);

        $req->execute();

        $listeAvis = array();
        while ($res = $req->fetch(PDO::FETCH_OBJ)){
            $listeAvis[] = new Avis($res);
        }
        $req->closeCursor();

        return $listeAvis;
    }
}
