<?php
// Plugin name
$lang['SoftaculousPlugin.name'] = "Soft Auto Installer";
$lang['SoftaculousPlugin.library_error'] = 'Unable to load library.';
$lang['SoftaculousPlugin.remote_error'] = "Verbindung zum remote server fehlgeschlagen."; //en: "'Could not login to the remote server.'"
$lang['SoftaculousPlugin.remote_error_message'] = 'Could not login to the remote server. Error: %1$s'; // %1$s is the error
$lang['SoftaculousPlugin.remote_curl_error'] = 'Could not login to the remote server. cURL Error: %1$s'; // %1$s is the curl error
$lang['SoftaculousPlugin.remote_firewall_error'] = "Der Standort von Softaculous auf dem Remote-Server konnte nicht ermittelt werden. Möglicherweise verhindert eine Firewall den Zugriff."; //en: "'Could not determine the location of the Softaculous on the remote server. There could be a firewall preventing access.'"
$lang['SoftaculousPlugin.script_selected_error'] = 'Could not determine the script to be installed. Please make sure the script name is correct. Script Name: %1$s'; // %1$s is the script
$lang['SoftaculousPlugin.script_installed'] = 'Script successfully installed';
$lang['SoftaculousPlugin.script_no_installed'] = 'Could not install script: %1$s'; // %1$s is the script
$lang['SoftaculousPlugin.admin_fname'] = "System"; //en: "'System'"
$lang['SoftaculousPlugin.admin_lname'] = "Administrator"; //en: "'Administrator'"
$lang['SoftaculousPlugin.installation_success'] = "Skript für den Dienst mit der ID %1\$s erfolgreich installiert"; // %1$s is the script"; //en: "'Script installed successfully for service with ID %1$s'; // %1$s is the script"


// Cron
$lang['SoftaculousPlugin.cron.script_installation_name'] = 'Provision Service Scripts';
$lang['SoftaculousPlugin.cron.script_installation_desc'] = 'Installs pending scripts for services.';
