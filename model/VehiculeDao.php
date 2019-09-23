<?php
require_once 'Dbao.php';

/**
 * Created by PhpStorm.
 * User: mouha
 * Date: 03/08/2017
 * Time: 12:04
 */
class VehiculeDao extends DBao
{
    public function insererVehicule(Vehicule $us)
    {
      /*  if($us->getChargeUtile() == 'Break'){
            $us->setChargeUtile('Break');
        }else if($us->getChargeUtile() == 'Moins de 3,5T'){
            $us->setChargeUtile('Moins de 3,5T');
        }else if($us->getChargeUtile() == 'Plus de 3,5T'){
            $us->setChargeUtile('Plus de 3,5T');
        }else{
            $us->setChargeUtile('NULL');
        }*/
            $sql="INSERT INTO `vehicule` VALUES('".$us->getIdVehicule()."', '".$us->getMarque()."', '".$us->getType()."', '".$us->getImmatriculation()."','".$us->getPuissance()."',
            '".$us->getEnergie()."','".$us->getChargeUtile()."','".$us->getPlaces()."','".$us->getGenre()."', '".$us->getChassis()."', '".$us->getCylindre()."',
            '".$us->getDateMec()."', '".$us->getValeurNeuve()."','".$us->getValeurVenale()."','".$us->getNomChauffeur()."','".$us->getCategorie()."')";
            return $this->executeMAJ($sql);
            echo 'exception '.$e->getMessage();
            // ('fke80orzaaa409ak', 'kj', 'ij', '8k', '5', 'kj', 'po', '5', 'kjhgf', 'test', '55', '2019-05-01', '555555', '55555', 'lkjh', '5');
       
    }

    public function selectVehicule(Vehicule $us)
    {
        $sql="select * from vehicule where id_vehicule='".$us->getIdVehicule()."'";
        return $this->executeSELECT($sql);
    }

    public function getCatVehicule(Vehicule $us)
    {
        $sql="select c.libelle_categorie from categorie_vehicule c
              JOIN vehicule v ON (v.categorie_vehicule_id_cat=c.id_cat)
              where v.id_vehicule='".$us->getIdVehicule()."'";
        return $this->executeSELECT($sql);
    }

    public function deleteVehicule(Vehicule $us)
    {
        $sql="DELETE FROM `vehicule` WHERE id_vehicule='".$us->getIdVehicule()."' ";
        return $this->executeMAJ($sql);
    }
    public function getNumPolice(Vehicule $us)
    {
        $sql="select max(police.num_police+1) as numPolice from police 
                join vehicule on (vehicule.id_vehicule=police.id_police)
                WHERE vehicule.categorie_vehicule_id_cat='".$us->getCategorie()."' ORDER by police.num_police DESC limit 1";
        return $this->executeSELECT($sql);


    }
    public function updateVehicule(Vehicule $us)
    {
        $sql="UPDATE vehicule SET marque = '".$us->getMarque()."', type = '".$us->getType()."',
         immatriculation = '".$us->getImmatriculation()."', puissance = '".$us->getPuissance()."', energie = '".$us->getEnergie()."',charge_utile='".$us->getChargeUtile()."',places='".$us->getPlaces()."',genre='".$us->getGenre()."',chassis='".$us->getChassis()."',cylindre='".$us->getCylindre()."',date_mec='".$us->getDateMec()."',valeur_neuve='".$us->getValeurNeuve()."',valeur_venale='".$us->getValeurVenale()."',nom_chauffeur='".$us->getNomChauffeur()."'
         WHERE id_vehicule = '".$us->getIdVehicule()."'";
        return $this->executeMAJ($sql);
    }
}