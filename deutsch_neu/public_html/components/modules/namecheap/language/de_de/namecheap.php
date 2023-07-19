<?php
// Basics
$lang['Namecheap.name'] = "Namecheap"; //en: "'Namecheap'"
$lang['Namecheap.description'] = 'Namecheap, Inc. is an ICANN-accredited domain name registrar, which provides domain name registration and web hosting. Namecheap is a budget hosting provider with 11 million registered users and 10 million domains.';
$lang['Namecheap.module_row'] = "Konto"; //en: "'Account'"
$lang['Namecheap.module_row_plural'] = "Accounts"; //en: "'Accounts'"

// Errors
$lang['Namecheap.!error.currency.not_exists'] = 'The reseller currency does not exists in this company.';

// Module management
$lang['Namecheap.add_module_row'] = "Account hinzufügen"; //en: "'Add Account'"
$lang['Namecheap.manage.module_rows_title'] = "Account"; //en: "'Accounts'"
$lang['Namecheap.manage.module_rows_heading.user'] = "Benutzer"; //en: "'User'"
$lang['Namecheap.manage.module_rows_heading.key'] = "API-Schlüssel"; //en: "'API Key'"
$lang['Namecheap.manage.module_rows_heading.sandbox'] = "Sandkasten"; //en: "'Sandbox'"
$lang['Namecheap.manage.module_rows_heading.options'] = "Optionen"; //en: "'Options'"
$lang['Namecheap.manage.module_rows.edit'] = "Bearbeiten"; //en: "'Edit'"
$lang['Namecheap.manage.module_rows.delete'] = "Löschen"; //en: "'Delete'"
$lang['Namecheap.manage.module_rows.confirm_delete'] = "Möchten Sie dieses Konto wirklich löschen?"; //en: "'Are you sure you want to delete this account?'"
$lang['Namecheap.manage.module_rows_no_results'] = "Es gibt keine Accounts."; //en: "'There are no accounts.'"

// Row Meta
$lang['Namecheap.row_meta.user'] = "Nutzer"; //en: "'User'"
$lang['Namecheap.row_meta.key'] = "Schlüssel"; //en: "'Key'"
$lang['Namecheap.row_meta.sandbox'] = "Sandkasten"; //en: "'Sandbox'"
$lang['Namecheap.row_meta.sandbox_true'] = "Ja"; //en: "'Yes'"
$lang['Namecheap.row_meta.sandbox_false'] = "Nein"; //en: "'No'"

// Add row
$lang['Namecheap.add_row.box_title'] = "Namecheap Account hinzufügen"; //en: "'Add Namecheap Account'"
$lang['Namecheap.add_row.basic_title'] = "Grundeinstellungen"; //en: "'Basic Settings'"
$lang['Namecheap.add_row.add_btn'] = "Account hinzufügen"; //en: "'Add Account'"

// Edit row
$lang['Namecheap.edit_row.box_title'] = "Namecheap-Konto bearbeiten"; //en: "'Edit Namecheap Account'"
$lang['Namecheap.edit_row.basic_title'] = "Grundeinstellungen"; //en: "'Basic Settings'"
$lang['Namecheap.edit_row.add_btn'] = "Account aktualisieren"; //en: "'Update Account'"

// Package fields
$lang['Namecheap.package_fields.type'] = "Typ"; //en: "'Type'"
$lang['Namecheap.package_fields.type_domain'] = "Domain Registrierung"; //en: "'Domain Registration'"
$lang['Namecheap.package_fields.type_ssl'] = "SSL-Zertifikat"; //en: "'SSL Certificate'"
$lang['Namecheap.package_fields.tld_options'] = "TLDs"; //en: "'TLDs'"
$lang['Namecheap.package_fields.ns1'] = "Namenserver 1"; //en: "'Name Server 1'"
$lang['Namecheap.package_fields.ns2'] = "Name Server 2"; //en: "'Name Server 2'"
$lang['Namecheap.package_fields.ns3'] = "Namenserver 3"; //en: "'Name Server 3'"
$lang['Namecheap.package_fields.ns4'] = "Namenserver 4"; //en: "'Name Server 4'"
$lang['Namecheap.package_fields.ns5'] = "Namenserver 5"; //en: "'Name Server 5'"

// Service management
$lang['Namecheap.tab_whois.title'] = "Whois"; //en: "'Whois'"
$lang['Namecheap.tab_whois.section_Registrant'] = "Registrant"; //en: "'Registrant'"
$lang['Namecheap.tab_whois.section_Admin'] = "Administrative"; //en: "'Administrative'"
$lang['Namecheap.tab_whois.section_Tech'] = "Technisch"; //en: "'Technical'"
$lang['Namecheap.tab_whois.section_AuxBilling'] = "Abrechnung"; //en: "'Billing'"
$lang['Namecheap.tab_whois.field_submit'] = "Whois aktualisieren"; //en: "'Update Whois'"

