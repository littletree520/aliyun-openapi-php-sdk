<?php

namespace cloudwf\Request\V20170328;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of RepairGroupAp
 *
 * @method string getId()
 */
class RepairGroupApRequest extends \RpcAcsRequest
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
            'cloudwf',
            '2017-03-28',
            'RepairGroupAp',
            'cloudwf'
        );
    }

    /**
     * @param string $id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->requestParameters['Id'] = $id;
        $this->queryParameters['Id'] = $id;

        return $this;
    }
}
