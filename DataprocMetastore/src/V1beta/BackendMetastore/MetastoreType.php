<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/metastore/v1beta/metastore_federation.proto

namespace Google\Cloud\Metastore\V1beta\BackendMetastore;

use UnexpectedValueException;

/**
 * The type of the backend metastore.
 *
 * Protobuf type <code>google.cloud.metastore.v1beta.BackendMetastore.MetastoreType</code>
 */
class MetastoreType
{
    /**
     * The metastore type is not set.
     *
     * Generated from protobuf enum <code>METASTORE_TYPE_UNSPECIFIED = 0;</code>
     */
    const METASTORE_TYPE_UNSPECIFIED = 0;
    /**
     * The backend metastore is BigQuery.
     *
     * Generated from protobuf enum <code>BIGQUERY = 2;</code>
     */
    const BIGQUERY = 2;
    /**
     * The backend metastore is Dataproc Metastore.
     *
     * Generated from protobuf enum <code>DATAPROC_METASTORE = 3;</code>
     */
    const DATAPROC_METASTORE = 3;

    private static $valueToName = [
        self::METASTORE_TYPE_UNSPECIFIED => 'METASTORE_TYPE_UNSPECIFIED',
        self::BIGQUERY => 'BIGQUERY',
        self::DATAPROC_METASTORE => 'DATAPROC_METASTORE',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(MetastoreType::class, \Google\Cloud\Metastore\V1beta\BackendMetastore_MetastoreType::class);

