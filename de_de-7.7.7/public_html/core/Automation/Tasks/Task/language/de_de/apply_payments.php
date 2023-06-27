<?php
/**
 * actually GOOD de_de Language definitions. Translated by backamblock on Github
 * 
 * @package blesta
 * @version 7.7.7
 * @copyright Copyright (c) 2023, backamblock on Github
 * @license https://github.com/backamblock/ backamblock on Github - FREE for everybody
 * @link https://github.com/backamblock/ backamblock on Github
 */

$lang['Automation.task.apply_payments.attempt'] = 'Attempting to apply credits to open invoices.';
$lang['Automation.task.apply_payments.completed'] = "Die Aufgabe \"Guthaben verrechnen\" wurde abgeschlossen.";
$lang['Automation.task.apply_payments.attempt_group'] = 'Attempting to apply credits for client group %1$s.'; // %1$s is the name of the client group
$lang['Automation.task.apply_payments.completed_group'] = 'Completed applying credits for client group %1$s.'; // %1$s is the name of the client group
$lang['Automation.task.apply_payments.apply_failed'] = 'Unable to apply pending credits for client #%1$s.'; // %1$s is the client ID
$lang['Automation.task.apply_payments.apply_success'] = 'Successfully applied pending credits from transaction %1$s for client #%2$s to invoice #%3$s in the amount of %4$s.'; // %1$s is the transaction number, %2$s is the client ID, %3$s is the invoice ID, and %4$s is the amount applied
$lang['Automation.task.apply_payments.apply_none'] = 'There are no invoices to which credits may be applied.';
?>