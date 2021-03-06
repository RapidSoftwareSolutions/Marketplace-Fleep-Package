<?php
$routes = [
    'metadata',
    'loginAccount',
    'logoutAccount',
    'createAccount',
    'repeatEmailCode',
    'sendResetPasswordLink',
    'addReminder',
    'getClassificators',
    'editAccountSettings',
    'confirmAccount',
    'confirmAndConfigureAccount',
    'exportConversationHistory',
    'getExternalAccountInfo',
    'getContactsRecordList',
    'getNotificationIdForFurtherRequests',
    'setAccountFlag',
    'smtpConfigure',
    'getSmtpList',
    'synchronizehronizePinboard',
    'synchronizeTaskboard',
    'getTrelloBoardList',
    'unsubscribeForNotification',
    'deleteCurrentAvatar',
    'uploadAvatar',
    'listenForNotificationsFromFleep',
    'storingConnectionInformation',
    'synchronizeAccount',
    'getNextBatchOfConversations',
    'addMembersToConversation',
    'autojoinConversation',
    'checkPermissions',
    'convertConversation',
    'createConversation',
    'createVideoCall',
    'deleteConversation',
    'discloseConversationHistory',
    'discloseAllConversationsHistory',
    'hideConversation',
    'leaveConversation',
    'getAllConversation',
    'markConversationAsRead',
    'sendPokeEven',
    'removeMembersFromConversation',
    'setConversationAlerts',
    'changeConversationTopic',
    'getActivity',
    'storeConversationHeaderFields',
    'synchronizeStateForConversation',
    'synchronizeBackwardForConversation',
    'synchronizePinboardForConversation',
    'synchronizeTeamsList',
    'unhideConversation',
    'unsubscribeFromConversation',
    'copyMessage',
    'deleteMessageFromConversation',
    'editConversationMessage',
    'markMessageAsRead',
    'sendMessage',
    'storeMessage',
    'getContentBySearchQuery',
    'loadIndexDataToCache',
    'dropIndexDataToCache',
    'getSuggestWords',
    'describeFofContact',
    'hideContact',
    'importContact',
    'synchronizeContact',
    'synchronizeContactActivity',
    'synchronizeAllContact',
    'synchronizeContactList',
    'removeContactFromConversation',
    'uploadFile',
    'uploadExternalFile',
    'addEmailAlias',
    'confirmEmailAlias',
    'removeEmailAlias',
    'synchronizeEmailAlias',
    'configureConversationWebhook',
    'createConversationWebhook',
    'removeConversationWebhook',
    'getConversationWebhook',
    'autojoinToTeam',
    'configureTeam',
    'createTeam',
    'removeTeam',
    'synchronizeTeam',
    'webhookEvent'
];
foreach($routes as $file) {
    require __DIR__ . '/../src/routes/'.$file.'.php';
}

