<?php
$lang['Whmcs5_2.!error.host.invalid'] = "Database Host ist erforderlich."; //en: "Database Host is required."
$lang['Whmcs5_2.!error.database.invalid'] = "Datenbankname ist erforderlich."; //en: "Database Name is required."
$lang['Whmcs5_2.!error.user.invalid'] = "Datenbankbenutzer ist erforderlich."; //en: "Database User is required."
$lang['Whmcs5_2.!error.pass.invalid'] = "Datenbankpasswort ist erforderlich."; //en: "Database Password is required."
$lang['Whmcs5_2.!error.key.invalid'] = "Ein gültiger AESKEY ist erforderlich."; //en: "A valid AESKEY is required."
$lang['Whmcs5_2.!error.import'] = "Der Import wurde abgeschlossen, aber die folgenden Fehler traten auf:"; //en: "The import completed but the following errors ocurred:"

$lang['Whmcs5_2.!notice.gmp'] = "Die Erweiterung 'gmp' wurde nicht gefunden. Diese Erweiterung wird empfohlen, um die Leistung zu verbessern und den Importprozess zu verbessern. Sie können ohne diese Erweiterung fortfahren, aber der Importprozess ist möglicherweise wesentlich langsamer."; //en: "The 'gmp' extension was not found. This extension is recommended to improve performance and will improve the import process. You may continue without this extension but the import process may be much slower."

$lang['Whmcs5_2.settings.host'] = "Datenbankhost"; //en: "Database Host"
$lang['Whmcs5_2.settings.database'] = "Datenbankname"; //en: "Database Name"
$lang['Whmcs5_2.settings.user'] = "Datenbankbenutzer"; //en: "Database User"
$lang['Whmcs5_2.settings.pass'] = "Datenbank-Passwort"; //en: "Database Password"
$lang['Whmcs5_2.settings.key'] = "CC-Verschlüsselungshash"; //en: "CC Encryption Hash"
$lang['Whmcs5_2.settings.key.info'] = "Dies ist der Verschlüsselungsschlüssel, mit dem WHMCS verschiedene Datenbits verschlüsselt. Sie finden es in Ihrer WHMCS-Datei configuration.php."; //en: "This is the encryption key used by WHMCS to encrypt various bits of data. It can be found in your WHMCS configuration.php file."
$lang['Whmcs5_2.settings.balance_credit'] = "Automatische Kontostandtransaktionen, um Kundenguthaben in WHMCS zu vergleichen"; //en: "Auto balance transactions to match client credits in WHMCS"
$lang['Whmcs5_2.settings.balance_credit.info'] = "Wenn diese Option aktiviert ist, wird eine Transaktion oder eine Rechnung generiert, um sicherzustellen, dass die Gutschrift des Kunden in Blesta mit der für den Kunden in WHMCS festgelegten Menge übereinstimmt. Dies ist erforderlich, da WHMCS Kundenguthaben nicht ordnungsgemäß berücksichtigt."; //en: "If checked, will generate a transaction or an invoice to ensure that the client credit in Blesta matches that set for the client in WHMCS. This is necessary because WHMCS does not properly account for client credits."
$lang['Whmcs5_2.settings.enable_debug'] = "Debugging aktivieren"; //en: "Enable Debugging"

$lang['Whmcs5_2.configuration.create_packages_true'] = "Erstellen Sie beim Import automatisch alle erforderlichen Pakete"; //en: "Automatically create any necessary packages during import"
$lang['Whmcs5_2.configuration.create_packages_false'] = "Pakete manuell zuordnen"; //en: "Manually map packages"
$lang['Whmcs5_2.configuration.local_package'] = "Lokales Paket"; //en: "Local Package"
$lang['Whmcs5_2.configuration.remote_package'] = "Remote-Paket"; //en: "Remote Package"
$lang['Whmcs5_2.configuration.no_local_packages'] = "Sie müssen Pakete erstellen, bevor Sie sie zuordnen können."; //en: "You must create packages before you can map them."

?>