<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Premiumpics\V20200505\Models\ListUserCollectionsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example https://pre-logo.aliyun.com/logo/image?goodsId=cd6c189cc87842afb5985fa1712dc797&type=png
     *
     * @var string
     */
    public $image;

    /**
     * @description id
     *
     * @example cd6c189cc87842afb5985fa1712dc797
     *
     * @var string
     */
    public $unitId;

    /**
     * @var string
     */
    public $unitName;

    /**
     * @example {"cudId":"P20221026203254000001","from":"cud"}
     *
     * @var string
     */
    public $extend;
    protected $_name = [
        'image'    => 'Image',
        'unitId'   => 'UnitId',
        'unitName' => 'UnitName',
        'extend'   => 'extend',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->image) {
            $res['Image'] = $this->image;
        }
        if (null !== $this->unitId) {
            $res['UnitId'] = $this->unitId;
        }
        if (null !== $this->unitName) {
            $res['UnitName'] = $this->unitName;
        }
        if (null !== $this->extend) {
            $res['extend'] = $this->extend;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Image'])) {
            $model->image = $map['Image'];
        }
        if (isset($map['UnitId'])) {
            $model->unitId = $map['UnitId'];
        }
        if (isset($map['UnitName'])) {
            $model->unitName = $map['UnitName'];
        }
        if (isset($map['extend'])) {
            $model->extend = $map['extend'];
        }

        return $model;
    }
}
