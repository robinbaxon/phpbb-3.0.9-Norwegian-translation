<?php
/**
*
* memberlist [Norwegian Bokmaal]
*
* @package language
* @version $Id$
* @author Morten R. N. http://www.morten.com
* @copyright (c) 2005 phpBB Group, 2011 Norwegian translation team, Morten R. N.
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
	'ABOUT_USER'			=> 'Profil',
	'ACTIVE_IN_FORUM'		=> 'mest aktive forum',
	'ACTIVE_IN_TOPIC'		=> 'Mest aktive emne',
	'ADD_FOE'				=> 'Legg til som uvenn',
	'ADD_FRIEND'			=> 'legg til som venn',
	'AFTER'					=> 'Etter',

	'ALL'					=> 'Alle',

	'BEFORE'				=> 'Før',

	'CC_EMAIL'				=> 'Send en kopi av denne e-posten til deg selv.',
	'CONTACT_USER'			=> 'Kontakt',

	'DEST_LANG'				=> 'Språk',
	'DEST_LANG_EXPLAIN'		=> 'Velg et passende språk (hvis tilgjengelig) for mottakeren av denne meldingen.',

	'EMAIL_BODY_EXPLAIN'	=> 'Denne meldingen vil bli sendt som ren tekst, ikke inkludere noen HTML eller BBKode. Avsenderaddressen for denne meldingen vil bli satt til din e-postadresse.',
	'EMAIL_DISABLED'		=> 'Beklager, men alle e-post relaterte funksjoner har blitt deaktivert.',
	'EMAIL_SENT'			=> 'E-posten har blitt send.',
	'EMAIL_TOPIC_EXPLAIN'	=> 'Denne meldingen vil bli sendt som ren tekst, ikke inkludere noen HTML eller BBKode. Vær oppmerksom på at emnet allerede er inkludert i meldingen. Avsenderaddressen for denne meldingen vil bli satt til din e-postadresse.',
	'EMPTY_ADDRESS_EMAIL'	=> 'Du må oppgi en gyldig e-postadresse for mottakeren.',
	'EMPTY_MESSAGE_EMAIL'	=> 'Du må skrive inn meldingen du vil sende som e-post.',
	'EMPTY_MESSAGE_IM'		=> 'Du må skrive inn meldingen du vil sended.',
	'EMPTY_NAME_EMAIL'		=> 'Du må angi det riktige navnet på mottakeren.',
	'EMPTY_SUBJECT_EMAIL'	=> 'Du må skrive inn et emne for e-posten.',
	'EQUAL_TO'				=> 'Lik med',

	'FIND_USERNAME_EXPLAIN'	=> 'Bruk dette skjemaet for å søke etter spesifike medlemmer. Du trenger ikke å fylle ut alle feltene. For å matche delvis data bruk * som wildcard. Når du skriver inn datoer bruker formatet <kbd>ÅÅÅÅ-MM-DD</ kbd>, f.eks <samp>2004-02-29</ samp>. Bruk avkrysningsboksene for å velge ett eller flere brukernavn (flere brukernavn kan bli akseptert avhengig av selve skjemaet) og klikker på "Velg merkede" knappen for å returnere til forrige skjemaet.',
	'FLOOD_EMAIL_LIMIT'		=> 'Du kan ikke sende en ny e-post akkurat nå. Vennligst prøv igjen senere.',

	'GROUP_LEADER'			=> 'Gruppeleder',

	'HIDE_MEMBER_SEARCH'	=> 'Skjul medlemssøk',

	'IM_ADD_CONTACT'		=> 'Legg til kontakt',
	'IM_AIM'				=> 'Vær oppmerksom på at du trenger AOL Instant Messenger installert for å bruke denne.',
	'IM_AIM_EXPRESS'		=> 'AIM Express',
	'IM_DOWNLOAD_APP'		=> 'Last ned program',
	'IM_ICQ'				=> 'Vær oppmerksom på at brukere kan ha valgt å ikke motta uønskede direktemeldinger.',
	'IM_JABBER'				=> 'Vær oppmerksom på at brukere kan ha valgt å ikke motta uønskede direktemeldinger.',
	'IM_JABBER_SUBJECT'		=> 'Dette er en automatisk generert melding, vennligst ikke svar. Melding fra bruker %1$s den %2$s.',
	'IM_MESSAGE'			=> 'Din melding',
	'IM_MSNM'				=> 'Vær oppmerksom på at du trenger Windows Messenger installert for å bruke denne.',
	'IM_MSNM_BROWSER'		=> 'Din nettleser støtter ikke dette.',
	'IM_MSNM_CONNECT'		=> 'MSNM is not connected.\nYou have to connect to MSNM to continue.',
	'IM_NAME'				=> 'Your Name',
	'IM_NO_DATA'			=> 'There is no suitable contact information for this user.',
	'IM_NO_JABBER'			=> 'Sorry, direct messaging of Jabber users is not supported on this board. You will need a Jabber client installed on your system to contact the recipient above.',
	'IM_RECIPIENT'			=> 'Recipient',
	'IM_SEND'				=> 'Send message',
	'IM_SEND_MESSAGE'		=> 'Send message',
	'IM_SENT_JABBER'		=> 'Your message to %1$s has been sent successfully.',
	'IM_USER'				=> 'Send an instant message',

	'LAST_ACTIVE'				=> 'Last active',
	'LESS_THAN'					=> 'Less than',
	'LIST_USER'					=> '1 user',
	'LIST_USERS'				=> '%d users',
	'LOGIN_EXPLAIN_LEADERS'		=> 'The board requires you to be registered and logged in to view the team listing.',
	'LOGIN_EXPLAIN_MEMBERLIST'	=> 'The board requires you to be registered and logged in to access the memberlist.',
	'LOGIN_EXPLAIN_SEARCHUSER'	=> 'The board requires you to be registered and logged in to search users.',
	'LOGIN_EXPLAIN_VIEWPROFILE'	=> 'The board requires you to be registered and logged in to view profiles.',

	'MORE_THAN'				=> 'More than',

	'NO_EMAIL'				=> 'You are not permitted to send e-mail to this user.',
	'NO_VIEW_USERS'			=> 'You are not authorised to view the member list or profiles.',

	'ORDER'					=> 'Order',
	'OTHER'					=> 'Other',

	'POST_IP'				=> 'Posted from IP/domain',

	'RANK'					=> 'Rank',
	'REAL_NAME'				=> 'Recipient name',
	'RECIPIENT'				=> 'Recipient',
	'REMOVE_FOE'			=> 'Remove foe',
	'REMOVE_FRIEND'			=> 'Remove friend',

	'SELECT_MARKED'			=> 'Select marked',
	'SELECT_SORT_METHOD'	=> 'Select sort method',
	'SEND_AIM_MESSAGE'		=> 'Send AIM message',
	'SEND_ICQ_MESSAGE'		=> 'Send ICQ message',
	'SEND_IM'				=> 'Instant messaging',
	'SEND_JABBER_MESSAGE'	=> 'Send Jabber message',
	'SEND_MESSAGE'			=> 'Message',
	'SEND_MSNM_MESSAGE'		=> 'Send MSNM/WLM message',
	'SEND_YIM_MESSAGE'		=> 'Send YIM message',
	'SORT_EMAIL'			=> 'E-mail',
	'SORT_LAST_ACTIVE'		=> 'Last active',
	'SORT_POST_COUNT'		=> 'Post count',

	'USERNAME_BEGINS_WITH'	=> 'Username begins with',
	'USER_ADMIN'			=> 'Administer user',
	'USER_BAN'				=> 'Banning',
	'USER_FORUM'			=> 'User statistics',
	'USER_LAST_REMINDED'	=> array(
		0		=> 'No reminder sent at this time',
		1		=> '%1$d reminder sent<br />» %2$s',
	),
	'USER_ONLINE'			=> 'Online',
	'USER_PRESENCE'			=> 'Board presence',

	'VIEWING_PROFILE'		=> 'Viewing profile - %s',
	'VISITED'				=> 'Last visited',

	'WWW'					=> 'Website',
));

?>