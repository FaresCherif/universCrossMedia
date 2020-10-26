<?php
class UtilisateurManager{

    public function __construct($db){
        $this->db=$db;
    }

    public function getUtilisateur($id_Utilisateur){
        $sql = 'SELECT * from utilisateur where ID=:id_Utilisateur ';
        $req=$this->db->prepare($sql);
        $req->bindValue(':id_Utilisateur', $id_Utilisateur);

        $req->execute();

        $res = $req->fetch(PDO::FETCH_OBJ);

        return new Utilisateur($res);
    }

    public function getIdLogin($pseudo){
        $sql = 'SELECT * from utilisateur where pseudo=:pseudo ';
        $req=$this->db->prepare($sql);
        $req->bindValue(':pseudo', $pseudo);

        $req->execute();

        $res = $req->fetch(PDO::FETCH_OBJ);

        return new Utilisateur($res);
    }
}
