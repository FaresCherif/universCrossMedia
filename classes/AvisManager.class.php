<?php
class AvisManager{

    public function __construct($db){
        $this->db=$db;
    }

    public function avisExiste($id_Film,$id_utilisateur){
        $sql = 'SELECT note from avisUtilisateur where ID_film=:id_film and ID_utilisateur=:id_utilisateur';
        $req=$this->db->prepare($sql);
        $req->bindValue(':id_film', $id_Film);
        $req->bindValue(':id_utilisateur', $id_utilisateur);


        $req->execute();

        $res = $req->fetch(PDO::FETCH_OBJ);

        if(!empty($res)){
          return true;
        }
        return false;
    }

    public function getAvis($id_Film,$id_utilisateur){
        $sql = 'SELECT note from avisUtilisateur where ID_film=:id_film and ID_utilisateur=:id_utilisateur';
        $req=$this->db->prepare($sql);
        $req->bindValue(':id_film', $id_Film);
        $req->bindValue(':id_utilisateur', $id_utilisateur);


        $req->execute();

        $res = $req->fetch(PDO::FETCH_OBJ);

        return new Avis($res);

    }


}
