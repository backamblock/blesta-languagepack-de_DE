<?php
// Errors
$lang['Plesk.!error.simplexml_required'] = "Die simplexml-Erweiterung ist für dieses Modul erforderlich."; //en: "'The simplexml extension is required for this module.'"

$lang['Plesk.!error.api.internal'] = "Ein interner Fehler ist aufgetreten oder der Server liefert keine gültige Antwort."; //en: "'An internal error occurred, or the server did not respond to the request.'"

$lang['Plesk.!error.server_name.empty'] = "Sie müssen eine Server-Bezeichnung eingeben."; //en: "'You must enter a Server Label.'"
$lang['Plesk.!error.host_name.valid'] = 'The hostname appears to be invalid.';
$lang['Plesk.!error.ip_address.valid'] = 'The IP address appears to be invalid.';
$lang['Plesk.!error.port.format'] = "Die Portnummer muss eine Nummer sein."; //en: "'The port number must be a number.'"
$lang['Plesk.!error.username.empty'] = "Bitte geben Sie einen Benutzernamen ein."; //en: "'Please enter a username.'"
$lang['Plesk.!error.password.empty'] = "Bitte geben Sie ein Passwort ein"; //en: "'Please enter a password.'"
$lang['Plesk.!error.panel_version.valid'] = "Bitte wählen Sie Ihre Plesk Panel-Version."; //en: "'Please select your Plesk Panel version.'"
$lang['Plesk.!error.reseller.valid'] = "Ob dieses Konto ein Reseller-Konto ist, muss auf \"True\" oder \"False\" festgelegt werden."; //en: "'Whether this account is a reseller account must be set to true or false.'"
$lang['Plesk.!error.account_limit_valid'] = "Das Kontolimit muss leer gelassen werden (für unbegrenzte Konten) oder auf einen ganzzahligen Wert gesetzt werden."; //en: "'Account Limit must be left blank (for unlimited accounts) or set to some integer value.'"
$lang['Plesk.!error.name_servers.valid'] = 'One or more of the name servers entered are invalid.';
$lang['Plesk.!error.name_servers.count'] = "Sie müssen mindestens 2 Nameserver definieren."; //en: "'You must define at least 2 name servers.'"
$lang['Plesk.!error.module_row.missing'] = 'An internal error occurred. The module row is unavailable.';

$lang['Plesk.!error.meta[plan].empty'] = "Bitte wählen Sie einen Service-Plan aus."; //en: "'Please select a service plan.'"
$lang['Plesk.!error.meta[reseller_plan].empty'] = "Bitte wählen Sie einen Reseller-Account-Plan."; //en: "'Please select a reseller account plan.'"
$lang['Plesk.!error.meta[type].valid'] = "Der Kontotyp muss entweder Standard oder Reseller sein."; //en: "'Account type must be either standard or reseller.'"

$lang['Plesk.!error.plesk_domain.format'] = "Bitte geben Sie einen gültigen Domain-Namen ein, z. domain.com"; //en: "'Please enter a valid domain name, e.g. domain.com'"
$lang['Plesk.!error.plesk_username.length'] = "Der Benutzername muss zwischen 1 und 32 Zeichen lang sein."; //en: "'The username must be between 1 and 32 characters in length.'"
$lang['Plesk.!error.plesk_password.length'] = 'The password must be between 16 and 20 characters in length.';
$lang['Plesk.!error.plesk_confirm_password.matches'] = "Die Passwörter stimmen nicht überein."; //en: "'The passwords do not match.'"
$lang['Plesk.!error.plesk_webspace_id.exists'] = "Die angegebene Abonnement-ID ist in Plesk nicht vorhanden."; //en: "'The Subscription ID given does not exist in Plesk.'"

$lang['Plesk.!error.downgrade.unsupported'] = "Ein Downgrade von einem Reseller-Konto auf ein Nicht-Reseller-Konto wird nicht unterstützt."; //en: "'Downgrading from a reseller account to a non-reseller account is not supported.'"

$lang['Plesk.!error.api.webspace_delete_filter_missing'] = "Fehlende Filter zum Löschen eines bestimmten Abonnement."; //en: "'Missing filter for deleting a specific subscription.'"
$lang['Plesk.!error.api.customer_delete_filter_missing'] = "Fehlender Filter zum Löschen eines bestimmten Kunden."; //en: "'Missing filter for deleting a specific customer.'"
$lang['Plesk.!error.api.reseller_delete_filter_missing'] = "Fehlender Filter zum Löschen eines bestimmten Resellers."; //en: "'Missing filter for deleting a specific reseller.'"


// Common
$lang['Plesk.please_select'] = "-- Bitte auswählen --"; //en: "'-- Please Select --'"


