<?php
require_once 'Dbao.php';

class TypeAttestationDao extends DBao
{
     /**
     * @return PDOStatement
     */
    public function listTypes()
    {
        $sql="SELECT * from type_attestation";
        return $this->executeSELECT($sql);
    }
}