$lang['Namecheap.tab_nameservers.title'] = "Name Server"; //en: "'Name Servers'"
$lang['Namecheap.tab_nameserver.field_ns'] = "Nameserver %1\$s"; // %1$s is the name server number"; //en: "'Name Server %1$s'; // %1$s is the name server number"
$lang['Namecheap.tab_nameservers.field_submit'] = "Namenserver aktualisieren"; //en: "'Update Name Servers'"

$lang['Namecheap.tab_settings.title'] = "Einstellungen"; //en: "'Settings'"
$lang['Namecheap.tab_settings.field_registrar_lock'] = "Registrarsperre"; //en: "'Registrar Lock'"
$lang['Namecheap.tab_settings.field_registrar_lock_yes'] = "Aktiviert die Registry Sperre, wird empfohlen um nicht autorisierte Transfers zu unterbinden."; //en: "'Set the registrar lock. Recommended to prevent unauthorized transfer.'"
$lang['Namecheap.tab_settings.field_registrar_lock_no'] = "Geben Sie die Registrierungssperre frei, damit die Domain übertragen werden kann."; //en: "'Release the registrar lock so the domain can be transferred.'"
$lang['Namecheap.tab_settings.field_request_epp'] = "EPP-Code/Übertragungsschlüssel anfordern"; //en: "'Request EPP Code/Transfer Key'"
$lang['Namecheap.tab_settings.field_submit'] = "Einstellungen aktualisieren"; //en: "'Update Settings'"

// Errors
$lang['Namecheap.!error.user.valid'] = "Bitte geben Sie einen Benutzer ein"; //en: "'Please enter a user'"
$lang['Namecheap.!error.key.valid'] = "Bitte geben Sie einen Schlüssel ein"; //en: "'Please enter a key'"
$lang['Namecheap.!error.key.valid_connection'] = "Der Benutzer und die Tastenkombination scheinen ungültig zu sein, oder Ihr Namecheap-Konto ist möglicherweise nicht für den API-Zugriff konfiguriert."; //en: "'The user and key combination appear to be invalid, or your Namecheap account may not be configured to allow API access.'"


// Domain Transfer Fields
$lang['Namecheap.transfer.DomainName'] = "Domänenname"; //en: "'Domain Name'"
$lang['Namecheap.transfer.EPPCode'] = "EPP Code"; //en: "'EPP Code'"

// Domain Fields
$lang['Namecheap.domain.DomainName'] = "Domänenname"; //en: "'Domain Name'"
$lang['Namecheap.domain.Years'] = "Jahre"; //en: "'Years'"

// Nameserver Fields
$lang['Namecheap.nameserver.ns1'] = "Nameserver 1"; //en: "'Name Server 1'"
$lang['Namecheap.nameserver.ns2'] = "Namenserver 2"; //en: "'Name Server 2'"
$lang['Namecheap.nameserver.ns3'] = "Namenserver 3"; //en: "'Name Server 3'"
$lang['Namecheap.nameserver.ns4'] = "Namenserver 4"; //en: "'Name Server 4'"
$lang['Namecheap.nameserver.ns5'] = "Name Server 5"; //en: "'Name Server 5'"

//$lang['Namecheap.domain.IdnCode'] = "";
//$lang['Namecheap.domain.Nameservers'] = "";
//$lang['Namecheap.domain.AddFreeWhoisguard'] = "";
//$lang['Namecheap.domain.WGEnabled Enables'] = "";
//$lang['Namecheap.domain.AddFreePositiveSSL'] = "";

// Whois Fields
//$lang['Namecheap.whois.RegistrantOrganizationName'] = "Organization";
//$lang['Namecheap.whois.RegistrantJobTitle'] = "Job Title";
$lang['Namecheap.whois.RegistrantFirstName'] = "Vorname"; //en: "'First Name'"
$lang['Namecheap.whois.RegistrantLastName'] = "Nachname"; //en: "'Last Name'"
$lang['Namecheap.whois.RegistrantAddress1'] = "Adresse 1"; //en: "'Address 1'"
$lang['Namecheap.whois.RegistrantAddress2'] = "Adresse (Zusatzfelder)"; //en: "'Address 2'"
$lang['Namecheap.whois.RegistrantCity'] = "Stadt"; //en: "'City'"
$lang['Namecheap.whois.RegistrantStateProvince'] = "Staat / Provinz"; //en: "'State/Province'"
//$lang['Namecheap.whois.RegistrantStateProvinceChoice'] = "State/Province Choice";
$lang['Namecheap.whois.RegistrantPostalCode'] = "Postleitzahl"; //en: "'Postal Code'"
$lang['Namecheap.whois.RegistrantCountry'] = "Land"; //en: "'Country'"
$lang['Namecheap.whois.RegistrantPhone'] = "Telefon"; //en: "'Phone'"
//$lang['Namecheap.whois.RegistrantPhoneExt'] = "Phone Extension";
//$lang['Namecheap.whois.RegistrantFax'] = "Fax";
$lang['Namecheap.whois.RegistrantEmailAddress'] = "E-Mail"; //en: "'Email'"

