
<?php
require_once 'Dbao.php';
/**
 * Created by PhpStorm.
 * User: mouha
 * Date: 07/08/2017
 * Time: 09:52
 */
class PoliceDao extends DBao
{
    /**
     * @param Police $us
     * @return int
     */
    public function insererPolice(Police $us)
    {
        $sql="INSERT INTO `police` VALUES('".$us->getIdPolice()."', '".$us->getNumPolice()."', '".$us->getDatePolice()."', '".$us->getAttestation()."',
         '".$us->getNumFacture()."','".$us->getValidation()."','".$us->getIntermediaire()."','".$us->getConducteurVehicule()."', '".$us->getPeriodeGarantie()."',
         '".$us->getVehicule()."', '".$us->getDecomptePrime()."','".$us->getRedMaj()."','".$us->getAssure()."')";

        return $this->executeMAJ($sql);

    }
    public function uptadePolice(Police $us)
    {
      $sql="UPDATE 'police' SET 'date_police'='".$us->getDatePolice()."','attestation'='".$us->getAttestation()."','numFacture'='".$us->getNumFacture()."','validation'='".$us->getValidation()."','intermediaire_matricule'='".$us->getIntermediaire()."','conducteur_vehicule_id_cond'='".getConducteurVehicule()."','periode_garantie_id_periode'='".$us->getPeriodeGarantie()."','vehicule_id_vehicule'='".$us->getVehicule()."','decompte_prime_id_dp'='".$us->getDecomptePrime()."','red_maj_id_red_maj'='".$us->getRedMaj()."','assure_id_assure'='".$us->getAssure()."' WHERE 'police'.'id_police'='".$us->getIdPolice()."'";
      return $this->executeMAJ($sql);

    }

    /**
     * @param Police $us
     * @return PDOStatement
     */
    public function selectPolice(Police $us)
    {
        $sql="select * from police where id_police='".$us->getIdPolice()."'";
        return $this->executeSELECT($sql);

    }

    /**
     * @param Police $us
     * @return PDOStatement
     */
    public function listPolice(Police $us)
    {
        $sql="SELECT p.id_police, p.num_police, g.date_debut, g.date_fin, a.nom_assure, a.prenom_assure,p.validation from police p
              JOIN periode_garantie g on(g.id_periode=p.periode_garantie_id_periode) 
              JOIN assure a on (p.assure_id_assure=a.id_assure) 
              JOIN intermediaire i on (p.intermediaire_matricule=i.matricule) 
              where i.matricule='".$us->getIntermediaire()."' AND p.validation=1 ORDER by p.date_police DESC ";
        return $this->executeSELECT($sql);

    }
    public function listPolicePreformant(Police $us)
    {
        $sql="SELECT p.id_police, p.num_police, g.date_debut, g.date_fin, a.nom_assure, a.prenom_assure,p.validation  from police_preformant pp
              JOIN police p on (pp.id_police=p.id_police) 
              JOIN periode_garantie g on(g.id_periode=p.periode_garantie_id_periode) 
              JOIN assure a on (p.assure_id_assure=a.id_assure) 
              JOIN intermediaire i on (p.intermediaire_matricule=i.matricule) 
              where i.matricule='".$us->getIntermediaire()."' AND p.validation=1 ORDER by p.date_police DESC ";
        return $this->executeSELECT($sql);

    }

    public function listPoliceValider(Police $us)
    {
        $sql="SELECT p.id_police, p.num_police, g.date_debut, g.date_fin, a.nom_assure, a.prenom_assure,p.validation  from police_valider pv
              JOIN police p on (pv.id_police=p.id_police) 
              JOIN periode_garantie g on(g.id_periode=p.periode_garantie_id_periode) 
              JOIN assure a on (p.assure_id_assure=a.id_assure) 
              JOIN intermediaire i on (p.intermediaire_matricule=i.matricule) 
              where i.matricule='".$us->getIntermediaire()."' AND p.validation=1 ORDER by p.date_police DESC ";
        return $this->executeSELECT($sql);

    }

    /**
     * @param Police $us
     * @return PDOStatement
     */
    public function listPoliceAdmn(Police $us)
    {
        $sql="SELECT p.id_police, p.num_police, g.date_debut, g.date_fin, a.nom_assure, a.prenom_assure,p.validation from police p
              JOIN periode_garantie g on(g.id_periode=p.periode_garantie_id_periode) 
              JOIN assure a on (p.assure_id_assure=a.id_assure) 
              JOIN intermediaire i on (p.intermediaire_matricule=i.matricule) 
              where i.matricule='".$us->getIntermediaire()."' and p.validation=0 ORDER by p.date_police DESC ";
        return $this->executeSELECT($sql);

    }

    public function changeToValider($id){
        $sql='UPDATE police set validation=0 WHERE id_police like "'.$id.'"';
        echo $sql;
        return $this->executeMAJ($sql);
    }

