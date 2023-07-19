<?php

// Actions
$lang['Proxmox.!actions.boot'] = "Boot"; //en: "'Boot'"
$lang['Proxmox.!actions.shutdown'] = "Herunterfahren"; //en: "'Shutdown'"
$lang['Proxmox.!actions.mount_iso'] = "ISO Einbinden"; //en: "'Mount ISO'"
$lang['Proxmox.!actions.unmount_iso'] = "ISO aushängen"; //en: "'Unmount ISO'"
$lang['Proxmox.!actions.reinstall'] = "Neuinstallieren"; //en: "'Reinstall'"
$lang['Proxmox.!actions.hostname'] = "Hostname ändern"; //en: "'Change Hostname'"
$lang['Proxmox.!actions.password'] = "Passwort ändern"; //en: "'Change Password'"


// Errors
$lang['Proxmox.!error.server_name.empty'] = "Bitte Server Bezeichnung eingeben."; //en: "'Please enter a server label.'"
$lang['Proxmox.!error.user.empty'] = "Bitte geben Sie einen Benutzer an."; //en: "'Please enter a user.'"
$lang['Proxmox.!error.password.empty'] = "Bitte Passwort eingeben."; //en: "'Please enter a password.'"
$lang['Proxmox.!error.host.format'] = "Der Hostname scheint ungültig zu sein."; //en: "'The hostname appears to be invalid.'"
$lang['Proxmox.!error.port.format'] = "Bitte geben Sie eine gültige Portnummer ein."; //en: "'Please enter a valid port number.'"
$lang['Proxmox.!error.vmid.format'] = "Bitte geben Sie eine gültige VMID ein."; //en: "'Please enter a valid VMID.'"
$lang['Proxmox.!error.ips.empty'] = "Bitte geben Sie die IPs ein."; //en: "'Please enter IPs.'"

$lang['Proxmox.!error.meta[type].valid'] = "Bitte wählen Sie einen gültigen Virtualisierungstyp."; //en: "'Please select a valid virtualization type.'"
$lang['Proxmox.!error.meta[nodes].empty'] = "Bitte wählen Sie mindestens einen Knoten aus."; //en: "'Please select at least one node.'"
$lang['Proxmox.!error.meta[memory].format'] = "Bitte RAM einstellen."; //en: "'Please set RAM.'"
$lang['Proxmox.!error.meta[cpu].format'] = "Bitte legen Sie die vCPU-Anzahl fest."; //en: "'Please set vCPU count.'"
$lang['Proxmox.!error.meta[hdd].format'] = "Bitte legen Sie die Festplattengröße fest."; //en: "'Please set HDD size.'"
$lang['Proxmox.!error.meta[netspeed].format'] = 'Please set NetSpeed.';
$lang['Proxmox.!error.meta[default_template].empty'] = 'Please enter a valid template.';
$lang['Proxmox.!error.meta[storage].format'] = 'Please enter a valid storage.';
$lang['Proxmox.!error.meta[default_template].format'] = 'Please enter a valid default template.';
$lang['Proxmox.!error.meta[template_storage].format'] = 'Please enter a valid template storage.';

$lang['Proxmox.!error.api.unknown'] = "Ein unbekannter Fehler ist aufgetreten. Bitte versuchen Sie es später erneut."; //en: "'An unknown error occurred, please try again later.'"
$lang['Proxmox.!error.api.internal'] = "Es ist ein interner Fehler aufgetreten oder der Server hat auf die Anforderung nicht geantwortet."; //en: "'An internal error occurred, or the server did not respond to the request.'"

$lang['Proxmox.!error.proxmox_hostname.format'] = "Der Hostname scheint ungültig zu sein."; //en: "'The hostname appears to be invalid.'"
$lang['Proxmox.!error.proxmox_template.valid'] = "Bitte wählen Sie ein gültiges Template"; //en: "'Please select a valid template.'"

