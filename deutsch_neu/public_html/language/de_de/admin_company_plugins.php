<?php
/**
 * Language definitions for the Admin Company Plugin settings controller/views
 *
 * @package blesta
 * @subpackage blesta.language.de_de
 * @copyright Copyright (c) 2010, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

// Success messages
$lang['AdminCompanyPlugins.!success.installed'] = "Das Plugin wurde erfolgreich installiert. Es hat möglicherweise ACL-Berechtigungen für verschiedene Ressourcen registriert. Möglicherweise müssen Sie Ihrer Mitarbeitergruppe Zugriff auf diese Berechtigungen gewähren, um auf diese Ressourcen zugreifen zu können."; //en: "'The plugin was successfully installed. It may have registered ACL permissions for various resources. You may need to grant your staff group access to these permissions in order to access these resources.'"
$lang['AdminCompanyPlugins.!success.uninstalled'] = "Das Plugin wurde erfolgreich deinstalliert."; //en: "'The plugin was successfully uninstalled.'"
$lang['AdminCompanyPlugins.!success.upgraded'] = "Das Plugin wurde erfolgreich aktualisiert."; //en: "'The plugin was successfully upgraded.'"
$lang['AdminCompanyPlugins.!success.enabled'] = "Das Plugin wurde erfolgreich aktiviert."; //en: "'The plugin was successfully enabled.'"
$lang['AdminCompanyPlugins.!success.disabled'] = "Das Plugin wurde erfolgreich deaktiviert."; //en: "'The plugin was successfully disabled.'"
$lang['AdminCompanyPlugins.!success.automation_updated'] = 'The automation settings were successfully updated.';
$lang['AdminCompanyPlugins.!success.actions_updated'] = "Die Einstellungen für die Aktion wurden Aktualisiert."; //en: "'The action settings were successfully updated.'"
$lang['AdminCompanyPlugins.!success.events_updated'] = 'The event settings were successfully updated.';


// Error messages
$lang['AdminCompanyPlugins.!error.setting_controller_invalid'] = "Der angegebene Einstellungscontroller ist für dieses Plugin nicht vorhanden."; //en: "'The settings controller specified does not exist for that plugin.'"

$lang['AdminCompanyPlugins.!tab.installed'] = "Eingerichtet"; //en: "'Installed'"
$lang['AdminCompanyPlugins.!tab.available'] = "Verfügbar"; //en: "'Available'"


// Event descriptions
$lang['AdminCompanyPlugins.settings.event.appcontroller.preaction'] = 'This event is triggered when a page load occurs.';
$lang['AdminCompanyPlugins.settings.event.appcontroller.structure'] = 'This event is triggered when a page load occurs that is not via AJAX.';
$lang['AdminCompanyPlugins.settings.event.calendarevents.add'] = 'This event is triggered when a calendar event is created.';
$lang['AdminCompanyPlugins.settings.event.calendarevents.edit'] = 'This event is triggered when a calendar event is updated.';
$lang['AdminCompanyPlugins.settings.event.calendarevents.delete'] = 'This event is triggered when a calendar event is deleted.';
$lang['AdminCompanyPlugins.settings.event.clientgroups.add'] = 'This event is triggered when a client group is created.';
$lang['AdminCompanyPlugins.settings.event.clientgroups.edit'] = 'This event is triggered when a client group is updated.';
$lang['AdminCompanyPlugins.settings.event.clientgroups.delete'] = 'This event is triggered when a client group is deleted.';
$lang['AdminCompanyPlugins.settings.event.clients.add'] = 'This event is triggered when a client is added.';
$lang['AdminCompanyPlugins.settings.event.clients.addnote'] = 'This event is triggered when a client note is created.';
$lang['AdminCompanyPlugins.settings.event.clients.create'] = 'This event is triggered when a client is created.';
$lang['AdminCompanyPlugins.settings.event.clients.edit'] = 'This event is triggered when a client is updated.';
$lang['AdminCompanyPlugins.settings.event.clients.editnote'] = 'This event is triggered when a client note is updated.';
$lang['AdminCompanyPlugins.settings.event.clients.delete'] = "Das Event wird ausgelöst, wenn eine Kunde gelöscht wurde."; //en: "'This event is triggered when a client is deleted.'"
$lang['AdminCompanyPlugins.settings.event.clients.deletenote'] = 'This event is triggered when a client note is deleted.';
$lang['AdminCompanyPlugins.settings.event.companies.add'] = 'This event is triggered when a company is created.';
$lang['AdminCompanyPlugins.settings.event.companies.edit'] = 'This event is triggered when a company is updated.';
$lang['AdminCompanyPlugins.settings.event.companies.delete'] = 'This event is triggered when a company is deleted.';
$lang['AdminCompanyPlugins.settings.event.contacts.add'] = 'This event is triggered when a client contact is created.';
$lang['AdminCompanyPlugins.settings.event.contacts.edit'] = "Dieses Ereignis wird ausgelöst, wenn ein Kundenkontakt aktualisiert wird."; //en: "'This event is triggered when a client contact is updated.'"
$lang['AdminCompanyPlugins.settings.event.contacts.delete'] = 'This event is triggered when a client contact is deleted.';
$lang['AdminCompanyPlugins.settings.event.emails.send'] = 'This event is triggered when an email template is sent.';
$lang['AdminCompanyPlugins.settings.event.emails.sendcustom'] = 'This event is triggered when a custom email is sent.';
$lang['AdminCompanyPlugins.settings.event.gatewaymanager.add'] = 'This event is triggered when a gateway is installed.';
$lang['AdminCompanyPlugins.settings.event.gatewaymanager.edit'] = 'This event is triggered when a gateway is updated.';
$lang['AdminCompanyPlugins.settings.event.gatewaymanager.delete'] = 'This event is triggered when a gateway is uninstalled.';
$lang['AdminCompanyPlugins.settings.event.invoices.add'] = 'This event is triggered when an invoice is created.';
$lang['AdminCompanyPlugins.settings.event.invoices.edit'] = 'This event is triggered when an invoice is updated.';
$lang['AdminCompanyPlugins.settings.event.invoices.setclosed'] = 'This event is triggered when an invoice is closed.';
$lang['AdminCompanyPlugins.settings.event.modulemanager.add'] = 'This event is triggered when a module is installed.';
$lang['AdminCompanyPlugins.settings.event.modulemanager.delete'] = 'This event is triggered when a module is uninstalled.';
$lang['AdminCompanyPlugins.settings.event.navigation.getsearchoptions'] = 'This event is triggered when the search options are displayed for staff.';
$lang['AdminCompanyPlugins.settings.event.packages.add'] = 'This event is triggered when a package is created.';
$lang['AdminCompanyPlugins.settings.event.packages.edit'] = 'This event is triggered when a package is updated.';
$lang['AdminCompanyPlugins.settings.event.packages.delete'] = 'This event is triggered when a package is deleted.';
$lang['AdminCompanyPlugins.settings.event.report.clientdata'] = 'This event is triggered when the Client Data Portability report is generated.';
$lang['AdminCompanyPlugins.settings.event.services.add'] = 'This event is triggered when a service is created.';
$lang['AdminCompanyPlugins.settings.event.services.edit'] = 'This event is triggered when a service is updated.';
$lang['AdminCompanyPlugins.settings.event.services.cancel'] = 'This event is triggered when a service is canceled or scheduled to be canceled.';
$lang['AdminCompanyPlugins.settings.event.services.suspend'] = 'This event is triggered when a service is suspended.';
$lang['AdminCompanyPlugins.settings.event.services.unsuspend'] = "Dieses Ereignis wird ausgelöst, wenn ein Dienst nicht mehr ausgesetzt ist."; //en: "'This event is triggered when a service is unsuspended.'"
$lang['AdminCompanyPlugins.settings.event.staff.add'] = 'This event is triggered when a staff member is created.';
$lang['AdminCompanyPlugins.settings.event.staff.edit'] = 'This event is triggered when a staff member is updated.';
$lang['AdminCompanyPlugins.settings.event.transactions.add'] = 'This event is triggered when a transaction is created.';
$lang['AdminCompanyPlugins.settings.event.transactions.edit'] = 'This event is triggered when a transaction is updated.';
$lang['AdminCompanyPlugins.settings.event.users.delete'] = "Dieses Ereignis wird ausgelöst, wenn ein Benutzer gelöscht wird."; //en: "'This event is triggered when a user is deleted.'"
$lang['AdminCompanyPlugins.settings.event.users.login'] = 'This event is triggered when a user logs in.';
$lang['AdminCompanyPlugins.settings.event.users.logout'] = 'This event is triggered when a user logs out.';


// Available plugins
$lang['AdminCompanyPlugins.available.page_title'] = "Einstellungen> Unternehmen> Plugins> Verfügbare"; //en: "'Settings > Company > Plugins > Available'"
$lang['AdminCompanyPlugins.available.boxtitle_plugins'] = "Plugins"; //en: "'Plugins'"
$lang['AdminCompanyPlugins.available.text_version'] = "(ver %1\$s)"; // %1$s is the version number of the plugin"; //en: "'(ver %1$s)'; // %1$s is the version number of the plugin"
$lang['AdminCompanyPlugins.available.text_author'] = "Autor:"; //en: "'Author: '"
$lang['AdminCompanyPlugins.available.btn_install'] = "Installieren"; //en: "'Install'"
$lang['AdminCompanyPlugins.available.text_none'] = "Es sind keine Plugins verfügbar."; //en: "'There are no available plugins.'"


// Installed plugins
$lang['AdminCompanyPlugins.installed.page_title'] = "Einstellungen&gt; Firma&gt; Plugins&gt; Installiert"; //en: "'Settings > Company > Plugins > Installed'"
$lang['AdminCompanyPlugins.installed.boxtitle_plugin'] = "Plugins"; //en: "'Plugins'"
$lang['AdminCompanyPlugins.installed.text_version'] = "(ver %1\$s)"; // %1$s is the version number of the plugin"; //en: "'(ver %1$s)'; // %1$s is the version number of the plugin"
$lang['AdminCompanyPlugins.installed.text_author'] = "Autor:"; //en: "'Author: '"
$lang['AdminCompanyPlugins.installed.confirm_uninstall'] = "Dieses Plugin wirklich deinstallieren?"; //en: "'Really uninstall this plugin?'"
$lang['AdminCompanyPlugins.installed.confirm_disable'] = "Dieses Plugin wirklich deaktivieren?"; //en: "'Really disable this plugin?'"
$lang['AdminCompanyPlugins.installed.confirm_enable'] = "Wirklich dieses Plugin aktivieren?"; //en: "'Really enable this plugin?'"
$lang['AdminCompanyPlugins.installed.btn_uninstall'] = "Deinstallieren"; //en: "'Uninstall'"
$lang['AdminCompanyPlugins.installed.btn_disable'] = "Deaktivieren"; //en: "'Disable'"
$lang['AdminCompanyPlugins.installed.btn_enable'] = "Aktivieren"; //en: "'Enable'"
$lang['AdminCompanyPlugins.installed.btn_manage'] = "Verwalten"; //en: "'Manage'"
$lang['AdminCompanyPlugins.installed.btn_settings'] = 'Settings';
$lang['AdminCompanyPlugins.installed.btn_upgrade'] = "Upgrade"; //en: "'Upgrade'"
$lang['AdminCompanyPlugins.installed.text_none'] = "Es gibt keine installierten Plugins."; //en: "'There are no installed plugins.'"


// Settings
$lang['AdminCompanyPlugins.settings.field_enabled'] = 'Enabled';
$lang['AdminCompanyPlugins.settings.field_submit'] = 'Update Settings';

$lang['AdminCompanyPlugins.settings.page_title'] = '%1$s Settings'; // %1$s is the name of the plugin
$lang['AdminCompanyPlugins.settings.tab_automation'] = 'Automation';
$lang['AdminCompanyPlugins.settings.tab_actions'] = 'Actions';
$lang['AdminCompanyPlugins.settings.tab_events'] = "Ereignisse"; //en: "'Events'"

$lang['AdminCompanyPlugins.settings.automation_description'] = 'The plugin has registered the below automation tasks to perform certain actions when run by cron.';
$lang['AdminCompanyPlugins.settings.events_description'] = 'The plugin listens for the below events and performs some action when they occur.';

$lang['AdminCompanyPlugins.settings.actions_no_results'] = 'There are no actions set for this plugin.';
$lang['AdminCompanyPlugins.settings.automation_no_results'] = 'There are no automation tasks set for this plugin.';
$lang['AdminCompanyPlugins.settings.events_no_results'] = 'There are no events set for this plugin.';

$lang['AdminCompanyPlugins.settings.actions_description'] = 'Actions define what may be displayed in the admin and client interfaces on behalf of the plugin, such as navigation links or widgets.';
$lang['AdminCompanyPlugins.settings.actions_uri'] = 'URI: %1$s'; // %1$s is the URI of the plugin action
$lang['AdminCompanyPlugins.settings.actions_heading_sub'] = 'Sub Options';
$lang['AdminCompanyPlugins.settings.actions_heading_secondary'] = "Sekundäre Optionen"; //en: "'Secondary Options'"
