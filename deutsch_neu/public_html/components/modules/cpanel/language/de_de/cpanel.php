<?php
/**
 * de_de language for the cpanel module
 */
// Basics
$lang['Cpanel.name'] = "cPanel"; //en: "'cPanel'"
$lang['Cpanel.description'] = "cPanel & WHM ist seit über 20 Jahren die branchenführende Webhosting-Plattform. Technologiepartner wie Wordpress, CloudLinux, Lighstpeed usw. vertrauen Weltweit darauf."; //en: "'cPanel & WHM have been the industry leading web hosting platform for over 20 years. Trusted world-wide by technology partners Wordpress, CloudLinux, Lighstpeed, and more.'"
$lang['Cpanel.module_row'] = "Server"; //en: "'Server'"
$lang['Cpanel.module_row_plural'] = "Server"; //en: "'Servers'"
$lang['Cpanel.module_group'] = "Servergruppe"; //en: "'Server Group'"
$lang['Cpanel.tab_stats'] = "Statistiken"; //en: "'Statistics'"
$lang['Cpanel.tab_client_stats'] = "Statistiken"; //en: "'Statistics'"
$lang['Cpanel.tab_client_actions'] = "Aktionen"; //en: "'Actions'"

// Module management
$lang['Cpanel.add_module_row'] = "Server hinzufügen"; //en: "'Add Server'"
$lang['Cpanel.add_module_group'] = "Servergruppe hinzufügen"; //en: "'Add Server Group'"
$lang['Cpanel.manage.module_rows_title'] = "Server"; //en: "'Servers'"
$lang['Cpanel.manage.module_groups_title'] = "Server-Gruppen"; //en: "'Server Groups'"
$lang['Cpanel.manage.module_rows_heading.name'] = "Server Beschriftung"; //en: "'Server Label'"
$lang['Cpanel.manage.module_rows_heading.hostname'] = "Hostname"; //en: "'Hostname'"
$lang['Cpanel.manage.module_rows_heading.accounts'] = "Accounts"; //en: "'Accounts'"
$lang['Cpanel.manage.module_rows_heading.options'] = "Optionen"; //en: "'Options'"
$lang['Cpanel.manage.module_groups_heading.name'] = "Gruppenname"; //en: "'Group Name'"
$lang['Cpanel.manage.module_groups_heading.servers'] = "Serveranzahl"; //en: "'Server Count'"
$lang['Cpanel.manage.module_groups_heading.options'] = "Optionen"; //en: "'Options'"
$lang['Cpanel.manage.module_rows.count'] = "%1\$s/%2\$s"; // %1$s is the current number of accounts, %2$s is the total number of accounts available"; //en: "'%1$s / %2$s'; // %1$s is the current number of accounts, %2$s is the total number of accounts available"
$lang['Cpanel.manage.module_rows.count_server_group'] = '%1$s / %2$s (%3$s Available)'; // %1$s is the current number of accounts, %2$s is the total number of accounts available, %3$s is the total number of accounts available without over-subscription
$lang['Cpanel.manage.module_rows.edit'] = "Bearbeiten"; //en: "'Edit'"
$lang['Cpanel.manage.module_groups.edit'] = "Bearbeiten"; //en: "'Edit'"
$lang['Cpanel.manage.module_rows.delete'] = "Löschen"; //en: "'Delete'"
$lang['Cpanel.manage.module_groups.delete'] = "Löschen"; //en: "'Delete'"
$lang['Cpanel.manage.module_rows.confirm_delete'] = "Sind Sie sicher, das Sie diesen Server löschen möchten?"; //en: "'Are you sure you want to delete this server?'"
$lang['Cpanel.manage.module_groups.confirm_delete'] = "Sind Sie sicher, dass Sie diese Servergruppe löschen wollen?"; //en: "'Are you sure you want to delete this server group?'"
$lang['Cpanel.manage.module_rows_no_results'] = "Es existieren keine Server."; //en: "'There are no servers.'"
$lang['Cpanel.manage.module_groups_no_results'] = "Es gibt keine Servergruppen."; //en: "'There are no server groups.'"