$lang['Proxmox.!error.create_client.failed'] = "Ein interner Fehler ist aufgetreten und das Kundenkonto konnte nicht erstellt werden."; //en: "'An internal error occurred and the client account could not be created.'"

$lang['Proxmox.!error.api.template.valid'] = "Die ausgewählte Vorlage ist ungültig."; //en: "'The selected template is invalid.'"
$lang['Proxmox.!error.api.confirm.valid'] = "Sie müssen bestätigen, dass Sie die Neuinstallationsaktion verstehen, um die Neuinstallation der Vorlage durchführen zu können."; //en: "'You must acknowledge that you understand the reinstall action in order to perform the template reinstallation.'"

$lang['Proxmox.!error.proxmox_root_password.length'] = "Das Root-Passwort muss mindestens 6 Zeichen lang sein."; //en: "'The root password must be at least 6 characters in length.'"
$lang['Proxmox.!error.proxmox_root_password.matches'] = "Die Root-Passwörter stimmen nicht überein."; //en: "'The root passwords do not match.'"

$lang['Proxmox.!error.module_row.missing'] = 'An internal error occurred. The module row is unavailable.';


// Common
$lang['Proxmox.please_select'] = "-- Bitte auswählen --"; //en: "'-- Please Select --'"
$lang['Proxmox.!bytes.value'] = "%1\$s%2\$s"; // %1$s is a number value, %2$s is the unit of that value (i.e., one of B, KB, MB, GB)"; //en: "'%1$s%2$s'; // %1$s is a number value, %2$s is the unit of that value (i.e., one of B, KB, MB, GB)"
$lang['Proxmox.!uptime.value'] = '%3$s days, %2$s hours, %1$s minutes'; // %1$s is the number of uptime days, %2$s is the number of uptime hours, %3$s is the number of uptime minutes
$lang['Proxmox.!percent.used'] = "%1\$s%"; // %1$s is a percentage value"; //en: "'%1$s%'; // %1$s is a percentage value"

// Basics
$lang['Proxmox.name'] = "Proxmox"; //en: "'Proxmox'"
$lang['Proxmox.description'] = 'Proxmox Virtual Environment is an open-source server virtualization environment. It is a Debian-based Linux distribution with a modified Ubuntu LTS kernel and allows deployment and management of virtual machines and containers.';
$lang['Proxmox.module_row'] = "Proxmox Haupt Server"; //en: "'Proxmox Master Server'"
$lang['Proxmox.module_row_plural'] = "Server"; //en: "'Servers'"
$lang['Proxmox.module_group'] = "Proxmox Master Group"; //en: "'Proxmox Master Group'"


// Module management
$lang['Proxmox.add_module_row'] = "Server hinzufügen"; //en: "'Add Server'"
$lang['Proxmox.add_module_group'] = "Server-Gruppe hinzufügen"; //en: "'Add Server Group'"
$lang['Proxmox.manage.module_rows_title'] = "Proxmox Master Server"; //en: "'Proxmox Master Servers'"
$lang['Proxmox.manage.module_groups_title'] = "Proxmox Master Server Gruppen"; //en: "'Proxmox Master Server Groups'"
$lang['Proxmox.manage.module_rows_heading.server_label'] = "Server Name"; //en: "'Server Label'"
$lang['Proxmox.manage.module_rows_heading.host'] = "Hostname"; //en: "'Hostname'"
$lang['Proxmox.manage.module_rows_heading.options'] = "Optionen"; //en: "'Options'"
$lang['Proxmox.manage.module_groups_heading.name'] = "Gruppenname"; //en: "'Group Name'"
$lang['Proxmox.manage.module_groups_heading.servers'] = "Anzahl der Server"; //en: "'Server Count'"
$lang['Proxmox.manage.module_groups_heading.options'] = "Optionen"; //en: "'Options'"
$lang['Proxmox.manage.module_rows.edit'] = "Bearbeiten"; //en: "'Edit'"
$lang['Proxmox.manage.module_groups.edit'] = "Bearbeiten"; //en: "'Edit'"
$lang['Proxmox.manage.module_rows.delete'] = "Löschen"; //en: "'Delete'"
$lang['Proxmox.manage.module_groups.delete'] = "Löschen"; //en: "'Delete'"
$lang['Proxmox.manage.module_rows.confirm_delete'] = "Möchten Sie diesen Server wirklich löschen?"; //en: "'Are you sure you want to delete this server?'"
$lang['Proxmox.manage.module_groups.confirm_delete'] = "Möchten Sie diese Servergruppe wirklich löschen?"; //en: "'Are you sure you want to delete this server group?'"
$lang['Proxmox.manage.module_rows_no_results'] = "Es gibt keine Server."; //en: "'There are no servers.'"
$lang['Proxmox.manage.module_groups_no_results'] = "Es gibt keine Servergruppen."; //en: "'There are no server groups.'"

