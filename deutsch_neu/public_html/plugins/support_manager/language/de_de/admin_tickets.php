<?php
// Success messages
$lang['AdminTickets.!success.ticket_created'] = "Das Ticket # %1\$s wurde erfolgreich geöffnet."; // %1$s is the ticket number"; //en: "'The ticket #%1$s has been successfully opened.'; // %1$s is the ticket number"
$lang['AdminTickets.!success.ticket_updated'] = "Das Ticket %1\$s wurde erfolgreich aktualisiert."; // %1$s is the ticket number"; //en: "'The ticket #%1$s has been successfully updated.'; // %1$s is the ticket number"
$lang['AdminTickets.!success.ticket_split'] = "Das Ticket # %1\$s wurde erfolgreich in Ticket # %2\$s aufgeteilt."; // %1$s is the ticket number of the ticket being split, %2$s is the ticket number of the split ticket"; //en: "'The ticket #%1$s has been successfully split into ticket #%2$s.'; // %1$s is the ticket number of the ticket being split, %2$s is the ticket number of the split ticket"
$lang['AdminTickets.!success.ticket_merge'] = "Die ausgewählten Tickets wurden erfolgreich in Ticket # %1\$s zusammengeführt."; // %1$s is the ticket number"; //en: "'The selected tickets have been successfully merged into ticket #%1$s.'; // %1$s is the ticket number"
$lang['AdminTickets.!success.ticket_reassign'] = 'The selected tickets have been successfully reassigned.';
$lang['AdminTickets.!success.ticket_update_status'] = "Die ausgewählten Tickets wurden erfolgreich aktualisiert."; //en: "'The selected tickets have been successfully updated.'"
$lang['AdminTickets.!success.ticket_delete'] = "Die ausgewählten Tickets wurden erfolgreich gelöscht."; //en: "'The selected tickets have been successfully deleted.'"


// Notice messages
$lang['AdminTickets.!notice.no_departments_staff'] = "Es wurden noch keine Mitarbeiter und/oder Abteilungen erstellt. Klicken Sie oben auf %1\$s, um eine Abteilung zu erstellen, oder auf %2\$s, um einen Mitarbeiter zuzuweisen."; // %1$s is the language definition for the Departments navigation item, %2$s is the language definition for the Staff navigation item"; //en: "'No staff and/or departments have yet been created. Click %1$s above to create a department, or %2$s to assign a staff member.'; // %1$s is the language definition for the Departments navigation item, %2$s is the language definition for the Staff navigation item"


// Page Titles
$lang['AdminTickets.index.page_title'] = "Support Manager > Tickets"; //en: "'Support Manager > Tickets'"
$lang['AdminTickets.add.page_title'] = "Support Manager > Ticket öffnen"; //en: "'Support Manager > Open Ticket'"
$lang['AdminTickets.reply.page_title'] = "Support > Ticket #%1\$s"; // %1$s is the ticket number"; //en: "'Support Manager > Ticket #%1$s'; // %1$s is the ticket number"
$lang['AdminTickets.search.page_title'] = "Suchergebnisse für \"%1\$s\""; // %1$s is the search keywords"; //en: "'Search Results for "%1$s"'; // %1$s is the search keywords"


$lang['AdminTickets.text.unassigned'] = "Nicht zugeordnet"; //en: "'Not Assigned'"


// Index
$lang['AdminTickets.index.category_open'] = "Warten auf Mitarbeiterantwort"; //en: "'Awaiting Staff Reply'"
$lang['AdminTickets.index.category_awaiting_reply'] = "Warten auf Client-Antwort"; //en: "'Awaiting Client Reply'"
$lang['AdminTickets.index.category_in_progress'] = "In bearbeitung"; //en: "'In Progress'"
$lang['AdminTickets.index.category_on_hold'] = "In Wartestellung"; //en: "'On Hold'"
$lang['AdminTickets.index.category_closed'] = "Geschlossen"; //en: "'Closed'"
$lang['AdminTickets.index.category_trash'] = "Abfall"; //en: "'Trash'"

