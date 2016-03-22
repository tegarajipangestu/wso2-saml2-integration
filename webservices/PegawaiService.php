<?php

namespace WebServices;

class PegawaiService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
  'QueryPegawaiResponse' => 'WebServices\\QueryPegawaiResponse',
  'Pegawai' => 'WebServices\\Pegawai',
  'QueryAtasanResponse' => 'WebServices\\QueryAtasanResponse',
  'QuerySKPDResponse' => 'WebServices\\QuerySKPDResponse',
  'SKPD' => 'WebServices\\SKPD',
  'QueryPegawaiBySKPDResponse' => 'WebServices\\QueryPegawaiBySKPDResponse',
  'QueryPejabatBySKPDResponse' => 'WebServices\\QueryPejabatBySKPDResponse',
);

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
    
  foreach (self::$classmap as $key => $value) {
    if (!isset($options['classmap'][$key])) {
      $options['classmap'][$key] = $value;
    }
  }
      $options = array_merge(array (
  'features' => 1,
), $options);
      if (!$wsdl) {
        $wsdl = 'http://dev.divusi.com/services/Pegawai?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @param PegawaiCustom $parameters
     * @return QueryPegawaiResponse
     */
    public function QueryPegawai($parameters)
    {
      return $this->__soapCall('QueryPegawai', array($parameters));
    }

    /**
     * @param PegawaiCustom $parameters
     * @return QueryAtasanResponse
     */
    public function QueryAtasan($parameters)
    {
      return $this->__soapCall('QueryAtasan', array($parameters));
    }

    /**
     * @param SKPDCustom $parameters
     * @return list(QuerySKPDResponse $parameters, QuerySKPDResponse $parameters)
     */
    public function QuerySKPD($parameters)
    {
      return $this->__soapCall('QuerySKPD', array($parameters));
    }

    /**
     * @param SKPDCustom $parameters
     * @return QueryPegawaiBySKPDResponse
     */
    public function QueryPegawaiBySKPD($parameters)
    {
      return $this->__soapCall('QueryPegawaiBySKPD', array($parameters));
    }

    /**
     * @param SKPDCustom $parameters
     * @return QueryPejabatBySKPDResponse
     */
    public function QueryPejabatBySKPD($parameters)
    {
      return $this->__soapCall('QueryPejabatBySKPD', array($parameters));
    }

}
