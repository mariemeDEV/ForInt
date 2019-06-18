<?php
require_once 'Dbao.php';
/**
 * Created by PhpStorm.
 * User: mouha
 * Date: 06/08/2017
 * Time: 14:30
 */
class ContenirDao extends DBao
{
    function __construct($db = '')
    {
    }

    public function insererContenir(Contenir $us)
    {
        $sql="insert into contenir values ('".$us->getIdContenir()."','".$us->getLimGant()."','".$us->getFranchise()."',
            '".$us->getPrimeBrute()."','".$us->getPrimeProrata()."','".$us->getGarantie()."','".$us->getPolice()."')";

        return $this->executeMAJ($sql);
    }
    /**********************LES VALEURS DES CHECKBOX ***********************************/
    public function insererContenir1(Contenir $us)
    {
        $sql="insert into contenir values ('".$us->getIdContenir()."','".$us->getLimGant()."','".$us->getFranchise()."',
            '".$us->getPrimeBrute()."','".$us->getPrimeProrata()."','".$us->getGarantie()."','".$us->getPolice()."')";

        return $this->executeMAJ($sql);
    }

    //------------------update contenir 1----------------
    public function updateContenrir1(contenir $us)
    {
        $sql="UPDATE contenir SET 'lim_gant'='".$us->getLimGant()."','franchise'='".$us->getFranchise()."','prime_brute'='".$us->getPrimeBrute()."','prime_prorata'='".$us->getPrimeProrata()."'
        WHERE 'id_contenir'='".$us->getIdContenir()."'";
        return $this->executeMAJ($sql);
    }

    /**********************LES VALEURS DES CHECKBOX ***********************************/

    public function getLibelle_garantie(String $us)
    {
        $sql="SELECT g.id_garantie, g.libelle_garantie FROM garantie g 
              JOIN contenir c ON (c.garantie_id_garantie=g.id_garantie) where c.police_id_police='".$us."'";
        return $this->executeSELECT($sql);
    }

    /**********************LES VALEURS DES CHECKBOX ***********************************/

    public function getResponsabilite(String $us)
    {
        $sql="SELECT g.libelle_garantie, c.lim_gant,c.franchise,c.prime_brute,c.prime_prorata FROM garantie g 
              JOIN contenir c ON (c.garantie_id_garantie=g.id_garantie) where c.police_id_police='".$us."' AND g.id_garantie=1";
        return $this->executeSELECT($sql);
    }
    /**********************LES VALEURS DES CHECKBOX ***********************************/

    public function getRTI(String $us)
    {
        $sql="SELECT g.libelle_garantie, c.lim_gant,c.franchise,c.prime_brute,c.prime_prorata FROM garantie g 
              JOIN contenir c ON (c.garantie_id_garantie=g.id_garantie) where c.police_id_police='".$us."' AND g.id_garantie=2";
        return $this->executeSELECT($sql);
    }
    /**********************LES VALEURS DES CHECKBOX ***********************************/

    public function getDefense(String $us)
    {
        $sql="SELECT g.libelle_garantie, c.lim_gant,c.franchise,c.prime_brute,c.prime_prorata FROM garantie g 
              JOIN contenir c ON (c.garantie_id_garantie=g.id_garantie) where c.police_id_police='".$us."' AND g.id_garantie=3";
        return $this->executeSELECT($sql);
    }
    /**********************LES VALEURS DES CHECKBOX ***********************************/

    public function getIncendie(String $us)
    {
        $sql="SELECT g.libelle_garantie, c.lim_gant,c.franchise,c.prime_brute,c.prime_prorata FROM garantie g 
              JOIN contenir c ON (c.garantie_id_garantie=g.id_garantie) where c.police_id_police='".$us."' AND g.id_garantie=4";
        return $this->executeSELECT($sql);
    }
    /**********************LES VALEURS DES CHECKBOX ***********************************/

    public function getVol(String $us)
    {
        $sql="SELECT g.libelle_garantie, c.lim_gant,c.franchise,c.prime_brute,c.prime_prorata FROM garantie g 
              JOIN contenir c ON (c.garantie_id_garantie=g.id_garantie) where c.police_id_police='".$us."' AND g.id_garantie=5";
        return $this->executeSELECT($sql);
    }
    /**********************LES VALEURS DES CHECKBOX ***********************************/

    public function getBris(String $us)
    {
        $sql="SELECT g.libelle_garantie, c.lim_gant,c.franchise,c.prime_brute,c.prime_prorata FROM garantie g 
              JOIN contenir c ON (c.garantie_id_garantie=g.id_garantie) where c.police_id_police='".$us."' AND g.id_garantie=6";
        return $this->executeSELECT($sql);
    }
    /**********************LES VALEURS DES CHECKBOX ***********************************/

    public function getTcm(String $us)
    {
        $sql="SELECT g.libelle_garantie, c.lim_gant,c.franchise,c.prime_brute,c.prime_prorata FROM garantie g 
              JOIN contenir c ON (c.garantie_id_garantie=g.id_garantie) where c.police_id_police='".$us."' AND g.id_garantie=7";
        return $this->executeSELECT($sql);
    }
    /**********************LES VALEURS DES CHECKBOX ***********************************/

    public function getTcl(String $us)
    {
        $sql="SELECT g.libelle_garantie, c.lim_gant,c.franchise,c.prime_brute,c.prime_prorata FROM garantie g 
              JOIN contenir c ON (c.garantie_id_garantie=g.id_garantie) where c.police_id_police='".$us."' AND g.id_garantie=8";
        return $this->executeSELECT($sql);
    }
    /**********************LES VALEURS DES CHECKBOX ***********************************/

    public function getAvance1(String $us)
    {
        $sql="SELECT g.libelle_garantie, c.lim_gant,c.franchise,c.prime_brute,c.prime_prorata FROM garantie g 
              JOIN contenir c ON (c.garantie_id_garantie=g.id_garantie) where c.police_id_police='".$us."' AND g.id_garantie=9";
        return $this->executeSELECT($sql);
    }
    /**********************LES VALEURS DES CHECKBOX ***********************************/

    public function getAvance2(String $us)
    {
        $sql="SELECT g.libelle_garantie, c.lim_gant,c.franchise,c.prime_brute,c.prime_prorata FROM garantie g 
              JOIN contenir c ON (c.garantie_id_garantie=g.id_garantie) where c.police_id_police='".$us."' AND g.id_garantie=10";
        return $this->executeSELECT($sql);
    }
    /**********************LES VALEURS DES CHECKBOX ***********************************/

    public function getAvance3(String $us)
    {
        $sql="SELECT g.libelle_garantie, c.lim_gant,c.franchise,c.prime_brute,c.prime_prorata FROM garantie g 
              JOIN contenir c ON (c.garantie_id_garantie=g.id_garantie) where c.police_id_police='".$us."' AND g.id_garantie=11";
        return $this->executeSELECT($sql);
    }
    /**********************LES VALEURS DES CHECKBOX ***********************************/

    public function getPersonne1(String $us)
    {
        $sql="SELECT g.libelle_garantie, c.lim_gant,c.franchise,c.prime_brute,c.prime_prorata FROM garantie g 
              JOIN contenir c ON (c.garantie_id_garantie=g.id_garantie) where c.police_id_police='".$us."' AND g.id_garantie=12";
        return $this->executeSELECT($sql);
    }
    /**********************LES VALEURS DES CHECKBOX ***********************************/

    public function getPersonne2(String $us)
    {
        $sql="SELECT g.libelle_garantie, c.lim_gant,c.franchise,c.prime_brute,c.prime_prorata FROM garantie g 
              JOIN contenir c ON (c.garantie_id_garantie=g.id_garantie) where c.police_id_police='".$us."' AND g.id_garantie=13";
        return $this->executeSELECT($sql);
    }
    /**********************LES VALEURS DES CHECKBOX ***********************************/

    public function getPersonne3(String $us)
    {
        $sql="SELECT g.libelle_garantie, c.lim_gant,c.franchise,c.prime_brute,c.prime_prorata FROM garantie g 
              JOIN contenir c ON (c.garantie_id_garantie=g.id_garantie) where c.police_id_police='".$us."' AND g.id_garantie=14";
        return $this->executeSELECT($sql);
    }
    /**********************LES VALEURS DES CHECKBOX ***********************************/

    public function getAssistance(String $us)
    {
        $sql="SELECT g.libelle_garantie, c.lim_gant,c.franchise,c.prime_brute,c.prime_prorata FROM garantie g 
              JOIN contenir c ON (c.garantie_id_garantie=g.id_garantie) where c.police_id_police='".$us."' AND g.id_garantie=15";
        return $this->executeSELECT($sql);
    }
    public function updateContenir(Contenir $us)
    {
        $sql="UPDATE `contenir` SET `lim_gant` = '".$us->getLimGant()."', `franchise
        ` = '".$us->getFranchise()."',
         `prime_brute` = '".$us->getPrimeBrute()."', `prime_prorata` = '".$us->getPrimeProrata()."', `garantie_id_garantie` = '".$us->getGarantie()."','police_id_police'='".$us->getPolice()."'
         WHERE `contenir`.`id_contenir;` = '".$us->getIdContenir()
         ()."'";
        return $this->executeMAJ($sql);
    }



}