$lang['Cpanel.order_options.first'] = "Erster nicht voller Server"; //en: "'First Non-full Server'"
$lang['Cpanel.order_options.roundrobin'] = "Gleichmäßig unter Servern verteilen"; //en: "'Evenly Distribute Among Servers'"

// Add row
$lang['Cpanel.add_row.box_title'] = "Fügen Sie einen cPanel Server hinzu"; //en: "'Add cPanel Server'"
$lang['Cpanel.add_row.basic_title'] = "Grundeinstellungen"; //en: "'Basic Settings'"
$lang['Cpanel.add_row.name_servers_title'] = "Namenserver"; //en: "'Name Servers'"
$lang['Cpanel.add_row.notes_title'] = "Notizen"; //en: "'Notes'"
$lang['Cpanel.add_row.name_server_btn'] = "Fügen Sie zusätzlichen Namenserver hinzu"; //en: "'Add Additional Name Server'"
$lang['Cpanel.add_row.name_server_col'] = "Nameserver"; //en: "'Name Server'"
$lang['Cpanel.add_row.name_server_host_col'] = "Hostname"; //en: "'Hostname'"
$lang['Cpanel.add_row.name_server'] = "Nameserver %1\$s"; // %1$s is the name server number (e.g. 3)"; //en: "'Name server %1$s'; // %1$s is the name server number (e.g. 3)"
$lang['Cpanel.add_row.remove_name_server'] = "Löschen"; //en: "'Remove'"
$lang['Cpanel.add_row.add_btn'] = "Server hinzufügen"; //en: "'Add Server'"

$lang['Cpanel.edit_row.box_title'] = "cPanel Server bearbeiten"; //en: "'Edit cPanel Server'"
$lang['Cpanel.edit_row.basic_title'] = "Grundeinstellungen"; //en: "'Basic Settings'"
$lang['Cpanel.edit_row.name_servers_title'] = "Namenserver"; //en: "'Name Servers'"
$lang['Cpanel.edit_row.notes_title'] = "Notizen"; //en: "'Notes'"
$lang['Cpanel.edit_row.name_server_btn'] = "Weiteren Nameserver hinzufügen"; //en: "'Add Additional Name Server'"
$lang['Cpanel.edit_row.name_server_col'] = "Nameserver"; //en: "'Name Server'"
$lang['Cpanel.edit_row.name_server_host_col'] = "Hostname"; //en: "'Hostname'"
$lang['Cpanel.edit_row.name_server'] = "Nameserver: %1\$s"; // %1$s is the name server number (e.g. 3)"; //en: "'Name server %1$s'; // %1$s is the name server number (e.g. 3)"
$lang['Cpanel.edit_row.remove_name_server'] = "Löschen"; //en: "'Remove'"
$lang['Cpanel.edit_row.add_btn'] = "Server bearbeiten"; //en: "'Edit Server'"

$lang['Cpanel.row_meta.server_name'] = "Server Bezeichnung"; //en: "'Server Label'"
$lang['Cpanel.row_meta.host_name'] = "Hostname"; //en: "'Hostname'"
$lang['Cpanel.row_meta.user_name'] = "Benutzername"; //en: "'User Name'"
$lang['Cpanel.row_meta.key'] = "Token (oder Fernschlüssel)"; //en: "'Token (or Remote Key)'"
$lang['Cpanel.row_meta.use_ssl'] = "Verwenden Sie SSL bei der Verbindung mit API (empfohlen)"; //en: "'Use SSL when connecting to the API (recommended)'"
$lang['Cpanel.row_meta.account_limit'] = "Account Limit"; //en: "'Account Limit'"

