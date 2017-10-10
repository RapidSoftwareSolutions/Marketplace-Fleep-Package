<?php

$app->post('/api/Fleep/storeConversationHeaderFields', function ($request, $response) {

    $settings = $this->settings;
    $checkRequest = $this->validation;
    $validateRes = $checkRequest->validate($request, ['ticket','tokenId','conversationId','topic','mkAlertLevel']);

    if(!empty($validateRes) && isset($validateRes['callback']) && $validateRes['callback']=='error') {
        return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($validateRes);
    } else {
        $post_data = $validateRes;
    }

    $requiredParams = ['ticket'=>'ticket','tokenId'=>'tokenId','conversationId'=>'conversation_id','topic'=>'topic','mkAlertLevel'=>'mk_alert_level'];
    $optionalParams = ['readMessageNumber'=>'read_message_nr','labels'=>'labels','labelIds'=>'label_ids','snoozeInterval'=>'snooze_interval','addEmails'=>'add_emails','removeEmails'=>'remove_emails','discloseEmails'=>'disclose_emails','addAccountIds'=>'add_account_ids','kickAccountIds'=>'kick_account_ids','removeAccountIds'=>'remove_account_ids','discloseAccountIds'=>'disclose_account_ids','hideMessageNumber'=>'hide_message_nr','isDeleted'=>'is_deleted','isDeletedByAdmin'=>'is_deleted_by_admin','fromMessageNumber'=>'from_message_nr','isAutojoin'=>'is_autojoin','isDisclose'=>'is_disclose','canPost'=>'can_post','isUrlPreviewDisabled'=>'is_url_preview_disabled','isList'=>'is_list','addTeamIds'=>'add_team_ids','removeTeamIds'=>'remove_team_ids','isManaged'=>'is_managed','addAdmins'=>'add_admins','removeAdmins'=>'remove_admins','mkConvType'=>'mk_conv_type'];
    $bodyParams = [
       'json' => ['ticket','read_message_nr','labels','label_ids','topic','mk_alert_level','snooze_interval','add_emails','remove_emails','disclose_emails','add_account_ids','kick_account_ids','remove_account_ids','disclose_account_ids','hide_message_nr','is_deleted','is_deleted_by_admin','from_message_nr','is_autojoin','is_disclose','can_post','is_url_preview_disabled','is_list','add_team_ids','remove_team_ids','is_managed','add_admins','remove_admins','mk_conv_type']
    ];

    $data = \Models\Params::createParams($requiredParams, $optionalParams, $post_data['args']);

    

    $client = $this->httpClient;
    $query_str = "https://fleep.io/api/conversation/store/{$data['conversation_id']}";

    

    $requestParams = \Models\Params::createRequestBody($data, $bodyParams);
    $cookieJar = \GuzzleHttp\Cookie\CookieJar::fromArray([
        'token_id' => $data['tokenId']
    ], 'fleep.io');
    $requestParams['cookies'] = $cookieJar;

    try {
        $resp = $client->post($query_str, $requestParams);
        $responseBody = $resp->getBody()->getContents();

        if(in_array($resp->getStatusCode(), ['200', '201', '202', '203', '204'])) {
            $result['callback'] = 'success';
            $result['contextWrites']['to'] = is_array($responseBody) ? $responseBody : json_decode($responseBody);
            if(empty($result['contextWrites']['to'])) {
                $result['contextWrites']['to']['status_msg'] = "Api return no results";
            }
        } else {
            $result['callback'] = 'error';
            $result['contextWrites']['to']['status_code'] = 'API_ERROR';
            $result['contextWrites']['to']['status_msg'] = json_decode($responseBody);
        }

    } catch (\GuzzleHttp\Exception\ClientException $exception) {

        $responseBody = $exception->getResponse()->getBody()->getContents();
        if(empty(json_decode($responseBody))) {
            $out = $responseBody;
        } else {
            $out = json_decode($responseBody);
        }
        $result['callback'] = 'error';
        $result['contextWrites']['to']['status_code'] = 'API_ERROR';
        $result['contextWrites']['to']['status_msg'] = $out;

    } catch (GuzzleHttp\Exception\ServerException $exception) {

        $responseBody = $exception->getResponse()->getBody()->getContents();
        if(empty(json_decode($responseBody))) {
            $out = $responseBody;
        } else {
            $out = json_decode($responseBody);
        }
        $result['callback'] = 'error';
        $result['contextWrites']['to']['status_code'] = 'API_ERROR';
        $result['contextWrites']['to']['status_msg'] = $out;

    } catch (GuzzleHttp\Exception\ConnectException $exception) {
        $result['callback'] = 'error';
        $result['contextWrites']['to']['status_code'] = 'INTERNAL_PACKAGE_ERROR';
        $result['contextWrites']['to']['status_msg'] = 'Something went wrong inside the package.';

    }

    return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($result);

});