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
| contentType| String| Content-Type of the image.Example - image/jpg.
| imageName| String| Name of the image.

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
| email           | String  | Email address.

## Fleep.autojoinConversation
Autojoin conversation if not member yet.

| Field             | Type  | Description
|-------------------|-------|----------
| ticket            | String| Must be sent as parameter to all subsequent api calls.
| tokenId           | String| Token id from loginAccount endpoint.
| conversationUrlKey| String| Either convinfo.conversation_id or last part of convinfo.autojoin_url (KEY).

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
| conversationId   | String| Disclose conversation by id.
| emails           | List  | List of email addresses like on email To: line.
| messageNumber    | Number| Disclose up to this message.
| fromMessageNumber| Number| Used to return next batch of changes.

## Fleep.discloseAllConversationsHistory
Disclose conversation history to members. All content of last membership is disclosed. 

| Field            | Type  | Description
|------------------|-------|----------
| ticket           | String| Must be sent as parameter to all subsequent api calls.
| tokenId          | String| Token id from loginAccount endpoint.
| conversationId   | String| Disclose conversation by id.
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
| conversationId   | String| Conversation id.
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
| conversationId   | String| Conversation id.
| fromMessageNumber| Number| Used to return next batch of changes.
| mkAlertLevel     | Select| `never` - do not alert for this conversation;`default` - default behaviour.

## Fleep.changeConversationTopic
Change conversation topic.

| Field            | Type  | Description
|------------------|-------|----------
| ticket           | String| Must be sent as parameter to all subsequent api calls.
| tokenId          | String| Token id from loginAccount endpoint.
| conversationId   | String| Conversation id.
| fromMessageNumber| Number| Used to return next batch of changes.
| topic            | String| Conversation topic.

## Fleep.getActivity
Show writing pen and/or pinboard editing status. This works both ways. Any call activates this conversation for this account. So to start receiving activity call with empty parameters.

| Field         | Type  | Description
|---------------|-------|----------
| ticket        | String| Must be sent as parameter to all subsequent api calls.
| tokenId       | String| Token id from loginAccount endpoint.
| conversationId| String| Conversation id.
| messageNumber | Number| Edited flow or pinboard message number.
| isWriting     | Select| true - writing, false - cancel

## Fleep.storeConversationHeaderFields
Store conversation header fields. Store only fields that have changed. Call only when cache is fully synced.

| Field               | Type  | Description
|---------------------|-------|----------
| ticket              | String| Must be sent as parameter to all subsequent api calls.
| tokenId             | String| Token id from loginAccount endpoint.
| conversationId      | String| Conversation id.
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
| conversationId   | String| Conversation id.
| fromMessageNumber| Number| Earliest message number client has received or previous messages are read and returned.
| mkDirection      | Select| mkDirection list.See more in readme.

## Fleep.synchronizeBackwardForConversation
Synchronize state for single conversation. Used to fetch messages for backward scroll.

| Field            | Type  | Description
|------------------|-------|----------
| ticket           | String| Must be sent as parameter to all subsequent api calls.
| tokenId          | String| Token id from loginAccount endpoint.
| conversationId   | String| Conversation id.
| fromMessageNumber| Number| Earliest message number client has received or previous messages are read and returned.

## Fleep.synchronizePinboardForConversation
Synchronize pinboard for conversation where it was not fully sent with init.

| Field            | Type  | Description
|------------------|-------|----------
| ticket           | String| Must be sent as parameter to all subsequent api calls.
| tokenId          | String| Token id from loginAccount endpoint.
| conversationId   | String| Conversation id.
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
| conversationId   | String| Conversation id.
| fromMessageNumber| Number| Earliest message number client has received or previous messages are read and returned.

## Fleep.unsubscribeFromConversation
Unsubscribe from conversation.

| Field         | Type  | Description
|---------------|-------|----------
| ticket        | String| Must be sent as parameter to all subsequent api calls.
| tokenId       | String| Token id from loginAccount endpoint.
| conversationId| String| Conversation id.
| email         | String| Email address to remove from conversation.

## Fleep.copyMessage
Copy message from another chat.

