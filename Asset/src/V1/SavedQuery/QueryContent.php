<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/asset/v1/asset_service.proto

namespace Google\Cloud\Asset\V1\SavedQuery;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The query content.
 *
 * Generated from protobuf message <code>google.cloud.asset.v1.SavedQuery.QueryContent</code>
 */
class QueryContent extends \Google\Protobuf\Internal\Message
{
    protected $query_content;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Asset\V1\IamPolicyAnalysisQuery $iam_policy_analysis_query
     *           An IAM Policy Analysis query, which could be used in
     *           the
     *           [AssetService.AnalyzeIamPolicy][google.cloud.asset.v1.AssetService.AnalyzeIamPolicy]
     *           RPC or the
     *           [AssetService.AnalyzeIamPolicyLongrunning][google.cloud.asset.v1.AssetService.AnalyzeIamPolicyLongrunning]
     *           RPC.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Asset\V1\AssetService::initOnce();
        parent::__construct($data);
    }

    /**
     * An IAM Policy Analysis query, which could be used in
     * the
     * [AssetService.AnalyzeIamPolicy][google.cloud.asset.v1.AssetService.AnalyzeIamPolicy]
     * RPC or the
     * [AssetService.AnalyzeIamPolicyLongrunning][google.cloud.asset.v1.AssetService.AnalyzeIamPolicyLongrunning]
     * RPC.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.IamPolicyAnalysisQuery iam_policy_analysis_query = 1;</code>
     * @return \Google\Cloud\Asset\V1\IamPolicyAnalysisQuery|null
     */
    public function getIamPolicyAnalysisQuery()
    {
        return $this->readOneof(1);
    }

    public function hasIamPolicyAnalysisQuery()
    {
        return $this->hasOneof(1);
    }

    /**
     * An IAM Policy Analysis query, which could be used in
     * the
     * [AssetService.AnalyzeIamPolicy][google.cloud.asset.v1.AssetService.AnalyzeIamPolicy]
     * RPC or the
     * [AssetService.AnalyzeIamPolicyLongrunning][google.cloud.asset.v1.AssetService.AnalyzeIamPolicyLongrunning]
     * RPC.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.IamPolicyAnalysisQuery iam_policy_analysis_query = 1;</code>
     * @param \Google\Cloud\Asset\V1\IamPolicyAnalysisQuery $var
     * @return $this
     */
    public function setIamPolicyAnalysisQuery($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Asset\V1\IamPolicyAnalysisQuery::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getQueryContent()
    {
        return $this->whichOneof("query_content");
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(QueryContent::class, \Google\Cloud\Asset\V1\SavedQuery_QueryContent::class);

