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
}
