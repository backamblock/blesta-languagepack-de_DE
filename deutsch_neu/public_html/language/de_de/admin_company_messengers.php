<?php
/**
 * Language definitions for the Admin Company Messenger settings controller/views
 *
 * @package blesta
 * @subpackage blesta.language.de_de
 * @copyright Copyright (c) 2020, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

// Success messages
$lang['AdminCompanyMessengers.!success.upgraded'] = "Der Messenger wurde erfolgreich aktualisiert."; //en: "'The messenger was successfully upgraded.'"
$lang['AdminCompanyMessengers.!success.installed'] = 'The messenger was successfully installed.';
$lang['AdminCompanyMessengers.!success.uninstalled'] = 'The messenger was successfully uninstalled.';
$lang['AdminCompanyMessengers.!success.messenger_options_updated'] = 'The messenger configuration was successfully updated!';
$lang['AdminCompanyMessengers.!success.edit_template_updated'] = "Die Nachrichtenvorlage wurde erfolgreich aktualisiert."; //en: "'The message template was successfully updated.'"
$lang['AdminCompanyMessengers.!success.messenger_updated'] = 'The messenger was successfully updated.';

// Tooltips
$lang['AdminCompanyMessengers.!tooltip.status'] = 'No messages will be sent using this template unless this option is enabled.';

// Tabs
$lang['AdminCompanyMessengers.!tab.installed'] = "Eingerichtet"; //en: "'Installed'"
$lang['AdminCompanyMessengers.!tab.available'] = 'Available';


// Available Messengers
$lang['AdminCompanyMessengers.available.page_title'] = "Einstellungen > Unternehmen > Messenger > Verfügbar"; //en: "'Settings > Company > Messengers > Available'"
$lang['AdminCompanyMessengers.available.boxtitle_messenger'] = 'Messengers';

$lang['AdminCompanyMessengers.available.text_author'] = "Autor:"; //en: "'Author:'"
$lang['AdminCompanyMessengers.available.text_version'] = "(siehe %1\$s)"; // %1$s is the messenger's version number"; //en: "'(ver %1$s)'; // %1$s is the messenger's version number"
$lang['AdminCompanyMessengers.available.text_none'] = "Es existieren keine Messenger."; //en: "'There are no available messengers.'"
$lang['AdminCompanyMessengers.available.btn_install'] = 'Install';


// Installed Messengers
$lang['AdminCompanyMessengers.installed.page_title'] = 'Settings > Company > Messengers > Installed';
$lang['AdminCompanyMessengers.installed.boxtitle_installed'] = 'Messengers';

$lang['AdminCompanyMessengers.installed.text_author'] = 'Author:';
$lang['AdminCompanyMessengers.installed.text_version'] = '(ver %1$s)'; // %1$s is the messenger's version number
$lang['AdminCompanyMessengers.installed.text_none'] = 'There are no installed messengers.';
$lang['AdminCompanyMessengers.installed.btn_uninstall'] = "Deinstallieren"; //en: "'Uninstall'"
$lang['AdminCompanyMessengers.installed.btn_manage'] = 'Manage';
$lang['AdminCompanyMessengers.installed.btn_upgrade'] = "Upgrade"; //en: "'Upgrade'"

$lang['AdminCompanyMessengers.installed.confirm_uninstall'] = 'Are you sure you want to uninstall this messenger?';


// Manage a Messenger
$lang['AdminCompanyMessengers.manage.page_title'] = 'Settings > Company > Messengers > Manage %1$s'; // %1$s is the name of the messenger
$lang['AdminCompanyMessengers.manage.boxtitle_manage'] = "%1\$s verwalten"; // %1$s is the name of the messenger"; //en: "'Manage %1$s'; // %1$s is the name of the messenger"
$lang['AdminCompanyMessengers.manage.none_text'] = 'There is nothing to manage for this messenger.';
$lang['AdminCompanyMessengers.manage.field_update'] = "Einstellungen aktualisieren"; //en: "'Update Settings'"

// Messenger Configuration
$lang['AdminCompanyMessengers.configuration.page_title'] = 'Settings > Company > Messengers > Messenger Configuration';
$lang['AdminCompanyMessengers.configuration.boxtitle_messenger_configuration'] = 'Messenger Configuration';

$lang['AdminCompanyMessengers.configuration.heading_message_type'] = 'Message Type';
$lang['AdminCompanyMessengers.configuration.heading_messenger'] = 'Messenger';

$lang['AdminCompanyMessengers.configuration.field_update'] = "Einstellungen aktualisieren"; //en: "'Update Settings'"

$lang['AdminCompanyMessengers.configuration.text_none'] = 'There are no installed messengers.';


// Message Templates
$lang['AdminCompanyMessengers.templates.page_title'] = 'Settings > Company > Messengers > Message Templates';
$lang['AdminCompanyMessengers.templates.boxtitle_message_templates'] = "Nachrichtenvorlagen"; //en: "'Message Templates'"

$lang['AdminCompanyMessengers.templates.heading_client'] = "Kunden Nachrichten"; //en: "'Client Messages'"
$lang['AdminCompanyMessengers.templates.heading_staff'] = 'Staff Messages';
$lang['AdminCompanyMessengers.templates.heading_plugins'] = "Plugin-Nachrichten"; //en: "'Plugin Messages'"

$lang['AdminCompanyMessengers.templates.text_name'] = "Name"; //en: "'Name'"
$lang['AdminCompanyMessengers.templates.text_plugin'] = 'Plugin';
$lang['AdminCompanyMessengers.templates.text_description'] = 'Description';
$lang['AdminCompanyMessengers.templates.text_options'] = 'Options';

$lang['AdminCompanyMessengers.templates.account_welcome_name'] = 'Account Registration';
$lang['AdminCompanyMessengers.templates.account_welcome_desc'] = 'Welcome notice sent for new account registrations.';
$lang['AdminCompanyMessengers.templates.auto_debit_pending_name'] = 'Auto-Debit Pending';
$lang['AdminCompanyMessengers.templates.auto_debit_pending_desc'] = 'Notice sent that indicates an automatic payment will be attempted soon.';
$lang['AdminCompanyMessengers.templates.invoice_notice_first_name'] = 'Invoice Notice (1st)';
$lang['AdminCompanyMessengers.templates.invoice_notice_first_desc'] = "Erste Zahlungsaufforderung, entweder eine Zahlungserinnerung oder ein Mahnschreiben."; //en: "'First invoice notice, either a reminder to pay or late notice.'"
$lang['AdminCompanyMessengers.templates.invoice_notice_second_name'] = 'Invoice Notice (2nd)';
$lang['AdminCompanyMessengers.templates.invoice_notice_second_desc'] = 'Second invoice notice, either a reminder to pay or late notice.';
$lang['AdminCompanyMessengers.templates.invoice_notice_third_name'] = "Rechnungsmitteilung (3.)"; //en: "'Invoice Notice (3rd)'"
$lang['AdminCompanyMessengers.templates.invoice_notice_third_desc'] = 'Third invoice notice, either a reminder to pay or late notice.';
$lang['AdminCompanyMessengers.templates.service_creation_name'] = "Erstellung von Dienstleistungen"; //en: "'Service Creation'"
$lang['AdminCompanyMessengers.templates.service_creation_desc'] = "Mitteilung über die Erstellung eines Dienstes, die gesendet wird, wenn ein Dienst erstellt wurde."; //en: "'Service creation notice, sent when a service has been created.'"
$lang['AdminCompanyMessengers.templates.service_scheduled_cancellation_name'] = 'Service Scheduled Cancellation';
$lang['AdminCompanyMessengers.templates.service_scheduled_cancellation_desc'] = 'Service scheduled cancellation notice, sent when a service is scheduled for cancellation.';
$lang['AdminCompanyMessengers.templates.service_suspension_name'] = 'Service Suspension';
$lang['AdminCompanyMessengers.templates.service_suspension_desc'] = 'Service suspended notice, sent when a service is automatically suspended.';
$lang['AdminCompanyMessengers.templates.service_unsuspension_name'] = "Dienst Entsperrung"; //en: "'Service Unsuspension'"
$lang['AdminCompanyMessengers.templates.service_unsuspension_desc'] = "Benachrichtigung über die Aufhebung des Dienstes, die gesendet wird, wenn ein Dienst automatisch aufgehoben wird."; //en: "'Service unsuspended notice, sent when a service is automatically unsuspended.'"
$lang['AdminCompanyMessengers.templates.invoice_delivery_unpaid_name'] = 'Invoice Delivery (Unpaid)';
$lang['AdminCompanyMessengers.templates.invoice_delivery_unpaid_desc'] = "Mitteilung, die den Gesamtbetrag einer unbezahlten Rechnung enthält."; //en: "'Notice containing the total amount of an unpaid invoice.'"
$lang['AdminCompanyMessengers.templates.invoice_delivery_paid_name'] = 'Invoice Delivery (Paid)';
$lang['AdminCompanyMessengers.templates.invoice_delivery_paid_desc'] = 'Notice containing the total amount of a paid invoice.';
$lang['AdminCompanyMessengers.templates.quotation_delivery_name'] = 'Quote Delivery';
$lang['AdminCompanyMessengers.templates.quotation_delivery_desc'] = 'Notice containing a quote number and link.';
$lang['AdminCompanyMessengers.templates.staff_quotation_approved_name'] = 'Quote Approval';
$lang['AdminCompanyMessengers.templates.staff_quotation_approved_desc'] = 'Notice sent after a quote has been approved by the client.';

$lang['AdminCompanyMessengers.templates.option_edit'] = 'Edit';

$lang['AdminCompanyMessengers.templates.no_results'] = 'There are no templates of this type.';


// Edit Template
$lang['AdminCompanyMessengers.edittemplate.page_title'] = "Einstellungen > Unternehmen > E-Mails > Nachrichtenvorlage bearbeiten"; //en: "'Settings > Company > Emails > Edit Message Template'"
$lang['AdminCompanyMessengers.edittemplate.boxtitle_edittemplate'] = 'Edit Message Template %1$s'; // %1$s is the email template group name
$lang['AdminCompanyMessengers.edittemplate.text_none'] = 'None';

$lang['AdminCompanyMessengers.edittemplate.field.tags'] = "Verfügbare Tags"; //en: "'Available Tags'"
$lang['AdminCompanyMessengers.edittemplate.field.status'] = 'Enabled';
$lang['AdminCompanyMessengers.edittemplate.field.cancel'] = 'Cancel';
$lang['AdminCompanyMessengers.edittemplate.field.edittemplatesubmit'] = 'Update Template';