//$lang['Namecheap.whois.TechOrganizationName'] = "Organization";
//$lang['Namecheap.whois.TechJobTitle'] = "Job Title";
$lang['Namecheap.whois.TechFirstName'] = "Vorname"; //en: "'First Name'"
$lang['Namecheap.whois.TechLastName'] = "Nachname"; //en: "'Last Name'"
$lang['Namecheap.whois.TechAddress1'] = "Adresse 1"; //en: "'Address 1'"
$lang['Namecheap.whois.TechAddress2'] = "2. Adresse"; //en: "'Address 2'"
$lang['Namecheap.whois.TechCity'] = "Stadt"; //en: "'City'"
$lang['Namecheap.whois.TechStateProvince'] = "Staat / Provinz"; //en: "'State/Province'"
//$lang['Namecheap.whois.TechStateProvinceChoice'] = "State/Province Choice";
$lang['Namecheap.whois.TechPostalCode'] = "Postleitzahl"; //en: "'Postal Code'"
$lang['Namecheap.whois.TechCountry'] = "Land"; //en: "'Country'"
$lang['Namecheap.whois.TechPhone'] = "Telefon"; //en: "'Phone'"
//$lang['Namecheap.whois.TechPhoneExt'] = "Phone Extension";
//$lang['Namecheap.whois.TechFax'] = "Fax";
$lang['Namecheap.whois.TechEmailAddress'] = "Email"; //en: "'Email'"

//$lang['Namecheap.whois.AdminOrganizationName'] = "Organization";
//$lang['Namecheap.whois.AdminJobTitle'] = "Job Title";
$lang['Namecheap.whois.AdminFirstName'] = "Vorname"; //en: "'First Name'"
$lang['Namecheap.whois.AdminLastName'] = "Nachname"; //en: "'Last Name'"
$lang['Namecheap.whois.AdminAddress1'] = "Adresse"; //en: "'Address 1'"
$lang['Namecheap.whois.AdminAddress2'] = "Adresse 2"; //en: "'Address 2'"
$lang['Namecheap.whois.AdminCity'] = "Stadt"; //en: "'City'"
$lang['Namecheap.whois.AdminStateProvince'] = "Staat / Provinz"; //en: "'State/Province'"
//$lang['Namecheap.whois.AdminStateProvinceChoice'] = "State/Province Choice";
$lang['Namecheap.whois.AdminPostalCode'] = "Postleitzahl"; //en: "'Postal Code'"
$lang['Namecheap.whois.AdminCountry'] = "Land"; //en: "'Country'"
$lang['Namecheap.whois.AdminPhone'] = "Telefon"; //en: "'Phone'"
//$lang['Namecheap.whois.AdminPhoneExt'] = "Phone Extension";
//$lang['Namecheap.whois.AdminFax'] = "Fax";
$lang['Namecheap.whois.AdminEmailAddress'] = "E-Mail"; //en: "'Email'"

//$lang['Namecheap.whois.AuxBillingOrganizationName'] = "Organization";
//$lang['Namecheap.whois.AuxBillingJobTitle'] = "Job Title";
$lang['Namecheap.whois.AuxBillingFirstName'] = "Vorname"; //en: "'First Name'"
$lang['Namecheap.whois.AuxBillingLastName'] = "Nachname"; //en: "'Last Name'"
$lang['Namecheap.whois.AuxBillingAddress1'] = "Adresse"; //en: "'Address 1'"
$lang['Namecheap.whois.AuxBillingAddress2'] = "2. Adresse"; //en: "'Address 2'"
$lang['Namecheap.whois.AuxBillingCity'] = "Stadt"; //en: "'City'"
$lang['Namecheap.whois.AuxBillingStateProvince'] = "Staat/Provinz"; //en: "'State/Province'"
//$lang['Namecheap.whois.AuxBillingStateProvinceChoice'] = "State/Province Choice";
$lang['Namecheap.whois.AuxBillingPostalCode'] = "Postleitzahl"; //en: "'Postal Code'"
$lang['Namecheap.whois.AuxBillingCountry'] = "Land"; //en: "'Country'"
$lang['Namecheap.whois.AuxBillingPhone'] = "Telefon"; //en: "'Phone'"
//$lang['Namecheap.whois.AuxBillingPhoneExt'] = "Phone Extension";
//$lang['Namecheap.whois.AuxBillingFax'] = "Fax";
$lang['Namecheap.whois.AuxBillingEmailAddress'] = "E-Mail"; //en: "'Email'"

//$lang['Namecheap.whois.BillingFirstName'] = "First Name";
//$lang['Namecheap.whois.BillingLastName'] = "Last Name";
//$lang['Namecheap.whois.BillingAddress1'] = "Address 1";
//$lang['Namecheap.whois.BillingAddress2'] = "Address 2";
//$lang['Namecheap.whois.BillingCity'] = "City";
//$lang['Namecheap.whois.BillingStateProvince'] = "State/Province";
//$lang['Namecheap.whois.BillingStateProvinceChoice'] = "State/Province Choice";
//$lang['Namecheap.whois.BillingPostalCode'] = "Postal Code";
//$lang['Namecheap.whois.BillingCountry'] = "Country";
//$lang['Namecheap.whois.BillingPhone'] = "Phone";
//$lang['Namecheap.whois.BillingPhoneExt'] = "Phone Extension";
//$lang['Namecheap.whois.BillingFax'] = "Fax";
//$lang['Namecheap.whois.BillingEmailAddress'] = "Email";