$lang['AdminTickets.index.categorylink_createticket'] = "Ticket erstellen"; //en: "'Open Ticket'"

$lang['AdminTickets.index.boxtitle_tickets'] = "Tickets"; //en: "'Tickets'"
$lang['AdminTickets.index.heading_code'] = "Ticketnummer"; //en: "'Ticket Number'"
$lang['AdminTickets.index.heading_client'] = "Klient"; //en: "'Client'"
$lang['AdminTickets.index.heading_priority'] = "Priorität"; //en: "'Priority'"
$lang['AdminTickets.index.heading_department_name'] = "Abteilung"; //en: "'Department'"
$lang['AdminTickets.index.heading_summary'] = "Zusammenfassung"; //en: "'Summary'"
$lang['AdminTickets.index.heading_assigned_staff'] = "Zugewiesen"; //en: "'Assigned To'"
$lang['AdminTickets.index.heading_last_reply_date'] = "Letzte Antwort"; //en: "'Last Reply'"

$lang['AdminTickets.index.any'] = 'Any';
$lang['AdminTickets.index.minutes'] = "%1\$s Minuten"; // %1$s is the elapsed minutes"; //en: "'%1$s minutes'; // %1$s is the elapsed minutes"
$lang['AdminTickets.index.hour'] = '1 hour';
$lang['AdminTickets.index.hours'] = "%1\$s Stunden"; // %1$s is the elapsed hours"; //en: "'%1$s hours'; // %1$s is the elapsed hours"
$lang['AdminTickets.index.field_ticket_number'] = 'Ticket Number';
$lang['AdminTickets.index.field_priority'] = 'Priority';
$lang['AdminTickets.index.field_department_id'] = 'Department';
$lang['AdminTickets.index.field_summary'] = "Gesamt"; //en: "'Summary'"
$lang['AdminTickets.index.field_assigned_staff'] = 'Assigned To';
$lang['AdminTickets.index.field_last_reply'] = "Letzte Antwort"; //en: "'Last Reply'"

$lang['AdminTickets.index.unassigned'] = "Nicht zugewiesen"; //en: "'Unassigned'"
$lang['AdminTickets.index.last_reply_by'] = "durch"; //en: "'by'"

$lang['AdminTickets.index.no_results'] = "Derzeit gibt es keine Tickets mit diesem Status."; //en: "'There are currently no tickets with this status.'"

$lang['AdminTickets.index.text_with_selected'] = "Mit markierten Tickets, "; //en: "'With selected tickets, perform:'"
$lang['AdminTickets.index.text_into_ticket'] = "In Ticket:"; //en: "'Into ticket:'"
$lang['AdminTickets.index.text_to_client'] = 'To client:';
$lang['AdminTickets.index.text_to_status'] = "Ändern zu:"; //en: "'Change to:'"
$lang['AdminTickets.index.ticket_number_placeholder'] = "Ticketnummer"; //en: "'Ticket Number'"
$lang['AdminTickets.index.text_no_tickets'] = "Keine offenen Tickets gefunden. Versuchen Sie es erneut."; //en: "'No open tickets found. Try searching again.'"
$lang['AdminTickets.index.field_actionsubmit'] = "Absenden"; //en: "'Submit'"

$lang['AdminTickets.index.ticket_name'] = "#%1\$s %2\$s %3\$s"; // %1$s is the ticket number, %2$s is the client's first name, %3$s is the client's last name"; //en: "'#%1$s %2$s %3$s'; // %1$s is the ticket number, %2$s is the client's first name, %3$s is the client's last name"
$lang['AdminTickets.index.ticket_email'] = "# %1\$s %2\$s"; // %1$s is the ticket number, %2$s is the client's email address"; //en: "'#%1$s %2$s'; // %1$s is the ticket number, %2$s is the client's email address"


// Add Ticket
$lang['AdminTickets.add.boxtitle_add'] = "Ticket erstellen"; //en: "'Open Ticket'"

