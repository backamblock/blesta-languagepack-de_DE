<?php

/**
 * Language definitions for the Admin Clients controller/views
 *
 * @package blesta
 * @subpackage blesta.language.de_de
 * @copyright Copyright (c) 2010, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */
// Success messages
$lang['AdminClients.!success.note_added'] = "Die Notiz wurde erfolgreich erstellt."; //en: "'The note has been successfully created.'"
$lang['AdminClients.!success.note_updated'] = "Die Notiz wurde erfolgreich aktualisiert."; //en: "'The note has been successfully updated.'"
$lang['AdminClients.!success.note_deleted'] = "Die Notiz wurde erfolgreich gelöscht."; //en: "'The note has been successfully deleted.'"

$lang['AdminClients.!success.client_added'] = "Der Kunde wurde erfolgreich erstellt."; //en: "'The client has been successfully created.'"
$lang['AdminClients.!success.client_updated'] = "Der Kunde wurde erfolgreich aktualisiert."; //en: "'The client has been successfully updated.'"
$lang['AdminClients.!success.client_deleted'] = "Der Kunde wurde erfolgreich gelöscht"; //en: "'The client has been successfully deleted.'"

$lang['AdminClients.!success.contact_added'] = "Der Kontakt wurde erfolgreich erstellt."; //en: "'The contact has been successfully created.'"
$lang['AdminClients.!success.contact_updated'] = "Der Kontakt wurde erfolgreich gespeichert."; //en: "'The contact has been successfully updated.'"

$lang['AdminClients.!success.invoice_added'] = "Rechung #%1\$s wurde erfolgreich erstellt."; // %1$s is the invoice number"; //en: "'Invoice #%1$s was successfully created.'; // %1$s is the invoice number"
$lang['AdminClients.!success.invoice_updated'] = "Rechnung #%1\$s wurde erfolgreich aktualisiert."; // %1$s is the invoice number"; //en: "'Invoice #%1$s was successfully updated.'; // %1$s is the invoice number"
$lang['AdminClients.!success.draftinvoice_added'] = "Rechnungsvorlage #%1\$s wurde erfolgreich angelegt."; // %1$s is the invoice number"; //en: "'Draft Invoice #%1$s was successfully created.'; // %1$s is the invoice number"
$lang['AdminClients.!success.draftinvoice_updated'] = "Rechnungsentwurf #%1\$s wurde erfolgreich geändert."; // %1$s is the draft invoice number"; //en: "'Draft Invoice #%1$s was successfully updated.'; // %1$s is the draft invoice number"
$lang['AdminClients.!success.draftinvoice_created'] = "Rechnungsentwurf #%1\$s wurde erfolgreich in eine Rechnung #%2\$s konvertiert."; // %1$s is the draft invoice number, %2$s is the invoice number"; //en: "'Draft Invoice #%1$s was successfully created as Invoice #%2$s.'; // %1$s is the draft invoice number, %2$s is the invoice number"

$lang['AdminClients.!success.quotation_added'] = 'Quote #%1$s was successfully created.'; // %1$s is the quotation number
$lang['AdminClients.!success.quotation_updated'] = 'Quote #%1$s was successfully updated.'; // %1$s is the quotation number
$lang['AdminClients.!success.draftquotation_added'] = 'Draft Quote #%1$s was successfully created.'; // %1$s is the quotation number
$lang['AdminClients.!success.draftquotation_updated'] = 'Draft Quote #%1$s was successfully updated.'; // %1$s is the draft quotation number

$lang['AdminClients.!success.approvequotation_approved'] = 'Quote #%1$s was successfully approved.'; // %1$s is the quotation number

$lang['AdminClients.!success.invoicequotation_invoiced'] = 'Quote #%1$s was successfully invoiced as Invoice #%2$s.'; // %1$s is the quotation number, %2$s is the invoice number

$lang['AdminClients.!success.addccaccount_added'] = "Das Kreditkarten Konto wurde erfolgreich angelegt."; //en: "'The credit card account has been created successfully.'"
$lang['AdminClients.!success.editccaccount_updated'] = "Das Kreditkarten Konto wurde erfolgreich aktualisiert."; //en: "'The credit card account has been edited successfully.'"

$lang['AdminClients.!success.addachaccount_added'] = "Das ACH Konto wurde erfolgreich angelegt."; //en: "'The ACH account has been created successfully.'"
$lang['AdminClients.!success.editachaccount_updated'] = "Das ACH Konto wurde erfolgreich bearbeitet."; //en: "'The ACH account has been edited successfully.'"

$lang['AdminClients.!success.deleteccaccount_deleted'] = "Das Zahlungskonto wurde erfolgreich gelöscht."; //en: "'The payment account has been successfully removed.'"
$lang['AdminClients.!success.deleteachaccount_deleted'] = "Das Zahlungskonto wurde erfolgreich gelöscht."; //en: "'The payment account has been successfully removed.'"

$lang['AdminClients.!success.verifyachaccount_verified'] = "Das Zahlungskonto wurde erfolgreich verifiziert."; //en: "'The payment account has been successfully verified.'"

$lang['AdminClients.!success.accounts_updated'] = "Das Zahlungskonto für die automatische Abbuchung wurde aktualisiert."; //en: "'The payment account to use for auto-debiting has been updated.'"
$lang['AdminClients.!success.accounts_deleted'] = "Die Zahlungshinweise für das automatische Abbuchen wurde entfernt."; //en: "'The payment account to use for auto-debiting has been removed.'"
$lang['AdminClients.!success.accounttypes_updated'] = "Die Einstellungen für die akzeptierte Zahlungsart wurden erfolgreich aktualisiert!"; //en: "'The Accepted Payment Type settings were successfully updated!'"

$lang['AdminClients.!success.recurinvoice_deleted'] = "Die wiederkehrende Rechnungen wurde erfolgreich gelöscht."; //en: "'The recurring invoice has been successfully removed.'"
$lang['AdminClients.!success.recurinvoice_updated'] = "Die wiederkehrende Rechnung wurde erfolgreich geändert."; //en: "'The recurring invoice has been successfully updated.'"

$lang['AdminClients.!success.edittransaction_updated'] = "Die Transaktion wurde erfolgreich aktualisiert."; //en: "'The transaction was successfully updated.'"

$lang['AdminClients.!success.transaction_unapplied'] = "Die Transaktion wurde erfolgreich aus der Rechnung entfernt."; //en: "'The transaction was successfully unapplied from the invoice.'"

$lang['AdminClients.!success.invoices_queued'] = "Die ausgewählten Rechnungen wurden erfolgreich in die Versandschleife übernommen."; //en: "'The selected invoices were successfully queued for delivery.'"
$lang['AdminClients.!success.invoices_delivered'] = "Die markierten Rechnungen wurden erfolgreich verschickt."; //en: "'The selected invoices were successfully delivered.'"
$lang['AdminClients.!success.invoices_voided'] = "Die folgenden Rechnungen wurden erfolgreich storniert: %1\$s."; // %1$s is a CSV list of all invoice numbers voided"; //en: "'The following invoices were successfully voided: %1$s.'; // %1$s is a CSV list of all invoice numbers voided"

$lang['AdminClients.!success.quotations_delivered'] = 'The selected quotes were successfully delivered.';

$lang['AdminClients.!success.quotations_status_updated'] = 'The following quotes were successfully updated: %1$s.';

$lang['AdminClients.!success.makepayment_processed'] = "Die Zahlung in Höhe von %1\$s mit der Transaktionsnummer %2\$s wurde erfolgreich bearbeitet."; // %1$s is the payment amount, %2$s is the transaction number"; //en: "'The payment was successfully processed for %1$s. Transaction Number: %2$s'; // %1$s is the payment amount, %2$s is the transaction number"
$lang['AdminClients.!success.recordpayment_processed'] = "Die Zahlung wurde erfolgreich für %1\$s aufgezeichnet."; // %1$s is the payment amount"; //en: "'The payment was successfully recorded for %1$s.'; // %1$s is the payment amount"
$lang['AdminClients.!success.recordpayment_credits'] = "Die Gutschrift wurde erfolgreich verbucht."; //en: "'The credits were successfully recorded.'"

$lang['AdminClients.!success.deletedraftinvoice_deleted'] = "Der Rechnungsentwurf wurde erfolgreich gelöscht!"; //en: "'The draft invoice was successfully deleted!'"

$lang['AdminClients.!success.email_sent'] = "Die E-Mail wurde erfolgreich versendet."; //en: "'The email was successfully sent.'"

$lang['AdminClients.!success.contact_deleted'] = "Der Kunde %1\$s %2\$s wurde erfolgreich gelöscht!"; // %1$s is the contact's first name, %2$s is the contact's last name"; //en: "'The contact %1$s %2$s was successfully deleted!'; // %1$s is the contact's first name, %2$s is the contact's last name"

$lang['AdminClients.!success.service_added'] = "Der Dienst wurde erfolgreich hinzugefügt."; //en: "'The service was successfully added.'"
$lang['AdminClients.!success.service_edited'] = "The service was successfully updated."; //en: "'The service was successfully updated.'"
$lang['AdminClients.!success.service_deleted'] = "Der Dienst wurde erfolgreich gelöscht."; //en: "'The service was successfully deleted.'"

$lang['AdminClients.!success.packages_restricted'] = "Eingeschränkter Paket Zugang wurde für diesen Client aktualisiert."; //en: "'Restricted package access has been updated for this client.'"

$lang['AdminClients.!success.service_tab'] = "Die Daten wurden erfolgreich aktualisiert."; //en: "'The data was successfully updated.'"
$lang['AdminClients.!success.services_scheduled_cancel'] = "Die ausgewählten Dienste wurden erfolgreich zur Kündigung vorgemerkt."; //en: "'The selected services were successfully scheduled to be canceled.'"
$lang['AdminClients.!success.services_scheduled_uncancel'] = "Die ausgewählten Dienste werden nicht mehr storniert."; //en: "'The selected services are no longer scheduled to be canceled.'"
$lang['AdminClients.!success.services_renewed'] = "Die ausgewählten Dienste wurden erfolgreich verlängert."; //en: "'The selected services were successfully renewed.'"
$lang['AdminClients.!success.services_pushed'] = "Die ausgewählten Dienste wurden erfolgreich auf den neuen Clienten übertragen."; //en: "'The selected services were successfully pushed to the new client.'"

$lang['AdminClients.!success.suspend_date_updated'] = "Das Auto Suspension-Datum wurde erfolgreich aktualisiert."; //en: "'The Auto Suspension date has been successfully updated.'"

$lang['AdminClients.!success.passwordreset.sent'] = "Die E-Mail zum Zurücksetzen des Passworts wurde erfolgreich gesendet."; //en: "'The password reset email was successfully sent.'"


// Error messages
$lang['AdminClients.!error.invoices_emailinvalid'] = "Die E-Mail-Adresse ist ungültig."; //en: "'The email address is invalid.'"
$lang['AdminClients.!error.password'] = "Das Passwort ist ungültig."; //en: "'The password is invalid.'"
$lang['AdminClients.!error.pay_with.required'] = "Sie müssen eine Zahlungsmethode auswählen."; //en: "'You must select a payment method.'"
$lang['AdminClients.!error.invoice_credits.required'] = "Bitte wählen Sie eine Rechnung aus, auf die das Guthaben gebucht werden soll."; //en: "'Please select an invoice to which credits may be applied.'"
$lang['AdminClients.!error.quotation_invalid_status'] = 'The selected status is invalid.';
$lang['AdminClients.!error.future_cancel_date'] = "Der geplante Kündigungsdatum darf nicht in der Vergangenheit sein."; //en: "'The scheduled cancellation date must not be in the past.'"
$lang['AdminClients.!error.invoices_not_voided'] = "Die folgenden Rechnungen konnten nicht storniert werden, da sie Teilzahlungen enthalten: %1\$s."; // %1$s is a CSV list of all invoices numbers that could not be voided"; //en: "'The following invoices could not be voided because they contain partial payments: %1$s.'; // %1$s is a CSV list of all invoices numbers that could not be voided"
$lang['AdminClients.!error.passwordreset.failed'] = "Die E-Mail zum Zurücksetzen des Passworts konnte nicht gesendet werden."; //en: "'The password reset email failed to be sent.'"
$lang['AdminClients.!error.invoices_renew_service'] = "Die Dienstleistung kann erst verlängert werden, wenn alle Rechnungen, die diese Dienstleistung enthalten, bezahlt wurden."; //en: "'The service cannot be renewed until all invoices containing this service have been paid.'"


// Notice messages
$lang['AdminClients.!notice.invoice_tax_rules_differ'] = "WARNUNG: Diese Rechnung enthält Steuervorschriften, die nicht mehr aktuell sind. Das Hinzufügen oder Entfernen einer Position oder die Aktualisierung der Menge, Stückkosten oder des Steuerstatus hat zur Folge, dass die aktuellen Steuervorschriften zu dieser Rechnung angewendet werden."; //en: "'WARNING: This invoice contains tax rules that are no longer in effect. Adding or removing a line item or updating the quantity, unit cost, or tax status will apply the most recent tax rules to this invoice.'"
$lang['AdminClients.!notice.payment_type'] = "WARNUNG: %1\$s Zahlungen sind derzeit nicht aktiviert. Um sie zu aktivieren, aktualisieren Sie die <a href=\"%2\$s\">%3\$s</a>."; // %1$s is the account type (CC, ACH) language, %2$s is the URI to the accepted type settings, %3$s is the language to use as text for the link"; //en: "'WARNING: %1$s payments are currently not enabled. To enable them, update the <a href="%2$s">%3$s</a>.'; // %1$s is the account type (CC, ACH) language, %2$s is the URI to the accepted type settings, %3$s is the language to use as text for the link"
$lang['AdminClients.!notice.transactions_already_applied'] = "WARNUNG: Das Ändern dieser Buchung führt zum Entfernen der Buchung von allen zugewiesenen Rechnungen."; //en: "WARNING: Modifying this transaction's status will remove this transaction from all currently applied invoices."
$lang['AdminClients.!notice.service_in_review'] = "Der Status dieses Dienstes ist %1\$s und muss auf %2\$s geändert werden, bevor er aktiviert werden kann. Dies kann über das Bestellungen-Widget auf der Abrechnungs-Übersichtsseite mit der Bestell-Plugin, oder durch einen Drittanbieter-Plug-In welches für die Verwaltung von Bestellungen verantwortlich ist erledigt werden."; // %1$s is the language for the 'In Review' status, %2$s is the language for the 'Pending' status"; //en: "'The status of this service is currently %1$s and must be changed to %2$s before it can be activated. This can be done through the Orders widget on the Billing Overview page using the Order plugin, or by a third-party plugin responsible for managing orders.'; // %1$s is the language for the 'In Review' status, %2$s is the language for the 'Pending' status"
$lang['AdminClients.!notice.queued_service_change'] = "Dieser Dienst wird gerade noch geändert. Upgrades oder Downgrades einer der Werte bewirkt den Abbruch der aktuellen Änderung."; //en: "'This service has pending changes. Updating this service to upgrade or downgrade any of its values will cause the current pending changes to be canceled.'"
$lang['AdminClients.!notice.delete_client'] = "Dadurch wird der Kunde mit allen zugehörigen Daten (z. B. Kontakte, Dienstleistungen, Rechnungen, Transaktionen, Zahlungskonten usw.) unwiderruflich gelöscht. DIESE AKTION KANN NICHT RÜCKGÄNGIG GEMACHT WERDEN."; //en: "'This will permanently delete the client and all associated records (e.g. contacts, services, invoices, transactions, payment accounts, etc.). THIS IS A PERMANENT AND IRREVOCABLE ACTION.'"
$lang['AdminClients.!notice.passwordreset.client_inactive'] = "Die E-Mail zum Zurücksetzen des Passworts kann nur für aktive Clients gesendet werden."; //en: "'The password reset email may only be sent for clients that are active.'"
$lang['AdminClients.!notice.client_limit'] = "Dieser Kunde hat die maximale Anzahl von Diensten für dieses Paket erreicht."; //en: "'This client has reached the maximum number of services for this package.'"
$lang['AdminClients.!notice.force_email_usernames'] = "Ihr Benutzername ist mit Ihrer E-Mail-Adresse identisch."; //en: "'Your username will be the same as your email address.'"
$lang['AdminClients.!notice.ach_verification'] = "Sie müssen dieses Konto verifizieren, bevor Sie es für eine Zahlung verwenden können."; //en: "'You will need to verify this account before you can use it to make a payment.'"
$lang['AdminClients.!notice.ach_edit'] = "Nachdem Sie dieses Konto bearbeitet haben, müssen Sie es verifizieren, bevor Sie es für eine Zahlung verwenden können."; //en: "'After editing this account, you will need to verify it before you can use it to make a payment.'"
$lang['AdminClients.!notice.void_invoice_pending_services'] = 'You are attempting to void one or more invoices, that has pending services associated with it. If the invoice is voided, nothing will be due for the pending service, and it will be activated.';


