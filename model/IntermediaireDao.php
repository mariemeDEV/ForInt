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

     public  function getUserByMail(string $email){
        $sql="SELECT * from intermediaire where email='".$email."'";
        return $this->executeSELECT($sql);
    }

   public  function insererUser(Intermediaire $us){
       $sql="insert into intermediaire values ('".$us->getMatricule()."','".$us->getNom()."','".$us->getPrenom()."',
            '".$us->getAdresse()."','".$us->getTel()."','".$us->getEmail()."','".$us->getMdp()."','".$us->getRole()."','".$us->getActived()."')";
       return $this->executeMAJ($sql);
   }

    public  function getUserByMat(int $matricule){
        $sql="select * from intermediaire where matricule='".$matricule."'";
        return $this->executeSELECT($sql);
    }

    public  function listUser(){
        $sql="select * from intermediaire  WHERE `role`=2";
        return $this->executeSELECT($sql);
    }
    public  function getInterByMat(Intermediaire $us){
        $sql="SELECT * from intermediaire where matricule='".$us->getMatricule()."'";

        return $this->executeSELECT($sql);
    }
    public function modifUser(Intermediaire $us)
    {
        $sql="UPDATE `intermediaire` SET `nom` = '".$us->getNom()."', `prenom` = '".$us->getPrenom()."',`adresse` = '".$us->getAdresse()."', `tel` = '".$us->getTel()."', `email` = '".$us->getEmail()."'WHERE `intermediaire`.`matricule` = '".$us->getMatricule()."'";
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
    public function getContrats(Intermediaire $intermediaire){
        $sql="SELECT p.id_police, p.num_police, p.date_police,p.attestation,p.attestation_cedeao,p.numFacture, i.matricule,i.prenom,i.nom,i.adresse,i.tel, a.nom_assure, a.prenom_assure,a.adresse_assure, a.tel_assure from police p
        JOIN intermediaire as i on p.intermediaire_matricule=i.matricule
        JOIN assure as a on (p.assure_id_assure=a.id_assure) 
        where p.intermediaire_matricule='".$intermediaire->getMatricule()."'";
  return $this->executeSELECT($sql);
        echo("ok");
    }

}