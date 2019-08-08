<?php
require_once 'Dbao.php';


class CommandesDao extends DBao
{

    public function insererCommandes(Commandes $c)
    {
       try {
        $dns="mysql:host=127.0.0.1;dbname=forint";
        $user="root";
        $password="";
        $pdo = new PDO($dns, $user, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        $sql = $pdo->prepare(
            "insert into commandes values
            (
                NULL,
                '".$c->getDate_commande()."',
                '".$c->getMatricule_intermediaire()."',
                '".$c->getNombre_attestation_verte()."',
                '".$c->getNombre_attestation_jaune()."',
                '".$c->getNombre_attestation_cedeao()."',
                '".$c->getEtat_commande()."'
            )"
        );
        return $sql->execute();
    }
    catch(Exception $e) {
        echo 'Exception -> ';
        var_dump($e->getMessage());
    }

    }

    public function getCommandes(){
        $sql = "SELECT * FROM commandes";
        return $this->executeSELECT($sql);
    }
    public function getCommande($id){
        $sql = "SELECT * FROM commandes WHERE id_commande=$id";
        return $this->executeSELECT($sql);
    }
    public function cancelCommande($id){
        $sql="UPDATE commandes SET etat_commande='Annule' WHERE id_commande=$id";
        return $this->executeMAJ($sql);

    }

}