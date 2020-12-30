<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Codeup\V20200414\Models\CreateMergeRequestResponseBody\result\approveCheckResult\unsatisfiedCheckResults;

use AlibabaCloud\Tea\Model;

class extraUsers extends Model
{
    /**
     * @var string
     */
    public $externUserId;

    /**
     * @var string
     */
    public $avatarUrl;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $id;
    protected $_name = [
        'externUserId' => 'ExternUserId',
        'avatarUrl'    => 'AvatarUrl',
        'name'         => 'Name',
        'id'           => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->externUserId) {
            $res['ExternUserId'] = $this->externUserId;
        }
        if (null !== $this->avatarUrl) {
            $res['AvatarUrl'] = $this->avatarUrl;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return extraUsers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExternUserId'])) {
            $model->externUserId = $map['ExternUserId'];
        }
        if (isset($map['AvatarUrl'])) {
            $model->avatarUrl = $map['AvatarUrl'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
