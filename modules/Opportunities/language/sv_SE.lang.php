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
  'ERR_DELETE_RECORD' => 'Ett objektnummer måste specificeras för att kunna radera affärsmöjligheten.',
  'LABEL_PANEL_ASSIGNMENT' => 'Tilldelning',
  'LBL_ACCOUNT_ID' => 'Organisations ID',
  'LBL_ACCOUNT_NAME' => 'Organisationsnamn:',
  'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktiviteter',
  'LBL_AMOUNT' => 'Summa:',
  'LBL_AMOUNT_USDOLLAR' => 'Summa USD:',
  'LBL_ASSIGNED_TO_ID' => 'Tilldelad till ID',
  'LBL_ASSIGNED_TO_NAME' => 'Tilldelad till:',
  'LBL_CAMPAIGN' => 'Kampanj:',
  'LBL_CAMPAIGN_LINK' => 'Kampanjlänk',
  'LBL_CAMPAIGN_OPPORTUNITY' => 'Kampanjer',
  'LBL_CLOSED_WON_OPPORTUNITIES' => 'Stängda vunna affärsmöjligheter',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakter',
  'LBL_CONTACT_HISTORY_SUBPANEL_TITLE' => 'Relaterad Kontakts Emails',
  'LBL_CONTRACTS' => 'Kontrakt',
  'LBL_CONTRACTS_SUBPANEL_TITLE' => 'Kontrakt',
  'LBL_CREATED_ID' => 'Skapad av ID',
  'LBL_CREATED_USER' => 'Skapad användare',
  'LBL_CURRENCIES' => 'Valutor',
  'LBL_CURRENCY' => 'Valuta:',
  'LBL_CURRENCY_ID' => 'Valuta ID',
  'LBL_CURRENCY_NAME' => 'Valutanamn',
  'LBL_CURRENCY_SYMBOL' => 'Valutasymbol',
  'LBL_DATE_CLOSED' => 'Förväntat avslutsdatum:',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Affärsmöjligheter',
  'LBL_DESCRIPTION' => 'Beskrivning:',
  'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokument',
  'LBL_DUPLICATE' => 'Möjlig kopia av affärsmöjligheten',
  'LBL_EDITLAYOUT' => 'Redigera layout',
  'LBL_EXPORT_ASSIGNED_USER_ID' => 'Tilldelad Användar ID',
  'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Tilldelat Användarnamn',
  'LBL_EXPORT_CAMPAIGN_ID' => 'Kampanj ID',
  'LBL_EXPORT_CREATED_BY' => 'Skapad av ID',
  'LBL_EXPORT_MODIFIED_USER_ID' => 'Ändrad av ID',
  'LBL_EXPORT_NAME' => 'Namn',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Historik',
  'LBL_INVITEE' => 'Kontakter',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Leads',
  'LBL_LEAD_SOURCE' => 'Lead källa:',
  'LBL_LIST_ACCOUNT_NAME' => 'Organisationsnamn',
  'LBL_LIST_AMOUNT' => 'Summa',
  'LBL_LIST_AMOUNT_USDOLLAR' => 'Belopp',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Tilldelad användare',
  'LBL_LIST_DATE_CLOSED' => 'Stäng',
  'LBL_LIST_FORM_TITLE' => 'Lista affärsmöjligheter',
  'LBL_LIST_OPPORTUNITY_NAME' => 'Namn',
  'LBL_LIST_SALES_STAGE' => 'Säljnivå',
  'LBL_MODIFIED_ID' => 'Redigerad av ID',
  'LBL_MODIFIED_NAME' => 'Redigerad av användarnamn',
  'LBL_MODIFIED_USER' => 'Ändrad användare',
  'LBL_MODULE_NAME' => 'Affärsmöjligheter',
  'LBL_MODULE_TITLE' => 'Affärsmöjligheter: Hem',
  'LBL_MY_CLOSED_OPPORTUNITIES' => 'Mina stängda affärsmöjligheter',
  'LBL_NAME' => 'Namn på affärsmöjlighet:',
  'LBL_NEW_FORM_TITLE' => 'Skapa affärsmöjlighet',
  'LBL_NEXT_STEP' => 'Nästa steg:',
  'LBL_OPPORTUNITY' => 'Affärsmöjlighet:',
  'LBL_OPPORTUNITY_NAME' => 'Namn på affärsmöjlighet:',
  'LBL_OPPORTUNITY_TYPE' => 'Typ av Affärsmöjlighet',
  'LBL_PROBABILITY' => 'Möjlighet (%):',
  'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projekt',
  'LBL_PROJECT_SUBPANEL_TITLE' => 'Projekt',
  'LBL_QUOTES_SUBPANEL_TITLE' => 'Offerter',
  'LBL_RAW_AMOUNT' => 'Belopp',
  'LBL_SALES_STAGE' => 'Säljnivå:',
  'LBL_SEARCH_FORM_TITLE' => 'Sök affärsmöjligheter',
  'LBL_TEAM_ID' => 'Team ID',
  'LBL_TOP_OPPORTUNITIES' => 'Mina mest intressanta affärsmöjligheter',
  'LBL_TOTAL_OPPORTUNITIES' => 'Alla affärsmöjligheter',
  'LBL_TYPE' => 'Typ:',
  'LBL_VIEW_FORM_TITLE' => 'Visa affärsmöjlighet',
  'LNK_IMPORT_OPPORTUNITIES' => 'Importera affärsmöjligheter',
  'LNK_NEW_OPPORTUNITY' => 'Skapa affärsmöjlighet',
  'LNK_OPPORTUNITY_LIST' => 'Affärsmöjligheter',
  'LNK_OPPORTUNITY_REPORTS' => 'Affärsmöjlighet rapporter',
  'MSG_DUPLICATE' => 'Den affärsmöjlighet du försöker skapa kan vara en kopia på en existerande affärsmöjlighet. Affärsmöjligheter med liknande namn listas nedan.<br> Klicka på Spara för att ändå spara den nya affärsmöjligheten eller klicka Avbryt för att återvända till modulen utan att skapa affärsmöjligheten.',
  'NTC_REMOVE_OPP_CONFIRMATION' => 'Är du säker på att du vill ta bort kontakten från affärsmöjligheten?',
  'OPPORTUNITY_REMOVE_PROJECT_CONFIRM' => 'Är du säker på att du vill ta bort affärsmöjligheten från projektet?',
  'UPDATE' => 'Affärsmöjlighet - Valuta uppdatering',
  'UPDATE_BUGFOUND_COUNT' => 'Hittade buggar:',
  'UPDATE_BUG_COUNT' => 'Buggar hittades och en lösning håller på att tas fram:',
  'UPDATE_COUNT' => 'Uppdaterade poster:',
  'UPDATE_CREATE_CURRENCY' => 'Skapa ny valuta:',
  'UPDATE_DOLLARAMOUNTS' => 'Uppdatera summor',
  'UPDATE_DOLLARAMOUNTS_TXT' => 'Uppdatera beloppet som angivits i US Dollar för de aktuella affärsmöjligheterna med den nya valutakonverteringsfaktorn. Detta värde används för att skapa grafer och lista summor.',
  'UPDATE_DONE' => 'Klar',
  'UPDATE_FAIL' => 'Kunde inte uppdatera -',
  'UPDATE_FIX' => 'Fixa summor',
  'UPDATE_FIX_TXT' => 'Försöker fixa ogiltiga summor genom att skapa ett giltigt decimaltal baserat på den aktuella valutan. Alla modifierade summor backupas till databasfältet amount_backup. Om du kör den här funktionen och noterar någon bugg, kör i så fall inte om funktionen innan du återställt data från backupen, eftersom du annars riskerar att skriva över backupen med ny ogiltig data.',
  'UPDATE_INCLUDE_CLOSE' => 'Inkludera stängda poster',
  'UPDATE_MERGE' => 'Slå samman valutor',
  'UPDATE_MERGE_TXT' => 'Slå samman flera valutor till en valuta. Om det finns flera valutaposter angivna för samma valuta slås de samman. Denna funktion slår även samman valutorna för alla andra moduler.',
  'UPDATE_NULL_VALUE' => 'Summan är NULL sätter det till 0 -',
  'UPDATE_RESTORE' => 'Återställ summor',
  'UPDATE_RESTORE_COUNT' => 'Objektets summa återställd:',
  'UPDATE_RESTORE_TXT' => 'Återställer summorna från backuperna som skapdes under fixen.',
  'UPDATE_VERIFY' => 'Verifiera summor',
  'UPDATE_VERIFY_CURAMOUNT' => 'Aktuell summa:',
  'UPDATE_VERIFY_FAIL' => 'Objektet misslyckades vid verifieringen:',
  'UPDATE_VERIFY_FIX' => 'Genomför fix skulle ge',
  'UPDATE_VERIFY_NEWAMOUNT' => 'Ny summa:',
  'UPDATE_VERIFY_NEWCURRENCY' => 'Ny valuta:',
  'UPDATE_VERIFY_TXT' => 'Verifierar att summans värde i affärsmöjligheterna har giltiga decimalsiffror, endast numeriska tecken (0-9) och decimaler (.)',
);

