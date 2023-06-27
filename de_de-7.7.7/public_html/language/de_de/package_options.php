<?php
/**
 * actually GOOD de_de Language definitions. Translated by backamblock on Github
 * 
 * @package blesta
 * @version 7.7.7
 * @copyright Copyright (c) 2023, backamblock on Github
 * @license https://github.com/backamblock/ backamblock on Github - FREE for everybody
 * @link https://github.com/backamblock/ backamblock on Github
 */

$lang['PackageOptions.!error.company_id.exists'] = "Ungültige Firmennummer";
$lang['PackageOptions.!error.label.empty'] = "Bitte geben Sie ein Etikett ein.";
$lang['PackageOptions.!error.label.length'] = "Das Label darf nicht länger als 128 Zeichen sein.";
$lang['PackageOptions.!error.name.empty'] = "Bitte geben Sie einen Namen für diese Option ein.";
$lang['PackageOptions.!error.name.length'] = "Der NAme darf 128 Zeichen nicht Überschreiten. ";
$lang['PackageOptions.!error.values.count'] = "Es kann nur einen Optionswert für Kontrollkästchen, Anzahl, Text, Textbereich oder Kennworttyp geben.";
$lang['PackageOptions.!error.values[][step].valid'] = "Ein Schrittwert darf nur für die Mengenart festgelegt werden und muss mindestens 1 sein.";
$lang['PackageOptions.!error.values[][min].valid'] = "Ein Mindestgrenzwert darf nur für die Mengenart festgelegt werden und muss einen Wert von 0 oder größer haben.";
$lang['PackageOptions.!error.values[][max].valid'] = "Der maximale Grenzwert darf nur für die Mengenart festgelegt werden und muss einen Wert von 1 oder größer haben.";
$lang['PackageOptions.!error.values[][name].empty'] = "Bitte geben Sie einen Namen für den Optionswert ein.";
$lang['PackageOptions.!error.values[][name].length'] = "Der Name des Optionswerts darf nicht länger als 128 Zeichen sein.";
$lang['PackageOptions.!error.values[][value].length'] = "Die Grenze von 255 Zeichen länge darf nicht überschritten werden.";
$lang['PackageOptions.!error.groups.exists'] = "Mindestens eine der angegebenen Paketoptionsgruppen-IDs ist nicht vorhanden oder gehört nicht zu derselben Firma.";
$lang['PackageOptions.!error.option_id.exists'] = "Ungültige Paketoptions-ID";
$lang['PackageOptions.!error.values[][pricing][][term].format'] = "Begriff muss eine Zahl sein.";
$lang['PackageOptions.!error.values[][pricing][][term].length'] = "Die Laufzeit darf 5 Zeichen nicht überschreiten.";
$lang['PackageOptions.!error.values[][pricing][][term].valid'] = "Der Ausdruck muss größer als 0 sein.";
$lang['PackageOptions.!error.values[][pricing][][period].format'] = "Ungültiger Periodentyp";
$lang['PackageOptions.!error.values[][pricing][][price].format'] = "Der Preis muss eine Zahl sein.";
$lang['PackageOptions.!error.values[][pricing][][setup_fee].format'] = "Setup-Gebühr muss eine Nummer sein.";
$lang['PackageOptions.!error.values[][pricing][][currency].format'] = "Der Währungscode muss aus 3 Zeichen bestehen.";
$lang['PackageOptions.gettypes.checkbox'] = "Kontrollkästchen";
$lang['PackageOptions.gettypes.select'] = "Dropdown-Liste";
$lang['PackageOptions.gettypes.quantity'] = "Anzahl";
$lang['PackageOptions.gettypes.radio'] = "Radio";
$lang['PackageOptions.getfields.label_quantity'] = "x %1\$s %2\$s"; // %1$s is the option value, %2$s is the option price
$lang['PackageOptions.getfields.label_quantity_setup'] = "x %1\$s %2\$s + %3\$s Einrichtungsgebühr"; // %1$s is the option value, %2$s is the option price, %3$s is the setup fee
$lang['PackageOptions.getfields.label_radio'] = "%1\$s (%2\$s)"; // %1$s is the option value, %2$s is the option price
$lang['PackageOptions.getfields.label_radio_setup'] = "%1\$s (%2\$s + %3\$s Einrichtungsgebühr)"; // %1$s is the option value, %2$s is the option price, %3$s is the setup fee
$lang['PackageOptions.getfields.label_select'] = "%1\$s (%2\$s)"; // %1$s is the option value, %2$s is the option price
$lang['PackageOptions.getfields.label_select_setup'] = "%1\$s (%2\$s + %3\$s Setup)"; // %1$s is the option value, %2$s is the option price, %3$s is the setup fee
$lang['PackageOptions.getfields.label_checkbox'] = "%1\$s (%2\$s)"; // %1$s is the option value, %2$s is the option price
$lang['PackageOptions.getfields.label_checkbox_setup'] = "%1\$s (%2\$s + %3\$s Einrichtung)"; // %1$s is the option value, %2$s is the option price, %3$s is the setup fee
$lang['PackageOptions.!error.type.valid'] = "Bitte wählen Sie einen Optionstyp.";
$lang['PackageOptions.!error.values[][id].exists'] = "Ungültige Paketoptions-ID";
$lang['PackageOptions.!error.values[][pricing][][id].exists'] = "Ungültige Preiskennzahl für Paketoptionen";
$lang['PackageOptions.!error.values.select_value'] = "Mindestens ein Optionswert enthält ungültige Sonderzeichen.";
$lang['PackageOptions.gettypes.text'] = "Text";
$lang['PackageOptions.gettypes.textarea'] = "Textbereich";
$lang['PackageOptions.gettypes.password'] = "Passwort";
$lang['PackageOptions.getfields.label_text'] = "%1\$s"; // %1$s is the option price
$lang['PackageOptions.getfields.label_text_setup'] = "%1\$s + %2\$s Einrichtungsgebühr"; // %1$s is the option price, %2$s is the setup fee
$lang['PackageOptions.getfields.label_password'] = "%1\$s"; // %1$s is the option price
$lang['PackageOptions.getfields.label_password_setup'] = "%1\$s + %2\$s Einrichtungsgebühr"; // %1$s is the option price, %2$s is the setup fee
$lang['PackageOptions.getfields.label_textarea'] = "%1\$s"; // %1$s is the option price
$lang['PackageOptions.getfields.label_textarea_setup'] = "%1\$s + %2\$s Einrichtungsgebühr"; // %1$s is the option price, %2$s is the setup fee
$lang['PackageOptions.!error.values[][pricing][][price_renews].format'] = "Der Verlängerungspreis muss eine Zahl sein.";
$lang['PackageOptions.getvaluestatuses.inactive'] = "Inaktiv";
$lang['PackageOptions.getfields.label_text_setup_recurring'] = "%1\$s + %2\$s Einrichtungsgebühr (Verlängerung @ %3\$s)"; // %1$s is the option initial price, %2$s is the setup fee, %3$s is the option renewal price
$lang['PackageOptions.getfields.label_textarea_recurring'] = "%1\$s (erneuert sich @ %2\$s)"; // %1$s is the option initial price, %2$s is the option renewal price
?>