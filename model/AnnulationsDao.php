<?php
require_once 'Dbao.php';

/**
 * Created by PhpStorm.
 * User: mouha
 * Date: 07/08/2017
 * Time: 09:52
 */
class AnnulationDAO extends DBao
{
   
    public function getAnnulations(String $intermediaire)
    {
        $sql="	 SELECT 
        p.id_police,p.num_police,p.date_police ,p.attestation,p.numFacture,
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
 
}
