<?php

class Pegawai
{

    /**
     * @var string $NIP
     */
    protected $NIP = null;

    /**
     * @var string $Nama
     */
    protected $Nama = null;

    /**
     * @var string $Golongan
     */
    protected $Golongan = null;

    /**
     * @var string $UnitKerja
     */
    protected $UnitKerja = null;

    /**
     * @var string $Pangkat
     */
    protected $Pangkat = null;

    /**
     * @var string $Jabatan
     */
    protected $Jabatan = null;

    /**
     * @param string $NIP
     * @param string $Nama
     * @param string $Golongan
     * @param string $UnitKerja
     * @param string $Pangkat
     */
    public function __construct($NIP, $Nama, $Golongan, $UnitKerja, $Pangkat)
    {
      $this->NIP = $NIP;
      $this->Nama = $Nama;
      $this->Golongan = $Golongan;
      $this->UnitKerja = $UnitKerja;
      $this->Pangkat = $Pangkat;
    }

    /**
     * @return string
     */
    public function getNIP()
    {
      return $this->NIP;
    }

    /**
     * @param string $NIP
     * @return Pegawai
     */
    public function setNIP($NIP)
    {
      $this->NIP = $NIP;
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
     * @return Pegawai
     */
    public function setNama($Nama)
    {
      $this->Nama = $Nama;
      return $this;
    }

    /**
     * @return string
     */
    public function getGolongan()
    {
      return $this->Golongan;
    }

    /**
     * @param string $Golongan
     * @return Pegawai
     */
    public function setGolongan($Golongan)
    {
      $this->Golongan = $Golongan;
      return $this;
    }

    /**
     * @return string
     */
    public function getUnitKerja()
    {
      return $this->UnitKerja;
    }

    /**
     * @param string $UnitKerja
     * @return Pegawai
     */
    public function setUnitKerja($UnitKerja)
    {
      $this->UnitKerja = $UnitKerja;
      return $this;
    }

    /**
     * @return string
     */
    public function getPangkat()
    {
      return $this->Pangkat;
    }

    /**
     * @param string $Pangkat
     * @return Pegawai
     */
    public function setPangkat($Pangkat)
    {
      $this->Pangkat = $Pangkat;
      return $this;
    }

    /**
     * @return string
     */
    public function getJabatan()
    {
      return $this->Jabatan;
    }

    /**
     * @param string $Jabatan
     * @return Pegawai
     */
    public function setJabatan($Jabatan)
    {
      $this->Jabatan = $Jabatan;
      return $this;
    }

}
