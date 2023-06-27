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

$lang['StripePayments.!error.publishable_key.empty'] = "Bitte geben Sie einen veröffentlichbaren Schlüssel ein.";
$lang['StripePayments.text_accounts_remaining'] = "Verbleibende Konten: %1\$s"; // Where %1$s is the number of accounts yet to be migrated
$lang['StripePayments.text_migrate_accounts'] = "Sie können Zahlungskonten, die vom alten Stripe-Portal (Gateway) extern gespeichert wurden, automatisch zu diesem Stripe Zahlungs-Gateway migrieren. Konten, die nicht extern gespeichert sind, müssen durch manuelles Anlegen neuer Zahlungskonten migriert werden. Um Zeitüberschreitungen zu vermeiden, werden die Migrationen in Stapeln von %1\$s durchgeführt. Führen Sie diesen Vorgang so oft wie nötig aus, um alle Zahlungskonten zu migrieren."; // Where %1$s is the batch size
$lang['StripePayments.warning_migrate_accounts'] = "Deinstallieren Sie das alte Stripe-Portal (Gateway) nicht, bevor Sie dieses Migrationstool verwendet haben. Andernfalls wird das Tool unzugänglich.";
$lang['StripePayments.migrate_accounts'] = "Konten migrieren";
$lang['StripePayments.!error.bank_account_unverified'] = "Sie müssen Ihr Bankkonto verifizieren, bevor Sie es für eine Zahlung verwenden können.";
?>