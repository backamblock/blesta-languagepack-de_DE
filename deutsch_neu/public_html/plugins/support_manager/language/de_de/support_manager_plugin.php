<?php
// Plugin name
$lang['SupportManagerPlugin.name'] = "Support Manager"; //en: "'Support Manager'"
$lang['SupportManagerPlugin.description'] = 'Allows users and staff to open and manage support tickets.';

// Cron tasks
$lang['SupportManagerPlugin.cron.poll_tickets_name'] = "Tickets herunterladen"; //en: "'Download Tickets'"
$lang['SupportManagerPlugin.cron.poll_tickets_desc'] = "Stellt eine Verbindung zum POP3 / IMAP-Server her, um E-Mails herunterzuladen und in Tickets zu konvertieren."; //en: "'Connects to the POP3/IMAP server to download emails and convert them into tickets.'"
$lang['SupportManagerPlugin.cron.close_tickets_name'] = "Ticket schließen"; //en: "'Close Tickets'"
$lang['SupportManagerPlugin.cron.close_tickets_desc'] = "Schließt automatisch offene Tickets, die für Abteilungen im Support-Manager konfiguriert wurden."; //en: "'Automatically closes open tickets as configured for departments in the Support Manager.'"
$lang['SupportManagerPlugin.cron.delete_tickets_name'] = "Trash-Tickets löschen"; //en: "'Delete Trash Tickets'"
$lang['SupportManagerPlugin.cron.delete_tickets_desc'] = "Löschen Sie automatisch Papierkorb-Tickets, die für Abteilungen im Support-Manager konfiguriert wurden."; //en: "'Automatically delete trash tickets as configured for departments in the Support Manager.'"
$lang['SupportManagerPlugin.cron.send_reminders_name'] = "Mahnungen versenden"; //en: "'Send Reminders'"
$lang['SupportManagerPlugin.cron.send_reminders_desc'] = "Versenden Sie automatisch Erinnerungen für Tickets mit einem bestimmten Status nach einer bestimmten Zeitspanne."; //en: "'Automatically send out reminders for tickets of a particular status after a certain period of time.'"

// Plugin actions
$lang['SupportManagerPlugin.nav_primary_client.main'] = "Support"; //en: "'Support'"
$lang['SupportManagerPlugin.nav_primary_client.tickets'] = "Tickets"; //en: "'Tickets'"
$lang['SupportManagerPlugin.nav_primary_client.knowledgebase'] = "Wissensbasis"; //en: "'Knowledge Base'"
$lang['SupportManagerPlugin.widget_client_home.main'] = 'Tickets';
$lang['SupportManagerPlugin.nav_primary_staff.main'] = "Support"; //en: "'Support'"
$lang['SupportManagerPlugin.nav_primary_staff.tickets'] = "Tickets"; //en: "'Tickets'"
$lang['SupportManagerPlugin.nav_primary_staff.departments'] = "Abteilungen"; //en: "'Departments'"
$lang['SupportManagerPlugin.nav_primary_staff.responses'] = "Antworten"; //en: "'Responses'"
$lang['SupportManagerPlugin.nav_primary_staff.staff'] = "Mitarbeiter"; //en: "'Staff'"
$lang['SupportManagerPlugin.nav_primary_staff.knowledgebase'] = "Wissensbasis"; //en: "'Knowledge Base'"
$lang['SupportManagerPlugin.nav_primary_staff.reminders'] = 'Reminders';
$lang['SupportManagerPlugin.widget_staff_client.tickets'] = "Tickets"; //en: "'Tickets'"
$lang['SupportManagerPlugin.action_staff_client.add'] = "Öffne Ticket"; //en: "'Open Ticket'"

// Plugin cards
$lang['SupportManagerPlugin.card_client.tickets'] = 'Tickets';

// Plugin events
$lang['SupportManagerPlugin.event_getsearchoptions.tickets'] = "Ticket Suche"; //en: "'Ticket Search'"

// Permissions
$lang['SupportManagerPlugin.permission.admin_main'] = "Support"; //en: "'Support'"
$lang['SupportManagerPlugin.permission.admin_tickets'] = "Tickets"; //en: "'Tickets'"
$lang['SupportManagerPlugin.permission.admin_tickets_delete'] = "Tickets dauerhaft löschen"; //en: "'Permanently Delete Tickets'"
$lang['SupportManagerPlugin.permission.admin_tickets_client'] = "Benutzerprofil Widget"; //en: "'Client Profile Widget'"
$lang['SupportManagerPlugin.permission.admin_departments'] = "Abteilungen"; //en: "'Departments'"
$lang['SupportManagerPlugin.permission.admin_responses'] = "Antworten"; //en: "'Responses'"
$lang['SupportManagerPlugin.permission.admin_staff'] = "Mitarbeiter"; //en: "'Staff'"
$lang['SupportManagerPlugin.permission.admin_knowledgebase'] = "Wissensdatenbank"; //en: "'Knowledge Base'"
$lang['SupportManagerPlugin.permission.admin_reminders'] = 'Reminders';