// .US domain fields
$lang['Namecheap.domain.RegistrantNexus'] = "Registratorentyp"; //en: "'Registrant Type'"
$lang['Namecheap.domain.RegistrantNexus.c11'] = "US Bürger"; //en: "'US citizen'"
$lang['Namecheap.domain.RegistrantNexus.c12'] = "Ständiger Wohnsitz in den USA"; //en: "'Permanent resident of the US'"
$lang['Namecheap.domain.RegistrantNexus.c21'] = "US-amerikanische Einheit oder Organisation"; //en: "'US entity or organization'"
$lang['Namecheap.domain.RegistrantNexus.c31'] = "Ausländische Organisation"; //en: "'Foreign organization'"
$lang['Namecheap.domain.RegistrantNexus.c32'] = "Ausländische Organisation mit einem Büro in den USA"; //en: "'Foreign organization with an office in the US'"
$lang['Namecheap.domain.RegistrantPurpose'] = "Zweck"; //en: "'Purpose'"
$lang['Namecheap.domain.RegistrantPurpose.p1'] = "Firma"; //en: "'Business'"
$lang['Namecheap.domain.RegistrantPurpose.p2'] = "Nonprofit"; //en: "'Non-profit'"
$lang['Namecheap.domain.RegistrantPurpose.p3'] = "Persönlich"; //en: "'Personal'"
$lang['Namecheap.domain.RegistrantPurpose.p4'] = "Educational"; //en: "'Educational'"
$lang['Namecheap.domain.RegistrantPurpose.p5'] = "Regierung"; //en: "'Governmental'"

// .EU domain fields
$lang['Namecheap.domain.EUAgreeWhoisPolicy'] = "Whois Richtlinie"; //en: "'Whois Policy'"
$lang['Namecheap.domain.EUAgreeWhoisPolicy.yes'] = "Ich stimme hiermit zu, dass die Registry berechtigt ist, die in dieser Anmeldung enthaltenen Daten an Dritte weiterzugeben (i), wenn sie von einer öffentlichen Stelle dazu aufgefordert werden, ihre legitimen Aufgaben auszuführen; und (ii) auf Verlangen eines ADR-Anbieters wie in Abschnitt 16 der Allgemeinen Geschäftsbedingungen beschrieben, die auf www.eurid.eu veröffentlicht sind; und (iii) wie in Abschnitt 2 (WHOIS-Nachschlageinrichtung) der .eu Domain Name WHOIS-Richtlinie, die auf www.eurid.eu veröffentlicht ist, vorgesehen ist."; //en: "'I hereby agree that the Registry is entitled to transfer the data contained in this application to third parties(i) if ordered to do so by a public authority, carrying out its legitimate tasks; and (ii) upon demand of an ADR Provider as mentioned in section 16 of the Terms and Conditions which are published at www.eurid.eu; and (iii) as provided in Section 2 (WHOIS look-up facility) of the .eu Domain Name WHOIS Policy which is published at www.eurid.eu.'"
$lang['Namecheap.domain.EUAgreeDeletePolicy'] = "Löschregeln"; //en: "'Deleteion Rules'"
$lang['Namecheap.domain.EUAgreeDeletePolicy.yes'] = "Ich stimme den besonderen Verlängerungs- und Ablaufbedingungen zu, die im Folgenden für diesen Domainnamen aufgeführt sind, einschließlich der in der Registrierungsvereinbarung aufgeführten Bedingungen. Ich verstehe, dass dieser Domain-Name explizit bis zum Ablaufdatum oder dem 20. des Monats des Ablaufdatums erneuert werden muss, es sei denn, der frühere Zeitpunkt ist abgelaufen, es sei denn, ich habe diese Domain für Autorennew festgelegt. (Wenn der Name zum Beispiel am 4. September 2008 abläuft, muss bis zum 4. September 2008 eine manuelle Verlängerung eingegangen sein. Wenn der Name am 27. September 2008 abläuft, muss die Verlängerungsanfrage vor dem 20. September 2008 eingehen). Wenn der Name nicht manuell aktualisiert oder zuvor auf autorenew festgelegt wurde, wird eine Löschanforderung von Namecheap ausgegeben. Wenn eine Löschanforderung ausgegeben wird, bleibt der Name bis zum Ablauf in meinem Konto voll funktionsfähig, kann aber nicht mehr verlängert werden, und der Name kann nicht geändert werden. Diese Bedingungen können sich ändern."; //en: "'I agree and acknowledge to the special renewal and expiration terms set forth below for this domain name, including those terms set forth in the Registration Agreement. I understand that unless I have set this domain for autorenewal, this domain name must be explicitly renewed by the expiration date or the 20th of the month of expiration, whichever is sooner. (e.g. If the name expires on Sept 4th, 2008, then a manual renewal must be received by Sept 4th, 2008. If name expires on Sep 27th, 2008, the renewal request must be received prior to Sep 20th, 2008). If the name is not manually renewed or previously set to autorenew, a delete request will be issued by Namecheap. When a delete request is issued, the name will remain fully functional in my account until expiration, but will no longer be renewable nor will I be able to make any modifications to the name. These terms are subject to change.'"

