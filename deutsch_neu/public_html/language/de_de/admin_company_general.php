<?php
/**
 * Language definitions for the Admin Company General settings controller/views
 *
 * @package blesta
 * @subpackage blesta.language.de_de
 * @copyright Copyright (c) 2010, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */
// Errors
$lang['AdminCompanyGeneral.!error.captcha_gd'] = 'The GD extension is required for generating the internal captcha.';


// Success messages
$lang['AdminCompanyGeneral.!success.localization_updated'] = "Die Lokalisierungseinstellungen wurden erfolgreich aktualisiert."; //en: "'The localization settings have been successfully updated.'"
$lang['AdminCompanyGeneral.!success.encryption_updated'] = "Die Verschlüsselungseinstellungen wurden erfolgreich aktualisiert."; //en: "'The encryption settings have been successfully updated.'"
$lang['AdminCompanyGeneral.!success.contact_type_added'] = "Der Kontakttyp \"%1\$s\" wurde erfolgreich hinzugefügt."; // %1$s is the name of the contact type"; //en: "'The contact type "%1$s" has been successfully added.'; // %1$s is the name of the contact type"
$lang['AdminCompanyGeneral.!success.contact_type_updated'] = "Der Kontakttyp #%1\$s wurde erfolgreich gespeichert."; // %1$s is the name of the contact type"; //en: "'The contact type "%1$s" has been successfully updated.'; // %1$s is the name of the contact type"
$lang['AdminCompanyGeneral.!success.contact_type_deleted'] = "Der Kontakttyp \"%1\$s\" wurde erfolgreich gelöscht."; // %1$s is the name of the contact type"; //en: "'The contact type "%1$s" has been successfully deleted.'; // %1$s is the name of the contact type"

$lang['AdminCompanyGeneral.!success.language_installed'] = "Die Sprache %1\$s wurde erfolgreich installiert."; // %1$s is the name of the language"; //en: "'The language %1$s has been successfully installed.'; // %1$s is the name of the language"
$lang['AdminCompanyGeneral.!success.language_uninstalled'] = "Die Sprache %1\$s wurde erfolgreich deinstalliert."; // %1$s is the name of the language"; //en: "'The language %1$s has been successfully uninstalled.'; // %1$s is the name of the language"
$lang['AdminCompanyGeneral.!success.marketing_updated'] = "Die Marketingeinstellungen wurden erfolgreich aktualisiert."; //en: "'The marketing settings have been successfully updated.'"
$lang['AdminCompanyGeneral.!success.smartsearch_updated'] = 'The Smart Search settings have been successfully updated.';
$lang['AdminCompanyGeneral.!success.humanverification_updated'] = 'The human verification settings have been successfully updated.';


// Tooltips
$lang['AdminCompanyGeneral.!tooltip.language'] = "Die Standart Sprache die vom System genutzt wird. Um mehr Sprachen hinzuzufügen, gucken Sie nach den Internationalisierung Einstellungen."; //en: "'The default language used by the system. To add more languages see Internationalization settings.'"
$lang['AdminCompanyGeneral.!tooltip.client_set_lang'] = 'When checked, clients may choose their own language to use from those available in the system.';
$lang['AdminCompanyGeneral.!tooltip.calendar_begins'] = 'Set the calendar\'s weekly start day.';
$lang['AdminCompanyGeneral.!tooltip.timezone'] = 'This is the system timezone that date and time conversions will be formatted into.';
$lang['AdminCompanyGeneral.!tooltip.date_format'] = 'Sets the date format. This format is used when displaying a date. Please refer to the php manual for available options.';
$lang['AdminCompanyGeneral.!tooltip.datetime_format'] = 'Sets the date and time format. This format is used when displaying a date and time. Please refer to the php manual for available options.';
$lang['AdminCompanyGeneral.!tooltip.country'] = 'This is the country selected by default on relevant forms.';

$lang['AdminCompanyGeneral.!tooltip.captcha'] = 'This is the captcha used by default, the Internal Captcha requires the GD extension.';


// Localization
$lang['AdminCompanyGeneral.localization.page_title'] = "Einstellungen -> Unternehmen -> Allgemein -> Lokalisierung"; //en: "'Settings > Company > General > Localization'"
$lang['AdminCompanyGeneral.localization.boxtitle_localization'] = "Lokalisierung"; //en: "'Localization'"
$lang['AdminCompanyGeneral.localization.tz_format'] = "(UTC %1\$s) %2\$s"; // %1$s is the UTC offset, %2$s is the timezone name"; //en: "'(UTC %1$s) %2$s'; // %1$s is the UTC offset, %2$s is the timezone name"

