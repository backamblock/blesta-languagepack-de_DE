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

$lang['Clients.!error.client_group_id.exists'] = "Ungültige Kundengruppen ID";
$lang['Clients.!error.client_id.exists'] = "Ungültige Kunden ID.";
$lang['Clients.!error.account_id.exists'] = "Ungültige Account Nr";
$lang['Clients.!error.type.exists'] = "Ungültiger Typ.";
$lang['Clients.!error.id_format.empty'] = "Kein ID-Format für Clients festgelegt.";
$lang['Clients.!error.id_format.length'] = "Das ID-Format für Clients darf 64 Zeichen nicht überschreiten.";
$lang['Clients.!error.id_value.valid'] = "Der Client-ID-Wert konnte nicht ermittelt werden.";
$lang['Clients.!error.user_id.exists'] = "Ungültige Benutzer ID.";
$lang['Clients.!error.user_id.unique'] = "Die Kundennummer %1\$s wird bereits verwendet."; // %1$s is the client user ID number
$lang['Clients.!error.status.format'] = "

Ungültiger Status
";
$lang['Clients.!error.name.empty'] = "Bitte geben sie einen Namen ein.";
$lang['Clients.!error.is_lang.format'] = "is_lang muss eine Zahl sein.";
$lang['Clients.!error.type.format'] = "Ungültiger Typ.";
$lang['Clients.!error.show_client.format'] = "Show client muss eine Nummer sein.";
$lang['Clients.!error.encrypted.format'] = "

Verschlüsselt muss eine Zahl sein.
";
$lang['Clients.!error.staff_id.exists'] = "Ungültige Mitarbeiter ID.";
$lang['Clients.!error.title.empty'] = "Bitte geben Sie einen Titel ein";
$lang['Clients.!error.note_id.exists'] = "Ungültige Hinweis ID.";
$lang['Clients.!error.stickied.format'] = "Sticky muss eine Zahl sein.";
$lang['Clients.!error.stickied.length'] = "Die Sticky-Länge darf 1 Zeichen nicht überschreiten.";
$lang['Clients.getCustomFieldTypes.textbox'] = "Text Box";
$lang['Clients.getCustomFieldTypes.checkbox'] = "Kontrollkästchen";
$lang['Clients.getCustomFieldTypes.dropdown'] = "Dropdown";
$lang['Clients.getCustomFieldTypes.textarea'] = "Textbereich";
$lang['Clients.getStatusTypes.active'] = "Aktiv";
$lang['Clients.getStatusTypes.inactive'] = "inaktiv";
$lang['Clients.getStatusTypes.fraud'] = "Betrug";
$lang['Clients.customfield.cf2'] = "Benutzerdefiniertes Feld";
$lang['Clients.!error.autodebit.format'] = "Ungültiger autodebit Wert";
$lang['Clients.!error.inv_address_to.exists'] = "Bitte geben Sie einen gültigen Kontakt an, an den Rechnungen gerichtet werden sollen.";
$lang['Clients.!error.default_currency.valid'] = "Ungültige Währung.";
$lang['Clients.!error.default_currency.editable'] = "Die Währung wird nicht gespeichert.";
$lang['Clients.!error.inv_method.valid'] = "Ungültige Methode für den Rechnungsversand ";
$lang['Clients.!error.inv_method.editable'] = "Die Rechnungszustellungsmethode wird möglicherweise nicht aktualisiert.";
$lang['Clients.!error.language.valid'] = "Ungültige Sprache";
$lang['Clients.!error.language.editable'] = "Die Sprache wird möglicherweise nicht aktualisiert.";
$lang['Clients.!error.values.format'] = "

Die Werte haben ein ungültiges Format.
";
$lang['Clients.!error.client_field_id.exists'] = "

Ungültige benutzerdefinierte Feld-ID
";
$lang['Clients.!error.client_field_id.matches'] = "Das benutzerdefinierte Feld ist ungültig.";
$lang['Clients.!error.package_ids.exists'] = "

Mindestens eines der bereitgestellten Pakete ist nicht vorhanden.
";
$lang['Clients.!error.client_id.deleteable'] = "Der Kunde kann nicht gelöscht werden, solange offene Rechnungen vorhanden sind, wiederkehrende Rechnungen vorhanden sind oder aktive / ausgesetzte Dienste vorhanden sind. Bitte stornieren Sie alle offenen Rechnungen, löschen Sie alle wiederkehrenden Rechnungen und stornieren Sie alle aktiven / ausgesetzten Dienste, bevor Sie fortfahren.";
$lang['Clients.!error.regex.valid'] = "Der reguläre Ausdruck ist ungültig.";
$lang['Clients.!error.read_only.format'] = "

\"Nur lesen\" muss eine Zahl sein.
";
$lang['Clients.!error.read_only.length'] = "Das Feld wo nur gelesen werden darf, darf nicht länger als 1 Zeichen in der Länge haben.";
$lang['Clients.!error.value.required'] = "%1\$s ist ein ungültiges Format."; // %1$s is the name of the custom field
$lang['Clients.!error.value.valid'] = "%1\$s ist auf einen ungültigen Wert gesetzt."; // %1$s is the name of the custom field
$lang['Clients.!error.is_lang.length'] = "is_lang darf nicht länger als 1 Zeichen sein.";
$lang['Clients.!error.show_client.length'] = "Show client darf maximal 1 Zeichen lang sein.";
$lang['Clients.!error.encrypted.length'] = "Verschlüsselt darf nicht länger als 1 Zeichen sein.";
$lang['Clients.setDebitAccountFailure.note_title'] = "Automatische Abbuchung für Zahlungskonto deaktiviert.";
$lang['Clients.setDebitAccountFailure.note_body'] = "

Das %1\$s Zahlungskonto, das auf x%2\$s endet, wurde deaktiviert, da die maximale Anzahl der Ablehnungsversuche überschritten wurde.
"; // %1$s is the payment account type, %2$s is the last four of the payment account
$lang['Clients.!error.receive_email_marketing.valid'] = "Ungültiger E-Mail-Marketing-Wert";
$lang['Clients.!error.settings[tax_id].valid'] = "Bitte geben Sie eine gültige Steuer-ID/VATIN an.";
?>