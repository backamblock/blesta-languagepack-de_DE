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

$lang['SupportManagerTickets.!error.department_id.exists'] = "Please select a valid department.";
$lang['SupportManagerTickets.!error.service_id.exists'] = "The service selected for this ticket does not exist.";
$lang['SupportManagerTickets.!error.service_id.belongs'] = "The service selected is invalid.";
$lang['SupportManagerTickets.!error.client_id.set'] = "The ticket belongs to another client and the assigned client may not be changed.";
$lang['SupportManagerTickets.!error.email.format'] = "Please enter a valid email address.";
$lang['SupportManagerTickets.!error.summary.empty'] = "Please enter a summary.";
$lang['SupportManagerTickets.!error.summary.length'] = "The summary may not exceed 255 characters in length.";
$lang['SupportManagerTickets.!error.priority.format'] = "Please select a valid priority.";
$lang['SupportManagerTickets.!error.ticket_id.exists'] = "Invalid ticket ID.";
$lang['SupportManagerTickets.!error.type.format'] = "Please select a valid reply type.";
$lang['SupportManagerTickets.!error.type.new_valid'] = "New tickets must have a reply type of 'reply'";
$lang['SupportManagerTickets.!error.details.empty'] = "Please enter some details about this ticket.";
$lang['SupportManagerTickets.priority.critical'] = "Critical";
$lang['SupportManagerTickets.priority.high'] = "High";
$lang['SupportManagerTickets.priority.medium'] = "Medium";
$lang['SupportManagerTickets.status.open'] = "Awaiting Staff Reply";
$lang['SupportManagerTickets.status.in_progress'] = "In Progress";
$lang['SupportManagerTickets.status.closed'] = "Closed";
$lang['SupportManagerTickets.type.note'] = "Note";
$lang['SupportManagerTickets.log.department_id'] = "The department has been changed to %1\$s."; // %1$s is the department name
$lang['SupportManagerTickets.log.summary'] = "The summary has been updated.";
$lang['SupportManagerTickets.log.priority'] = "The priority has been changed to %1\$s."; // %1$s is the priority
$lang['SupportManagerTickets.log.status'] = "The status has been changed to %1\$s."; // %1$s is the status
$lang['SupportManagerTickets.log.ticket_staff_id'] = "Assigned to %1\$s."; // %1$s is the name of the department staff member the ticket was assigned to
$lang['SupportManagerTickets.log.unassigned'] = "Not Assigned";
$lang['SupportManagerTickets.!error.replies.valid'] = "At least one ticket reply ID is invalid, or all replies have been selected. You must leave at least one reply remaining.";
$lang['SupportManagerTickets.!error.tickets.valid'] = "At least one ticket selected is invalid, closed, or does not belong to the same client as the chosen ticket.";
$lang['SupportManagerTickets.!error.merge_into.itself'] = "The ticket may not be merged with itself.";
$lang['SupportManagerTickets.!error.tickets.service_matches'] = "At least one of the tickets could not be assigned to the given service because it does not belong to the associated client.";
$lang['SupportManagerTickets.merge.reply'] = "This ticket has been merged into ticket #%1\$s."; // %1$s is the ticket number
$lang['SupportManagerTickets.!error.contact_id.valid'] = "The contact may not reply to the ticket without a valid client.";
$lang['SupportManagerTickets.!error.replies.notes'] = "Ticket reply notes may not be split into a separate ticket without also including a ticket reply.";
$lang['SupportManagerTickets.!error.status.trash'] = "A deleted ticket may not be edited.";
?>