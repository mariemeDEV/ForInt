<?php
require_once 'Dbao.php';
class AssureDao extends Dbao{
    function __construct()
    {

    }

    public function insererAssure(Assure $us)
    {
       $sql="insert into assure values ('".$us->getId_assure()."','".$us->getNom_assure()."','".$us->getPrenom_assure()."',
            '".$us->getAdresse_assure()."','".$us->getTel_assure()."','".$us->getEmailAssure()."')";
// insert into `vehicule` values ("000000",'peugeot','405','002222','9', '102','plus de 3.5tonnes','5','p','5','10', '2014/12/20','2000000','1000000','Ndongo','1')

       return $this->executeMAJ($sql);

    }

    public function selectAssure(Assure $us)
    {
        $sql="select * from assure where id_assure='".$us->getId_assure()."'";
        return $this->executeSELECT($sql);
    }

    public function deleteAssure(Assure $us)
    {
        $sql="DELETE FROM `assure` WHERE id_assure='".$us->getId_assure()."'";
        return $this->executeMAJ($sql);
    }
    public function listAssure()
    {
        $sql="select DISTINCTROW * from assure";
        return $this->executeSELECT($sql);
    }
    public function updateAssure(Assure $us)
    {
        $sql="UPDATE `assure` SET `nom_assure` = '".$us->getNom_assure()."', `prenom_assure` = '".$us->getPrenom_assure()."',
         `adresse_assure` = '".$us->getAdresse_assure."', `tel_assure` = '".$us->getTel_assure()."', `email_assure` = '".$us->getEmailAssure()."'
         WHERE `assure`.`id_assure;` = '".$us->getId_assure()."'";
        return $this->executeMAJ($sql);
    }
    public  function getInterByid_assure(Intermediaire $us){
        $sql="SELECT * from assure where id_assure='".$us->getId_assure()."'";

        return $this->executeSELECT($sql);
    }
}