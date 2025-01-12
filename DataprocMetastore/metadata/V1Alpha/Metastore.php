<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/metastore/v1alpha/metastore.proto

namespace GPBMetadata\Google\Cloud\Metastore\V1Alpha;

class Metastore
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        \GPBMetadata\Google\Type\Dayofweek::initOnce();
        $pool->internalAddGeneratedFile(
            '
�o
.google/cloud/metastore/v1alpha/metastore.protogoogle.cloud.metastore.v1alphagoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto#google/longrunning/operations.proto google/protobuf/field_mask.protogoogle/protobuf/timestamp.protogoogle/protobuf/wrappers.protogoogle/type/dayofweek.proto"�
ServiceT
hive_metastore_config (23.google.cloud.metastore.v1alpha.HiveMetastoreConfigH 
name (	B�A4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�AC
labels (23.google.cloud.metastore.v1alpha.Service.LabelsEntry7
network (	B&�A�A 
compute.googleapis.com/Network
endpoint_uri (	B�A
port	 (A
state
 (2-.google.cloud.metastore.v1alpha.Service.StateB�A
state_message (	B�A
artifact_gcs_uri (	B�A:
tier (2,.google.cloud.metastore.v1alpha.Service.TierQ
metadata_integration (23.google.cloud.metastore.v1alpha.MetadataIntegrationM
maintenance_window (21.google.cloud.metastore.v1alpha.MaintenanceWindow
uid (	B�Ae
metadata_management_activity (2:.google.cloud.metastore.v1alpha.MetadataManagementActivityB�AT
release_channel (26.google.cloud.metastore.v1alpha.Service.ReleaseChannelB�AP
encryption_config (20.google.cloud.metastore.v1alpha.EncryptionConfigB�AE
network_config (2-.google.cloud.metastore.v1alpha.NetworkConfigP
database_type (24.google.cloud.metastore.v1alpha.Service.DatabaseTypeB�AI
telemetry_config (2/.google.cloud.metastore.v1alpha.TelemetryConfig-
LabelsEntry
key (	
value (	:8"~
State
STATE_UNSPECIFIED 
CREATING

ACTIVE

SUSPENDING
	SUSPENDED
UPDATING
DELETING	
ERROR";
Tier
TIER_UNSPECIFIED 
	DEVELOPER

ENTERPRISE"I
ReleaseChannel
RELEASE_CHANNEL_UNSPECIFIED 

CANARY

STABLE"E
DatabaseType
DATABASE_TYPE_UNSPECIFIED 	
MYSQL
SPANNER:a�A^
 metastore.googleapis.com/Service:projects/{project}/locations/{location}/services/{service}B
metastore_config"�
MetadataIntegrationN
data_catalog_config (21.google.cloud.metastore.v1alpha.DataCatalogConfigG
dataplex_config (2..google.cloud.metastore.v1alpha.DataplexConfig"$
DataCatalogConfig
enabled ("�
DataplexConfigY
lake_resources (2A.google.cloud.metastore.v1alpha.DataplexConfig.LakeResourcesEntryZ
LakeResourcesEntry
key (	3
value (2$.google.cloud.metastore.v1alpha.Lake:8"7
Lake/
name (	B!�A
dataplex.googleapis.com/Lake"r
MaintenanceWindow0
hour_of_day (2.google.protobuf.Int32Value+
day_of_week (2.google.type.DayOfWeek"�
HiveMetastoreConfig
version (	B�Ab
config_overrides (2H.google.cloud.metastore.v1alpha.HiveMetastoreConfig.ConfigOverridesEntryG
kerberos_config (2..google.cloud.metastore.v1alpha.KerberosConfig_
endpoint_protocol (2D.google.cloud.metastore.v1alpha.HiveMetastoreConfig.EndpointProtocolf
auxiliary_versions (2J.google.cloud.metastore.v1alpha.HiveMetastoreConfig.AuxiliaryVersionsEntry6
ConfigOverridesEntry
key (	
value (	:8p
AuxiliaryVersionsEntry
key (	E
value (26.google.cloud.metastore.v1alpha.AuxiliaryVersionConfig:8"K
EndpointProtocol!
ENDPOINT_PROTOCOL_UNSPECIFIED 

THRIFT
GRPC"x
KerberosConfig6
keytab (2&.google.cloud.metastore.v1alpha.Secret
	principal (	
krb5_config_gcs_uri (	")
Secret
cloud_secret (	H B
value"#
EncryptionConfig
kms_key (	"�
AuxiliaryVersionConfig
version (	e
config_overrides (2K.google.cloud.metastore.v1alpha.AuxiliaryVersionConfig.ConfigOverridesEntryJ
network_config (2-.google.cloud.metastore.v1alpha.NetworkConfigB�A6
ConfigOverridesEntry
key (	
value (	:8"�
NetworkConfigN
	consumers (26.google.cloud.metastore.v1alpha.NetworkConfig.ConsumerB�Av
Consumer?

subnetwork (	B)�A�A#
!compute.googleapis.com/SubnetworkH 
endpoint_uri (	B�AB
vpc_resource"�
TelemetryConfigM

log_format (29.google.cloud.metastore.v1alpha.TelemetryConfig.LogFormat"=
	LogFormat
LOG_FORMAT_UNSPECIFIED 

LEGACY
JSON"�
MetadataManagementActivityM
metadata_exports (2..google.cloud.metastore.v1alpha.MetadataExportB�A>
restores (2\'.google.cloud.metastore.v1alpha.RestoreB�A"�
MetadataImportY
database_dump (2;.google.cloud.metastore.v1alpha.MetadataImport.DatabaseDumpB�AH 
name (	B�A
description (	4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�A1
end_time (2.google.protobuf.TimestampB�AH
state (24.google.cloud.metastore.v1alpha.MetadataImport.StateB�A�
DatabaseDumpc
database_type (2H.google.cloud.metastore.v1alpha.MetadataImport.DatabaseDump.DatabaseTypeB
gcs_uri (	
source_database (	BH
type (25.google.cloud.metastore.v1alpha.DatabaseDumpSpec.TypeB�A"8
DatabaseType
DATABASE_TYPE_UNSPECIFIED 	
MYSQL"T
State
STATE_UNSPECIFIED 
RUNNING
	SUCCEEDED
UPDATING

FAILED:��A�
\'metastore.googleapis.com/MetadataImport\\projects/{project}/locations/{location}/services/{service}/metadataImports/{metadata_import}B

metadata"�
MetadataExport"
destination_gcs_uri (	B�AH 3

start_time (2.google.protobuf.TimestampB�A1
end_time (2.google.protobuf.TimestampB�AH
state (24.google.cloud.metastore.v1alpha.MetadataExport.StateB�AV
database_dump_type (25.google.cloud.metastore.v1alpha.DatabaseDumpSpec.TypeB�A"U
State
STATE_UNSPECIFIED 
RUNNING
	SUCCEEDED

FAILED
	CANCELLEDB
destination"�
Backup
name (	B�A4
create_time (2.google.protobuf.TimestampB�A1
end_time (2.google.protobuf.TimestampB�A@
state (2,.google.cloud.metastore.v1alpha.Backup.StateB�AF
service_revision (2\'.google.cloud.metastore.v1alpha.ServiceB�A
description (	
restoring_services (	B�A"a
State
STATE_UNSPECIFIED 
CREATING
DELETING

ACTIVE

FAILED
	RESTORING:q�An
metastore.googleapis.com/BackupKprojects/{project}/locations/{location}/services/{service}/backups/{backup}"�
Restore3

start_time (2.google.protobuf.TimestampB�A1
end_time (2.google.protobuf.TimestampB�AA
state (2-.google.cloud.metastore.v1alpha.Restore.StateB�A7
backup (	B\'�A�A!
metastore.googleapis.com/BackupF
type (23.google.cloud.metastore.v1alpha.Restore.RestoreTypeB�A
details (	B�A"U
State
STATE_UNSPECIFIED 
RUNNING
	SUCCEEDED

FAILED
	CANCELLED"H
RestoreType
RESTORE_TYPE_UNSPECIFIED 
FULL
METADATA_ONLY"�
ListServicesRequest8
parent (	B(�A�A" metastore.googleapis.com/Service
	page_size (B�A

page_token (	B�A
filter (	B�A
order_by (	B�A"
ListServicesResponse9
services (2\'.google.cloud.metastore.v1alpha.Service
next_page_token (	
unreachable (	"K
GetServiceRequest6
name (	B(�A�A"
 metastore.googleapis.com/Service"�
CreateServiceRequest8
parent (	B(�A�A" metastore.googleapis.com/Service

service_id (	B�A=
service (2\'.google.cloud.metastore.v1alpha.ServiceB�A

request_id (	B�A"�
UpdateServiceRequest4
update_mask (2.google.protobuf.FieldMaskB�A=
service (2\'.google.cloud.metastore.v1alpha.ServiceB�A

request_id (	B�A"g
DeleteServiceRequest6
name (	B(�A�A"
 metastore.googleapis.com/Service

request_id (	B�A"�
ListMetadataImportsRequest?
parent (	B/�A�A)\'metastore.googleapis.com/MetadataImport
	page_size (B�A

page_token (	B�A
filter (	B�A
order_by (	B�A"�
ListMetadataImportsResponseH
metadata_imports (2..google.cloud.metastore.v1alpha.MetadataImport
next_page_token (	
unreachable (	"Y
GetMetadataImportRequest=
name (	B/�A�A)
\'metastore.googleapis.com/MetadataImport"�
CreateMetadataImportRequest?
parent (	B/�A�A)\'metastore.googleapis.com/MetadataImport
metadata_import_id (	B�AL
metadata_import (2..google.cloud.metastore.v1alpha.MetadataImportB�A

request_id (	B�A"�
UpdateMetadataImportRequest4
update_mask (2.google.protobuf.FieldMaskB�AL
metadata_import (2..google.cloud.metastore.v1alpha.MetadataImportB�A

request_id (	B�A"�
ListBackupsRequest7
parent (	B\'�A�A!metastore.googleapis.com/Backup
	page_size (B�A

page_token (	B�A
filter (	B�A
order_by (	B�A"|
ListBackupsResponse7
backups (2&.google.cloud.metastore.v1alpha.Backup
next_page_token (	
unreachable (	"I
GetBackupRequest5
name (	B\'�A�A!
metastore.googleapis.com/Backup"�
CreateBackupRequest7
parent (	B\'�A�A!metastore.googleapis.com/Backup
	backup_id (	B�A;
backup (2&.google.cloud.metastore.v1alpha.BackupB�A

request_id (	B�A"e
DeleteBackupRequest5
name (	B\'�A�A!
metastore.googleapis.com/Backup

request_id (	B�A"�
ExportMetadataRequest 
destination_gcs_folder (	H 9
service (	B(�A�A"
 metastore.googleapis.com/Service

request_id (	B�AV
database_dump_type (25.google.cloud.metastore.v1alpha.DatabaseDumpSpec.TypeB�AB
destination"�
RestoreServiceRequest9
service (	B(�A�A"
 metastore.googleapis.com/Service7
backup (	B\'�A�A!
metastore.googleapis.com/BackupN
restore_type (23.google.cloud.metastore.v1alpha.Restore.RestoreTypeB�A

request_id (	B�A"�
OperationMetadata4
create_time (2.google.protobuf.TimestampB�A1
end_time (2.google.protobuf.TimestampB�A
target (	B�A
verb (	B�A
status_message (	B�A#
requested_cancellation (B�A
api_version (	B�A"�
LocationMetadatap
!supported_hive_metastore_versions (2E.google.cloud.metastore.v1alpha.LocationMetadata.HiveMetastoreVersion;
HiveMetastoreVersion
version (	

is_default ("E
DatabaseDumpSpec"1
Type
TYPE_UNSPECIFIED 	
MYSQL
AVRO2�
DataprocMetastore�
ListServices3.google.cloud.metastore.v1alpha.ListServicesRequest4.google.cloud.metastore.v1alpha.ListServicesResponse"B���31/v1alpha/{parent=projects/*/locations/*}/services�Aparent�

GetService1.google.cloud.metastore.v1alpha.GetServiceRequest\'.google.cloud.metastore.v1alpha.Service"@���31/v1alpha/{name=projects/*/locations/*/services/*}�Aname�
CreateService4.google.cloud.metastore.v1alpha.CreateServiceRequest.google.longrunning.Operation"����<"1/v1alpha/{parent=projects/*/locations/*}/services:service�Aparent,service,service_id�A;
Service0google.cloud.metastore.v1alpha.OperationMetadata�
UpdateService4.google.cloud.metastore.v1alpha.UpdateServiceRequest.google.longrunning.Operation"����D29/v1alpha/{service.name=projects/*/locations/*/services/*}:service�Aservice,update_mask�A;
Service0google.cloud.metastore.v1alpha.OperationMetadata�
DeleteService4.google.cloud.metastore.v1alpha.DeleteServiceRequest.google.longrunning.Operation"����3*1/v1alpha/{name=projects/*/locations/*/services/*}�Aname�AI
google.protobuf.Empty0google.cloud.metastore.v1alpha.OperationMetadata�
ListMetadataImports:.google.cloud.metastore.v1alpha.ListMetadataImportsRequest;.google.cloud.metastore.v1alpha.ListMetadataImportsResponse"T���EC/v1alpha/{parent=projects/*/locations/*/services/*}/metadataImports�Aparent�
GetMetadataImport8.google.cloud.metastore.v1alpha.GetMetadataImportRequest..google.cloud.metastore.v1alpha.MetadataImport"R���EC/v1alpha/{name=projects/*/locations/*/services/*/metadataImports/*}�Aname�
CreateMetadataImport;.google.cloud.metastore.v1alpha.CreateMetadataImportRequest.google.longrunning.Operation"����V"C/v1alpha/{parent=projects/*/locations/*/services/*}/metadataImports:metadata_import�A)parent,metadata_import,metadata_import_id�AB
MetadataImport0google.cloud.metastore.v1alpha.OperationMetadata�
UpdateMetadataImport;.google.cloud.metastore.v1alpha.UpdateMetadataImportRequest.google.longrunning.Operation"����f2S/v1alpha/{metadata_import.name=projects/*/locations/*/services/*/metadataImports/*}:metadata_import�Ametadata_import,update_mask�AB
MetadataImport0google.cloud.metastore.v1alpha.OperationMetadata�
ExportMetadata5.google.cloud.metastore.v1alpha.ExportMetadataRequest.google.longrunning.Operation"����H"C/v1alpha/{service=projects/*/locations/*/services/*}:exportMetadata:*�AB
MetadataExport0google.cloud.metastore.v1alpha.OperationMetadata�
RestoreService5.google.cloud.metastore.v1alpha.RestoreServiceRequest.google.longrunning.Operation"����A"</v1alpha/{service=projects/*/locations/*/services/*}:restore:*�Aservice,backup�A;
Restore0google.cloud.metastore.v1alpha.OperationMetadata�
ListBackups2.google.cloud.metastore.v1alpha.ListBackupsRequest3.google.cloud.metastore.v1alpha.ListBackupsResponse"L���=;/v1alpha/{parent=projects/*/locations/*/services/*}/backups�Aparent�
	GetBackup0.google.cloud.metastore.v1alpha.GetBackupRequest&.google.cloud.metastore.v1alpha.Backup"J���=;/v1alpha/{name=projects/*/locations/*/services/*/backups/*}�Aname�
CreateBackup3.google.cloud.metastore.v1alpha.CreateBackupRequest.google.longrunning.Operation"����E";/v1alpha/{parent=projects/*/locations/*/services/*}/backups:backup�Aparent,backup,backup_id�A:
Backup0google.cloud.metastore.v1alpha.OperationMetadata�
DeleteBackup3.google.cloud.metastore.v1alpha.DeleteBackupRequest.google.longrunning.Operation"����=*;/v1alpha/{name=projects/*/locations/*/services/*/backups/*}�Aname�AI
google.protobuf.Empty0google.cloud.metastore.v1alpha.OperationMetadataL�Ametastore.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
"com.google.cloud.metastore.v1alphaBMetastoreProtoPZGgoogle.golang.org/genproto/googleapis/cloud/metastore/v1alpha;metastore�Google\\Cloud\\Metastore\\V1alpha�AN
compute.googleapis.com/Network,projects/{project}/global/networks/{network}�Aa
!compute.googleapis.com/Subnetwork<projects/{project}/regions/{region}/subnetworks/{subnetwork}�AT
dataplex.googleapis.com/Lake4projects/{project}/locations/{location}/lakes/{lake}bproto3'
        , true);

        static::$is_initialized = true;
    }
}

