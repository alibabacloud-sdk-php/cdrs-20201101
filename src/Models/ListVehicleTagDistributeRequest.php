<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CDRS\V20201101\Models;

use AlibabaCloud\Tea\Model;

class ListVehicleTagDistributeRequest extends Model
{
    /**
     * @var string
     */
    public $corpId;

    /**
     * @var string
     */
    public $tagCode;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $endTime;
    protected $_name = [
        'corpId'    => 'CorpId',
        'tagCode'   => 'TagCode',
        'startTime' => 'StartTime',
        'endTime'   => 'EndTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->corpId) {
            $res['CorpId'] = $this->corpId;
        }
        if (null !== $this->tagCode) {
            $res['TagCode'] = $this->tagCode;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListVehicleTagDistributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CorpId'])) {
            $model->corpId = $map['CorpId'];
        }
        if (isset($map['TagCode'])) {
            $model->tagCode = $map['TagCode'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        return $model;
    }
}