$lang['AdminCompanyGeneral.localization.field.language'] = 'Default Language';
$lang['AdminCompanyGeneral.localization.field.setlanguage'] = 'Client may set Language';
$lang['AdminCompanyGeneral.localization.field.calendar'] = 'Calendar Start Day';
$lang['AdminCompanyGeneral.localization.field.sunday'] = 'Sunday';
$lang['AdminCompanyGeneral.localization.field.monday'] = 'Monday';
$lang['AdminCompanyGeneral.localization.field.timezone'] = 'Timezone';
$lang['AdminCompanyGeneral.localization.field.dateformat'] = 'Date Format';
$lang['AdminCompanyGeneral.localization.field.datetimeformat'] = 'Date Time Format';
$lang['AdminCompanyGeneral.localization.field.country'] = 'Default Country';
$lang['AdminCompanyGeneral.localization.field.localizationsubmit'] = "Einstellungen Aktualisieren"; //en: "'Update Settings'"


// Internationalization
$lang['AdminCompanyGeneral.!notice.international_languages'] = "Ein Crowdsourcing-Übersetzungsprojekt existiert auf translate.blesta.com. Sie können dort Sprachübersetzungen beisteuern und herunterladen. Zum Installieren entpacken Sie den Inhalt der Datei in Ihr Blesta-Installationsverzeichnis. Aktualisieren Sie dann diese Seite und klicken Sie auf den Link Installieren."; //en: "'A crowdsourced translation project exists at translate.blesta.com. You may contribute to, and download language translations there. To install, unzip the contents of the file to your Blesta installation directory. Then, refresh this page, and click the Install link.'"
$lang['AdminCompanyGeneral.international.page_title'] = "Einstellungen > Unternehmen > Allgemein > Internationalisierung"; //en: "'Settings > Company > General > Internationalization'"
$lang['AdminCompanyGeneral.international.boxtitle_international'] = "Internationalisierung"; //en: "'Internationalization'"

$lang['AdminCompanyGeneral.international.text_language'] = "Sprache"; //en: "'Language'"
$lang['AdminCompanyGeneral.international.text_iso'] = "ISO 639-1, 3166-1"; //en: "'ISO 639-1, 3166-1'"
$lang['AdminCompanyGeneral.international.text_options'] = "Optionen"; //en: "'Options'"

$lang['AdminCompanyGeneral.international.option_install'] = "Installieren"; //en: "'Install'"
$lang['AdminCompanyGeneral.international.option_uninstall'] = "Deinstallieren"; //en: "'Uninstall'"

$lang['AdminCompanyGeneral.international.confirm_install'] = "Wollen Sie die Sprache %1\$s wirklich installieren?"; // %1$s is the name of the language"; //en: "'Are you sure you want to install the language %1$s?'; // %1$s is the name of the language"
$lang['AdminCompanyGeneral.international.confirm_uninstall'] = "Möchten Sie die Sprache %1\$s wirklich deinstallieren? Diese Sprache wird deinstalliert und alle E-Mail-Vorlagen in dieser Sprache werden endgültig gelöscht."; // %1$s is the name of the language"; //en: "'Are you sure you want to uninstall the language %1$s? This language will be uninstalled and all email templates in this language will be permanently deleted.'; // %1$s is the name of the language"


// Encryption
$lang['AdminCompanyGeneral.encryption.page_title'] = "Einstellungen > Firma > Allgemein > Verschlüsselung"; //en: "'Settings > Company > General > Encryption'"
$lang['AdminCompanyGeneral.!notice.passphrase'] = "WARNUNG: Durch das Festlegen einer Passphrase wird verhindert, dass lokal gespeicherte Zahlungskonten automatisch verarbeitet werden. Sie werden aufgefordert, die Zahlungen manuell zu buchen, indem Sie Ihre Passphrase eingeben. Weitere Informationen zu dieser Funktion finden Sie im Handbuch."; //en: "'WARNING: Setting a passphrase will prevent locally stored payment accounts from being automatically processed. You will be required to manually batch payments by entering your passphrase. For more information regarding this feature please consult the manual.'"
$lang['AdminCompanyGeneral.!notice.passphrase_set'] = "WARNUNG: Eine Passphrase wurde festgelegt. Sie müssen die Zahlungen manuell mit Ihrem Passwort paketieren. Wenn Sie Ihre Passphrase in eine leere Passphrase ändern, wird diese Anforderung entfernt."; //en: "'WARNING: A passphrase has been set. You are required to manually batch payments with your passphrase. Changing your passphrase to a blank passphrase will remove this requirement.'"

