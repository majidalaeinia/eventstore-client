<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ClientMessageDtos.proto

namespace Rxnet\EventStore\Data;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Rxnet.EventStore.Data.TransactionStartCompleted</code>
 */
class TransactionStartCompleted extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 transaction_id = 1;</code>
     */
    private $transaction_id = 0;
    /**
     * Generated from protobuf field <code>.Rxnet.EventStore.Data.OperationResult result = 2;</code>
     */
    private $result = 0;
    /**
     * Generated from protobuf field <code>string message = 3;</code>
     */
    private $message = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $transaction_id
     *     @type int $result
     *     @type string $message
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\ClientMessageDtos::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 transaction_id = 1;</code>
     * @return int|string
     */
    public function getTransactionId()
    {
        return $this->transaction_id;
    }

    /**
     * Generated from protobuf field <code>int64 transaction_id = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTransactionId($var)
    {
        GPBUtil::checkInt64($var);
        $this->transaction_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Rxnet.EventStore.Data.OperationResult result = 2;</code>
     * @return int
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Generated from protobuf field <code>.Rxnet.EventStore.Data.OperationResult result = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setResult($var)
    {
        GPBUtil::checkEnum($var, \Rxnet\EventStore\Data\OperationResult::class);
        $this->result = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string message = 3;</code>
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Generated from protobuf field <code>string message = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->message = $var;

        return $this;
    }

}

