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

    public function addJeuUnivers($id_Jeu,$id_Univers){
      $sql = 'INSERT INTO partofunivers (`ID_jeuvideo`, `ID_univers`) VALUES  (:ID_jeu,:ID_univers) ';
      $req=$this->db->prepare($sql);

      $req->bindValue(':ID_jeu', $id_Jeu);
      $req->bindValue(':ID_univers', $id_Univers);

      $req->execute();
    }

}
