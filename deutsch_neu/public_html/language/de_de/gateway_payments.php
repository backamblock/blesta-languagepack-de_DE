<?php
/**
 * Language definitions for the Gateway Payments component
 *
 * @package blesta
 * @subpackage blesta.language.de_de
 * @copyright Copyright (c) 2010, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['GatewayPayments.!error.gateway.exists'] = "Die Schnittstelle existiert nicht oder ist nicht aktiviert."; //en: "'The gateway does not exist or is not enabled.'"
$lang['GatewayPayments.!error.transaction_id.exists'] = "Die Transaktion konnte für diesen Kunden nicht gefunden werden."; //en: "'The transaction could not be found for that client.'"
$lang['GatewayPayments.!error.account_id.exists'] = "Das Zahlungskonto konnte für diesen Kunden nicht gefunden werden."; //en: "'The payment account could not be found for that client.'"
$lang['GatewayPayments.!error.contact_id.exists'] = "Der Kontakt wurde für diesen Kunden nicht gefunden."; //en: "'The contact could not be found for that client.'"
$lang['GatewayPayments.!error.type.valid'] = "Die Zahlungsart wird für dieses Gateway nicht unterstützt."; //en: "'The payment type is not supported for this gateway.'"
$lang['GatewayPayments.!error.type.instance'] = "Das Gateway unterstützt Zahlungen auf diese Weise nicht."; //en: "'The gateway does not support payments in this manner.'"
$lang['GatewayPayments.!error.amount.valid'] = 'Amount must be greater than zero.';
$lang['GatewayPayments.!error.reference_id.store'] = "Das Zahlungsgateway konnte das Zahlungskonto nicht speichern."; //en: "'The payment gateway could not store the payment account.'"
$lang['GatewayPayments.!error.reference_id.update'] = "Die Zahlungsschnittstelle konnte den Account nicht bearbeiten."; //en: "'The payment gateway could not update the payment account.'"
$lang['GatewayPayments.!error.reference_id.verify'] = 'The payment gateway could not verify the payment account.';
$lang['GatewayPayments.!error.reference_id.remove'] = "Das Payment-Gateway konnte nicht das Zahlungskonto entfernen."; //en: "'The payment gateway could not remove the payment account.'"
$lang['GatewayPayments.!error.response_status'] = "Das Zahlungsgateway hat eine unerwartete Antwort zurückgegeben."; //en: "'The payment gateway returned an unexpected response.'"
$lang['GatewayPayments.!error.gateway.declined'] = "Die Zahlung wurde abgelehnt."; //en: "'The payment was declined.'"
$lang['GatewayPayments.!error.gateway.error'] = "Das Zahlungs-Gateway hat bei der Verarbeitung der Anfrage einen Fehler zurückgegeben."; //en: "'The payment gateway returned an error when processing the request.'"
$lang['GatewayPayments.!error.type.invalid'] = 'The account type must be "ach" or "cc".';
