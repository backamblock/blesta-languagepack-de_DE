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

$lang['Proxmox.!actions.boot'] = "Boot";
$lang['Proxmox.!actions.shutdown'] = "Herunterfahren";
$lang['Proxmox.!actions.mount_iso'] = "ISO Einbinden";
$lang['Proxmox.!actions.unmount_iso'] = "ISO aushängen";
$lang['Proxmox.!actions.reinstall'] = "Neuinstallieren";
$lang['Proxmox.!actions.hostname'] = "

Hostname ändern
";
$lang['Proxmox.!actions.password'] = "Passwort ändern";
$lang['Proxmox.!error.server_name.empty'] = "Bitte Server Bezeichnung eingeben.";
$lang['Proxmox.!error.user.empty'] = "Bitte geben Sie einen Benutzer an.";
$lang['Proxmox.!error.password.empty'] = "Bitte Passwort eingeben.";
$lang['Proxmox.!error.host.format'] = "

Der Hostname scheint ungültig zu sein.
";
$lang['Proxmox.!error.port.format'] = "Bitte geben Sie eine gültige Portnummer ein.";
$lang['Proxmox.!error.vmid.format'] = "

Bitte geben Sie eine gültige VMID ein.
";
$lang['Proxmox.!error.storage.format'] = "Bitte geben Sie einen gültigen Pfad ein";
$lang['Proxmox.!error.default_template.format'] = "

Bitte geben Sie eine gültige Standardvorlage ein.
";
$lang['Proxmox.!error.ips.empty'] = "

Bitte geben Sie die IPs ein.
";
$lang['Proxmox.!error.meta[type].valid'] = "Bitte wählen Sie einen gültigen Virtualisierungstyp.";
$lang['Proxmox.!error.meta[nodes].empty'] = "

Bitte wählen Sie mindestens einen Knoten aus.
";
$lang['Proxmox.!error.meta[memory].format'] = "Bitte RAM einstellen.";
$lang['Proxmox.!error.meta[cpu].format'] = "Bitte legen Sie die vCPU-Anzahl fest.";
$lang['Proxmox.!error.meta[hdd].format'] = "Bitte legen Sie die Festplattengröße fest.";
$lang['Proxmox.!error.meta[set_template].format'] = "Legen Sie fest, ob eine Vorlage ausgewählt werden soll oder ob Clients eine Vorlage festlegen können.";
$lang['Proxmox.!error.meta[template].empty'] = "Bitte wählen Sie eine Vorlage.";
$lang['Proxmox.!error.api.internal'] = "

Es ist ein interner Fehler aufgetreten oder der Server hat auf die Anforderung nicht geantwortet.
";
$lang['Proxmox.!error.proxmox_hostname.format'] = "Der Hostname scheint ungültig zu sein.";
$lang['Proxmox.!error.proxmox_template.valid'] = "Bitte wählen Sie ein gültiges Template";
$lang['Proxmox.!error.create_client.failed'] = "Ein interner Fehler ist aufgetreten und das Kundenkonto konnte nicht erstellt werden.";
$lang['Proxmox.!error.api.template.valid'] = "Die ausgewählte Vorlage ist ungültig.";
$lang['Proxmox.!error.api.confirm.valid'] = "Sie müssen bestätigen, dass Sie die Neuinstallationsaktion verstehen, um die Neuinstallation der Vorlage durchführen zu können.";
$lang['Proxmox.!error.proxmox_root_password.length'] = "

