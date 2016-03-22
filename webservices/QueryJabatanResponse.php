<?php

namespace WebServices;

class QueryJabatanResponse
{

    /**
     * @var Jabatan $Jabatan
     */
    protected $Jabatan = null;

    /**
     * @param Jabatan $Jabatan
     */
    public function __construct($Jabatan)
    {
      $this->Jabatan = $Jabatan;
    }

    /**
     * @return Jabatan
     */
    public function getJabatan()
    {
      return $this->Jabatan;
    }

    /**
     * @param Jabatan $Jabatan
     * @return \WebServices\QueryJabatanResponse
     */
    public function setJabatan($Jabatan)
    {
      $this->Jabatan = $Jabatan;
      return $this;
    }

}
