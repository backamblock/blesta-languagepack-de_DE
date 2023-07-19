<?php
// Errors
$lang['SupportManagerTickets.!error.code.format'] = "Der Ticketcode darf nur Ziffern enthalten."; //en: "'The ticket code must contain only digits.'"
$lang['SupportManagerTickets.!error.department_id.exists'] = "Bitte wählen Sie eine gültige Abteilung."; //en: "'Please select a valid department.'"
$lang['SupportManagerTickets.!error.staff_id.exists'] = 'The staff member selected for this ticket does not exist.';
$lang['SupportManagerTickets.!error.contact_id.exists'] = "Der für diese Ticketantwort ausgewählte Kontakt existiert nicht."; //en: "'The contact selected for this ticket reply does not exist.'"
$lang['SupportManagerTickets.!error.contact_id.valid'] = "Der Kontakt antwortet möglicherweise nicht ohne einen gültigen Client auf das Ticket."; //en: "'The contact may not reply to the ticket without a valid client.'"
$lang['SupportManagerTickets.!error.by_staff_id.exists'] = "Der Mitarbeiter, der die Bearbeitung vorgenommen hat, ist nicht vorhanden."; //en: "'The staff member set as performing the edit does not exist.'"
$lang['SupportManagerTickets.!error.service_id.exists'] = "Das ausgewählte Produkt für dieses Ticket existiert nicht."; //en: "'The service selected for this ticket does not exist.'"
$lang['SupportManagerTickets.!error.service_id.belongs'] = "Der ausgewählte Dienst ist ungültig."; //en: "'The service selected is invalid.'"
$lang['SupportManagerTickets.!error.client_id.exists'] = "Ungültige Client ID."; //en: "'The client selected for this ticket does not exist.'"
$lang['SupportManagerTickets.!error.client_id.set'] = "Das Ticket gehört zu einem anderen Mandanten und der zugewiesene Mandant darf nicht geändert werden."; //en: "'The ticket belongs to another client and the assigned client may not be changed.'"
$lang['SupportManagerTickets.!error.email.format'] = "Bitte geben Sie eine gültige E-Mail-Adresse ein."; //en: "'Please enter a valid email address.'"
$lang['SupportManagerTickets.!error.summary.empty'] = "Bitte geben Sie eine Zusammenfassung ein."; //en: "'Please enter a summary.'"
$lang['SupportManagerTickets.!error.summary.length'] = "Die Zusammenfassung darf nicht mehr als 255 Zeichen lang sein."; //en: "'The summary may not exceed 255 characters in length.'"
$lang['SupportManagerTickets.!error.priority.format'] = "Bitte wählen Sie eine gültige Priorität aus."; //en: "'Please select a valid priority.'"
$lang['SupportManagerTickets.!error.status.format'] = "Bitte wählen Sie einen gültigen Status."; //en: "'Please select a valid status.'"
$lang['SupportManagerTickets.!error.status.trash'] = "Ein Papierkorbticket darf nicht bearbeitet werden."; //en: "'A trashed ticket may not be edited.'"
$lang['SupportManagerTickets.!error.date_added.format'] = "Das Datum für das Hinzufügen des Tickets hat ein ungültiges Datumsformat."; //en: "'The ticket added date is in an invalid date format.'"
$lang['SupportManagerTickets.!error.date_updated.format'] = "Das aktualisierte Datum des Tickets hat ein ungültiges Datumsformat."; //en: "'The ticket updated date is in an invalid date format.'"
$lang['SupportManagerTickets.!error.date_closed.format'] = "Das Ticketabschlussdatum hat ein ungültiges Datumsformat."; //en: "'The ticket close date is in an invalid date format.'"
$lang['SupportManagerTickets.!error.ticket_id.exists'] = "Ungültige Ticket-ID"; //en: "'Invalid ticket ID.'"

$lang['SupportManagerTickets.!error.type.format'] = "Bitte wählen Sie eine gültige Antwortart."; //en: "'Please select a valid reply type.'"
$lang['SupportManagerTickets.!error.type.new_valid'] = "Neue Tickets müssen einen Antwortstypen von 'Antwort' aufweisen."; //en: "New tickets must have a reply type of 'reply'."
$lang['SupportManagerTickets.!error.details.empty'] = "Bitte geben Sie einige Details zu diesem Ticket ein."; //en: "'Please enter some details about this ticket.'"
$lang['SupportManagerTickets.!error.ticket_id.exists'] = 'Invalid ticket ID.';
$lang['SupportManagerTickets.!error.client_id.attached_to'] = "Die Ticketantwort darf nicht von einem anderen Kunden stammen."; //en: "'The ticket reply may not be from a different client.'"

