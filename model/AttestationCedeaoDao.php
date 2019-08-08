<?php
require_once 'Dbao.php';

class AttestationCedeaoDao extends DBao
{

//Liste attestations vertes
     /**
     * @return PDOStatement
     */
    public function listAttestations(string $login)
    {
        $sql="select * from attestation_cedeao where etat_actuel='attribue' AND etat_sortie='restante' AND intermediaire='".$login."'";
        return $this->executeSELECT($sql);
    }

     //Update attestation
     public function setToSoldCedeao(string $numero){
        $sql="UPDATE attestation_cedeao set etat_sortie='vendue' WHERE numero_attestation='".$numero."'";
        return $this->executeSELECT($sql);
    }


//Liste attestations vertes
     /**
     * @return PDOStatement
     */
    public function listeAttestationsLibres(string $login){
        $sql="select * from attestation_cedeao where intermediaire='NULL' AND intermediaire='".$login."'";
        return $this->executeSELECT($sql);
    }

    //Liste attestations cedeao
     /**
     * @return PDOStatement
     */
    public function getAttestations()
    {
        $sql="select numero_attestation from attestation_cedeao where etat_actuel='libre' ";
        return $this->executeSELECT($sql);
    }


}