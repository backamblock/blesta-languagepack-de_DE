<?php
/**
 * Language definitions for the Admin Packages controller/views
 *
 * @package blesta
 * @subpackage blesta.language.de_de
 * @copyright Copyright (c) 2010, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

// Success messages
$lang['AdminPackages.!success.package_added'] = "Das Paket wurde erfolgreich angelegt."; //en: "'The package was successfully created.'"
$lang['AdminPackages.!success.package_updated'] = "Das Paket wurde erfolgreich aktualisiert."; //en: "'The package was successfully updated.'"
$lang['AdminPackages.!success.package_deleted'] = "Das Paket wurde erfolgreich gelöscht."; //en: "'The package was successfully deleted.'"
$lang['AdminPackages.!success.packages_deleted'] = 'The packages were successfully deleted.';
$lang['AdminPackages.!success.group_added'] = "Die Paketgruppe \"%1\$s\" wurde erfolgreich erstellt."; // %1$s is the package group name"; //en: "'The package group "%1$s" has been successfully created.'; // %1$s is the package group name"
$lang['AdminPackages.!success.group_updated'] = "Die Paketgruppe \"%1\$s\" wurde erfolgreich aktualisiert."; // %1$s is the package group name"; //en: "'The package group "%1$s" has been successfully updated.'; // %1$s is the package group name"
$lang['AdminPackages.!success.group_deleted'] = "Die Paketgruppe \"%1\$s\" wurde erfolgreich gelöscht."; // %1$s is the package group name"; //en: "'The package group"%1$s" has been successfully deleted.'; // %1$s is the package group name"


// Index
$lang['AdminPackages.index.page_title'] = "Pakete"; //en: "'Packages'"
$lang['AdminPackages.index.boxtitle_packages'] = "Pakete"; //en: "'Packages'"
$lang['AdminPackages.index.categorylink_createpackage'] = "Paket erstellen"; //en: "'Create Package'"

$lang['AdminPackages.index.heading_package'] = "Paket ID"; //en: "'Package ID'"
$lang['AdminPackages.index.heading_name'] = "Name"; //en: "'Name'"
$lang['AdminPackages.index.heading_module'] = "Module"; //en: "'Module'"
$lang['AdminPackages.index.heading_qty'] = "Menge"; //en: "'Quantity'"
$lang['AdminPackages.index.heading_options'] = "Optionen"; //en: "'Options'"

$lang['AdminPackages.index.category_active'] = "Aktiv"; //en: "'Active'"
$lang['AdminPackages.index.category_restricted'] = "Eingeschränkt"; //en: "'Restricted'"
$lang['AdminPackages.index.category_inactive'] = "Inaktiv"; //en: "'Inactive'"

$lang['AdminPackages.index.action.delete'] = 'Delete Packages';
$lang['AdminPackages.index.field_actionsubmit'] = 'Submit';

$lang['AdminPackages.index.option_edit'] = "Bearbeiten"; //en: "'Edit'"
$lang['AdminPackages.index.option_copy'] = "Kopieren"; //en: "'Copy'"
$lang['AdminPackages.index.option_delete'] = "Entfernen"; //en: "'Delete'"

$lang['AdminPackages.index.no_results'] = "Es gibt keine Pakete mit diesem Status."; //en: "'There are no packages with this status.'"
$lang['AdminPackages.index.qty_unlimited'] = "Unbegrenzt"; //en: "'Unlimited'"

$lang['AdminPackages.index.confirm_delete'] = 'Are you sure you want to delete this package? Any canceled service assigned to this package will be removed.';


// Package pricing
$lang['AdminPackages.packagepricing.heading_pricing'] = "Preise"; //en: "'Pricing'"
$lang['AdminPackages.packagepricing.heading_id'] = 'ID';
$lang['AdminPackages.packagepricing.heading_term'] = "Begriff"; //en: "'Term'"
$lang['AdminPackages.packagepricing.heading_price'] = "Preis"; //en: "'Price'"
$lang['AdminPackages.packagepricing.heading_price_renews'] = 'Renewal Price';
$lang['AdminPackages.packagepricing.heading_setup_fee'] = "Einrichtungsgebühr"; //en: "'Setup Fee'"
$lang['AdminPackages.packagepricing.heading_cancellation_fee'] = "Stornogebühr"; //en: "'Cancellation Fee'"
$lang['AdminPackages.packagepricing.not_applicable'] = 'N/A';
$lang['AdminPackages.packagepricing.pricing_no_results'] = "Dieses Paket enthält keine Preisangaben."; //en: "'This package has no pricing details.'"


// Tooltips
$lang['AdminPackages.!tooltip.price_renews'] = 'A price can be set here for renewals, or will otherwise default to the set Price. Any prorated changes to services will be based off of this value.';
$lang['AdminPackages.!tooltip.prorata'] = "Pro Rata ermöglicht es, einen bestimmten Tag des Monats für die Erneuerung von Diensten festzulegen, die mit diesem Paket erstellt wurden. Von dieser Option sind nur monatliche und jährliche Zeiträume betroffen."; //en: "'Pro rata allows a specific day of the month to be set for the renewal of services created with this package. Only monthly and yearly periods will be affected by this option.'"
$lang['AdminPackages.!tooltip.prorata_day'] = "Der Tag des Monats, für den dieser Service bei Bestellung bestellt wird."; //en: "'The day of the month this service will be set to renew when ordered.'"
$lang['AdminPackages.!tooltip.prorata_cutoff'] = "Erstbestellungen an oder vor diesem Tag des Monats werden nur für den Teilmonat berechnet, der am nächsten anteiligen Tag endet. Bestellungen, die nach diesem Tag aufgegeben werden, werden für den Teilmonat und die nachfolgende Dienstzeit berechnet."; //en: "'Initial orders placed on or before this day of the month will be charged only for the partial month ending on the next occurring pro rata day. Orders placed after this day will be charged for the partial month and the subsequent service term.'"
$lang['AdminPackages.!tooltip.module_uneditable'] = "Das Modul kann nicht geändert werden, da ein oder mehrere Dienste dieses Paket bereits verwenden."; //en: "'The module cannot be changed because there are one or more services already using this package.'"
$lang['AdminPackages.!tooltip.assigned_plugins'] = "Plugins, die diesem Paket zugewiesen sind, können zusätzliche Verwaltungsfunktionen für Dienste bereitstellen."; //en: "'Plugins assigned to this package may provide additional management features for services.'"
$lang['AdminPackages.!tooltip.override_price'] = 'When enabled this option will prevent price changes from affecting existing services by setting an "override price" on newly created services.';
$lang['AdminPackages.!tooltip.upgrades_use_renewal'] = "Wenn diese Option aktiviert ist, werden beim Upgrade auf dieses Paket die Erneuerungspreise verwendet, sofern sie festgelegt sind. Das Gleiche gilt für alle konfigurierbaren Optionen, die beim Upgrade geändert werden. Wenn diese Einstellung deaktiviert ist, wird der reguläre Preis verwendet."; //en: "'When enabled, upgrading to this package will use renewal prices if they are set. The same will apply to any configurable options that are altered in the upgrade. The regular price will be used if this setting is disabled.'"
$lang['AdminPackages.!tooltip.client_qty'] = 'The maximum number of services (of any status) each client can create through this package.';


// Add
$lang['AdminPackages.add.page_title'] = "Neues Paket"; //en: "'New Package'"
$lang['AdminPackages.add.boxtitle_newpackage'] = "Neues Paket"; //en: "'New Package'"

$lang['AdminPackages.add.heading_basic'] = "Basic"; //en: "'Basic'"
$lang['AdminPackages.add.heading_pricing'] = "Preisgestaltung"; //en: "'Pricing'"
$lang['AdminPackages.add.heading_groups'] = "Gruppenmitgliedschaft"; //en: "'Group Membership'"
$lang['AdminPackages.add.heading_plugins'] = 'Plugin Integrations';
$lang['AdminPackages.add.heading_module'] = "Moduloptionen"; //en: "'Module Options'"
$lang['AdminPackages.add.heading_email'] = "Begrüßungs-E-Mail"; //en: "'Welcome Email'"
$lang['AdminPackages.add.heading_options'] = 'Configurable Options';

$lang['AdminPackages.add.tab_basic'] = 'Basic';
$lang['AdminPackages.add.tab_module'] = 'Module';
$lang['AdminPackages.add.tab_email'] = 'Welcome Email';
$lang['AdminPackages.add.tab_options'] = 'Configurable Options';

$lang['AdminPackages.add.field_module'] = "Modul"; //en: "'Module'"
$lang['AdminPackages.add.field_packagename'] = "Paket Name"; //en: "'Package Name'"
$lang['AdminPackages.add.field_status'] = "Status"; //en: "'Status'"
$lang['AdminPackages.add.field_override_price'] = 'Lock in service prices';
$lang['AdminPackages.add.field_upgrades_use_renewal'] = 'Use renewal prices for package upgrades';
$lang['AdminPackages.add.field_qty'] = "Verfügbare Menge"; //en: "'Quantity Available'"
$lang['AdminPackages.add.field_qty_unlimited'] = "Unbegrenzt"; //en: "'Unlimited'"
$lang['AdminPackages.add.field_client_qty'] = 'Client Limit';
$lang['AdminPackages.add.field_client_qty_unlimited'] = "Unbegrenzt"; //en: "'Unlimited'"
$lang['AdminPackages.add.field_activation'] = "Sofortige Freischaltung"; //en: "'Instant Activation'"
$lang['AdminPackages.add.field_description'] = "Beschreibung"; //en: "'Description'"
$lang['AdminPackages.add.field_description_text'] = "Text"; //en: "'Text'"
$lang['AdminPackages.add.field_description_html'] = "HTML"; //en: "'HTML'"
$lang['AdminPackages.add.field_configurable_options'] = "Konfigurierbare Optionen"; //en: "'Configurable Options'"
$lang['AdminPackages.add.field_taxable'] = "Steuerpflichtig"; //en: "'Taxable'"
$lang['AdminPackages.add.field_single_term'] = "Am Ende der Laufzeit kündigen"; //en: "'Cancel at end of term'"
$lang['AdminPackages.add.field_modulegroup_any'] = "Jeder"; //en: "'Any'"
$lang['AdminPackages.add.field_prorata'] = "Aktivieren Sie Pro Rata"; //en: "'Enable Pro rata'"
$lang['AdminPackages.add.field_prorata_day'] = "Pro rata Tag"; //en: "'Pro rata Day'"
$lang['AdminPackages.add.field_prorata_cutoff'] = "Pro-Rata-Cutoff-Tag"; //en: "'Pro rata Cutoff Day'"

$lang['AdminPackages.add.text_term'] = "Bedingung"; //en: "'Term'"
$lang['AdminPackages.add.text_period'] = "Dauer"; //en: "'Period'"
$lang['AdminPackages.add.text_currency'] = "Währung"; //en: "'Currency'"
$lang['AdminPackages.add.text_price'] = "Preis"; //en: "'Price'"
$lang['AdminPackages.add.text_price_renews'] = 'Renewal Price';
$lang['AdminPackages.add.text_setup'] = "Einrichtungsgebühr"; //en: "'Setup Fee'"
$lang['AdminPackages.add.text_cancellation'] = "Stornogebühr"; //en: "'Cancellation Fee'"
$lang['AdminPackages.add.text_options'] = "Optionen"; //en: "'Options'"
$lang['AdminPackages.add.text_remove'] = "Entfernen"; //en: "'Remove'"
$lang['AdminPackages.add.text_none'] = "Keiner"; //en: "'None'"

$lang['AdminPackages.add.text_install_modules'] = 'Install Modules';
$lang['AdminPackages.add.text_refresh'] = 'Refresh';
$lang['AdminPackages.add.text_tags'] = "Tags:"; //en: "'Tags:'"
$lang['AdminPackages.add.text_group'] = "Ein Paket muss zu mindestens einer Gruppe gehören, damit es verwendet werden kann."; //en: "'A package must belong to at least one group to be usable.'"
$lang['AdminPackages.add.text_membergroups'] = "Mitgliedergruppen"; //en: "'Member Groups'"
$lang['AdminPackages.add.text_availablegroups'] = "Verfügbare Gruppen"; //en: "'Available Groups'"
$lang['AdminPackages.add.text_drag_and_drop'] = 'Drag & Drop Groups Here';

$lang['AdminPackages.add.text_assigned_plugins'] = "Zugewiesene Plugins"; //en: "'Assigned Plugins'"
$lang['AdminPackages.add.text_available_plugins'] = "Verfügbare Plugins"; //en: "'Available Plugins'"

$lang['AdminPackages.add.text_confirm_load_email'] = "Sind Sie sicher, dass Sie die Beispiel-E-Mail laden möchten? Dadurch werden alle Änderungen verworfen."; //en: "'Are you sure you want to load the sample email? This will discard all changes.'"

$lang['AdminPackages.add.field_email'] = "Willkommens E-Mail"; //en: "'Welcome E-mail'"

$lang['AdminPackages.add.field_packagesubmit'] = "Paket erstellen"; //en: "'Create Package'"

$lang['AdminPackages.add.categorylink_addprice'] = "Zusatzkosten hinzufügen"; //en: "'Add Additional Price'"
$lang['AdminPackages.add.categorylink_loademail'] = "Muster-E-Mail laden"; //en: "'Load Sample Email'"

$lang['AdminPackages.add.field_select_group_type'] = "Von verfügbaren Gruppen wählen"; //en: "'Select from Available Groups'"
$lang['AdminPackages.add.field_select_group_type_new'] = "Neue Gruppe erstellen"; //en: "'Create a New Group'"
$lang['AdminPackages.add.text_group_name'] = "Standardpaketgruppenname"; //en: "'Standard Package Group Name'"


// Edit
$lang['AdminPackages.edit.page_title'] = "Paket Updaten"; //en: "'Update Package'"
$lang['AdminPackages.edit.boxtitle_updatepackage'] = "Update-Paket"; //en: "'Update Package'"

$lang['AdminPackages.edit.heading_basic'] = "Basic"; //en: "'Basic'"
$lang['AdminPackages.edit.heading_pricing'] = "Preise"; //en: "'Pricing'"
$lang['AdminPackages.edit.heading_groups'] = "Gruppenmitglied"; //en: "'Group Membership'"
$lang['AdminPackages.edit.heading_plugins'] = 'Plugin Integrations';
$lang['AdminPackages.edit.heading_module'] = "Modul Optionen"; //en: "'Module Options'"
$lang['AdminPackages.edit.heading_email'] = "Begrüßungs-E-Mail"; //en: "'Welcome Email'"
$lang['AdminPackages.edit.heading_options'] = 'Configurable Options';

$lang['AdminPackages.edit.tab_basic'] = 'Basic';
$lang['AdminPackages.edit.tab_module'] = 'Module';
$lang['AdminPackages.edit.tab_email'] = 'Welcome Email';
$lang['AdminPackages.edit.tab_options'] = 'Configurable Options';

$lang['AdminPackages.edit.field_module'] = "Modul"; //en: "'Module'"
$lang['AdminPackages.edit.field_packagename'] = "Paket Name"; //en: "'Package Name'"
$lang['AdminPackages.edit.field_status'] = "Status"; //en: "'Status'"
$lang['AdminPackages.edit.field_override_price'] = 'Lock in service prices';
$lang['AdminPackages.edit.field_upgrades_use_renewal'] = 'Use renewal prices for package upgrades';
$lang['AdminPackages.edit.field_qty'] = "Verfügbare Menge"; //en: "'Quantity Available'"
$lang['AdminPackages.edit.field_qty_unlimited'] = "Unlimitiert"; //en: "'Unlimited'"
$lang['AdminPackages.edit.field_client_qty'] = 'Client Limit';
$lang['AdminPackages.edit.field_client_qty_unlimited'] = 'Unlimited';
$lang['AdminPackages.edit.field_activation'] = "Sofortige Aktivierung"; //en: "'Instant Activation'"
$lang['AdminPackages.edit.field_description'] = "Beschreibung"; //en: "'Description'"
$lang['AdminPackages.edit.field_description_text'] = "Text"; //en: "'Text'"
$lang['AdminPackages.edit.field_description_html'] = "HTML"; //en: "'HTML'"
$lang['AdminPackages.edit.field_configurable_options'] = "Konfigurierbare Optionen"; //en: "'Configurable Options'"
$lang['AdminPackages.edit.field_taxable'] = "Steuerpflichtig"; //en: "'Taxable'"
$lang['AdminPackages.edit.field_single_term'] = "Am Ende der Laufzeit kündigen"; //en: "'Cancel at end of term'"
$lang['AdminPackages.edit.field_modulegroup_any'] = "Alle"; //en: "'Any'"
$lang['AdminPackages.edit.field_prorata'] = "Pro rata aktivieren"; //en: "'Enable Pro rata'"
$lang['AdminPackages.edit.field_prorata_day'] = "Pro Rata Tag"; //en: "'Pro rata Day'"
$lang['AdminPackages.edit.field_prorata_cutoff'] = "Pro Rata Cutoff Day"; //en: "'Pro rata Cutoff Day'"

$lang['AdminPackages.edit.text_term'] = "Laufzeit"; //en: "'Term'"
$lang['AdminPackages.edit.text_period'] = "Zeitraum"; //en: "'Period'"
$lang['AdminPackages.edit.text_currency'] = "Währung"; //en: "'Currency'"
$lang['AdminPackages.edit.text_price'] = "Preis"; //en: "'Price'"
$lang['AdminPackages.edit.text_price_renews'] = 'Renewal Price';
$lang['AdminPackages.edit.text_price_transfer'] = 'Transfer Price';
$lang['AdminPackages.edit.text_setup'] = "Einrichtungsgebühr"; //en: "'Setup Fee'"
$lang['AdminPackages.edit.text_cancellation'] = "Stornogebühr"; //en: "'Cancellation Fee'"
$lang['AdminPackages.edit.text_options'] = "Optionen"; //en: "'Options'"
$lang['AdminPackages.edit.text_remove'] = "Entfernen"; //en: "'Remove'"
$lang['AdminPackages.edit.text_none'] = "Keiner"; //en: "'None'"

$lang['AdminPackages.edit.text_install_modules'] = 'Install Modules';
$lang['AdminPackages.edit.text_refresh'] = 'Refresh';
$lang['AdminPackages.edit.text_tags'] = "Tags:"; //en: "'Tags:'"
$lang['AdminPackages.edit.text_group'] = "Ein Paket muss zu mindestens einer Gruppe gehören, damit es verwendet werden kann."; //en: "'A package must belong to at least one group to be usable.'"
$lang['AdminPackages.edit.text_membergroups'] = "Mitgliedergruppen"; //en: "'Member Groups'"
$lang['AdminPackages.edit.text_availablegroups'] = "Verfügbare Gruppen"; //en: "'Available Groups'"
$lang['AdminPackages.edit.text_drag_and_drop'] = 'Drag & Drop Groups Here';

$lang['AdminPackages.edit.text_assigned_plugins'] = "Zugewiesene Plugins"; //en: "'Assigned Plugins'"
$lang['AdminPackages.edit.text_available_plugins'] = "Verfügbare Plugins"; //en: "'Available Plugins'"

$lang['AdminPackages.edit.text_confirm_load_email'] = 'Are you sure you want to load the sample email? This will discard all changes.';

$lang['AdminPackages.edit.field_term'] = "Begriff"; //en: "'Term'"
$lang['AdminPackages.edit.field_setupfee'] = "Setup Gebühr"; //en: "'Setup Fee'"
$lang['AdminPackages.edit.field_cancelfee'] = "Abrechgebühr "; //en: "'Cancel Fee'"

$lang['AdminPackages.edit.field_email'] = "Willkommen E-Mail"; //en: "'Welcome E-mail'"

$lang['AdminPackages.edit.field_packagesubmit'] = "Paket aktualisieren"; //en: "'Update Package'"

$lang['AdminPackages.edit.categorylink_addprice'] = "Zusätzlichen Preis hinzufügen"; //en: "'Add Additional Price'"
$lang['AdminPackages.edit.categorylink_loademail'] = 'Load Sample Email';


// Package groups
$lang['AdminPackages.groups.page_title'] = "Paketgruppen"; //en: "'Package Groups'"
$lang['AdminPackages.groups.category_standard'] = "Standard"; //en: "'Standard'"
$lang['AdminPackages.groups.category_addon'] = "Erweiterung"; //en: "'Add-on'"
$lang['AdminPackages.groups.categorylink_creategroup'] = "Gruppe erstellen"; //en: "'Create Group'"

$lang['AdminPackages.groups.boxtitle_packagegroups'] = "Paketgruppen"; //en: "'Package Groups'"
$lang['AdminPackages.groups.heading_name'] = "Name"; //en: "'Name'"
$lang['AdminPackages.groups.heading_type'] = "Typ"; //en: "'Type'"
$lang['AdminPackages.groups.heading_options'] = "Optionen"; //en: "'Options'"
$lang['AdminPackages.groups.option_edit'] = "Bearbeiten"; //en: "'Edit'"
$lang['AdminPackages.groups.option_delete'] = "Löschen"; //en: "'Delete'"
$lang['AdminPackages.groups.confirm_delete'] = "Möchten Sie diese Paketgruppe wirklich löschen? Alle dieser Gruppe zugewiesenen Pakete werden dieser Gruppe nicht mehr zugewiesen und können möglicherweise nicht mehr verwendet werden."; //en: "'Are you sure you want to delete this package group? Any packages assigned to this group will no longer be assigned to this group, and may become unusable.'"

$lang['AdminPackages.groups.heading_parent_groups'] = "Elterngruppen"; //en: "'Parent Groups'"
$lang['AdminPackages.groups.heading_group'] = "Gruppen Name"; //en: "'Group Name'"
$lang['AdminPackages.groups.no_results'] = "Es existieren keine Pakete-Gruppen."; //en: "'There are no package groups.'"
$lang['AdminPackages.groups.parents_no_results'] = "Diese Add-On-Gruppe enthält keine übergeordneten Paketgruppen."; //en: "'This add-on group has no parent package groups.'"


$lang['AdminPackages.groups.heading_packages'] = "Mitgliedspakete"; //en: "'Member Packages'"
$lang['AdminPackages.groups.heading_package_name'] = "Paketname"; //en: "'Package Name'"
$lang['AdminPackages.groups.packages_no_results'] = "Diese Paketgruppe hat keine zugewiesenen Pakete."; //en: "'This package group has no assigned packages.'"


// Add Package Group
$lang['AdminPackages.addgroup.page_title'] = "Neue Produktgruppe"; //en: "'New Package Group'"
$lang['AdminPackages.addgroup.boxtitle_addgroup'] = "Neue Paketgruppe"; //en: "'New Package Group'"

$lang['AdminPackages.addgroup.field_name'] = "Name"; //en: "'Name'"
$lang['AdminPackages.addgroup.field_type'] = "Typ"; //en: "'Type'"
$lang['AdminPackages.addgroup.field_description'] = "Beschreibung"; //en: "'Description'"
$lang['AdminPackages.addgroup.field_allow_upgrades'] = "Erlaube Upgrades/Downgrades zwischen Packages innerhalb dieser Gruppe"; //en: "'Allow Upgrades/Downgrades between Packages within this Group'"
$lang['AdminPackages.addgroup.text_parentgroups'] = "Elterngruppen"; //en: "'Parent Groups'"
$lang['AdminPackages.addgroup.text_availablegroups'] = "Verfügbare Gruppen"; //en: "'Available Groups'"

$lang['AdminPackages.addgroup.field_addgroupsubmit'] = "Gruppe erstellen"; //en: "'Create Group'"


// Edit Package Group
$lang['AdminPackages.editgroup.page_title'] = "Paketgruppe speichern"; //en: "'Update Package Group'"
$lang['AdminPackages.editgroup.boxtitle_editgroup'] = "Paketgruppe aktualisieren"; //en: "'Update Package Group'"

$lang['AdminPackages.editgroup.field_name'] = "Name"; //en: "'Name'"
$lang['AdminPackages.editgroup.field_type'] = "Typ"; //en: "'Type'"
$lang['AdminPackages.editgroup.field_description'] = "Beschreibung"; //en: "'Description'"
$lang['AdminPackages.editgroup.field_allow_upgrades'] = "Erlaube Upgrades / Downgrades zwischen Paketen innerhalb dieser Gruppe"; //en: "'Allow Upgrades/Downgrades between Packages within this Group'"
$lang['AdminPackages.editgroup.text_parentgroups'] = "Übergeordnete Gruppen"; //en: "'Parent Groups'"
$lang['AdminPackages.editgroup.text_availablegroups'] = "Verfügbare Gruppen"; //en: "'Available Groups'"

$lang['AdminPackages.editgroup.field_editgroupsubmit'] = "Gruppe speichern"; //en: "'Update Group'"


// Module Options
$lang['AdminPackages.moduleoptions.not_applicable'] = "Gruppe"; //en: "'Group'"
