<?php
/**
 * Language definitions for the Admin Login controller/views
 *
 * @package blesta
 * @subpackage blesta.language.de_de
 * @copyright Copyright (c) 2010, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

// Index
$lang['AdminLogin.index.page_title'] = "Login"; //en: "'Log in'"
$lang['AdminLogin.index.title_adminarea'] = "%1\$s | Mitarbeiterbereich"; // %1$s is the company name"; //en: "'%1$s | Staff Area'; // %1$s is the company name"
$lang['AdminLogin.index.field_username'] = "Benutzername"; //en: "'Username'"
$lang['AdminLogin.index.field_password'] = "Passwort"; //en: "'Password'"
$lang['AdminLogin.index.field_rememberme'] = "Login auf diesem Computer speichern."; //en: "'Remember me on this computer.'"
$lang['AdminLogin.index.field_loginsubmit'] = "Einloggen"; //en: "'Log In'"
$lang['AdminLogin.index.link_resetpassword'] = "Passwort zurücksetzen"; //en: "'Reset My Password'"


// OTP
$lang['AdminLogin.otp.page_title'] = "OTP-Anmeldung"; //en: "'OTP Login'"
$lang['AdminLogin.otp.title_adminarea'] = "%1\$s - Personalbereich"; // %1$s is the company name"; //en: "'%1$s | Staff Area'; // %1$s is the company name"
$lang['AdminLogin.otp.field_password'] = "Einmal-Passwort"; //en: "'One-time Password'"
$lang['AdminLogin.otp.field_loginsubmit'] = "Anmelden"; //en: "'Log In'"
$lang['AdminLogin.otp.link_login'] = "Abbrechen, Anmelden"; //en: "'Cancel, Log In'"


// Reset
$lang['AdminLogin.reset.page_title'] = "Passwort zurücksetzen"; //en: "'Reset Password'"
$lang['AdminLogin.reset.title_adminarea'] = "%1\$s | Passwort zurücksetzten"; // %1$s is the company name"; //en: "'%1$s | Reset Password'; // %1$s is the company name"
$lang['AdminLogin.reset.field_username'] = "Benutzername"; //en: "'Username'"
$lang['AdminLogin.reset.field_resetsubmit'] = "Passwort zurücksetzten "; //en: "'Reset Password'"
$lang['AdminLogin.reset.link_login'] = "Abbrechen, Login"; //en: "'Cancel, Log In'"


// Confirm Reset
$lang['AdminLogin.confirmreset.page_title'] = "Bestätigen Sie das Passwort zurücksetzen"; //en: "'Confirm Password Reset'"
$lang['AdminLogin.confirmreset.title_adminarea'] = "%1\$s | Zurücksetzen des Passworts bestätigen"; // %1$s is the company name"; //en: "'%1$s | Confirm Password Reset'; // %1$s is the company name"
$lang['AdminLogin.confirmreset.field_new_password'] = "Neues Kennwort"; //en: "'New Password'"
$lang['AdminLogin.confirmreset.field_confirm_password'] = "Passwort bestätigen"; //en: "'Confirm New Password'"
$lang['AdminLogin.confirmreset.field_resetsubmit'] = "Passwort festlegen"; //en: "'Set Password'"
$lang['AdminLogin.confirmreset.link_login'] = "Abbrechen, Anmelden"; //en: "'Cancel, Log In'"


// Setup
$lang['AdminLogin.setup.page_title'] = "Einmaliges Setup"; //en: "'Initial Setup'"
$lang['AdminLogin.setup.title_adminarea'] = "Einrichtung"; // %1$s is the company name"; //en: "'Initial Setup'; // %1$s is the company name"
$lang['AdminLogin.setup.field_license_key'] = "Lizenzschlüssel"; //en: "'License Key'"
$lang['AdminLogin.setup.trial_newsletter'] = 'By signing up for a trial, you agree to receive emails from us during your trial. You can opt-out at any time.';
$lang['AdminLogin.setup.field_newsletter'] = 'Sign-up for our newsletter. You can opt-out at any time.';
$lang['AdminLogin.setup.heading_create_account'] = "Erstellen Sie Ihr Mitarbeiterkonto"; //en: "'Create your Staff account'"
$lang['AdminLogin.setup.field_first_name'] = "Vorname"; //en: "'First Name'"
$lang['AdminLogin.setup.field_last_name'] = "Familienname, Nachname"; //en: "'Last Name'"
$lang['AdminLogin.setup.field_username'] = "Benutzername"; //en: "'Username'"
$lang['AdminLogin.setup.field_email'] = "Email Adresse"; //en: "'Email Address'"
$lang['AdminLogin.setup.field_password'] = "Passwort"; //en: "'Password'"
$lang['AdminLogin.setup.field_confirm_password'] = "Passwort bestätigen"; //en: "'Confirm Password'"
$lang['AdminLogin.setup.field_enter_key_true'] = "Ich muss einen Lizenzschlüssel eingeben"; //en: "'I have a license key to enter'"
$lang['AdminLogin.setup.field_enter_key_false'] = "Ich möchte die 30-tägige Testlizenz aktivieren."; //en: "'I want to start a 30-day free trial'"
$lang['AdminLogin.setup.field_submit'] = "Fertig"; //en: "'Finish'"


// Error
$lang['AdminLogin.!error.unknown_user'] = "Dieser Benutzername wird nicht erkannt oder das Passwort kann nicht zurückgesetzt werden."; //en: "'That username is not recognized or the password is not capable of being reset.'"
$lang['AdminLogin.!error.captcha.invalid'] = 'The captcha entered was invalid. Please try again.';


// Success
$lang['AdminLogin.!success.reset_sent'] = "Eine Bestätigungs-E-Mail wurde an die angegebene Adresse gesendet."; //en: "'A confirmation email has been sent to the address on record.'"


// Info
$lang['AdminLogin.!info.reset_password'] = "Geben Sie Ihren Benutzernamen ein und ein zeitkritischer Link wird Ihnen per E-Mail zugesandt, damit Sie ein neues Passwort festlegen können."; //en: "'Enter your username below and a time-sensitive link will be emailed to you so you can set a new password.'"
$lang['AdminLogin.!info.otp'] = "Für diesen Benutzer ist eine Zwei-Faktor-Authentifizierung erforderlich. Bitte geben Sie unten Ihr OTP (Einmalpasswort) ein."; //en: "'Two-Factor Authentication is required for this user. Please enter your OTP (One-time Password) below.'"