// Package fields
$lang['Cpanel.package_fields.type'] = "Account Typ"; //en: "'Account Type'"
$lang['Cpanel.package_fields.type_standard'] = "Standard"; //en: "'Standard'"
$lang['Cpanel.package_fields.type_reseller'] = "Wiederverkäufer"; //en: "'Reseller'"
$lang['Cpanel.package_fields.package'] = "cPanel-Paket"; //en: "'cPanel Package'"
$lang['Cpanel.package_fields.acl'] = "Zugriffskontrollliste"; //en: "'Access Control List'"
$lang['Cpanel.package_fields.acl_default'] = "Standard"; //en: "'Default'"
$lang['Cpanel.package_fields.account_limit'] = 'Account Limit';
$lang['Cpanel.package_fields.dedicated_ip'] = "Dedizierte IP"; //en: "'Dedicated IP'"
$lang['Cpanel.package_fields.sub_domains'] = 'Enable Selling Sub-Domains';
$lang['Cpanel.package_fields.sub_domains_enable'] = 'Enable';
$lang['Cpanel.package_fields.sub_domains_disable'] = 'Disable';
$lang['Cpanel.package_fields.domains_list'] = 'Available Domains List';
$lang['Cpanel.package_fields.dedicated_ip_no'] = "Nein"; //en: "'No'"
$lang['Cpanel.package_fields.dedicated_ip_yes'] = "Ja"; //en: "'Yes'"

// Service fields
$lang['Cpanel.service_field.domain'] = "Domain"; //en: "'Domain'"
$lang['Cpanel.service_field.sub_domain'] = 'Sub-Domain';
$lang['Cpanel.service_field.username'] = "Benutzername"; //en: "'Username'"
$lang['Cpanel.service_field.password'] = "Passwort"; //en: "'Password'"
$lang['Cpanel.service_field.confirm_password'] = "Passwort bestätigen"; //en: "'Confirm Password'"
$lang['Cpanel.service_field.text_generate_password'] = 'Generate Password';

// Service management
$lang['Cpanel.tab_stats.info_title'] = "Information"; //en: "'Information'"
$lang['Cpanel.tab_stats.info_heading.field'] = "Feld"; //en: "'Field'"
$lang['Cpanel.tab_stats.info_heading.value'] = "Wert"; //en: "'Value'"
$lang['Cpanel.tab_stats.info.domain'] = "Domain"; //en: "'Domain'"
$lang['Cpanel.tab_stats.info.ip'] = "IP Adresse"; //en: "'IP Address'"
$lang['Cpanel.tab_stats.bandwidth_title'] = "Bandbreite"; //en: "'Bandwidth'"
$lang['Cpanel.tab_stats.bandwidth_heading.used'] = "Verbraucht"; //en: "'Used'"
$lang['Cpanel.tab_stats.bandwidth_heading.limit'] = "Limit"; //en: "'Limit'"
$lang['Cpanel.tab_stats.bandwidth_value'] = "%1\$s MB"; // %1$s is the amount of bandwidth in MB"; //en: "'%1$s MB'; // %1$s is the amount of bandwidth in MB"
$lang['Cpanel.tab_stats.bandwidth_unlimited'] = "unendlich"; //en: "'unlimited'"
$lang['Cpanel.tab_stats.disk_title'] = "Disk"; //en: "'Disk'"
$lang['Cpanel.tab_stats.disk_heading.used'] = "Benutzt"; //en: "'Used'"
$lang['Cpanel.tab_stats.disk_heading.limit'] = "Limit"; //en: "'Limit'"
$lang['Cpanel.tab_stats.disk_value'] = "MB"; // %1$s is the amount of disk in MB"; //en: "'%1$s MB'; // %1$s is the amount of disk in MB"
$lang['Cpanel.tab_stats.disk_unlimited'] = "unbegrenzt"; //en: "'unlimited'"


