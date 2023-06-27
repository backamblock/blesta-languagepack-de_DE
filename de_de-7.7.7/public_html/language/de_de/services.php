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

$lang['Services.!error.key.empty'] = "Der Service-Feldschlüssel darf nicht leer sein.";
$lang['Services.!error.value.empty'] = "Der Servicefeldwert darf nicht leer sein.";
$lang['Services.!error.encrypted.format'] = "Ungültiges Format für die Verschlüsselung.";
$lang['Services.!error.parent_service_id.exists'] = "Ungültige Eltern Service ID.";
$lang['Services.!error.parent_service_id.parent'] = "Die Eltern-Service-ID existiert bereits als Kind für einen anderen Service.";
$lang['Services.!error.id_format.empty'] = "Kein ID-Format für Rechnungen eingestellt.";
$lang['Services.!error.id_format.length'] = "Das ID-Format für Rechnungen darf 64 Zeichen nicht überschreiten.";
$lang['Services.!error.id_value.valid'] = "Der Rechnungs-ID-Wert konnte nicht ermittelt werden.";
$lang['Services.!error.module_row_id.exists'] = "Ungültige Modul ID.";
$lang['Services.!error.qty.format'] = "Die Menge muss eine Zahl sein.";
$lang['Services.!error.qty.length'] = "Die Feldlänge bei Anzahl darf nicht länger als 10 Zeichen sein.";
$lang['Services.!error.status.format'] = "Ungültiger Status";
$lang['Services.!error.date_added.format'] = "Ungültiges Datum hinzugefügtes Format";
$lang['Services.!error.date_renews.format'] = "

Ungültiges Erneuerungsdatumformat
";
$lang['Services.!error.date_last_renewed.format'] = "Ungültiges letztes erneuertes Datumsformat";
$lang['Services.!error.date_suspended.format'] = "

Ungültiges suspendiertes Datumsformat
";
$lang['Services.!error.date_canceled.format'] = "Ungültiges Datumsformat";
$lang['Services.!error.use_module.format'] = "

Ungültiges Nutzungsmodulformat.
";
$lang['Services.!error.fields[][key].empty'] = "Ein Schlüssel ist in den Servicefeldern leer.";
$lang['Services.!error.fields[][value].empty'] = "Ein Wert ist in den Servicefeldern leer.";
$lang['Services.!error.fields[][encrypted].format'] = "

Ein Servicefeld für die Verschlüsselung hat ein ungültiges Format.
";
$lang['Services.getStatusTypes.active'] = "Aktiv";
$lang['Services.getStatusTypes.canceled'] = "Abgebrochen";
$lang['Services.getStatusTypes.pending'] = "In Bearbeitung";
$lang['Services.getStatusTypes.suspended'] = "Ausgesetzt";
$lang['Services.!error.coupon_id.valid'] = "Dieser Coupon scheint nicht gültig zu sein.";
$lang['Services.!error.invoice_method.valid'] = "Sie müssen eine gültige Rechnungsmethode auswählen.";
$lang['Services.!error.pricing_id.valid'] = "Sie müssen eine gültige Laufzeit auswählen.";
$lang['Services.!error.date_canceled.valid'] = "

Sie müssen ein gültiges Datum festlegen, um diesen Dienst abzubrechen.
";
$lang['Services.getActions.suspend'] = "Sperren";
$lang['Services.getActions.unsuspend'] = "

Nicht suspendieren
";
$lang['Services.getActions.cancel'] = "Stornieren";
$lang['Services.getActions.schedule_cancel'] = "Stornierung planen";
$lang['Services.!error.package_group_id.exists'] = "

Ungültige Paketgruppen-ID
";
$lang['Services.!error.client_id.exists'] = "Der Kunde existiert nicht.";
$lang['Services.!error.date_renews.valid'] = "Das Erneuerungsdatum muss größer als das letzte Erneuerungsdatum von %1\$s sein."; // %1$s is the last renew date
$lang['Services.getStatusTypes.in_review'] = "In der Überprüfung";
$lang['Services.getActions.change_renew'] = "

Erneuerungsdatum ändern
";
$lang['Services.!error.qty.available'] = "Mengenlimit erreicht. Wenn möglich, wählen Sie bitte eine kleinere Menge.";
$lang['Services.!error.client_id.allowed'] = "

Der Kunde kann nicht auf dieses Paket zugreifen.
";
$lang['Services.!error.configoptions.valid'] = "Eine der konfigurierbaren Optionen ist für den Service nicht gültig.";
$lang['Services.!error.pricing_id.overrides'] = "Die Laufzeit des Paketes kann nicht verändert werden, wenn Preise überschrieben werden.";
$lang['Services.!error.override_price.format'] = "Die Preisüberschreibung muss eine Zahl sein.";
$lang['Services.!error.override_price.override'] = "Sowohl Preis als auch Währung müssen eingestellt werden, um den aktuellen Preis zu überschreiben.";
$lang['Services.!error.override_currency.format'] = "Bitte wählen Sie eine gültige Währung.";
$lang['Services.!error.prorate.format'] = "

Ob anteilsmäßig festgelegt werden soll, muss auf 'true' oder 'false' gesetzt werden.
";
$lang['Services.!error.pricing_id.exists'] = "Bitte wählen Sie einen gültigen Begriff.";
$lang['Services.!error.service_id.exists'] = "Ungültige Dienst-ID";
$lang['Services.getActions.update_coupon'] = "Gutschein aktualisieren";
?>