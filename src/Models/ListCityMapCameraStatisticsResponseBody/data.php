<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CDRS\V20201101\Models\ListCityMapCameraStatisticsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $oldValue;

    /**
     * @var string
     */
    public $dataSourceName;

    /**
     * @var string
     */
    public $dataSourceId;

    /**
     * @var string
     */
    public $statisticTime;

    /**
     * @var string
     */
    public $adultValue;

    /**
     * @var string
     */
    public $childValue;

    /**
     * @var string
     */
    public $manValue;

    /**
     * @var string
     */
    public $corpId;

    /**
     * @var string
     */
    public $motorValue;

    /**
     * @var string
     */
    public $longitude;

    /**
     * @var string
     */
    public $latitude;

    /**
     * @var string
     */
    public $womanValue;
    protected $_name = [
        'oldValue'       => 'OldValue',
        'dataSourceName' => 'DataSourceName',
        'dataSourceId'   => 'DataSourceId',
        'statisticTime'  => 'StatisticTime',
        'adultValue'     => 'AdultValue',
        'childValue'     => 'ChildValue',
        'manValue'       => 'ManValue',
        'corpId'         => 'CorpId',
        'motorValue'     => 'MotorValue',
        'longitude'      => 'Longitude',
        'latitude'       => 'Latitude',
        'womanValue'     => 'WomanValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->oldValue) {
            $res['OldValue'] = $this->oldValue;
        }
        if (null !== $this->dataSourceName) {
            $res['DataSourceName'] = $this->dataSourceName;
        }
        if (null !== $this->dataSourceId) {
            $res['DataSourceId'] = $this->dataSourceId;
        }
        if (null !== $this->statisticTime) {
            $res['StatisticTime'] = $this->statisticTime;
        }
        if (null !== $this->adultValue) {
            $res['AdultValue'] = $this->adultValue;
        }
        if (null !== $this->childValue) {
            $res['ChildValue'] = $this->childValue;
        }
        if (null !== $this->manValue) {
            $res['ManValue'] = $this->manValue;
        }
        if (null !== $this->corpId) {
            $res['CorpId'] = $this->corpId;
        }
        if (null !== $this->motorValue) {
            $res['MotorValue'] = $this->motorValue;
        }
        if (null !== $this->longitude) {
            $res['Longitude'] = $this->longitude;
        }
        if (null !== $this->latitude) {
            $res['Latitude'] = $this->latitude;
        }
        if (null !== $this->womanValue) {
            $res['WomanValue'] = $this->womanValue;
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
        if (isset($map['OldValue'])) {
            $model->oldValue = $map['OldValue'];
        }
        if (isset($map['DataSourceName'])) {
            $model->dataSourceName = $map['DataSourceName'];
        }
        if (isset($map['DataSourceId'])) {
            $model->dataSourceId = $map['DataSourceId'];
        }
        if (isset($map['StatisticTime'])) {
            $model->statisticTime = $map['StatisticTime'];
        }
        if (isset($map['AdultValue'])) {
            $model->adultValue = $map['AdultValue'];
        }
        if (isset($map['ChildValue'])) {
            $model->childValue = $map['ChildValue'];
        }
        if (isset($map['ManValue'])) {
            $model->manValue = $map['ManValue'];
        }
        if (isset($map['CorpId'])) {
            $model->corpId = $map['CorpId'];
        }
        if (isset($map['MotorValue'])) {
            $model->motorValue = $map['MotorValue'];
        }
        if (isset($map['Longitude'])) {
            $model->longitude = $map['Longitude'];
        }
        if (isset($map['Latitude'])) {
            $model->latitude = $map['Latitude'];
        }
        if (isset($map['WomanValue'])) {
            $model->womanValue = $map['WomanValue'];
        }

        return $model;
    }
}
