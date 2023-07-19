<?php
/**
 * Language definitions for system requirements
 *
 * @package blesta
 * @subpackage blesta.language.de_de
 * @copyright Copyright (c) 2010, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

// Minimum requirements
$lang['SystemRequirements.!error.php.minimum'] = "PHP-Version %1\$s oder höher ist erforderlich. Ihre Version: %2\$s."; // %1$s is the minimum version of PHP (i.e. 5.1.3), %2$s is the current version"; //en: "'PHP version %1$s or greater is required. Your version: %2$s.'; // %1$s is the minimum version of PHP (i.e. 5.1.3), %2$s is the current version"
$lang['SystemRequirements.!error.extension.minimum'] = "The extension '%1\$s' is required."; // %1$s is the name of the extension required
$lang['SystemRequirements.!error.extension_version.minimum'] = "The extension '%1\$s' is required. Your version: %2\$s."; // %1$s is the name of the extension required. %2$s is the current version
$lang['SystemRequirements.!error.config_writable.minimum'] = "Die Konfigurationsdatei (%1\$s) und das Verzeichnis (%2\$s) müssen vom Webserver beschreibbar sein."; // %1$s is the absolute path to the config file, %2$s is the absolute path to the config directory"; //en: "'The config file (%1$s) and directory (%2$s) must be writable by the webserver.'; // %1$s is the absolute path to the config file, %2$s is the absolute path to the config directory"
$lang['SystemRequirements.!info.ext-ioncube.minimum'] = 'Be sure to apply the necessary hotfix files by overwriting your Blesta files with those from the %1$s directory. Blesta will not be accessible after installation otherwise.'; // %1$s is the name of the hotfix directory
$lang['SystemRequirements.!error.ext-ioncube-sourceguardian.minimum'] = "The 'SourceGuardian' or 'ioncube loader' extension is required.";
$lang['SystemRequirements.!info.ext-ioncube-sourceguardian.minimum'] = "The 'SourceGuardian' or 'ioncube loader' extension is required. If using SourceGuardian be sure to apply the necessary hotfix files by overwriting your Blesta files with those from the hotfix-php8 directory. Blesta will not be accessible after installation otherwise."; // %1$s is the name of the hotfix directory

// Recommended requirements
$lang['SystemRequirements.!warning.gd.recommended'] = 'The gd extension is recommended for better image support during PDF generation and internal captcha generation.';
$lang['SystemRequirements.!warning.gmp.recommended'] = "Die GMP-Erweiterung wird für eine bessere Leistung dringend empfohlen."; //en: "'The gmp extension is highly recommended for better performance.'"
$lang['SystemRequirements.!warning.imap.recommended'] = "Für das Senden und Empfangen von E-Mails per SMTP und IMAP wird die IMAP Erweiterung benötigt."; //en: "'The imap extension is required to send and receive mail via SMTP and IMAP.'"
$lang['SystemRequirements.!warning.libxml.recommended'] = "Die Erweiterung libxml wird dringend empfohlen, da sie möglicherweise mit einigen Systemen verbunden werden muss."; //en: "'The libxml extension is highly recommended as it may be required to interface with some systems.'"
$lang['SystemRequirements.!warning.mailparse.recommended'] = "Die Mail-Erweiterung wird benötigt, um eingehende E-Mails zu analysieren."; //en: "'The mailparse extension is required for parsing incoming emails.'"
$lang['SystemRequirements.!warning.iconv.recommended'] = "Die iconv-Erweiterung ist für die Kodierung und Dekodierung von Sonderzeichen erforderlich."; //en: "'The iconv extension is required for special character encoding and decoding.'"
$lang['SystemRequirements.!warning.mbstring.recommended'] = "Die Erweiterung mbstring ist für einige optionale Funktionen erforderlich."; //en: "'The mbstring extension is required by some optional features.'"
$lang['SystemRequirements.!warning.mcrypt.recommended'] = "Die PHP Erweiterung \"mcrypt\" wird für eine bessere Performance empfohlen."; //en: "'The mcrypt extension is recommended for better performance.'"
$lang['SystemRequirements.!warning.simplexml.recommended'] = "Die simplexml-Erweiterung wird dringend empfohlen, da sie möglicherweise mit einigen Systemen verbunden werden muss."; //en: "'The simplexml extension is highly recommended as it may be required to interface with some systems.'"
$lang['SystemRequirements.!warning.zlib.recommended'] = "Die zlib Erweiterung wird für bessere Performance empfohlen."; //en: "'The zlib extension is highly recommend for better performance.'"
$lang['SystemRequirements.!warning.soap.recommended'] = "Die SOAP-Erweiterung ist für die automatische Handhabung der Mehrwertsteuer erforderlich."; //en: "'The soap extension is required for automatic VAT tax handling.'"
$lang['SystemRequirements.!warning.cache_writable.recommended'] = "Für eine bessere Performance sollten Sie sicherstellen, dass %1\$s vom Webserver beschreibbar ist."; // %1$s is the absolute path to the cache directory"; //en: "'For better performance ensure that %1$s is writable by the webserver.'; // %1$s is the absolute path to the cache directory"
