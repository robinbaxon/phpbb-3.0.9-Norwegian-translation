<?php
/**
*
* install [Norwegian Bokmaal]
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
	'ACTION'				=> 'Handling',
	'ACTION_NOTE'			=> 'Handling/Notat',
	'ADD_FEEDBACK'			=> 'Legg til brukernotat',
	'ADD_FEEDBACK_EXPLAIN'	=> 'Hvis du ønsker å legge til en rapport om dette kan du fylle ut følgende skjema. Bare bruk ren tekst, HTML, BBCode, osv. er ikke tillatt.',
	'ADD_WARNING'			=> 'Legg til advarsel',
	'ADD_WARNING_EXPLAIN'	=> 'For å sende en advarsel til denne brukeren vennligst fylle ut følgende skjema. Bare bruk ren tekst, HTML, BBCode, osv. ikke tillatt.',
	'ALL_ENTRIES'			=> 'Alle oppføringer',
	'ALL_NOTES_DELETED'		=> 'Alle brukernotater er fjernet.',
	'ALL_REPORTS'			=> 'Alle rapporter',
	'ALREADY_REPORTED'		=> 'Dette innlegget har allerede blitt rapportert.',
	'ALREADY_REPORTED_PM'	=> 'Denne private meldingen har allerede blitt rapportert.',
	'ALREADY_WARNED'		=> 'En advarsel har allerede blitt utstedt for dette innlegget.',
	'APPROVE'				=> 'Godkjenn',
	'APPROVE_POST'			=> 'Godkjenn innlegg',
	'APPROVE_POST_CONFIRM'	=> 'Er du sikker på at du vil godkjenne dette innlegget?',
	'APPROVE_POSTS'			=> 'Godkjenn innleggene',
	'APPROVE_POSTS_CONFIRM'	=> 'Er du sikker på at du vil godkjenne de valgte innleggene?',

	'CANNOT_MOVE_SAME_FORUM'=> 'Du kan ikke flytte et emne til forumet det allerede er i.',
	'CANNOT_WARN_ANONYMOUS'	=> 'Du kan ikke advare uregistrerte gjester.',
	'CANNOT_WARN_SELF'		=> 'Du kan ikke advare deg selv.',
	'CAN_LEAVE_BLANK'		=> 'Dette kan stå tomt.',
	'CHANGE_POSTER'			=> 'Endre forfatter',
	'CLOSE_PM_REPORT'		=> 'Lukk PM rapport',
	'CLOSE_PM_REPORT_CONFIRM'	=> 'Er du sikker på at du vil lukke valgt PM rapport?',
	'CLOSE_PM_REPORTS'		=> 'Lukk PM rapportene',
	'CLOSE_PM_REPORTS_CONFIRM'	=> 'Er du sikker på at du vil lukke de valgte PM rapportene?',
	'CLOSE_REPORT'			=> 'Lukk rapport',
	'CLOSE_REPORT_CONFIRM'	=> 'Er du sikker på at du vil lukke valgt rapport?',
	'CLOSE_REPORTS'			=> 'Lukk rapportene',
	'CLOSE_REPORTS_CONFIRM'	=> 'Er du sikker på at du vil lukke de valgte rapportene?',

	'DELETE_PM_REPORT'			=> 'Slett PM rapport',
	'DELETE_PM_REPORT_CONFIRM'	=> 'Er du sikker på at du vil slette den valgte PM rapport?',
	'DELETE_PM_REPORTS'			=> 'Slett PM rapporter',
	'DELETE_PM_REPORTS_CONFIRM'	=> 'Er du sikker på at du vil slette de valgte PM rapportene?',
	'DELETE_POSTS'				=> 'Slette innleggene',
	'DELETE_POSTS_CONFIRM'		=> 'Er du sikker på at du vil slette disse innleggene?',
	'DELETE_POST_CONFIRM'		=> 'Er du sikker på at du vil slette dette innlegget?',
	'DELETE_REPORT'				=> 'Slett rapport',
	'DELETE_REPORT_CONFIRM'		=> 'Er du sikker på at du vil slette den valgte rapporten?',
	'DELETE_REPORTS'			=> 'Slett rapportene',
	'DELETE_REPORTS_CONFIRM'	=> 'Er du sikker på at du vil slette de valgte rapportene?',
	'DELETE_SHADOW_TOPIC'		=> 'Slett speilet emne',
	'DELETE_TOPICS'				=> 'Slett valgte emner',
	'DELETE_TOPICS_CONFIRM'		=> 'Er du sikker på at du vil slette disse emnene?',
	'DELETE_TOPIC_CONFIRM'		=> 'Er du sikker på at du vil slette dette emnet?',
	'DISAPPROVE'				=> 'Avvis',
	'DISAPPROVE_REASON'			=> 'Årsak til avvisning',
	'DISAPPROVE_POST'			=> 'Avvis innlegg',
	'DISAPPROVE_POST_CONFIRM'	=> 'Er du sikker på at du vil avvise dette innlegget?',
	'DISAPPROVE_POSTS'			=> 'Avvis innleggene',
	'DISAPPROVE_POSTS_CONFIRM'	=> 'Er du sikker på at du vil avvise de valgte innleggene?',
	'DISPLAY_LOG'				=> 'Vis oppføringer fra tidligere',
	'DISPLAY_OPTIONS'			=> 'Vis valg',

	'EMPTY_REPORT'					=> 'Du må angi en beskrivelse når du velger denne årsaken.',
	'EMPTY_TOPICS_REMOVED_WARNING'	=> 'Vær oppmerksom på at ett eller flere emner har blitt fjernet fra databasen fordi de var eller ble tomme.',

	'FEEDBACK'				=> 'Feedback',
	'FORK'					=> 'Kopier',
	'FORK_TOPIC'			=> 'Kopier emne',
	'FORK_TOPIC_CONFIRM'	=> 'Er du sikker på at du vil kopiere dette emnet?',
	'FORK_TOPICS'			=> 'Kopier valgte emner',
	'FORK_TOPICS_CONFIRM'	=> 'Er du sikker på at du vil kopiere de valgte emnene?',
	'FORUM_DESC'			=> 'Beskrivelse',
	'FORUM_NAME'			=> 'Forumnavn',
	'FORUM_NOT_EXIST'		=> 'Forumet du har valgt eksisterer ikke.',
	'FORUM_NOT_POSTABLE'	=> 'Du kan ikke skrive innlegg i det valgte forumet.',
	'FORUM_STATUS'			=> 'Forumstatus',
	'FORUM_STYLE'			=> 'Forumstil',

	'GLOBAL_ANNOUNCEMENT'	=> 'Global annonseringt',

	'IP_INFO'				=> 'IP adresse informasjon',
	'IPS_POSTED_FROM'		=> 'IP adressen denne brukeren har skrevet fra',

	'LATEST_LOGS'				=> 'De 5 siste loggede handlinger',
	'LATEST_REPORTED'			=> 'De 5 siste loggede handlinger',
	'LATEST_REPORTED_PMS'		=> 'De 5 siste rapporter PMene',
	'LATEST_UNAPPROVED'			=> 'De 5 siste poster som venter på godkjenning',
	'LATEST_WARNING_TIME'		=> 'Den siste advarselen',
	'LATEST_WARNINGS'			=> 'De siste 5 advarsler',
	'LEAVE_SHADOW'				=> 'La speilet kopi ligge',
	'LIST_REPORT'				=> '1 rapport',
	'LIST_REPORTS'				=> '%d rapporter',
	'LOCK'						=> 'Lås',
	'LOCK_POST_POST'			=> 'Lås innlegg',
	'LOCK_POST_POST_CONFIRM'	=> 'Er du sikker på at du vil forhindre redigering av dette innlegget?',
	'LOCK_POST_POSTS'			=> 'Lås valgte innlegg',
	'LOCK_POST_POSTS_CONFIRM'	=> 'Er du sikker på at du vil forhindre endringer av de valgte innleggene?',
	'LOCK_TOPIC_CONFIRM'		=> 'Er du sikker på at du vil låse dette emnet?',
	'LOCK_TOPICS'				=> 'Lås valgte emner',
	'LOCK_TOPICS_CONFIRM'		=> 'Er du sikker på at du vil låse alle de valgte emnene?',
	'LOGS_CURRENT_TOPIC'		=> 'Ser på logger over:',
	'LOGIN_EXPLAIN_MCP'			=> 'For å moderere dette forumet må du logge deg inn.',
	'LOGVIEW_VIEWTOPIC'			=> 'Se på emne',
	'LOGVIEW_VIEWLOGS'			=> 'Se på emnelogg',
	'LOGVIEW_VIEWFORUM'			=> 'Se på forum',
	'LOOKUP_ALL'				=> 'Slå opp alle IP adressers',
	'LOOKUP_IP'					=> 'Slå opp IP adresse',

	'MARKED_NOTES_DELETED'		=> 'Alle valgte brukernotater er slettet.',

	'MCP_ADD'						=> 'Legg til en advarsel',

	'MCP_BAN'					=> 'Utestenging',
	'MCP_BAN_EMAILS'			=> 'Utesteng epostadresser',
	'MCP_BAN_IPS'				=> 'Utesteng IP adresser',
	'MCP_BAN_USERNAMES'			=> 'Utesteng brukernavn',

	'MCP_LOGS'						=> 'Moderatorlogger',
	'MCP_LOGS_FRONT'				=> 'Hovedside',
	'MCP_LOGS_FORUM_VIEW'			=> 'Forumlogger',
	'MCP_LOGS_TOPIC_VIEW'			=> 'Emnelogger',

	'MCP_MAIN'						=> 'Oversikt',
	'MCP_MAIN_FORUM_VIEW'			=> 'Vis forum',
	'MCP_MAIN_FRONT'				=> 'Hovedside',
	'MCP_MAIN_POST_DETAILS'			=> 'Innleggsdetaljer',
	'MCP_MAIN_TOPIC_VIEW'			=> 'Vis emne',
	'MCP_MAKE_ANNOUNCEMENT'			=> 'Gjør om til "annonsering"',
	'MCP_MAKE_ANNOUNCEMENT_CONFIRM'	=> 'Er du sikker på at du vil gjøre om dette innlegget til en "annonsering"?',
	'MCP_MAKE_ANNOUNCEMENTS'		=> 'Gjør om til "annonseringer"',
	'MCP_MAKE_ANNOUNCEMENTS_CONFIRM'=> 'Er du sikker på at du vil gjøre om de valgte emnene til "annonseringer"?',
	'MCP_MAKE_GLOBAL'				=> 'Gjør om til "global annonsering"',
	'MCP_MAKE_GLOBAL_CONFIRM'		=> 'Er du sikker på at du vil gjøre om dette innlegget til en "global annonsering"?',
	'MCP_MAKE_GLOBALS'				=> 'Gjør om til "globale annonseringer"',
	'MCP_MAKE_GLOBALS_CONFIRM'		=> 'Er du sikker på at du vil gjøre om de valgte emnene til "globale annonseringer"?',
	'MCP_MAKE_STICKY'				=> 'Gjør om til "prioritert emne"',
	'MCP_MAKE_STICKY_CONFIRM'		=> 'Er du sikker på at du vil gjøre om dette emnet til et "prioritert emne"?',
	'MCP_MAKE_STICKIES'				=> 'Gjør om til "prioriterte emner"',
	'MCP_MAKE_STICKIES_CONFIRM'		=> 'Er du sikker på at du vil gjøre om de valgte emnene til "prioriterte emner"?',
	'MCP_MAKE_NORMAL'				=> 'Gjør om til "standardemne"',
	'MCP_MAKE_NORMAL_CONFIRM'		=> 'Er du sikker på at du vil gjøre om dette emnet til et "standardemne"?',
	'MCP_MAKE_NORMALS'				=> 'Gjør om til "standardemner"',
	'MCP_MAKE_NORMALS_CONFIRM'		=> 'Er du sikker på at du vil gjøre om de valgte emnene til "standardemner"?',

	'MCP_NOTES'						=> 'Brukernotater',
	'MCP_NOTES_FRONT'				=> 'Hovedside',
	'MCP_NOTES_USER'				=> 'Brukerdetaljer',

	'MCP_POST_REPORTS'				=> 'Rapporter utstedt på dette innlegget',

	'MCP_PM_REPORTS'				=> 'Rapporterte PMer',
	'MCP_PM_REPORT_DETAILS'			=> 'PM rapport detaljer',
	'MCP_PM_REPORTS_CLOSED'			=> 'Lukkede PM rapporter',
	'MCP_PM_REPORTS_CLOSED_EXPLAIN'	=> 'Dette er en liste over alle rapporter om private beskjeder som tidligere har vært løst.',
	'MCP_PM_REPORTS_OPEN'			=> 'Åpne PM rapporter',
	'MCP_PM_REPORTS_OPEN_EXPLAIN'	=> 'Dette er en liste over alle rapporterte private meldinger som fortsatt skal behandles.',

	'MCP_REPORTS'					=> 'Rapporterte innlegg',
	'MCP_REPORT_DETAILS'			=> 'Rapportdetaljer',
	'MCP_REPORTS_CLOSED'			=> 'Lukkede rapporter',
	'MCP_REPORTS_CLOSED_EXPLAIN'	=> 'Dette er en liste over alle ferdigbehandlede innleggsrapporter.',
	'MCP_REPORTS_OPEN'				=> 'Åpne rapporter',
	'MCP_REPORTS_OPEN_EXPLAIN'		=> 'Dette er en liste over alle innleggsrapporter som ennå ikke har blitt behandlet.',

	'MCP_QUEUE'								=> 'Modereringskø',
	'MCP_QUEUE_APPROVE_DETAILS'				=> 'Godkjenn detaljer',
	'MCP_QUEUE_UNAPPROVED_POSTS'			=> 'Innlegg som venter på godkjenning',
	'MCP_QUEUE_UNAPPROVED_POSTS_EXPLAIN'	=> 'Dette er en liste over alle innlegg som krever godkjenning før de blir synlige for brukerne.',
	'MCP_QUEUE_UNAPPROVED_TOPICS'			=> 'Emner som venter på godkjenning',
	'MCP_QUEUE_UNAPPROVED_TOPICS_EXPLAIN'	=> 'Dette er en liste over alle emner som krever godkjenning før de blir synlige for brukerne.',

	'MCP_VIEW_USER'			=> 'Se på advarsler for en bestemt bruker',

	'MCP_WARN'				=> 'Advarsler',
	'MCP_WARN_FRONT'		=> 'Hovedside',
	'MCP_WARN_LIST'			=> 'Liste over advarsler',
	'MCP_WARN_POST'			=> 'Advarsel for et spesifikt innlegg',
	'MCP_WARN_USER'			=> 'Advar bruker',

	'MERGE_POSTS_CONFIRM'	=> 'Er du sikker på at du vil flytte den valgte innleggene?',
	'MERGE_TOPIC_EXPLAIN'	=> 'Ved å bruke skjemaet nedenfor kan du flytte valgte innlegg inn i et annet emne. Innleggene vil bli splittet fra dette emnet og fusjonert inn i det andre emnet. Disse innleggene vil ikke bli omorganisert og vil se ut som om brukerne postet dem i det nye emne.<br/>Vennligst fyll inn emne IDen til destinasjons emne, eller klikk på "Velg emne" for å søke etter et.',
	'MERGE_TOPIC_ID'		=> 'Destinasjon emnets identifikasjonsnummer',
	'MERGE_TOPICS'			=> 'Slå sammen emner',
	'MERGE_TOPICS_CONFIRM'	=> 'Er du sikker på at du vil slå sammen de valgte emnene?',
	'MODERATE_FORUM'		=> 'Moderer forumet',
	'MODERATE_TOPIC'		=> 'Moderer emnet',
	'MODERATE_POST'			=> 'Moderer innlegget',
	'MOD_OPTIONS'			=> 'Moderator alternativer',
	'MORE_INFO'				=> 'Ytterligere informasjon',
	'MOST_WARNINGS'			=> 'Brukere med flest advarsler',
	'MOVE_TOPIC_CONFIRM'	=> 'Er du sikker på at du vil flytte temaet inn i et nytt forum?',
	'MOVE_TOPICS'			=> 'Flytt valgte emner',
	'MOVE_TOPICS_CONFIRM'	=> 'Er du sikker på at du vil flytte de valgte emnene til et nytt forum?',

	'NOTIFY_POSTER_APPROVAL'		=> 'Informer brukeren om godkjennelsen?',
	'NOTIFY_POSTER_DISAPPROVAL'		=> 'Informer brukeren om forkastelsen?',
	'NOTIFY_USER_WARN'				=> 'Varsle brukeren om advarselen?',
	'NOT_MODERATOR'					=> 'Du er ikke moderator for dette forumet.',
	'NO_DESTINATION_FORUM'			=> 'Velg et destinasjonsforum.',
	'NO_DESTINATION_FORUM_FOUND'	=> 'Det er ingen destinasjonsforum tilgjengelig.',
	'NO_ENTRIES'					=> 'Ingen loggoppføringer for denne perioden.',
	'NO_FEEDBACK'					=> 'Ingen tilbakemeldinger eksisterer for denne brukeren.',
	'NO_FINAL_TOPIC_SELECTED'		=> 'Du må velge et destinasjonsemne for sammenslåing av innleggene.',
	'NO_MATCHES_FOUND'				=> 'Fant ingen treff.',
	'NO_POST'						=> 'Du må velge et innlegg for å kunne advare brukeren for et innlegg.',
	'NO_POST_REPORT'				=> 'Dette innlegget ble ikke rapportert.',
	'NO_POST_SELECTED'				=> 'Du må velge minst ett innlegg til å utføre denne handlingen.',
	'NO_REASON_DISAPPROVAL'			=> 'Vennligst gi en passende grunn for forkastelsen.',
	'NO_REPORT'						=> 'Ingen rapport funnet',
	'NO_REPORTS'					=> 'Ingen rapporter funnet',
	'NO_REPORT_SELECTED'			=> 'Du må velge minst én rapport til å utføre denne handlingen.',
	'NO_TOPIC_ICON'					=> 'Ingen',
	'NO_TOPIC_SELECTED'				=> 'Du må velge minst ett emne for å utføre denne handlingen.',
	'NO_TOPICS_QUEUE'				=> 'Det er ingen emner venter på godkjenning.',

	'ONLY_TOPIC'			=> 'Kun emne “%s”',
	'OTHER_USERS'			=> 'Andre brukere innlegg fra denne IP',

	'PM_REPORT_CLOSED_SUCCESS'	=> 'Den valgte PM rapporten er nå stengt.',
	'PM_REPORT_DELETED_SUCCESS'	=> 'Den valgte PM rapporten er nå slettet.',
	'PM_REPORTED_SUCCESS'		=> 'Denne private meldingen er nå rapportert.',
	'PM_REPORT_TOTAL'			=> 'Det er totalt <strong>1</strong> PM rapport som venter på behandling.',
	'PM_REPORTS_CLOSED_SUCCESS'	=> 'Den valgte PM rapportene er nå stengt.',
	'PM_REPORTS_DELETED_SUCCESS'=> 'Den valgte PM rapportene er nå slettet.',
	'PM_REPORTS_TOTAL'			=> 'Det er totalt <strong>%d</strong> PM rapporter som venter på behandling.',
	'PM_REPORTS_ZERO_TOTAL'		=> 'Det er ingen PM rapporter som venter på behandling.',
	'PM_REPORT_DETAILS'			=> 'PM rapportens innhold',
	'POSTER'					=> 'Bruker',
	'POSTS_APPROVED_SUCCESS'	=> 'De valgte innleggene har blitt godkjent.',
	'POSTS_DELETED_SUCCESS'		=> 'De valgte innleggene har blitt slettet fra databasen.',
	'POSTS_DISAPPROVED_SUCCESS'	=> 'De valgte innleggene har blitt avvist.',
	'POSTS_LOCKED_SUCCESS'		=> 'De valgte innleggene har blitt låst.',
	'POSTS_MERGED_SUCCESS'		=> 'De valgte innleggene har blitt sammenslått.',
	'POSTS_UNLOCKED_SUCCESS'	=> 'De valgte innleggene har blitt åpnet.',
	'POSTS_PER_PAGE'			=> 'Innlegg per side',
	'POSTS_PER_PAGE_EXPLAIN'	=> '(Settes til 0 for å vise alle innlegg.)',
	'POST_APPROVED_SUCCESS'		=> 'Det valgte innlegget har blitt godkjent.',
	'POST_DELETED_SUCCESS'		=> 'Det valgte innlegget har blitt slettet fra databasen.',
	'POST_DISAPPROVED_SUCCESS'	=> 'Det valgte innlegget har blitt avvist.',
	'POST_LOCKED_SUCCESS'		=> 'Innlegget har blitt låst.',
	'POST_NOT_EXIST'			=> 'Innlegget eksisterer ikke.',
	'POST_REPORTED_SUCCESS'		=> 'Innlegget har blitt rapportert.',
	'POST_UNLOCKED_SUCCESS'		=> 'Innlegget har blitt åpnet.',

	'READ_USERNOTES'			=> 'Brukernotater',
	'READ_WARNINGS'				=> 'Brukeradvarsler',
	'REPORTER'					=> 'Rapporter',
	'REPORTED'					=> 'Rapportert',
	'REPORTED_BY'				=> 'Rapportert av',
	'REPORTED_ON_DATE'			=> 'den',
	'REPORTS_CLOSED_SUCCESS'	=> 'De valgte rapportene har blitt stengt.',
	'REPORTS_DELETED_SUCCESS'	=> 'De valgte rapportene har blitt slettet.',
	'REPORTS_TOTAL'				=> 'Det er totalt <strong>%d</strong> rapporter som venter på behandling.',
	'REPORTS_ZERO_TOTAL'		=> 'Det er ingen rapporter som venter på behandling.',
	'REPORT_CLOSED'				=> 'Denne rapporten er allerede stengt.',
	'REPORT_CLOSED_SUCCESS'		=> 'Den valgte rapporten har blitt stengt.',
	'REPORT_DELETED_SUCCESS'	=> 'Den valgte rapporten har blitt slettet.',
	'REPORT_DETAILS'			=> 'Rapportdetaljer',
	'REPORT_MESSAGE'			=> 'Rapporter denne meldingen',
	'REPORT_MESSAGE_EXPLAIN'	=> 'Bruk dette skjemaet til å rapportere den valgte private meldingen. Rapportering bør generelt brukes kun hvis meldingen bryter forumets regler. <strong>Rapportering av en privat melding vil gjøre innholdet synlig for alle moderatorer.</strong>',
	'REPORT_NOTIFY'				=> 'Varsle meg',
	'REPORT_NOTIFY_EXPLAIN'		=> 'Informs you when your report is dealt with.',
	'REPORT_POST_EXPLAIN'		=> 'Use this form to report the selected post to the forum moderators and board administrators. Reporting should generally be used only if the post breaks forum rules.',
	'REPORT_REASON'				=> 'Report reason',
	'REPORT_TIME'				=> 'Report time',
	'REPORT_TOTAL'				=> 'In total there is <strong>1</strong> report to review.',
	'RESYNC'					=> 'Resync',
	'RETURN_MESSAGE'			=> '%sReturn to the message%s',
	'RETURN_NEW_FORUM'			=> '%sGo to the new forum%s',
	'RETURN_NEW_TOPIC'			=> '%sGo to the new topic%s',
	'RETURN_PM'					=> '%sReturn to the private message%s',
	'RETURN_POST'				=> '%sReturn to the post%s',
	'RETURN_QUEUE'				=> '%sReturn to the queue%s',
	'RETURN_REPORTS'			=> '%sReturn to the reports%s',
	'RETURN_TOPIC_SIMPLE'		=> '%sReturn to the topic%s',

	'SEARCH_POSTS_BY_USER'				=> 'Search posts by',
	'SELECT_ACTION'						=> 'Select desired action',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENT'	=> 'Please select the forum you wish this global announcement to be displayed.',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENTS'	=> 'One or more of the selected topics are global announcements. Please select the forum you wish these to be displayed.',
	'SELECT_MERGE'						=> 'Select for merge',
	'SELECT_TOPICS_FROM'				=> 'Select topics from',
	'SELECT_TOPIC'						=> 'Select topic',
	'SELECT_USER'						=> 'Select user',
	'SORT_ACTION'						=> 'Log action',
	'SORT_DATE'							=> 'Date',
	'SORT_IP'							=> 'IP address',
	'SORT_WARNINGS'						=> 'Warnings',
	'SPLIT_AFTER'						=> 'Split topic from selected post onwards',
	'SPLIT_FORUM'						=> 'Forum for new topic',
	'SPLIT_POSTS'						=> 'Split selected posts',
	'SPLIT_SUBJECT'						=> 'New topic title',
	'SPLIT_TOPIC_ALL'					=> 'Split topic from selected posts',
	'SPLIT_TOPIC_ALL_CONFIRM'			=> 'Are you sure you want to split this topic?',
	'SPLIT_TOPIC_BEYOND'				=> 'Split topic at selected post',
	'SPLIT_TOPIC_BEYOND_CONFIRM'		=> 'Are you sure you want to split this topic at the selected post?',
	'SPLIT_TOPIC_EXPLAIN'				=> 'Using the form below you can split a topic in two, either by selecting the posts individually or by splitting at a selected post.',

	'THIS_PM_IP'				=> 'IP for this private message',
	'THIS_POST_IP'				=> 'IP for this post',
	'TOPICS_APPROVED_SUCCESS'	=> 'The selected topics have been approved.',
	'TOPICS_DELETED_SUCCESS'	=> 'The selected topics have been successfully removed from the database.',
	'TOPICS_DISAPPROVED_SUCCESS'=> 'The selected topics have been disapproved.',
	'TOPICS_FORKED_SUCCESS'		=> 'The selected topics have been copied successfully.',
	'TOPICS_LOCKED_SUCCESS'		=> 'The selected topics have been locked.',
	'TOPICS_MOVED_SUCCESS'		=> 'The selected topics have been moved successfully.',
	'TOPICS_RESYNC_SUCCESS'		=> 'The selected topics have been resynchronised.',
	'TOPICS_TYPE_CHANGED'		=> 'Topic types changed successfully.',
	'TOPICS_UNLOCKED_SUCCESS'	=> 'The selected topics have been unlocked.',
	'TOPIC_APPROVED_SUCCESS'	=> 'The selected topic has been approved.',
	'TOPIC_DELETED_SUCCESS'		=> 'The selected topic has been successfully removed from the database.',
	'TOPIC_DISAPPROVED_SUCCESS'	=> 'The selected topic has been disapproved.',
	'TOPIC_FORKED_SUCCESS'		=> 'The selected topic has been copied successfully.',
	'TOPIC_LOCKED_SUCCESS'		=> 'The selected topic has been locked.',
	'TOPIC_MOVED_SUCCESS'		=> 'The selected topic has been moved successfully.',
	'TOPIC_NOT_EXIST'			=> 'The topic you selected does not exist.',
	'TOPIC_RESYNC_SUCCESS'		=> 'The selected topic has been resynchronised.',
	'TOPIC_SPLIT_SUCCESS'		=> 'The selected topic has been split successfully.',
	'TOPIC_TIME'				=> 'Topic time',
	'TOPIC_TYPE_CHANGED'		=> 'Topic type changed successfully.',
	'TOPIC_UNLOCKED_SUCCESS'	=> 'The selected topic has been unlocked.',
	'TOTAL_WARNINGS'			=> 'Total Warnings',

	'UNAPPROVED_POSTS_TOTAL'		=> 'In total there are <strong>%d</strong> posts waiting for approval.',
	'UNAPPROVED_POSTS_ZERO_TOTAL'	=> 'There are no posts waiting for approval.',
	'UNAPPROVED_POST_TOTAL'			=> 'In total there is <strong>1</strong> post waiting for approval.',
	'UNLOCK'						=> 'Unlock',
	'UNLOCK_POST'					=> 'Unlock post',
	'UNLOCK_POST_EXPLAIN'			=> 'Allow editing',
	'UNLOCK_POST_POST'				=> 'Unlock post',
	'UNLOCK_POST_POST_CONFIRM'		=> 'Are you sure you want to allow editing this post?',
	'UNLOCK_POST_POSTS'				=> 'Unlock selected posts',
	'UNLOCK_POST_POSTS_CONFIRM'		=> 'Are you sure you want to allow editing the selected posts?',
	'UNLOCK_TOPIC'					=> 'Unlock topic',
	'UNLOCK_TOPIC_CONFIRM'			=> 'Are you sure you want to unlock this topic?',
	'UNLOCK_TOPICS'					=> 'Unlock selected topics',
	'UNLOCK_TOPICS_CONFIRM'			=> 'Are you sure you want to unlock all selected topics?',
	'USER_CANNOT_POST'				=> 'You cannot post in this forum.',
	'USER_CANNOT_REPORT'			=> 'You cannot report posts in this forum.',
	'USER_FEEDBACK_ADDED'			=> 'User feedback added successfully.',
	'USER_WARNING_ADDED'			=> 'User warned successfully.',

	'VIEW_DETAILS'			=> 'View details',
	'VIEW_PM'				=> 'View private message',
	'VIEW_POST'				=> 'View post',

	'WARNED_USERS'			=> 'Warned users',
	'WARNED_USERS_EXPLAIN'	=> 'This is a list of users with unexpired warnings issued to them.',
	'WARNING_PM_BODY'		=> 'The following is a warning which has been issued to you by an administrator or moderator of this site.[quote]%s[/quote]',
	'WARNING_PM_SUBJECT'	=> 'Board warning issued',
	'WARNING_POST_DEFAULT'	=> 'This is a warning regarding the following post made by you: %s .',
	'WARNINGS_ZERO_TOTAL'	=> 'No warnings exist.',

	'YOU_SELECTED_TOPIC'	=> 'You selected topic number %d: %s.',

	'report_reasons'		=> array(
		'TITLE'	=> array(
			'WAREZ'		=> 'Warez',
			'SPAM'		=> 'Spam',
			'OFF_TOPIC'	=> 'Off-topic',
			'OTHER'		=> 'Other',
		),
		'DESCRIPTION' => array(
			'WAREZ'		=> 'The message contains links to illegal or pirated software.',
			'SPAM'		=> 'The reported message has the only purpose to advertise for a website or another product.',
			'OFF_TOPIC'	=> 'The reported message is off topic.',
			'OTHER'		=> 'The reported message does not fit into any other category, please use the further information field.',
		)
	),
));

?>