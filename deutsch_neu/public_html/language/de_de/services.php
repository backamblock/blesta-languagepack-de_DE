<?php
/**
 * Language definitions for the Services model
 *
 * @package blesta
 * @subpackage blesta.language.de_de
 * @copyright Copyright (c) 2010, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

// Service field errors
$lang['Services.!error.key.empty'] = "Der Service-Feldschlüssel darf nicht leer sein."; //en: "'The service field key must not be empty.'"
$lang['Services.!error.key.length'] = 'The service field key must not exceed 32 characters.';
$lang['Services.!error.value.empty'] = "Der Servicefeldwert darf nicht leer sein."; //en: "'The service field value must not be empty.'"
$lang['Services.!error.encrypted.format'] = "Ungültiges Format für die Verschlüsselung."; //en: "'Invalid format for encrypted.'"
$lang['Services.!error.move.unpaid_invoices'] = 'The service can\'t be moved to another client, because it has unpaid invoices.';


// Service errors
$lang['Services.!error.service_id.exists'] = "Ungültige Dienst-ID"; //en: "'Invalid service ID.'"
$lang['Services.!error.parent_service_id.exists'] = "Ungültige Eltern Service ID."; //en: "'Invalid parent service ID.'"
$lang['Services.!error.parent_service_id.parent'] = "Die Eltern-Service-ID existiert bereits als Kind für einen anderen Service."; //en: "'The parent service ID already exists as a child to another service.'"
$lang['Services.!error.package_group_id.exists'] = "Ungültige Paketgruppen-ID"; //en: "'Invalid package group ID.'"
$lang['Services.!error.id_format.empty'] = "Kein ID-Format für Rechnungen eingestellt."; //en: "'No ID format set for invoices.'"
$lang['Services.!error.id_format.length'] = "Das ID-Format für Rechnungen darf 64 Zeichen nicht überschreiten."; //en: "'The ID format for invoices may not exceed 64 characters.'"
$lang['Services.!error.id_value.valid'] = "Der Rechnungs-ID-Wert konnte nicht ermittelt werden."; //en: "'Unable to determine invoice ID value.'"
$lang['Services.!error.pricing_id.exists'] = "Bitte wählen Sie einen gültigen Begriff."; //en: "'Please select a valid term.'"
$lang['Services.!error.pricing_id.overrides'] = "Die Laufzeit des Paketes kann nicht verändert werden, wenn Preise überschrieben werden."; //en: "'The package term cannot be changed when price overrides are set.'"
$lang['Services.!error.client_id.exists'] = "Der Kunde existiert nicht."; //en: "'The client does not exist.'"
$lang['Services.!error.client_id.allowed'] = "Der Kunde kann nicht auf dieses Paket zugreifen."; //en: "'The client can not access that package.'"
$lang['Services.!error.module_row_id.exists'] = "Ungültige Modul ID."; //en: "'Invalid module row ID.'"
$lang['Services.!error.coupon_id.valid'] = "Dieser Coupon scheint nicht gültig zu sein."; //en: "'That coupon does not appear to be valid.'"
$lang['Services.!error.qty.format'] = "Die Menge muss eine Zahl sein."; //en: "'Quantity must be a number.'"
$lang['Services.!error.qty.length'] = "Die Feldlänge bei Anzahl darf nicht länger als 10 Zeichen sein."; //en: "'Quantity length may not exceed 10 characters.'"
$lang['Services.!error.qty.available'] = "Mengenlimit erreicht. Wenn möglich, wählen Sie bitte eine kleinere Menge."; //en: "'Quantity limit reached. If possible, please select a smaller quantity.'"
$lang['Services.!error.module_row.valid'] = 'The module row does not exist.';
$lang['Services.!error.module_group.valid'] = 'The module group does not exist.';
$lang['Services.!error.override_price.format'] = "Die Preisüberschreibung muss eine Zahl sein."; //en: "'The price override must be a number.'"
$lang['Services.!error.override_price.override'] = "Sowohl Preis als auch Währung müssen eingestellt werden, um den aktuellen Preis zu überschreiben."; //en: "'Both a price and currency must be set to override the current price.'"
$lang['Services.!error.override_currency.format'] = "Bitte wählen Sie eine gültige Währung."; //en: "'Please select a valid currency.'"
$lang['Services.!error.status.format'] = "Ungültiger Status"; //en: "'Invalid status.'"
$lang['Services.!error.date_added.format'] = "Ungültiges Datum hinzugefügtes Format"; //en: "'Invalid date added format.'"
$lang['Services.!error.date_renews.format'] = "Ungültiges Erneuerungsdatumformat"; //en: "'Invalid renew date format.'"
$lang['Services.!error.date_renews.valid'] = "Das Erneuerungsdatum muss größer als das letzte Erneuerungsdatum von %1\$s sein."; // %1$s is the last renew date"; //en: "'Renew date must be greater than last renew date of %1$s.'; // %1$s is the last renew date"
$lang['Services.!error.date_last_renewed.format'] = "Ungültiges letztes erneuertes Datumsformat"; //en: "'Invalid last renewed date format.'"
$lang['Services.!error.date_suspended.format'] = "Ungültiges suspendiertes Datumsformat"; //en: "'Invalid suspended date format.'"
$lang['Services.!error.date_canceled.format'] = "Ungültiges Datumsformat"; //en: "'Invalid canceled date format.'"
$lang['Services.!error.use_module.format'] = "Ungültiges Nutzungsmodulformat."; //en: "'Invalid use module format.'"
$lang['Services.!error.fields[][key].empty'] = "Ein Schlüssel ist in den Servicefeldern leer."; //en: "'A key is empty from the service fields.'"
$lang['Services.!error.fields[][value].empty'] = "Ein Wert ist in den Servicefeldern leer."; //en: "'A value is empty from the service fields.'"
$lang['Services.!error.fields[][encrypted].format'] = "Ein Servicefeld für die Verschlüsselung hat ein ungültiges Format."; //en: "'A service field for encryption is in an invalid format.'"
$lang['Services.!error.invoice_method.valid'] = "Sie müssen eine gültige Rechnungsmethode auswählen."; //en: "'You must select a valid invoice method.'"
$lang['Services.!error.pricing_id.valid'] = "Sie müssen eine gültige Laufzeit auswählen."; //en: "'You must select a valid term.'"
$lang['Services.!error.date_canceled.valid'] = "Sie müssen ein gültiges Datum festlegen, um diesen Dienst abzubrechen."; //en: "'You must set a valid date to cancel this service.'"
$lang['Services.!error.configoptions.valid'] = "Eine der konfigurierbaren Optionen ist für den Service nicht gültig."; //en: "'One of the configurable options selected is not valid for the service.'"

$lang['Services.!error.status.valid'] = 'Only pending, canceled, or in review services may be deleted.';
$lang['Services.!error.service_id.has_children'] = 'This service may not be deleted because it has child services. Please cancel or delete these services and try again.';
$lang['Services.!error.prorate.format'] = "Ob anteilsmäßig festgelegt werden soll, muss auf 'true' oder 'false' gesetzt werden."; //en: "Whether to prorate must be set to 'true' or 'false'."


// Text
$lang['Services.getStatusTypes.active'] = "Aktiv"; //en: "'Active'"
$lang['Services.getStatusTypes.canceled'] = "Abgebrochen"; //en: "'Canceled'"
$lang['Services.getStatusTypes.pending'] = "In Bearbeitung"; //en: "'Pending'"
$lang['Services.getStatusTypes.suspended'] = "Ausgesetzt"; //en: "'Suspended'"
$lang['Services.getStatusTypes.in_review'] = "In der Überprüfung"; //en: "'In Review'"

$lang['Services.getActions.suspend'] = "Sperren"; //en: "'Suspend'"
$lang['Services.getActions.unsuspend'] = "Nicht suspendieren"; //en: "'Unsuspend'"
$lang['Services.getActions.cancel'] = "Stornieren"; //en: "'Cancel'"
$lang['Services.getActions.schedule_cancel'] = "Stornierung planen"; //en: "'Schedule Cancellation'"
$lang['Services.getActions.change_renew'] = "Erneuerungsdatum ändern"; //en: "'Change Renew Date'"
$lang['Services.getActions.update_coupon'] = "Gutschein aktualisieren"; //en: "'Update Coupon'"
