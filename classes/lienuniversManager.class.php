<?php
class lienuniversManager{

    public function __construct($db){
        $this->db=$db;
    }


    public function getListeLienUnivers($idUnivers){
        $sql = 'SELECT * from lienunivers where ID_univers1=:id_univers or ID_univers2=:id_univers';
        $req=$this->db->prepare($sql);
        $req->bindValue(':id_univers', $idUnivers);

        $req->execute();

        $listeLienUnivers = array();
        while ($res = $req->fetch(PDO::FETCH_OBJ)){
            $listeLienUnivers[] = new lienunivers($res);
        }
        $req->closeCursor();

        return $listeLienUnivers;
    }


    public function addLienUnivers($id_Univers1,$id_Univers2,$description){
      $sql = 'INSERT INTO lienUnivers (`ID_univers1`, `ID_univers2`,`description`) VALUES  (:ID_univers1,:ID_univers2,:description) ';
      $req=$this->db->prepare($sql);

      $req->bindValue(':ID_univers2', $id_Univers2);
      $req->bindValue(':ID_univers1', $id_Univers1);
      $req->bindValue(':description', $description);

      $req->execute();
    }

    public function deleteLienUnivers($id_Univers1,$id_Univers2){
      $sql = 'DELETE FROM lienUnivers WHERE `ID_univers1`=:ID_univers1 AND `ID_univers2`=:ID_univers2 ';
      $req=$this->db->prepare($sql);

      $req->bindValue(':ID_univers2', $id_Univers2);
      $req->bindValue(':ID_univers1', $id_Univers1);

      $req->execute();
    }

    public function getLienUnivers($id_Univers1,$id_Univers2){
        $sql = 'SELECT * from lienUnivers where `ID_univers1`=:ID_univers1 AND `ID_univers2`=:ID_univers2 ';
        $req=$this->db->prepare($sql);
        $req->bindValue(':ID_univers2', $id_Univers2);
        $req->bindValue(':ID_univers1', $id_Univers1);
        $req->execute();

        $res = $req->fetch(PDO::FETCH_OBJ);

        return new Univers($res);
    }

    public function updateLienUnivers($id_Univers1,$id_Univers2,$description){
      $sql = 'UPDATE lienUnivers SET `description`=:description WHERE `ID_univers1`=:ID_univers1 AND `ID_univers2`=:ID_univers2';
      $req=$this->db->prepare($sql);

      $req->bindValue(':ID_univers2', $id_Univers2);
      $req->bindValue(':ID_univers1', $id_Univers1);
      $req->bindValue(':description', $description);

      $req->execute();
    }
}