Das Root-Passwort muss mindestens 6 Zeichen lang sein.
";
$lang['Proxmox.!error.proxmox_root_password.matches'] = "Die Root-Passwörter stimmen nicht überein.";
$lang['Proxmox.please_select'] = "-- Bitte auswählen --";
$lang['Proxmox.!bytes.value'] = "%1\$s%2\$s"; // %1$s is a number value, %2$s is the unit of that value (i.e., one of B, KB, MB, GB)
$lang['Proxmox.!percent.used'] = "%1\$s%"; // %1$s is a percentage value
$lang['Proxmox.name'] = "Proxmox";
$lang['Proxmox.module_row'] = "Proxmox Haupt Server";
$lang['Proxmox.module_row_plural'] = "Server";
$lang['Proxmox.module_group'] = "Proxmox Master Group";
$lang['Proxmox.add_module_row'] = "Server hinzufügen";
$lang['Proxmox.add_module_group'] = "Server-Gruppe hinzufügen";
$lang['Proxmox.manage.module_rows_title'] = "Proxmox Master Server";
$lang['Proxmox.manage.module_groups_title'] = "Proxmox Master Server Gruppen";
$lang['Proxmox.manage.module_rows_heading.server_label'] = "Server Name";
$lang['Proxmox.manage.module_rows_heading.host'] = "Hostname";
$lang['Proxmox.manage.module_rows_heading.options'] = "Optionen";
$lang['Proxmox.manage.module_groups_heading.name'] = "Gruppenname";
$lang['Proxmox.manage.module_groups_heading.servers'] = "Anzahl der Server";
$lang['Proxmox.manage.module_groups_heading.options'] = "Optionen";
$lang['Proxmox.manage.module_rows.edit'] = "Bearbeiten";
$lang['Proxmox.manage.module_groups.edit'] = "Bearbeiten";
$lang['Proxmox.manage.module_rows.delete'] = "Löschen";
$lang['Proxmox.manage.module_groups.delete'] = "Löschen";
$lang['Proxmox.manage.module_rows.confirm_delete'] = "

Möchten Sie diesen Server wirklich löschen?
";
$lang['Proxmox.manage.module_groups.confirm_delete'] = "Möchten Sie diese Servergruppe wirklich löschen?";
$lang['Proxmox.manage.module_rows_no_results'] = "

Es gibt keine Server.
";
$lang['Proxmox.manage.module_groups_no_results'] = "Es gibt keine Servergruppen.";
$lang['Proxmox.order_options.first'] = "Erster nicht vollständiger Server";
$lang['Proxmox.row_meta.server_name'] = "Serverkennzeichnung";
$lang['Proxmox.row_meta.user'] = "Benutzer";
$lang['Proxmox.row_meta.password'] = "Passwort";
$lang['Proxmox.row_meta.host'] = "Hostname";
$lang['Proxmox.row_meta.port'] = "SSL Port Nummer";
$lang['Proxmox.row_meta.vmid'] = "Nächste VMID (nicht ändern, wenn nötig!)";
$lang['Proxmox.row_meta.storage'] = "Standardspeichername (z. B. lokal)";
$lang['Proxmox.row_meta.default_storage'] = "lokal";
$lang['Proxmox.row_meta.default_vmid'] = "200";
$lang['Proxmox.row_meta.default_port'] = "8006";
$lang['Proxmox.row_meta.default_template'] = "Standardvorlage";
$lang['Proxmox.row_meta.ips'] = "IPs (eine pro Zeile)";
$lang['Proxmox.types.openvz'] = "OpenVZ";
$lang['Proxmox.types.kvm'] = "KVM";
$lang['Proxmox.add_row.box_title'] = "Proxmox Server hinzufügen";
$lang['Proxmox.add_row.basic_title'] = "Basis-Einstellungen";
$lang['Proxmox.add_row.add_btn'] = "

Server hinzufügen
";
$lang['Proxmox.edit_row.box_title'] = "

Proxmox Server bearbeiten
";
$lang['Proxmox.edit_row.basic_title'] = "Grundeinstellungen";
$lang['Proxmox.edit_row.add_btn'] = "

Server aktualisieren
";
$lang['Proxmox.package_fields.type'] = "Typ";
$lang['Proxmox.package_fields.hdd'] = "Festplatten-Speicher (GB)";
$lang['Proxmox.package_fields.memory'] = "RAM (MB)";
$lang['Proxmox.package_fields.cpu'] = "vCPU-Anzahl";
$lang['Proxmox.package_fields.netspeed'] = "

Netzwerkgeschwindigkeit (MByte/s)
";
$lang['Proxmox.package_fields.assigned_nodes'] = "

