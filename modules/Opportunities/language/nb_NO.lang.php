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
  'ERR_DELETE_RECORD' => 'Et registernummer må oppgis for å slette denne Opportunity.',
  'LABEL_PANEL_ASSIGNMENT' => 'Tildeling',
  'LBL_ACCOUNT_ID' => 'Bedrift-ID',
  'LBL_ACCOUNT_NAME' => 'Bedriftnavn:',
  'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Handlinger',
  'LBL_AMOUNT' => 'Opportunity beløp:',
  'LBL_AMOUNT_USDOLLAR' => 'Beløp USD:',
  'LBL_ASSIGNED_TO_ID' => 'Tildelt ID',
  'LBL_ASSIGNED_TO_NAME' => 'Tildelt:',
  'LBL_CAMPAIGN' => 'Kampanje:',
  'LBL_CAMPAIGN_LINK' => 'Kampanje-link',
  'LBL_CAMPAIGN_OPPORTUNITY' => 'Kampanjer',
  'LBL_CLOSED_WON_OPPORTUNITIES' => 'Lukkede vunne Opportunities',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontaker',
  'LBL_CONTACT_HISTORY_SUBPANEL_TITLE' => 'Relaterte Kontakters Eposter',
  'LBL_CONTRACTS' => 'Kontrakter',
  'LBL_CONTRACTS_SUBPANEL_TITLE' => 'Kontrakter',
  'LBL_CREATED_ID' => 'Opprettet av ID',
  'LBL_CREATED_USER' => 'Opprettet bruker',
  'LBL_CURRENCIES' => 'Valuta',
  'LBL_CURRENCY' => 'Valuta:',
  'LBL_CURRENCY_ID' => 'Valuta-ID',
  'LBL_CURRENCY_NAME' => 'Valuta-navn',
  'LBL_CURRENCY_SYMBOL' => 'Valuta-symbol',
  'LBL_DATE_CLOSED' => 'Forventet avslutningsdato:',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Opportunities',
  'LBL_DESCRIPTION' => 'Beskrivelse:',
  'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokumenter',
  'LBL_DUPLICATE' => 'Mulig dobbeltOpportunity',
  'LBL_EDITLAYOUT' => 'Redigér Oppsett',
  'LBL_EXPORT_ASSIGNED_USER_ID' => 'Tildelt Bruker-ID',
  'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Tildelt Brukernavn',
  'LBL_EXPORT_CAMPAIGN_ID' => 'Kampanje-ID',
  'LBL_EXPORT_CREATED_BY' => 'Opprettet Av ID',
  'LBL_EXPORT_MODIFIED_USER_ID' => 'Endret av ID',
  'LBL_EXPORT_NAME' => 'Navn',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Historie',
  'LBL_INVITEE' => 'Kontakter',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Leads',
  'LBL_LEAD_SOURCE' => 'Lead-kilder:',
  'LBL_LIST_ACCOUNT_NAME' => 'Bedriftnavn',
  'LBL_LIST_AMOUNT' => 'Mengde',
  'LBL_LIST_AMOUNT_USDOLLAR' => 'Beløp USD:',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Tildelt bruker',
  'LBL_LIST_DATE_CLOSED' => 'Lukk',
  'LBL_LIST_FORM_TITLE' => 'Opportunity liste',
  'LBL_LIST_OPPORTUNITY_NAME' => 'Navn',
  'LBL_LIST_SALES_STAGE' => 'Salgsnivå',
  'LBL_MODIFIED_ID' => 'Endret av ID',
  'LBL_MODIFIED_NAME' => 'Endret av brukernavn',
  'LBL_MODIFIED_USER' => 'Endret bruker',
  'LBL_MODULE_NAME' => 'Opportunities',
  'LBL_MODULE_TITLE' => 'Opportunities: Hjem',
  'LBL_MY_CLOSED_OPPORTUNITIES' => 'Mine lukkede Opportunities',
  'LBL_NAME' => 'Opportunity navn',
  'LBL_NEW_FORM_TITLE' => 'Opprett Opportunity',
  'LBL_NEXT_STEP' => 'Neste skritt:',
  'LBL_OPPORTUNITY' => 'Opportunity:',
  'LBL_OPPORTUNITY_NAME' => 'Opportunity navn:',
  'LBL_OPPORTUNITY_TYPE' => 'Opportunity-type',
  'LBL_PROBABILITY' => 'Sannsynlighet (%):',
  'LBL_PROJECTS_SUBPANEL_TITLE' => 'Prosjekter',
  'LBL_PROJECT_SUBPANEL_TITLE' => 'Prosjekter',
  'LBL_QUOTES_SUBPANEL_TITLE' => 'Tilbud',
  'LBL_RAW_AMOUNT' => 'Råmengde',
  'LBL_SALES_STAGE' => 'Salgssteg:',
  'LBL_SEARCH_FORM_TITLE' => 'Opportunity søk',
  'LBL_TEAM_ID' => 'Gruppe-ID',
  'LBL_TOP_OPPORTUNITIES' => 'Mine topp ti Opportunities',
  'LBL_TOTAL_OPPORTUNITIES' => 'Totalt antall Opportunities',
  'LBL_TYPE' => 'Type:',
  'LBL_VIEW_FORM_TITLE' => 'Opportunity visning',
  'LNK_IMPORT_OPPORTUNITIES' => 'Importer Opportunities',
  'LNK_NEW_OPPORTUNITY' => 'Opprett Opportunity',
  'LNK_OPPORTUNITY_LIST' => 'Vis Opportunities',
  'LNK_OPPORTUNITY_REPORTS' => 'Vis Opportunity rapporter',
  'MSG_DUPLICATE' => 'Denne Opportunity oppføringen som du er iferd med å opprette kan være en kopi av en Opportunity som allerede finnes. Opportunity oppføringer med lignende navn listes nedenfor.<br>Klikk på lagre for å fortsette med opprettelsen av denne Opportunity, eller klikk på Avbryt for å gå tilbake uten å opprette en ny Opportunity.',
  'NTC_REMOVE_OPP_CONFIRMATION' => 'Er du sikker på at du vil fjerne denne Kontakten fra den valgte Opportunity?',
  'OPPORTUNITY_REMOVE_PROJECT_CONFIRM' => 'Er du sikker på at du vil fjerne denne Opportunity fra det valgte prosjektet?',
  'UPDATE' => 'Opportunity - valutaoppdatering',
  'UPDATE_BUGFOUND_COUNT' => 'Bug funnet:',
  'UPDATE_BUG_COUNT' => 'Bug ble funnet og prøvd løst:',
  'UPDATE_COUNT' => 'Registre ble oppdatert:',
  'UPDATE_CREATE_CURRENCY' => 'Oppretter ny valuta:',
  'UPDATE_DOLLARAMOUNTS' => 'Oppdatér U.S. Dollar-beløp',
  'UPDATE_DOLLARAMOUNTS_TXT' => 'Oppdatér U.S. Dollar-beløpet for Opportunities basert på den nåværende valutakursen. Denne verdien brukes for å kalkulere Grafer og Listevisning av Valutabeløp.',
  'UPDATE_DONE' => 'Ferdig',
  'UPDATE_FAIL' => 'Kunne ikke oppdatere -',
  'UPDATE_FIX' => 'Ordne beløp',
  'UPDATE_FIX_TXT' => 'Prøver å ordne det slik at ugyldige beløp blir gitt en gyldig desimal fra den nåværende beløp. Alle endrede beløp får oppbakking via mengde_backup databasefeltet. Hvis du utfører denne handlingen og oppdager feil, vennligst ikke prøv igjen før du har gjenopprettet ved hjelp av backupen. Hvis ikke kan backup-dataene overskrives med nye ugyldige data.',
  'UPDATE_INCLUDE_CLOSE' => 'Inkluderer lukkede registre',
  'UPDATE_MERGE' => 'Fusjonér valutaer',
  'UPDATE_MERGE_TXT' => 'Fusjonér multiplume valutaer til en enkelt valuta. Hvis det finnes flere oppføringer for samme valuta, kan du slå de sammen til én. Dette vil også slå sammen valutaene for alle andre moduler.',
  'UPDATE_NULL_VALUE' => 'Mengden er NULL som gir 0 -',
  'UPDATE_RESTORE' => 'Gjenopprett beløp',
  'UPDATE_RESTORE_COUNT' => 'Registermengder ble gjenopprettet:',
  'UPDATE_RESTORE_TXT' => 'Gjenopprett beløp fra backup som ble til ved opprettingen.',
  'UPDATE_VERIFY' => 'Bekreft beløp',
  'UPDATE_VERIFY_CURAMOUNT' => 'Nåværende beløp:',
  'UPDATE_VERIFY_FAIL' => 'Registerkontrollen mislyktes:',
  'UPDATE_VERIFY_FIX' => 'Å kjøre ordningen ville gitt',
  'UPDATE_VERIFY_NEWAMOUNT' => 'Nytt beløp:',
  'UPDATE_VERIFY_NEWCURRENCY' => 'Ny valuta:',
  'UPDATE_VERIFY_TXT' => 'Bekrefter att verdien i Opportunities er gyldige desimaltall som kun inneholder numeriske tegn (0-9) og desimaler (.)',
);