// Tooltips
$lang['AdminClients.!tooltip.module_row_id'] = "Änderungen dieser Option aktualisieren die Zeile des Modules für diesen Service nur in Blesta. Das beeinflusst wie der Service sich mit dem Modul in Zukunft bei Verlängerungen verhält."; //en: "'Changing this option will update the module row used for this service in Blesta only. This may affect how the service renews with the module in the future.'"
$lang['AdminClients.!tooltip.notify_cancel'] = "Die Kündigungs-E-Mail wird nur versendet, wenn die Kündigung sofort erfolgt. Andernfalls wird die geplante Stornierungs-E-Mail sofort gesendet, und die Stornierungs-E-Mail wird bei der Stornierung gesendet, abhängig von der Unternehmens- oder Kundengruppeneinstellung, die dieses Verhalten steuert."; //en: "'The cancellation email will only be sent if the cancellation occurs immediately. Otherwise, the scheduled cancellation email will be sent immediately, and the cancellation email will be sent at cancellation dependent upon the company or client group setting controlling this behavior.'"
$lang['AdminClients.!tooltip.reset_contact_id'] = "Die E-Mail zum Zurücksetzen des Passworts wird an den ausgewählten Kontakt gesendet und enthält einen Link, über den er sein Kontopasswort ändern kann."; //en: "'The password reset email will be sent to the selected contact containing a link for them to change their account password.'"
$lang['AdminClients.!tooltip.taxexempt'] = "Dieses Feld wird automatisch vom Steuersystem verwaltet."; //en: "'This field is automatically managed by the tax system.'"
$lang['AdminClients.!tooltip.client_taxempt'] = "Dieser Kunde ist als steuerbefreit festgelegt."; //en: "'This client is set as tax exempt.'"


// Index
$lang['AdminClients.index.page_title'] = "Kunden"; //en: "'Clients'"
$lang['AdminClients.index.boxtitle_browseclients'] = "Kunden"; //en: "'Clients'"

$lang['AdminClients.index.heading_client'] = "Kunden ID"; //en: "'Client ID'"
$lang['AdminClients.index.heading_group'] = "Gruppe"; //en: "'Group'"
$lang['AdminClients.index.heading_name'] = "Name"; //en: "'Name'"
$lang['AdminClients.index.heading_company'] = "Unternehmen"; //en: "'Company'"
$lang['AdminClients.index.heading_email'] = "E-Mail"; //en: "'Email'"

$lang['AdminClients.index.category_active'] = "Aktiv"; //en: "'Active'"
$lang['AdminClients.index.category_inactive'] = "Inaktiv"; //en: "'Inactive'"
$lang['AdminClients.index.category_fraud'] = "Betrug"; //en: "'Fraud'"

$lang['AdminClients.index.categorylink_clientsadd'] = "Kunde hinzufügen"; //en: "'Add Client'"

$lang['AdminClients.index.no_results'] = "Es gibt keine Kunden mit diesem Status."; //en: "'There are no clients with this status.'"


// Add
$lang['AdminClients.add.page_title'] = "Kunden erzeugen neue Kunden"; //en: "'Clients Create New Client'"
$lang['AdminClients.add.boxtitle_newclient'] = "Neuer Kunde"; //en: "'New Client'"

$lang['AdminClients.add.heading_contact'] = "Kontaktinformationen"; //en: "'Contact Information'"
$lang['AdminClients.add.heading_billing'] = "Zahlungsinformation"; //en: "'Billing Information'"
$lang['AdminClients.add.heading_authentication'] = "Authentifizierung"; //en: "'Authentication'"
$lang['AdminClients.add.heading_settings'] = "Weitere Einstellungen"; //en: "'Additional Settings'"

$lang['AdminClients.add.field_firstname'] = "Vorname"; //en: "'First Name'"
$lang['AdminClients.add.field_lastname'] = "Nachname"; //en: "'Last Name'"
$lang['AdminClients.add.field_company'] = "Unternehmen/Organisation"; //en: "'Company/Org.'"
$lang['AdminClients.add.field_title'] = "Titel"; //en: "'Title'"
$lang['AdminClients.add.field_address1'] = "Adresse 1"; //en: "'Address 1'"
$lang['AdminClients.add.field_address2'] = "Adresse 2"; //en: "'Address 2'"
$lang['AdminClients.add.field_city'] = "Stadt"; //en: "'City'"
$lang['AdminClients.add.field_state'] = "Bundesland / Kanton"; //en: "'State/Province'"
$lang['AdminClients.add.field_zip'] = "PLZ"; //en: "'Zip/Postal Code'"
$lang['AdminClients.add.field_country'] = "Land"; //en: "'Country'"
$lang['AdminClients.add.field_email'] = "E-Mail"; //en: "'Email'"

$lang['AdminClients.add.field_username_type_email'] = "Benutze E-Mail als Usernamen"; //en: "'Use email as username'"
$lang['AdminClients.add.field_username_type_username'] = "Geben sie einen Benutzernamen ein"; //en: "'Specify a username'"
$lang['AdminClients.add.field_username'] = "Benutzername"; //en: "'Username'"
$lang['AdminClients.add.field_newpassword'] = "Passwort"; //en: "'Password'"
$lang['AdminClients.add.text_generate_password'] = "Passwort generieren"; //en: "'Generate Password'"

$lang['AdminClients.add.field_taxexempt'] = "Steuerbefreiung"; //en: "'Tax Exempt'"
$lang['AdminClients.add.field_taxid'] = "UST ID/Steuernummer"; //en: "'Tax ID/VATIN'"
$lang['AdminClients.add.field_preferredcurrency'] = "Bevorzugte Währung"; //en: "'Preferred Currency'"

$lang['AdminClients.add.field_language'] = "Sprache"; //en: "'Language'"
$lang['AdminClients.add.field_clientgroup'] = "Kundengruppe"; //en: "'Client Group'"
$lang['AdminClients.add.field_send_registration_email'] = "Sende Account-Registrierungs E-Mail"; //en: "'Send Account Registration Email'"
$lang['AdminClients.add.field_send_registration_message'] = "Send Account Registration Message"; //en: "'Send Account Registration Message'"
$lang['AdminClients.add.field_receive_email_marketing'] = "E-Mail-Marketing-E-Mails"; //en: "'Opt-in to marketing emails'"

$lang['AdminClients.add.field_clientsubmit'] = "Kunde erstellen"; //en: "'Create Client'"


// Accounts
$lang['AdminClients.accounts.page_title'] = "Zahlungskonten von Kunde #%1\$s"; // %1$s is the client ID number"; //en: "'Client #%1$s Payment Accounts'; // %1$s is the client ID number"
$lang['AdminClients.accounts.boxtitle_accounts'] = "Zahlungskonten"; //en: "'Payment Accounts'"

$lang['AdminClients.accounts.categorylink_ach'] = "ACH Konto hinzufügen"; //en: "'Add ACH Account'"
$lang['AdminClients.accounts.categorylink_cc'] = "CC-Konto hinzufügen"; //en: "'Add CC Account'"

$lang['AdminClients.accounts.text_name'] = "Name"; //en: "'Name'"
$lang['AdminClients.accounts.text_type'] = "Typ"; //en: "'Type'"
$lang['AdminClients.accounts.text_last4'] = "Letzte 4"; //en: "'Last 4'"
$lang['AdminClients.accounts.text_options'] = "Optionen"; //en: "'Options'"

$lang['AdminClients.accounts.confirm_delete'] = "Sicher das Sie diesen Account für die Bezahlung löschen möchten?"; //en: "'Really delete this payment account?'"

$lang['AdminClients.accounts.option_verify'] = "Verifizieren"; //en: "'Verify'"
$lang['AdminClients.accounts.option_edit'] = "Bearbeiten"; //en: "'Edit'"
$lang['AdminClients.accounts.option_delete'] = "Löschen"; //en: "'Delete'"

$lang['AdminClients.accounts.type_cc'] = "%1\$s - %2\$s, läuft ab %3\$s"; // %1$s is the account type (Credit Card) and %2$s is the type of account (MasterCard, Visa, etc.), %3$s is the formatted card expiration date"; //en: "'%1$s - %2$s, expires %3$s'; // %1$s is the account type (Credit Card) and %2$s is the type of account (MasterCard, Visa, etc.), %3$s is the formatted card expiration date"
$lang['AdminClients.accounts.type_ach'] = "%1\$s - %2\$s"; // %1$s is the account type (ACH) and %2$s is the type of account (Checking or Savings)"; //en: "'%1$s - %2$s'; // %1$s is the account type (ACH) and %2$s is the type of account (Checking or Savings)"

$lang['AdminClients.accounts.field_accountsubmit'] = "Für automatische Belastung nutzen"; //en: "'Use for Auto Debit'"

$lang['AdminClients.accounts.no_results'] = "Keine Kreditkarten oder Bankkonten vorhanden."; //en: "'There are no ACH or CC accounts.'"


// Add Credit Card Account
$lang['AdminClients.addccaccount.page_title'] = "Kreditkarte for Kunde #%1\$s hinzufügen"; // %1$s is the client ID number"; //en: "'Client #%1$s Add Credit Card Account'; // %1$s is the client ID number"
$lang['AdminClients.addccaccount.boxtitle_addccaccount'] = "Kreditkarte Hinzufügen"; //en: "'Add Credit Card Account'"
$lang['AdminClients.addccaccount.field_accountsubmit'] = "Account erstellen"; //en: "'Create Account'"
$lang['AdminClients.addccaccount.text_none'] = "Kein Wert"; //en: "'None'"

$lang['AdminClients.addCcAccount.text_cc'] = "Kreditkarte"; //en: "'Credit Card'"


// Add ACH account
$lang['AdminClients.addachaccount.page_title'] = "Kunde #%1\$s  ACH Konto hinzufügen"; // %1$s is the client ID number"; //en: "'Client #%1$s Add ACH Account'; // %1$s is the client ID number"
$lang['AdminClients.addachaccount.boxtitle_addachaccount'] = "Bankkonto hinzufügen"; //en: "'Add ACH Account'"
$lang['AdminClients.addachaccount.field_accountsubmit'] = "Account erstellen"; //en: "'Create Account'"

$lang['AdminClients.addAchAccount.text_ach'] = "Lastschrift"; //en: "'ACH'"


// Edit CC account
$lang['AdminClients.editccaccount.page_title'] = "Kreditkarte von Kunde #%1\$s bearbeiten"; // %1$s is the client ID number"; //en: "'Client #%1$s Edit Credit Card Account'; // %1$s is the client ID number"
$lang['AdminClients.editccaccount.boxtitle_editccaccount'] = "Kreditkarte bearbeiten"; //en: "'Edit Credit Card Account'"
$lang['AdminClients.editccaccount.field_accountsubmit'] = "Account bearbeiten"; //en: "'Edit Account'"


// Edit ACH account
$lang['AdminClients.editachaccount.page_title'] = "Bankkonto von Kunde #%1\$s ändern"; // %1$s is the client ID number"; //en: "'Client #%1$s Edit ACH Account'; // %1$s is the client ID number"
$lang['AdminClients.editachaccount.boxtitle_editachaccount'] = "Bearbeite ACH Konto"; //en: "'Edit ACH Account'"
$lang['AdminClients.editachaccount.field_accountsubmit'] = "Konto editieren"; //en: "'Edit Account'"


// Verify ACH account
$lang['AdminClients.verifyachaccount.field_firstdeposit'] = "Erste Einzahlung"; //en: "'First Deposit'"
$lang['AdminClients.verifyachaccount.field_seconddeposit'] = "Zweite Einzahlung"; //en: "'Second Deposit'"
$lang['AdminClients.verifyachaccount.boxtitle_verifyachaccount'] = "Verify ACH Account"; //en: "'Verify ACH Account'"
$lang['AdminClients.verifyachaccount.heading_deposits'] = "Verifizierungseinzahlungen"; //en: "'Verification Deposits'"
$lang['AdminClients.verifyachaccount.field_accountsubmit'] = "Konto überprüfen"; //en: "'Verify Account'"

$lang['AdminClients.verifyAchAccount.text_ach'] = "ACH"; //en: "'ACH'"


// Add Contact
$lang['AdminClients.addcontact.page_title'] = "Neuer Kunde #%1\$s"; // %1$s is the client ID number"; //en: "'Client #%1$s New Contact'; // %1$s is the client ID number"
$lang['AdminClients.addcontact.boxtitle_newcontact'] = "Neuer Kontakt"; //en: "'New Contact'"

$lang['AdminClients.addcontact.heading_contact'] = "Kontaktinformationen"; //en: "'Contact Information'"

$lang['AdminClients.addcontact.heading_authentication'] = "Authentifizierung"; //en: "'Authentication'"
$lang['AdminClients.addcontact.field_enable_login'] = "Login aktivieren"; //en: "'Enable Login'"
$lang['AdminClients.addcontact.field_username'] = "Username"; //en: "'Username'"
$lang['AdminClients.addcontact.field_newpassword'] = "Passwort"; //en: "'Password'"
$lang['AdminClients.addcontact.text_generate_password'] = "Passwort generieren"; //en: "'Generate Password'"
$lang['AdminClients.addcontact.field_permissions'] = "Berechtigungen"; //en: "'Permissions'"