$lang['Proxmox.order_options.first'] = "Erster nicht vollständiger Server"; //en: "'First non-full server'"


// Module row meta data
$lang['Proxmox.row_meta.server_name'] = "Serverkennzeichnung"; //en: "'Server Label'"
$lang['Proxmox.row_meta.user'] = "Benutzer"; //en: "'User'"
$lang['Proxmox.row_meta.password'] = "Passwort"; //en: "'Password'"
$lang['Proxmox.row_meta.host'] = "Hostname"; //en: "'Hostname'"
$lang['Proxmox.row_meta.port'] = "SSL Port Nummer"; //en: "'SSL Port Number'"
$lang['Proxmox.row_meta.vmid'] = "Nächste VMID (nicht ändern, wenn nötig!)"; //en: "'Next VMID (do not change unless necessary!)'"
$lang['Proxmox.row_meta.default_vmid'] = "200"; //en: "'200'"
$lang['Proxmox.row_meta.default_port'] = "8006"; //en: "'8006'"
$lang['Proxmox.row_meta.ips'] = "IPs (eine pro Zeile)"; //en: "'IPs (one per line)'"


// Server types
$lang['Proxmox.types.lxc'] = 'LXC';
$lang['Proxmox.types.kvm'] = "KVM"; //en: "'KVM'"


// Set Unprivileged
$lang['Proxmox.unprivileged.disabled'] = 'Disabled';
$lang['Proxmox.unprivileged.enabled'] = 'Enabled';


// Add module row
$lang['Proxmox.add_row.box_title'] = "Proxmox Server hinzufügen"; //en: "'Add Proxmox Server'"
$lang['Proxmox.add_row.basic_title'] = "Basis-Einstellungen"; //en: "'Basic Settings'"
$lang['Proxmox.add_row.add_btn'] = "Server hinzufügen"; //en: "'Add Server'"


// Edit module row
$lang['Proxmox.edit_row.box_title'] = "Proxmox Server bearbeiten"; //en: "'Edit Proxmox Server'"
$lang['Proxmox.edit_row.basic_title'] = "Grundeinstellungen"; //en: "'Basic Settings'"
$lang['Proxmox.edit_row.add_btn'] = "Server aktualisieren"; //en: "'Update Server'"


// Package fields
$lang['Proxmox.package_fields.type'] = "Typ"; //en: "'Type'"
$lang['Proxmox.package_fields.storage'] = 'Storage Name';
$lang['Proxmox.package_fields.gateway'] = 'Network Gateway';
$lang['Proxmox.package_fields.template_storage'] = 'CT Template Storage Name';
$lang['Proxmox.package_fields.default_template'] = 'Default Template';
$lang['Proxmox.package_fields.hdd'] = "Festplatten-Speicher (GB)"; //en: "'Storage (GB)'"
$lang['Proxmox.package_fields.memory'] = "RAM (MB)"; //en: "'RAM (MB)'"
$lang['Proxmox.package_fields.cpu'] = "vCPU-Anzahl"; //en: "'vCPU Count'"
$lang['Proxmox.package_fields.netspeed'] = "Netzwerkgeschwindigkeit (MByte/s)"; //en: "'Network Speed Rate (MByte/s)'"
$lang['Proxmox.package_fields.cpulimit'] = 'CPU Limit';
$lang['Proxmox.package_fields.cpuunits'] = 'CPU Units';
$lang['Proxmox.package_fields.swap'] = 'SWAP (MB)';
$lang['Proxmox.package_fields.unprivileged'] = 'Unprivileged';