| Field            | Type  | Description
|------------------|-------|----------
| ticket           | String| Must be sent as parameter to all subsequent api calls.
| tokenId          | String| Token id from loginAccount endpoint.
| conversationId   | String| Conversation id.
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
| conversationId   | String| Conversation id.
| messageNumber    | Number| Number of pinned message.
| message          | String| Message content.
| attachments      | List  | List of AttachmentInfo objects(see in readme) to be added.
| fromMessageNumber| Number| Used to return next batch of changes.

## Fleep.markMessageAsRead
Set conversation read horizon for this account. Used when client determines that it has shown messages to user for long enough for them to get read or user wants to move read horizon up again.

| Field            | Type  | Description
|------------------|-------|----------
| ticket           | String| Must be sent as parameter to all subsequent api calls.
| tokenId          | String| Token id from loginAccount endpoint.
| conversationId   | String| Conversation id.
| messageNumber    | Number| Client read horizon. Last message number that we have shown to user. We update database and send notifications to other connected clients if it is larger than current value in database.
| fromMessageNumber| Number| Used to return next batch of changes.

## Fleep.sendMessage
Send message to flow.

| Field            | Type  | Description
|------------------|-------|----------
| ticket           | String| Must be sent as parameter to all subsequent api calls.
| tokenId          | String| Token id from loginAccount endpoint.
| conversationId   | String| Conversation id.
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
| conversationId         | String| Conversation id.
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
| contacts| List  | List of ContactImport objects(see in readme).

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
| conversationId   | String| Conversation by id.

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


#Info about object from method response.

##ActivityInfo

```
mk_rec_type         text = 'activity'
   conversation_id     text            - Conversation
   account_id          text            - Who is writing
   is_writing          boolean (o)     - true - writing, false - cancel
   read_message_nr     bigint (o)      - read horizon for this user
   join_message_nr     bigint (o)      - messsage_nr from which user sees the conversation
   activity_time       bigint          - when this activity happend
   ```
##BillingInfo   

```mk_rec_type                     text = 'billing'
   organisation_id                 uuid
   country_code                    text
   billing_details                 text
   billing_email                   text
   vat_number                      text
   plan_id                         text
   account_quantity                integer
   payment_method_image_url        text
   payment_method_description      text
   payment_method_expiration_date  text
   subscription_status             text                    - empty or "confirmed"
   discount                        numeric                 - discount % between 0 and 1 (where applicable)
   next_billing_date               bigint
   ```
##ContactInfo
   ```mk_rec_type         text = 'contact'
      account_id          text                - Account ID
      email               text (o)            - Account email
      display_name        text (o)            - name to be displayed in conversations
      mk_account_status   text                - See Classificators
      is_hidden_for_add   boolean (o)         - can this contact be shown when adding contacts
      mk_email_interval   text (o)            - filled only if requester account_id matches
      avatar_urls         text (o)            - json contains urls to avatar thumbnails
      contact_name        text (o)            - Contact name visible only to contactlist owner
      phone_nr            text (o)            - Phone phone nr visible only to contactlist owner
      client_flags        text (o)            - List of flag names that are true for client
      is_full_privacy     boolean (o)         - true if don't want to send and receive
                                                conversation read level and writing status
      activity_time       bigint (o)          - when user send or read something in fleep
      dialog_id           text (o)            - id of the latest dialog with this user
      alias_account_ids   text[] (o)          - for owner account only list of it's alias account ids
      trial_end_time      integer (o)         - time whne trial ends, 0 for premium users
      fleep_address       text (o)            - users fleep id
      is_newsletter_disabled  boolean (o)     - enable/disbale newsetter sending
      sort_rank           integer (o)         - show higher ranking contacts on top when filtering
      export_progress     float (o)           - history export progress, between 0 (started) and 1 (ready)
      export_files        text[] (o)          - list of JSON encoded export files
      client_settings     text (o)            - JSON encoded client settings
      has_password        boolean (o)         - Has user set password (or using google single sign in)
      is_premium          boolean (o)         - Owner only. True if premium user.
      full_name           text (o)            - Users own display name (without my modifications)
      is_automute_enabled boolean (o)         - Owner only. Are incoming emails from new sources automuted
      connected_email     text (o)            - Email linking email address if set
      activated_time      bigint (o)          - when user account was activated (email confirmed)
      organisation_id     uuid (o)            - contact is active member of this organisation
      organisation_name   text (o)            - name of the organisation contact is in
      is_org_admin        boolean (o)         - is user admin of the organisation
      storage_used_bytes  integer (o)         - number of bytes used in users file storage
      storage_quota_bytes integer (o)         - number of bytes allowed for user storage
   ```
