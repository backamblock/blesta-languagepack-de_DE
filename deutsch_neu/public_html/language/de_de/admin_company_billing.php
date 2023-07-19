<?php
/**
 * Language definitions for the Admin Company Billing settings controller/views
 *
 * @package blesta
 * @subpackage blesta.language.de_de
 * @copyright Copyright (c) 2010, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

// Success messages
$lang['AdminCompanyBilling.!success.invoices_updated'] = "Die Rechnung und Zahlungs Einstellungen wurden erfolgreich aktualisiert!"; //en: "'The Invoice and Charge settings were successfully updated!'"
$lang['AdminCompanyBilling.!success.notices_updated'] = "Die Hinweise wurden erfolgreich aktualisiert!"; //en: "'The Notices were successfully updated!'"
$lang['AdminCompanyBilling.!success.coupon_created'] = "Der Gutschein wurde erfolgreich erstellt!"; //en: "'The coupon has been successfully created!'"
$lang['AdminCompanyBilling.!success.coupon_updated'] = "Der Gutschein wurde gespeichert!"; //en: "'The coupon has been successfully updated!'"
$lang['AdminCompanyBilling.!success.coupon_deleted'] = "Der Gutschein wurde erfolgreich gelöscht!"; //en: "'The coupon has been successfully deleted!'"
$lang['AdminCompanyBilling.!success.acceptedtypes_updated'] = "Die akzeptierte Zahlungsarten Einstellungen wurden erfolgreich aktualisiert!"; //en: "'The Accepted Payment Type settings were successfully updated!'"
$lang['AdminCompanyBilling.!success.deliverymethods_updated'] = "Die Liefer-Einstellungen der Rechnung wurden erfolgreich bearbeitet!"; //en: "'The Invoice Delivery settings were successfully updated!'"
$lang['AdminCompanyBilling.!success.latefees_updated'] = "Die Einstellungen für verspätete Gebühren wurden erfolgreich aktualisiert!"; //en: "'The Late Fees settings were successfully updated!'"
$lang['AdminCompanyBilling.!success.customization_updated'] = "Die Rechnungsanpassungseinstellungen wurden erfolgreich aktualisiert!"; //en: "'The Invoice Customization settings were successfully updated!'"


// Error messages
$lang['AdminCompanyBilling.!error.amount.format'] = "Der Gebührenbetrag muss eine Zahl sein."; //en: "'The fee Amount must be a number.'"
$lang['AdminCompanyBilling.!error.minimum.format'] = "Der Mindestbetrag der Gebühr muss eine Zahl sein."; //en: "'The fee Minimum amount must be a number.'"
$lang['AdminCompanyBilling.!error.extension_zlib'] = "Die Zlib-Erweiterung ist für die Rechnungskomprimierung erforderlich."; //en: "'The Zlib extension is required for invoice compression.'"


// Tooltips
$lang['AdminCompanyBilling.!tooltip.coupon_term_value'] = "Begriffe sollten als CSV-Liste eingegeben werden (z. B. \"1,3,4\", was 1 Tag, 3 Tage und 4 Tage bedeutet, wenn sie in der Zeile \"Tag\" eingegeben werden)."; //en: "'Terms should be entered as a CSV list (e.g. "1,3,4" meaning 1 day, 3 days, and 4 days when entered in the \'Day\' row).'"
$lang['AdminCompanyBilling.!tooltip.coupon_quantity'] = "Die Menge regelt, wieviele Male der Gutschein verwendet werden kann, bevor er ungültig wird."; //en: "'The quantity represents the maximum number of times this coupon can be used before it is expired.'"

$lang['AdminCompanyBilling.!tooltip.inv_days_before_renewal'] = "Die Anzahl der Tage, bevor ein Service oder eine wiederkehrende Rechnung erneuert wird, um eine Rechnung zu erstellen."; //en: "'The number of days before a service or recurring invoice renews to generate an invoice.'"
$lang['AdminCompanyBilling.!tooltip.quotation_valid_days'] = 'The number of days after issuing a quote to set it as expired.';
$lang['AdminCompanyBilling.!tooltip.quotation_dead_days'] = 'The number of days after a quote expires to set it as dead.';
$lang['AdminCompanyBilling.!tooltip.quotation_deposit_percentage'] = 'The default initial deposit percentage for a quote.';
$lang['AdminCompanyBilling.!tooltip.autodebit_days_before_due'] = "Die Anzahl der Tage before eine Rechnung fällig wird und vom Standard-Bezahlkonto des Kunden abgebucht wird (wenn der Kunde konfiguriert wurde zur automatischen Verrechnung)."; //en: "'The number of days before an invoice is due to auto debit the client\'s default payment account (if the client is configured for auto debit).'"
$lang['AdminCompanyBilling.!tooltip.suspend_services_days_after_due'] = "Die Anzahl der Tage, die nach einer überfälligen Rechnung für einen Dienst gewartet werden soll, bevor der Dienst ausgesetzt wird."; //en: "'The number of days to wait after an invoice for a service has been past due before suspending the service.'"
$lang['AdminCompanyBilling.!tooltip.autodebit_attempts'] = "Die Anzahl der Fehlversuche eine Zahlung zu veranlassen bevor die Zahlungsmethode ausgenommen wird von der automatischen Abbuchung."; //en: "'The number of attempts and failures to process a payment account before that payment account is disabled from being automatically debited.'"
$lang['AdminCompanyBilling.!tooltip.service_renewal_attempts'] = 'The number of attempts and failures to process a service renewal before that services is disabled from being automatically renewed.';
$lang['AdminCompanyBilling.!tooltip.cancel_service_changes_days'] = "Aufgeschobene Service-Änderungen werden automatisch abgebrochen wenn die Rechnung unbezahlt bleibt für die ausgewählte Anzahl an Tagen."; //en: "'Queued service changes will be automatically canceled when their invoice goes unpaid for the selected number of days.'"
$lang['AdminCompanyBilling.!tooltip.apply_inv_late_fees'] = "Wenden Sie eine Verzugsgebühr an, um Rechnungen eine konfigurierte Anzahl von Tagen nach Fälligkeit zu öffnen."; //en: "'Apply a late fee to open invoices a configured number of days after due.'"
$lang['AdminCompanyBilling.!tooltip.autodebit'] = "Aktiviere automatische Abbuchungen bei einem Kunden wenn eine Zahlung ansteht."; //en: "'Enables autodebiting of a client when payment is due.'"
$lang['AdminCompanyBilling.!tooltip.client_set_invoice'] = "Wähle aus um den Kunden die Möglichkeit zu wählen welche Rechnungmethode gwünscht wird (z.B. Papier oder E-Mail)"; //en: "'Check to allow the client to choose which method of invoice delivery they prefer (e.g. Paper or Email).'"
$lang['AdminCompanyBilling.!tooltip.inv_suspended_services'] = "Setzen Sie das Häkchen, um ausgesetzte Dienste weiterhin in Rechnung zu stellen."; //en: "'Check to continue invoicing suspended services.'"
$lang['AdminCompanyBilling.!tooltip.inv_group_services'] = "Erstellt eine einzige Rechnung für Services, die am selben Tag für einen Kunden verlängert werden. Wenn Sie das Kontrollkästchen deaktivieren, wird für jede Dienstleistung eine separate Rechnung erstellt"; //en: "'Creates a single invoice for services that renew on the same day for a client. Unchecking will create a separate invoice for each service.'"
$lang['AdminCompanyBilling.!tooltip.inv_append_descriptions'] = "Aktivieren Sie diese Option, um die Textversion der Paketbeschreibungen an Servicepositionen anzuhängen."; //en: "'Check to append the text version of Package descriptions to service line items.'"
$lang['AdminCompanyBilling.!tooltip.inv_lines_verbose_option_dates'] = "Aktivieren Sie das Kontrollkästchen, um den Servicedatumsbereich für jeden konfigurierbaren Optionsrechnungsposten einzubeziehen."; //en: "'Check to include the service date range for each configurable option invoice line item.'"
$lang['AdminCompanyBilling.!tooltip.clients_cancel_services'] = "Aktivieren Sie diese Option, damit Clients ihre eigenen Dienste kündigen können."; //en: "'Check to allow clients to cancel their own services.'"
$lang['AdminCompanyBilling.!tooltip.clients_renew_services'] = "Aktivieren Sie diese Option, damit Kunden ihre eigenen Dienste im Voraus erneuern können."; //en: "'Check to allow clients to renew their own services in advance.'"
$lang['AdminCompanyBilling.!tooltip.synchronize_addons'] = "Wenn diese Option aktiviert ist, werden neu erstellte Zusatzdienste, die mit den monatlichen oder jährlichen Laufzeiten des Hauptproduktes übereinstimmen, anteilig auf das Verlängerungsdatum des Hauptproduktes angerechnet."; //en: "'When checked, newly-created addon services that match the parent\'s monthly or yearly terms will be prorated to the parent\'s renew date.'"
$lang['AdminCompanyBilling.!tooltip.client_create_addons'] = "Markiere, um Kunden das Bestellen von Erweiterungen (Add-ons) für alle ihrer Services, die es unterstützen, zu erlauben."; //en: "'Check to allow clients to order addons for any of their services that support them.'"
$lang['AdminCompanyBilling.!tooltip.client_change_service_term'] = "Markiere, um Kunden das Wechseln der Preisstellung (nicht Periode!) zu ermöglichen."; //en: "'Check to allow clients to change the term of recurring services.'"
$lang['AdminCompanyBilling.!tooltip.client_change_service_package'] = "Markiere, um Kunden das Wechseln der Pakete bei wiederkehrenden Services zu erlauben."; //en: "'Check to allow clients to change the package of recurring services.'"
$lang['AdminCompanyBilling.!tooltip.client_prorate_credits'] = "Markiere, um anteilige Abrechnungen für Services oder Service-Optionen die heruntergestuft wurden zu erlauben."; //en: "'Check to allow prorated credits for services, or service configurable options, that are downgraded.'"
$lang['AdminCompanyBilling.!tooltip.auto_apply_credits'] = "Markieren, damit Blesta automatisch offene Rechnung mit Guthaben begleicht (älteste Rechnung zuerst)."; //en: "'Check to allow Blesta to automatically apply credits to open invoices (oldest invoices first).'"
$lang['AdminCompanyBilling.!tooltip.auto_paid_pending_services'] = "Markieren, damit Blesta automatisch Services provisioniert die Rechnungen enthalten die noch ausstehen oder nur teilweise bezahlt sind, aber schon eine bezahlte Rechnung hatten."; //en: "'Check to allow Blesta to automatically provision services that are both pending and have an invoice that has been paid.'"
$lang['AdminCompanyBilling.!tooltip.void_invoice_canceled_service'] = "Wenn diese Option aktiviert ist, werden bei Servicestornierungen auch alle offenen Rechnungen im Zusammenhang mit dem stornierten Service ungültig. Wenn eine solche Rechnung Posten enthält, die nicht mit dem Service verknüpft sind, werden die Service-Posten stattdessen entfernt und die Rechnung wird nicht storniert."; //en: "'When checked, service cancellations will also void any open invoices associated with the canceled service. If such an invoice contains line items not associated with the service, the service line items will be removed instead, and the invoice will not be voided.'"
$lang['AdminCompanyBilling.!tooltip.void_inv_canceled_service_days'] = "Wenn die mit einer stornierten Leistung verbundene Rechnung überfällig ist, wird sie nur dann storniert, wenn sie nicht mehr als die ausgewählte Anzahl von Tagen überfällig ist."; //en: "'If the invoice associated with a cancelled service is past due, it will only be voided if it is not past due more than the selected number of days.'"
$lang['AdminCompanyBilling.!tooltip.show_client_tax_id'] = "Aktivieren Sie dieses Kontrollkästchen, um das Feld Steuer-ID in der Kundenschnittstelle anzuzeigen."; //en: "'Check to show the Tax ID field in the client interface.'"
$lang['AdminCompanyBilling.!tooltip.process_paid_service_changes'] = "Wenn diese Option aktiviert ist, werden Dienständerungen (d. h. Upgrades/Downgrades) in eine Warteschlange gestellt und erst nach ihrer Bezahlung bereitgestellt. Andernfalls werden sie sofort bereitgestellt."; //en: "'If checked, service changes (i.e. upgrades/downgrades) will be queued and provisioned only after they have been paid. Otherwise, they will be provisioned immediately.'"

$lang['AdminCompanyBilling.!tooltip.late_fee_total_amount'] = "Wenn die Gebührenart prozentual ist, markieren Sie dies, um die Gebühr auf der Grundlage des Gesamtbetrags der Rechnung zu berechnen. Ist dies nicht markiert, wird die Gebühr nur auf der Grundlage des unbezahlten Betrags berechnet."; //en: "'If the fee type is percentage, check this to calculate the fee based on the total amount of the invoice. If this is unchecked, the fee will be calculated based on the unpaid amount only.'"

$lang['AdminCompanyBilling.!tooltip.send_payment_notices'] = "Diese Option legt fest, ob Clients eine der verfügbaren Zahlungsmitteilungen senden können."; //en: "'This option sets whether clients can be sent any of the available payment notices.'"
$lang['AdminCompanyBilling.!tooltip.send_cancellation_notice'] = "Mit dieser Option können Sie festlegen, ob Kunden Benachrichtigungen über die Stornierung von Diensten zugesandt werden können."; //en: "'This option sets whether clients can be sent service cancellation notices.'"
$lang['AdminCompanyBilling.!tooltip.first_notice'] = "Die Anzahl der Tage vor oder nach dem Versenden der ersten E-Mail mit verspäteter Benachrichtigung."; //en: "'The number of days before or after an invoice is due to send the first late notice email.'"
$lang['AdminCompanyBilling.!tooltip.second_notice'] = "Die Anzahl der Tage vor oder nach der Fälligkeit einer Rechnung, um die zweite Verspätungsmitteilung per E-Mail zu versenden."; //en: "'The number of days before or after an invoice is due to send the second late notice email.'"
$lang['AdminCompanyBilling.!tooltip.third_notice'] = "Die Anzahl der Tage vor oder nach der Fälligkeit einer Rechnung, um die dritte Verspätungsmitteilung per E-Mail zu versenden."; //en: "'The number of days before or after an invoice is due to send the third late notice email.'"
$lang['AdminCompanyBilling.!tooltip.notice_pending_autodebit'] = "Die Anzahl der Tage, bevor ein Konto automatisch belastet wird, um die Benachrichtigung über ausstehende automatische Abbuchungen per E-Mail zu versenden."; //en: "'The number of days before an account is auto debited to send the pending auto debit notice email.'"

$lang['AdminCompanyBilling.!tooltip.inv_type'] = "Die Art der Rechnung, die standardmäßig erstellt wird. Proforma-Rechnungen werden zu Standard-Rechnungen, nachdem sie bezahlt und geschlossen wurden."; //en: "'The type of invoice that is created by default. Pro forma invoices change to Standard invoices after they have been paid and closed.'"
$lang['AdminCompanyBilling.!tooltip.inv_format'] = "Zu den verfügbaren Tags gehören: {num} – die Rechnungsnummer (erforderlich); {year} - das vierstellige Jahr; {month} - der zweistellige Monat; {day} – der zweistellige Tag des Monats."; //en: "'Available tags include: {num} - the invoice number (required); {year} - the four-digit year; {month} - the two-digit month; {day} - the two-digit day of the month.'"
$lang['AdminCompanyBilling.!tooltip.inv_draft_format'] = "Zu den verfügbaren Tags gehören: {num} – die Rechnungsnummer (erforderlich); {year} - das vierstellige Jahr; {month} - der zweistellige Monat; {day} – der zweistellige Tag des Monats."; //en: "'Available tags include: {num} - the invoice number (required); {year} - the four-digit year;  {month} - the two-digit month; {day} - the two-digit day of the month.'"
$lang['AdminCompanyBilling.!tooltip.inv_proforma_format'] = "Zu den verfügbaren Tags gehören: {num} – die Rechnungsnummer (erforderlich); {year} - das vierstellige Jahr; {Monat} - der zweistellige Monat; {day} – der zweistellige Tag des Monats."; //en: "'Available tags include: {num} - the invoice number (required); {year} - the four-digit year;  {month} - the two-digit month; {day} - the two-digit day of the month.'"
$lang['AdminCompanyBilling.!tooltip.inv_start'] = "Die Rechnungsnummern beginnen (und erhöhen sich) mit diesem Startwert."; //en: "'Invoice numbers will begin (and increment) from this starting value.'"
$lang['AdminCompanyBilling.!tooltip.inv_proforma_start'] = "Rechnungsnummern beginnen (und erhöhen) ab diesem Startwert."; //en: "'Invoice numbers will begin (and increment) from this starting value.'"
$lang['AdminCompanyBilling.!tooltip.inv_increment'] = "Nachfolgende Rechnungsnummern werden um diesen Wert erhöht."; //en: "'Subsequent invoice numbers will increment by this value.'"
$lang['AdminCompanyBilling.!tooltip.inv_pad_size'] = "Die Rechnungsauffüllgröße legt die Mindestzeichenlänge von Rechnungsnummern fest."; //en: "'The invoice padding size sets the minimum character length of invoice numbers.'"
$lang['AdminCompanyBilling.!tooltip.inv_pad_str'] = "Invoice numbers whose character length is fewer than the invoice padding size will be padded to the left by the given character."; //en: "'Invoice numbers whose character length is fewer than the invoice padding size will be padded to the left by the given character.'"

$lang['AdminCompanyBilling.!tooltip.inv_cache'] = "Speichert eine zwischengespeicherte Kopie jeder Rechnung auf der Festplatte."; //en: "'Saves a cached copy of each invoice on disk.'"
$lang['AdminCompanyBilling.!tooltip.inv_cache_compress'] = "Komprimieren Sie die zwischengespeicherten PDF-Dateien, um Speicherplatz auf der Festplatte zu sparen. Die Aktivierung dieser Option kann die Leistung beeinträchtigen."; //en: "'Compress the cached PDF files to save space on disk. Enabling this option can decrease performance.'"

$lang['AdminCompanyBilling.!tooltip.inv_logo'] = "Laden Sie das Logo hoch, das auf der Rechnung erscheinen soll."; //en: "'Upload the logo to appear on the invoice.'"
$lang['AdminCompanyBilling.!tooltip.inv_background'] = "Lade den Hintergrund für die Rechnungen hoch."; //en: "'Upload the background to appear on the invoice.'"
$lang['AdminCompanyBilling.!tooltip.inv_paper_size'] = "Das Papierformat der Rechnung."; //en: "'The invoice paper size.'"
$lang['AdminCompanyBilling.!tooltip.inv_template'] = "Die Rechnungsvorlage, die zum Rendern der Rechnung verwendet werden soll."; //en: "'The invoice template to use to render the invoice.'"
$lang['AdminCompanyBilling.!tooltip.inv_mimetype'] = "Der Rechnungsdateityp. Rechnungsvorlagen können verschiedene Dateitypen unterstützen."; //en: "'The invoice file type. Invoice templates may support various file types.'"

$lang['AdminCompanyBilling.!tooltip.inv_font'] = "Für zusätzliche Schriftarten entpacken Sie Ihre benutzerdefinierten TCPDF-Schriftarten in das Verzeichnis /vendors/tecnickcom/tcpdf/fonts/ in Ihrer Installation."; //en: "'For additional fonts, unpack your custom TCPDF fonts to the /vendors/tecnickcom/tcpdf/fonts/ directory within your installation.'"
$lang['AdminCompanyBilling.!tooltip.inv_terms'] = "Geben Sie die Zahlungsbedingungen oder andere Informationen ein, die auf der Rechnung erscheinen sollen."; //en: "'Enter the payment terms or any other information you wish to appear on the invoice.'"


// Notices
$lang['AdminCompanyBilling.!notice.group_settings'] = "HINWEIS: Diese Einstellungen gelten nur für Client-Gruppen , die ihre Einstellungen von der Firma übernehmen."; //en: "'NOTE: These settings only apply to Client Groups that inherit their settings from the Company.'"


// Invoices and Charge settings
$lang['AdminCompanyBilling.invoices.page_title'] = "Einstellungen> Firma> Abrechnung / Zahlung> Rechnung und Gebührenoptionen"; //en: "'Settings > Company > Billing/Payment > Invoice and Charge Options'"
$lang['AdminCompanyBilling.invoices.boxtitle_invoices'] = "Rechnungs und Belastungs Einstellungen"; //en: "'Invoice and Charge Options'"

$lang['AdminCompanyBilling.invoices.field.inv_days_before_renewal'] = 'Invoice Days Before Renewal';
$lang['AdminCompanyBilling.invoices.field.quotation_valid_days'] = 'Quote Expiration Days';
$lang['AdminCompanyBilling.invoices.field.quotation_dead_days'] = 'Quote Dead Days After Expiration';
$lang['AdminCompanyBilling.invoices.field.quotation_deposit_percentage'] = 'Quote Default Deposit Percentage (%)';
$lang['AdminCompanyBilling.invoices.field.autodebit_days_before_due'] = 'Auto Debit Days Before Due Date';
$lang['AdminCompanyBilling.invoices.field.suspend_services_days_after_due'] = 'Suspend Services Days After Due';
$lang['AdminCompanyBilling.invoices.field.autodebit_attempts'] = "Automatische Abbuchungsversuche"; //en: "'Auto Debit Attempts'"
$lang['AdminCompanyBilling.invoices.field.service_renewal_attempts'] = 'Service Renewal Attempts';
$lang['AdminCompanyBilling.invoices.field.cancel_service_changes_days'] = 'Cancel Service Changes Days After Due';
$lang['AdminCompanyBilling.invoices.field.apply_inv_late_fees'] = "Säumniszuschlag auf offene Rechnungen nach der Fälligkeit anwenden"; //en: "'Apply Late Fee to Open Invoices After Due'"
$lang['AdminCompanyBilling.invoices.field.autodebit'] = 'Enable Auto Debit';
$lang['AdminCompanyBilling.invoices.field.client_set_invoice'] = "Ermöglichen Sie dem Kunden, die Rechnungsmethode festzulegen"; //en: "'Allow Client to Set Invoice Method'"
$lang['AdminCompanyBilling.invoices.field.inv_suspended_services'] = 'Invoice Suspended Services';
$lang['AdminCompanyBilling.invoices.field.inv_group_services'] = 'Invoice Services Together';
$lang['AdminCompanyBilling.invoices.field.inv_append_descriptions'] = "Paketbeschreibungen auf Rechnungen einfügen"; //en: "'Include Package Descriptions on Invoices'"
$lang['AdminCompanyBilling.invoices.field.inv_lines_verbose_option_dates'] = 'Display the Service Date Range for Configurable Options';
$lang['AdminCompanyBilling.invoices.field.clients_cancel_services'] = "Kunden die Möglichkeit geben, Dienste zu stornieren"; //en: "'Allow Clients to Cancel Services'"
$lang['AdminCompanyBilling.invoices.field.clients_renew_services'] = "Kunden die Möglichkeit geben, Dienste manuell zu erneuern"; //en: "'Allow Clients to Manually Renew Services'"
$lang['AdminCompanyBilling.invoices.field.synchronize_addons'] = 'Allow Addon Services to be Synchronized with their Parent Services';
$lang['AdminCompanyBilling.invoices.field.client_create_addons'] = 'Allow Clients to Create Addons for Existing Services';
$lang['AdminCompanyBilling.invoices.field.client_change_service_term'] = "Erlauben Sie Kunden, Servicebedingungen zu ändern"; //en: "'Allow Clients to Change Service Terms'"
$lang['AdminCompanyBilling.invoices.field.client_change_service_package'] = "Kunden das Ändern von Servicepaketen erlauben"; //en: "'Allow Clients to Change Service Package'"
$lang['AdminCompanyBilling.invoices.field.client_prorate_credits'] = 'Allow Prorated Credits to be Issued for Service Downgrades';
$lang['AdminCompanyBilling.invoices.field.auto_apply_credits'] = 'Automatically Apply Loose Credits';
$lang['AdminCompanyBilling.invoices.field.auto_paid_pending_services'] = "Bezahlte ausstehende Dienste automatisch bereitstellen"; //en: "'Automatically Provision Paid Pending Services'"
$lang['AdminCompanyBilling.invoices.field.void_invoice_canceled_service'] = 'Void Open Invoices on Service Cancellation';
$lang['AdminCompanyBilling.invoices.field.void_inv_canceled_service_days'] = "Offene Rechnungen Tage nach Fälligkeit stornieren"; //en: "'Void Open Invoices Days After Due'"
$lang['AdminCompanyBilling.invoices.field.show_client_tax_id'] = 'Show the Tax ID Field in the Client Interface';
$lang['AdminCompanyBilling.invoices.field.process_paid_service_changes'] = 'Queue Service Changes Until Paid';
$lang['AdminCompanyBilling.invoices.field.invoicessubmit'] = 'Update Settings';

$lang['AdminCompanyBilling.invoices.text_any'] = '- Any -';
$lang['AdminCompanyBilling.invoices.text_never'] = "Nie"; //en: "'Never'"
$lang['AdminCompanyBilling.invoices.text_sameday'] = "Gleicher Tag"; //en: "'Same Day'"
$lang['AdminCompanyBilling.invoices.text_day'] = "%1\$s Tag"; // %1$s is the number 1"; //en: "'%1$s Day'; // %1$s is the number 1"
$lang['AdminCompanyBilling.invoices.text_days'] = "%1\$s Tage"; // %1$s is a number of days that is not 1"; //en: "'%1$s Days'; // %1$s is a number of days that is not 1"


// Notices
$lang['AdminCompanyBilling.notices.page_title'] = "Einstellungen > Unternehmen > Abrechnung/Zahlung > Mitteilungen"; //en: "'Settings > Company > Billing/Payment > Notices'"
$lang['AdminCompanyBilling.notices.boxtitle_notices'] = "Notizen"; //en: "'Notices'"

$lang['AdminCompanyBilling.notices.text_notices'] = 'Payment notices can be used as late notices, or payment reminders.';
$lang['AdminCompanyBilling.notices.text_before'] = "Vorher"; //en: "'Before'"
$lang['AdminCompanyBilling.notices.text_after'] = "nach"; //en: "'After'"
$lang['AdminCompanyBilling.notices.text_inv_duedate'] = "Rechnungsfälligkeitsdatum"; //en: "'Invoice Due Date'"
$lang['AdminCompanyBilling.notices.text_day'] = "%1\$s Tag"; // %1$s is the number 1"; //en: "'%1$s Day'; // %1$s is the number 1"
$lang['AdminCompanyBilling.notices.text_days'] = "%1\$s Tage"; // %1$s is a number of days that is not 1"; //en: "'%1$s Days'; // %1$s is a number of days that is not 1"
$lang['AdminCompanyBilling.notices.text_duedate'] = "Fälligkeitsdatum"; //en: "'Due Date'"
$lang['AdminCompanyBilling.notices.text_disabled'] = "Deaktiviert"; //en: "'Disabled'"
$lang['AdminCompanyBilling.notices.text_edit_template'] = "E-Mail-Vorlage bearbeiten"; //en: "'Edit Email Template'"

$lang['AdminCompanyBilling.notices.field.send_cancellation_notice'] = 'Allow Service Cancellation Notices to be Sent';
$lang['AdminCompanyBilling.notices.field.send_payment_notices'] = "Versand von Zahlungsaufforderungen zulassen"; //en: "'Allow Payment Notices to be Sent'"
$lang['AdminCompanyBilling.notices.field.first_notice'] = 'First Notice';
$lang['AdminCompanyBilling.notices.field.second_notice'] = "Zweite Mahnung"; //en: "'Second Notice'"
$lang['AdminCompanyBilling.notices.field.third_notice'] = 'Third Notice';
$lang['AdminCompanyBilling.notices.field.notice_pending_autodebit'] = 'Auto-Debit Pending Notice';
$lang['AdminCompanyBilling.notices.field.noticessubmit'] = "Einstellungen updaten"; //en: "'Update Settings'"


// Coupons
$lang['AdminCompanyBilling.coupons.page_title'] = "Einstellungen -> Unternehmen -> Rechnung/Zahlung -> Gutscheincodes"; //en: "'Settings > Company > Billing/Payment > Coupons'"
$lang['AdminCompanyBilling.coupons.no_results'] = "Es gibt keine Gutscheine."; //en: "'There are no coupons.'"

$lang['AdminCompanyBilling.coupons.categorylink_addcoupon'] = "Gutscheincode hinzufügen"; //en: "'Add Coupon'"

$lang['AdminCompanyBilling.coupons.boxtitle_coupons'] = "Gutscheine"; //en: "'Coupons'"

$lang['AdminCompanyBilling.coupons.text_code'] = "Code"; //en: "'Code'"
$lang['AdminCompanyBilling.coupons.text_discount'] = "Rabatt"; //en: "'Discount'"
$lang['AdminCompanyBilling.coupons.text_used'] = "Benutzt"; //en: "'Used'"
$lang['AdminCompanyBilling.coupons.text_max'] = "Maximal"; //en: "'Max'"
$lang['AdminCompanyBilling.coupons.text_start_date'] = "Startdatum"; //en: "'Start Date'"
$lang['AdminCompanyBilling.coupons.text_end_date'] = "End-Datum"; //en: "'End Date'"
$lang['AdminCompanyBilling.coupons.text_options'] = "Einstellungen"; //en: "'Options'"
$lang['AdminCompanyBilling.coupons.text_currency'] = "Währung"; //en: "'Currency'"

$lang['AdminCompanyBilling.coupons.text_multiple'] = "Mehrere"; //en: "'Multiple'"

$lang['AdminCompanyBilling.coupons.option_edit'] = "Bearbeiten"; //en: "'Edit'"
$lang['AdminCompanyBilling.coupons.option_delete'] = "Löschen"; //en: "'Delete'"

$lang['AdminCompanyBilling.coupons.confirm_delete'] = "Sind Sie sicher, das Sie diesen Gutschein löschen möchten?"; //en: "'Are you sure you want to delete this coupon?'"


// Add coupon
$lang['AdminCompanyBilling.addcoupon.page_title'] = "Einstellungen > Unternehmen > Abrechnung / Zahlung > Neuer Gutschein"; //en: "'Settings > Company > Billing/Payment > New Coupon'"
$lang['AdminCompanyBilling.addcoupon.boxtitle_new'] = "Neuer Gutschein"; //en: "'New Coupon'"
$lang['AdminCompanyBilling.addcoupon.heading_basic'] = "Einfach"; //en: "'Basic'"

$lang['AdminCompanyBilling.addcoupon.field_status'] = "Aktiviert"; //en: "'Enabled'"
$lang['AdminCompanyBilling.addcoupon.field_recurring_no'] = "Nur übernehmen, wenn der Dienst hinzugefügt wird"; //en: "'Apply when service is added only'"
$lang['AdminCompanyBilling.addcoupon.field_recurring_yes'] = "Übernehmen, wenn Service hinzugefügt oder erneuert wird."; //en: "'Apply when service is added or renews'"
$lang['AdminCompanyBilling.addcoupon.field_apply_package_options'] = "Anwenden auf konfigurierbare Optionen"; //en: "'Apply to Configurable Options'"
$lang['AdminCompanyBilling.addcoupon.field_internal_use_only'] = "Nur für den internen Gebrauch"; //en: "'Internal Use Only'"
$lang['AdminCompanyBilling.addcoupon.field_code'] = "Gutscheincode"; //en: "'Coupon Code'"

$lang['AdminCompanyBilling.addcoupon.text_generate_code'] = "Code generieren"; //en: "'Generate code'"

$lang['AdminCompanyBilling.addcoupon.heading_limitations'] = "Begrenzungen "; //en: "'Limitations'"

$lang['AdminCompanyBilling.addcoupon.field_start_date'] = "Start Datum"; //en: "'Start Date'"
$lang['AdminCompanyBilling.addcoupon.field_end_date'] = "Auslauf Datum"; //en: "'End Date'"
$lang['AdminCompanyBilling.addcoupon.field_max_qty'] = "Anzahl"; //en: "'Quantity'"
$lang['AdminCompanyBilling.addcoupon.field_limit_recurring_no'] = "Einschränkungen gelten nicht für sich erneuernde Dienstleistungen"; //en: "'Limitations do not apply to renewing services'"
$lang['AdminCompanyBilling.addcoupon.field_limit_recurring_yes'] = "Einschränkungen gelten für erneuernde Dienste."; //en: "'Limitations do apply to renewing services'"

$lang['AdminCompanyBilling.addcoupon.heading_discount'] = "Rabatt Einstellungen"; //en: "'Discount Options'"

$lang['AdminCompanyBilling.addcoupon.categorylink_addcurrency'] = "Weitere Währung hinzufügen"; //en: "'Add Additional Currency'"

$lang['AdminCompanyBilling.addcoupon.text_currency'] = "Währung"; //en: "'Currency'"
$lang['AdminCompanyBilling.addcoupon.text_type'] = "Art"; //en: "'Type'"
$lang['AdminCompanyBilling.addcoupon.text_value'] = "Wert"; //en: "'Value'"

$lang['AdminCompanyBilling.addcoupon.heading_terms'] = "Laufzeitbeschränkungen"; //en: "'Term Limitations'"
$lang['AdminCompanyBilling.addcoupon.description_terms'] = "Dieser Gutschein kann nur für Dienstleistungen verwendet werden, die für einen der ausgewählten Bedingungen / Zeiträume bestellt wurden. Wenn keine aktiviert sind, wird der Begriff für den Dienst bei der Bewertung der Gutscheineinschränkungen ignoriert."; //en: "'This coupon can only be applied to services that are ordered for one of the selected terms/periods. If none are enabled, then the term for the service will be ignored when evaluating coupon limitations.'"

$lang['AdminCompanyBilling.addcoupon.text_enabled'] = "aktiviert"; //en: "'Enabled'"
$lang['AdminCompanyBilling.addcoupon.text_period'] = "Zeitraum"; //en: "'Period'"
$lang['AdminCompanyBilling.addcoupon.text_terms'] = "Begriffe"; //en: "'Terms'"
$lang['AdminCompanyBilling.addcoupon.not_applicable'] = "N / A"; //en: "'N/A'"

$lang['AdminCompanyBilling.addcoupon.option_remove'] = "Entfernen"; //en: "'Remove'"

$lang['AdminCompanyBilling.addcoupon.heading_packages'] = "Pakete"; //en: "'Packages'"

$lang['AdminCompanyBilling.addcoupon.field_package_group_id'] = "Paketgruppenfilter"; //en: "'Package Group Filter'"
$lang['AdminCompanyBilling.addcoupon.field_couponsubmit'] = "Gutschein erstellen"; //en: "'Create Coupon'"

$lang['AdminCompanyBilling.addcoupon.text_all'] = "Alles"; //en: "'All'"
$lang['AdminCompanyBilling.addcoupon.text_assigned_packages'] = "Zugewiesene Pakete"; //en: "'Assigned Packages'"
$lang['AdminCompanyBilling.addcoupon.text_available_packages'] = "Verfügbare Pakete"; //en: "'Available Packages'"


// Edit coupon
$lang['AdminCompanyBilling.editcoupon.page_title'] = "Einstellungen > Firma > Abrechnung/Bezahlung > Coupon bearbeiten"; //en: "'Settings > Company > Billing/Payment > Edit Coupon'"
$lang['AdminCompanyBilling.editcoupon.boxtitle_edit'] = "Gutschein bearbeiten"; //en: "'Edit Coupon'"

$lang['AdminCompanyBilling.editcoupon.heading_basic'] = "Einfach"; //en: "'Basic'"

$lang['AdminCompanyBilling.editcoupon.field_recurring_no'] = "Nur übernehmen, wenn der Service hinzugefügt wird"; //en: "'Apply when service is added only'"
$lang['AdminCompanyBilling.editcoupon.field_recurring_yes'] = "Übernehmen, wenn Service hinzugefügt oder erneuert wird"; //en: "'Apply when service is added or renews'"
$lang['AdminCompanyBilling.editcoupon.field_apply_package_options'] = "Auf Konfigurierbare Optionen übernehmen."; //en: "'Apply to Configurable Options'"
$lang['AdminCompanyBilling.editcoupon.field_internal_use_only'] = "Nur für den internen Gebrauch"; //en: "'Internal Use Only'"
$lang['AdminCompanyBilling.editcoupon.field_code'] = "Gutschein"; //en: "'Coupon Code'"

$lang['AdminCompanyBilling.editcoupon.text_generate_code'] = "Code generieren"; //en: "'Generate code'"

$lang['AdminCompanyBilling.editcoupon.heading_limitations'] = "Einschränkungen"; //en: "'Limitations'"

$lang['AdminCompanyBilling.editcoupon.field_start_date'] = "Startdatum"; //en: "'Start Date'"
$lang['AdminCompanyBilling.editcoupon.field_end_date'] = "Beendigungs Datum"; //en: "'End Date'"
$lang['AdminCompanyBilling.editcoupon.field_max_qty'] = "Menge"; //en: "'Quantity'"
$lang['AdminCompanyBilling.editcoupon.field_limit_recurring_no'] = "Einschränkungen gelten nicht für die erneuernde Dienstleistungen"; //en: "'Limitations do not apply to renewing services'"
$lang['AdminCompanyBilling.editcoupon.field_limit_recurring_yes'] = "Einschränkungen gelten für erneuernde Diensteleistungen"; //en: "'Limitations do apply to renewing services'"

$lang['AdminCompanyBilling.editcoupon.heading_discount'] = "Rabatt Optionen"; //en: "'Discount Options'"

$lang['AdminCompanyBilling.editcoupon.categorylink_addcurrency'] = "Weitere Währung hinzufügen"; //en: "'Add Additional Currency'"

$lang['AdminCompanyBilling.editcoupon.text_currency'] = "Währung"; //en: "'Currency'"
$lang['AdminCompanyBilling.editcoupon.text_type'] = "Typ"; //en: "'Type'"
$lang['AdminCompanyBilling.editcoupon.text_value'] = "Wert"; //en: "'Value'"

$lang['AdminCompanyBilling.editcoupon.heading_terms'] = "Begriffe"; //en: "'Terms'"
$lang['AdminCompanyBilling.editcoupon.description_terms'] = "Dieser Gutschein kann nur für Dienstleistungen verwendet werden, die für einen der ausgewählten Bedingungen / Zeiträume bestellt wurden. Wenn keine aktiviert sind, wird der Begriff für den Dienst bei der Bewertung der Gutscheineinschränkungen ignoriert."; //en: "'This coupon can only be applied to services that are ordered for one of the selected terms/periods. If none are enabled, then the term for the service will be ignored when evaluating coupon limitations.'"

$lang['AdminCompanyBilling.editcoupon.text_enabled'] = "aktiviert"; //en: "'Enabled'"
$lang['AdminCompanyBilling.editcoupon.text_period'] = "Zeitraum"; //en: "'Period'"
$lang['AdminCompanyBilling.editcoupon.text_terms'] = "Begriffe"; //en: "'Terms'"
$lang['AdminCompanyBilling.editcoupon.not_applicable'] = "N/A"; //en: "'N/A'"

$lang['AdminCompanyBilling.editcoupon.option_remove'] = "Entfernen"; //en: "'Remove'"

$lang['AdminCompanyBilling.editcoupon.heading_packages'] = "Pakete"; //en: "'Packages'"

$lang['AdminCompanyBilling.editcoupon.field_package_group_id'] = "Paketgruppenfilter"; //en: "'Package Group Filter'"
$lang['AdminCompanyBilling.editcoupon.field_couponsubmit'] = "Gutschein bearbeiten"; //en: "'Edit Coupon'"

$lang['AdminCompanyBilling.editcoupon.text_all'] = "Alle"; //en: "'All'"
$lang['AdminCompanyBilling.editcoupon.text_assigned_packages'] = "Zugeordnete Pakete"; //en: "'Assigned Packages'"
$lang['AdminCompanyBilling.editcoupon.text_available_packages'] = "Verfügbare Pakete"; //en: "'Available Packages'"
$lang['AdminCompanyBilling.editcoupon.text_used_qty'] = "(%1\$s benutzt)"; // %1$s is the number of used coupons"; //en: "'(used %1$s)'; // %1$s is the number of used coupons"


// Invoice Customization
$lang['AdminCompanyBilling.customization.page_title'] = "Einstellungen > Firma > Rechnungen/Zahlungen > Rechnungsanpassung"; //en: "'Settings > Company > Billing/Payment > Invoice Customization'"
$lang['AdminCompanyBilling.customization.boxtitle_customization'] = "Rechnungsanpassung"; //en: "'Invoice Customization'"
$lang['AdminCompanyBilling.customization.heading_general'] = "Grundlegende Optionen"; //en: "'Basic Options'"
$lang['AdminCompanyBilling.customization.heading_quotations'] = 'Quotation Options';
$lang['AdminCompanyBilling.customization.heading_cache'] = "Zwischenspeicher"; //en: "'Cache'"
$lang['AdminCompanyBilling.customization.heading_lookandfeel'] = "Look & Feel"; //en: "'Look and Feel'"

$lang['AdminCompanyBilling.customization.field.inv_format'] = "Rechnungsformat"; //en: "'Invoice Format'"
$lang['AdminCompanyBilling.customization.field.inv_draft_format'] = "Format für Rechnungs-Entwürfe"; //en: "'Invoice Draft Format'"
$lang['AdminCompanyBilling.customization.field.inv_proforma_format'] = "Proforma-Rechnungsformat"; //en: "'Pro Forma Invoice Format'"
$lang['AdminCompanyBilling.customization.field.inv_start'] = "Rechnung Anfangswert"; //en: "'Invoice Start Value'"
$lang['AdminCompanyBilling.customization.field.inv_proforma_start'] = "Proforma-Rechnung Anfangswert"; //en: "'Pro Forma Invoice Start Value'"
$lang['AdminCompanyBilling.customization.field.inv_increment'] = "Inkrementwert der Rechnung"; //en: "'Invoice Increment Value'"
$lang['AdminCompanyBilling.customization.field.inv_pad_size'] = "Größe der Rechnungsauffüllung"; //en: "'Invoice Padding Size'"
$lang['AdminCompanyBilling.customization.field.inv_pad_str'] = "Auffüllzeichen für Rechnungen"; //en: "'Invoice Padding Character'"
$lang['AdminCompanyBilling.customization.field.inv_type'] = "Rechnungsart"; //en: "'Invoice Type'"

$lang['AdminCompanyBilling.customization.field.quotation_format'] = 'Quotation Format';
$lang['AdminCompanyBilling.customization.field.quotation_start'] = 'Quotation Start Value';
$lang['AdminCompanyBilling.customization.field.quotation_increment'] = 'Quotation Increment Value';

$lang['AdminCompanyBilling.customization.field.inv_cache'] = "Cache-Methode für Rechnungen"; //en: "'Invoice Cache Method'"
$lang['AdminCompanyBilling.customization.field.inv_cache_compress'] = "PDF-Rechnungen komprimieren"; //en: "'Compress PDF Invoices'"

$lang['AdminCompanyBilling.customization.field.inv_logo'] = "Logo"; //en: "'Logo'"
$lang['AdminCompanyBilling.customization.field.inv_background'] = "Hintergrund"; //en: "'Background'"
$lang['AdminCompanyBilling.customization.field.inv_terms'] = "Bedingungen"; //en: "'Terms'"
$lang['AdminCompanyBilling.customization.field.inv_paper_size'] = "Papier Größe"; //en: "'Paper Size'"
$lang['AdminCompanyBilling.customization.field.inv_template'] = "Rechnungsvorlage"; //en: "'Invoice Template'"
$lang['AdminCompanyBilling.customization.field.inv_display'] = "Anzeige in der Rechnung"; //en: "'Display on Invoice'"
$lang['AdminCompanyBilling.customization.field.inv_display_logo'] = "Logo"; //en: "'Logo'"
$lang['AdminCompanyBilling.customization.field.inv_display_company'] = "Firmenname/-adresse"; //en: "'Company Name/Address'"
$lang['AdminCompanyBilling.customization.field.inv_display_paid_watermark'] = "BEZAHLT-Wasserzeichen"; //en: "'PAID Watermark'"
$lang['AdminCompanyBilling.customization.field.inv_display_payments'] = "Zahlungen/Gutschriften"; //en: "'Payments/Credits'"
$lang['AdminCompanyBilling.customization.field.inv_display_due_date_draft'] = "Fälligkeitsdatum - Entwürfe"; //en: "'Date Due - Drafts'"
$lang['AdminCompanyBilling.customization.field.inv_display_due_date_proforma'] = "Fälligkeitsdatum - Proforma"; //en: "'Date Due - Pro Forma'"
$lang['AdminCompanyBilling.customization.field.inv_display_due_date_inv'] = "Fälligkeitsdatum - Standard"; //en: "'Date Due - Standard'"
$lang['AdminCompanyBilling.customization.field.inv_mimetype'] = "Rechnung Dateityp"; //en: "'Invoice File Type'"
$lang['AdminCompanyBilling.customization.field.inv_font'] = "Schriftart-Familie"; //en: "'Font Family'"
$lang['AdminCompanyBilling.customization.remove'] = "Entfernen"; //en: "'Remove'"

$lang['AdminCompanyBilling.customization.field.customizationsubmit'] = "Einstellungen aktualisieren"; //en: "'Update Settings'"


// Accepted Payment Types
$lang['AdminCompanyBilling.acceptedtypes.page_title'] = "Einstellungen > Unternehmen > Abrechnung/Zahlung > Akzeptierte Zahlungsarten"; //en: "'Settings > Company > Billing/Payment > Accepted Payment Types'"
$lang['AdminCompanyBilling.acceptedtypes.boxtitle_types'] = "Akzeptierte Zahlungsarten"; //en: "'Accepted Payment Types'"

$lang['AdminCompanyBilling.acceptedtypes.text_description'] = "Nur die ausgewählten Zahlungstypen sind für die Verarbeitung durch Gateways verfügbar oder können als Zahlungskonten hinzugefügt werden, auch wenn ein aktiver Gateway den Typ unterstützt."; //en: "'Only the payment types selected are available for processing through gateways, or may be added as payment accounts, even if an active gateway supports the type. Unchecking a type that is already accepted will cause payments of that type to not be processed.'"
$lang['AdminCompanyBilling.acceptedtypes.field_cc'] = "Kreditkarte"; //en: "'Credit Card'"
$lang['AdminCompanyBilling.acceptedtypes.field_ach'] = "Lastschrift"; //en: "'Automated Clearing House'"
$lang['AdminCompanyBilling.acceptedtypes.client_settings'] = "Entfernen der Client-Überschreibungen"; //en: "'Remove Client Overrides'"
$lang['AdminCompanyBilling.acceptedtypes.field_update_clients'] = "Bereitstellung unter Verwendung des Moduls %1\$s bei Aktivierung"; //en: "'Remove accepted payment types currently set on clients'"
$lang['AdminCompanyBilling.acceptedtypes.field_typessubmit'] = "Einstellungen speichern"; //en: "'Update Settings'"
$lang['AdminCompanyBilling.acceptedtypes.tooltip_update_clients'] = "Entfernen Sie akzeptierte Zahlungsarten, die derzeit auf Kunden eingestellt sind."; //en: "'Checking this box will remove any accepted payment type overrides set on the client if they are disabled on the company'"


// Invoice Delivery Methods
$lang['AdminCompanyBilling.deliverymethods.page_title'] = "Einstellungen > Firma > Zahlung > Rechnungsversand"; //en: "'Settings > Company > Billing/Payment > Invoice Delivery'"
$lang['AdminCompanyBilling.deliverymethods.boxtitle_deliverymethods'] = "Rechnungszustellung"; //en: "'Invoice Delivery'"
$lang['AdminCompanyBilling.deliverymethods.heading_basic'] = "Grundeinstellungen"; //en: "'Basic Options'"
$lang['AdminCompanyBilling.deliverymethods.heading_interfax'] = "InterFax"; //en: "'InterFax'"
$lang['AdminCompanyBilling.deliverymethods.interfax_desc'] = "InterFax ermöglicht es Ihnen, Rechnungen über das Internet zu faxen. <a href=\"http://www.interfax.net/\" target=\"_blank\">Anmelden</a> für ein InterFax Konto und heute starten Rechnungen zu faxen."; //en: "'InterFax allows you to fax invoices over the internet. <a href="http://www.interfax.net/" target="_blank">Sign up</a> for an InterFax account and start faxing invoices today.'"
$lang['AdminCompanyBilling.deliverymethods.heading_postalmethods'] = "Postwege"; //en: "'PostalMethods'"
$lang['AdminCompanyBilling.deliverymethods.postalmethods_desc'] = "PostalMethods druckt, stopft und versendet Rechnungen an Ihre Kunden für Sie. <a href=\"https://cp.postalmethods.com/public/agentredirect.aspx?agentid=5bcfe2fb-b897-4a26-8c91-4089e92e2a7d\" target=\"_blank\"> Melden Sie sich </a> für einen PostalMethods-Account an Beginnen Sie heute mit dem Versand von Rechnungen."; //en: "'PostalMethods prints, stuffs, and mails invoices to your customers for you. <a href="https://cp.postalmethods.com/public/agentredirect.aspx?agentid=5bcfe2fb-b897-4a26-8c91-4089e92e2a7d" target="_blank">Sign up</a> for a PostalMethods account and start mailing invoices today.'"
$lang['AdminCompanyBilling.deliverymethods.field_delivery_methods'] = "Methoden der Rechnungszustellung"; //en: "'Invoice Delivery Methods'"
$lang['AdminCompanyBilling.deliverymethods.field_interfax_username'] = "Benutzername"; //en: "'Username'"
$lang['AdminCompanyBilling.deliverymethods.field_interfax_password'] = "Passwort"; //en: "'Password'"
$lang['AdminCompanyBilling.deliverymethods.field_postalmethods_apikey'] = "Geheimer API-Schlüssel"; //en: "'API Secret Key'"
$lang['AdminCompanyBilling.deliverymethods.field_postalmethods_doublesided'] = "Beidseitiger Druck"; //en: "'Double-sided Printing'"
$lang['AdminCompanyBilling.deliverymethods.field_postalmethods_colored'] = "Farbdruck"; //en: "'Color Printing'"
$lang['AdminCompanyBilling.deliverymethods.field_submit'] = "Einstellungen aktualisieren"; //en: "'Update Settings'"

$lang['AdminCompanyBilling.deliverymethods.note_replyenvelope'] = "Postal Methods sendet mit jeder Sendung einen Antwortumschlag."; //en: "'Postal Methods will send a reply envelope with each mailing.'"
$lang['AdminCompanyBilling.deliverymethods.note_apikey'] = "Verwenden Sie beim Testen unbedingt den von PostalMethods bereitgestellten geheimen Schlüssel für die Testumgebung."; //en: "'Be sure to use Test Environment secret key provided by PostalMethods when testing.'"
$lang['AdminCompanyBilling.deliverymethods.note_doublesided'] = "Wenn diese Option aktiviert ist, werden die an PostalMethods gesendeten Rechnungen auf der Vorder- und Rückseite bedruckt."; //en: "'If this option is checked, invoices sent to PostalMethods will be use printing on the front and back of the page.'"
$lang['AdminCompanyBilling.deliverymethods.note_colored'] = "Wenn diese Option aktiviert ist, werden alle Rechnungen, die an PostalMethods gesendet werden, in Farbe statt in Schwarz-Weiß dargestellt."; //en: "'Note that if this option is checked, all invoices sent to PostalMethods will be in color instead of black-and-white.'"

// Late Fees
$lang['AdminCompanyBilling.latefees.boxtitle_latefees'] = 'Late Fees';
$lang['AdminCompanyBilling.latefees.heading_basic'] = 'Basic Options';
$lang['AdminCompanyBilling.latefees.text_enabled'] = 'Enabled';
$lang['AdminCompanyBilling.latefees.text_currency'] = "Währung"; //en: "'Currency'"
$lang['AdminCompanyBilling.latefees.text_fee_type'] = "Gebührenart"; //en: "'Fee Type'"
$lang['AdminCompanyBilling.latefees.text_amount'] = 'Amount';
$lang['AdminCompanyBilling.latefees.text_minimum'] = 'Minimum';
$lang['AdminCompanyBilling.latefees.field.late_fee_total_amount'] = "Auf Gesamtrechnungsbetrag anwenden"; //en: "'Apply to total invoice amount'"
$lang['AdminCompanyBilling.latefees.field.percent'] = 'Percent';
$lang['AdminCompanyBilling.latefees.field.fixed'] = "Festgelegt"; //en: "'Fixed'"
$lang['AdminCompanyBilling.latefees.field_submit'] = "Einstellungen aktualisieren"; //en: "'Update Settings'"
