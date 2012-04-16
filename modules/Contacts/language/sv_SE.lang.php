<?php

/*********************************************************************************
 * The contents of this file are subject to the SugarCRM Master Subscription
 * Agreement ("License") which can be viewed at
 * http://www.sugarcrm.com/crm/master-subscription-agreement
 * By installing or using this file, You have unconditionally agreed to the
 * terms and conditions of the License, and You may not use this file except in
 * compliance with the License.  Under the terms of the license, You shall not,
 * among other things: 1) sublicense, resell, rent, lease, redistribute, assign
 * or otherwise transfer Your rights to the Software, and 2) use the Software
 * for timesharing or service bureau purposes such as hosting the Software for
 * commercial gain and/or for the benefit of a third party.  Use of the Software
 * may be subject to applicable fees and any use of the Software without first
 * paying applicable fees is strictly prohibited.  You do not have the right to
 * remove SugarCRM copyrights from the source code or user interface.
 *
 * All copies of the Covered Code must include on each user interface screen:
 *  (i) the "Powered by SugarCRM" logo and
 *  (ii) the SugarCRM copyright notice
 * in the same form as they appear in the distribution.  See full license for
 * requirements.
 *
 * Your Warranty, Limitations of liability and Indemnity are expressly stated
 * in the License.  Please refer to the License for the specific language
 * governing these rights and limitations under the License.  Portions created
 * by SugarCRM are Copyright (C) 2004-2012 SugarCRM, Inc.; All Rights Reserved.
 ********************************************************************************/





