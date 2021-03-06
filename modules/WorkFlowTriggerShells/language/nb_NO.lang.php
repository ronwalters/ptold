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
  'LBL_COMPARE_SPECIFIC_PART_TIME' => 'LBL_COMPARE_SPECIFIC_PART_TIME',
  'LBL_LIST_TYPE' => 'Type:',
  'LBL_TYPE' => 'Type:',
  'LBL_COUNT_TRIGGER1' => 'Total',
  'LBL_NEW_FILTER_BUTTON_KEY' => 'F',
  'LBL_NEW_TRIGGER_BUTTON_KEY' => 'T',
  'LBL_MODULE_NAME' => 'Forutsettninger',
  'LBL_MODULE_TITLE' => 'Workflow Triggers: Hjem',
  'LBL_MODULE_SECTION_TITLE' => 'Når disse forutsetningene oppfylles',
  'LBL_SEARCH_FORM_TITLE' => 'Workflow Trigger Søk',
  'LBL_LIST_FORM_TITLE' => 'Triggerliste',
  'LBL_NEW_FORM_TITLE' => 'Skap trigger',
  'LBL_LIST_NAME' => 'Beskrivelse:',
  'LBL_LIST_VALUE' => 'Verdi:',
  'LBL_LIST_EVAL' => 'Evaluering:',
  'LBL_LIST_FIELD' => 'Område:',
  'LBL_NAME' => 'Triggernavn:',
  'LBL_EVAL' => 'Triggerevaluering:',
  'LBL_SHOW_PAST' => 'Endre tidligere verdi:',
  'LBL_SHOW' => 'Vis',
  'LNK_NEW_TRIGGER' => 'Skap trigger',
  'LNK_TRIGGER' => 'Workflow Triggere',
  'LBL_LIST_STATEMEMT' => 'Påskynd en hendelse basert på det følgende:',
  'LBL_FILTER_LIST_STATEMEMT' => 'Filtrér objektene basert på det følgende:',
  'NTC_REMOVE_TRIGGER' => 'Er du sikker på at du vil slette denne triggeren?',
  'LNK_NEW_WORKFLOW' => 'Skap Workflow',
  'LNK_WORKFLOW' => 'Workflowobjekter',
  'LBL_ALERT_TEMPLATES' => 'Alarmmaler',
  'LBL_TRIGGER' => 'Når',
  'LBL_FIELD' => 'område',
  'LBL_VALUE' => 'verdi',
  'LBL_RECORD' => 'moduler',
  'LBL_COMPARE_SPECIFIC_TITLE' => 'Når en del av målgruppen endres til eller fra en spesifisert verdi',
  'LBL_COMPARE_SPECIFIC_PART' => 'endres til eller fra en spesifisert verdi',
  'LBL_COMPARE_CHANGE_TITLE' => 'Når en del av målgruppen endres',
  'LBL_COMPARE_CHANGE_PART' => 'endres',
  'LBL_COMPARE_COUNT_TITLE' => 'Trigger ved et særskilt tidspunkt',
  'LBL_COMPARE_ANY_TIME_TITLE' => 'Feltene forandres ikke over en bestemt tidsperiode',
  'LBL_COMPARE_ANY_TIME_PART2' => 'endres ikke over',
  'LBL_COMPARE_ANY_TIME_PART3' => 'bestemt tidsperiode',
  'LBL_FILTER_FIELD_TITLE' => 'Når en del av målgruppen oppnår en gitt verdi',
  'LBL_FILTER_FIELD_PART1' => 'Filtrér gjennom',
  'LBL_FILTER_REL_FIELD_TITLE' => 'Når målgruppen endres og en del av en nærtliggende målgruppe oppnår en gitt verdi',
  'LBL_FILTER_REL_FIELD_PART1' => 'Oppgi beslektning',
  'LBL_TRIGGER_RECORD_CHANGE_TITLE' => 'Når målgruppen forandres',
  'LBL_FUTURE_TRIGGER' => 'Oppgi ny',
  'LBL_PAST_TRIGGER' => 'Oppgi gammel',
  'LBL_COUNT_TRIGGER1_2' => 'sammenlignet med denne verdien',
  'LBL_MODULE' => 'modul',
  'LBL_COUNT_TRIGGER2' => 'filtrér gjennom beslektning',
  'LBL_COUNT_TRIGGER2_2' => 'kun',
  'LBL_COUNT_TRIGGER3' => 'filtrér spesielt gjennom',
  'LBL_COUNT_TRIGGER4' => 'filtrér gjennom en annen',
  'LBL_NEW_FILTER_BUTTON_TITLE' => 'Skap filter [Alt+F]',
  'LBL_NEW_FILTER_BUTTON_LABEL' => 'Skap filter',
  'LBL_NEW_TRIGGER_BUTTON_TITLE' => 'Skap trigger  [Alt+T]',
  'LBL_NEW_TRIGGER_BUTTON_LABEL' => 'Skap trigger',
  'LBL_LIST_FRAME_SEC' => 'Filter:',
  'LBL_LIST_FRAME_PRI' => 'Trigger:',
  'LBL_TRIGGER_FILTER_TITLE' => 'Triggerfiltere',
  'LBL_TRIGGER_FORM_TITLE' => 'Definér forutsetning for Workflow-utførelse',
  'LBL_FILTER_FORM_TITLE' => 'Definér en Workflow-forutsetning',
  'LBL_SPECIFIC_FIELD' => '\'s spesifiserte område',
  'LBL_APOSTROPHE_S' => '\'s',
  'LBL_WHEN_VALUE1' => 'Når verdien av området er',
  'LBL_WHEN_VALUE2' => 'Når verdien av',
  'LBL_SELECT_OPTION' => 'Vennligst velg en valgmulighet.',
  'LBL_SELECT_TARGET_FIELD' => 'Vennligst velg et målområde.',
  'LBL_SELECT_TARGET_MOD' => 'Vennligst velg et område i nærhet av målet.',
  'LBL_SPECIFIC_FIELD_LNK' => 'spesifikt område',
  'LBL_MUST_SELECT_VALUE' => 'Du må velge en verdi for dette feltet',
  'LBL_SELECT_AMOUNT' => 'Du må velge mengde',
  'LBL_SELECT_1ST_FILTER' => 'Du må velge et gyldig første filter felt',
  'LBL_SELECT_2ND_FILTER' => 'Du må velge et gyldig andre filter felt',
);

