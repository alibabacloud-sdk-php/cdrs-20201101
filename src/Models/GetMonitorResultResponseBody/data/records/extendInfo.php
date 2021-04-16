<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CDRS\V20201101\Models\GetMonitorResultResponseBody\data\records;

use AlibabaCloud\Tea\Model;

class extendInfo extends Model
{
    /**
     * @var string
     */
    public $plateNo;
    protected $_name = [
        'plateNo' => 'PlateNo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->plateNo) {
            $res['PlateNo'] = $this->plateNo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return extendInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PlateNo'])) {
            $model->plateNo = $map['PlateNo'];
        }

        return $model;
    }
}
