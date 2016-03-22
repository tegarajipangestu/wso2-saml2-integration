<?php

namespace WebServices;

class QueryRumpunResponse
{

    /**
     * @var Rumpun $Rumpun
     */
    protected $Rumpun = null;

    /**
     * @param Rumpun $Rumpun
     */
    public function __construct($Rumpun)
    {
      $this->Rumpun = $Rumpun;
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
     * @return \WebServices\QueryRumpunResponse
     */
    public function setRumpun($Rumpun)
    {
      $this->Rumpun = $Rumpun;
      return $this;
    }

}