##ConvInfo
   
 ```
 mk_rec_type                 text = 'conv'
 mk_init_mode                text            - ic_header - just header
                                               ic_tiny - minimal init
                                               ic_full - full init
 conversation_id             text            - mostly needed for conversation create case
 creator_id                  text            - id of the account who created the conversation
 join_message_nr             bigint          - message_nr when member was added to the conversation
                                               Useful for determining if backward scroll is still possible
 read_message_nr             bigint          - Current truth about read horizon. Normally it only
                                               increased but sometimes user may mark some messages
                                               unread.
 my_message_nr               bigint          - next message that mentions me
 show_message_nr             bigint          - number of latest visible message
 last_message_nr             bigint          - last message nr in the conversation or last message
                                               that is shown in case of leaving conversation
 inbox_message_nr            bigint          - point to the message to be displayed in conversation list
 delete_message_nr           bigint          - content before that message has been deleted by user
 disclose_message_nr         bigint          - earliest disclose done for this use
 can_post                    boolean         - true if profile is still in conevrsation
                                               and can post to this conversation
 topic                       text            - topic. Returned when changed
 members                     text[]          - list of account ids who are currently joined
 leavers                     text[]          - list of account ids who have left conversation
 guests                      text[]          - list of account ids who are addes as guests
 admins                      text[]          - list of account ids who are admins in managed conversation
 last_message_time           bigint          - unix timestamp of last message in flow
 mk_alert_level              text            - should alerting from this conversation be supressed
 file_horizon                bigint          - used in case all files are not sent during init
                                               pass it to api/conversation/sync_files call as
                                               from_message_nr
 pin_horizon                 bigint          - used in case all pins are not sent during init
                                               pass it to api/conversation/sync_pinboard call as
                                               from_message_nr
 task_horizon                bigint          - used to sync all tasks including archived tasks to client
 hide_message_nr             bigint          - if conversation last message nr is equal or smaller than
                                               hide message nr then conversation is to be hidden in client
 fw_message_nr               bigint          - when syncing conversation forward mesage nr shows
                                               forward progress and all is synced when it equals last_message_nr
 bw_message_nr               bigint          - when syncing conversation backward message nr shows
                                               backward progress and all is synced when it equals join_message_nr
 unread_count                bigint          - number of unread messages in conversation
 last_inbox_nr               bigint          - inbox number of last alerting inbox message. Can be used locally
                                               to reduce unread count while server asyncronously does the same
 inbox_time                  bigint          - weight of the conversation for sorting in conversation list
                                               and left menu
 is_deleted                  boolean         - If set to true by server conversation must be deleted from
                                               client cache.
 is_tiny                     boolean         - stream contains minimal amount of information needed for displaying
                                               conversation in list
 is_init                     boolean         - server requests cache reset for this conversation. Used for changes
                                               like disclose and rejoin
 teams                       text[]          - list of team id's that are part of this conversation
 labels                      text[]          - labels user has for this conversation
 label_ids                   uuid[]          - Account label id's for this conversation
 cmail                       text            - conversation email address, sending email to this address
                                               posts message in the conversation
 snooze_interval             bigint          - For how long to snooze conversation in seconds
 is_premium                  boolean         - At least one member is premium user
 has_pinboard                boolean         - Conversation has content on pinboard
 has_taskboard               boolean         - Conversation has conetnt on taskboard
 has_task_archive            boolean         - Conversation has archived tasks
 has_email_subject           boolean         - Message entry area should show email subject
 is_autojoin                 boolean         - Is autojoin enabled
 autojoin_url                text            - Url that can be used to autojoin conversation
 client_req_id               uuid            - last req id to change this conversation if changed
                                               using conversation store api call
 is_mark_unread              boolean         - true if last read activity was mark unread
 is_url_preview_disabled     boolean         - Don't show url previews for this message
 is_disclose                 boolean         - Is disclosed to new joiners
 is_automute                 boolean         - Is this conversation automatically muted on creation
 default_topic               text            - Topic to be shown when user has not enterd it
 default_members             text[]          - list of account id's used to create default topic
 export_progress             float (o)       - history export progress, between 0 (started) and 1 (ready)
 export_files                text[] (o)      - list of JSON encoded export files
 
 mk_conv_type                text            - 'cct_list' / 'cct_default' / 'cct_no_mail'
 is_list                     boolean         - If set to true list behavior is enabled else set to false
 is_managed                  boolean         - is this conversation managed
 organisation_id             uuid            - organisation who has claimed management of this conversation
 pin_cursor                  text            - Cursor for pinboard sync
 ```  
