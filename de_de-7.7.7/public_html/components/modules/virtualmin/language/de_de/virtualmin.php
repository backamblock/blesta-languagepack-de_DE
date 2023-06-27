<?php
/**
 * actually GOOD de_de Language definitions. Translated by backamblock on Github
 * 
 * @package blesta
 * @version 7.7.7
 * @copyright Copyright (c) 2023, backamblock on Github
 * @license https://github.com/backamblock/ backamblock on Github - FREE for everybody
 * @link https://github.com/backamblock/ backamblock on Github
 */

$lang['Virtualmin.name'] = "VirtualMin";
$lang['Virtualmin.module_row'] = "Server";
$lang['Virtualmin.module_row_plural'] = "Server";
$lang['Virtualmin.module_group'] = "Servergruppe";
$lang['Virtualmin.tab_stats'] = "Statistiken";
$lang['Virtualmin.tab_client_actions'] = "Aktionen";
$lang['Virtualmin.add_module_row'] = "

Server hinzufügen
";
$lang['Virtualmin.add_module_group'] = "Servergruppe hinzufügen";
$lang['Virtualmin.manage.module_rows_title'] = "Server";
$lang['Virtualmin.manage.module_groups_title'] = "Servergruppen";
$lang['Virtualmin.manage.module_rows_heading.name'] = "

Server-Bezeichnung
";
$lang['Virtualmin.manage.module_rows_heading.hostname'] = "Hostname";
$lang['Virtualmin.manage.module_rows_heading.port'] = "Port";
$lang['Virtualmin.manage.module_rows_heading.accounts'] = "Konten";
$lang['Virtualmin.manage.module_rows_heading.options'] = "Optionen";
$lang['Virtualmin.manage.module_groups_heading.name'] = "Gruppenname";
$lang['Virtualmin.manage.module_groups_heading.servers'] = "Serveranzahl";
$lang['Virtualmin.manage.module_groups_heading.options'] = "Optionen";
$lang['Virtualmin.manage.module_rows.count'] = "%1\$s / %2\$s"; // %1$s is the current number of accounts, %2$s is the total number of accounts available
$lang['Virtualmin.manage.module_rows.edit'] = "Bearbeiten";
$lang['Virtualmin.manage.module_groups.edit'] = "Bearbeiten";
$lang['Virtualmin.manage.module_rows.delete'] = "Löschen";
$lang['Virtualmin.manage.module_groups.delete'] = "Löschen";
$lang['Virtualmin.manage.module_rows.confirm_delete'] = "Möchten Sie diesen Server wirklich löschen?";
$lang['Virtualmin.manage.module_groups.confirm_delete'] = "

Möchten Sie diese Servergruppe wirklich löschen?
";
$lang['Virtualmin.manage.module_rows_no_results'] = "Es gibt keine Server.";
$lang['Virtualmin.manage.module_groups_no_results'] = "Es sind keine Servergruppen vorhanden";
$lang['Virtualmin.order_options.first'] = "Erster nicht voller Server";
$lang['Virtualmin.add_row.box_title'] = "VirtualMin Server hinzufügen";
$lang['Virtualmin.add_row.basic_title'] = "Grundeinstellungen";
$lang['Virtualmin.add_row.add_btn'] = "

Server hinzufügen
";
$lang['Virtualmin.edit_row.box_title'] = "VirtualMin-Server bearbeiten";
$lang['Virtualmin.edit_row.basic_title'] = "Grundeinstellungen";
$lang['Virtualmin.edit_row.add_btn'] = "Server bearbeiten";
$lang['Virtualmin.row_meta.server_name'] = "Serverkennzeichnung";
$lang['Virtualmin.row_meta.host_name'] = "Hostname";
$lang['Virtualmin.row_meta.user_name'] = "Benutzername";
$lang['Virtualmin.row_meta.password'] = "Passwort";
$lang['Virtualmin.row_meta.port'] = "Port";
$lang['Virtualmin.row_meta.use_ssl'] = "Verwenden Sie SSL, wenn Sie eine Verbindung zur API herstellen (empfohlen)";
$lang['Virtualmin.row_meta.account_limit'] = "Kontolimit";
$lang['Virtualmin.package_fields.plan'] = "VirtualMin-Plan";
$lang['Virtualmin.package_fields.template'] = "VirtualMin-Vorlage";
$lang['Virtualmin.service_field.domain'] = "

