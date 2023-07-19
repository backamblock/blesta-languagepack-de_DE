<?php
/**
 * Language definitions for the Client Accounts controller/views
 *
 * @package blesta
 * @subpackage blesta.language.de_de
 * @copyright Copyright (c) 2010, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

// Success messages
$lang['ClientAccounts.!success.defaultaccount_updated'] = "Der Standard Account für die Bezahlung wurde gespeichert."; //en: "'The default payment account has been updated.'"
$lang['ClientAccounts.!success.defaultaccount_deleted'] = "Die Standard Zahlungsart wurde entfernt."; //en: "'The default payment account has been removed.'"
$lang['ClientAccounts.!success.account_created'] = "Das Zahlungskonto wurde erfolgreich erstellt."; //en: "'The payment account has been successfully created.'"
$lang['ClientAccounts.!success.ccaccount_deleted'] = "Das Zahlungskonto wurde erfolgreich gelöscht."; //en: "'The payment account has been successfully deleted.'"
$lang['ClientAccounts.!success.ccaccount_updated'] = "Der Zahlungsaccount wurde erfolgreich bearbeitet."; //en: "'The payment account has been successfully updated.'"
$lang['ClientAccounts.!success.achaccount_deleted'] = "Der Zahlungsaccount wurde erfolgreich gelöscht."; //en: "'The payment account has been successfully deleted.'"
$lang['ClientAccounts.!success.achaccount_updated'] = "Das Zahlungskonto wurde erfolgreich aktualisiert."; //en: "'The payment account has been successfully updated.'"
$lang['ClientAccounts.!success.achaccount_verified'] = 'The payment account has been successfully verified.';


// Error messages
$lang['ClientAccounts.!error.account_invalid'] = "Die angegebene Zahlungskontoart ist deaktiviert oder ungültig."; //en: "'The payment account type provided is disabled or invalid.'"
$lang['ClientAccounts.!error.payment_account_type_invalid'] = "Ungültiger Zahlungskontotyp"; //en: "'Invalid payment account type.'"


// Notice messages
$lang['ClientAccounts.!notice.disabled'] = "Die Möglichkeit, Zahlungskonten hinzuzufügen, ist derzeit deaktiviert."; //en: "'The ability to add payment accounts is currently disabled.'"
$lang['ClientAccounts.!notice.ach_disabled'] = "Lastschrift-Zahlungskonten sind derzeit deaktiviert und möglicherweise nicht aktualisiert."; //en: "'ACH payment accounts are currently disabled and may not be updated.'"
$lang['ClientAccounts.!notice.cc_disabled'] = "Kreditkartenzahlungskonten sind derzeit deaktiviert und können nicht aktualisiert werden."; //en: "'Credit card payment accounts are currently disabled and may not be updated.'"
$lang['ClientAccounts.!notice.reenable_autodebit'] = "Automatische Zahlungen wurden für dieses Konto deaktiviert, bitte kontaktieren Sie den Support um dies wieder zu reaktivieren. "; //en: "'Automatic payments have been specifically disabled for this account, please contact a staff member to reactivate. You may select a payment account as your default, but it will not be charged automatically until it has been reactivated by staff.'"


// Info messages
$lang['ClientAccounts.!info.account_info'] = "Zahlungskonten ermöglichen es Ihnen, Zahlungsinformationen zu archivieren und können zur Bezahlung von Rechnungen verwendet werden. Ein Zahlungskonto, das als Standardkonto ausgewählt ist, wird für automatische wiederkehrende Zahlungen verwendet."; //en: "'Payment accounts allow you to keep payment information on file and may be used to pay invoices. A payment account that is selected as the default account will be used for automatic recurring payments.'"
$lang['ClientAccounts.!info.no_accounts'] = "Sie haben derzeit keine Zahlungskonten. Fügen Sie unten Ihr erstes Zahlungskonto hinzu."; //en: "You don't currently have any payment accounts. Add your first payment account below."
$lang['ClientAccounts.!info.ach_verification'] = 'You need to verify this account before you can use it to make a payment.';
$lang['ClientAccounts.!info.ach_verification_edit'] = 'After editing this account, you will need to verify it before you can use it to make a payment.';


// Index
$lang['ClientAccounts.index.page_title'] = "Kunde #%1\$s Accounts"; // %1$s is the client ID number"; //en: "'Client #%1$s Accounts'; // %1$s is the client ID number"

$lang['ClientAccounts.index.create_account'] = "Zahlungskonto hinzufügen"; //en: "'Add Payment Account'"

$lang['ClientAccounts.index.boxtitle_accounts'] = "Zahlungsaccounts"; //en: "'Payment Accounts'"
$lang['ClientAccounts.index.heading_name'] = "Name"; //en: "'Name'"
$lang['ClientAccounts.index.heading_type'] = "Art"; //en: "'Type'"
$lang['ClientAccounts.index.heading_last4'] = "Letzte 4"; //en: "'Last 4'"
$lang['ClientAccounts.index.heading_options'] = "Optionen"; //en: "'Options'"
$lang['ClientAccounts.index.option_edit'] = "Bearbeiten"; //en: "'Edit'"
$lang['ClientAccounts.index.option_verify'] = 'Verify';
$lang['ClientAccounts.index.option_delete'] = "Löschen"; //en: "'Delete'"

$lang['ClientAccounts.index.type_cc'] = "%1\$s - %2\$s"; // %1$s is the account type (Credit Card) and %2$s is the type of account (MasterCard, Visa, etc.)"; //en: "'%1$s - %2$s'; // %1$s is the account type (Credit Card) and %2$s is the type of account (MasterCard, Visa, etc.)"
$lang['ClientAccounts.index.type_ach'] = "%1\$s - %2\$s"; // %1$s is the account type (ACH) and %2$s is the type of account (Checking or Savings)"; //en: "'%1$s - %2$s'; // %1$s is the account type (ACH) and %2$s is the type of account (Checking or Savings)"

$lang['ClientAccounts.index.confirm_delete'] = "Möchten Sie dieses Zahlungskonto wirklich löschen?"; //en: "'Are you sure you want to delete this payment account?'"

$lang['ClientAccounts.index.field_accountsubmit'] = "Aktiviere als standardmäßiges Zahlungskonto."; //en: "'Set as Default Payment Account'"
$lang['ClientAccounts.index.no_results'] = "Sie haben keine Zahlungskonten."; //en: "'You have no payment accounts.'"


// Add
$lang['ClientAccounts.add.page_title'] = "Kunde #%1\$s Zahlungskonto hinzufügen"; // %1$s is the client ID number"; //en: "'Client #%1$s Add Payment Account'; // %1$s is the client ID number"
$lang['ClientAccounts.add.heading_account_type'] = "Account Typ"; //en: "'Account Type'"
$lang['ClientAccounts.add.field_cc_type'] = "Kreditkarte"; //en: "'Credit Card'"
$lang['ClientAccounts.add.field_ach_type'] = "ACH"; //en: "'ACH'"
$lang['ClientAccounts.add.boxtitle_create'] = "Zahlungskonto hinzufügen"; //en: "'Add Payment Account'"
$lang['ClientAccounts.add.field_nextsubmit'] = "Fortsetzen"; //en: "'Continue'"
$lang['ClientAccounts.add.field_accountsubmit'] = "Account erstellen"; //en: "'Create Account'"


// Edit ACH
$lang['ClientAccounts.editach.page_title'] = "Kunde# %1\$s ACH-Konto bearbeiten"; // %1$s is the client ID number"; //en: "'Client #%1$s Edit ACH Account'; // %1$s is the client ID number"
$lang['ClientAccounts.editach.boxtitle_editach'] = "Bearbeite ACH Account"; //en: "'Edit ACH Account'"
$lang['ClientAccounts.editach.field_accountsubmit'] = "Konto bearbeiten"; //en: "'Edit Account'"


// Verify ACH
$lang['ClientAccounts.verifyach.page_title'] = "Kunde #%1\$s ACH-Konto verifizieren"; // %1$s is the client ID number"; //en: "'Client #%1$s Verify ACH Account'; // %1$s is the client ID number"
$lang['ClientAccounts.verifyach.boxtitle_verifyach'] = 'Verify ACH Account';
$lang['ClientAccounts.verifyach.field_firstdeposit'] = "Erste Einzahlung"; //en: "'First Deposit'"
$lang['ClientAccounts.verifyach.field_seconddeposit'] = 'Second Deposit';
$lang['ClientAccounts.verifyach.field_accountsubmit'] = 'Verify Account';


// Edit CC
$lang['ClientAccounts.editcc.page_title'] = "Kunde #%1\$s Kreditkarten Account bearbeiten"; // %1$s is the client ID number"; //en: "'Client #%1$s Edit Credit Card Account'; // %1$s is the client ID number"
$lang['ClientAccounts.editcc.boxtitle_editcc'] = "Kreditkartenkonto bearbeiten"; //en: "'Edit Credit Card Account'"
$lang['ClientAccounts.editcc.field_accountsubmit'] = "Account bearbeiten"; //en: "'Edit Account'"


// Set Contact view
$lang['ClientAccounts.setcontactview.text_none'] = "Leer"; //en: "'None'"

// Contact Info partial
$lang['ClientAccounts.contact_info.heading_contact'] = 'Contact Information';
$lang['ClientAccounts.contact_info.text_select_contact'] = 'You may select an existing contact to pre-populate this form.';

$lang['ClientAccounts.contact_info.field_contact_id'] = 'Copy Contact Information From';
$lang['ClientAccounts.contact_info.field_first_name'] = 'First Name';
$lang['ClientAccounts.contact_info.field_last_name'] = 'Last Name';
$lang['ClientAccounts.contact_info.field_company'] = 'Company';
$lang['ClientAccounts.contact_info.field_title'] = 'Title';
$lang['ClientAccounts.contact_info.field_address1'] = 'Address 1';
$lang['ClientAccounts.contact_info.field_address2'] = 'Address 2';
$lang['ClientAccounts.contact_info.field_city'] = "Stadt"; //en: "'City'"
$lang['ClientAccounts.contact_info.field_country'] = 'Country';
$lang['ClientAccounts.contact_info.field_state'] = 'State';
$lang['ClientAccounts.contact_info.field_zip'] = 'Zip/Postal Code';
$lang['ClientAccounts.contact_info.field_email'] = "E-Mail"; //en: "'Email'"

// Account CC info
$lang['ClientAccounts.cc_info.heading_cc'] = "Kreditkarteninformation"; //en: "'Credit Card Information'"
$lang['ClientAccounts.cc_info.field_number'] = "Nummer"; //en: "'Number'"
$lang['ClientAccounts.cc_info.field_security'] = "Sicherheits Code"; //en: "'Security Code'"
$lang['ClientAccounts.cc_info.field_expiration'] = "Ablaufdatum"; //en: "'Expiration Date'"
$lang['ClientAccounts.cc_info.field_savedetails'] = "Account speichern"; //en: "'Save Account'"
$lang['ClientAccounts.cc_info.tooltip_code'] = "Der 3- oder 4-stellige Sicherheitscode, der sich normalerweise auf der Rückseite der Karte befindet."; //en: "'The 3 or 4 digit security code, usually found on the back of the card.'"


// Account ACH info
$lang['ClientAccounts.ach_info.heading_ach'] = "Bankkonto Information"; //en: "'Bank Account Information'"
$lang['ClientAccounts.ach_info.field_type'] = "Typ"; //en: "'Type'"
$lang['ClientAccounts.ach_info.field_accountnum'] = "IBAN"; //en: "'Account Number'"
$lang['ClientAccounts.ach_info.field_routingnum'] = "Routingnummer"; //en: "'Routing Number'"
$lang['ClientAccounts.ach_info.field_savedetails'] = "Account speichern"; //en: "'Save Account'"


// Navigation
$lang['ClientAccounts.navigation.nav_dashboard'] = 'Dashboard';
$lang['ClientAccounts.navigation.nav_paymentaccounts'] = 'Payment Accounts';
$lang['ClientAccounts.navigation.nav_paymentaccounts_add'] = 'Add Payment Account';
$lang['ClientAccounts.navigation.nav_return'] = "Zurück zum Dashboard"; //en: "'Return to Dashboard'"