/*    public function etatPolice(Police $us){
        $sql="SELECT count(*) from police_valider WHERE id_police=".$us->getIdPolice(); 
        $etat =$this->executeMAJ($sql);
        if($etat!=0){
            return 1;//etat valider
        }
        $sql="SELECT count(*) from police_preformant WHERE id_police=".$us->getIdPolice(); 
        $etat =$this->executeMAJ($sql);
        if($etat!=0){
            return 2;//etat preformant
        }
        return 0;
    }

    public function changeToPreformant(Police $us){
        $etat=etatPolice($us);
        if($etat==1){
            $sql="DELETE FROM police_valider WHERE id_police=".$us->getIdPolice();
            $this->executeMAJ($sql);
        }
        $sql="INSERT INTO police_preformant VALUES (".$us->getIdPolice().")";
        $this->executeMAJ($sql);
        $sql="UPDATE police set validation=2 WHERE id_police=".$us->getIdPolice();
        return $this->executeMAJ($sql);
     
    }

    public function changeToValider(Police $us){
        $etat=etatPolice($us);
        if($etat==2){
            $sql="DELETE FROM police_preformant WHERE id_police=".$us->getIdPolice();
            $this->executeMAJ($sql);
        }
        $sql="INSERT INTO police_valider VALUES (".$us->getIdPolice().")";
        $this->executeMAJ($sql);
        $sql="UPDATE police set validation=1 WHERE id_police=".$us->getIdPolice();
        return $this->executeMAJ($sql);
    }*/

    /**
     * @return PDOStatement
     */
    public function AllPolice()
    {
        $sql="select * from police";
        return $this->executeSELECT($sql);

    }

    /**
     * @param Police $us
     * @return int
     */
    public function unvalidate(Police $us)
    {
        $sql="UPDATE police set validation=0 WHERE id_police='".$us->getIdPolice()."'";
        return $this->executeMAJ($sql);
    }

    /**
     * @param Police $us
     * @return int
     */
    public function validate(Police $us)
    {
        $sql="UPDATE police set validation=1 WHERE id_police='".$us->getIdPolice()."'";
        return $this->executeMAJ($sql);
    }

    /**
     * @param Police $us
     * @return PDOStatement
     */
    public function getNumFacture(Police $us)
    {
        $sql = "SELECT max(substr(numFacture,15,9)+1) as facture from police WHERE intermediaire_matricule='" . $us->getIntermediaire() . "' limit 1 ";
        return $this->executeSELECT($sql);
    }

    /**
     * @param Police $us
     * @param Police $ds
     * @return PDOStatement
     */
    public function getAllProduct(Police $us, Police $ds)
    {
        $sql="SELECT p.num_police,p.date_police ,p.attestation,p.numFacture ,
                i.matricule,i.nom,i.prenom,
                a.nom_assure , a.prenom_assure ,
                cv.nom_conducteur,cv.prenom_conducteur,
                pg.date_debut,pg.heure_debut,pg.date_fin,pg.heure_fin,
                v.marque,v.immatriculation,v.genre,v.date_mec,v.valeur_neuve,v.valeur_venale,
                group_concat(g.libelle_garantie) ,
                rm.pourcentageBC,rm.bonus_rc,rm.pourcentageRC,rm.reduc_com,
                dp.prime_nette,dp.accessoire,dp.taxe,dp.fond_garantie,dp.prime_totale
                
                from police p JOIN intermediaire i ON (i.matricule=p.intermediaire_matricule
                  ) JOIN assure a ON (a.id_assure=p.id_police)
                  JOIN conducteur_vehicule cv ON (cv.id_cond=p.id_police)
                  JOIN periode_garantie pg ON (pg.id_periode=p.id_police)
                  JOIN vehicule v ON (v.id_vehicule=p.id_police)
                  JOIN decompte_prime dp ON (dp.id_dp=p.id_police)
                  JOIN red_maj rm ON (rm.id_red_maj=p.id_police)
                  JOIN contenir ct ON (ct.police_id_police=p.id_police)
                  JOIN garantie g ON (g.id_garantie=ct.garantie_id_garantie)
                WHERE p.date_police > '".$us->getDatePolice()."' AND p.date_police < '".$ds->getDatePolice()."'
                GROUP BY p.num_police  ORDER by p.date_police DESC";
        return $this->executeSELECT($sql);
    }

    /**
     * @param Police $us
     * @param Police $ds
     * @return PDOStatement
     */
    public function getAllProductByInt(Police $us, Police $ds)
    {
        $sql="SELECT p.num_police,p.date_police ,p.attestation,p.numFacture ,
                i.matricule,i.nom,i.prenom,
                a.nom_assure , a.prenom_assure ,
                cv.nom_conducteur,cv.prenom_conducteur,
                pg.date_debut,pg.heure_debut,pg.date_fin,pg.heure_fin,
                v.marque,v.immatriculation,v.genre,v.date_mec,v.valeur_neuve,v.valeur_venale,
                group_concat(g.libelle_garantie) ,
                rm.pourcentageBC,rm.bonus_rc,rm.pourcentageRC,rm.reduc_com,
                dp.prime_nette,dp.accessoire,dp.taxe,dp.fond_garantie,dp.prime_totale
                
                from police p JOIN intermediaire i ON (i.matricule=p.intermediaire_matricule
                  ) JOIN assure a ON (a.id_assure=p.id_police)
                  JOIN conducteur_vehicule cv ON (cv.id_cond=p.id_police)
                  JOIN periode_garantie pg ON (pg.id_periode=p.id_police)
                  JOIN vehicule v ON (v.id_vehicule=p.id_police)
                  JOIN decompte_prime dp ON (dp.id_dp=p.id_police)
                  JOIN red_maj rm ON (rm.id_red_maj=p.id_police)
                  JOIN contenir ct ON (ct.police_id_police=p.id_police)
                  JOIN garantie g ON (g.id_garantie=ct.garantie_id_garantie)
                WHERE p.date_police > '".$us->getDatePolice()."' 
                AND p.date_police < '".$ds->getDatePolice()."'
                AND  i.matricule='".$us->getIntermediaire()."'
                GROUP BY p.num_police  ORDER by p.date_police DESC";
        return $this->executeSELECT($sql);
    }

    //-----------------------------------Mamadou Ndiaye-------------------------------------

    public function getAllProduction(Police $ds)
    {
        $sql="SELECT p.num_police,p.date_police ,p.attestation,p.numFacture,
                i.matricule,i.nom,i.prenom,
                a.nom_assure , a.prenom_assure,cat.libelle_categorie,v.energie,v.date_mec,
                cv.nom_conducteur,cv.prenom_conducteur,v.puissance,v.type,v.cylindre,
                pg.date_debut,pg.heure_debut,pg.date_fin,pg.heure_fin,pg.duree,
                v.marque,v.immatriculation,v.genre,v.date_mec,v.valeur_neuve,v.valeur_venale,v.chassis,v.places,
                g.libelle_garantie,v.charge_utile,
                rm.pourcentageBC,rm.bonus_rc,rm.pourcentageRC,rm.reduc_com,
                dp.prime_nette,dp.accessoire,dp.taxe,dp.fond_garantie,dp.prime_totale
                
                from police p JOIN intermediaire i ON (i.matricule=p.intermediaire_matricule
                  ) JOIN assure a ON (a.id_assure=p.id_police)
                  JOIN conducteur_vehicule cv ON (cv.id_cond=p.id_police)
                  JOIN periode_garantie pg ON (pg.id_periode=p.id_police)
                  JOIN vehicule v ON (v.id_vehicule=p.id_police)
                  JOIN decompte_prime dp ON (dp.id_dp=p.id_police)
                  JOIN red_maj rm ON (rm.id_red_maj=p.id_police)
                  JOIN contenir ct ON (ct.police_id_police=p.id_police)
                  JOIN garantie g ON (g.id_garantie=ct.garantie_id_garantie)
                  JOIN categorie_vehicule cat ON (v.categorie_vehicule_id_cat=cat.id_cat)
                WHERE p.id_police = '".$ds->getIdPolice()."'";
        return $this->executeSELECT($sql);
    }


    /**
     * @param Police $us
     * @param $cat
     * @return PDOStatement
     */
    public function getNumPolice(Police $us, $cat)
    {
        $sql="select max(substr(police.num_police,6,8))+1 as numPolice from police
              join vehicule on (vehicule.id_vehicule=police.id_police)
              WHERE vehicule.categorie_vehicule_id_cat='".$cat."' 
              AND police.intermediaire_matricule='".$us->getIntermediaire()."' 
              ORDER by police.num_police DESC limit 1";

        return $this->executeSELECT($sql);
    }

    /**
     * @param Police $us
     * @return int
     */
    public function setSchemaData()
    {

        $sql="INSERT INTO schema_data 
                 VALUES (NULL, '1', 'F', 'N', '1', '1', '0', '0', '0', 'CIN', '', '', '', '', '', '', NULL, '2017-12-06', '2017-12-06', '2017-12-06', 'N', '5a0b0a6919eee')";

        return $this->executeMAJ($sql);
    }

}