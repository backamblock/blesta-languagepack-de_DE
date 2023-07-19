<?php
/**
 * de_de language for the universal module
 */

// Tooltips
$lang['UniversalModule.!tooltip.option_heading_field_label'] = "Dies ist der Text, der direkt über dem Formularfeld angezeigt wird."; //en: "'This is the text that appears directly above the form field.'"
$lang['UniversalModule.!tooltip.option_heading_field_name'] = "Dies ist der Name des ausgeblendeten Formularfelds. Verwenden Sie Menge, um ein Mengenfeld zu erstellen."; //en: "'This is the hidden form field name. Use qty to create a quantity field.'"
$lang['UniversalModule.!tooltip.option_heading_field_type'] = 'This is the type of form field that will be displayed. See Values tooltip for how to define values for checkbox, radio, and select fields.';
$lang['UniversalModule.!tooltip.option_heading_field_required'] = "Wählen Sie Ja, um dieses Feld anzufordern. Beachten Sie, dass für dieses Feld unter Eingaberegeln spezielle Validierungsregeln verwendet werden können."; //en: "'Select yes to require this field. Note that special validation rules can be used for this field under Input Rules.'"
$lang['UniversalModule.!tooltip.option_heading_field_encrypt'] = "Wenn Sie Ja wählen, werden die Felddaten verschlüsselt gespeichert. Die Daten werden bei Bedarf automatisch entschlüsselt und angezeigt."; //en: "'Selecting yes will cause the field data to be stored encrypted. The data will be unencrypted automatically for display when necessary.'"
$lang['UniversalModule.!tooltip.option_heading_field_values'] = 'For checkbox, radio, and select fields enter values in the following format: field1:Field Name 1|field2:Field Name 2|field3:Field Name 3';

$lang['UniversalModule.!tooltip.option_heading_notice_notice'] = "Geben Sie die URL ein, an die die Nachricht gesendet werden soll, oder die E-Mail-Adresse, die für diese Aktion per E-Mail gesendet werden soll."; //en: "'Enter the URL to post to, or the email address to email for this action.'"
$lang['UniversalModule.!tooltip.option_heading_notice_code'] = "Wenn Sie eine URL veröffentlichen, können Sie einen HTTP-Code eingeben, der eine erfolgreiche Antwort angibt."; //en: "'If posting to a URL, you may enter an HTTP Code that designates a successful response.'"
$lang['UniversalModule.!tooltip.option_heading_notice_response'] = "Wenn Sie eine URL veröffentlichen, können Sie ein Wort oder einen Ausdruck eingeben, die in der Antwort enthalten sind, die auf einen Erfolg hinweist."; //en: "'If posting to a URL, you may enter a word or phrase contained in the response that indicates a success.'"


// Basics
$lang['UniversalModule.name'] = "Universalmodul"; //en: "'Universal Module'"
$lang['UniversalModule.description'] = 'A dynamic module meant to adapt to most users\' custom needs.';
$lang['UniversalModule.module_row'] = "Produkt"; //en: "'Product'"
$lang['UniversalModule.module_row_plural'] = "Produkte"; //en: "'Products'"

// Module management
$lang['UniversalModule.add_module_row'] = "Produkt hinzufügen"; //en: "'Add Product'"
$lang['UniversalModule.manage.module_rows_title'] = "Produkte"; //en: "'Products'"
$lang['UniversalModule.manage.module_rows_heading.name'] = "Produktbezeichnung"; //en: "'Product Label'"
$lang['UniversalModule.manage.module_rows_heading.options'] = "Optionen"; //en: "'Options'"
$lang['UniversalModule.manage.module_rows.edit'] = "Bearbeiten"; //en: "'Edit'"
$lang['UniversalModule.manage.module_rows.delete'] = "Löschen"; //en: "'Delete'"
$lang['UniversalModule.manage.module_rows.confirm_delete'] = "Sind Sie sicher, dass Sie dieses Produkt löschen wollen?"; //en: "'Are you sure you want to delete this product?'"
$lang['UniversalModule.manage.module_rows_no_results'] = "Es gibt keine Produkte."; //en: "'There are no products.'"

