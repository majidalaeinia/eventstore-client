<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ClientMessageDtos.proto

namespace Rxnet\EventStore\Data;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Rxnet.EventStore.Data.ReadAllEventsCompleted</code>
 */
class ReadAllEventsCompleted extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 commit_position = 1;</code>
     */
    private $commit_position = 0;
    /**
     * Generated from protobuf field <code>int64 prepare_position = 2;</code>
     */
    private $prepare_position = 0;
    /**
     * Generated from protobuf field <code>repeated .Rxnet.EventStore.Data.ResolvedEvent events = 3;</code>
     */
    private $events;
    /**
     * Generated from protobuf field <code>int64 next_commit_position = 4;</code>
     */
    private $next_commit_position = 0;
    /**
     * Generated from protobuf field <code>int64 next_prepare_position = 5;</code>
     */
    private $next_prepare_position = 0;
    /**
     * Generated from protobuf field <code>.Rxnet.EventStore.Data.ReadAllEventsCompleted.ReadAllResult result = 6;</code>
     */
    private $result = 0;
    /**
     * Generated from protobuf field <code>string error = 7;</code>
     */
    private $error = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $commit_position
     *     @type int|string $prepare_position
     *     @type \Rxnet\EventStore\Data\ResolvedEvent[]|\Google\Protobuf\Internal\RepeatedField $events
     *     @type int|string $next_commit_position
     *     @type int|string $next_prepare_position
     *     @type int $result
     *     @type string $error
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\ClientMessageDtos::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 commit_position = 1;</code>
     * @return int|string
     */
    public function getCommitPosition()
    {
        return $this->commit_position;
    }

    /**
     * Generated from protobuf field <code>int64 commit_position = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCommitPosition($var)
    {
        GPBUtil::checkInt64($var);
        $this->commit_position = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 prepare_position = 2;</code>
     * @return int|string
     */
    public function getPreparePosition()
    {
        return $this->prepare_position;
    }

    /**
     * Generated from protobuf field <code>int64 prepare_position = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPreparePosition($var)
    {
        GPBUtil::checkInt64($var);
        $this->prepare_position = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .Rxnet.EventStore.Data.ResolvedEvent events = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEvents()
    {
        return $this->events;
    }

    /**
     * Generated from protobuf field <code>repeated .Rxnet.EventStore.Data.ResolvedEvent events = 3;</code>
     * @param \Rxnet\EventStore\Data\ResolvedEvent[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEvents($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Rxnet\EventStore\Data\ResolvedEvent::class);
        $this->events = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 next_commit_position = 4;</code>
     * @return int|string
     */
    public function getNextCommitPosition()
    {
        return $this->next_commit_position;
    }

    /**
     * Generated from protobuf field <code>int64 next_commit_position = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setNextCommitPosition($var)
    {
        GPBUtil::checkInt64($var);
        $this->next_commit_position = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 next_prepare_position = 5;</code>
     * @return int|string
     */
    public function getNextPreparePosition()
    {
        return $this->next_prepare_position;
    }

    /**
     * Generated from protobuf field <code>int64 next_prepare_position = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setNextPreparePosition($var)
    {
        GPBUtil::checkInt64($var);
        $this->next_prepare_position = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Rxnet.EventStore.Data.ReadAllEventsCompleted.ReadAllResult result = 6;</code>
     * @return int
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Generated from protobuf field <code>.Rxnet.EventStore.Data.ReadAllEventsCompleted.ReadAllResult result = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setResult($var)
    {
        GPBUtil::checkEnum($var, \Rxnet\EventStore\Data\ReadAllEventsCompleted_ReadAllResult::class);
        $this->result = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string error = 7;</code>
     * @return string
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * Generated from protobuf field <code>string error = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setError($var)
    {
        GPBUtil::checkString($var, True);
        $this->error = $var;

        return $this;
    }

}