// .CA domain fields
$lang['Namecheap.domain.CIRALegalType'] = "Gesetzlicher Typ"; //en: "'Legal Type'"
$lang['Namecheap.domain.RegistrantPurpose.cco'] = "Konzern"; //en: "'Corporation'"
$lang['Namecheap.domain.RegistrantPurpose.cct'] = "Kanadischer Staatsbürger"; //en: "'Canadian citizen'"
$lang['Namecheap.domain.RegistrantPurpose.res'] = "Kanadischer Wohnsitz"; //en: "'Canadian resident'"
$lang['Namecheap.domain.RegistrantPurpose.gov'] = "Regierungsinstanz"; //en: "'Government entity'"
$lang['Namecheap.domain.RegistrantPurpose.edu'] = "Bildungsbereich"; //en: "'Educational'"
$lang['Namecheap.domain.RegistrantPurpose.ass'] = "Nicht eingetragener Verein"; //en: "'Unincorporated Association'"
$lang['Namecheap.domain.RegistrantPurpose.hop'] = "Krankenhaus"; //en: "'Hospital'"
$lang['Namecheap.domain.RegistrantPurpose.prt'] = "Partnerschaft"; //en: "'Partnership'"
$lang['Namecheap.domain.RegistrantPurpose.tdm'] = "Warenzeichen"; //en: "'Trade-mark'"
$lang['Namecheap.domain.RegistrantPurpose.trd'] = "Trade Union"; //en: "'Trade Union'"
$lang['Namecheap.domain.RegistrantPurpose.plt'] = "Politische Partei"; //en: "'Political Party'"
$lang['Namecheap.domain.RegistrantPurpose.lam'] = "Bibliotheken, Archive und Museen"; //en: "'Libraries, Archives and Museums'"
$lang['Namecheap.domain.RegistrantPurpose.trs'] = "Vertrauen"; //en: "'Trust'"
$lang['Namecheap.domain.RegistrantPurpose.abo'] = "Ureinwohner"; //en: "'Aboriginal Peoples'"
$lang['Namecheap.domain.RegistrantPurpose.inb'] = "Indische Band"; //en: "'Indian Band'"
$lang['Namecheap.domain.RegistrantPurpose.lgr'] = "Gesetzlicher Vertreter"; //en: "'Legal Representative'"
$lang['Namecheap.domain.RegistrantPurpose.omk'] = "Offizielle Marke"; //en: "'Official Mark'"
$lang['Namecheap.domain.RegistrantPurpose.maj'] = "Die Königin"; //en: "'The Queen'"
$lang['Namecheap.domain.CIRAWhoisDisplay'] = "Whois"; //en: "'Whois'"
$lang['Namecheap.domain.CIRAWhoisDisplay.full'] = "Publizieren"; //en: "'Make Public'"
$lang['Namecheap.domain.CIRAWhoisDisplay.private'] = "Privat behalten"; //en: "'Keep Private'"

// .CO.UK domain fields
$lang['Namecheap.domain.COUKLegalType'] = "Gesetzlicher Typ"; //en: "'Legal Type'"
$lang['Namecheap.domain.COUKLegalType.ind'] = "UK Einzelperson"; //en: "'UK individual'"
$lang['Namecheap.domain.COUKLegalType.find'] = "Nicht-UK-Individuum"; //en: "'Non-UK individual'"
$lang['Namecheap.domain.COUKLegalType.ltd'] = "UK Limited Company"; //en: "'UK Limited Company'"
$lang['Namecheap.domain.COUKLegalType.plc'] = "Britische Aktiengesellschaft"; //en: "'UK Public Limited Company'"
$lang['Namecheap.domain.COUKLegalType.ptnr'] = "UK Partnerschaft"; //en: "'UK Partnership'"
$lang['Namecheap.domain.COUKLegalType.llp'] = "UK Limited Liability Partnership"; //en: "'UK Limited Liability Partnership'"
$lang['Namecheap.domain.COUKLegalType.ip'] = "UK Industrial / Provident Eingetragene Firma"; //en: "'UK Industrial/Provident Registered Company'"
$lang['Namecheap.domain.COUKLegalType.stra'] = "Einziger Händler in Großbritannien"; //en: "'UK Sole Trader'"
$lang['Namecheap.domain.COUKLegalType.sch'] = "Britische Schule"; //en: "'UK School'"
$lang['Namecheap.domain.COUKLegalType.rchar'] = "UK registrierte Wohltätigkeitsorganisation"; //en: "'UK Registered Charity'"
$lang['Namecheap.domain.COUKLegalType.gov'] = "Britische Regierungsbehörde"; //en: "'UK Government Body'"
$lang['Namecheap.domain.COUKLegalType.other'] = "UK Entity (andere)"; //en: "'UK Entity (other)'"
$lang['Namecheap.domain.COUKLegalType.crc'] = "UK Corporation von Royal Charter"; //en: "'UK Corporation by Royal Charter'"
$lang['Namecheap.domain.COUKLegalType.fcorp'] = "Ausländische Organisation"; //en: "'Foreign Organization'"
$lang['Namecheap.domain.COUKLegalType.stat'] = "UK Statutory Body FIND"; //en: "'UK Statutory Body FIND'"
$lang['Namecheap.domain.COUKLegalType.fother'] = "Andere ausländische Organisationen"; //en: "'Other Foreign Organizations'"
$lang['Namecheap.domain.COUKCompanyID'] = "Firmennummer"; //en: "'Company ID Number'"
$lang['Namecheap.domain.COUKRegisteredfor'] = "Registrant Namen"; //en: "'Registrant Name'"

