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

//Update attestations vertes
      /**
     * @param string $us
     * @return PDOStatement
     */
    public function setToSoldVertes(string $numero,string $idVente){
        $sql="UPDATE attestation set etat_sortie='vendue',id_vente='".$idVente."' WHERE id_type=1 AND numero_attestation='".$numero."'";
        return $this->executeSELECT($sql);
    }

//Update attestations jaunes
    /**
     * @param string $us
     * @return PDOStatement
     */
    public function setToSoldJaunes(string $numero,string $idVente){
        $sql="UPDATE attestation set etat_sortie='vendue',id_vente='".$idVente."' WHERE id_type=2 AND numero_attestation='".$numero."'";
        return $this->executeSELECT($sql);
    }

//Update attestations jaunes
    /**
     * @param string $us
     * @return PDOStatement
     */
    public function setToSoldCedeao(string $numero,string $idVente){
        $sql="UPDATE attestation set etat_sortie='vendue',id_vente='".$idVente."' WHERE  id_type=3 AND numero_attestation='".$numero."'";
        return $this->executeSELECT($sql);
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
    public function insertDotation(Attestation $attestation)
    {
        $sql="insert into attestation values 
        (
        NULL,
        '".$attestation->getNumero_attestation()."',
        '".$attestation->getIdType()."',
        ".$attestation->getId_vente().",
        ".$attestation->getIntermediaire().",
        '".$attestation->getEtat_actuel()."',
        '".$attestation->getEtat_sortie()."'
        )";
        return $this->executeMAJ($sql);
    }

    public function getIdVente($numero){
        $sql='select numero_attestation, id_vente from attestation where numero_attestation ="'.$numero.'"';
        return $this->executeMAJ($sql);
    }

}