$lang['AdminTickets.add.heading_search_client'] = "Kunden suchen"; //en: "'Search for the Client'"
$lang['AdminTickets.add.text_no_clients'] = "Keine Kunden gefunden. Versuchen Sie es erneut."; //en: "'No clients found. Try searching again.'"

$lang['AdminTickets.add.heading_summary'] = "Zusammenfassung"; //en: "'Summary'"
$lang['AdminTickets.add.heading_client'] = "Kunde"; //en: "'Client'"
$lang['AdminTickets.add.heading_department'] = "Abteilung"; //en: "'Department'"
$lang['AdminTickets.add.heading_staff_id'] = "Zugewiesen an"; //en: "'Assigned To'"
$lang['AdminTickets.add.heading_priority'] = "Priorität"; //en: "'Priority'"
$lang['AdminTickets.add.heading_status'] = "Status"; //en: "'Status'"
$lang['AdminTickets.add.field_attachments'] = "Anhänge"; //en: "'Attachments'"
$lang['AdminTickets.add.field_details'] = "Details"; //en: "'Details'"
$lang['AdminTickets.add.text_add_attachment'] = "Anhang hinzufügen"; //en: "'Add Attachment'"
$lang['AdminTickets.add.field_addsubmit'] = "Ticket eröffnen"; //en: "'Open Ticket'"
$lang['Admintickets.add.client_placeholder'] = "Kundennummer oder Name"; //en: "'Client ID or Name'"

$lang['AdminTickets.add.text_add_response'] = "Fügen Sie eine vordefinierte Antwort ein"; //en: "'Insert a Predefined Response'"

$lang['AdminTickets.add.dropzone_drop_files_here'] = "Dateien zum Hochladen hier ablegen oder zum Auswählen von Dateien anklicken"; //en: "'Drop files here to upload or Click to select files'"
$lang['AdminTickets.add.dropzone_remove_file'] = 'Remove File';


// Reply
$lang['AdminTickets.reply.boxtitle_reply'] = "Ticket #%1\$s"; // %1$s is the ticket number"; //en: "'Ticket #%1$s'; // %1$s is the ticket number"

$lang['AdminTickets.reply.heading_summary'] = "Zusammenfassung"; //en: "'Summary'"

$lang['AdminTickets.reply.heading_client'] = "Klient"; //en: "'Client'"
$lang['AdminTickets.reply.heading_department'] = "Abteilung"; //en: "'Department'"
$lang['AdminTickets.reply.heading_staff_id'] = "Zuweisen an"; //en: "'Assigned To'"
$lang['AdminTickets.reply.heading_priority'] = "Priorität"; //en: "'Priority'"
$lang['AdminTickets.reply.heading_status'] = "Status"; //en: "'Status'"
$lang['AdminTickets.reply.heading_date_added'] = "Eröffnet am"; //en: "'Date Opened'"

$lang['AdminTickets.reply.text_add_response'] = "Fügen Sie eine vordefinierte Antwort ein"; //en: "'Insert a Predefined Response'"
$lang['AdminTickets.reply.text_with_selected'] = "Führen Sie mit ausgewählten Antworten Folgendes aus:"; //en: "'With selected replies, perform:'"

$lang['AdminTickets.reply.heading_reply'] = "Antwort hinzufügen"; //en: "'Add Reply'"
$lang['AdminTickets.reply.field_reply'] = "Antworten"; //en: "'Reply'"
$lang['AdminTickets.reply.field_note'] = "Notiz"; //en: "'Note'"
$lang['AdminTickets.reply.field_attachments'] = "Anlagen"; //en: "'Attachments'"
$lang['AdminTickets.reply.text_add_attachment'] = "Anhang hinzufügen"; //en: "'Add Attachment'"
$lang['AdminTickets.reply.field_replysubmit'] = "Ticket aktualisieren"; //en: "'Update Ticket'"
$lang['AdminTickets.reply.field_actionsubmit'] = "Gehen"; //en: "'Go'"

$lang['AdminTickets.reply.refresh'] = "Es gibt neue Antworten oder Statusänderungen."; //en: "'There are new replies or status changes.'"
$lang['AdminTickets.reply.refresh_link'] = "Klicken Sie, um anzuzeigen."; //en: "'Click to display.'"

