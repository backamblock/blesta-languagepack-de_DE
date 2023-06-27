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

$lang['DirectAdmin.!error.server_name.empty'] = "Sie müssen eine Serverkennzeichnung eingeben.";
$lang['DirectAdmin.!error.host_name.format'] = "Der Hostname scheint ungültig zu sein.";
$lang['DirectAdmin.!error.user_name.empty'] = "Sie müssen einen Benutzernamen eingeben.";
$lang['DirectAdmin.!error.password.format'] = "Sie müssen ein Passwort eingeben.";
$lang['DirectAdmin.!error.use_ssl.format'] = "Verwenden Sie SSL muss entweder wahr oder falsch sein.";
$lang['DirectAdmin.!error.account_limit.valid'] = "Kontolimit muss leer sein (für unbegrenzte Konten) oder auf einen ganzzahligen Wert gesetzt werden.";
$lang['DirectAdmin.!error.name_servers.valid'] = "Einer oder mehrere der eingegebenen Nameserver sind ungültig.";
$lang['DirectAdmin.!error.name_servers.count'] = "Sie müssen mindestens 2 Nameserver definieren.";
$lang['DirectAdmin.!error.api.internal'] = "Ein interner Fehler ist aufgetreten oder der Server hat auf die Anfrage nicht geantwortet.";
$lang['DirectAdmin.!error.meta[type].format'] = "Der Kontotyp muss entweder ein Benutzer oder ein Reseller sein.";
$lang['DirectAdmin.!error.meta[package].empty'] = "Ein DirectAdmin Paket ist erforderlich.";
$lang['DirectAdmin.!error.meta[ip].empty'] = "Eine IP-Adresse ist erforderlich.";
$lang['DirectAdmin.!error.direct_admin_domain.format'] = "Bitte geben Sie einen gültigen Domain-Namen des Formulars ein: domain.com";
$lang['DirectAdmin.!error.direct_admin_username.format'] = "Der Benutzername darf nur alphanumerische Zeichen enthalten.";
$lang['DirectAdmin.!error.direct_admin_username.length'] = "Der Benutzername muss zwischen 4 und 8 Zeichen lang sein.";
$lang['DirectAdmin.!error.direct_admin_email.format'] = "Bitte geben Sie eine gültige E-Mail-Adresse ein.";
$lang['DirectAdmin.!error.change_package.type'] = "Das Modul unterstützt keinen Wechsel zwischen Benutzer- und Resellerpaketen.";
$lang['DirectAdmin.name'] = "DirectAdmin";
$lang['DirectAdmin.module_row'] = "Server";
$lang['DirectAdmin.module_row_plural'] = "Server";
$lang['DirectAdmin.module_group'] = "Servergruppe";
$lang['DirectAdmin.tab_stats'] = "Statistiken";
$lang['DirectAdmin.servers.no_results'] = "Keine Server vorhanden.";
$lang['DirectAdmin.server_groups.no_results'] = "Es gibt keine Servergruppen.";
$lang['DirectAdmin.service_field.domain'] = "Domain";
$lang['DirectAdmin.service_field.username'] = "Benutzername";
$lang['DirectAdmin.service_field.password'] = "Passwort";
$lang['DirectAdmin.service_field.email'] = "Email";
$lang['DirectAdmin.service_info.username'] = "Benutzername";
$lang['DirectAdmin.service_info.password'] = "Passwort";
$lang['DirectAdmin.service_info.server'] = "Server";
$lang['DirectAdmin.service_info.options'] = "Optionen";
$lang['DirectAdmin.service_info.option_login'] = "Login";
$lang['DirectAdmin.package_fields.type'] = "Konto Typ";
$lang['DirectAdmin.package_fields.type_user'] = "Benutzer";
$lang['DirectAdmin.package_fields.type_reseller'] = "Reseller";
$lang['DirectAdmin.package_fields.package'] = "DirectAdmin Paket";
$lang['DirectAdmin.package_fields.ip'] = "IP-Adresse";
$lang['DirectAdmin.package_fields.ip_shared'] = "geteilt";
$lang['DirectAdmin.package_fields.ip_assign'] = "Zuweisen";
$lang['DirectAdmin.add_module_row'] = "Server hinzufügen";
$lang['DirectAdmin.add_module_group'] = "Servergruppe hinzufügen";
$lang['DirectAdmin.manage.module_rows_title'] = "Server";
$lang['DirectAdmin.manage.module_groups_title'] = "Servergruppen";
$lang['DirectAdmin.manage.module_rows_heading.name'] = "Serverkennzeichnung";
$lang['DirectAdmin.manage.module_rows_heading.host_name'] = "Hostname";
$lang['DirectAdmin.manage.module_rows_heading.accounts'] = "Konten";
$lang['DirectAdmin.manage.module_rows_heading.options'] = "Optionen";
$lang['DirectAdmin.manage.module_groups_heading.name'] = "Gruppenname";
$lang['DirectAdmin.manage.module_groups_heading.servers'] = "Serveranzahl";
$lang['DirectAdmin.manage.module_groups_heading.options'] = "Optionen";
$lang['DirectAdmin.manage.module_rows.count'] = "%1\$s / %2\$s"; // %1$s is the current number of accounts, %2$s is the total number of accounts available
$lang['DirectAdmin.manage.module_rows.edit'] = "Bearbeiten";
$lang['DirectAdmin.manage.module_groups.edit'] = "Bearbeiten";
$lang['DirectAdmin.manage.module_rows.delete'] = "Löschen";
$lang['DirectAdmin.manage.module_groups.delete'] = "Löschen";
$lang['DirectAdmin.manage.module_rows.confirm_delete'] = "Sind Sie sicher, dass Sie diesen Server löschen wollen?";
$lang['DirectAdmin.manage.module_groups.confirm_delete'] = "Sind Sie sicher, dass Sie diese Servergruppe löschen wollen?";
$lang['DirectAdmin.row_meta.server_name'] = "Serverkennzeichnung";
$lang['DirectAdmin.row_meta.host_name'] = "Hostname";
$lang['DirectAdmin.row_meta.user_name'] = "Benutzername";
$lang['DirectAdmin.row_meta.password'] = "Passwort";
$lang['DirectAdmin.row_meta.use_ssl'] = "Verwende SSL zum Verbinden mit der API (empfohlen)";
$lang['DirectAdmin.row_meta.account_limit'] = "Kontolimit";
$lang['DirectAdmin.row_meta.name_server'] = "Nameserver %1\$s"; // %1$s is the name server number (e.g. 2)
$lang['DirectAdmin.add_row.box_title'] = "DirectAdmin Server hinzufügen";
$lang['DirectAdmin.add_row.basic_title'] = "Grundeinstellungen";
$lang['DirectAdmin.add_row.name_servers_title'] = "Namenserver";
$lang['DirectAdmin.add_row.name_server_btn'] = "Weiteren Namenserver hinzufügen";
$lang['DirectAdmin.add_row.name_server_col'] = "Name Server";
$lang['DirectAdmin.add_row.name_server_host_col'] = "Hostname";
$lang['DirectAdmin.add_row.remove_name_server'] = "Entfernen";
$lang['DirectAdmin.add_row.notes_title'] = "Notizen";
$lang['DirectAdmin.add_row.add_btn'] = "Server hinzufügen";
$lang['DirectAdmin.edit_row.box_title'] = "Bearbeiten Sie DirectAdmin Server";
$lang['DirectAdmin.edit_row.basic_title'] = "Grundeinstellungen";
$lang['DirectAdmin.edit_row.name_servers_title'] = "Namenserver";
$lang['DirectAdmin.edit_row.name_server_btn'] = "Zusätzlichen Namenserver hinzufügen";
$lang['DirectAdmin.edit_row.name_server_col'] = "Nameserver";
$lang['DirectAdmin.edit_row.name_server_host_col'] = "Hostname";
$lang['DirectAdmin.edit_row.remove_name_server'] = "Entfernen";
$lang['DirectAdmin.edit_row.notes_title'] = "Notizen";
$lang['DirectAdmin.edit_row.add_btn'] = "Server bearbeiten";
$lang['DirectAdmin.tab_client_stats'] = "Statistiken";
$lang['DirectAdmin.tab_client_stats.info_title'] = "Informationen";
$lang['DirectAdmin.tab_client_stats.info_heading.field'] = "Feld";
$lang['DirectAdmin.tab_client_stats.info_heading.value'] = "Wert";
$lang['DirectAdmin.tab_client_stats.no_results'] = "Statistische Informationen sind aktuell nicht verfügbar.";
$lang['DirectAdmin.order_options.roundrobin'] = "Gleichmäßig unter den Servern verteilen";
$lang['DirectAdmin.!error.direct_admin_password.matches'] = "Passwort und Passwortbestätigung stimmen nicht überein.";
$lang['DirectAdmin.tab_client_actions'] = "Aktionen";
$lang['DirectAdmin.order_options.first'] = "Erster nicht voller Server";
$lang['DirectAdmin.tab_client_actions.change_password'] = "Passwort ändern";
$lang['DirectAdmin.tab_client_actions.field_direct_admin_password'] = "Passwort";
$lang['DirectAdmin.tab_client_actions.field_direct_admin_confirm_password'] = "Passwort bestätigen";
$lang['DirectAdmin.tab_client_actions.field_password_submit'] = "Passwort aktualisieren";
$lang['DirectAdmin.!error.port.format'] = "Der Port muss eine Nummer sein.";
$lang['DirectAdmin.service_field.text_generate_password'] = "Passwort generieren";
$lang['DirectAdmin.row_meta.default_port'] = "2222";
$lang['DirectAdmin.tab_client_actions.text_generate_password'] = "Passwort generieren";
?>