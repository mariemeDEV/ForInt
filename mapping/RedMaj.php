<?php

/**
 * Created by PhpStorm.
 * User: mouha
 * Date: 03/08/2017
 * Time: 15:17
 */
class RedMaj
{
    private $id_red_maj;
    private $pourcentageBC;
    private $pourcentageRC;
    private $bonus_rc;
    private $reduc_com;

    function __construct($id_red_maj='',$pourcentageBC='',$bonus_rc='',$pourcentageRC='',$reduc_com='')
    {
        $this->id_red_maj=$id_red_maj;
        $this->pourcentageBC=$pourcentageBC;
        $this->bonus_rc=$bonus_rc;
        $this->pourcentageRC=$pourcentageRC;
        $this->reduc_com=$reduc_com;
    }

    /**
     * @return string
     */
    public function getIdRedMaj()
    {
        return $this->id_red_maj;
    }

    /**
     * @param string $id_red_maj
     */
    public function setIdRedMaj($id_red_maj)
    {
        $this->id_red_maj = $id_red_maj;
    }

    /**
     * @return string
     */
    public function getBonusRc()
    {
        return $this->bonus_rc;
    }

    /**
     * @param string $bonus_rc
     */
    public function setBonusRc($bonus_rc)
    {
        $this->bonus_rc = $bonus_rc;
    }

    /**
     * @return string
     */
    public function getReducCom()
    {
        return $this->reduc_com;
    }

    /**
     * @param string $reduc_com
     */
    public function setReducCom($reduc_com)
    {
        $this->reduc_com = $reduc_com;
    }

    /**
     * @return string
     */
    public function getPourcentageBC()
    {
        return $this->pourcentageBC;
    }

    /**
     * @param string $pourcentageBC
     */
    public function setPourcentageBC(string $pourcentageBC)
    {
        $this->pourcentageBC = $pourcentageBC;
    }

    /**
     * @return string
     */
    public function getPourcentageRC()
    {
        return $this->pourcentageRC;
    }

    /**
     * @param string $pourcentageRC
     */
    public function setPourcentageRC(string $pourcentageRC)
    {
        $this->pourcentageRC = $pourcentageRC;
    }



}