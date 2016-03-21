<?php

class QueryAtasanResponse
{

    /**
     * @var Pegawai $Pegawai
     */
    protected $Pegawai = null;

    /**
     * @param Pegawai $Pegawai
     */
    public function __construct($Pegawai)
    {
      $this->Pegawai = $Pegawai;
    }

    /**
     * @return Pegawai
     */
    public function getPegawai()
    {
      return $this->Pegawai;
    }

    /**
     * @param Pegawai $Pegawai
     * @return QueryAtasanResponse
     */
    public function setPegawai($Pegawai)
    {
      $this->Pegawai = $Pegawai;
      return $this;
    }

}
