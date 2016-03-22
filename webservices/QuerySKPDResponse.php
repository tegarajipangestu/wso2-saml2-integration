<?php

namespace WebServices;

class QuerySKPDResponse
{

    /**
     * @var SKPD $SKPD
     */
    protected $SKPD = null;

    /**
     * @param SKPD $SKPD
     */
    public function __construct($SKPD)
    {
      $this->SKPD = $SKPD;
    }

    /**
     * @return SKPD
     */
    public function getSKPD()
    {
      return $this->SKPD;
    }

    /**
     * @param SKPD $SKPD
     * @return \WebServices\QuerySKPDResponse
     */
    public function setSKPD($SKPD)
    {
      $this->SKPD = $SKPD;
      return $this;
    }

}
