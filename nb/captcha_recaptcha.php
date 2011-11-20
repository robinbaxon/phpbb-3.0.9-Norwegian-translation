<?php
/**
*
* captcha_recaptcha [Norwegian Bokmaal]
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
	'RECAPTCHA_LANG'				=> 'nb',
	'RECAPTCHA_NOT_AVAILABLE'		=> 'For å kunne bruke reCaptcha, må du opprette en konto på <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'CAPTCHA_RECAPTCHA'				=> 'reCaptcha',
	'RECAPTCHA_INCORRECT'			=> 'Den visuelle bekreftelseskoden du presenterte var feil',

	'RECAPTCHA_PUBLIC'				=> 'Offentlig reCaptcha kode',
	'RECAPTCHA_PUBLIC_EXPLAIN'		=> 'Din offentlige reCaptcha kode. Koden fås på <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'RECAPTCHA_PRIVATE'				=> 'Privat reCaptcha kode',
	'RECAPTCHA_PRIVATE_EXPLAIN'		=> 'Din private reCaptcha kode. Koden fås på <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',

	'RECAPTCHA_EXPLAIN'				=> 'I et forsøk på å hindre automatisk innleveringer, krever vi at du skriver inn begge ordene som vises i tekstfeltet under.',
));

?>