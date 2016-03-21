<?php

class CreateJabatanResponse
{

    /**
     * @var boolean $Status
     */
    protected $Status = null;

    /**
     * @var string $Message
     */
    protected $Message = null;

    /**
     * @param boolean $Status
     * @param string $Message
     */
    public function __construct($Status, $Message)
    {
      $this->Status = $Status;
      $this->Message = $Message;
    }

    /**
     * @return boolean
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param boolean $Status
     * @return CreateJabatanResponse
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
      return $this->Message;
    }

    /**
     * @param string $Message
     * @return CreateJabatanResponse
     */
    public function setMessage($Message)
    {
      $this->Message = $Message;
      return $this;
    }

}