// Add module row
$lang['UniversalModule.add_row.box_title'] = "Produkt hinzufügen"; //en: "'Add Product'"
$lang['UniversalModule.add_row.module_title'] = "Modul Optionen"; //en: "'Module Options'"
$lang['UniversalModule.add_row.name'] = "Name"; //en: "'Name'"
$lang['UniversalModule.add_row.notice_name'] = "Hinweis"; //en: "'Notice'"
$lang['UniversalModule.add_row.notice_notice'] = "URL / E-Mail posten"; //en: "'Post URL/Email'"
$lang['UniversalModule.add_row.notice_code'] = "HTTP Code"; //en: "'HTTP Code'"
$lang['UniversalModule.add_row.notice_response'] = "Antwort enthält"; //en: "'Response Contains'"
$lang['UniversalModule.add_row.email_notification'] = "Email Benachrichtigung"; //en: "'Email Notification'"

$lang['UniversalModule.add_row.package_title'] = "Paketoptionen"; //en: "'Package Options'"
$lang['UniversalModule.add_row.package_field_btn'] = "Paketoption hinzufügen"; //en: "'Add Package Option'"
$lang['UniversalModule.add_row.package_field_label'] = "Bezeichnung"; //en: "'Label'"
$lang['UniversalModule.add_row.package_field_name'] = "Name"; //en: "'Name'"
$lang['UniversalModule.add_row.package_field_type'] = "Typ"; //en: "'Type'"
$lang['UniversalModule.add_row.package_field_values'] = "Werte"; //en: "'Values'"
$lang['UniversalModule.add_row.package_field_required'] = "Erforderlich"; //en: "'Required'"
$lang['UniversalModule.add_row.package_field_encrypt'] = "Verschlüsseln"; //en: "'Encrypt'"
$lang['UniversalModule.add_row.remove_package_field'] = "Löschen"; //en: "'Remove'"
$lang['UniversalModule.add_row.package_rules'] = "Regeln Hinzufügen "; //en: "'Input Rules'"
$lang['UniversalModule.add_row.package_email_from'] = "Absender EMail"; //en: "'From Email'"
$lang['UniversalModule.add_row.package_email_subject'] = "Betreff"; //en: "'Subject'"
$lang['UniversalModule.add_row.package_email_html'] = "HTML"; //en: "'HTML'"
$lang['UniversalModule.add_row.package_email_text'] = "Text"; //en: "'Text'"

$lang['UniversalModule.add_row.service_title'] = "Server Optionen"; //en: "'Service Options'"
$lang['UniversalModule.add_row.service_field_btn'] = "Serviceoption hinzufügen"; //en: "'Add Service Option'"
$lang['UniversalModule.add_row.service_field_label'] = "Etikette"; //en: "'Label'"
$lang['UniversalModule.add_row.service_field_name'] = "Name"; //en: "'Name'"
$lang['UniversalModule.add_row.service_field_type'] = "Typ"; //en: "'Type'"
$lang['UniversalModule.add_row.service_field_values'] = "Werte"; //en: "'Values'"
$lang['UniversalModule.add_row.service_field_required'] = "Erforderlich"; //en: "'Required'"
$lang['UniversalModule.add_row.service_field_encrypt'] = "Verschlüsselung"; //en: "'Encrypt'"
$lang['UniversalModule.add_row.remove_service_field'] = "Löschen"; //en: "'Remove'"
$lang['UniversalModule.add_row.service_rules'] = "Eingabe Regeln"; //en: "'Input Rules'"
$lang['UniversalModule.add_row.service_email_from'] = "Aus der Email"; //en: "'From Email'"
$lang['UniversalModule.add_row.service_email_subject'] = "Betreff"; //en: "'Subject'"
$lang['UniversalModule.add_row.service_email_html'] = "HTML"; //en: "'HTML'"
$lang['UniversalModule.add_row.service_email_text'] = "Text"; //en: "'Text'"

$lang['UniversalModule.add_row.add_btn'] = "Produkt hinzufügen"; //en: "'Add Product'"

// Edit module row
$lang['UniversalModule.edit_row.box_title'] = "Produkt bearbeiten"; //en: "'Edit Product'"
$lang['UniversalModule.edit_row.module_title'] = "Modul Optionen"; //en: "'Module Options'"
$lang['UniversalModule.edit_row.name'] = "Name"; //en: "'Name'"
$lang['UniversalModule.edit_row.notice_name'] = "Hinweis"; //en: "'Notice'"
$lang['UniversalModule.edit_row.notice_notice'] = "Post URL/E-Mail"; //en: "'Post URL/Email'"
$lang['UniversalModule.edit_row.notice_code'] = "HTTP-Code"; //en: "'HTTP Code'"
$lang['UniversalModule.edit_row.notice_response'] = "Antwort enthält"; //en: "'Response Contains'"
$lang['UniversalModule.edit_row.email_notification'] = "Email Benachrichtigung"; //en: "'Email Notification'"

