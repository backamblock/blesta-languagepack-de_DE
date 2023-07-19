<?php
$lang['AdminMain.index.health_excellent'] = "Das System befindet sich in gutem Zustand und funktioniert normal."; //en: "'The system is in good health and appears to be operating normally.'"
$lang['AdminMain.index.health_good'] = "Insgesamt ist das System in gutem Zustand, es gibt jedoch einige Punkte, die Ihre Aufmerksamkeit erfordern."; //en: "'Overall the system is in good health, but there are some items that may require your attention.'"
$lang['AdminMain.index.health_fair'] = "Es gibt einige Probleme, die die Funktionsfähigkeit des Systems beeinträchtigen."; //en: "'There are some issues that affect the system\'s ability to operate normally.'"
$lang['AdminMain.index.health_poor'] = "Es gibt derzeit ernstzunehmende Probleme, die dazu führen können, dass das System nicht korrekt arbeitet. Beheben Sie diese schnellstmöglich!"; //en: "'There are serious issues that affect the system\'s ability to operate normally. These should be resolved as soon as possible.'"

$lang['AdminMain.index.boxtitle_feed'] = "Systemstatus"; //en: "'System Status'"

$lang['AdminMain.index.cron_serious'] = "Cronjob wurde noch nie ausgeführt. "; //en: "'Cron has never run.'"
$lang['AdminMain.index.cron_minor'] = "Der Cron wurde innerhalb der letzten 24 Stunden nicht ausgeführt."; //en: "'Cron has not run in the past 24 hours.'"
$lang['AdminMain.index.cron_configure'] = "Konfigurieren?"; //en: "'Configure?'"

$lang['AdminMain.index.cron_task_stalled_minor'] = "Es gibt eine oder mehrere Cron-Jobs, die seit mehr als %1\$s Minuten auf die Ausführung warten."; // %1$s is the number of minutes"; //en: "'There are one or more cron tasks that have been executing for more than %1$s minutes.'; // %1$s is the number of minutes"
$lang['AdminMain.index.cron_task_stalled_automation'] = "Automatische-Aufgaben ansehen"; //en: "'View Automated Tasks'"

$lang['AdminMain.index.trial_minor'] = "Ihre Testlizenz läuft am %1\$s ab."; // %1$s is the date the trial license expires"; //en: "'Your trial license expires on %1$s.'; // %1$s is the date the trial license expires"
$lang['AdminMain.index.trial_buy'] = "Kaufe jetzt?"; //en: "'Buy now?'"

$lang['AdminMain.index.invoices_minor'] = "Rechnungen wurden in den letzten 24 Stunden nicht automatisch über cron erstellt."; //en: "'Invoices have not been automatically created via cron in the past 24 hours.'"
$lang['AdminMain.index.invoices_configure'] = "Konfigurieren?"; //en: "'Configure?'"

$lang['AdminMain.index.backup_minor'] = "In den letzten 7 Tagen wurde kein Backup ausgeführt."; //en: "'No backups have been run in the past 7 days.'"

$lang['AdminMain.index.docroot_minor'] = "Der ermittelte Root des Dokuments stimmt nicht mit der Einstellung für das Root-Webverzeichnis überein."; //en: "'The document root path detected does not match the Root Web Directory setting.'"
$lang['AdminMain.index.docroot_setting'] = 'Update?';

$lang['AdminMain.index.system_dir_writable_minor'] = 'A system directory is not writable.';
$lang['AdminMain.index.system_dir_writable_setting'] = "Updaten?"; //en: "'Update?'"

$lang['AdminMain.index.log_files_owner_minor'] = 'There are some log files not owned by the same user as the web server.  This is usually caused by the cron running as a different user than the web server.';

$lang['AdminMain.index.error_reporting'] = 'errorReporting or System.debug are enabled in /config/blesta.php. Unless you are actively troubleshooting an issue, these should be disabled. errorReporting should be 0, System.debug should be false.';

$lang['AdminMain.index.updates_forever'] = "Ihre Unterstützung und Updates sind für immer gut."; //en: "'Your support and updates are good forever.'"
$lang['AdminMain.index.updates_minor'] = "Ihre Unterstützung und Updates sind bis %1\$s gut."; // %1$s is the date support expires"; //en: "'Your support and updates are good through %1$s.'; // %1$s is the date support expires"
$lang['AdminMain.index.updates_serious'] = "Ihr Support und Ihre Updates sind am %1\$s abgelaufen."; // %1$s is the date support expired"; //en: "'Your support and updates expired on %1$s.'; // %1$s is the date support expired"
$lang['AdminMain.index.updates_buy'] = "Support und Updates hinzufügen?"; //en: "'Add support and updates?'"

$lang['AdminMain.index.db_version_serious'] = 'The database version does not match with the system version.';
$lang['AdminMain.index.db_version_upgrade'] = "Aktualisieren?"; //en: "'Upgrade?'"

$lang['AdminMain.index.php_version_serious'] = 'The PHP version does not meet the minimum system requirements.';
$lang['AdminMain.index.php_version_requirements'] = 'See minimum requirements';

$lang['AdminMain.index.sql_mysql_version_serious'] = 'The MySQL version does not meet the minimum system requirements.';
$lang['AdminMain.index.sql_mysql_version_requirements'] = 'See minimum requirements';

$lang['AdminMain.index.sql_mariadb_version_serious'] = 'The MariaDB version does not meet the minimum system requirements.';
$lang['AdminMain.index.sql_mariadb_version_requirements'] = 'See minimum requirements';
