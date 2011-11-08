<?php
/**
*
* help_faq [Norwegian Bokmaal]
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
		1 => 'Innloggings- og registreringsproblemer'
	),
	array(
		0 => 'Hvorfor kan jeg ikke logge meg inn?',
		1 => 'Det er flere grunner til at dette kan skje. Først må du kontrollere at brukernavn og passord er riktig. Hvis de er, ta kontakt med administrator for å sjekke at du ikke har blitt utestengt. Det er også mulig at forumet har en feilkonfigurering på sin side, som de må ordne.'
	),
	array(
		0 => 'Hvorfor må jeg registrere meg?',
		1 => 'Det er ikke sikkert du må, det er opp til administratoren av forumet om du må registrere deg for å skrive innlegg. Men, registrering vil gi deg tilgang til flere funksjoner som ikke er tilgjenglig for en gjestebruker slik som å velge et avatar bilde, private meldinger, e-post til andre brukere, brukergruppe abonnement, osv. Det tar bare et par minutter å registrere seg så det anbefales at du gjør det.'
	),
	array(
		0 => 'Hvorfor blir jeg logget ut automatisk?',
		1 => 'Hvis du ikke haker av <em>Logg meg på automatisk</em> boksen når du logger inn i forumet, vil du kun bli logget inn for en forhåndsbestemt tid. Dette hindrer andre i å misbruke kontoen din. For og forbli innlogget må du hake av i boksen når du logger inn. Dette er ikke anbefalt dersom du bruker forumet fra en delt datamaskin, for eksempel bibliotek, en internettkafé, et skolenettverk, osv. Hvis du ikke ser denne boksen, skyldes det at administratoren har deaktivert denne funksjonen.'
	),
	array(
		0 => 'Hvordan kan jeg forhindre at brukernavnet mitt blir vist i listen over påloggede brukere?',
		1 => 'I brukerkontrollpanelet under "Forumpreferanser" vil du finne valget <em>skjul din online-status </em>. Aktiver dette alternativet med <samp>Ja</samp> og du vil kun sees av administratorer, moderatorer og deg selv. Du vil bli registrert som en skjult bruker.'
	),
	array(
		0 => 'Jeg har glemt passordet mitt!',
		1 => 'Ikke få panikk! Ditt passord kan ikke hentes, men kan det lett bli nullstilt. Besøk logg inn siden og klikk <em>Jeg har glemt passordet mitt</em>. Følg instruksjonene og du skal kunne logge på igjen om kort tid.'
	),
	array(
		0 => 'Jeg har registrert meg, men kan ikke logge inn!',
		1 => 'Først sjekk ditt brukernavn og passord. Dersom de er riktige, kan en av to ting ha skjedd. Hvis COPPA support er aktivisert og du er under 13 år ved registreringen, må du følge instruksjonene du mottok. Noen forumer krever at alle nye registreringer skal aktiviseres, enten av deg eller av en administrator før du kan logge inn, dette fikk du informasjonen om ved registreringen. Hvis du mottok en e-post, følg instruksjonene. Hvis du ikke mottok en e-post, kan du har oppgitt feil e-postadresse eller e-posten kan ha blitt plukket opp av en spam filter. Hvis du er sikker på at e-postadressen du oppgav er riktig, prøv å kontakte en administrator.'
	),
	array(
		0 => 'Jeg har registrert meg tidligere, men kan ikke logge inn mer?!',
		1 => 'Forsøk å finne e-posten sendt til deg når du først registrert, sjekk ditt brukernavn og passord og prøv igjen. Det er mulig en administrator har slettet eller deaktivert din konto av en eller annen grunn. Mange administratorene sletter brukere som ikke har skrevet innlegg på en lang stund for å redusere størrelsen på databasen. Hvis dette har skjedd, kan du registrere deg igjen og blir mer involvert i diskusjoner.'
	),
	array(
		0 => 'Hva er COPPA?',
		1 => 'COPPA, eller Child Online Privacy and Protection Act av 1998, er en lov i USA som krever at nettsider som potensielt kan samle informasjon fra mindreårige under 13 år, må innhente foreldrenes samtykke før dette kan skjer. Denne loven gjelder ikke for norske statsborgere. Vær oppmerksom på at phpBB Group ikke kan gi juridiske råd og ikke er et kontaktpunkt for juridiske bekymringer av noe slag, unntatt som beskrevet nedenfor.',
	),
	array(
		0 => 'Hvorfor kan jeg ikke registrere meg?',
		1 => 'Det er mulig at administrator har blokkert din IP-adresse eller forbudt brukernavnet du prøver å registrere. Nettstedets eier kan også ha deaktivert registrering for å hindre nye besøkende i å registrere seg. Kontakt en administrator for assistanse.',
	),
	array(
		0 => 'Hvilke funksjon har "Slett alle forumets informasjonskapsler"?',
		1 => 'Denne funksjonen vil slette alle informasjonskapsler (cookies) laget av phpBB. Hvis du har problemer med å logge inn eller ut, kan det hjelpe slette informasjonskapslene. phpBB bruker informasjonskapsler for å identifisere deg og holde deg innlogget på forumet. Hvis administratoren har aktivert funksjonen, kan informasjonskapsler også brukes til å lagre hvilke emner du har lest.',
	),
	array(
		0 => '--',
		1 => 'Bruker innstillinger'
	),
	array(
		0 => 'Hvordan endrer jeg mine innstillinger?',
		1 => 'Hvis du er en registrert bruker, blir alle innstillingene lagret i databasen. For å forandre dem, kan du gå til Brukerkontrollpanel, vanligvis plassert øverst på siden. Dette vil gi deg mulighet til å endre alle dine innstillinger.'
	),
	array(
		0 => 'Klokken er ikke riktig!',
		1 => 'Klokken er antakeligvis riktig, men tiden du ser kan være i en annen tidssone enn den du oppholder deg i. Hvis dette er tilfelle, kan du endre tidssonen i Brukerkontrollpanelet til ditt område, f.eks. London, Paris, New York, Sydney, osv. Kun registrerte brukere kan forandre tidssonen. Dersom du ikke er registrert, er dette et fint tidspunkt å registrere deg.'
	),
	array(
		0 => 'Jeg har forandret tidssonen og tiden er fortsatt feil!',
		1 => 'Hvis du er sikker på at du har satt tidssonen og sommertidsinnstillingen riktig og tiden fortsatt er feil, så ligger feilen sannsynligvis på serveren. Vennligst kontakt en administrator for å løse problemet.'
	),
	array(
		0 => 'Mitt språk er ikke i listen!',
		1 => 'Enten at administratoren ikke har installert språket eller at ingen har oversatt forumet til ditt språk. Prøv å spørre administratoren om han/hun kan installere språket du trenger. Hvis språket pakken ikke finnes, lag gjerne en ny oversettelse. Mer informasjon finner du på phpBB-gruppen sitt nettsted (se lenke nederst på siden.)'
	),
	array(
		0 => 'Hvordan viser jeg et bilde sammen med mitt brukernavn?',
		1 => 'Det er to bilder som kan vises sammen med brukernavnet når du ser på innleggene. Ett av dem kan være et bilde som viser din rangering, vanligvis i form av stjerner, blokker eller prikker som indikerer hvor mange innlegg du har postet eller din status i forumet. Det andre er som regel et større bilde som er kalt en avatar og er vanligvis et unikt eller personlig bilde til hver bruker. Det er opp til administratoren å aktivisere avatarer, samt å velge på hvilken måte avatarer kan gjøres tilgjengelig. Dersom du ikke får til å bruke avatarer, kontakt en administrator og spørre dem om hvorfor.'
	),
	array(
		0 => 'Hva er min rangering, og hvordan endrer jeg den?',
		1 => 'Rangeringen, som vises under ditt brukernavn, indikerer antall innlegg du har postet eller identifisere spesielle brukere, f.eks moderatorer og administratorer. Vanligvis kan du ikke direkte endre ordlyden i forumets rangering da de er satt av administratoren. Vennligst ikke utnytt forumet ved å skrive unødvendig bare for å øke din rangering. De fleste forumer vil ikke tolerere dette, og moderatorene eller administratorene vil senke innleggsantallet ditt.'
	),
	array(
		0 => 'Når jeg trykker på en brukers e-post, blir jeg bedt om å logge inn?',
		1 => 'Kun registrerte brukere kan sende e-post til andre via den innebygde e-post funksjonen, og bare hvis administratoren har aktivert denne funksjonen. Dette for å hindre mistenkelig bruk av e-postsystemet av anonyme brukere.'
	),
	array(
		0 => '--',
		1 => 'Emner og innlegg'
	),
	array(
		0 => 'Hvordan lager jeg et nytt emne i forumet?',
		1 => 'For å legge inn et nytt emne i ett av forumene, går du først til det relevante forumet og klikker deretter på knappen merket "Nytt emne". I de fleste tilfeller må du være registrert for å kunne lage nye emner. En liste over dine rettigheter i hvert forum er tilgjengelig nederst på siden.'
	),
	array(
		0 => 'Hvordan endrer eller sletter jeg et innlegg?',
		1 => 'Med mindre du er administrator eller moderator kan du kun endre eller slette dine egne innlegg. Du kan endre et innlegg ved å klikke på Endre knappen for det relevante innlegget, noen ganger kun for et begrenset tidsrom etter at innlegget ble skrevet. Dersom noen allerede har svart på innlegget, vil du finne en liten tekst nedenfor innlegget når du kommer tilbake til temaet, som viser antall ganger innlegget er endret sammen med dato og klokkeslett. Dette vil kun vises hvis noen har skrevet et svar, det vil ikke vises hvis en moderator eller administrator redigert innlegget, men de kan skrive et notat om hvorfor de har redigert innlegget på eget skjønn. Vær oppmerksom på at vanlige brukere ikke kan slette et innlegg etter at noen har svart.'
	),
	array(
		0 => 'Hvordan legger jeg til en signatur i innleggene mine?',
		1 => 'For å legge til en signatur i et innlegg må du først lage en i brukerkontrollpanelet. Når den er laget, kan du merke <em>Legg ved signatur</em> boksen på innleggsiden for å legge til signaturen din. Du kan også legge til en signatur som standard i alle dine innlegg ved å hake av knappen i profilen din. Hvis du gjør det, kan du fortsatt hindre at en signatur blir lagt til i individuelle innlegg ved og haken av Legg ved signatur boksen når du skriver innlegget.'
	),
	array(
		0 => 'Hvordan lager jeg en avstemning?',
		1 => 'Når du skriver en ny tråd eller redigerer det første innlegget i et emne, fyll ut "Lag avstemning" delen nedenfor innlegget, hvis du ikke kan se dette, har du ikke rettigheter til å lage avstemninger. Skriv en tittel og minst to alternativene i de aktuelle feltene, sørg for at hvert alternativ er på en egen linje i tekstområdet. Du kan også angi hvor mange alternativer brukere kan velge under avstemning under "Antall alternativer per bruker", en frist i dager for avstemningen (0 for uendelig varighet) og til slutt muligheten til å tillate brukere å endre sine stemmer.'
	),
	array(
		0 => 'Hvorfor kan jeg ikke legge til flere alternativer i avstemningen?',
		1 => 'Grensen for svaralternativer er satt av administratoren. Hvis du føler at du trenger å legge til flere alternativer, enn det tillatte antallet, ta kontakt med administratoren.'
	),
	array(
		0 => 'Hvordan endrer eller sletter jeg en avstemning?',
		1 => 'Som med innlegg kan avstemningen bare bli redigert av den som skrev det originale innlegget, moderatorer eller administrator. For å endre en avstemning, klikk for å redigere det første innlegget i temaet, dette vil alltid inneholde avstemningen. Dersom ingen har avlagt en stemme kan brukeren slette avstemningen eller endre svaralternativene. Men hvis medlemmer har stemt, kan bare moderatorer og administratorer redigere eller slette den. Dette hindrer at noen jukser ved å bytte valg halvveis inne i avstemningen.'
	),
	array(
		0 => 'Hvorfor har jeg ikke tilgang til et forum?',
		1 => 'Enkelte forumer kan være begrenset til noen brukere eller grupper. For å lese, poste eller utføre en annen handling trenger du spesielle tillatelser. Ta kontakt med en moderator eller administratoren for å gi deg tilgang.'
	),
	array(
		0 => 'Hvorfor kan jeg ikke legge ved vedlegg?',
		1 => 'Vedlegg tillatelser er gitt på en per forum, per gruppe, eller per bruker basis. Administratoren har kanskje ikke tillatt vedlegg i det spesifikke forumet du skriver i, eller kanskje bare visse grupper kan legge til vedlegg. Kontakt administratoren hvis du er usikker på hvorfor du ikke klarer å legge til vedlegg.'
	),
	array(
		0 => 'Hvorfor har jeg fått en advarsel?',
		1 => 'Hver administrator har sitt eget sett med regler for deres nettsted. Hvis du har brutt en regel, kan du få utstedt en advarsel. Vær oppmerksom på at dette er administratorenes avgjørelse, og phpBB-gruppen har ingenting å gjøre med advarsler på en gitt side. Kontakt administratoren hvis du er usikker på hvorfor du har fått en advarsel.'
	),
	array(
		0 => 'Hvordan kan jeg rapportere innlegg til en moderator?',
		1 => 'Hvis administratoren har tillatt det, bør du se en knapp for rapportering av innlegg ved siden av innlegget du ønsker å rapportere. Ved å klikke på denne vil det lede deg gjennom de nødvendige skritt for å rapportere innlegget.'
	),
	array(
		0 => 'Hva brukes "Lagre"-knappen til, som vises når jeg skriver et innlegg?',
		1 => 'Dette tillater deg å lagre meldinger slik at de kan fylles ut og sendes på et senere tidspunkt. For å hente opp en lagret meldinger, besøke Brukerkontrollpanel.'
	),
	array(
		0 => 'Hvorfor må innlegget mitt godkjennes?',
		1 => 'Forumets administrator kan ha valgt at alle innlegg i forumet du skriver i kreve godkjenning før de vises. Det er også mulig at administratoren har plassert deg i en gruppe av brukere som gjør at dine innlegg må godkjennes før visning. Vennligst kontakt administratoren for ytterligere detaljer.'
	),
	array(
		0 => 'Hvordan flytter jeg emnet mitt til toppen?',
		1 => 'Ved å klikke på linken "Flytt til toppen" når du leser et emne, kan du flytte emnet til toppen av emnelisten. Hvis du ikke kan se koblingen, kan det være at dette alternativet ikke er aktivert eller at tiden som kreves før dette er tillatt ikke har gått. Du kan også flytte emnet øverst ved å svare på emnet. Men pass på at du følger forumets regler når du gjør dette.'
	),
	array(
		0 => '--',
		1 => 'Formatering og emnetyper'
	),
	array(
		0 => 'Hva er BBCode/BBkoder?',
		1 => 'BBKode er en variasjon av HTML. Om BBKode kan brukes i forumet, er bestemt av administratoren. Du kan også deaktivere BBKode i et innlegg når du skriver eller endrer innlegget. BBKode ligner på HTML i formateringen, men taggene er omringet av firkantparenteser [ og ] i stedet for &lt; og &gt; og gir en bedre kontroll over hvordan noe blir vist. Mer informasjon om BBkode finner du i guiden det blir lenket til fra siden der du skriver innlegget ditt.'
	),
	array(
		0 => 'Kan jeg bruke HTML?',
		1 => 'Nei, det er ikke mulig å bruke HTML på dette. De fleste ting som kan utføres ved hjelp av HTML kan utføres med BBKode i stedet.'
	),
	array(
		0 => 'Hva er smil?',
		1 => 'Smil er små bilder som kan brukes til å uttrykke følelser ved å bruke en kort kode, f.eks :) Betyr glad,:( betyr trist. Hele listen av smil kan sees på innleggsiden. Prøv og begrense bruken av smil, da disse kan gjøre et innlegg uleselig og en moderator kan redigere dem bort eller slette innlegget helt. Forum administrator kan også ha satt en grense for hvor mange smilefjes du kan bruke i et innlegg.'
	),
	array(
		0 => 'Kan jeg bruke bilder?',
		1 => 'Ja, du kan bruke bilder i dine innlegg. Hvis administratoren har tillatt vedlegg, kan du være i stand til å laste opp bilder til forumet. Ellers må du linke til et bilde som ligger på en offentlig Internett server, f.eks http://www.example.com/my-picture.gif. Du kan ikke linke til et bilde på din egen PC (med mindre det er en offentlig tilgjenglig server) eller bilder lagret bak passordmekanismer, som f.eks hotmail eller yahoo postkasser, passordbeskyttede sider, osv. For å vise et bilde kan bruke BBKode [img] taggen.'
	),
	array(
		0 => 'Hva er globale annonseringer?',
		1 => 'Globale annonseringer inneholder viktig informasjon og bør leses snarest mulig. De vil vises på toppen av alle forumene og i Brukerkontrollpanelet. Global kunngjøring tillatelser er gitt av administratoren.'
	),
	array(
		0 => 'Hva er annonseringer?',
		1 => 'Annonseringer er ofte viktig informasjon for forumet du nå leser og bør leses snarest mulig. Annonseringer vises øverst på alle sidene i det forumet de er postet. Som med globale annonseringer, er tillatelser gitt av administratoren.'
	),
	array(
		0 => 'Hva er prioriterte emner?',
		1 => 'Prioriterte emner i forumet vises under annonseringene og kun på den første siden. De er som regel ganske viktige, så de bør leses snarest mulig. Som med kunngjøringer og globale annonseringer, er prioriterte tema tillatelser gitt av administratoren.'
	),
	array(
		0 => 'Hva er stengte emner?',
		1 => 'Stengte emner er emner der brukere ikke lenger kan besvare, og eventuelle avstemninger er automatisk avsluttet. Temaer kan bli avsluttet av mange grunner, og stengt av enten moderatoren eller administratoren. Du kan også være i stand til å stenge dine egene emner, avhengig av hvilke rettigheter du er gitt av administratoren.'
	),
	array(
		0 => 'Hva er emneikoner?',
		1 => 'Emneikoner er bilder valgt av forfatteren, forbundet med innlegg for å indikere dets innhold. Muligheten til å bruke emneikoner er avhengig av hvilke rettigheter administratoren har gitt.'
	),
	// This block will switch the FAQ-Questions to the second template column
	array(
		0 => '--',
		1 => '--'
	),
	array(
		0 => '--',
		1 => 'Brukernivåer og grupper'
	),
	array(
		0 => 'Hva er en administrator?',
		1 => 'Administratorer er medlemmer som er tildelt den høyeste grad av kontroll over hele forumet. Disse medlemmene kan kontrollere alle funksjoner for forumets drift, inkludert rettigheter, utestenge brukere, lage brukergrupper eller moderatorer osv, avhengig av forumets grunnlegger og hvilke rettigheter han/hun har gitt de andre administratorene. De kan også ha fulle moderator rettighet i alle forumene, avhengig av innstillingene gjort av forumets grunnlegger.'
	),
	array(
		0 => 'Hva er en moderator?',
		1 => 'Moderatorer er enkeltpersoner (eller grupper av brukere) som skal overvåke forumet fra dag til dag. De har myndighet til å redigere eller slette innlegg og låse, låse opp, flytte, slette og dele temaer i det forumet de modererer. Vanligvis er moderatorer der for å hindre brukere fra å gå utenfor tema eller skrive upassende eller støtende innlegg.'
	),
	array(
		0 => 'Hva er en brukergruppe?',
		1 => 'Brukergrupper er grupper av brukere som forumet kan deles inn i for å forenkle arbeidet til administratorene. Hver bruker kan høre til flere grupper og hver gruppe kan bli gitt individuelle rettigheter. Dette gjør det lett for administratoren å endre tillatelser for mange brukere på en gang, som moderator rettigheter eller å gi brukere tilgang til et privat forum.'
	),
	array(
		0 => 'Hvor finner jeg brukergruppene og hvordan blir jeg medlem av en?',
		1 => 'Du kan se alle brukergruppene via "Grupper"-linken i Brukerkontrollpanelet. Hvis du ønsker å bli medlem av en, fortsetter ved å klikke på riktig knapp. Ikke alle grupper er offentlig tilgjengelige. Noen kan kreve godkjenning for å delta, noen kan være stengt og noen kan til og med ha skjult medlemskap. Dersom gruppen er åpen, kan du bli medlem ved å klikke på riktig knapp. Hvis en gruppe krever godkjenning for og delta kan du be om å bli med ved å klikke på riktig knapp. Gruppeleder må godkjenne din forespørsel og kan spørre hvorfor du vil bli medlem av gruppen. Vennligst godta gruppemoderatorens svar hvis de avviser deg, de har helt sikkert sine grunner.'
	),
	array(
		0 => 'Hvordan blir jeg leder av en brukergruppe?',
		1 => 'En gruppemoderator er vanligvis tildelt når Brukergrupper blir startet av administratoren. Hvis du er interessert i å starte en brukergruppe, bør ditt første kontaktpunkt være administrator, prøv å sende en privat melding.',
	),
	array(
		0 => 'Hvorfor vises enkelte brukergrupper i en annen farge?',
		1 => 'Det er mulig for administratorene å tildele forskjellige farger til medlemmene av en brukergruppe for å gjøre det enklere å identifisere medlemmene av denne gruppen.'
	),
	array(
		0 => 'Hva er en "Standardgruppe"?',
		1 => 'Hvis du er medlem av mer enn en brukergruppe, brukes standardgruppen å bestemme hvilken gruppe farge og gruppe rang som skal vises for. Administratoren kan gi deg tillatelse til å endre standard brukergruppe via Brukerkontrollpanelet.'
	),
	array(
		0 => 'Hva er “Forumledelse” linken?',
		1 => 'Denne siden gir deg navnene på personene bak dette forumet som administratorer, moderatorer og hvilke forumer disse modererer.'
	),
	array(
		0 => '--',
		1 => 'Private meldinger'
	),
	array(
		0 => 'Jeg kan ikke sende private meldinger!',
		1 => 'Det er tre grunner til dette, du er ikke registrert og/eller ikke logget inn, administratoren har deaktivert private meldinger for hele forumet eller administratoren har stoppet deg fra å sende meldinger. Kontakt en administrator for mer informasjon.'
	),
	array(
		0 => 'Jeg fortsetter å få uønskede private meldinger!',
		1 => 'Du kan blokkere en bruker fra å sende deg private meldinger ved hjelp av melding reglene i brukerkontrollpanelet. Hvis du fortsetter å motta uønskede private meldinger fra en bestemt bruker, informer en av administratorene, de har makt til å forhindre en bruker fra å sende private meldinger.'
	),
	array(
		0 => 'Jeg har mottatt spam, upassende eller støtende e-post fra noen på dette forumet!',
		1 => 'Vi beklager å høre dette. E-post funksjonen i dette forumet har en sikkerhetsmekanisme for å prøve å spore brukere som sender slike meldinger, så send en e-post til administratoren med en full kopi av e-posten du mottok. Det er veldig viktig at du inkluderer toppen (header) da denne inneholder detaljer om hvilken bruker som sendte e-post. Administratoren kan da ta affære.'
	),
	array(
		0 => '--',
		1 => 'Venner og Blokkerte brukere'
	),
	array(
		0 => 'Hva inneholder listene Venner og Blokkerte brukere?',
		1 => 'Du kan bruke disse listene til å organisere andre forummedlemmer. Brukere du legger som venner vil bli listet opp i brukerkontrollpanelet slik at du raskt kan se om disse er pålogget og kan sende dem private meldinger. Med forbehold om støtte i malen, kan innlegg fra disse brukerne også bli markert. Hvis du legger til en bruker i Blokkerte brukere listen, vil alle innlegg de være skjult som standard.'
	),
	array(
		0 => 'Hvordan kan jeg legge til/fjerner brukere fra listen over venner og blokkerte brukere?',
		1 => 'Du kan legge til brukere i listene dine på to måter. Innenfor hver brukers profil, er det en lenke for å legge dem til enten Venner eller Blokkerte brukere. Alternativt fra din Brukers kontrollpanel, kan du direkte legge til brukere ved å oppgi brukernavnene. Du kan også fjerne brukere fra dine lister på samme måte.'
	),
	array(
		0 => '--',
		1 => 'Søking i forumet'
	),
	array(
		0 => 'Hvordan kan jeg søke i forumet?',
		1 => 'Skriv inn et søkeord i søkefeltet som du finner på hovedsiden, underforum eller emne sider. Avansert søk kan gjøres ved å klikke på "Avansert Søk" linken som er tilgjengelig på alle sider på forumet. Hvordan du får tilgang til søkefunksjonen kan avhenge av stilen som brukes.'
	),
	array(
		0 => 'Hvorfor gir ikke søket mitt noe resultat?',
		1 => 'Søket ditt var sannsynligvis for vagt og inkluderte mange vanlige ord som derfor ikke indekseres av phpBB3. Vær mer konkret og bruke alternativene tilgjengelige i Avansert søk.'
	),
	array(
		0 => 'Hvorfor gir søket mitt en blank side!?',
		1 => 'Ditt søk returnerte flere resultater enn webserveren kunne håndtere. Bruk "Avansert søk" og vær mer spesifikk i begrepene som brukes og forumene det skal søkes i.'
	),
	array(
		0 => 'Hvordan søker jeg etter medlemmer?',
		1 => 'Gå til medlemssiden og klikk på "Søk etter medlem" linken. Der får du opp et søkeområde der du kan spesifisere søket ditt.'
	),
	array(
		0 => 'Hvordan kan jeg finne mine egne innlegg og emner?',
		1 => 'Dine egne innlegg kan bli funnet enten ved å klikke på "Søk etter brukerens innlegg" i brukerkontrollpanelet eller via din egen profilside. For å søke etter emner, bruk den vanlige avanserte søkesiden og fyll i de ulike alternativene riktig.'
	),
	array(
		0 => '--',
		1 => 'Emneabonnementer og bokmerker'
	),
	array(
		0 => 'Hva er forskjellen på bokmerker og abonnementer?',
		1 => 'Bokmerkene i phpBB3 fungerer på samme måte som bokmerker i nettleseren. Du blir ikke varslet når det finnes en oppdatering, men du kan komme tilbake til temaet senere. Abonnering derimot, vil varsle deg når det er en oppdatering i emnet eller forumet du abonnerer på, via din valgte metode eller metoder.'
	),
	array(
		0 => 'Hvordan abonnerer jeg på spesifikke emner eller forumer?',
		1 => 'For å abonnere på et spesifikt forum, klikker du på "Abonner på forumet" linken du finner når du går inn på forumet. For å abonnere på et emne, svar på emnet med abonner boksen merket av, eller klikk på "Abonner på emnet" linken i selve emnet.'
	),
	array(
		0 => 'Hvordan avslutter jeg mine abonnement?',
		1 => 'For å avslutte et abonnement går du til brukerkontrollpanelet og følg linken til dine abonnementer.'
	),
	array(
		0 => '--',
		1 => 'Vedlegg'
	),
	array(
		0 => 'Hva slags vedlegg er tillatt på dette forumet?',
		1 => 'Forumets administratorer kan tillate eller forbyr visse filtyper. Hvis du er usikker på hva som er lov å laste opp, ta kontakt med administratoren for å få hjelp.'
	),
	array(
		0 => 'Hvordan finner jeg alle vedleggene mine?',
		1 => 'For å finne du listen over alle vedlegg du har lastet opp, går du til brukerkontrollpanelet og følger linken til vedlegg delen.'
	),
	array(
		0 => '--',
		1 => 'phpBB3 spørsmål'
	),
	array(
		0 => 'Hvem skrev koden til dette forumet?',
		1 => 'Denne programvaren (i sin umodifiserte form) er produsert, lansert og har copyright <a href="http://www.phpbb.com/"> phpBB Group </a>. Den er gjort tilgjenglig under GNU General Public Licence og kan fritt distribuert. Se linken for mer informasjon.'
	),
	array(
		0 => 'Hvorfor er ikke X funksjonen tilgjenglig?',
		1 => 'Denne programvaren er skrevet og lisensiert av phpBB Group. Ønsker du at en funksjon legges til, kan du besøke phpbb.com nettsiden og se hva phpBB Group har å si. Vennligst ikke send funksjonsetterspørseler til forumet hos phpbb.com, gruppen bruker SourceForge til å håndtere nye funksjoner. Vennligst les igjennom forumene for å se om vi allerede har ønsket funksjon under vurdering eller i utvikling og følg prosedyren angitt der.'
	),
	array(
		0 => 'Hvem kontakter jeg angående støtende og/eller rettslige saker relatert til dette forumet?',
		1 => 'Hvemsomhelst av de administratorene som er listet på "Forumledelse"-siden bør være et hensiktsmessig kontaktpunkt for dine klager. Hvis dette ikke får noen respons så bør du kontakte eieren av domenet (gjør et <a href="http://www.google.com/search?q=whois"> whois-oppslag </a>) eller, hvis dette er på en gratis tjeneste (for eksempel Yahoo, free.fr, f2s.com, etc.), administrator eller misbruk avdeling av denne tjenesten. Vær oppmerksom på at phpBB Group har <strong>absolutt ingen jurisdiksjon</strong> og kan ikke på noen måte bli holdt ansvarlig over hvordan, hvor eller av hvem dette forumet blir brukt. Ikke kontakt phpBB Group i forbindelse med ulovlige aktiviteter, eller for å stoppe uansvarlige brukere eller ærekrenkende kommentarer, hvis disse <strong>ikke er direkte relatert</strong> med www.phpbb.com hjemmeside eller programvaren til phpBB. Hvis du sender en e-post til phpBB Group <strong>angående tredjeparts</strong> bruk av denne programvaren, kan du vente deg et avvisende svar eller intet svar overhodet.'
	)
);

?>