// Client actions
$lang['Cpanel.tab_client_actions.change_password'] = "Passwort ändern"; //en: "'Change Password'"
$lang['Cpanel.tab_client_actions.field_cpanel_password'] = "Passwort"; //en: "'Password'"
$lang['Cpanel.tab_client_actions.field_cpanel_confirm_password'] = "Bestätige das Passwort"; //en: "'Confirm Password'"
$lang['Cpanel.tab_client_actions.field_password_submit'] = "Kennwort aktualisieren"; //en: "'Update Password'"


// Client Service management
$lang['Cpanel.tab_client_stats.info_title'] = "Information"; //en: "'Information'"
$lang['Cpanel.tab_client_stats.info_heading.field'] = "Feld"; //en: "'Field'"
$lang['Cpanel.tab_client_stats.info_heading.value'] = "Wert"; //en: "'Value'"
$lang['Cpanel.tab_client_stats.info.domain'] = "Domain"; //en: "'Domain'"
$lang['Cpanel.tab_client_stats.info.ip'] = "IP-Adresse"; //en: "'IP Address'"
$lang['Cpanel.tab_client_stats.bandwidth_title'] = "Bandbreitenverbrauch (Monat bis Datum)"; //en: "'Bandwidth Usage (Month to Date)'"
$lang['Cpanel.tab_client_stats.disk_title'] = "Festplattennutzung"; //en: "'Disk Usage'"
$lang['Cpanel.tab_client_stats.usage'] = "(%1\$s MB/%2\$s MB)"; // %1$s is the amount of resource usage, %2$s is the resource usage limit"; //en: "'(%1$s MB/%2$s MB)'; // %1$s is the amount of resource usage, %2$s is the resource usage limit"
$lang['Cpanel.tab_client_stats.usage_unlimited'] = "(%1\$s MB / ?)"; // %1$s is the amount of resource usage"; //en: "'(%1$s MB/∞)'; // %1$s is the amount of resource usage"


// Service info
$lang['Cpanel.service_info.username'] = "Nutzername"; //en: "'Username'"
$lang['Cpanel.service_info.password'] = "Passwort"; //en: "'Password'"
$lang['Cpanel.service_info.server'] = "Server"; //en: "'Server'"
$lang['Cpanel.service_info.options'] = "Optionen"; //en: "'Options'"
$lang['Cpanel.service_info.option_login'] = "Login"; //en: "'Log in'"


// Tooltips
$lang['Cpanel.package_fields.tooltip.domains_list'] = 'Enter a CSV list of domains that will be available to provision sub-domains for, e.g. "domain1.com,domain2.com,domain3.com"';
$lang['Cpanel.service_field.tooltip.username'] = "Sie können den Benutzernamen leer lassen, um automatisch einen zu generieren."; //en: "'You may leave the username blank to automatically generate one.'"
$lang['Cpanel.service_field.tooltip.password'] = "Sie können das Passwort leer lassen, um automatisch ein Passwort zu generieren."; //en: "'You may leave the password blank to automatically generate one.'"


