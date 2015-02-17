<?php
/**
*
* qi [Dutch]
*
* @package quickinstall
* @copyright (c) 2007 phpBB Limited
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

/**
* @ignore
*/
if (!defined('IN_QUICKINSTALL'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
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
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'ABOUT_QUICKINSTALL' 	=> 'Over phpBB3 QuickInstall',
	'ABOUT_SECTIONS'		=> 'Over secties',
	'ADMIN_EMAIL' 			=> 'E-mailadres beheerder',
	'ADMIN_EMAIL_EXPLAIN' 	=> 'E-mailadres beheerder om te gebruiken op jouw forums',
	'ADMIN_NAME' 			=> 'Gebruikersnaam beheerder',
	'ADMIN_NAME_EXPLAIN' 	=> 'De standaard gebruikersnaam van de beheerder om te gebruiken op je forums. Dit kan veranderd worden als je forums gemaakt zijn.',
	'ADMIN_PASS' 			=> 'Beheerder wachtwoord',
	'ADMIN_PASS_EXPLAIN' 	=> 'Het standaard beheerder wachtwoord om te gebruiken op je forums. Dit kan veranderd worden als je forums gemaakt zijn.',
	'ADMIN_SETTINGS'		=> 'Beheerder instellingen',
	'ALT_ENV' 				=> 'Alternatieve omgeving',
	'AUTOMOD' 				=> 'AutoMOD',
	'AUTOMOD_EXPLAIN' 		=> 'Zorgt ervoor dat &#34;Installeer Automod&#34; standaard op ja staat.',
	'AUTOMOD_INSTALL' 		=> 'Installeer AutoMOD',

	'BACK_TOP'				=> 'Terug naar boven',
	'BOARD_CONFIG_OPTIONS'	=> 'Forum config opties',
	'BOARD_CONFIG_SETTINGS'	=> 'Forum config instellingen',
	'BOARD_CONFIG_SETTINGS_EXPLAIN'	=> 'De instellingen hieronder zijn algemene instellingen voor je phpBB forums.',	
	'BOARD_DBNAME' 			=> 'Forum database en map naam',
	'BOARD_DESC' 			=> 'Forum omschrijving',
	'BOARD_EMAIL' 			=> 'Forum e-mail',
	'BOARD_EMAIL_EXPLAIN' 	=> 'Afzender e-mail voor jouw aangemaakte forums.',
	'BOARD_NAME' 			=> 'Forum naam',
	'BOARDS'				=> 'Forums',
	'BOARDS_DIR' 			=> 'Forum mappen',
	'BOARDS_DIR_EXPLAIN' 	=> 'De map waar je forums worden aangemaakt. PHP heeft de rechten nodig om in deze map te schrijven.',
	'BOARDS_DIR_MISSING' 	=> 'De map %s bestaat niet of is niet beschrijfbaar.',
	'BOARDS_LIST' 			=> 'Lijst van forums',
	'BOARDS_URL'			=> 'Forum URL instellingen',
	'BOARDS_URL_EXPLAIN'	=> 'URL instellingen naar je forum. Wanneer je een specifieke map in je forum URL instellingen kiest, moet je hier je domeinnaam en/of exacte pad naar je forum aangeven. Als je forum map een exacte pad heeft, kopieer deze dan hier.',

	'CACHE_DIR'				=> 'Cache map',
	'CACHE_DIR_EXPLAIN'		=> 'De map waar quickinstall verschillende bestanden plaatst. PHP moet schrijfpermissies hebben in deze map.',
	'CACHE_DIR_MISSING'		=> 'De map %s bestaat niet of heeft geen schrijfpermissies.',
	'CANNOT_DELETE_LAST_PROFILE'	=> 'Je kan niet het enige profiel dat je hebt verwijderen.',
	'CHANGELOG' 			=> 'Changelog',
	'CHECK_ALL' 			=> 'Selecteer alles',
	'CHUNK_POST'			=> 'Bericht pakketgrootte',
	'CHUNK_POST_EXPLAIN'	=> 'Het aantal berichten dat per query naar de database verzonden wordt.',
	'CHUNK_SETTINGS'		=> 'Pakketgrootte instellingen',
	'CHUNK_SETTINGS_EXPLAIN'=> 'QI probeert het aantal benodigde query&#39;s voor het genereren van berichten, onderwerpen en gebruikers te beperken door het in pakketten uit te voeren. De pakketgrootte heeft effect op de snelheid waarmee een forum wordt aangemaakt. Er is geen perfecte instelling voor iedere situatie. Als je veel ingevulde forums aanmaakt met QI kun je eventueel wat expirementeren met deze instellingen. Te grote pakketten vragen veel geheugen en te kleine pakketten zorgen ervoor dat er teveel aparte query&#39;s gedaan worden, beiden met hun effect op de server. We denken dat de standaardinstellingen het juiste compromis zijn.',
	'CHUNK_TOPIC'			=> 'Onderwerp pakketgrootte',
	'CHUNK_TOPIC_EXPLAIN'	=> 'Het aantal onderwerpen dat per query naar de database verzonden wordt.',
	'CHUNK_USER'			=> 'Gebruikers pakketgrootte',
	'CHUNK_USER_EXPLAIN'	=> 'Het aantal gebruikers dat per query naar de database verzonden wordt.',
	'CONFIG_BUTTON'			=> 'Klik hier om de configuratie te bekijken.',
	'CONFIG_CONVERTED'		=> 'Jouw configuratie is bijgewerkt van de oude stijl met een configuratie file naar de nieuwe stijl en je profiel is opgeslagen. Het is opgeslagen met de naam &quot;default&quot;.<br />Je kan nu verschillende profielen opslaan en dee gebruiken wanneer je een nieuw forum maakt.',
	'CONFIG_EMPTY' 			=> 'De config array was leeg. Dit is mogelijk een bug melding waard.',
	'CONFIG_IS_DISPLAYED'	=> 'Configuratie wordt hieronder getoond. Je kan proberen om deze handmatig te overschrijven in de settingsmap.<br />Zorg dat de bestandsnaam eindigt op &quot;.cfg&quot; bijvoorbeeld &quot;settings/main.cfg&quot;.',
	'CONFIG_NOT_WRITABLE' 	=> 'Het qi_config.php bestand is niet beschrijfbaar.',
	'CONFIG_NOT_WRITTEN'	=> 'Het qi_config.cfg bestand file kan niet worden gemaakt.',
	'CONFIG_WARNING'		=> 'Klik hier om de instellingen te zien. <b>Waarschuwing:</b> Het wachtwoord wordt getoond.',
	'COOKIE_DOMAIN' 		=> 'Cookie domein',
	'COOKIE_DOMAIN_EXPLAIN' => 'Dit zou over het algemeen localhost moeten zijn.',
	'COOKIE_SECURE' 		=> 'Cookie beveiliging',
	'COOKIE_SECURE_EXPLAIN' => 'Zet deze optie alleen aan als je server gebruik maakt van SSL. Indien dit aan staat en SSL niet ondersteund wordt, ontstaan er fouten bij het doorsturen naar pagina’s.',
	'CREATE_ADMIN' 			=> 'Maak beheerder aan',
	'CREATE_ADMIN_EXPLAIN' 	=> 'Selecteer ja als je één beheerder aangemaakt wil hebben, dit zal geen eigenaar worden. Dit wordt tester_1.',
	'CREATE_MOD' 			=> 'Maak moderator aan',
	'CREATE_MOD_EXPLAIN' 	=> 'Selecteer ja als je één globale moderator wil aanmaken. Dit wordt tester_1 of tester_2 als er een beheerder is geselecteerd.',

	'DB_EXISTS' 			=> 'De database %s bestaat al.',
	'DB_PREFIX' 			=> 'Database voorvoegsel',
	'DB_PREFIX_EXPLAIN' 	=> 'Dit wordt voor alle database namen toegevoegd, om te voorkomen dat er databases worden overschreven die niet gebruikt worden door QuickInstall.',
	'DB_SETTINGS'			=> 'Database instellingen',
	'DBHOST' 				=> 'Database server',
	'DBHOST_EXPLAIN' 		=> 'Over het algemeen localhost.',
	'DBMS' 					=> 'Databasetype',
	'DBMS_EXPLAIN' 			=> 'Jouw databasetype. Als je niet zeker bent zet het op MySQL.',
	'DBPASSWD' 				=> 'Database wachtwoord',
	'DBPASSWD_EXPLAIN' 		=> 'Het wachtwoord voor jouw database gebruiker',
	'DBPORT' 				=> 'Database poort',
	'DBPORT_EXPLAIN' 		=> 'Kan meestal leeg gelaten worden.',
	'DBUSER' 				=> 'Database gebruiker',
	'DBUSER_EXPLAIN' 		=> 'Jouw database gebruiker. Dit moet een gebruiker zijn die de rechten heeft om een nieuwe database aan te maken.',
	'DEFAULT_ENV' 			=> 'Standaard omgeving (meeste recente phpBB)',
	'DEFAULT_LANG' 			=> 'Standaardtaal',
	'DEFAULT_LANG_EXPLAIN' 	=> 'Deze taal zal worden gebuikt voor de aangemaakte forums.',
	'DELETE' 				=> 'Verwijder',
	'DELETE_FILES_IF_EXIST' => 'Verwijder bestanden als ze bestaan',
	'DELETE_FILES_IF_EXIST_EXPLAIN'	=> 'Zet &quot;Verwijder bestanden als ze bestaan&quot; standaard aangevinkt bij het aanmaken van forums.',
	'DELETE_PROFILE'		=> 'Verwijder profiel',
	'DELETE_PROFILE_EXPLAIN'=> 'Verwijder de geselecteerde profielen.<br /><strong>Opgelet: Dit kan niet ongedaan gemaakt worden.</strong>',
	'DELETE_SELECTED'	    => 'Verwijder geselecteerde',
	'DIR_EXISTS' 			=> 'De map %s bestaat al.',
	'DIR_URL_SETTINGS'		=> 'map en URL instellingen',
	'DOCS_LONG'			    => 'Documentatie',
	'DROP_DB_IF_EXISTS' 	=> 'Verwijder database als deze bestaat',
	'DROP_DB_IF_EXISTS_EXPLAIN'	=> 'Zet &quot;Verwijder database als deze bestaat&quot; standaard aangevinkt bij het aanmaken van forums.',

	'EMAIL_DOMAIN' 			=> 'E-mail domein',
	'EMAIL_DOMAIN_EXPLAIN' 	=> 'Het e-mail domein om te gebruiken voor de testers. Hun e-mailadres zal tester_x@&lt;domain.com&gt; worden.',
	'EMAIL_ENABLE' 			=> 'E-mail inschakelen',
	'EMAIL_ENABLE_EXPLAIN' 	=> 'Forum breed e-mails inschakelen. Voor een lokaal test forum zal het normaal gesproken uit staan, tenzij je de e-mails wil testen.',
	'EMAIL_SETTINGS'		=> 'E-mail instellingen',
	'ERRORS'				=> 'Er zijn fouten geconstateerd',
	'ERROR_DEL_BOARDS'		=> 'De volgende forums kunnen niet worden verwijderd',
	'ERROR_DEL_FILES'		=> 'De volgende bestanden kunnen niet worden verwijderd',

	'FUNCTIONS_MODS_MISSING'=> '&quot;includes/functions_mods.php&quot; niet gevonden.',
	'FORGOT_THIS'			=> 'JE VERGEET DIT!', // Should be upper case.
	'FROM_README'				=> 'Van readme.txt',

	'GENERAL_ERROR' 		=> 'Algemene fout',
	'GO'					=> 'Go',
	'GO_QI_MAIN'		=> '%sGa naar de QuickInstall hoofdpagina%s',
	'GO_QI_SETTINGS'	=> '%sGa naar instellingen%s',	
	'GRANT_PERMISSIONS'		=> 'Stel permissies in',
	'GRANT_PERMISSIONS_EXPLAIN'	=> '(bijv. 0060 voor schrijven/lezen)',

	'IF_EMPTY_EXPLAIN'		=> 'Wanneer leeg zal de standaard configuratie worden gebruikt.',
	'IF_LEAVE_EMPTY'		=> 'Wanneer je dit niet invult moet je het invullen als je een forum aanmaakt.',
	'IN_SETTINGS' 			=> 'Beheer je QuickInstall instellingen.',
	'INSTALL_STYLES'		=> 'Stijlen installeren',
	'INSTALL_STYLES_EXPLAIN'	=> '&quot;Ja&quot; installeert alle stijlen die gevonden worden in [source]/styles. Maar alleen als de benodigde hoofd stijl aanwezig is.',
	'INSTALL_QI' 			=> 'Installeer QuickInstall',
	'IS_NOT_VALID' 			=> 'Is niet geldig.',

	'LICENSE' 				=> 'Licentie?',
	'LICENSE_EXPLAIN' 		=> 'Deze tool is uitgegeven onder de voorwaarde van de <a href=&#34;license.txt&#34;>GNU General Public License version 2</a>. Dit is voornamelijk, omdat het gebruik maakt van grote delen van phpBB’s code, welke ook is uitgebracht onder deze licentie en vereist dat elke aanpassing hiervan het ook gebruikt. Maar ook omdat het een geweldige licentie is die gratis software gratis houd :).',
	'LOG_INSTALL_INSTALLED_QI'	=> '<strong>Geïnstalleerd met phpBB Quickinstall versie %s</strong>',

	'MAKE_WRITABLE' 		=> 'Maak bestanden volledig beschrijfbaar',
	'MAKE_WRITABLE_EXPLAIN' => 'Stel bestanden, config.php en mappen standaard in op volledig beschrijfbaar. Dit kan worden aangepast als je een forum aanmaakt.',
	'MAKE_WRITABLE_BOARD'	=> 'Maak bestanden publiek schrijfbaar',
	'MAKE_WRITABLE_BOARD_EXPLAIN'	=> '(dit is hetzelfde als permissies 0666 instellen)',
	'MANAGE_BOARDS' 		=> 'Beheer forums',
	'MAX' 					=> 'Maximaal',
	'MIGHT_TAKE_LONG' 		=> '<strong>LET OP:</strong> Het aanmaken van een forum kan een enkele minuten of langer duren, dus bevestig het formulier <strong>niet</strong> tweemaal.',
	'MIN'                   => 'Min',
	'MINOR_MISHAP'			=> 'Ongelukje',
	'MISC_SETTINGS'			=> 'Misc instellingen',

	'NEED_CONVERT'			=> 'Jouw config bestand moet worden geconverteerd naar de nieuwe stijl met profielen. Zorg dat de &quot;settings&quot; directorie bestaat en beschrijfbaar is voor PHP. Klik hierna op bevestig.',
	'NEED_EMAIL_DOMAIN' 	=> 'Een e-maildomein is nodig om testgebruikers aan te maken',
	'NEED_WRITABLE' 		=> 'QuickInstall moet de forum en cache mappen ten alle tijde beschrijfbaar hebben.<br />De qi_config.php moet alleen beschrijfbaar zijn voor de installatie van QuickInstall.',
	'NO' 					=> 'Nee',
	'NO_ALT_ENV' 			=> 'De opgegeven alternatieve omgeving bestaat niet.',
	'NO_ALT_ENV_FOUND'		=> 'De gespecificeerde alternatieve omgeving <strong>%s</strong> bestaat niet.', // %s is the missing environment name
	'NO_AUTOMOD' 			=> 'Automod is niet gevonden in de sources map. Je moet AutoMOD downloaden en de root map kopiëren naar sources/automod, daarna hernoem je root naar automod.',
	'NO_AUTOMOD_TITLE'		=> 'AutoMOD niet gevonden',
	'NO_BOARDS' 			=> 'Je hebt geen forums.',
	'NO_DB' 				=> 'Geen database geselecteerd.',
	'NO_IMPACT_WIN' 		=> 'Deze instelling heeft geen invloed op Windows systemen ouder dan Windows 7.',
	'NO_MODULE' 			=> 'De module %s kan niet worden geladen.',
	'NO_PASSWORD' 			=> 'Geen wachtwoord',
	'NO_PROFILES'			=> 'Geen profielen gevonden.',
	'NO_DBPASSWD_ERR' 		=> 'Je hebt een wachtwoord ingesteld maar geen wachtwoord geselecteerd. Je kunt een wachtwoord niet zowel <strong>hebben</strong> als <strong>Niet hebben</strong>.',
	'NUM_CATS' 				=> 'Aantal categorieën',
	'NUM_CATS_EXPLAIN' 		=> 'Het aantal forum categorieën om aan te maken.',
	'NUM_FORUMS' 			=> 'Aantal forums',
	'NUM_FORUMS_EXPLAIN' 	=> 'Het aantal forums om aan te maken, ze worden gelijkmatig verspreid over de categorieën.',
	'NUM_NEW_GROUP' 		=> 'Nieuw geregistreerd',
	'NUM_NEW_GROUP_EXPLAIN' => 'Het aantal gebruikers om in de groep nieuw geregistreerde gebruikers te plaatsen.<br />Als dit aantal groter is dan het aantal gebruikers, dan zullen alle nieuwe gebruikers komen in de nieuw geregistreerde gebruikers groep.',
	'NUM_REPLIES' 			=> 'Aantal reacties',
	'NUM_REPLIES_EXPLAIN' 	=> 'Aantal reacties. Elk onderwerp krijgt een willekeurig aantal tussen deze maximale en minimale waarde van reacties.',
	'NUM_TOPICS' 			=> 'Aantal onderwerpen',
	'NUM_TOPICS_EXPLAIN' 	=> 'Het aantal onderwerpen om aan te maken in elk forum. Elk forum krijgt een willekeurig aantal tussen deze maximale en minimale waarde.',
	'NUM_USERS' 			=> 'Aantal gebruikers',
	'NUM_USERS_EXPLAIN' 	=> 'Het aantal gebruikers waarmee je forum wordt bevolkt.<br />Ze krijgen de gebruikersnaam Tester_x (x is 1 tot num_users). Ze krijgen allemaal het wachtwoord &#34;123456&#34;',

	'OFF'    				=> 'Aan',
	'ON'     				=> 'Uit',
	'ONLY_30'				=> 'Alleen beschikbaar voor phpBB 3.0.x',
	'ONLY_31'				=> 'Alleen beschikbaar voor phpBB 3.1.x',
	'ONLY_LOCAL' 			=> 'Let op: QuickInstall is alleen bedoeld om lokaal te gebruiken.<br />Het moet niet gebruikt worden op een webserver die te benaderen is via het internet.',
	'ONLY_SUBSILVER'		=> 'Alleen subsilver2',
	'OPTIONS' 				=> 'Opties',
	'OTHER_CONFIG'			=> 'Overige forum configuratie instellingen',
	'OTHER_CONFIG_EXPLAIN'	=> 'Deze instellingen zullen worden bijgwerkt in de config tabel indien ze nog niet bestaan. Zorg dus dat je ze correct spelt. Deze kunnen ook bewerkt worden bij het aanmaken van forums.<br />Één config instelling per regel in een lijst gescheiden met puntkomma\'s &quot;;&quot;. [Config-name; config-setting; dynamic]. Als de instelling niet dynamisch [dynamic] is, dan kan die laatste weggelaten worden. Regels die met een # beginnen worden beschouwd als commentaar en worden daarom niet verwerkt. Voorbeeld:<br />load_tplcompile;1;1<br />session_length;999999<br /># Dit is commentaar',

	'PHPINFO'			    => 'PHP informatie',
	'PHPINFO_EXPLAIN'	    => 'Deze pagina bevat informatie over de geïnstalleerde PHP versie op deze server. Het bevat details van de geladen modules, beschikbare variabelen en standaardinstellingen. Deze informatie kan nuttig zijn bij de diagnose van problemen. LET OP: Hosting bedrijven kunnen de informatie die hier wordt weergegeven om veiligheidsredenen beperken. Er wordt geadviseerd om de informatie op deze pagina niet zomaar te delen, behalve als officiële team members hierom vragen in de support forums.',
	'PLAIN_TEXT'			=> '<strong>Let op</strong>: QI slaat wachtwoorden en gebruikersnamen als tekstbestand op.',
	'POPULATE' 				=> 'Forum bevolken',
	'POPULATE_EXPLAIN' 		=> 'Bevolkt het forum met het aantal gebruikers, forums, berichten en onderwerpen die je hieronder opgeeft. Let er op hoe meer gebruikers, forums, berichten en onderwerpen je wilt, hoe langer het duurt om je forum aan te maken.<br />Al deze instellingen kunnen worden veranderd als je een forum aanmaakt.',
	'POPULATE_MAIN_EXPLAIN' => 'Gebruikers: tester x, Wachtwoord: 123456',
	'POPULATE_OPTIONS' 		=> 'Forumvulling opties',
	'POPULATE_SETTINGS'		=> 'Forumvulling settings',
	'PROFILES'				=> 'Profielen',

	'QI_ABOUT'			    => 'Over',
	'QI_LANG'			    => 'QuickInstall taal',
	'QI_LANG_EXPLAIN' 		=> 'De taal die QuickInstall moet gebruiken. Er moet een map met de naam staan in language/. Deze taal zal ook gebruikt worden als standaard taal voor je forums als deze taal bestaat in sources/phpBB3/language/.',
	'QI_LANG_SETTINGS'	    => 'QuickInstall taal instelling',
	'QI_MANAGE' 			=> 'Beheer forums',
	'QI_MANAGE_ABOUT' 		=> 'Installeer een nieuw forum hier.<br /><br />&quot;forum database en map naam&quot; is het enigste veld dat je moet invullen, de rest wordt ingevuld met de standaardwaardes uit &quot;includes/default_settings.php&quot;.<br /><br />Klik op “Geavanceerde opties” voor meer instellingen.',
	'QI_MANAGE_PROFILE'	    => 'Beheer profielen',
	'QI_TZ' 				=> 'Tijdzone',
	'QI_TZ_EXPLAIN' 		=> 'Jouw tijdzone. Het wordt de standaard tijdzone van aan te maken forums. -1, 0, 1 etc.',
	'QUICKINSTALL' 			=> 'phpBB QuickInstall',

	'REDIRECT' 				=> 'Doorsturen',
	'REDIRECT_EXPLAIN' 		=> 'Doorsturen naar nieuwe forums staat standaard ingesteld op ja.',
	'REDIRECT_BOARD' 		=> 'Naar nieuwe forum doorsturen',
	'REQUIRED' 				=> 'is vereist',
	'RESET' 				=> 'Reset',
	'RETURN_MANAGE'			=> 'Terugkeren naar het tabblad “Beheer forums”',

	'SAVE_PROFILE'			=> 'Opslaan als nieuw profiel',
	'SAVE_PROFILE_EXPLAIN'	=> 'Vul de naam voor een nieuw profiel in. Toegestane karakters zijn A-Z, a-z, 0-9, &quot;-&quot; (min teken), &quot;_&quot; (underscore) en &quot;.&quot; (punt)<br /><strong>Let op: Als een profielnaam reeds bestaat zal deze overschreven worden met het nieuwe profiel.</strong>',
	'SAVE_RESTORE'			=> 'Opslaan/herstellen',
	'SELECT_PROFILE'	    => 'Selecteer profiel',
    'SET_DEFAULT_STYLE'		=> 'Stel standaard stijl in',
	'SET_DEFAULT_STYLE_EXPLAIN'	=> 'Vul de naam van de stijl in die je als standaard stijl wilt instellen. Zou gevonden moeten worden in styles/[style name]/style.cfg. Prosilver wordt als standaard stijl ingesteld indien leeg of als de stijl niet geïnstalleerd kan worden.',
	'SETTINGS_FAILURE' 		=> 'Er waren fouten, kijk in de onderstaande box.',
	'SETTINGS_NOT_WRITABLE'	=> 'De settings map bestaat niet of is niet beschrijfbaar.',
	'SETTINGS_SECTIONS'		=> 'Instelling onderdelen',
	'SETTINGS_SUCCESS' 		=> 'Je instellingen zijn succesvol opgeslagen.',
	'SERVER_COOKIE_SETTINGS'=> 'Server en cookie instellingen',
	'SERVER_NAME' 			=> 'Server naam',
	'SERVER_NAME_EXPLAIN' 	=> 'Dit zou gewoonlijk localhost moeten zijn aangezien QuickInstall <strong>niet</strong> bedoelt is voor publieke servers.',
	'SERVER_PORT' 			=> 'Server poort',
	'SERVER_PORT_EXPLAIN' 	=> 'Standaard &quot;80&quot.',
	'SHOW_CONFIRM'			=> 'Bevestig verwijdering',
	'SHOW_CONFIRM_EXPLAIN'	=> 'Vraag om bevestiging bij het verwijderen van forums en profielen.',
	'SITE_DESC' 			=> 'Omschrijving van de site',
	'SITE_DESC_EXPLAIN' 	=> 'De standaard omschrijving voor jouw forum(s). Dit kan worden aangepast als je forums aanmaakt.',
	'SITE_NAME' 			=> 'Naam van de site',
	'SITE_NAME_EXPLAIN' 	=> 'De standaard site naam die wordt gebruikt voor jouw forum(s). Dit kan worden aangepast als je forums aanmaakt.',
	'SMTP_AUTH' 			=> 'Verificatiemethode voor SMTP',
	'SMTP_AUTH_EXPLAIN' 	=> 'Alleen gebruikt als gebruikersnaam/wachtwoord is opgegeven.',
	'SMTP_DELIVERY' 		=> 'Gebruik SMTP-server voor e-mail',
	'SMTP_DELIVERY_EXPLAIN' => 'Selecteer “Ja” als je e-mails via de opgegeven SMTP-server in plaats van met de lokale mailfunctie wilt of moet versturen.',
	'SMTP_HOST' 			=> 'SMTP-serveradres',
	'SMTP_HOST_EXPLAIN' 	=> 'Het adres van de SMTP-server die je wil gebruiken',
	'SMTP_PASS' 			=> 'SMTP-wachtwoord',
	'SMTP_PASS_EXPLAIN' 	=> 'Voer alleen een wachtwoord in als je SMTP-server dit vereist.',
	'SMTP_PORT' 			=> 'SMTP-serverpoort',
	'SMTP_PORT_EXPLAIN' 	=> 'Wijzig dit alleen als jouw SMTP-server gebruik maakt van een andere poort.',
	'SMTP_USER' 			=> 'SMTP-gebruikersnaam',
	'SMTP_USER_EXPLAIN' 	=> 'Voer alleen een gebruikersnaam in als je SMTP-server dit vereist.',
	'SQLITE_PATH_MISSING'	=> 'Het opgegeven pad naar de database server bestaat niet of is niet beschrijfbaar.',
	'STAR_MANDATORY' 		=> '* = Verplicht',
	'SUBMIT' 				=> 'Verzenden',
	'SUCCESS' 				=> 'Gelukt',
	'SURE_DELETE_PROFILE'	=> 'Weet je zeker dat je dit profiel wilt verwijderen? Dit kan niet ongedaan worden gemaakt.',
	'SURE_DELETE_BOARDS'	=> 'Weet je zeker dat je dit forum of deze forums wilt verwijderen? Dit kan niet ongedaan worden gemaakt.',

	'TABLE_PREFIX' 			=> 'Tabelvoorvoegsel',
	'TABLE_PREFIX_EXPLAIN' 	=> 'Het tabelvoorvoegsel dat word gebruikt voor je forums. Je kan dit aanpassen in de geavanceerde opties als je een nieuw forum aanmaakt.',
	'TEST_CAT_NAME' 		=> 'Test categorie %d',
	'TEST_FORUM_NAME' 		=> 'Test forum %d',
	'TEST_POST_START' 		=> 'Test bericht %d', // This will be on the first line in each post and then filled with lorem ipsum.
	'TEST_TOPIC_TITLE' 		=> 'Test onderwerp %d',
	'THESE_CAN_CHANGE'		=> 'Deze instellingen kunnen worden aangepast bij het aanmaken van een forum.',
	'THIS_CAN_CHANGE'		=> 'Dit kan worden aangepast bij het aanmaken van een forum.',
	'TIME_SETTINGS'			=> 'Tijdinstellingen',

	'UNCHECK_ALL' 			=> 'Deselecteer alles',

	'YES' 					=> 'Ja',

	'WHAT' 					=> 'Wat is QI?',
	'WHAT_EXPLAIN' 			=> 'phpBB3 QuickInstall is een tool om snel een phpBB forum te installeren. Lijkt ons duidelijk... ;-)',
	'WHO_ELSE' 				=> 'Wie nog meer?',
	'WHO_ELSE_EXPLAIN' 		=> '<ul><li>' . implode('</li><li>', array(
		'Credits gaan naar het phpBB team, met name het ontwikkelingsteam dat dit prachtig stukje software heeft gemaakt.',
		'Dank aan het phpBB.com MOD team (met name Josh, aka “A_Jelly_Doughnut”) voor AutoMOD.',
		'Dank aan Mike TUMS voor het mooie logo!',
		'Dank aan de bèta testers!',
		'Dank aan de phpBB community inclusief phpBB.com, startrekguide.com en phpBBModders.net!',
		'Dank aan de Nederlandse vertalers die deze tool met bloed, zweet en tranen hebben vertaald.',
	)) . '</li></ul>',
	'WHO_WHEN' 				=> 'Wie? Wanneer?',
	'WHO_WHEN_EXPLAIN' 		=> 'phpBB3 QuickInstall is origineel gemaakt door Igor “eviL&lt;3” Wiedler in de zomer van 2007. Het is deels herschreven door hem in maart 2008.<br />Sinds maart 2010 wordt dit project onderhouden door Jari “Tumba25” Kanerva.',
	'WHY' 					=> 'Waarom?',
	'WHY_EXPLAIN' 			=> 'Net als met phpBB2, als je een hoop modding doet (modificaties maken), kun je niet alle MODs in een enkele phpBB installatie maken. Het is beter om aparte installaties te hebben. Het kost onnodig veel tijd om iedere keer weer alle bestanden te moeten kopiëren en door het installatie procedure heen te gaan. Om dit proces te versnellen is quickinstall in het leven geroepen.',

	// Config updated strings.
	'UPDATED_EXPLAIN'	=> 'Je profiel is bijgewerkt naar QI versie (%s). De wijzigingen die zijn gemaakt zijn hieronder opgesomd. Ze zijn ingesteld op hun standaard waarde, ook hieronder opgesomd.<br />Het is misschien een idee om de instellingen-pagina te bekijken (de link onderaan) zodat je de instellingen naar eigen wens kan instellen. Als je meer dan één profiel hebt, druk dan op onderstaande knop om alle profielen bij te werken.', // %s will be replaced with QI version.
	'PROFILE_UPDATED'	=> 'Het profiel &quot;%s&quot; is bijgewerkt', // %s will be replaced by a profile name.
	'PROFILES_UPDATED'	=> 'De volgende profielen zijn bijgewerkt',
	'UPDATE_PROFILES'	=> 'Profielen bijwerken',

	'DST_REMOVED'		=>	'De DST instelling is verwijderd (qi_dst).',
	'TIMEZONE_UPDATED'	=>	'Je tijdzone-instelling is bijgewerkt van numeriek naar string (qi_tz), standaard is het UTC.',

));
