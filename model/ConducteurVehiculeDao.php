<?php
require_once 'Dbao.php';
class ConducteurVehiculeDao extends DBao
{
    public function insererConducteur(Conducteur_vehicule $us)
    {
        $sql="INSERT INTO conducteur_vehicule values ('".$us->getIdCond()."','".$us->getNomConducteur()."','".$us->getPrenomConducteur()."',
            '".$us->getAnneePermis()."','".$us->getDureeConduite()."')";
        return $this->executeMAJ($sql);
    }

    public function selectConducteur(Conducteur_vehicule $us)
    {
        $sql="select * from conducteur_vehicule where id_cond='".$us->getIdCond()."'";
        return $this->executeSELECT($sql);
    }

    public function deleteConducteur(Conducteur_vehicule $us)
    {
        $sql="DELETE FROM `conducteur_vehicule` WHERE id_cond='".$us->getIdCond()."' ";
        return $this->executeMAJ($sql);
    }

    public function updateConducteur(Conducteur_vehicule $us)
    {
        $sql="UPDATE `conducteur_vehicule` SET `nom_conducteur` = '".$us->getNomConducteur()."', `prenom_conducteur` = '".$us->getPrenomConducteur()."',
         `annee_permis` = '".$us->getAnneePermis()."', `duree_conduite` = '".$us->getDureeConduite()."'
         WHERE `conducteur_vehicule`.`id_cond` = '".$us->getIdCond()."'";
        return $this->executeMAJ($sql);
    }

}