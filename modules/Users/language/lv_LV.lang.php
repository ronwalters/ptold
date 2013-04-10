<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


/*********************************************************************************
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
 ********************************************************************************/

	

$mod_strings = array (
  'ERR_DELETE_RECORD' => 'Jānorāda ieraksta numurs, lai dzēstu kontu.',
  'ERR_EMAIL_INCORRECT' => 'Norādiet derīgu e-pasta adresi lai izveidotu un nosūtītu paroli.',
  'ERR_EMAIL_NOT_SENT_ADMIN' => 'Sistēma nevar apstrādāt jūsu pieprasījumu. Lūdzu pārbaudiet:',
  'ERR_EMAIL_NO_OPTS' => 'Nevar atrast ienākošo e-pastu optimālos iestatījumus.',
  'ERR_ENTER_CONFIRMATION_PASSWORD' => 'Ievadiet paroles apstiprinājumu.',
  'ERR_ENTER_NEW_PASSWORD' => 'Ievadiet jauno paroli.',
  'ERR_ENTER_OLD_PASSWORD' => 'Ievadiet veco paroli.',
  'ERR_IE_FAILURE1' => '[Spiediet šeit, lai atgrieztos]',
  'ERR_IE_FAILURE2' => 'Problēma pieslēgties e-pasta kontam.  Pārbaudiet iestatījumus un mēģiniet vēlreiz.',
  'ERR_IE_MISSING_REQUIRED' => 'Ienākošo e-pastu iestatījumiem nav nepieciešamās informācijas. Pārbaudiet iestatījumus un mēģiniet vēlreiz.<br /><br />Izdzēsiet visus attiecīgās sadaļas laukus, ja ienākošo e-pastu konts netiek konfigurēts.',
  'ERR_INVALID_PASSWORD' => 'Jums jānorāda derīgs lietotāja vārds un parole.',
  'ERR_LAST_ADMIN_1' => 'Lietotājs "',
  'ERR_LAST_ADMIN_2' => '" ir pēdējais lietotājs ar administratora piekļuvi. Vismaz vienam lietotājam jābūt administratoram.',
  'ERR_NO_LOGIN_MOBILE' => 'Pirmā pieteikšanās programmā jāveic ne no mobilās iekārtas vai arī normālā režīmā. Lūdzu atkārtojiet ar  pilnas funkcionalitātes pārlūku vai arī spiediet uz sekojošās normālā režīma saites. Atvainojamies par sagādātajām neērtībām.',
  'ERR_PASSWORD_CHANGE_FAILED_1' => 'Lietotāja paroles maiņa neizdevās',
  'ERR_PASSWORD_CHANGE_FAILED_2' => 'neizdevās. 	Jāiestata jaunā parole.',
  'ERR_PASSWORD_CHANGE_FAILED_3' => '.	Jaunā parole nav derīga.',
  'ERR_PASSWORD_INCORRECT_OLD_1' => 'Nepareiza lietotāja vecā parole',
  'ERR_PASSWORD_INCORRECT_OLD_2' => '. Ievadiet paroles informāciju vēlreiz.',
  'ERR_PASSWORD_LINK_EXPIRED' => 'Saites derīguma laiks ir beidzies, lūdzu ģenerējiet jaunu',
  'ERR_PASSWORD_MISMATCH' => 'Paroles neatbilst.',
  'ERR_PASSWORD_USERNAME_MISSMATCH' => 'Norādiet derīgu lietotājvārdu un paroli.',
  'ERR_REASS_DIFF_USERS' => 'Izvēlieties piešķiršanai citu lietotāju, kas nav piešķiramā ieraksta lietotājs',
  'ERR_REASS_SELECT_MODULE' => 'Atgriezieties un izvēlieties vismaz vienu moduli.',
  'ERR_RECIPIENT_EMAIL' => 'Saņēmēja e-pasts',
  'ERR_REENTER_PASSWORDS' => 'Jaunā parole un apstiprināšanas parole nesakrīt.',
  'ERR_REPORT_LOOP' => 'Konstatēta cilpa norādot tiešo vadītāju. Lietotājs nevar būt pats sev tiešais vadītājs.',
  'ERR_RULES_NOT_MET' => 'Ievadītā parole neatbilst paroles prasībām. Mēģiniet vēlreiz.',
  'ERR_SERVER_SMTP_EMPTY' => 'Sistēma nevar nosūtīt lietotājam e-pastu. Pārbaudiet izejošo e-pastu konfigurāciju <a href="index.php?module=EmailMan&action=config">E-pasta uzstādījumos</a>.',
  'ERR_SERVER_STATUS' => 'Jūsu servera statuss',
  'ERR_SMTP_URL_SMTP_PORT' => 'SMTP Servera URL un ports',
  'ERR_SMTP_USERNAME_SMTP_PASSWORD' => 'SMTP Lietotājvārds un SMTP parole',
  'ERR_USER_INFO_NOT_FOUND' => 'Lietotāja informācija nav atrasta',
  'ERR_USER_IS_LOCKED_OUT' => 'Lietotājs ir nobloķēts Sugar programmā un nevar pieteikties ar savu esošo paroli.',
  'ERR_USER_NAME_EXISTS_1' => 'Lietotāja vārds',
  'ERR_USER_NAME_EXISTS_2' => 'jau pastāv.	Vienādi lietotāja vārdi nav pieļaujami.	Mainiet lietotāja vārdu, lai tas būtu vienreizējs.',
  'LBL_ACCOUNT_NAME' => 'Konta nosaukums',
  'LBL_ADDRESS' => 'Adrese',
  'LBL_ADDRESS_CITY' => 'Pilsēta',
  'LBL_ADDRESS_COUNTRY' => 'Valsts',
  'LBL_ADDRESS_INFORMATION' => 'Adreses informācija',
  'LBL_ADDRESS_POSTALCODE' => 'Pasta indekss',
  'LBL_ADDRESS_STATE' => 'Novads',
  'LBL_ADDRESS_STREET' => 'Adrese',
  'LBL_ADDRESS_STREET_2' => 'Adrese 2',
  'LBL_ADDRESS_STREET_3' => 'Adrese 3',
  'LBL_ADMIN' => 'Administrators',
  'LBL_ADMIN_DESC' => 'Lietotājs var piekļūt administrēšanas sadaļai neatkarīgi no darba grupas tiesībām.',
  'LBL_ADMIN_USER' => 'Sistēmas administrators',
  'LBL_ADVANCED' => 'Paplašināts',
  'LBL_AFFECTED' => 'ietekmēts',
  'LBL_ANY_ADDRESS' => 'Jebkāda adrese:',
  'LBL_ANY_EMAIL' => 'Jebkāds e-pasts',
  'LBL_ANY_PHONE' => 'Jebkāds tālruņa numurs',
  'LBL_APPLY_OPTIMUMS' => 'Lietot optimālos iestatījumus',
  'LBL_ASSIGN_PRIVATE_TEAM' => '(saglabāt privātā grupā)',
  'LBL_ASSIGN_TEAM' => 'Piešķirt darba grupai',
  'LBL_ASSIGN_TO_USER' => 'Piešķirt lietotājam',
  'LBL_AUTHENTICATE_ID' => 'Autentifikācijas ID',
  'LBL_BASIC' => 'Ienākošā pasta iestatījumi',
  'LBL_BUTTON_CREATE' => 'Izveidot',
  'LBL_BUTTON_EDIT' => 'Rediģēt',
  'LBL_CALENDAR_OPTIONS' => 'Kalendāra opcijas',
  'LBL_CANCEL' => 'Atcelt',
  'LBL_CANNOT_SEND_PASSWORD' => 'Nevar nosūtīt paroli',
  'LBL_CERT' => 'Validēt sertifikātu',
  'LBL_CERT_DESC' => 'Pasta drošības sertifikāta piespiedu apstiprinājums - nelietojiet, ja notiek pašpieteikšanās.',
  'LBL_CHANGE_PASSWORD' => 'Mainīt ģenerēto paroli',
  'LBL_CHANGE_PASSWORD_TITLE' => 'Parole',
  'LBL_CHANGE_SYSTEM_PASSWORD' => 'Lūdzu norādiet jaunu paroli',
  'LBL_CHECKMARK' => 'Atzīme',
  'LBL_CHOOSE_A_KEY' => 'Lai nepieļautu neautorizētu Jūsu kalendāra publicēšanu, izvēlieties atslēgu',
  'LBL_CHOOSE_EMAIL_PROVIDER' => 'Izvēlieties e-pasta pakalpojumu sniedzēju:',
  'LBL_CHOOSE_WHICH' => 'Norādiet, kuri moduļi ir pieejami augšējā navigācijas joslā. Norādot vēlamo moduļu attēlošanas secību.',
  'LBL_CITY' => 'Pilsēta',
  'LBL_CLEAR_BUTTON_TITLE' => 'Dzēst',
  'LBL_CONFIRM_PASSWORD' => 'Apstiprināt paroli',
  'LBL_CONFIRM_REGULAR_USER' => 'Jūs nomainījāt lietotāja tipu no Sistēmas administrators uz Parasts lietotājs. Pēc šīs izmaiņas saglabāšanas lietotājam vairs nebūs sistēmas administratora tiesības.\\n\\n Spied OK, lai turpinātu.\\n Spied Atcelt, lai atgrieztos pie ieraksta.',
  'LBL_COUNTRY' => 'Valsts',
  'LBL_CREATED_BY_NAME' => 'Izveidoja',
  'LBL_CURRENCY' => 'Valūta',
  'LBL_CURRENCY_EXAMPLE' => 'Valūtas parādīšanas piemērs',
  'LBL_CURRENCY_SIG_DIGITS' => 'Valūtas zīmīgie cipari',
  'LBL_CURRENCY_SIG_DIGITS_DESC' => 'Valūtai rādāmās decimāldaļas precizitāte.',
  'LBL_CURRENCY_TEXT' => 'Norādiet valūtu, kas tiks norādīta pēc noklusējuma, veidojot jaunus ierakstus. Šajā valūtā tiks attēlotas arī darījuma iespēju summas sarakstā.',
  'LBL_DATE_ENTERED' => 'Ievadīšanas datums',
  'LBL_DATE_FORMAT' => 'Datuma formāts',
  'LBL_DATE_FORMAT_TEXT' => 'Iestatiet kalendārā zīmoga attēlošanas formātu',
  'LBL_DATE_MODIFIED' => 'Modificēts',
  'LBL_DECIMAL_SEP' => 'Decimālais simbols',
  'LBL_DECIMAL_SEP_TEXT' => 'Rakstzīmi, ko lieto decimālās daļas atdalīšanai',
  'LBL_DEFAULT_PRIMARY_TEAM' => 'Noklusētā primārā darba grupa',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Lietotāji',
  'LBL_DEFAULT_TEAM' => 'Noklusējuma darba grupa',
  'LBL_DEFAULT_TEAM_TEXT' => 'Noklusējuma darba grupa jauniem ierakstiem',
  'LBL_DELETED' => 'Dzēsts',
  'LBL_DELETE_GROUP_CONFIRM' => 'Vai tiešām vēlaties dzēst lietotāju?  Spiediet Labi lai dzēstu lietotāja ierakstu. Pēc apstiprināšanas tiks dota iespēja lietotāja ierakstus piešķirt citam lietotājam',
  'LBL_DELETE_PORTAL_CONFIRM' => 'Vai tiešām vēlaties dzēst portāla API lietotāju? Spiediet Labi lai dzēstu lietotāja ierakstu.',
  'LBL_DELETE_USER' => 'Dzēst lietotāju',
  'LBL_DELETE_USER_CONFIRM' => 'Ja tiek izdzēst lietotāja ieraksts, tad arī atbilstošā darbinieka kartiņa tiek dzēsta. Pēc lietotāja dzēšanas visās darbplūsmu definīcijās un atskaites, kur bija iesaistīts darbinieks, iespējams būs nepieciešams atjaunināt..<br/><br/>Lietotāja dzēšana ir neatgriezeniska darbība.',
  'LBL_DEPARTMENT' => 'Departaments',
  'LBL_DESCRIPTION' => 'Apraksts',
  'LBL_DISPLAY_TABS' => 'Rādīt cilnes',
  'LBL_DOWNLOADS' => 'Lejupielādes',
  'LBL_DST_INSTRUCTIONS' => '(+DST) norāda pārejas uz vasaras laiku rādījumu',
  'LBL_EAPM_SUBPANEL_TITLE' => 'Ārējais konts',
  'LBL_EDIT' => 'Rediģēt',
  'LBL_EDITLAYOUT' => 'Rediģēt izkārtojumu',
  'LBL_EDIT_TABS' => 'Izvēlēties moduļus navigācijas joslai',
  'LBL_EMAIL' => 'E-pasta adrese',
  'LBL_EMAILS' => 'E-pasti',
  'LBL_EMAIL_CHARSET' => 'Izsūtāmo e-pastu rakstzīmju kopa',
  'LBL_EMAIL_EDITOR_OPTION' => 'E-pasta redaktora formāts',
  'LBL_EMAIL_GMAIL_DEFAULTS' => 'Ierakstīt Gmail&#153; noklusētos datus',
  'LBL_EMAIL_INBOUND_TITLE' => 'Ienākošo e-pastu iestatījumi',
  'LBL_EMAIL_LINK_TYPE' => 'E-pasta klients',
  'LBL_EMAIL_LINK_TYPE_HELP' => '<b>Sugar e-pasta klients:</b> Sūtīt e-pastus ar e-pasta klientu no Sugar programmas.<br><b>Ārējais e-pasta klients:</b> Sūtīt e-pastu ar ārējo e-pasta klientu kas nav Sugar programmā, piemēram ar  Microsoft Outlook.',
  'LBL_EMAIL_NOT_SENT' => 'Sistēma nevar izpildīt jūsu pieprasījumu. Lūdzu sazinieties ar sistēmas administratoru',
  'LBL_EMAIL_OTHER' => '2. e-pasts',
  'LBL_EMAIL_OUTBOUND_TITLE' => 'Izejošo e-pastu iestatījumi',
  'LBL_EMAIL_PROVIDER' => 'E-pasta pakalpojumu sniedzējs',
  'LBL_EMAIL_SHOW_COUNTS' => 'Parādīt e-pastu skaitu?',
  'LBL_EMAIL_SIGNATURE_ERROR1' => 'Parakstam nepieciešams vārds.',
  'LBL_EMAIL_SMTP_SSL' => 'Atļaut SMTP pa SSL',
  'LBL_EMAIL_TEMPLATE_MISSING' => 'Nav norādīta e-pasta sagatave ar kuru lietotājiem tiks sūtīta lietotāja parole. Norādiet atbilstošo e-pasta sagatavi paroļu pārvaldības sadaļā.',
  'LBL_EMPLOYEE_INFORMATION' => 'Darbinieka informācija',
  'LBL_EMPLOYEE_STATUS' => 'Darbinieka statuss',
  'LBL_ERROR' => 'Kļūda',
  'LBL_EXCHANGE_SMTPPASS' => 'Exchange parole:',
  'LBL_EXCHANGE_SMTPPORT' => 'Exchange servera ports:',
  'LBL_EXCHANGE_SMTPSERVER' => 'Exchange Serveris:',
  'LBL_EXCHANGE_SMTPUSER' => 'Exchange lietotājvārds:',
  'LBL_EXPORT_CHARSET' => 'Importēšanas/eksportēšanas rakstzīmju kopa',
  'LBL_EXPORT_CHARSET_DESC' => 'Norādiet lokālā datorā lietojamo rakstzīmju kopu. Tā tiks lietota importējot datus, eksportējot .csv failus un ģenerējot vCard.',
  'LBL_EXPORT_CREATED_BY' => 'Izveidoja ID',
  'LBL_EXPORT_DELIMITER' => 'Eksporta faila atdalītājs',
  'LBL_EXPORT_DELIMITER_DESC' => 'Norādiet rakstzīmi/es, kuras izmantot eksportēto datu atdalīšanai.',
  'LBL_EXTERNAL_AUTH_ONLY' => 'Autorizēt lietotāju izmantojot tikai',
  'LBL_EXT_AUTHENTICATE' => 'Ārējā autentifikācija',
  'LBL_FAX' => 'Fakss',
  'LBL_FAX_PHONE' => 'Fakss',
  'LBL_FDOW' => 'Nedēļas pirmā diena',
  'LBL_FDOW_TEXT' => 'Nedēļas pirmā diena, kas redzama Nedēļu, Mēnešu un Gadu skatos',
  'LBL_FIND_OPTIMUM_KEY' => 'f',
  'LBL_FIND_OPTIMUM_MSG' => '</br>Meklē optimālās vērtības savienojumam.',
  'LBL_FIND_OPTIMUM_TITLE' => 'Atrast optimālu konfigurāciju',
  'LBL_FIRST_NAME' => 'Vārds',
  'LBL_FORCE' => 'Uzspiest negatīvo',
  'LBL_FORCE_DESC' => 'Dažiem IMAP/POP3 serveriem nepieciešami īpaši slēdži. Atzīmējiet lai pārbaudītu negatīvo slēdzi (t.i., /notls)',
  'LBL_FORECASTS' => 'Prognozes',
  'LBL_FOUND_OPTIMUM_MSG' => '<br>Optimālās vērtības atrastas.	Spiediet lai pielietotu atrastās vērtības e-pasta kontam.',
  'LBL_GENERATE_PASSWORD' => 'Atiestatīt paroli',
  'LBL_GENERATE_PASSWORD_BUTTON_KEY' => 'G',
  'LBL_GENERATE_PASSWORD_BUTTON_LABEL' => 'Atiestatīt paroli',
  'LBL_GENERATE_PASSWORD_BUTTON_TITLE' => 'Atiestatīt paroli',
  'LBL_GMAIL_SMTPPASS' => 'Gmail parole:',
  'LBL_GMAIL_SMTPUSER' => 'Gmail e-pasta adrese:`',
  'LBL_GROUP_DESC' => 'Izmantojiet lai piešķirtu ierakstus grupām (piemēram: Ienākošā e-pasta piešķiršanai).  Ar šo veidu nevar pieteikties caur Sugar web interfeisu.',
  'LBL_GROUP_USER' => 'Grupas lietotājs',
  'LBL_GROUP_USER_STATUS' => 'Grupas lietotājs',
  'LBL_HELP' => 'Palīdzība',
  'LBL_HIDEOPTIONS' => 'Slēpt opcijas',
  'LBL_HIDE_TABS' => 'Slēpt noduļus',
  'LBL_HOME_PHONE' => 'Mājas tālrunis',
  'LBL_ICAL_PUB_URL' => 'iCal integrācijas URL',
  'LBL_ICAL_PUB_URL_HELP' => 'Izmantojiet šo URL lai piekļūtu Sugar kalendāram no iCal.',
  'LBL_INBOUND_TITLE' => 'Konta informācija',
  'LBL_IS_ADMIN' => 'Administrators',
  'LBL_IS_GROUP' => 'Grupa',
  'LBL_LANGUAGE' => 'Valoda',
  'LBL_LAST_ADMIN_NOTICE' => 'Jūs izvēlējāties pats savu lietotāju. Jūs nevariet mainīt lietotāja tipu vai statusu savam lietotājam',
  'LBL_LAST_NAME' => 'Uzvārds',
  'LBL_LAST_NAME_SLASH_NAME' => 'Uzvārds/Vārds',
  'LBL_LAYOUT_OPTIONS' => 'Izkārtojuma opcijas',
  'LBL_LDAP' => 'LDAP',
  'LBL_LDAP_AUTHENTICATION' => 'LDAP Autentifikācija',
  'LBL_LDAP_ERROR' => 'LDAP kļūda: Sazinieties ar administratoru',
  'LBL_LDAP_EXTENSION_ERROR' => 'LDAP kļūda: Nav ielādēti paplašinājumi',
  'LBL_LIST_ACCEPT_STATUS' => 'Apstiprināt statusu',
  'LBL_LIST_ADMIN' => 'Administrators',
  'LBL_LIST_DEPARTMENT' => 'Departaments',
  'LBL_LIST_DESCRIPTION' => 'Apraksts',
  'LBL_LIST_EMAIL' => 'E-pasts',
  'LBL_LIST_FORM_TITLE' => 'Lietotāji',
  'LBL_LIST_GROUP' => 'Grupa',
  'LBL_LIST_LAST_NAME' => 'Uzvārds',
  'LBL_LIST_MEMBERSHIP' => 'Piederība',
  'LBL_LIST_NAME' => 'Vārds',
  'LBL_LIST_PASSWORD' => 'Parole',
  'LBL_LIST_PRIMARY_PHONE' => 'Primārais tālrunis',
  'LBL_LIST_STATUS' => 'Statuss',
  'LBL_LIST_TITLE' => 'Amats',
  'LBL_LIST_USER_NAME' => 'Lietotāja vārds',
  'LBL_LOCALE_DEFAULT_NAME_FORMAT' => 'Vārda attēlošanas formāts',
  'LBL_LOCALE_DESC_FIRST' => '[Vārds]',
  'LBL_LOCALE_DESC_LAST' => '[Uzvārds]',
  'LBL_LOCALE_DESC_SALUTATION' => '[Sveiciens]',
  'LBL_LOCALE_DESC_TITLE' => '[Amats]',
  'LBL_LOCALE_EXAMPLE_NAME_FORMAT' => 'Piemērs',
  'LBL_LOCALE_NAME_FORMAT_DESC' => 'Norādiet, kā tiks attēloti vārdi.',
  'LBL_LOCALE_NAME_FORMAT_DESC_2' => '<i>&#39;s&#39; Sveiciens</br>&#39;f&#39; Vārds</br>&#39;l&#39; Uzvārds</i>',
  'LBL_LOGGED_OUT_1' => 'Jūs esat izrakstīts no sistēmas. Lai atkal pieteiktos spiediet',
  'LBL_LOGGED_OUT_2' => 'šeit',
  'LBL_LOGGED_OUT_3' => '.',
  'LBL_LOGIN' => 'Lietotāja vārds',
  'LBL_LOGIN_ADMIN_CALL' => 'Sazinieties ar sistēmas administratoru',
  'LBL_LOGIN_ATTEMPTS_OVERRUN' => 'Pārāk daudz neveiksmīgu pieteikšanās mēģinājumu.',
  'LBL_LOGIN_BUTTON_KEY' => 'L',
  'LBL_LOGIN_BUTTON_LABEL' => 'Pieteikšanās',
  'LBL_LOGIN_BUTTON_TITLE' => 'Pieteikšanās',
  'LBL_LOGIN_FORGOT_PASSWORD' => 'Aizmirsāt paroli?',
  'LBL_LOGIN_LOGIN_TIME_ALLOWED' => 'Jūs variet mēģināt pieteikties atkal pēc',
  'LBL_LOGIN_LOGIN_TIME_DAYS' => 'dienām.',
  'LBL_LOGIN_LOGIN_TIME_HOURS' => 'st.',
  'LBL_LOGIN_LOGIN_TIME_MINUTES' => 'min.',
  'LBL_LOGIN_LOGIN_TIME_SECONDS' => 'sek.',
  'LBL_LOGIN_OPTIONS' => 'Opcijas',
  'LBL_LOGIN_SUBMIT' => 'Apstiprināt',
  'LBL_LOGIN_WELCOME_TO' => 'Sveicināts',
  'LBL_MAILBOX' => 'Kontrolēta mape',
  'LBL_MAILBOX_DEFAULT' => 'IESŪTNE',
  'LBL_MAILBOX_SSL_DESC' => 'Pieslēdzot, lietojiet SSL. Ja tas nedarbojas, pārbaudiet, vai Jūsu PHP instalācija konfigurācijā iekļāva "--ar-imap-ssl".',
  'LBL_MAILBOX_TYPE' => 'Iespējamās darbības',
  'LBL_MAILMERGE' => 'Pasta sapludināšana',
  'LBL_MAILMERGE_TEXT' => 'Atļaut pasta sapludināšanu (Administratoram pasta sapludināšana ir jāatļauj arī Sistēmas iestatījumos)',
  'LBL_MAIL_FROMADDRESS' => 'Atbildes adrese',
  'LBL_MAIL_FROMNAME' => 'Atbildes saņēmēja vārds',
  'LBL_MAIL_OPTIONS_TITLE' => 'E-pasta iestatījumi',
  'LBL_MAIL_SENDTYPE' => 'Pasta sūtīšanas aģents',
  'LBL_MAIL_SMTPAUTH_REQ' => 'Lietot SMTP autentifikāciju?',
  'LBL_MAIL_SMTPPASS' => 'SMTP parole:',
  'LBL_MAIL_SMTPPORT' => 'SMTP ports:',
  'LBL_MAIL_SMTPSERVER' => 'SMTP serveris:',
  'LBL_MAIL_SMTPTYPE' => 'SMTP Servera Tips:',
  'LBL_MAIL_SMTPUSER' => 'SMTP lietotāja vārds:',
  'LBL_MAIL_SMTP_SETTINGS' => 'SMTP Servera specifikācija',
  'LBL_MARK_READ' => 'Atstāt ziņojumus serverī',
  'LBL_MARK_READ_DESC' => 'Importēt un atzīmēt ziņas pasta serverī kā izlasītas; nedzēst.',
  'LBL_MARK_READ_NO' => 'Pēc importa e-pasts serverī atzīmēts kā dzēsts',
  'LBL_MARK_READ_YES' => 'Pēc importa e-pasts atstāts serverī',
  'LBL_MAX_SUBTAB' => 'Apakšciļņu skaits',
  'LBL_MAX_SUBTAB_DESCRIPTION' => 'Ciļņu skaits mko var attēlot pirms parādās pārpildīšanas izvēlne.',
  'LBL_MAX_TAB' => 'Maksimālais moduļu skaits',
  'LBL_MAX_TAB_DESCRIPTION' => 'Norādiet navigācijas joslā maksimāli redzamo moduļu skaitu. Attēlojamo moduļu skaits ir atkarīgs no pārlūka loga platuma. Moduļi kas netiks attēloto būs pieejami izvēlnē "vairāk".',
  'LBL_MESSENGER_ID' => 'IM vārds',
  'LBL_MESSENGER_TYPE' => 'IM veids',
  'LBL_MISSING_DEFAULT_OUTBOUND_SMTP_SETTINGS' => 'Administrators vēl nav nokonfigurējis izejošo kontu. Nevar nosūtīt testa e-pastu.',
  'LBL_MOBILE_PHONE' => 'Mobilais tālrunis',
  'LBL_MODIFIED_BY' => 'Modificēja',
  'LBL_MODIFIED_BY_ID' => 'Modificētāja ID',
  'LBL_MODIFIED_USER_ID' => 'Modificētāja ID',
  'LBL_MODULE_NAME' => 'Lietotāji',
  'LBL_MODULE_NAME_SINGULAR' => 'Lietotājs',
  'LBL_MODULE_TITLE' => 'Lietotāji',
  'LBL_MY_TEAMS' => 'Manas darba grupas',
  'LBL_NAME' => 'Pilns vārds',
  'LBL_NAVIGATION_PARADIGM' => 'Navigācija',
  'LBL_NAVIGATION_PARADIGM_DESCRIPTION' => 'Atzīmējiet lai atļautu attēlot moduļus navigācijas joslā izmantojot iepriekš definētās grupas',
  'LBL_NEW_FORM_TITLE' => 'Jauns lietotājs',
  'LBL_NEW_PASSWORD' => 'Jauna parole',
  'LBL_NEW_PASSWORD1' => 'Parole',
  'LBL_NEW_PASSWORD2' => 'Apstiprināt paroli',
  'LBL_NEW_USER_BUTTON_KEY' => 'N',
  'LBL_NEW_USER_BUTTON_LABEL' => 'Jauns lietotājs',
  'LBL_NEW_USER_BUTTON_TITLE' => 'Jauns lietotājs',
  'LBL_NEW_USER_PASSWORD_1' => 'Parole ir veiksmīgi nomainīta.',
  'LBL_NEW_USER_PASSWORD_2' => 'E-pasts ar sistēmas ģenerētu paroli ir nosūtīts lietotājam.',
  'LBL_NEW_USER_PASSWORD_3' => 'Parole ir veiksmīgi izveidota.',
  'LBL_NORMAL_LOGIN' => 'Pārslēgties uz normālo skatu',
  'LBL_NOTES' => 'Piezīmes',
  'LBL_NO_KEY' => 'Nav norādīta atslēga. Norādiet atslēgu lai iespējotu publicēšanu.',
  'LBL_NUMBER_GROUPING_SEP' => 'Tūkstošu atdalītājs',
  'LBL_NUMBER_GROUPING_SEP_TEXT' => 'Rakstzīme tūkstošu atdalīšanai',
  'LBL_OAUTH_TOKENS' => 'OAuth atslēgas',
  'LBL_OAUTH_TOKENS_SUBPANEL_TITLE' => 'OAuth piekļuves atslēgas',
  'LBL_OFFICE_PHONE' => 'Biroja tālrunis',
  'LBL_OK' => 'Labi',
  'LBL_OLD_PASSWORD' => 'Vecā parole',
  'LBL_ONLY' => 'Tikai',
  'LBL_ONLY_SINCE' => 'Importēt tikai kopš pēdējās pārbaudes:',
  'LBL_ONLY_SINCE_DESC' => 'Izmantojot POP3, PHP nevar atšķirt jaunu no neizlasīta ziņojuma.	Atzīmējiet šo karodziņu, lai skenētu ziņojumus kopš pēdējās pasta konta reģistrācijas.	Tādējādi var ievērojami uzlabot darbspēju, ja pasta serveris nevar atbalstīt IMAP.',
  'LBL_ONLY_SINCE_NO' => 'Nē. Pārbaudīt visus servera e-pastus.',
  'LBL_ONLY_SINCE_YES' => 'Jā.',
  'LBL_OTHER' => 'Cits',
  'LBL_OTHER_EMAIL' => 'Cita e-pasta adrese',
  'LBL_OTHER_PHONE' => 'Cits tālrunis',
  'LBL_OWN_OPPS' => 'Nav jaunu iespēju',
  'LBL_OWN_OPPS_DESC' => 'Atzīmējiet, ja lietotājam netiks piešķirtas pārdošanas iespējas. Šo pazīmi norādiet lietotājiem, kuri ir menedžeri un kuri nav iesaistīti pārdošanas aktivitātēs. Šis iestatījums tiks izmantots prognožu modulim.',
  'LBL_PASSWORD' => 'Parole',
  'LBL_PASSWORD_EXPIRATION_GENERATED' => 'Jums ir sistēmas ģenerēta parole',
  'LBL_PASSWORD_EXPIRATION_LOGIN' => 'Jūsu parolei beidzies derīguma termiņš. Lūdzu norādiet jaunu paroli',
  'LBL_PASSWORD_EXPIRATION_TIME' => 'Jūsu parolei beidzies derīguma termiņš. Lūdzu norādiet jaunu paroli',
  'LBL_PASSWORD_GENERATED' => 'Noģenerēta jauna parole',
  'LBL_PASSWORD_SENT' => 'Parole atjaunota',
  'LBL_PDF_FONT_NAME_DATA' => 'Kājenes fonts',
  'LBL_PDF_FONT_NAME_DATA_TEXT' => 'Izvēlētais fonts tiks lietots PDF teksta kājenē',
  'LBL_PDF_FONT_NAME_MAIN' => 'Fonts PDF galvenei un ķermenim',
  'LBL_PDF_FONT_NAME_MAIN_TEXT' => 'Izvēlētais fonts tiks lietots PDF teksta galvenē un ķermenī.',
  'LBL_PDF_FONT_SIZE_DATA' => 'Datu fonta izmērs',
  'LBL_PDF_FONT_SIZE_DATA_TEXT' => '',
  'LBL_PDF_FONT_SIZE_MAIN' => 'Pamata fonta izmērs',
  'LBL_PDF_FONT_SIZE_MAIN_TEXT' => '',
  'LBL_PDF_MARGIN_BOTTOM' => 'Apakšējā mala',
  'LBL_PDF_MARGIN_BOTTOM_TEXT' => '',
  'LBL_PDF_MARGIN_FOOTER' => 'Kājenes mala',
  'LBL_PDF_MARGIN_FOOTER_TEXT' => '',
  'LBL_PDF_MARGIN_HEADER' => 'Galvenes mala',
  'LBL_PDF_MARGIN_HEADER_TEXT' => '',
  'LBL_PDF_MARGIN_LEFT' => 'Kreisā mala',
  'LBL_PDF_MARGIN_LEFT_TEXT' => '',
  'LBL_PDF_MARGIN_RIGHT' => 'Labā mala',
  'LBL_PDF_MARGIN_RIGHT_TEXT' => '',
  'LBL_PDF_MARGIN_TOP' => 'Augšējā mala',
  'LBL_PDF_MARGIN_TOP_TEXT' => '',
  'LBL_PDF_PAGE_FORMAT' => 'Lapas formāts',
  'LBL_PDF_PAGE_FORMAT_TEXT' => 'Lapām izmantotais formāts',
  'LBL_PDF_PAGE_ORIENTATION' => 'Lapas',
  'LBL_PDF_PAGE_ORIENTATION_L' => 'Ainava',
  'LBL_PDF_PAGE_ORIENTATION_P' => 'Portrets',
  'LBL_PDF_PAGE_ORIENTATION_TEXT' => '',
  'LBL_PDF_SETTINGS' => 'PDF Uzstādījumi',
  'LBL_PHONE' => 'Tālrunis',
  'LBL_PHONE_FAX' => 'Fakss',
  'LBL_PHONE_HOME' => 'Mājas tālrunis',
  'LBL_PHONE_MOBILE' => 'Mobilais tālrunis',
  'LBL_PHONE_OTHER' => 'Cits tālrunis',
  'LBL_PHONE_WORK' => 'Darba tālrunis',
  'LBL_PICK_TZ_DESCRIPTION' => 'Pirms turpināt, apstipriniet savu laika zonu.  Izvēlieties atbilstošo laika zonu no saraksta un spiediet "Saglabāt". Laika zonu var mainīt jebkurā brīdī, izmantojot "Mans konts".',
  'LBL_PICK_TZ_WELCOME' => 'Sveicināts "Sugar" programmā!',
  'LBL_PICTURE_FILE' => 'Attēls',
  'LBL_PORT' => 'Pasta servera ports',
  'LBL_PORTAL_ONLY' => 'Tikai portāla lietotājs',
  'LBL_PORTAL_ONLY_DESC' => 'Izmantojama tikai portā API. Ar šo tipu nevar pieteikties izmantojot Sugar pārlūka interfeisu.',
  'LBL_PORTAL_ONLY_USER' => 'Portāla API lietotājs',
  'LBL_POSTAL_CODE' => 'Pasta indekss',
  'LBL_PRIMARY_ADDRESS' => 'Primārā adrese',
  'LBL_PRIVATE_TEAM_FOR' => 'Privātā darba grupa',
  'LBL_PROCESSING' => 'Apstrāde',
  'LBL_PROMPT_TIMEZONE' => 'Jauna lietotāja vedņa aktivēšana',
  'LBL_PROMPT_TIMEZONE_TEXT' => 'Atzīmējies lai lietotājiem pie pirmās pieteikšanās parādās Jaunā lietotāj vednis',
  'LBL_PROSPECT_LIST' => 'Prospektu saraksts',
  'LBL_PROVIDE_USERNAME_AND_EMAIL' => 'Norādiet lietotājvārdu un e-pasta adresi.',
  'LBL_PSW_MODIFIED' => 'Parole pēdējoreiz mainīta',
  'LBL_PUBLISH_KEY' => 'Publicēšanas taustiņš',
  'LBL_QUOTAS' => 'Kvotas',
  'LBL_REASS_ASSESSING' => 'Piekļuve',
  'LBL_REASS_BUTTON_CLEAR' => 'Dzēst',
  'LBL_REASS_BUTTON_CONTINUE' => 'Turpināt',
  'LBL_REASS_BUTTON_GO_BACK' => 'Atgriezties',
  'LBL_REASS_BUTTON_REASSIGN' => 'Pārpiešķiršana',
  'LBL_REASS_BUTTON_RESTART' => 'Restartēt',
  'LBL_REASS_BUTTON_RETURN' => 'Atgriezties',
  'LBL_REASS_BUTTON_SUBMIT' => 'Iesniegt',
  'LBL_REASS_CANNOT_PROCESS' => 'nevar tikt izpildīts:',
  'LBL_REASS_CONFIRM_REASSIGN' => 'Vai vēlaties pārvietot visus šā lietotāja ierakstus?',
  'LBL_REASS_CONFIRM_REASSIGN_NO' => 'Nē',
  'LBL_REASS_CONFIRM_REASSIGN_TITLE' => 'Pārpiešķirt',
  'LBL_REASS_CONFIRM_REASSIGN_YES' => 'Jā',
  'LBL_REASS_DESC_PART1' => 'Atzīmējies moduļus, kuros ir ieraksti, kas tiks pārcelti no viena lietotāja otram . <br/><br/><br />                                                            Spiediet Turpināt lai redzētu ierakstu skaitu kas tiks mainīti katrā modulī.<br />                                                            Spiediet Atcelt lai izietu no lapas bez ierakstu pārcelšanas.',
  'LBL_REASS_DESC_PART2' => 'Atzīmējiet moduļus attiecībā uz kuriem darbināt darbplūsmas, nosūtiet piešķiršanas paziņojumus un veiciet auditēšanu piešķiršanas procesa laikā. Spiediet Pārstartēt lai sāktu no jauna.',
  'LBL_REASS_FAILED' => 'Neveiksmīgi',
  'LBL_REASS_FAILED_SAVE' => 'Neizdodas saglabāt ierakstu',
  'LBL_REASS_FILTERS' => 'Filtri',
  'LBL_REASS_FROM' => 'no',
  'LBL_REASS_HAVE_BEEN_UPDATED' => 'ir atjaunots:',
  'LBL_REASS_MOD_REASSIGN' => 'Pārvietošanas procesā iesaistītie moduļi:',
  'LBL_REASS_NONE' => 'Neviens',
  'LBL_REASS_NOTES_ONE' => 'Darabplūsmu darbināšana ievērojami palēnina piešķiršanas procesu.',
  'LBL_REASS_NOTES_THREE' => 'Ierakstu piešķiršana pašam sev neizsauc piešķiršanas notifikācijas.',
  'LBL_REASS_NOTES_TITLE' => 'Piezīmes:',
  'LBL_REASS_NOTES_TWO' => 'Pat ja netiek izvēlēta auditēšana, modificēšanas datuma un modificētāj lauki tik un tā ierakstos tiks atbilstoši atjaunināti',
  'LBL_REASS_NOT_PROCESSED' => 'nevarēja apstrādāt:',
  'LBL_REASS_RECORDS_FROM' => 'ieraksti no',
  'LBL_REASS_SCRIPT_TITLE' => 'Ierakstu pārvietošana',
  'LBL_REASS_STEP2_DESC' => 'Zemāk redzamas darba grupas bija pieejamas izejošo lietotāju darba grupā, bet nav mērķa lietotāju darba grupā. Visi ieraksti no izejošām darba grupām nebūs pieejami lietotājiem mērķa darba grupā kamēr darba grupu vērtības netiks nokartētas.',
  'LBL_REASS_STEP2_TITLE' => 'Darba grupas pārvietošana',
  'LBL_REASS_SUCCESSFUL' => 'Veiksmīgi',
  'LBL_REASS_SUCCESS_ASSIGN' => 'Veiksmīgi piešķirts',
  'LBL_REASS_TEAMS_GOOD_MSG' => 'Lietotājam ir pieeja visām piešķirtā lietotāja darba grupām. Kartēšana nav nepieciešama. Pāriešana uz nākamo lapu pēc 5 sekundēm.',
  'LBL_REASS_TEAM_NO_CHANGE' => '-- Nav izmaiņu',
  'LBL_REASS_TEAM_SET_TO' => 'un darba grupa tika sagatavota',
  'LBL_REASS_TEAM_TO' => 'Iestatiet darba grupu uz:',
  'LBL_REASS_THE_FOLLOWING' => 'Sekojošais',
  'LBL_REASS_TO' => 'uz',
  'LBL_REASS_UPDATE_COMPLETE' => 'Atjaunošana ir pabeigta',
  'LBL_REASS_USER_FROM' => 'No lietotāja:',
  'LBL_REASS_USER_FROM_TEAM' => 'No lietotāja darba grupas:',
  'LBL_REASS_USER_TO' => 'Lietotājam:',
  'LBL_REASS_USER_TO_TEAM' => 'Lietotāja darba grupai:',
  'LBL_REASS_VERBOSE_HELP' => 'Atzīmējiet lai redzētu detalizētu informāciju par pārpiešķiršanas uzdevumiem, kuros ir iesaistītas darbplūsmas',
  'LBL_REASS_VERBOSE_OUTPUT' => 'Runīga izvade',
  'LBL_REASS_WILL_BE_UPDATED' => 'tiks atjaunota.',
  'LBL_REASS_WORK_NOTIF_AUDIT' => 'Iekļaujiet darba plūsmu/notifikācijas/auditu (ievērojami lēnāk)',
  'LBL_RECAPTCHA_FILL_FIELD' => 'Ievadiet attēlā redzamo tekstu.',
  'LBL_RECAPTCHA_IMAGE' => 'Pārslēgties uz attēlu',
  'LBL_RECAPTCHA_INSTRUCTION' => 'Zemāk ievadiet divus vārdus',
  'LBL_RECAPTCHA_INSTRUCTION_OPPOSITE' => 'Ievadiet divu vārdus labā pusē',
  'LBL_RECAPTCHA_INVALID_PRIVATE_KEY' => 'Nederīga Recaptcha privātā atslēga',
  'LBL_RECAPTCHA_INVALID_REQUEST_COOKIE' => 'Pārbaudes parametrs lai verificētu Recaptcha skriptu nav pareizs.',
  'LBL_RECAPTCHA_NEW_CAPTCHA' => 'Iegūt citu CAPTCHA',
  'LBL_RECAPTCHA_SOUND' => 'Pārslēgties uz skaņu',
  'LBL_RECAPTCHA_UNKNOWN' => 'Nezināma Recaptcha kļūda',
  'LBL_RECEIVE_NOTIFICATIONS' => 'Paziņot pēc piešķiršanas',
  'LBL_RECEIVE_NOTIFICATIONS_TEXT' => 'Saņemiet e-pasta notifikāciju, kad jums tiek piešķirts ieraksts.',
  'LBL_REGISTER' => 'Esi jauns lietotājs? Lūdzu reģistrējies',
  'LBL_REGULAR_DESC' => 'Lietotājam ir pieeja moduļiem un ierakstiem atbilstoši dara grupas tiesībām un lomām.',
  'LBL_REGULAR_USER' => 'Parasts lietotājs',
  'LBL_REMINDER' => 'Atgādinātāji',
  'LBL_REMINDER_EMAIL' => 'E-pasts',
  'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'E-pasts visiem dalībniekiem',
  'LBL_REMINDER_POPUP' => 'Uznirstošais atgādinājums',
  'LBL_REMINDER_TEXT' => 'Izveidot gaidāmo zvanu vai tikšanos atgādinātāju. Iznirstošie atgādinājumi parādās visiem Sugar lietotājiem. E-pasta atgādījumi tiek sūtīti visiem uzaicinātajiem.',
  'LBL_REMOVED_TABS' => 'Administrēšana noņemt cilnes',
  'LBL_REPORTS_TO' => 'Vadītājs',
  'LBL_REPORTS_TO_ID' => 'Vadītāja ID:',
  'LBL_REPORTS_TO_NAME' => 'Vadītājs',
  'LBL_REQUEST_SUBMIT' => 'Jūsu pieprasījumu ir nosūtīts.',
  'LBL_RESET_DASHBOARD' => 'Atiestatīt instrumentu paneli',
  'LBL_RESET_HOMEPAGE' => 'Atiestatīt sākumlapu',
  'LBL_RESET_HOMEPAGE_WARNING' => 'Vai tiešām vēlaties atiestatīt sākumlapu?',
  'LBL_RESET_HOMEPAGE_WARNING_USER' => 'Vai tiešām vēlaties atiestatīt sākumlapu šim lietotājam?',
  'LBL_RESET_PREFERENCES' => 'Atcelt lietotāja izvēles',
  'LBL_RESET_PREFERENCES_WARNING' => 'Vai tiešām vēlaties atiestatīt visas lietotāja uzstādījumu izvēles? Brīdinājums: Ar šo jūs tiksiet izrakstīts arī no lietojumprogrammas.',
  'LBL_RESET_PREFERENCES_WARNING_USER' => 'Vai tiešām vēlaties atcelt visas lietotāja uzstādījumu izvēles?',
  'LBL_RESET_TO_DEFAULT' => 'Atiestatīt uz noklusējuma',
  'LBL_RESOURCE_NAME' => 'Nosaukums',
  'LBL_RESOURCE_TYPE' => 'Veids',
  'LBL_ROLES_SUBPANEL_TITLE' => 'Lomas',
  'LBL_SALUTATION' => 'Sveiciens',
  'LBL_SAVED_SEARCH' => 'Saglabātas meklēšanas & izkārtojumi',
  'LBL_SEARCH_FORM_TITLE' => 'Lietotāja meklēšana',
  'LBL_SEARCH_URL' => 'Meklēšanas atrašanās vieta',
  'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Izvēlieties atzīmētos lietotājus',
  'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Izvēlieties atzīmētos lietotājus',
  'LBL_SERVER_OPTIONS' => 'Paplašinātā uzstādīšana',
  'LBL_SERVER_TYPE' => 'Pasta servera protokols',
  'LBL_SERVER_URL' => 'Pasta servera adrese',
  'LBL_SESSION_EXPIRED' => 'Jūs esat izrakstīts no sistēmas, jo sesija ir beigusies',
  'LBL_SETTINGS_URL' => 'URL',
  'LBL_SETTINGS_URL_DESC' => 'Izmantojiet šo URL, kad veidojiet pieteikšanās iestatījumus "Microsoft"&reg; "Outlook"&reg; "Sugar" spraudnim un "Microsoft"&reg; "Word"&reg; "Sugar" spraudnim.',
  'LBL_SHOWOPTIONS' => 'Rādīt opcijas',
  'LBL_SHOW_ON_EMPLOYEES' => 'Rādīt darbinieka ierakstu',
  'LBL_SIGNATURE' => 'Paraksts',
  'LBL_SIGNATURES' => 'Paraksti',
  'LBL_SIGNATURE_DEFAULT' => 'Lietot parakstu?',
  'LBL_SIGNATURE_HTML' => 'HTML paraksts',
  'LBL_SIGNATURE_NAME' => 'Vārds',
  'LBL_SIGNATURE_PREPEND' => 'Paraksts virs atbildes?',
  'LBL_SMTP_SERVER_HELP' => 'Šis SMTP pasta serveris var tikt izmantots izejošam pastam. Lai to izmantotu norādiet paroli un lietotājvārdu savam e-pasta kontam.',
  'LBL_SSL' => 'Lietojiet SSL',
  'LBL_SSL_DESC' => 'Lietot SSL (Secure Socket Layer), kad notiek pieslēgšanās e-pasta serverim.',
  'LBL_STATE' => 'Novads',
  'LBL_STATUS' => 'Statuss',
  'LBL_SUBPANEL_LINKS' => 'Apakšpaneļa saites',
  'LBL_SUBPANEL_LINKS_DESCRIPTION' => 'Detalizētajā skatā parādās apakšpaneļa īsinājumikonu saišu rinda.',
  'LBL_SUBPANEL_TABS' => 'Apakšpaneļa cilnes',
  'LBL_SUBPANEL_TABS_DESCRIPTION' => 'Detalizētajā skatā apakšpaneļus grupēt cilnēs un  vienlaicīgi rādīt tikai vienu cilni.',
  'LBL_SUGAR_LOGIN' => 'Ir "Sugar" lietotājs',
  'LBL_SUPPORTED_THEME_ONLY' => 'Ietekmē tikai tās tēmas, kas atbalsta šo opciju.',
  'LBL_SWAP_LAST_VIEWED_DESCRIPTION' => 'Ja atzīmēta, rāda pēdējo apskatīto sānu joslā.  Citādi augšpusē.',
  'LBL_SWAP_LAST_VIEWED_POSITION' => 'Pēdējā apskatītā sānos',
  'LBL_SWAP_SHORTCUT_DESCRIPTION' => 'Ja ir atzīmēta, augšpusē parāda īsinājumikonu joslu.  Citādi tā ir sānos.',
  'LBL_SWAP_SHORTCUT_POSITION' => 'Īsinājumikonas augšpusē',
  'LBL_SYSTEM_GENERATED_PASSWORD' => 'Sistēmas ģenerēta parole',
  'LBL_TAB_TITLE_EMAIL' => 'E-pasta iestatījumi',
  'LBL_TAB_TITLE_USER' => 'Lietotāja iestatījumi',
  'LBL_TEAMS' => 'Darba grupas',
  'LBL_TEAM_MEMBERSHIP' => 'Piederība darba grupai',
  'LBL_TEAM_SET' => 'Darba grupu kopa',
  'LBL_TEAM_UPLINE' => 'Biedra tiešais vadītājs',
  'LBL_TEAM_UPLINE_EXPLICIT' => 'Biedrs',
  'LBL_TEST_BUTTON_KEY' => 't',
  'LBL_TEST_BUTTON_TITLE' => 'Tests',
  'LBL_TEST_SETTINGS' => 'Uzstādījumu tests',
  'LBL_TEST_SUCCESSFUL' => 'Pieslēgums ir veiksmīgi pabeigts.',
  'LBL_THEME' => 'Tēmas',
  'LBL_THEMEPREVIEW' => 'Priekšapskate',
  'LBL_THEME_COLOR' => 'Krāsa',
  'LBL_THEME_FONT' => 'Fonts',
  'LBL_TIMEZONE' => 'Laika zona',
  'LBL_TIMEZONE_DST' => 'Pāreja uz vasaras laiku',
  'LBL_TIMEZONE_DST_TEXT' => 'Pārbaudiet vasaras laika iestatījumu',
  'LBL_TIMEZONE_TEXT' => 'Iestatiet esošo laika zonu',
  'LBL_TIME_FORMAT' => 'Laika formāts',
  'LBL_TIME_FORMAT_TEXT' => 'Iestatiet laikspiedola attēlošanas formātu',
  'LBL_TITLE' => 'Amats',
  'LBL_TLS' => 'Lietot TLS',
  'LBL_TLS_DESC' => 'Kad pieslēdzaties pasta serverim, izmantojiet Transport Layer Security (TSL) - lietojiet tikai tad, ja pasta serveris atbalsta šo protokolu.',
  'LBL_TOGGLE_ADV' => 'Parādīt paplašināto',
  'LBL_TOO_MANY_CONCURRENT' => 'Sesija ir beigusies, jo ir uzsākta cita sesija ar tādu pašu lietotājvārdu',
  'LBL_UPDATE_FINISH' => 'Atjaunināšana pabeigta',
  'LBL_USER' => 'Lietotāji',
  'LBL_USER_ACCESS' => 'Piekļuve',
  'LBL_USER_HASH' => 'Parole',
  'LBL_USER_HOLIDAY_SUBPANEL_TITLE' => 'Lietotāja brīvdienas',
  'LBL_USER_INFORMATION' => 'Lietotāja profils',
  'LBL_USER_LOCALE' => 'Lokālie iestatījumi',
  'LBL_USER_NAME' => 'Lietotāja vārds',
  'LBL_USER_NAME_FOR_ROLE' => 'Lietotāji/Darba grupas/Lomas',
  'LBL_USER_PREFERENCES' => 'Lietotāja preferences',
  'LBL_USER_SETTINGS' => 'Lietotāja iestatījumi',
  'LBL_USER_TYPE' => 'Lietotāja tips',
  'LBL_USE_GROUP_TABS' => 'Grupētie moduļi',
  'LBL_USE_REAL_NAMES' => 'Rādīt pilnus vārdus',
  'LBL_USE_REAL_NAMES_DESC' => 'Parādīt lietotāja pilnu vārdu, nevis pieteikšanās vārdu piešķires laukos.',
  'LBL_WIZARD_BACK_BUTTON' => '< Atpakaļ',
  'LBL_WIZARD_FINISH' => 'Spiediet <b>Pabeigt</b> lai saglabātu uzstādījumus un sāktu lietot Sugar. Papildus informācijai lietotjiet Sugar:<br /><br /><br /><table cellpadding=0 cellspacing=0><br /><tr><td><!--not_in_theme!--><img src=include/images/university.png style="margin-right: 5px;"></td><td><a href="http://www.sugarcrm.com/university" target="_blank"><b>Sugar University</b></a><br>Gala lietotāja un sistēmas administratora mācību resursi</td></tr><br /><tr><td colspan=2><hr style="margin: 5px 0px;"></td></tr><br /><tr><td><!--not_in_theme!--><img src=include/images/docs.png style="margin-right: 5px;"></td><td><a href="http://docs.sugarcrm.com/" target="_blank"><b>Dokumentācija</b></a><br>Lietošanas instrukcijas un laidienu piezīmes</td></tr><br /><tr><td colspan=2><hr style="margin: 5px 0px;"></td></tr><br /><tr><td><!--not_in_theme!--><img src=include/images/kb.png style="margin-right: 5px;"></td><td><a href="http://kb.sugarcrm.com/" target="_blank"><b>Knowledge Base</b></a><br>Ieteikumi no  SugarCRM atbalsta ikdienas darbu un procesu veikšanai Sugar sistēmā</td></tr><br /><tr><td colspan=2><hr style="margin: 5px 0px;"></td></tr><br /><tr><td><!--not_in_theme!--><img src=include/images/forums.png style="margin-right: 5px;"></td><td><a href="http://www.sugarcrm.com/forums" target="_blank"><b>Forums</b></a><br>Sugar brālībai domāti forumi lai par interesējošiem jautājumiem diskutētu savā starpā un ar SugarCRM izstrādātājiem</td></tr><br /></table>',
  'LBL_WIZARD_FINISH1' => 'Ko jūs vēlāties darīt tālāk?',
  'LBL_WIZARD_FINISH10' => 'Lietojiet Studio lai veidotu un pārvaldītu programmas laukus un izkārtojumus.',
  'LBL_WIZARD_FINISH11' => 'Apmeklēt Sugar University',
  'LBL_WIZARD_FINISH12' => 'Meklēt mācību materiālus un kursus, kas palīdzēs jums sākt darbu kā sistēmas administratoram vai programmas lietotājam.',
  'LBL_WIZARD_FINISH14' => 'Dokumentācija',
  'LBL_WIZARD_FINISH15' => 'Lietošanas instrukcijas un laidienu piezīmes',
  'LBL_WIZARD_FINISH16' => 'Zināšanu bāze',
  'LBL_WIZARD_FINISH17' => 'Ieteikumi no SugarCRM atbalsta biezāk lietoto uzdevumu un procesu veikšanai Sugar',
  'LBL_WIZARD_FINISH18' => 'Forums',
  'LBL_WIZARD_FINISH19' => 'Sugar brālībai domāti forumi lai par interesējošiem jautājumiem diskutētu savā starpā un ar SugarCRM izstrādātājiem',
  'LBL_WIZARD_FINISH2' => 'Sākt lietot Sugar',
  'LBL_WIZARD_FINISH2DESC' => 'Doties tieši un programmas sākuma lapu',
  'LBL_WIZARD_FINISH3' => 'Importēt datus',
  'LBL_WIZARD_FINISH4' => 'Datu imports programmā no ārējiem avotiem',
  'LBL_WIZARD_FINISH5' => 'Veidot lietotājus',
  'LBL_WIZARD_FINISH6' => 'Vedot jaunus lietotāju kontus cilvēkiem kam būs pieeja programmai.',
  'LBL_WIZARD_FINISH7' => 'Apskatīti un pārvaldīt programmas uzstādījumus',
  'LBL_WIZARD_FINISH8' => 'Pārvaldīt paplašinātos uzstādījumus, tai skaitā noklusētos programmas uzstādījumus.',
  'LBL_WIZARD_FINISH9' => 'Konfigurēt programmu',
  'LBL_WIZARD_FINISH_BUTTON' => 'Pabeigt',
  'LBL_WIZARD_FINISH_TAB' => 'Pabeigt',
  'LBL_WIZARD_FINISH_TITLE' => 'Esat gatavs Sugar lietošanai!',
  'LBL_WIZARD_LOCALE' => 'Jūsu lokālie iestatījumi',
  'LBL_WIZARD_LOCALE_DESC' => 'Norādiet savu laika zonu un kā vēlaties lai Sugar attēlo datumus, valūtas un vārdus.',
  'LBL_WIZARD_NEXT_BUTTON' => 'Tālāk >',
  'LBL_WIZARD_PERSONALINFO' => 'Jūsu informācija',
  'LBL_WIZARD_PERSONALINFO_DESC' => 'Norādiet informāciju par sevi. Par jums norādītā informācija būs redzama citiem Sugar lietotājiem.<br />Lauki kas apzīmēti ar <span class="required">*</span> ir obligāti.',
  'LBL_WIZARD_SKIP_BUTTON' => 'Izlaist',
  'LBL_WIZARD_SMTP' => 'Jūsu e-pasta konts',
  'LBL_WIZARD_SMTP_DESC' => 'Norādiet savu e-pasta konta lietotājvārdu un paroli noklusētajam izejošā e-pasta serverim',
  'LBL_WIZARD_TITLE' => 'Lietotāja vednis',
  'LBL_WIZARD_WELCOME' => 'Spied <b>Tālāk</b>  lai konfigurētu dažus pamata uzstādījumus Sugar lietošanai.',
  'LBL_WIZARD_WELCOME_NOSMTP' => 'Spied <b>Tālāk</b>  lai konfigurētu dažus pamata uzstādījumus Sugar lietošanai.',
  'LBL_WIZARD_WELCOME_TAB' => 'Sveiki',
  'LBL_WIZARD_WELCOME_TITLE' => 'Laipni lūgts Sugar!',
  'LBL_WORKSHEETS' => 'Darblapas',
  'LBL_WORK_PHONE' => 'Darba tālrunis',
  'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! Pasta parole:',
  'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! Pasta ID:',
  'LBL_YOUR_PUBLISH_URL' => 'Publicēt manā atrašanās vietā',
  'LBL_YOUR_QUERY_URL' => 'Jūsu vaicājuma URL',
  'LNK_EDIT_TABS' => 'Rediģēt cilnes',
  'LNK_IMPORT_USERS' => 'Importēt lietotājus',
  'LNK_NEW_GROUP_USER' => 'Izveidot grupas lietotāju',
  'LNK_NEW_PORTAL_USER' => 'Izveidot portāla API lietotāju',
  'LNK_NEW_USER' => 'Izveidot jaunu lietotāju',
  'LNK_REASSIGN_RECORDS' => 'Atkārtoti piešķirt ierakstus',
  'LNK_USER_LIST' => 'Lietotāji',
  'NTC_REMOVE_TEAM_MEMBER_CONFIRMATION' => 'Vai tiešām vēlaties dzēst šā lietotāja/u piederību darba grupai?',
);

