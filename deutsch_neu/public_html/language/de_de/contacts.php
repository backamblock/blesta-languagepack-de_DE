<?php
/**
 * Language definitions for the Contacts model
 *
 * @package blesta
 * @subpackage blesta.language.de_de
 * @copyright Copyright (c) 2010, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

// Contact errors
$lang['Contacts.!error.client_id.exists'] = "Ungültige Kunden Nr."; //en: "'Invalid client ID.'"
$lang['Contacts.!error.user_id.exists'] = "Ungültige Benutzer-Id."; //en: "'Invalid user ID.'"
$lang['Contacts.!error.contact_type.format'] = "Ungültiger Kontakt Typ"; //en: "'Invalid contact type.'"
$lang['Contacts.!error.contact_type.inv_address_to'] = "Rechnungen werden an diesen Kontakt adressiert und müssen vor dem Aktualisieren dieses Kontakts geändert werden."; //en: "'Invoices are set to be addressed to this contact and must be changed before updating this contact.'"
$lang['Contacts.!error.contact_type_id.format'] = "Ungültige Kontakttyp-ID"; //en: "'Invalid contact type ID.'"
$lang['Contacts.!error.first_name.empty'] = "Bitte geben Sie einen Vornamen an."; //en: "'Please enter a first name.'"
$lang['Contacts.!error.last_name.empty'] = "Bitte gehen Sie einen Nachnamen an."; //en: "'Please enter a last name.'"
$lang['Contacts.!error.title.length'] = "Der Titel darf nicht länger als 64 Zeichen sein."; //en: "'Title length may not exceed 64 characters.'"
$lang['Contacts.!error.title.empty'] = "Bitte geben Sie einen Titel ein."; //en: "'Please enter a title.'"
$lang['Contacts.!error.company.length'] = "Die Länge des Unternehmens darf 128 Zeichen nicht überschreiten."; //en: "'Company length may not exceed 128 characters.'"
$lang['Contacts.!error.company.empty'] = "Bitte geben Sie eine Firma ein."; //en: "'Please enter a company.'"
$lang['Contacts.!error.email.format'] = "Ungültige Email Adresse"; //en: "'Invalid email address.'"
$lang['Contacts.!error.email.unique'] = "E-Mail-Adresse ist bereits vergeben."; //en: "'Email address is already taken.'"
$lang['Contacts.!error.city.empty'] = "Bitte geben Sie eine Stadt ein."; //en: "'Please enter a city.'"
$lang['Contacts.!error.state.length'] = "Die Staatslänge darf 3 Zeichen nicht überschreiten."; //en: "'State length may not exceed 3 characters.'"
$lang['Contacts.!error.state.country_exists'] = "Bitte wählen sie ein Land, dass zum ausgewählten Staat gehört."; //en: "'Please select the country that matches the selected state.'"
$lang['Contacts.!error.state.empty'] = "Bitte wählen Sie ein Bundesland / Bundesstaat"; //en: "'Please select a state/province.'"
$lang['Contacts.!error.country.length'] = "Landeskürzel darf nicht 3 Zeichen überschreiten."; //en: "'Country length may not exceed 3 characters.'"
$lang['Contacts.!error.country.empty'] = "Bitte wähle ein Land."; //en: "'Please select a country.'"
$lang['Contacts.!error.contact_id.exists'] = "Ungültige Kontakt ID."; //en: "'Invalid contact ID.'"
$lang['Contacts.!error.contact_id.primary'] = "Der primäre Kundenkontakt darf nicht gelöscht werden."; //en: "'The primary client contact may not be deleted.'"
$lang['Contacts.!error.address1.empty'] = "Bitte geben Sie die erste Zeile Ihrer Adresse ein."; //en: "'Please enter the first line of your address.'"
$lang['Contacts.!error.address2.empty'] = "Bitte geben Sie die zweite Zeile Ihrer Adresse ein."; //en: "'Please enter the second line of your address.'"
$lang['Contacts.!error.zip.empty'] = "Bitte geben Sie eine Postleitzahl ein."; //en: "'Please enter a zip/postal code.'"
$lang['Contacts.!error.phone.required'] = "Bitte geben Sie mindestens eine Telefonnummer ein."; //en: "'Please enter at least one phone number.'"
$lang['Contacts.!error.fax.required'] = 'Please enter at least one fax number.';


// Contact number errors
$lang['Contacts.!error.number.empty'] = "Bitte geben Sie eine Telefonnummer an."; //en: "'Please enter a contact number.'"
$lang['Contacts.!error.type.format'] = "Ungültiger Typ."; //en: "'Invalid type.'"
$lang['Contacts.!error.location.format'] = "Ungültiger Ort."; //en: "'Invalid location.'"
$lang['Contacts.!error.id.exists'] = "Ungültige Kontakt-ID-Nummer"; //en: "'Invalid contact number ID.'"

// Contact type errors
$lang['Contacts.!error.company_id.format'] = "Ungültige Firmen ID."; //en: "'Invalid company ID.'"
$lang['Contacts.!error.name.empty'] = "Bitte geben Sie einen Namen ein."; //en: "'Please enter a name.'"
$lang['Contacts.!error.is_lang.format'] = "is_lang muss eine Zahl sein."; //en: "'is_lang must be a number.'"
$lang['Contacts.!error.is_lang.length'] = "Die Länge von is_lang darf 1 Zeichen nicht überschreiten."; //en: "'is_lang length may not exceed 1 character.'"
$lang['Contacts.!error.contact_type_id.exists'] = "Ungültige Kontakttyp-ID"; //en: "'Invalid contact type ID.'"


// Text
$lang['Contacts.getcontacttypes.primary'] = "Primär"; //en: "'Primary'"
$lang['Contacts.getcontacttypes.billing'] = "Rechnung"; //en: "'Billing'"
$lang['Contacts.getcontacttypes.other'] = "Andere"; //en: "'Other'"

$lang['Contacts.getnumbertypes.phone'] = "Telefon"; //en: "'Phone'"
$lang['Contacts.getnumbertypes.fax'] = "Fax"; //en: "'Fax'"

$lang['Contacts.getnumberlocations.home'] = "Start"; //en: "'Home'"
$lang['Contacts.getnumberlocations.work'] = "Arbeit"; //en: "'Work'"
$lang['Contacts.getnumberlocations.mobile'] = "Mobil"; //en: "'Mobile'"

$lang['Contacts.getPermissionOptions.client_invoices'] = "Rechnungen"; //en: "'Invoices'"
$lang['Contacts.getPermissionOptions.client_services'] = "Dienstleistungen"; //en: "'Services'"
$lang['Contacts.getPermissionOptions.client_transactions'] = "Transaktionen"; //en: "'Transactions'"
$lang['Contacts.getPermissionOptions.client_contacts'] = "Kontakte"; //en: "'Contacts'"
$lang['Contacts.getPermissionOptions.client_accounts'] = "Zahlungskonten"; //en: "'Payment Accounts'"
$lang['Contacts.getPermissionOptions.client_emails'] = 'Email History';
$lang['Contacts.getPermissionOptions._invoice_delivery'] = "Rechnungszustellung"; //en: "'Invoice Delivery'"
$lang['Contacts.getPermissionOptions._credits'] = "Kredite"; //en: "'Credits'"
