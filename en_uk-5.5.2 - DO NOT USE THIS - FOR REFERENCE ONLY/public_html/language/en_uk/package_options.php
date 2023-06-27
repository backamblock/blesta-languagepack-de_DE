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

$lang['PackageOptions.!error.company_id.exists'] = "Invalid company ID.";
$lang['PackageOptions.!error.name.empty'] = "Please enter a name for this option.";
$lang['PackageOptions.!error.values[][step].valid'] = "A step value may only be set for the quantity type, and must be a value of 1 or greater.";
$lang['PackageOptions.!error.values[][min].valid'] = "A minimum limit value may only be set for the quantity type, and must be a value of 0 or greater.";
$lang['PackageOptions.!error.values[][max].valid'] = "The maximum limit value may only be set for the quantity type, and must be a value of 1 or greater.";
$lang['PackageOptions.!error.values[][value].length'] = "The option value may not exceed 255 characters in length.";
$lang['PackageOptions.!error.groups.exists'] = "At least one of the package option group IDs given does not exist or does not belong to the same company.";
$lang['PackageOptions.!error.option_id.exists'] = "Invalid package option ID.";
$lang['PackageOptions.!error.values[][pricing][][term].format'] = "Term must be a number.";
$lang['PackageOptions.!error.values[][pricing][][term].length'] = "Term length may not exceed 5 characters.";
$lang['PackageOptions.!error.values[][pricing][][term].valid'] = "The term must be greater than 0.";
$lang['PackageOptions.!error.values[][pricing][][price].format'] = "Price must be a number.";
$lang['PackageOptions.!error.values[][pricing][][setup_fee].format'] = "Setup fee must be a number.";
$lang['PackageOptions.!error.values[][pricing][][currency].format'] = "Currency code must be 3 characters.";
$lang['PackageOptions.gettypes.checkbox'] = "Checkbox";
$lang['PackageOptions.gettypes.select'] = "Drop-down";
$lang['PackageOptions.gettypes.radio'] = "Radio";
$lang['PackageOptions.getfields.label_quantity'] = "x %1\$s %2\$s"; // %1$s is the option value, %2$s is the option price
$lang['PackageOptions.getfields.label_quantity_setup'] = "x %1\$s %2\$s + %3\$s setup"; // %1$s is the option value, %2$s is the option price, %3$s is the setup fee
$lang['PackageOptions.getfields.label_radio'] = "%1\$s (%2\$s)"; // %1$s is the option value, %2$s is the option price
$lang['PackageOptions.getfields.label_radio_setup'] = "%1\$s (%2\$s + %3\$s setup)"; // %1$s is the option value, %2$s is the option price, %3$s is the setup fee
$lang['PackageOptions.getfields.label_select'] = "%1\$s (%2\$s)"; // %1$s is the option value, %2$s is the option price
$lang['PackageOptions.getfields.label_checkbox'] = "%1\$s (%2\$s)"; // %1$s is the option value, %2$s is the option price
$lang['PackageOptions.getfields.label_checkbox_setup'] = "%1\$s (%2\$s + %3\$s setup)"; // %1$s is the option value, %2$s is the option price, %3$s is the setup fee
$lang['PackageOptions.!error.type.valid'] = "Please select an option type.";
$lang['PackageOptions.!error.values[][pricing][][id].exists'] = "Invalid package option pricing ID.";
$lang['PackageOptions.!error.values.single_default_value'] = "Only one value may be selected as the default value.";
$lang['PackageOptions.!error.values[][pricing][][price_renews].format'] = "Renewal price must be a number.";
$lang['PackageOptions.!error.values[][pricing][][price_renews].valid'] = "Renewal price cannot be set for a one time period.";
?>