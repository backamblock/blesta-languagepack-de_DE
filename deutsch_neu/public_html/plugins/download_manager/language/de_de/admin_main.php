<?php
/**
 * Download Manager manage plugin language
 */

// Success messages
$lang['AdminMain.!success.category_added'] = "Die Kategorie wurde erfolgreich erstellt."; //en: "The category has been successfully created."
$lang['AdminMain.!success.category_updated'] = "Die Kategorie wurde erfolgreich aktualisiert."; //en: "The category has been successfully updated."
$lang['AdminMain.!success.category_deleted'] = "Die Kategorie wurde erfolgreich gelöscht."; //en: "The category has been successfully deleted."
$lang['AdminMain.!success.file_added'] = "Die Datei wurde erfolgreich hinzugefügt."; //en: "The file has been successfully added."
$lang['AdminMain.!success.file_updated'] = "Die Datei wurde erfolgreich aktualisiert."; //en: "The file has been successfully updated."
$lang['AdminMain.!success.file_deleted'] = "Die Datei wurde erfolgreich gelöscht."; //en: "The file has been successfully deleted."
$lang['AdminMain.!success.url_deleted'] = "The static URL has been successfully deleted.";
$lang['AdminMain.!success.url_added'] = 'The static URL has been successfully added.';
$lang['AdminMain.!success.url_updated'] = 'The static URL has been successfully updated.';


// Tooltips
$lang['AdminMain.!tooltip.path_to_file'] = "Bitte geben Sie den absoluten Pfad zu der Datei auf dem Dateisystem ein."; //en: "Enter the absolute path to the file on the file system."
$lang['AdminMain.!tooltip.category_type'] = "The URL will point to the last file uploaded to this category.";


// Text
$lang['AdminMain.!text.root_directory'] = "Heimverzeichnis"; //en: "Home Directory"
$lang['AdminMain.!text.open_parenthesis'] = "("; //en: "("
$lang['AdminMain.!text.forward_slash'] = "/"; //en: "/"
$lang['AdminMain.!text.closed_parenthesis'] = ")"; //en: ")"


// Modal
$lang['AdminMain.modal.delete_file'] = "Möchten Sie diese Datei wirklich löschen?"; //en: "Are you sure you want to delete this file?"
$lang['AdminMain.modal.delete_category'] = "Möchten Sie diese Kategorie wirklich löschen? Alle Unterkategorien und Dateien innerhalb dieser Kategorie werden in die übergeordnete Kategorie verschoben."; //en: "Are you sure you want to delete this category? All subcategories and files within this category will be moved to the parent category."
$lang['AdminMain.modal.delete_url'] = 'Are you sure you want to delete this static URL?';


// Files
$lang['AdminMain.files.page_title'] = "Download Manager > Manage";
$lang['AdminMain.files.boxtitle_downloadmanager'] = "Download Manager";

$lang['AdminMain.files.tab_files'] = 'Files';
$lang['AdminMain.files.tab_urls'] = 'Static URLs';

$lang['AdminMain.files.add_download'] = "Add Download Here";
$lang['AdminMain.files.add_category'] = "Add Category Here";

$lang['AdminMain.files.go_back'] = "Go up a level";

$lang['AdminMain.files.edit'] = "Edit";
$lang['AdminMain.files.delete'] = "Delete";

$lang['AdminMain.files.no_downloads'] = "There are no downloads in this section.";


// URLs
$lang['AdminMain.urls.page_title'] = "Download Manager > Manage";
$lang['AdminMain.urls.boxtitle_downloadmanager'] = "Download Manager";

$lang['AdminMain.urls.add_url'] = 'Add Static URL';

$lang['AdminMain.urls.tab_files'] = 'Files';
$lang['AdminMain.urls.tab_urls'] = 'Static URLs';

$lang['AdminMain.urls.heading_url'] = 'URL';
$lang['AdminMain.urls.heading_file'] = 'File';
$lang['AdminMain.urls.heading_link'] = 'Link';
$lang['AdminMain.urls.heading_options'] = 'Options';

