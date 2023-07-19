<?php
// Success messages
$lang['AdminDepartments.!success.department_created'] = "Die Abteilung %1\$s, wurde erfolgreich angelegt."; // %1$s is the name of the department"; //en: "'The %1$s department was successfully created.'; // %1$s is the name of the department"
$lang['AdminDepartments.!success.department_updated'] = "Die Abteilung %1\$s wurde erfolgreich aktualisiert."; // %1$s is the name of the department"; //en: "'The %1$s department was successfully updated.'; // %1$s is the name of the department"
$lang['AdminDepartments.!success.department_deleted'] = "Die Abteilung %1\$s wurde erfolgreich gelöscht."; // %1$s is the name of the department"; //en: "'The %1$s department was successfully deleted.'; // %1$s is the name of the department"


// Page titles
$lang['AdminDepartments.index.page_title'] = "Support Manager > Abteilungen"; //en: "'Support Manager > Departments'"
$lang['AdminDepartments.add.page_title'] = "Support Manager -> Abteilungen -> Abteilung hinzufügen"; //en: "'Support Manager > Departments > Add Department'"
$lang['AdminDepartments.edit.page_title'] = "Support Manager > Abteilungen > Abteilung bearbeiten"; //en: "'Support Manager > Departments > Edit Department'"


// Index
$lang['AdminDepartments.index.categorylink_adddepartment'] = "Abteilung hinzufügen"; //en: "'Add Department'"
$lang['AdminDepartments.index.boxtitle_departments'] = "Abteilungen"; //en: "'Departments'"

$lang['AdminDepartments.index.heading_name'] = "Name"; //en: "'Name'"
$lang['AdminDepartments.index.heading_description'] = "Beschreibung"; //en: "'Description'"
$lang['AdminDepartments.index.heading_email'] = "Email"; //en: "'Email'"
$lang['AdminDepartments.index.heading_assigned_staff'] = "Zugewiesenes Personal"; //en: "'Assigned Staff'"
$lang['AdminDepartments.index.heading_default_priority'] = "Standard Priorität"; //en: "'Default Priority'"
$lang['AdminDepartments.index.heading_options'] = "Optionen"; //en: "'Options'"
$lang['AdminDepartments.index.option_edit'] = "Bearbeiten"; //en: "'Edit'"
$lang['AdminDepartments.index.option_delete'] = "Löschen"; //en: "'Delete'"
$lang['AdminDepartments.index.confirm_delete'] = "Abteilungen, denen Tickets zugewiesen sind, können nicht gelöscht werden, bis alle Tickets einer anderen Abteilung zugewiesen wurden. Möchten Sie diese Abteilung wirklich löschen?"; //en: "'Departments with tickets assigned to them may not be deleted until all tickets have been re-assigned to an alternate department. Are you sure you want to delete this department?'"

$lang['AdminDepartments.index.no_results'] = "Es existieren keine Abteilungen."; //en: "'There are no departments.'"

$lang['AdminDepartments.assigned_staff.heading_assigned_staff'] = "Zugeordnetes Personal"; //en: "'Assigned Staff'"
$lang['AdminDepartments.assigned_staff.heading_staff'] = "Mitarbeiter"; //en: "'Staff'"
$lang['AdminDepartments.assigned_staff.no_results'] = "Dieser Abteilung sind keine Mitarbeiter zugewiesen."; //en: "'There are no staff assigned to this department.'"