$lang['AdminClients.addcontact.heading_settings'] = "Zusätzliche Einstellungen"; //en: "'Additional Settings'"

$lang['AdminClients.addcontact.field_firstname'] = "Vorname"; //en: "'First Name'"
$lang['AdminClients.addcontact.field_lastname'] = "Nachname"; //en: "'Last Name'"
$lang['AdminClients.addcontact.field_company'] = "Firma/Organisation"; //en: "'Company/Org.'"
$lang['AdminClients.addcontact.field_title'] = "Titel"; //en: "'Title'"
$lang['AdminClients.addcontact.field_address1'] = "Adresse 1"; //en: "'Address 1'"
$lang['AdminClients.addcontact.field_address2'] = "Adresse 2"; //en: "'Address 2'"
$lang['AdminClients.addcontact.field_city'] = "Stadt"; //en: "'City'"
$lang['AdminClients.addcontact.field_state'] = "Bundesland"; //en: "'State/Province'"
$lang['AdminClients.addcontact.field_zip'] = "PLZ"; //en: "'Zip/Postal Code'"
$lang['AdminClients.addcontact.field_country'] = "Land"; //en: "'Country'"
$lang['AdminClients.addcontact.field_email'] = "E-Mail"; //en: "'Email'"

$lang['AdminClients.addcontact.field_accounttype'] = "Account Typ"; //en: "'Account Type'"

$lang['AdminClients.addcontact.field_contactsubmit'] = "Kontakt erstellen"; //en: "'Create Contact'"


// Create Invoice
$lang['AdminClients.createinvoice.page_title'] = "Rechnung für Kunde #%1\$s erstellen"; // %1$s is the client ID number"; //en: "'Client #%1$s Create Invoice'; // %1$s is the client ID number"
$lang['AdminClients.createinvoice.boxtitle_createinvoice'] = "Rechnung erstellen"; //en: "'Create Invoice'"

$lang['AdminClients.createinvoice.heading_description'] = "Beschreibung"; //en: "'Description'"
$lang['AdminClients.createinvoice.heading_quantity'] = "Anzahl"; //en: "'Quantity'"
$lang['AdminClients.createinvoice.heading_unitcost'] = "Kosten pro Einheit"; //en: "'Unit Cost'"
$lang['AdminClients.createinvoice.heading_tax'] = "Steuer"; //en: "'Tax'"
$lang['AdminClients.createinvoice.heading_options'] = "Optionen"; //en: "'Options'"

$lang['AdminClients.createinvoice.heading_term'] = "Laufzeit"; //en: "'Term'"
$lang['AdminClients.createinvoice.heading_period'] = "Periode"; //en: "'Period'"
$lang['AdminClients.createinvoice.heading_duration'] = "Dauer"; //en: "'Duration'"
$lang['AdminClients.createinvoice.heading_nextbilldate'] = "Nächstes Erneuerungsdatum"; //en: "'Next Renew Date'"

$lang['AdminClients.createinvoice.option_add'] = "Hinzufügen"; //en: "'Add'"
$lang['AdminClients.createinvoice.option_delete'] = "Löschen"; //en: "'Delete'"

$lang['AdminClients.createinvoice.field_datebilled'] = "Rechnungsdatum:"; //en: "'Date Billed:'"
$lang['AdminClients.createinvoice.field_datedue'] = "Rechnungsdatum:"; //en: "'Date Due:'"
$lang['AdminClients.createinvoice.field_invoicedelivery'] = "Rechnungszustellung:"; //en: "'Invoice Delivery:'"

$lang['AdminClients.createinvoice.field_autodebit'] = "Automatische Abbuchung:"; //en: "'Auto Debit:'"
$lang['AdminClients.createinvoice.field_autodebit_text'] = "Lassen Sie die automatische Abbuchung für diese Rechnung zu"; //en: "'Allow auto-debiting for this invoice'"
$lang['AdminClients.createinvoice.tooltip_autodebit'] = "Wenn Sie dieses Kontrollkästchen aktivieren, wird diese Rechnung automatisch abgebucht, wenn die automatische Abbuchung aktiviert und für den Kunden verfügbar ist."; //en: "'Checking this box will enable this invoice to be auto-debited if auto-debit is enabled and available for the client.'"

$lang['AdminClients.createinvoice.field_currency'] = "Währung"; //en: "'Currency'"

$lang['AdminClients.createinvoice.field_duration_indefinitely'] = "Unbegrenzt"; //en: "'Indefinitely'"
$lang['AdminClients.createinvoice.field_duration_times'] = "Anzahl"; //en: "'number of times'"
$lang['AdminClients.createinvoice.field_notepublic'] = "Öffentliche Hinweis:"; //en: "'Public Note:'"
$lang['AdminClients.createinvoice.field_noteprivate'] = "Private Notiz:"; //en: "'Private Note:'"

$lang['AdminClients.createinvoice.field_invoicesubmit'] = "Erstellen"; //en: "'Create'"
$lang['AdminClients.createinvoice.field_invoicedraft'] = "Als Entwurf speichern"; //en: "'Save as Draft'"

$lang['AdminClients.createinvoice.section_recurringinvoice'] = "Wiederkehrende Rechnung"; //en: "'Recurring Invoice'"
$lang['AdminClients.createinvoice.section_notes'] = "Notizen"; //en: "'Notes'"

$lang['AdminClients.createinvoice.price_subtotal'] = "Zwischensumme:"; //en: "'Sub Total:'"

$lang['AdminClients.createinvoice.auto_save_saving'] = "Als Entwurf speichern..."; //en: "'Saving as draft...'"
$lang['AdminClients.createinvoice.auto_save_saved'] = "Entwurf gespeichert"; //en: "'Draft saved'"
$lang['AdminClients.createinvoice.auto_save_error'] = "Der Entwurf konnte nicht automatisch gespeichert werden"; //en: "'The draft could not be auto-saved'"


// Create Quotation
$lang['AdminClients.createquotation.page_title'] = 'Client #%1$s Create Quote'; // %1$s is the client ID number
$lang['AdminClients.createquotation.boxtitle_createquotation'] = 'Create Quote';

$lang['AdminClients.createquotation.heading_description'] = 'Description';
$lang['AdminClients.createquotation.heading_quantity'] = 'Quantity';
$lang['AdminClients.createquotation.heading_unitcost'] = 'Unit Cost';
$lang['AdminClients.createquotation.heading_tax'] = 'Tax';
$lang['AdminClients.createquotation.heading_options'] = 'Options';

$lang['AdminClients.createquotation.option_add'] = 'Add';
$lang['AdminClients.createquotation.option_delete'] = 'Delete';

$lang['AdminClients.createquotation.field_title'] = 'Title';

$lang['AdminClients.createquotation.field_date_created'] = 'Date Created:';
$lang['AdminClients.createquotation.field_date_expires'] = 'Date Expires:';

$lang['AdminClients.createquotation.field_currency'] = 'Currency';

$lang['AdminClients.createquotation.field_notes'] = 'Notes:';
$lang['AdminClients.createquotation.field_private_notes'] = 'Private Notes:';

$lang['AdminClients.createquotation.field_quotationsubmit'] = 'Create';
$lang['AdminClients.createquotation.field_quotationdraft'] = 'Save as Draft';

$lang['AdminClients.createquotation.section_notes'] = 'Notes';

$lang['AdminClients.createquotation.price_subtotal'] = 'Sub Total:';

$lang['AdminClients.createquotation.auto_save_saving'] = 'Saving as draft...';
$lang['AdminClients.createquotation.auto_save_saved'] = 'Draft saved';
$lang['AdminClients.createquotation.auto_save_error'] = 'The draft could not be auto-saved';


// Edit Quotation
$lang['AdminClients.editquotation.page_title'] = 'Client #%1$s Edit Quote'; // %1$s is the client ID number
$lang['AdminClients.editquotation.boxtitle_editquotation'] = 'Edit Quote [%1$s]'; // %1$s is the quotation number

$lang['AdminClients.editquotation.heading_description'] = 'Description';
$lang['AdminClients.editquotation.heading_quantity'] = 'Quantity';
$lang['AdminClients.editquotation.heading_unitcost'] = 'Unit Cost';
$lang['AdminClients.editquotation.heading_tax'] = 'Tax';
$lang['AdminClients.editquotation.heading_options'] = 'Options';

$lang['AdminClients.editquotation.option_add'] = 'Add';
$lang['AdminClients.editquotation.option_delete'] = 'Delete';

$lang['AdminClients.editquotation.field_title'] = 'Title';

$lang['AdminClients.editquotation.field_date_created'] = 'Date Created:';
$lang['AdminClients.editquotation.field_date_expires'] = 'Date Expires:';

$lang['AdminClients.editquotation.field_currency'] = 'Currency';

$lang['AdminClients.editquotation.field_notes'] = 'Notes:';
$lang['AdminClients.editquotation.field_private_notes'] = 'Private Notes:';

$lang['AdminClients.editquotation.field_quotationsubmit'] = 'Save';
$lang['AdminClients.editquotation.field_quotationsavedraft'] = 'Save as Draft';

$lang['AdminClients.editquotation.section_notes'] = 'Notes';

$lang['AdminClients.editquotation.price_subtotal'] = 'Sub Total:';

$lang['AdminClients.editquotation.auto_save_saving'] = 'Saving as draft...';
$lang['AdminClients.editquotation.auto_save_saved'] = 'Draft saved';
$lang['AdminClients.editquotation.auto_save_error'] = 'The draft could not be auto-saved';


// Invoice Quotation
$lang['AdminClients.invoicequotation.field_invoice_single'] = 'Single Invoice';
$lang['AdminClients.invoicequotation.field_invoice_two'] = 'Two Invoices';
$lang['AdminClients.invoicequotation.field_due_date'] = 'Due Date';
$lang['AdminClients.invoicequotation.field_first_due_date'] = 'First Due Date';
$lang['AdminClients.invoicequotation.field_second_due_date'] = 'Second Due Date';
$lang['AdminClients.invoicequotation.field_percentage_due'] = 'Percentage Due (%)';
$lang['AdminClients.invoicequotation.field_submit'] = 'Create Invoice';


// Edit
$lang['AdminClients.edit.page_title'] = "Kunde #%1\$s bearbeiten"; // %1$s is the client ID number"; //en: "'Client #%1$s Modify Client'; // %1$s is the client ID number"
$lang['AdminClients.edit.boxtitle_editclient'] = "Kunde bearbeiten"; //en: "'Modify Client'"

$lang['AdminClients.edit.heading_contact'] = "Kontakt Informationen"; //en: "'Contact Information'"
$lang['AdminClients.edit.heading_billing'] = "Rechnungskontakt"; //en: "'Billing Information'"
$lang['AdminClients.edit.heading_authentication'] = "Authentifizierung"; //en: "'Authentication'"
$lang['AdminClients.edit.heading_settings'] = "Zusätzliche Einstellungen"; //en: "'Additional Settings'"

$lang['AdminClients.edit.field_firstname'] = "Vorname"; //en: "'First Name'"
$lang['AdminClients.edit.field_lastname'] = "Nachname"; //en: "'Last Name'"
$lang['AdminClients.edit.field_company'] = "Firma/Organisation"; //en: "'Company/Org.'"
$lang['AdminClients.edit.field_title'] = "Titel"; //en: "'Title'"
$lang['AdminClients.edit.field_address1'] = "Adresse 1"; //en: "'Address 1'"
$lang['AdminClients.edit.field_address2'] = "2. Adresse"; //en: "'Address 2'"
$lang['AdminClients.edit.field_city'] = "Stadt"; //en: "'City'"
$lang['AdminClients.edit.field_state'] = "Bundesstaat"; //en: "'State/Province'"
$lang['AdminClients.edit.field_zip'] = "PLZ"; //en: "'Zip/Postal Code'"
$lang['AdminClients.edit.field_country'] = "Land"; //en: "'Country'"
$lang['AdminClients.edit.field_email'] = "Email"; //en: "'Email'"

$lang['AdminClients.edit.field_username_type_email'] = "Benutze E-Mail als Benutzername"; //en: "'Use email as username'"
$lang['AdminClients.edit.field_username_type_username'] = "Nutzername eingeben"; //en: "'Specify a username'"
$lang['AdminClients.edit.field_username'] = "Benutzername"; //en: "'Username'"
$lang['AdminClients.edit.field_newpassword'] = "Passwort"; //en: "'Password'"
$lang['AdminClients.edit.field_two_factor_mode'] = "Zwei-Faktor-Authentifizierung"; //en: "'Two-Factor Authentication'"
$lang['AdminClients.edit.field_two_factor_mode_off'] = "Nicht aktiviert"; //en: "'Not Enabled'"
$lang['AdminClients.edit.field_two_factor_mode_on'] = "Zwei-Faktor-Authentifizierung deaktivieren (derzeit aktiviert)"; //en: "'Disable Two-Factor Authentication (currently Enabled)'"

$lang['AdminClients.edit.field_taxexempt'] = "Steuerbefreiung"; //en: "'Tax Exempt'"
$lang['AdminClients.edit.field_taxid'] = "UST ID/Steuernummer"; //en: "'Tax ID/VATIN'"
$lang['AdminClients.edit.field_preferredcurrency'] = "Bevorzugte Währung"; //en: "'Preferred Currency'"
$lang['AdminClients.edit.field_invoiceaddress'] = "Rechnungen adressieren an"; //en: "'Address Invoices To'"

$lang['AdminClients.edit.field_language'] = "Sprache"; //en: "'Language'"
$lang['AdminClients.edit.field_clientgroup'] = "Kundengruppe"; //en: "'Client Group'"
$lang['AdminClients.edit.field_receive_email_marketing'] = "Für marketing E-Mails anmelden"; //en: "'Opt-in to marketing emails'"

$lang['AdminClients.edit.field_clientsubmit'] = "Kunde bearbeiten"; //en: "'Modify Client'"


// Account ACH Info
$lang['AdminClients.accountachinfo.heading_account'] = "Bankkonto Informationen"; //en: "'Bank Account Information'"
$lang['AdminClients.accountachinfo.field_type'] = "Typ"; //en: "'Type'"
$lang['AdminClients.accountachinfo.field_accountnum'] = "Kontonummer"; //en: "'Account Number'"
$lang['AdminClients.accountachinfo.field_routingnum'] = "IBAN"; //en: "'Routing Number'"
$lang['AdminClients.accountachinfo.field_savedetails'] = "IBAN"; //en: "'Save Account'"

$lang['AdminClients.accountachinfo.text_showaccount'] = "Zeige Benutzerkonto"; //en: "'Show Account'"


// Account CC Info
$lang['AdminClients.accountccinfo.heading_cc'] = "Kreditkarten Informationen"; //en: "'Credit Card Information'"
$lang['AdminClients.accountccinfo.field_number'] = "Nummer"; //en: "'Number'"
$lang['AdminClients.accountccinfo.field_security'] = "Sicherheitscode"; //en: "'Security Code'"
$lang['AdminClients.accountccinfo.field_expiration'] = "Auslaufdatum"; //en: "'Expiration Date'"
$lang['AdminClients.accountccinfo.field_savedetails'] = "Account speichern"; //en: "'Save Account'"

