<?php
/**
 * actually GOOD de_de Language definitions. Translated by backamblock on Github
 * 
 * @package blesta
 * @version 5.5.2
 * @copyright Copyright (c) 2023, backamblock on Github
 * @license https://github.com/backamblock/ backamblock on Github - FREE for everybody
 * @link https://github.com/backamblock/ backamblock on Github
 */

$lang['SupportManagerTickets.!error.code.format'] = "Der Ticketcode darf nur Ziffern enthalten.";
$lang['SupportManagerTickets.!error.department_id.exists'] = "Bitte wählen Sie eine gültige Abteilung.";
$lang['SupportManagerTickets.!error.service_id.exists'] = "Das ausgewählte Produkt für dieses Ticket existiert nicht.";
$lang['SupportManagerTickets.!error.service_id.belongs'] = "Der ausgewählte Dienst ist ungültig.";
$lang['SupportManagerTickets.!error.client_id.exists'] = "Ungültige Client ID.";
$lang['SupportManagerTickets.!error.client_id.set'] = "Das Ticket gehört zu einem anderen Mandanten und der zugewiesene Mandant darf nicht geändert werden.";
$lang['SupportManagerTickets.!error.email.format'] = "Bitte geben Sie eine gültige E-Mail-Adresse ein.";
$lang['SupportManagerTickets.!error.summary.empty'] = "Bitte geben Sie eine Zusammenfassung ein.";
$lang['SupportManagerTickets.!error.summary.length'] = "Die Zusammenfassung darf nicht mehr als 255 Zeichen lang sein.";
$lang['SupportManagerTickets.!error.priority.format'] = "Bitte wählen Sie eine gültige Priorität aus.";
$lang['SupportManagerTickets.!error.status.format'] = "Bitte wählen Sie einen gültigen Status.";
$lang['SupportManagerTickets.!error.date_closed.format'] = "

Das Ticketabschlussdatum hat ein ungültiges Datumsformat.
";
$lang['SupportManagerTickets.!error.ticket_id.exists'] = "Ungültige Ticket-ID";
$lang['SupportManagerTickets.!error.type.format'] = "Bitte wählen Sie eine gültige Antwortart.";
$lang['SupportManagerTickets.!error.type.new_valid'] = "Neue Tickets müssen einen Antwortstypen von 'Antwort' aufweisen.";
$lang['SupportManagerTickets.!error.details.empty'] = "Bitte geben Sie einige Details zu diesem Ticket ein.";
$lang['SupportManagerTickets.!error.client_id.attached_to'] = "Die Ticketantwort darf nicht von einem anderen Kunden stammen.";
$lang['SupportManagerTickets.priority.emergency'] = "Notfall";
$lang['SupportManagerTickets.priority.critical'] = "Kritisch";
$lang['SupportManagerTickets.priority.high'] = "Hoch";
$lang['SupportManagerTickets.priority.medium'] = "Mittel";
$lang['SupportManagerTickets.priority.low'] = "Niedrig";
$lang['SupportManagerTickets.status.open'] = "Warten auf Mitarbeiterantwort";
$lang['SupportManagerTickets.status.in_progress'] = "In Bearbeitung";
$lang['SupportManagerTickets.status.closed'] = "Gesschlossen";
$lang['SupportManagerTickets.type.reply'] = "Antwort";
$lang['SupportManagerTickets.type.note'] = "Notiz";
$lang['SupportManagerTickets.type.log'] = "Log";
$lang['SupportManagerTickets.log.department_id'] = "Die Abteilung wurde in %1\$s geändert."; // %1$s is the department name
$lang['SupportManagerTickets.log.summary'] = "Die Zusammenfassung wurde aktualisiert.";
$lang['SupportManagerTickets.log.priority'] = "Die Priorität wurde auf %1\$s geändert."; // %1$s is the priority
$lang['SupportManagerTickets.log.status'] = "Der Status wurde zu %1\$s geändert."; // %1$s is the status
$lang['SupportManagerTickets.log.ticket_staff_id'] = "Zugewiesen an %1\$s."; // %1$s is the name of the department staff member the ticket was assigned to
$lang['SupportManagerTickets.log.unassigned'] = "Nicht zugeordnet";
$lang['SupportManagerTickets.status.awaiting_reply'] = "Warten auf Client-Antwort";
$lang['SupportManagerTickets.!error.by_staff_id.exists'] = "

Der Mitarbeiter, der die Bearbeitung vorgenommen hat, ist nicht vorhanden.
";
$lang['SupportManagerTickets.!error.replies.valid'] = "Mindestens eine Ticket-Antwort ID ist ungültig oder alle Antworten wurden ausgewählt. Es muss mindestens eine Antwort bleiben.";
$lang['SupportManagerTickets.!error.tickets.valid'] = "

Mindestens ein ausgewähltes Ticket ist ungültig, geschlossen oder gehört nicht zu demselben Kunden wie das ausgewählte Ticket.
";
$lang['SupportManagerTickets.!error.merge_into.itself'] = "Das Ticket kann nicht mit sich selbst zusammengeführt werden.";
$lang['SupportManagerTickets.!error.tickets.service_matches'] = "Mindestens eines der Tickets konnte dem angegebenen Service nicht zugeordnet werden, da es nicht zum zugehörigen Client gehört.";
$lang['SupportManagerTickets.!error.tickets.department_matches'] = "

Mindestens eines der Tickets konnte der angegebenen Abteilung nicht zugeordnet werden, da es nicht zu derselben Firma gehört.
";
$lang['SupportManagerTickets.merge.reply'] = "

Dieses Ticket wurde in Ticket #%1\$s zusammengeführt.
"; // %1$s is the ticket number
$lang['SupportManagerTickets.!error.contact_id.exists'] = "Der für diese Ticketantwort ausgewählte Kontakt existiert nicht.";
$lang['SupportManagerTickets.!error.contact_id.valid'] = "Der Kontakt antwortet möglicherweise nicht ohne einen gültigen Client auf das Ticket.";
$lang['SupportManagerTickets.!error.replies.notes'] = "

Ticketantwortnotizen können nicht in ein separates Ticket aufgeteilt werden, ohne dass dazu auch eine Ticketantwort gehört.
";
$lang['SupportManagerTickets.!error.status.trash'] = "Ein Papierkorbticket darf nicht bearbeitet werden.";
$lang['SupportManagerTickets.!error.date_added.format'] = "

Das Datum für das Hinzufügen des Tickets hat ein ungültiges Datumsformat.
";
$lang['SupportManagerTickets.!error.date_updated.format'] = "Das aktualisierte Datum des Tickets hat ein ungültiges Datumsformat.";
$lang['SupportManagerTickets.status.on_hold'] = "In Wartestellung";
$lang['SupportManagerTickets.status.trash'] = "Müll";
$lang['SupportManagerTickets.!error.client_id.company'] = "Mindestens ein Ticket gehört nicht zu demselben Unternehmen wie der angegebene Kunde.";
$lang['SupportManagerTickets.reassign_note'] = "Dieses Ticket wurde erneut %1\$s zugewiesen. Frühere Antworten des Kunden wurden diesem Kunden neu zugewiesen und können von einer anderen Person stammen."; // %1$s is the client name
?>