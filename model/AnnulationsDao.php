<?php
require_once 'Dbao.php';

/**
 * Created by PhpStorm.
 * User: mouha
 * Date: 07/08/2017
 * Time: 09:52
 */
class AnnulationsDAO extends DBao
{
   
    public function getAnnulations()
    {
        $sql="SELECT p.id_police, i.matricule, i.prenom, i.nom, i.tel, a.date_annulation, a.etat_annulation,a.motif_annulation, p.etat FROM annulation as a 
        JOIN police as p ON(p.id_police=a.id_police)
        JOIN intermediaire as i ON(i.matricule=a.code_intermediaire)";
        //echo($sql);
        return $this->executeSELECT($sql);
    }

    public function getAnnulation(String $numPolice){
        $sql = "SELECT *  from annulation WHERE id_police ='".$numPolice."'" ;
        return $this->executeSELECT($sql);


    }
 
}
