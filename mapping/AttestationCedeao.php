<?php
class AttestationCedeao
{
    private $id_attestation;
    private $numero_attestation;


    function __construct($id_attestation='',$numero_attestation='')
    {
        $this->id_attestation     = $id_attestation;
        $this->numero_attestation = $numero_attestation;
    }

    /**
     * Get the value of id_attestation
     * 
     * @return int
     */ 
    public function getIdAttestation()
    {
        return $this->id_attestation;
    }

    /**
    
     * Get the value of numero_attestation
     * 
     * @return int
     */ 
    public function getNumero_attestation()
    {
        return $this->numero_attestation;
    }

    /**
     * Set the value of numero_attestation
     *
     * @return  self
     */ 
    public function setNumeroAttestation($numero_attestation)
    {
        $this->numero_attestation = $numero_attestation;

        return $this;
    }

    }

  