// .ME.UK domain fields
$lang['Namecheap.domain.MEUKLegalType'] = "Gesetzlicher Typ"; //en: "'Legal Type'"
$lang['Namecheap.domain.MEUKLegalType.ind'] = "GB individuell"; //en: "'UK individual'"
$lang['Namecheap.domain.MEUKLegalType.find'] = "Nicht-UK-Person"; //en: "'Non-UK individual'"
$lang['Namecheap.domain.MEUKLegalType.ltd'] = "UK Limited Company"; //en: "'UK Limited Company'"
$lang['Namecheap.domain.MEUKLegalType.plc'] = "Britische Aktiengesellschaft"; //en: "'UK Public Limited Company'"
$lang['Namecheap.domain.MEUKLegalType.ptnr'] = "UK-Partnerschaft"; //en: "'UK Partnership'"
$lang['Namecheap.domain.MEUKLegalType.llp'] = "Partnerschaft mit beschränkter Haftung im Vereinigten Königreich"; //en: "'UK Limited Liability Partnership'"
$lang['Namecheap.domain.MEUKLegalType.ip'] = "Britische Industrie- / Provident-registrierte Firma"; //en: "'UK Industrial/Provident Registered Company'"
$lang['Namecheap.domain.MEUKLegalType.stra'] = "UK Einzelhändler"; //en: "'UK Sole Trader'"
$lang['Namecheap.domain.MEUKLegalType.sch'] = "Britische Schule"; //en: "'UK School'"
$lang['Namecheap.domain.MEUKLegalType.rchar'] = "In Großbritannien eingetragene Wohltätigkeitsorganisation"; //en: "'UK Registered Charity'"
$lang['Namecheap.domain.MEUKLegalType.gov'] = "Britische Regierungsbehörde"; //en: "'UK Government Body'"
$lang['Namecheap.domain.MEUKLegalType.other'] = "UK Entity (andere)"; //en: "'UK Entity (other)'"
$lang['Namecheap.domain.MEUKLegalType.crc'] = "UK Corporation von Royal Charter"; //en: "'UK Corporation by Royal Charter'"
$lang['Namecheap.domain.MEUKLegalType.fcorp'] = "Ausländische Organisation"; //en: "'Foreign Organization'"
$lang['Namecheap.domain.MEUKLegalType.stat'] = "UK Statutory Body FIND"; //en: "'UK Statutory Body FIND'"
$lang['Namecheap.domain.MEUKLegalType.fother'] = "Andere ausländische Organisationen"; //en: "'Other Foreign Organizations'"
$lang['Namecheap.domain.MEUKCompanyID'] = "Firmen-ID-Nummer"; //en: "'Company ID Number'"
$lang['Namecheap.domain.MEUKRegisteredfor'] = "Registrierungsname"; //en: "'Registrant Name'"