$lang['AdminDepartments.!tooltip.piping_config'] = "Legen Sie Ihren Piping-Pfad wie gezeigt fest, verwenden Sie jedoch den richtigen Pfad zu PHP auf Ihrem Server. Stellen Sie sicher, dass pipe.php ausführbar ist. Möglicherweise müssen Sie pipe.php auch so bearbeiten, dass in Zeile 1 ein Hashbang eingefügt wird, der etwa wie folgt aussieht: #!/usr/bin/php"; //en: "'Set your piping path as shown, but be sure to use the correct path to PHP on your server. Make sure pipe.php is executable. You may also need to edit pipe.php to include a hashbang on line 1 that would look something like: #!/usr/bin/php'"
$lang['AdminDepartments.!tooltip.close_ticket_interval'] = "Alle Tickets mit einem anderen Status als %1\$s, deren letzte Antwort von einem Mitarbeiter stammt, werden automatisch geschlossen, wenn innerhalb der ausgewählten Zeitspanne keine Antworten eingegangen sind."; // %1$s is the ticket status In Progress"; //en: "'All tickets with a status other than %1$s whose last reply is from a staff member will be automatically closed if no replies have been made within the selected amount of time.'; // %1$s is the ticket status In Progress"
$lang['AdminDepartments.!tooltip.delete_ticket_interval'] = "Alle Tickets mit dem Status %1\$s werden automatisch gelöscht, wenn sie für den ausgewählten Zeitraum in diesem Status verbleiben."; // %1$s is the ticket status (e.g. Trash)"; //en: "'All tickets with a status of %1$s will be automatically deleted after remaining in that status for the selected amount of time.'; // %1$s is the ticket status (e.g. Trash)"
$lang['AdminDepartments.!tooltip.reminder_ticket_interval'] = 'For all tickets with a status other than %1$s, a reminder will be sent to the other part if no replies have been made within the selected amount of time.'; // %1$s is the ticket status Closed
$lang['AdminDepartments.!tooltip.send_ticket_received'] = "Wenn Sie dieses Kontrollkästchen deaktivieren, werden neue Tickets, die für diese Abteilung erstellt wurden (per E-Mail oder Client), keine Antwortbenachrichtigungen an den Client oder die Mitarbeiter über die E-Mail mit dem Ticket erhalten bzw. die aktualisierte E-Mail des Mitarbeitertickets gesendet."; //en: "'Unchecking this box indicates that new tickets created for this department (by email or client) will not send a reply notice to the client or staff through the Ticket Received email or Staff Ticket Updated email, respectively.'"
$lang['AdminDepartments.!tooltip.automatic_transition'] = "Ändert den Status in %1\$s, wenn ein Mitarbeiter antwortet."; // %1$s is the 'Awaiting Client Reply' status"; //en: "'Changes the status to %1$s when a staff member replies.'; // %1$s is the 'Awaiting Client Reply' status"
$lang['AdminDepartments.!tooltip.include_attachments'] = 'Mail servers have limitations on attachment sizes and file types. To mitigate the risk of email being rejected, please include attachment type and size limitations. To be sure the client is aware of attachments that were not included, use the {ticket.reply_has_attachments} tag in ticket notices.';
$lang['AdminDepartments.!tooltip.attachment_types'] = 'List of supported extensions separated by comma (e.g. zip,jpg,png).';
$lang['AdminDepartments.!tooltip.max_attachment_size'] = 'Maximum size of attachment to include in MB.';
$lang['AdminDepartments.!tooltip.client_add'] = 'Whether or not the client can submit the field, if false the client will only be able to read the field.';
$lang['AdminDepartments.!tooltip.auto_delete'] = 'If the ticket is closed, the field data will be deleted automatically. The data will no longer be visible to staff.';

$lang['AdminDepartments.!text.add_response'] = "Legen Sie eine vordefinierte Antwort zum automatischen Schließen fest"; //en: "'Set an Auto-Close Predefined Response'"
$lang['AdminDepartments.!text.no_selected_response'] = "Kein Auto-close Antwort ausgewählt."; //en: "'No auto-close response selected.'"
$lang['AdminDepartments.!text.remove_response'] = "Entfernen"; //en: "'Remove'"


// Add department
$lang['AdminDepartments.add.boxtitle_adddepartment'] = "Abteilung hinzufügen"; //en: "'Add Department'"

$lang['AdminDepartments.add.tab_general'] = 'General';
$lang['AdminDepartments.add.tab_custom_fields'] = 'Custom Fields';