// Errors
$lang['Cpanel.!error.server_name_valid'] = "Bitte geben Sie eine Serverbeschriftung ein."; //en: "'You must enter a Server Label.'"
$lang['Cpanel.!error.host_name_valid'] = "Der Hostname scheint ungültig zu sein."; //en: "'The Hostname appears to be invalid.'"
$lang['Cpanel.!error.user_name_valid'] = "Der Benutzername scheint ungültig zu sein."; //en: "'The User Name appears to be invalid.'"
$lang['Cpanel.!error.remote_key_valid'] = "Das Token (oder der Remote Key) scheint ungültig zu sein."; //en: "'The Token (or Remote Key) appears to be invalid.'"
$lang['Cpanel.!error.remote_key_valid_connection'] = "Eine Verbindung zum Server konnte nicht hergestellt werden. Überprüfen Sie, ob Hostname, Benutzername und Token (oder Remote Key) korrekt sind."; //en: "'A connection to the server could not be established. Please check to ensure that the Hostname, User Name, and Token (or Remote Key) are correct.'"
$lang['Cpanel.!error.account_limit_valid'] = "Das Kontolimit muss leer sein (für unbegrenzte Konten) oder auf einen ganzzahligen Wert gesetzt werden."; //en: "'Account Limit must be left blank (for unlimited accounts) or set to some integer value.'"
$lang['Cpanel.!error.name_servers_valid'] = "Einer oder mehrere der eingetragenen Nameserver sind ungültig."; //en: "'One or more of the name servers entered are invalid.'"
$lang['Cpanel.!error.name_servers_count'] = "Sie müssen mindestens 2 Nameserver definieren."; //en: "'You must define at least 2 name servers.'"
$lang['Cpanel.!error.meta[type].valid'] = "Account Typ muss Standard oder Reseller sein."; //en: "'Account type must be either standard or reseller.'"
$lang['Cpanel.!error.meta[sub_domains].valid'] = 'Enable Sub-Domains must be set to either enable or disable.';
$lang['Cpanel.!error.meta[domains_list].valid'] = "Es muss mindestens eine verfügbare Domain festgelegt werden, und alle müssen einen gültigen Hostnamen darstellen."; //en: "'At least one available domain must be set and they must all represent a valid host name.'"
$lang['Cpanel.!error.meta[account_limit].valid'] = 'Account limit must be a number.';
$lang['Cpanel.!error.meta[package].empty'] = "Ein cPanel-Paket erforderlich."; //en: "'A cPanel Package is required.'"
$lang['Cpanel.!error.meta[dedicated_ip].format'] = "Die dedizierte IP muss auf 0 oder 1 eingestellt sein."; //en: "'The dedicated IP must be set to 0 or 1.'"
$lang['Cpanel.!error.api.internal'] = "Ein interner Fehler ist aufgetreten oder der Server lieferte keine Antwort auf die Anfrage."; //en: "'An internal error occurred, or the server did not respond to the request.'"
$lang['Cpanel.!error.module_row.missing'] = "Ein interner Fehler ist aufgetreten. Die Modulzeile ist nicht verfügbar."; //en: "'An internal error occurred. The module row is unavailable.'"

$lang['Cpanel.!error.cpanel_domain.format'] = "Bitte geben Sie einen gültigen Domain Namen an, zBsp. domain.com."; //en: "'Please enter a valid domain name, e.g. domain.com.'"
$lang['Cpanel.!error.cpanel_domain.valid'] = 'Invalid domain name.';
$lang['Cpanel.!error.cpanel_sub_domain.format'] = "Bitte gib eine korrekte Sub-Domain an z.B \"site\"."; //en: "'Please enter a valid sub-domain name, e.g. "site".'"
$lang['Cpanel.!error.cpanel_sub_domain.availability'] = 'The sub-domain provided is not available.';
$lang['Cpanel.!error.cpanel_username.format'] = "Der Benutzername darf nur Buchstaben und Zahlen enthalten und darf nicht mit einer Zahl beginnen."; //en: "'The username may contain only letters and numbers and may not start with a number.'"
$lang['Cpanel.!error.cpanel_username.test'] = "Der Benutzername darf nicht mit \"test\" beginnen."; //en: "The username may not begin with 'test'."
$lang['Cpanel.!error.cpanel_username.length'] = "Der Benutzername muss zwischen 1 und 16 Zeichen lang sein."; //en: "'The username must be between 1 and 16 characters in length.'"
$lang['Cpanel.!error.cpanel_password.valid'] = "Password muss mindestens 8 Zeichen lang sein."; //en: "'Password must be at least 8 characters in length.'"
$lang['Cpanel.!error.cpanel_password.matches'] = "Kennwort und Kennwortbestätigung stimmen nicht überein."; //en: "'Password and Confirm Password do not match.'"
$lang['Cpanel.!error.configoptions[dedicated_ip].format'] = 'The dedicated IP must be set to 0 or 1.';
