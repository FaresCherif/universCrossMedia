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

    public function getIdMail($mail){
        $sql = 'SELECT * from utilisateur where email=:mail ';
        $req=$this->db->prepare($sql);
        $req->bindValue(':mail', $mail);

        $req->execute();

        $res = $req->fetch(PDO::FETCH_OBJ);

        return new Utilisateur($res);
    }

    public function addtUtilisateur($pseudo,$mdp,$email){
        $sql = 'INSERT INTO utilisateur (`email`,`pseudo`, `mdp`) VALUES (:email,:pseudo,:mdp) ';
        $req=$this->db->prepare($sql);

        $req->bindValue(':email', $email);
        $req->bindValue(':pseudo', $pseudo);
        $req->bindValue(':mdp', $mdp);

        $req->execute();
    }


    public function getListeUtilisateur(){
        $sql = 'SELECT * from utilisateur order by ID asc';
        $req=$this->db->prepare($sql);
        $req->execute();

        $listeUtilisateur = array();
        while ($res = $req->fetch(PDO::FETCH_OBJ)){
            $listeUtilisateur[] = new Utilisateur($res);
        }
        $req->closeCursor();


        return $listeUtilisateur;
    }

    public function passerUtilisateurAdministrateur($id){
        $sql = 'UPDATE utilisateur SET permission=2 where ID=:id ';
        $req=$this->db->prepare($sql);

        $req->bindValue(':id', $id);
        $req->execute();
    }

    public function passerUtilisateurIntermediaire($id){
        $sql = 'UPDATE utilisateur SET permission=1 where ID=:id ';
        $req=$this->db->prepare($sql);

        $req->bindValue(':id', $id);
        $req->execute();
    }

    public function passerUtilisateurBasique($id){
        $sql = 'UPDATE utilisateur SET permission=0 where ID=:id ';
        $req=$this->db->prepare($sql);

        $req->bindValue(':id', $id);
        $req->execute();
    }

    public function updatePseudo($id,$pseudo){
        $sql = 'UPDATE utilisateur SET pseudo=:pseudo where ID=:id ';
        $req=$this->db->prepare($sql);

        $req->bindValue(':pseudo', $pseudo);
        $req->bindValue(':id', $id);
        $req->execute();
    }

    public function updateMdp($id,$mdp){
        $sql = 'UPDATE utilisateur SET mdp=:mdp where ID=:id ';
        $req=$this->db->prepare($sql);

        $req->bindValue(':mdp', $mdp);
        $req->bindValue(':id', $id);
        $req->execute();
    }
}
