<?php
require_once 'Dbao.php';

class AttestationDao extends DBao{

//Liste attestations jaunes
  /**
     * @return PDOStatement
     */
    public function getVertes(int $matricule)
    {
        $sql="select * from attestation where id_type=1 AND etat_actuel='attribue' AND etat_sortie='restante' AND intermediaire='".$matricule."'";
        return $this->executeSELECT($sql);
    }

//Liste attestations jaunes
  /**
     * @return PDOStatement
     */
    public function getJaunes(int $matricule)
    {
        $sql="select * from attestation where id_type=2 AND etat_actuel='attribue' AND etat_sortie='restante' AND intermediaire='".$matricule."'";
        return $this->executeSELECT($sql);
    }

//Liste attestations cedeao
  /**
     * @return PDOStatement
     */
    public function getCedeao(int $matricule)
    {
        $sql="select * from attestation where id_type=3 AND etat_actuel='attribue' AND etat_sortie='restante' AND intermediaire='".$matricule."'";
        return $this->executeSELECT($sql);
    }

//Sold
    //Update attestations vertes
      /**
     * @param string $us
     * @return PDOStatement
     */
    public function setToSoldVertes(string $numero){
        $sql="UPDATE attestation set etat_sortie='vendue' WHERE id_type=1 AND numero_attestation='".$numero."'";
        return $this->executeSELECT($sql);
    }

//Update attestations jaunes
    /**
     * @param string $us
     * @return PDOStatement
     */
    public function setToSoldJaunes(string $numero){
        $sql="UPDATE attestation set etat_sortie='vendue' WHERE id_type=2 AND numero_attestation='".$numero."'";
        return $this->executeSELECT($sql);
    }

//Update attestations jaunes
    /**
     * @param string $us
     * @return PDOStatement
     */
    public function setToSoldCedeao(string $numero){
        $sql="UPDATE attestation set etat_sortie='vendue' WHERE id_type=3 AND numero_attestation='".$numero."'";
        return $this->executeSELECT($sql);
    }

     /**
     * @param string $us
     * @return PDOStatement
     */
    public function setToSoldes(string $idVente,string $numero1,string $numero2){
        $sql = "UPDATE attestation set id_vente='".$idVente."' WHERE numero_attestation='".$numero1."' OR numero_attestation='".$numero2."'";
        // $sql="UPDATE attestation set id_vente='".$idVente."' WHERE numero_attestation='".$numero1."' OR numero_attestation='".$numero2."'";
        return $this->executeSELECT($sql);
        // echo($sql);
    }
//Liste attestations 
  /**
     * @return PDOStatement
     */
    public function getAttestations()
    {
        $sql="SELECT a.numero_attestation,t.libelle,i.nom,i.prenom,i.tel,a.etat_actuel,a.etat_sortie FROM `attestation` as a
        JOIN intermediaire  as i ON(a.intermediaire = i.matricule)
        JOIN type_attestation as t ON(a.id_type = t.id_type)";

        return $this->executeSELECT($sql);
    }


    //Types
    //Liste attestations jaunes
  /**
     * @return PDOStatement
     */
    public function getJaunesByType()
    {
        $sql="SELECT numero_attestation FROM `attestation` WHERE id_type=2 AND etat_actuel='libre'";
        return $this->executeSELECT($sql);

    }
     //Liste attestations jaunes
  /**
     * @return PDOStatement
     */
    public function getVertesByType()
    {
        $sql="SELECT numero_attestation FROM `attestation` WHERE id_type=1 AND etat_actuel='libre'";
        return $this->executeSELECT($sql);

    }
     //Liste attestations jaunes
  /**
     * @return PDOStatement
     */
    public function getCedeaoByType()
    {
        $sql="SELECT numero_attestation FROM `attestation` WHERE id_type=3 AND etat_actuel='libre'";
        return $this->executeSELECT($sql);
    }

    public function insertDotation(Attestation $verte)
    {
        // return([$verte->getNumero_attestation(),$verte->getIdAttestation(),$verte->getIdType(),$verte->getIntermediaire(),$verte->getEtat_actuel(),$verte->getEtat_sortie()]);
        $sql="insert into attestation values 
        (
        NULL,
        '".$verte->getNumero_attestation()."',
        ".$verte->getIdType().",
        ".$verte->getIntermediaire().",
        '".$verte->getEtat_actuel()."',
        '".$verte->getEtat_sortie()."'
        )";
        // echo($sql);
        return $this->executeMAJ($sql);
    }


}