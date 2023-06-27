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

$lang['AdminDepartments.!success.department_created'] = "Die Abteilung %1\$s, wurde erfolgreich angelegt."; // %1$s is the name of the department
$lang['AdminDepartments.!success.department_updated'] = "Die Abteilung %1\$s wurde erfolgreich aktualisiert."; // %1$s is the name of the department
$lang['AdminDepartments.!success.department_deleted'] = "Die Abteilung %1\$s wurde erfolgreich gelöscht."; // %1$s is the name of the department
$lang['AdminDepartments.index.page_title'] = "Support Manager > Abteilungen";
$lang['AdminDepartments.add.page_title'] = "Support Manager -> Abteilungen -> Abteilung hinzufügen";
$lang['AdminDepartments.edit.page_title'] = "Support Manager > Abteilungen > Abteilung bearbeiten";
$lang['AdminDepartments.index.categorylink_adddepartment'] = "Abteilung hinzufügen";
$lang['AdminDepartments.index.boxtitle_departments'] = "Abteilungen";
$lang['AdminDepartments.index.heading_name'] = "Name";
$lang['AdminDepartments.index.heading_description'] = "Beschreibung";
$lang['AdminDepartments.index.heading_email'] = "Email";
$lang['AdminDepartments.index.heading_assigned_staff'] = "Zugewiesenes Personal";
$lang['AdminDepartments.index.heading_default_priority'] = "Standard Priorität";
$lang['AdminDepartments.index.heading_options'] = "Optionen";
$lang['AdminDepartments.index.option_edit'] = "Bearbeiten";
$lang['AdminDepartments.index.option_delete'] = "Löschen";
$lang['AdminDepartments.index.confirm_delete'] = "Abteilungen, denen Tickets zugewiesen sind, können nicht gelöscht werden, bis alle Tickets einer anderen Abteilung zugewiesen wurden. Möchten Sie diese Abteilung wirklich löschen?";
$lang['AdminDepartments.index.no_results'] = "Es existieren keine Abteilungen.";
$lang['AdminDepartments.assigned_staff.heading_staff'] = "Mitarbeiter";
$lang['AdminDepartments.assigned_staff.no_results'] = "Dieser Abteilung sind keine Mitarbeiter zugewiesen.";
$lang['AdminDepartments.!tooltip.piping_config'] = "Legen Sie Ihren Piping-Pfad wie gezeigt fest, verwenden Sie jedoch den richtigen Pfad zu PHP auf Ihrem Server. Stellen Sie sicher, dass pipe.php ausführbar ist. Möglicherweise müssen Sie pipe.php auch so bearbeiten, dass in Zeile 1 ein Hashbang eingefügt wird, der etwa wie folgt aussieht: #!/usr/bin/php";
$lang['AdminDepartments.add.boxtitle_adddepartment'] = "Abteilung hinzufügen";
$lang['AdminDepartments.add.field_name'] = "Name";
$lang['AdminDepartments.add.field_description'] = "Beschreibung";
$lang['AdminDepartments.add.field_clients_only'] = "Erlauben Sie nur Kunden, Tickets zu öffnen oder darauf zu antworten";
$lang['AdminDepartments.add.field_email'] = "E-Mail";
$lang['AdminDepartments.add.field_method'] = "E-Mail-Behandlung";
$lang['AdminDepartments.add.field_piping_config'] = "Rohrleitungskonfiguration";
$lang['AdminDepartments.add.field_default_priority'] = "Standard Priorität";
$lang['AdminDepartments.add.field_security'] = "Sicherheit";
$lang['AdminDepartments.add.field_box_name'] = "Boxname";
$lang['AdminDepartments.add.field_mark_messages'] = "Nachrichten als markieren";
$lang['AdminDepartments.add.field_host'] = "Host";
$lang['AdminDepartments.add.field_user'] = "Benutzer";
$lang['AdminDepartments.add.field_pass'] = "Bestanden";
$lang['AdminDepartments.add.field_port'] = "Port";
$lang['AdminDepartments.add.field_status'] = "Stauts";
$lang['AdminDepartments.add.field_addsubmit'] = "Abteilung hinzufügen";
$lang['AdminDepartments.edit.boxtitle_adddepartment'] = "Abteilung bearbeiten";
$lang['AdminDepartments.edit.field_name'] = "Name";
$lang['AdminDepartments.edit.field_description'] = "Beschreibung";
$lang['AdminDepartments.edit.field_clients_only'] = "Nur Kunden erlauben Tickets zu öffnen oder zu antworten";
$lang['AdminDepartments.edit.field_email'] = "E-Mail";
$lang['AdminDepartments.edit.field_method'] = "E-Mail Handhabung";
$lang['AdminDepartments.edit.field_piping_config'] = "Rohrleitungskonfiguration";
$lang['AdminDepartments.edit.field_default_priority'] = "Standardpriorität";
$lang['AdminDepartments.edit.field_security'] = "Sicherheit";
$lang['AdminDepartments.edit.field_box_name'] = "Boxen Name";
$lang['AdminDepartments.edit.field_mark_messages'] = "Nachrichten markieren als";
$lang['AdminDepartments.edit.field_host'] = "Host";
$lang['AdminDepartments.edit.field_user'] = "Benutzer";
$lang['AdminDepartments.edit.field_pass'] = "Bestehen";
$lang['AdminDepartments.edit.field_port'] = "Port";
$lang['AdminDepartments.edit.field_status'] = "Status";
$lang['AdminDepartments.edit.field_addsubmit'] = "Abteilung bearbeiten";
$lang['AdminDepartments.assigned_staff.heading_assigned_staff'] = "Zugeordnetes Personal";
$lang['AdminDepartments.add.field_override_from_email'] = "Überschreiben Sie die in E-Mail-Vorlagen festgelegte Absenderadresse mit der für diese Abteilung festgelegten E-Mail-Adresse";
$lang['AdminDepartments.edit.field_override_from_email'] = "Überschreiben Sie die in E-Mail-Vorlagen festgelegte Absenderadresse mit der für diese Abteilung festgelegten E-Mail-Adresse";
$lang['AdminDepartments.!tooltip.close_ticket_interval'] = "Alle Tickets mit einem anderen Status als %1\$s, deren letzte Antwort von einem Mitarbeiter stammt, werden automatisch geschlossen, wenn innerhalb der ausgewählten Zeitspanne keine Antworten eingegangen sind."; // %1$s is the ticket status In Progress
$lang['AdminDepartments.!text.add_response'] = "Legen Sie eine vordefinierte Antwort zum automatischen Schließen fest";
$lang['AdminDepartments.!text.no_selected_response'] = "Kein Auto-close Antwort ausgewählt.";
$lang['AdminDepartments.!text.remove_response'] = "Entfernen";
$lang['AdminDepartments.add.field_close_ticket_interval'] = "Tickets automatisch schliessen";
$lang['AdminDepartments.add.field_response_id'] = "Ticket-Antwort automatisch schließen";
$lang['AdminDepartments.edit.field_response_id'] = "Ticketantwort automatisch schließen";
$lang['AdminDepartments.!tooltip.send_ticket_received'] = "Wenn Sie dieses Kontrollkästchen deaktivieren, werden neue Tickets, die für diese Abteilung erstellt wurden (per E-Mail oder Client), keine Antwortbenachrichtigungen an den Client oder die Mitarbeiter über die E-Mail mit dem Ticket erhalten bzw. die aktualisierte E-Mail des Mitarbeitertickets gesendet.";
$lang['AdminDepartments.add.field_send_ticket_received'] = "Sende automatische Antwort-E-Mails für neue Tickets";
$lang['AdminDepartments.edit.field_send_ticket_received'] = "Senden Sie Auto-Response-E-Mails für neue Tickets";
$lang['AdminDepartments.!tooltip.delete_ticket_interval'] = "Alle Tickets mit dem Status %1\$s werden automatisch gelöscht, wenn sie für den ausgewählten Zeitraum in diesem Status verbleiben."; // %1$s is the ticket status (e.g. Trash)
$lang['AdminDepartments.add.field_delete_ticket_interval'] = "Tickets automatisch löschen";
$lang['AdminDepartments.edit.field_close_ticket_interval'] = "Tickets automatisch schließen";
$lang['AdminDepartments.edit.field_delete_ticket_interval'] = "Tickets automatisch löschen";
$lang['AdminDepartments.!tooltip.automatic_transition'] = "Ändert den Status in %1\$s, wenn ein Mitarbeiter antwortet."; // %1$s is the 'Awaiting Client Reply' status
$lang['AdminDepartments.add.field_automatic_transition'] = "Ticketstatus bei Admin-Antwort automatisch umstellen";
$lang['AdminDepartments.edit.field_automatic_transition'] = "Automatically transition ticket status on admin reply";
$lang['AdminDepartments.add.field_require_captcha'] = "Erforderliche menschliche Verifizierung für nicht authentifizierte Benutzer";
$lang['AdminDepartments.add.field_reminder_ticket_status'] = "Erinnerung senden, für Tickets mit dem Status";
$lang['AdminDepartments.add.heading_min'] = "Minimal";
$lang['AdminDepartments.add.text_add'] = "Hinzufügen";
$lang['AdminDepartments.edit.field_add_field'] = "Feld hinzufügen";
$lang['AdminDepartments.edit.heading_auto_delete'] = "Auto-Löschen";
?>