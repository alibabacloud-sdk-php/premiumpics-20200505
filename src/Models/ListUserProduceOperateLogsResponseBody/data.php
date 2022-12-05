<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Premiumpics\V20200505\Models\ListUserProduceOperateLogsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $bizType;

    /**
     * @var string
     */
    public $operateName;

    /**
     * @var int
     */
    public $operateTime;

    /**
     * @var string
     */
    public $operateUserType;
    protected $_name = [
        'bizId'           => 'BizId',
        'bizType'         => 'BizType',
        'operateName'     => 'OperateName',
        'operateTime'     => 'OperateTime',
        'operateUserType' => 'OperateUserType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->operateName) {
            $res['OperateName'] = $this->operateName;
        }
        if (null !== $this->operateTime) {
            $res['OperateTime'] = $this->operateTime;
        }
        if (null !== $this->operateUserType) {
            $res['OperateUserType'] = $this->operateUserType;
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
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['OperateName'])) {
            $model->operateName = $map['OperateName'];
        }
        if (isset($map['OperateTime'])) {
            $model->operateTime = $map['OperateTime'];
        }
        if (isset($map['OperateUserType'])) {
            $model->operateUserType = $map['OperateUserType'];
        }

        return $model;
    }
}
