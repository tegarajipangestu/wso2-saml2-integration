<?php

class Rumpun
{

    /**
     * @var int $ID
     */
    protected $ID = null;

    /**
     * @var string $Nama
     */
    protected $Nama = null;

    /**
     * @var string $NomorUrut
     */
    protected $NomorUrut = null;

    /**
     * @param int $ID
     * @param string $Nama
     * @param string $NomorUrut
     */
    public function __construct($ID, $Nama, $NomorUrut)
    {
      $this->ID = $ID;
      $this->Nama = $Nama;
      $this->NomorUrut = $NomorUrut;
    }

    /**
     * @return int
     */
    public function getID()
    {
      return $this->ID;
    }

    /**
     * @param int $ID
     * @return Rumpun
     */
    public function setID($ID)
    {
      $this->ID = $ID;
      return $this;
    }

    /**
     * @return string
     */
    public function getNama()
    {
      return $this->Nama;
    }

    /**
     * @param string $Nama
     * @return Rumpun
     */
    public function setNama($Nama)
    {
      $this->Nama = $Nama;
      return $this;
    }

    /**
     * @return string
     */
    public function getNomorUrut()
    {
      return $this->NomorUrut;
    }

    /**
     * @param string $NomorUrut
     * @return Rumpun
     */
    public function setNomorUrut($NomorUrut)
    {
      $this->NomorUrut = $NomorUrut;
      return $this;
    }

}
