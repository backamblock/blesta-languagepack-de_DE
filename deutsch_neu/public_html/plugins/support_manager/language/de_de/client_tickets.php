<?php
// Success Messages
$lang['ClientTickets.!success.ticket_created'] = "Das Ticket #%1\$s wurde erfolgreich erstellt."; // %1$s is the ticket number"; //en: "'The ticket #%1$s has been successfully created.'; // %1$s is the ticket number"
$lang['ClientTickets.!success.ticket_updated'] = "Das Ticket # %1\$s wurde erfolgreich aktualisiert."; // %1$s is the ticket number"; //en: "'The ticket #%1$s has been successfully updated.'; // %1$s is the ticket number"
$lang['ClientTickets.!success.ticket_closed'] = "Das Ticket #%1\$s wurde erfolgreich geschlossen."; // %1$s is the ticket number"; //en: "'The ticket #%1$s has been successfully closed.'; // %1$s is the ticket number"


// Notice messages
$lang['ClientTickets.!notice.no_departments'] = "Es sind keine Support Abteilungen verfügbar."; //en: "'There are no support departments available.'"


// Error messages
$lang['ClientTickets.!error.captcha.invalid'] = 'The captcha entered was invalid. Please try again.';


// Page Titles
$lang['ClientTickets.index.page_title'] = "Support > Tickets"; //en: "'Support > Tickets'"
$lang['ClientTickets.add.page_title'] = "Support > Ticket eröffnen"; //en: "'Support > Open Ticket'"
$lang['ClientTickets.reply.page_title'] = "Support -> Ticket aktualisieren"; //en: "'Support > Update Ticket'"


// Index
$lang['ClientTickets.index.category_open'] = "Offen"; //en: "'Open'"
$lang['ClientTickets.index.category_closed'] = "Geschlossen"; //en: "'Closed'"

$lang['ClientTickets.index.categorylink_createticket'] = "Offenes Ticket"; //en: "'Open Ticket'"

$lang['ClientTickets.index.boxtitle_tickets'] = "Tickets"; //en: "'Tickets'"

$lang['ClientTickets.index.heading_code'] = "Ticketnummer"; //en: "'Ticket Number'"
$lang['ClientTickets.index.heading_priority'] = "Priorität"; //en: "'Priority'"
$lang['ClientTickets.index.heading_department_name'] = "Abteilung"; //en: "'Department'"
$lang['ClientTickets.index.heading_summary'] = "Zusammenfassung"; //en: "'Summary'"
$lang['ClientTickets.index.heading_last_reply_date'] = "Letzte Antwort"; //en: "'Last Reply'"
$lang['ClientTickets.index.heading_status'] = "Status"; //en: "'Status'"
$lang['ClientTickets.index.heading_options'] = "Optionen"; //en: "'Options'"
$lang['ClientTickets.index.option_close'] = "Schießen"; //en: "'Close'"
$lang['ClientTickets.index.option_reply'] = "Antworten"; //en: "'Reply'"

$lang['ClientTickets.index.any'] = 'Any';
$lang['ClientTickets.index.minutes'] = '%1$s minutes'; // %1$s is the elapsed minutes
$lang['ClientTickets.index.hour'] = "1 Stunde"; //en: "'1 hour'"
$lang['ClientTickets.index.hours'] = "%1\$s Stunden"; // %1$s is the elapsed hours"; //en: "'%1$s hours'; // %1$s is the elapsed hours"
$lang['ClientTickets.index.field_ticket_number'] = 'Ticket Number';
$lang['ClientTickets.index.field_priority'] = 'Priority';
$lang['ClientTickets.index.field_summary'] = "Zusammenfassung"; //en: "'Summary'"
$lang['ClientTickets.index.field_last_reply'] = 'Last Reply';

$lang['ClientTickets.add.text_add_attachment'] = "Anhang hinzufügen"; //en: "'Add Attachment'"

$lang['ClientTickets.index.no_results'] = "Es liegen noch keine Tickets mit diesem Status vor."; //en: "'There are currently no tickets with this status.'"

$lang['ClientTickets.index.confirm_close'] = "Sind Sie sicher, dass Sie dieses Ticket schließen möchten?"; //en: "'Are you sure you want to close this ticket?'"