Zugewiesene Knoten
";
$lang['Proxmox.package_fields.available_nodes'] = "Verfügbare Knoten";
$lang['Proxmox.service_field.proxmox_hostname'] = "Hostname";
$lang['Proxmox.service_field.proxmox_template'] = "Template";
$lang['Proxmox.service_info.proxmox_ip'] = "Primäre IP-Adresse";
$lang['Proxmox.service_info.proxmox_username'] = "Nutzername";
$lang['Proxmox.tab_actions'] = "Serveraktionen";
$lang['Proxmox.tab_stats'] = "Statistiken";
$lang['Proxmox.tab_console'] = "Konsole";
$lang['Proxmox.tab_actions.heading_actions'] = "Aktionen";
$lang['Proxmox.tab_actions.status_running'] = "Online";
$lang['Proxmox.tab_actions.status_stopped'] = "Offline";
$lang['Proxmox.tab_actions.status_disabled'] = "Deaktiviert";
$lang['Proxmox.tab_actions.server_status'] = "Server Status";
$lang['Proxmox.tab_actions.heading_mount_iso'] = "ISO einhängen
";
$lang['Proxmox.tab_actions.heading_reinstall'] = "Neuinstallieren";
$lang['Proxmox.tab_actions.field_iso'] = "Bild";
$lang['Proxmox.tab_actions.field_mount_submit'] = "Mount";
$lang['Proxmox.tab_actions.field_template'] = "Vorlage";
$lang['Proxmox.tab_actions.field_reinstall_submit'] = "Neuinstallieren";
$lang['Proxmox.tab_client_actions.heading_server_status'] = "Server Status";
$lang['Proxmox.tab_client_actions.status_running'] = "Online";
$lang['Proxmox.tab_client_actions.status_stopped'] = "Offline";
$lang['Proxmox.tab_client_actions.status_disabled'] = "Deaktiviert";
$lang['Proxmox.tab_client_actions.heading_mount_iso'] = "Mount ISO";
$lang['Proxmox.tab_client_actions.heading_reinstall'] = "Neuinstallieren";
$lang['Proxmox.tab_client_actions.field_iso'] = "Bild";
$lang['Proxmox.tab_client_actions.field_mount_submit'] = "Einhängen";
$lang['Proxmox.tab_client_actions.field_template'] = "Vorlage";
$lang['Proxmox.tab_client_actions.field_password'] = "Root-Passwort";
$lang['Proxmox.tab_client_actions.field_reinstall_submit'] = "Neu installieren";
$lang['Proxmox.tab_stats.heading_stats'] = "Statistiken";
$lang['Proxmox.tab_stats.memory'] = "Erinnerung:";
$lang['Proxmox.tab_stats.memory_stats'] = "%1\$s/%2\$s"; // %1$s is the memory used, %2$s is the total memory available
$lang['Proxmox.tab_stats.memory_percent_available'] = "

(%1\$s%%)
"; // %1$s is the percentage of memory used. You MUST use two % signs to represent a single percent (i.e. %%)
$lang['Proxmox.tab_stats.heading_graphs'] = "Grafik";
$lang['Proxmox.tab_client_stats.heading_stats'] = "Statistiken";
$lang['Proxmox.tab_client_stats.heading_graphs'] = "

Diagramme
";
$lang['Proxmox.tab_console.heading_console'] = "Konsole";
$lang['Proxmox.tab_console.vnc_ip'] = "VNC Host:";
$lang['Proxmox.tab_console.vnc_port'] = "VNC-Port:";
$lang['Proxmox.tab_console.vnc_user'] = "VNC Benutzername:";
$lang['Proxmox.tab_console.vnc_password'] = "VNC-Passwort:";
$lang['Proxmox.tab_client_console.heading_console'] = "Konsole";
$lang['Proxmox.tab_actions.field_password'] = "Root-Passwort";
$lang['Proxmox.tab_client_actions.heading_actions'] = "Serveraktionen";
$lang['Proxmox.tab_client_console.vnc_ip'] = "VNC-Host";
$lang['Proxmox.tab_client_console.vnc_port'] = "VNC-Anschluss";
$lang['Proxmox.tab_client_console.vnc_user'] = "

VNC-Benutzername
";
$lang['Proxmox.tab_client_console.vnc_password'] = "VNC-Passwort";
$lang['Proxmox.!error.api.unknown'] = "Ein unbekannter Fehler ist aufgetreten. Bitte versuchen Sie es später erneut.";
?>