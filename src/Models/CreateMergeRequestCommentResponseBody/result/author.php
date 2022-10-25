<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Codeup\V20200414\Models\CreateMergeRequestCommentResponseBody\result;

use AlibabaCloud\Tea\Model;

class author extends Model
{
    /**
     * @var string
     */
    public $avatarUrl;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $externUserId;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'avatarUrl'    => 'AvatarUrl',
        'email'        => 'Email',
        'externUserId' => 'ExternUserId',
        'id'           => 'Id',
        'name'         => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->avatarUrl) {
            $res['AvatarUrl'] = $this->avatarUrl;
        }
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->externUserId) {
            $res['ExternUserId'] = $this->externUserId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return author
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvatarUrl'])) {
            $model->avatarUrl = $map['AvatarUrl'];
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['ExternUserId'])) {
            $model->externUserId = $map['ExternUserId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
