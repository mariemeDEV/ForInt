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

            try {
                $dns="mysql:host=127.0.0.1;dbname=saham_app_1";
                $user="root";
                $password="passer";
                $pdo = new PDO($dns, $user, $password);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
                $sql = $pdo->prepare(
                    "insert into police values
                    (
                    '".$us->getIdPolice()."',
                    '".$us->getNumPolice()."',
                    '".$us->getDatePolice()."',
                    '".$us->getNumFacture()."',
                    '".$us->getAttestation()."',
                    ".$us->getValidation().",
                    ".$us->getIntermediaire().",
                    '".$us->getConducteurVehicule()."',
                    '".$us->getPeriodeGarantie()."',
                    '".$us->getVehicule()."',
                    '".$us->getDecomptePrime()."',
                    '".$us->getRedMaj()."',
                    '".$us->getAssure()."'
                    )"
                );
                echo "Insertion effectuée";
                return $sql->execute();
            }
            catch(Exception $e) {
                echo 'Exception -> ';
                var_dump($e->getMessage());
            }
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
    public function listPolice(int $intermediaireId)
    {
        $sql="SELECT p.id_police, p.num_police, g.date_debut, g.date_fin, a.nom_assure, a.prenom_assure,p.validation from police p
              JOIN periode_garantie g on(g.id_periode=p.periode_garantie_id_periode) 
              JOIN assure a on (p.assure_id_assure=a.id_assure) 
              JOIN intermediaire i on (p.intermediaire_matricule=i.matricule) 
              where i.matricule='".$intermediaireId."' AND p.validation=0 ORDER by p.date_police DESC ";
        return $this->executeSELECT($sql);
    }

    public function listPolicePreformant(int $p)
    {
        $sql="SELECT p.id_police, p.num_police, g.date_debut, g.date_fin, a.nom_assure, a.prenom_assure,p.validation  from police pp
              JOIN police p on (pp.id_police=p.id_police) 
              JOIN periode_garantie g on(g.id_periode=p.periode_garantie_id_periode) 
              JOIN assure a on (p.assure_id_assure=a.id_assure) 
              JOIN intermediaire i on (p.intermediaire_matricule=i.matricule) 
              where i.matricule=".$p." AND p.validation=1 ORDER by p.date_police DESC ";
        return $this->executeSELECT($sql);
    }
    
    public function listPoliceValides(int $p)
    {
        $sql="SELECT p.id_police, p.num_police, g.date_debut, g.date_fin, a.nom_assure, a.prenom_assure,p.validation  from police pv
              JOIN police p on (pv.id_police=p.id_police) 
              JOIN periode_garantie g on(g.id_periode=p.periode_garantie_id_periode) 
              JOIN assure a on (p.assure_id_assure=a.id_assure) 
              JOIN intermediaire i on (p.intermediaire_matricule=i.matricule) 
              where i.matricule=".$p." AND p.validation=0 ORDER by p.date_police DESC ";
              return $this->executeSELECT($sql);
    }
    /**
     * @return PDOStatement
    */
    public function listPoliceAdmn(Police $p)
    {
        $sql  = "SELECT p.id_police, p.num_police, g.date_debut, g.date_fin, a.nom_assure, a.prenom_assure,p.validation, i.matricule from police as p JOIN periode_garantie as g on(g.id_periode=p.periode_garantie_id_periode) JOIN assure as a on (p.assure_id_assure=a.id_assure) JOIN intermediaire as i on (p.intermediaire_matricule=i.matricule) where i.matricule='".$p->getIdPolice()."' and p.validation=0 ORDER by p.date_police DESC";
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
    }
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
    public function getNumFacture(int $us)
    {
        $sql = "SELECT max(substr(numFacture,15,9)+1) as facture from police 
        WHERE intermediaire_matricule='" . $us . "' limit 1 ";
        return $this->executeSELECT($sql);
    }
    /**
     * @param Police $us
     * @param Police $ds
     * @return PDOStatement
     */
    public function getAllProduct($debut, $fin)
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
                  WHERE p.date_police BETWEEN '".$debut."' AND '".$fin."'".
                  "GROUP BY p.num_police ORDER by p.date_police DESC";
                return $this->executeSELECT($sql);
    }
    /**
     * @param Police $us
     * @param Police $ds
     * @return PDOStatement
     */
    public function getAllProductByInt(int $matricule,$debut,$fin)
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
                ) 
                JOIN assure a ON (a.id_assure=p.id_police)
                JOIN conducteur_vehicule cv ON (cv.id_cond=p.id_police)
                JOIN periode_garantie pg ON (pg.id_periode=p.id_police)
                JOIN vehicule v ON (v.id_vehicule=p.id_police)
                JOIN decompte_prime dp ON (dp.id_dp=p.id_police)
                JOIN red_maj rm ON (rm.id_red_maj=p.id_police)
                JOIN contenir ct ON (ct.police_id_police=p.id_police)
                JOIN garantie g ON (g.id_garantie=ct.garantie_id_garantie)
                WHERE p.date_police BETWEEN '".$debut."' AND '".$fin."'".
                "AND  i.matricule    = $matricule
        GROUP BY p.num_police ORDER by p.date_police DESC";
        return $this->executeSELECT($sql);
    }

    //-----------------------------------Mamadou Ndiaye-------------------------------------
    public function getAllProduction(String $numPolice)
    {
        $sql="	 SELECT 
        p.num_police,p.date_police ,p.attestation,p.numFacture,
        i.matricule,i.nom,i.prenom,
        a.nom_assure , a.prenom_assure,cat.id_cat,cat.libelle_categorie,v.energie,v.date_mec,
        cv.nom_conducteur,cv.prenom_conducteur,v.puissance,v.type,v.cylindre,
        pg.date_debut,pg.heure_debut,pg.date_fin,pg.heure_fin,pg.duree,
        v.marque,v.immatriculation,v.genre,v.date_mec,v.valeur_neuve,v.valeur_venale,v.chassis,v.places,
        g.libelle_garantie,v.charge_utile,
        rm.pourcentageBC,rm.bonus_rc,rm.pourcentageRC,rm.reduc_com,
        dp.prime_nette,dp.accessoire,dp.taxe,dp.fond_garantie,dp.prime_totale
        
        from police p 
          JOIN intermediaire i        ON (i.matricule                 = p.intermediaire_matricule)
          JOIN assure a               ON (a.id_assure                 = p.id_police)
          JOIN conducteur_vehicule cv ON (cv.id_cond                  = p.id_police)
          JOIN periode_garantie pg    ON (pg.id_periode               = p.id_police)
          JOIN vehicule v             ON (v.id_vehicule               = p.id_police)
          JOIN decompte_prime dp      ON (dp.id_dp                    = p.id_police)
          JOIN red_maj rm             ON (rm.id_red_maj               = p.id_police)
          JOIN contenir ct            ON (ct.police_id_police         = p.id_police)
          JOIN garantie g             ON (g.id_garantie               = ct.garantie_id_garantie)
          JOIN categorie_vehicule cat ON (v.categorie_vehicule_id_cat = cat.id_cat)
        WHERE p.id_police ="."'".$numPolice."'";
               
        return $this->executeSELECT($sql);
    }
    /**
     * @param Police $us
     * @param $cat
     * @return PDOStatement
     */
    public function getNumPolice(int $us, int $cat)
    {
        $sql="select max(substr(police.num_police,6,8))+1 as numPolice from police
              join vehicule on (vehicule.id_vehicule=police.id_police)
              WHERE vehicule.categorie_vehicule_id_cat='".$cat."' 
              AND police.intermediaire_matricule='".$us."' 
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