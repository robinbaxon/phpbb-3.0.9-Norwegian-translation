<?php
/**
*
* captcha_qa [Norwegian Bokmaal]
*
* @package language
* @version $Id$
* @author Morten R. N. http://www.morten.com
* @copyright (c) 2009 phpBB Group, 2011 Norwegian translation team, Morten R. N.
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
	'CAPTCHA_QA'				=> 'Spørsmål og svar-CAPTCHA',
	'CONFIRM_QUESTION_EXPLAIN'	=> 'Dette spørsmålet er en metode for identifisering og hindring av automatiserte innsendinger.',
	'CONFIRM_QUESTION_WRONG'	=> 'Du har oppgitt et ugyldig svar på spørsmålet.',

	'QUESTION_ANSWERS'			=> 'Svar',
	'ANSWERS_EXPLAIN'			=> 'Vennligst oppgi gyldige svar på spørsmålet, ett per linje.',
	'CONFIRM_QUESTION'			=> 'Spørsmål',

	'ANSWER'					=> 'Svar',
	'EDIT_QUESTION'				=> 'Endre spørsmål',
	'QUESTIONS'					=> 'Spørsmål',
	'QUESTIONS_EXPLAIN'			=> 'I alle de tilfeller hvor Spørsmål og svar-CAPTCHA benyttes, stilles brukeren et av spørsmålene nedenfor. For at kunne benytte modulen må minst et spørsmål formuleres på forumets standardspråk. Spørsmålene bør være enkle å besvare for forumets besøkende men samtidig så avanserte at en bot som kan søke på Google™ ikke finner svaret umiddelbart. Regelmessig endring av spørsmålet vil effektivisere bekjempelsen av spam brukere. Forutsetter svaret riktig tegnsett, stavemåte eller bruk av store og små bokstaver, bør strenge innstillinger benyttes.',
	'QUESTION_DELETED'			=> 'Spørsmål slettet',
	'QUESTION_LANG'				=> 'Språk',
	'QUESTION_LANG_EXPLAIN'		=> 'Språket dette spørsmålet og svarene er skrevet i.',
	'QUESTION_STRICT'			=> 'Streng sjekk',
	'QUESTION_STRICT_EXPLAIN'	=> 'Aktiver for å skille på små og store bokstaver samt mellomrom.',

	'QUESTION_TEXT'				=> 'Spørsmål',
	'QUESTION_TEXT_EXPLAIN'		=> 'Spørsmålet som vil bli stilt brukeren.',

	'QA_ERROR_MSG'				=> 'Vennligst fyll ut alle feltene og minst ett svar.',
	'QA_LAST_QUESTION'			=> 'Du kan ikke slette alle spørsmålene mens modulen er aktiv.',

));

?>