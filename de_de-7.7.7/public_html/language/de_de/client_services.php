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

$lang['ClientServices.index.page_title'] = "Kunde #%1\$s Dienstleistungen"; // %1$s is the client ID number
$lang['ClientServices.index.boxtitle_services'] = "Dienstleistungen";
$lang['ClientServices.index.category_active'] = "Aktiv";
$lang['ClientServices.index.category_pending'] = "Ausstehend";
$lang['ClientServices.index.category_suspended'] = "Gesperrt";
$lang['ClientServices.index.category_canceled'] = "Abgebrochen";
$lang['ClientServices.index.heading_package'] = "Paket";
$lang['ClientServices.index.heading_label'] = "Beschriftung";
$lang['ClientServices.index.heading_term'] = "Laufzeit";
$lang['ClientServices.index.heading_datecreated'] = "Datum erstellt";
$lang['ClientServices.index.heading_daterenews'] = "Erneuerungsdatum";
$lang['ClientServices.index.heading_options'] = "Optionen";
$lang['ClientServices.index.option_manage'] = "Verwalten";
$lang['ClientServices.index.text_never'] = "Nie";
$lang['ClientServices.index.no_results'] = "Sie haben keine %1\$s Produkte"; // %1$s is the language for the services category type (e.g. Active, Pending)
$lang['ClientServices.serviceinfo.no_results'] = "Dieser Service hat keine Details.";
$lang['ClientServices.!success.manage.tab_updated'] = "Die Daten wurden erfolgreich aktualisiert.";
$lang['ClientServices.index.heading_addons'] = "Addons";
$lang['ClientServices.index.heading_status'] = "Status";
$lang['ClientServices.index.heading_datesuspended'] = "Datum ausgesetzt";
$lang['ClientServices.index.heading_datecanceled'] = "Gekündigt am";
$lang['ClientServices.manage.page_title'] = "Kunde #%1\$s Service bearbeiten"; // %1$s is the client ID number
$lang['ClientServices.manage.tab_service_info'] = "Information";
$lang['ClientServices.!success.service_canceled'] = "Der Dienst wurde erfolgreich gekündigt.";
$lang['ClientServices.!success.service_schedule_canceled'] = "Der Service wird am Ende der Laufzeit gekündigt.";
$lang['ClientServices.cancel.page_title'] = "Client # %1\$s Service abbrechen"; // %1$s is the client ID number
$lang['ClientServices.cancel.heading_cancel'] = "

Service abbrechen
";
$lang['ClientServices.cancel.field_term_date'] = "Am Ende der Laufzeit (%1\$s)"; // %1$s is the date the service's term ends
$lang['ClientServices.cancel.field_term'] = "Am Ende der Laufzeit";
$lang['ClientServices.cancel.field_now'] = "Sofort";
$lang['ClientServices.cancel.confirm_cancel'] = "Sind Sie sich sicher, dass Sie diese Dienstleistung zum Ende der Vertragslaufzeit kündigen möchten?";
$lang['ClientServices.cancel.confirm_cancel_now'] = "Möchten Sie diesen Service wirklich stornieren?";
$lang['ClientServices.cancel.confirm_cancel_now_fee'] = "

Bei sofortiger Kündigung dieses Services wird eine Stornierungsgebühr von %1\$s erhoben.
"; // %1$s is the formatted amount of the cancelation fee
$lang['ClientServices.cancel.confirm_cancel_now_fee_tax'] = "Bei sofortiger Kündigung dieses Services wird eine Stornierungsgebühr von %1\$s zuzüglich Steuern erhoben."; // %1$s is the formatted amount of the cancelation fee
$lang['ClientServices.!error.password_mismatch'] = "Das Passwort stimmt nicht mit Ihrem Anmeldepasswort überein.";
$lang['ClientServices.!success.service_not_canceled'] = "Der Service wird nicht storniert.";
$lang['ClientServices.!success.addon_service_created'] = "Der Addon-Service wurde erfolgreich erstellt. Es wird jedoch erst nach Zahlungseingang aktiviert.";
$lang['ClientServices.manage.tab_addons'] = "Addons";
$lang['ClientServices.manage.tab_service_return'] = "Zurück zum Dashboard";
$lang['ClientServices.manage.button_active'] = "Aktiv";
$lang['ClientServices.manage.button_pending'] = "steht aus";
$lang['ClientServices.manage.button_suspended'] = "Suspendiert";
$lang['ClientServices.manage.button_in_review'] = "