$lang['AdminClients.accountccinfo.text_showcard'] = "Karte zeigen"; //en: "'Show Card'"
$lang['AdminClients.accountccinfo.tooltip_code'] = "Der drei-, oder vierstellige Sicherheitscode, ist auf der Rückseite der Kreditkarte zu finden."; //en: "'The 3 or 4 digit security code, usually found on the back of the card.'"

// Account Types
$lang['AdminClients.accounttypes.heading_types'] = "Akzeptierte Zahlungsarten"; //en: "'Accepted Payment Types'"
$lang['AdminClients.accounttypes.submit_settings'] = "Update-Einstellungen"; //en: "'Update Settings'"
$lang['AdminClients.accounttypes.cancel'] = "Abbrechen"; //en: "'Cancel'"


// Account Contact Info
$lang['AdminClients.accountcontactinfo.heading_contact'] = "Kontaktinformation"; //en: "'Contact Information'"

$lang['AdminClients.accountcontactinfo.field_contact_id'] = "Kontakt Information kopieren"; //en: "'Copy Contact Information From'"
$lang['AdminClients.accountcontactinfo.field_first_name'] = "Vorname"; //en: "'First Name'"
$lang['AdminClients.accountcontactinfo.field_last_name'] = "Nachname"; //en: "'Last Name'"
$lang['AdminClients.accountcontactinfo.field_address1'] = "1. Adresse"; //en: "'Address 1'"
$lang['AdminClients.accountcontactinfo.field_address2'] = "Adresse (c/o)"; //en: "'Address 2'"
$lang['AdminClients.accountcontactinfo.field_city'] = "Stadt"; //en: "'City'"
$lang['AdminClients.accountcontactinfo.field_country'] = "Land"; //en: "'Country'"
$lang['AdminClients.accountcontactinfo.field_state'] = "Status"; //en: "'State'"
$lang['AdminClients.accountcontactinfo.field_zip'] = "PLZ"; //en: "'Zip/Postal Code'"


// Phones partial
$lang['AdminClients.phones.categorylink_number'] = "Zusätzliche Nummer hinzufügen"; //en: "'Add Additional Number'"
$lang['AdminClients.phones.rowheading_number'] = "Telefonnummern"; //en: "'Phone Numbers'"
$lang['AdminClients.phones.text_remove'] = "Löschen"; //en: "'Remove'"

$lang['AdminClients.phones.field_phonetype'] = "Typ"; //en: "'Type'"
$lang['AdminClients.phones.field_phonelocation'] = "Ort"; //en: "'Location'"
$lang['AdminClients.phones.field_phonenumber'] = "Nummer"; //en: "'Number'"


// Edit Contact
$lang['AdminClients.editcontact.page_title'] = "Kontakt von Kunde #%1\$s ändern"; // %1$s is the client ID number"; //en: "'Client #%1$s Modify Contact'; // %1$s is the client ID number"
$lang['AdminClients.editcontact.boxtitle_editcontact'] = "Kontakt bearbeiten"; //en: "'Modify Contact'"

$lang['AdminClients.editcontact.heading_contact'] = "Kontaktinformation"; //en: "'Contact Information'"

$lang['AdminClients.editcontact.heading_authentication'] = "Bestätigung"; //en: "'Authentication'"
$lang['AdminClients.editcontact.field_enable_login'] = "Login aktivieren"; //en: "'Enable Login'"
$lang['AdminClients.editcontact.field_username'] = "Nutzername"; //en: "'Username'"
$lang['AdminClients.editcontact.field_newpassword'] = "Passwort"; //en: "'Password'"
$lang['AdminClients.editcontact.text_generate_password'] = "Passwort generieren"; //en: "'Generate Password'"
$lang['AdminClients.editcontact.field_two_factor_mode'] = "Zwei-Faktor-Authentifizierung"; //en: "'Two-Factor Authentication'"
$lang['AdminClients.editcontact.field_two_factor_mode_off'] = "Nicht aktiviert"; //en: "'Not Enabled'"
$lang['AdminClients.editcontact.field_two_factor_mode_on'] = "Zwei-Faktor-Authentifizierung deaktivieren (derzeit aktiviert)"; //en: "'Disable Two-Factor Authentication (currently Enabled)'"
$lang['AdminClients.editcontact.field_permissions'] = "Berechtigungen"; //en: "'Permissions'"

$lang['AdminClients.editcontact.heading_settings'] = "Zusätzliche Einstellungen"; //en: "'Additional Settings'"

$lang['AdminClients.editcontact.field_firstname'] = "Vorname"; //en: "'First Name'"
$lang['AdminClients.editcontact.field_lastname'] = "Nachname"; //en: "'Last Name'"
$lang['AdminClients.editcontact.field_company'] = "Firma/Organisation"; //en: "'Company/Org.'"
$lang['AdminClients.editcontact.field_title'] = "Titel"; //en: "'Title'"
$lang['AdminClients.editcontact.field_address1'] = "Adresse"; //en: "'Address 1'"
$lang['AdminClients.editcontact.field_address2'] = "2. Adresse"; //en: "'Address 2'"
$lang['AdminClients.editcontact.field_city'] = "Stadt"; //en: "'City'"
$lang['AdminClients.editcontact.field_state'] = "Staat / Provinz"; //en: "'State/Province'"
$lang['AdminClients.editcontact.field_zip'] = "Postleitzahl"; //en: "'Zip/Postal Code'"
$lang['AdminClients.editcontact.field_country'] = "Land"; //en: "'Country'"
$lang['AdminClients.editcontact.field_email'] = "E-Mail"; //en: "'Email'"

$lang['AdminClients.editcontact.field_contacttype'] = "Kontakt Typ"; //en: "'Contact Type'"

$lang['AdminClients.editcontact.field_contactsubmit'] = "Kontakt bearbeiten"; //en: "'Modify Contact'"
$lang['AdminClients.editcontact.field_deletecontact'] = "Kontakt löschen"; //en: "'Delete Contact'"

$lang['AdminClients.editcontact.confirm_delete'] = "Sind Sie sicher, dass Sie diesen Kontakt löschen wollen?"; //en: "'Are you sure you want to delete this contact?'"


// Edit Invoice
$lang['AdminClients.editinvoice.page_title'] = "Kunde #%1\$s Rechnung bearbeiten #%2\$s"; // %1$s is the client ID number, %2$s is the invoice number"; //en: "'Client #%1$s Edit Invoice #%2$s'; // %1$s is the client ID number, %2$s is the invoice number"
$lang['AdminClients.editinvoice.boxtitle_editinvoice'] = "Rechnung [%1\$s] bearbeiten"; // %1$s is the invoice number"; //en: "'Edit Invoice [%1$s]'; // %1$s is the invoice number"
$lang['AdminClients.editinvoice.boxtitle_editdraft'] = "Rechnungs Entwurf [%1\$s] bearbeiten"; // %1$s is the invoice number"; //en: "'Edit Invoice Draft [%1$s]'; // %1$s is the invoice number"

$lang['AdminClients.editinvoice.heading_description'] = "Beschreibung"; //en: "'Description'"
$lang['AdminClients.editinvoice.heading_quantity'] = "Menge"; //en: "'Quantity'"
$lang['AdminClients.editinvoice.heading_unitcost'] = "Kosten pro Einheit"; //en: "'Unit Cost'"
$lang['AdminClients.editinvoice.heading_tax'] = "Steuer"; //en: "'Tax'"
$lang['AdminClients.editinvoice.heading_options'] = "Optionen"; //en: "'Options'"

$lang['AdminClients.editinvoice.heading_term'] = "Periode"; //en: "'Term'"
$lang['AdminClients.editinvoice.heading_period'] = "Intervall"; //en: "'Period'"
$lang['AdminClients.editinvoice.heading_duration'] = "Dauer"; //en: "'Duration'"
$lang['AdminClients.editinvoice.heading_nextbilldate'] = "Nächstes Erneuerungsdatum"; //en: "'Next Renew Date'"

$lang['AdminClients.editinvoice.option_add'] = "Hinzufügen"; //en: "'Add'"
$lang['AdminClients.editinvoice.option_delete'] = "Löschen"; //en: "'Delete'"

$lang['AdminClients.editinvoice.field_datebilled'] = "Datum in Rechnung gestellt:"; //en: "'Date Billed:'"
$lang['AdminClients.editinvoice.field_datedue'] = "Fälligkeitsdatum:"; //en: "'Date Due:'"
$lang['AdminClients.editinvoice.field_invoicedelivery'] = "Rechnungsversand:"; //en: "'Invoice Delivery:'"

$lang['AdminClients.editinvoice.field_autodebit'] = "Automatische Abbuchung:"; //en: "'Auto Debit:'"
$lang['AdminClients.editinvoice.field_autodebit_text'] = "Lassen Sie die automatische Abbuchung für diese Rechnung zu"; //en: "'Allow auto-debiting for this invoice'"
$lang['AdminClients.editinvoice.tooltip_autodebit'] = "Wenn Sie dieses Kontrollkästchen aktivieren, wird diese Rechnung automatisch abgebucht, wenn die automatische Abbuchung aktiviert und für den Kunden verfügbar ist."; //en: "'Checking this box will enable this invoice to be auto-debited if auto-debit is enabled and available for the client.'"

$lang['AdminClients.editinvoice.field_recache'] = "Recache:"; //en: "'Recache:'"
$lang['AdminClients.editinvoice.field_recache_text'] = "Diese Rechnung beim Update erneut speichern"; //en: "'Recache this invoice on update'"
$lang['AdminClients.editinvoice.tooltip_recache'] = "Wenn Sie dieses Kontrollkästchen aktivieren, wird die zwischengespeicherte Rechnung beim Speichern durch aktualisierte Daten ersetzt."; //en: "'Checking this box will replace the cached invoice with updated data on save.'"

$lang['AdminClients.editinvoice.field_currency'] = "Währung"; //en: "'Currency'"

$lang['AdminClients.editinvoice.field_duration_indefinitely'] = "Unbegrenzt"; //en: "'Indefinitely'"
$lang['AdminClients.editinvoice.field_duration_times'] = "Anzahl"; //en: "'number of times'"
$lang['AdminClients.editinvoice.field_notepublic'] = "Öffentliche Notiz:"; //en: "'Public Note:'"
$lang['AdminClients.editinvoice.field_noteprivate'] = "Private Notiz:"; //en: "'Private Note:'"

$lang['AdminClients.editinvoice.field_invoicesubmit'] = "Rechnung bearbeiten"; //en: "'Modify Invoice'"
$lang['AdminClients.editinvoice.field_invoicedvoid'] = "Rechnung annulieren"; //en: "'Void Invoice'"
$lang['AdminClients.editinvoice.field_invoicecreate'] = "Erstellen"; //en: "'Create'"
$lang['AdminClients.editinvoice.field_invoicesavedraft'] = "Entwurf speichern"; //en: "'Save Draft'"
$lang['AdminClients.editinvoice.field_invoiceunvoid'] = "Wiederherstellen und bearbeiten"; //en: "'Unvoid and Modify'"
$lang['AdminClients.editinvoice.field_invoicedelete'] = "Lösche Rechnung"; //en: "'Delete Invoice'"

$lang['AdminClients.editinvoice.section_recurringinvoice'] = "Wiederkehrende Rechnung"; //en: "'Recurring Invoice'"
$lang['AdminClients.editinvoice.section_notes'] = "Notizen"; //en: "'Notes'"

$lang['AdminClients.editinvoice.price_subtotal'] = "Total:"; //en: "'Sub Total:'"

$lang['AdminClients.editinvoice.auto_save_saving'] = "Entwurf speichern..."; //en: "'Saving draft...'"
$lang['AdminClients.editinvoice.auto_save_saved'] = "Entwurf gespeichert"; //en: "'Draft saved'"
$lang['AdminClients.editinvoice.auto_save_error'] = "Der Entwurf konnte nicht automatisch gespeichert werden"; //en: "'The draft could not be auto-saved'"


// Edit Recurring Invoice
$lang['AdminClients.editrecurinvoice.page_title'] = "Rechnung #%2\$s von Kunde #%1\$s bearbeiten"; // %1$s is the client ID number, %2$s is the recurring invoice number"; //en: "'Client #%1$s Edit Recurring Invoice #%2$s'; // %1$s is the client ID number, %2$s is the recurring invoice number"
$lang['AdminClients.editrecurinvoice.boxtitle_editinvoice'] = "Wiederkehrende Rechnung [%1\$s] bearbeiten"; // %1$s is the recurring invoice number"; //en: "'Edit Recurring Invoice [%1$s]'; // %1$s is the recurring invoice number"
$lang['AdminClients.editinvoice.confirm_deleterecur'] = "Dies wird diese wiederkehrende Rechnung entfernen. Keine weiteren Rechnungen werden mit dieser wiederkehrende Rechnung generiert. Sind sie sich sicher?"; //en: "'This will permanently remove this recurring invoice. No further invoices will be generated using this recurring invoice. Are you sure you want to delete it?'"


// Edit Transaction
$lang['AdminClients.edittransaction.page_title'] = "Transaktion von Kunde #%1\$s bearbeiten"; // %1$s is the client ID number"; //en: "'Client #%1$s Edit Transaction'; // %1$s is the client ID number"
$lang['AdminClients.edittransaction.boxtitle_edittransaction'] = "Transaktion bearbeiten"; //en: "'Edit Transaction'"
$lang['AdminClients.edittransaction.heading_type'] = "Art"; //en: "'Type'"
$lang['AdminClients.edittransaction.heading_amount'] = "Betrag"; //en: "'Amount'"
$lang['AdminClients.edittransaction.heading_credited'] = "Berechnet"; //en: "'Credited'"
$lang['AdminClients.edittransaction.heading_applied'] = "Angelegt"; //en: "'Applied'"
$lang['AdminClients.edittransaction.heading_number'] = "Nummer"; //en: "'Number'"
$lang['AdminClients.edittransaction.heading_status'] = "Status"; //en: "'Status'"
$lang['AdminClients.edittransaction.heading_date'] = "Datum"; //en: "'Date'"
$lang['AdminClients.edittransaction.subheading_invoice'] = "Rechnung #"; //en: "'Invoice #'"
$lang['AdminClients.edittransaction.subheading_amount'] = "Betrag"; //en: "'Amount'"
$lang['AdminClients.edittransaction.subheading_appliedon'] = "Angewendet am"; //en: "'Applied On'"
$lang['AdminClients.edittransaction.subheading_options'] = "Einstellungen"; //en: "'Options'"
$lang['AdminClients.edittransaction.field_status'] = "Status"; //en: "'Status'"
$lang['AdminClients.edittransaction.field_processremotely'] = "Verarbeiten Sie diese Statusänderung mit dem Payment-Gateway (%1\$s)"; // %1$s is the name of the remote gateway"; //en: "'Process this status change with the payment gateway (%1$s)'; // %1$s is the name of the remote gateway"
$lang['AdminClients.edittransaction.field_submit'] = "Transaktion bearbeiten"; //en: "'Modify Transaction'"
$lang['AdminClients.edittransaction.applied_no_results'] = "Diese Transaktion wurde auf keine Rechnunge angewandt."; //en: "'This transaction has not been applied to any invoices.'"
$lang['AdminClients.edittransaction.option_unapply'] = "Zurücksetzen"; //en: "'Unapply'"
$lang['AdminClients.edittransaction.confirm_unapply'] = "Diese Transaktion wirklich von der gewählten Rechnung entfernen?"; //en: "'Really unapply this transaction from the selected invoice?'"


