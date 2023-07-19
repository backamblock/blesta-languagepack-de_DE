<?php
/**
 * Language definitions for the Invoices model
 *
 * @package blesta
 * @subpackage blesta.language.de_de
 * @copyright Copyright (c) 2010, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

// Recurring invoice pricing periods
$lang['Invoices.getPricingPeriods.day'] = "Tag"; //en: "'Day'"
$lang['Invoices.getPricingPeriods.week'] = "Woche"; //en: "'Week'"
$lang['Invoices.getPricingPeriods.month'] = "Monat"; //en: "'Month'"
$lang['Invoices.getPricingPeriods.year'] = "Jahr"; //en: "'Year'"

// Invoice delivery methods
$lang['Invoices.getDeliveryMethods.email'] = "Email"; //en: "'Email'"
$lang['Invoices.getDeliveryMethods.paper'] = "Papier"; //en: "'Paper'"
$lang['Invoices.getDeliveryMethods.interfax'] = "InterFax"; //en: "'InterFax'"
$lang['Invoices.getDeliveryMethods.postalmethods'] = "Versandarten"; //en: "'PostalMethods'"

// Private note descriptions
$lang['Invoices.!note_private.service_cancel_date'] = "Dienst # %1\$s hat %2\$s abgebrochen."; // %1$s is the service ID, %2$s is the formatted service cancellation date and time"; //en: "'Service #%1$s canceled %2$s.'; // %1$s is the service ID, %2$s is the formatted service cancellation date and time"
$lang['Invoices.!note_private.removed_lines'] = "Einzelposten entfernt:"; //en: "'Removed line items:'"
$lang['Invoices.!note_private.line_item'] = "- %1\$s je %2\$s: %3\$s"; // %1$s is the line item quantity, %2$s is the unit price, %3$s is the line item description"; //en: "'- %1$s @ %2$s: %3$s'; // %1$s is the line item quantity, %2$s is the unit price, %3$s is the line item description"

// Invoice line item descriptions
$lang['Invoices.!line_item.service_renew_description'] = "%5\$s%1\$s - %2\$s (%3\$s - %4\$s)"; // %1$s is the name of the package, %2$s is the name of the service, %3$s is the service's renew date, %4$s is the service's next renew date, %5$s is the addon identifier set only for addon services"; //en: "'%5$s%1$s - %2$s (%3$s - %4$s)'; // %1$s is the name of the package, %2$s is the name of the service, %3$s is the service's renew date, %4$s is the service's next renew date, %5$s is the addon identifier set only for addon services"
$lang['Invoices.!line_item.service_cancel_fee_description'] = "%1\$s - %2\$s Stornierungsgebühr"; // %1$s is the name of the package, %2$s is the name of the service"; //en: "'%1$s - %2$s Cancelation Fee'; // %1$s is the name of the package, %2$s is the name of the service"
$lang['Invoices.!line_item.service_setup_fee_description'] = "%1\$s - %2\$s Einrichtungsgebühr"; // %1$s is the name of the package, %2$s is the name of the service"; //en: "'%1$s - %2$s Setup Fee'; // %1$s is the name of the package, %2$s is the name of the service"
$lang['Invoices.!line_item.service_option_renew_description'] = "? %1\$s - %2\$s"; // %1$s is the package option label, %2$s is the service option name"; //en: "'↳ %1$s - %2$s'; // %1$s is the package option label, %2$s is the service option name"
$lang['Invoices.!line_item.service_option_setup_fee_description'] = "? %1\$s - %2\$s Einrichtungsgebühr"; // %1$s is the package option label, %2$s is the service option name"; //en: "'↳ %1$s - %2$s Setup Fee'; // %1$s is the package option label, %2$s is the service option name"
$lang['Invoices.!line_item.service_prorated_upgrade_description'] = "Proriertes Upgrade von %1\$s nach %2\$s - %3\$s (%4\$s - %5\$s)"; // %1$s is the current package name, %2$s is the new package name, %3$s is the service name, %4$s is the current date, %5$s is the service's next renew date"; //en: "'Prorated Upgrade from %1$s to %2$s - %3$s (%4$s - %5$s)'; // %1$s is the current package name, %2$s is the new package name, %3$s is the service name, %4$s is the current date, %5$s is the service's next renew date"
$lang['Invoices.!line_item.service_prorated_upgrade_description_onetime'] = "Anteiliges Upgrade von %1\$s auf %2\$s - %3\$s"; // %1$s is the current package name, %2$s is the new package name, %3$s is the service name"; //en: "'Prorated Upgrade from %1$s to %2$s - %3$s'; // %1$s is the current package name, %2$s is the new package name, %3$s is the service name"
$lang['Invoices.!line_item.service_option_prorated_upgrade'] = '↳ Prorated Upgrade of %1$s from %2$s to %3$s'; // %1$s is the service option label name, %2$s is the current service option value, %3$s is the new service option value
$lang['Invoices.!line_item.service_option_prorated_upgrade_date'] = '↳ Prorated Upgrade of %1$s from %2$s to %3$s (%4$s - %5$s)'; // %1$s is the service option label name, %2$s is the current service option value, %3$s is the new service option value, %4$s is the current date, %5$s is the service's next renew date
$lang['Invoices.!line_item.service_option_prorated_upgrade_onetime'] = '↳ Prorated Upgrade of %1$s from %2$s to %3$s'; // %1$s is the service option label name, %2$s is the current service option value, %3$s is the new service option value
$lang['Invoices.!line_item.service_option_prorated_upgrade_text'] = '↳ Prorated Upgrade of %1$s'; // %1$s is the service option label name
$lang['Invoices.!line_item.service_option_prorated_upgrade_text_date'] = '↳ Prorated Upgrade of %1$s (%2$s - %3$s)'; // %1$s is the service option label name, %2$s is the current date, %3$s is the service's next renew date
$lang['Invoices.!line_item.service_option_prorated_upgrade_text_onetime'] = '↳ Prorated Upgrade of %1$s'; // %1$s is the service option label name
$lang['Invoices.!line_item.service_option_prorated_upgrade_qty'] = '↳ Prorated Upgrade of %1$s from %2$sx %3$s to %4$sx %5$s'; // %1$s is the service option label name, %2$s is the old service option quantity, %3$s is the current service option value, %4$s is the new service option quantity, %5$s is the new service option value
$lang['Invoices.!line_item.service_option_prorated_upgrade_qty_date'] = '↳ Prorated Upgrade of %1$s from %2$sx %3$s to %4$sx %5$s (%6$s - %7$s)'; // %1$s is the service option label name, %2$s is the old service option quantity, %3$s is the current service option value, %4$s is the new service option quantity, %5$s is the new service option value, %6$s is the current date, %7$s is the service's next renew date
$lang['Invoices.!line_item.service_option_prorated_upgrade_qty_onetime'] = '↳ Prorated Upgrade of %1$s from %2$sx %3$s to %4$sx %5$s'; // %1$s is the service option label name, %2$s is the old service option quantity, %3$s is the current service option value, %4$s is the new service option quantity, %5$s is the new service option value
$lang['Invoices.!line_item.service_option_prorated_addition'] = '↳ Prorated Addition of %1$s %2$s'; // %1$s is the service option label name, %2$s is the service option value
$lang['Invoices.!line_item.service_option_prorated_addition_date'] = '↳ Prorated Addition of %1$s %2$s (%3$s - %4$s)'; // %1$s is the service option label name, %2$s is the service option value, %3$s is the current date, %4$s is the service's next renew date
$lang['Invoices.!line_item.service_option_prorated_addition_onetime'] = '↳ Prorated Addition of %1$s %2$s'; // %1$s is the service option label name, %2$s is the service option value
$lang['Invoices.!line_item.service_option_prorated_addition_text'] = '↳ Prorated Addition of %1$s'; // %1$s is the service option label name
$lang['Invoices.!line_item.service_option_prorated_addition_text_date'] = '↳ Prorated Addition of %1$s (%2$s - %3$s)'; // %1$s is the service option label name, %2$s is the current date, %3$s is the service's next renew date
$lang['Invoices.!line_item.service_option_prorated_addition_text_onetime'] = '↳ Prorated Addition of %1$s'; // %1$s is the service option label name
$lang['Invoices.!line_item.service_option_prorated_addition_qty'] = '↳ Prorated Addition of %1$s %2$sx %3$s'; // %1$s is the service option label name, %2$s is the service option quantity, %3$s is the service option value
$lang['Invoices.!line_item.service_option_prorated_addition_qty_date'] = '↳ Prorated Addition of %1$s %2$sx %3$s (%4$s - %5$s)'; // %1$s is the service option label name, %2$s is the service option quantity, %3$s is the service option value, %4$s is the current date, %5$s is the service's next renew date
$lang['Invoices.!line_item.service_option_prorated_addition_qty_onetime'] = '↳ Prorated Addition of %1$s %2$sx %3$s'; // %1$s is the service option label name, %2$s is the service option quantity, %3$s is the service option value
$lang['Invoices.!line_item.prorated_credit'] = "Anteilige Gutschrift"; //en: "'Prorated Credit'"
$lang['Invoices.!line_item.coupon_line_item_description_amount'] = "Gutschein %1\$s"; // %1$s is the coupon code"; //en: "'Coupon %1$s'; // %1$s is the coupon code"
$lang['Invoices.!line_item.coupon_line_item_description_percent'] = "Gutschein %1\$s - %2\$s %%"; // %1$s is the coupon code, %2$s is the coupon discount percentage, the two percent symbols (%%) must both be used together to display a single percent symbol"; //en: "'Coupon %1$s - %2$s%%'; // %1$s is the coupon code, %2$s is the coupon discount percentage, the two percent symbols (%%) must both be used together to display a single percent symbol"
$lang['Invoices.!line_item.recurring_renew_description'] = "%1\$s (%2\$s - %3\$s)"; // %1$s is the line item description, %2$s is the invoice's renew date, %3$s is the invoice's next renew date"; //en: "'%1$s (%2$s - %3$s)'; // %1$s is the line item description, %2$s is the invoice's renew date, %3$s is the invoice's next renew date"


// Statuses
$lang['Invoices.status.active'] = "Aktiv"; //en: "'Active'"
$lang['Invoices.status.proforma'] = "Pro forma"; //en: "'Pro forma'"
$lang['Invoices.status.draft'] = "Entwurf"; //en: "'Draft'"
$lang['Invoices.status.void'] = "Leere"; //en: "'Void'"

// Types
$lang['Invoices.types.standard'] = "Standard"; //en: "'Standard'"
$lang['Invoices.types.proforma'] = "Pro forma"; //en: "'Pro forma'"

// Cache methods
$lang['Invoices.cache_methods.none'] = 'None';
$lang['Invoices.cache_methods.json'] = 'JSON';
$lang['Invoices.cache_methods.json_pdf'] = 'JSON + PDF';


// Invoice Delivery errors
$lang['Invoices.!error.invoice_id.exists'] = "Ungültige Rechnungsnummer"; //en: "'Invalid invoice ID.'"
$lang['Invoices.!error.invoice_recur_id.exists'] = "Ungültige wiederkehrende Rechnungsnummer"; //en: "'Invalid recurring invoice ID.'"
$lang['Invoices.!error.method.exists'] = "Sie müssen mindestens eine Versandart einstellen."; //en: "'You must set at least one delivery method.'"

$lang['Invoices.!error.delivery.empty'] = "Bitte geben Sie eine Rechnungszustellungsmethode ein."; //en: "'Please enter an invoice delivery method.'"
$lang['Invoices.!error.delivery.length'] = "Die Länge der Rechnungszustellungsmethode darf 32 Zeichen nicht überschreiten."; //en: "'The invoice delivery method length may not exceed 32 characters.'"

// Invoice errors
$lang['Invoices.!error.invoice_add.failed'] = 'This invoice could not be created. Please try again.';
$lang['Invoices.!error.id_format.empty'] = "Für Rechnungen wurde kein ID-Format festgelegt."; //en: "'No ID format set for invoices.'"
$lang['Invoices.!error.id_format.length'] = "Das ID-Format für Rechnungen darf 64 Zeichen nicht überschreiten."; //en: "'The ID format for invoices may not exceed 64 characters.'"
$lang['Invoices.!error.id_value.valid'] = "Der Rechnungs-ID-Wert konnte nicht ermittelt werden."; //en: "'Unable to determine invoice ID value.'"
$lang['Invoices.!error.id.amount_applied'] = "Rechnungsposten, Währung und Status werden möglicherweise nicht aktualisiert, da auf diese Rechnung bereits ein Betrag gebucht wurde."; //en: "'Invoice lines, currency, and status may not be updated because an amount has already been applied to this invoice.'"
$lang['Invoices.!error.client_id.exists'] = "Ungültige Client-ID"; //en: "'Invalid client ID.'"
$lang['Invoices.!error.date_billed.format'] = "Das abgerechnete Datum hat ein ungültiges Datumsformat."; //en: "'The billed date is in an invalid date format.'"
$lang['Invoices.!error.date_due.format'] = "Das Fälligkeitsdatum liegt in einem ungültigen Datumsformat."; //en: "'The due date is in an invalid date format.'"
$lang['Invoices.!error.date_due.after_billed'] = "Das Fälligkeitsdatum muss am gleichen Tag der Rechnung sein oder später."; //en: "'The date due must be on or after the date billed.'"
$lang['Invoices.!error.date_closed.format'] = "Das Datum ist in einem ungültigen Format."; //en: "'The closed date is in an invalid date format.'"
$lang['Invoices.!error.date_autodebit.format'] = "Das Rechnungsdatum hat einen ungültigen Datumswert."; //en: "'The due date is in an invalid date format.'"
$lang['Invoices.!error.autodebit.valid'] = "Bitte wählen Sie, ob Autodebit für diese Rechnung zugelassen werden soll oder nicht."; //en: "'Please select whether or not to allow autodebit for this invoice.'"
$lang['Invoices.!error.status.format'] = "Ungültiger Status."; //en: "'Invalid status.'"
$lang['Invoices.!error.currency.length'] = "Die Währung muss gemäß ISO 4217, 3 Zeichen lang sein"; //en: "'The currency code must be 3 characters in length.'"
$lang['Invoices.!error.delivery.exists'] = "Die angegebene Versandart existiert nicht."; //en: "'The delivery method given does not exist.'"
$lang['Invoices.!error.term.format'] = "Laufzeit sollte eine Zahl sein."; //en: "'The term should be a number.'"
$lang['Invoices.!error.term.bounds'] = "Der Bezeichnung sollte zwischen 1 und 65535 liegen."; //en: "'The term should be between 1 and 65535.'"
$lang['Invoices.!error.period.format'] = "ungültige Dauer"; //en: "'The period is invalid.'"
$lang['Invoices.!error.duration.format'] = "Die Dauer ist ungültig."; //en: "'The duration is invalid.'"
$lang['Invoices.!error.date_renews.format'] = "Das Datum für die erneute Rechnungserneuerung muss ein gültiges Datumsformat sein."; //en: "'The recurring invoice renew date must be a valid date format.'"
$lang['Invoices.!error.date_last_renewed.format'] = "Das letzte Datum für die erneute Rechnungserneuerung muss ein gültiges Datumsformat sein."; //en: "'The last recurring invoice renew date must be a valid date format.'"
$lang['Invoices.!error.invoice_id.draft'] = "Die angegebene Rechnung ist kein Rechnungsentwurf und konnte daher nicht gelöscht werden."; //en: "'The given invoice is not a draft invoice, and therefore could not be deleted.'"
$lang['Invoices.!error.domain_renew.failed'] = 'Domains can only be renewed for up to 10 years.';


// Invoice line errors
$lang['Invoices.!error.lines[][id].exists'] = "Ungültige Werbebuchungs-ID"; //en: "'Invalid line item ID.'"
$lang['Invoices.!error.lines[][service_id].exists'] = "Ungültige Service-ID"; //en: "'Invalid service ID.'"
$lang['Invoices.!error.lines[][description].empty'] = "Bitte die Beschreibung vom Produkt einfügen."; //en: "'Please enter a line item description.'"
$lang['Invoices.!error.lines[][qty].format'] = "Die Menge muss eine Zahl sein."; //en: "'The quantity must be a number.'"
$lang['Invoices.!error.lines[][qty].minimum'] = "Bitte geben Sie eine Menge von 1 oder mehr ein."; //en: "'Please enter a quantity of 1 or more.'"
$lang['Invoices.!error.lines[][amount].format'] = "Die Kosten pro Einheit muss eine Zahl sein."; //en: "'The unit cost must be a number.'"
$lang['Invoices.!error.lines[][tax].format'] = "Werbebuchungssteuer muss ein \"True\" oder \"False\" sein"; //en: "Line item tax must be a 'true' or 'false'"
