<?php
/**
 * Language definitions for the PluginManager model
 *
 * @package blesta
 * @subpackage blesta.language.de_de
 * @copyright Copyright (c) 2010, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

// Plugin errors
$lang['PluginManager.!error.dir.empty'] = "Bitte das Plugin Verzeichnis angeben."; //en: "'Please enter the plugin directory.'"
$lang['PluginManager.!error.dir.length'] = "Das Name des Pluginverzeichnis darf nicht länger als 64 Zeichen sein"; //en: "'The plugin directory length may not exceed 64 characters.'"
$lang['PluginManager.!error.company_id.exists'] = "Ungültige Firmen-ID"; //en: "'Invalid company ID.'"
$lang['PluginManager.!error.name.empty'] = "Bitte geben Sie einen Plugin-Namen ein."; //en: "'Please enter a plugin name.'"
$lang['PluginManager.!error.author.empty'] = "Bitte geben Sie den Autor des Plugins an."; //en: "'Please enter the plugin author.'"
$lang['PluginManager.!error.version.empty'] = "Bitte geben Sie die Plugin-Version ein."; //en: "'Please enter the plugin version.'"
$lang['PluginManager.!error.version.length'] = "Die Länge der Plugin-Version darf 16 Zeichen nicht überschreiten."; //en: "'The plugin version length may not exceed 16 characters.'"

// Plugin event errors
$lang['PluginManager.!error.event.empty'] = "Bitte geben Sie ein Event ein."; //en: "'Please enter an event.'"
$lang['PluginManager.!error.event.length'] = 'Event length may not exceed 128 characters.';
$lang['PluginManager.!error.event.exists'] = 'The plugin event could not be found.';
$lang['PluginManager.!error.callback.empty'] = "Bitte geben Sie einen Callback ein."; //en: "'Please enter a callback.'"

// Plugin card errors
$lang['PluginManager.!error.level.valid'] = 'The level must be set to "client" or "staff".';
$lang['PluginManager.!error.callback.exists'] = 'The plugin card callback could not be found.';
$lang['PluginManager.!error.callback.unique'] = 'The callback must be unique for this plugin card.';
$lang['PluginManager.!error.callback_type.valid'] = 'The callback type must be set to "value" or "html".';
$lang['PluginManager.!error.label.empty'] = 'Please enter a label.';
$lang['PluginManager.!error.link.empty'] = 'Please enter a link.';
$lang['PluginManager.!error.text_color.empty'] = "Bitte eine Textfarbe eingeben."; //en: "'Please enter a text color.'"
$lang['PluginManager.!error.background.empty'] = "Bitte geben Sie eine Hintergrundfarbe oder eine Bild-URL ein."; //en: "'Please enter a background color or a image URL.'"
$lang['PluginManager.!error.background.valid'] = 'The background must be a valid URL for an image.';
$lang['PluginManager.!error.background_type.valid'] = 'The background type must be set to "color" or "image".';
