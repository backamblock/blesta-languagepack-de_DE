<?php
/**
 * Language definitions for the Client Contacts controller/views
 *
 * @package blesta
 * @subpackage blesta.language.de_de
 * @copyright Copyright (c) 2010, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

// Success messages
$lang['ClientContacts.!success.contact_deleted'] = "Der Kontakt %1\$s %2\$s wurde erfolgreich gelöscht!"; // %1$s is the contact's first name, %2$s is the contact's last name"; //en: "'The contact %1$s %2$s was successfully deleted!'; // %1$s is the contact's first name, %2$s is the contact's last name"
$lang['ClientContacts.!success.contact_updated'] = "Der Kontakt wurde erfolgreich aktualisiert!"; //en: "'The contact was successfully updated!'"
$lang['ClientContacts.!success.contact_added'] = "Der Kontakt wurde erfolgreich erstellt!"; //en: "'The contact was successfully created!'"


// Info messages
$lang['ClientContacts.!info.no_contacts'] = "Sie haben derzeit keine Kontakte, fügen Sie unten Ihren ersten Kontakt hinzu."; //en: "You don't currently have any contacts, add your first contact below."
$lang['ClientContacts.!info.unverified_email'] = 'The email address associated to this contact has not been verified. A verification email has been sent to %1$s.'; // %1$s is the email address to be verified
$lang['ClientContacts.!info.unverified_email_button'] = 'Resend Verification Email';


// Index
$lang['ClientContacts.index.page_title'] = "Kunde #%1\$s Kontakte"; // %1$s is the client ID number"; //en: "'Client #%1$s Contacts'; // %1$s is the client ID number"

$lang['ClientContacts.index.create_contact'] = "Kontakt hinzufügen"; //en: "'Add Contact'"

$lang['ClientContacts.index.boxtitle_contacts'] = "Kontakte"; //en: "'Contacts'"
$lang['ClientContacts.index.heading_name'] = "Name"; //en: "'Name'"
$lang['ClientContacts.index.heading_email'] = "Email"; //en: "'Email'"
$lang['ClientContacts.index.heading_type'] = "Typ"; //en: "'Type'"
$lang['ClientContacts.index.heading_options'] = "Optionen"; //en: "'Options'"
$lang['ClientContacts.index.option_edit'] = "Bearbeiten"; //en: "'Edit'"
$lang['ClientContacts.index.option_delete'] = "Löschen"; //en: "'Delete'"

$lang['ClientContacts.index.confirm_delete'] = "Möchten Sie diesen Kontakt wirklich löschen?"; //en: "'Are you sure you want to delete this contact?'"

$lang['ClientContacts.index.no_results'] = "Sie haben keine Kontakte. Klicken Sie auf den Knopf unten, um Kontakte hinzuzufügen."; //en: "'You have no contacts. To add your first contact, click the Add Contact button above.'"


// Add contact
$lang['ClientContacts.add.heading_contact'] = "Kontaktinformation"; //en: "'Contact Information'"
$lang['ClientContacts.add.page_title'] = "Kunde #%1\$s Kontakt hinzufügen"; // %1$s is the client ID number"; //en: "'Client #%1$s Add Contact'; // %1$s is the client ID number"
$lang['ClientContacts.add.boxtitle_create'] = "Kontakt hinzufügen"; //en: "'Add Contact'"

$lang['ClientContacts.add.heading_settings'] = "Zusätzliche Einstellungen"; //en: "'Additional Settings'"
$lang['ClientContacts.add.field_contact_type'] = "Kontaktart"; //en: "'Contact Type'"
$lang['ClientContacts.add.field_addsubmit'] = "Kontakt erstellen"; //en: "'Create Contact'"

$lang['ClientContacts.add.heading_authentication'] = "Authentifizierung"; //en: "'Authentication'"
$lang['ClientContacts.add.field_enable_login'] = "Aktivieren Sie die Anmeldung"; //en: "'Enable Login'"
$lang['ClientContacts.add.field_username'] = "Nutzername"; //en: "'Username'"
$lang['ClientContacts.add.field_new_password'] = "Neues Kennwort"; //en: "'New Password'"
$lang['ClientContacts.add.field_confirm_password'] = "Passwort Bestätigen"; //en: "'Confirm Password'"

$lang['ClientContacts.add.heading_permissions'] = "Berechtigungen"; //en: "'Permissions'"


// Edit contact
$lang['ClientContacts.edit.heading_contact'] = "Kontakt-Informationen"; //en: "'Contact Information'"
$lang['ClientContacts.edit.page_title'] = "Client # %1\$s Kontakt bearbeiten"; // %1$s is the client ID number"; //en: "'Client #%1$s Edit Contact'; // %1$s is the client ID number"
$lang['ClientContacts.edit.boxtitle_edit'] = "Kontakt bearbeiten"; //en: "'Edit Contact'"

$lang['ClientContacts.edit.heading_settings'] = "Zusätzliche Einstellungen"; //en: "'Additional Settings'"
$lang['ClientContacts.edit.field_contact_type'] = "Kontakt Typ"; //en: "'Contact Type'"
$lang['ClientContacts.edit.field_editsubmit'] = "Kontakt aktualisieren"; //en: "'Update Contact'"

$lang['ClientContacts.edit.heading_settings'] = 'Additional Settings';

$lang['ClientContacts.edit.heading_authentication'] = "Authentifizierung"; //en: "'Authentication'"
$lang['ClientContacts.edit.field_enable_login'] = "Login aktivieren"; //en: "'Enable Login'"
$lang['ClientContacts.edit.field_username'] = "Benutzername"; //en: "'Username'"
$lang['ClientContacts.edit.field_new_password'] = "Neues Kennwort"; //en: "'New Password'"
$lang['ClientContacts.edit.field_confirm_password'] = "Passwort bestätigen"; //en: "'Confirm Password'"

$lang['ClientContacts.edit.heading_permissions'] = "Berechtigungen"; //en: "'Permissions'"

$lang['ClientContacts.tooltip.client_invoices'] = "Zeigen Sie Rechnungen auf dem Dashboard an sowie Benachrichtigungen zur Zahlungserinnerung."; //en: "'Display Invoices on the dashboard, as well as any payment reminder alerts.'"
$lang['ClientContacts.tooltip.client_services'] = "Zeigen Sie Dienste auf dem Dashboard an, und lassen Sie sie verwalten."; //en: "'Display Services on the dashboard, and allow them to be managed.'"
$lang['ClientContacts.tooltip.client_transactions'] = "Transaktionen im Dashboard anzeigen"; //en: "'Display Transactions on the dashboard.'"
$lang['ClientContacts.tooltip.client_contacts'] = "Erlaube, dass Kontakte verwaltet werden."; //en: "'Allow Contacts to be managed.'"
$lang['ClientContacts.tooltip.client_accounts'] = "Verwalten von Zahlungskonten erlauben."; //en: "'Allow Payment Accounts to be managed.'"
$lang['ClientContacts.tooltip.client_emails'] = 'Display a list of email history.';
$lang['ClientContacts.tooltip._invoice_delivery'] = "Lassen Sie die Rechnungsanlieferungsmethode angezeigt und geändert werden."; //en: "'Allow the invoice delivery method to be viewed and changed.'"
$lang['ClientContacts.tooltip._credits'] = "Erlauben Sie das Anzeigen der Kontoguthaben."; //en: "'Allow the account credits to be viewed.'"


// Set Contact View
$lang['ClientContacts.setcontactview.text_none'] = "Keiner"; //en: "'None'"


// Contact Info partial
$lang['ClientContacts.contact_info.heading_contact'] = "Kontakt Informationen"; //en: "'Contact Information'"
$lang['ClientContacts.contact_info.text_select_contact'] = "Sie können einen bestehenden Vertrag angeben, um dieses Formular mit vorgeschlagenen Werten zu befüllen."; //en: "'You may select an existing contact to pre-populate this form.'"

$lang['ClientContacts.contact_info.field_contact_id'] = "Kontaktinformationen kopieren von"; //en: "'Copy Contact Information From'"
$lang['ClientContacts.contact_info.field_first_name'] = "Vorname"; //en: "'First Name'"
$lang['ClientContacts.contact_info.field_last_name'] = "Nachname"; //en: "'Last Name'"
$lang['ClientContacts.contact_info.field_company'] = "Firma"; //en: "'Company'"
$lang['ClientContacts.contact_info.field_title'] = "Titel"; //en: "'Title'"
$lang['ClientContacts.contact_info.field_address1'] = "Adresse 1"; //en: "'Address 1'"
$lang['ClientContacts.contact_info.field_address2'] = "Adresse 2"; //en: "'Address 2'"
$lang['ClientContacts.contact_info.field_city'] = "Stadt"; //en: "'City'"
$lang['ClientContacts.contact_info.field_country'] = "Land"; //en: "'Country'"
$lang['ClientContacts.contact_info.field_state'] = "Bundesstaat"; //en: "'State'"
$lang['ClientContacts.contact_info.field_zip'] = "Postleitzahl"; //en: "'Zip/Postal Code'"
$lang['ClientContacts.contact_info.field_email'] = "Email"; //en: "'Email'"


// Phone Number partial
$lang['ClientContacts.phone_numbers.heading_phone'] = "Telefonnummern"; //en: "'Phone Numbers'"
$lang['ClientContacts.phone_numbers.categorylink_number'] = "Zusätzliche hinzufügen"; //en: "'Add Additional'"

$lang['ClientContacts.phone_numbers.field_phonetype'] = "Art"; //en: "'Type'"
$lang['ClientContacts.phone_numbers.field_phonelocation'] = "Standort"; //en: "'Location'"
$lang['ClientContacts.phone_numbers.field_phonenumber'] = "Nummer"; //en: "'Number'"
$lang['ClientContacts.phone_numbers.field_phoneoptions'] = "Optionen"; //en: "'Options'"
$lang['ClientContacts.phone_numbers.text_remove'] = "Entfernen"; //en: "'Remove'"


// Navigation
$lang['ClientContacts.navigation.nav_contacts'] = 'Contacts';
$lang['ClientContacts.navigation.nav_contacts_add'] = 'Add Contact';
$lang['ClientContacts.navigation.nav_return'] = 'Return to Dashboard';
