<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/secretmanager/v1/service.proto

namespace GPBMetadata\Google\Cloud\Secretmanager\V1;

class Service
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
        \GPBMetadata\Google\Cloud\Secretmanager\V1\Resources::initOnce();
        \GPBMetadata\Google\Iam\V1\IamPolicy::initOnce();
        \GPBMetadata\Google\Iam\V1\Policy::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        $pool->internalAddGeneratedFile(
            '
�(
+google/cloud/secretmanager/v1/service.protogoogle.cloud.secretmanager.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto-google/cloud/secretmanager/v1/resources.protogoogle/iam/v1/iam_policy.protogoogle/iam/v1/policy.protogoogle/protobuf/empty.proto google/protobuf/field_mask.proto"�
ListSecretsRequestC
parent (	B3�A�A-
+cloudresourcemanager.googleapis.com/Project
	page_size (B�A

page_token (	B�A"z
ListSecretsResponse6
secrets (2%.google.cloud.secretmanager.v1.Secret
next_page_token (	

total_size ("�
CreateSecretRequestC
parent (	B3�A�A-
+cloudresourcemanager.googleapis.com/Project
	secret_id (	B�A:
secret (2%.google.cloud.secretmanager.v1.SecretB�A"�
AddSecretVersionRequest;
parent (	B+�A�A%
#secretmanager.googleapis.com/SecretB
payload (2,.google.cloud.secretmanager.v1.SecretPayloadB�A"M
GetSecretRequest9
name (	B+�A�A%
#secretmanager.googleapis.com/Secret"�
ListSecretVersionsRequest;
parent (	B+�A�A%
#secretmanager.googleapis.com/Secret
	page_size (B�A

page_token (	B�A"�
ListSecretVersionsResponse>
versions (2,.google.cloud.secretmanager.v1.SecretVersion
next_page_token (	

total_size ("[
GetSecretVersionRequest@
name (	B2�A�A,
*secretmanager.googleapis.com/SecretVersion"�
UpdateSecretRequest:
secret (2%.google.cloud.secretmanager.v1.SecretB�A4
update_mask (2.google.protobuf.FieldMaskB�A"^
AccessSecretVersionRequest@
name (	B2�A�A,
*secretmanager.googleapis.com/SecretVersion"�
AccessSecretVersionResponse=
name (	B/�A,
*secretmanager.googleapis.com/SecretVersion=
payload (2,.google.cloud.secretmanager.v1.SecretPayload"c
DeleteSecretRequest9
name (	B+�A�A%
#secretmanager.googleapis.com/Secret
etag (	B�A"r
DisableSecretVersionRequest@
name (	B2�A�A,
*secretmanager.googleapis.com/SecretVersion
etag (	B�A"q
EnableSecretVersionRequest@
name (	B2�A�A,
*secretmanager.googleapis.com/SecretVersion
etag (	B�A"r
DestroySecretVersionRequest@
name (	B2�A�A,
*secretmanager.googleapis.com/SecretVersion
etag (	B�A2�
SecretManagerService�
ListSecrets1.google.cloud.secretmanager.v1.ListSecretsRequest2.google.cloud.secretmanager.v1.ListSecretsResponse"0���!/v1/{parent=projects/*}/secrets�Aparent�
CreateSecret2.google.cloud.secretmanager.v1.CreateSecretRequest%.google.cloud.secretmanager.v1.Secret"I���)"/v1/{parent=projects/*}/secrets:secret�Aparent,secret_id,secret�
AddSecretVersion6.google.cloud.secretmanager.v1.AddSecretVersionRequest,.google.cloud.secretmanager.v1.SecretVersion"H���1",/v1/{parent=projects/*/secrets/*}:addVersion:*�Aparent,payload�
	GetSecret/.google.cloud.secretmanager.v1.GetSecretRequest%.google.cloud.secretmanager.v1.Secret".���!/v1/{name=projects/*/secrets/*}�Aname�
UpdateSecret2.google.cloud.secretmanager.v1.UpdateSecretRequest%.google.cloud.secretmanager.v1.Secret"K���02&/v1/{secret.name=projects/*/secrets/*}:secret�Asecret,update_mask�
DeleteSecret2.google.cloud.secretmanager.v1.DeleteSecretRequest.google.protobuf.Empty".���!*/v1/{name=projects/*/secrets/*}�Aname�
ListSecretVersions8.google.cloud.secretmanager.v1.ListSecretVersionsRequest9.google.cloud.secretmanager.v1.ListSecretVersionsResponse";���,*/v1/{parent=projects/*/secrets/*}/versions�Aparent�
GetSecretVersion6.google.cloud.secretmanager.v1.GetSecretVersionRequest,.google.cloud.secretmanager.v1.SecretVersion"9���,*/v1/{name=projects/*/secrets/*/versions/*}�Aname�
AccessSecretVersion9.google.cloud.secretmanager.v1.AccessSecretVersionRequest:.google.cloud.secretmanager.v1.AccessSecretVersionResponse"@���31/v1/{name=projects/*/secrets/*/versions/*}:access�Aname�
DisableSecretVersion:.google.cloud.secretmanager.v1.DisableSecretVersionRequest,.google.cloud.secretmanager.v1.SecretVersion"D���7"2/v1/{name=projects/*/secrets/*/versions/*}:disable:*�Aname�
EnableSecretVersion9.google.cloud.secretmanager.v1.EnableSecretVersionRequest,.google.cloud.secretmanager.v1.SecretVersion"C���6"1/v1/{name=projects/*/secrets/*/versions/*}:enable:*�Aname�
DestroySecretVersion:.google.cloud.secretmanager.v1.DestroySecretVersionRequest,.google.cloud.secretmanager.v1.SecretVersion"D���7"2/v1/{name=projects/*/secrets/*/versions/*}:destroy:*�Aname�
SetIamPolicy".google.iam.v1.SetIamPolicyRequest.google.iam.v1.Policy";���5"0/v1/{resource=projects/*/secrets/*}:setIamPolicy:*�
GetIamPolicy".google.iam.v1.GetIamPolicyRequest.google.iam.v1.Policy"8���20/v1/{resource=projects/*/secrets/*}:getIamPolicy�
TestIamPermissions(.google.iam.v1.TestIamPermissionsRequest).google.iam.v1.TestIamPermissionsResponse"A���;"6/v1/{resource=projects/*/secrets/*}:testIamPermissions:*P�Asecretmanager.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
!com.google.cloud.secretmanager.v1BServiceProtoPZJgoogle.golang.org/genproto/googleapis/cloud/secretmanager/v1;secretmanager��GSM�Google.Cloud.SecretManager.V1�Google\\Cloud\\SecretManager\\V1� Google::Cloud::SecretManager::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