$lang['UniversalModule.edit_row.package_title'] = "Paketoptionen"; //en: "'Package Options'"
$lang['UniversalModule.edit_row.package_field_btn'] = "Paketoption hinzufügen"; //en: "'Add Package Option'"
$lang['UniversalModule.edit_row.package_field_label'] = "Label"; //en: "'Label'"
$lang['UniversalModule.edit_row.package_field_name'] = "Name"; //en: "'Name'"
$lang['UniversalModule.edit_row.package_field_type'] = "Typ"; //en: "'Type'"
$lang['UniversalModule.edit_row.package_field_values'] = "Werte"; //en: "'Values'"
$lang['UniversalModule.edit_row.package_field_required'] = "Erforderlich"; //en: "'Required'"
$lang['UniversalModule.edit_row.package_field_encrypt'] = "Verschlüsseln"; //en: "'Encrypt'"
$lang['UniversalModule.edit_row.remove_package_field'] = "Löschen"; //en: "'Remove'"
$lang['UniversalModule.edit_row.package_rules'] = "Eingaberegeln"; //en: "'Input Rules'"
$lang['UniversalModule.edit_row.package_email_from'] = "Aus der Email"; //en: "'From Email'"
$lang['UniversalModule.edit_row.package_email_subject'] = "Titel"; //en: "'Subject'"
$lang['UniversalModule.edit_row.package_email_html'] = "HTML"; //en: "'HTML'"
$lang['UniversalModule.edit_row.package_email_text'] = "Text"; //en: "'Text'"

$lang['UniversalModule.edit_row.service_title'] = "Serviceoptionen"; //en: "'Service Options'"
$lang['UniversalModule.edit_row.service_field_btn'] = "Serviceoption hinzufügen"; //en: "'Add Service Option'"
$lang['UniversalModule.edit_row.service_field_label'] = "Beschriftung"; //en: "'Label'"
$lang['UniversalModule.edit_row.service_field_name'] = "Name"; //en: "'Name'"
$lang['UniversalModule.edit_row.service_field_type'] = "Typ"; //en: "'Type'"
$lang['UniversalModule.edit_row.service_field_values'] = "Werte"; //en: "'Values'"
$lang['UniversalModule.edit_row.service_field_required'] = "Erforderlich"; //en: "'Required'"
$lang['UniversalModule.edit_row.service_field_encrypt'] = "Verschlüsseln"; //en: "'Encrypt'"
$lang['UniversalModule.edit_row.remove_service_field'] = "Entfernen"; //en: "'Remove'"
$lang['UniversalModule.edit_row.service_rules'] = "Eingabe Regeln"; //en: "'Input Rules'"
$lang['UniversalModule.edit_row.service_email_from'] = "Von Email"; //en: "'From Email'"
$lang['UniversalModule.edit_row.service_email_subject'] = "Betreff"; //en: "'Subject'"
$lang['UniversalModule.edit_row.service_email_html'] = "HTML"; //en: "'HTML'"
$lang['UniversalModule.edit_row.service_email_text'] = "Text"; //en: "'Text'"

$lang['UniversalModule.edit_row.add_btn'] = "Produkt bearbeiten"; //en: "'Edit Product'"

// Package notices
$lang['UniversalModule.getpackagenotices.add'] = "Hinzufügen"; //en: "'Add'"
$lang['UniversalModule.getpackagenotices.edit'] = "Bearbeiten"; //en: "'Edit'"

// Service notices
$lang['UniversalModule.getservicenotices.add'] = "Hinzufügen"; //en: "'Add'"
$lang['UniversalModule.getservicenotices.edit'] = "Bearbeiten"; //en: "'Edit'"
$lang['UniversalModule.getservicenotices.suspend'] = "Suspendieren"; //en: "'Suspend'"
$lang['UniversalModule.getservicenotices.unsuspend'] = "Entsperren"; //en: "'Unsuspend'"
$lang['UniversalModule.getservicenotices.cancel'] = "Stornieren"; //en: "'Cancel'"
$lang['UniversalModule.getservicenotices.renew'] = "Verlängern"; //en: "'Renew'"
$lang['UniversalModule.getservicenotices.package_change'] = "Paketänderung"; //en: "'Package Change'"

