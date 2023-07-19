<?php
$lang['Checkout.!error.invalid_agree_tos'] = "Sie müssen Ihre Zustimmung zu den Allgemeinen Geschäftsbedingungen bestätigen."; //en: "You must acknowledge your agreement to the terms and conditions."
$lang['Checkout.!error.no_payment_info'] = "Sie müssen eine Zahlungsart auswählen, um fortzufahren."; //en: "You must select a method of payment in order to continue."
$lang['Checkout.!error.not_client_owner'] = "Sie müssen als Kunde angemeldet sein, um fortzufahren."; //en: "You must be logged in as the client owner in order to continue."
$lang['Checkout.!error.payment_authorize'] = "Payment could not be authorized for the selected payment account.  Please select a different account or try again.";

$lang['Checkout.!info.unverified_email'] = "A link was sent to the email address you provided. Please click the link in the email to verify your email address before proceeding to make payment.";
$lang['Checkout.!info.unverified_email_button'] = 'Resend Verification Email';
$lang['Checkout.!info.ach_verification'] = 'You need to verify this account before you can use it to make a payment. This process will redirect you away from the current page.';

$lang['Checkout.index.description_invoice'] = "Rechnung # %1\$s"; // %1$s is the invoice number"; //en: "Invoice #%1\$s"; // %1$s is the invoice number"
$lang['Checkout.setcontactview.text_none'] = "Keiner"; //en: "None"

$lang['Checkout.getpaymentaccounts.paymentaccount_cc'] = "Kreditkartenkonten"; //en: "Credit Card Accounts"
$lang['Checkout.getpaymentaccounts.paymentaccount_ach'] = "ACH-Konten"; //en: "ACH Accounts"
$lang['Checkout.getpaymentaccounts.account_name'] = "%1\$s %2\$s - %3\$s x%4\$s"; // %1$s is the account first name, %2$s is the account last name, %3$s is the account type (card type or bank account type), %4$s is the last 4 of the account"; //en: "%1\$s %2\$s - %3\$s x%4\$s"; // %1$s is the account first name, %2$s is the account last name, %3$s is the account type (card type or bank account type), %4$s is the last 4 of the account"


$lang['Checkout.index.field_agree_tos'] = "Ich habe die <a href=\"%1\$s\" target=\"_blank\"> Nutzungsbedingungen </a> gelesen und akzeptiere sie</a>"; // %1$s is the URI to the terms and conditions"; //en: "I have read and agree to the <a href=\"%1\$s\" target=\"_blank\">Terms and Conditions</a>"; // %1$s is the URI to the terms and conditions"
$lang['Checkout.index.description_invoice'] = "Invoice #%1\$s"; // %1$s is the invoice number
$lang['Checkout.index.totals.setup_fee'] = "Einrichtungsgebühr:"; //en: "Setup Fee:"
$lang['Checkout.index.totals.discount'] = "Rabatt:"; //en: "Discount:"
$lang['Checkout.index.totals.subtotal'] = "Zwischensumme"; //en: "Subtotal:"
$lang['Checkout.index.totals.tax'] = "%1\$s (%2\$s%%):"; // %1$s is the tax name, %2$s is the tax percentage"; //en: "%1\$s (%2\$s%%):"; // %1$s is the tax name, %2$s is the tax percentage"
$lang['Checkout.index.totals.credit'] = "Guthaben:"; //en: "Credit:"
$lang['Checkout.index.totals.paid'] = "Bezahlt:"; //en: "Paid:"
$lang['Checkout.index.totals.total'] = "Gesamtbetrag fällig:"; //en: "Total Due:"

