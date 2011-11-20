<?php
/**
*
* groups [Norwegian Bokmaal]
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
	'ALREADY_DEFAULT_GROUP'		=> 'Den valgte gruppen er allerede din standardgruppe.',
	'ALREADY_IN_GROUP'			=> 'Du er allerede medlem av den valgte gruppen.',
	'ALREADY_IN_GROUP_PENDING'	=> 'Du har allerede søkt om medlemskap i den valgte gruppen.',

	'CANNOT_JOIN_GROUP'			=> 'Du kan ikke bli medlem av denne gruppen. Du kan bare bli medlem av åpne og frie åpne grupper.',
	'CANNOT_RESIGN_GROUP'		=> 'Du kan ikke melde deg ut av denne gruppen. Du kan bare melde deg ut av åpne og frie åpne grupper.',
	'CHANGED_DEFAULT_GROUP'		=> 'Endring av standardgruppe var vellykket.',

	'GROUP_AVATAR'						=> 'Gruppeavatar',
	'GROUP_CHANGE_DEFAULT'				=> 'Er du sikker på at du vil bytte standardgruppe til “%s”?',
	'GROUP_CLOSED'						=> 'Stengt',
	'GROUP_DESC'						=> 'Gruppebeskrivelse',
	'GROUP_HIDDEN'						=> 'Skjult',
	'GROUP_INFORMATION'					=> 'Gruppeinformasjon',
	'GROUP_IS_CLOSED'					=> 'Dette er en privat/lukket gruppe, man kan bare bli medlem etter en invitasjon fra en gruppeleder.',
	'GROUP_IS_FREE'						=> 'Dette er en åpen gruppe, alle nye medlemmer er velkommen.',
	'GROUP_IS_HIDDEN'					=> 'Dette er en skjult gruppe, kun medlemmer kan se egenskaper og hvem som er medlem.',
	'GROUP_IS_OPEN'						=> 'Dette er en åpen gruppe, men du må søke om å bli medlem.',
	'GROUP_IS_SPECIAL'					=> 'Dette er en spesialgruppe, som er administrert av forumadministratorene.',
	'GROUP_JOIN'						=> 'Bli medlem av gruppen',
	'GROUP_JOIN_CONFIRM'				=> 'Er du sikker på at du vil melde deg inn i denne gruppen?',
	'GROUP_JOIN_PENDING'				=> 'Søk om å bli med i gruppen',
	'GROUP_JOIN_PENDING_CONFIRM'		=> 'Er du sikker på at du vil søke om medlemskap i den valgte gruppen?',
	'GROUP_JOINED'						=> 'Du er nå medlem av den valgte gruppen.',
	'GROUP_JOINED_PENDING'				=> 'Søknad om medlemskap i gruppen er levert, den må nå godkjennes av en gruppeleder.',
	'GROUP_LIST'						=> 'Administrer brukere',
	'GROUP_MEMBERS'						=> 'Gruppemedlemmer',
	'GROUP_NAME'						=> 'Gruppenavn',
	'GROUP_OPEN'						=> 'Åpen',
	'GROUP_RANK'						=> 'Grupperang',
	'GROUP_RESIGN_MEMBERSHIP'			=> 'Avslutte gruppemedlemskap',
	'GROUP_RESIGN_MEMBERSHIP_CONFIRM'	=> 'Er du sikker på at du vil avslutte medlemskapet i den valgte gruppen?',
	'GROUP_RESIGN_PENDING'				=> 'Avbryt søknad om gruppemedlemskap',
	'GROUP_RESIGN_PENDING_CONFIRM'		=> 'Er du sikker på at du vil avbryte søknaden om medlemskap i den valgte gruppen?',
	'GROUP_RESIGNED_MEMBERSHIP'			=> 'Du er nå utmeldt fra den valgte gruppen.',
	'GROUP_RESIGNED_PENDING'			=> 'Din søknad om medlemskap i den valgte gruppen er nå avbrutt.',
	'GROUP_TYPE'						=> 'Gruppetype',
	'GROUP_UNDISCLOSED'					=> 'Skjult gruppe',
	'FORUM_UNDISCLOSED'					=> 'Modererer skjulte forum',

	'LOGIN_EXPLAIN_GROUP'	=> 'Du må logge inn for å se gruppedetaljer.',

	'NO_LEADERS'					=> 'Du er ikke leder i noen gruppe.',
	'NOT_LEADER_OF_GROUP'			=> 'Handlingen kan ikke utføres fordi du ikke er leder i den valgte gruppen.',
	'NOT_MEMBER_OF_GROUP'			=> 'Handlingen kan ikke utføres fordi du ikke er medlem i den valgte gruppen eller ditt medlemskap er enda ikke godkjent.',
	'NOT_RESIGN_FROM_DEFAULT_GROUP'	=> 'Du har ikke lov til å melde deg ut av hovedgruppen.',
	
	'PRIMARY_GROUP'		=> 'Hovedgruppe',

	'REMOVE_SELECTED'		=> 'Fjern valgte',

	'USER_GROUP_CHANGE'			=> 'Fra “%1$s” gruppe til “%2$s”',
	'USER_GROUP_DEMOTE'			=> 'Fjern lederskap',
	'USER_GROUP_DEMOTE_CONFIRM'	=> 'Er du sikker på at du vil bli fjernet som gruppeleder fra den valgte gruppen?',
	'USER_GROUP_DEMOTED'		=> 'Du er nå fjernet som leder fra den valgte gruppen.',
));

?>