In Überprüfung
";
$lang['ClientServices.manage.button_canceled'] = "Abgebrochen";
$lang['ClientServices.manage.button_cancel'] = "Optionen abbrechen";
$lang['ClientServices.manage.heading_package'] = "Paket";
$lang['ClientServices.manage.heading_date_added'] = "Erstellungsdatum";
$lang['ClientServices.manage.heading_package_term'] = "Laufzeit";
$lang['ClientServices.manage.heading_service_name'] = "Kennzeichnung";
$lang['ClientServices.manage.heading_date_renews'] = "Erneuerungsdatum";
$lang['ClientServices.manage.heading_date_next_invoice'] = "Nächste Rechnung";
$lang['ClientServices.manage.heading_price'] = "

Wiederkehrender Betrag
";
$lang['ClientServices.manage.text_date_never'] = "noch nie";
$lang['ClientServices.manage.text_date_to_cancel'] = "Dieser Dienst soll am %1\$s beendet werden."; // %1$s is the date the service is scheduled to be canceled
$lang['ClientServices.manage.heading_config_options'] = "Konfigurierbare Optionen";
$lang['ClientServices.cancel.field_do_not'] = "Nicht kündbar";
$lang['ClientServices.cancel.field_password'] = "Passwort anmelden, um die Änderungen zu bestätigen";
$lang['ClientServices.cancel.field_cancel_cancel'] = "Abbrechen, nicht ändern";
$lang['ClientServices.addons.page_title'] = "Client # %1\$s Addons"; // %1$s is the client ID number
$lang['ClientServices.addons.boxtitle_addons'] = "Addons für %1\$s - %2\$s"; // %1$s is the package name, %2$s is the service name
$lang['ClientServices.addons.create_addon'] = "

Addon hinzufügen
";
$lang['ClientServices.addons.no_results'] = "Zu diesem Dienst sind keine Add-ons hinzugefügt.";
$lang['ClientServices.!error.addon_invalid'] = "Bitte wählen Sie ein gültiges Addon.";
$lang['ClientServices.addaddon.page_title'] = "Client # %1\$s Addon hinzufügen"; // %1$s is the client ID number
$lang['ClientServices.addaddon.boxtitle_addons'] = "Addon für %1\$s - %2\$s hinzufügen "; // %1$s is the package name, %2$s is the service name
$lang['ClientServices.addaddon.header_add'] = "Addons";
$lang['ClientServices.addaddon.term'] = "%1\$s %2\$s"; // %1$s is the package term (e.g. 1), %2$s is the package period (e.g. Month)
$lang['ClientServices.addaddon.term_price'] = "%1\$s - %2\$s"; // %1$s is the package term, (e.g. 1 Month), %2$s is the formatted package price
$lang['ClientServices.addaddon.term_price_setupfee'] = "%1\$s - %2\$s + %3\$s einrichten"; // %1$s is the package term, (e.g. 1 Month), %2$s is the formatted package price, %3$s is the formatted setup fee price
$lang['ClientServices.addaddon.submit_add'] = "Erstellen";
$lang['ClientServices.configure_addon.header_options'] = "Konfigurierbare Optionen"; // %1$s is the module name
$lang['ClientServices.!error.invoices_upgrade_package'] = "Das Paket kann nicht geändert werden, bis alle Rechnungen mit diesem Service bezahlt wurden.";
$lang['ClientServices.!warning.invoices_upgrade_package'] = "Pakete können nicht geändert werden, bis alle Rechnungen für diesen Service bezahlt wurden.";
$lang['ClientServices.!success.service_package_updated'] = "Das Servicepaket wurde aktualisiert.";
$lang['ClientServices.manage.boxtitle_manage'] = "Verwalte"; // %1$s is the package name, %2$s is the service name
$lang['ClientServices.manage.button_change_service_term'] = "Begriff ändern";
$lang['ClientServices.manage.button_change_service_package'] = "Paket ändern";
$lang['ClientServices.manage.text_price'] = "%1\$sx %2\$s"; // %1$s is the service quantity, %2$s is the package price
$lang['ClientServices.manage.text_date_suspended'] = "

