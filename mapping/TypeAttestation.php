<?php
class TypeAttestation
{
    private $id;
    private $type;

    function __construct($id='',$type='')
    {
        $this->id=$id;
        $this->type = $type;
    }

  

    /**
     * Get the value of id
     * @return string
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *@param string
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of type
     *  @return string
     */ 
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *@param string
     * @return  self
     */ 
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }
}