$lang['Proxmox.package_fields.assigned_nodes'] = "Zugewiesene Knoten"; //en: "'Assigned Nodes'"
$lang['Proxmox.package_fields.available_nodes'] = "Verfügbare Knoten"; //en: "'Available Nodes'"

$lang['Proxmox.package_fields.tooltip.storage'] = 'The name of the rootfs disk storage location where new VMs and CTs will be placed (should exist on all assigned nodes).';
$lang['Proxmox.package_fields.tooltip.template_storage'] = 'The name of the template storage location from which to fetch a list of templates.';


// Service fields
$lang['Proxmox.service_field.proxmox_hostname'] = "Hostname"; //en: "'Hostname'"
$lang['Proxmox.service_field.proxmox_password'] = 'Password';
$lang['Proxmox.service_field.proxmox_template'] = "Template"; //en: "'Template'"

$lang['Proxmox.service_field.tooltip.password'] = 'You may leave the password blank to automatically generate one.';


// Service Info fields
$lang['Proxmox.service_info.proxmox_ip'] = "Primäre IP-Adresse"; //en: "'Primary IP Address'"
$lang['Proxmox.service_info.proxmox_username'] = "Nutzername"; //en: "'Username'"
$lang['Proxmox.service_info.proxmox_password'] = 'Password';
$lang['Proxmox.service_info.vm_username'] = 'root / Administrator';
$lang['Proxmox.service_info.hostname'] = 'Hostname';
$lang['Proxmox.service_info.login'] = 'Login';
$lang['Proxmox.service_info.type'] = 'Type: ';
$lang['Proxmox.service_info.vm_memory'] = 'Memory';
$lang['Proxmox.service_info.cpu_usage'] = 'CPU Usage';
$lang['Proxmox.service_info.netspeed'] = 'MB/s';
$lang['Proxmox.service_info.uptime'] = 'Uptime';
$lang['Proxmox.service_info.informations'] = 'Informations';
$lang['Proxmox.service_info.vcpu'] = 'vCPU';
$lang['Proxmox.service_info.memory'] = 'MB RAM';


// Tabs
$lang['Proxmox.tab_actions'] = "Serveraktionen"; //en: "'Server Actions'"
$lang['Proxmox.tab_stats'] = "Statistiken"; //en: "'Stats'"
$lang['Proxmox.tab_console'] = "Konsole"; //en: "'Console'"


// Actions Tab
$lang['Proxmox.tab_actions.heading_actions'] = "Aktionen"; //en: "'Actions'"

$lang['Proxmox.tab_actions.status_running'] = "Online"; //en: "'Online'"
$lang['Proxmox.tab_actions.status_stopped'] = "Offline"; //en: "'Offline'"
$lang['Proxmox.tab_actions.status_disabled'] = "Deaktiviert"; //en: "'Disabled'"
$lang['Proxmox.tab_actions.server_status'] = "Server Status"; //en: "'Server Status'"

$lang['Proxmox.tab_actions.heading_mount_iso'] = "ISO einhängen"; //en: "'Mount ISO'"
$lang['Proxmox.tab_actions.heading_reinstall'] = "Neuinstallieren"; //en: "'Reinstall'"
$lang['Proxmox.tab_actions.field_iso'] = "Bild"; //en: "'Image'"
$lang['Proxmox.tab_actions.field_mount_submit'] = "Mount"; //en: "'Mount'"
$lang['Proxmox.tab_actions.field_template'] = "Vorlage"; //en: "'Template'"
$lang['Proxmox.tab_actions.field_password'] = "Root-Passwort"; //en: "'Root Password'"
$lang['Proxmox.tab_actions.field_reinstall_submit'] = "Neuinstallieren"; //en: "'Reinstall'"