$lang['AdminMain.urls.edit'] = 'Edit';
$lang['AdminMain.urls.delete'] = 'Delete';
$lang['AdminMain.urls.latest_file'] = 'Latest file from <strong>%1$s</strong>'; // %1$s is the name of the category
$lang['AdminMain.urls.no_urls'] = 'There are no Static URLs in this section.';

// Add download
$lang['AdminMain.add.page_title'] = "Download Manager > Download hinzufügen"; //en: "Download Manager > Add Download"

$lang['AdminMain.add.boxtitle_root'] = "Füge Download zum %1\$s hinzu"; // %1$s is the name of the root directory"; //en: "Add Download to the %1\$s"; // %1$s is the name of the root directory"
$lang['AdminMain.add.boxtitle_add'] = "Download zur Kategorie [%1\$s] hinzufügen"; // %1$s is the name of the category the download is to be uploaded to"; //en: "Add Download to Category [%1\$s]"; // %1$s is the name of the category the download is to be uploaded to"

$lang['AdminMain.add.field_public'] = "Öffentlich verfügbar"; //en: "Publicly Available"
$lang['AdminMain.add.field_logged_in'] = "Muss eingeloggt sein"; //en: "Must be logged in"
$lang['AdminMain.add.field_name'] = "Name"; //en: "Name"
$lang['AdminMain.add.field_available_to_client_groups'] = "Verfügbar für Kundengruppen"; //en: "Available to Client Groups"
$lang['AdminMain.add.field_available_to_packages'] = "Auf Lager In den Packages"; //en: "Available to Packages"
$lang['AdminMain.add.text_clientgroups'] = "Ausgewählte Kundengruppen"; //en: "Selected Client Groups"
$lang['AdminMain.add.text_packagegroups'] = "Ausgewählte Pakete"; //en: "Selected Packages"
$lang['AdminMain.add.text_availableclientgroups'] = "Verfügbare Client-Gruppen"; //en: "Available Client Groups"
$lang['AdminMain.add.text_availablepackages'] = "Verfügbare Pakete"; //en: "Available Packages"
$lang['AdminMain.add.field_upload'] = "Datei hochladen"; //en: "Upload File"
$lang['AdminMain.add.field_path'] = "Geben Sie Pfad zur Datei an"; //en: "Specify Path to File"
$lang['AdminMain.add.field_file'] = "Datei"; //en: "File"
$lang['AdminMain.add.field_file_name'] = "Pfad zur Datei"; //en: "Path to File"

$lang['AdminMain.add.submit_add'] = "Download hinzufügen"; //en: "Add Download"
$lang['AdminMain.add.submit_cancel'] = "Abbrechen"; //en: "Cancel"


// Add URL
$lang['AdminMain.addurl.page_title'] = "Download Manager > Add Static URL";

$lang['AdminMain.addurl.boxtitle_add'] = 'Add Static URL';
$lang['AdminMain.addurl.field_url'] = 'URL Name';
$lang['AdminMain.addurl.field_file'] = 'File';
$lang['AdminMain.addurl.field_category'] = 'Category';
$lang['AdminMain.addurl.submit_add'] = 'Add URL';
$lang['AdminMain.addurl.submit_cancel'] = 'Cancel';


// Edit download
$lang['AdminMain.edit.page_title'] = "Download Manager > Download hinzufügen "; //en: "Download Manager > Add Download"

$lang['AdminMain.edit.boxtitle_edit'] = "Herunterladen"; //en: "Update Download"