$lang['AdminCompanyGeneral.encryption.boxtitle_encryption'] = "Verschlüsselung"; //en: "'Encryption'"

$lang['AdminCompanyGeneral.encryption.field_current_passphrase'] = "Private-Key Passphrase"; //en: "'Current Private Key Passphrase'"
$lang['AdminCompanyGeneral.encryption.field_private_key_passphrase'] = "Neue Passphrase für privaten Schlüssel"; //en: "'New Private Key Passphrase'"
$lang['AdminCompanyGeneral.encryption.field_confirm_new_passphrase'] = "Bestätigen Sie die Passphrase für den privaten Schlüssel"; //en: "'Confirm Private Key Passphrase'"
$lang['AdminCompanyGeneral.encryption.field_agree'] = "Ich habe dieses Passwort an einem sicheren Ort gespeichert"; //en: "'I have saved this passphrase to a safe location'"

$lang['AdminCompanyGeneral.encryption.field_encryptionsubmit'] = "Passphrase updaten"; //en: "'Update Passphrase'"


// Contact Types
$lang['AdminCompanyGeneral.contacttypes.page_title'] = "Einstellungen> Firma> Allgemein> Kontakttypen"; //en: "'Settings > Company > General > Contact Types'"
$lang['AdminCompanyGeneral.contacttypes.categorylink_addtype'] = "Kontakttyp erstellen"; //en: "'Create Contact Type'"
$lang['AdminCompanyGeneral.contacttypes.boxtitle_types'] = "Kontaktarten"; //en: "'Contact Types'"

$lang['AdminCompanyGeneral.contacttypes.heading_name'] = "Name"; //en: "'Name'"
$lang['AdminCompanyGeneral.contacttypes.heading_define'] = "Verwendet Sprachdefinition"; //en: "'Uses Language Definition'"
$lang['AdminCompanyGeneral.contacttypes.heading_options'] = "Optionen"; //en: "'Options'"

$lang['AdminCompanyGeneral.contacttypes.text_yes'] = "Ja"; //en: "'Yes'"
$lang['AdminCompanyGeneral.contacttypes.text_no'] = "Nein"; //en: "'No'"
$lang['AdminCompanyGeneral.contacttypes.option_edit'] = "Bearbeiten"; //en: "'Edit'"
$lang['AdminCompanyGeneral.contacttypes.option_delete'] = "Löschen"; //en: "'Delete'"

$lang['AdminCompanyGeneral.contacttypes.modal_delete'] = "Wenn Sie diesen Kontakttyp löschen, werden alle diesem Typ zugewiesenen Kontakte in den Standardtyp \"Abrechnung\" gestellt. Möchten Sie diesen Kontakttyp wirklich löschen?"; //en: "'Deleting this contact type will cause all contacts assigned to this type to be placed into the default "Billing" type. Are you sure you want to delete this contact type?'"

$lang['AdminCompanyGeneral.contacttypes.no_results'] = "Es gibt keine Kontakttypen."; //en: "'There are no Contact Types.'"

$lang['AdminCompanyGeneral.!contacttypes.is_lang'] = "Aktivieren Sie dieses Kontrollkästchen nur, wenn Sie in der benutzerdefinierten Sprachdatei eine Sprachdefinition für diesen Kontakttyp hinzugefügt haben."; //en: "'Only check this box if you have added a language definition for this contact type in the custom language file.'"


// Add Contact Type
$lang['AdminCompanyGeneral.addcontacttype.page_title'] = "Einstellungen > Firma > Allgemein > Kontakt Typ erstellen"; //en: "'Settings > Company > General > Create Contact Type'"
$lang['AdminCompanyGeneral.addcontacttype.boxtitle_addcontacttype'] = "Kontakttyp erstellen"; //en: "'Create Contact Type'"

