<?php
/**
 * Language definitions for the Client Main controller/views
 *
 * @package blesta
 * @subpackage blesta.language.de_de
 * @copyright Copyright (c) 2010, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

// Success messages
$lang['ClientMain.!success.client_updated'] = "Ihr Konto Informationen wurden erfolgreich aktualisiert."; //en: "'Your account information has been successfully updated.'"
$lang['ClientMain.!success.invoice_method_updated'] = "Die Einstellung für den Versand zukünftiger Rechnungen wurde geändert, neue Rechnungen werden nun per %1\$s an Sie verschickt."; // %1$s is the clients invoice method (e.g. Email, Paper, etc.)"; //en: "'Your invoice method has been successfully updated. All future invoices will be delivered to you via %1$s.'; // %1$s is the clients invoice method (e.g. Email, Paper, etc.)"


// Info message
$lang['ClientMain.!info.invoice_due_title'] = "Willkommen zurück, %1\$s!"; // %1$s is the client's first name"; //en: "'Welcome back, %1$s!'; // %1$s is the client's first name"
$lang['ClientMain.!info.invoice_due_button'] = "Jetzt bezahlen"; //en: "'Make Payment'"
$lang['ClientMain.!info.invoice_past_due_button'] = "Überfällige Zahlung"; //en: "'Pay Past Due'"
$lang['ClientMain.!info.invoice_due_text'] = "Ihr Konto hat einen ausstehenden Betrag von %1\$s. Bitte machen Sie so bald wie möglich eine Zahlung."; // %1$s is the total amount due for this client"; //en: "'Your account has an outstanding balance of %1$s. Please make a payment at your earliest convenience.'; // %1$s is the total amount due for this client"
$lang['ClientMain.!info.invoice_due_past_due_text'] = "Ihr Konto hat ein ausstehendes Guthaben von %1\$s, von dem %2\$s überfällig ist. Bitte machen Sie eine Zahlung so schnell wie möglich."; // %1$s is the total amount due for this client, %2$s is the total amount past due for this client"; //en: "'Your account has an outstanding balance of %1$s, of which %2$s is past due. Please make a payment at your earliest convenience.'; // %1$s is the total amount due for this client, %2$s is the total amount past due for this client"
$lang['ClientMain.!info.invoice_due_other_currencies'] = "Sie haben auch einen ausstehenden Betrag in anderen Währungen."; //en: "'You have an outstanding balance in other currencies as well.'"
$lang['ClientMain.!info.service_in_review'] = "Die folgenden Dienstleistungen werden von Mitarbeitern überprüft. Nach der Genehmigung werden sie aktiviert:"; //en: "'The following services are pending review by staff. Once approved, they will be activated:'"
$lang['ClientMain.!info.service_name'] = "%1\$s - %2\$s"; // %1$s is the package name, %2$s is the service name"; //en: "'%1$s - %2$s'; // %1$s is the package name, %2$s is the service name"
$lang['ClientMain.!info.additional_service'] = "... und 1 zusätzlicher Service."; //en: "'...and 1 additional service.'"
$lang['ClientMain.!info.additional_services'] = "... und %1\$s zusätzliche Dienste."; // %1$s is the number of additional services"; //en: "'...and %1$s additional services.'; // %1$s is the number of additional services"
$lang['ClientMain.!info.email_pending_verification'] = 'Your email address is currently unverified. A verification email has been sent to %1$s.'; // %1$s is the email address to be verified
$lang['ClientMain.!info.email_pending_verification_button'] = "Verifizierungs-E-Mail erneut senden"; //en: "'Resend Verification Email'"
$lang['ClientMain.!info.no_contacts'] = 'There are no additional contacts.';


// Tooltips
$lang['ClientMain.!tooltip.invoice_method_email'] = "Die Rechnungen werden per E-Mail an die Adresse gesendet, die bei uns hinterlegt ist."; //en: "'Invoices will be emailed to the address we have on file.'"
$lang['ClientMain.!tooltip.invoice_method_paper'] = "Wir werden Rechnungen an die von uns hinterlegte Adresse drucken und versenden."; //en: "'We will print and mail invoices to the address we have on file.'"
$lang['ClientMain.!tooltip.invoice_method_interfax'] = "Wir faxen automatisch Rechnungen an die Faxnummer, die wir gespeichert haben. Wenn Sie diese Option auswählen, stellen Sie sicher, dass eine gültige Faxnummer angegeben ist."; //en: "'We will automatically fax invoices to the fax number we have on file. If selecting this option, please ensure that we have a valid fax number on file.'"
$lang['ClientMain.!tooltip.invoice_method_postalmethods'] = "Wir werden Rechnungen automatisch ausdrucken und an die von uns angegebene Adresse senden."; //en: "'We will automatically print and mail invoices to the address we have on file.'"


// Index
$lang['ClientMain.index.page_title'] = "Kunde #%1\$s"; // %1$s is the client ID number"; //en: "'Client #%1$s'; // %1$s is the client ID number"


// Myinfo
$lang['ClientMain.myinfo.page_title'] = "Kunde #%1\$s"; // %1$s is the client ID number"; //en: "'Client #%1$s'; // %1$s is the client ID number"

$lang['ClientMain.myinfo.client_id'] = "Client # %1\$s"; // %1$s is the client ID number"; //en: "'Client #%1$s'; // %1$s is the client ID number"
$lang['ClientMain.myinfo.setting_invoices'] = "Sie erhalten derzeit Rechnungen von %1\$s."; // %1$s is the clients invoice method (e.g. Email, Paper, etc.)"; //en: "'You are currently receiving invoices by %1$s.'; // %1$s is the clients invoice method (e.g. Email, Paper, etc.)"
$lang['ClientMain.myinfo.setting_autodebit_disabled'] = "Ihr Konto ist nicht für die automatische Zahlung eingerichtet."; //en: "'Your account is not set up for automatic payment.'"
$lang['ClientMain.myinfo.setting_autodebit_enabled'] = "Ihr Kundenkonto wird automatisch bei neuen Rechnungen belastet."; //en: "'Your account is set up for automatic payment.'"
$lang['ClientMain.myinfo.setting_autodebit_cc_zero_days'] = "Wir berechnen Ihre %1\$s am Tag der Zahlung mit dem Betrag x%2\$s."; // %1$s is the type of credit card (e.g. "Visa"), %2$s is the last 4 of the credit card number"; //en: "We'll charge your %1\$s ending in x%2\$s on the day payment is due."; // %1$s is the type of credit card (e.g. "Visa"), %2$s is the last 4 of the credit card number"
$lang['ClientMain.myinfo.setting_autodebit_ach_zero_days'] = "Ihr %1\$s Konto wird am Fälligkeitstag mit der Endung x%2\$s belastet."; // %1$s is the type of payment account to charge (e.g. "Checking"), %2$s is the last 4 of the account number"; //en: "We'll charge your %1\$s Account ending in x%2\$s on the day payment is due."; // %1$s is the type of payment account to charge (e.g. "Checking"), %2$s is the last 4 of the account number"
$lang['ClientMain.myinfo.setting_autodebit_cc_one_day'] = "Wir erheben Ihre %1\$s -Ende am Tag vor Fälligkeit der Zahlung in x %2\$s."; // %1$s is the type of credit card (e.g. "Visa"), %2$s is the last 4 of the credit card number"; //en: "We'll charge your %1\$s ending in x%2\$s the day before payment is due."; // %1$s is the type of credit card (e.g. "Visa"), %2$s is the last 4 of the credit card number"
$lang['ClientMain.myinfo.setting_autodebit_ach_one_day'] = "Wir berechnen Ihr %1\$s -Konto, das am Tag vor Fälligkeit der Zahlung in x %2\$s endet."; // %1$s is the type of payment account to charge (e.g. "Checking"), %2$s is the last 4 of the account number"; //en: "We'll charge your %1\$s Account ending in x%2\$s the day before payment is due."; // %1$s is the type of payment account to charge (e.g. "Checking"), %2$s is the last 4 of the account number"
$lang['ClientMain.myinfo.setting_autodebit_cc_days'] = "Wir berechnen Ihre %1\$s Tage, die in x %2\$s %3\$s Tagen vor Zahlung fällig sind."; // %1$s is the type of credit card (e.g. "Visa"), %2$s is the last 4 of the credit card number, %3$s is the plural number of days (two or more) before a payment is due when the client's payment account will be charged"; //en: "We'll charge your %1\$s ending in x%2\$s %3\$s days before payment is due."; // %1$s is the type of credit card (e.g. "Visa"), %2$s is the last 4 of the credit card number, %3$s is the plural number of days (two or more) before a payment is due when the client's payment account will be charged"
$lang['ClientMain.myinfo.setting_autodebit_ach_days'] = "Wir belasten Ihr %1\$s Konto mit einer Frist von x %2\$s %3\$s Tagen vor der Zahlung."; // %1$s is the type of payment account to charge (e.g. "Checking"), %2$s is the last 4 of the account number, %3$s is the plural number of days (two or more) before a payment is due when the client's payment account will be charged"; //en: "We'll charge your %1\$s Account ending in x%2\$s %3\$s days before payment is due."; // %1$s is the type of payment account to charge (e.g. "Checking"), %2$s is the last 4 of the account number, %3$s is the plural number of days (two or more) before a payment is due when the client's payment account will be charged"
$lang['ClientMain.myinfo.number'] = "(%1\$s %2\$s)"; // %1$s is the number location, %2$s is the number type"; //en: "'(%1$s %2$s)'; // %1$s is the number location, %2$s is the number type"

$lang['ClientMain.myinfo.contacts'] = "Kontakte"; //en: "'Contacts'"
$lang['ClientMain.myinfo.link_addcontact'] = 'Add Contact';

$lang['ClientMain.myinfo.setting_change'] = "Ändern?"; //en: "'Change this?'"

$lang['ClientMain.myinfo.link_editclient'] = "Bearbeiten"; //en: "'Change'"


// Edit Client
$lang['ClientMain.edit.heading_contact'] = "Kontaktinformation"; //en: "'Contact Information'"
$lang['ClientMain.edit.page_title'] = "Kunde #%1\$s Meine Informationen bearbeiten"; // %1$s is the client ID number"; //en: "'Client #%1$s Edit My Information'; // %1$s is the client ID number"
$lang['ClientMain.edit.boxtitle_edit'] = "Meine Informationen bearbeiten"; //en: "'Edit My Information'"

$lang['ClientMain.edit.heading_billing'] = "Abrechnungsdaten"; //en: "'Billing Information'"
$lang['ClientMain.edit.field_taxid'] = "Steuernummer / MwSt"; //en: "'Tax ID/VATIN'"
$lang['ClientMain.edit.field_default_currency'] = "Bevorzugte Währung"; //en: "'Preferred Currency'"
$lang['ClientMain.edit.field_invoiceaddress'] = "Rechnungsadresse"; //en: "'Address Invoices To'"

$lang['ClientMain.edit.heading_settings'] = "Zusätzliche Einstellungen"; //en: "'Additional Settings'"
$lang['ClientMain.edit.field_language'] = "Sprache"; //en: "'Language'"
$lang['ClientMain.edit.field_receive_email_marketing'] = "Ich möchte E-Mails über neue Produkte, Dienstleistungen und Angebote erhalten."; //en: "'I want to receive emails about new products, services, and offers.'"

$lang['ClientMain.edit.heading_authentication'] = "Authentifizierung"; //en: "'Authentication'"
$lang['ClientMain.edit.field_username'] = "Nutzername"; //en: "'Username'"
$lang['ClientMain.edit.field_new_password'] = "Neues Passwort"; //en: "'New Password'"
$lang['ClientMain.edit.field_confirm_password'] = "Passwort bestätigen"; //en: "'Confirm Password'"
$lang['ClientMain.edit.field_current_password'] = "Aktuelles Passwort"; //en: "'Current Password'"
$lang['ClientMain.edit.field_two_factor_mode'] = "Zwei-Faktor-Authentifizierung aktivieren"; //en: "'Enable Two-Factor Authentication'"
$lang['ClientMain.edit.two_factor_desc'] = "Bei der Zwei-Faktor-Authentifizierung handelt es sich um eine Sicherheitsfunktion, mit der Sie sich auf zwei Arten bei Ihrem Konto anmelden können. Wenn diese Option aktiviert ist, melden Sie sich mit Ihrem Benutzernamen und Kennwort in Ihrem Konto an und werden dann aufgefordert, ein Einmalkennwort einzugeben."; //en: "Two-Factor Authentication is a security feature in which you provide two means of identification to log into your account. If enabled, you'll log into your account with your username and password and then be prompted to enter a One-Time Password."
$lang['ClientMain.edit.two_factor_instructions'] = "Um die Zwei-Faktor-Authentifizierung zu verwenden, benötigen Sie ein TOTP-Token. Wenn Sie ein Android-, iOS- oder Windows-Mobilgerät verwenden, kann Ihr Telefon als Ihr Token fungieren und das erforderliche Einmalpasswort bereitstellen."; //en: "'In order to use Two-Factor Authentication, you need a TOTP token. If you have an Android, iOS, or Windows mobile device, your phone can act as your token and provide the necessary One-Time Password.'"
$lang['ClientMain.edit.two_factor_step1'] = "Laden Sie den Authenticator für Ihr Gerät herunter:"; //en: "'Download an Authenticator for your device:'"
$lang['ClientMain.edit.two_factor_step2'] = "Öffnen Sie die App, und scannen Sie den unten stehenden QR-Code ein, oder geben Sie den folgenden Schlüssel ein: %1\$s"; // %1$s is the key"; //en: "'Open the App, and scan the QR code below, or alternatively, enter one of the following keys:<br/>Hex - %1$s<br/>Base32 - %2$s'; // %1$s is the key"
$lang['ClientMain.edit.two_factor_step3'] = "Bestätigen Sie Ihr Einmalpasswort und klicken Sie dann auf \"Meine Informationen aktualisieren\". Sie müssen bei der nächsten Anmeldung Ihr Einmalpasswort eingeben."; //en: "Confirm your One-Time Password, then click \"Update My Information\". You'll be required to enter your One-Time Password the next time you log in."
$lang['ClientMain.edit.text_android'] = "Android"; //en: "'Android'"
$lang['ClientMain.edit.text_ios'] = "iOS"; //en: "'iOS'"
$lang['ClientMain.edit.text_windows'] = "Windows"; //en: "'Windows'"
$lang['ClientMain.edit.field_otp'] = "Einmaliges Passwort"; //en: "'One-Time Password'"

$lang['ClientMain.edit.field_editsubmit'] = "Meine Informationen aktualisieren"; //en: "'Update My Information'"




// Invoice Method
$lang['ClientMain.invoicemethod.page_title'] = "Kunden Nr. %1\$s Rechnungsmethode"; // %1$s is the client ID number"; //en: "'Client #%1$s Invoice Method'; // %1$s is the client ID number"

$lang['ClientMain.invoicemethod.boxtitle_inv_method'] = "Rechnungsart"; //en: "'Invoice Method'"
$lang['ClientMain.invoicemethod.text_invoice_method'] = "Ihre Rechnungsmethode ist die Methode, mit der wir Ihnen neue Rechnungen zukommen lassen."; //en: "'Your invoice method is the method that we deliver new invoices to you.'"
$lang['Clientmain.invoicemethod.field_methodsubmit'] = "Aktualisieren"; //en: "'Update'"


// Currency amounts
$lang['ClientMain.getcurrencyamounts.text_total_credits'] = "Credits:"; //en: "'Credits:'"