// Tabs
$lang['Plesk.tab_stats'] = "Statistiken"; //en: "'Statistics'"
$lang['Plesk.tab_client_stats'] = "Statistiken"; //en: "'Statistics'"


// Statistics
$lang['Plesk.stats.unlimited'] = "Unlimitiert"; //en: "'Unlimited'"
$lang['Plesk.!bytes.value'] = "%1\$s %2\$s"; // %1$s is a number value, %2$s is the unit of that value (i.e., one of B, KB, MB, GB)"; //en: "'%1$s %2$s'; // %1$s is a number value, %2$s is the unit of that value (i.e., one of B, KB, MB, GB)"


// Tab Stats
$lang['Plesk.tab_stats.info_title'] = "Information"; //en: "'Information'"
$lang['Plesk.tab_stats.bandwidth_title'] = "Bandbreite"; //en: "'Bandwidth'"
$lang['Plesk.tab_stats.disk_title'] = " Festplatte"; //en: "'Disk'"

$lang['Plesk.tab_stats.info_heading.field'] = "Feld"; //en: "'Field'"
$lang['Plesk.tab_stats.info_heading.value'] = "Wert"; //en: "'Value'"
$lang['Plesk.tab_stats.bandwidth_heading.used'] = "Verbraucht"; //en: "'Used'"
$lang['Plesk.tab_stats.bandwidth_heading.limit'] = "Grenze"; //en: "'Limit'"
$lang['Plesk.tab_stats.disk_heading.used'] = "Benutzt"; //en: "'Used'"
$lang['Plesk.tab_stats.disk_heading.limit'] = "Begrenzung"; //en: "'Limit'"

$lang['Plesk.tab_stats.info.domain'] = "Domain"; //en: "'Domain'"
$lang['Plesk.tab_stats.info.ip_address'] = "IP Adresse"; //en: "'IP Address'"


// Tab Client Stats
$lang['Plesk.tab_client_stats.info_title'] = "Information"; //en: "'Information'"

$lang['Plesk.tab_client_stats.info_heading.field'] = "Feld"; //en: "'Field'"
$lang['Plesk.tab_client_stats.info_heading.value'] = "Wert"; //en: "'Value'"

$lang['Plesk.tab_client_stats.info.domain'] = "Domain"; //en: "'Domain'"
$lang['Plesk.tab_client_stats.info.ip_address'] = "IP Adresse"; //en: "'IP Address'"

$lang['Plesk.tab_client_stats.disk_title'] = "Festplattennutzung"; //en: "'Disk Usage'"
$lang['Plesk.tab_client_stats.bandwidth_title'] = "Bandbreitennutzung"; //en: "'Bandwidth Usage'"
$lang['Plesk.tab_client_stats.usage'] = "(%1\$s / %2\$s)"; // %1$s is the amount of resource usage, %2$s is the resource usage limit"; //en: "'(%1$s/%2$s)'; // %1$s is the amount of resource usage, %2$s is the resource usage limit"
$lang['Plesk.tab_client_stats.not_available'] = "N/A"; //en: "'NA'"


// Basics
$lang['Plesk.name'] = "Plesk"; //en: "'Plesk'"
$lang['Plesk.description'] = "Plesk ist eine kommerzielle Webhosting-Plattform mit einem Control Panel, welches es einem Server-Administrator ermöglicht, neue Webseiten, Reseller-Konten, E-Mail-Konten und DNS-Einträge über eine webbasierte Oberfläche einzurichten."; //en: "'Plesk is a commercial web hosting platform with a control panel that allows a server administrator to set up new websites, reseller accounts, e-mail accounts and DNS entries through a web-based interface.'"
$lang['Plesk.module_row'] = "Server"; //en: "'Server'"
$lang['Plesk.module_row_plural'] = "Server"; //en: "'Servers'"
$lang['Plesk.module_group'] = "Servergruppe"; //en: "'Server Group'"


// Service fields
$lang['Plesk.service_field.domain'] = "Domain"; //en: "'Domain'"
$lang['Plesk.service_field.username'] = "Benutzername"; //en: "'Username'"
$lang['Plesk.service_field.password'] = "Passwort"; //en: "'Password'"
$lang['Plesk.service_field.confirm_password'] = "Passwort bestätigen"; //en: "'Confirm Password'"
$lang['Plesk.service_field.text_generate_password'] = 'Generate Password';
$lang['Plesk.service_field.webspace_id'] = "Abonnement (Webspace) -ID"; //en: "'Subscription (Webspace) ID'"

