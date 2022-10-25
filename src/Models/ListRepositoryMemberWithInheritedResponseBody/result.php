<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Codeup\V20200414\Models\ListRepositoryMemberWithInheritedResponseBody;

use AlibabaCloud\SDK\Codeup\V20200414\Models\ListRepositoryMemberWithInheritedResponseBody\result\inherited;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var int
     */
    public $accessLevel;

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
     * @var inherited
     */
    public $inherited;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $username;
    protected $_name = [
        'accessLevel'  => 'AccessLevel',
        'avatarUrl'    => 'AvatarUrl',
        'email'        => 'Email',
        'externUserId' => 'ExternUserId',
        'id'           => 'Id',
        'inherited'    => 'Inherited',
        'name'         => 'Name',
        'state'        => 'State',
        'username'     => 'Username',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessLevel) {
            $res['AccessLevel'] = $this->accessLevel;
        }
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
        if (null !== $this->inherited) {
            $res['Inherited'] = null !== $this->inherited ? $this->inherited->toMap() : null;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->username) {
            $res['Username'] = $this->username;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessLevel'])) {
            $model->accessLevel = $map['AccessLevel'];
        }
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
        if (isset($map['Inherited'])) {
            $model->inherited = inherited::fromMap($map['Inherited']);
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }

        return $model;
    }
}
