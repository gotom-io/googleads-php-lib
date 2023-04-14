<?php

namespace Google\AdsApi\AdManager\v202211;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getLineItemCreativeAssociationsByStatementResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202211\LineItemCreativeAssociationPage $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202211\LineItemCreativeAssociationPage $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202211\LineItemCreativeAssociationPage
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202211\LineItemCreativeAssociationPage $rval
     * @return \Google\AdsApi\AdManager\v202211\getLineItemCreativeAssociationsByStatementResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}