$lang['AdminDepartments.add.field_name'] = "Name"; //en: "'Name'"
$lang['AdminDepartments.add.field_description'] = "Beschreibung"; //en: "'Description'"
$lang['AdminDepartments.add.field_clients_only'] = "Erlauben Sie nur Kunden, Tickets zu öffnen oder darauf zu antworten"; //en: "'Allow only clients to open or reply to tickets'"
$lang['AdminDepartments.add.field_require_captcha'] = "Erforderliche menschliche Verifizierung für nicht authentifizierte Benutzer"; //en: "'Require Human Verification for unauthenticated users'"
$lang['AdminDepartments.add.field_email'] = "E-Mail"; //en: "'Email'"
$lang['AdminDepartments.add.field_override_from_email'] = "Überschreiben Sie die in E-Mail-Vorlagen festgelegte Absenderadresse mit der für diese Abteilung festgelegten E-Mail-Adresse"; //en: "'Override the from address set in email templates with the email address set for this department'"
$lang['AdminDepartments.add.field_send_ticket_received'] = "Sende automatische Antwort-E-Mails für neue Tickets"; //en: "'Send Auto-Response Emails for New Tickets'"
$lang['AdminDepartments.add.field_automatic_transition'] = "Ticketstatus bei Admin-Antwort automatisch umstellen"; //en: "'Automatically transition ticket status on admin reply'"
$lang['AdminDepartments.add.field_method'] = "E-Mail-Behandlung"; //en: "'Email Handling'"
$lang['AdminDepartments.add.field_piping_config'] = "Rohrleitungskonfiguration"; //en: "'Piping Configuration'"
$lang['AdminDepartments.add.field_default_priority'] = "Standard Priorität"; //en: "'Default Priority'"
$lang['AdminDepartments.add.field_include_attachments'] = 'Include supported attachments in ticket notices';
$lang['AdminDepartments.add.field_attachment_types'] = 'Supported Attachment Types';
$lang['AdminDepartments.add.field_max_attachment_size'] = 'Max Attachment Size';
$lang['AdminDepartments.add.field_security'] = "Sicherheit"; //en: "'Security'"
$lang['AdminDepartments.add.field_box_name'] = "Boxname"; //en: "'Box Name'"
$lang['AdminDepartments.add.field_mark_messages'] = "Nachrichten als markieren"; //en: "'Mark Messages as'"
$lang['AdminDepartments.add.field_host'] = "Host"; //en: "'Host'"
$lang['AdminDepartments.add.field_user'] = "Benutzer"; //en: "'User'"
$lang['AdminDepartments.add.field_pass'] = "Bestanden"; //en: "'Pass'"
$lang['AdminDepartments.add.field_port'] = "Port"; //en: "'Port'"
$lang['AdminDepartments.add.field_close_ticket_interval'] = "Tickets automatisch schliessen"; //en: "'Automatically Close Tickets'"
$lang['AdminDepartments.add.field_delete_ticket_interval'] = "Tickets automatisch löschen"; //en: "'Automatically Delete Tickets'"
$lang['AdminDepartments.add.field_reminder_ticket_interval'] = 'Automatically Send Ticket Reminders';
$lang['AdminDepartments.add.field_reminder_ticket_status'] = "Erinnerung senden, für Tickets mit dem Status"; //en: "'Send Reminders to Tickets with Status'"
$lang['AdminDepartments.add.field_reminder_ticket_priority'] = 'Send Reminders to Tickets with Priority';
$lang['AdminDepartments.add.field_response_id'] = "Ticket-Antwort automatisch schließen"; //en: "'Auto-Close Ticket Response'"
$lang['AdminDepartments.add.field_status'] = "Stauts"; //en: "'Status'"
$lang['AdminDepartments.add.field_addsubmit'] = "Abteilung hinzufügen"; //en: "'Add Department'"
$lang['AdminDepartments.add.field_add_field'] = 'Add Field';

$lang['AdminDepartments.add.heading_label'] = 'Label';
$lang['AdminDepartments.add.heading_description'] = 'Description';
$lang['AdminDepartments.add.heading_visibility'] = 'Visibility';
$lang['AdminDepartments.add.heading_type'] = 'Type';
$lang['AdminDepartments.add.heading_min'] = "Minimal"; //en: "'Min'"
$lang['AdminDepartments.add.heading_max'] = 'Max';
$lang['AdminDepartments.add.heading_step'] = 'Step';
$lang['AdminDepartments.add.heading_client_add'] = 'Client can Add';
$lang['AdminDepartments.add.heading_encrypted'] = 'Encrypted';
$lang['AdminDepartments.add.heading_auto_delete'] = 'Auto-Delete';
$lang['AdminDepartments.add.heading_options'] = 'Options';
$lang['AdminDepartments.add.heading_name'] = 'Name';
$lang['AdminDepartments.add.heading_value'] = 'Value';
$lang['AdminDepartments.add.heading_default'] = 'Default';
$lang['AdminDepartments.add.text_delete'] = 'Delete';
$lang['AdminDepartments.add.text_add'] = "Hinzufügen"; //en: "'Add'"


// Edit department
$lang['AdminDepartments.edit.boxtitle_adddepartment'] = "Abteilung bearbeiten"; //en: "'Edit Department'"

$lang['AdminDepartments.edit.tab_general'] = 'General';
$lang['AdminDepartments.edit.tab_custom_fields'] = 'Custom Fields';