// .ORG.UK domain fields
$lang['Namecheap.domain.ORGUKLegalType'] = "Gesetzlicher Typ"; //en: "'Legal Type'"
$lang['Namecheap.domain.ORGUKLegalType.ind'] = "UK individuell"; //en: "'UK individual'"
$lang['Namecheap.domain.ORGUKLegalType.find'] = "Nicht-UK-Person"; //en: "'Non-UK individual'"
$lang['Namecheap.domain.ORGUKLegalType.ltd'] = "UK Limited Company"; //en: "'UK Limited Company'"
$lang['Namecheap.domain.ORGUKLegalType.plc'] = "Britische Aktiengesellschaft"; //en: "'UK Public Limited Company'"
$lang['Namecheap.domain.ORGUKLegalType.ptnr'] = "Britische Partnerschaft"; //en: "'UK Partnership'"
$lang['Namecheap.domain.ORGUKLegalType.llp'] = "Partnerschaft mit beschränkter Haftung im Vereinigten Königreich"; //en: "'UK Limited Liability Partnership'"
$lang['Namecheap.domain.ORGUKLegalType.ip'] = "Britische Industrie- / Provident-registrierte Firma"; //en: "'UK Industrial/Provident Registered Company'"
$lang['Namecheap.domain.ORGUKLegalType.stra'] = "GB Einzelhändler"; //en: "'UK Sole Trader'"
$lang['Namecheap.domain.ORGUKLegalType.sch'] = "Britische Schule"; //en: "'UK School'"
$lang['Namecheap.domain.ORGUKLegalType.rchar'] = "UK Registered Charity"; //en: "'UK Registered Charity'"
$lang['Namecheap.domain.ORGUKLegalType.gov'] = "Britische Regierungsbehörde"; //en: "'UK Government Body'"
$lang['Namecheap.domain.ORGUKLegalType.other'] = "UK Entität (andere)"; //en: "'UK Entity (other)'"
$lang['Namecheap.domain.ORGUKLegalType.crc'] = "UK Corporation von Royal Charter"; //en: "'UK Corporation by Royal Charter'"
$lang['Namecheap.domain.ORGUKLegalType.fcorp'] = "Ausländische Ortanisation"; //en: "'Foreign Organization'"
$lang['Namecheap.domain.ORGUKLegalType.stat'] = "UK Gesetzliche Einrichtung FIND"; //en: "'UK Statutory Body FIND'"
$lang['Namecheap.domain.ORGUKLegalType.fother'] = "Andere ausländische Organisationen"; //en: "'Other Foreign Organizations'"
$lang['Namecheap.domain.ORGUKCompanyID'] = "Firmen-ID-Nummer"; //en: "'Company ID Number'"
$lang['Namecheap.domain.ORGUKRegisteredfor'] = "Name des Registranten"; //en: "'Registrant Name'"

// .ASIA domain fields
$lang['Namecheap.domain.ASIALegalEntityType'] = "Gesetzlicher Typ"; //en: "'Legal Type'"
$lang['Namecheap.domain.ASIALegalEntityType.corporation'] = "Unternehmen"; //en: "'Corporations or Companies'"
$lang['Namecheap.domain.ASIALegalEntityType.cooperative'] = "Genossenschaften"; //en: "'Cooperatives'"
$lang['Namecheap.domain.ASIALegalEntityType.partnership'] = "Partnerschaften oder Kollektive"; //en: "'Partnerships or Collectives'"
$lang['Namecheap.domain.ASIALegalEntityType.government'] = "Regierungsstellen"; //en: "'Government Bodies'"
$lang['Namecheap.domain.ASIALegalEntityType.politicalParty'] = "Politische Parteien oder Gewerkschaften"; //en: "'Political parties or Trade Unions'"
$lang['Namecheap.domain.ASIALegalEntityType.society'] = "Trusts, Estates, Verbände oder Gesellschaften"; //en: "'Trusts, Estates, Associations or Societies'"
$lang['Namecheap.domain.ASIALegalEntityType.institution'] = "Institutionen"; //en: "'Institutions'"
$lang['Namecheap.domain.ASIALegalEntityType.naturalPerson'] = "Natürliche Personen"; //en: "'Natural Persons'"
$lang['Namecheap.domain.ASIAIdentForm'] = "Form der Identität"; //en: "'Form of Identity'"
$lang['Namecheap.domain.ASIAIdentForm.certificate'] = "Gründungsurkunde"; //en: "'Certificate of Incorporation'"
$lang['Namecheap.domain.ASIAIdentForm.legislation'] = "Charta"; //en: "'Charter'"
$lang['Namecheap.domain.ASIAIdentForm.societyRegistry'] = "Societies Registry"; //en: "'Societies Registry'"
$lang['Namecheap.domain.ASIAIdentForm.politicalPartyRegistry'] = "Parteiliches Register"; //en: "'Political Party Registry'"
$lang['Namecheap.domain.ASIAIdentForm.passport'] = "Reisepass- / Staatsangehörigkeitsausweis"; //en: "'Passport/ Citizenship ID'"
$lang['Namecheap.domain.ASIAIdentNumber'] = "Identifikationsnummer"; //en: "'Identity Number'"

// .FR domain fields
$lang['Namecheap.!tooltip.FRRegistrantBirthDate'] = "Stellen Sie Ihr Geburtsdatum im Format ein: JJJJ-MM-TT"; //en: "'Set your birth date in the format: YYYY-MM-DD'"
$lang['Namecheap.!tooltip.FRRegistrantLegalId'] = "Die SIREN-Nummer ist der erste Teil der SIRET-NUMMER und besteht aus 9 Ziffern. Die SIRET-Nummer ist eine eindeutige Identifikationsnummer mit 14 Ziffern."; //en: "'The SIREN number is the first part of the SIRET NUMBER and consists of 9 digits. The SIRET number is a unique identification number with 14 digits.'"
$lang['Namecheap.!tooltip.FRRegistrantDunsNumber'] = "Die DUNS-Nummer besteht aus 9 Ziffern, die von Dun & Bradstreet ausgegeben werden."; //en: "'The DUNS number consists of 9 digits, issued by Dun & Bradstreet.'"
$lang['Namecheap.!tooltip.FRRegistrantJoDateDec'] = "Französische Vereinigungen, die beim Journal Officiel de la République Francaise aufgeführt sind, sollten ein Datum der Erklärung im Format JJJJ-MM-TT festlegen"; //en: "'French associations listed with the Journal Officiel de la République Francaise should set a declaration date in the format: YYYY-MM-DD'"
$lang['Namecheap.!tooltip.FRRegistrantJoDatePub'] = "Geben Sie das Veröffentlichungsdatum im Journal Officiel im folgenden Format ein: JJJJ-MM-TT"; //en: "'Enter the publication date in the Journal Officiel in the format: YYYY-MM-DD'"