$lang['SupportManagerTickets.!error.replies.valid'] = "Mindestens eine Ticket-Antwort ID ist ungültig oder alle Antworten wurden ausgewählt. Es muss mindestens eine Antwort bleiben."; //en: "'At least one ticket reply ID is invalid, or all replies have been selected. You must leave at least one reply remaining.'"
$lang['SupportManagerTickets.!error.replies.notes'] = "Ticketantwortnotizen können nicht in ein separates Ticket aufgeteilt werden, ohne dass dazu auch eine Ticketantwort gehört."; //en: "'Ticket reply notes may not be split into a separate ticket without also including a ticket reply.'"
$lang['SupportManagerTickets.!error.tickets.valid'] = "Mindestens ein ausgewähltes Ticket ist ungültig, geschlossen oder gehört nicht zu demselben Kunden wie das ausgewählte Ticket."; //en: "'At least one ticket selected is invalid, closed, or does not belong to the same client as the chosen ticket.'"
$lang['SupportManagerTickets.!error.merge_into.itself'] = "Das Ticket kann nicht mit sich selbst zusammengeführt werden."; //en: "'The ticket may not be merged with itself.'"

$lang['SupportManagerTickets.!error.tickets.service_matches'] = "Mindestens eines der Tickets konnte dem angegebenen Service nicht zugeordnet werden, da es nicht zum zugehörigen Client gehört."; //en: "'At least one of the tickets could not be assigned to the given service because it does not belong to the associated client.'"
$lang['SupportManagerTickets.!error.tickets.department_matches'] = "Mindestens eines der Tickets konnte der angegebenen Abteilung nicht zugeordnet werden, da es nicht zu derselben Firma gehört."; //en: "'At least one of the tickets could not be assigned to the given department because it does not belong to the same company.'"

$lang['SupportManagerTickets.!error.ticket_ids[].exists'] = 'At least one ticket ID is invalid.';
$lang['SupportManagerTickets.!error.client_id.exists'] = 'Invalid client ID.';
$lang['SupportManagerTickets.!error.client_id.company'] = "Mindestens ein Ticket gehört nicht zu demselben Unternehmen wie der angegebene Kunde."; //en: "'At least one ticket does not belong to the same company as the given client.'"
$lang['SupportManagerTickets.!error.staff_id.exists'] = 'Invalid staff ID.';


// Replies
$lang['SupportManagerTickets.merge.reply'] = "Dieses Ticket wurde in Ticket #%1\$s zusammengeführt."; // %1$s is the ticket number"; //en: "'This ticket has been merged into ticket #%1$s.'; // %1$s is the ticket number"


// Priorities
$lang['SupportManagerTickets.priority.emergency'] = "Notfall"; //en: "'Emergency'"
$lang['SupportManagerTickets.priority.critical'] = "Kritisch"; //en: "'Critical'"
$lang['SupportManagerTickets.priority.high'] = "Hoch"; //en: "'High'"
$lang['SupportManagerTickets.priority.medium'] = "Mittel"; //en: "'Medium'"
$lang['SupportManagerTickets.priority.low'] = "Niedrig"; //en: "'Low'"


// Statuses
$lang['SupportManagerTickets.status.open'] = "Warten auf Mitarbeiterantwort"; //en: "'Awaiting Staff Reply'"
$lang['SupportManagerTickets.status.awaiting_reply'] = "Warten auf Client-Antwort"; //en: "'Awaiting Client Reply'"
$lang['SupportManagerTickets.status.in_progress'] = "In Bearbeitung"; //en: "'In Progress'"
$lang['SupportManagerTickets.status.on_hold'] = "In Wartestellung"; //en: "'On Hold'"
$lang['SupportManagerTickets.status.closed'] = "Gesschlossen"; //en: "'Closed'"
$lang['SupportManagerTickets.status.trash'] = "Müll"; //en: "'Trash'"


// Reply types
$lang['SupportManagerTickets.type.reply'] = "Antwort"; //en: "'Reply'"
$lang['SupportManagerTickets.type.note'] = "Notiz"; //en: "'Note'"
$lang['SupportManagerTickets.type.log'] = "Log"; //en: "'Log'"


// Log text
$lang['SupportManagerTickets.log.department_id'] = "Die Abteilung wurde in %1\$s geändert."; // %1$s is the department name"; //en: "'The department has been changed to %1$s.'; // %1$s is the department name"
$lang['SupportManagerTickets.log.summary'] = "Die Zusammenfassung wurde aktualisiert."; //en: "'The summary has been updated.'"
$lang['SupportManagerTickets.log.priority'] = "Die Priorität wurde auf %1\$s geändert."; // %1$s is the priority"; //en: "'The priority has been changed to %1$s.'; // %1$s is the priority"
$lang['SupportManagerTickets.log.status'] = "Der Status wurde zu %1\$s geändert."; // %1$s is the status"; //en: "'The status has been changed to %1$s.'; // %1$s is the status"
$lang['SupportManagerTickets.log.ticket_staff_id'] = "Zugewiesen an %1\$s."; // %1$s is the name of the department staff member the ticket was assigned to"; //en: "'Assigned to %1$s.'; // %1$s is the name of the department staff member the ticket was assigned to"
$lang['SupportManagerTickets.log.unassigned'] = "Nicht zugeordnet"; //en: "'Not Assigned'"

$lang['SupportManagerTickets.reassign_note'] = "Dieses Ticket wurde erneut %1\$s zugewiesen. Frühere Antworten des Kunden wurden diesem Kunden neu zugewiesen und können von einer anderen Person stammen."; // %1$s is the client name"; //en: "'This ticket was re-assigned to %1$s. Previous client replies were re-assigned to this client and may have been made by another person.'; // %1$s is the client name"
