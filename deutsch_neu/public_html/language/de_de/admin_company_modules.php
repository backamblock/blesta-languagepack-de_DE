<?php
/**
 * Language definitions for the Admin Company Module settings controller/views
 *
 * @package blesta
 * @subpackage blesta.language.de_de
 * @copyright Copyright (c) 2010, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminCompanyModules.!success.upgraded'] = 'The module was successfully upgraded.';
$lang['AdminCompanyModules.!success.installed'] = "Das Modul wurde erfolgreich installiert."; //en: "'The module was successfully installed.'"
$lang['AdminCompanyModules.!success.uninstalled'] = "Das Modul wurde erfolgreich deinstalliert."; //en: "'The module was successfully uninstalled.'"
$lang['AdminCompanyModules.!success.module_updated'] = "Das Modul wurde erfolgreich gespeichert."; //en: "'The module was successfully updated.'"
$lang['AdminCompanyModules.!success.group_added'] = "Die Gruppe wurde erfolgreich hinzugefügt."; //en: "'The group was successfully added.'"
$lang['AdminCompanyModules.!success.group_updated'] = "Die Gruppe wurde erfolgreich aktualisiert."; //en: "'The group was successfully updated.'"
$lang['AdminCompanyModules.!success.group_deleted'] = "Die Gruppe wurde erfolgreich gelöscht."; //en: "'The group was successfully deleted.'"
$lang['AdminCompanyModules.!success.row_added'] = "Die %1\$s wurde erfolgreich hinzugefügt."; // %1$s is the module row noun (e.g. Server)"; //en: "'The %1$s was successfully added.'; // %1$s is the module row noun (e.g. Server)"
$lang['AdminCompanyModules.!success.row_updated'] = "%1\$s wurde erfolgreich geupdated."; // %1$s is the module row noun (e.g. Server)"; //en: "'The %1$s was successfully updated.'; // %1$s is the module row noun (e.g. Server)"
$lang['AdminCompanyModules.!success.row_deleted'] = "%1\$s wurde erfolgreich gelöscht."; // %1$s is the module row noun (e.g. Server)"; //en: "'The %1$s was successfully deleted.'; // %1$s is the module row noun (e.g. Server)"


$lang['AdminCompanyModules.!tab.installed'] = "Installiert"; //en: "'Installed'"
$lang['AdminCompanyModules.!tab.available'] = "Verfügbar"; //en: "'Available'"


// Available Modules
$lang['AdminCompanyModules.available.page_title'] = "Einstellungen > Firma > Module > Verfügbar"; //en: "'Settings > Company > Modules > Available'"
$lang['AdminCompanyModules.available.boxtitle_module'] = "Module"; //en: "'Modules'"
$lang['AdminCompanyModules.available.text_author'] = "Autor:"; //en: "'Author:'"
$lang['AdminCompanyModules.available.text_author_url'] = "URL des Autors"; //en: "'Author URL'"
$lang['AdminCompanyModules.available.text_version'] = "(Version %1\$s)"; // %1$s is the module's version number"; //en: "'(ver %1$s)'; // %1$s is the module's version number"
$lang['AdminCompanyModules.available.text_none'] = "Es gibt keine verfügbaren Module."; //en: "'There are no available modules.'"
$lang['AdminCompanyModules.available.btn_install'] = "Installieren"; //en: "'Install'"


// Installed Modules
$lang['AdminCompanyModules.installed.page_title'] = "Einstellungen > Unternehmen > Module > Installiert"; //en: "'Settings > Company > Modules > Installed'"
$lang['AdminCompanyModules.installed.boxtitle_installed'] = "Module"; //en: "'Modules'"
$lang['AdminCompanyModules.installed.text_author'] = "Author:"; //en: "'Author:'"
$lang['AdminCompanyModules.installed.text_author_url'] = "Autor URL"; //en: "'Author URL'"
$lang['AdminCompanyModules.installed.text_version'] = "(ver %1\$s)"; // %1$s is the module's version number"; //en: "'(ver %1$s)'; // %1$s is the module's version number"
$lang['AdminCompanyModules.installed.text_none'] = "Es sind keine Module installiert."; //en: "'There are no installed modules.'"
$lang['AdminCompanyModules.installed.btn_uninstall'] = "Deinstallieren"; //en: "'Uninstall'"
$lang['AdminCompanyModules.installed.btn_manage'] = "Verwalten"; //en: "'Manage'"
$lang['AdminCompanyModules.installed.btn_upgrade'] = "Upgrade"; //en: "'Upgrade'"

$lang['AdminCompanyModules.installed.confirm_uninstall'] = "Möchten Sie dieses Modul wirklich deinstallieren?"; //en: "'Are you sure you want to uninstall this module?'"


// Manage a Module
$lang['AdminCompanyModules.manage.page_title'] = "Einstellungen&gt; Firma&gt; Module&gt; Verwalten %1\$s"; // %1$s is the name of the module"; //en: "'Settings > Company > Modules > Manage %1$s'; // %1$s is the name of the module"
$lang['AdminCompanyModules.manage.boxtitle_manage'] = "Verwalte %1\$s"; // %1$s is the name of the module"; //en: "'Manage %1$s'; // %1$s is the name of the module"


// Add Module Groups
$lang['AdminCompanyModules.addgroup.page_title'] = "Einstellungen -> Unternehmen -> Module ->%1\$s %2\$s Gruppe hinzufügen"; // %1$s is the module name, %2$s is the module row noun (e.g. Server)"; //en: "'Settings > Company > Modules > Add %1$s %2$s Group'; // %1$s is the module name, %2$s is the module row noun (e.g. Server)"
$lang['AdminCompanyModules.addgroup.boxtitle_add'] = "Hinzufügen %1\$s %2\$s  Gruppe"; // %1$s is the module name, %2$s is the module row noun (e.g. Server)"; //en: "'Add %1$s %2$s Group'; // %1$s is the module name, %2$s is the module row noun (e.g. Server)"
$lang['AdminCompanyModules.addgroup.btn_add'] = "Gruppe hinzufügen"; //en: "'Add Group'"
$lang['AdminCompanyModules.addgroup.assigned'] = "Zugewiesen %1\$s"; // %1$s is the module row noun in plural form (e.g. Servers)"; //en: "'Assigned %1$s'; // %1$s is the module row noun in plural form (e.g. Servers)"
$lang['AdminCompanyModules.addgroup.available'] = "Verfügbare %1\$s"; // %1$s is the module row noun in plural form (e.g. Servers)"; //en: "'Available %1$s'; // %1$s is the module row noun in plural form (e.g. Servers)"
$lang['AdminCompanyModules.addgroup.force_limits'] = "%1\$s Limits erzwingen"; // %1$s is the module row noun (e.g. Server)"; //en: "'Force %1$s Limits'; // %1$s is the module row noun (e.g. Server)"
$lang['AdminCompanyModules.addgroup.tooltip_force_limits'] = "Erzwingt harte Limits, sodass die Anzahl von %1\$s nicht überschritten wird."; // %1$s is the module row noun (e.g. Server)"; //en: "'Enforces hard limits so that the count of a %1$s never exceedes its limit.'; // %1$s is the module row noun (e.g. Server)"

$lang['AdminCompanyModules.addgroup.text_name'] = "Gruppenname"; //en: "'Group Name'"
$lang['AdminCompanyModules.addgroup.text_order'] = "Bestellung hinzufügen"; //en: "'Add Order'"


// Edit Module Groups
$lang['AdminCompanyModules.editgroup.page_title'] = "Einstellungen > Unternehmen > Module > %1\$s %2\$s Gruppe Bearbeiten"; // %1$s is the module name, %2$s is the module row noun (e.g. Server)"; //en: "'Settings > Company > Modules > Edit %1$s %2$s Group'; // %1$s is the module name, %2$s is the module row noun (e.g. Server)"
$lang['AdminCompanyModules.editgroup.boxtitle_edit'] = "Bearbeite %1\$s %2\$s Gruppe"; // %1$s is the module name, %2$s is the module row noun (e.g. Server)"; //en: "'Edit %1$s %2$s Group'; // %1$s is the module name, %2$s is the module row noun (e.g. Server)"
$lang['AdminCompanyModules.editgroup.btn_edit'] = "Gruppe aktualisieren"; //en: "'Update Group'"
$lang['AdminCompanyModules.editgroup.assigned'] = "Zugewiesen %1\$s"; // %1$s is the module row noun in plural form (e.g. Servers)"; //en: "'Assigned %1$s'; // %1$s is the module row noun in plural form (e.g. Servers)"
$lang['AdminCompanyModules.editgroup.available'] = "%1\$s Verfügbar"; // %1$s is the module row noun in plural form (e.g. Servers)"; //en: "'Available %1$s'; // %1$s is the module row noun in plural form (e.g. Servers)"
$lang['AdminCompanyModules.editgroup.force_limits'] = "Erzwinge %1\$s Limits"; // %1$s is the module row noun (e.g. Server)"; //en: "'Force %1$s Limits'; // %1$s is the module row noun (e.g. Server)"
$lang['AdminCompanyModules.editgroup.tooltip_force_limits'] = "Erzwingt harte Grenzwerte, damit die Anzahl von %1\$s niemals deren Grenzwert überschreitet."; // %1$s is the module row noun (e.g. Server)"; //en: "'Enforces hard limits so that the count of a %1$s never exceedes its limit.'; // %1$s is the module row noun (e.g. Server)"

$lang['AdminCompanyModules.editgroup.text_name'] = "Gruppen Name"; //en: "'Group Name'"
$lang['AdminCompanyModules.editgroup.text_order'] = "Bestellung hinzufügen"; //en: "'Add Order'"


// Add Module Row
$lang['AdminCompanyModules.addrow.page_title'] = "Einstellungen > Unternehmen > Module > %1\$s %2\$s Hinzufügen"; // %1$s is the module name, %2$s is the module row noun (e.g. Server)"; //en: "'Settings > Company > Modules > Add %1$s %2$s'; // %1$s is the module name, %2$s is the module row noun (e.g. Server)"

// Edit Module Row
$lang['AdminCompanyModules.editrow.page_title'] = "Einstellungen > Unternehmen > Module > Bearbeite %1\$s %2\$s"; // %1$s is the module name, %2$s is the module row noun (e.g. Server)"; //en: "'Settings > Company > Modules > Edit %1$s %2$s'; // %1$s is the module name, %2$s is the module row noun (e.g. Server)"
