<?php

namespace WebServices;

class Jabatan
{

    /**
     * @var int $ID
     */
    protected $ID = null;

    /**
     * @var Rumpun $Rumpun
     */
    protected $Rumpun = null;

    /**
     * @var string $Nama
     */
    protected $Nama = null;

    /**
     * @var string $Kualifikasi
     */
    protected $Kualifikasi = null;

    /**
     * @var string $Keterangan
     */
    protected $Keterangan = null;

    /**
     * @var string $Kode
     */
    protected $Kode = null;

    /**
     * @var int $Nilai
     */
    protected $Nilai = null;

    /**
     * @param int $ID
     * @param Rumpun $Rumpun
     * @param string $Nama
     * @param string $Kualifikasi
     * @param string $Keterangan
     * @param string $Kode
     * @param int $Nilai
     */
    public function __construct($ID, $Rumpun, $Nama, $Kualifikasi, $Keterangan, $Kode, $Nilai)
    {
      $this->ID = $ID;
      $this->Rumpun = $Rumpun;
      $this->Nama = $Nama;
      $this->Kualifikasi = $Kualifikasi;
      $this->Keterangan = $Keterangan;
      $this->Kode = $Kode;
      $this->Nilai = $Nilai;
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
     * @return \WebServices\Jabatan
     */
    public function setID($ID)
    {
      $this->ID = $ID;
      return $this;
    }

    /**
     * @return Rumpun
     */
    public function getRumpun()
    {
      return $this->Rumpun;
    }

    /**
     * @param Rumpun $Rumpun
     * @return \WebServices\Jabatan
     */
    public function setRumpun($Rumpun)
    {
      $this->Rumpun = $Rumpun;
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
     * @return \WebServices\Jabatan
     */
    public function setNama($Nama)
    {
      $this->Nama = $Nama;
      return $this;
    }

    /**
     * @return string
     */
    public function getKualifikasi()
    {
      return $this->Kualifikasi;
    }

    /**
     * @param string $Kualifikasi
     * @return \WebServices\Jabatan
     */
    public function setKualifikasi($Kualifikasi)
    {
      $this->Kualifikasi = $Kualifikasi;
      return $this;
    }

    /**
     * @return string
     */
    public function getKeterangan()
    {
      return $this->Keterangan;
    }

    /**
     * @param string $Keterangan
     * @return \WebServices\Jabatan
     */
    public function setKeterangan($Keterangan)
    {
      $this->Keterangan = $Keterangan;
      return $this;
    }

    /**
     * @return string
     */
    public function getKode()
    {
      return $this->Kode;
    }

    /**
     * @param string $Kode
     * @return \WebServices\Jabatan
     */
    public function setKode($Kode)
    {
      $this->Kode = $Kode;
      return $this;
    }

    /**
     * @return int
     */
    public function getNilai()
    {
      return $this->Nilai;
    }

    /**
     * @param int $Nilai
     * @return \WebServices\Jabatan
     */
    public function setNilai($Nilai)
    {
      $this->Nilai = $Nilai;
      return $this;
    }

}