$lang['Plesk.service_field.tooltip.username'] = "Sie können den Benutzernamen leer lassen, um automatisch einen zu erstellen."; //en: "'You may leave the username blank to automatically generate one.'"
$lang['Plesk.service_field.tooltip.webspace_id'] = "Legen Sie nur dann eine Abonnement-ID fest, wenn Sie diesen Dienst nicht mit dem Modul bereitstellen. Es kann für bestimmte API-Anforderungen verwendet werden."; //en: "'Only set a Subscription ID if you are not provisioning this service with the module. It may be used for certain API requests.'"
$lang['Plesk.service_field.tooltip.webspace_id_edit'] = "Die Abonnement-ID wird nur lokal geändert. Sie wird in Plesk nicht geändert."; //en: "'The Subscription ID will only be changed locally. It will not be changed in Plesk.'"


// Package fields
$lang['Plesk.package_fields.plan'] = "Plesk Service Plan"; //en: "'Plesk Service Plan'"
$lang['Plesk.package_fields.type'] = "Konto Typ"; //en: "'Account Type'"
$lang['Plesk.package_fields.type_standard'] = "Standard"; //en: "'Standard'"
$lang['Plesk.package_fields.type_reseller'] = "Wiederverkäufer"; //en: "'Reseller'"
$lang['Plesk.package_fields.reseller_plan'] = "Reseller-Account-Plan"; //en: "'Reseller Account Plan'"


// Service info
$lang['Plesk.service_info.username'] = "Username"; //en: "'Username'"
$lang['Plesk.service_info.password'] = "Passwort"; //en: "'Password'"
$lang['Plesk.service_info.server'] = "Server"; //en: "'Server'"
$lang['Plesk.service_info.options'] = "Optionen"; //en: "'Options'"
$lang['Plesk.service_info.option_login'] = "Einloggen"; //en: "'Log in'"


// Add module row
$lang['Plesk.add_row.box_title'] = "Plesk Server hinzufügen"; //en: "'Add Plesk Server'"
$lang['Plesk.add_row.basic_title'] = "Grundeinstellungen"; //en: "'Basic Settings'"
$lang['Plesk.add_row.name_servers_title'] = 'Name Servers';
$lang['Plesk.add_row.name_server_btn'] = 'Add Additional Name Server';
$lang['Plesk.add_row.name_server_col'] = 'Name Server';
$lang['Plesk.add_row.name_server_host_col'] = 'Hostname';
$lang['Plesk.add_row.name_server'] = "Name Server %1\$s"; // %1$s is the name server number (e.g. 3)"; //en: "'Name server %1$s'; // %1$s is the name server number (e.g. 3)"
$lang['Plesk.add_row.remove_name_server'] = "Entfernen"; //en: "'Remove'"
$lang['Plesk.add_row.add_btn'] = "Server hinzufügen"; //en: "'Add Server'"


// Edit module row
$lang['Plesk.edit_row.box_title'] = "Bearbeiten Sie den Plesk-Server"; //en: "'Edit Plesk Server'"
$lang['Plesk.edit_row.basic_title'] = "Grundeinstellungen"; //en: "'Basic Settings'"
$lang['Plesk.edit_row.name_servers_title'] = 'Name Servers';
$lang['Plesk.edit_row.name_server_btn'] = "Zusätzlichen Namensserver hinzufügen"; //en: "'Add Additional Name Server'"
$lang['Plesk.edit_row.name_server_col'] = 'Name Server';
$lang['Plesk.edit_row.name_server_host_col'] = 'Hostname';
$lang['Plesk.edit_row.name_server'] = 'Name server %1$s'; // %1$s is the name server number (e.g. 3)
$lang['Plesk.edit_row.remove_name_server'] = 'Remove';
$lang['Plesk.edit_row.add_btn'] = "Server Editieren"; //en: "'Edit Server'"


// Module row meta data
$lang['Plesk.row_meta.server_name'] = "Serverkennzeichnung"; //en: "'Server Label'"
$lang['Plesk.row_meta.host_name'] = 'Hostname';
$lang['Plesk.row_meta.ip_address'] = "IP Adresse"; //en: "'IP Address'"
$lang['Plesk.row_meta.port'] = "Port"; //en: "'Port'"
$lang['Plesk.row_meta.username'] = "Benutzername"; //en: "'Username'"
$lang['Plesk.row_meta.password'] = "Passwort"; //en: "'Password'"
$lang['Plesk.row_meta.reseller'] = "Weiterverkäufer Konto"; //en: "'Reseller Account'"
$lang['Plesk.row_meta.panel_version'] = "Plesk Panel Version"; //en: "'Plesk Panel Version'"
$lang['Plesk.row_meta.account_limit'] = 'Account Limit';
$lang['Plesk.row_meta.tooltip.reseller'] = "Aktivieren Sie dieses Kontrollkästchen, wenn es sich um einen Plesk-Händler-Account handelt. In Plesk Administrator-Konten wird dieses Kontrollkästchen möglicherweise deaktiviert."; //en: "'Check this box if this is a Plesk Reseller account. Plesk Administrator accounts may leave this box unchecked.'"
$lang['Plesk.row_meta.tooltip.version'] = "Jede Version von Plesk unterstützt mehrere Versionen der XML-API, die mit und vor dieser Version von Plesk veröffentlicht wurden. Daher sind neuere Versionen mit älteren Versionen abwärtskompatibel."; //en: "'Every version of Plesk supports several versions of the XML API that were released with and before this version of Plesk, so newer versions are backward-compatible with older versions.'"