// Email
$lang['AdminClients.email.page_title'] = "Kunde #%1\$s E-Mail-Client"; // %1$s is the client ID number"; //en: "'Client #%1$s Email Client'; // %1$s is the client ID number"
$lang['AdminClients.email.boxtitle_emailclient'] = "Email-Client"; //en: "'Email Client'"

$lang['AdminClients.email.field_recipient'] = "Empfänger"; //en: "'Recipient'"
$lang['AdminClients.email.field_fromname'] = "Absender Name"; //en: "'From Name'"
$lang['AdminClients.email.field_from'] = "Absender E-Mail"; //en: "'From Email'"
$lang['AdminClients.email.field_subject'] = "Betreff"; //en: "'Subject'"
$lang['AdminClients.email.field_message'] = "Text"; //en: "'Text'"
$lang['AdminClients.email.field_messagehtml'] = "HTML"; //en: "'HTML'"

$lang['AdminClients.email.field_emailsubmit'] = "E-Mail senden"; //en: "'Send Email'"


// Emails (mail log)
$lang['AdminClients.emails.page_title'] = "Mail Log von Kunde #%1\$s"; // %1$s is the client ID number"; //en: "'Client #%1$s Mail Log'; // %1$s is the client ID number"
$lang['AdminClients.emails.boxtitle_maillog'] = "Mail Log"; //en: "'Mail Log'"

$lang['AdminClients.emails.heading_date'] = "Datum"; //en: "'Date'"
$lang['AdminClients.emails.heading_subject'] = "Titel"; //en: "'Subject'"
$lang['AdminClients.emails.heading_summary'] = "Zusammenfassung"; //en: "'Summary'"

$lang['AdminClients.emails.text_to'] = "An"; //en: "'To'"
$lang['AdminClients.emails.text_cc'] = "CC"; //en: "'CC'"
$lang['AdminClients.emails.text_from'] = "Von"; //en: "'From'"
$lang['AdminClients.emails.text_resend'] = "Erneut versenden"; //en: "'Resend'"

$lang['AdminClients.emails.no_results'] = "Es gibt hier keine E-Mails."; //en: "'There are no emails.'"


// Password reset
$lang['AdminClients.passwordreset.page_title'] = "Client #%1\$s Passwort zurücksetzen"; // %1$s is the client ID number"; //en: "'Client #%1$s Password Reset'; // %1$s is the client ID number"
$lang['AdminClients.passwordreset.boxtitle_passwordreset'] = "Passwort zurücksetzen senden"; //en: "'Send Password Reset'"

$lang['AdminClients.passwordreset.field_contact_id'] = "Kontakt"; //en: "'Contact'"
$lang['AdminClients.passwordreset.contact_id_name'] = "%1\$s %2\$s (%3\$s) %4\$s"; // $1$s is the contact's first name, %2$s is the contact's last name, %3$s is the contact type, %4$s is the contact's email address"; //en: "'%1$s %2$s (%3$s) %4$s'; // $1$s is the contact's first name, %2$s is the contact's last name, %3$s is the contact type, %4$s is the contact's email address"

$lang['AdminClients.passwordreset.field_submit'] = "E-Mail senden"; //en: "'Send Email'"


// Invoices
$lang['AdminClients.invoices.page_title'] = "Rechnungen von Kunde #%1\$s"; // %1$s is the client ID number"; //en: "'Client #%1$s Invoices'; // %1$s is the client ID number"
$lang['AdminClients.invoices.boxtitle_invoices'] = "Rechnungen"; //en: "'Invoices'"

$lang['AdminClients.invoices.heading_invoice'] = "Rechnung #"; //en: "'Invoice #'"
$lang['AdminClients.invoices.heading_recurinvoice'] = "Wiederkehrend #"; //en: "'Recurring #'"
$lang['AdminClients.invoices.heading_amount'] = "Menge"; //en: "'Amount'"
$lang['AdminClients.invoices.heading_paid'] = "Bezahlt"; //en: "'Paid'"
$lang['AdminClients.invoices.heading_due'] = "Ziel"; //en: "'Due'"
$lang['AdminClients.invoices.heading_dateclosed'] = "Datum der Schließung"; //en: "'Date Closed'"
$lang['AdminClients.invoices.heading_datebilled'] = "Rechnungsdatum"; //en: "'Date Billed'"
$lang['AdminClients.invoices.heading_datedue'] = "Fälligkeitsdatum"; //en: "'Date Due'"
$lang['AdminClients.invoices.heading_status'] = "Status"; //en: "'Status'"
$lang['AdminClients.invoices.heading_options'] = "Optionen"; //en: "'Options'"
$lang['AdminClients.invoices.heading_term'] = "Bedingung"; //en: "'Term'"
$lang['AdminClients.invoices.heading_duration'] = "Dauer"; //en: "'Duration'"
$lang['AdminClients.invoices.heading_count'] = "Zähler"; //en: "'Count'"

$lang['AdminClients.invoices.category_open'] = "Offen"; //en: "'Open'"
$lang['AdminClients.invoices.category_drafts'] = "Entwürfe"; //en: "'Drafts'"
$lang['AdminClients.invoices.category_closed'] = "Geschlossen"; //en: "'Closed'"
$lang['AdminClients.invoices.category_voided'] = "Ungültig"; //en: "'Voided'"
$lang['AdminClients.invoices.category_recurring'] = "Wiederkehrend"; //en: "'Recurring'"
$lang['AdminClients.invoices.category_pending'] = "Ausstehen"; //en: "'Pending'"

$lang['AdminClients.invoices.categorylink_createinvoice'] = "Rechnung erstellen"; //en: "'Create Invoice'"

$lang['AdminClients.invoices.headingexpand_paymenttype'] = "Zahlungsmethode "; //en: "'Payment Type'"
$lang['AdminClients.invoices.headingexpand_amount'] = "Betrag"; //en: "'Amount'"
$lang['AdminClients.invoices.headingexpand_applied'] = "Angewendet"; //en: "'Applied'"
$lang['AdminClients.invoices.headingexpand_appliedon'] = "Angewendet am"; //en: "'Applied On'"
$lang['AdminClients.invoices.headingexpand_options'] = "Einstellungen"; //en: "'Options'"

$lang['AdminClients.invoices.status_sent'] = "Gesendet"; //en: "'Sent'"
$lang['AdminClients.invoices.status_unsent'] = "Ungesendet"; //en: "'Unsent'"

$lang['AdminClients.invoices.option_edit'] = "Bearbeiten"; //en: "'Edit'"
$lang['AdminClients.invoices.option_view'] = "Ansehen"; //en: "'View'"
$lang['AdminClients.invoices.option_pay'] = "Bezahlen"; //en: "'Pay'"
$lang['AdminClients.invoices.option_delete'] = "Löschen"; //en: "'Delete'"

$lang['AdminClients.invoices.confirm_delete'] = "Sind Sie sicher, dass Sie diesen Rechnungsentwurf löschen wollen?"; //en: "'Are you sure you want to delete this draft invoice?'"

$lang['AdminClients.invoices.optionexpand_edit'] = "Bearbeiten"; //en: "'Edit'"

$lang['AdminClients.invoices.action_deliver'] = "Liefern über %1\$s"; // %1$s is the invoice delivery method (e.g. Email, PostalMethods)"; //en: "'Deliver via %1$s'; // %1$s is the invoice delivery method (e.g. Email, PostalMethods)"
$lang['AdminClients.invoices.action_void'] = "Rechnungen stornieren"; //en: "'Void Invoices'"

$lang['AdminClients.invoices.field_invoicesubmit'] = "Abschicken"; //en: "'Submit'"
$lang['AdminClients.invoices.field_continue'] = 'Continue';
$lang['AdminClients.invoices.field_cancel'] = 'Cancel';

$lang['AdminClients.invoices.no_results'] = "Es gibt keine Rechnungen mit diesem Status."; //en: "'There are no invoices with this status.'"
$lang['AdminClients.invoices.applied_no_results'] = "Dieser Rechnung wurde keine Zahlung zugewiesen."; //en: "'This invoice has no transactions applied to it.'"

$lang['AdminClients.invoices.subtotal_w_tax'] = "%1\$s +Steuern"; // %1$s is the sub total amount"; //en: "'%1$s +tax'; // %1$s is the sub total amount"
$lang['AdminClients.invoices.term_day'] = "%1\$s Tag"; // %1$s is the term (an integer)"; //en: "'%1$s day'; // %1$s is the term (an integer)"
$lang['AdminClients.invoices.term_week'] = "%1\$s Woche"; // %1$s is the term (an integer)"; //en: "'%1$s week'; // %1$s is the term (an integer)"
$lang['AdminClients.invoices.term_month'] = "Monat %1\$s"; // %1$s is the term (an integer)"; //en: "'%1$s month'; // %1$s is the term (an integer)"
$lang['AdminClients.invoices.term_year'] = "%1\$s Jahr"; // %1$s is the term (an integer)"; //en: "'%1$s year'; // %1$s is the term (an integer)"
$lang['AdminClients.invoices.term_day_plural'] = "%1\$s Tage"; // %1$s is the term (an integer)"; //en: "'%1$s days'; // %1$s is the term (an integer)"
$lang['AdminClients.invoices.term_week_plural'] = "%1\$s Wochen"; // %1$s is the term (an integer)"; //en: "'%1$s weeks'; // %1$s is the term (an integer)"
$lang['AdminClients.invoices.term_month_plural'] = "%1\$s Monate"; // %1$s is the term (an integer)"; //en: "'%1$s months'; // %1$s is the term (an integer)"
$lang['AdminClients.invoices.term_year_plural'] = "%1\$s Jahre"; // %1$s is the term (an integer)"; //en: "'%1$s years'; // %1$s is the term (an integer)"

$lang['AdminClients.invoices.duration_finite'] = '%1$s times'; // %1$s is the number of times the recurring invoice will be created
$lang['AdminClients.invoices.duration_infinite'] = '∞';

// Quotations
$lang['AdminClients.quotations.page_title'] = 'Billing Quotes';
$lang['AdminClients.quotations.boxtitle_quotations'] = 'Quotes';

$lang['AdminClients.quotations.heading_quotation'] = 'Quote #';
$lang['AdminClients.quotations.heading_client'] = 'Client #';
$lang['AdminClients.quotations.heading_title'] = 'Title';
$lang['AdminClients.quotations.heading_staff'] = 'Quoted By';
$lang['AdminClients.quotations.heading_subtotal'] = 'Subtotal';
$lang['AdminClients.quotations.heading_total'] = 'Amount';
$lang['AdminClients.quotations.heading_date_created'] = 'Creation Date';
$lang['AdminClients.quotations.heading_date_expires'] = 'Expiration Date';
$lang['AdminClients.quotations.heading_options'] = 'Options';

$lang['AdminClients.quotations.category_draft'] = 'Draft';
$lang['AdminClients.quotations.category_approved'] = 'Approved';
$lang['AdminClients.quotations.category_pending'] = 'Pending';
$lang['AdminClients.quotations.category_expired'] = 'Expired';
$lang['AdminClients.quotations.category_invoiced'] = 'Invoiced';
$lang['AdminClients.quotations.category_dead'] = 'Dead';
$lang['AdminClients.quotations.category_lost'] = 'Lost';

$lang['AdminClients.quotations.option_edit'] = 'Edit';
$lang['AdminClients.quotations.option_view'] = 'View';
$lang['AdminClients.quotations.option_invoice'] = 'Create Invoice';
$lang['AdminClients.quotations.option_approve'] = 'Approve';

$lang['AdminClients.quotations.confirm_approve'] = 'Are you sure you want to approve this quote?';

$lang['AdminClients.quotations.categorylink_createquotation'] = 'Create Quote';
$lang['AdminClients.quotations.field_quotationsubmit'] = 'Submit';

$lang['AdminClients.quotations.action.email'] = 'Deliver by Email';
$lang['AdminClients.quotations.action.status'] = 'Change Status';

$lang['AdminClients.quotations.no_results'] = 'There are no quotes with this status.';

// Quotation Invoices
$lang['AdminClients.quotationinvoices.headingexpand_invoice'] = 'Invoice #';
$lang['AdminClients.quotationinvoices.headingexpand_amount'] = 'Amount';
$lang['AdminClients.quotationinvoices.headingexpand_paid'] = 'Paid';
$lang['AdminClients.quotationinvoices.headingexpand_date_billed'] = 'Date Billed';
$lang['AdminClients.quotationinvoices.headingexpand_options'] = 'Options';

$lang['AdminClients.quotationinvoices.option_view'] = 'View';

$lang['AdminClients.quotationinvoices.invoices_no_results'] = 'There are no invoices associated to this quote.';

// Merge
$lang['AdminClients.merge.page_title'] = "Kunde #%1\$s, Kunden zusammenführen"; // %1$s is the client ID number"; //en: "'Client #%1$s Merge Clients'; // %1$s is the client ID number"
$lang['AdminClients.merge.boxtitle_merge'] = "Kunden zusammenführen"; //en: "'Merge Clients'"

$lang['AdminClients.merge.field_clientid'] = "Kundennummer zum zusammenfügen"; //en: "'Client ID to Merge'"
$lang['AdminClients.merge.field_mergefrom'] = "Zusammenführungs-Formular"; //en: "'Merge Client From'"
$lang['AdminClients.merge.field_btoa'] = "B nach A"; //en: "'B to A'"
$lang['AdminClients.merge.field_atob'] = "A nach B"; //en: "'A to B'"
$lang['AdminClients.merge.field_password'] = "Administrator Passwort"; //en: "'Admin Password'"

$lang['AdminClients.merge.field_mergesubmit'] = "Kunden vereinen"; //en: "'Merge Clients'"


// Sticky Notes
$lang['AdminClients.stickynotes.date_separator'] = ":"; //en: "':'"
$lang['AdminClients.stickynotes.text_unstick'] = "Lösen"; //en: "'Unstick'"
$lang['AdminClients.stickynotes.text_more'] = "Mehr anzeigen"; //en: "'Show More'"
$lang['AdminClients.stickynotes.text_less'] = "weniger Anzeigen"; //en: "'Show Less'"


// Notes
$lang['AdminClients.notes.page_title'] = "Kunde #%1\$s Notizen"; // %1$s is the client ID number"; //en: "'Client #%1$s Notes'; // %1$s is the client ID number"
$lang['AdminClients.notes.boxtitle_notes'] = "Notizen"; //en: "'Notes'"

$lang['AdminClients.notes.heading_title'] = "Zusammenfassung"; //en: "'Summary'"
$lang['AdminClients.notes.heading_dateupdated'] = "Datum aktualisiert"; //en: "'Date Updated'"
$lang['AdminClients.notes.heading_options'] = "Optionen"; //en: "'Options'"