Dieser Dienst wurde am %1\$s ausgesetzt.
"; // %1$s is the date the service was suspended
$lang['ClientServices.manage.text_date_canceled'] = "Dieser Dienst wurde am %1\$s stoniert."; // %1$s is the date the service was canceled
$lang['ClientServices.manage.heading_options'] = "Aktionen";
$lang['ClientServices.cancel.field_cancel_submit'] = "Speichern";
$lang['ClientServices.change_term.field_current_term'] = "Aktueller Begriff";
$lang['ClientServices.change_term.field_pricing_id'] = "Neuer Ausdruck";
$lang['ClientServices.get_package_terms.term'] = "%1\$s %2\$s - %3\$s"; // %1$s is the pricing term, %2$s is the pricing period, and %3$s is the formatted price
$lang['ClientServices.get_package_terms.term_onetime'] = "%1\$s - %2\$s"; // %1$s is the pricing period, and %2$s is the formatted price
$lang['ClientServices.upgrade.btn_make_payment'] = "

Eine Zahlung tätigen
";
$lang['ClientServices.upgrade.field_current_package'] = "Aktuelles Paket";
$lang['ClientServices.upgrade.field_pricing_id'] = "

Neues Paket
";
$lang['ClientServices.upgrade.field_cancel'] = "Stornieren";
$lang['ClientServices.upgrade.field_submit'] = "Rezension";
$lang['ClientServices.upgrade.text_prorate'] = "

Wenn das von Ihnen gewählte neue Paket mehr kostet, wird die anteilige Differenz in Rechnung gestellt.
";
$lang['ClientServices.upgrade.current_package'] = "%1\$s (%2\$s %3\$s - %4\$s)"; // %1$s is the package name, %2$s is the pricing term, %3$s is the pricing period, and %4$s is the formatted price
$lang['ClientServices.upgrade.current_package_onetime'] = "%1\$s (%2\$s - %3\$s)"; // %1$s is the package name, %2$s is the pricing period, and %3$s is the formatted price
$lang['ClientServices.!notice.queued_service_change'] = "

Dieser Dienst hat ausstehende Änderungen. Zusätzliche Änderungen können nicht vorgenommen werden, bis die aktuellen ausstehenden Änderungen verarbeitet wurden.
";
$lang['ClientServices.!success.service_term_updated'] = "Die Service-Laufzeit wurde aktualisiert und tritt am nächsten Erneuerungsdatum in Kraft.";
$lang['ClientServices.!success.config_options_updated'] = "

Die konfigurierbaren Optionen wurden erfolgreich aktualisiert.
";
$lang['ClientServices.!success.service_queue_pay'] = "Das Service Update wurde zur Bearbeitung aufgenommen. Die Bearbeitung wird erst abgeschlossen wenn eine Zahlung erfolgt ist.";
$lang['ClientServices.!success.service_queue'] = "

Das Service-Update wurde in die Warteschlange gestellt und wird in Kürze verarbeitet.
";
$lang['ClientServices.index.recurring_term'] = "%1\$s %2\$s @ %3\$s"; // %1$s is the service term length (number), %2$s is the service period, %3$s is the formatted service renewal price
$lang['ClientServices.manage.button_config_options'] = "Konfigurierbaren Optionen ändern";
$lang['ClientServices.manage.heading_price_onetime'] = "Menge";
$lang['ClientServices.manage.heading_recurring_coupon'] = "Wiederkehrender Gutschein";
$lang['ClientServices.manage.text_coupon_percent'] = "%1\$s (%2\$s %%)"; // %1$s is the coupon code, %2$s is the coupon discount percentage. You MUST use two % signs to represent a single percent (i.e. %%)
$lang['ClientServices.manage.text_coupon_amount'] = "%1\$s (%2\$s)"; // %1$s is the coupon code, %2$s is the formatted coupon amount
$lang['ClientServices.changeterm.page_title'] = "Client # %1\$s Term ändern"; // %1$s is the client ID number
$lang['ClientServices.change_term.boxtitle'] = "Ändern Sie den Term für %1\$s - %2\$s"; // %1$s is the package name, %2$s is the service name
$lang['ClientServices.change_term.cancel'] = "Stornieren";
$lang['ClientServices.change_term.review'] = "Rezension";
$lang['ClientServices.upgrade.page_title'] = "Kunde #%1\$s Paket ändern"; // %1$s is the client ID number
$lang['ClientServices.upgrade.boxtitle'] = "Paket ändern von %1\$s - %2\$s"; // %1$s is the package name, %2$s is the service name
$lang['ClientServices.manageoptions.page_title'] = "Client # %1\$s Konfigurierbare Optionen verwalten"; // %1$s is the client ID number
$lang['ClientServices.manageoptions.boxtitle_options'] = "

