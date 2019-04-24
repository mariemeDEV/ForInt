<?php
/**
 * Created by PhpStorm.
 * User: mouha
 * Date: 06/12/2017
 * Time: 09:20
 */

class SchemaData
{
    private $datevali;
    private $datesous;
    private $datesais;
    private $id_police;

    function __construct($datevali='',$datesous='',$datesais='',$id_police='')
    {
        $this->datevali=$datevali;
        $this->datesous = $datesous;
        $this->datesais = $datesais;
        $this->id_police = $id_police;
    }

    /**
     * @return string
     */
    public function getDatevali()
    {
        return $this->datevali;
    }

    /**
     * @param string $datevali
     */
    public function setDatevali(string $datevali)
    {
        $this->datevali = $datevali;
    }

    /**
     * @return string
     */
    public function getDatesous()
    {
        return $this->datesous;
    }

    /**
     * @param string $datesous
     */
    public function setDatesous(string $datesous)
    {
        $this->datesous = $datesous;
    }

    /**
     * @return string
     */
    public function getDatesais()
    {
        return $this->datesais;
    }

    /**
     * @param string $datesais
     */
    public function setDatesais(string $datesais)
    {
        $this->datesais = $datesais;
    }

    /**
     * @return string
     */
    public function getIdPolice()
    {
        return $this->id_police;
    }

    /**
     * @param string $id_police
     */
    public function setIdPolice(string $id_police)
    {
        $this->id_police = $id_police;
    }
}