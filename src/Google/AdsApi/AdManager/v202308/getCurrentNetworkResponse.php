<?php

namespace Google\AdsApi\AdManager\v202308;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getCurrentNetworkResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202308\Network $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202308\Network $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202308\Network
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202308\Network $rval
     * @return \Google\AdsApi\AdManager\v202308\getCurrentNetworkResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
