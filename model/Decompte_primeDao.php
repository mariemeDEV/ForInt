<?php
require_once 'Dbao.php';

/**
 * Created by PhpStorm.
 * User: mouha
 * Date: 03/08/2017
 * Time: 14:40
 */
class Decompte_primeDao extends DBao
{
    function __construct($db = '')
    {

    }
    public function insererDecompte(Decompte_prime $us)
    {
        $sql="insert into decompte_prime values ('".$us->getIdDp()."','".$us->getTaxe()."','".$us->getAccessoire()."','".$us->getFondGarantie()."',
            '".$us->getPrimeNette()."','".$us->getPrimeTotale()."')";
        return $this->executeMAJ($sql);

    }
    public function selectDecompte(Decompte_prime $us)
    {
        $sql="select * from decompte_prime where id_dp='".$us->getIdDp()."'";
        return $this->executeSELECT($sql);
    }

    public function deleteDecomtpe(Decompte_prime $us)
    {
        $sql="DELETE FROM `decompte_prime` WHERE id_dp='".$us->getIdDp()."' ";
        return $this->executeMAJ($sql);
    }
    
    public function updateDecompte(Decompte_prime $us)
    {
        $sql="UPDATE `Decompte_prime` SET `taxe` = '".$us->getTaxe()."', `accessoire` = '".$us->getAccessoire()."',
         `fond_garantie` = '".$us->getFondGarantie()."', `prime_nette` = '".$us->getPrimeNette()."', `prime_totale` = '".$us->getPrimeTotale()."'
         WHERE `Decompte_prime`.`id_dp` = '".$us->getIdDp
         ()."'";
        return $this->executeMAJ($sql);
    }


}