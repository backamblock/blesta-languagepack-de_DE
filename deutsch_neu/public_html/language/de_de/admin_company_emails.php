<?php
/**
 * Language definitions for the Admin Company Emails settings controller/views
 *
 * @package blesta
 * @subpackage blesta.language.de_de
 * @copyright Copyright (c) 2010, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

// Success messages
$lang['AdminCompanyEmails.!success.edittemplate_updated'] = "Die E-Mail-Template-Einstellungen wurden erfolgreich aktualisiert!"; //en: "'The email template settings were successfully updated!'"
$lang['AdminCompanyEmails.!success.editsignature_updated'] = "Die E-Mail-Signatur wurde erfolgreich aktualisiert!"; //en: "'The email signature has been successfully updated!'"
$lang['AdminCompanyEmails.!success.addsignature_created'] = "Die E-Mail Signatur wurde erfolgreich erstellt!"; //en: "'The email signature has been successfully created!'"
$lang['AdminCompanyEmails.!success.deletesignature_deleted'] = "Die E-Mail Signatur wurde erfolgreich gelöscht!"; //en: "'The email signature has been successfully deleted!'"
$lang['AdminCompanyEmails.!success.mail_updated'] = "Die E-Mail Einstellungen wurden erfolgreich aktualisiert."; //en: "'The Mail settings have been successfully updated!'"
$lang['AdminCompanyEmails.!success.smtp_test'] = 'SMTP connection was successful!';
$lang['AdminCompanyEmails.!success.sendmail_test'] = 'Sendmail connection was successful!';


// Tooltips
$lang['AdminCompanyEmails.!tooltip.from_name'] = 'This is the friendly name of the email address displayed by the recipient\'s mail client.';
$lang['AdminCompanyEmails.!tooltip.from'] = 'This is the email address that this message should appear from.';
$lang['AdminCompanyEmails.!tooltip.subject'] = 'This is the subject of the message. Email subjects may use tags.';
$lang['AdminCompanyEmails.!tooltip.email_signature_id'] = 'The message will be appended with the selected signature.';
$lang['AdminCompanyEmails.!tooltip.include_attachments'] = 'If any file attachments are sent with this email template, unchecking this option will no longer attach them to emails.';
$lang['AdminCompanyEmails.!tooltip.status'] = 'No emails will be sent using this template unless this option is enabled.';

$lang['AdminCompanyEmails.!tooltip.html_email'] = "Aktivieren Sie dieses Kontrollkästchen, um die Zustellung von E-Mails mit HTML-Inhalt zuzulassen. Es wird immer eine Klartext-Version der E-Mails gesendet."; //en: "'Check to allow email with HTML content to be delivered. A plain-text version of emails will always be sent.'"
$lang['AdminCompanyEmails.!tooltip.mail_delivery'] = 'SMTP uses a configured SMTP server for email delivery while Sendmail will attempt to send email through the Sendmail binary on the system. SMTP is generally faster, more secure, and more reliable, so that is the recommended option.';
$lang['AdminCompanyEmails.!tooltip.sendmail_path'] = 'The sendmail command to run including path and flags.';
$lang['AdminCompanyEmails.!tooltip.sendmail_from'] = 'This is only for testing the send mail command and will be used to send a test email to a random disposable email address.';
$lang['AdminCompanyEmails.!tooltip.smtp_host'] = 'Set the host name used to communicate with the SMTP server.';
$lang['AdminCompanyEmails.!tooltip.smtp_port'] = 'Set the port used to communicate with the SMTP server.';
$lang['AdminCompanyEmails.!tooltip.smtp_user'] = "Setze das SMTP Benutzerkonto fest über das die E-Mails versendet werden"; //en: "'Set the SMTP user account to send mail through.'"
$lang['AdminCompanyEmails.!tooltip.smtp_password'] = 'Set the password for the SMTP user account.';
$lang['AdminCompanyEmails.!tooltip.smtp_from'] = 'The from address to use when testing the settings.';
$lang['AdminCompanyEmails.!tooltip.smtp_to'] = 'This is only for testing the send mail command and will be used to send a test email to the specified email address (or a random disposable one).';
$lang['AdminCompanyEmails.!tooltip.submitmail'] = 'Update Settings';


// Common language
$lang['AdminCompanyEmails.!cancel.field.cancel'] = 'Cancel';


// Email templates
$lang['AdminCompanyEmails.templates.page_title'] = "Einstellungen> Firma> E-Mails> E-Mail-Vorlagen"; //en: "'Settings > Company > Emails > Email Templates'"
$lang['AdminCompanyEmails.templates.boxtitle_templates'] = "E-Mail-Vorlagen"; //en: "'Email Templates'"

$lang['AdminCompanyEmails.templates.heading_client'] = "Kunden Emails"; //en: "'Client Emails'"
$lang['AdminCompanyEmails.templates.heading_staff'] = "Mitarbeiter E-Mails."; //en: "'Staff Emails'"
$lang['AdminCompanyEmails.templates.heading_shared'] = "Geteilte E-Mails"; //en: "'Shared Emails'"
$lang['AdminCompanyEmails.templates.heading_plugins'] = "Plugin Emails"; //en: "'Plugin Emails'"

$lang['AdminCompanyEmails.templates.text_name'] = "Name"; //en: "'Name'"
$lang['AdminCompanyEmails.templates.text_plugin'] = "Plugin"; //en: "'Plugin'"
$lang['AdminCompanyEmails.templates.text_description'] = "Beschreibung"; //en: "'Description'"
$lang['AdminCompanyEmails.templates.text_options'] = "Optionen"; //en: "'Options'"

$lang['AdminCompanyEmails.templates.option_edit'] = "Bearbeiten"; //en: "'Edit'"

$lang['AdminCompanyEmails.templates.no_results'] = "Es sind keine Vorlagen dieses Typs vorhanden."; //en: "'There are no templates of this type.'"

$lang['AdminCompanyEmails.templates.field_templatesubmit'] = 'Update';

$lang['AdminCompanyEmails.templates.payment_cc_approved_name'] = "Zahlung akzeptiert (Kreditkarte)"; //en: "'Payment Approved (Credit Card)'"
$lang['AdminCompanyEmails.templates.payment_cc_approved_desc'] = "Mitteilung gesendet nach einer erfolgreichen Kreditkartenzahlung ist genehmigt."; //en: "'Notice sent after a successful credit card payment is approved.'"
$lang['AdminCompanyEmails.templates.payment_cc_declined_name'] = "Zahlung abgelehnt (Kreditkarte)"; //en: "'Payment Declined (Credit Card)'"
$lang['AdminCompanyEmails.templates.payment_cc_declined_desc'] = "Mitteilung, die nach einem Kreditkarten-Zahlungsversuch gesendet wird, wird abgelehnt."; //en: "'Notice sent after a credit card payment attempt is declined.'"
$lang['AdminCompanyEmails.templates.payment_cc_error_name'] = "Fehler bei der Zahlung (Kreditkate)"; //en: "'Payment Error (Credit Card)'"
$lang['AdminCompanyEmails.templates.payment_cc_error_desc'] = "Hinweis, der nach einem Kreditkarten-Zahlungsversuch gesendet wird, führt zu einem Fehler."; //en: "'Notice sent after a credit card payment attempt results in error.'"
$lang['AdminCompanyEmails.templates.payment_ach_approved_name'] = "Zahlung akzeptiert (ACH)"; //en: "'Payment Approved (ACH)'"
$lang['AdminCompanyEmails.templates.payment_ach_approved_desc'] = "Mitteilung, die nach einer erfolgreichen ACH-Zahlung gesendet wurde, wird genehmigt."; //en: "'Notice sent after a successful ACH payment is approved.'"
$lang['AdminCompanyEmails.templates.payment_ach_declined_name'] = "Zahlung abgelehnt (ACH)"; //en: "'Payment Declined (ACH)'"
$lang['AdminCompanyEmails.templates.payment_ach_declined_desc'] = "Benachrichtigung, die nach einem ACH-Zahlungsversuch gesendet wird, wird abgelehnt."; //en: "'Notice sent after a ACH payment attempt is declined.'"
$lang['AdminCompanyEmails.templates.payment_ach_error_name'] = "Zahlungsfehler (ACH)"; //en: "'Payment Error (ACH)'"
$lang['AdminCompanyEmails.templates.payment_ach_error_desc'] = "Hinweis, der nach einem ACH-Zahlungsversuch gesendet wird, führt zu einem Fehler."; //en: "'Notice sent after an ACH payment attempt results in error.'"
$lang['AdminCompanyEmails.templates.payment_manual_approved_name'] = "Zahlungseingang (Manueller Eintrag)"; //en: "'Payment Received (Manual Entry)'"
$lang['AdminCompanyEmails.templates.payment_manual_approved_desc'] = "Benachrichtigung, die nach einer Zahlung gesendet wird, wird manuell aufgezeichnet."; //en: "'Notice sent after a payment is manually recorded.'"
$lang['AdminCompanyEmails.templates.payment_nonmerchant_approved_name'] = "Zahlung erhalten (Kein Händler)"; //en: "'Payment Received (Non-Merchant)'"
$lang['AdminCompanyEmails.templates.payment_nonmerchant_approved_desc'] = "Benachrichtigung gesendet, nachdem eine Zahlung von einem Nicht-Händler-Gateway empfangen wurde."; //en: "'Notice sent after a payment is received from a non-merchant gateway.'"
$lang['AdminCompanyEmails.templates.credit_card_expiration_name'] = "Kreditkartenablauf"; //en: "'Credit Card Expiration'"
$lang['AdminCompanyEmails.templates.credit_card_expiration_desc'] = "Benachrichtigung gesendet, wenn eine aktive Kreditkarte kurz vor dem Ablauf steht."; //en: "'Notice sent when an active credit card is about to expire.'"
$lang['AdminCompanyEmails.templates.invoice_delivery_unpaid_name'] = "Rechnungszustellung (nicht bezahlt)"; //en: "'Invoice Delivery (Unpaid)'"
$lang['AdminCompanyEmails.templates.invoice_delivery_unpaid_desc'] = "Hinweis, der eine PDF-Kopie einer unbezahlten Rechnung enthält."; //en: "'Notice containing a PDF copy of an unpaid invoice.'"
$lang['AdminCompanyEmails.templates.invoice_delivery_paid_name'] = "Rechnungszustellung (bezahlt)"; //en: "'Invoice Delivery (Paid)'"
$lang['AdminCompanyEmails.templates.invoice_delivery_paid_desc'] = "Hinweis, der eine PDF-Kopie einer bezahlten Rechnung enthält."; //en: "'Notice containing a PDF copy of a paid invoice.'"
$lang['AdminCompanyEmails.templates.invoice_notice_first_name'] = "1. Zahlungserinnerung "; //en: "'Invoice Notice (1st)'"
$lang['AdminCompanyEmails.templates.invoice_notice_first_desc'] = "Erster Rechnungsbeleg, entweder eine Mahnung oder eine verspätete Kündigung."; //en: "'First invoice notice, either a reminder to pay or late notice.'"
$lang['AdminCompanyEmails.templates.invoice_notice_second_name'] = "2. Rechnungshinweis"; //en: "'Invoice Notice (2nd)'"
$lang['AdminCompanyEmails.templates.invoice_notice_second_desc'] = "Zweite Rechnungsmitteilung, entweder eine Mahnung oder eine verspätete Benachrichtigung."; //en: "'Second invoice notice, either a reminder to pay or late notice.'"
$lang['AdminCompanyEmails.templates.invoice_notice_third_name'] = "3. Zahlungserinnerung"; //en: "'Invoice Notice (3rd)'"
$lang['AdminCompanyEmails.templates.invoice_notice_third_desc'] = "Dritter Rechnungsbeleg, entweder eine Mahnung oder eine verspätete Kündigung."; //en: "'Third invoice notice, either a reminder to pay or late notice.'"
$lang['AdminCompanyEmails.templates.reset_password_name'] = "Passwort zurücksetzen"; //en: "'Password Reset'"
$lang['AdminCompanyEmails.templates.reset_password_desc'] = "E-Mail zum Zurücksetzen des Passworts mit einem Link zum Ändern des Kontopassworts"; //en: "'Password reset email containing a link to change the account password.'"
$lang['AdminCompanyEmails.templates.forgot_username_name'] = 'Forgot Username';
$lang['AdminCompanyEmails.templates.forgot_username_desc'] = "E-Mail zur Wiederherstellung des Benutzernamens, die den für das Konto gespeicherten Benutzernamen enthält."; //en: "'Username recovery email containing the username on record for the account.'"
$lang['AdminCompanyEmails.templates.service_cancellation_name'] = 'Service Cancellation';
$lang['AdminCompanyEmails.templates.service_cancellation_desc'] = "Mitteilung über die Stornierung eines Dienstes, die bei Stornierung eines Dienstes versandt wird."; //en: "'Service cancellation notice, sent when a service is canceled.'"
$lang['AdminCompanyEmails.templates.service_scheduled_cancellation_name'] = 'Service Scheduled Cancellation';
$lang['AdminCompanyEmails.templates.service_scheduled_cancellation_desc'] = "Benachrichtigung über die geplante Stornierung eines Dienstes, die gesendet wird, wenn ein Dienst zur Stornierung vorgesehen ist."; //en: "'Service scheduled cancellation notice, sent when a service is scheduled for cancellation.'"
$lang['AdminCompanyEmails.templates.service_suspension_name'] = "Service-Suspendierung"; //en: "'Service Suspension'"
$lang['AdminCompanyEmails.templates.service_suspension_desc'] = "Service suspended notice, wird gesendet, wenn ein Dienst automatisch gesperrt wird."; //en: "'Service suspended notice, sent when a service is automatically suspended.'"
$lang['AdminCompanyEmails.templates.service_unsuspension_name'] = "Service Unsuspension"; //en: "'Service Unsuspension'"
$lang['AdminCompanyEmails.templates.service_unsuspension_desc'] = "Entsperr-Notiz, wird gesendet wenn der Dienst automatisch entsperrt wird."; //en: "'Service unsuspended notice, sent when a service is automatically unsuspended.'"
$lang['AdminCompanyEmails.templates.account_welcome_name'] = "Kontoregistrierung"; //en: "'Account Registration'"
$lang['AdminCompanyEmails.templates.account_welcome_desc'] = "Begrüßungshinweis für neue Kontoanmeldungen"; //en: "'Welcome notice sent for new account registrations.'"
$lang['AdminCompanyEmails.templates.report_ar_name'] = "Fälligkeitsbericht für Rechnungen"; //en: "'Aging Invoices Report'"
$lang['AdminCompanyEmails.templates.report_ar_desc'] = "Thirty, Sixety, 90 Tage Ageing Invoice Reports, einmal im Monat."; //en: "'Thirty, Sixety, Ninety day Aging Invoice Reports, delivered once per month.'"
$lang['AdminCompanyEmails.templates.report_tax_liability_name'] = "Steuerhaftungsbericht"; //en: "'Tax Liability Report'"
$lang['AdminCompanyEmails.templates.report_tax_liability_desc'] = "Ein monatlicher Bericht über die Steuerschuld, generiert für das vergangene Monat."; //en: "'A monthly Tax Liability Report, generated for the previous month.'"
$lang['AdminCompanyEmails.templates.report_invoice_creation_name'] = "Rechnungserstellungsbericht"; //en: "'Invoice Creation Report'"
$lang['AdminCompanyEmails.templates.report_invoice_creation_desc'] = "Ein täglicher Bericht der Rechnungen, die für den vorherigen Tag generiert wurden."; //en: "'A daily report of invoices generated for the previous day.'"
$lang['AdminCompanyEmails.templates.service_suspension_error_name'] = "Fehler beim sperren"; //en: "'Suspension Error'"
$lang['AdminCompanyEmails.templates.service_suspension_error_desc'] = "Hinweis wurde verschickt, nachdem ein Service nicht gesperrt werden konnte."; //en: "'Notice sent after a failed attempt to suspend a service.'"
$lang['AdminCompanyEmails.templates.service_unsuspension_error_name'] = "Unsuspensionsfehler"; //en: "'Unsuspension Error'"
$lang['AdminCompanyEmails.templates.service_unsuspension_error_desc'] = "Hinweis wurde verschickt: Es wurde versucht ein Produkt wieder zu aktivieren, was aber nicht funktionierte."; //en: "'Notice sent after a failed attempt to unsuspend a service.'"
$lang['AdminCompanyEmails.templates.service_cancel_error_name'] = "Fehler beim abbrechen"; //en: "'Cancellation Error'"
$lang['AdminCompanyEmails.templates.service_cancel_error_desc'] = "Hinweis nach einem fehlgeschlagenen Versuch, einen Dienst abzubrechen."; //en: "'Notice sent after a failed attempt to cancel a service.'"
$lang['AdminCompanyEmails.templates.service_creation_error_name'] = "Erstellungsfehler"; //en: "'Creation Error'"
$lang['AdminCompanyEmails.templates.service_creation_error_desc'] = "Hinweis nach einem fehlgeschlagenen Versuch, einen Dienst bereitzustellen."; //en: "'Notice sent after a failed attempt to provision a service.'"
$lang['AdminCompanyEmails.templates.service_renewal_error_name'] = 'Renewal Error';
$lang['AdminCompanyEmails.templates.service_renewal_error_desc'] = 'Notice sent after a failed attempt to renew a service.';
$lang['AdminCompanyEmails.templates.auto_debit_pending_name'] = "Auto-Debit Ausstehend"; //en: "'Auto-Debit Pending'"
$lang['AdminCompanyEmails.templates.auto_debit_pending_desc'] = "Mitteilung gesendet, die anzeigt, dass eine automatische Zahlung bald versucht wird."; //en: "'Notice sent that indicates an automatic payment will be attempted soon.'"
$lang['AdminCompanyEmails.templates.staff_reset_password_name'] = "Passwort zurücksetzen"; //en: "'Password Reset'"
$lang['AdminCompanyEmails.templates.staff_reset_password_desc'] = "E-Mail zum Zurücksetzen des Passworts mit einem Link zum Ändern des Kontopassworts"; //en: "'Password reset email containing a link to change the account password.'"
$lang['AdminCompanyEmails.templates.service_creation_name'] = "Service-Erstellung"; //en: "'Service Creation'"
$lang['AdminCompanyEmails.templates.service_creation_desc'] = "Serviceerstellungshinweis, der gesendet wird, wenn ein Service erstellt wurde."; //en: "'Service creation notice, sent when a service has been created.'"
$lang['AdminCompanyEmails.templates.verify_email_name'] = 'Email Verification';
$lang['AdminCompanyEmails.templates.verify_email_desc'] = 'Email verification link, sent when new login is created or a client changes their email address.';
$lang['AdminCompanyEmails.templates.quotation_delivery_name'] = 'Quote Delivery';
$lang['AdminCompanyEmails.templates.quotation_delivery_desc'] = 'Notice containing a PDF copy of a quote.';
$lang['AdminCompanyEmails.templates.staff_quotation_approved_name'] = 'Quote Approval';
$lang['AdminCompanyEmails.templates.staff_quotation_approved_desc'] = 'Notice sent after a quote has been approved by the client.';


// Edit email template
$lang['AdminCompanyEmails.edittemplate.page_title'] = "Einstellungen> Firma> E-Mails> E-Mail-Vorlage bearbeiten"; //en: "'Settings > Company > Emails > Edit Email Template'"
$lang['AdminCompanyEmails.edittemplate.boxtitle_edittemplate'] = "E-Mail-Vorlage bearbeiten %1\$s"; // %1$s is the email template group name"; //en: "'Edit Email Template %1$s'; // %1$s is the email template group name"
$lang['AdminCompanyEmails.edittemplate.text_none'] = "Keiner"; //en: "'None'"

$lang['AdminCompanyEmails.edittemplate.field.status'] = 'Enabled';
$lang['AdminCompanyEmails.edittemplate.field.from_name'] = 'From Name';
$lang['AdminCompanyEmails.edittemplate.field.from'] = "Von E-Mail"; //en: "'From Email'"
$lang['AdminCompanyEmails.edittemplate.field.subject'] = "Hello. And Bye. https://webtest345687534xvhfd3333.xer"; //en: "'Subject'"
$lang['AdminCompanyEmails.edittemplate.field.tags'] = 'Available Tags';
$lang['AdminCompanyEmails.edittemplate.field.text'] = 'Text';
$lang['AdminCompanyEmails.edittemplate.field.html'] = 'HTML';
$lang['AdminCompanyEmails.edittemplate.field.email_signature_id'] = 'Signature';
$lang['AdminCompanyEmails.edittemplate.field.include_attachments'] = 'Include Any Attachments';
$lang['AdminCompanyEmails.edittemplate.field.edittemplatesubmit'] = "Template aktualisieren"; //en: "'Update Template'"


// Email signatures
$lang['AdminCompanyEmails.signatures.page_title'] = "Einstellungen -> Unternehmen -> E-Mails -> Signaturen"; //en: "'Settings > Company > Emails > Signatures'"
$lang['AdminCompanyEmails.signatures.boxtitle_signatures'] = "Signaturen"; //en: "'Signatures'"

$lang['AdminCompanyEmails.signatures.categorylink_newsignature'] = "Neue Signatur"; //en: "'New Signature'"
$lang['AdminCompanyEmails.signatures.no_results'] = "Es gibt keine E-Mail-Signaturen."; //en: "'There are no email signatures.'"

$lang['AdminCompanyEmails.signatures.text_name'] = "Name"; //en: "'Name'"
$lang['AdminCompanyEmails.signatures.text_description'] = "Beschreibung"; //en: "'Description'"
$lang['AdminCompanyEmails.signatures.text_options'] = "Optionen"; //en: "'Options'"

$lang['AdminCompanyEmails.signatures.option_edit'] = "Bearbeiten"; //en: "'Edit'"
$lang['AdminCompanyEmails.signatures.option_delete'] = "Löschen"; //en: "'Delete'"

$lang['AdminCompanyEmails.signatures.confirm_delete'] = "Möchten Sie diese E-Mail-Signatur wirklich löschen?"; //en: "'Are you sure you want to delete this email signature?'"


// Add email signature
$lang['AdminCompanyEmails.addsignature.page_title'] = "Einstellungen> Firma> E-Mails> Signatur hinzufügen"; //en: "'Settings > Company > Emails > Add Signature'"
$lang['AdminCompanyEmails.addsignature.boxtitle_addsignature'] = "Signatur hinzufügen"; //en: "'Add Signature'"

$lang['AdminCompanyEmails.addsignature.field_name'] = "Name"; //en: "'Name'"
$lang['AdminCompanyEmails.addsignature.field_text'] = "Text"; //en: "'Text'"
$lang['AdminCompanyEmails.addsignature.field_html'] = "HTML"; //en: "'HTML'"
$lang['AdminCompanyEmails.addsignature.field_addsignaturesubmit'] = "Signatur erstellen"; //en: "'Create Signature'"

$lang['AdminCompanyEmails.addsignature.text_signatures'] = "Signaturen werden für E-Mail Templates verwendet, was es einfacher macht sie in Massenmails zu ändern."; //en: "'Signatures are used for email templates, making it easier to modify email signatures in bulk'"


// Edit email signature
$lang['AdminCompanyEmails.editsignature.page_title'] = "Einstellungen> Firma> E-Mails> Signatur bearbeiten"; //en: "'Settings > Company > Emails > Edit Signature'"
$lang['AdminCompanyEmails.editsignature.boxtitle_editsignature'] = "Signatur bearbeiten"; //en: "'Edit Signature'"

$lang['AdminCompanyEmails.editsignature.field_name'] = "Name"; //en: "'Name'"
$lang['AdminCompanyEmails.editsignature.field_text'] = "Text"; //en: "'Text'"
$lang['AdminCompanyEmails.editsignature.field_html'] = "HTML"; //en: "'HTML'"
$lang['AdminCompanyEmails.editsignature.field_editsignaturesubmit'] = "Signatur aktualisieren"; //en: "'Update Signature'"


// Mail
$lang['AdminCompanyEmails.mail.page_title'] = "Einstellungen -> Unternehmen -> E-Mails -> Mail Einstellungen"; //en: "'Settings > Company > Emails > Mail Settings'"
$lang['AdminCompanyEmails.mail.boxtitle_mail'] = "E-Mail-Einstellungen"; //en: "'Mail Settings'"

$lang['AdminCompanyEmails.mail.text_section'] = "In diesem Abschnitt wird festgelegt, wie die E-Mails von Blesta zugestellt werden. Sendmail ist die einfachste Zustellmethode, aber SMTP ist im Allgemeinen schneller und zuverlässiger."; //en: "'This section controls how email is delivered from Blesta. Sendmail is the simplest delivery method, but SMTP is generally faster and more reliable.'"

$lang['AdminCompanyEmails.mail.field.sendmail_path'] = 'Sendmail Path';
$lang['AdminCompanyEmails.mail.field.sendmail_from'] = 'Sendmail Test From Address';
$lang['AdminCompanyEmails.mail.field.html_email'] = 'Enable HTML';
$lang['AdminCompanyEmails.mail.field.mail_delivery'] = "Methode der Zustellung"; //en: "'Delivery Method'"
$lang['AdminCompanyEmails.mail.field.test'] = 'Test These Settings';
$lang['AdminCompanyEmails.mail.field.smtp_host'] = "SMTP Host"; //en: "'SMTP Host'"
$lang['AdminCompanyEmails.mail.field.smtp_port'] = 'SMTP Port';
$lang['AdminCompanyEmails.mail.field.smtp_user'] = 'SMTP User';
$lang['AdminCompanyEmails.mail.field.smtp_password'] = 'SMTP Password';
$lang['AdminCompanyEmails.mail.field.smtp_from'] = 'Test From Address';
$lang['AdminCompanyEmails.mail.field.smtp_to'] = 'Test To Address';
$lang['AdminCompanyEmails.mail.field.submitmail'] = "Einstellungen ändern"; //en: "'Update Settings'"

$lang['AdminCompanyEmails.mail.text_optional'] = 'Optional';


// Text
$lang['AdminCompanyEmails.getRequiredMethods.sendmail'] = "Sendmail"; //en: "'Sendmail'"
$lang['AdminCompanyEmails.getRequiredMethods.smtp'] = "SMTP"; //en: "'SMTP'"
$lang['AdminCompanyEmails.getsmtpsecurityoptions.none'] = "Keiner"; //en: "'None'"
$lang['AdminCompanyEmails.getsmtpsecurityoptions.ssl'] = "SSL"; //en: "'SSL'"
$lang['AdminCompanyEmails.getsmtpsecurityoptions.tls'] = "TLS"; //en: "'TLS'"
$lang['AdminCompanyEmails.gettemplateactions.update_from_email'] = 'Update "From Email"';
$lang['AdminCompanyEmails.gettemplateactions.update_from_name'] = 'Update "From Name"';
