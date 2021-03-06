<?php

namespace Market\Request\V20151101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeLicense
 *
 * @method string getLicenseCode()
 */
class DescribeLicenseRequest extends \RpcAcsRequest
{

    /**
     * @var string
     */
    protected $method = 'POST';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Market',
            '2015-11-01',
            'DescribeLicense',
            'yunmarket'
        );
    }

    /**
     * @param string $licenseCode
     *
     * @return $this
     */
    public function setLicenseCode($licenseCode)
    {
        $this->requestParameters['LicenseCode'] = $licenseCode;
        $this->queryParameters['LicenseCode'] = $licenseCode;

        return $this;
    }
}
