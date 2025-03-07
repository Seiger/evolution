<?php
/**
 * MODx language File
 *
 * @author davaeron
 * @package MODx installer for 0.9.6.2
 * @revision 3729
 *
 * Filename:       /install/lang/norwegian/norwegian.inc.php
 * Language:       Norsk
 * Encoding:       utf-8
 *
 * Translation: Bj&oslash;rn Erik Sandbakk (Sylvaticus)
 * Date: 2009-05-22
 */
$_lang["alert_database_test_connection"] = 'Du m&aring; opprette din database eller teste valget av database!';
$_lang["alert_database_test_connection_failed"] = 'Testen p&aring; valg av database mislyktes!';
$_lang["alert_enter_adminconfirm"] = 'Brukernavnet og passordet til administrasjonskontoen stemmer ikke!';
$_lang["alert_enter_adminlogin"] = 'Du m&aring; oppgi et brukernavn for systemets administrasjonskonto!';
$_lang["alert_enter_adminpassword"] = 'Du m&aring; oppgi et passord for systemets administrasjonskonto!';
$_lang["alert_enter_database_name"] = 'Du m&aring; oppgi et navn p&aring; databasen!';
$_lang["alert_enter_host"] = 'Du m&aring; oppgi et navn p&aring; databaseserveren!';
$_lang["alert_enter_login"] = 'Du m&aring; oppgi databasens innloggningsnavn!';
$_lang["alert_server_test_connection"] = 'Du m&aring; teste servertilkoblingen!';
$_lang["alert_server_test_connection_failed"] = 'Tilkoblingen til serveren mislyktes!';
$_lang["alert_table_prefixes"] = 'Tabellprefixet m&aring; begynne med en bokstav!';
$_lang["all"] = 'Alle';
$_lang["and_try_again"] = ', og fors&oslash;k igjen. Om du trenger hjelp med &aring; finne ut av problemet';
$_lang["and_try_again_plural"] = ', og fors&oslash;k igjen. Om du trenger hjelp med &aring; finne ut av problemet';
$_lang["begin"] = 'Start';
$_lang["btnback_value"] = 'Tilbake';
$_lang["btnclose_value"] = 'Lukk';
$_lang["btnnext_value"] = 'Neste';
$_lang["cant_write_config_file"] = 'MODx kunne ikke skrive konfigurasjonsfilen. Kopier f&oslash;lgende til filen ';
$_lang["cant_write_config_file_note"] = 'N&aring;r det er klart kan du logge inn i MODx administrasjonskontoen ved &aring; g&aring; til adressen DittDomene.xx/'.MGR_DIR.'/ i din nettleser.';
$_lang["checkbox_select_options"] = 'Alternativ for kryssbokser:';
$_lang["checking_if_cache_exist"] = 'Kontrollerer at katalogen <span class="mono">assets/cache</span> eksisterer: ';
$_lang["checking_if_cache_file2_writable"] = 'Kontrollerer at filen <span class="mono">assets/cache/sitePublishing.idx.php</span> er skrivbar: ';
$_lang["checking_if_cache_file_writable"] = 'Kontrollerer at filen <span class="mono">assets/cache/siteCache.idx.php</span> er skrivbar: ';
$_lang["checking_if_cache_writable"] = 'Kontrollerer at katalogen <span class="mono">assets/cache</span> er skrivbar: ';
$_lang["checking_if_config_exist_and_writable"] = 'Kontrollerer at filen <span class="mono">'.MGR_DIR.'/includes/config.inc.php</span> eksisterer og er skrivbar: ';
$_lang["checking_if_export_exists"] = 'Kontrollerer at katalogen <span class="mono">assets/export</span> eksisterer: ';
$_lang["checking_if_export_writable"] = 'Kontrollerer at katalogen <span class="mono">assets/export</span> er skrivbar: ';
$_lang["checking_if_images_exist"] = 'Kontrollerer at katalogen <span class="mono">assets/images</span>, <span class="mono">/assets/media</span>, <span class="mono">/assets/backup</span>, <span class="mono">/assets/.thumbs</span> eksisterer: ';
$_lang["checking_if_images_writable"] = 'Kontrollerer at katalogen <span class="mono">assets/images</span>, <span class="mono">/assets/media</span>, <span class="mono">/assets/backup</span>, <span class="mono">/assets/.thumbs</span> er skrivbar: ';
$_lang["checking_mysql_strict_mode"] = 'Sjekker MySQL for strict mode: ';
$_lang["checking_mysql_version"] = 'Sjekker MySQL versjon: ';
$_lang["checking_php_version"] = 'Kontrollerer PHP-versjon: ';
$_lang["checking_registerglobals"] = 'Kontrollerar att Register_Globals är inaktiverad: ';
$_lang["checking_registerglobals_note"] = 'Denne konfigurasjonen gj&oslash;r din nettside betydelig mer s&aring;rbar for webkodeinjeksjon (Cross Site Scripting - XSS). Du b&oslash;r kontakte din webhost og be om &aring; f&aring; inaktivert denne instillingen. Vanligvis lar det seg gj&oslash;re p&aring; tre f&oslash;lgende m&aring;ter: modifisering av den globale php.ini-filen, tillegg av regler i en .htaccess-fil i roten p&aring; din MODX-installasjon eller gjennom &aring; legge til en tilpasset php.ini-fil (som tilsidesetter den globale filen) i alla kataloger i din installasjon (og det finns masser av dem). Du kan fremdeles installere MODx, men ta denne advarselen p&aring; alvor.'; //Look at changing this to provide a solution.
$_lang["checking_sessions"] = 'Kontrollerer at sesjoner er korrekt konfigurert: ';
$_lang["checking_table_prefix"] = 'Kontrollerer tabellprefixet `';
$_lang["chunks"] = 'Chunks';
$_lang["config_permissions_note"] = 'For nye installasjoner i Linux/Unix-milj&oslash; m&aring; en tom fil med navnet <span class="mono">config.inc.php</span> opprettes i katalogen <span class="mono">'.MGR_DIR.'/includes/</span> med skriverrettighetene satt til 666.';
$_lang["connection_screen_collation"] = 'Kollasjonering:';
$_lang["connection_screen_connection_information"] = 'Tilkoblingsopplysninger';
$_lang["connection_screen_connection_method"] = 'Tilkoblingsmetode:';
$_lang["connection_screen_database_connection_information"] = 'Databaseopplysninger';
$_lang["connection_screen_database_connection_note"] = 'Angi navnet p&aring; databasen som ble opprettet for MODx. Om det ikke finnes en database fra f&oslash;r, kommer installasjonsprogrammet til &aring; pr&oslash;ve &aring; opprette en for deg. Dette kan mislykkes avhengig av MySQL-konfigurasjonen eller databasens tilgangsrettigheter for ditt domene/installasjon.';
$_lang["connection_screen_database_host"] = 'Databasevert:';
$_lang["connection_screen_database_login"] = 'Databasens inloggingsnavn:';
$_lang["connection_screen_database_name"] = 'Databasenavn:';
$_lang["connection_screen_database_pass"] = 'Databasens passord:';
$_lang["connection_screen_database_test_connection"] = 'Klikk her for &aring; opprette din database eller for &aring; teste ditt databasevalg';
$_lang["connection_screen_default_admin_email"] = 'Administratorens epost:';
$_lang["connection_screen_default_admin_login"] = 'Administratorens brukernavn:';
$_lang["connection_screen_default_admin_note"] = 'N&aring; skal du oppgi noen opplysninger for administratorkontoen. Du m&aring; fylle inn ditt eget navn og et passord som du ikke m&aring; glemme. Du vil trenge disse opplysningene senere n&aring;r du skal logge inn p&aring; administratorkontoen etter at installasjonen er avsluttet.';
$_lang["connection_screen_default_admin_password"] = 'Administratorens passord:';
$_lang["connection_screen_default_admin_password_confirm"] = 'Bekreft passord:';
$_lang["connection_screen_default_admin_user"] = 'Administratorkonto';
$_lang["connection_screen_server_connection_information"] = 'Serverens tilkoblings- og innloggingsopplysninger';
$_lang["connection_screen_server_connection_note"] = 'Oppgi navnet p&aring; din server, ditt innloggningsnavn samt ditt passord og test s&aring; tilkoblingen.';
$_lang["connection_screen_server_test_connection"] = 'Klikk her for &aring; teste tilkoblingen til serveren og for &aring; hente tilgjengelige kollasjoneringer';
$_lang["connection_screen_table_prefix"] = 'Tabellprefix:';
$_lang["creating_database_connection"] = 'Oppretter en tilkobling til databasen: ';
$_lang["database_alerts"] = 'Databasevarsler!';
$_lang["database_connection_failed"] = 'Tilkobling til databasen mislyktes!';
$_lang["database_connection_failed_note"] = 'Kontrollér databasens tilkoblingsopplysninger og fors&oslash;k igjen.';
$_lang["database_use_failed"] = 'Databasen kunne ikke velges!';
$_lang["database_use_failed_note"] = 'Kontrollér databasens tilkoblingsrettigheter for den oppgitte brukeren og fors&oslash;k igjen.';
$_lang["during_execution_of_sql"] = ' under kj&oslash;ringen av SQL-sp&oslash;rringen ';
$_lang["encoding"] = 'utf-8';
$_lang["error"] = 'feil';
$_lang["errors"] = 'feil';
$_lang["failed"] = 'mislyktes!';
$_lang["iagree_box"] = 'Jeg aksepterer vilk&aring;rene i denne lisensen.';
$_lang["install"] = 'Installér';
$_lang["install_overwrite"] = 'Installér/skriv over';
$_lang["install_results"] = 'Installasjonsresultat';
$_lang["install_update"] = 'Installér/oppdater';
$_lang["installation_error_occured"] = 'F&oslash;lgande feil oppsto under installasjonen';
$_lang["installation_install_new_copy"] = 'Installer en ny kopi av ';
$_lang["installation_install_new_note"] = '<br />V&aelig;r klar over at dette valget kan skrive over data som finnes i databasen.';
$_lang["installation_mode"] = 'Installasjonstype';
$_lang["installation_new_installation"] = 'Ny installasjon';
$_lang["installation_note"] = '<strong>Notér:</strong> Etter &aring; ha logget inn i inneholdsh&aring;ndtereren b&oslash;r du redigere og lagre dine systeminstillinger f&oslash;r du begynner &aring; arbeide med ditt nettsted. G&aring; til Verkt&oslash;y -> Konfigurasjon i inneholdsh&aring;ndtereren.';
$_lang["installation_successful"] = 'Installasjonen er vellykket!';
$_lang["installation_upgrade_advanced"] = 'Avansert oppgradering<br />av installasjon<br /><small>(rediger databasens konfigurasjon)</small>';
$_lang["installation_upgrade_advanced_note"] = 'For databasadministratorer eller ved flytting til servere med et annet tegnoppsett for tilkobling.<br /><b>Du vil trenge databasens fulle navn, brukernavn, passord og tilkoblingsdetaljer.</b>';
$_lang["installation_upgrade_existing"] = 'Oppgradér eksisterende installasjon';
$_lang["installation_upgrade_existing_note"] = 'Oppgradér dine n&aring;v&aelig;rende filer og database.';
$_lang["installed"] = 'Installert';
$_lang["installing_demo_site"] = 'Installerer pr&oslash;ve-data: ';
$_lang["language_code"] = 'no';
$_lang["loading"] = 'Henter...';
$_lang["modules"] = 'Moduler';
$_lang["modx_footer1"] = '&copy; 2005 - 2024 the <a href="https://evo.im/" target="_blank" style="color: green; text-decoration:underline">Evolution CMS</a> Content Mangement Framework (CMF) project. Med enerett. Evolution CMS er lisensiert under GNU GPL.';
$_lang["modx_footer2"] = 'MODx er fri programvare. Vi oppmuntrer deg til &aring; v&aelig;re kreativ og bruke MODx p&aring; hvilken m&aring;te du vil. V&aelig;r bare n&oslash;ye med &aring; beholde kildekoden fri om du gj&oslash;r endringer og siden velger &aring; omdistribuere din modifiserte versjon av MODx.';
$_lang["modx_install"] = 'MODx &raquo; Installasjon';
$_lang["modx_requires_php"] = ', og MODx krever PHP 4.2.0 eller senere.';
$_lang["mysql_5051"] = ' MySQL server versjon er 5.0.51!';
$_lang["mysql_5051_warning"] = 'Det er kjente problemer med MySQL 5.0.51. Det anbefales at du oppgraderer f&oslash;r du fortsetter.';
$_lang["mysql_version_is"] = ' Din MySQL versjon er: ';
$_lang["none"] = 'Ingen';
$_lang["not_found"] = 'ble ikke funnet';
$_lang["ok"] = 'OK!';
$_lang["optional_items"] = 'Valgbare alternativ';
$_lang["optional_items_note"] = 'Velg dine installasjonsalternativ og klikk Installér:';
$_lang["php_security_notice"] = '<legend>Sikkerhetsmelding</legend><p>Selv om MODx kommer til &aring; fungere p&aring; din PHP-versjon, s&aring; anbefales det ikke &aring; bruke MODx med den versjonen. Din PHP-versjon er s&aring;rbar for en rekke sikkerhetshull. Oppgrader til PHP-versjon 4.3.8 eller senere, der disse sikkerhetshullene er tettet. Det anbefales at du oppgraderer til denne versjonen for &aring; beskytte ditt nettsted.</p>';
$_lang["please_correct_error"] = '. Korrigér feilen';
$_lang["please_correct_errors"] = '. Korrigér feilen';
$_lang["plugins"] = 'Plugins';
$_lang["preinstall_validation"] = 'Kontroller f&oslash;r installasjon';
$_lang["remove_install_folder_auto"] = 'Ta bort installasjonskatalogen og -filene fra mitt nettsted<br />&nbsp;(Denne operasjonen krever at sletterettigheter er satt for installasjonskatalogen).';
$_lang["remove_install_folder_manual"] = 'Husk &aring; ta bort katalogen &quot;<b>install</b>&quot; f&oslash;r du logger inn i inneholdsh&aring;ndtereren.';
$_lang["retry"] = 'Fors&oslash;k igjen';
$_lang["running_database_updates"] = 'Kj&oslash;r oppdateringer for databasen: ';
$_lang["sample_web_site"] = 'Pr&oslash;ve-data';
$_lang["sample_web_site_note"] = 'V&aelig;r klar over at dette kommer til &aring; <b style="color:#CC0000;">skrive over</b> eksisterende dokumenter og ressurser.';
$_lang["setup_cannot_continue"] = 'Installasjonsprogrammet kan desverre ikke fortsette p&aring; grunn av ovenforst&aring;ende ';
$_lang["setup_couldnt_install"] = 'MODx installasjonsprogramet kunne ikke legge til/endre noen tabeller i den valgte databasen.';
$_lang["setup_database"] = 'Installasjonsprogrammet kommer n&aring; til &aring; fors&oslash;ke &aring; konfigurere databasen:<br />';
$_lang["setup_database_create_connection"] = 'Oppretter tilkobling til databasen: ';
$_lang["setup_database_create_connection_failed"] = 'Tilkoblingen til databasen mislyktes!';
$_lang["setup_database_create_connection_failed_note"] = 'Kontroller databasens innloggingsopplysninger og fors&oslash;k igjen.';
$_lang["setup_database_creating_tables"] = 'Oppretter databasetabeller: ';
$_lang["setup_database_creation"] = 'Oppretter database `';
$_lang["setup_database_creation_failed"] = 'Databasen kunne ikke opprettes!';
$_lang["setup_database_creation_failed_note"] = ' - Installasjonsprogrammet kunne ikke opprette databasen!';
$_lang["setup_database_creation_failed_note2"] = 'Installasjonsprogrammet kunne ikke opprette databasen og ingen database med samme navn eksisterer. Det er sannsynligvis fordi din webbhosts sikkerhetsinnstillinger ikke tillater at eksterne script oppretter databaser. Opprett en database i f&oslash;lge din webbhosts instruksjoner og kj&oslash;r installasjonsprogemmet p&aring; nytt.';
$_lang["setup_database_selection"] = 'Velger database `';
$_lang["setup_database_selection_failed"] = 'Valg av database mislyktes...';
$_lang["setup_database_selection_failed_note"] = 'Databasen eksisterer ikke. Installasjonsprogrammet kommer til &aring; pr&oslash;ve og opprette den.';
$_lang["snippets"] = 'Snippets';
$_lang["some_tables_not_updated"] = 'Noen tabeller ble ikke oppdatert. Årsaken kan v&aelig;re tidligere modifikasjoner.';
$_lang["status_checking_database"] = '...    Kontrollerer databasen: ';
$_lang["status_connecting"] = ' Tilkobling til vertdatamaskin: ';
$_lang["status_failed"] = 'mislyktes!';
$_lang["status_failed_could_not_create_database"] = 'mislyktes - kunne ikke opprette database';
$_lang["status_failed_database_collation_does_not_match"] = 'mislyktes - database collation ulikhet; bruk SET NAMES eller velg %s';
$_lang["status_failed_table_prefix_already_in_use"] = 'mislyktes - tabellprefixet er allerede i bruk!';
$_lang["status_passed"] = 'godkjent - databasen valgt';
$_lang["status_passed_database_created"] = 'godkjent - database opprettet';
$_lang["status_passed_server"] = 'godkjent - kollasjoneringer er n&aring; tilgjengelig';
$_lang["strict_mode"] = ' MySQL serveren er i strict mode!';
$_lang["strict_mode_error"] = 'MODx krever at strict mode er utkoblet. Du kan sette MySQL tilstanden ved &aring; endre my.cnf filen eller ved &aring; kontakte din serveradministrator.';
$_lang["summary_setup_check"] = 'Installasjonsprogrammet har gjennomf&oslash;rt en del tester för &aring; kontrollere at alt er klart for &aring; starte installasjonen.';
$_lang["table_prefix_already_inuse"] = ' - Tabellprefixet brukes allerede i denne databasen!';
$_lang["table_prefix_already_inuse_note"] = 'Installasjonsprogrammet kunne ikke installere i den valgte databasen ettersom den allerede inneholder tabeller med det prefixet du oppga. Angi et nytt prefix og kj&oslash;r installasjonsprogrammet p&aring; nytt.';
$_lang["table_prefix_not_exist"] = ' - Tabellprefixet finnes ikke i denne databasen!';
$_lang["table_prefix_not_exist_note"] = 'Installasjonsprogrammet kunne ikke installere i den valgte databasen ettersom den ikke inneholder tabeller med det prefixet du oppga f&oslash;r oppgraderingen. Velg et eksisterende prefix og kj&oslash;r installasjonsprogrammet p&aring; nytt.';
$_lang["templates"] = 'Maler';
$_lang["to_log_into_content_manager"] = 'Du kan logge inn i inneholdsh&aring;ndtereren ('.MGR_DIR.'/index.php)ved &aring; klikke p&aring; \"Lukk\"-knappen.';
$_lang["toggle"] = 'Skift';
$_lang["unable_install_chunk"] = 'Kunne ikke installere chunk.  Fil';
$_lang["unable_install_module"] = 'Kunne ikke installere modul.  Fil';
$_lang["unable_install_plugin"] = 'Kunne ikke installere plugin.  Fil';
$_lang["unable_install_snippet"] = 'Kunne ikke installere snippet.  Fil';
$_lang["unable_install_template"] = 'Kunne ikke installere template.  Fil';
$_lang["upgrade_note"] = '<strong>Notér:</strong> F&oslash;r du begynner &aring; bruke ditt nettsted b&oslash;r du logge inn i inneholdsh&aring;ndtereren via en administrasjonskonto og kontrollere og lagre dine konfigurasjonsinstillingar.';
$_lang["upgraded"] = 'Oppgradert';
$_lang["visit_forum"] = ', s&aring; bes&oslash;k <a href="http://www.modxcms.com/forums/" target="_blank">MODx forum</a>.';
$_lang["warning"] = 'ADVARSEL!';
$_lang["welcome_message_text"] = 'Dette programmet vil guide deg gjennom hele installasjonen.';
$_lang["welcome_message_welcome"] = 'Velkommen til installasjonsprogrammet for MODx.';
$_lang["writing_config_file"] = 'Skriver konfigurasjonsfil: ';
$_lang["you_running_php"] = ' - Du k&oslash;rer PHP ';
?>
