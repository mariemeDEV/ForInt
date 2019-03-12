<?php
//Definre a route from root folder
define('__ROOT__',dirname(dirname(__FILE__)));
require_once(__ROOT__.'/model/Dbao.php'); 


class IntermediaireDao extends Dbao{
    function __construct()
    {

    }

    public  function getAllMail(){
        $sql="SELECT email from intermediaire";

        return $this->executeSELECT($sql);
    }

    public  function getUserByMail(Intermediaire $us){
        $sql="SELECT * from intermediaire where email='".$us->getEmail()."'";

        return $this->executeSELECT($sql);
    }

   public  function insererUser(Intermediaire $us){
       $sql="insert into intermediaire values ('".$us->getMatricule()."','".$us->getNom()."','".$us->getPrenom()."',
            '".$us->getAdresse()."','".$us->getTel()."','".$us->getEmail()."','".$us->getMdp()."','".$us->getRole()."','".$us->getActived()."')";

       return $this->executeMAJ($sql);
   }

    public  function getUserByMat(Intermediaire $us){
        $sql="SELECT * from intermediaire WHERE  matricule='".$us->getMatricule()."'";
        return $this->executeSELECT($sql);
    }

    public  function listUser(){
        $sql="select * from intermediaire  WHERE `role`=2";

        return $this->executeSELECT($sql);
    }
    public  function getInterByMat(Intermediaire $us){
        $sql="
                SELECT * from intermediaire where matricule='".$us->getMatricule()."'";

        return $this->executeSELECT($sql);
    }
    public function modifUser(Intermediaire $us)
    {
        $sql="UPDATE `intermediaire` SET `nom` = '".$us->getNom()."', `prenom` = '".$us->getPrenom()."',
         `adresse` = '".$us->getAdresse()."', `tel` = '".$us->getTel()."', `email` = '".$us->getEmail()."',
          `mdp` = '".$us->getMdp()."'
         WHERE `intermediaire`.`matricule` = '".$us->getMatricule()."'";
        return $this->executeMAJ($sql);
    }
    public function modifMdp(Intermediaire $us)
    {
        $sql="UPDATE `intermediaire` SET `mdp` = '".$us->getMdp()."' WHERE `intermediaire`.`matricule` = '".$us->getMatricule()."'";
        return $this->executeMAJ($sql);
    }

    public function activedUser(Intermediaire $us)
    {
        $sql="UPDATE `intermediaire` SET `actived` = '".$us->getActived()."' WHERE `intermediaire`.`matricule` = '".$us->getMatricule()."'";
        return $this->executeMAJ($sql);

    }

}