##ExternalAccountInfo
```
mk_rec_type                 text = 'external_account'
external_account_id         uuid                        - record id
account_id                  uuid                        - account owner
mk_external_account_type    text                        - type of the connected account:
                                                            trello
external_id                 text                        - account id in the external system
email                       text                        - email in the external system
```

##FileInfo
```
mk_rec_type         text = 'file'
conversation_id     text            - conversation where this file is
message_nr          bigint          - message to which file is attached
account_id          text            - Author ID
attachment_id       text            - key assign by client in message
file_sha256         text            - file hash, can be used to identify same files
file_name           text            - file name
file_url            text            - file url
file_size           bigint          - File size in bytes
file_type           text            - server validated file type
height              integer         - height for pictures
width               integer         - width for pictures
is_animated         boolean         - is animated gif
thumb_url_XX        text            - thumbail url for size XX
...
is_deleted          boolean         - filled when file is removed from message
is_hidden           boolean         - True, if file is an inline image inside of a quote or signature
deleter_id          text            - User who deleted file. If present message should
                                      be shown in message flow.
posted_time         bigint          - unix timestamp in seconds
orientation         bigint          - file orientation, for images
sender_name         text            - sender name if from email or hook
```

##HookInfo

```
mk_rec_type             text = 'hook'
conversation_id         uuid            - Conversation
account_id              uuid            - Creator of the hook
hook_name               text            - Hooks display name in chat. If not provided
                                          owners display name is used
hook_key                text            - Used for removing th hook
hook_url                text            - Url that can be used to send data into chat
                                          filled only for the owner
is_active               boolean         - is this hook currently active or for
                                          historical data
mk_hook_type            text            - bitbucket, confluence, github, gitlab, ifttt, jira, newrelic,
                                          pivotaltracker, plain (generic webhook), sameroom, slack, trello,
                                          zapier
avatar_urls             text            - Avatar displayed for hook messages
outgoing_url            text (o)        - URL that can be used to send out messages from this chat
                                          filled only for the owner
outgoing_disabled       boolean (o)     - whether outgoing functionality is disabled or not
                                          filled only for the owner when outgoing_url is present
outgoing_disable_reason text (o)        - the reason why outgoing functionality is disabled
                                          filled only for the owner when outgoing_disabled is true
```

##LabelInfo
```
mk_rec_type text = ‘label’ label text – Label name label_id text – label id index bigint – Label index (-1 -> remove label) mk_label_type text – Label type (user_label/system_label)

system labels cannot be renamed or deleted
mk_label_subtype text – more finegrained label type
user - user starred - starred conversations recent - recent inbox conversations muted - muted conversations archived - archived conversatione unread - unread conversations spam - conversations marked as spam team_label - label for team conversations
mk_label_status text – active / revoved
removed labels should be dropped from cache
is_on_left_pane boolean – should label be shown on left pane is_in_recent boolean – are conversations with this label shown

in RECENT section on left pane cannot be changed for system labels
is_in_muted boolean – are conversations with this label shown
in MUTED section on left pane cannot be changed for system labels
sync_inbox_time bigint – inbox time until which synced or 0 if in the end sync_conversation_id text – conversation id inside inbox time for ordering sync_cursor text – cursor for fetching next batch team_id text – team id for team labels

```
##LastSeenInfo
```
mk_rec_type         text = 'lastseen'
account_id          text            - Who is writing
activity_time       bigint          - when this activity happend
```
##LockInfo
```
mk_rec_type         text = 'lock'
conversation_id     text            - mostly needed for conversation create case
message_nr          bigint          - message sequence number in message flow
lock_account_id     text (o)        - who is locking message for editing
```
##MailInfo
```
mk_rec_type text = ‘mail’

mail_id uuid – mail record id

mail_address text – mail address

smtp_username text – smtp username smtp_host text – smtp host smtp_port bigint – smtp port mk_smtp_connection text – ‘ssl’/’starttls’ smtp_err text = None – smtp error smtp_disable_tls_verify bool

imap_username text – imap username imap_host text – imap host imap_port bigint – imap port mk_imap_connection text – ‘ssl’ / ‘starttls’ imap_err text = None – imap error imap_disable_tls_verify bool

mk_mail_type text – ‘mail’ / ‘gmail’ mk_mail_status text – ‘mail_add’ / ‘mail_failed’ / ‘mail_confirmed’ / ‘mail_removed’
```