// Departments
$lang['ClientTickets.departments.boxtitle_departments'] = "Support-Abteilungen"; //en: "'Support Departments'"


// Open Ticket
$lang['ClientTickets.add.boxtitle_add'] = "Ticket eröffnen"; //en: "'Open Ticket'"

$lang['ClientTickets.add.field_email'] = "Email"; //en: "'Email'"
$lang['ClientTickets.add.field_summary'] = "Zusammenfassung"; //en: "'Summary'"
$lang['ClientTickets.add.field_priority'] = "Priorität"; //en: "'Priority'"
$lang['ClientTickets.add.field_details'] = "Details"; //en: "'Details'"
$lang['ClientTickets.add.field_attachments'] = "Anlagen"; //en: "'Attachments'"
$lang['ClientTickets.add.field_addsubmit'] = "Offenes Ticket"; //en: "'Open Ticket'"

$lang['ClientTickets.add.placeholder_summary'] = "Zusammenfassung eingeben"; //en: "'Enter Summary'"
$lang['ClientTickets.add.placeholder_details'] = "Geben Sie Details ein"; //en: "'Enter Details'"

$lang['ClientTickets.add.dropzone_drop_files_here'] = 'Drop files here to upload or Click to select files';
$lang['ClientTickets.add.dropzone_remove_file'] = 'Remove File';


// Reply to Ticket
$lang['ClientTickets.reply.boxtitle_reply'] = "Ticketnummer %1\$s"; // %1$s is the ticket number"; //en: "'Ticket #%1$s'; // %1$s is the ticket number"

$lang['ClientTickets.reply.heading_summary'] = "Zusammenfassung"; //en: "'Summary'"

$lang['ClientTickets.reply.heading_department'] = "Abteilung"; //en: "'Department'"
$lang['ClientTickets.reply.heading_priority'] = "Priorität"; //en: "'Priority'"
$lang['ClientTickets.reply.heading_status'] = "Status"; //en: "'Status'"
$lang['ClientTickets.reply.heading_date_added'] = "Datum offen"; //en: "'Date Opened'"

$lang['ClientTickets.reply.heading_reply'] = "Antwort hinzufügen"; //en: "'Add Reply'"
$lang['ClientTickets.reply.placeholder_reply'] = "Enter Details"; //en: "'Enter Details'"
$lang['ClientTickets.reply.field_details'] = "Einzelheiten"; //en: "'Details'"
$lang['ClientTickets.reply.field_attachments'] = "Anlagen"; //en: "'Attachments'"
$lang['ClientTickets.reply.field_replysubmit'] = "Antworten"; //en: "'Reply'"
$lang['ClientTickets.reply.field_closesubmit'] = "Schließen"; //en: "'Close'"
$lang['ClientTickets.reply.confirm_close'] = "Möchtest du dieses Ticket wirklich schließen?"; //en: "'Are you sure you want to close this ticket?'"

$lang['ClientTickets.reply.text_add_attachment'] = "Anhang hinzufügen"; //en: "'Add Attachment'"

$lang['ClientTickets.reply.reply_date'] = "Auf %1\$s %2\$s %3\$s antwortete"; // %1$s is the ticket reply date, %2$s is the first name of the reply author, %3$s is the last name of the reply author"; //en: "'On %1$s %2$s %3$s replied'; // %1$s is the ticket reply date, %2$s is the first name of the reply author, %3$s is the last name of the reply author"
$lang['ClientTickets.reply.log_date'] = "%1\$s von %2\$s %3\$s"; // %1$s is the ticket reply date, %2$s is the first name of the reply author, %3$s is the last name of the reply author"; //en: "'%1$s by %2$s %3$s'; // %1$s is the ticket reply date, %2$s is the first name of the reply author, %3$s is the last name of the reply author"
$lang['ClientTickets.reply.system'] = "System"; //en: "'System'"
$lang['ClientTickets.reply.staff_title'] = "Supportmitarbeiter"; //en: "'Support Staff'"

$lang['ClientTickets.reply.dropzone_drop_files_here'] = 'Drop files here to upload or Click to select files';
$lang['ClientTickets.reply.dropzone_remove_file'] = "Datei entfernen"; //en: "'Remove File'"

$lang['ClientTickets.formatDepartmentCustomFields.encrypted_field'] = 'This data is encrypted and cannot be displayed.';