$lang['AdminCompanyGeneral.addcontacttype.field_name'] = "Name"; //en: "'Name'"
$lang['AdminCompanyGeneral.addcontacttype.field_is_lang'] = "Verwenden Sie die Sprachdefinition"; //en: "'Use Language Definition'"
$lang['AdminCompanyGeneral.addcontacttype.field_contacttypesubmit'] = "Kontakttyp erstellen"; //en: "'Create Contact Type'"


// Edit Contact Type
$lang['AdminCompanyGeneral.editcontacttype.page_title'] = "Einstellungen> Firma> Allgemein> Kontaktart bearbeiten"; //en: "'Settings > Company > General > Edit Contact Type'"
$lang['AdminCompanyGeneral.editcontacttype.boxtitle_editcontacttype'] = "Kontaktart bearbeiten"; //en: "'Edit Contact Type'"

$lang['AdminCompanyGeneral.editcontacttype.field_name'] = "Name"; //en: "'Name'"
$lang['AdminCompanyGeneral.editcontacttype.field_is_lang'] = "Verwende die Sprachdefinition"; //en: "'Use Language Definition'"
$lang['AdminCompanyGeneral.editcontacttype.field_contacttypesubmit'] = "Kontaktart bearbeiten"; //en: "'Edit Contact Type'"


// Marketing
$lang['AdminCompanyGeneral.marketing.boxtitle_marketing'] = "Marketing"; //en: "'Marketing'"

$lang['AdminCompanyGeneral.marketing.field_show_receive_email_marketing'] = "Den Kunden die Möglichkeit bieten, E-Mail-Marketing zu aktivieren / deaktivieren"; //en: "'Present clients with an option to opt-in/opt-out of email marketing'"
$lang['AdminCompanyGeneral.marketing.field_submit'] = "Einstellungen Aktualisieren"; //en: "'Update Settings'"


// Smart Search
$lang['AdminCompanyGeneral.smartsearch.boxtitle_smartsearch'] = 'Smart Search';

$lang['AdminCompanyGeneral.smartsearch.field_client_search'] = 'Client Search';
$lang['AdminCompanyGeneral.smartsearch.field_invoice_search'] = 'Invoice Search';
$lang['AdminCompanyGeneral.smartsearch.field_quotation_search'] = 'Quotation Search';
$lang['AdminCompanyGeneral.smartsearch.field_transaction_search'] = 'Transaction Search';
$lang['AdminCompanyGeneral.smartsearch.field_service_search'] = 'Service Search';
$lang['AdminCompanyGeneral.smartsearch.field_package_search'] = 'Package Search';
$lang['AdminCompanyGeneral.smartsearch.field_submit'] = 'Update Settings';


// Human verification
$lang['AdminCompanyGeneral.humanverification.boxtitle_humanverification'] = 'Human Verification';

$lang['AdminCompanyGeneral.humanverification.heading_captcha_provider'] = 'Captcha Provider';
$lang['AdminCompanyGeneral.humanverification.heading_enabled_forms'] = 'Enabled Forms';

$lang['AdminCompanyGeneral.humanverification.field_captcha'] = 'Captcha';
$lang['AdminCompanyGeneral.humanverification.field_captcha_none'] = "Keine"; //en: "'None'"
$lang['AdminCompanyGeneral.humanverification.field_captcha_recaptcha'] = 'reCaptcha';
$lang['AdminCompanyGeneral.humanverification.field_captcha_internalcaptcha'] = 'Internal Captcha';
$lang['AdminCompanyGeneral.humanverification.field_recaptcha_pub_key'] = "reCaptcha Standort-Schlüssel"; //en: "'reCaptcha Site Key'"
$lang['AdminCompanyGeneral.humanverification.field_recaptcha_shared_key'] = 'reCaptcha Shared Key';
$lang['AdminCompanyGeneral.humanverification.field_captcha_enabled_forms_admin_login'] = 'Admin Login';
$lang['AdminCompanyGeneral.humanverification.field_captcha_enabled_forms_client_login'] = 'Client Login';
$lang['AdminCompanyGeneral.humanverification.field_captcha_enabled_forms_admin_login_reset'] = 'Admin Reset My Password';
$lang['AdminCompanyGeneral.humanverification.field_captcha_enabled_forms_client_login_reset'] = 'Client Reset My Password';
$lang['AdminCompanyGeneral.humanverification.field_captcha_enabled_forms_client_login_forgot'] = "Kunde Benutzername vergessen"; //en: "'Client Forgot My Username'"
$lang['AdminCompanyGeneral.humanverification.field_submit'] = 'Update Settings';
