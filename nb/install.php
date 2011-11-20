<?php
/**
*
* install [Norwegian Bokmaal]
*
* @package language
* @version $Id$
* @author Morten R. N. http://www.morten.com
* @copyright (c) 2005 phpBB Group, 2011 Morten R. N.
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
	'ADMIN_CONFIG'				=> 'Administratorkonfigurasjon',
	'ADMIN_PASSWORD'			=> 'Administratorpassord',
	'ADMIN_PASSWORD_CONFIRM'	=> 'Bekreft Administratorpassord',
	'ADMIN_PASSWORD_EXPLAIN'	=> 'Skriv et passord på mellom 6 og 30 tegn.',
	'ADMIN_TEST'				=> 'Kontroller innstillingene for administrator',
	'ADMIN_USERNAME'			=> 'Administrators brukernavn',
	'ADMIN_USERNAME_EXPLAIN'	=> 'Skriv et brukernavn på mellom 3 og 20 bokstaver.',
	'APP_MAGICK'				=> 'Støtte for Imagemagick [ Vedlegg ]',
	'AUTHOR_NOTES'				=> 'Forfatter merknader<br />» %s',
	'AVAILABLE'					=> 'Tilgjengelig',
	'AVAILABLE_CONVERTORS'		=> 'Tilgjengelige konvertere',

	'BEGIN_CONVERT'					=> 'Begynn konvertering',
	'BLANK_PREFIX_FOUND'			=> 'En skanning av tabellene har vist en gyldig installasjon uten bruk av prefiks.',
	'BOARD_NOT_INSTALLED'			=> 'Ingen installasjon funnet',
	'BOARD_NOT_INSTALLED_EXPLAIN'	=> 'PhpBB Unified Converter Framework krever en standard installasjon av phpBB3 som fungerer, <a href="%s">fortsett derfor med å installere phpBB3</a>.',

	'CATEGORY'					=> 'Kategori',
	'CACHE_STORE'				=> 'Cachetype/Mellomlagringstype',
	'CACHE_STORE_EXPLAIN'		=> 'Den fysiske plasseringen der data mellomlagres, et filsystem foretrekkes.',
	'CAT_CONVERT'				=> 'Konverter',
	'CAT_INSTALL'				=> 'Installer',
	'CAT_OVERVIEW'				=> 'Oversikt',
	'CAT_UPDATE'				=> 'Oppdater',
	'CHANGE'					=> 'Endre',
	'CHECK_TABLE_PREFIX'		=> 'Vennligst sjekk tabellprefikset og prøv igjen.',
	'CLEAN_VERIFY'				=> 'Rydder opp og verifiserer den endelige strukturen',
	'CLEANING_USERNAMES'		=> 'Rydder opp i brukernavn',
	'COLLIDING_CLEAN_USERNAME'	=> '<strong>%s</strong> er det unike brukernavnet for:',
	'COLLIDING_USERNAMES_FOUND'	=> 'Overlappende brukernavn ble funnet på det gamle forumet. For å fullføre konverteringen, må disse brukerne enten slettes eller gis nytt navn, det må finnes bare en bruker for hvert unike brukernavn på ditt opprinnelige forum.',
	'COLLIDING_USER'			=> '» Bruker-ID: <strong>%d</strong> brukernavn: <strong>%s</strong> (%d innlegg)',
	'CONFIG_CONVERT'			=> 'Konvertering konfigurasjonen',
	'CONFIG_FILE_UNABLE_WRITE'	=> 'Det var Ikke mulig å skrive konfigurasjonsfilen. Alternative metoder for å opprette denne filen vises nedenfor.',
	'CONFIG_FILE_WRITTEN'		=> 'Konfigurasjonsfilen har blitt skrevet. Du kan nå gå videre til neste trinn i installasjonen.',
	'CONFIG_PHPBB_EMPTY'		=> 'PhpBB3 konfigurasjonsvariabelen for “%s” er tom.',
	'CONFIG_RETRY'				=> 'Prøv igjen',
	'CONTACT_EMAIL_CONFIRM'		=> 'Bekreft kontakt e-post',
	'CONTINUE_CONVERT'			=> 'Fortsett konverteringen',
	'CONTINUE_CONVERT_BODY'		=> 'Et tidligere konverterings forsøk har blitt avbrutt. Du kan nå velge mellom å starte en ny konvertering eller fortsetter konverteringen.',
	'CONTINUE_LAST'				=> 'Fortsett',
	'CONTINUE_OLD_CONVERSION'	=> 'Fortsett tidligere påbegynt konvertering',
	'CONVERT'					=> 'Konverter',
	'CONVERT_COMPLETE'			=> 'Konverteringen er ferdig',
	'CONVERT_COMPLETE_EXPLAIN'	=> 'Du har nå konvertert forumet ditt til phpBB 3.0. Du kan nå logge inn og <a href="../">logge på forumet</a>. Sjekk at innstillingene ble overført korrekt før du aktiverer forumet ved å slette installasjonskatalogen. Husk at hjelp til å bruke phpBB er tilgjengelig på nettet via <a href="http://www.phpbb.com/support/documentation/3.0/">Dokumentasjon</a> og <a href="http:// www.phpbb.com/community/viewforum.php?f=46 ">supportforumet</a>.',
	'CONVERT_INTRO'				=> 'Velkommen til phpBB Unified Converter Framework',
	'CONVERT_INTRO_BODY'		=> 'Herfra kan du importere data fra andre (installerte) forumsystemer. Listen nedenfor viser alle konverterings modulene tilgjengelig for øyeblikket. Hvis forumprogramvaren du ønsker å konvertere fra ikke er vist i denne listen, vennligst sjekk vår hjemmeside hvor ytterligere konverteringsmodulene kan være tilgjengelig for nedlasting.',
	'CONVERT_NEW_CONVERSION'	=> 'Ny konvertering',
	'CONVERT_NOT_EXIST'			=> 'Den angitte konverter eksisterer ikke.',
	'CONVERT_OPTIONS'			=> 'Alternativer',
	'CONVERT_SETTINGS_VERIFIED'	=> 'Informasjonen du oppga har blitt verifisert. For å starte konverteringsprosessen, vennligst trykk på knappen nedenfor.',
	'CONV_ERR_FATAL'			=> 'Fatal konverterings feil',

	'CONV_ERROR_ATTACH_FTP_DIR'			=> 'FTP opplasting for vedlegg er aktivert på det gamle forumet. Vennligst deaktiver FTP opplasting alternativet og sørg for at en gyldig opplasting katalog er spesifisert, deretter kopierer du alle vedlegg filer til denne nye web tilgjengelig katalog. Når du har gjort dette, starter du konverteringen igjen.',
	'CONV_ERROR_CONFIG_EMPTY'			=> 'Det er ingen konfigurasjons informasjon tilgjengelig for konvertering.',
	'CONV_ERROR_FORUM_ACCESS'			=> 'Fant ikke forumtilgangsinformasjon',
	'CONV_ERROR_GET_CATEGORIES'			=> 'Fant ingen kategorier.',
	'CONV_ERROR_GET_CONFIG'				=> 'Kunne ikke hente forumkonfigurasjonen din.',
	'CONV_ERROR_COULD_NOT_READ'			=> 'Får ikke tilgang til / kan ikke lese “%s”.',
	'CONV_ERROR_GROUP_ACCESS'			=> 'Får ikke tak i gruppeautentiserings informasjon.',
	'CONV_ERROR_INCONSISTENT_GROUPS'	=> 'Det er oppdaget inkonsekvens i gruppetabellen for add_bots() - du må legge inn alle spesielle grupper hvis du gjør det manuelt.',
	'CONV_ERROR_INSERT_BOT'				=> 'Kan ikke sette boten inn i brukere tabellen.',
	'CONV_ERROR_INSERT_BOTGROUP'		=> 'Kan ikke sette boten inn i bots tabellen.',
	'CONV_ERROR_INSERT_USER_GROUP'		=> 'Kan ikke sette brukeren inn i user_group tabellen.',
	'CONV_ERROR_MESSAGE_PARSER'			=> 'Meldingslesefeil',
	'CONV_ERROR_NO_AVATAR_PATH'			=> 'Merknad til utvikler: du må spesifisere $converter[\'avatar_path\'] for å bruke %s.',
	'CONV_ERROR_NO_FORUM_PATH'			=> 'Den relative stien til kilde forumet har ikke blitt spesifisert.',
	'CONV_ERROR_NO_GALLERY_PATH'		=> 'Merknad til utvikler: du må spesifisere $convertor[\'avatar_gallery_path\'] for å bruke %s.',
	'CONV_ERROR_NO_GROUP'				=> 'Gruppen “%1$s” kunne ikke bli funnet i %2$s.',
	'CONV_ERROR_NO_RANKS_PATH'			=> 'Merknad til utvikler: du må spesifisere $convertor[\'ranks_path\'] for å bruke %s.',
	'CONV_ERROR_NO_SMILIES_PATH'		=> 'Merknad til utvikler: du må spesifisere $convertor[\'smilies_path\'] for å bruke %s.',
	'CONV_ERROR_NO_UPLOAD_DIR'			=> 'Merknad til utvikler: du må spesifisere $convertor[\'upload_path\'] for å bruke %s.',
	'CONV_ERROR_PERM_SETTING'			=> 'Kunne ikke sette inn/oppdatere rettighetsinnstillinger.',
	'CONV_ERROR_PM_COUNT'				=> 'Kan ikke velge mappe for pm telleren.',
	'CONV_ERROR_REPLACE_CATEGORY'		=> 'Kan ikke sette inn nytt forumet til å erstatte gammel kategori.',
	'CONV_ERROR_REPLACE_FORUM'			=> 'Unable to insert new forum replacing old forum.',
	'CONV_ERROR_USER_ACCESS'			=> 'Kan ikke sette inn nytt forumet til å erstatte gammelt forumet.',
	'CONV_ERROR_WRONG_GROUP'			=> 'Feil gruppe “%1$s” definert i %2$s.',
	'CONV_OPTIONS_BODY'					=> 'Denne siden samler de data som kreves for å få tilgang til kilden forumet. Oppgi database detaljer for ditt tidligere forum, konverteren vil ikke endre noe i databasen gitt nedenfor. Kilde forumet bør være deaktivert for å tillate en konsekvent konvertering.',
	'CONV_SAVED_MESSAGES'				=> 'Lagrede meldinger',

	'COULD_NOT_COPY'			=> 'Kunne ikke kopiere filen <strong>%1$s</strong> til <strong>%2$s</strong>.<br /><br />Undersøk om mappen eksisterer og om den kan skrives til.',
	'COULD_NOT_FIND_PATH'		=> 'Kunne ikke finne stien til ditt tidligere forum. Vennligst sjekk innstillingene og prøv igjen. <br /> »%S ble spesifisert som sti.',

	'DBMS'						=> 'Databasetype',
	'DB_CONFIG'					=> 'Databasekonfigurasjon',
	'DB_CONNECTION'				=> 'Databasetilkobling',
	'DB_ERR_INSERT'				=> 'Feil under behandling av <code>INSERT</code> spørring.',
	'DB_ERR_LAST'				=> 'Feil under behandling av <var>query_last</var>.',
	'DB_ERR_QUERY_FIRST'		=> 'Feil under utføring av <var>query_first</var>.',
	'DB_ERR_QUERY_FIRST_TABLE'	=> 'Feil under utføring av <var>query_first</var>, %s (“%s”).',
	'DB_ERR_SELECT'				=> 'Feil under kjøring av <code>SELECT</code> query.',
	'DB_HOST'					=> 'Vertsnavn for databaseserver eller DSN',
	'DB_HOST_EXPLAIN'			=> 'DSN står for Data Source Name og er bare relevant for ODBC installasjoner. På PostgreSQL brukes localhost for å koble til den lokale serveren via UNIX domain socket og 127.0.0.1 for å koble til via TCP. For SQLite, oppgi hele banen til databasefilen.',
	'DB_NAME'					=> 'Databasenavn',
	'DB_PASSWORD'				=> 'Databasepassord',
	'DB_PORT'					=> 'Port for databaseserveren',
	'DB_PORT_EXPLAIN'			=> 'La dette stå tomt hvis du ikke vet at serveren opererer på en ikke-standard port.',
	'DB_UPDATE_NOT_SUPPORTED'	=> 'Vi beklager, men dette skriptet støtter ikke oppdatering fra versjoner av phpBB før "%1$s". Den versjonen du har installert er "%2$s". Vennligst oppdater til en tidligere versjon før du kjører dette skriptet. Bistand til dette er tilgjengelig i Support Forum på phpBB.com.',
	'DB_USERNAME'				=> 'Databasebrukernavn',
	'DB_TEST'					=> 'Testtilkobling',
	'DEFAULT_LANG'				=> 'Standard forumspråk',
	'DEFAULT_PREFIX_IS'			=> 'Konverteren var ikke i stand til å finne tabeller med det angitte prefiks. Kontroller at du har skrevet inn riktig informasjon for forumet du konverterer fra. Standard tabellprefiks for %1$s er <strong>%2$s </strong>.',
	'DEV_NO_TEST_FILE'			=> 'Ingen verdi er angitt for test_file variabelen i konverteren. Hvis du er en bruker av dette konverteringsprogrammet, bør du ikke ser denne feilen, vennligst rapporter denne meldingen til konverterens forfatter. Hvis du er en konverter forfatter, må du angi navnet på en fil som finnes i kilde forumet for å verifisere stien.',
	'DISABLE_KEYS'				=> 'Deaktiver nøkler',
	'DIRECTORIES_AND_FILES'		=> 'Mappe- og filoppsett',
	'DLL_FIREBIRD'				=> 'Firebird',
	'DLL_FTP'					=> 'Ekstern FTP-support [ Installasjon ]',
	'DLL_GD'					=> 'GD-graffikksupport [ Visuell bekreftelse ]',
	'DLL_MBSTRING'				=> 'Support for Multi-byte tegn',
	'DLL_MSSQL'					=> 'MSSQL Server 2000+',
	'DLL_MSSQL_ODBC'			=> 'MSSQL Server 2000+ via ODBC',
	'DLL_MSSQLNATIVE'			=> 'MSSQL Server 2005+ [ Native ]',
	'DLL_MYSQL'					=> 'MySQL',
	'DLL_MYSQLI'				=> 'MySQL med MySQLi Extension',
	'DLL_ORACLE'				=> 'Oracle',
	'DLL_POSTGRES'				=> 'PostgreSQL 7.x/8.x',
	'DLL_SQLITE'				=> 'SQLite',
	'DLL_XML'					=> 'XML støtte [ Jabber ]',
	'DLL_ZLIB'					=> 'Support for zlib komprimering [ gz, .tar.gz, .zip ]',
	'DL_CONFIG'					=> 'Last ned konfigurasjon',
	'DL_CONFIG_EXPLAIN'			=> 'Du kan laste ned hele config.php til din egen PC. Du må så laste opp filen manuelt og erstatte den eksisterende config.php file i phpBB 3.0 rotkatalogen. Husk å laste opp filen i ASCII-format (se FTP-program dokumentasjon hvis du er usikker på hvordan man skal oppnå dette). Når du har lastet opp config.php vennligst klikk "Ok" for å gå til neste steg.',
	'DL_DOWNLOAD'				=> 'Last ned',
	'DONE'						=> 'Ok',

	'ENABLE_KEYS'				=> 'Reaktiverer nøkler. Dette kan ta en stund.',

	'FILES_OPTIONAL'			=> 'Valgfrie filer og mapper',
	'FILES_OPTIONAL_EXPLAIN'	=> '<strong>Valgfritt</strong> - Disse filene, mappene og rettighetsinnstillingene er ikke påkrevd. Installasjonssystemet vil forsøke å bruke forskjellige teknikker for å lage dem hvis de ikke eksisterer eller ikke kan skrives til. Hvis de finnes, vil installasjonen gå raskere.',
	'FILES_REQUIRED'			=> 'Filer og mapper',
	'FILES_REQUIRED_EXPLAIN'	=> '<strong>Påkrevet</strong> - For å fungere riktig har phpBB behov for tilgang til eller kunne skrive til visse filer eller mapper. Hvis du ser "Ikke funnet" må du opprette den aktuelle filen eller katalogen. Hvis du ser "Ikke skrivbar" må du endre rettighetene på filen eller katalogen for å tillate phpBB å skrive til den.',
	'FILLING_TABLE'				=> 'Fyller tabellen <strong>%s</strong>',
	'FILLING_TABLES'			=> 'Fyller tabeller',

	'FIREBIRD_DBMS_UPDATE_REQUIRED'		=> 'phpBB støtter ikke lenger Firebird/InterBase før versjon 2.1. Vennligst oppdater din Firebird installasjon til minst 2.1.0 før du fortsetter med oppdateringen.',

	'FINAL_STEP'				=> 'Utfører siste trinn',
	'FORUM_ADDRESS'				=> 'Forumets adresse',
	'FORUM_ADDRESS_EXPLAIN'		=> 'Dette er nettadressen til ditt tidligere forum, for eksempel <samp>http://www.example.com/phpBB2/</ SAMP>. Hvis en adresse er skrevet inn her og felte ikke står tomt, vil hver forekomst av denne adressen bli erstattet av det nye forumets adresse inne i innlegg, private meldinger og signaturer.',
	'FORUM_PATH'				=> 'Forumets sti',
	'FORUM_PATH_EXPLAIN'		=> 'Dette er den <strong>relative</strong> stien på disken til ditt tidligere forum fra <strong>roten til denne phpBB3 installasjon</strong>.',
	'FOUND'						=> 'Funnet',
	'FTP_CONFIG'				=> 'Overfør konfigurasjon med FTP',
	'FTP_CONFIG_EXPLAIN'		=> 'phpBB har funnet FTP-modulen på denne serveren. Du kan forsøke å installere config.php via denne hvis du ønsker det. Du må oppgi informasjonen nedenfor. Husk ditt brukernavn og passord er til serveren din! (spør din hosting leverandør for detaljer hvis du er usikker på hva disse er).',
	'FTP_PATH'					=> 'FTP sti',
	'FTP_PATH_EXPLAIN'			=> 'Dette er stien fra din rotkatalog til phpBB, f.eks <samp>htdocs/phpBB3/</SAMP>.',
	'FTP_UPLOAD'				=> 'Last opp',

	'GPL'						=> 'General Public License',

	'INITIAL_CONFIG'			=> 'Grunnleggende konfigurasjon',
	'INITIAL_CONFIG_EXPLAIN'	=> 'Nå som installasjonen har fastslått at server kan kjøre phpBB trenger du å oppgi noen spesifikk opplysninger. Hvis du ikke vet hvordan du skal koble til din database, vennligst kontakt din hosting leverandør (i første omgang) eller bruker phpBB supportforumet. Når du skriver inn data må du sørge for at du sjekke de grundig før du fortsetter.',
	'INSTALL_CONGRATS'			=> 'Gratulerer!',
	'INSTALL_CONGRATS_EXPLAIN'	=> '
		Du har nå installert phpBB %1$s. Vennligst fortsett ved å velge av følgende valg:</p>
		<h2>Konverter et eksisterende forum til phpBB3</h2>
		<p>phpBB Unified Convertor Framework støtter konvertering av phpBB 2.0.x og andre forumtyper til phpBB3. Hvis du ønsker å konvertere et eksisterende forum, <a href="%2$s">gå til konverteren</a>.</p>
		<h2>Gå online med ditt phpBB3 forum!</h2>
		<p>Klikk på knappen nedenfor som fører deg til administratorkontrollpanelets (ACP) statistiske data. Vi vil sette stor pris på om du vil dele disse dataene med oss. Etterpå bør du ta deg tid til å undersøke de tilgjengelige alternativene. Husk at hjelp er tilgjengelig via <a href="http://www.phpbb.com/support/documentation/3.0/">dukumentasjonen</a>, <a href="%3$s">README</a> og i <a href="http://www.phpbb.com/community/viewforum.php?f=46">Support Forumene</a>.</p><p><strong>Vennligst slett, flytt eller endre navn på installasjonsmappen (/install) før du bruker forumet ditt. Så legge denne mappen eksisterer vil kun Administratorkontrollpanelet (ACP) være tilgjengelig.</strong>',
	'INSTALL_INTRO'				=> 'Velkommen til installasjonen',

	'INSTALL_INTRO_BODY'		=> 'Med dette valget kan du installere phpBB3 på serveren.</p><p>For å kunne fortsette, trenger du dine databaseinnstillinger. Hvis du ikke kjenner dine databaseinnstillinger, vennligst kontakt din host/webhotell å be om dem. Du vil ikke kunne fortsette uten. Du trenger:</p>

	<ul>
		<li>Databasetype - databasen du skal bruke.</li>
		<li>Databaseserveren vertsnavn eller DSN - adressen til databaseserveren.</li>
		<li>Databaseserverens port - porten til databaseserveren (som regel er dette ikke nødvendig).</li>
		<li>Databasenavn - databasens navn.</li>
		<li>Databasebrukernavn og passord - innloggings data for å få tilgang til databasen.</li>
	</ul>

	<p><strong>Merk:</strong> Hvis du bruker SQLite, bør du oppgi hele banen til database filen i DSN feltet og la brukernavn og passord feltene være tomme. Av sikkerhetsmessige grunner, bør du sørge for at databasefilen ikke er lagret på et sted tilgjengelig fra web.</p>

	<p>phpBB3 støtter følgende databaser:</p>
	<ul>
		<li>MySQL 3.23 eller nyere (MySQLi er støttet)</li>
		<li>PostgreSQL 7.3+</li>
		<li>SQLite 2.8.2+</li>
		<li>Firebird 2.1+</li>
		<li>MS SQL Server 2000 eller nyere (direkte eller via ODBC)</li>
		<li>MS SQL Server 2005 eller nyere (native)</li>
		<li>Oracle</li>
	</ul>

	<p>Kun de databasene som støttes på din server vil bli vist.',
	'INSTALL_INTRO_NEXT'		=> 'For å starte installasjonen, vennligst trykk på knappen under.',
	'INSTALL_LOGIN'				=> 'Logg inn',
	'INSTALL_NEXT'				=> 'Neste trinn',
	'INSTALL_NEXT_FAIL'			=> 'Noen tester feilet og du bør rette opp disse problemene før du går videre til neste steg. Gjør du ikke det kan resultatet bli en ufullstendig installasjon.',
	'INSTALL_NEXT_PASS'			=> 'Alle de grunnleggende testene er bestått, og du kan fortsette til neste del av installasjonen. Hvis du har endret noen rettigheter, moduler, etc. og ønsker å teste igjen kan du også gjøre det.',
	'INSTALL_PANEL'				=> 'Installasjonspanel',
	'INSTALL_SEND_CONFIG'		=> 'Dessverre kunne ikke phpBB skrive konfigurasjonen direkte til filen config.php. Dette kan være fordi filen ikke finnes eller ikke er skrivbar. En rekke alternativer vil bli listet opp nedenfor slik at du kan fullføre installasjonen av config.php.',
	'INSTALL_START'				=> 'Start installasjon',
	'INSTALL_TEST'				=> 'Test igjen',
	'INST_ERR'					=> 'Installasjonsfeil',
	'INST_ERR_DB_CONNECT'		=> 'Kunne ikke koble til databasen, se feilmeldingen under.',
	'INST_ERR_DB_FORUM_PATH'	=> 'Den angitte databasefilen er innenfor forumets katalog tre. Du bør plassere denne filen i et område som ikke er tilgjengelig fra nettet.',
	'INST_ERR_DB_NO_ERROR'		=> 'Ingen feilmelding.',
	'INST_ERR_DB_NO_MYSQLI'		=> 'Versjonen av MySQL på denne maskinen er inkompatibel med “MySQL med MySQLi-utvidelsen”-valget du har valgt. Vennligst prøv “MySQL”-valget isteden.',
	'INST_ERR_DB_NO_SQLITE'		=> 'Versjonen av SQLite utvidelsen du har installert er for gammel, den må det være oppgradert til minst 2.8.2.',
	'INST_ERR_DB_NO_ORACLE'		=> 'Versjonen av Oracle installeres på denne maskinen krever at du setter <var>NLS_CHARACTERSET</var> parameter til <var>UTF8</var>. Enten oppgrader din installasjon til 9.2 + eller endre parameter.',
	'INST_ERR_DB_NO_FIREBIRD'	=> 'Versjonen av Firebird installert på denne maskinen er eldre enn 2.1, må du oppgradere til en nyere versjon.',
	'INST_ERR_DB_NO_FIREBIRD_PS'=> 'Databasen du valgte for Firebird har en side størrelse mindre enn 8192, den må være minst 8192.',
	'INST_ERR_DB_NO_POSTGRES'	=> 'Databasen du har valgt ble ikke opprettet i <var>UNICODE</var> eller <var>UTF8</var> koding. Prøv å installere med en database i <var>UNICODE</var> eller <var>UTF8</var> koding.',
	'INST_ERR_DB_NO_NAME'		=> 'Databasenavn ble ikke spesifisert.',
	'INST_ERR_EMAIL_INVALID'	=> 'Epostadressene du skrev inn er ugyldige.',
	'INST_ERR_EMAIL_MISMATCH'	=> 'Epostadressene du skrev inn stemmer ikke med hverandre.',
	'INST_ERR_FATAL'			=> 'Fatal installasjonsfeil',
	'INST_ERR_FATAL_DB'			=> 'En fatal og uopprettelig database feil har oppstått. Dette kan være fordi den angitte brukeren ikke har de nødvendige rettighetene til å <code>CREATE TABLES</code> eller <code>INSERT</code> data, ell. Du finner mer informasjon under. Ta kontakt med din hosting leverandør eller spør i phpBB.com eller phpBB.no supportforum hvis du skulle ha bruk for hjelp',
	'INST_ERR_FTP_PATH'			=> 'Kunne ikke skifte til den oppgitte mappen, sjekk banen.',
	'INST_ERR_FTP_LOGIN'		=> 'Kunne ikke logge inn på FTP-server, sjekk ditt brukernavn og passord.',
	'INST_ERR_MISSING_DATA'		=> 'Du må fylle ut alle feltene i denne boksen.',
	'INST_ERR_NO_DB'			=> 'Kan ikke laste PHP-modulen for den valgte databasetypen.',
	'INST_ERR_PASSWORD_MISMATCH'	=> 'Passordene du skrev stemmer ikke med hverandre.',
	'INST_ERR_PASSWORD_TOO_LONG'	=> 'Passordet du skrev er for langt. Den maksimale lengden er på 30 tegn.',
	'INST_ERR_PASSWORD_TOO_SHORT'	=> 'Passordet du skrev er for kort. Minimumslengden er på 6 tegn.',
	'INST_ERR_PREFIX'			=> 'Tabellen med det spesifiserte prefikset finnes allerede, vennligst velg et annet alternativ.',
	'INST_ERR_PREFIX_INVALID'	=> 'Tabellprefikset du har spesifisert er ugyldig for denne databasen. Prøv andre tegn, for eksempel uten bindestrek.',
	'INST_ERR_PREFIX_TOO_LONG'	=> 'Tabellprefikset du har spesifisert er for lang. Den maksimale lengden er på %d tegn.',
	'INST_ERR_USER_TOO_LONG'	=> 'Brukernavnet du har skrevet er for langt. Den maksimale lengden er på 20 tegn.',
	'INST_ERR_USER_TOO_SHORT'	=> 'Brukernavnet du har skrevet er for kort. Minimumslengden er på 3 tegn.',
	'INVALID_PRIMARY_KEY'		=> 'Ugyldig hovednøkkel : %s',

	'LONG_SCRIPT_EXECUTION'		=> 'Vær oppmerksom på at dette kan ta en stund... Vennligst ikke stopp scriptet.',

	// mbstring
	'MBSTRING_CHECK'						=> '<samp>mbstring</samp> Tilleggssjekk',
	'MBSTRING_CHECK_EXPLAIN'				=> '<strong>Påkrevet</strong> - <samp>mbstring</samp> er en PHP-utvidelse som gir multibyte streng funksjoner. Enkelte funksjoner i mbstring er ikke kompatible med phpBB og må være deaktivert.',
	'MBSTRING_FUNC_OVERLOAD'				=> 'Funksjon overbelastet',
	'MBSTRING_FUNC_OVERLOAD_EXPLAIN'		=> '<var>mbstring.func_overload</var> må være satt til enten 0 eller 4.',
	'MBSTRING_ENCODING_TRANSLATION'			=> 'Transparent inkodning av tegn',
	'MBSTRING_ENCODING_TRANSLATION_EXPLAIN'	=> '<var>mbstring.encoding_translation</var> må være satt til 0.',
	'MBSTRING_HTTP_INPUT'					=> 'Tegnkonvertering for HTTP-input',
	'MBSTRING_HTTP_INPUT_EXPLAIN'			=> '<var>mbstring.http_input</var> må være satt til <samp>pass</samp>.',
	'MBSTRING_HTTP_OUTPUT'					=> 'Tegnkonvertering for HTTP-output',
	'MBSTRING_HTTP_OUTPUT_EXPLAIN'			=> '<var>mbstring.http_output</var> må være satt til <samp>pass</samp>.',

	'MAKE_FOLDER_WRITABLE'		=> 'Vennligst sørg for at denne mappen eksisterer og er skrivbar for serveren og prøv igjen:<br />»<strong>%s</strong>.',
	'MAKE_FOLDERS_WRITABLE'		=> 'Vennligst sørg for at disse mappene eksisterer og er skrivbare for serveren og prøv igjen:<br />»<strong>%s</strong>.',

	'MYSQL_SCHEMA_UPDATE_REQUIRED'	=> 'Ditt MySQL databaseskjema for phpBB er ikke oppdatert. phpBB har oppdaget et skjema for MySQL 3.x/4.x, og server har installert MySQL %2$s.<br /><strong>Før du fortsetter oppdateringen, må du oppgradere schema.</strong><br /><br />Vennligst les <a href="http://www.phpbb.com/kb/article/doesnt-have-a-default-value-errors/">Knowledge Base-artikkel om oppgradering av MySQL skjema</a>. Hvis du støter på problemer, vennligst bruk <a href="http://www.phpbb.com/community/viewforum.php?f=46">supportforumet vårt</a>.',

	'NAMING_CONFLICT'			=> 'Navnekonflikt: %s and %s er begge aliaser<br /><br />%s',
	'NEXT_STEP'					=> 'Fortsett til neste steg',
	'NOT_FOUND'					=> 'Kan ikke finne',
	'NOT_UNDERSTAND'			=> 'Kan ikke forstå %s #%d, tabell %s (“%s”)',
	'NO_CONVERTORS'				=> 'Det er ingen konvertere tilgjengelig.',
	'NO_CONVERT_SPECIFIED'		=> 'Ingen konverter spesifisert.',
	'NO_LOCATION'				=> 'Kan ikke fastslå beliggenhet. Hvis du vet at ImageMagick er installert, kan du angi plasseringen senere i administrasjonspanelet',
	'NO_TABLES_FOUND'			=> 'Ingen tabeller er funnet.',

	'OVERVIEW_BODY'				=> 'Velkommen til phpBB3!<br /><br />phpBB™ er den mest brukte åpen kildekode-forum løsning i verden. phpBB3 er den nyeste utgaven av en software som startet i 2000. I likhet med sine forgjengere, er phpBB3 funksjons rik, brukervennlig, og støttes fullt ut av phpBB Team. phpBB3 er en kraftig forbedring av det som gjorde phpBB2 populært, og inneholder etterspurte funksjonene som ikke var tilgjengelige i tidligere versjoner. Vi håper det overgår dine forventninger.<br /><br />Dette installasjonssystemet vil veilede deg gjennom installasjonen av phpBB3, oppdatere til den nyeste versjonen av phpBB3 fra tidligere utgivelser, samt å konvertere til phpBB3 fra et annet forum system (inkludert phpBB2). For mer informasjon, oppfordrer vi deg til å lese <a href="../docs/INSTALL.html">installasjons veiledningen</a>.<br /><br />For å lese phpBB3 lisensen eller lærer om å få support og vår holdning til det, velger de respektive alternativene fra sidemenyen. For å fortsette, vennligst velg den aktuelle kategorien ovenfor.',

	'PCRE_UTF_SUPPORT'				=> 'PCRE UTF-8 støtte',
	'PCRE_UTF_SUPPORT_EXPLAIN'		=> 'phpBB vil <strong>ikke</strong> kjøre hvis PHP installasjonen ikke er kompilert med UTF-8 støtte i PCRE utvidelsen.',
	'PHP_GETIMAGESIZE_SUPPORT'			=> 'PHP funksjonen getimagesize() er tilgjengelig',
	'PHP_GETIMAGESIZE_SUPPORT_EXPLAIN'	=> '<strong>Påkrevd</strong> - For at phpBB skal fungere riktig, må getimagesize funksjon å være tilgjengelig.',
	'PHP_OPTIONAL_MODULE'			=> 'Valgfrie moduler',
	'PHP_OPTIONAL_MODULE_EXPLAIN'	=> '<strong>Valgfri</strong> - Disse modulene eller programmene er valgfrie. Men hvis de er tilgjengelige vil de aktivere ekstra funksjoner.',
	'PHP_SUPPORTED_DB'				=> 'Støttede databaser',
	'PHP_SUPPORTED_DB_EXPLAIN'		=> '<strong>Påkrevd</strong> - Du må ha støtte for minst én kompatibel database innen PHP. Hvis ingen database moduler er vist som tilgjengelig bør du kontakte din hosting leverandør eller gjennomgå relevant PHP installasjons dokumentasjon for råd.',
	'PHP_REGISTER_GLOBALS'			=> 'PHP-innstillingen <var>register_globals</var> er deaktivert',
	'PHP_REGISTER_GLOBALS_EXPLAIN'	=> 'phpBB vil fortsatt kjøre hvis denne innstillingen er aktivert, men hvis det er mulig, anbefales det at register_globals er deaktivert i din PHP installasjon av sikkerhetsgrunner.',
	'PHP_SAFE_MODE'					=> 'Sikker modus',
	'PHP_SETTINGS'					=> 'PHP-versjon og innstillinger',
	'PHP_SETTINGS_EXPLAIN'			=> '<strong>Påkrevd</strong> - Du må kjøre versjon 4.3.3. eller nyere av PHP for å kunne installere phpBB. Hvis <var>safe mode</var> vises nedenfor, kjøre PHP installasjon i denne tilstanden. Dette vil gi begrensninger i mulighetene for ekstern administrasjon og lignende funksjoner.',
	'PHP_URL_FOPEN_SUPPORT'			=> 'PHP innstilling <var>allow_url_fopen</var> er slått på',
	'PHP_URL_FOPEN_SUPPORT_EXPLAIN'	=> '<strong>Valgfri</strong> - Denne innstillingen er valgfri, men visse phpBB funksjoner som off-site avatarer vil ikke fungere uten den.',
	'PHP_VERSION_REQD'				=> 'PHP versjon >= 4.3.3',
	'POST_ID'						=> 'Post-ID',
	'PREFIX_FOUND'					=> 'En skanning av tabellene har vist en gyldig installasjons som bruker <strong>%s</strong> som tabellen prefiks.',
	'PREPROCESS_STEP'				=> 'Utfører pre-prosesserings funksjoner og spørringer',
	'PRE_CONVERT_COMPLETE'			=> 'All prekonverterings trinnene er komplette. Du kan nå begynne selve konverteringen. Vær oppmerksom på at du senere kan bli pålagt å justere flere parametre manuelt. Etter konverteringen, sjekk spesielt rettigheter, bygg søkeindeksen som ikke er konvertert og sjekk også at filene ble kopiert riktig, for eksempel avatarer og smilefjes.',
	'PROCESS_LAST'					=> 'Behandler de siste forespørslene',

	'REFRESH_PAGE'				=> 'Oppdater siden for å fortsette konvertering',
	'REFRESH_PAGE_EXPLAIN'		=> 'Hvis satt til ja vil konverteren oppdatere siden for å fortsette konverteringen etter å ha fullført et skritt. Hvis dette er din første konvertering for testformål og for å fastslå eventuelle feil på forhånd, foreslår vi å sette den til Nei.',
	'REQUIREMENTS_TITLE'		=> 'Installasjonskompatibilitet',
	'REQUIREMENTS_EXPLAIN'		=> 'Før du fortsetter med full installasjons vil phpBB utføre noen tester på din server konfigurasjon og filer for å sikre at du er i stand til å installere og kjøre phpBB. Sørg for at du leser gjennom resultatene grundig og ikke fortsetter før alle de nødvendige testene er bestått. Hvis du ønsker å bruke noen av funksjonene som er avhengig av valgfrie tester, bør du sørge for at disse testene også er bestått.',
	'RETRY_WRITE'				=> 'Prøv på nytt å skrive config FILEN',
	'RETRY_WRITE_EXPLAIN'		=> 'Hvis du vil, kan du endre rettighetene til config.php slik at phpBB kan skrive til den. Skulle du ønske det, kan du klikke på Prøv igjen knappen under. Husk å sette tilbake rettighetene til config.php etter at installasjonen er fullført.',

	'SCRIPT_PATH'				=> 'Skript sti',
	'SCRIPT_PATH_EXPLAIN'		=> 'Stien/banen der phpBB ligger i forhold til domenenavnet, for eksempel<samp>/phpBB3</samp>.',
	'SELECT_LANG'				=> 'Velg språk',
	'SERVER_CONFIG'				=> 'Serverkonfigurasjon',
	'SEARCH_INDEX_UNCONVERTED'	=> 'Søkeindeks ikke ble konvertert',
	'SEARCH_INDEX_UNCONVERTED_EXPLAIN'	=> 'Din gamle søkeindeks ble ikke konvertert. Søk vil alltid gi et tomt resultat. For å opprette en ny søkeindeks gå til administrasjonskontrollpanelet, velge Vedlikehold og velg deretter Søke indeksen fra undermenyen.',
	'SOFTWARE'					=> 'Forumprogramvare',
	'SPECIFY_OPTIONS'			=> 'Spesifiser konverteringsalternativer',
	'STAGE_ADMINISTRATOR'		=> 'Administratordetaljer',
	'STAGE_ADVANCED'			=> 'Avanserte innstillinger',
	'STAGE_ADVANCED_EXPLAIN'	=> 'Disse innstillingene er kun nødvendige om noe annet enn standard er påkrevd. Hvis du er usikker, gå til neste side. Disse innstillingene vil også bli tilgjengelige fra administrasjonspanelet.',
	'STAGE_CONFIG_FILE'			=> 'Konfigurasjonsfil',
	'STAGE_CREATE_TABLE'		=> 'Lag databasetabeller',
	'STAGE_CREATE_TABLE_EXPLAIN'	=> 'Databasetabellene som er påkrevd av phpBB 3.0 er laget og utfylt med litt nødvendig informasjon. Gå til neste steg for å fullføre installasjonen.',
	'STAGE_DATABASE'			=> 'Databaseinnstillinger',
	'STAGE_FINAL'				=> 'Sluttfasen',
	'STAGE_INTRO'				=> 'Introduksjon',
	'STAGE_IN_PROGRESS'			=> 'Konvertering pågår',
	'STAGE_REQUIREMENTS'		=> 'Krav',
	'STAGE_SETTINGS'			=> 'Innstillinger',
	'STARTING_CONVERT'			=> 'Starter konverteringsprosessen',
	'STEP_PERCENT_COMPLETED'	=> 'Steg <strong>%d</strong> av <strong>%d</strong>',
	'SUB_INTRO'					=> 'Introduksjon',
	'SUB_LICENSE'				=> 'Lisens',
	'SUB_SUPPORT'				=> 'Support',
	'SUCCESSFUL_CONNECT'		=> 'Vellykket tilkobling',
	'SUPPORT_BODY'				=> 'Er gis fullt gratis support for gjeldende stabile utgaven av phpBB3. Dette inkluderer:</p><ul><li>installasjon</li><li>konfigurering</li><li>tekniske spørsmål</li><li>problemer relatert til potensielle bugs i koden</li><li>oppdatering fra Releasekandidatversjoner (RC) til siste stabile utgave</li><li>konvertering fra phpBB 2.0.x til phpBB3</li><li>konvertering fra andre forumsystemer til phpBB3 (les mer i <a href="http://www.phpbb.com/community/viewforum.php?f=65">Convertors Forum</a>)</li></ul><p>Vi anbefaler alle som fortsatt bruker BETA-versjoner av phpBB3 til å erstatte installasjonen med en fersk kopi av siste versjon</p><h2>Modifikasjoner og design</h2><p>For problemer relatert til modifikasjoner, vennligst still spørsmålet i <a href="http://www.phpbb.com/community/viewforum.php?f=81">Modifications Forum</a>.<br />For problemer relatert til ulike design, still spørsmålet i <a href="http://www.phpbb.com/community/viewforum.php?f=80">Styles Forum</a>.<br /><br />Hvis spørsmålet ditt er relatert til en bestemt pakke, kan du spørre direkte i emnet som omhandler denne pakken.</p><h2>Hvordan få hjelp?</h2><p><a href="http://www.phpbb.com/community/viewtopic.php?f=14&amp;t=571070">phpBBs velkomstpakke</a><br /><a href="http://www.phpbb.com/support/">Supportseksjonen</a><br /><a href="http://www.phpbb.com/support/documentation/3.0/quickstart/">Hurtigstartsguide</a><br /><br />For å forsikre deg om at du alltid får med deg informasjon om nye utgaver kan du <a href="http://www.phpbb.com/support/">Abonner på vår mailingliste</a>?<br /><br />',
	'SYNC_FORUMS'				=> 'Begynner å synkronisere fora',
	'SYNC_POST_COUNT'			=> 'Synkronisere innlegg teller',
	'SYNC_POST_COUNT_ID'		=> 'Synkronisere innlegg fra <var>entry</var> %1$s til %2$s.',
	'SYNC_TOPICS'				=> 'Begynner å synkronisere emner',
	'SYNC_TOPIC_ID'				=> 'Synkronisere emner fra <var>topic_id</var> %1$s til %2$s.',

	'TABLES_MISSING'			=> 'Fant ikke disse tabellene<br />» <strong>%s</strong>.',
	'TABLE_PREFIX'				=> 'Prefiks for tabellene i databasen',
	'TABLE_PREFIX_SAME'			=> 'Tabellprefikset må være det samme som brukes av programvaren du konverterer fra.<br />» Angitt tabell prefix var %s.',
	'TESTS_PASSED'				=> 'Tester gjennomført',
	'TESTS_FAILED'				=> 'Tester feilet',

	'UNABLE_WRITE_LOCK'			=> 'Kan ikke skrive til låst fil.',
	'UNAVAILABLE'				=> 'Utilgjengelig',
	'UNWRITABLE'				=> 'Ikke skrivbar',
	'UPDATE_TOPICS_POSTED'		=> 'Genererer emneinformasjon',
	'UPDATE_TOPICS_POSTED_ERR'	=> 'Det oppsto en feil under forsøk på å oppdatere informasjonen om postede emner. Du kan prøve oppdateringen igjen i administrasjonspanelet, når konverteringen er fullført.',
	'VERIFY_OPTIONS'			=> 'Kontrollerer konvertering alternativer',
	'VERSION'					=> 'Versjon',

	'WELCOME_INSTALL'			=> 'Velkommen til phpBB3 installasjonen',
	'WRITABLE'					=> 'Skrivbar',
));

// Updater
$lang = array_merge($lang, array(
	'ALL_FILES_UP_TO_DATE'		=> 'Alle filer er oppdatert til seneste phpBB-versjon. Du burde nå <a href="../ucp.php?mode=login">logge inn på forumet</a> og sjekke om alt virker som det skal. Ikke glem å slette, gi nytt navn til eller flytte install-mappen! Vennligst send oss oppdatert informasjon om din server og forum konfigurasjoner fra <a href="../ucp.php?mode=login&amp;redirect=adm/index.php%3Fi=send_statistics%26mode=send_statistics">Send statistics</a> modul i ditt administrasjonspanel.',
	'ARCHIVE_FILE'				=> 'Kildefil i arkivet',

	'BACK'				=> 'Tilbake',
	'BINARY_FILE'		=> 'Binær fil',
	'BOT'				=> 'Spider/Robot',

	'CHANGE_CLEAN_NAMES'			=> 'Metode for å sikre at et brukernavn ikke brukes av flere brukere har endret seg. Denne nye kontrollen viser at noen brukere bruker samme brukernavn. For å sikre at det er bare én bruker per. brukernavn, slette eller endre navn på disse motstridende brukernavn før du kan fortsette.',
	'CHECK_FILES'					=> 'Kontroller filer',
	'CHECK_FILES_AGAIN'				=> 'Kontroller filer igen',
	'CHECK_FILES_EXPLAIN'			=> 'Innenfor det neste trinnet vil alle filer bli kontrollert mot oppdateringsfilene - dette kan ta en stund hvis dette er den første fil kontrollen.',
	'CHECK_FILES_UP_TO_DATE'		=> 'Ifølge din database er dette den nyeste versjonen. Du kan gjennomføre en filundersøkelse for å finne ut om alle filene virkelig er oppdatert til den nyeste phpBB versjonen.',
	'CHECK_UPDATE_DATABASE'			=> 'Fortsett oppdateringsprosessen',
	'COLLECTED_INFORMATION'			=> 'Filinformasjon',
	'COLLECTED_INFORMATION_EXPLAIN'	=> 'Listen under viser filer som trenger oppdatering. Les informasjonen i begynnelsen av hver statusboks for å se hva de mener og hva du må gjøre for å fullføre oppdateringen.',
	'COLLECTING_FILE_DIFFS'			=> 'Samler inn fil forskjeller',
	'COMPLETE_LOGIN_TO_BOARD'		=> 'Du burde nå<a href="../ucp.php?mode=login">logge inn på forumet</a> og undersøke om alt fungerer som det skal. Ikke glem å slette, gi nytt navn til eller flytte installasjonsmappen!',
	'CONTINUE_UPDATE_NOW'			=> 'Fortsett oppdateringsprosessen nå',		// Shown within the database update script at the end if called from the updater
	'CONTINUE_UPDATE'				=> 'Fortsett oppdatering nå',					// Shown after file upload to indicate the update process is not yet finished
	'CURRENT_FILE'					=> 'Begynnelse av konflikt - Originalfilkode før oppdatering',
	'CURRENT_VERSION'				=> 'Gjeldende versjon',

	'DATABASE_TYPE'						=> 'Databasetype',
	'DATABASE_UPDATE_INFO_OLD'			=> 'Databaseoppdateringsfilen i install-katalogen er ikke oppdatert. Vennligst sjekk at du har lastet opp den riktige versjon av filen..',
	'DELETE_USER_REMOVE'				=> 'Slett brukeren og fjern innleggene',
	'DELETE_USER_RETAIN'				=> 'Slett brukeren, men beholde innleggene',
	'DESTINATION'						=> 'Destinasjonsfil',
	'DIFF_INLINE'						=> 'Inline',
	'DIFF_RAW'							=> 'Raw unified diff',
	'DIFF_SEP_EXPLAIN'					=> 'Kode brukt i oppdatert/ny fil',
	'DIFF_SIDE_BY_SIDE'					=> 'Side for side',
	'DIFF_UNIFIED'						=> 'Unified diff',
	'DO_NOT_UPDATE'						=> 'Ikke oppdater denne filen',
	'DONE'								=> 'Utført',
	'DOWNLOAD'							=> 'Last ned',
	'DOWNLOAD_AS'						=> 'Last ned som',
	'DOWNLOAD_UPDATE_METHOD_BUTTON'		=> 'Last ned endrede filer  (anbefales)',
	'DOWNLOAD_CONFLICTS'				=> 'Last ned konflikter for denne fila',
	'DOWNLOAD_CONFLICTS_EXPLAIN'		=> 'Søk etter &lt;&lt;&lt; for å finne konflikter',
	'DOWNLOAD_UPDATE_METHOD'			=> 'Last ned endrede filer',
	'DOWNLOAD_UPDATE_METHOD_EXPLAIN'	=> 'Når du har lastet ned og pakket ut filen som inneholder alle endrede filer, lastet dem opp til riktig sted i phpBB installasjon. Etter at du har lastet opp alle filene, kan du sjekke filene igjen med den andre knappen nedenfor.',

	'ERROR'			=> 'Feil',
	'EDIT_USERNAME'	=> 'Endre brukernavn',

	'FILE_ALREADY_UP_TO_DATE'		=> 'Filen er allerede oppdatert.',
	'FILE_DIFF_NOT_ALLOWED'			=> 'Det er ikke tillatt å "diffe" filen.',
	'FILE_USED'						=> 'Informasjon brukt fra',			// Single file
	'FILES_CONFLICT'				=> 'Konfliktfiler',
	'FILES_CONFLICT_EXPLAIN'		=> 'Følgende filer er endret og representerer ikke de originale filene fra den gamle versjonen. phpBB tror at disse filene skaper konflikter hvis de prøvde å bli fusjonert. Vennligst undersøk konfliktene og prøve å manuelt løse dem eller fortsette oppdateringen velge å velge den foretrukne sammenslåing metoden. Hvis du løse konfliktene manuelt sjekk filene igjen etter at du har endret dem. Du kan også velge foretrukket sammenslåings metode for hver fil. Den første vil resultere i en fil, hvor konfliktlinjer går tapt, den andre resulterer i at endringer fra den nye filen vil gå tapt.',
	'FILES_MODIFIED'				=> 'Modifiserte filer',
	'FILES_MODIFIED_EXPLAIN'		=> 'Følgende filer er modifiserte og er ulike de originale filene fra den gamle versjonen. Oppdateringen kommer til å slå sammen den nye og den modifiserte filen.',
	'FILES_NEW'						=> 'Nye filer',
	'FILES_NEW_EXPLAIN'				=> 'Følgende filer finnes foreløpig ikke i din installasjon. Disse blir automatisk lagt til i din installasjon under oppdateringen',
	'FILES_NEW_CONFLICT'			=> 'Nye konfliktfiler',
	'FILES_NEW_CONFLICT_EXPLAIN'	=> 'Følgende filer er nye i den seneste versjonen, men det finnes allerede en fil med samme navn i mappen. Denne filen vil bli overskrevet av den nye.',
	'FILES_NOT_MODIFIED'			=> 'Ikke modifiserte filer',
	'FILES_NOT_MODIFIED_EXPLAIN'	=> 'Følgende filer er ikke endret, og representerer de opprinnelige phpBB filene fra den versjonen du vil oppdatere fra.',
	'FILES_UP_TO_DATE'				=> 'Oppdaterte filer',
	'FILES_UP_TO_DATE_EXPLAIN'		=> 'Følgende filer er allerede oppdatert og trenger ikke å bli oppdatert.',
	'FTP_SETTINGS'					=> 'FTP-innstillinger',
	'FTP_UPDATE_METHOD'				=> 'FTP-opplastning',

	'INCOMPATIBLE_UPDATE_FILES'		=> 'Oppdateringsfilene er ukompatible med din installerte versjon. Din installerte versjon er %1$ og oppdateringsfilen er for oppdatering fra phpB %2$s to %3$s.',
	'INCOMPLETE_UPDATE_FILES'		=> 'Oppdateringsfilene er ukomplette.',
	'INLINE_UPDATE_SUCCESSFUL'		=> 'Database oppdateringen var vellykket. Nå må du fortsette oppdateringsprosessen.',

	'KEEP_OLD_NAME'		=> 'Behold brukernavn',

	'LATEST_VERSION'		=> 'Nyeste versjon',
	'LINE'					=> 'Linje',
	'LINE_ADDED'			=> 'Lagt til',
	'LINE_MODIFIED'			=> 'Endret',
	'LINE_REMOVED'			=> 'Slettet',
	'LINE_UNMODIFIED'		=> 'Uendret',
	'LOGIN_UPDATE_EXPLAIN'	=> 'For å oppdatere installasjonen må du logge inn først.',

	'MAPPING_FILE_STRUCTURE'	=> 'For å forenkle opplastingen, her er filplasseringene som passer til din phpBB-installasjonen.',

	'MERGE_MODIFICATIONS_OPTION'	=> 'Slå sammen modifikasjonene',

	'MERGE_NO_MERGE_NEW_OPTION'	=> 'Ikke slå sammen - bruk en ny fil',
	'MERGE_NO_MERGE_MOD_OPTION'	=> 'Ikke slå sammen - bruk den installerte filen',
	'MERGE_MOD_FILE_OPTION'		=> 'Slå sammen modifikasjonene (fjerner nye phpBB kode i blokker med konflikt)',
	'MERGE_NEW_FILE_OPTION'		=> 'Slå sammen modifikasjonene (fjerner modifisert kode i blokker med konflikt))',
	'MERGE_SELECT_ERROR'		=> 'Metode for sammenslåing av filer med konflikt er ikke valgt.',
	'MERGING_FILES'				=> 'Slår sammen forskjeller',
	'MERGING_FILES_EXPLAIN'		=> 'Samler for øyeblikket inn de siste filendingene.<br/><br/>Vent til phpBB har fullført alle operasjoner i endrede filer.',

	'NEW_FILE'						=> 'Slutt på konflikt',
	'NEW_USERNAME'					=> 'Nytt brukernavn',
	'NO_AUTH_UPDATE'				=> 'Ikke autorisert til å oppdatere',
	'NO_ERRORS'						=> 'Ingen feil',
	'NO_UPDATE_FILES'				=> 'Oppdaterer ikke følgende filer',
	'NO_UPDATE_FILES_EXPLAIN'		=> 'Følgende filer er nye eller endret, men katalogen de normalt hører hjemme i kunne ikke bli funnet på din installasjon. Hvis denne listen inneholder filer til andre mapper enn language/ eller styles/ har du sannsynligvis endret katalogstrukturen og oppdateringen kan være ufullstendig.',
	'NO_UPDATE_FILES_OUTDATED'		=> 'Ingen gyldige oppdaterings mappe er funnet, vennligst sjekk at du har lastet opp de aktuelle filene.<br/><br/>Din installasjonen ser <strong>ikke</strong> ut til å være oppdatert. Oppdateringer er tilgjengelige for din versjon av phpBB %1$s, du gå til <a href="http://www.phpbb.com/downloads/" rel="external">http://www.phpbb.com/downloads/</a> for å få riktig pakke til å oppdatere fra versjon %2$s til versjon%3$s.',
	'NO_UPDATE_FILES_UP_TO_DATE'	=> 'Din versjon er oppdatert. Det er ikke nødvendig å kjøre oppdateringsverktøyet. Hvis du ønsker å foreta en integritet sjekk på filene dine sørg for at du lastet opp den riktige oppdateringen filene.',
	'NO_UPDATE_INFO'				=> 'Oppdaterings filinformasjon ble ikke funnet.',
	'NO_UPDATES_REQUIRED'			=> 'Ingen oppdateringer er nødvendig',
	'NO_VISIBLE_CHANGES'			=> 'Ingen synlige endringer',
	'NOTICE'						=> 'Merknad',
	'NUM_CONFLICTS'					=> 'Antall konflikter',
	'NUMBER_OF_FILES_COLLECTED'		=> 'Det er sjekket etter forskjeller i %1$d av %2$d filer.<br/>Vent til alle filene er sjekket.',

	'OLD_UPDATE_FILES'		=> 'Update files are out of date. The update files found are for updating from phpBB %1$s to phpBB %2$s but the latest version of phpBB is %3$s.',

	'PACKAGE_UPDATES_TO'				=> 'Current package updates to version',
	'PERFORM_DATABASE_UPDATE'			=> 'Perform database update',
	'PERFORM_DATABASE_UPDATE_EXPLAIN'	=> 'Below you will find a button to the database update script. The database update can take a while, so please do not stop the execution if it seems to hang. After the database update has been performed just follow the instructions to continue the update process.',
	'PREVIOUS_VERSION'					=> 'Previous version',
	'PROGRESS'							=> 'Progress',

	'RESULT'					=> 'Result',
	'RUN_DATABASE_SCRIPT'		=> 'Update my database now',

	'SELECT_DIFF_MODE'			=> 'Select diff mode',
	'SELECT_DOWNLOAD_FORMAT'	=> 'Select download archive format',
	'SELECT_FTP_SETTINGS'		=> 'Select FTP settings',
	'SHOW_DIFF_CONFLICT'		=> 'Show differences/conflicts',
	'SHOW_DIFF_FINAL'			=> 'Show resulting file',
	'SHOW_DIFF_MODIFIED'		=> 'Show merged differences',
	'SHOW_DIFF_NEW'				=> 'Show file contents',
	'SHOW_DIFF_NEW_CONFLICT'	=> 'Show differences',
	'SHOW_DIFF_NOT_MODIFIED'	=> 'Show differences',
	'SOME_QUERIES_FAILED'		=> 'Some queries failed, the statements and errors are listing below.',
	'SQL'						=> 'SQL',
	'SQL_FAILURE_EXPLAIN'		=> 'This is probably nothing to worry about, update will continue. Should this fail to complete you may need to seek help at our support forums. See <a href="../docs/README.html">README</a> for details on how to obtain advice.',
	'STAGE_FILE_CHECK'			=> 'Check files',
	'STAGE_UPDATE_DB'			=> 'Update database',
	'STAGE_UPDATE_FILES'		=> 'Update files',
	'STAGE_VERSION_CHECK'		=> 'Version check',
	'STATUS_CONFLICT'			=> 'Modified file producing conflicts',
	'STATUS_MODIFIED'			=> 'Modified file',
	'STATUS_NEW'				=> 'New file',
	'STATUS_NEW_CONFLICT'		=> 'Conflicting new file',
	'STATUS_NOT_MODIFIED'		=> 'Not modified file',
	'STATUS_UP_TO_DATE'			=> 'Already updated file',

	'TOGGLE_DISPLAY'			=> 'View/Hide file list',
	'TRY_DOWNLOAD_METHOD'		=> 'You may want to try the download modified files method.<br />This method always works and is also the recommended update path.',
	'TRY_DOWNLOAD_METHOD_BUTTON'=> 'Try this method now',

	'UPDATE_COMPLETED'				=> 'Update completed',
	'UPDATE_DATABASE'				=> 'Update database',
	'UPDATE_DATABASE_EXPLAIN'		=> 'Within the next step the database will be updated.',
	'UPDATE_DATABASE_SCHEMA'		=> 'Updating database schema',
	'UPDATE_FILES'					=> 'Update files',
	'UPDATE_FILES_NOTICE'			=> 'Please make sure you have updated your board files too, this file is only updating your database.',
	'UPDATE_INSTALLATION'			=> 'Update phpBB installation',
	'UPDATE_INSTALLATION_EXPLAIN'	=> 'With this option, it is possible to update your phpBB installation to the latest version.<br />During the process all of your files will be checked for their integrity. You are able to review all differences and files before the update.<br /><br />The file update itself can be done in two different ways.</p><h2>Manual Update</h2><p>With this update you only download your personal set of changed files to make sure you do not lose your file modifications you may have done. After you downloaded this package you need to manually upload the files to their correct position under your phpBB root directory. Once done, you are able to do the file check stage again to see if you moved the files to their correct location.</p><h2>Automatic Update with FTP</h2><p>This method is similar to the first one but without the need to download the changed files and uploading them on your own. This will be done for you. In order to use this method you need to know your FTP login details since you will be asked for them. Once finished you will be redirected to the file check again to make sure everything got updated correctly.<br /><br />',
	'UPDATE_INSTRUCTIONS'			=> '

		<h1>Release announcement</h1>

		<p>Please read <a href="%1$s" title="%1$s"><strong>the release announcement for the latest version</strong></a> before you continue your update process, it may contain useful information. It also contains full download links as well as the change log.</p>

		<br />

		<h1>How to update your installation with the Automatic Update Package</h1>

		<p>The recommended way of updating your installation listed here is only valid for the automatic update package. You are also able to update your installation using the methods listed within the INSTALL.html document. The steps for updating phpBB3 automatically are:</p>

		<ul style="margin-left: 20px; font-size: 1.1em;">
			<li>Go to the <a href="http://www.phpbb.com/downloads/" title="http://www.phpbb.com/downloads/">phpBB.com downloads page</a> and download the "Automatic Update Package" archive.<br /><br /></li>
			<li>Unpack the archive.<br /><br /></li>
			<li>Upload the complete uncompressed install folder to your phpBB root directory (where your config.php file is).<br /><br /></li>
		</ul>

		<p>Once uploaded your board will be offline for normal users due to the install directory you uploaded now present.<br /><br />
		<strong><a href="%2$s" title="%2$s">Now start the update process by pointing your browser to the install folder</a>.</strong><br />
		<br />
		You will then be guided through the update process. You will be notified once the update is complete.
		</p>
	',
	'UPDATE_INSTRUCTIONS_INCOMPLETE'	=> '

		<h1>Incomplete update detected</h1>

		<p>phpBB detected an incomplete automatic update. Please make sure you followed every step within the automatic update tool. Below you will find the link again, or go directly to your install directory.</p>
	',
	'UPDATE_METHOD'					=> 'Update method',
	'UPDATE_METHOD_EXPLAIN'			=> 'You are now able to choose your preferred update method. Using the FTP upload will present you with a form you need to enter your FTP account details into. With this method the files will be automatically moved to the new location and backups of the old files being created by appending .bak to the filename. If you choose to download the modified files you are able to unpack and upload them to their correct location manually later.',
	'UPDATE_REQUIRES_FILE'			=> 'The updater requires that the following file is present: %s',
	'UPDATE_SUCCESS'				=> 'Update was successful',
	'UPDATE_SUCCESS_EXPLAIN'		=> 'Successfully updated all files. The next step involves checking all files again to make sure the files got updated correctly.',
	'UPDATE_VERSION_OPTIMIZE'		=> 'Updating version and optimising tables',
	'UPDATING_DATA'					=> 'Updating data',
	'UPDATING_TO_LATEST_STABLE'		=> 'Updating database to latest stable release',
	'UPDATED_VERSION'				=> 'Updated version',
	'UPGRADE_INSTRUCTIONS'			=> 'A new feature release <strong>%1$s</strong> is available. Please read <a href="%2$s" title="%2$s"><strong>the release announcement</strong></a> to learn about what it has to offer, and how to upgrade.',
	'UPLOAD_METHOD'					=> 'Upload method',

	'UPDATE_DB_SUCCESS'				=> 'Database update was successful.',
	'USER_ACTIVE'					=> 'Active user',
	'USER_INACTIVE'					=> 'Inactive user',

	'VERSION_CHECK'					=> 'Version check',
	'VERSION_CHECK_EXPLAIN'			=> 'Checks to see if your phpBB installation is up to date.',
	'VERSION_NOT_UP_TO_DATE'		=> 'Your phpBB installation is not up to date. Please continue the update process.',
	'VERSION_NOT_UP_TO_DATE_ACP'	=> 'Your phpBB installation is not up to date.<br />Below is a link to the release announcement, which contains more information as well as instructions on updating.',
	'VERSION_NOT_UP_TO_DATE_TITLE'	=> 'Your phpBB installation is not up to date.',
	'VERSION_UP_TO_DATE'			=> 'Your phpBB installation is up to date. Although there are no updates available at this time, you may continue in order to perform a file validity check.',
	'VERSION_UP_TO_DATE_ACP'		=> 'Your phpBB installation is up to date. There are no updates available at this time.',
	'VIEWING_FILE_CONTENTS'			=> 'Viewing file contents',
	'VIEWING_FILE_DIFF'				=> 'Viewing file differences',

	'WRONG_INFO_FILE_FORMAT'	=> 'Wrong info file format',
));

// Default database schema entries...
$lang = array_merge($lang, array(
	'CONFIG_BOARD_EMAIL_SIG'		=> 'Thanks, The Management',
	'CONFIG_SITE_DESC'				=> 'A short text to describe your forum',
	'CONFIG_SITENAME'				=> 'yourdomain.com',

	'DEFAULT_INSTALL_POST'			=> 'This is an example post in your phpBB3 installation. Everything seems to be working. You may delete this post if you like and continue to set up your board. During the installation process your first category and your first forum are assigned an appropriate set of permissions for the predefined usergroups administrators, bots, global moderators, guests, registered users and registered COPPA users. If you also choose to delete your first category and your first forum, do not forget to assign permissions for all these usergroups for all new categories and forums you create. It is recommended to rename your first category and your first forum and copy permissions from these while creating new categories and forums. Have fun!',

	'FORUMS_FIRST_CATEGORY'			=> 'Your first category',
	'FORUMS_TEST_FORUM_DESC'		=> 'Description of your first forum.',
	'FORUMS_TEST_FORUM_TITLE'		=> 'Your first forum',

	'RANKS_SITE_ADMIN_TITLE'		=> 'Site Admin',
	'REPORT_WAREZ'					=> 'The post contains links to illegal or pirated software.',
	'REPORT_SPAM'					=> 'The reported post has the only purpose to advertise for a website or another product.',
	'REPORT_OFF_TOPIC'				=> 'The reported post is off topic.',
	'REPORT_OTHER'					=> 'The reported post does not fit into any other category, please use the further information field.',

	'SMILIES_ARROW'					=> 'Arrow',
	'SMILIES_CONFUSED'				=> 'Confused',
	'SMILIES_COOL'					=> 'Cool',
	'SMILIES_CRYING'				=> 'Crying or Very Sad',
	'SMILIES_EMARRASSED'			=> 'Embarrassed',
	'SMILIES_EVIL'					=> 'Evil or Very Mad',
	'SMILIES_EXCLAMATION'			=> 'Exclamation',
	'SMILIES_GEEK'					=> 'Geek',
	'SMILIES_IDEA'					=> 'Idea',
	'SMILIES_LAUGHING'				=> 'Laughing',
	'SMILIES_MAD'					=> 'Mad',
	'SMILIES_MR_GREEN'				=> 'Mr. Green',
	'SMILIES_NEUTRAL'				=> 'Neutral',
	'SMILIES_QUESTION'				=> 'Question',
	'SMILIES_RAZZ'					=> 'Razz',
	'SMILIES_ROLLING_EYES'			=> 'Rolling Eyes',
	'SMILIES_SAD'					=> 'Sad',
	'SMILIES_SHOCKED'				=> 'Shocked',
	'SMILIES_SMILE'					=> 'Smile',
	'SMILIES_SURPRISED'				=> 'Surprised',
	'SMILIES_TWISTED_EVIL'			=> 'Twisted Evil',
	'SMILIES_UBER_GEEK'				=> 'Uber Geek',
	'SMILIES_VERY_HAPPY'			=> 'Very Happy',
	'SMILIES_WINK'					=> 'Wink',

	'TOPICS_TOPIC_TITLE'			=> 'Welcome to phpBB3',
));

?>