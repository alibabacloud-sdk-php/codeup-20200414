<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Codeup\V20200414\Models\GetMergeRequestDetailResponseBody\result;

use AlibabaCloud\SDK\Codeup\V20200414\Models\GetMergeRequestDetailResponseBody\result\approveCheckResult\satisfiedCheckResults;
use AlibabaCloud\SDK\Codeup\V20200414\Models\GetMergeRequestDetailResponseBody\result\approveCheckResult\unsatisfiedCheckResults;
use AlibabaCloud\Tea\Model;

class approveCheckResult extends Model
{
    /**
     * @var string
     */
    public $totalCheckResult;

    /**
     * @var satisfiedCheckResults[]
     */
    public $satisfiedCheckResults;

    /**
     * @var unsatisfiedCheckResults[]
     */
    public $unsatisfiedCheckResults;
    protected $_name = [
        'totalCheckResult'        => 'TotalCheckResult',
        'satisfiedCheckResults'   => 'SatisfiedCheckResults',
        'unsatisfiedCheckResults' => 'UnsatisfiedCheckResults',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCheckResult) {
            $res['TotalCheckResult'] = $this->totalCheckResult;
        }
        if (null !== $this->satisfiedCheckResults) {
            $res['SatisfiedCheckResults'] = [];
            if (null !== $this->satisfiedCheckResults && \is_array($this->satisfiedCheckResults)) {
                $n = 0;
                foreach ($this->satisfiedCheckResults as $item) {
                    $res['SatisfiedCheckResults'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->unsatisfiedCheckResults) {
            $res['UnsatisfiedCheckResults'] = [];
            if (null !== $this->unsatisfiedCheckResults && \is_array($this->unsatisfiedCheckResults)) {
                $n = 0;
                foreach ($this->unsatisfiedCheckResults as $item) {
                    $res['UnsatisfiedCheckResults'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return approveCheckResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalCheckResult'])) {
            $model->totalCheckResult = $map['TotalCheckResult'];
        }
        if (isset($map['SatisfiedCheckResults'])) {
            if (!empty($map['SatisfiedCheckResults'])) {
                $model->satisfiedCheckResults = [];
                $n                            = 0;
                foreach ($map['SatisfiedCheckResults'] as $item) {
                    $model->satisfiedCheckResults[$n++] = null !== $item ? satisfiedCheckResults::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['UnsatisfiedCheckResults'])) {
            if (!empty($map['UnsatisfiedCheckResults'])) {
                $model->unsatisfiedCheckResults = [];
                $n                              = 0;
                foreach ($map['UnsatisfiedCheckResults'] as $item) {
                    $model->unsatisfiedCheckResults[$n++] = null !== $item ? unsatisfiedCheckResults::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}