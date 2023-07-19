<?php
/**
 * Language definitions for the Backup model
 *
 * @package blesta
 * @subpackage blesta.language.de_de
 * @copyright Copyright (c) 2010, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

// Errors
$lang['Backup.!error.driver.support'] = "Der Datenbanktreiber wird nicht unterstützt."; //en: "'The database driver is not supported.'"
$lang['Backup.!error.temp_dir.writable'] = "Das temp Verzeichnis ist nicht beschreibbar."; //en: "'The temp directory is not writable.'"
$lang['Backup.!error.ftp_failed'] = "Die SFTP-Sicherung ist fehlgeschlagen."; //en: "'The SFTP backup failed.'"
$lang['Backup.!error.amazons3_failed'] = "Das Amazon S3 Backup ist fehlgeschlagen."; //en: "'The AmazonS3 backup failed.'"

$lang['Backup.frequencies.never'] = "Niemals"; //en: "'Never'"
$lang['Backup.frequencies.hour'] = "Stunde"; //en: "'Hour'"
$lang['Backup.frequencies.hours'] = "%1\$s Stunden"; // %1$s is the number of hours"; //en: "'%1$s Hours'; // %1$s is the number of hours"
$lang['Backup.frequencies.day'] = "Tag"; //en: "'Day'"
$lang['Backup.frequencies.days'] = "%1\$s Tage"; // %1$s is the number of days"; //en: "'%1$s Days'; // %1$s is the number of days"