$lang['AdminMain.edit.field_public'] = "Öffentlich verfügbar"; //en: "Publicly Available"
$lang['AdminMain.edit.field_logged_in'] = "Muss angemeldet sein"; //en: "Must be logged in"
$lang['AdminMain.edit.field_name'] = "Name"; //en: "Name"
$lang['AdminMain.edit.field_available_to_client_groups'] = "Verfügbar für Client-Gruppen"; //en: "Available to Client Groups"
$lang['AdminMain.edit.field_available_to_packages'] = "Verfügbar für Pakete"; //en: "Available to Packages"
$lang['AdminMain.edit.text_clientgroups'] = "Ausgewählte Client-Gruppen"; //en: "Selected Client Groups"
$lang['AdminMain.edit.text_packagegroups'] = "Ausgewählte Pakete"; //en: "Selected Packages"
$lang['AdminMain.edit.text_availableclientgroups'] = "Verfügbare Client-Gruppen"; //en: "Available Client Groups"
$lang['AdminMain.edit.text_availablepackages'] = "Verfügbare Pakete"; //en: "Available Packages"
$lang['AdminMain.edit.field_upload'] = "Datei hochladen"; //en: "Upload File"
$lang['AdminMain.edit.field_path'] = "Pfad zur Datei"; //en: "Specify Path to File"
$lang['AdminMain.edit.field_file'] = "Datei"; //en: "File"
$lang['AdminMain.edit.field_file_name'] = "Dateipfad"; //en: "Path to File"

$lang['AdminMain.edit.submit_edit'] = "Download bearbeiten"; //en: "Update Download"
$lang['AdminMain.edit.submit_cancel'] = "Stornieren"; //en: "Cancel"


// Edit URL
$lang['AdminMain.editurl.page_title'] = "Download Manager > Edit Static URL";

$lang['AdminMain.editurl.boxtitle_add'] = 'Edit Static URL';
$lang['AdminMain.editurl.field_url'] = 'URL Name';
$lang['AdminMain.editurl.field_file'] = 'File';
$lang['AdminMain.editurl.field_category'] = 'Category';
$lang['AdminMain.editurl.submit_add'] = 'Edit URL';
$lang['AdminMain.editurl.submit_cancel'] = 'Cancel';


// Add category
$lang['AdminMain.addcategory.page_title'] = "Download Manager -> Kategorie hinzufügen"; //en: "Download Manager > Add Category"

$lang['AdminMain.addcategory.boxtitle_root'] = "Kategorie zum %1\$s hinzufügen"; // %1$s is the name of the root directory"; //en: "Add Category to the %1\$s"; // %1$s is the name of the root directory"
$lang['AdminMain.addcategory.boxtitle_addcategory'] = "Kategorie zur Kategorie [%1\$s] hinzufügen "; // %1$s is the name of the category that this category is to be nested under"; //en: "Add Category to Category [%1\$s]"; // %1$s is the name of the category that this category is to be nested under"

$lang['AdminMain.addcategory.field_name'] = "Name"; //en: "Name"
$lang['AdminMain.addcategory.field_description'] = "Beschreibung"; //en: "Description"

$lang['AdminMain.addcategory.submit_add'] = "Kategorie erstellen"; //en: "Create Category"
$lang['AdminMain.addcategory.submit_cancel'] = "Stornieren"; //en: "Cancel"


// Edit category
$lang['AdminMain.editcategory.page_title'] = "Downloadmanager > Kategorie aktualisieren"; //en: "Download Manager > Update Category"

$lang['AdminMain.editcategory.boxtitle_editcategory'] = "Update Kategorie [%1\$s]"; // %1$s is the name of the category"; //en: "Update Category [%1\$s]"; // %1$s is the name of the category"

$lang['AdminMain.editcategory.field_name'] = "Name"; //en: "Name"
$lang['AdminMain.editcategory.field_description'] = "Beschreibung"; //en: "Description"

$lang['AdminMain.editcategory.submit_edit'] = "Kategorie aktualisieren"; //en: "Update Category"
$lang['AdminMain.editcategory.submit_cancel'] = "Abbrechen"; //en: "Cancel"

// Package names
$lang['AdminMain.package_name'] = "%1\$s (%2\$s)"; // %1$s is the package name, %2$s is the package status"; //en: "'%1$s (%2$s)'; // %1$s is the package name, %2$s is the package status"
