<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Premiumpics\V20200505\Models\ListLogosResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $collect;

    /**
     * @var bool
     */
    public $enableChangeColor;

    /**
     * @var bool
     */
    public $enableChangeFont;

    /**
     * @var bool
     */
    public $enableChangeIcon;

    /**
     * @var bool
     */
    public $enableChangeLayout;

    /**
     * @example 6c1ccb5f26794d16bb13330fa84c86c7
     *
     * @var string
     */
    public $goodsId;

    /**
     * @example 57881508017816e0
     *
     * @var int
     */
    public $tagId;

    /**
     * @example https://mcube.mpaas.accelerate.aliyuncs.com/ALIPUBA4BBF1C261233-default/3.0.0.0/ANDROID/app-debug.apk
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'collect'            => 'Collect',
        'enableChangeColor'  => 'EnableChangeColor',
        'enableChangeFont'   => 'EnableChangeFont',
        'enableChangeIcon'   => 'EnableChangeIcon',
        'enableChangeLayout' => 'EnableChangeLayout',
        'goodsId'            => 'GoodsId',
        'tagId'              => 'TagId',
        'url'                => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->collect) {
            $res['Collect'] = $this->collect;
        }
        if (null !== $this->enableChangeColor) {
            $res['EnableChangeColor'] = $this->enableChangeColor;
        }
        if (null !== $this->enableChangeFont) {
            $res['EnableChangeFont'] = $this->enableChangeFont;
        }
        if (null !== $this->enableChangeIcon) {
            $res['EnableChangeIcon'] = $this->enableChangeIcon;
        }
        if (null !== $this->enableChangeLayout) {
            $res['EnableChangeLayout'] = $this->enableChangeLayout;
        }
        if (null !== $this->goodsId) {
            $res['GoodsId'] = $this->goodsId;
        }
        if (null !== $this->tagId) {
            $res['TagId'] = $this->tagId;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
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
        if (isset($map['Collect'])) {
            $model->collect = $map['Collect'];
        }
        if (isset($map['EnableChangeColor'])) {
            $model->enableChangeColor = $map['EnableChangeColor'];
        }
        if (isset($map['EnableChangeFont'])) {
            $model->enableChangeFont = $map['EnableChangeFont'];
        }
        if (isset($map['EnableChangeIcon'])) {
            $model->enableChangeIcon = $map['EnableChangeIcon'];
        }
        if (isset($map['EnableChangeLayout'])) {
            $model->enableChangeLayout = $map['EnableChangeLayout'];
        }
        if (isset($map['GoodsId'])) {
            $model->goodsId = $map['GoodsId'];
        }
        if (isset($map['TagId'])) {
            $model->tagId = $map['TagId'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
