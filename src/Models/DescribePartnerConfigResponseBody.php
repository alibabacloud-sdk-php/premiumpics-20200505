<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Premiumpics\V20200505\Models;

use AlibabaCloud\Tea\Model;

class DescribePartnerConfigResponseBody extends Model
{
    /**
     * @example aaa
     *
     * @var string
     */
    public $contact;

    /**
     * @example luokeke
     *
     * @var string
     */
    public $partnerCode;

    /**
     * @var string
     */
    public $partnerName;

    /**
     * @example 3B7E24E8-33C1-5C62-9EDF-1743C060E038
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'contact'     => 'Contact',
        'partnerCode' => 'PartnerCode',
        'partnerName' => 'PartnerName',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contact) {
            $res['Contact'] = $this->contact;
        }
        if (null !== $this->partnerCode) {
            $res['PartnerCode'] = $this->partnerCode;
        }
        if (null !== $this->partnerName) {
            $res['PartnerName'] = $this->partnerName;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePartnerConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Contact'])) {
            $model->contact = $map['Contact'];
        }
        if (isset($map['PartnerCode'])) {
            $model->partnerCode = $map['PartnerCode'];
        }
        if (isset($map['PartnerName'])) {
            $model->partnerName = $map['PartnerName'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
