<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Codeup\V20200414\Models\ListRepositoryWebhookResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $enableSslVerification;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $lastTestResult;

    /**
     * @var bool
     */
    public $mergeRequestsEvents;

    /**
     * @var bool
     */
    public $noteEvents;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var bool
     */
    public $pushEvents;

    /**
     * @var string
     */
    public $secretToken;

    /**
     * @var bool
     */
    public $tagPushEvents;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'createdAt'             => 'CreatedAt',
        'description'           => 'Description',
        'enableSslVerification' => 'EnableSslVerification',
        'id'                    => 'Id',
        'lastTestResult'        => 'LastTestResult',
        'mergeRequestsEvents'   => 'MergeRequestsEvents',
        'noteEvents'            => 'NoteEvents',
        'projectId'             => 'ProjectId',
        'pushEvents'            => 'PushEvents',
        'secretToken'           => 'SecretToken',
        'tagPushEvents'         => 'TagPushEvents',
        'url'                   => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->enableSslVerification) {
            $res['EnableSslVerification'] = $this->enableSslVerification;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->lastTestResult) {
            $res['LastTestResult'] = $this->lastTestResult;
        }
        if (null !== $this->mergeRequestsEvents) {
            $res['MergeRequestsEvents'] = $this->mergeRequestsEvents;
        }
        if (null !== $this->noteEvents) {
            $res['NoteEvents'] = $this->noteEvents;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->pushEvents) {
            $res['PushEvents'] = $this->pushEvents;
        }
        if (null !== $this->secretToken) {
            $res['SecretToken'] = $this->secretToken;
        }
        if (null !== $this->tagPushEvents) {
            $res['TagPushEvents'] = $this->tagPushEvents;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
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
        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EnableSslVerification'])) {
            $model->enableSslVerification = $map['EnableSslVerification'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['LastTestResult'])) {
            $model->lastTestResult = $map['LastTestResult'];
        }
        if (isset($map['MergeRequestsEvents'])) {
            $model->mergeRequestsEvents = $map['MergeRequestsEvents'];
        }
        if (isset($map['NoteEvents'])) {
            $model->noteEvents = $map['NoteEvents'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['PushEvents'])) {
            $model->pushEvents = $map['PushEvents'];
        }
        if (isset($map['SecretToken'])) {
            $model->secretToken = $map['SecretToken'];
        }
        if (isset($map['TagPushEvents'])) {
            $model->tagPushEvents = $map['TagPushEvents'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
