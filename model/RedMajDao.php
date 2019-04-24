<?php
require_once 'Dbao.php';

/**
 * Created by PhpStorm.
 * User: mouha
 * Date: 03/08/2017
 * Time: 15:21
 */
class RedMajDao extends DBao
{
    function __construct($db = '')
    {
    }
    public function insererRedMaj(RedMaj $maj)
    {
        $sql="INSERT INTO `red_maj` VALUES ('".$maj->getIdRedMaj()."','".$maj->getPourcentageBC()."', '".$maj->getBonusRc()."',
        '".$maj->getPourcentageRC()."', '".$maj->getReducCom()."');";
        return $this->executeMAJ($sql);
    }

    public function selectRedMaj(RedMaj $maj)
    {
        $sql="select * from red_maj where id_red_maj='".$maj->getIdRedMaj()."'";
        return $this->executeSELECT($sql);
    }

    public function deleteRedMaj(RedMaj $us)
    {
        $sql="DELETE FROM `red_maj` WHERE id_red_maj='".$us->getIdRedMaj()."'";
        return $this->executeMAJ($sql);
    }

    public function updateRedMaj(RedMaj $us)
    {
        $sql="UPDATE 'red_maj' SET 'pourcentageBC'='".$us->getPourcentageRC()."','bonus_rc'='".$us->getBonusRc()."','reduc_com'='".$us->getReducCom()."'  
        WHERE 'red_maj'.'id_red_maj'='".$us->getIdRedMaj()."'";
        return $this->executeMAJ($sql);
    }


}