$lang['Namecheap.domain.FRLegalType'] = "Gesetzlicher Typ"; //en: "'Legal Type'"
$lang['Namecheap.domain.FRLegalType.individual'] = "Individuell"; //en: "'Individual'"
$lang['Namecheap.domain.FRLegalType.company'] = "Unternehmen"; //en: "'Company'"
$lang['Namecheap.domain.FRRegistrantBirthDate'] = "Geburtsdatum"; //en: "'Birth Date'"
$lang['Namecheap.domain.FRRegistrantBirthplace'] = "Geburtsort"; //en: "'Birth Place'"
$lang['Namecheap.domain.FRRegistrantLegalId'] = "SIREN / SIRET-Nummer"; //en: "'SIREN/SIRET Number'"
$lang['Namecheap.domain.FRRegistrantTradeNumber'] = "Handelsmarken-Nummer"; //en: "'Trademark Number'"
$lang['Namecheap.domain.FRRegistrantDunsNumber'] = "DUNS-Nummer"; //en: "'DUNS Number'"
$lang['Namecheap.domain.FRRegistrantLocalId'] = "Europäischer Wirtschaftsraum Lokale ID"; //en: "'European Economic Area Local ID'"
$lang['Namecheap.domain.FRRegistrantJoDateDec'] = "Das offizielle Datum des Journals"; //en: "'The Journal Official Declaration Date'"
$lang['Namecheap.domain.FRRegistrantJoDatePub'] = "Das offizielle Veröffentlichungsdatum der Zeitschrift"; //en: "'The Journal Official Publication Date'"
$lang['Namecheap.domain.FRRegistrantJoNumber'] = "Die offizielle Journalnummer"; //en: "'The Journal Official Number'"
$lang['Namecheap.domain.FRRegistrantJoPage'] = "Nummer der Zeitschrift Offizielle Ankündigungsseite"; //en: "'The Journal Official Announcement Page Number'"



// Errors
$lang['Namecheap.!error.FRLegalType.format'] = "Bitte wählen Sie einen gültigen Legal Type"; //en: "'Please select a valid Legal Type'"
$lang['Namecheap.!error.FRRegistrantBirthDate.format'] = "Bitte geben Sie Ihr Geburtsdatum im folgenden Format an: JJJJ-MM-TT"; //en: "'Please set your birth date in the format: YYYY-MM-DD'"
$lang['Namecheap.!error.FRRegistrantBirthplace.format'] = "Bitte geben Sie Ihren Geburtsort an."; //en: "'Please set your birth place.'"
$lang['Namecheap.!error.FRRegistrantLegalId.format'] = "Bitte stellen Sie Ihre SIREN / SIRET Nummer ein"; //en: "'Please set your SIREN/SIRET Number'"
$lang['Namecheap.!error.FRRegistrantTradeNumber.format'] = "Bitte geben Sie Ihre Marken-Nummer ein."; //en: "'Please set your Trademark Number.'"
$lang['Namecheap.!error.FRRegistrantDunsNumber.format'] = "Bitte setzen Sie Ihre DUNS-Nummer."; //en: "'Please set your DUNS Number.'"
$lang['Namecheap.!error.FRRegistrantLocalId.format'] = "Bitte geben Sie Ihre lokale ID ein."; //en: "'Please set your EEA Local ID.'"
$lang['Namecheap.!error.FRRegistrantJoDateDec.format'] = "Bitte legen Sie das Journaldeklarationsdatum im folgenden Format fest: JJJJ-MM-TT"; //en: "'Please set the Journal Declaration Date in the format: YYYY-MM-DD'"
$lang['Namecheap.!error.FRRegistrantJoDatePub.format'] = "Bitte legen Sie das Journal-Veröffentlichungsdatum im folgenden Format fest: JJJJ-MM-TT"; //en: "'Please set the Journal Publication Date in the format: YYYY-MM-DD'"
$lang['Namecheap.!error.FRRegistrantJoNumber.format'] = "Bitte legen Sie die Journalnummer fest."; //en: "'Please set the Journal Number.'"
$lang['Namecheap.!error.FRRegistrantJoPage.format'] = "Bitte legen Sie die Seitenzahl der Journalansage fest."; //en: "'Please set the Journal Announcement Page Number.'"
