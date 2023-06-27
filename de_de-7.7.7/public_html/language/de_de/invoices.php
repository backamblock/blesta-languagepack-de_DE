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

$lang['Invoices.getPricingPeriods.day'] = "Tag";
$lang['Invoices.getPricingPeriods.week'] = "Woche";
$lang['Invoices.getPricingPeriods.month'] = "Monat";
$lang['Invoices.getPricingPeriods.year'] = "Jahr";
$lang['Invoices.getDeliveryMethods.email'] = "Email";
$lang['Invoices.getDeliveryMethods.paper'] = "Papier";
$lang['Invoices.getDeliveryMethods.interfax'] = "InterFax";
$lang['Invoices.getDeliveryMethods.postalmethods'] = "Versandarten";
$lang['Invoices.!error.invoice_id.exists'] = "Ungültige Rechnungsnummer";
$lang['Invoices.!error.invoice_recur_id.exists'] = "Ungültige wiederkehrende Rechnungsnummer";
$lang['Invoices.!error.method.exists'] = "Sie müssen mindestens eine Versandart einstellen.";
$lang['Invoices.!error.delivery.empty'] = "Bitte geben Sie eine Rechnungszustellungsmethode ein.";
$lang['Invoices.!error.delivery.length'] = "Die Länge der Rechnungszustellungsmethode darf 32 Zeichen nicht überschreiten.";
$lang['Invoices.!error.id_format.empty'] = "Für Rechnungen wurde kein ID-Format festgelegt.";
$lang['Invoices.!error.id_format.length'] = "Das ID-Format für Rechnungen darf 64 Zeichen nicht überschreiten.";
$lang['Invoices.!error.id_value.valid'] = "Der Rechnungs-ID-Wert konnte nicht ermittelt werden.";
$lang['Invoices.!error.id.amount_applied'] = "Rechnungsposten, Währung und Status werden möglicherweise nicht aktualisiert, da auf diese Rechnung bereits ein Betrag gebucht wurde.";
$lang['Invoices.!error.client_id.exists'] = "Ungültige Client-ID";
$lang['Invoices.!error.date_billed.format'] = "Das abgerechnete Datum hat ein ungültiges Datumsformat.";
$lang['Invoices.!error.date_due.format'] = "Das Fälligkeitsdatum liegt in einem ungültigen Datumsformat.";
$lang['Invoices.!error.date_closed.format'] = "Das Datum ist in einem ungültigen Format.";
$lang['Invoices.!error.date_autodebit.format'] = "Das Rechnungsdatum hat einen ungültigen Datumswert.";
$lang['Invoices.!error.status.format'] = "Ungültiger Status.";
$lang['Invoices.!error.currency.length'] = "Die Währung muss gemäß ISO 4217, 3 Zeichen lang sein";
$lang['Invoices.!error.delivery.exists'] = "Die angegebene Versandart existiert nicht.";
$lang['Invoices.!error.term.format'] = "Laufzeit sollte eine Zahl sein.";
$lang['Invoices.!error.term.bounds'] = "Der Bezeichnung sollte zwischen 1 und 65535 liegen.";
$lang['Invoices.!error.period.format'] = "ungültige Dauer";
$lang['Invoices.!error.duration.format'] = "Die Dauer ist ungültig.";
$lang['Invoices.!error.date_renews.format'] = "Das Datum für die erneute Rechnungserneuerung muss ein gültiges Datumsformat sein.";
$lang['Invoices.!error.date_last_renewed.format'] = "Das letzte Datum für die erneute Rechnungserneuerung muss ein gültiges Datumsformat sein.";
$lang['Invoices.!error.invoice_id.draft'] = "Die angegebene Rechnung ist kein Rechnungsentwurf und konnte daher nicht gelöscht werden.";
$lang['Invoices.!error.lines[][id].exists'] = "Ungültige Werbebuchungs-ID";
$lang['Invoices.!error.lines[][service_id].exists'] = "Ungültige Service-ID";
$lang['Invoices.!error.lines[][description].empty'] = "Bitte die Beschreibung vom Produkt einfügen.";
$lang['Invoices.!error.lines[][qty].format'] = "Die Menge muss eine Zahl sein.";
$lang['Invoices.!error.lines[][qty].minimum'] = "Bitte geben Sie eine Menge von 1 oder mehr ein.";
$lang['Invoices.!error.lines[][amount].format'] = "Die Kosten pro Einheit muss eine Zahl sein.";
$lang['Invoices.!error.lines[][tax].format'] = "Werbebuchungssteuer muss ein \"True\" oder \"False\" sein";
$lang['Invoices.!line_item.service_cancel_fee_description'] = "%1\$s - %2\$s Stornierungsgebühr"; // %1$s is the name of the package, %2$s is the name of the service
$lang['Invoices.!line_item.service_setup_fee_description'] = "%1\$s - %2\$s Einrichtungsgebühr"; // %1$s is the name of the package, %2$s is the name of the service
$lang['Invoices.!line_item.coupon_line_item_description_amount'] = "Gutschein %1\$s"; // %1$s is the coupon code
$lang['Invoices.!line_item.coupon_line_item_description_percent'] = "Gutschein %1\$s - %2\$s %%"; // %1$s is the coupon code, %2$s is the coupon discount percentage, the two percent symbols (%%) must both be used together to display a single percent symbol
$lang['Invoices.!error.date_due.after_billed'] = "Das Fälligkeitsdatum muss am gleichen Tag der Rechnung sein oder später.";
$lang['Invoices.!line_item.recurring_renew_description'] = "%1\$s (%2\$s - %3\$s)"; // %1$s is the line item description, %2$s is the invoice's renew date, %3$s is the invoice's next renew date
$lang['Invoices.status.active'] = "Aktiv";
$lang['Invoices.status.draft'] = "Entwurf";
$lang['Invoices.status.void'] = "Leere";
$lang['Invoices.!line_item.service_renew_description'] = "%5\$s%1\$s - %2\$s (%3\$s - %4\$s)"; // %1$s is the name of the package, %2$s is the name of the service, %3$s is the service's renew date, %4$s is the service's next renew date, %5$s is the addon identifier set only for addon services
$lang['Invoices.!line_item.service_prorated_upgrade_description'] = "Proriertes Upgrade von %1\$s nach %2\$s - %3\$s (%4\$s - %5\$s)"; // %1$s is the current package name, %2$s is the new package name, %3$s is the service name, %4$s is the current date, %5$s is the service's next renew date
$lang['Invoices.status.proforma'] = "Pro forma";
$lang['Invoices.types.standard'] = "Standard";
$lang['Invoices.types.proforma'] = "Pro forma";
$lang['Invoices.!line_item.service_option_renew_description'] = "? %1\$s - %2\$s"; // %1$s is the package option label, %2$s is the service option name
$lang['Invoices.!line_item.service_option_setup_fee_description'] = "? %1\$s - %2\$s Einrichtungsgebühr"; // %1$s is the package option label, %2$s is the service option name
$lang['Invoices.!line_item.service_prorated_upgrade_description_onetime'] = "Anteiliges Upgrade von %1\$s auf %2\$s - %3\$s"; // %1$s is the current package name, %2$s is the new package name, %3$s is the service name
$lang['Invoices.!line_item.prorated_credit'] = "Anteilige Gutschrift";
$lang['Invoices.!note_private.service_cancel_date'] = "Dienst # %1\$s hat %2\$s abgebrochen."; // %1$s is the service ID, %2$s is the formatted service cancellation date and time
$lang['Invoices.!note_private.removed_lines'] = "Einzelposten entfernt:";
$lang['Invoices.!note_private.line_item'] = "- %1\$s je %2\$s: %3\$s"; // %1$s is the line item quantity, %2$s is the unit price, %3$s is the line item description
$lang['Invoices.!error.autodebit.valid'] = "Bitte wählen Sie, ob Autodebit für diese Rechnung zugelassen werden soll oder nicht.";
?>