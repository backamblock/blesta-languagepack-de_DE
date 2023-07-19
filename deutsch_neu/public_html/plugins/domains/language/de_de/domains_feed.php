<?php
/**
 * de_de language for the Domain Manager data feed
 */
$lang['DomainsFeed.name'] = 'Domain Pricing';
$lang['DomainsFeed.description'] = 'Returns an HTML table containing the pricing for all TLDs.';

$lang['DomainsFeed.getOptionFields.title_row_example_code'] = 'Example Code';
$lang['DomainsFeed.getOptionFields.example_code_table'] = "Zeigt eine Tabelle mit den Preisen für alle TLDs in einer bestimmten Währung:"; //en: "'Show a table containing the pricing for all the TLDs in a given currency:'"
$lang['DomainsFeed.getOptionFields.header_name'] = "Name"; //en: "'Name'"
$lang['DomainsFeed.getOptionFields.header_description'] = 'Description';
$lang['DomainsFeed.getOptionFields.params'] = 'Parameters';
$lang['DomainsFeed.getOptionFields.param_currency'] = "Währung"; //en: "'currency'"
$lang['DomainsFeed.getOptionFields.param_currency_description'] = "Der dreistellige Währungscode, für den die Preise abgerufen werden sollen."; //en: "'The 3-character currency code for which to fetch pricing.'"
$lang['DomainsFeed.getOptionFields.param_style'] = 'style';
$lang['DomainsFeed.getOptionFields.param_style_description'] = 'The style of table to fetch: html or bootstrap.';
$lang['DomainsFeed.getOptionFields.param_term'] = 'term';
$lang['DomainsFeed.getOptionFields.param_term_description'] = 'A comma-separated list of year terms to include in the pricing table';

$lang['DomainsFeed.table.heading_tlds'] = 'TLDs';
$lang['DomainsFeed.table.heading_year'] = "%1\$s Jahr"; // %1$s is the number of years"; //en: "'%1$s Year'; // %1$s is the number of years"
$lang['DomainsFeed.table.heading_years'] = '%1$s Years'; // %1$s is the number of years
$lang['DomainsFeed.table.register'] = 'Register';
$lang['DomainsFeed.table.transfer'] = 'Transfer';
$lang['DomainsFeed.table.renew'] = 'Renew';
$lang['DomainsFeed.table.not_available'] = 'Not available';

$lang['DomainsFeed.!error.invalid_endpoint'] = 'The requested endpoint is not valid or does not exist.';
$lang['DomainsFeed.!error.invalid_style'] = 'The requested style is not valid.';
