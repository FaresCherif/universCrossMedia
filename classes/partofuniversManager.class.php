<?php
class partofuniversManager{

    public function __construct($db){
        $this->db=$db;
    }

    public function addFilmUnivers($id_Film,$id_Univers){
      $sql = 'INSERT INTO partofunivers (`ID_film`, `ID_univers`) VALUES  (:ID_film,:ID_univers) ';
      $req=$this->db->prepare($sql);

      $req->bindValue(':ID_film', $id_Film);
      $req->bindValue(':ID_univers', $id_Univers);

      $req->execute();
    }

}