$lang['AdminDepartments.edit.field_name'] = "Name"; //en: "'Name'"
$lang['AdminDepartments.edit.field_description'] = "Beschreibung"; //en: "'Description'"
$lang['AdminDepartments.edit.field_clients_only'] = "Nur Kunden erlauben Tickets zu öffnen oder zu antworten"; //en: "'Allow only clients to open or reply to tickets'"
$lang['AdminDepartments.edit.field_require_captcha'] = 'Require Human Verification for unauthenticated users';
$lang['AdminDepartments.edit.field_email'] = "E-Mail"; //en: "'Email'"
$lang['AdminDepartments.edit.field_override_from_email'] = "Überschreiben Sie die in E-Mail-Vorlagen festgelegte Absenderadresse mit der für diese Abteilung festgelegten E-Mail-Adresse"; //en: "'Override the from address set in email templates with the email address set for this department'"
$lang['AdminDepartments.edit.field_send_ticket_received'] = "Senden Sie Auto-Response-E-Mails für neue Tickets"; //en: "'Send Auto-Response Emails for New Tickets'"
$lang['AdminDepartments.edit.field_automatic_transition'] = "Automatically transition ticket status on admin reply"; //en: "'Automatically transition ticket status on admin reply'"
$lang['AdminDepartments.edit.field_method'] = "E-Mail Handhabung"; //en: "'Email Handling'"
$lang['AdminDepartments.edit.field_piping_config'] = "Rohrleitungskonfiguration"; //en: "'Piping Configuration'"
$lang['AdminDepartments.edit.field_default_priority'] = "Standardpriorität"; //en: "'Default Priority'"
$lang['AdminDepartments.edit.field_include_attachments'] = 'Include supported attachments in ticket notices';
$lang['AdminDepartments.edit.field_attachment_types'] = 'Supported Attachment Types';
$lang['AdminDepartments.edit.field_max_attachment_size'] = 'Max Attachment Size';
$lang['AdminDepartments.edit.field_security'] = "Sicherheit"; //en: "'Security'"
$lang['AdminDepartments.edit.field_box_name'] = "Boxen Name"; //en: "'Box Name'"
$lang['AdminDepartments.edit.field_mark_messages'] = "Nachrichten markieren als"; //en: "'Mark Messages as'"
$lang['AdminDepartments.edit.field_host'] = "Host"; //en: "'Host'"
$lang['AdminDepartments.edit.field_user'] = "Benutzer"; //en: "'User'"
$lang['AdminDepartments.edit.field_pass'] = "Bestehen"; //en: "'Pass'"
$lang['AdminDepartments.edit.field_port'] = "Port"; //en: "'Port'"
$lang['AdminDepartments.edit.field_close_ticket_interval'] = "Tickets automatisch schließen"; //en: "'Automatically Close Tickets'"
$lang['AdminDepartments.edit.field_delete_ticket_interval'] = "Tickets automatisch löschen"; //en: "'Automatically Delete Tickets'"
$lang['AdminDepartments.edit.field_reminder_ticket_interval'] = 'Automatically Send Ticket Reminders';
$lang['AdminDepartments.edit.field_reminder_ticket_status'] = 'Send Reminders to Tickets with Status';
$lang['AdminDepartments.edit.field_reminder_ticket_priority'] = 'Send Reminders to Tickets with Priority';
$lang['AdminDepartments.edit.field_response_id'] = "Ticketantwort automatisch schließen"; //en: "'Auto-Close Ticket Response'"
$lang['AdminDepartments.edit.field_status'] = "Status"; //en: "'Status'"
$lang['AdminDepartments.edit.field_addsubmit'] = "Abteilung bearbeiten"; //en: "'Edit Department'"
$lang['AdminDepartments.edit.field_add_field'] = "Feld hinzufügen"; //en: "'Add Field'"

$lang['AdminDepartments.edit.confirm_field_remove'] = 'Are you sure you want to delete this custom field? All data associated with this field will be deleted. If you want to hide this field and preserve the data, change it\'s Visibility to Staff Only.';
$lang['AdminDepartments.edit.no_results'] = 'There are no custom fields in this department.';

$lang['AdminDepartments.edit.heading_label'] = 'Label';
$lang['AdminDepartments.edit.heading_description'] = 'Description';
$lang['AdminDepartments.edit.heading_visibility'] = 'Visibility';
$lang['AdminDepartments.edit.heading_type'] = 'Type';
$lang['AdminDepartments.edit.heading_min'] = 'Min';
$lang['AdminDepartments.edit.heading_max'] = 'Max';
$lang['AdminDepartments.edit.heading_step'] = 'Step';
$lang['AdminDepartments.edit.heading_client_add'] = 'Client can Add';
$lang['AdminDepartments.edit.heading_encrypted'] = 'Encrypted';
$lang['AdminDepartments.edit.heading_auto_delete'] = "Auto-Löschen"; //en: "'Auto-Delete'"
$lang['AdminDepartments.edit.heading_options'] = 'Options';
$lang['AdminDepartments.edit.heading_name'] = 'Name';
$lang['AdminDepartments.edit.heading_value'] = 'Value';
$lang['AdminDepartments.edit.heading_default'] = 'Default';
$lang['AdminDepartments.edit.text_delete'] = 'Delete';
$lang['AdminDepartments.edit.text_add'] = 'Add';
