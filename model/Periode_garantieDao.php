<?php

require_once 'Dbao.php';
class Periode_garantieDao extends Dbao{
    function __construct()
    {

    }

    public function insererPeriode(Periode_garantie $us)
    {
       $sql="insert into periode_garantie values ('".$us->getId_periode()."','".$us->getDate_debut()."','".$us->getDate_fin()."',
            '".$us->getHeure_debut()."','".$us->getHeure_fin()."','".$us->getDuree()."')";
       return $this->executeMAJ($sql);
    }

    public function listPeriode(Periode_garantie $us)
    {
        $sql="select * from periode_garantie where id_periode='".$us->getId_periode()."'";
        return $this->executeSELECT($sql);
    }

    public function deletePeriode(Periode_garantie $us)
    {
        $sql="DELETE FROM `periode_garantie` WHERE id_periode='".$us->getId_periode()."' ";
        return $this->executeMAJ($sql);
    }
    public function updatePeriode(Periode_garantie $us)
    {
        $sql="UPDATE `periode_garantie` SET `duree` = '".$us->getDuree()."','".$us->getDate_debut()."','".$us->getDate_fin()."'
         WHERE `periode_garantie`.`id_periode` = '".$us->getId_periode()."'";
        return $this->executeMAJ($sql);
    }

}

