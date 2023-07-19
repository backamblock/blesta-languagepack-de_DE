<?php
/**
 * Language definitions for the Client Services controller/views
 *
 * @package blesta
 * @subpackage blesta.language.de_de
 * @copyright Copyright (c) 2010, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

// Error messages
$lang['ClientServices.!error.password_mismatch'] = "Das Passwort stimmt nicht mit Ihrem Anmeldepasswort überein."; //en: "'The password does not match your log in password.'"
$lang['ClientServices.!error.invoices_manage_options'] = 'The configurable options cannot be changed until all invoices containing this service have been paid.';
$lang['ClientServices.!error.invoices_change_term'] = 'The term cannot be changed until all invoices containing this service have been paid.';
$lang['ClientServices.!error.invoices_renew_service'] = 'The service cannot be renewed until all invoices containing this service have been paid.';
$lang['ClientServices.!error.invoices_upgrade_package'] = "Das Paket kann nicht geändert werden, bis alle Rechnungen mit diesem Service bezahlt wurden."; //en: "'The package cannot be changed until all invoices containing this service have been paid.'"
$lang['ClientServices.!error.tab_unavailable'] = "Auf diesen Abschnitt kann nicht zugegriffen werden, während sich der Service im Status %1\$s befindet."; // %1$s is the language for the service status (e.g. Suspended, Canceled)"; //en: "'That section is not accessible while the service is in a %1$s state.'; // %1$s is the language for the service status (e.g. Suspended, Canceled)"


// Warning messages
$lang['ClientServices.!warning.invoices_upgrade_package'] = "Pakete können nicht geändert werden, bis alle Rechnungen für diesen Service bezahlt wurden."; //en: "'Packages cannot be changed until all invoices for this service have been paid.'"
$lang['ClientServices.!warning.invoices_change_term'] = 'The term cannot be changed until all invoices for this service have been paid.';
$lang['ClientServices.!warning.invoices_manage_options'] = "Die konfigurierbaren Optionen können erst geändert werden, wenn alle Rechnungen für diesen Dienst bezahlt wurden."; //en: "'Configurable options cannot be changed until all invoices for this service have been paid.'"


// Notice messages
$lang['ClientServices.!notice.queued_service_change'] = "Dieser Dienst hat ausstehende Änderungen. Zusätzliche Änderungen können nicht vorgenommen werden, bis die aktuellen ausstehenden Änderungen verarbeitet wurden."; //en: "'This service has pending changes. Additional changes may not be made until the current pending changes have been processed.'"
$lang['ClientServices.!notice.client_limit'] = "Paket kann nicht zugewiesen werden. Sie haben das Servicelimit für das Zielpaket bereits erreicht."; //en: "'Unable to assign package. You have already reached the service limit for the target package.'"


// Success messages
$lang['ClientServices.!success.manage.tab_updated'] = "Die Daten wurden erfolgreich aktualisiert."; //en: "'The data was successfully updated.'"
$lang['ClientServices.!success.service_canceled'] = "Der Dienst wurde erfolgreich gekündigt."; //en: "'The service was successfully canceled.'"
$lang['ClientServices.!success.service_schedule_canceled'] = "Der Service wird am Ende der Laufzeit gekündigt."; //en: "'The service is scheduled to be canceled at the end of its term.'"
$lang['ClientServices.!success.service_not_canceled'] = "Der Service wird nicht storniert."; //en: "'The service will not be canceled.'"
$lang['ClientServices.!success.service_term_updated'] = "Die Service-Laufzeit wurde aktualisiert und tritt am nächsten Erneuerungsdatum in Kraft."; //en: "'The service term has been updated and will take effect on the next renew date.'"
$lang['ClientServices.!success.addon_service_created'] = "Der Addon-Service wurde erfolgreich erstellt. Es wird jedoch erst nach Zahlungseingang aktiviert."; //en: "'The addon service has been successfully created. However, it will not be activated until after payment has been received.'"
$lang['ClientServices.!success.service_package_updated'] = "Das Servicepaket wurde aktualisiert."; //en: "'The service package has been updated.'"
$lang['ClientServices.!success.config_options_updated'] = "Die konfigurierbaren Optionen wurden erfolgreich aktualisiert."; //en: "'The configurable options were successfully updated.'"
$lang['ClientServices.!success.service_queue_pay'] = "Das Service Update wurde zur Bearbeitung aufgenommen. Die Bearbeitung wird erst abgeschlossen wenn eine Zahlung erfolgt ist."; //en: "'The service update has been queued to be processed. However, it will not be processed until after a payment has been received.'"
$lang['ClientServices.!success.service_queue'] = "Das Service-Update wurde in die Warteschlange gestellt und wird in Kürze verarbeitet."; //en: "'The service update has been queued and will be processed shortly.'"
$lang['ClientServices.!success.service_renewed'] = 'The service was successfully renewed.';


// Index
$lang['ClientServices.index.page_title'] = "Kunde #%1\$s Dienstleistungen"; // %1$s is the client ID number"; //en: "'Client #%1$s Services'; // %1$s is the client ID number"

$lang['ClientServices.index.boxtitle_services'] = "Dienstleistungen"; //en: "'Services'"

$lang['ClientServices.index.category_active'] = "Aktiv"; //en: "'Active'"
$lang['ClientServices.index.category_pending'] = "Ausstehend"; //en: "'Pending'"
$lang['ClientServices.index.category_suspended'] = "Gesperrt"; //en: "'Suspended'"
$lang['ClientServices.index.category_canceled'] = "Abgebrochen"; //en: "'Canceled'"

$lang['ClientServices.index.heading_addons'] = "Addons"; //en: "'Add-ons'"
$lang['ClientServices.index.heading_status'] = "Status"; //en: "'Status'"

$lang['ClientServices.index.heading_package'] = "Paket"; //en: "'Package'"
$lang['ClientServices.index.heading_label'] = "Beschriftung"; //en: "'Label'"
$lang['ClientServices.index.heading_term'] = "Laufzeit"; //en: "'Term'"
$lang['ClientServices.index.heading_datecreated'] = "Datum erstellt"; //en: "'Date Created'"
$lang['ClientServices.index.heading_daterenews'] = "Erneuerungsdatum"; //en: "'Date Renews'"
$lang['ClientServices.index.heading_datesuspended'] = "Datum ausgesetzt"; //en: "'Date Suspended'"
$lang['ClientServices.index.heading_datecanceled'] = "Gekündigt am"; //en: "'Date Canceled'"
$lang['ClientServices.index.heading_options'] = "Optionen"; //en: "'Options'"
$lang['ClientServices.index.option_manage'] = "Verwalten"; //en: "'Manage'"

$lang['ClientServices.index.recurring_term'] = "%1\$s %2\$s @ %3\$s"; // %1$s is the service term length (number), %2$s is the service period, %3$s is the formatted service renewal price"; //en: "'%1$s %2$s @ %3$s'; // %1$s is the service term length (number), %2$s is the service period, %3$s is the formatted service renewal price"

$lang['ClientServices.index.text_never'] = "Nie"; //en: "'Never'"

$lang['ClientServices.index.no_results'] = "Sie haben keine %1\$s Produkte"; // %1$s is the language for the services category type (e.g. Active, Pending)"; //en: "'You have no %1$s Services.'; // %1$s is the language for the services category type (e.g. Active, Pending)"

$lang['ClientServices.serviceinfo.no_results'] = "Dieser Service hat keine Details."; //en: "'This service has no details.'"
$lang['ClientServices.serviceinfo.cancellation_reason'] = 'Reason for Cancellation: %1$s'; // %1$s is the reason this service was canceled


// Manage
$lang['ClientServices.manage.page_title'] = "Kunde #%1\$s Service bearbeiten"; // %1$s is the client ID number"; //en: "'Client #%1$s Manage Service'; // %1$s is the client ID number"

$lang['ClientServices.manage.boxtitle_manage'] = "Verwalte"; // %1$s is the package name, %2$s is the service name"; //en: "'Manage %1$s - %2$s'; // %1$s is the package name, %2$s is the service name"
$lang['ClientServices.manage.tab_service_info'] = "Information"; //en: "'Information'"
$lang['ClientServices.manage.tab_addons'] = "Addons"; //en: "'Addons'"
$lang['ClientServices.manage.tab_service_return'] = "Zurück zum Dashboard"; //en: "'Return to Dashboard'"

$lang['ClientServices.manage.button_active'] = "Aktiv"; //en: "'Active'"
$lang['ClientServices.manage.button_pending'] = "steht aus"; //en: "'Pending'"
$lang['ClientServices.manage.button_suspended'] = "Suspendiert"; //en: "'Suspended'"
$lang['ClientServices.manage.button_in_review'] = "In Überprüfung"; //en: "'In Review'"
$lang['ClientServices.manage.button_canceled'] = "Abgebrochen"; //en: "'Canceled'"
$lang['ClientServices.manage.button_renew'] = 'Renew Now';
$lang['ClientServices.manage.button_cancel'] = "Optionen abbrechen"; //en: "'Cancel Options'"
$lang['ClientServices.manage.button_change_service_term'] = "Begriff ändern"; //en: "'Change Term'"
$lang['ClientServices.manage.button_change_service_package'] = "Paket ändern"; //en: "'Change Package'"
$lang['ClientServices.manage.button_config_options'] = "Konfigurierbaren Optionen ändern"; //en: "'Change Configurable Options'"

$lang['ClientServices.manage.heading_package'] = "Paket"; //en: "'Package'"
$lang['ClientServices.manage.heading_date_added'] = "Erstellungsdatum"; //en: "'Creation Date'"
$lang['ClientServices.manage.heading_package_term'] = "Laufzeit"; //en: "'Billing Cycle'"
$lang['ClientServices.manage.heading_service_name'] = "Kennzeichnung"; //en: "'Label'"
$lang['ClientServices.manage.heading_date_renews'] = "Erneuerungsdatum"; //en: "'Renew Date'"
$lang['ClientServices.manage.heading_date_next_invoice'] = "Nächste Rechnung"; //en: "'Next Invoice'"
$lang['ClientServices.manage.heading_price_initial'] = 'Amount';
$lang['ClientServices.manage.heading_price'] = "Wiederkehrender Betrag"; //en: "'Recurring Amount'"
$lang['ClientServices.manage.heading_setup_fee'] = 'Setup Fee';
$lang['ClientServices.manage.heading_price_onetime'] = "Menge"; //en: "'Amount'"
$lang['ClientServices.manage.heading_recurring_coupon'] = "Wiederkehrender Gutschein"; //en: "'Recurring Coupon'"
$lang['ClientServices.manage.text_coupon_percent'] = "%1\$s (%2\$s %%)"; // %1$s is the coupon code, %2$s is the coupon discount percentage. You MUST use two % signs to represent a single percent (i.e. %%)"; //en: "'%1$s (%2$s%%)'"
$lang['ClientServices.manage.text_coupon_percent'] = '%1$s (%2$s%%)'; // %1$s is the coupon code, %2$s is the coupon discount percentage. You MUST use two % signs to represent a single percent (i.e. %%)
$lang['ClientServices.manage.text_coupon_amount'] = "%1\$s (%2\$s)"; // %1$s is the coupon code, %2$s is the formatted coupon amount"; //en: "'%1$s (%2$s)'; // %1$s is the coupon code, %2$s is the formatted coupon amount"

$lang['ClientServices.manage.text_price'] = "%1\$sx %2\$s"; // %1$s is the service quantity, %2$s is the package price"; //en: "'%1$sx %2$s'; // %1$s is the service quantity, %2$s is the package price"
$lang['ClientServices.manage.text_date_never'] = "noch nie"; //en: "'Never'"
$lang['ClientServices.manage.text_date_suspended'] = "Dieser Dienst wurde am %1\$s ausgesetzt."; // %1$s is the date the service was suspended"; //en: "'This service was suspended on %1$s.'; // %1$s is the date the service was suspended"
$lang['ClientServices.manage.text_date_canceled'] = "Dieser Dienst wurde am %1\$s stoniert."; // %1$s is the date the service was canceled"; //en: "'This service was canceled on %1$s.'; // %1$s is the date the service was canceled"
$lang['ClientServices.manage.text_date_to_cancel'] = "Dieser Dienst soll am %1\$s beendet werden."; // %1$s is the date the service is scheduled to be canceled"; //en: "'This service is scheduled to be canceled on %1$s.'; // %1$s is the date the service is scheduled to be canceled"

$lang['ClientServices.manage.heading_options'] = "Aktionen"; //en: "'Actions'"
$lang['ClientServices.manage.heading_config_options'] = "Konfigurierbare Optionen"; //en: "'Configurable Options'"


// Renew
$lang['ClientServices.renew.page_title'] = "Kunde #%1\$s Dienst erneuern"; // %1$s is the client ID number"; //en: "'Client #%1$s Renew Service'; // %1$s is the client ID number"

$lang['ClientServices.renew.heading_renew'] = 'Renew Service';

$lang['ClientServices.renew.field_pricing_id'] = 'Renewal Term';
$lang['ClientServices.renew.field_password'] = "Login-Passwort zur Bestätigung der Änderungen"; //en: "'Log In Password to Confirm Changes'"
$lang['ClientServices.renew.field_renew_cancel'] = 'Cancel, do not renew';
$lang['ClientServices.renew.field_renew_submit'] = 'Renew';
$lang['ClientServices.renew.confirm_renew'] = "Wenn Sie auf \"Speichern\" klicken, wird eine neue Rechnung für die Erneuerung des Dienstes für die Laufzeit \"%1\$s\" erstellt, die den Dienst bis \"%2\$s\" abdeckt. Wenn Sie auf \"Speichern\" klicken, werden Sie zur Zahlungsseite weitergeleitet, um die erstellte Rechnung zu bezahlen."; // %1$s is the renewal term and %2$s is the next renewal date of the service"; //en: "'By clicking on "Save" a new invoice will be generated for the renewal of the service for the "%1$s" term, which will cover the service until "%2$s", by clicking on "Save" you will be redirected to the payment page to pay the generated invoice.'; // %1$s is the renewal term and %2$s is the next renewal date of the service"

// Cancel
$lang['ClientServices.cancel.page_title'] = "Client # %1\$s Service abbrechen"; // %1$s is the client ID number"; //en: "'Client #%1$s Cancel Service'; // %1$s is the client ID number"

$lang['ClientServices.cancel.heading_cancel'] = "Service abbrechen"; //en: "'Cancel Service'"

$lang['ClientServices.cancel.field_term_date'] = "Am Ende der Laufzeit (%1\$s)"; // %1$s is the date the service's term ends"; //en: "'At End of Term (%1$s)'; // %1$s is the date the service's term ends"
$lang['ClientServices.cancel.field_term'] = "Am Ende der Laufzeit"; //en: "'At End of Term'"
$lang['ClientServices.cancel.field_now'] = "Sofort"; //en: "'Immediately'"
$lang['ClientServices.cancel.field_do_not'] = "Nicht kündbar"; //en: "'Do not cancel'"
$lang['ClientServices.cancel.field_cancellation_reason'] = "Grund der Stornierung"; //en: "'Cancellation Reason'"
$lang['ClientServices.cancel.field_password'] = "Passwort anmelden, um die Änderungen zu bestätigen"; //en: "'Log In Password to Confirm Changes'"
$lang['ClientServices.cancel.field_cancel_cancel'] = "Abbrechen, nicht ändern"; //en: "'Cancel, do not change'"
$lang['ClientServices.cancel.field_cancel_submit'] = "Speichern"; //en: "'Save'"
$lang['ClientServices.cancel.confirm_cancel'] = "Sind Sie sich sicher, dass Sie diese Dienstleistung zum Ende der Vertragslaufzeit kündigen möchten?"; //en: "'Are you sure you want to cancel this service at the end of its term?'"
$lang['ClientServices.cancel.confirm_cancel_now'] = "Möchten Sie diesen Service wirklich stornieren?"; //en: "'Are you sure you want to cancel this service?'"
$lang['ClientServices.cancel.confirm_cancel_now_fee'] = "Bei sofortiger Kündigung dieses Services wird eine Stornierungsgebühr von %1\$s erhoben."; // %1$s is the formatted amount of the cancelation fee"; //en: "'Canceling this service immediately will incur a cancellation fee of %1$s.'; // %1$s is the formatted amount of the cancelation fee"
$lang['ClientServices.cancel.confirm_cancel_now_fee_tax'] = "Bei sofortiger Kündigung dieses Services wird eine Stornierungsgebühr von %1\$s zuzüglich Steuern erhoben."; // %1$s is the formatted amount of the cancelation fee"; //en: "'Canceling this service immediately will incur a cancellation fee of %1$s plus tax.'; // %1$s is the formatted amount of the cancelation fee"


// Change Service Term
$lang['ClientServices.changeterm.page_title'] = "Client # %1\$s Term ändern"; // %1$s is the client ID number"; //en: "'Client #%1$s Change Term'; // %1$s is the client ID number"

$lang['ClientServices.change_term.boxtitle'] = "Ändern Sie den Term für %1\$s - %2\$s"; // %1$s is the package name, %2$s is the service name"; //en: "'Change Term for %1$s - %2$s'; // %1$s is the package name, %2$s is the service name"
$lang['ClientServices.change_term.field_current_term'] = "Aktueller Begriff"; //en: "'Current Term'"
$lang['ClientServices.change_term.field_pricing_id'] = "Neuer Ausdruck"; //en: "'New Term'"

$lang['ClientServices.change_term.cancel'] = "Stornieren"; //en: "'Cancel'"
$lang['ClientServices.change_term.review'] = "Rezension"; //en: "'Review'"


$lang['ClientServices.get_package_terms.term'] = "%1\$s %2\$s - %3\$s"; // %1$s is the pricing term, %2$s is the pricing period, and %3$s is the formatted price"; //en: "'%1$s %2$s - %3$s'; // %1$s is the pricing term, %2$s is the pricing period, and %3$s is the formatted price"
$lang['ClientServices.get_package_terms.term_recurring'] = '%1$s %2$s - %3$s (renews @ %4$s)'; // %1$s is the pricing term, %2$s is the pricing period, and %3$s is the formatted initial price, %4$s is the formatted renewal price
$lang['ClientServices.get_package_terms.term_onetime'] = "%1\$s - %2\$s"; // %1$s is the pricing period, and %2$s is the formatted price"; //en: "'%1$s - %2$s'; // %1$s is the pricing period, and %2$s is the formatted price"


// Upgrade Service
$lang['ClientServices.upgrade.page_title'] = "Kunde #%1\$s Paket ändern"; // %1$s is the client ID number"; //en: "'Client #%1$s Change Package'; // %1$s is the client ID number"

$lang['ClientServices.upgrade.boxtitle'] = "Paket ändern von %1\$s - %2\$s"; // %1$s is the package name, %2$s is the service name"; //en: "'Change Package from %1$s - %2$s'; // %1$s is the package name, %2$s is the service name"
$lang['ClientServices.upgrade.btn_make_payment'] = "Eine Zahlung tätigen"; //en: "'Make a Payment'"
$lang['ClientServices.upgrade.field_current_package'] = "Aktuelles Paket"; //en: "'Current Package'"
$lang['ClientServices.upgrade.field_pricing_id'] = "Neues Paket"; //en: "'New Package'"
$lang['ClientServices.upgrade.field_cancel'] = "Stornieren"; //en: "'Cancel'"
$lang['ClientServices.upgrade.field_submit'] = "Rezension"; //en: "'Review'"

$lang['ClientServices.upgrade.text_prorate'] = "Wenn das von Ihnen gewählte neue Paket mehr kostet, wird die anteilige Differenz in Rechnung gestellt."; //en: "If the new package you select costs more, you'll be invoiced for the prorated difference."

$lang['ClientServices.upgrade.current_package'] = "%1\$s (%2\$s %3\$s - %4\$s)"; // %1$s is the package name, %2$s is the pricing term, %3$s is the pricing period, and %4$s is the formatted price"; //en: "'%1$s (%2$s %3$s - %4$s)'; // %1$s is the package name, %2$s is the pricing term, %3$s is the pricing period, and %4$s is the formatted price"
$lang['ClientServices.upgrade.current_package_onetime'] = "%1\$s (%2\$s - %3\$s)"; // %1$s is the package name, %2$s is the pricing period, and %3$s is the formatted price"; //en: "'%1$s (%2$s - %3$s)'; // %1$s is the package name, %2$s is the pricing period, and %3$s is the formatted price"


// Addons
$lang['ClientServices.addons.page_title'] = "Client # %1\$s Addons"; // %1$s is the client ID number"; //en: "'Client #%1$s Addons'; // %1$s is the client ID number"
$lang['ClientServices.addons.boxtitle_addons'] = "Addons für %1\$s - %2\$s"; // %1$s is the package name, %2$s is the service name"; //en: "'Addons for %1$s - %2$s'; // %1$s is the package name, %2$s is the service name"
$lang['ClientServices.addons.create_addon'] = "Addon hinzufügen"; //en: "'Add Addon'"
$lang['ClientServices.addons.no_results'] = "Zu diesem Dienst sind keine Add-ons hinzugefügt."; //en: "'No addons are attached to this service.'"


// Add addon
$lang['ClientServices.!error.addon_invalid'] = "Bitte wählen Sie ein gültiges Addon."; //en: "'Please select a valid addon.'"
$lang['ClientServices.addaddon.page_title'] = "Client # %1\$s Addon hinzufügen"; // %1$s is the client ID number"; //en: "'Client #%1$s Add Addon'; // %1$s is the client ID number"
$lang['ClientServices.addaddon.boxtitle_addons'] = "Addon für %1\$s - %2\$s hinzufügen "; // %1$s is the package name, %2$s is the service name"; //en: "'Add Addon for %1$s - %2$s'; // %1$s is the package name, %2$s is the service name"
$lang['ClientServices.addaddon.header_add'] = "Addons"; //en: "'Addons'"
$lang['ClientServices.addaddon.term'] = "%1\$s %2\$s"; // %1$s is the package term (e.g. 1), %2$s is the package period (e.g. Month)"; //en: "'%1$s %2$s'; // %1$s is the package term (e.g. 1), %2$s is the package period (e.g. Month)"
$lang['ClientServices.addaddon.term_price'] = "%1\$s - %2\$s"; // %1$s is the package term, (e.g. 1 Month), %2$s is the formatted package price"; //en: "'%1$s - %2$s'; // %1$s is the package term, (e.g. 1 Month), %2$s is the formatted package price"
$lang['ClientServices.addaddon.term_price_recurring'] = '%1$s - %2$s (renews @ %3$s)'; // %1$s is the package term, (e.g. 1 Month), %2$s is the formatted initial package price, %3$s is the formatted renewal package price
$lang['ClientServices.addaddon.term_price_setupfee'] = "%1\$s - %2\$s + %3\$s einrichten"; // %1$s is the package term, (e.g. 1 Month), %2$s is the formatted package price, %3$s is the formatted setup fee price"; //en: "'%1$s - %2$s + %3$s setup'; // %1$s is the package term, (e.g. 1 Month), %2$s is the formatted package price, %3$s is the formatted setup fee price"
$lang['ClientServices.addaddon.term_price_setupfee_recurring'] = '%1$s - %2$s + %3$s setup (renews @ %4$s)'; // %1$s is the package term, (e.g. 1 Month), %2$s is the formatted initial package price, %3$s is the formatted setup fee price, %4$s is the formatted renewal package price
$lang['ClientServices.addaddon.submit_add'] = "Erstellen"; //en: "'Create'"


// Configure Addon
$lang['ClientServices.configure_addon.header_options'] = "Konfigurierbare Optionen"; // %1$s is the module name"; //en: "'Configurable Options'; // %1$s is the module name"


// Manage Configurable Options
$lang['ClientServices.manageoptions.page_title'] = "Client # %1\$s Konfigurierbare Optionen verwalten"; // %1$s is the client ID number"; //en: "'Client #%1$s Manage Configurable Options'; // %1$s is the client ID number"
$lang['ClientServices.manageoptions.boxtitle_options'] = "Verwalten Sie die konfigurierbaren Optionen für %1\$s - %2\$s"; // %1$s is the package name, %2$s is the service name"; //en: "'Manage Configurable Options for %1$s - %2$s'; // %1$s is the package name, %2$s is the service name"

$lang['ClientServices.manageoptions.heading_current'] = "Aktuelle Optionen"; //en: "'Current Options'"
$lang['ClientServices.manageoptions.heading_new'] = "Neue Optionen"; //en: "'New Options'"

$lang['ClientServices.manageoptions.no_options'] = "Derzeit sind keine konfigurierbaren Optionen zum Aktualisieren verfügbar."; //en: "'There are no current configurable options available to update.'"
$lang['ClientServices.manageoptions.cancel'] = "Abrechen "; //en: "'Cancel'"
$lang['ClientServices.manageoptions.review'] = "Rezension"; //en: "'Review'"


// Review package/term/option changes
$lang['ClientServices.review.page_title'] = "Kunde #%1\$s Überprüfungsdienst"; // %1$s is the client ID number"; //en: "'Client #%1$s Review Service'; // %1$s is the client ID number"

$lang['ClientServices.review.boxtitle_review'] = "Änderungen an %1\$s - %2\$s überprüfen"; // %1$s is the package name, %2$s is the service name"; //en: "'Review Changes to %1$s - %2$s'; // %1$s is the package name, %2$s is the service name"
$lang['ClientServices.review.heading_current_service'] = "Aktueller Service"; //en: "'Current Service'"
$lang['ClientServices.review.heading_updated_service'] = "Service aktualisiert"; //en: "'Updated Service'"
$lang['ClientServices.review.heading_label'] = "Möglichkeit"; //en: "'Option'"
$lang['ClientServices.review.heading_old_value'] = "Aktueller Wert"; //en: "'Current Value'"
$lang['ClientServices.review.heading_new_value'] = "Neuer Wert"; //en: "'New Value'"
$lang['ClientServices.review.value'] = "%1\$s (%2\$sx %3\$s)"; // %1$s is the config option value name, %2$s is the quantity, %3$s is the formatted price"; //en: "'%1$s (%2$sx %3$s)'; // %1$s is the config option value name, %2$s is the quantity, %3$s is the formatted price"
$lang['ClientServices.review.value_setup_fee'] = "%1\$s (%2\$sx %3\$s, %4\$s Einrichtungsgebühr)"; // %1$s is the config option value name, %2$s is the quantity, %3$s is the formatted price, %4$s is the formatted setup fee"; //en: "'%1$s (%2$sx %3$s, %4$s Setup Fee)'; // %1$s is the config option value name, %2$s is the quantity, %3$s is the formatted price, %4$s is the formatted setup fee"
$lang['ClientServices.review.none'] = "-"; //en: "'-'"

$lang['ClientServices.review.cancel'] = "Stornieren"; //en: "'Cancel'"
$lang['ClientServices.review.update'] = "Speichern"; //en: "'Save'"


// Totals
$lang['ClientServices.totals.subtotal'] = "Zwischensumme:"; //en: "'Subtotal:'"
$lang['ClientServices.totals.total'] = "Heute fälliger Gesamtbetrag:"; //en: "'Total Due Today:'"
$lang['ClientServices.totals.total_recurring'] = 'Total When Renewing:';
$lang['ClientServices.!tooltip.total_recurring'] = 'The total price when renewing represents the total cost of this service and all of its options expected at next renewal.';