// Client Actions Tab
$lang['Proxmox.tab_client_actions.heading_actions'] = "Serveraktionen"; //en: "'Server Actions'"
$lang['Proxmox.tab_client_actions.heading_server_status'] = "Server Status"; //en: "'Server Status'"

$lang['Proxmox.tab_client_actions.status_running'] = "Online"; //en: "'Online'"
$lang['Proxmox.tab_client_actions.status_stopped'] = "Offline"; //en: "'Offline'"
$lang['Proxmox.tab_client_actions.status_disabled'] = "Deaktiviert"; //en: "'Disabled'"

$lang['Proxmox.tab_client_actions.heading_mount_iso'] = "Mount ISO"; //en: "'Mount ISO'"
$lang['Proxmox.tab_client_actions.heading_reinstall'] = "Neuinstallieren"; //en: "'Reinstall'"
$lang['Proxmox.tab_client_actions.field_iso'] = "Bild"; //en: "'Image'"
$lang['Proxmox.tab_client_actions.field_mount_submit'] = "Einhängen"; //en: "'Mount'"
$lang['Proxmox.tab_client_actions.field_template'] = "Vorlage"; //en: "'Template'"
$lang['Proxmox.tab_client_actions.field_password'] = "Root-Passwort"; //en: "'Root password'"
$lang['Proxmox.tab_client_actions.field_reinstall_submit'] = "Neu installieren"; //en: "'Reinstall'"


// Stats Tab
$lang['Proxmox.tab_stats.heading_stats'] = "Statistiken"; //en: "'Statistics'"

$lang['Proxmox.tab_stats.memory'] = "Erinnerung:"; //en: "'Memory:'"
$lang['Proxmox.tab_stats.memory_stats'] = "%1\$s/%2\$s"; // %1$s is the memory used, %2$s is the total memory available"; //en: "'%1$s / %2$s'; // %1$s is the memory used, %2$s is the total memory available"
$lang['Proxmox.tab_stats.memory_percent_available'] = "(%1\$s%%)"; // %1$s is the percentage of memory used. You MUST use two % signs to represent a single percent (i.e. %%)"; //en: "'(%1$s%%)'; // %1$s is the percentage of memory used. You MUST use two % signs to represent a single percent (i.e. %%)"

$lang['Proxmox.tab_stats.heading_graphs'] = "Grafik"; //en: "'Graphs'"


// Client Stats Tab
$lang['Proxmox.tab_client_stats.heading_stats'] = "Statistiken"; //en: "'Statistics'"

$lang['Proxmox.tab_client_stats.heading_graphs'] = "Diagramme"; //en: "'Graphs'"


// Console Tab
$lang['Proxmox.tab_console.heading_console'] = "Konsole"; //en: "'Console'"

$lang['Proxmox.tab_console.vnc_ip'] = "VNC Host:"; //en: "'VNC Host:'"
$lang['Proxmox.tab_console.vnc_port'] = "VNC-Port:"; //en: "'VNC Port:'"
$lang['Proxmox.tab_console.vnc_user'] = "VNC Benutzername:"; //en: "'VNC Username:'"
$lang['Proxmox.tab_console.vnc_password'] = "VNC-Passwort:"; //en: "'VNC Password:'"


// Client Console Tab
$lang['Proxmox.tab_client_console.heading_console'] = "Konsole"; //en: "'Console'"

$lang['Proxmox.tab_client_console.vnc_ip'] = "VNC-Host"; //en: "'VNC Host'"
$lang['Proxmox.tab_client_console.vnc_port'] = "VNC-Anschluss"; //en: "'VNC Port'"
$lang['Proxmox.tab_client_console.vnc_user'] = "VNC-Benutzername"; //en: "'VNC Username'"
$lang['Proxmox.tab_client_console.vnc_password'] = "VNC-Passwort"; //en: "'VNC Password'"
