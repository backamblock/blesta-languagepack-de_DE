<?php
/**
 * Language definitions for the Admin Main controller/views
 *
 * @package blesta
 * @subpackage blesta.language.de_de
 * @copyright Copyright (c) 2010, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

// Errors
$lang['AdminMain.!error.delete_event.staff_id'] = "Nur der Ersteller des Ereignisses darf dieses Ereignis löschen."; //en: "Only the event's creator may delete this event."
$lang['AdminMain.!error.event_editable'] = "Nur der Ersteller dieses Events kann dieses Event löschen"; //en: "Only the event's creator may delete that event."


// Success
$lang['AdminMain.!success.event_added'] = "Der Event wurde erfolgreich hinzugefügt."; //en: "'The event has been successfully added!'"
$lang['AdminMain.!success.event_edited'] = "Die Veranstaltung wurde erfolgreich aktualisiert!"; //en: "'The event has been successfully updated!'"
$lang['AdminMain.!success.event_deleted'] = "Die Veranstaltung wurde erfolgreich gelöscht!"; //en: "'The event has been successfully deleted!'"


// Index
$lang['AdminMain.index.page_title'] = "Dashboard"; //en: "'Dashboard'"
$lang['AdminMain.index.heading_quicklinks'] = "Schnelllinks"; //en: "'Quick Links'"
$lang['AdminMain.index.no_quicklinks'] = "Es wurden keine Quick Links eingerichtet."; //en: "'No Quick Links have been set.'"
$lang['AdminMain.index.manage_widgets'] = "Widgets verwalten"; //en: "'Manage Widgets'"
$lang['AdminMain.index.customize_dashboard'] = "Dashboard anpassen"; //en: "'Customize Dashboard'"


// Manage widgets
$lang['AdminMain.managewidgets.text_widgets'] = "Ziehen Sie Widgets von rechts nach links, um sie zum Dashboard hinzuzufügen, oder von links nach rechts, um sie zu entfernen."; //en: "'Drag widgets from the right to the left to add them to your dashboard, or from left to right to remove them.'"
$lang['AdminMain.managewidgets.text_version'] = "ver %1\$s"; // %1$s is the version number of the plugin"; //en: "'ver %1$s'; // %1$s is the version number of the plugin"
$lang['AdminMain.managewidgets.text_author'] = "Autor:"; //en: "'Author: '"


// Update dashboard
$lang['AdminMain.updatedashboard.text_layout'] = "Wählen Sie unten ein Layout aus, um Ihr Dashboard anzupassen."; //en: "'Select a layout below to customize your dashboard.'"


// Calendar
$lang['AdminMain.calendar.page_title'] = "Kalender"; //en: "'Calendar'"
$lang['AdminMain.calendar.boxtitle_calendar'] = "Kalender"; //en: "'Calendar'"
$lang['AdminMain.calendar.categorylink_addevent'] = "Event erstellen"; //en: "'Create Event'"
$lang['AdminMain.calendar.category_month'] = "Monat"; //en: "'Month'"
$lang['AdminMain.calendar.category_week'] = "Woche"; //en: "'Week'"
$lang['AdminMain.calendar.category_day'] = "Tag"; //en: "'Day'"

$lang['AdminMain.getEvents.shared_event_title'] = "%2\$s %3\$s: %1\$s"; // %1$s is the event title, %2$s is the staff's first name, %3$s is the staff's last name"; //en: "'%2$s %3$s: %1$s'; // %1$s is the event title, %2$s is the staff's first name, %3$s is the staff's last name"


// Add Calendar Event
$lang['AdminMain.addevent.boxtitle_addevent'] = "Ereignis erstellen"; //en: "'Create Event'"
$lang['AdminMain.addevent.field_title'] = "Titel"; //en: "'Title'"
$lang['AdminMain.addevent.field_start_date'] = "Startdatum"; //en: "'Start Date'"
$lang['AdminMain.addevent.field_end_date'] = "Enddatum"; //en: "'End Date'"
$lang['AdminMain.addevent.field_shared'] = "Machen Sie dieses Ereignis für andere Mitarbeiter sichtbar"; //en: "'Make this event viewable by other staff'"
$lang['AdminMain.addevent.field_all_day'] = "Den ganzen Tag"; //en: "'All day'"
$lang['AdminMain.addevent.field_addeventsubmit'] = "Ereignis erstellen"; //en: "'Create Event'"


// Edit Calendar Event
$lang['AdminMain.editevent.boxtitle_editevent'] = "Event bearbeiten"; //en: "'Edit Event'"
$lang['AdminMain.editevent.field_title'] = "Titel"; //en: "'Title'"
$lang['AdminMain.editevent.field_start_date'] = "Anfangsdatum"; //en: "'Start Date'"
$lang['AdminMain.editevent.field_end_date'] = "End-Datum"; //en: "'End Date'"
$lang['AdminMain.editevent.field_shared'] = "Mache diesen Event sichtbar für andere Mitarbeiter"; //en: "'Make this event viewable by other staff'"
$lang['AdminMain.editevent.field_all_day'] = "Den ganzen Tag"; //en: "'All day'"
$lang['AdminMain.editevent.field_editeventsubmit'] = "Update Event"; //en: "'Update Event'"
$lang['AdminMain.editevent.field_deleteeventsubmit'] = "Ereignis löschen"; //en: "'Delete Event'"
$lang['AdminMain.editevent.confirm_delete'] = "Wirklich dieses Ereignis löschen?"; //en: "'Really delete this event?'"