$lang['AdminTickets.reply.reply_date'] = "Auf %1\$s %2\$s %3\$s antwortete"; // %1$s is the ticket reply date, %2$s is the first name of the reply author, %3$s is the last name of the reply author"; //en: "'On %1$s %2$s %3$s replied'; // %1$s is the ticket reply date, %2$s is the first name of the reply author, %3$s is the last name of the reply author"
$lang['AdminTickets.reply.log_date'] = "%1\$s von %2\$s %3\$s"; // %1$s is the ticket reply date, %2$s is the first name of the reply author, %3$s is the last name of the reply author"; //en: "'%1$s by %2$s %3$s'; // %1$s is the ticket reply date, %2$s is the first name of the reply author, %3$s is the last name of the reply author"
$lang['AdminTickets.reply.system'] = "System"; //en: "'System'"
$lang['AdminTickets.reply.staff_title'] = "Support-Mitarbeiter"; //en: "'Support Staff'"

$lang['AdminTickets.reply.dropzone_drop_files_here'] = 'Drop files here to upload or Click to select files';
$lang['AdminTickets.reply.dropzone_remove_file'] = "Datei löschen"; //en: "'Remove File'"


// Client widget
// Index
$lang['AdminTickets.client.category_open'] = "Warten auf Mitarbeiterantwort"; //en: "'Awaiting Staff Reply'"
$lang['AdminTickets.client.category_awaiting_reply'] = "Warten auf Client-Antwort"; //en: "'Awaiting Client Reply'"
$lang['AdminTickets.client.category_in_progress'] = "In Bearbeitung"; //en: "'In Progress'"
$lang['AdminTickets.client.category_on_hold'] = "In Wartestellung"; //en: "'On Hold'"
$lang['AdminTickets.client.category_closed'] = "Geschlossen"; //en: "'Closed'"
$lang['AdminTickets.client.category_trash'] = "Müll"; //en: "'Trash'"

$lang['AdminTickets.client.categorylink_createticket'] = "Ticket erstellen"; //en: "'Open Ticket'"

$lang['AdminTickets.client.boxtitle_tickets'] = "Tickets"; //en: "'Tickets'"
$lang['AdminTickets.client.heading_code'] = "Ticket Nummer"; //en: "'Ticket Number'"
$lang['AdminTickets.client.heading_priority'] = "Priorität"; //en: "'Priority'"
$lang['AdminTickets.client.heading_department_name'] = "Abteilung"; //en: "'Department'"
$lang['AdminTickets.client.heading_summary'] = "Zusammenfassung"; //en: "'Summary'"
$lang['AdminTickets.client.heading_last_reply_date'] = "Letzte Antwort"; //en: "'Last Reply'"

$lang['AdminTickets.client.no_results'] = "Derzeit gibt es keine Tickets mit diesem Status."; //en: "'There are currently no tickets with this status.'"


// Search
$lang['AdminTickets.search.boxtitle_tickets'] = "Tickets suchen für \"%1\$s\""; // %1$s is the search criteria"; //en: "'Search Tickets for "%1$s"'; // %1$s is the search criteria"
$lang['AdminTickets.search.heading_code'] = "Ticketnummer"; //en: "'Ticket Number'"
$lang['AdminTickets.search.heading_priority'] = "Priorität"; //en: "'Priority'"
$lang['AdminTickets.search.heading_status'] = "Status"; //en: "'Status'"
$lang['AdminTickets.search.heading_department_name'] = "Bereich"; //en: "'Department'"
$lang['AdminTickets.search.heading_summary'] = "Zusammenfassung"; //en: "'Summary'"
$lang['AdminTickets.search.heading_last_reply_date'] = "Letzte Antwort"; //en: "'Last Reply'"

$lang['AdminTickets.search.no_results'] = "Es existieren keine Tickets die der Suchanfrage entsprechen."; //en: "'There are no tickets that match the search criteria.'"
