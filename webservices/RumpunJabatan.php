<?php

class RumpunJabatan extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
  'QueryRumpunResponse' => '\\QueryRumpunResponse',
  'Rumpun' => '\\Rumpun',
  'CreateRumpunResponse' => '\\CreateRumpunResponse',
  'ModifyRumpunResponse' => '\\ModifyRumpunResponse',
  'RemoveRumpunResponse' => '\\RemoveRumpunResponse',
  'QueryJabatanResponse' => '\\QueryJabatanResponse',
  'RemoveJabatanResponse' => '\\RemoveJabatanResponse',
  'ModifyJabatanResponse' => '\\ModifyJabatanResponse',
  'CreateJabatanResponse' => '\\CreateJabatanResponse',
  'Jabatan' => '\\Jabatan',
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
        $wsdl = 'http://dev.divusi.com/services/RumpunJabatan?WSDL';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @param Rumpun $parameters
     * @return QueryRumpunResponse
     */
    public function QueryRumpun(Rumpun $parameters)
    {
      return $this->__soapCall('QueryRumpun', array($parameters));
    }

    /**
     * @param Rumpun $parameters
     * @return CreateRumpunResponse
     */
    public function CreateRumpun(Rumpun $parameters)
    {
      return $this->__soapCall('CreateRumpun', array($parameters));
    }

    /**
     * @param Rumpun $parameters
     * @return ModifyRumpunResponse
     */
    public function ModifyRumpun(Rumpun $parameters)
    {
      return $this->__soapCall('ModifyRumpun', array($parameters));
    }

    /**
     * @param Rumpun $parameters
     * @return RemoveRumpunResponse
     */
    public function RemoveRumpun(Rumpun $parameters)
    {
      return $this->__soapCall('RemoveRumpun', array($parameters));
    }

    /**
     * @param Jabatan $parameters
     * @return QueryJabatanResponse
     */
    public function QueryJabatan(Jabatan $parameters)
    {
      return $this->__soapCall('QueryJabatan', array($parameters));
    }

    /**
     * @param Jabatan $parameters
     * @return CreateJabatanResponse
     */
    public function CreateJabatan(Jabatan $parameters)
    {
      return $this->__soapCall('CreateJabatan', array($parameters));
    }

    /**
     * @param Jabatan $parameters
     * @return ModifyJabatanResponse
     */
    public function ModifyJabatan(Jabatan $parameters)
    {
      return $this->__soapCall('ModifyJabatan', array($parameters));
    }

    /**
     * @param Jabatan $parameters
     * @return RemoveJabatanResponse
     */
    public function RemoveJabatan(Jabatan $parameters)
    {
      return $this->__soapCall('RemoveJabatan', array($parameters));
    }

}
