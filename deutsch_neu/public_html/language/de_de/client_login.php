<?php
/**
 * Language definitions for the Client Login controller
 *
 * @package blesta
 * @subpackage blesta.language.de_de
 * @copyright Copyright (c) 2010, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

// Error
$lang['ClientLogin.!error.unknown_user'] = "Dieser Benutzername wird nicht erkannt oder das Passwort kann nicht zurückgesetzt werden."; //en: "'That username is not recognized or the password is not capable of being reset.'"
$lang['ClientLogin.!error.unknown_email'] = 'That email address is not recognized or the username is not capable of being recovered.';
$lang['ClientLogin.!error.captcha.invalid'] = 'The captcha entered was invalid. Please try again.';


// Success
$lang['ClientLogin.!success.reset_sent'] = "Eine Bestätigungs-E-Mail wurde an die angegebene Adresse gesendet."; //en: "'A confirmation email has been sent to the address on record.'"
$lang['ClientLogin.!success.forgot_sent'] = 'An email with your username on record has been sent to your email address.';


// Login
$lang['ClientLogin.index.page_title'] = "Einloggen"; //en: "'Log In'"
$lang['ClientLogin.index.description'] = "Bitte melden Sie sich an, um auf den Kundenbereich zuzugreifen."; //en: "'Please log in to access the client area.'"
$lang['ClientLogin.index.login_heading'] = "Einloggen"; //en: "'Log In'"
$lang['ClientLogin.index.field_username'] = "Nutzername"; //en: "'Username'"
$lang['ClientLogin.index.field_password'] = "Passwort"; //en: "'Password'"
$lang['ClientLogin.index.field_rememberme'] = "Erinnere mich an diesem Computer"; //en: "'Remember me on this computer'"
$lang['ClientLogin.index.field_loginsubmit'] = "Einloggen"; //en: "'Log In'"
$lang['ClientLogin.index.link_resetpassword'] = "Passwort zurücksetzen"; //en: "'Reset My Password'"
$lang['ClientLogin.index.link_forgotusername'] = 'Forgot My Username';


// OTP
$lang['ClientLogin.otp.page_title'] = "Einloggen"; //en: "'Log In'"
$lang['ClientLogin.otp.description'] = "Bitte geben Sie Ihr Einmalpasswort ein."; //en: "'Please enter your One Time Password.'"
$lang['ClientLogin.otp.login_heading'] = "Einloggen"; //en: "'Log In'"
$lang['ClientLogin.otp.field_otp'] = "Einmaliges Passwort"; //en: "'One Time Password'"
$lang['ClientLogin.otp.field_submit'] = "Einloggen"; //en: "'Log In'"


// Reset
$lang['ClientLogin.reset.page_title'] = "Passwort zurücksetzen "; //en: "'Reset Password'"
$lang['ClientLogin.reset.reset_heading'] = "Passwort zurücksetzen"; //en: "'Reset Password'"
$lang['ClientLogin.reset.description'] = "Geben Sie Ihren Benutzernamen ein, um einen Link zum Zurücksetzen des Passworts anzufordern."; //en: "'Enter your username to request a password reset link.'"
$lang['ClientLogin.reset.field_username'] = "Benutzername"; //en: "'Username'"
$lang['ClientLogin.reset.field_resetsubmit'] = "Passwort zurücksetzen"; //en: "'Reset Password'"
$lang['ClientLogin.reset.link_login'] = "Abbrechen, Anmelden"; //en: "'Cancel, Log In'"


// Confirm Reset
$lang['ClientLogin.confirmreset.page_title'] = "Zurücksetzen des Passworts bestätigen"; //en: "'Confirm Password Reset'"
$lang['ClientLogin.confirmreset.reset_heading'] = "Bestätigen Sie das Passwort zurücksetzen"; //en: "'Confirm Password Reset'"
$lang['ClientLogin.confirmreset.description'] = "Bitte geben Sie Ihr neues Passwort ein."; //en: "'Please enter your new password.'"
$lang['ClientLogin.confirmreset.field_new_password'] = "Neues Passwort"; //en: "'New Password'"
$lang['ClientLogin.confirmreset.field_confirm_password'] = "Bestätige neues Passwort"; //en: "'Confirm New Password'"
$lang['ClientLogin.confirmreset.field_resetsubmit'] = "Passwort setzen"; //en: "'Set Password'"
$lang['ClientLogin.confirmreset.link_login'] = "Abbrechen, Login"; //en: "'Cancel, Log In'"


// Forgot
$lang['ClientLogin.forgot.page_title'] = 'Forgot Username';
$lang['ClientLogin.forgot.reset_heading'] = 'Forgot Username';
$lang['ClientLogin.forgot.description'] = 'Enter your email address to request your username.';
$lang['ClientLogin.forgot.field_email'] = 'Email Address';
$lang['ClientLogin.forgot.field_forgotsubmit'] = "Nutzernamen Vergessen"; //en: "'Recover Username'"
$lang['ClientLogin.forgot.link_login'] = 'Cancel, Log In';