if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


	
$mod_strings = array (
  'LBL_ALT_ADDRESS' => 'Annan adress:',
  'LBL_EMPTY_VCARD' => 'Vänligen välj vCard fil',
  'LBL_STREET' => 'Gata',
  'LBL_PROSPECT_LIST' => 'Prospek lista',
  'LBL_OPPORTUNITIES' => 'Affärsmöjligheter',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakter',
  'LBL_PROJECT_SUBPANEL_TITLE' => 'Projekt',
  'LBL_CAMPAIGNS_SUBPANEL_TITLE' => 'Kampanjer',
  'LNK_IMPORT_CONTACTS' => 'Importera kontakter',
  'db_last_name' => 'LBL_LIST_LAST_NAME',
  'db_first_name' => 'LBL_LIST_FIRST_NAME',
  'db_title' => 'LBL_LIST_TITLE',
  'db_email1' => 'LBL_LIST_EMAIL_ADDRESS',
  'db_email2' => 'LBL_LIST_OTHER_EMAIL_ADDRESS',
  'LBL_FAX_PHONE' => 'Fax:',
  'LBL_ID' => 'ID:',
  'LBL_VCARD' => 'vCard',
  'LBL_TEAM_ID' => 'Team ID:',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Leads',
  'LNK_CONTACT_REPORTS' => 'Kontaktrapporter',
  'ERR_DELETE_RECORD' => 'Ett objektnummer måste specificeras för att kunna radera kontakten.',
  'LBL_ACCOUNT_ID' => 'Organisations ID:',
  'LBL_ACCOUNT_NAME' => 'Organisationsnamn:',
  'LBL_CAMPAIGN' => 'Kampanj:',
  'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktiviteter',
  'LBL_ADD_BUSINESSCARD' => 'Lägg till visitkort',
  'LBL_ADDMORE_BUSINESSCARD' => 'Lägg till ytterligare visitkort',
  'LBL_ADDRESS_INFORMATION' => 'Adressinformation',
  'LBL_ALT_ADDRESS_CITY' => 'Alternativ adress stad:',
  'LBL_ALT_ADDRESS_COUNTRY' => 'Alternativ adress land:',
  'LBL_ALT_ADDRESS_POSTALCODE' => 'Alternativ adress postnummer:',
  'LBL_ALT_ADDRESS_STATE' => 'Alternativ adress stat:',
  'LBL_ALT_ADDRESS_STREET_2' => 'Alternativ adress gata 2:',
  'LBL_ALT_ADDRESS_STREET_3' => 'Alterantiv adress gata 3:',
  'LBL_ALT_ADDRESS_STREET' => 'Alternativ adress gata:',
  'LBL_ALTERNATE_ADDRESS' => 'Annan adress:',
  'LBL_ANY_ADDRESS' => 'Någon adress:',
  'LBL_ANY_EMAIL' => 'Någon epost:',
  'LBL_ANY_PHONE' => 'Någon telefon:',
  'LBL_ASSIGNED_TO_NAME' => 'Tilldelad till:',
  'LBL_ASSIGNED_TO_ID' => 'Tilldelad användare',
  'LBL_ASSISTANT_PHONE' => 'Assistents telefon:',
  'LBL_ASSISTANT' => 'Assistent',
  'LBL_BIRTHDATE' => 'Födelsedag:',
  'LBL_BUSINESSCARD' => 'Visitkort',
  'LBL_CITY' => 'Stad:',
  'LBL_CAMPAIGN_ID' => 'Kampanj ID',
  'LBL_CONTACT_INFORMATION' => 'Kontakt information',
  'LBL_CONTACT_NAME' => 'Kontaktnamn:',
  'LBL_CONTACT_OPP_FORM_TITLE' => 'Kontakt-Affärsmöjlighet:',
  'LBL_CONTACT_ROLE' => 'Roll',
  'LBL_CONTACT' => 'Kontakt:',
  'LBL_COUNTRY' => 'Land',
  'LBL_CREATED_ACCOUNT' => 'Skapa en ny organisation',
  'LBL_CREATED_CALL' => 'Skapa nytt telefonsamtal',
  'LBL_CREATED_CONTACT' => 'Skapa en ny kontakt',
  'LBL_CREATED_MEETING' => 'Skapa nytt möte',
  'LBL_CREATED_OPPORTUNITY' => 'Skapa en ny affärsmöjlighet',
  'LBL_DATE_MODIFIED' => 'Uppdateringsdatum:',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Kontakter',
  'LBL_DEPARTMENT' => 'Avdelning:',
  'LBL_DESCRIPTION_INFORMATION' => 'Beskrivande information',
  'LBL_DESCRIPTION' => 'Beskrivning:',
  'LBL_DIRECT_REPORTS_SUBPANEL_TITLE' => 'Direktrapporter',
  'LBL_DO_NOT_CALL' => 'Ring inte:',
  'LBL_DUPLICATE' => 'Möjlig kopia av kontakter',
  'LBL_EMAIL_ADDRESS' => 'Epost:',
  'LBL_EMAIL_OPT_OUT' => 'Önskar ej utskick',
  'LBL_EXISTING_ACCOUNT' => 'Använde existerande organisation',
  'LBL_EXISTING_CONTACT' => 'Använde existerande kontakt',
  'LBL_EXISTING_OPPORTUNITY' => 'Använde existerande affärsmöjlighet',
  'LBL_FIRST_NAME' => 'Förnamn:',
  'LBL_FULL_NAME' => 'Namn:',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Historik',
  'LBL_HOME_PHONE' => 'Hem:',
  'LBL_IMPORT_VCARD' => 'Importera vCard',
  'LBL_IMPORT_VCARDTEXT' => 'Skapa en kontakt automatiskt vid import av vCard från ditt filsystem.',
  'LBL_INVALID_EMAIL' => 'Ogiltig epostadress:',
  'LBL_INVITEE' => 'Direktrapporter',
  'LBL_LAST_NAME' => 'Efternamn',
  'LBL_LEAD_SOURCE' => 'Lead källa:',
  'LBL_LIST_ACCEPT_STATUS' => 'Status för accepterat',
  'LBL_LIST_ACCOUNT_NAME' => 'Organisationsnamn',
  'LBL_LIST_CONTACT_NAME' => 'Kontaktnamn',
  'LBL_LIST_CONTACT_ROLE' => 'Roll',
  'LBL_LIST_EMAIL_ADDRESS' => 'Epost',
  'LBL_LIST_FIRST_NAME' => 'Förnamn',
  'LBL_LIST_FORM_TITLE' => 'Lista kontakter',
  'LBL_VIEW_FORM_TITLE' => 'Kontaktvy',
  'LBL_LIST_LAST_NAME' => 'Efternamn',
  'LBL_LIST_NAME' => 'Namn',
  'LBL_LIST_OTHER_EMAIL_ADDRESS' => 'Annan epost',
  'LBL_LIST_PHONE' => 'Kontorstelefon',
  'LBL_LIST_TITLE' => 'Titel',
  'LBL_MOBILE_PHONE' => 'Mobil:',
  'LBL_MODIFIED' => 'Uppdaterad av:',
  'LBL_MODULE_NAME' => 'Kontakter',
  'LBL_MODULE_TITLE' => 'Kontakter: Hem',
  'LBL_NAME' => 'Namn:',
  'LBL_NEW_FORM_TITLE' => 'Ny kontakt',
  'LBL_NEW_PORTAL_PASSWORD' => 'Nytt portallösenord:',
  'LBL_NOTE_SUBJECT' => 'Anteckningsämne',
  'LBL_OFFICE_PHONE' => 'Kontorstelefon',
  'LBL_OPP_NAME' => 'Namn på affärsmöjligheten:',
  'LBL_OPPORTUNITY_ROLE_ID' => 'Affärsmöjlighet roll ID',
  'LBL_OPPORTUNITY_ROLE' => 'Affärsmöjlighetsroll',
  'LBL_OTHER_EMAIL_ADDRESS' => 'Annan epost:',
  'LBL_OTHER_PHONE' => 'Annan telefon:',
  'LBL_PHONE' => 'Telefon:',
  'LBL_PORTAL_ACTIVE' => 'Portal aktiv:',
  'LBL_PORTAL_APP' => 'Portal applikation:',
  'LBL_PORTAL_INFORMATION' => 'Portal information',
  'LBL_PORTAL_NAME' => 'Portalnamn:',
  'LBL_PORTAL_PASSWORD_ISSET' => 'Portallösenord är satt:',
  'LBL_POSTAL_CODE' => 'Postnummer:',
  'LBL_PRIMARY_ADDRESS_CITY' => 'Primär adress stad:',
  'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Primär adress land:',
  'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Primär adress postnummer:',
  'LBL_PRIMARY_ADDRESS_STATE' => 'Primär adress stat:',
  'LBL_PRIMARY_ADDRESS_STREET_2' => 'Primär adress gata 2:',
  'LBL_PRIMARY_ADDRESS_STREET_3' => 'Primär adress gata 3:',
  'LBL_PRIMARY_ADDRESS_STREET' => 'Primär adress gata:',
  'LBL_PRIMARY_ADDRESS' => 'Primär adress:',
  'LBL_PRODUCTS_TITLE' => 'Produkter',
  'LBL_RELATED_CONTACTS_TITLE' => 'Relaterade kontakter',
  'LBL_REPORTS_TO_ID' => 'Rapporterar till ID:',
  'LBL_REPORTS_TO' => 'Rapporterar till:',
  'LBL_RESOURCE_NAME' => 'Resursnamn',
  'LBL_SALUTATION' => 'Titel:',
  'LBL_SAVE_CONTACT' => 'Spara kontakt',
  'LBL_SEARCH_FORM_TITLE' => 'Sök kontakt',
  'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Välj markerade kontakter',
  'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Välj markerade kontakter',
  'LBL_STATE' => 'Stat:',
  'LBL_SYNC_CONTACT' => 'Synkronisera till Outlook®:',
  'LBL_TITLE' => 'Titel:',
  'LNK_CONTACT_LIST' => 'Kontakter',
  'LNK_IMPORT_VCARD' => 'Skapa från vCard',
  'LNK_NEW_ACCOUNT' => 'Skapa organisation',
  'LNK_NEW_APPOINTMENT' => 'Skapa händelse',
  'LNK_NEW_CALL' => 'Schemalägg telefonsamtal',
  'LNK_NEW_CASE' => 'Skapa ärende',
  'LNK_NEW_CONTACT' => 'Skapa kontakt',
  'LNK_NEW_EMAIL' => 'Arkivera epost',
  'LNK_NEW_MEETING' => 'Schemalägg möte',
  'LNK_NEW_NOTE' => 'Skapa anteckning',
  'LNK_NEW_OPPORTUNITY' => 'Skapa affärsmöjlighet',
  'LNK_NEW_TASK' => 'Skapa uppgift',
  'LNK_SELECT_ACCOUNT' => 'Välj organisation',
  'MSG_DUPLICATE' => 'Kontakten du är på väg att skapa kan vara en kopia av en kontakt som redan finns. Kontakter som innehåller liknande namn och/eller e-postadresser är listade nedan. Klicka på Spara för att fortsätta skapa en ny kontakt, eller klicka på Avbryt för att återgå till modulen utan att skapa kontakten.',
  'MSG_SHOW_DUPLICATES' => 'Kontakten du är på väg att skapa kan vara en kopia av en kontakt som redan finns. Kontakter som innehåller liknande namn och/eller e-postadresser är listade nedan. Klicka på Spara för att fortsätta skapa en ny kontakt, eller klicka på Avbryt för att återgå till modulen utan att skapa kontakten.',
  'NTC_COPY_ALTERNATE_ADDRESS' => 'Kopiera alternativ adress till primär adress',
  'NTC_COPY_PRIMARY_ADDRESS' => 'Kopiera primär adress till alternativ adress',
  'NTC_DELETE_CONFIRMATION' => 'Är du säker på att du vill radera posten?',
  'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => 'När en affärsmöjlighet skapas krävs en organisation.\\n Var god skapa en ny organisation eller välj en existerande.',
  'NTC_REMOVE_CONFIRMATION' => 'Är du säker på att du vill ta bort kontakten från ärendet?',
  'NTC_REMOVE_DIRECT_REPORT_CONFIRMATION' => 'Är du säker på att du vill ta bort det här objektet som en direktrapport?',
  'LBL_USER_PASSWORD' => 'Lösenord:',
  'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Affärsmöjligheter',
  'LBL_QUOTES_SUBPANEL_TITLE' => 'Offerter',
  'LBL_PRODUCTS_SUBPANEL_TITLE' => 'Produkter',
  'LBL_COPY_ADDRESS_CHECKED' => 'Kopiera adress till markerade kontakter',
  'LBL_CASES_SUBPANEL_TITLE' => 'Ärenden',
  'LBL_BUGS_SUBPANEL_TITLE' => 'Buggar',
  'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projekt',
  'LBL_TARGET_OF_CAMPAIGNS' => 'Kampanjer (medlem av) :',
  'LBL_CAMPAIGNS' => 'Kampanjer',
  'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Kampanjer',
  'LBL_LIST_CITY' => 'Stad',
  'LBL_LIST_STATE' => 'Stat',
  'LBL_HOMEPAGE_TITLE' => 'Mina kontakter',
  'LBL_PORTAL_PASSWORD' => 'Portallösenord',
  'LBL_CONFIRM_PORTAL_PASSWORD' => 'Bekräfta portallösenord',
  'LBL_CHECKOUT_DATE' => 'Utcheckningsdatum',
);

