<?php
// Controller get functions

$lang['AdminMerchant.getsupportedfeatures.cc'] = 'Credit Card';
$lang['AdminMerchant.getsupportedfeatures.cc_offsite'] = "Offsite-Kreditkarte"; //en: "'Offsite Credit Card'"
$lang['AdminMerchant.getsupportedfeatures.cc_form'] = 'Custom Credit Card Form';
$lang['AdminMerchant.getsupportedfeatures.ach'] = 'ACH';
$lang['AdminMerchant.getsupportedfeatures.ach_offsite'] = 'Offsite ACH';
$lang['AdminMerchant.getsupportedfeatures.tooltip_cc'] = 'Credit card proccessing using unstored credentials or those stored in Blesta.';
$lang['AdminMerchant.getsupportedfeatures.tooltip_cc_offsite'] = 'Credit card processing using credentials stored offsite by the processor.';
$lang['AdminMerchant.getsupportedfeatures.tooltip_cc_form'] = 'This allows a gateway to provide custom html for credit card forms.  This is meant to support offsite credit cards that may use iframes or require additional fields.';
$lang['AdminMerchant.getsupportedfeatures.tooltip_ach'] = 'Automated clearing house proccessing using unstored credentials or those stored in Blesta.';
$lang['AdminMerchant.getsupportedfeatures.tooltip_ach_offsite'] = 'Automated clearing house processing using credentials stored offsite by the processor.';


// Page title
$lang['AdminMerchant.index.page_title'] = 'Extension Generator - %1$s'; // %1$s is the plugin name

$lang['AdminMerchant.index.boxtitle_extension_generator'] = 'Extension Generator - Merchant Gateway';


// Basic info page
$lang['AdminMerchant.basic.heading_basic'] = 'Basic Information';
$lang['AdminMerchant.basic.heading_authors'] = 'Authors';

$lang['AdminMerchant.basic.description'] = 'Description';
$lang['AdminMerchant.basic.logo'] = 'Logo';
$lang['AdminMerchant.basic.signup_url'] = 'Signup URL';
$lang['AdminMerchant.basic.currencies'] = 'Currencies';
$lang['AdminMerchant.basic.author_name'] = 'Author Name';
$lang['AdminMerchant.basic.author_url'] = 'Author URL';
$lang['AdminMerchant.basic.text_options'] = "Optionen"; //en: "'Options'"
$lang['AdminMerchant.basic.author_row_add'] = 'Add Author';
$lang['AdminMerchant.basic.text_remove'] = 'Remove';

$lang['AdminMerchant.basic.tooltip_description'] = 'The description shown in the plugin listing';
$lang['AdminMerchant.basic.tooltip_logo'] = 'The logo displayed in the plugin listing. Images are not resized, so the ideal dimensions are 150x70';
$lang['AdminMerchant.basic.tooltip_signup_url'] = "Die URL zur Anmeldeseite des Portals (Gateways)"; //en: "'The URL to the gateway\'s signup page'"
$lang['AdminMerchant.basic.tooltip_currencies'] = "Eine durch Kommata getrennte Liste der unterstützten Währungen (z. B. USD, JPY, EUR)"; //en: "'A comma separated list of supported currencies (e.g. USD,JPY,EUR)'"

$lang['AdminMerchant.basic.placeholder_signup_url'] = 'e.g. https://dashboard.stripe.com/register';
$lang['AdminMerchant.basic.placeholder_currencies'] = 'e.g. USD,EUR,JPY';
$lang['AdminMerchant.basic.placeholder_author_name'] = "z.B. Blesta"; //en: "'e.g. Blesta'"
$lang['AdminMerchant.basic.placeholder_author_url'] = 'e.g. https://blesta.com/';

$lang['AdminMerchant.basic.fields'] = 'Next - Configuration Fields';
$lang['AdminMerchant.basic.features'] = 'Next - Supported Features';


// Fields page
$lang['AdminMerchant.fields.heading_fields'] = 'Configuration Fields';

$lang['AdminMerchant.fields.name'] = 'Name';
$lang['AdminMerchant.fields.label'] = 'Label';
$lang['AdminMerchant.fields.type'] = 'Type';
$lang['AdminMerchant.fields.tooltip'] = 'Tooltip Text';
$lang['AdminMerchant.fields.encryptable'] = "Verschlüsselbar"; //en: "'Encryptable'"

$lang['AdminMerchant.fields.tooltip_name'] = 'The name of the field in the code base';
$lang['AdminMerchant.fields.tooltip_label'] = "Der Anzeigename des Feldes"; //en: "'The display name of the field'"
$lang['AdminMerchant.fields.tooltip_type'] = 'The type of field to create (checkbox, text, etc.)';
$lang['AdminMerchant.fields.tooltip_tooltip'] = 'The text of the tooltip to display along side the field (leave empty to have no tooltip)';
$lang['AdminMerchant.fields.tooltip_encryptable'] = 'Whether to encrypt this field in the database';

$lang['AdminMerchant.fields.placeholder_name'] = 'e.g. configuration_field';
$lang['AdminMerchant.fields.placeholder_label'] = 'e.g. Configuration Field';

$lang['AdminMerchant.fields.field_row_add'] = 'Add Configuration Field';

$lang['AdminMerchant.fields.text_options'] = "Optionen"; //en: "'Options'"
$lang['AdminMerchant.fields.text_remove'] = "Entfernen"; //en: "'Remove'"

$lang['AdminMerchant.fields.features'] = 'Next - Supported Features';


// Supported features page
$lang['AdminMerchant.features.heading_supported_features'] = "Unterstützte Funktionen"; //en: "'Supported Features'"

$lang['AdminMerchant.features.confirm'] = 'Next - Confirmation';
