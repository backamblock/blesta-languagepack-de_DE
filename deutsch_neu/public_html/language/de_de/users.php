<?php
/**
 * Language definitions for the Users model
 *
 * @package blesta
 * @subpackage blesta.language.de_de
 * @copyright Copyright (c) 2010, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Users.!error.username.empty'] = "Bitte Benutzernamen eingeben."; //en: "'Please enter a username.'"
$lang['Users.!error.username.unique'] = "Dieser Benutzername wurde bereits vergeben."; //en: "'That username has already been taken.'"
$lang['Users.!error.current_password.matches'] = "Ungültiges Passwort"; //en: "'Invalid password.'"
$lang['Users.!error.new_password.format'] = "Bitte geben Sie ein Passwort ein das mindestens 6 Zeichen lang ist."; //en: "'Please enter a password at least 6 characters in length.'"
$lang['Users.!error.new_password.matches'] = "Die Passwörter stimmen nicht überein."; //en: "'The passwords do not match.'"
$lang['Users.!error.two_factor_mode.format'] = "Ungültiger Zwei-Faktor-Modus."; //en: "'Invalid two factor mode.'"
$lang['Users.!error.two_factor_key.format'] = "Ungültiger Zwei-Faktor-Schlüssel"; //en: "'Invalid two factor key.'"
$lang['Users.!error.username.auth'] = "Keine Einträge für diese Benutzer/Passwort Kombination vorhanden."; //en: "'No matches found for that user/password combination.'"
$lang['Users.!error.otp.auth'] = 'The one-time password entered is invalid. Maximum length is 16 characters';
$lang['Users.!error.user_id.exists'] = "Ungültige Benutzer-ID"; //en: "'Invalid user ID.'"
$lang['Users.!error.username.attempts'] = "Zu viele fehlgeschlagene Anmeldeversuche wurden erkannt."; //en: "'Too many failed login attempts detected.'"
$lang['Users.!error.username.company'] = "Sie sind nicht berechtigt, sich an diesem Ort anzumelden."; //en: "'You are not authorized to login at this location.'"

$lang['Users.!error.clients.exist'] = "Der Benutzer kann nicht gelöscht werden, da dem Benutzer mindestens ein Kunde zugewiesen ist."; //en: "'The user cannot be deleted because there is at least one client assigned to the user.'"
