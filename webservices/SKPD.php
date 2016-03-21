<?php

class SKPD
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
     * @param int $ID
     * @param string $Nama
     */
    public function __construct($ID, $Nama)
    {
      $this->ID = $ID;
      $this->Nama = $Nama;
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
     * @return SKPD
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
     * @return SKPD
     */
    public function setNama($Nama)
    {
      $this->Nama = $Nama;
      return $this;
    }

}
