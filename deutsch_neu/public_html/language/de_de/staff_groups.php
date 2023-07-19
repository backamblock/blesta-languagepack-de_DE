<?php
/**
 * Language definitions for the Staff Groups model
 *
 * @package blesta
 * @subpackage blesta.language.de_de
 * @copyright Copyright (c) 2010, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['StaffGroups.!error.staff_group_id.exists'] = "Ungültige Personal Gruppen-ID."; //en: "'Invalid staff group ID.'"
$lang['StaffGroups.!error.company_id.exists'] = "Ungültige Firmen ID."; //en: "'Invalid company ID.'"
$lang['StaffGroups.!error.name.empty'] = "Bitte einen Namen eingeben."; //en: "'Please enter a name.'"
$lang['StaffGroups.!error.name.length'] = "Die Länge des Namens darf 64 Zeichen nicht überschreiten."; //en: "'Name length may not exceed 64 characters.'"
$lang['StaffGroups.!error.no_company_id.exists'] = "Kann sich nicht anmelden, keiner Firma zugeordnet."; //en: "'Can not log in, not assigned to any company.'"
$lang['StaffGroups.!error.session_lock.valid'] = "Ungültiger Wert für Sitzungssperre"; //en: "'Invalid value specificed for session lock.'"
$lang['StaffGroups.!error.action.exists'] = "Die Aktion für die E-Mail Gruppe %1\$s existiert nicht."; // %1$s is the name of the email group action"; //en: "'The email group action %1$s does not exist.'; // %1$s is the name of the email group action"

$lang['StaffGroups.!error.num_staff.zero'] = "Die Gruppe %1\$s kann nicht gelöscht werden, da noch Mitglieder in dieser Gruppe sind"; // %1$s is the staff group name"; //en: "'The staff group, %1$s, could not be deleted because it currently has staff members assigned to it.'; // %1$s is the staff group name"

$lang['StaffGroups.permission_group.home'] = "Startseite"; //en: "'Home'"
$lang['StaffGroups.permission_group.clients'] = "Kunden"; //en: "'Clients'"
$lang['StaffGroups.permission_group.billing'] = "Abrechnung"; //en: "'Billing'"
$lang['StaffGroups.permission_group.packages'] = "Pakete"; //en: "'Packages'"
$lang['StaffGroups.permission_group.tools'] = "Werkzeuge"; //en: "'Tools'"
$lang['StaffGroups.permission_group.search'] = "Suche"; //en: "'Search'"
$lang['StaffGroups.permission_group.settings'] = "Einstellungen"; //en: "'Settings'"

$lang['StaffGroups.permissions.admin_main_calendar'] = "Kalender"; //en: "'Calendar'"

$lang['StaffGroups.permissions.admin_clients_view'] = "Kunden ansehen"; //en: "'View Client'"
$lang['StaffGroups.permissions.admin_clients_add'] = "Kunde hinzufügen"; //en: "'Add Client'"
$lang['StaffGroups.permissions.admin_clients_edit'] = "Client bearbeiten"; //en: "'Edit Client'"
$lang['StaffGroups.permissions.admin_clients_invoices'] = "Rechnungen auflisten"; //en: "'List Invoices'"
$lang['StaffGroups.permissions.admin_clients_viewinvoice'] = "Rechnung anzeigen"; //en: "'View Invoice'"
$lang['StaffGroups.permissions.admin_clients_createinvoice'] = "Rechnung erstellen"; //en: "'Create Invoice'"
$lang['StaffGroups.permissions.admin_clients_editinvoice'] = "Rechnung bearbeiten"; //en: "'Edit Invoice'"
$lang['StaffGroups.permissions.admin_clients_editrecurinvoice'] = "Bearbeiten Sie die wiederkehrende Rechnung"; //en: "'Edit Recurring Invoice'"
$lang['StaffGroups.permissions.admin_clients_deleteinvoice'] = "Rechnung löschen"; //en: "'Delete Invoice'"
$lang['StaffGroups.permissions.admin_clients_transactions'] = "Transaktionsliste"; //en: "'List Transactions'"
$lang['StaffGroups.permissions.admin_clients_edittransaction'] = "Bearbeite Transaktion"; //en: "'Edit Transaction'"
$lang['StaffGroups.permissions.admin_clients_services'] = "Dienstleistungen anzeigen"; //en: "'List Services'"
$lang['StaffGroups.permissions.admin_clients_addservice'] = "Dienst hinzufügen"; //en: "'Add Service'"
$lang['StaffGroups.permissions.admin_clients_editservice'] = "Dienstleistung bearbeiten"; //en: "'Edit Service'"
$lang['StaffGroups.permissions.admin_clients_deleteservice'] = "Dienst löschen"; //en: "'Delete Service'"
$lang['StaffGroups.permissions.admin_clients_addcontact'] = "Kontakt hinzufügen"; //en: "'Add Contact'"
$lang['StaffGroups.permissions.admin_clients_editcontact'] = "Kontakt ändern "; //en: "'Edit Contact'"
$lang['StaffGroups.permissions.admin_clients_deletecontact'] = "Kontakt löschen"; //en: "'Delete Contact'"
$lang['StaffGroups.permissions.admin_clients_quickupdate'] = "Schnelles Update"; //en: "'Quick Update'"
$lang['StaffGroups.permissions.admin_clients_recordpayment'] = "Record Zahlung"; //en: "'Record Payment'"
$lang['StaffGroups.permissions.admin_clients_makepayment'] = "Zahlung vornehmen"; //en: "'Make Payment'"
$lang['StaffGroups.permissions.admin_clients_accounts'] = "Zahlungskonten ansehen"; //en: "'View Payment Accounts'"
$lang['StaffGroups.permissions.admin_clients_addccaccount'] = "Kreditkartenzahlungskonto hinzufügen"; //en: "'Add Credit Card Payment Account'"
$lang['StaffGroups.permissions.admin_clients_addachaccount'] = "ACH-Zahlungskonto hinzufügen"; //en: "'Add ACH Payment Account'"
$lang['StaffGroups.permissions.admin_clients_editccaccount'] = "Kreditkartenkontokonto bearbeiten"; //en: "'Edit Credit Card Payment Account'"
$lang['StaffGroups.permissions.admin_clients_editachaccount'] = "ACH-Zahlungskonto bearbeiten"; //en: "'Edit ACH Payment Account'"
$lang['StaffGroups.permissions.admin_clients_deleteccaccount'] = "Kreditkarten Account löschen"; //en: "'Delete Credit Card Payment Account'"
$lang['StaffGroups.permissions.admin_clients_deleteachaccount'] = "Löschen Sie das ACH-Zahlungskonto"; //en: "'Delete ACH Payment Account'"
$lang['StaffGroups.permissions.admin_clients_notes'] = "Notizen anzeigen"; //en: "'View Notes'"
$lang['StaffGroups.permissions.admin_clients_addnote'] = "Notiz hinzufügen"; //en: "'Add Note'"
$lang['StaffGroups.permissions.admin_clients_editnote'] = "Notiz bearbeiten"; //en: "'Edit Note'"
$lang['StaffGroups.permissions.admin_clients_deletenote'] = "Notiz löschen"; //en: "'Delete Note'"
$lang['StaffGroups.permissions.admin_clients_packages'] = "Pakete einstellen"; //en: "'Set Packages'"
$lang['StaffGroups.permissions.admin_clients_email'] = "E-Mail-Client"; //en: "'Email Client'"
$lang['StaffGroups.permissions.admin_clients_emails'] = "Maillog anzeigen"; //en: "'View Maillog'"
$lang['StaffGroups.permissions.admin_clients_merge'] = "Kunde zusammenführen"; //en: "'Merge Client'"
$lang['StaffGroups.permissions.admin_clients_delete'] = "Kunde Löschen"; //en: "'Delete Client'"
$lang['StaffGroups.permissions.admin_clients_loginasclient'] = "Als Kunde einloggen"; //en: "'Login as Client'"
$lang['StaffGroups.permissions.admin_clients_passwordreset'] = 'Send Password Reset';

$lang['StaffGroups.permissions.admin_clients_service'] = "Service-Summen anzeigen"; //en: "'View Service Totals'"

$lang['StaffGroups.permissions.admin_billing_invoices'] = "Rechnungen"; //en: "'List Invoices'"
$lang['StaffGroups.permissions.admin_billing_services'] = "Services auflisten"; //en: "'List Services'"
$lang['StaffGroups.permissions.admin_billing_transactions'] = "Transaktionen auflisten"; //en: "'List Transactions'"
$lang['StaffGroups.permissions.admin_billing_printqueue'] = "Druckerwarteschlange"; //en: "'Print Queue'"
$lang['StaffGroups.permissions.admin_billing_batch'] = "Stapel"; //en: "'Batch'"

$lang['StaffGroups.permissions.admin_tools_convert_currency'] = "Währung umrechnen"; //en: "'Convert Currency'"
$lang['StaffGroups.permissions.admin_tools_logs'] = "Protokolle"; //en: "'Logs'"
$lang['StaffGroups.permissions.admin_tools_utilities'] = 'Utilities';
$lang['StaffGroups.permissions.admin_tools_renewals'] = 'Renewal Queue';

$lang['StaffGroups.permissions.admin_packages_add'] = "Paket hinzufügen"; //en: "'Add Package'"
$lang['StaffGroups.permissions.admin_packages_edit'] = "Paket bearbeiten"; //en: "'Edit Package'"
$lang['StaffGroups.permissions.admin_packages_delete'] = "Paket löschen"; //en: "'Delete Package'"
$lang['StaffGroups.permissions.admin_packages_groups'] = "Paketgruppen anzeigen"; //en: "'View Package Groups'"

$lang['StaffGroups.permissions.admin_settings_company'] = "Firmen Einstellung"; //en: "'Company settings'"
$lang['StaffGroups.permissions.admin_company_general_localization'] = "Lokalisierung"; //en: "'Localization'"
$lang['StaffGroups.permissions.admin_company_general_international'] = "Internationalisierung"; //en: "'Internationalization'"
$lang['StaffGroups.permissions.admin_company_general_themes'] = "Themen"; //en: "'Themes'"
$lang['StaffGroups.permissions.admin_company_general_addtheme'] = "Themes hinzufügen"; //en: "'Add themes'"
$lang['StaffGroups.permissions.admin_company_general_edittheme'] = "Theme bearbeiten"; //en: "'Edit Theme'"
$lang['StaffGroups.permissions.admin_company_general_deletetheme'] = "Theme löschen"; //en: "'Delete Theme'"
$lang['StaffGroups.permissions.admin_company_general_encryption'] = "Verschlüsselung"; //en: "'Encryption'"
$lang['StaffGroups.permissions.admin_company_general_marketing'] = "Marketing"; //en: "'Marketing'"
$lang['StaffGroups.permissions.admin_company_general_smartsearch'] = "Intelligente Suche"; //en: "'Smart Search'"
$lang['StaffGroups.permissions.admin_company_general_humanverification'] = 'Human Verification';
$lang['StaffGroups.permissions.admin_company_billing_invoices'] = "Rechnungs- und Gebührenoptionen"; //en: "'Invoice and Charge Options'"
$lang['StaffGroups.permissions.admin_company_billing_customization'] = "Rechnungsanpassung"; //en: "'Invoice Customization'"
$lang['StaffGroups.permissions.admin_company_billing_deliverymethods'] = "Rechnungslieferung"; //en: "'Invoice Delivery'"
$lang['StaffGroups.permissions.admin_company_billing_latefees'] = 'Late Fees';
$lang['StaffGroups.permissions.admin_company_billing_notices'] = 'Notices';
$lang['StaffGroups.permissions.admin_company_billing_coupons'] = "Gutscheine"; //en: "'Coupons'"
$lang['StaffGroups.permissions.admin_company_billing_addcoupon'] = "Coupon hinzufügen"; //en: "'Add Coupon'"
$lang['StaffGroups.permissions.admin_company_billing_editcoupon'] = "Gutschein bearbeiten"; //en: "'Edit Coupon'"
$lang['StaffGroups.permissions.admin_company_billing_deletecoupon'] = "Gutschein löschen"; //en: "'Delete Coupon'"
$lang['StaffGroups.permissions.admin_company_lookandfeel'] = "Aussehen und Gefühl"; //en: "'Look and Feel'"
$lang['StaffGroups.permissions.admin_company_lookandfeel_actions'] = 'Custom Actions';
$lang['StaffGroups.permissions.admin_company_lookandfeel_addaction'] = 'Add Action';
$lang['StaffGroups.permissions.admin_company_lookandfeel_editaction'] = "Aktion bearbeiten"; //en: "'Edit Action'"
$lang['StaffGroups.permissions.admin_company_lookandfeel_layout'] = "Gestaltung"; //en: "'Layout'"
$lang['StaffGroups.permissions.admin_company_lookandfeel_customize'] = 'Customize';
$lang['StaffGroups.permissions.admin_company_lookandfeel_navigation'] = 'Navigation';
$lang['StaffGroups.permissions.admin_company_themes'] = "Themes"; //en: "'Themes'"
$lang['StaffGroups.permissions.admin_company_modules'] = "Module"; //en: "'Modules'"
$lang['StaffGroups.permissions.admin_company_modules_manage'] = "Modul verwalten"; //en: "'Manage Module'"
$lang['StaffGroups.permissions.admin_company_modules_install'] = "Modul installieren"; //en: "'Install Module'"
$lang['StaffGroups.permissions.admin_company_modules_uninstall'] = "Modul deinstallieren"; //en: "'Uninstall Module'"
$lang['StaffGroups.permissions.admin_company_modules_upgrade'] = "Upgrade das Modul"; //en: "'Upgrade Module'"
$lang['StaffGroups.permissions.admin_company_gateways'] = "Zahlungs-Gateways"; //en: "'Payment Gateways'"
$lang['StaffGroups.permissions.admin_company_gateways_manage'] = "Gateway verwalten"; //en: "'Manage Gateway'"
$lang['StaffGroups.permissions.admin_company_gateways_install'] = "Gateway installieren"; //en: "'Install Gateway'"
$lang['StaffGroups.permissions.admin_company_gateways_uninstall'] = "Gateway entfernen"; //en: "'Uninstall Gateway'"
$lang['StaffGroups.permissions.admin_company_gateways_upgrade'] = "Upgrade Gateway"; //en: "'Upgrade Gateway'"
$lang['StaffGroups.permissions.admin_company_taxes'] = "Steuern"; //en: "'Taxes'"
$lang['StaffGroups.permissions.admin_company_emails_mail'] = "Mail Einstellungen"; //en: "'Mail Settings'"
$lang['StaffGroups.permissions.admin_company_emails_mailtest'] = 'Mail Settings Test';
$lang['StaffGroups.permissions.admin_company_emails_templates'] = "E-Mail-Vorlagen"; //en: "'Email Templates'"
$lang['StaffGroups.permissions.admin_company_emails_edittemplate'] = "E-Mail-Vorlage bearbeiten"; //en: "'Edit Email Template'"
$lang['StaffGroups.permissions.admin_company_emails_signatures'] = "E-Mail Signaturen"; //en: "'Email Signatures'"
$lang['StaffGroups.permissions.admin_company_emails_addsignature'] = "E-Mail-Signatur hinzufügen"; //en: "'Add Email Signature'"
$lang['StaffGroups.permissions.admin_company_emails_editsignature'] = "E-Mail Signatur editieren"; //en: "'Edit Email Signature'"
$lang['StaffGroups.permissions.admin_company_emails_deletesignature'] = "E-Mail Signatur löschen"; //en: "'Delete Email Signature'"
$lang['StaffGroups.permissions.admin_company_clientoptions_general'] = "Allgemeine Kundeneinstellungen"; //en: "'General Client Settings'"
$lang['StaffGroups.permissions.admin_company_clientoptions_requiredfields'] = "Erforderliche Kunden Felder"; //en: "'Required Client Fields'"
$lang['StaffGroups.permissions.admin_company_clientoptions_customfields'] = 'Client Custom Fields';
$lang['StaffGroups.permissions.admin_company_currencies'] = "Währungen"; //en: "'Currencies'"
$lang['StaffGroups.permissions.admin_company_messengers'] = 'Messengers';
$lang['StaffGroups.permissions.admin_company_messengers_manage'] = 'Manage Messenger';
$lang['StaffGroups.permissions.admin_company_messengers_install'] = "Messenger installieren"; //en: "'Install Messengers'"
$lang['StaffGroups.permissions.admin_company_messengers_uninstall'] = 'Uninstall Messengers';
$lang['StaffGroups.permissions.admin_company_messengers_upgrade'] = 'Upgrade Messengers';
$lang['StaffGroups.permissions.admin_company_messengers_configuration'] = "Messenger-Konfiguration"; //en: "'Messenger Configuration'"
$lang['StaffGroups.permissions.admin_company_messengers_templates'] = 'Messenger Templates';
$lang['StaffGroups.permissions.admin_company_messengers_edittemplate'] = 'Edit Messenger Templates';
$lang['StaffGroups.permissions.admin_company_plugins'] = "Plugins"; //en: "'Plugins'"
$lang['StaffGroups.permissions.admin_company_plugins_manage'] = "Plugin verwalten"; //en: "'Manage Plugin'"
$lang['StaffGroups.permissions.admin_company_plugins_settings'] = "Plugin-Einstellungen"; //en: "'Plugin Settings'"
$lang['StaffGroups.permissions.admin_company_plugins_install'] = "Plugin installieren"; //en: "'Install Plugin'"
$lang['StaffGroups.permissions.admin_company_plugins_uninstall'] = "Plugin deinstallieren"; //en: "'Uninstall Plugin'"
$lang['StaffGroups.permissions.admin_company_plugins_upgrade'] = "Plugin Upgrade"; //en: "'Upgrade Plugin'"
$lang['StaffGroups.permissions.admin_company_groups'] = "Kundengruppen"; //en: "'Client Groups'"
$lang['StaffGroups.permissions.admin_settings_system'] = "Systemeinstellungen"; //en: "'System settings'"
$lang['StaffGroups.permissions.admin_system_general_basic'] = "Grundeinstellungen"; //en: "'Basic Setup'"
$lang['StaffGroups.permissions.admin_system_general_geoip'] = "GeoIP Einstellungen"; //en: "'GeoIP Settings'"
$lang['StaffGroups.permissions.admin_system_general_maintenance'] = "Wartung"; //en: "'Maintenance'"
$lang['StaffGroups.permissions.admin_system_general_license'] = "Lizenzschlüssel"; //en: "'License Key'"
$lang['StaffGroups.permissions.admin_system_automation'] = "Automatisierung"; //en: "'Automation'"
$lang['StaffGroups.permissions.admin_system_companies'] = "Firmen"; //en: "'Companies'"
$lang['StaffGroups.permissions.admin_system_backup'] = "Sicherungen"; //en: "'Backups'"
$lang['StaffGroups.permissions.admin_system_staff_manage'] = "Mitarbeiter verwalten"; //en: "'Manage Staff'"
$lang['StaffGroups.permissions.admin_system_staff_add'] = "Mitarbeiter hinzufügen"; //en: "'Add Staff'"
$lang['StaffGroups.permissions.admin_system_staff_edit'] = "Mitarbeiter bearbeiten"; //en: "'Edit Staff'"
$lang['StaffGroups.permissions.admin_system_staff_status'] = "Mitarbeiterstatus"; //en: "'Staff Status'"
$lang['StaffGroups.permissions.admin_system_staff_groups'] = "Mitarbeitergruppen"; //en: "'Staff Groups'"
$lang['StaffGroups.permissions.admin_system_staff_addgroup'] = "Mitarbeitergruppe hinzufügen"; //en: "'Add Staff Group'"
$lang['StaffGroups.permissions.admin_system_staff_editgroup'] = "Mitarbeitergruppe bearbeiten"; //en: "'Edit Staff Group'"
$lang['StaffGroups.permissions.admin_system_staff_deletegroup'] = "Mitarbeitergruppe löschen"; //en: "'Delete Staff Group'"
$lang['StaffGroups.permissions.admin_system_api'] = "API Zugang"; //en: "'API Access'"
$lang['StaffGroups.permissions.admin_system_upgrade'] = "Upgrade-Optionen"; //en: "'Upgrade Options'"
$lang['StaffGroups.permissions.admin_system_help'] = "Hilfe"; //en: "'Help'"
$lang['StaffGroups.permissions.admin_system_marketplace'] = "Marktplatz"; //en: "'Marketplace'"

$lang['StaffGroups.permissions.admin_company_general_contacttypes'] = "Kontakttypen"; //en: "'Contact Types'"
$lang['StaffGroups.permissions.admin_company_general_addcontacttype'] = "Kontakttyp hinzufügen"; //en: "'Add Contact Type'"
$lang['StaffGroups.permissions.admin_company_general_editcontacttype'] = "Kontaktart bearbeiten"; //en: "'Edit Contact Type'"
$lang['StaffGroups.permissions.admin_company_general_deletecontacttype'] = "Kontaktart löschen"; //en: "'Delete Contact Type'"
$lang['StaffGroups.permissions.admin_company_general_installlanguage'] = "Installations Sprache   "; //en: "'Install Language'"
$lang['StaffGroups.permissions.admin_company_general_uninstalllanguage'] = "Deinstallieren die Sprache"; //en: "'Uninstall Language'"
$lang['StaffGroups.permissions.admin_company_feeds'] = 'Data Feeds';
$lang['StaffGroups.permissions.admin_company_automation'] = "Automatisierung"; //en: "'Automation'"
$lang['StaffGroups.permissions.admin_company_billing_acceptedtypes'] = "Akzeptierte Zahlungsarten"; //en: "'Accepted Payment Types'"
$lang['StaffGroups.permissions.admin_system_general_paymenttypes'] = "Bezahlmöglichkeiten"; //en: "'Payment Types'"
$lang['StaffGroups.permissions.admin_system_general_addtype'] = "Zahlungsart hinzufügen"; //en: "'Add Payment Type'"
$lang['StaffGroups.permissions.admin_system_general_edittype'] = "Zahlungsart bearbeiten"; //en: "'Edit Payment Type'"
$lang['StaffGroups.permissions.admin_system_general_deletetype'] = "Zahlungsart löschen"; //en: "'Delete Payment Type'"
$lang['StaffGroups.permissions.admin_packages_addgroup'] = "Gruppe hinzufügen"; //en: "'Add Group'"
$lang['StaffGroups.permissions.admin_packages_editgroup'] = "Gruppe bearbeiten"; //en: "'Edit Group'"
$lang['StaffGroups.permissions.admin_packages_deletegroup'] = "Gruppe löschen "; //en: "'Delete Group'"
$lang['StaffGroups.permissions.admin_package_options'] = "Konfigurierbare Optionen"; //en: "'Configurable Options'"

$lang['StaffGroups.permissions.admin_reports'] = "Berichte"; //en: "'Reports'"
$lang['StaffGroups.permissions.admin_reports_customize'] = "Berichte anpassen"; //en: "'Customize Reports'"