$lang['AdminClients.notes.heading_staff'] = "Erstellt von"; //en: "'Created by'"
$lang['AdminClients.notes.heading_dateadded'] = "Hinzugefügt am"; //en: "'Date Added'"
$lang['AdminClients.notes.by_system'] = "System"; //en: "'System'"

$lang['AdminClients.notes.categorylink_create'] = "Notiz erstellen"; //en: "'Create Note'"

$lang['AdminClients.notes.option_edit'] = "Bearbeiten"; //en: "'Edit'"
$lang['AdminClients.notes.option_delete'] = "Löschen"; //en: "'Delete'"

$lang['AdminClients.notes.confirm_delete'] = "Sind sie sicher, dass Sie diese Notiz löschen wollen?"; //en: "'Are you sure you want to delete this note?'"

$lang['AdminClients.notes.no_results'] = "Keine Notizen vorhanden."; //en: "'There are no notes.'"

$lang['AdminClients.!notes.stickied'] = "Aktivieren Sie diese Box um diese Notiz auf der Kundenseite sichtbar zu machen."; //en: "'Check this box to display this note on the client profile page.'"


// Add Note
$lang['AdminClients.addnote.page_title'] = "Kunde #%1\$s Notiz erstellen"; // %1$s is the client ID number"; //en: "'Client #%1$s Create Note'; // %1$s is the client ID number"
$lang['AdminClients.addnote.boxtitle_createnote'] = "Notiz erstellen"; //en: "'Create Note'"

$lang['AdminClients.addnote.field_title'] = "Zusammenfassung"; //en: "'Summary'"
$lang['AdminClients.addnote.field_description'] = "Details"; //en: "'Details'"
$lang['AdminClients.addnote.field_stickied'] = "Markiere diese Notiz"; //en: "'Sticky this Note'"

$lang['AdminClients.addnote.field_notesubmit'] = "Notiz erstellen"; //en: "'Create Note'"


// Edit Note
$lang['AdminClients.editnote.page_title'] = "Notiz von Kunde #%1\$s bearbeiten"; // %1$s is the client ID number"; //en: "'Client #%1$s Edit Note'; // %1$s is the client ID number"
$lang['AdminClients.editnote.boxtitle_editnote'] = "Notiz bearbeiten"; //en: "'Edit Note'"

$lang['AdminClients.editnote.field_title'] = "Zusammenfassung"; //en: "'Summary'"
$lang['AdminClients.editnote.field_description'] = "Details"; //en: "'Details'"
$lang['AdminClients.editnote.field_stickied'] = "Diese Notiz anheften"; //en: "'Sticky this Note'"

$lang['AdminClients.editnote.field_notesubmit'] = "Notiz bearbeiten"; //en: "'Edit Note'"


// Create Service
$lang['AdminClients.addservice.status.active'] = "Aktiv"; //en: "'Active'"
$lang['AdminClients.addservice.status.inactive'] = "Inaktiv"; //en: "'Inactive'"
$lang['AdminClients.addservice.status.restricted'] = "Eingeschränkt"; //en: "'Restricted'"
$lang['AdminClients.addservice.page_title'] = "Kunde #%1\$s Service hinzufügen"; // %1$s is the client ID number"; //en: "'Client #%1$s Add Service'; // %1$s is the client ID number"
$lang['AdminClients.addservice.boxtitle_addservice'] = "Dienst hinzufügen: %1\$s"; // %1$s is the name of the package being used to add the service"; //en: "'Add Service: %1$s'; // %1$s is the name of the package being used to add the service"
$lang['AdminClients.addservice.field_package'] = "Paket"; //en: "'Package'"

$lang['AdminClients.addservice.field_continue'] = "Fortsetzen"; //en: "'Continue'"

$lang['AdminClients.addservice.auto_choose'] = "-- Automatisch ausgewählt --"; //en: "'-- Choose Automatically --'"

$lang['AdminClients.addservice.term_onetime'] = "Einmal - %3\$s"; // %1$s is the pricing term, %2$s is the pricing period, and %3$s is the formatted price"; //en: "'Onetime - %3$s'; // %1$s is the pricing term, %2$s is the pricing period, and %3$s is the formatted price"
$lang['AdminClients.addservice.term'] = "%1\$s %2\$s - %3\$s"; // %1$s is the pricing term, %2$s is the pricing period, and %3$s is the formatted price"; //en: "'%1$s %2$s - %3$s'; // %1$s is the pricing term, %2$s is the pricing period, and %3$s is the formatted price"
$lang['AdminClients.addservice.term_recurring'] = "%1\$s %2\$s - %3\$s (verlängert @ %4\$s)"; // %1$s is the pricing term, %2$s is the pricing period, %3$s is the formatted initial price, %4$s is the formatted renewal price"; //en: "'%1$s %2$s - %3$s (renews @ %4$s)'; // %1$s is the pricing term, %2$s is the pricing period, %3$s is the formatted initial price, %4$s is the formatted renewal price"
$lang['AdminClients.addservice.term_dated'] = "%1\$s %2\$s - %3\$s (%4\$s - %5\$s)"; // %1$s is the pricing term, %2$s is the pricing period, %3$s is the formatted price, %4$s is the start date of the service, %5$s is the end date of the service"; //en: "'%1$s %2$s - %3$s (%4$s - %5$s)'; // %1$s is the pricing term, %2$s is the pricing period, %3$s is the formatted price, %4$s is the start date of the service, %5$s is the end date of the service"

$lang['AdminClients.addservice_basic.basic_heading'] = "Grundoptionen"; //en: "'Basic Options'"
$lang['AdminClients.addservice_basic.field_invoice_method'] = "Zahlungsmethode"; //en: "'Invoice Method'"
$lang['AdminClients.addservice_basic.field_invoice_method_create'] = "Rechnung erstellen"; //en: "'Create Invoice'"
$lang['AdminClients.addservice_basic.field_invoice_method_append'] = "Zur Rechnung hinzufügen"; //en: "'Append to Invoice'"
$lang['AdminClients.addservice_basic.field_invoice_method_dont'] = "Nicht berechnen"; //en: "'Do Not Invoice'"
$lang['AdminClients.addservice_basic.field_term'] = "Begriff"; //en: "'Term'"
$lang['AdminClients.addservice_basic.field_status'] = "Status"; //en: "'Status'"
$lang['AdminClients.addservice_basic.field_notify_order'] = "Akzeptierte Zahlungsarten"; //en: "'Send order confirmation email when activated'"
$lang['AdminClients.addservice_basic.field_use_module'] = "Auftragsbestätigung per E-Mail senden, wenn aktiviert"; // %1$s is the name of the module the service is being created for"; //en: "'Provision using the %1$s module when activated'; // %1$s is the name of the module the service is being created for"
$lang['AdminClients.addservice_basic.module_heading'] = "%1\$s Optionen"; // %1$s is the name of the module options are being displayed for"; //en: "'%1$s Options'; // %1$s is the name of the module options are being displayed for"
$lang['AdminClients.addservice_basic.addons_heading'] = "Erweiterungen"; //en: "'Add-ons'"
$lang['AdminClients.addservice_basic.field_default_addon'] = "Keiner"; //en: "'None'"
$lang['AdminClients.addservice_basic.field_continue'] = "Fortsetzen"; //en: "'Continue'"

$lang['AdminClients.addservice_addon.module_heading'] = "%1\$s Optionen"; // %1$s is the name of the module options are being displayed for"; //en: "'%1$s Options'; // %1$s is the name of the module options are being displayed for"
$lang['AdminClients.addservice_addon.basic_heading'] = "Basisoptionen"; //en: "'Basic Options'"
$lang['AdminClients.addservice_addon.field_term'] = "Laufzeit"; //en: "'Term'"

$lang['AdminClients.addservice_confirm.field_invoice_method'] = "Rechnungsart:"; //en: "'Invoice Method:'"
$lang['AdminClients.addservice_confirm.field_invoice_method_create'] = "Rechnung erstellen"; //en: "'Create Invoice'"
$lang['AdminClients.addservice_confirm.field_invoice_method_append'] = "Rechnung anhängen %1\$s"; //en: "'Append to Invoice %1$s'"
$lang['AdminClients.addservice_confirm.field_invoice_method_none'] = "Nicht berechnen"; //en: "'Do Not Invoice'"
$lang['AdminClients.addservice_confirm.field_notify_order'] = "Bestellbestätigung versenden:"; //en: "'Send Order Confirmation Email:'"
$lang['AdminClients.addservice_confirm.field_notify_order_true'] = "Ja"; //en: "'Yes'"
$lang['AdminClients.addservice_confirm.field_notify_order_false'] = "Nein"; //en: "'No'"
$lang['AdminClients.addservice_confirm.field_status'] = "Status:"; //en: "'Status:'"
$lang['AdminClients.addservice_confirm.description'] = "Beschreibung"; //en: "'Description'"
$lang['AdminClients.addservice_confirm.qty'] = "Menge"; //en: "'Quantity'"
$lang['AdminClients.addservice_confirm.price'] = "Preis"; //en: "'Price'"
$lang['AdminClients.addservice_confirm.subtotal'] = "Zwischensumme"; //en: "'Sub Total:'"
$lang['AdminClients.addservice_confirm.setup_fee'] = "Setupgebühr"; //en: "'Setup Fee:'"
$lang['AdminClients.addservice_confirm.discount'] = "Rabatt:"; //en: "'Discount:'"
$lang['AdminClients.addservice_confirm.field_coupon_code'] = "Gutschein Code"; //en: "'Coupon Code'"
$lang['AdminClients.addservice_confirm.field_update_coupon'] = "Update"; //en: "'Update'"
$lang['AdminClients.addservice_confirm.field_add'] = "Service hinzufügen"; //en: "'Add Service'"
$lang['AdminClients.addservice_confirm.field_edit'] = "Bearbeiten"; //en: "'Edit'"

// Edit Service
$lang['AdminClients.editservice.page_title'] = "Dienst von Kunde #%1\$s verwalten"; // %1$s is the client ID number"; //en: "'Client #%1$s Manage Service'; // %1$s is the client ID number"
$lang['AdminClients.editservice.boxtitle_editservice'] = "Service verwalten: %1\$s - %2\$s"; // %1$s is the name of the package, %2$s is the name of the service"; //en: "'Manage Service: %1$s - %2$s'; // %1$s is the name of the package, %2$s is the name of the service"
$lang['AdminClients.editservice.tab_basic'] = "Grundeinstellungen"; //en: "'Basic Options'"
$lang['AdminClients.editservice.tab_addon'] = "Add-ons (%1\$s)"; // %1$s is the number of addons on the service"; //en: "'Add-ons (%1$s)'; // %1$s is the number of addons on the service"
$lang['AdminClients.editservice.suspension_reason_note'] = "Grund für die Aussetzung: %1\$s"; // %1$s is the reason this service was suspended"; //en: "'Reason for Suspension: %1$s'; // %1$s is the reason this service was suspended"
$lang['AdminClients.editservice.cancellation_reason_note'] = "Kündigungsgrund: %1\$s"; // %1$s is the reason this service was canceled"; //en: "'Reason for Cancellation: %1$s'; // %1$s is the reason this service was canceled"

$lang['AdminClients.editservice.service_heading'] = "Dienst information"; //en: "'Service Information'"
$lang['AdminClients.editservice.text_package_name'] = "Paket Name:"; //en: "'Package Name:'"
$lang['AdminClients.editservice.text_label'] = "Etikett:"; //en: "'Label:'"
$lang['AdminClients.editservice.text_qty'] = "Menge:"; //en: "'Quantity:'"
$lang['AdminClients.editservice.text_term'] = "Laufzeit:"; //en: "'Term:'"
$lang['AdminClients.editservice.text_status'] = "Status:"; //en: "'Status:'"
$lang['AdminClients.editservice.text_date_added'] = "Erstellungsdatum:"; //en: "'Date Created:'"
$lang['AdminClients.editservice.text_date_renews'] = "Erneuerungsdatum:"; //en: "'Date Renews:'"
$lang['AdminClients.editservice.text_date_suspended'] = "Gesperrt am:"; //en: "'Date Suspended:'"
$lang['AdminClients.editservice.text_date_canceled'] = "Geplantes Kündigungsdatum:"; //en: "'Scheduled Cancellation Date:'"
$lang['AdminClients.editservice.text_recurring_coupon'] = "Wiederkehrender Coupon:"; //en: "'Recurring Coupon:'"
$lang['AdminClients.editservice.text_coupon_percent'] = "%1\$s (%2\$s%%)"; // %1$s is the coupon code, %2$s is the coupon discount percentage. You MUST use two % signs to represent a single percent (i.e. %%)"; //en: "'%1$s (%2$s%%)'; // %1$s is the coupon code, %2$s is the coupon discount percentage. You MUST use two % signs to represent a single percent (i.e. %%)"
$lang['AdminClients.editservice.text_coupon_amount'] = "%1\$s (%2\$s)"; // %1$s is the coupon code, %2$s is the formatted coupon amount"; //en: "'%1$s (%2$s)'; // %1$s is the coupon code, %2$s is the formatted coupon amount"
$lang['AdminClients.editservice.text_renewal_price'] = "Erneuerungs Preis:"; //en: "'Renewal Price:'"
$lang['AdminClients.editservice.text_no_addons'] = "Es sind keine Add-Ons verfügbar."; //en: "'There are no available add-ons.'"

$lang['AdminClients.editservice.action_heading'] = "Aktionen"; //en: "'Actions'"
$lang['AdminClients.editservice.package_heading'] = "Upgrade/Downgrade"; //en: "'Upgrade/Downgrade'"
$lang['AdminClients.editservice.module_heading'] = "%1\$s Optionen"; // %1$s is the name of the module options are being displayed for"; //en: "'%1$s Options'; // %1$s is the name of the module options are being displayed for"
$lang['AdminClients.editservice.addon_heading'] = "Verfügbare Erweiterungen"; //en: "'Available Add-ons'"
$lang['AdminClients.editservice.field_prorate'] = "Aufteilung"; //en: "'Prorate'"
$lang['AdminClients.editservice.tooltip_prorate'] = "Wenn Sie ein Upgrade, wird eine Rechnung erzeugt, um die Preisdifferenz zwischen dem aktuellen Preis und dem neuen Preis zu decken. Allerdings gilt dies nicht, wenn ein neuer Preis festgelegt ist."; //en: "'If upgrading, an invoice will be generated to cover the difference in price between the current price and the new price. However, proration cannot occur if an override price is set.'"
$lang['AdminClients.editservice.tooltip_prorate_renewal'] = "Eine Rechnung wird erzeugt, um die Preisdifferenz zwischen dem aktuellen Datum und dem Erneuerungsdatum zu decken."; //en: "'An invoice will be generated to cover the difference in price between the current renew date and the new renew date.'"
$lang['AdminClients.editservice.field_use_module'] = "Modul benutzen"; //en: "'Use module'"
$lang['AdminClients.editservice.field_notify_order'] = "Bestellbestätigungs Mail senden"; //en: "'Send order confirmation email'"
$lang['AdminClients.editservice.field_module_save'] = "Speichern"; //en: "'Save'"
$lang['AdminClients.editservice.field_module_activate'] = "Aktivieren"; //en: "'Activate'"
$lang['AdminClients.editservice.field_add_addon'] = "Dienst hinzufügen"; //en: "'Add Service'"

