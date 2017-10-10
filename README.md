[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/Fleep/functions?utm_source=RapidAPIGitHub_FleepFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)

# Fleep Package
Founded by ex-Skypers, Fleep is a messenger for your teams and projects. We take email’s ability to contact anyone and marry it with real-time messaging flow.
* Domain: [fleep.io](https://fleep.io)
* Credentials: username, password

## How to get credentials: 
0. Register on the [fleep.io](https://fleep.io)
1. Use username and password for getting ticket and tokenId in loginAccount endpoint
 
  ## Custom datatypes: 
   |Datatype|Description|Example
   |--------|-----------|----------
   |Datepicker|String which includes date and time|```2016-05-28 00:00:00```
   |Map|String which includes latitude and longitude coma separated|```50.37, 26.56```
   |List|Simple array|```["123", "sample"]``` 
   |Select|String with predefined values|```sample```
   |Array|Array of objects|```[{"Second name":"123","Age":"12","Photo":"sdf","Draft":"sdfsdf"},{"name":"adi","Second name":"bla","Age":"4","Photo":"asfserwe","Draft":"sdfsdf"}] ```  
 
## Fleep.loginAccount
Handle user login business logic. If login is successful, it sets session token and returns account info.

| Field     | Type       | Description
|-----------|------------|----------
| email     | credentials| User email.
| password  | credentials| User password.
| rememberMe| Select     | Whether user wants long-term session cookie.

## Fleep.logoutAccount
Close session.

| Field  | Type  | Description
|--------|-------|----------
| ticket | String| Must be sent as parameter to all subsequent api calls.
| tokenId| String| Token id from loginAccount endpoint.

## Fleep.createAccount
Create new account and send verification email.

| Field      | Type  | Description
|------------|-------|----------
| email      | String| User email.
| password   | String| Initial password to set.
| displayName| String| Name to be displayed in conversations.
| referer    | String| Page that referred used to fleep.
| useCode    | Select| Use flow based on registration code.

## Fleep.repeatEmailCode
Trigger registration code email.

| Field  | Type  | Description
|--------|-------|----------
| email  | String| User email.
| referer| String| Page that referred used to fleep.
| ticket | String| Must be sent as parameter to all subsequent api calls.
| tokenId| String| Token id from loginAccount endpoint.

## Fleep.sendResetPasswordLink
Request password reset email for active account. Password is not reset yet just email with rest token is sent out. User must click on link in email and then enter new passord to rest it.

| Field  | Type  | Description
|--------|-------|----------
| email  | String| User email.
| ticket | String| Must be sent as parameter to all subsequent api calls.
| tokenId| String| Token id from loginAccount endpoint.

## Fleep.addReminder
Informs backend that given reminder has been show to the user.

| Field     | Type  | Description
|-----------|-------|----------
| reminderId| String| Reminder id.
| ticket    | String| Must be sent as parameter to all subsequent api calls.
| tokenId   | String| Token id from loginAccount endpoint.

## Fleep.getClassificators
Get list of classificators.

No arguments.

## Fleep.editAccountSettings
Change account related settings.

| Field               | Type  | Description
|---------------------|-------|----------
| ticket              | String| Must be sent as parameter to all subsequent api calls.
| tokenId             | String| Token id from loginAccount endpoint.
| displayName         | String| Name displayed instead of email in chats.
| password            | String| New password.
| oldPassword         | String| Required when submitting new password.
| phoneNumber         | String| User's phone number.
| emailInterval       | String| Email interval.
| isFullPrivacy       | Select| Stop sending out reading writing activity.
| isNewsletterDisabled| Select| Enable/disable newsletter sending
| isAutomuteEnabled   | Select| Enable/disable incoming email automute.
| clientSettings      | JSON  | Json encoded dict of changed client settings.
| primaryEmail        | String| Set new primary email (it has to be confirmed as alias first).
| fleepAddress        | String| Set fleep address (results in error if account already has one).

## Fleep.confirmAccount
Confirm receiving email with confirmation code and activate account.

| Field         | Type  | Description
|---------------|-------|----------
| notificationId| String| notification token
| ticket        | String| Must be sent as parameter to all subsequent api calls.
| tokenId       | String| Token id from loginAccount endpoint.

## Fleep.confirmAndConfigureAccount
Confirm receiving email and configure account.

| Field         | Type  | Description
|---------------|-------|----------
| notificationId| String| notification token
| ticket        | String| Must be sent as parameter to all subsequent api calls.
| tokenId       | String| Token id from loginAccount endpoint.
| displayName   | String| Display name.
| password      | String| User password.
| fleepAddress  | String| Fleep address.

## Fleep.exportConversationHistory
Export conversation history. User is notified when files are available for download.

| Field         | Type  | Description
|---------------|-------|----------
| ticket        | String| Must be sent as parameter to all subsequent api calls.
| tokenId       | String| Token id from loginAccount endpoint.
| exportAction  | String| What to export: history_all - conversation history, all file types.
| conversationId| String| If set, generate files for this conversation only,and return ConvInfo else return ContactInfo.

## Fleep.getExternalAccountInfo
Get External Account Info.

| Field                | Type  | Description
|----------------------|-------|----------
| ticket               | String| Must be sent as parameter to all subsequent api calls.
| tokenId              | String| Token id from loginAccount endpoint.
| mkExternalAccountType| Select| Type of the connected external account.
| mkPermissionType     | Select| Type of permissions that external account has granted to Fleep.

## Fleep.getContactsRecordList
Lookup accounts.

| Field     | Type  | Description
|-----------|-------|----------
| ticket    | String| Must be sent as parameter to all subsequent api calls.
| tokenId   | String| Token id from loginAccount endpoint.
| lookupList| List  | List of lookup strings.
| ignoreList| List  | List of accountId's to ignore.

## Fleep.getNotificationIdForFurtherRequests
Get notificationId for further requests.

| Field           | Type  | Description
|-----------------|-------|----------
| ticket          | String| Must be sent as parameter to all subsequent api calls.
| tokenId         | String| Token id from loginAccount endpoint.
| notificationId  | String| Notification id.
| registrationCode| String| Registration code.
| registrationMail| String| Registration mail.

## Fleep.setAccountFlag
Set flag for given account that may be used by clients to display or hide content etc.

| Field     | Type  | Description
|-----------|-------|----------
| ticket    | String| Must be sent as parameter to all subsequent api calls.
| tokenId   | String| Token id from loginAccount endpoint.
| clientFlag| String| Name of the flag to set or clear.
| boolValue | String| Clear given flag from account.

## Fleep.smtpConfigure
Use this method for configure smtp server.

| Field       | Type  | Description
|-------------|-------|----------
| ticket      | String| Must be sent as parameter to all subsequent api calls.
| tokenId     | String| Token id from loginAccount endpoint.
| smtpId      | String| Smtp id.
| smtpUsername| String| Smtp username.
| smtpPassword| String| Smtp password.
| smtpHost    | String| Smtp host.
| smtp_port   | String| Smtp port.Set to -1 to remove.
| isRemoved   | Select| Is removed.Set True to remove.
| isDefault   | Select| Set True to set as default.

## Fleep.getSmtpList
Get notification_id for further requests.

| Field  | Type  | Description
|--------|-------|----------
| ticket | String| Must be sent as parameter to all subsequent api calls.
| tokenId| String| Token id from loginAccount endpoint.

## Fleep.synchronizehronizePinboard
Synchronize pinboard.

| Field         | Type  | Description
|---------------|-------|----------
| ticket        | String| Must be sent as parameter to all subsequent api calls.
| tokenId       | String| Token id from loginAccount endpoint.
| conversationId| String| Conversation id.
| pinWeight     | String| Pin weight.
| pinLimit      | Number| Pin limit.

## Fleep.synchronizeTaskboard
Synchronize taskboard.

| Field         | Type  | Description
|---------------|-------|----------
| ticket        | String| Must be sent as parameter to all subsequent api calls.
| tokenId       | String| Token id from loginAccount endpoint.
| conversationId| String| Conversation id.
| sectionId     | String| Section id.
| taskWeight    | String| Task weight from cursor if provided.
| taskLimit     | Number| Tasks to synchronize in one batch (between 1 and 100).

## Fleep.getTrelloBoardList
Synchronize taskboard.

| Field            | Type  | Description
|------------------|-------|----------
| ticket           | String| Must be sent as parameter to all subsequent api calls.
| tokenId          | String| Token id from loginAccount endpoint.
| externalAccountId| String| Id of the external account (see ExternalAccountInfo).
| mkPermissionType | Select| Type of permissions that external account has granted to Fleep.

## Fleep.unsubscribeForNotification
Unsubscribe for notification.

| Field         | Type  | Description
|---------------|-------|----------
| ticket        | String| Must be sent as parameter to all subsequent api calls.
| tokenId       | String| Token id from loginAccount endpoint.
| notificationId| String| Id of notification.

## Fleep.deleteCurrentAvatar
Delete current avatar.

| Field  | Type  | Description
|--------|-------|----------
| ticket | String| Must be sent as parameter to all subsequent api calls.
| tokenId| String| Token id from loginAccount endpoint.

## Fleep.uploadAvatar
Upload avatar.

| Field    | Type  | Description
|----------|-------|----------
| ticket   | String| Must be sent as parameter to all subsequent api calls.
| tokenId  | String| Token id from loginAccount endpoint.
| imageFile| String| Image for avatar.

## Fleep.listenForNotificationsFromFleep
Use long poll to listen for notifications from Fleep.

| Field       | Type  | Description
|-------------|-------|----------
| ticket      | String| Must be sent as parameter to all subsequent api calls.
| tokenId     | String| Token id from loginAccount endpoint.
| eventHorizon| Number| Latest event client has seen.
| wait        | Select| Set to False if you want to get latest events but not stay waiting if there isn't any.
| downloadUrl | String| url from where to download new binary sent when server decides that client is too old and needs to be upgraded.

## Fleep.storingConnectionInformation
Handles long poll server side by storing connection information into connection table by the token.

| Field       | Type  | Description
|-------------|-------|----------
| ticket      | String| Must be sent as parameter to all subsequent api calls.
| tokenId     | String| Token id from loginAccount endpoint.
| eventHorizon| Number| Latest event client has seen.
| wait        | Select| Set to False if you want to get latest events but not stay waiting if there isn't any.
| pollFlags   | Select| Can be used to fine tune polls according to client needs. skip_hidden - skip hidden conversations during initial synchronize. skip_rest - skip other conversations and start polling events used for limiting number of conversations loaded into client cache.

## Fleep.synchronizeAccount
Use it to initialize some information using token.

| Field          | Type  | Description
|----------------|-------|----------
| ticket         | String| Must be sent as parameter to all subsequent api calls.
| tokenId        | String| Token id from loginAccount endpoint.
| eventHorizon   | Number| No point to read historic events either server must return good enough guess so that contacts and conversations will be.
| email          | String| Account's email.
| displayName    | String| Account's display name.
| accountId      | String| Account ID.
| mkAccountStatus| String| `new` - email has been registered but is goodness is unknown;`active` - user has stored a password and can participate;`banned` - user has been banned for some unacceptable activity;`closed` - user has requested this account to be closed;

## Fleep.getNextBatchOfConversations
Get next or previous batch of conversations.

| Field          | Type  | Description
|----------------|-------|----------
| ticket         | String| Must be sent as parameter to all subsequent api calls.
| tokenId        | String| Token id from loginAccount endpoint.
| conversationIds| List  | List of conversation id's to synchronize.
| mkInitMode     | Select| `ic_header` - header only.`ic_tiny` - for minimal.`ic_full` - ready for display.

## Fleep.addMembersToConversation
Add members to the conversation.

| Field            | Type  | Description
|------------------|-------|----------
| ticket           | String| Must be sent as parameter to all subsequent api calls.
| tokenId          | String| Token id from loginAccount endpoint.
| conversationId   | String| Add members to the conversation by id.
| fromMessageNumber| Number| Used to return next batch of changes.
| emails           | List  | List of email addresses like on email To: line.

## Fleep.autojoinConversation
Autojoin conversation if not member yet.

| Field             | Type  | Description
|-------------------|-------|----------
| ticket            | String| Must be sent as parameter to all subsequent api calls.
| tokenId           | String| Token id from loginAccount endpoint.
| conversationUrlKey| String| Add members to the conversation by id.

## Fleep.checkPermissions
Check if account has modification rights on the conversation. Same check is done in all conversation services so this here mainly helps with testing and documentation at first.

| Field         | Type  | Description
|---------------|-------|----------
| ticket        | String| Must be sent as parameter to all subsequent api calls.
| tokenId       | String| Token id from loginAccount endpoint.
| conversationId| String| Check permission conversation by id.

## Fleep.convertConversation
Convert conversation to new API.

| Field         | Type  | Description
|---------------|-------|----------
| ticket        | String| Must be sent as parameter to all subsequent api calls.
| tokenId       | String| Token id from loginAccount endpoint.
| conversationId| String| Convert conversation by id.

## Fleep.createConversation
Create new conversation.

| Field             | Type  | Description
|-------------------|-------|----------
| ticket            | String| Must be sent as parameter to all subsequent api calls.
| tokenId           | String| Token id from loginAccount endpoint.
| topic             | String| Conversation topic.
| emails            | List  | List of email addresses like on email To: line.
| subject           | String| Subject for first message.
| message           | String| Initial message into the conversation.
| attachments       | List  | List of AttachmentInfos to be added to conversation.
| isInvite          | Select| Send out invite emails to fresh fleepers
| isAutojoin        | Select| Allow autojoin to the conversation.
| isDisclose        | Select| Enable/disable auto disclose.
| fwdConversationId | String| Forwarded conversation id (for forwarding html messages).
| teamIds           | List  | Add teams to conversation.
| accountIds        | List  | List of account ids.
| forkConversationId| String| Parent conversation.
| isList            | Select| Behaves as mailing list. Set true for group conversations with more than two members as a default.
| isManaged         | Select| Is this conversation managed conversation.
| mkConvType        | Select| Conversation type.

## Fleep.createVideoCall
Create a new (video)call.

| Field         | Type  | Description
|---------------|-------|----------
| ticket        | String| Must be sent as parameter to all subsequent api calls.
| tokenId       | String| Token id from loginAccount endpoint.
| provider      | String| Call service provider (appear.in).
| roomName      | String| If not provided, room will have an unique random name.
| conversationId| String| Create video call by conversation id.

## Fleep.deleteConversation
Remove conversation from your conversation list. If you don’t leave conversation before deleting it will still reappear when someone writes in it.

| Field         | Type  | Description
|---------------|-------|----------
| ticket        | String| Must be sent as parameter to all subsequent api calls.
| tokenId       | String| Token id from loginAccount endpoint.
| conversationId| String| Delete conversation by id.

## Fleep.discloseConversationHistory
Disclose conversation history to members until given message.

| Field            | Type  | Description
|------------------|-------|----------
| ticket           | String| Must be sent as parameter to all subsequent api calls.
| tokenId          | String| Token id from loginAccount endpoint.
| conversationId   | String| Delete conversation by id.
| emails           | List  | List of email addresses like on email To: line.
| messageNumber    | Number| Disclose up to this message.
| fromMessageNumber| Number| Used to return next batch of changes.

## Fleep.discloseAllConversationsHistory
Disclose conversation history to members. All content of last membership is disclosed. 

| Field            | Type  | Description
|------------------|-------|----------
| ticket           | String| Must be sent as parameter to all subsequent api calls.
| tokenId          | String| Token id from loginAccount endpoint.
| conversationId   | String| Delete conversation by id.
| emails           | List  | List of email addresses like on email To: line.
| fromMessageNumber| Number| Used to return next batch of changes.

## Fleep.hideConversation
Hide conversation until new messages arrives. Useful for people who want to keep their inbox clear.

| Field            | Type  | Description
|------------------|-------|----------
| ticket           | String| Must be sent as parameter to all subsequent api calls.
| tokenId          | String| Token id from loginAccount endpoint.
| conversationId   | String| Hide conversation by id.
| fromMessageNumber| Number| Used to return next batch of changes.

## Fleep.leaveConversation
Leave the conversation.

| Field            | Type  | Description
|------------------|-------|----------
| ticket           | String| Must be sent as parameter to all subsequent api calls.
| tokenId          | String| Token id from loginAccount endpoint.
| conversationId   | String| Leave conversation by id.
| fromMessageNumber| Number| Used to return next batch of changes.

## Fleep.getAllConversation
List all conversations for this account. Same conversations may pop up several times due to shifting order caused by incoming messages. Stop calling when you receive empty conversation list.

| Field             | Type  | Description
|-------------------|-------|----------
| ticket            | String| Must be sent as parameter to all subsequent api calls.
| tokenId           | String| Token id from loginAccount endpoint.
| synchronizeHorizon| Number| Keeps track of conversations loaded set 0 for first call.

## Fleep.markConversationAsRead
Mark conversation as read regardless of how many unread messages there are. Useful for marking read conversations that you are not planning to read. For example error log after it has rolled up thousands of messages. Returns init conversation stream so the client side conversation will be reset to new read position and all the possibly skipped messages will not get misinterpreted.

| Field         | Type  | Description
|---------------|-------|----------
| ticket        | String| Must be sent as parameter to all subsequent api calls.
| tokenId       | String| Token id from loginAccount endpoint.
| conversationId| String| Leave conversation by id.
| mkInitMode    | Select| `ic_tiny` - for minimal.`ic_full` - ready for display.

## Fleep.sendPokeEven
Send poke event, used for testing synchronize between clients.

| Field            | Type  | Description
|------------------|-------|----------
| ticket           | String| Must be sent as parameter to all subsequent api calls.
| tokenId          | String| Token id from loginAccount endpoint.
| conversationId   | String| Leave conversation by id.
| messageNumber    | Number| Disclose up to this message.
| fromMessageNumber| Number| Used to return next batch of changes.
| isBgPoke         | Select| Go through bgworker.

## Fleep.removeMembersFromConversation
Remove members from the conversation.

| Field            | Type  | Description
|------------------|-------|----------
| ticket           | String| Must be sent as parameter to all subsequent api calls.
| tokenId          | String| Token id from loginAccount endpoint.
| conversationId   | String| Leave conversation by id.
| fromMessageNumber| Number| Used to return next batch of changes.
| emails           | List  | List of email addresses like on email To: line.

## Fleep.setConversationAlerts
Set conversation alerts.

| Field            | Type  | Description
|------------------|-------|----------
| ticket           | String| Must be sent as parameter to all subsequent api calls.
| tokenId          | String| Token id from loginAccount endpoint.
| conversationId   | String| Leave conversation by id.
| fromMessageNumber| Number| Used to return next batch of changes.
| mkAlertLevel     | Select| `never` - do not alert for this conversation;`default` - default behaviour.

## Fleep.changeConversationTopic
Change conversation topic.

| Field            | Type  | Description
|------------------|-------|----------
| ticket           | String| Must be sent as parameter to all subsequent api calls.
| tokenId          | String| Token id from loginAccount endpoint.
| conversationId   | String| Leave conversation by id.
| fromMessageNumber| Number| Used to return next batch of changes.
| topic            | String| Conversation topic.

## Fleep.getActivity
Show writing pen and/or pinboard editing status. This works both ways. Any call activates this conversation for this account. So to start receiving activity call with empty parameters.

| Field         | Type  | Description
|---------------|-------|----------
| ticket        | String| Must be sent as parameter to all subsequent api calls.
| tokenId       | String| Token id from loginAccount endpoint.
| conversationId| String| Leave conversation by id.
| messageNumber | Number| Edited flow or pinboard message number.
| isWriting     | Select| true - writing, false - cancel

## Fleep.storeConversationHeaderFields
Store conversation header fields. Store only fields that have changed. Call only when cache is fully synced.

| Field               | Type  | Description
|---------------------|-------|----------
| ticket              | String| Must be sent as parameter to all subsequent api calls.
| tokenId             | String| Token id from loginAccount endpoint.
| conversationId      | String| Leave conversation by id.
| readMessageNumber   | Number| New read horizon for conversation.
| labels              | List  | User labels for conversation.
| labelIds            | List  | User labels for conversation.
| topic               | String| Shared topic for conversation.
| mkAlertLevel        | Select| `never` - do not alert for this conversation;`default` - default behaviour.
| snoozeInterval      | String| For how long to snooze conversation in seconds.
| addEmails           | List  | Emails to be added (map to fleep accounts if possible).
| removeEmails        | List  | emails to be removed (map to fleep accounts if possible).
| discloseEmails      | List  | Disclose conversation to these users.
| addAccountIds       | List  | Account ids to be added to the conversation.
| kickAccountIds      | List  | Account ids to be removed from the conversation with no access to history - only useable with managed conversations.
| removeAccountIds    | List  | Account ids to be removed from the conversation.
| discloseAccountIds  | List  | Disclose conversation to these users.
| hideMessageNumber   | Number| Hide the conversation from this message number.
| isDeleted           | Select| Set to true to delete the conversation.
| isDeletedByAdmin    | Select| Delete by admin (affects all members).
| fromMessageNumber   | Number| Used to return next batch of changes.
| isAutojoin          | Select| Enable disable auto join.
| isDisclose          | Select| Enable/disable auto disclose.
| canPost             | Select| Set to false to leave the conversation.
| isUrlPreviewDisabled| Select| Don't show url previews for all users.
| isList              | Select| Behaves as mailing list.
| addTeamIds          | List  | Add teams to conversation.
| removeTeamIds       | List  | Remove teams from conversation.
| isManaged           | Select| Is this conversation managed conversation.
| addAdmins           | List  | Add conversation admins. Allow settingi non organisation admins as admins for conv.
| removeAdmins        | List  | Remove conversation admins.
| mkConvType          | Select| Change conversation email behavior.

## Fleep.synchronizeStateForConversation
Synchronize state for single conversation. If used with default values 5 messages before and after last reported readMessageNumber are returned. Also all conversation state are returned: PinInfo, memberInfo. All optional fields (o) are returned for first synchronize. After that these are included only when there have been changes. Changes are detected from system messages in message flow.

| Field            | Type  | Description
|------------------|-------|----------
| ticket           | String| Must be sent as parameter to all subsequent api calls.
| tokenId          | String| Token id from loginAccount endpoint.
| conversationId   | String| Leave conversation by id.
| fromMessageNumber| Number| Earliest message number client has received or previous messages are read and returned.
| mkDirection      | Select| mkDirection list.See more in readme.

## Fleep.synchronizeBackwardForConversation
Synchronize state for single conversation. Used to fetch messages for backward scroll.

| Field            | Type  | Description
|------------------|-------|----------
| ticket           | String| Must be sent as parameter to all subsequent api calls.
| tokenId          | String| Token id from loginAccount endpoint.
| conversationId   | String| Leave conversation by id.
| fromMessageNumber| Number| Earliest message number client has received or previous messages are read and returned.

## Fleep.synchronizePinboardForConversation
Synchronize pinboard for conversation where it was not fully sent with init.

| Field            | Type  | Description
|------------------|-------|----------
| ticket           | String| Must be sent as parameter to all subsequent api calls.
| tokenId          | String| Token id from loginAccount endpoint.
| conversationId   | String| Leave conversation by id.
| fromMessageNumber| Number| Earliest message number client has received or previous messages are read and returned.

## Fleep.synchronizeTeamsList
Synchronize teams.

| Field  | Type  | Description
|--------|-------|----------
| ticket | String| Must be sent as parameter to all subsequent api calls.
| tokenId| String| Token id from loginAccount endpoint.
| teamIds| List  | Add teams to conversation.

## Fleep.unhideConversation
Bring conversation out of hiding.

| Field            | Type  | Description
|------------------|-------|----------
| ticket           | String| Must be sent as parameter to all subsequent api calls.
| tokenId          | String| Token id from loginAccount endpoint.
| conversationId   | String| Leave conversation by id.
| fromMessageNumber| Number| Earliest message number client has received or previous messages are read and returned.

## Fleep.unsubscribeFromConversation
Unsubscribe from conversation.

| Field         | Type  | Description
|---------------|-------|----------
| ticket        | String| Must be sent as parameter to all subsequent api calls.
| tokenId       | String| Token id from loginAccount endpoint.
| conversationId| String| Leave conversation by id.
| email         | String| Email address to remove from conversation.

## Fleep.copyMessage
Copy message from another chat.

| Field            | Type  | Description
|------------------|-------|----------
| ticket           | String| Must be sent as parameter to all subsequent api calls.
| tokenId          | String| Token id from loginAccount endpoint.
| conversationId   | String| Leave conversation by id.
| messageNumber    | Number| Number of pinned message.
| toConversationId | String| Destination conversation.
| fromMessageNumber| Number| Used to return next batch of changes.

## Fleep.deleteMessageFromConversation
Delete message from conversation.

| Field            | Type  | Description
|------------------|-------|----------
| ticket           | String| Must be sent as parameter to all subsequent api calls.
| tokenId          | String| Token id from loginAccount endpoint.
| conversationId   | String| Leave conversation by id.
| messageNumber    | Number| Number of pinned message.
| attachmentId     | String| Delete only given attachment.
| fromMessageNumber| Number| Used to return next batch of changes.

## Fleep.editConversationMessage
Edit conversation message.

| Field            | Type  | Description
|------------------|-------|----------
| ticket           | String| Must be sent as parameter to all subsequent api calls.
| tokenId          | String| Token id from loginAccount endpoint.
| conversationId   | String| Leave conversation by id.
| messageNumber    | Number| Number of pinned message.
| message          | String| Message content.
| attachments      | List  | List of AttachmentInfo objects to be added.
| fromMessageNumber| Number| Used to return next batch of changes.

## Fleep.markMessageAsRead
Set conversation read horizon for this account. Used when client determines that it has shown messages to user for long enough for them to get read or user wants to move read horizon up again.

| Field            | Type  | Description
|------------------|-------|----------
| ticket           | String| Must be sent as parameter to all subsequent api calls.
| tokenId          | String| Token id from loginAccount endpoint.
| conversationId   | String| Leave conversation by id.
| messageNumber    | Number| Client read horizon. Last message number that we have shown to user. We update database and send notifications to other connected clients if it is larger than current value in database.
| fromMessageNumber| Number| Used to return next batch of changes.

## Fleep.sendMessage
Send message to flow.

| Field            | Type  | Description
|------------------|-------|----------
| ticket           | String| Must be sent as parameter to all subsequent api calls.
| tokenId          | String| Token id from loginAccount endpoint.
| conversationId   | String| Leave conversation by id.
| message          | String| Message content.
| fromMessageNumber| Number| Used to return next batch of changes.
| isRetry          | Select| Client is retrying same message send n'th time. Will fail if fromMessageNumber != lastMessageNumber.
| attachments      | List  | List of attachment urls.

## Fleep.storeMessage
Store message changes whatever they are. Do changes in local cache and send only changed fields.

| Field                  | Type  | Description
|------------------------|-------|----------
| ticket                 | String| Must be sent as parameter to all subsequent api calls.
| tokenId                | String| Token id from loginAccount endpoint.
| conversationId         | String| Leave conversation by id.
| message                | String| Message content.
| fromMessageNumber      | Number| Used to return next batch of changes.
| forwardedConversationId| String| Forwarded conversation id (for forwarding html messages).
| forwardedMessageNumber | String| Forwarded message number (for forwarding html messages).
| isUrlPreviewDisabled   | Select| Disable generating url previews for this message and remove if generated.
| isRetry                | Select| Client is retrying same message send n'th time. Will fail if fromMessageNumber != lastMessageNumber.
| messageNumber          | Number| Message number for edits and deletes.
| pinWeight              | Number| Used for sorting.
| CrapNetId              | Number| CrapNet id for message.
| attachments            | List  | List of attachment urls.
| assigneeIds            | List  | Assignees for task or message.
| tags                   | List  | List of tags for message;`pin` - pinned message;`is_todo` - task incomplete;`is_done` - done task;`is_separator` - task separator;`is_deleted` - message deleted;`is_archived` - pin or task archived;
| addReactions           | List  | Reactions to add.
| deleteReactions        | List  | Reactions to remove.
| subject                | String| Subject for first message.

## Fleep.getContentBySearchQuery
Set conversation read horizon for this account. Used when client determines that it has shown messages to user for long enough for them to get read or user wants to move read horizon up again.

| Field                | Type  | Description
|----------------------|-------|----------
| ticket               | String| Must be sent as parameter to all subsequent api calls.
| tokenId              | String| Token id from loginAccount endpoint.
| conversationId       | String| Limit search to one conversation.
| needSuggestions      | Select| Request suggestion list.
| keywords             | List  | Query search for content.
| ignoreConversationIds| List  | Client side matches no need to search duplicate matches.
| searchTypes          | List  | Do only search in specific areas`topic` - topic search only;`chat` - search in message content; `file` - search in file names; `pin` - search in pins;`task` - search in tasks.`subject` - search in email subjects;

## Fleep.loadIndexDataToCache
Load current user’s index data to cache.

| Field  | Type  | Description
|--------|-------|----------
| ticket | String| Must be sent as parameter to all subsequent api calls.
| tokenId| String| Token id from loginAccount endpoint.

## Fleep.dropIndexDataToCache
Drop user’s index from cache.

| Field  | Type  | Description
|--------|-------|----------
| ticket | String| Must be sent as parameter to all subsequent api calls.
| tokenId| String| Token id from loginAccount endpoint.

## Fleep.getSuggestWords
Suggest words.

| Field         | Type  | Description
|---------------|-------|----------
| ticket        | String| Must be sent as parameter to all subsequent api calls.
| tokenId       | String| Token id from loginAccount endpoint.
| keywords      | List  | Query search for suggest words.
| conversationId| String| Limit search to one conversation.

## Fleep.describeFofContact
Provide description for the contact that will be displayed only to the user.

| Field      | Type  | Description
|------------|-------|----------
| ticket     | String| Must be sent as parameter to all subsequent api calls.
| tokenId    | String| Token id from loginAccount endpoint.
| contactId  | String| Contact id.
| contactName| String| Description to set.
| phoneNumber| String| Set users phone number.

## Fleep.hideContact
Hide contacts from this user’s contactlist.

| Field     | Type  | Description
|-----------|-------|----------
| ticket    | String| Must be sent as parameter to all subsequent api calls.
| tokenId   | String| Token id from loginAccount endpoint.
| contactIds| List  | List of contacts to hide.

## Fleep.importContact
Import contacts into users contactlist. Used for gmail contact import.

| Field   | Type  | Description
|---------|-------|----------
| ticket  | String| Must be sent as parameter to all subsequent api calls.
| tokenId | String| Token id from loginAccount endpoint.
| contacts| List  | List of ContactImport objects.

## Fleep.synchronizeContact
Returns profile data for given id. Use it to update local client side cache.

| Field     | Type  | Description
|-----------|-------|----------
| ticket    | String| Must be sent as parameter to all subsequent api calls.
| tokenId   | String| Token id from loginAccount endpoint.
| contactIds| List  | List of contactIds to synchronize.

## Fleep.synchronizeContactActivity
Synchronize last seen time for requested contacts.

| Field     | Type  | Description
|-----------|-------|----------
| ticket    | String| Must be sent as parameter to all subsequent api calls.
| tokenId   | String| Token id from loginAccount endpoint.
| contactIds| List  | List of account ids to synchronize.

## Fleep.synchronizeAllContact
Returns profile data for given list of id’s. Use it to update local client side cache.

| Field       | Type  | Description
|-------------|-------|----------
| ticket      | String| Must be sent as parameter to all subsequent api calls.
| tokenId     | String| Token id from loginAccount endpoint.
| searchString| String| Returns profile data for given list of id’s. Use it to update local client side cache.
| ignoreIds   | List  | List of account ids client already has.

## Fleep.synchronizeContactList
Returns profile data for given list of id’s. Use it to update local client side cache.

| Field      | Type  | Description
|------------|-------|----------
| ticket     | String| Must be sent as parameter to all subsequent api calls.
| tokenId    | String| Token id from loginAccount endpoint.
| contactsIds| List  | List of account ids to synchronize.

## Fleep.removeContactFromConversation
Remove contact from conversation list dialog suggestions.

| Field      | Type  | Description
|------------|-------|----------
| ticket     | String| Must be sent as parameter to all subsequent api calls.
| tokenId    | String| Token id from loginAccount endpoint.
| contactsIds| List  | List of account_ids to synchronize.

## Fleep.uploadFile
Upload one or more files. File upload url-s can be used in message API calls storeMessage and sendMessage as attachments parameter.

| Field  | Type  | Description
|--------|-------|----------
| ticket | String| Must be sent as parameter to all subsequent api calls.
| tokenId| String| Token id from loginAccount endpoint.
| file   | File  | Input field for files.

## Fleep.uploadExternalFile
Add file into Fleep from an external source. Maximum allowed file size is 1GB. Upload request is put into queue and processed by a background job. Upload progress events are sent to the client during the upload process.

| Field         | Type  | Description
|---------------|-------|----------
| ticket        | String| Must be sent as parameter to all subsequent api calls.
| tokenId       | String| Token id from loginAccount endpoint.
| fileUrl       | String| Input field for files.
| fileName      | String| Name for files.
| fileSize      | String| max 1073741824.
| fileOrigin    | String| From where the file originates (Dropbox, Google Drive, Giphy, ...).
| conversationId| String| Needed, if file is related to a conversation.
| uploadId      | String| Upload id in client side.

## Fleep.addEmailAlias
Register email aliases for given account. Requires confirmation through email. All conversations are transferred under primary account as a result.

| Field  | Type  | Description
|--------|-------|----------
| ticket | String| Must be sent as parameter to all subsequent api calls.
| tokenId| String| Token id from loginAccount endpoint.
| email  | String| Email to be registered as alias.

## Fleep.confirmEmailAlias
Confirm that alias email received confirmation code.

| Field         | Type  | Description
|---------------|-------|----------
| ticket        | String| Must be sent as parameter to all subsequent api calls.
| tokenId       | String| Token id from loginAccount endpoint.
| notificationId| String| Notification id.

## Fleep.removeEmailAlias
Remove email alias from given account.

| Field  | Type  | Description
|--------|-------|----------
| ticket | String| Must be sent as parameter to all subsequent api calls.
| tokenId| String| Token id from loginAccount endpoint.
| email  | String| Email to be removed.

## Fleep.synchronizeEmailAlias
Fetch all aliases for given account. Used for displaying aliases in UI.

| Field  | Type  | Description
|--------|-------|----------
| ticket | String| Must be sent as parameter to all subsequent api calls.
| tokenId| String| Token id from loginAccount endpoint.

## Fleep.configureConversationWebhook
Change webhook name and/or other settings.

| Field            | Type  | Description
|------------------|-------|----------
| ticket           | String| Must be sent as parameter to all subsequent api calls.
| tokenId          | String| Token id from loginAccount endpoint.
| hookKey          | String| Hook key.
| hookName         | String| Name for hook.
| outgoingUrl      | String| URL for outgoing messages only relevant for plain and slack hooks.
| outgoingDisabled | Select| Whether outgoing URL functionality is disabled or not only relevant for plain and slack hooks.
| fromMessageNumber| Number| Used to return next batch of changes.

## Fleep.createConversationWebhook
Create webhook for given conversation.

| Field            | Type  | Description
|------------------|-------|----------
| ticket           | String| Must be sent as parameter to all subsequent api calls.
| tokenId          | String| Token id from loginAccount endpoint.
| hookType         | Select| Select hook type.
| hookName         | String| Name for hook.
| outgoingUrl      | String| URL for outgoing messages only relevant for plain and slack hooks.
| outgoingDisabled | Select| Whether outgoing URL functionality is disabled or not only relevant for plain and slack hooks.
| fromMessageNumber| Number| Used to return next batch of changes.
| externalAccountId| String| Id of the external account (see ExternalAccountInfo)only relevant for trello.
| externalObjectId | String| Id of the object in external system that should be hooked only relevant for trello (board id).

## Fleep.removeConversationWebhook
Remove webhook from conversation.

| Field            | Type  | Description
|------------------|-------|----------
| ticket           | String| Must be sent as parameter to all subsequent api calls.
| tokenId          | String| Token id from loginAccount endpoint.
| hookKey          | String| Key used as identifier.
| fromMessageNumber| Number| Used to return next batch of changes.
| conversationId   | String| Conversation by id.

## Fleep.getConversationWebhook
Show webhooks in conversation.

| Field         | Type  | Description
|---------------|-------|----------
| ticket        | String| Must be sent as parameter to all subsequent api calls.
| tokenId       | String| Token id from loginAccount endpoint.
| conversationId| String| Conversation by id.

## Fleep.autojoinToTeam
Autojoin team if not member yet. Autojoin url has following format https://fleep.io/team/KEY

| Field     | Type  | Description
|-----------|-------|----------
| ticket    | String| Must be sent as parameter to all subsequent api calls.
| tokenId   | String| Token id from loginAccount endpoint.
| teamUrlKey| String| Either teaminfo.team_id or last part of teaminfo.autojoin_url (KEY).

## Fleep.configureTeam
Add or remove members and change team name.

| Field              | Type  | Description
|--------------------|-------|----------
| ticket             | String| Must be sent as parameter to all subsequent api calls.
| tokenId            | String| Token id from loginAccount endpoint.
| team_name          | String| Team name.
| addEmails          | List  | List of emails to be added to team.
| removeEmails       | List  | List of emails to be removed from team.
| addConversations   | List  | List of conversation id's to add.
| removeConversations| List  | List of conversation id's to remove.
| addAccountIds      | List  | List of account ids to be added to team.
| removeAccountIds   | List  | List of account ids to be removed from team.
| kickAccountIds     | List  | List of account ids to be kicked from team , together with confistacion of managed history.
| addAdminIds        | List  | Add team admins.
| removeAdminIds     | List  | Remove team admins.
| isAutojoin         | Select| Is autojoin enabled.
| isManaged          | Select| Set team managed or not.

## Fleep.createTeam
Create team with given members and conversations.

| Field           | Type  | Description
|-----------------|-------|----------
| ticket          | String| Must be sent as parameter to all subsequent api calls.
| tokenId         | String| Token id from loginAccount endpoint.
| teamName        | String| Team name.
| addEmails       | List  | List of emails to be added to team.
| addConversations| List  | List of conversation id's to add.
| addAccountIds   | List  | List of account ids to be added to team.
| isAutojoin      | Select| Is autojoin enabled.
| isManaged       | Select| Set team managed or not.

## Fleep.removeTeam
Remove team.

| Field  | Type  | Description
|--------|-------|----------
| ticket | String| Must be sent as parameter to all subsequent api calls.
| tokenId| String| Token id from loginAccount endpoint.
| teamId | String| Team id.

## Fleep.synchronizeTeam
Synchronize team.

| Field         | Type  | Description
|---------------|-------|----------
| ticket        | String| Must be sent as parameter to all subsequent api calls.
| tokenId       | String| Token id from loginAccount endpoint.
| teamId        | String| Team id.
| conversationId| String| ConversationId to prove team access.

