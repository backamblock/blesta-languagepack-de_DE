<?php
/**
 * Language definitions for the Emails model
 *
 * @package blesta
 * @subpackage blesta.language.de_de
 * @copyright Copyright (c) 2010, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

// Common email/email signature errors
$lang['Emails.!error.company_id.exists'] = "Ungültige Unternehmens ID."; //en: "'Invalid company ID.'"
$lang['Emails.!error.html.parse'] = "Vorlagenfehler: %1\$s"; // %1$s is the parse error"; //en: "'Template parse error: %1$s'; // %1$s is the parse error"
$lang['Emails.!error.text.parse'] = "Vorlagenanalysefehler: %1\$s"; // %1$s is the parse error"; //en: "'Template parse error: %1$s'; // %1$s is the parse error"


// Email signature errors
$lang['Emails.!error.email_signature_id.in_use'] = "Das E-Mail-Signatur ist derzeit im Einsatz und kann nicht gelöscht werden."; //en: "'That email signature is currently in use and may not be deleted.'"
$lang['Emails.!error.name.empty'] = "Bitte geben Sie der Signatur einen Namen."; //en: "'Please enter a signature name.'"
$lang['Emails.!error.text.empty'] = "Bitte geben Sie eine Klartext-Signatur ein."; //en: "'Please enter a plain-text signature.'"
$lang['Emails.!error.email_signature_id.exists'] = "Ungültige E-Mail Signatur ID."; //en: "'Invalid email signature ID.'"


// Email errors
$lang['Emails.!error.email_group_id.exists'] = "Ungültige E-Mail-Gruppen-ID"; //en: "'Invalid email group ID.'"
$lang['Emails.!error.lang.empty'] = "Bitte geben Sie eine Sprache ein."; //en: "'Please enter a language.'"
$lang['Emails.!error.lang.length'] = "Die Sprache darf nicht länger als 5 Zeichen sein."; //en: "'The language length may not exceed 5 characters.'"
$lang['Emails.!error.from.format'] = "Bitte geben Sie eine gültige Adresse ein."; //en: "'Please enter a valid from address.'"
$lang['Emails.!error.from_name.empty'] = "Bitte geben Sie einen Namen ein."; //en: "'Please enter a from name.'"
$lang['Emails.!error.reply_to.format'] = "Bitte geben Sie eine gültige Antwortadresse ein."; //en: "'Please enter a valid reply-to address.'"
$lang['Emails.!error.subject.empty'] = "Bitte geben Sie einen Betreff ein."; //en: "'Please enter a subject.'"
$lang['Emails.!error.email_signature_id.exists'] = 'Invalid email signature ID.';
$lang['Emails.!error.include_attachments'] = "Ob Anhänge hinzugefügt werden können, muss auf 0 oder 1 festgelegt werden."; //en: "'Whether to include attachments must be set to 0 or 1.'"
$lang['Emails.!error.status.format'] = "Falscher Status"; //en: "'Invalid status.'"
$lang['Emails.!error.email_id.exists'] = "Ungültige Email ID"; //en: "'Invalid email ID.'"
$lang['Emails.!error.company_id.unique'] = "Die E-Mail Gruppen ID und Firmen ID für die angegebene Sprache ist bereits bestetzt"; //en: "'The email group ID and company ID for the given language is already taken.'"

$lang['Emails.!error.action.exists'] = "Die angegebene Aktion ist eine ungültige E-Mail-Gruppenaktion."; //en: "'The action given is an invalid email group action.'"
$lang['Emails.!error.to_addresses.empty'] = 'At least one To address must be provided.';
$lang['Emails.!error.to_addresses.format'] = "Mindestens eine der angegebenen E-Mail-Adressen ist keine gültige E-Mail-Adresse."; //en: "'At least one of the email To addresses provided is not a valid email address.'"
$lang['Emails.!error.cc_addresses.format'] = "Mindestens eine der eingegebenen CC-Adressen ist ungültig."; //en: "'At least one of the email CC addresses provided is not a valid email address.'"
$lang['Emails.!error.bcc_addresses.format'] = "Mindestens eine der angegebenen E-Mail-BCC-Adressen ist keine gültige E-Mail-Adresse."; //en: "'At least one of the email BCC addresses provided is not a valid email address.'"
$lang['Emails.!error.attachments.exist'] = "Mindestens einer der bereitgestellten Anhänge existiert nicht im Dateisystem."; //en: "'At least one of the attachments provided does not exist on the file system.'"

$lang['Emails.!error.email.failed_to_send'] = "Die E-Mail konnte aufgrund eines Konfigurationsproblems nicht gesendet werden."; //en: "'The email failed to send due to a configuration issue.'"


// Text
$lang['Emails.getStatusTypes.active'] = "Nein"; //en: "'No'"
$lang['Emails.getStatusTypes.inactive'] = "Ja"; //en: "'Yes'"