$lang['AdminClients.editservice.action.field_action'] = "Aktion"; //en: "'Action'"
$lang['AdminClients.editservice.action.field_notify_cancel'] = "Senden Sie eine E-Mail mit der Kündigung des Dienstes"; //en: "'Send service cancellation email'"
$lang['AdminClients.editservice.action.field_cancel_term'] = "Ende der Periode"; // %1$s is the date the service next renews"; //en: "'End of Term'; // %1$s is the date the service next renews"
$lang['AdminClients.editservice.action.field_cancel_term_date'] = "Ende der Periode am (%1\$s)"; // %1$s is the date the service next renews"; //en: "'End of Term (%1$s)'; // %1$s is the date the service next renews"
$lang['AdminClients.editservice.action.field_cancel_date'] = "Datum"; //en: "'Specific Date'"
$lang['AdminClients.editservice.action.field_cancel_none'] = "Nicht abbrechen"; //en: "'Do not cancel'"
$lang['AdminClients.editservice.action.field_date_renews'] = "Erneuerungsdatum"; //en: "'Date Renews'"
$lang['AdminClients.editservice.action.field_suspension_reason'] = "Grund für die Aussetzung"; //en: "'Reason for Suspension'"
$lang['AdminClients.editservice.action.field_cancellation_reason'] = "Grund der Stornierung"; //en: "'Reason for Cancellation'"
$lang['AdminClients.editservice.action.field_coupon_code'] = "Gutscheincode"; //en: "'Coupon Code'"

$lang['AdminClients.editservice.package.field_pricing'] = "Paket/Laufzeit"; //en: "'Package/Term'"
$lang['AdminClients.editservice.field_price_override'] = "Preis überschreiben"; //en: "'Override Price'"
$lang['AdminClients.editservice.field_override_price'] = "Preis"; //en: "'Price'"
$lang['AdminClients.editservice.field_current_coupon_code'] = "Aktueller Gutscheincode"; //en: "'Current Coupon Code'"
$lang['AdminClients.editservice.field_new_coupon_code'] = "Neuer Gutscheincode"; //en: "'New Coupon Code'"
$lang['AdminClients.editservice.tooltip_coupon_code'] = "Coupon muss gültig sein und wird angewendet, wenn der Service erneuert wird."; //en: "'Coupon must be valid, and will be applied when service renews.'"

// Service info
$lang['AdminClients.serviceinfo.no_results'] = "Dieser Dienst hat keine Details."; //en: "'This service has no details.'"
$lang['AdminClients.serviceinfo.cancellation_reason'] = "Kündigungsgrund: %1\$s"; // %1$s is the reason this service was canceled"; //en: "'Reason for Cancellation: %1$s'; // %1$s is the reason this service was canceled"

// Make Payment
$lang['AdminClients.makepayment.page_title'] = "Bezahlen für Kunde #%1\$s"; // %1$s is the client ID number"; //en: "'Client #%1$s Make Payment'; // %1$s is the client ID number"
$lang['AdminClients.makepayment.boxtitle_makepayment'] = "Zahlung ausführen"; //en: "'Make Payment'"
$lang['AdminClients.makepayment.heading_paymentaccount'] = "Finanzierung"; //en: "'Funding'"
$lang['AdminClients.makepayment.field_paymentaccount'] = "%1\$s %2\$s - %3\$s x%4\$s"; // %1$s is the account first name, %2$s is the account last name, %3$s is the account type (card type or bank account type), %4$s is the last 4 of the account"; //en: "'%1$s %2$s - %3$s x%4$s'; // %1$s is the account first name, %2$s is the account last name, %3$s is the account type (card type or bank account type), %4$s is the last 4 of the account"
$lang['AdminClients.makepayment.field_paymentaccount_autodebit'] = "(Lastschrift) %1\$s %2\$s - %3\$s x%4\$s"; // %1$s is the account first name, %2$s is the account last name, %3$s is the account type (card type or bank account type), %4$s is the last 4 of the account"; //en: "'(Auto Debit) %1$s %2$s - %3$s x%4$s'; // %1$s is the account first name, %2$s is the account last name, %3$s is the account type (card type or bank account type), %4$s is the last 4 of the account"
$lang['AdminClients.makepayment.field_paymentaccount_ach'] = "Bankkonten"; //en: "'ACH Accounts'"
$lang['AdminClients.makepayment.field_paymentaccount_cc'] = "Kreditkarten Konten"; //en: "'Credit Card Accounts'"
$lang['AdminClients.makepayment.field_submit'] = "Weiter"; //en: "'Continue'"
$lang['AdminClients.makepayment.field_useaccount'] = "Zahlungsart nutzen"; //en: "'Use Payment Account'"
$lang['AdminClients.makepayment.field_newdetails'] = "Neue Zahlungsinformationen"; //en: "'New Payment Details'"
$lang['AdminClients.makepayment.boxtitle_makepaymentamount'] = "Zahlen"; //en: "'Make Payment'"
$lang['AdminClients.makepayment.record_invoice'] = "Zahlung auf Rechnung #%1\$s anwenden, anstatt"; // %1$s is the invoice number"; //en: "'Record Payment for Invoice #%1$s, instead'; // %1$s is the invoice number"
$lang['AdminClients.makepayment.record_payment'] = "Rekordzahlung statt"; //en: "'Record Payment instead'"

$lang['AdminClients.makepaymentamount.heading_invoices'] = "Rechnungsauswahl"; //en: "'Invoice Selection'"
$lang['AdminClients.makepaymentamount.field_submit'] = "Überprüfen und Bestätigen"; //en: "'Review and Confirm'"
$lang['AdminClients.makepaymentamount.field_receipt'] = "E-Mail Empfänger"; //en: "'Email Receipt'"
$lang['AdminClients.makepaymentamount.field_credit'] = "Anderer Betrag zum zahlen"; //en: "'Other Payment Amount'"
$lang['AdminClients.makepaymentamount.field_currency'] = "Währung"; //en: "'Currency'"
$lang['AdminClients.makepaymentamount.text_amount'] = "Zu zahlender Betrag"; //en: "'Amount to Pay'"
$lang['AdminClients.makepaymentamount.text_due'] = "Fälliger Betrag"; //en: "'Amount Due'"
$lang['AdminClients.makepaymentamount.text_invoice'] = "Rechnung #"; //en: "'Invoice #'"
$lang['AdminClients.makepaymentamount.text_datedue'] = "Faelligkeitsdatum"; //en: "'Date Due'"
$lang['AdminClients.makepaymentamount.no_results'] = "Es gibt keine Rechnungen in dieser Währung."; //en: "'There are no invoices in this currency.'"

$lang['AdminClients.makepaymentconfirm.boxtitle_makepaymentconfirm'] = "Zahlung bestätigen"; //en: "'Confirm Payment'"
$lang['AdminClients.makepaymentconfirm.field_submit'] = "Zahlung bestätgen"; //en: "'Submit Payment'"
$lang['AdminClients.makepaymentconfirm.field_edit'] = "Zahlung bearbeiten"; //en: "'Edit Payment'"
$lang['AdminClients.makepaymentconfirm.text_amount'] = "Betrag zum Anwenden"; //en: "'Amount to Apply'"
$lang['AdminClients.makepaymentconfirm.text_due'] = "Offener Betrag"; //en: "'Amount Due'"
$lang['AdminClients.makepaymentconfirm.text_invoice'] = "Rechnung #"; //en: "'Invoice #'"
$lang['AdminClients.makepaymentconfirm.text_datedue'] = "Fällig am"; //en: "'Date Due'"
$lang['AdminClients.makepaymentconfirm.account_info'] = "%1\$s (%2\$s) endet auf %3\$s"; // %1$s is the account type (Credit Card or ACH), %2$s is the type (Savings, Checking, MasterCard, etc.) and %3$s is the last 4 digits of the account"; //en: "'%1$s (%2$s) ending in %3$s'; // %1$s is the account type (Credit Card or ACH), %2$s is the type (Savings, Checking, MasterCard, etc.) and %3$s is the last 4 digits of the account"
$lang['AdminClients.makepaymentconfirm.account_info_type'] = "%1\$s"; // %1$s is the account type (Credit Card or ACH)"; //en: "'%1$s'; // %1$s is the account type (Credit Card or ACH)"
$lang['AdminClients.makepaymentconfirm.account_exp'] = "Läuft ab %1\$s"; // %1$s is the date the credit card expires"; //en: "'expires %1$s'; // %1$s is the date the credit card expires"
$lang['AdminClients.makepaymentconfirm.total'] = "Total:"; //en: "'Total:'"
$lang['AdminClients.makepaymentconfirm.payment_details'] = "Zahlungsdetails"; //en: "'Payment Details'"
$lang['AdminClients.makepaymentconfirm.email_receipt'] = "E-Mail Rechnung"; //en: "'Email Receipt'"
$lang['AdminClients.makepaymentconfirm.email_receipt_yes'] = "Ja"; //en: "'Yes'"
$lang['AdminClients.makepaymentconfirm.email_receipt_no'] = "Nein"; //en: "'No'"
$lang['AdminClients.recordpaymentconfirm.trans_info_credit'] = "Guthaben Hinzufügen"; //en: "'Apply Credit'"
$lang['AdminClients.makepaymentconfirm.trans_info_detailed'] = "%1\$s Zahlung #%2\$s"; // %1$s is the payment type, %2$s is the transaction number"; //en: "'%1$s Payment #%2$s'; // %1$s is the payment type, %2$s is the transaction number"
$lang['AdminClients.makepaymentconfirm.trans_info'] = "%1\$s Zahlung"; // %1$s is the payment type"; //en: "'%1$s Payment'; // %1$s is the payment type"


// Record Payment
$lang['AdminClients.recordpayment.page_title'] = "Kunde #%1\$s Zahlung erfassen"; // %1$s is the client ID number"; //en: "'Client #%1$s Record Payment'; // %1$s is the client ID number"
$lang['AdminClients.recordpayment.boxtitle_recordpayment'] = "Zahlung aufnehmen"; //en: "'Record Payment'"
$lang['AdminClients.recordpayment.field_receipt'] = "Email Quittung"; //en: "'Email Receipt'"
$lang['AdminClients.recordpayment.field_amount'] = "Zahlungsbetrag"; //en: "'Payment Amount'"
$lang['AdminClients.recordpayment.field_payment_type_record'] = "Neue Zahlung aufnehmen"; //en: "'Record New Payment'"
$lang['AdminClients.recordpayment.field_payment_type_credit'] = "Guthaben (%1\$s) anwenden"; // %1$s is the formatted credit amount"; //en: "'Apply Credit (%1$s)'; // %1$s is the formatted credit amount"
$lang['AdminClients.recordpayment.field_currency'] = "Währung"; //en: "'Currency'"
$lang['AdminClients.recordpayment.field_status'] = "Status"; //en: "'Status'"
$lang['AdminClients.recordpayment.field_datereceived'] = "Empfangen am"; //en: "'Date Received'"
$lang['AdminClients.recordpayment.field_transaction_id'] = "Check/ID #"; //en: "'Check/ID #'"
$lang['AdminClients.recordpayment.field_transactiontype'] = "Zahlungsart"; //en: "'Payment Type'"
$lang['AdminClients.recordpayment.field_gateway_id'] = "Zahlungs-Gateway"; //en: "'Payment Gateway'"
$lang['AdminClients.recordpayment.field_submit'] = "Fortsetzen"; //en: "'Continue'"
$lang['AdminClients.recordpayment.text_datereceived'] = "Empfangsdatum setzen"; //en: "'Set Date Received'"
$lang['AdminClients.recordpayment.gateway_none'] = "Kein"; //en: "'None'"

$lang['AdminClients.recordpaymentconfirm.boxtitle_recordconfirm'] = "Zahlung Bestätigen"; //en: "'Confirm Payment'"
$lang['AdminClients.recordpaymentconfirm.total'] = "Total:"; //en: "'Total:'"
$lang['AdminClients.recordpaymentconfirm.payment_details'] = "Zahlungsdetails"; //en: "'Payment Details'"
$lang['AdminClients.recordpaymentconfirm.email_receipt'] = "Email Empfänger"; //en: "'Email Receipt'"
$lang['AdminClients.recordpaymentconfirm.email_receipt_yes'] = "Ja"; //en: "'Yes'"
$lang['AdminClients.recordpaymentconfirm.email_receipt_no'] = "Nein"; //en: "'No'"
$lang['AdminClients.recordpaymentconfirm.trans_info_detailed'] = "%1\$s Zahlung #%2\$s"; // %1$s is the payment type, %2$s is the transaction number"; //en: "'%1$s Payment #%2$s'; // %1$s is the payment type, %2$s is the transaction number"
$lang['AdminClients.recordpaymentconfirm.trans_info'] = "%1\$s Zahlung"; // %1$s is the payment type"; //en: "'%1$s Payment'; // %1$s is the payment type"
$lang['AdminClients.recordpaymentconfirm.field_submit'] = "Zahlung abschicken"; //en: "'Submit Payment'"
$lang['AdminClients.recordpaymentconfirm.field_edit'] = "Zahlung bearbeiten"; //en: "'Edit Payment'"


// Set Contact Info
$lang['AdminClients.setcontactview.text_none'] = "Keine"; //en: "'None'"


// Services
$lang['AdminClients.services.page_title'] = "Kunde #%1\$s Produkte"; // %1$s is the client ID number"; //en: "'Client #%1$s Services'; // %1$s is the client ID number"
$lang['AdminClients.services.boxtitle_services'] = "Dienstleistungen"; //en: "'Services'"

$lang['AdminClients.services.heading_addons'] = "Erweiterungen"; //en: "'Add-ons'"
$lang['AdminClients.services.heading_status'] = "Status"; //en: "'Status'"

$lang['AdminClients.services.heading_package'] = "Paket"; //en: "'Package'"
$lang['AdminClients.services.heading_label'] = "Etikett"; //en: "'Label'"
$lang['AdminClients.services.heading_term'] = "Begriff"; //en: "'Term'"
$lang['AdminClients.services.heading_datecreated'] = "Erstellungsdatum"; //en: "'Date Created'"
$lang['AdminClients.services.heading_daterenews'] = "Erneuerungsdatum"; //en: "'Date Renews'"
$lang['AdminClients.services.heading_datesuspended'] = "Suspendierungsdatum"; //en: "'Date Suspended'"
$lang['AdminClients.services.heading_datecanceled'] = "Datum Storniert "; //en: "'Date Canceled'"
$lang['AdminClients.services.heading_options'] = "Optionen"; //en: "'Options'"

