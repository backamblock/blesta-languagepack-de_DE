<?php
/**
 * Language definitions for the Admin Company Taxes settings controller/views
 *
 * @package blesta
 * @subpackage blesta.language.de_de
 * @copyright Copyright (c) 2010, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

// Success messages
$lang['AdminCompanyTaxes.!success.basic_updated'] = "Die Basis Steuereinstellungen wurden erfolgreich aktualisiert!"; //en: "'The Basic Tax settings were successfully updated!'"
$lang['AdminCompanyTaxes.!success.taxrule_created'] = "Die Steuerregel wurde erfolgreich erstellt!"; //en: "'The tax rule has been successfully created!'"
$lang['AdminCompanyTaxes.!success.taxrule_updated'] = "Die Steuerregel wurde erfolgreich aktualisiert!"; //en: "'The tax rule has been successfully updated!'"
$lang['AdminCompanyTaxes.!success.rule_deleted'] = "Die Steuerregel wurde erfolgreich gelöscht."; //en: "'The tax rule has been successfully deleted.'"

$lang['AdminCompanyTaxes.countries.all'] = "-- Alle --"; //en: "'-- All --'"
$lang['AdminCompanyTaxes.states.all'] = "-- Alle --"; //en: "'-- All --'"


// Tooltips
$lang['AdminCompanyTaxes.!tooltip.type'] = 'Inclusive will calculate tax as a part of the item prices you set and will be subtracted from the item price for tax exempt users.<br/>
Inclusive (Additive) will calculate tax in addition to the item prices you set.<br/>
Exclusive will calculate tax in addition to the item prices you set, but will not include it in the order total display.';
$lang['AdminCompanyTaxes.!tooltip.level'] = 'The tax level allows you to set the tax order if multiple tax rules apply.';
$lang['AdminCompanyTaxes.!tooltip.name'] = "Der Name der Steuer (z. B. Umsatzsteuer)."; //en: "'The displayed name of the tax (e.g. Sales Tax).'"
$lang['AdminCompanyTaxes.!tooltip.amount'] = 'The tax amount as a percentage.';
$lang['AdminCompanyTaxes.!tooltip.country'] = 'Select the country that this tax rule applies to.';
$lang['AdminCompanyTaxes.!tooltip.state'] = "Wählen Sie den Staat/die Provinz aus, für den/die diese Steuerregel gilt."; //en: "'Select the state/province that this tax rule applies to.'"


// Basic Tax settings
$lang['AdminCompanyTaxes.basic.page_title'] = "Einstellungen > Firma > Steuern > Grundeinstellungen"; //en: "'Settings > Company > Taxes > Basic Tax Settings'"
$lang['AdminCompanyTaxes.basic.boxtitle_basic'] = "Grundlegende Steuereinstellungen"; //en: "'Basic Tax Settings'"

$lang['AdminCompanyTaxes.basic.heading_general'] = "Allgemeine Einstellungen"; //en: "'General Settings'"
$lang['AdminCompanyTaxes.basic.field_enable_tax'] = "Steuern aktivieren"; //en: "'Enable Tax'"
$lang['AdminCompanyTaxes.basic.note_enable_tax'] = "Aktivieren Sie diese Option, um Steuern für diese Firma zu aktivieren."; //en: "'Check this option to enable tax for this company.'"
$lang['AdminCompanyTaxes.basic.field_cascade_tax'] = "Kaskadensteuer"; //en: "'Cascade Tax'"
$lang['AdminCompanyTaxes.basic.note_cascade_tax'] = "Wenn aktiviert, wird Steuerstufe 1 zuerst auf der Rechnungssumme und Steuerstufe 2 auf dieser neuen Gesamtsumme einschließlich Steuerniveau 1 bewertet. Daraus ergibt sich eine Steuer auf Steuern. Ansonsten werden Steuerstufe 1 und Steuerstufe 2 nur auf der Vorsteuer-Rechnungssumme veranschlagt."; //en: "'If enabled, tax level 1 will first be assessed on the invoice total, and tax level 2 would be assessed on this new total including tax level 1. This results in a tax on tax. Othewise tax level 1 and tax level 2 are assessed only on the pre-tax invoice total.'"
$lang['AdminCompanyTaxes.basic.field_setup_fee_tax'] = "Steuer Setup Einstellungen"; //en: "'Tax Setup Fees'"
$lang['AdminCompanyTaxes.basic.note_setup_fee_tax'] = "Wenn aktiviert, werden Setup-Gebühren besteuert."; //en: "'If enabled, any setup fees will be taxed.'"
$lang['AdminCompanyTaxes.basic.field_cancelation_fee_tax'] = "Steuerstornierungsgebühren"; //en: "'Tax Cancelation Fees'"
$lang['AdminCompanyTaxes.basic.note_cancelation_fee_tax'] = "Falls aktiviert, werden alle Stornierungsgebühren besteuert."; //en: "'If enabled, any cancelation fees will be taxed.'"
$lang['AdminCompanyTaxes.basic.field_taxid'] = "Steuernummer / MwSt"; //en: "'Tax ID/VATIN'"

$lang['AdminCompanyTaxes.basic.heading_tax_provider'] = '%1$s Settings'; // %1$s is the name of the tax provider

$lang['AdminCompanyTaxes.basic.field_addsubmit'] = "Einstellungen Aktualisieren"; //en: "'Update Settings'"


// Tax Rules
$lang['AdminCompanyTaxes.rules.page_title'] = "Einstellungen > Firma > Steuern > Steuerregeln"; //en: "'Settings > Company > Taxes > Tax Rules'"
$lang['AdminCompanyTaxes.rules.no_results'] = "Es gibt keine Steuerregeln für die Ebene %1\$s."; // %1$s is the tax level number"; //en: "'There are no level %1$s tax rules.'; // %1$s is the tax level number"

$lang['AdminCompanyTaxes.rules.categorylink_addrule'] = "Steuerregel hinzufügen"; //en: "'Add Tax Rule'"
$lang['AdminCompanyTaxes.rules.boxtitle_rules'] = "Steuer Regeln"; //en: "'Tax Rules'"

$lang['AdminCompanyTaxes.rules.heading_level1'] = "Level 1 Regeln"; //en: "'Level 1 Rules'"
$lang['AdminCompanyTaxes.rules.heading_level2'] = "Stufe 2 Regeln"; //en: "'Level 2 Rules'"

$lang['AdminCompanyTaxes.rules.text_name'] = "Name"; //en: "'Name'"
$lang['AdminCompanyTaxes.rules.text_type'] = "Typ"; //en: "'Type'"
$lang['AdminCompanyTaxes.rules.text_amount'] = "Menge"; //en: "'Amount'"
$lang['AdminCompanyTaxes.rules.text_country'] = "Land"; //en: "'Country'"
$lang['AdminCompanyTaxes.rules.text_state'] = "Bundesland / Provinz"; //en: "'State/Province'"
$lang['AdminCompanyTaxes.rules.text_options'] = "Optionen"; //en: "'Options'"
$lang['AdminCompanyTaxes.rules.text_all'] = "Alle"; //en: "'All'"
$lang['AdminCompanyTaxes.rules.option_edit'] = "Bearbeiten"; //en: "'Edit'"
$lang['AdminCompanyTaxes.rules.option_delete'] = "Löschen"; //en: "'Delete'"
$lang['AdminCompanyTaxes.rules.confirm_delete'] = "Sind Sie sicher, dass Sie diese Steuer-Regel löschen möchten?"; //en: "'Are you sure you want to delete this tax rule?'"


// Add Tax Rule
$lang['AdminCompanyTaxes.add.page_title'] = "Einstellungen > Firma > Steuern > Steuerregel hinzufügen"; //en: "'Settings > Company > Taxes > Add Tax Rule'"
$lang['AdminCompanyTaxes.add.boxtitle_add'] = "Steuerregel hinzufügen"; //en: "'Add Tax Rule'"

$lang['AdminCompanyTaxes.add.field.type'] = "Steuerart"; //en: "'Tax Type'"
$lang['AdminCompanyTaxes.add.field.level'] = "Steuerklasse"; //en: "'Tax Level'"
$lang['AdminCompanyTaxes.add.field.level1'] = "Ebene 1"; //en: "'Level 1'"
$lang['AdminCompanyTaxes.add.field.level2'] = 'Level 2';
$lang['AdminCompanyTaxes.add.field.name'] = "Name der Steuer"; //en: "'Name of Tax'"
$lang['AdminCompanyTaxes.add.field.amount'] = 'Amount';
$lang['AdminCompanyTaxes.add.field.country'] = 'Country';
$lang['AdminCompanyTaxes.add.field.state'] = 'State/Province';

$lang['AdminCompanyTaxes.add.field.addsubmit'] = "Regel erstellen"; //en: "'Create Rule'"


// Edit Tax Rule
$lang['AdminCompanyTaxes.edit.page_title'] = "Einstellungen -> Unternehmen -> Steuern -> Steuerregel bearbeiten"; //en: "'Settings > Company > Taxes > Edit Tax Rule'"
$lang['AdminCompanyTaxes.edit.boxtitle_edit'] = "Steuerregel bearbeiten"; //en: "'Edit Tax Rule'"

$lang['AdminCompanyTaxes.edit.field.type'] = 'Tax Type';
$lang['AdminCompanyTaxes.edit.field.level'] = 'Tax Level';
$lang['AdminCompanyTaxes.edit.field.level1'] = "Level 1"; //en: "'Level 1'"
$lang['AdminCompanyTaxes.edit.field.level2'] = 'Level 2';
$lang['AdminCompanyTaxes.edit.field.name'] = 'Name of Tax';
$lang['AdminCompanyTaxes.edit.field.amount'] = 'Amount';
$lang['AdminCompanyTaxes.edit.field.country'] = 'Country';
$lang['AdminCompanyTaxes.edit.field.state'] = 'State/Province';

$lang['AdminCompanyTaxes.edit.field.editsubmit'] = 'Edit Rule';
