<?php
/**
 * Language definitions for the Clients model
 *
 * @package blesta
 * @subpackage blesta.language.de_de
 * @copyright Copyright (c) 2010, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

// Common client/custom field errors
$lang['Clients.!error.client_group_id.exists'] = "Ungültige Kundengruppen ID"; //en: "'Invalid client group ID.'"

// Common custom field/note errors, and Debit Account error
$lang['Clients.!error.client_id.exists'] = "Ungültige Kunden ID."; //en: "'Invalid client ID.'"

// Debit Account errors
$lang['Clients.!error.account_id.exists'] = "Ungültige Account Nr"; //en: "'Invalid account ID.'"
$lang['Clients.!error.type.exists'] = "Ungültiger Typ."; //en: "'Invalid type.'"

// Client errors
$lang['Clients.!error.id_format.empty'] = "Kein ID-Format für Clients festgelegt."; //en: "'No ID format set for clients.'"
$lang['Clients.!error.id_format.length'] = "Das ID-Format für Clients darf 64 Zeichen nicht überschreiten."; //en: "'The ID format for clients may not exceed 64 characters.'"
$lang['Clients.!error.id_value.valid'] = "Der Client-ID-Wert konnte nicht ermittelt werden."; //en: "'Unable to determine client ID value.'"
$lang['Clients.!error.user_id.exists'] = "Ungültige Benutzer ID."; //en: "'Invalid user ID.'"
$lang['Clients.!error.user_id.unique'] = "Die Kundennummer %1\$s wird bereits verwendet."; // %1$s is the client user ID number"; //en: "'Client user ID %1$s is already taken.'; // %1$s is the client user ID number"
$lang['Clients.!error.status.format'] = "Ungültiger Status"; //en: "'Invalid status.'"
$lang['Clients.!error.settings[tax_id].valid'] = "Bitte geben Sie eine gültige Steuer-ID/VATIN an."; //en: "'Please specify a valid Tax ID/VATIN.'"

$lang['Clients.!error.client_id.deleteable'] = "Der Kunde kann nicht gelöscht werden, solange offene Rechnungen vorhanden sind, wiederkehrende Rechnungen vorhanden sind oder aktive / ausgesetzte Dienste vorhanden sind. Bitte stornieren Sie alle offenen Rechnungen, löschen Sie alle wiederkehrenden Rechnungen und stornieren Sie alle aktiven / ausgesetzten Dienste, bevor Sie fortfahren."; //en: "'The client may not be deleted while open invoices exist, recurring invoices exist, or active/suspended services exist. Please void any open invoices, delete any recurring invoices, and cancel any active/suspended services before proceeding.'"

// Client settings errors
$lang['Clients.!error.autodebit.format'] = "Ungültiger autodebit Wert"; //en: "'Invalid autodebit value.'"
$lang['Clients.!error.inv_address_to.exists'] = "Bitte geben Sie einen gültigen Kontakt an, an den Rechnungen gerichtet werden sollen."; //en: "'Please specify a valid contact to address invoices to.'"
$lang['Clients.!error.default_currency.valid'] = "Ungültige Währung."; //en: "'Invalid currency.'"
$lang['Clients.!error.default_currency.editable'] = "Die Währung wird nicht gespeichert."; //en: "'The currency may not be updated.'"
$lang['Clients.!error.inv_method.valid'] = "Ungültige Methode für den Rechnungsversand "; //en: "'Invalid invoice delivery method.'"
$lang['Clients.!error.inv_method.editable'] = "Die Rechnungszustellungsmethode wird möglicherweise nicht aktualisiert."; //en: "'The invoice delivery method may not be updated.'"
$lang['Clients.!error.language.valid'] = "Ungültige Sprache"; //en: "'Invalid language.'"
$lang['Clients.!error.language.editable'] = "Die Sprache wird möglicherweise nicht aktualisiert."; //en: "'The language may not be updated.'"
$lang['Clients.!error.receive_email_marketing.valid'] = "Ungültiger E-Mail-Marketing-Wert"; //en: "'Invalid email marketing value.'"

// Custom field errors
$lang['Clients.!error.name.empty'] = "Bitte geben sie einen Namen ein."; //en: "'Please enter a name.'"
$lang['Clients.!error.is_lang.format'] = "is_lang muss eine Zahl sein."; //en: "'is_lang must be a number.'"
$lang['Clients.!error.is_lang.length'] = "is_lang darf nicht länger als 1 Zeichen sein."; //en: "'is_lang may not exceed 1 character in length.'"
$lang['Clients.!error.type.format'] = "Ungültiger Typ."; //en: "'Invalid type.'"
$lang['Clients.!error.values.format'] = "Die Werte haben ein ungültiges Format."; //en: "'The values are in an invalid format.'"
$lang['Clients.!error.default.valid'] = 'The default value is invalid.';
$lang['Clients.!error.regex.valid'] = "Der reguläre Ausdruck ist ungültig."; //en: "'The regular expression is invalid.'"
$lang['Clients.!error.show_client.format'] = "Show client muss eine Nummer sein."; //en: "'Show client must be a number.'"
$lang['Clients.!error.show_client.length'] = "Show client darf maximal 1 Zeichen lang sein."; //en: "'Show client may not exceed 1 character in length.'"
$lang['Clients.!error.client_field_id.exists'] = "Ungültige benutzerdefinierte Feld-ID"; //en: "'Invalid custom field ID.'"
$lang['Clients.!error.client_field_id.matches'] = "Das benutzerdefinierte Feld ist ungültig."; //en: "'The custom field is invalid.'"
$lang['Clients.!error.encrypted.format'] = "Verschlüsselt muss eine Zahl sein."; //en: "'Encrypted must be a number.'"
$lang['Clients.!error.encrypted.length'] = "Verschlüsselt darf nicht länger als 1 Zeichen sein."; //en: "'Encrypted may not exceed 1 character in length.'"
$lang['Clients.!error.read_only.format'] = "\"Nur lesen\" muss eine Zahl sein."; //en: "'Read only must be a number.'"
$lang['Clients.!error.read_only.length'] = "Das Feld wo nur gelesen werden darf, darf nicht länger als 1 Zeichen in der Länge haben."; //en: "'Read only may not exceed 1 character in length.'"
$lang['Clients.!error.value.required'] = "%1\$s ist ein ungültiges Format."; // %1$s is the name of the custom field"; //en: "'%1$s is in an invalid format.'; // %1$s is the name of the custom field"
$lang['Clients.!error.value.valid'] = "%1\$s ist auf einen ungültigen Wert gesetzt."; // %1$s is the name of the custom field"; //en: "'%1$s is set to an invalid value.'; // %1$s is the name of the custom field"

// Note errors
$lang['Clients.!error.staff_id.exists'] = "Ungültige Mitarbeiter ID."; //en: "'Invalid staff ID.'"
$lang['Clients.!error.title.empty'] = "Bitte geben Sie einen Titel ein"; //en: "'Please enter a title.'"
$lang['Clients.!error.title.length'] = 'The title length may not exceed 255 characters.';
$lang['Clients.!error.note_id.exists'] = "Ungültige Hinweis ID."; //en: "'Invalid note ID.'"
$lang['Clients.!error.stickied.format'] = "Sticky muss eine Zahl sein."; //en: "'Sticky must be a number.'"
$lang['Clients.!error.stickied.length'] = "Die Sticky-Länge darf 1 Zeichen nicht überschreiten."; //en: "'Sticky length may not exceed 1 character.'"

// Restricted packages
$lang['Clients.!error.package_ids.exists'] = "Mindestens eines der bereitgestellten Pakete ist nicht vorhanden."; //en: "'At least one of the packages provided does not exist.'"


// Text
$lang['Clients.getCustomFieldTypes.textbox'] = "Text Box"; //en: "'Text Box'"
$lang['Clients.getCustomFieldTypes.checkbox'] = "Kontrollkästchen"; //en: "'Check Box'"
$lang['Clients.getCustomFieldTypes.dropdown'] = "Dropdown"; //en: "'Drop Down'"
$lang['Clients.getCustomFieldTypes.textarea'] = "Textbereich"; //en: "'Text area'"

$lang['Clients.getStatusTypes.active'] = "Aktiv"; //en: "'Active'"
$lang['Clients.getStatusTypes.inactive'] = "inaktiv"; //en: "'Inactive'"
$lang['Clients.getStatusTypes.fraud'] = "Betrug"; //en: "'Fraud'"

$lang['Clients.setDebitAccountFailure.note_title'] = "Automatische Abbuchung für Zahlungskonto deaktiviert."; //en: "'Auto debit disabled for payment account.'"
$lang['Clients.setDebitAccountFailure.note_body'] = "Das %1\$s Zahlungskonto, das auf x%2\$s endet, wurde deaktiviert, da die maximale Anzahl der Ablehnungsversuche überschritten wurde."; // %1$s is the payment account type, %2$s is the last four of the payment account"; //en: "'The %1$s payment account ending in x%2$s was disabled because it exceeded the maximum number of decline attempts.'; // %1$s is the payment account type, %2$s is the last four of the payment account"


// Custom field language
$lang['Clients.customfield.cf2'] = "Benutzerdefiniertes Feld"; //en: "'Custom Field'"