// Contact Info
$lang['Checkout.contact_info.field_first_name'] = "Vorname"; //en: "First Name"
$lang['Checkout.contact_info.field_last_name'] = "Nachname"; //en: "Last Name"
$lang['Checkout.contact_info.field_address1'] = "Adresse 1"; //en: "Address 1"
$lang['Checkout.contact_info.field_address2'] = "Adresszusatz"; //en: "Address 2"
$lang['Checkout.contact_info.field_city'] = "Stadt"; //en: "City"
$lang['Checkout.contact_info.field_country'] = "Land"; //en: "Country"
$lang['Checkout.contact_info.field_state'] = "Zustand"; //en: "State"
$lang['Checkout.contact_info.field_zip'] = "Postleitzahl"; //en: "Zip/Postal Code"
$lang['Checkout.contact_info.field_email'] = "Email"; //en: "Email"

// Account CC info
$lang['Checkout.cc_info.field_number'] = "Nummer"; //en: "Number"
$lang['Checkout.cc_info.field_security'] = "Sicherheits Code"; //en: "Security Code"
$lang['Checkout.cc_info.field_expiration'] = "Ablaufdatum"; //en: "Expiration Date"
$lang['Checkout.cc_info.field_savedetails'] = "Zahlungsdetails speichern"; //en: "Save Payment Details"
$lang['Checkout.cc_info.tooltip_savedetails'] = "Gespeicherte Zahlungsdaten können verwendet werden, damit diese in Zukunft nicht mehr eingegeben werden müssen."; //en: "Saved payment details can be used to make payment in the future without having to enter the details each time."
$lang['Checkout.cc_info.tooltip_code'] = "Der 3- oder 4-stellige Sicherheitscode, der normalerweise auf der Rückseite der Karte zu finden ist."; //en: "The 3 or 4 digit security code, usually found on the back of the card."

// Account ACH info
$lang['Checkout.ach_info.field_type'] = "Art"; //en: "Type"
$lang['Checkout.ach_info.field_accountnum'] = "Account Nummer"; //en: "Account Number"
$lang['Checkout.ach_info.field_routingnum'] = "Routing-Nummer"; //en: "Routing Number"
$lang['Checkout.ach_info.field_savedetails'] = "Zahlungsdetails speichern"; //en: "Save Payment Details"
$lang['Checkout.ach_info.tooltip_savedetails'] = "Gespeicherte Zahlungsdetails können für zukünftige Zahlungen verwendet werden, ohne dass sie jedes Mal neu eingegeben werden müssen."; //en: "Saved payment details can be used to make payment in the future without having to enter the details each time."

// Order complete
$lang['Checkout.complete.order_number'] = "Auftrag Nr. %1\$s"; // %1$s is the order number"; //en: "Order #%1\$s"; // %1$s is the order number"
$lang['Checkout.complete.complete_description'] = "Vielen Dank für Ihre Bestellung! Ihre Bestellung ist jetzt abgeschlossen."; //en: "Thank you for your order! Your order is now complete."
$lang['Checkout.complete.almost_complete_description'] = "Ihre Bestellung ist eingegangen, warte auf Zahlung."; //en: "Your order has been received, pending your payment below."
$lang['Checkout.complete.table_description'] = "Beschreibung"; //en: "Description"
$lang['Checkout.complete.table_qty'] = "Menge"; //en: "Quantity"
$lang['Checkout.complete.table_price'] = "Unit Price";
$lang['Checkout.complete.quantity'] = "%1\$s"; // %1\$s is the quantity value being ordered"; //en: "%1\$s @"; // %1\$s is the quantity value being ordered"
$lang['Checkout.complete.totals.subtotal'] = "Zwischensumme total:"; //en: "Subtotal:"
$lang['Checkout.complete.totals.tax'] = "%1\$s (%2\$s%%):"; // %1$s is the tax name, %2$s is the tax percentage"; //en: "%1\$s (%2\$s%%):"; // %1$s is the tax name, %2$s is the tax percentage"
$lang['Checkout.complete.totals.total'] = "Summe fällig:"; //en: "Total Due:"
$lang['Checkout.complete.totals.total_paid'] = "Ganz bezahlt:"; //en: "Total Paid:"
