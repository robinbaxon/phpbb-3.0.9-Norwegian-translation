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
	'IM_MSNM_CONNECT'		=> 'MSNM er ikke tilkoblet. \\nDu må være tilkoblet MSNM for å fortsette.',
	'IM_NAME'				=> 'Ditt navn',
	'IM_NO_DATA'			=> 'Det er ingen tilgjengelig kontaktinformasjon for denne brukeren.',
	'IM_NO_JABBER'			=> 'Beklager, direkte Jabber meldinger støttes ikke på dette forumet. Du trenger en Jabber-klient installert på systemet ditt for å kontakte ovennevnte mottaker.',
	'IM_RECIPIENT'			=> 'Mottaker',
	'IM_SEND'				=> 'Send melding',
	'IM_SEND_MESSAGE'		=> 'Send melding',
	'IM_SENT_JABBER'		=> 'Din melding til %1$s har blitt sendt.',
	'IM_USER'				=> 'Send en direktemelding',

	'LAST_ACTIVE'				=> 'Sist aktiv',
	'LESS_THAN'					=> 'Mindre enn',
	'LIST_USER'					=> '1 bruker',
	'LIST_USERS'				=> '%d brukere',
	'LOGIN_EXPLAIN_LEADERS'		=> 'Dette forumet krever at du er registrert og innlogget for å se forumledelseslisten.',
	'LOGIN_EXPLAIN_MEMBERLIST'	=> 'Dette forumet krever at du er registrert og innlogget for å se medlemslisten.',
	'LOGIN_EXPLAIN_SEARCHUSER'	=> 'Dette forumet krever at du er registrert og innlogget for å søke etter brukere.',
	'LOGIN_EXPLAIN_VIEWPROFILE'	=> 'Dette forumet krever at du er registrert og innlogget for å se på brukerprofiler.',

	'MORE_THAN'				=> 'Mer enn',

	'NO_EMAIL'				=> 'Du har ikke rettigheter til å sende e-post til denne brukeren.',
	'NO_VIEW_USERS'			=> 'Du har ikke rettigheter til å se medlemslisten eller profilene.',

	'ORDER'					=> 'Sorter',
	'OTHER'					=> 'Annet',

	'POST_IP'				=> 'Skrevet fra IP/domene',

	'RANK'					=> 'Rang',
	'REAL_NAME'				=> 'Mottakers navn',
	'RECIPIENT'				=> 'Mottaker',
	'REMOVE_FOE'			=> 'Fjern uvenn',
	'REMOVE_FRIEND'			=> 'Fjern venn',

	'SELECT_MARKED'			=> 'Velg merkede',
	'SELECT_SORT_METHOD'	=> 'Velg sorteringsmetode',
	'SEND_AIM_MESSAGE'		=> 'Send AIM-melding',
	'SEND_ICQ_MESSAGE'		=> 'Send ICQ-melding',
	'SEND_IM'				=> 'Direktemeldinger',
	'SEND_JABBER_MESSAGE'	=> 'Send Jabber-melding',
	'SEND_MESSAGE'			=> 'Melding',
	'SEND_MSNM_MESSAGE'		=> 'Send MSNM/WLM melding',
	'SEND_YIM_MESSAGE'		=> 'Send YIM melding',
	'SORT_EMAIL'			=> 'E-post',
	'SORT_LAST_ACTIVE'		=> 'Sist aktiv',
	'SORT_POST_COUNT'		=> 'Antall innleggt',

	'USERNAME_BEGINS_WITH'	=> 'Brukernavn som begynner med',
	'USER_ADMIN'			=> 'Administrer bruker',
	'USER_BAN'				=> 'Utelukk',
	'USER_FORUM'			=> 'Brukerstatistikk',
	'USER_LAST_REMINDED'	=> array(
		0		=> 'Ingen påminnelse sendt nå',
		1		=> '%1$d påminnelse sendt<br />» %2$s',
	),
	'USER_ONLINE'			=> 'Pålogget',
	'USER_PRESENCE'			=> 'Tilstedeværelse på forumet',

	'VIEWING_PROFILE'		=> 'Ser på brukerprofilen til - %s',
	'VISITED'				=> 'Sist besøkt',

	'WWW'					=> 'Hjemmeside',
));

?>