<?php

/**
 * Created by PhpStorm.
 * User: mouha
 * Date: 04/08/2017
 * Time: 16:25
 */
class Contenir
{
    private $id_contenir;
    private $lim_gant;
    private $franchise;
    private $prime_brute;
    private $prime_prorata;
    private $garantie;
    private $police;


    function __construct($id_contenir='',$lim_gant='',$franchise='',$prime_brute='',$prime_prorata='',$garantie='',$police='')
    {
        $this->id_contenir=$id_contenir;
        $this->lim_gant=$lim_gant;
        $this->franchise=$franchise;
        $this->prime_brute=$prime_brute;
        $this->prime_prorata=$prime_prorata;
        $this->garantie=$garantie;
        $this->police=$police;
    }

    /**
     * @return string
     */
    public function getIdContenir()
    {
        return $this->id_contenir;
    }

    /**
     * @param string $id_contenir
     */
    public function setIdContenir($id_contenir)
    {
        $this->id_contenir = $id_contenir;
    }

    /**
     * @return string
     */
    public function getLimGant()
    {
        return $this->lim_gant;
    }

    /**
     * @param string $lim_gant
     */
    public function setLimGant($lim_gant)
    {
        $this->lim_gant = $lim_gant;
    }

    /**
     * @return string
     */
    public function getFranchise()
    {
        return $this->franchise;
    }

    /**
     * @param string $franchise
     */
    public function setFranchise($franchise)
    {
        $this->franchise = $franchise;
    }

    /**
     * @return string
     */
    public function getPrimeBrute()
    {
        return $this->prime_brute;
    }

    /**
     * @param string $prime_brute
     */
    public function setPrimeBrute($prime_brute)
    {
        $this->prime_brute = $prime_brute;
    }

    /**
     * @return string
     */
    public function getPrimeProrata()
    {
        return $this->prime_prorata;
    }

    /**
     * @param string $prime_prorata
     */
    public function setPrimeProrata($prime_prorata)
    {
        $this->prime_prorata = $prime_prorata;
    }

    /**
     * @return string
     */
    public function getGarantie()
    {
        return $this->garantie;
    }

    /**
     * @param string $garantie
     */
    public function setGarantie($garantie)
    {
        $this->garantie = $garantie;
    }

    /**
     * @return string
     */
    public function getPolice()
    {
        return $this->police;
    }

    /**
     * @param string $police
     */
    public function setPolice($police)
    {
        $this->police = $police;
    }



}