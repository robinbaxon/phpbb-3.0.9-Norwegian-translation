<?php
/**
*
* help_bbcode [Norwegian Bokmaal]
*
* @package language
* @version $Id$
* @author Morten R. N. http://www.morten.com
* @copyright (c) 2005 phpBB Group, 2011 Morten R. N.
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
*/
if (!defined('IN_PHPBB'))
{
	exit;
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

$help = array(
	array(
		0 => '--',
		1 => 'Introduksjon'
	),
	array(
		0 => 'Hva er BBCode/BBkoder?',
		1 => 'BBCode er en spesiell implementering av HTML. Hvorvidt du faktisk kan bruke BBCode i innleggene dine på forumet er bestemt av administratoren. I tillegg kan du deaktivere BBCode i et innlegg via innleggsiden. BBCode ligner på HTML i formateringen, men taggene er omringet av firkantparenteser [ og ] isteden for &lt; og &gt; og gir en bedre kontroll over hvordan noe blir vist. Avhengig av malen du bruker, vil du se at å benytte BBCode i dine innlegg er gjort mye enklere gjennom et klikkbart grensesnitt over meldings området på innleggsiden. Selv med dette kan du finne følgende guide nyttig.'
	),
	array(
		0 => '--',
		1 => 'Tekstformatering'
	),
	array(
		0 => 'Hvordan lage fet, kursiv og understreket tekst',
		1 => 'BBCode har tagger som raskt lar deg endre den grunnleggende stilen i teksten. Dette oppnås på følgende måter: <ul> <li> For å gjøre en tekst fet omgir du den med <strong> [b] [/b] </strong>, f.eks <br /> <br /> <strong> [b] </strong> Hei <strong> [/b] </strong> <br /> <br /> blir <strong> Hei </strong> </li> <li> for understreking bruk <strong> [u] [/u] </strong>, for eksempel: <br /> <br /> <strong> [u] </strong> God morgen<strong> [/u] </strong> <br /> <br /> blir <span style="font-weight: underline"> God morgen</span> </li> <li> for å gjøre teksten kursiv bruke <strong> [i] [/i] </strong>, f.eks <br /> <br /> Dette er <strong> [i] </strong> Bra! <strong> [/i] </strong> <br /> <br /> ville gi Dette er <i> Bra! </i> </li> </ul>'
	),
	array(
		0 => 'Hvordan endre skriftens farge eller størrelse',
		1 => 'For å endre fargen eller størrelsen på teksten kan følgende tagger brukes. Husk at formateringen vil kunne variere i forskjellige nettlesere og system: <ul> <li> Bytte farge gjøres med følgende tagger <strong> [color=] [/color] </strong>. Du kan spesifisere enten et anerkjent fargenavn (f.eks red, blue, yellow, osv.) eller med heksadesimale koder, f.eks #FFFFFF, #000000. For å lage rød tekst kan du for eksempel bruke! <br /> <br /> <strong> [Color=red] </strong> Hei <strong> [/color] </strong> <br /> <br /> eller <br /> <br /> <strong> [color =#FF0000] </strong> Hei! <strong> [/color] </strong> <br /> <br /> Begge vil lage <span style = "color: red"> Hei </span> </li> <li> Endre tekstens størrelse på tilsvarende måte med <strong> [size=] [/size] </strong>!. Denne taggen er avhengig av malen brukeren har valgt, men det anbefalte formatet er en tallverdi som representerer tekststørrelsen i prosent, starter på 20 (veldig liten) opp til 200 (veldig stor) som standard. For eksempel: <br /> <br /> <strong> [size=30] </strong> LITEN <strong> [/size] </strong> <br /> <br /> vil generelt være <span style="font-size:30%;"!> LITEN </span> <br /> <br /> mens: <br /> <br /> <strong> [size=200] </strong> STOR <strong> [/size] </strong> <br /> <br /> vil bli <span style="font-size:200%;"> STOR! </span> </li> </ul>'
	),
	array(
		0 => 'Kan jeg kombinere BBCode-tagger?',
		1 => 'Ja, selvfølgelig kan du det, for og virkelig vekke oppmerksomhet kan du eksempel skrive! <br /> <br /> <strong> [Size=200] [color=red] [b] </strong> SE PÅ MEG <strong> [/b] [/color] [/size] </strong> <br /> <br /> dette ville bli <span style="color:red;font-size:200%;"> <strong> SE PÅ MEG! </strong> </span> <br /> <br /> Vi vil allikevel ikke anbefale å formatere mye tekst som ser slik ut! Husk at det er opp til deg, pass på å å sjekke at BBCode brukes i riktig rekkefølge. For eksempel er følgende feil: <br /> <br /> <strong> [b] [u] </strong> Dette er feil <strong> [/b] [/u] </strong>'
	),
	array(
		0 => '--',
		1 => 'Sitering og tekst med fast bredde'
	),
	array(
		0 => 'Sitere tekst i svar',
		1 => 'Det er to måter du kan sitere tekst, med og uten referanse. <ul> <li> Når du bruker siter funksjonen for å svare på et innlegg vil du se at teksten er lagt til meldingen med følgende tagger <strong> [quote=""][/quote] </strong>. Denne metoden gjør det mulig å sitere med en referanse til en person eller hva annet du velger å sette! For eksempel for å sitere et stykke tekst Mr. Blobby skrev ville du skrive: <br /> <br /> <strong> [quote="Mr. Blobby"] </strong> "Mr. Blobby skrev:" blir automatisk lagt til som overskrift før selve teksten. Husk at du <strong> må </strong> bruke anførselstegn " " rundt navnet du siterer. </Li> <li> Den andre metoden gjør det mulig og blindt sitere noe. Da skal bare teksten skrives i mellom <strong> [quote] [/quote] </strong>-kodene. Når du viser meldingen vil det bare vise teksten i en sitat blokk. </Li> </ul>'
	),
	array(
		0 => 'Skrive kode eller data med fast bredde',
		1 => 'Hvis du ønsker å skrive kode eller noe som krever en fast bredde, for eksempel Courier skrifttype bør du omslutte teksten med <strong> [code] [/code] </strong>-kodene, f.eks <br /> <br /> <strong> [code] </strong> echo "Dette er kode "; <strong> [/code] </strong> <br /> <br /> Alle formatering som brukes innenfor <strong> [code] [/code] </strong> taggene vil beholdes når teksten vises. PHP syntakser kan utheves ved hjelp av <strong> [code=php] [/code] </strong> og er anbefalt når du skal vise PHP kodeeksempler i et innlegg.'
	),
	array(
		0 => '--',
		1 => 'Generere lister'
	),
	array(
		0 => 'Lage en usortert liste',
		1 => 'BBCode støtter to typer lister, sorterte og usorterte. De er i hovedsak de samme som deres HTML-ekvivalenter. En usortert liste viser hver linje fortløpende med innrykk og et punkttegn forran. For å opprette en usorterte liste bruker du <strong> [list] [/list] </strong> og angi hvert punkt på listen ved hjelp <strong> [*]</strong>. For eksempel for å liste dine favoritt farger kan du bruke: <br /> <br /> <strong> [list] </strong> <br /> <strong> [*]</strong> Rød <br /> <sterk >[*]</strong> Blå <br /> <strong> [*]</ strong> Gul <br /> <strong> [/list] </strong> <br /> <br /> Dette vil generere følgende liste: <ul> <li> Rød </li> <li> Blå </li> <li> Gul </li> </ul>'
	),
	array(
		0 => 'Lage en sortert liste',
		1 => 'Den andre typen liste, en sortert liste, gir deg kontroll over hva som er utgang før hvert element. For å opprette en sortert liste bruker du <strong> [list=1] [/list] </strong> for å lage en nummerert liste eller alternativt <strong> [list=a] [/list] </strong> for en alfabetisk liste. Som med usorterte lister, er elementer spesifisert ved bruker av <strong> [*]</strong>. For eksempel: <br /> <br /> <strong> [list=1] </strong> <br /> <strong> [*]</strong> Gå til butikken <br /> <strong> [*] </strong> Kjøp ny pc <br /> <strong> [*]</strong> Kjeft på pc-en når den kræsjer <br /> <strong> [/list] </strong> <br /> <br /> vil generere følgende: <ol style="list-style-type: decimal;"> <li> Gå til butikken </li> <li> Kjøp ny pc </li> <li> Kjeft på pc når den kræsjer </li> </ol> for en alfabetisert liste du vil bruke: <br /> <br /> <strong> [list=a] </strong> <br /> <strong> [*] </strong> Det første svaralternativet <br /> <strong> [*]</strong> Det andre svaralternativet <br /> <strong> [*]</strong> Det tredje svaralternativet <br/> <strong> [/list] </strong> <br /> <br /> gir <ol style="list-style-type: lower-alpha"> <li> Det første svaralternativet </li> <li> andre svaralternativet </li> <li> tredje svaralternativet </li> </ol>'
	),
	// This block will switch the FAQ-Questions to the second template column
	array(
		0 => '--',
		1 => '--'
	),
	array(
		0 => '--',
		1 => 'Lage linker'
	),
	array(
		0 => 'Link til en annen site',
		1 => 'phpBB BBCode støtter en rekke metoder for å lage URIer (Uniform Resource Indicators) bedre kjent som URLer. <ul> <li> Den første av disse bruker <strong> [url=] [/url] </strong> taggene, uansett hva du skriver etter = tegnet vil føre til at innholdet mellom taggene opptrer som en URL. For eksempel for å linke til phpBB.com kan du bruke: <br /> <br /> <strong> [url=http://www.phpbb.com/] </strong> Besøk phpBB <strong> [/url ] </strong> <br /> <br /> Dette vil generere følgende link, <a href="http://www.phpbb.com/"> Besøk phpBB! </a> Legg merke til at linken åpnes i samme vindu eller et nytt vindu, avhengig av brukerens innstillinger i nettleseren </li> <li> Hvis du ønsker at selve URL vises som en link kan du gjøre dette ved å bruke: <br /> <br /> <strong> [url] </strong> http://www.phpbb.com/ <strong> [/url] </strong> <br /> <br /> Dette vil generere følgende link, <a href="http://www.phpbb.com/ "> http://www.phpbb.com/ </a> </ li> <li>I tillegg har phpBB en funksjon som kalles <i> Magic Links </i>, som vil konverterer alle korrekt formaterte URLer til linker, du trenger å ikke engang å skrive http:// først. For eksempel skriver du www.phpbb.com i innlegget ditt vil dett automatisk føre til <a href="http://www.phpbb.com/"> www.phpbb.com </ a> blir resultatet når du vise meldingen. </li> <li> Det samme gjelder tilsvarende for e-postadresser, du kan enten spesifisere en adresse eksplisitt for eksempel: <br /> <br /> <strong> [email] </strong>no.one@omene.adr <strong> [/email] </strong> <br /> <br /> som gir følgende resultat <a href="mailto:no.one@domain.adr"> no.one@domain.adr</a> eller du kan bare skrive no.one@domain.adr i meldingen og det vil automatisk bli konvertert når du viser den. </li> </ul> Som med alle andre BBCode tagger kan du bruke URL rundt noen av de andre kodene eksempel <strong> [img] [/img] </strong> (se neste seksjon), <strong> [b] [/b] </strong>, etc. Som med formateringstagger er det opp til deg å sikre korrekt rekkefølge på taggene, for eksempel <br /><br /><strong>[url=http://www.google.com/][img]</strong>http://www.google.com/intl/en_ALL/images/logo.gif<strong>[/url][/img]</strong><br /><br /> Er <span style="font-weight: underline"> ikke </span> riktig og kan føre til at innlegget ditt blir slettet så vær forsiktig.'
	),
	array(
		0 => '--',
		1 => 'Vise bilder og filer i innlegg'
	),
	array(
		0 => 'Legge til bilder i et innlegg',
		1 => 'phpBB BBCode har en tagg for å vise bilder i innleggene dine. To svært viktige ting å huske når du bruker denne tag er: mange brukere setter ikke pris på massevis av bilder i et innlegg og for det andre bildet du viser må allerede være tilgjengelig på internett (det kan ikke eksistere bare på datamaskinen din, med mindre den er en webserver!). For å vise et bilde må du omgir URLen som peker til bildet med <strong> [img] [/img] </strong>. For eksempel: <br /> <br /> <strong> [img] </strong> http://www.google.com/intl/en_ALL/images/logo.gif <strong> [/img] </strong > <br /> <br /> Som nevnt i URL avsnittet ovenfor kan du omgi et bilde med <strong> [url] [/url] </strong>-koden hvis du ønsker det, f.eks <br /><br /><strong>[url=http://www.google.com/][img]</strong>http://www.google.com/intl/en_ALL/images/logo.gif<strong>[/img][/url]</strong><br /><br /> ville generere: <br /><br /><a href="http://www.google.com/"><img src="http://www.google.com/intl/en_ALL/images/logo.gif" alt="" /></a>'
	),
	array(
		0 => 'Legge til vedlegg i et innlegg',
		1 => 'Vedlegg kan nå plasseres i hvilke som helst del av et innlegg med den nye <strong> [attachment=] [/attachment] </strong> BBCode, hvis vedleggs funksjonaliteten er aktivert av en administrator, og hvis du får de riktige tillatelser til å opprette vedlegg. Når du skriver et innlegg vil du se en rullgardinmeny (henholdsvis en knapp) for vedlegg.'
	),
	array(
		0 => '--',
		1 => 'Annet'
	),
	array(
		0 => 'Kan jeg lage egne BBCode-tagger?',
		1 => 'Hvis du er administrator på dette forumet og har de nødvendige tillatelsene, kan du legge til ytterligere BBCoder gjennom Custom BBCoder seksjonen.'
	)
);

?>