// Field types supported
$lang['UniversalModule.getfieldtypes.text'] = "Text"; //en: "'Text'"
$lang['UniversalModule.getfieldtypes.textarea'] = "Textbereich"; //en: "'Textarea'"
$lang['UniversalModule.getfieldtypes.password'] = "Passwort"; //en: "'Password'"
$lang['UniversalModule.getfieldtypes.select'] = "Wählen"; //en: "'Select'"
$lang['UniversalModule.getfieldtypes.radio'] = "Radio"; //en: "'Radio'"
$lang['UniversalModule.getfieldtypes.checkbox'] = "Kontrollkästchen"; //en: "'Checkbox'"
$lang['UniversalModule.getfieldtypes.hidden'] = "Versteckt"; //en: "'Hidden'"
$lang['UniversalModule.getfieldtypes.secret'] = "Geheimnis"; //en: "'Secret'"

// Misc
$lang['UniversalModule.true'] = "Ja"; //en: "'Yes'"
$lang['UniversalModule.false'] = "Nein"; //en: "'No'"
$lang['UniversalModule.getPackageFields.empty_module_row'] = "Es gibt keine Universalprodukte. <a href=\"%1\$s\"> Erstellen. </a>"; // %1$s is the URI to add a product for the universal module"; //en: "'No Universal products exist. <a href="%1$s">Create one.</a>'; // %1$s is the URI to add a product for the universal module"

// Errors
$lang['UniversalModule.!error.package_notice_add.failed'] = "Das Modul konnte beim Erstellen des Pakets nicht mit dem Remote-Server kommunizieren."; //en: "'The module failed communicating with the remote server when attempting to create the package.'"
$lang['UniversalModule.!error.package_notice_edit.failed'] = "Das Modul konnte nicht mit dem Remote-Server kommunizieren, wenn versucht wurde, das Paket zu aktualisieren."; //en: "'The module failed communicating with the remote server when attemptined to update the package.'"
$lang['UniversalModule.!error.service_notice_add.failed'] = "Das Modul konnte beim Bereitstellen des Dienstes nicht mit dem Remote-Server kommunizieren."; //en: "'The module failed communicating with the remote server when attempting to provision the service.'"
$lang['UniversalModule.!error.service_notice_edit.failed'] = "Das Modul isfdfdsdsffdsdsfds"; //en: "'The module failed communicating with the remote server when attempting to update the service.'"

$lang['UniversalModule.!error.service_notice_cancel.failed'] = "Das Modul konnte nicht mit dem Remote-Server kommunizieren, wenn versucht wurde, den Dienst abzubrechen."; //en: "'The module failed communicating with the remote server when attempting to cancel the service.'"
$lang['UniversalModule.!error.service_notice_suspend.failed'] = "Der Dienst konnte nicht gesperrt werden, da das Modul nicht mit dem Remote-Server kommunizieren konnte."; //en: "'The module failed communicating with the remote server when attempting to suspend the service.'"
$lang['UniversalModule.!error.service_notice_unsuspend.failed'] = "Das Modul konnte nicht mit dem Remote-Server kommunizieren, wenn versucht wurde, den Dienst zu entsperren."; //en: "'The module failed communicating with the remote server when attempting to unsuspend the service.'"
$lang['UniversalModule.!error.service_notice_renew.failed'] = "Das Modul konnte nicht mit dem Remote-Server kommunizieren, wenn versucht wurde, den Dienst zu erneuern."; //en: "'The module failed communicating with the remote server when attempting to renew the service.'"
$lang['UniversalModule.!error.service_notice_package_change.failed'] = "Das Modul konnte nicht mit dem Remote-Server kommunizieren, wenn das dem Service zugewiesene Paket / Term aktualisiert werden soll."; //en: "'The module failed communicating with the remote server when attempting to update the package/term assigned to the service.'"

$lang['UniversalModule.!error.package_field.required'] = "%1\$s ist erforderlich."; // %1$s is the label for the required package field"; //en: "'%1$s is required.'; // %1$s is the label for the required package field"
$lang['UniversalModule.!error.service_field.required'] = "%1\$s ist erforderlich."; // %1$s is the label for the required service field"; //en: "'%1$s is required.'; // %1$s is the label for the required service field"

$lang['UniversalModule.!error.name.empty'] = "Produktname ist erforderlich."; //en: "'Product name is required.'"
$lang['UniversalModule.!error.package_email_from.required'] = "Absenderadresse ist ein Pflichtfeld für E-Mail Benachrichtigungen."; //en: "'From address is required for package email notification.'"
$lang['UniversalModule.!error.service_email_from.required'] = "Von Adresse ist für Service-E-Mail-Benachrichtigung erforderlich."; //en: "'From address is required for service email notification.'"
$lang['UniversalModule.!error.module_row.invalid'] = "Sie müssen ein Universalmodulprodukt angeben."; //en: "'You must specify a universal module product.'"