// Module management
$lang['Plesk.order_options.first'] = "Erster nicht voller Server"; //en: "'First non-full server'"
$lang['Plesk.order_options.roundrobin'] = 'Evenly Distribute Among Servers';

$lang['Plesk.add_module_row'] = "Server hinzufügen"; //en: "'Add Server'"
$lang['Plesk.add_module_group'] = "Servergruppe hinzufügen"; //en: "'Add Server Group'"
$lang['Plesk.manage.module_rows_title'] = "Server"; //en: "'Servers'"
$lang['Plesk.manage.module_groups_title'] = "Servergruppen"; //en: "'Server Groups'"
$lang['Plesk.manage.module_rows_heading.name'] = "Server Bezeichnung"; //en: "'Server Label'"
$lang['Plesk.manage.module_rows_heading.ip_address'] = "IP Adresse"; //en: "'IP Address'"
$lang['Plesk.manage.module_rows_heading.accounts'] = 'Accounts';
$lang['Plesk.manage.module_rows_heading.options'] = "Optionen"; //en: "'Options'"
$lang['Plesk.manage.module_rows.count'] = '%1$s / %2$s'; // %1$s is the current number of accounts, %2$s is the total number of accounts available
$lang['Plesk.manage.module_rows.count_server_group'] = '%1$s / %2$s (%3$s Available)'; // %1$s is the current number of accounts, %2$s is the total number of accounts available, %3$s is the total number of accounts available without over-subscription
$lang['Plesk.manage.module_groups_heading.name'] = "Gruppenname"; //en: "'Group Name'"
$lang['Plesk.manage.module_groups_heading.servers'] = "Serveranzahl"; //en: "'Server Count'"
$lang['Plesk.manage.module_groups_heading.options'] = "Optionen"; //en: "'Options'"
$lang['Plesk.manage.module_rows.edit'] = "Bearbeiten"; //en: "'Edit'"
$lang['Plesk.manage.module_groups.edit'] = "Bearbeiten"; //en: "'Edit'"
$lang['Plesk.manage.module_rows.delete'] = "Löschen"; //en: "'Delete'"
$lang['Plesk.manage.module_groups.delete'] = "Löschen"; //en: "'Delete'"
$lang['Plesk.manage.module_rows.confirm_delete'] = "Sind Sie sicher, dass sie den Server löschen möchten?"; //en: "'Are you sure you want to delete this server?'"
$lang['Plesk.manage.module_groups.confirm_delete'] = "Sind Sie sicher, dass Sie diese Server-Gruppe löschen wollen?"; //en: "'Are you sure you want to delete this server group?'"
$lang['Plesk.manage.module_rows_no_results'] = "Es gibt keine Server."; //en: "'There are no servers.'"
$lang['Plesk.manage.module_groups_no_results'] = "Es gibt keine Servergruppen."; //en: "'There are no server groups.'"


// Panel versions
$lang['Plesk.panel_version.windows'] = "Windows"; //en: "'Windows'"
$lang['Plesk.panel_version.linux'] = "Linux / Unix"; //en: "'Linux/Unix'"
$lang['Plesk.panel_version.plesk_type'] = "Plesk %1\$s für %2\$s"; // %1$s is the Plesk panel version number, %2$s is the OS type (i.e. Windows or Linux/Unix)"; //en: "'Plesk %1$s for %2$s'; // %1$s is the Plesk panel version number, %2$s is the OS type (i.e. Windows or Linux/Unix)"
$lang['Plesk.panel_version.plesk'] = "Plesk %1\$s"; // %1$s is the Plesk panel version number"; //en: "'Plesk %1$s'; // %1$s is the Plesk panel version number"
$lang['Plesk.panel_version.parallels'] = "Parallels Plesk Panel %1\$s"; // %1$s is the Plesk panel version number"; //en: "'Parallels Plesk Panel %1$s'; // %1$s is the Plesk panel version number"
$lang['Plesk.panel_version.latest'] = "Verwenden Sie die neueste Version (empfohlen)"; //en: "'Use Latest Version (Recommended)'"