$lang['AdminClients.services.category_active'] = "Aktiv"; //en: "'Active'"
$lang['AdminClients.services.category_pending'] = "Ausstehend"; //en: "'Pending'"
$lang['AdminClients.services.category_suspended'] = "Suspendiert"; //en: "'Suspended'"
$lang['AdminClients.services.category_canceled'] = "Storniert"; //en: "'Canceled'"

$lang['AdminClients.services.categorylink_newservice'] = "Neue Dienstleistung"; //en: "'New Service'"

$lang['AdminClients.services.recurring_term'] = "%1\$s %2\$s @ %3\$s"; // %1$s is the service term length (number), %2$s is the service period, %3$s is the formatted service renewal price"; //en: "'%1$s %2$s @ %3$s'; // %1$s is the service term length (number), %2$s is the service period, %3$s is the formatted service renewal price"
$lang['AdminClients.services.option_manage'] = "Verwalten"; //en: "'Manage'"
$lang['AdminClients.services.option_delete'] = "Löschen"; //en: "'Delete'"
$lang['AdminClients.services.confirm_delete'] = "Sind Sie sicher, dass Sie diesen Dienst löschen wollen?"; //en: "'Are you sure you want to delete this service?'"
$lang['AdminClients.services.no_results'] = "Es gibt keine Dienste mit diesem Status."; //en: "'There are no services with this status.'"

$lang['AdminClients.services.text_never'] = "Niemals"; //en: "'Never'"

$lang['AdminClients.services.action.schedule_cancellation'] = "Stornierung planen"; //en: "'Schedule Cancellation'"
$lang['AdminClients.services.action.invoice_renewal'] = "Rechnungserneuerung"; //en: "'Invoice Renewal'"
$lang['AdminClients.services.action.push_to_client'] = "Push-to-Client"; //en: "'Push to Client'"
$lang['AdminClients.services.action.field_action_type_term'] = "Ende der Periode"; //en: "'End of Term'"
$lang['AdminClients.services.action.field_action_type_date'] = "Bestimmtes Datum"; //en: "'Specific Date'"
$lang['AdminClients.services.action.field_action_type_none'] = "Nicht abbrechen"; //en: "'Do not cancel'"
$lang['AdminClients.services.action.field_cycles'] = "Anzahl der Zyklen"; //en: "'Number of Cycles'"
$lang['AdminClients.services.action.field_client'] = "Kunde:"; //en: "'Client:'"
$lang['AdminClients.services.field_actionsubmit'] = "Abschicken"; //en: "'Submit'"


// Transactions
$lang['AdminClients.transactions.page_title'] = "Transaktionen von Kunde #%1\$s"; // %1$s is the client ID number"; //en: "'Client #%1$s Transactions'; // %1$s is the client ID number"
$lang['AdminClients.transactions.boxtitle_transactions'] = "Transaktionen"; //en: "'Transactions'"

$lang['AdminClients.transactions.heading_type'] = "Typ"; //en: "'Type'"
$lang['AdminClients.transactions.heading_amount'] = "Summe"; //en: "'Amount'"
$lang['AdminClients.transactions.heading_credited'] = "Aufgeführt"; //en: "'Credited'"
$lang['AdminClients.transactions.heading_applied'] = "Angewandt"; //en: "'Applied'"
$lang['AdminClients.transactions.heading_number'] = "Nummer"; //en: "'Number'"
$lang['AdminClients.transactions.heading_reference_id'] = "Referenz #"; //en: "'Reference #'"
$lang['AdminClients.transactions.heading_date'] = "Datum"; //en: "'Date'"
$lang['AdminClients.transactions.heading_options'] = "Einstellungen"; //en: "'Options'"

$lang['AdminClients.transactions.headingexpand_invoice'] = "Rechnung"; //en: "'Invoice'"
$lang['AdminClients.transactions.headingexpand_amount'] = "Betrag"; //en: "'Amount'"
$lang['AdminClients.transactions.headingexpand_appliedon'] = "Angewendet am"; //en: "'Applied On'"
$lang['AdminClients.transactions.headingexpand_options'] = "Einstellungen"; //en: "'Options'"

$lang['AdminClients.transactions.category_approved'] = "Bestätigt"; //en: "'Approved'"
$lang['AdminClients.transactions.category_declined'] = "Abgelehnt"; //en: "'Declined'"
$lang['AdminClients.transactions.category_voided'] = "Ungültig"; //en: "'Voided'"
$lang['AdminClients.transactions.category_error'] = "Fehler"; //en: "'Error'"
$lang['AdminClients.transactions.category_pending'] = "Laufend"; //en: "'Pending'"
$lang['AdminClients.transactions.category_refunded'] = "Erstattet"; //en: "'Refunded'"
$lang['AdminClients.transactions.category_returned'] = "Zurückgegeben"; //en: "'Returned'"

$lang['AdminClients.transactions.categorylink_payment'] = "Zahlung vornehmen"; //en: "'Make Payment'"

$lang['AdminClients.transactions.option_edit'] = "Bearbeiten"; //en: "'Edit'"
$lang['AdminClients.transactions.no_results'] = "Es gibt keine Transaktionen mit diesem Status."; //en: "'There are no transactions with this status.'"
$lang['AdminClients.transactions.applied_no_results'] = "Diese Transaktion wurde auf keine Rechnunge angewandt."; //en: "'This transaction has not been applied to any invoices.'"


// View
$lang['AdminClients.view.page_title'] = "Kunden #%1\$s Profil"; // %1$s is the client ID number"; //en: "'Client #%1$s Profile'; // %1$s is the client ID number"
$lang['AdminClients.view.boxtitle_client'] = "Kunde #%1\$s"; // %1$s is the client ID number"; //en: "'Client #%1$s'; // %1$s is the client ID number"
$lang['AdminClients.view.boxtitle_contacts'] = "Kontakte"; //en: "'Contacts'"

$lang['AdminClients.view.status_link'] = "(Klicken, um zu ändern)"; //en: "'(Click to change)'"

$lang['AdminClients.view.number'] = "(%1\$s %2\$s)"; // %1$s is the number location, %2$s is the number type"; //en: "'(%1$s %2$s)'; // %1$s is the number location, %2$s is the number type"
$lang['AdminClients.view.link_vcard'] = "vCard"; //en: "'vCard'"
$lang['AdminClients.view.link_notes'] = "Notizen"; //en: "'Notes'"
$lang['AdminClients.view.link_editclient'] = "Bearbeiten"; //en: "'Edit'"

$lang['AdminClients.view.setting_memberof'] = "Mitglied von"; //en: "'Member of'"
$lang['AdminClients.view.setting_invoicemethod'] = "Rechnungsart"; //en: "'Invoice Method'"
$lang['AdminClients.view.setting_autodebit'] = "Lastschrift"; //en: "'Auto Debit'"
$lang['AdminClients.view.setting_autosuspension'] = "Automatische Sperrung"; //en: "'Auto Suspension'"
$lang['AdminClients.view.setting_email_verification'] = "E-Mail-Verifizierung"; //en: "'Email Verification'"
$lang['AdminClients.view.setting_sublogin'] = "Sub Login"; //en: "'Sub Login'"
$lang['AdminClients.view.setting_send_payment_notices'] = "Zahlungsmitteilungen"; //en: "'Payment Notices'"

$lang['AdminClients.view.setting_enabled'] = "Aktiviert"; //en: "'Enabled'"
$lang['AdminClients.view.setting_disabled'] = "Deaktiviert"; //en: "'Disabled'"
$lang['AdminClients.view.setting_verified'] = "Verifiziert"; //en: "'Verified'"
$lang['AdminClients.view.setting_unverified'] = "Unbestätigt"; //en: "'Unverified'"
$lang['AdminClients.view.setting_unsent'] = "Unset"; //en: "'Unsent'"

$lang['AdminClients.view.member_since'] = "Kunde seit %1\$s"; // %1$s is the date the user signed up"; //en: "'Member since %1$s'; // %1$s is the date the user signed up"
$lang['AdminClients.view.member_last_seen'] = "Zuletzt am %1\$s von der IP-Adresse"; // %1$s is the date the user last logged in, NOTE: this phrase is expected to be followed by an IP address"; //en: "'Last seen %1$s from'; // %1$s is the date the user last logged in, NOTE: this phrase is expected to be followed by an IP address"
$lang['AdminClients.view.member_last_seen_never'] = "Niemals gesehen"; //en: "'Last seen never'"
$lang['AdminClients.view.tooltip_activity'] = "Letzte Aktivität"; //en: "'Last Activity'"
$lang['AdminClients.view.tooltip_location'] = "Standort"; //en: "'Location'"
$lang['AdminClients.view.tooltip_last_activity_now'] = "Gerade jetzt"; //en: "'Just Now'"
$lang['AdminClients.view.tooltip_last_activity_minute'] = "vor 1 Minute"; //en: "'1 minute ago'"
$lang['AdminClients.view.tooltip_last_activity_minutes'] = "vor %1\$s Minuten"; // %1$s is the number of minutes since the user's last activity"; //en: "'%1$s minutes ago'; // %1$s is the number of minutes since the user's last activity"
$lang['AdminClients.view.tooltip_autodebit_enabled'] = "Lastschrift ist aktiviert, aber kein Bankkonto für die automatische Abbuchung ausgewählt. Ein Bankkonto muss ausgewählt werden, bevor die Gebühren automatisch abgebucht werden."; //en: "'Auto Debit is enabled, but no payment accounts are selected for auto debit. A payment account must be selected before any charges will happen automatically.'"
$lang['AdminClients.view.delaysuspension_modal_title'] = "Verzögere Suspendierung"; //en: "'Delay Suspension'"

$lang['AdminClients.view.actions_title'] = "Konto Aktionen"; //en: "'Account Actions'"
$lang['AdminClients.view.actionlink_createinvoice'] = "Rechnung erstellen"; //en: "'Create Invoice'"
$lang['AdminClients.view.actionlink_addservice'] = "Dienst hinzufügen"; //en: "'Add Service'"
$lang['AdminClients.view.actionlink_addcontact'] = "Kontakt hinzufügen"; //en: "'Add Contact'"
$lang['AdminClients.view.actionlink_makepayment'] = "Zahlung tätigen"; //en: "'Make Payment'"
$lang['AdminClients.view.actionlink_recordpayment'] = "Zahlung aufnehmen"; //en: "'Record Payment'"
$lang['AdminClients.view.actionlink_manageaccount'] = "Zahlungskonten"; //en: "'Payment Accounts'"
$lang['AdminClients.view.actionlink_addnote'] = "Notiz hinzufügen"; //en: "'Add Note'"
$lang['AdminClients.view.actionlink_setpackages'] = "Pakete setzen"; //en: "'Set Packages'"
$lang['AdminClients.view.actionlink_passwordreset'] = "Passwort Reset Senden"; //en: "'Send Password Reset'"
$lang['AdminClients.view.actionlink_viewmaillog'] = "Mail-Log ansehen"; //en: "'View Mail Log'"
$lang['AdminClients.view.actionlink_mergeclient'] = "Zusammenführen von Client"; //en: "'Merge Client'"
$lang['AdminClients.view.actionlink_deleteclient'] = "Kunde löschen"; //en: "'Delete Client'"
$lang['AdminClients.view.actionlink_emailclient'] = "E-Mail Client"; //en: "'Email Client'"
$lang['AdminClients.view.actionlink_login'] = "Als Kunde einloggen"; //en: "'Login as Client'"

$lang['AdminClients.view.actionlink_more'] = "Alle Aktionen anzeigen"; //en: "'Show All Actions'"
$lang['AdminClients.view.actionlink_less'] = "Empfohlene Aktionen anzeigen"; //en: "'Show Common Actions'"

$lang['AdminClients.view.confirm_delete'] = "Wollen sie diesen Kunden wirklich löschen?"; //en: "'Are you sure you want to delete this client?'"

$lang['AdminClients.view.contact_type'] = "(%1\$s)"; // %1$s is the client contact type (e.g. Billing)"; //en: "'(%1$s)'; // %1$s is the client contact type (e.g. Billing)"


// Get currency amounts partial
$lang['AdminClients.getcurrencyamounts.text_total_credits'] = "Totales Guthaben"; //en: "'Total Credit'"
$lang['AdminClients.getcurrencyamounts.text_total_due'] = "Insgesamt zu zahlen"; //en: "'Total Due'"


// Show card
$lang['AdminClients.showcard.modal_title'] = "Karte anzeigen"; //en: "'Show Card'"
$lang['AdminClients.showcard.field_passphrase'] = "Passphrase"; //en: "'Passphrase'"
$lang['AdminClients.showcard.field_staff_password'] = "Ihr Login-Passwort"; //en: "'Your login password'"
$lang['AdminClients.showcard.field_submit'] = "Abschicken"; //en: "'Submit'"
$lang['AdminClients.showcard.!error.passphrase'] = "Passwort ist ungültig."; //en: "'Passphrase is invalid.'"
$lang['AdminClients.showcard.!error.password'] = "Passwort ist ungültig."; //en: "'Password is invalid.'"

// Show account
$lang['AdminClients.showaccount.modal_title'] = "Konto anzeigen"; //en: "'Show Account'"
$lang['AdminClients.showaccount.field_passphrase'] = "Passphrase"; //en: "'Passphrase'"
$lang['AdminClients.showaccount.field_staff_password'] = "Ihr Login Passwort"; //en: "'Your login password'"
$lang['AdminClients.showaccount.field_submit'] = "Absenden"; //en: "'Submit'"
$lang['AdminClients.showaccount.!error.passphrase'] = "Passwort ist ungültig."; //en: "'Passphrase is invalid.'"
$lang['AdminClients.showaccount.!error.password'] = "Passwort ist ungültig."; //en: "'Password is invalid.'"

// Packages (Restricted)
$lang['AdminClients.packages.page_title'] = "Beschränkte Pakete von Kunde #%1\$s"; // %1$s is the client ID number"; //en: "'Client #%1$s Restricted Packages'; // %1$s is the client ID number"
$lang['AdminClients.packages.boxtitle_packages'] = "Eingeschränkte Pakete"; //en: "'Restricted Packages'"

$lang['AdminClients.packages.text_name'] = "Name"; //en: "'Name'"
$lang['AdminClients.packages.text_module'] = "Modul"; //en: "'Module'"

$lang['AdminClients.packages.field_packagesubmit'] = "Eingeschränkten Paketzugriff speichern"; //en: "'Save Restricted Package Access'"

$lang['AdminClients.packages.no_results'] = "Es gibt keine beschränkte Pakete."; //en: "'There are no restricted packages.'"


// Delay Suspension
$lang['AdminClients.delaysuspension.field_autosuspend_date'] = "Datum der Verzögerung der Aussetzung bis"; //en: "'Date to Delay Suspension Until'"
$lang['AdminClients.delaysuspension.text_clear'] = "Löschen"; //en: "'Clear'"
$lang['AdminClients.delaysuspension.field_save'] = "Speichern"; //en: "'Save'"

// Delete Client
$lang['AdminClients.delete.field_password'] = "Geben Sie Ihr Login-Passwort zur Bestätigung ein"; //en: "'Enter your login password to confirm'"
$lang['AdminClients.delete.field_submit'] = "Löschen"; //en: "'Delete'"
