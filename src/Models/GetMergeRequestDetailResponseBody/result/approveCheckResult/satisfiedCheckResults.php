<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Codeup\V20200414\Models\GetMergeRequestDetailResponseBody\result\approveCheckResult;

use AlibabaCloud\SDK\Codeup\V20200414\Models\GetMergeRequestDetailResponseBody\result\approveCheckResult\satisfiedCheckResults\extraUsers;
use AlibabaCloud\Tea\Model;

class satisfiedCheckResults extends Model
{
    /**
     * @var string
     */
    public $checkStatus;

    /**
     * @var string
     */
    public $checkType;

    /**
     * @var string
     */
    public $checkName;

    /**
     * @var extraUsers[]
     */
    public $extraUsers;

    /**
     * @var string[]
     */
    public $unsatisfiedItems;

    /**
     * @var string[]
     */
    public $satisfiedItems;
    protected $_name = [
        'checkStatus'      => 'CheckStatus',
        'checkType'        => 'CheckType',
        'checkName'        => 'CheckName',
        'extraUsers'       => 'ExtraUsers',
        'unsatisfiedItems' => 'UnsatisfiedItems',
        'satisfiedItems'   => 'SatisfiedItems',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkStatus) {
            $res['CheckStatus'] = $this->checkStatus;
        }
        if (null !== $this->checkType) {
            $res['CheckType'] = $this->checkType;
        }
        if (null !== $this->checkName) {
            $res['CheckName'] = $this->checkName;
        }
        if (null !== $this->extraUsers) {
            $res['ExtraUsers'] = [];
            if (null !== $this->extraUsers && \is_array($this->extraUsers)) {
                $n = 0;
                foreach ($this->extraUsers as $item) {
                    $res['ExtraUsers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->unsatisfiedItems) {
            $res['UnsatisfiedItems'] = $this->unsatisfiedItems;
        }
        if (null !== $this->satisfiedItems) {
            $res['SatisfiedItems'] = $this->satisfiedItems;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return satisfiedCheckResults
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckStatus'])) {
            $model->checkStatus = $map['CheckStatus'];
        }
        if (isset($map['CheckType'])) {
            $model->checkType = $map['CheckType'];
        }
        if (isset($map['CheckName'])) {
            $model->checkName = $map['CheckName'];
        }
        if (isset($map['ExtraUsers'])) {
            if (!empty($map['ExtraUsers'])) {
                $model->extraUsers = [];
                $n                 = 0;
                foreach ($map['ExtraUsers'] as $item) {
                    $model->extraUsers[$n++] = null !== $item ? extraUsers::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['UnsatisfiedItems'])) {
            if (!empty($map['UnsatisfiedItems'])) {
                $model->unsatisfiedItems = $map['UnsatisfiedItems'];
            }
        }
        if (isset($map['SatisfiedItems'])) {
            if (!empty($map['SatisfiedItems'])) {
                $model->satisfiedItems = $map['SatisfiedItems'];
            }
        }

        return $model;
    }
}