Verwalten Sie die konfigurierbaren Optionen für %1\$s - %2\$s
"; // %1$s is the package name, %2$s is the service name
$lang['ClientServices.manageoptions.heading_current'] = "Aktuelle Optionen";
$lang['ClientServices.manageoptions.heading_new'] = "Neue Optionen";
$lang['ClientServices.manageoptions.no_options'] = "Derzeit sind keine konfigurierbaren Optionen zum Aktualisieren verfügbar.";
$lang['ClientServices.manageoptions.cancel'] = "Abrechen ";
$lang['ClientServices.manageoptions.review'] = "Rezension";
$lang['ClientServices.review.page_title'] = "Kunde #%1\$s Überprüfungsdienst"; // %1$s is the client ID number
$lang['ClientServices.review.heading_current_service'] = "

Aktueller Service
";
$lang['ClientServices.review.heading_updated_service'] = "

Service aktualisiert
";
$lang['ClientServices.review.heading_label'] = "Möglichkeit";
$lang['ClientServices.review.heading_old_value'] = "Aktueller Wert";
$lang['ClientServices.review.heading_new_value'] = "Neuer Wert";
$lang['ClientServices.review.value'] = "%1\$s (%2\$sx %3\$s)"; // %1$s is the config option value name, %2$s is the quantity, %3$s is the formatted price
$lang['ClientServices.review.none'] = "-";
$lang['ClientServices.review.cancel'] = "Stornieren";
$lang['ClientServices.review.update'] = "Speichern";
$lang['ClientServices.totals.subtotal'] = "Zwischensumme:";
$lang['ClientServices.totals.total'] = "Heute fälliger Gesamtbetrag:";
$lang['ClientServices.review.boxtitle_review'] = "

Änderungen an %1\$s - %2\$s überprüfen
"; // %1$s is the package name, %2$s is the service name
$lang['ClientServices.!error.tab_unavailable'] = "Auf diesen Abschnitt kann nicht zugegriffen werden, während sich der Service im Status %1\$s befindet."; // %1$s is the language for the service status (e.g. Suspended, Canceled)
$lang['ClientServices.!warning.invoices_manage_options'] = "Die konfigurierbaren Optionen können erst geändert werden, wenn alle Rechnungen für diesen Dienst bezahlt wurden.";
$lang['ClientServices.review.value_setup_fee'] = "%1\$s (%2\$sx %3\$s, %4\$s Einrichtungsgebühr)"; // %1$s is the config option value name, %2$s is the quantity, %3$s is the formatted price, %4$s is the formatted setup fee
$lang['ClientServices.!notice.client_limit'] = "Paket kann nicht zugewiesen werden. Sie haben das Servicelimit für das Zielpaket bereits erreicht.";
$lang['ClientServices.cancel.field_cancellation_reason'] = "Grund der Stornierung";
$lang['ClientServices.renew.page_title'] = "Kunde #%1\$s Dienst erneuern"; // %1$s is the client ID number
$lang['ClientServices.renew.field_password'] = "Login-Passwort zur Bestätigung der Änderungen";
$lang['ClientServices.renew.confirm_renew'] = "Wenn Sie auf \"Speichern\" klicken, wird eine neue Rechnung für die Erneuerung des Dienstes für die Laufzeit \"%1\$s\" erstellt, die den Dienst bis \"%2\$s\" abdeckt. Wenn Sie auf \"Speichern\" klicken, werden Sie zur Zahlungsseite weitergeleitet, um die erstellte Rechnung zu bezahlen."; // %1$s is the renewal term and %2$s is the next renewal date of the service
?>