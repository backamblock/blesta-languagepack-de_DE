<?php
/**
 * Language definitions for the Admin Billing controller/views
 *
 * @package blesta
 * @subpackage blesta.language.de_de
 * @copyright Copyright (c) 2010, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

// Success messages
$lang['AdminBilling.!success.invoices_marked_printed'] = "Die ausgewählten Rechnungen wurden als gedruckt markiert."; //en: "'The selected invoices have been marked as printed.'"
$lang['AdminBilling.!success.services_scheduled_cancel'] = "Die Kündigung wurde erfolgreich für den Service erfasst."; //en: "'The selected services were successfully scheduled to be canceled.'"
$lang['AdminBilling.!success.services_scheduled_uncancel'] = "Die ausgewählten Dienste werden nicht mehr wie geplant gekündigt."; //en: "'The selected services are no longer scheduled to be canceled.'"
$lang['AdminBilling.!success.services_pushed'] = "Die ausgewählten Dienste wurden erfolgreich auf den neuen Kunden übertragen."; //en: "'The selected services were successfully pushed to the new client.'"

// Error messages
$lang['AdminBilling.!error.no_invoices_selected'] = "Es wurden keine Rechnungen ausgewählt."; //en: "'No invoices have been selected.'"
$lang['AdminBilling.!error.invalid_passphrase'] = "Das eingegebene Passwort ist ungültig"; //en: "'The passphrase entered is invalid.'"
$lang['AdminBilling.!error.future_cancel_date'] = "Das Kündigungsdatum darf nicht in der Vergangenheit liegen."; //en: "'The scheduled cancellation date must not be in the past.'"


// Index
$lang['AdminBilling.index.open_parethesis'] = "("; //en: "'('"
$lang['AdminBilling.index.closed_parethesis'] = ")"; //en: "')'"
$lang['AdminBilling.index.page_title'] = "Rechnungsübersicht"; //en: "'Billing Overview'"
$lang['AdminBilling.index.manage_widgets'] = "Widgets verwalten"; //en: "'Manage Widgets'"
$lang['AdminBilling.index.customize_dashboard'] = "Übersicht anpassen"; //en: "'Customize Overview'"

$lang['AdminBilling.index.heading_actions'] = "Aktionseinheiten"; //en: "'Action Items'"
$lang['AdminBilling.index.no_actions'] = "Keine ausstehenden Aktionspunkte."; //en: "'No action items pending.'"

$lang['AdminBilling.index.action_printqueue'] = "Ausstehende Einheiten Drucken"; //en: "'Items Pending Print'"
$lang['AdminBilling.index.action_batch'] = "Ausstehende Batch Einheiten"; //en: "'Items Pending Batch'"


// Billing dashboard
$lang['AdminBilling.updatedashboard.text_layout'] = "Wählen Sie unten ein Layout aus um Ihre Rechnungsübersicht anzupassen."; //en: "'Select a layout below to customize your billing overview.'"

// Manage Widgets
$lang['AdminBilling.managewidgets.text_widgets'] = "Ziehen Sie Widgets von rechts nach links, um sie zu Ihrer Rechnungs-Übersicht hinzuzufügen oder von links nach rechts, um sie zu entfernen."; //en: "'Drag widgets from the right to the left to add them to your billing overview, or from left to right to remove them.'"
$lang['AdminBilling.managewidgets.text_version'] = "ver %1\$s"; // %1$s is the version number of the plugin"; //en: "'ver %1$s'; // %1$s is the version number of the plugin"
$lang['AdminBilling.managewidgets.text_author'] = "Autor:"; //en: "'Author: '"


// Invoices
$lang['AdminBilling.invoices.page_title'] = "Rechnungen"; //en: "'Billing Invoices'"
$lang['AdminBilling.invoices.boxtitle_invoices'] = "Rechnungen"; //en: "'Invoices'"

$lang['AdminBilling.invoices.heading_invoice'] = "Rechnung #"; //en: "'Invoice #'"
$lang['AdminBilling.invoices.heading_recurinvoice'] = "Wiederkehrende #"; //en: "'Recurring #'"
$lang['AdminBilling.invoices.heading_client'] = "Kunde #"; //en: "'Client #'"
$lang['AdminBilling.invoices.heading_amount'] = "Betrag"; //en: "'Amount'"
$lang['AdminBilling.invoices.heading_paid'] = "Bezahlt"; //en: "'Paid'"
$lang['AdminBilling.invoices.heading_due'] = "Fällig"; //en: "'Due'"
$lang['AdminBilling.invoices.heading_dateclosed'] = "Abschlussdatum"; //en: "'Date Closed'"
$lang['AdminBilling.invoices.heading_datebilled'] = "Rechnungsdatum"; //en: "'Date Billed'"
$lang['AdminBilling.invoices.heading_datedue'] = "Fälligkeitsdatum"; //en: "'Date Due'"
$lang['AdminBilling.invoices.heading_options'] = "Optionen"; //en: "'Options'"
$lang['AdminBilling.invoices.heading_term'] = "Frist"; //en: "'Term'"
$lang['AdminBilling.invoices.heading_duration'] = "Dauer"; //en: "'Duration'"
$lang['AdminBilling.invoices.heading_count'] = "Anzahl"; //en: "'Count'"

$lang['AdminBilling.invoices.category_open'] = "Offen"; //en: "'Open'"
$lang['AdminBilling.invoices.category_drafts'] = "Entwürfe"; //en: "'Drafts'"
$lang['AdminBilling.invoices.category_closed'] = "Geschlossen"; //en: "'Closed'"
$lang['AdminBilling.invoices.category_voided'] = "Storniert"; //en: "'Voided'"
$lang['AdminBilling.invoices.category_pastdue'] = "Überfällig"; //en: "'Past Due'"
$lang['AdminBilling.invoices.category_pending'] = "Ausstehend"; //en: "'Pending'"
$lang['AdminBilling.invoices.category_recurring'] = "Wiederkehrend"; //en: "'Recurring'"

$lang['AdminBilling.invoices.option_edit'] = "Bearbeiten"; //en: "'Edit'"
$lang['AdminBilling.invoices.option_view'] = "Zeigen"; //en: "'View'"
$lang['AdminBilling.invoices.option_pay'] = "Zahlen"; //en: "'Pay'"

$lang['AdminBilling.invoices.subtotal_w_tax'] = "%1\$s + Steuern"; // %1$s is the sub total amount"; //en: "'%1$s +tax'; // %1$s is the sub total amount"
$lang['AdminBilling.invoices.term_day'] = "%1\$s Tag"; // %1$s is the term (an integer)"; //en: "'%1$s day'; // %1$s is the term (an integer)"
$lang['AdminBilling.invoices.term_week'] = "%1\$s Woche"; // %1$s is the term (an integer)"; //en: "'%1$s week'; // %1$s is the term (an integer)"
$lang['AdminBilling.invoices.term_month'] = "%1\$s Monat"; // %1$s is the term (an integer)"; //en: "'%1$s month'; // %1$s is the term (an integer)"
$lang['AdminBilling.invoices.term_year'] = "%1\$s Jahr"; // %1$s is the term (an integer)"; //en: "'%1$s year'; // %1$s is the term (an integer)"
$lang['AdminBilling.invoices.term_day_plural'] = "%1\$s Tage"; // %1$s is the term (an integer)"; //en: "'%1$s days'; // %1$s is the term (an integer)"
$lang['AdminBilling.invoices.term_week_plural'] = "%1\$s Wochen"; // %1$s is the term (an integer)"; //en: "'%1$s weeks'; // %1$s is the term (an integer)"
$lang['AdminBilling.invoices.term_month_plural'] = "%1\$s Monate"; // %1$s is the term (an integer)"; //en: "'%1$s months'; // %1$s is the term (an integer)"
$lang['AdminBilling.invoices.term_year_plural'] = "%1\$s Jahre"; // %1$s is the term (an integer)"; //en: "'%1$s years'; // %1$s is the term (an integer)"

$lang['AdminBilling.invoices.duration_finite'] = "%1\$s mal"; // %1$s is the number of times the recurring invoice will be created"; //en: "'%1$s times'; // %1$s is the number of times the recurring invoice will be created"
$lang['AdminBilling.invoices.duration_infinite'] = "∞"; //en: "'∞'"

$lang['AdminBilling.invoices.no_results'] = "Es gibt keine Rechnungen mit diesem Status."; //en: "'There are no invoices with this status.'"


// Quotations
$lang['AdminBilling.quotations.page_title'] = 'Billing Quotes';
$lang['AdminBilling.quotations.boxtitle_quotations'] = 'Quotes';

$lang['AdminBilling.quotations.heading_quotation'] = 'Quote #';
$lang['AdminBilling.quotations.heading_client'] = 'Client #';
$lang['AdminBilling.quotations.heading_title'] = 'Title';
$lang['AdminBilling.quotations.heading_staff'] = 'Quoted By';
$lang['AdminBilling.quotations.heading_subtotal'] = 'Subtotal';
$lang['AdminBilling.quotations.heading_total'] = 'Amount';
$lang['AdminBilling.quotations.heading_date_created'] = 'Creation Date';
$lang['AdminBilling.quotations.heading_date_expires'] = 'Expiration Date';
$lang['AdminBilling.quotations.heading_options'] = 'Options';

$lang['AdminBilling.quotations.option_edit'] = 'Edit';
$lang['AdminBilling.quotations.option_view'] = 'View';
$lang['AdminBilling.quotations.option_invoice'] = 'Create Invoice';
$lang['AdminBilling.quotations.option_approve'] = 'Approve';

$lang['AdminBilling.quotations.confirm_approve'] = 'Are you sure you want to approve this quote?';

$lang['AdminBilling.quotations.no_results'] = 'There are no quotes with this status.';


// Quotation Invoices
$lang['AdminBilling.quotationinvoices.headingexpand_invoice'] = 'Invoice #';
$lang['AdminBilling.quotationinvoices.headingexpand_amount'] = 'Amount';
$lang['AdminBilling.quotationinvoices.headingexpand_paid'] = 'Paid';
$lang['AdminBilling.quotationinvoices.headingexpand_date_billed'] = 'Date Billed';
$lang['AdminBilling.quotationinvoices.headingexpand_options'] = 'Options';

$lang['AdminBilling.quotationinvoices.option_view'] = 'View';

$lang['AdminBilling.quotationinvoices.invoices_no_results'] = 'There are no invoices associated to this quote.';


// Services
$lang['AdminBilling.services.page_title'] = "Rechnungs-Leistungen"; //en: "'Billing Services'"
$lang['AdminBilling.services.boxtitle_services'] = "Services"; //en: "'Services'"

$lang['AdminBilling.services.heading_client'] = "Kunde #"; //en: "'Client #'"
$lang['AdminBilling.services.heading_package'] = "Paket"; //en: "'Package'"
$lang['AdminBilling.services.heading_label'] = "Etikett"; //en: "'Label'"
$lang['AdminBilling.services.heading_term'] = "Frist"; //en: "'Term'"
$lang['AdminBilling.services.heading_dateadded'] = "Hinzugefügt am"; //en: "'Date Added'"
$lang['AdminBilling.services.heading_daterenews'] = "Erneuert am"; //en: "'Date Renews'"
$lang['AdminBilling.services.heading_datesuspended'] = "Gesperrt am"; //en: "'Date Suspended'"
$lang['AdminBilling.services.heading_datecanceled'] = "Storniert am"; //en: "'Date Canceled'"
$lang['AdminBilling.services.heading_options'] = "Optionen"; //en: "'Options'"
$lang['AdminBilling.services.option_manage'] = "Verwalten"; //en: "'Manage'"
$lang['AdminBilling.services.option_delete'] = "Löschen"; //en: "'Delete'"
$lang['AdminBilling.services.confirm_delete'] = "Sind Sie sicher, dass Sie diesen Dienst löschen wollen?"; //en: "'Are you sure you want to delete this service?'"

$lang['AdminBilling.services.category_active'] = "Aktiv"; //en: "'Active'"
$lang['AdminBilling.services.category_canceled'] = "Abgebrochen"; //en: "'Canceled'"
$lang['AdminBilling.services.category_suspended'] = "Suspendiert"; //en: "'Suspended'"
$lang['AdminBilling.services.category_pending'] = "Ausstehend"; //en: "'Pending'"
$lang['AdminBilling.services.category_in_review'] = "In Überarbeitung"; //en: "'In Review'"
$lang['AdminBilling.services.category_scheduled_cancellation'] = "Geplant"; //en: "'Scheduled'"

$lang['AdminBilling.services.text_never'] = "Nie"; //en: "'Never'"
$lang['AdminBilling.services.no_results'] = "Es gibt leider keine Leistungen mit diesem Status."; //en: "'There are no services with this status.'"

$lang['AdminBilling.services.recurring_term'] = "%1\$s %2\$s @ %3\$s"; // %1$s is the service term length (number), %2$s is the service period, %3$s is the formatted service renewal price"; //en: "'%1$s %2$s @ %3$s'; // %1$s is the service term length (number), %2$s is the service period, %3$s is the formatted service renewal price"
$lang['AdminBilling.services.action.schedule_cancellation'] = "Stornierung einleiten"; //en: "'Schedule Cancellation'"
$lang['AdminBilling.services.action.field_action_type_term'] = "Ende der Periode"; //en: "'End of Term'"
$lang['AdminBilling.services.action.field_action_type_date'] = "Bestimmtes Datum"; //en: "'Specific Date'"
$lang['AdminBilling.services.action.field_action_type_none'] = "Nicht abbrechen"; //en: "'Do not cancel'"
$lang['AdminBilling.services.action.push_to_client'] = "An Kunde übertragen"; //en: "'Push to Client'"
$lang['AdminBilling.services.action.field_client'] = "Kunde:"; //en: "'Client:'"
$lang['AdminBilling.services.field_actionsubmit'] = "Abschicken"; //en: "'Submit'"


// Service info
$lang['AdminBilling.serviceinfo.no_results'] = "Dieser Service hat keine weiteren Informationen."; //en: "'This service has no details.'"
$lang['AdminBilling.serviceinfo.cancellation_reason'] = "Grund der Stornierung: %1\$s"; // %1$s is the reason this service was canceled"; //en: "'Reason for Cancellation: %1$s'; // %1$s is the reason this service was canceled"


// Transactions
$lang['AdminBilling.transactions.page_title'] = "Billing-Transaktionen"; //en: "'Billing Transactions'"
$lang['AdminBilling.transactions.boxtitle_transactions'] = "Transaktionen"; //en: "'Transactions'"

$lang['AdminBilling.transactions.heading_client'] = "Kunde #"; //en: "'Client #'"
$lang['AdminBilling.transactions.heading_type'] = "Tippen"; //en: "'Type'"
$lang['AdminBilling.transactions.heading_amount'] = "Betrag"; //en: "'Amount'"
$lang['AdminBilling.transactions.heading_credit'] = "Aufgeführt"; //en: "'Credited'"
$lang['AdminBilling.transactions.heading_applied'] = "Angewendet"; //en: "'Applied'"
$lang['AdminBilling.transactions.heading_number'] = "Nummer"; //en: "'Number'"
$lang['AdminBilling.transactions.heading_reference_id'] = "Referenz #"; //en: "'Reference #'"
$lang['AdminBilling.transactions.heading_date'] = "Datum"; //en: "'Date'"
$lang['AdminBilling.transactions.heading_options'] = "Optionen"; //en: "'Options'"

$lang['AdminBilling.transactions.category_approved'] = "Bestätigt"; //en: "'Approved'"
$lang['AdminBilling.transactions.category_declined'] = "Abgelehnt"; //en: "'Declined'"
$lang['AdminBilling.transactions.category_voided'] = "Ungültig"; //en: "'Voided'"
$lang['AdminBilling.transactions.category_error'] = "Fehler"; //en: "'Error'"
$lang['AdminBilling.transactions.category_pending'] = "Ausstehend"; //en: "'Pending'"
$lang['AdminBilling.transactions.category_refunded'] = "Erstattet"; //en: "'Refunded'"
$lang['AdminBilling.transactions.category_returned'] = "Zurückgegeben"; //en: "'Returned'"

$lang['AdminBilling.transactions.option_edit'] = "Bearbeiten"; //en: "'Edit'"

$lang['AdminBilling.transactions.no_results'] = "Es gibt keine Buchungen mit diesem Status."; //en: "'There are no transactions with this status.'"

$lang['AdminBilling.transactions.headingexpand_invoice'] = "Rechnung"; //en: "'Invoice'"
$lang['AdminBilling.transactions.headingexpand_amount'] = "Betrag"; //en: "'Amount'"
$lang['AdminBilling.transactions.headingexpand_appliedon'] = "Angewendet auf"; //en: "'Applied On'"
$lang['AdminBilling.transactions.applied_no_results'] = "Diese Transaktion wurde auf keine Rechnungen angewandt."; //en: "'This transaction has not been applied to any invoices.'"

$lang['AdminBilling.invoices.headingexpand_paymenttype'] = "Zahlungsart"; //en: "'Payment Type'"
$lang['AdminBilling.invoices.headingexpand_amount'] = "Betrag"; //en: "'Amount'"
$lang['AdminBilling.invoices.headingexpand_applied'] = "Zugewiesen"; //en: "'Applied'"
$lang['AdminBilling.invoices.headingexpand_appliedon'] = "Zugewiesen an"; //en: "'Applied On'"
$lang['AdminBilling.invoices.headingexpand_options'] = "Optionen"; //en: "'Options'"
$lang['AdminBilling.invoices.applied_no_results'] = "Diese Rechnung weist keine zugewiesenen Transaktionen auf."; //en: "'This invoice has no transactions applied to it.'"
$lang['AdminBilling.invoices.text_edit'] = "Bearbeiten"; //en: "'Edit'"


// Print Queue
$lang['AdminBilling.printqueue.page_title'] = "Rechnungs-Druck-Warteschlange"; //en: "'Billing Print Queue'"
$lang['AdminBilling.printqueue.category_to_print'] = "Drucken"; //en: "'Print'"
$lang['AdminBilling.printqueue.category_printed'] = "Zuvor Gedruckt"; //en: "'Previously Printed'"

$lang['AdminBilling.printqueue.boxtitle_printqueue'] = "Warteschlange Drucken"; //en: "'Print Queue'"
$lang['AdminBilling.printqueue.no_results_printed'] = "Es gibt keine bereits gedruckten Rechnungen."; //en: "'There are no previously printed invoices.'"
$lang['AdminBilling.printqueue.no_results_to_print'] = "Es gibt keine Rechnungen in der Druck-Warteschlange."; //en: "'There are no invoices queued to be printed.'"

$lang['AdminBilling.printqueue.heading_invoice'] = "Rechnung #"; //en: "'Invoice #'"
$lang['AdminBilling.printqueue.heading_client'] = "Kunde #"; //en: "'Client #'"
$lang['AdminBilling.printqueue.heading_amount'] = "Betrag"; //en: "'Amount'"
$lang['AdminBilling.printqueue.heading_paid'] = "Bezahlt"; //en: "'Paid'"
$lang['AdminBilling.printqueue.heading_due'] = "Fällig"; //en: "'Due'"
$lang['AdminBilling.printqueue.heading_datebilled'] = "Rechnungsdatum"; //en: "'Date Billed'"
$lang['AdminBilling.printqueue.heading_datedue'] = "Fälligkeitsdatum"; //en: "'Date Due'"
$lang['AdminBilling.printqueue.heading_deliverydatesent'] = "Sendedatum"; //en: "'Date Sent'"

$lang['AdminBilling.printqueue.text_printsubmit'] = "Drucken"; //en: "'Print'"
$lang['AdminBilling.printqueue.text_marksubmit'] = "Als Gedruckt markieren"; //en: "'Mark Printed'"


// Batch
$lang['AdminBilling.batch.page_title'] = "Billing Batch"; //en: "'Billing Batch'"
$lang['AdminBilling.batch.boxtitle_batch'] = "Batch"; //en: "'Batch'"
$lang['AdminBilling.batch.no_passphrase'] = "Manuelle Stapelverarbeitung ist nicht aktiviert."; //en: "'Manual batch processing is not enabled.'"

$lang['AdminBilling.batch.text_description'] = "Geben Sie Ihr Passwort ein um den Prozess zu starten der alle Rechnungen abarbeitet, welche für die automatische Abbuchung mit einem zugewiesenen Zahlungskonto vorgesehen sind."; //en: "'Enter your passphrase to manually batch process all invoices scheduled for auto debit with a locally stored payment account.'"
$lang['AdminBilling.batch.field_passphrase'] = "Passphrase"; //en: "'Passphrase'"

$lang['AdminBilling.batch.text_batchsubmit'] = "Batch-Prozess"; //en: "'Batch Process'"
