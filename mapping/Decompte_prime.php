<?php

/**
 * Created by PhpStorm.
 * User: mouha
 * Date: 03/08/2017
 * Time: 14:21
 */
class Decompte_prime
{
    private $id_dp;
    private $taxe;
    private $accessoire;
    private $fond_garantie;
    private $prime_nette;
    private $prime_totale;

    function __construct($id_dp='',$taxe='',$accessoire='',$fond_garantie='',$prime_nette='',$prime_totale='')
    {
        $this->id_dp=$id_dp;
        $this->taxe=$taxe;
        $this->accessoire=$accessoire;
        $this->fond_garantie=$fond_garantie;
        $this->prime_nette=$prime_nette;
        $this->prime_totale=$prime_totale;
    }

    /**
     * @return string
     */
    public function getIdDp()
    {
        return $this->id_dp;
    }

    /**
     * @param string $id_dp
     */
    public function setIdDp($id_dp)
    {
        $this->id_dp = $id_dp;
    }

    /**
     * @return string
     */
    public function getTaxe()
    {
        return $this->taxe;
    }

    /**
     * @param string $taxe
     */
    public function setTaxe($taxe)
    {
        $this->taxe = $taxe;
    }

    /**
     * @return string
     */
    public function getFondGarantie()
    {
        return $this->fond_garantie;
    }

    /**
     * @param string $fond_garantie
     */
    public function setFondGarantie($fond_garantie)
    {
        $this->fond_garantie = $fond_garantie;
    }

    /**
     * @return string
     */
    public function getPrimeNette()
    {
        return $this->prime_nette;
    }

    /**
     * @param string $prime_nette
     */
    public function setPrimeNette($prime_nette)
    {
        $this->prime_nette = $prime_nette;
    }

    /**
     * @return string
     */
    public function getPrimeTotale()
    {
        return $this->prime_totale;
    }

    /**
     * @param string $prime_totale
     */
    public function setPrimeTotale($prime_totale)
    {
        $this->prime_totale = $prime_totale;
    }

    /**
     * @return string
     */
    public function getAccessoire()
    {
        return $this->accessoire;
    }

    /**
     * @param string $accessoire
     */
    public function setAccessoire(string $accessoire)
    {
        $this->accessoire = $accessoire;
    }



}