Domain
";
$lang['Virtualmin.service_field.username'] = "Benutzername";
$lang['Virtualmin.service_field.password'] = "Passwort";
$lang['Virtualmin.service_field.confirm_password'] = "Passwort bestätigen";
$lang['Virtualmin.tab_client_actions.change_password'] = "Passwort ändern";
$lang['Virtualmin.tab_client_actions.field_virtualmin_password'] = "Passwort";
$lang['Virtualmin.tab_client_actions.field_virtualmin_confirm_password'] = "

Passwort bestätigen
";
$lang['Virtualmin.tab_client_actions.field_password_submit'] = "Kennwort aktualisieren";
$lang['Virtualmin.tab_stats.info_title'] = "Information";
$lang['Virtualmin.tab_stats.info_heading.field'] = "Feld";
$lang['Virtualmin.tab_stats.info_heading.value'] = "Wert";
$lang['Virtualmin.tab_stats.info.disk_used'] = "Verwendeter Speicherplatz";
$lang['Virtualmin.tab_stats.info.databases_size'] = "Datenbankgröße";
$lang['Virtualmin.tab_stats.info.databases_count'] = "Datenbankanzahl";
$lang['Virtualmin.tab_stats.info.maximum_databases'] = "Maximale Datenbanken";
$lang['Virtualmin.tab_stats.info.maximum_mailboxes'] = "

Maximale Postfächer
";
$lang['Virtualmin.service_info.username'] = "Nutzername";
$lang['Virtualmin.service_info.password'] = "

Passwort
";
$lang['Virtualmin.service_info.server'] = "Server";
$lang['Virtualmin.service_info.options'] = "Optionen";
$lang['Virtualmin.service_info.option_login'] = "Einloggen";
$lang['Virtualmin.service_field.tooltip.username'] = "

Sie können den Benutzernamen leer lassen, um automatisch einen zu erstellen.
";
$lang['Virtualmin.service_field.tooltip.password'] = "Sie können das Passwort leer lassen, um automatisch ein Passwort zu generieren.";
$lang['Virtualmin.!error.server_name_valid'] = "Sie müssen eine Server-Bezeichnung eingeben.";
$lang['Virtualmin.!error.host_name_valid'] = "Der Hostname scheint ungültig zu sein.";
$lang['Virtualmin.!error.user_name_valid'] = "Der Benutzername scheint ungültig zu sein.";
$lang['Virtualmin.!error.port_valid'] = "Der Port scheint ungültig zu sein.";
$lang['Virtualmin.!error.password_valid'] = "Das Passwort scheint ungültig zu sein.";
$lang['Virtualmin.!error.account_limit_valid'] = "Bitte geben Sie ein gültiges Kontolimit ein.";
$lang['Virtualmin.!error.meta[plan].empty'] = "Ein VirtualMin-Plan ist erforderlich.";
$lang['Virtualmin.!error.meta[template].empty'] = "Eine VirtualMin-Vorlage ist erforderlich.";
$lang['Virtualmin.!error.api.internal'] = "Ein interner Fehler ist aufgetreten oder der Server hat auf die Anfrage nicht geantwortet.";
$lang['Virtualmin.!error.module_row.missing'] = "Ein interner Fehler ist aufgetreten. Die Modulzeile ist nicht verfügbar.";
$lang['Virtualmin.!error.virtualmin_domain.format'] = "

Bitte geben Sie einen gültigen Domainnamen ein, z.B. domain.com.
";
$lang['Virtualmin.!error.virtualmin_domain.test'] = "Der Domänenname kann nicht mit \"test\" beginnen.";
$lang['Virtualmin.!error.virtualmin_username.format'] = "Der Benutzername darf nur Buchstaben und Zahlen enthalten und darf nicht mit einer Zahl beginnen.";
$lang['Virtualmin.!error.virtualmin_username.test'] = "Der Benutzername darf nicht mit \"test\" beginnen.";
$lang['Virtualmin.!error.virtualmin_username.length'] = "Der Benutzername muss zwischen 1 und 16 Zeichen lang sein.";
$lang['Virtualmin.!error.virtualmin_password.valid'] = "Das Passwort muss mindestens 8 Zeichen lang sein.";
?>