##MessageInfo
```
mk_rec_type                 text = 'message'
mk_msg_sub_type             text            - for future use, more finegrained message type handling
conversation_id             text            - mostly needed for conversation create case
message_nr                  bigint          - message sequence number in message flow
subject                     text            - optional subject used for outgoing emails
message                     text            - message body - XML.
marked_text                 text            - used in search result to highlight marked text
account_id                  text            - Author ID
mk_message_type             text            - see Classificators
flow_message_nr             bigint          - In case this message is edit or delete of one of the earlier messages
revision_message_nr         bigint          - Latest visible revision
posted_time                 bigint          - unix timestamp in seconds
pin_weight                  numeric         - may be filled for pin messages
                                              apply only if filled
ref_message_nr              bigint          - used by messages that need ot reference other
                                              messages like unpin message fro example
edit_account_id             text            - ref to message revisor, normally same as author but
                                              may be different for pinned messages and files
edited_time                 bigint          - message edit time
tags                        text[]          - list of message flags. Possible values:
                                                pin - message is on pinboard
                                                is_todo - message is task
                                                is_done - message is task that has been completed
                                                is_separator - separator for tasks
                                                is_archived - message has been archived
                                                is_deleted - message has been delete
                                                is_new_sheet - this msg starts new sheet
                                                is_hidden - do not render message in flow
                                                is_edited_by_others - someone has edited this message
lock_account_id             text            - in case pin is locked for editing
inbox_nr                    bigint          - inbox number of message. Only alerting messages are
                                              assigned inbox numbers. So last_inbox_nr - inbox_nr
                                              should give number of alerting messages.
                                              Negative values point to previous inbox number from
                                              this message.
hook_key                    text            - filled if message was sent via hook
prev_message_nr             bigint          - number of previous visible message
is_new_sheet                boolean         - start new sheet in message flow
sender_name                 text            - Name of sender provided by hook or some other source
assignee_ids                uuid[]          - People assigned to this task or message
is_url_preview_disabled     boolean         - Don't show url previews for this message
on_behalf_id                text            - used for emails when email is sent by another user
marked_text                 text            - used with search. Search marks matches in message text
mk_message_state            text            - current message state
section_id                  uuid            - task section id
is_spam                     boolean         - message is marked as spam
is_edited_by_others         boolean         - non author has edited the message
pinned_account_id           uuid            - account that pinned the message
tasked_account_id           uuid            - account that tasked the message
```
##OrgMemberInfo
```
mk_rec_type             text = 'org_member'
organisation_id         uuid
account_id              uuid
mk_member_status        text                -- See Business Memeber Status belo
                                            -- bms_pending - waiting user accept
                                            -- bms_active - in use or ready for it
                                            -- bms_removed - released from org
                                            -- bms_closed - account closed
                                            -- bms_suspended - suspended by admin
                                            -- bms_declined - user declined
                                            -- bms_expired - invitation expired
is_admin                boolean             -- true if user is admin
```
##OrgInfo
```
mk_rec_type             text = 'org_header'
organisation_id         uuid
organisation_founder_id uuid
organisation_name       text
avatar_urls             text
version_nr              bigint
status                  text
trial_time              bigint
grace_time              bigint
is_admin                boolean
is_member               boolean             -- is current user member of the organisation
invoice_payments        boolean             -- is organisation using invoice payments
```
##PreviewInfo
```
mk_rec_type         text = 'preview'
conversation_id     text            - conversation where this file is
message_nr          bigint          - message to which file is attached
account_id          text            - Author ID
attached_url        text            - url being previewed
title               text            - Title extracted from source
description         text            - Descrition extracted from source
file_sha256         text            - file hash, can be used to identify same files
file_name           text            - file name
file_url            text            - file url
file_size           bigint          - File size in bytes
file_type           text            - server validated file type
height              integer         - height for pictures
width               integer         - width for pictures
is_animated         boolean         - is animated gif
thumb_url_XX        text            - thumbail url for size XX
...
is_deleted          boolean         - filled whne file is removed from message
deleter_id          text            - User who deleted file. If present message should
                                      be shown in message flow.                                    
```
##ReminderInfo
```
mk_rec_type             text = 'reminder'
reminder_id             uuid
account_id              uuid
mk_reminder_type        text
remind_time             bigint
expire_time             bigint
organisation_id         uuid
is_active               boolean
creator_id              uuid          -- who submitted reminder if not the author
```
##RequestInfo
```
mk_rec_type         text = 'request'
client_req_id       uuid            - Client request has been processed and all data changes
                                      are commited into database and they have all been
                                      sent through poll also
conversation_id     uuid (o)        - Conversation changed by request
result_message_nr   bigint (o)      - Message that was created or modified with this request
```
##SectionInfo
```
mk_rec_type             text = 'section'
conversation_id         uuid                             - Conversation id
section_id              uuid                             - Section id
name                    text                             - Section name
mk_section_type         text                             - Section type
mk_section_subtype      text                             - Section subtype
is_deleted              boolean                          - Is section deleted
weight                  float                            - Section weight
sync_cursor             text                             - Cursor for sync dependent on mk_section_type
```
##SMTPInfo
```
mk_rec_type text = ‘smtp’ – smtp_id uuid – SMTP record id smtp_address text – SMTP email address smtp_username text – SMTP username smtp_host text – SMTP host smtp_port bigint – user specified SMTP port (may be None) smtp_connection text – ‘ssl’ / ‘starttls’ mk_smtp_status text – SMTP record status

– smtp_added: record added but not confirmed – smtp_failed: record failed – smtp_confirmed: record confirmed – smtp_removed: record removed
smtp_status_description text – human readable status descropion
– most notably used to deliver error messages – when the record has failed
```
##TeamInfo
```
mk_rec_type         text = 'team'
team_id             uuid            - Id for team used in conversation heder to map all the teams
                                      that are part of the conversation
mk_sync_mode        text            - 'tsm_full' / 'tsm_snapshot' current or snapshot version of
                                      the team
team_version_nr     bigint          - Version number of the team record
team_name           text    (o)     - Name of the team
members             text[]  (o)     - List of account_id's who are part of the team
admins              text[]  (o)     - List of account_id's who can change team membership
is_deleted          boolean         - Whether the team is deleted
is_tiny             boolean         - Whether it is the full record or not (is_tiny is used to
                                      to sync limited data to non members)
is_autojoin         boolean (o)     - Is autojoin enabled
organisation_id     text    (o)     - Organisation in case of managed teams
autojoin_url        text            - Autojoin url to join team
is_managed          boolean         - is this a managed team
```
##TransactionInfo
```
mk_rec_type                     text = 'transaction'
organisation_id                 uuid
transaction_id                  uuid
amount                          numeric
transaction_time                bigint
download_url                    text
```
##UploadInfo
```
mk_rec_type         text = 'upload'
status              text                - 'pending, 'success' or 'failure'
progress            integer             - between 0 and 100, given if status is 'pending'
conversation_id     text                - conversation related to the upload request
request_id          text                - upload request id given by server
upload_id           text                - upload id given by client
file_type           text                - server validated file type
name                text                - file name
size                bigint              - file size
file_sha256         text                - file hash, can be used to identify same files
height              integer             - height for pictures
width               integer             - width for pictures
is_animated         boolean             - is animated gif
upload_url          text
error               text                - error description, given if status is 'failure'
```

