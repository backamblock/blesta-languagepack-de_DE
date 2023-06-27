<?php
/**
 * actually GOOD de_de Language definitions. Translated by backamblock on Github
 * 
 * @package blesta
 * @version 5.5.2
 * @copyright Copyright (c) 2023, backamblock on Github
 * @license https://github.com/backamblock/ backamblock on Github - FREE for everybody
 * @link https://github.com/backamblock/ backamblock on Github
 */

$lang['AdminSystemBackup.!success.backup_updated'] = "The Backup settings were successfully updated!";
$lang['AdminSystemBackup.!success.sftp_test'] = "SFTP connection was successful";
$lang['AdminSystemBackup.!success.backup_uploaded'] = "The backup was successfully sent to the configured remote services!";
$lang['AdminSystemBackup.!error.sftp_test'] = "The SFTP connection failed! Please check your settings and try again.";
$lang['AdminSystemBackup.!error.amazons3_test'] = "The AmazonS3 connection failed! Please check your settings and try again. Note that connection details are case-sensitive.";
$lang['AdminSystemBackup.ftp.boxtitle_backup'] = "Secure FTP";
$lang['AdminSystemBackup.index.field_uploadbackup'] = "Force Offsite Backup";
$lang['AdminSystemBackup.!error.backup_frequency'] = "Invalid backup frequency.";
$lang['AdminSystemBackup.index.page_title'] = "Settings > System > Backup > On Demand";
$lang['AdminSystemBackup.index.boxtitle_index'] = "On Demand";
$lang['AdminSystemBackup.index.field_downloadbackup'] = "Download Backup";
$lang['AdminSystemBackup.index.text_note'] = "Here you can download a backup of your Blesta database to your computer or automatically upload a backup to your configured SFTP and/or Amazon S3 server.";
$lang['AdminSystemBackup.!tooltip.amazons3_bucket'] = "The case-sensitive name of the Amazon S3 bucket under which to store backups.";
$lang['AdminSystemBackup.ftp.field.ftp_host'] = "Hostname";
?>