<?php
/**
*
* posting [Norwegian Bokmaal]
*
* @package language
* @version $Id$
* @author Morten R. N. http://www.morten.com
* @copyright (c) 2005 phpBB Group, 2012 Norwegian translation team, Morten R. N.
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ADD_ATTACHMENT'			=> 'Last opp vedlegg',
	'ADD_ATTACHMENT_EXPLAIN'	=> 'Dersom du ønsker å laste opp en eller flere filer, fyll inn detaljene under.',
	'ADD_FILE'					=> 'Legg til filen',
	'ADD_POLL'					=> 'Lag en avstemning',
	'ADD_POLL_EXPLAIN'			=> 'Hvis du ikke ønsker å legge til en avstemning på emnet ditt, la feltene stå tomme.',
	'ALREADY_DELETED'			=> 'Beklager, men denne meldingen er allerede slettet.',
	'ATTACH_QUOTA_REACHED'		=> 'Beklager, forumets vedleggs kvote er nådd.',
	'ATTACH_SIG'				=> 'Legg ved signatur. (Signaturen kan endres i brukerkontrollpanelet.)',

	'BBCODE_A_HELP'				=> 'Se vedlegg inline: [attachment=]filenavn.ext[/attachment]',
	'BBCODE_B_HELP'				=> 'Uthevet tekst: [b]tekst[/b]',
	'BBCODE_C_HELP'				=> 'Vis kode: [code]kode[/code]',
	'BBCODE_E_HELP'				=> 'Liste: Legg til punkt',
	'BBCODE_F_HELP'				=> 'Skriftstørrelse: [size=85]liten tekst[/size]',
	'BBCODE_IS_OFF'				=> '%sBBCode%s er <em>AV</em>',
	'BBCODE_IS_ON'				=> '%sBBCode%s er <em>PÅ</em>',
	'BBCODE_I_HELP'				=> 'Kursiv tekst: [i]tekst[/i]',
	'BBCODE_L_HELP'				=> 'Liste: [list]tekst[/list]',
	'BBCODE_LISTITEM_HELP'		=> 'Listepunkt: [*]tekst[/*]',
	'BBCODE_O_HELP'				=> 'Sortert liste: [list=]tekst[/list]',
	'BBCODE_P_HELP'				=> 'Sett inn bilde: [img]http://bilde_url[/img]',
	'BBCODE_Q_HELP'				=> 'Siter tekst: [quote]tekst[/quote]',
	'BBCODE_S_HELP'				=> 'Skriftfarge: [color=red]tekst[/color]  Tips: Du kan også bruke color=#FF0000',
	'BBCODE_U_HELP'				=> 'Understreket tekst: [u]tekst[/u]',
	'BBCODE_W_HELP'				=> 'Sett inn URL: [url]http://url[/url] eller [url=http://url]URL tekst[/url]',
	'BBCODE_D_HELP'				=> 'Flash: [flash=bredde,høyde]http://url[/flash]',
	'BUMP_ERROR'				=> 'Du kan ikke "bumpe" dette emnet så raskt etter det forrige innlegget.',

	'CANNOT_DELETE_REPLIED'		=> 'Beklager, men du kan bare slette innlegg som ikke er besvart.',
	'CANNOT_EDIT_POST_LOCKED'	=> 'Dette innlegget har blitt låst. Du kan ikke lenger redigere dette innlegget.',
	'CANNOT_EDIT_TIME'			=> 'Du kan ikke lenger redigere eller slette dette innlegget.',
	'CANNOT_POST_ANNOUNCE'		=> 'Beklager, men du kan ikke lage annonseringer.',
	'CANNOT_POST_STICKY'		=> 'Beklager, men du kan ikke skrive et prioritert tema.',
	'CHANGE_TOPIC_TO'			=> 'Endre emne type til',
	'CLOSE_TAGS'				=> 'Lukk tagger',
	'CURRENT_TOPIC'				=> 'Gjeldende emne',

	'DELETE_FILE'				=> 'Slett fil',
	'DELETE_MESSAGE'			=> 'Slett melding',
	'DELETE_MESSAGE_CONFIRM'	=> 'Er du sikker på at du vil slette denne meldingen?',
	'DELETE_OWN_POSTS'			=> 'Beklager, men du kan bare slette dine egne innlegg.',
	'DELETE_POST_CONFIRM'		=> 'Er du sikker på at du vil slette dette innlegget?',
	'DELETE_POST_WARN'			=> 'Når innlegget er slettet kan det ikke gjenopprettes',
	'DISABLE_BBCODE'			=> 'Slå av BBKode',
	'DISABLE_MAGIC_URL'			=> 'Ikke link URLer automatisk',
	'DISABLE_SMILIES'			=> 'Deaktiver Smil',
	'DISALLOWED_CONTENT'		=> 'Opplastingen ble avvist fordi den opplastede filen ble identifisert som et mulig angrepsforsøk.',
	'DISALLOWED_EXTENSION'		=> 'Filtypen %s er ikke tillatt.',
	'DRAFT_LOADED'				=> 'Kladden er satt inn i skriveområdet, du kan fullføre innlegget nå.<br/>Kladden vil bli slettet etter at du har postet dette innlegget.',
	'DRAFT_LOADED_PM'			=> 'Kladden er satt inn i skriveområdet, du kan fullføre din private melding nå.<br/>Kladden vil bli slettet etter at du har postet dette innlegget.',
	'DRAFT_SAVED'				=> 'Kladden er lagret.',
	'DRAFT_TITLE'				=> 'Kladdtittel',

	'EDIT_REASON'				=> 'Begrunnelse for endring av dette innlegget',
	'EMPTY_FILEUPLOAD'			=> 'Den opplastede filen er tom.',
	'EMPTY_MESSAGE'				=> 'Du må skrive en melding for å poste et innlegg.',
	'EMPTY_REMOTE_DATA'			=> 'Filen kunne ikke lastes opp, kan du prøve å laste opp filen manuelt.',

	'FLASH_IS_OFF'				=> '[flash] is <em>OFF</em>',
	'FLASH_IS_ON'				=> '[flash] is <em>ON</em>',
	'FLOOD_ERROR'				=> 'You cannot make another post so soon after your last.',
	'FONT_COLOR'				=> 'Font colour',
	'FONT_COLOR_HIDE'			=> 'Hide font colour',
	'FONT_HUGE'					=> 'Huge',
	'FONT_LARGE'				=> 'Large',
	'FONT_NORMAL'				=> 'Normal',
	'FONT_SIZE'					=> 'Font size',
	'FONT_SMALL'				=> 'Small',
	'FONT_TINY'					=> 'Tiny',

	'GENERAL_UPLOAD_ERROR'		=> 'Could not upload attachment to %s.',

	'IMAGES_ARE_OFF'			=> '[img] is <em>OFF</em>',
	'IMAGES_ARE_ON'				=> '[img] is <em>ON</em>',
	'INVALID_FILENAME'			=> '%s is an invalid filename.',

	'LOAD'						=> 'Load',
	'LOAD_DRAFT'				=> 'Load draft',
	'LOAD_DRAFT_EXPLAIN'		=> 'Here you are able to select the draft you want to continue writing. Your current post will be cancelled, all current post contents will be deleted. View, edit and delete drafts within your User Control Panel.',
	'LOGIN_EXPLAIN_BUMP'		=> 'You need to login in order to bump topics within this forum.',
	'LOGIN_EXPLAIN_DELETE'		=> 'You need to login in order to delete posts within this forum.',
	'LOGIN_EXPLAIN_POST'		=> 'You need to login in order to post within this forum.',
	'LOGIN_EXPLAIN_QUOTE'		=> 'You need to login in order to quote posts within this forum.',
	'LOGIN_EXPLAIN_REPLY'		=> 'You need to login in order to reply to topics within this forum.',

	'MAX_FONT_SIZE_EXCEEDED'	=> 'You may only use fonts up to size %1$d.',
	'MAX_FLASH_HEIGHT_EXCEEDED'	=> 'Your flash files may only be up to %1$d pixels high.',
	'MAX_FLASH_WIDTH_EXCEEDED'	=> 'Your flash files may only be up to %1$d pixels wide.',
	'MAX_IMG_HEIGHT_EXCEEDED'	=> 'Your images may only be up to %1$d pixels high.',
	'MAX_IMG_WIDTH_EXCEEDED'	=> 'Your images may only be up to %1$d pixels wide.',

	'MESSAGE_BODY_EXPLAIN'		=> 'Enter your message here, it may contain no more than <strong>%d</strong> characters.',
	'MESSAGE_DELETED'			=> 'This message has been deleted successfully.',
	'MORE_SMILIES'				=> 'View more smilies',

	'NOTIFY_REPLY'				=> 'Notify me when a reply is posted',
	'NOT_UPLOADED'				=> 'File could not be uploaded.',
	'NO_DELETE_POLL_OPTIONS'	=> 'You cannot delete existing poll options.',
	'NO_PM_ICON'				=> 'No PM icon',
	'NO_POLL_TITLE'				=> 'You have to enter a poll title.',
	'NO_POST'					=> 'The requested post does not exist.',
	'NO_POST_MODE'				=> 'No post mode specified.',

	'PARTIAL_UPLOAD'			=> 'The uploaded file was only partially uploaded.',
	'PHP_SIZE_NA'				=> 'The attachment’s file size is too large.<br />Could not determine the maximum size defined by PHP in php.ini.',
	'PHP_SIZE_OVERRUN'			=> 'The attachment’s file size is too large, the maximum upload size is %1$d %2$s.<br />Please note this is set in php.ini and cannot be overridden.',
	'PLACE_INLINE'				=> 'Place inline',
	'POLL_DELETE'				=> 'Delete poll',
	'POLL_FOR'					=> 'Run poll for',
	'POLL_FOR_EXPLAIN'			=> 'Enter 0 or leave blank for a never ending poll.',
	'POLL_MAX_OPTIONS'			=> 'Options per user',
	'POLL_MAX_OPTIONS_EXPLAIN'	=> 'This is the number of options each user may select when voting.',
	'POLL_OPTIONS'				=> 'Poll options',
	'POLL_OPTIONS_EXPLAIN'		=> 'Place each option on a new line. You may enter up to <strong>%d</strong> options.',
	'POLL_OPTIONS_EDIT_EXPLAIN'	=> 'Place each option on a new line. You may enter up to <strong>%d</strong> options. If you remove or add options all previous votes will be reset.',
	'POLL_QUESTION'				=> 'Poll question',
	'POLL_TITLE_TOO_LONG'		=> 'The poll title must contain fewer than 100 characters.',
	'POLL_TITLE_COMP_TOO_LONG'	=> 'The parsed size of your poll title is too large, consider removing BBCodes or smilies.',
	'POLL_VOTE_CHANGE'			=> 'Allow re-voting',
	'POLL_VOTE_CHANGE_EXPLAIN'	=> 'If enabled users are able to change their vote.',
	'POSTED_ATTACHMENTS'		=> 'Posted attachments',
	'POST_APPROVAL_NOTIFY'		=> 'You will be notified when your post has been approved.',
	'POST_CONFIRMATION'			=> 'Confirmation of post',
	'POST_CONFIRM_EXPLAIN'		=> 'To prevent automated posts the board requires you to enter a confirmation code. The code is displayed in the image you should see below. If you are visually impaired or cannot otherwise read this code please contact the %sBoard Administrator%s.',
	'POST_DELETED'				=> 'This message has been deleted successfully.',
	'POST_EDITED'				=> 'This message has been edited successfully.',
	'POST_EDITED_MOD'			=> 'This message has been edited successfully, but it will need to be approved by a moderator before it is publicly viewable.',
	'POST_GLOBAL'				=> 'Global',
	'POST_ICON'					=> 'Post icon',
	'POST_NORMAL'				=> 'Normal',
	'POST_REVIEW'				=> 'Post review',
	'POST_REVIEW_EDIT'			=> 'Post review',
	'POST_REVIEW_EDIT_EXPLAIN'	=> 'This post has been altered by another user while you were editing it. You may wish to review the current version of this post and adjust your edits.',
	'POST_REVIEW_EXPLAIN'		=> 'At least one new post has been made to this topic. You may wish to review your post in light of this.',
	'POST_STORED'				=> 'This message has been posted successfully.',
	'POST_STORED_MOD'			=> 'This message has been submitted successfully, but it will need to be approved by a moderator before it is publicly viewable.',
	'POST_TOPIC_AS'				=> 'Post topic as',
	'PROGRESS_BAR'				=> 'Progress bar',

	'QUOTE_DEPTH_EXCEEDED'		=> 'You may embed only %1$d quotes within each other.',

	'SAVE'						=> 'Save',
	'SAVE_DATE'					=> 'Saved at',
	'SAVE_DRAFT'				=> 'Save draft',
	'SAVE_DRAFT_CONFIRM'		=> 'Please note that saved drafts only include the subject and the message, any other element will be removed. Do you want to save your draft now?',
	'SMILIES'					=> 'Smilies',
	'SMILIES_ARE_OFF'			=> 'Smilies are <em>OFF</em>',
	'SMILIES_ARE_ON'			=> 'Smilies are <em>ON</em>',
	'STICKY_ANNOUNCE_TIME_LIMIT'=> 'Sticky/Announcement time limit',
	'STICK_TOPIC_FOR'			=> 'Stick topic for',
	'STICK_TOPIC_FOR_EXPLAIN'	=> 'Enter 0 or leave blank for a never ending Sticky/Announcement. Please note that this number is relative to the date of the post.',
	'STYLES_TIP'				=> 'Tip: Styles can be applied quickly to selected text.',

	'TOO_FEW_CHARS'				=> 'Your message contains too few characters.',
	'TOO_FEW_CHARS_LIMIT'		=> 'Your message contains %1$d characters. The minimum number of characters you need to enter is %2$d.',
	'TOO_FEW_POLL_OPTIONS'		=> 'You must enter at least two poll options.',
	'TOO_MANY_ATTACHMENTS'		=> 'Cannot add another attachment, %d is the maximum.',
	'TOO_MANY_CHARS'			=> 'Your message contains too many characters.',
	'TOO_MANY_CHARS_POST'		=> 'Your message contains %1$d characters. The maximum number of allowed characters is %2$d.',
	'TOO_MANY_CHARS_SIG'		=> 'Your signature contains %1$d characters. The maximum number of allowed characters is %2$d.',
	'TOO_MANY_POLL_OPTIONS'		=> 'You have tried to enter too many poll options.',
	'TOO_MANY_SMILIES'			=> 'Your message contains too many smilies. The maximum number of smilies allowed is %d.',
	'TOO_MANY_URLS'				=> 'Your message contains too many URLs. The maximum number of URLs allowed is %d.',
	'TOO_MANY_USER_OPTIONS'		=> 'You cannot specify more options per user than existing poll options.',
	'TOPIC_BUMPED'				=> 'Topic has been bumped successfully.',

	'UNAUTHORISED_BBCODE'		=> 'You cannot use certain BBCodes: %s.',
	'UNGLOBALISE_EXPLAIN'		=> 'To switch this topic back from being global to a normal topic, you need to select the forum you wish this topic to be displayed.',
	'UPDATE_COMMENT'			=> 'Update comment',
	'URL_INVALID'				=> 'The URL you specified is invalid.',
	'URL_NOT_FOUND'				=> 'The file specified could not be found.',
	'URL_IS_OFF'				=> '[url] is <em>OFF</em>',
	'URL_IS_ON'					=> '[url] is <em>ON</em>',
	'USER_CANNOT_BUMP'			=> 'You cannot bump topics in this forum.',
	'USER_CANNOT_DELETE'		=> 'You cannot delete posts in this forum.',
	'USER_CANNOT_EDIT'			=> 'You cannot edit posts in this forum.',
	'USER_CANNOT_REPLY'			=> 'You cannot reply in this forum.',
	'USER_CANNOT_FORUM_POST'	=> 'You are not able to do posting operations on this forum due to the forum type not supporting it.',

	'VIEW_MESSAGE'				=> '%sView your submitted message%s',
	'VIEW_PRIVATE_MESSAGE'		=> '%sView your submitted private message%s',

	'WRONG_FILESIZE'			=> 'The file is too big, maximum allowed size is %1d %2s.',
	'WRONG_SIZE'				=> 'The image must be at least %1$d pixels wide, %2$d pixels high and at most %3$d pixels wide and %4$d pixels high. The submitted image is %5$d pixels wide and %6$d pixels high.',
));

?>