<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ClientMessageDtos.proto

namespace Rxnet\EventStore\Data\ReadAllEventsCompleted;

/**
 * Protobuf type <code>Rxnet.EventStore.Data.ReadAllEventsCompleted.ReadAllResult</code>
 */
class ReadAllResult
{
    /**
     * Generated from protobuf enum <code>Success = 0;</code>
     */
    const Success = 0;
    /**
     * Generated from protobuf enum <code>NotModified = 1;</code>
     */
    const NotModified = 1;
    /**
     * Generated from protobuf enum <code>Error = 2;</code>
     */
    const Error = 2;
    /**
     * Generated from protobuf enum <code>AccessDenied = 3;</code>
     */
    const AccessDenied = 3;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ReadAllResult::class, \Rxnet\EventStore\Data\ReadAllEventsCompleted_ReadAllResult::class);

