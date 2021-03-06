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
  'COLUMN_DISABLE_NUMBER_FORMAT' => 'Wyłącz format',
  'COLUMN_TITLE_AUDIT' => 'Śledzenie zmian',
  'COLUMN_TITLE_AUTOINC_NEXT' => 'Włącz autonumerację',
  'COLUMN_TITLE_COMMENT_TEXT' => 'Tekst komentarza',
  'COLUMN_TITLE_DATA_TYPE' => 'Typ danych',
  'COLUMN_TITLE_DEFAULT_EMAIL' => 'Domyślna wartość',
  'COLUMN_TITLE_DEFAULT_VALUE' => 'Domyślna wartość',
  'COLUMN_TITLE_DISPLAYED_ITEM_COUNT' => 'Wyświetlono # element(y/ów)',
  'COLUMN_TITLE_DISPLAY_LABEL' => 'Wyświetlana etykieta',
  'COLUMN_TITLE_DUPLICATE_MERGE' => 'Scal duplikaty',
  'COLUMN_TITLE_ENABLE_RANGE_SEARCH' => 'Włącz wyszukiwanie po zakresie',
  'COLUMN_TITLE_EXT1' => 'Dodatkowe pole 1',
  'COLUMN_TITLE_EXT2' => 'Dodatkowe pole 2',
  'COLUMN_TITLE_EXT3' => 'Dodatkowe pole 3',
  'COLUMN_TITLE_FRAME_HEIGHT' => 'Wysokość IFrame',
  'COLUMN_TITLE_FTS' => 'Pełnotekstowo wyszukiwalne',
  'COLUMN_TITLE_GLOBAL_SEARCH' => 'Wyszukiwanie globalne',
  'COLUMN_TITLE_HELP_TEXT' => 'Tekst pomocy',
  'COLUMN_TITLE_HTML_CONTENT' => 'HTML',
  'COLUMN_TITLE_IMPORTABLE' => 'Importowalne',
  'COLUMN_TITLE_LABEL' => 'Etykieta pola',
  'COLUMN_TITLE_LABEL_COLS' => 'Kolumny',
  'COLUMN_TITLE_LABEL_ROWS' => 'Wiersze',
  'COLUMN_TITLE_LABEL_VALUE' => 'Etykieta',
  'COLUMN_TITLE_MASS_UPDATE' => 'Masowa aktualizacja',
  'COLUMN_TITLE_MAX_SIZE' => 'Maksymalny rozmiar',
  'COLUMN_TITLE_MAX_VALUE' => 'Wartość maksymalna',
  'COLUMN_TITLE_MIN_VALUE' => 'Wartość minimalna',
  'COLUMN_TITLE_NAME' => 'Nazwa pola',
  'COLUMN_TITLE_PRECISION' => 'Liczba miejsc po przecinku',
  'COLUMN_TITLE_REPORTABLE' => 'Raportowalne',
  'COLUMN_TITLE_REQUIRED_OPTION' => 'Pole wymagane',
  'COLUMN_TITLE_URL' => 'Domyślne łącze URL',
  'COLUMN_TITLE_VALIDATE_US_FORMAT' => 'Format U.S.A.',
  'ERR_FIELD_NAME_ALREADY_EXISTS' => 'Pole o takiej nazwie już istnieje',
  'ERR_RESERVED_FIELD_NAME' => 'Zarezerwowane słowa kluczowe',
  'ERR_SELECT_FIELD_TYPE' => 'Wybierz typ pola',
  'LBL_ADD_FIELD' => 'Dodaj pole:',
  'LBL_AUDITED' => 'Śledzenie zmian',
  'LBL_BTN_ADD' => 'Dodaj',
  'LBL_BTN_EDIT' => 'Edytuj',
  'LBL_BTN_EDIT_VISIBILITY' => 'Edytuj widoczność',
  'LBL_CALCULATED' => 'Uzupełniane automatycznie',
  'LBL_DATA_TYPE' => 'Typ danych',
  'LBL_DEFAULT_VALUE' => 'Wartość domyślna',
  'LBL_DEPENDENT' => 'Pole zależne',
  'LBL_DEPENDENT_CHECKBOX' => 'Pole zależne',
  'LBL_DEPENDENT_TRIGGER' => 'Warunek',
  'LBL_DROP_DOWN_LIST' => 'Lista rozwijalna',
  'LBL_DYNAMIC_VALUES_CHECKBOX' => 'Pole zależne',
  'LBL_EDIT_VIS' => 'Edytuj widoczność',
  'LBL_ENFORCED' => 'Wymagany',
  'LBL_FORMULA' => 'Formuła',
  'LBL_GENERATE_URL' => 'Generuj URL',
  'LBL_HAS_PARENT' => 'Posiada wartości nadrzędne',
  'LBL_HELP' => 'Pomoc',
  'LBL_IMAGE_BORDER' => 'Granica',
  'LBL_IMAGE_HEIGHT' => 'Wysokość',
  'LBL_IMAGE_WIDTH' => 'Szerokość',
  'LBL_LABEL' => 'Etykieta',
  'LBL_LINK_TARGET' => 'Otwórz link w',
  'LBL_MODULE' => 'Moduł',
  'LBL_MODULE_SELECT' => 'Moduł do edycji',
  'LBL_MULTI_SELECT_LIST' => 'Lista wielokrotnego wyboru',
  'LBL_PARENT_DROPDOWN' => 'Lista wartości nadrzędnych',
  'LBL_RADIO_FIELDS' => 'Pola Radio',
  'LBL_REPORTABLE' => 'Raportowalne',
  'LBL_SEARCH_FORM_TITLE' => 'Wyszukiwanie modułu',
  'LBL_VISIBLE_IF' => 'Widoczny jeżeli',
  'LNK_CALL_LIST' => 'Rozmowy telefoniczne',
  'LNK_EMAIL_LIST' => 'Poczta',
  'LNK_MEETING_LIST' => 'Spotkania',
  'LNK_NEW_CALL' => 'Dodaj rozmowę telefoniczną',
  'LNK_NEW_EMAIL' => 'Napisz e-mail',
  'LNK_NEW_MEETING' => 'Dodaj spotkanie',
  'LNK_NEW_NOTE' => 'Dodaj notatkę lub załącznik',
  'LNK_NEW_TASK' => 'Dodaj zadanie',
  'LNK_NOTE_LIST' => 'Notatki',
  'LNK_REPAIR_CUSTOM_FIELD' => 'Napraw własne pola',
  'LNK_SELECT_CUSTOM_FIELD' => 'Wybierz własne pole',
  'LNK_TASK_LIST' => 'Zadania',
  'MSG_DELETE_CONFIRM' => 'Czy na pewno chcesz usunąć ten element?',
  'POPUP_EDIT_HEADER_TITLE' => 'Edytuj własne pole',
  'POPUP_INSERT_HEADER_TITLE' => 'Dodaj własne pole',
);

