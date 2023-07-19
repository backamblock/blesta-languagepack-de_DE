<?php
/**
 * Language definitions for the Admin Package Options controller/views
 *
 * @package blesta
 * @subpackage blesta.language.de_de
 * @copyright Copyright (c) 2013, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

// Success
$lang['AdminPackageOptions.!success.group_added'] = "Die Paketoptionsgruppe wurde erfolgreich erstellt."; //en: "'The package option group has been successfully created.'"
$lang['AdminPackageOptions.!success.group_updated'] = "Die Paketoptionsgruppe wurde erfolgreich aktualisiert."; //en: "'The package option group has been successfully updated.'"
$lang['AdminPackageOptions.!success.group_deleted'] = "Die Paketoptionsgruppe wurde erfolgreich gelöscht."; //en: "'The package option group has been successfully deleted.'"

$lang['AdminPackageOptions.!success.option_added'] = "Die Paketoption wurde erfolgreich erstellt."; //en: "'The package option has been successfully created.'"
$lang['AdminPackageOptions.!success.option_updated'] = "Die Paketoption wurde erfolgreich aktualisiert."; //en: "'The package option has been successfully updated.'"
$lang['AdminPackageOptions.!success.option_deleted'] = "Die Paketoption wurde erfolgreich gelöscht."; //en: "'The package option has been successfully deleted.'"
$lang['AdminPackageOptions.!success.option_removed'] = "Die Paketoption wurde erfolgreich aus der Paketoptionsgruppe entfernt."; //en: "'The package option has been successfully removed from the package option group.'"

$lang['AdminPackageOptions.!success.logic_updated'] = 'The package option logic has been successfully updated.';


// Index
$lang['AdminPackageOptions.index.page_title'] = "Paketoptionen"; //en: "'Package Options'"
$lang['AdminPackageOptions.index.boxtitle_options'] = "Konfigurierbare Optionen"; //en: "'Configurable Options'"

$lang['AdminPackageOptions.index.category_groups'] = "Gruppen"; //en: "'Groups'"
$lang['AdminPackageOptions.index.category_options'] = "Optionen"; //en: "'Options'"

$lang['AdminPackageOptions.index.categorylink_createoption'] = "Option erstellen"; //en: "'Create Option'"
$lang['AdminPackageOptions.index.categorylink_creategroup'] = "Gruppe erstellen"; //en: "'Create Group'"

$lang['AdminPackageOptions.index.heading_name'] = "Name"; //en: "'Name'"
$lang['AdminPackageOptions.index.heading_label'] = "Etikette"; //en: "'Label'"
$lang['AdminPackageOptions.index.heading_options'] = "Optionen"; //en: "'Options'"
$lang['AdminPackageOptions.index.option_edit'] = "Bearbeiten"; //en: "'Edit'"
$lang['AdminPackageOptions.index.option_logic'] = 'Option Logic';
$lang['AdminPackageOptions.index.option_delete'] = "Löschen"; //en: "'Delete'"

$lang['AdminPackageOptions.index.confirm_delete_group'] = "Möchten Sie diese Paketoptionsgruppe wirklich löschen?"; //en: "'Are you sure you want to delete this package option group?'"
$lang['AdminPackageOptions.index.confirm_delete_option'] = "Möchten Sie diese Paketoption wirklich löschen?"; //en: "'Are you sure you want to delete this package option?'"

$lang['AdminPackageOptions.index.no_results_groups'] = "Es gibt keine konfigurierbaren Optionsgruppen."; //en: "'There are no configurable option groups.'"
$lang['AdminPackageOptions.index.no_results_options'] = "Es gibt keine konfigurierbaren Optionen."; //en: "'There are no configurable options.'"


// Package option group info
$lang['AdminPackageOptions.groupinfo.heading_options'] = "Optionen"; //en: "'Options'"
$lang['AdminPackageOptions.groupinfo.heading_label'] = "Optionslabel"; //en: "'Option Label'"
$lang['AdminPackageOptions.groupinfo.heading_options'] = 'Options';
$lang['AdminPackageOptions.groupinfo.option_edit'] = "Bearbeiten"; //en: "'Edit'"
$lang['AdminPackageOptions.groupinfo.option_remove'] = "Aus Gruppe entfernen"; //en: "'Remove from Group'"
$lang['AdminPackageOptions.groupinfo.confirm_remove_option'] = "Möchten Sie diese Paketoption wirklich aus dieser Paketoptionsgruppe entfernen?"; //en: "'Are you sure you want to remove this package option from this package option group?'"
$lang['AdminPackageOptions.groupinfo.no_results'] = "Diese Gruppe enthält keine Paketoptionen."; //en: "'There are no package options assigned to this group.'"


// Option info
$lang['AdminPackageOptions.optioninfo.heading_options'] = "Optionswerte"; //en: "'Option Values'"
$lang['AdminPackageOptions.optioninfo.heading_name'] = "Name"; //en: "'Name'"
$lang['AdminPackageOptions.optioninfo.heading_value'] = "Wert"; //en: "'Value'"
$lang['AdminPackageOptions.optioninfo.heading_min'] = "Min"; //en: "'Min'"
$lang['AdminPackageOptions.optioninfo.heading_max'] = "max."; //en: "'Max'"
$lang['AdminPackageOptions.optioninfo.heading_step'] = "Schritt"; //en: "'Step'"
$lang['AdminPackageOptions.optioninfo.heading_status'] = "Status"; //en: "'Status'"
$lang['AdminPackageOptions.optioninfo.no_results'] = "Dieser Option sind keine Werte zugeordnet."; //en: "'There are no values assigned to this option.'"


// Tooltips
$lang['AdminPackageOptions.!tooltip.price_renews'] = 'A price can be set here for renewals, or will otherwise default to the set Price. Any prorated changes to services will be based off of this value.';
$lang['AdminPackageOptions.!tooltip.label'] = "Dies ist die Beschriftung, die über diesem Formularfeld angezeigt wird."; //en: "'This is the label that will appear above this form field.'"
$lang['AdminPackageOptions.!tooltip.name'] = "Dies ist der Name des Formularfelds und wird nirgendwo angezeigt. Module können erwarten, dass dieser Name spezifisch ist, wenn er zur Bereitstellung verwendet wird."; //en: "'This is the form field name, and is not displayed anywhere. Modules may expect this name to be something specific, if used for provisioning.'"
$lang['AdminPackageOptions.!tooltip.type'] = "Der Typ des Formularfelds, das angezeigt werden soll."; //en: "'The type of form field that should be displayed.'"
$lang['AdminPackageOptions.!tooltip.option_name'] = "Dies ist der Anzeigename für diese Option."; //en: "'This is the display name for this option.'"
$lang['AdminPackageOptions.!tooltip.option_value'] = "Das ist der Wert für diese Option, der nirgendwo angezeigt wird. Module könnten für diese Option einen spezifischen Wert erwarten, wenn sie verwendet werden um etwas (ein Service) zu initialisieren."; //en: "'This is the value for this option, and is not displayed anywhere. Modules may expect this value to be something specific, if used for provisioning.'"
$lang['AdminPackageOptions.!tooltip.option_min'] = "Der minimal zulässige Wert"; //en: "'The minimum value allowed.'"
$lang['AdminPackageOptions.!tooltip.option_max'] = "Der maximal zulässige Wert."; //en: "'The maximum value allowed.'"
$lang['AdminPackageOptions.!tooltip.option_step'] = "Der Inkrementwert. Das heißt, der Unterschied zwischen einem gültigen Wert und einem anderen."; //en: "'The increment value. That is, the difference between one valid value and another.'"
$lang['AdminPackageOptions.!tooltip.option_status'] = 'Inactive option values can no longer be selected for services, but can be kept for existing services until changed to a different value.';
$lang['AdminPackageOptions.!tooltip.option_default'] = 'The checked option value will be the default value selected when this option is added for a service.';
$lang['AdminPackageOptions.!tooltip.option_pricing_term'] = "Auf allen Bestellformularen werden nur Preisoptionen angezeigt, die der Laufzeit und Währung des ausgewählten Pakets entsprechen."; //en: "'Only pricing options that match the term and currency for the Package chosen will be displayed on any order forms.'"

$lang['AdminPackageOptions.!tooltip.package_membership'] = "Pakete können hier entweder der Paketoptionsgruppe zugewiesen werden, oder Paketoptionsgruppen können Paketen einzeln zugewiesen werden."; //en: "'Packages may either be assigned to the package option group here, or package option groups may be assigned to packages individually.'"


// Add Option
$lang['AdminPackageOptions.add.page_title'] = "Neue Paketoption"; //en: "'New Package Option'"
$lang['AdminPackageOptions.add.boxtitle_addoption'] = "Neue Paketoption"; //en: "'New Package Option'"

$lang['AdminPackageOptions.add.heading_basic'] = "Basic"; //en: "'Basic'"
$lang['AdminPackageOptions.add.field_label'] = "Bezeichnung"; //en: "'Label'"
$lang['AdminPackageOptions.add.field_name'] = "Name"; //en: "'Name'"
$lang['AdminPackageOptions.add.field_description'] = 'Description';
$lang['AdminPackageOptions.add.field_type'] = "Art"; //en: "'Type'"
$lang['AdminPackageOptions.add.field_addable'] = "Kunden Paket Hinzufügen"; //en: "'Client can Add'"
$lang['AdminPackageOptions.add.field_editable'] = "Client kann bearbeiten"; //en: "'Client can Edit'"

$lang['AdminPackageOptions.add.heading_options'] = "Optionen"; //en: "'Options'"
$lang['AdminPackageOptions.add.categorylink_addoption'] = "Weiter Optionen hinzufügen"; //en: "'Add Additional Option'"
$lang['AdminPackageOptions.add.text_name'] = "Name"; //en: "'Name'"
$lang['AdminPackageOptions.add.text_value'] = "Wert"; //en: "'Value'"
$lang['AdminPackageOptions.add.text_min'] = "Mindest"; //en: "'Min'"
$lang['AdminPackageOptions.add.text_max'] = "Max"; //en: "'Max'"
$lang['AdminPackageOptions.add.text_step'] = "Schritt"; //en: "'Step'"
$lang['AdminPackageOptions.add.text_default'] = 'Default';
$lang['AdminPackageOptions.add.text_status'] = 'Status';
$lang['AdminPackageOptions.add.text_options'] = "Optionen"; //en: "'Options'"
$lang['AdminPackageOptions.add.text_delete'] = "Löschen"; //en: "'Delete'"

$lang['AdminPackageOptions.add.heading_prices'] = "Preis"; //en: "'Pricing'"
$lang['AdminPackageOptions.add.price_term'] = "Begriff"; //en: "'Term'"
$lang['AdminPackageOptions.add.price_period'] = "Zeitraum"; //en: "'Period'"
$lang['AdminPackageOptions.add.price_currency'] = "Währung"; //en: "'Currency'"
$lang['AdminPackageOptions.add.price_price'] = "Preis"; //en: "'Price'"
$lang['AdminPackageOptions.add.price_price_renews'] = 'Renewal Price';
$lang['AdminPackageOptions.add.price_setup'] = "Einrichtungsgebühr"; //en: "'Setup Fee'"
$lang['AdminPackageOptions.add.price_options'] = "Optionen"; //en: "'Options'"
$lang['AdminPackageOptions.add.price_add'] = "Hinzufügen"; //en: "'Add'"
$lang['AdminPackageOptions.add.price_delete'] = "Löschen"; //en: "'Delete'"

$lang['AdminPackageOptions.add.heading_groups'] = "Gruppenmitgliedschaft"; //en: "'Group Membership'"
$lang['AdminPackageOptions.add.text_membergroups'] = "Mitgliedergruppen"; //en: "'Member Groups'"
$lang['AdminPackageOptions.add.text_availablegroups'] = "Verfügbare Gruppen"; //en: "'Available Groups'"

$lang['AdminPackageOptions.add.field_submit'] = "Paketoption erstellen"; //en: "'Create Package Option'"


// Add Option
$lang['AdminPackageOptions.edit.page_title'] = "Paket-Option aktualisieren"; //en: "'Update Package Option'"
$lang['AdminPackageOptions.edit.boxtitle_editoption'] = "Paket Option aktualisieren"; //en: "'Update Package Option'"

$lang['AdminPackageOptions.edit.heading_basic'] = "Basic"; //en: "'Basic'"
$lang['AdminPackageOptions.edit.field_label'] = "Kennzeichnung"; //en: "'Label'"
$lang['AdminPackageOptions.edit.field_name'] = "Name"; //en: "'Name'"
$lang['AdminPackageOptions.edit.field_description'] = 'Description';
$lang['AdminPackageOptions.edit.field_type'] = "Art"; //en: "'Type'"
$lang['AdminPackageOptions.edit.field_addable'] = "Kunde darf hinzufügen"; //en: "'Client can Add'"
$lang['AdminPackageOptions.edit.field_editable'] = "Client kann bearbeiten"; //en: "'Client can Edit'"

$lang['AdminPackageOptions.edit.heading_options'] = "Optionen"; //en: "'Options'"
$lang['AdminPackageOptions.edit.categorylink_editoption'] = "Zusätzliche Option hinzufügen"; //en: "'Add Additional Option'"
$lang['AdminPackageOptions.edit.text_name'] = "Name"; //en: "'Name'"
$lang['AdminPackageOptions.edit.text_value'] = "Wert"; //en: "'Value'"
$lang['AdminPackageOptions.edit.text_default'] = 'Default';
$lang['AdminPackageOptions.edit.text_status'] = "Status"; //en: "'Status'"
$lang['AdminPackageOptions.edit.text_min'] = "Min"; //en: "'Min'"
$lang['AdminPackageOptions.edit.text_max'] = "Max"; //en: "'Max'"
$lang['AdminPackageOptions.edit.text_step'] = "Schritt"; //en: "'Step'"
$lang['AdminPackageOptions.edit.text_options'] = "Optionen"; //en: "'Options'"
$lang['AdminPackageOptions.edit.text_delete'] = "Löschen"; //en: "'Delete'"

$lang['AdminPackageOptions.edit.heading_prices'] = "Preise"; //en: "'Pricing'"
$lang['AdminPackageOptions.edit.price_term'] = "Begriff"; //en: "'Term'"
$lang['AdminPackageOptions.edit.price_period'] = "Zeitraum"; //en: "'Period'"
$lang['AdminPackageOptions.edit.price_currency'] = "Währung"; //en: "'Currency'"
$lang['AdminPackageOptions.edit.price_price'] = "Preis"; //en: "'Price'"
$lang['AdminPackageOptions.edit.price_price_renews'] = 'Renewal Price';
$lang['AdminPackageOptions.edit.price_setup'] = "Einrichtungsgebühr"; //en: "'Setup Fee'"
$lang['AdminPackageOptions.edit.price_options'] = "Optionen"; //en: "'Options'"
$lang['AdminPackageOptions.edit.price_add'] = "Hinzufügen"; //en: "'Add'"
$lang['AdminPackageOptions.edit.price_delete'] = "Löschen"; //en: "'Delete'"

$lang['AdminPackageOptions.edit.heading_groups'] = "Gruppenmitgliedschaft"; //en: "'Group Membership'"
$lang['AdminPackageOptions.edit.text_membergroups'] = "Mitgliedergruppen"; //en: "'Member Groups'"
$lang['AdminPackageOptions.edit.text_availablegroups'] = "Verfügbare Gruppen"; //en: "'Available Groups'"

$lang['AdminPackageOptions.edit.field_submit'] = "Paketoption aktualisieren"; //en: "'Update Package Option'"


// Add Group
$lang['AdminPackageOptions.addgroup.page_title'] = "Neue Paketoptionsgruppe"; //en: "'New Package Option Group'"
$lang['AdminPackageOptions.addgroup.boxtitle_addgroup'] = "Neue Paketoptionsgruppe"; //en: "'New Package Option Group'"

$lang['AdminPackageOptions.addgroup.heading_basic'] = "Basic"; //en: "'Basic'"
$lang['AdminPackageOptions.addgroup.field_name'] = "Name"; //en: "'Name'"
$lang['AdminPackageOptions.addgroup.field_description'] = "Beschreibung"; //en: "'Description'"

$lang['AdminPackageOptions.addgroup.heading_packages'] = "Paket-Mitgliedschaft"; //en: "'Package Membership'"
$lang['AdminPackageOptions.addgroup.text_memberpackages'] = "Mitgliedspakete"; //en: "'Member Packages'"
$lang['AdminPackageOptions.addgroup.text_availablepackages'] = "Verfügbare Pakete"; //en: "'Available Packages'"

$lang['AdminPackageOptions.addgroup.field_addgroupsubmit'] = "Gruppe erstellen"; //en: "'Create Group'"


// Edit Group
$lang['AdminPackageOptions.editgroup.page_title'] = "Aktualisierungspaket-Optionsgruppe"; //en: "'Update Package Option Group'"
$lang['AdminPackageOptions.editgroup.boxtitle_editgroup'] = "Paketoptionsgruppe aktualisieren"; //en: "'Update Package Option Group'"

$lang['AdminPackageOptions.editgroup.heading_basic'] = "Basic"; //en: "'Basic'"
$lang['AdminPackageOptions.editgroup.field_name'] = "Name"; //en: "'Name'"
$lang['AdminPackageOptions.editgroup.field_description'] = "Beschreibung"; //en: "'Description'"

$lang['AdminPackageOptions.editgroup.heading_packages'] = "Paket-Mitgliedschaft"; //en: "'Package Membership'"
$lang['AdminPackageOptions.editgroup.text_memberpackages'] = "Mitgliedspakete"; //en: "'Member Packages'"
$lang['AdminPackageOptions.editgroup.text_availablepackages'] = "Verfügbare Pakete"; //en: "'Available Packages'"

$lang['AdminPackageOptions.editgroup.field_editgroupsubmit'] = "Gruppe aktualisieren"; //en: "'Update Group'"


$lang['AdminPackageOptions.logic.boxtitle'] = 'Configurable Option Logic';
$lang['AdminPackageOptions.logic.title_condition_sets'] = 'Condition Sets';

$lang['AdminPackageOptions.logic.heading_trigger_option_id'] = "Auslösende Option"; //en: "'Triggering Option'"
$lang['AdminPackageOptions.logic.heading_operator'] = "Vergleichsoperator"; //en: "'Comparison Operator'"
$lang['AdminPackageOptions.logic.heading_value'] = 'Value';
$lang['AdminPackageOptions.logic.heading_options'] = 'Options';

$lang['AdminPackageOptions.logic.tooltip_trigger_option_id'] = 'The option to compare against the given value.';
$lang['AdminPackageOptions.logic.tooltip_value'] = 'The value to which the triggering option should be compared. For the "in" operator you may enter a comma separated list value1,value2,value3';

$lang['AdminPackageOptions.logic.field_option_id'] = 'Enable Option:';
$lang['AdminPackageOptions.logic.field_option_value_id'] = 'Enable Option Value:';
$lang['AdminPackageOptions.logic.field_submit'] = 'Save Logic';

$lang['AdminPackageOptions.logic.text_if'] = 'IF';
$lang['AdminPackageOptions.logic.text_or'] = '-- OR --';
$lang['AdminPackageOptions.logic.text_and'] = 'AND';
$lang['AdminPackageOptions.logic.text_description'] = 'If ANY condition sets associated with a Option or Option Value evaluate as true, then it will be enabled. Otherwise it will be disabled. ALL conditions in a set must evaluate as true for a set to do the same. An Option with no condition sets will always be enabled.';

$lang['AdminPackageOptions.logic.option_add_set'] = 'Add Condition Set';
$lang['AdminPackageOptions.logic.option_add'] = 'Add';
$lang['AdminPackageOptions.logic.option_remove'] = 'Remove';
$lang['AdminPackageOptions.logic.option_remove_set'] = 'Remove Condition Set';


$lang['AdminPackageOptions.logicsettings.boxtitle'] = 'Configurable Option Logic - Settings';
$lang['AdminPackageOptions.logicsettings.field_hide_options'] = 'Hide options disabled by configurable option logic';
$lang['AdminPackageOptions.logicsettings.field_submit'] = 'Submit';
