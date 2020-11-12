<?php
class UniversManager{

    public function __construct($db){
        $this->db=$db;
    }

    public function getListeUnivers(){
        $sql = 'SELECT * from univers order by name asc';
        $req=$this->db->prepare($sql);
        $req->execute();

        $listeUnivers = array();
        while ($res = $req->fetch(PDO::FETCH_OBJ)){
            $listeUnivers[] = new Univers($res);
        }
        $req->closeCursor();

        return $listeUnivers;
    }

    public function getUnivers($id_Univers){
        $sql = 'SELECT * from univers where ID=:id_Univers order by name asc';
        $req=$this->db->prepare($sql);
        $req->bindValue(':id_Univers', $id_Univers);

        $req->execute();

        $res = $req->fetch(PDO::FETCH_OBJ);

        return new Univers($res);
    }

    public function getUniversNom($nom){
        $sql = 'SELECT * from univers where name=:nom order by name asc';
        $req=$this->db->prepare($sql);
        $req->bindValue(':nom', $nom);

        $req->execute();

        $res = $req->fetch(PDO::FETCH_OBJ);

        return new Univers($res);
    }

    public function ajouterUnivers($name,$description,$image){
        $sql = 'INSERT INTO univers (`name`, `description`,`image`) VALUES  (:name,:description,:image) ';
        $req=$this->db->prepare($sql);

        $req->bindValue(':name', $name);
        $req->bindValue(':image', $image);
        $req->bindValue(':description', $description);

        $req->execute();
    }

    public function updateUnivers($id,$name,$description,$image){
        $sql = 'UPDATE univers SET `name`=:name, `description`=:description, `image`=:image WHERE `ID`=:id';
        $req=$this->db->prepare($sql);

        $req->bindValue(':id', $id);
        $req->bindValue(':name', $name);
        $req->bindValue(':image', $image);

        $req->bindValue(':description', $description);

        $req->execute();
    }

}
