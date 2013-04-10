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
  'CHART_COUNT_PATTERN' => '{zlicz} {moduł} gdzie {etykieta grupy} jest {etykieta tekstowa}',
  'CHART_MINMAX_PATTERN' => '{licz} {moduł}  {funkcja numeryczna} {etykieta numeryczna} jest {wartość numeryczna}{tysiące} gdzie {etykieta grupy} jest {etykieta tekstowa}',
  'CHART_SUMAVG_PATTERN' => '{licz} {moduł} {funkcja numeryczna} {etykieta numeryczna} z {symbol waluty}{wartość numeryczna}{tysiące} gdzie {etykieta grupy} jest {etykieta tekstowa}',
  'DEFAULT_REPORT_TITLE_1' => 'Prognozy bieżącego kwartału',
  'DEFAULT_REPORT_TITLE_10' => 'Nowe zgłoszenia przez miesiąc',
  'DEFAULT_REPORT_TITLE_11' => 'Lejek przez typ na zespół',
  'DEFAULT_REPORT_TITLE_12' => 'Lejek przez zespół na użytkownika',
  'DEFAULT_REPORT_TITLE_13' => 'Zadania przez zespół na użytkownika',
  'DEFAULT_REPORT_TITLE_14' => 'Rozmowy tel. przez zespół na użytkownika',
  'DEFAULT_REPORT_TITLE_15' => 'Spotkania przez zespół na użytkownika',
  'DEFAULT_REPORT_TITLE_16' => 'Kontrahenci przez typ na na branżę',
  'DEFAULT_REPORT_TITLE_17' => 'Szanse zakończone sukcesem przez źródła pozyskania',
  'DEFAULT_REPORT_TITLE_18' => 'Namiary przez źródła namiarów',
  'DEFAULT_REPORT_TITLE_19' => 'Moja metryka użycia (Today)',
  'DEFAULT_REPORT_TITLE_2' => 'Szczegóły prognoz',
  'DEFAULT_REPORT_TITLE_20' => 'Moja metryka użycia (Ostatnie 7 dni)',
  'DEFAULT_REPORT_TITLE_21' => 'Moja metryka użycia (Ostatnie 30 dni)',
  'DEFAULT_REPORT_TITLE_22' => 'Moja metryka modułu (Dziś)',
  'DEFAULT_REPORT_TITLE_23' => 'Moje użycie modułu  (Ostatnie 7 dni)',
  'DEFAULT_REPORT_TITLE_24' => 'Moje użycie modułu (Ostatnie 30 dni)',
  'DEFAULT_REPORT_TITLE_25' => 'Metryka użycia dla użytkowników  (Ostatnie 7 dni)',
  'DEFAULT_REPORT_TITLE_26' => 'Metryka użycia dla użytkowników (Ostatnie 30 dni)',
  'DEFAULT_REPORT_TITLE_27' => 'Moduły używane przez moje raportowanie bezpośrenie (Ostatnie 30 dni)',
  'DEFAULT_REPORT_TITLE_28' => 'Powolne zapytania',
  'DEFAULT_REPORT_TITLE_29' => 'Moje modyfikowane rekordy (Ostatnie 7 dni)',
  'DEFAULT_REPORT_TITLE_3' => 'Lista partnerów',
  'DEFAULT_REPORT_TITLE_31' => 'Moje ostatnio modyfikowane rekordy  (Ostatnie 30 dni)',
  'DEFAULT_REPORT_TITLE_32' => 'Rekordy modyfikowane przeze moje raportowanie bezpośrednie (Ostatnie 30 dni)',
  'DEFAULT_REPORT_TITLE_4' => 'Lista klientów',
  'DEFAULT_REPORT_TITLE_41' => 'Aktywne sesje użytkownika (ostatnie 7 dni)',
  'DEFAULT_REPORT_TITLE_42' => 'Zsumowane sesje użytkonika (ostatnie 7 dni)',
  'DEFAULT_REPORT_TITLE_43' => 'Opiekunowie klientów',
  'DEFAULT_REPORT_TITLE_44' => 'Moi nowi kontrahenci',
  'DEFAULT_REPORT_TITLE_45' => 'Szanse wg etapu sprzedaży',
  'DEFAULT_REPORT_TITLE_46' => 'Szanse wg typu',
  'DEFAULT_REPORT_TITLE_47' => 'Otwarte rozmowy tel.',
  'DEFAULT_REPORT_TITLE_48' => 'Otwarte spotkania',
  'DEFAULT_REPORT_TITLE_49' => 'Otwarte zadania',
  'DEFAULT_REPORT_TITLE_5' => 'Lista rozmów telefonicznych przez datę ostatniego kontaktu',
  'DEFAULT_REPORT_TITLE_50' => 'Wygrane szanse wg kontrahentów',
  'DEFAULT_REPORT_TITLE_51' => 'Wygrane szanse wg użytkowników',
  'DEFAULT_REPORT_TITLE_52' => 'Wszystkie otwarte szanse',
  'DEFAULT_REPORT_TITLE_53' => 'Wszystkie zamknięte szanse',
  'DEFAULT_REPORT_TITLE_56' => 'Produkt rozkładu Szans dla przeszłych, obecnych, przyszłych przedziałów czasowych wg miesięcy',
  'DEFAULT_REPORT_TITLE_57' => 'Etap sprzedaży Szans dla przeszłych, obecnych, przyszłych przedziałów czasowych wg miesięcy',
  'DEFAULT_REPORT_TITLE_58' => 'Prognoza ostatniego/obecnego/następnego kwartału',
  'DEFAULT_REPORT_TITLE_59' => 'Szanse wg etapu sprzedaży dla raportujących w obecnym przedziale',
  'DEFAULT_REPORT_TITLE_6' => 'Tematy przez źródła pozyskania',
  'DEFAULT_REPORT_TITLE_7' => 'Otwarte zgłoszenia przez użytkowników na status',
  'DEFAULT_REPORT_TITLE_8' => 'Otwarte zgłoszenia przez miesiąc na użytkowników',
  'DEFAULT_REPORT_TITLE_9' => 'Otwarte zgłoszenia przez priorytet na użytkowników',
  'DROPDOWN_SCHEDULE_INTERVALS' => 
  array (
    3600 => 'Co godzinę',
    21600 => 'Co 6 godzin',
    43200 => 'Co 12 godzin',
    86400 => 'Codziennie',
    604800 => 'Co tydzień',
    1209600 => 'Co 2 tygodnie',
    2419200 => 'Co 4 tygodnie',
  ),
  'ERR_REPORT_INVALID' => 'Definicja raportu "{0}" zawiera nieprawidłowe pola: {1}',
  'ERR_REPORT_INVALID_SUBJECT' => 'Raport jest nieprawidłowy',
  'ERR_SELECT_COLUMN' => 'Wybierz najpierw kolumnę do wyświetlenia.',
  'LBL_1X2' => '1 X 2',
  'LBL_1_REPORT_ON' => '1. Raportuj na',
  'LBL_2X1' => '2 X 1',
  'LBL_2_FILTER' => '2. Filtr',
  'LBL_3_CHOOSE' => '3. Wybierz kolumny do wyświetlania',
  'LBL_3_GROUP' => '3. Grupa',
  'LBL_4_CHOOSE' => '4. Wybierz kolumny do wyświetlania',
  'LBL_5_CHART_OPTIONS' => '5. Opcje wykresów',
  'LBL_ACCOUNT' => 'Kontrahenci',
  'LBL_ACCOUNTS' => 'Kontrahenci',
  'LBL_ACCOUNT_REPORTS' => 'Raporty kontrahentów',
  'LBL_ACTIVITIES_REPORTS' => 'Raporty aktywności',
  'LBL_ADDED_FAVORITES' => 'raport(y) dodane do moich ulubionych raportów.',
  'LBL_ADD_BTN_HELP' => 'Kliknij, aby dodać nową Grupę filtrów.  Używaj grup, aby zatwierdzić  operatory I/LUB, aby ustawić filtry.',
  'LBL_ADD_COLUMN' => 'Dodaj kolumnę',
  'LBL_ADD_FILTER_TO' => 'Dodaj filtr do',
  'LBL_ADD_GROUP' => 'Dodaj grupę filtru',
  'LBL_ADD_NEW_FILTER' => 'Dodaj nowy filtr',
  'LBL_ADD_RELATE' => 'Dodaj powiązane',
  'LBL_ADVANCED_FILTERS' => 'Zaawansowane filtrowanie',
  'LBL_AFTER' => 'Po',
  'LBL_ALERT_CANT_ADD' => 'Nie możesz dodać powiązanych modułów dopóki nie wybierzesz tabeli do połączenia.\\nWybierz moduł z listy rozwijalnej po lewej stronie przycisku &#39;Dodaj powiązane&#39;, który kliknąłeś.',
  'LBL_ALL' => 'Co najmniej',
  'LBL_ALL_PUBLISHED_REPORTS' => 'Wszystkie opublikowane raporty',
  'LBL_ALL_REPORTS' => 'Wszystkie raporty',
  'LBL_ALT_INFORMATION' => 'Informacje',
  'LBL_ALT_SHOW' => 'Pokaż',
  'LBL_AND' => 'i',
  'LBL_ANY' => 'Jakikolwiek',
  'LBL_ANY_ONE_OF' => 'Dowolny z',
  'LBL_ASCENDING' => 'Rosnąco',
  'LBL_ASSIGNED_TO_NAME' => 'Przydzielono do:',
  'LBL_AT_LEAST_ONE_DISPLAY_COLUMN' => 'Wybierz co najmniej jedna kolumnę do wyświetlenia.',
  'LBL_AT_LEAST_ONE_SUMMARY_COLUMN' => 'Co najmniej jedna kolumna podsumowania.',
  'LBL_AVAILABLE_FIELDS' => 'Dostępne pola',
  'LBL_AVG' => 'Średnia',
  'LBL_BASIC_FILTERS' => 'Podstawowe filtrowanie',
  'LBL_BEFORE' => 'Przed',
  'LBL_BUG_REPORTS' => 'Raporty błędów',
  'LBL_BY_DAY' => 'Po dniach',
  'LBL_BY_MONTH' => 'Po miesiącach',
  'LBL_BY_QUARTER' => 'Po kwartałach',
  'LBL_BY_YEAR' => 'Po latach',
  'LBL_CALL_LIST_BY_LAST_DATE_CONTACTED' => 'Lista rozmów tel. po dacie ostatniego kontaktu',
  'LBL_CALL_REPORTS' => 'Raporty rozmów telefonicznych',
  'LBL_CANCEL' => 'Anuluj',
  'LBL_CANNOT_BE_EMPTY' => 'nie może być pusty.',
  'LBL_CANNOT_DISPLAY_CHART_MESSAGE' => 'Wykres nie może zostać wyświetlony ze względu na swoją konfigurację.',
  'LBL_CASE_REPORTS' => 'Raporty zgłoszeń',
  'LBL_CHANGE' => 'Zmień',
  'LBL_CHART_DATA_HELP' => 'Wybierz Podsumowanie, które będzie wyświetlane na wykresie',
  'LBL_CHART_DESCRIPTION' => 'Opis',
  'LBL_CHART_OPTIONS' => 'Opcje wykresu',
  'LBL_CHART_TYPE' => 'Typ wykresu',
  'LBL_CHOOSE_COLUMNS' => 'Wybierz kolumnę do wyświetlenia',
  'LBL_CHOOSE_DISPLAY_COLS' => 'Wybierz wyświetlane kolumny',
  'LBL_CHOOSE_SUMMARIES' => 'Wybierz podsumowanie do wyświetlenia',
  'LBL_CLEAR' => 'Wyczyść',
  'LBL_COLUMN_NAME' => 'Nazwa kolumny',
  'LBL_COMBO_TYPE_AHEAD' => 'Wyszukiwanie nazwy pola',
  'LBL_CONTACT' => 'Kontakt',
  'LBL_CONTACTS' => 'Kontakty',
  'LBL_CONTACT_REPORTS' => 'Raporty kontaktów',
  'LBL_CONTAINS' => 'Zawiera',
  'LBL_CONTENT' => 'Zawartość',
  'LBL_CONTRACT_REPORTS' => 'Raporty umów',
  'LBL_COUNT' => 'Zlicz',
  'LBL_CREATE_CUSTOM_REPORT' => 'Kreator raportów',
  'LBL_CREATE_REPORT' => 'Utwórz raport',
  'LBL_CSV_TIMESTAMP' => 'R_m_d_G_i_s',
  'LBL_CURRENT_QUARTER_COMMITTED_DEALS' => 'Transakcje wykonane w tym kwartale',
  'LBL_CURRENT_QUARTER_FORECAST' => 'Prognozy dla obecnego kwartału',
  'LBL_CURRENT_USER' => 'Bieżący użytkownik',
  'LBL_CUSTOMER_ACCOUNT_LIST' => 'Lista kontrahentów - Klienci',
  'LBL_DATE' => 'Data początkowa',
  'LBL_DATE_BASED_FILTERS' => '<i>Filtr daty jest połączony z strefą czasową raportów <b>Przydzielono do </b> Użytkownika</i>',
  'LBL_DAY' => 'Dzień',
  'LBL_DEFINE_FILTERS' => 'Definiuj filtry',
  'LBL_DELETE' => 'usuń',
  'LBL_DELETED_FIELD_IN_REPORT1' => 'Następujące pola w tym raporcie są nieprawidłowe:',
  'LBL_DELETED_FIELD_IN_REPORT2' => 'Edytuj raport i upewnij się, że pozostałe parametry są prawidłowe.',
  'LBL_DELETE_ERROR' => 'Tylko właściciel tego raportu lub Administratorzy mogą usuwać rekordy.',
  'LBL_DEL_THIS' => 'Usuń',
  'LBL_DESCENDING' => 'Malejąco',
  'LBL_DETAILED_FORECAST' => 'Szczegóły prognoz',
  'LBL_DISPLAY_COLS_HELP_DESC' => '<b>Kroki do wyboru wyświetlanych kolumn:</b><br/><br/>1) Kliknij na moduł, którego chcesz używać do grupowania rekordów w tabeli <b>Moduły powiązane</b>. Domyślnie wybrany jest nadrzędny moduł (katalog nadrzędny w widoku drzewa). <br/>, który został wybrany podczas kroku <b>Wybierz moduł</b>.<br/>	Możesz wybrać powiązany moduł (katalog podrzędny w widoku drzewa) poprzez jednokrotne kliknięcie na odpowiednią nazwę. Rozwiń katalogi, żeby zobaczyć dodatkowe powiązane ze sobą moduły. Moduł, który wybierzesz określa które pola raportowalne pojawią się w tabeli <b>Dostępne pola</b>.<br/><br/>	2) Możesz również wyszukać pole poprzez wpisanie jego nazwy w wyszukiwarce.<br/>	Po wybraniu dowolnej liczby pól z wybranego modułu z <b>Modułów powiązanych</b> możesz kliknąć inny moduł, z którego możesz również wybrać kolumny wyświetlane w Twoim raporcie. W przypadku wyboru zbyt dużej liczby kolumn raport może być nieczytelny.<br/><br/>',
  'LBL_DISPLAY_COLUMNS' => 'Wyświetl kolumny',
  'LBL_DISPLAY_SUMMARIES' => 'Wybierz wyświetlane podsumowania',
  'LBL_DISPLAY_SUMMARY_HELP_DESC' => '<b>Kroki do wyboru wyświetlenia podsumowania:</b><br/><br/>1) Kliknij na moduł, którego chcesz używać do grupowania rekordów w tabeli <b>Moduły powiązane</b>. Domyślnie wybrany jest nadrzędny moduł (katalog nadrzędny w widoku drzewa). <br/>	Możesz wybrać powiązany moduł (katalog podrzędny w widoku drzewa) poprzez jednokrotne kliknięcie na odpowiednią nazwę. Rozwiń katalogi, żeby zobaczyć dodatkowe powiązane ze sobą moduły. Moduł, który wybierzesz określa które pola raportowalne pojawią się w tabeli <b>Dostępne pola</b>.<br/><br/>	2) Kliknij na pole w widoku <b>Dostępne pola</b>, aby... Możesz również wyszukać pola poprzez wpisanie tekstu w polu na widoku pól.<br/>	Po wybraniu dowolnej liczby pól z wybranego modułu z <b>Modułów powiązanych</b> możesz kliknąć inny moduł, z którego możesz wybrać dodatkowe pola. Możesz wybrać dowolną liczbę pól, które będą podsumowaniem w Twoim raporcie <br/>	Dla raportu macierzowego możesz wybrać więcej niż jedno pole do wyświetlenia złożonych danych w jednej komórce raportu.',
  'LBL_DOES_NOT_CONTAIN' => 'Nie zawiera',
  'LBL_DOES_NOT_EQUAL' => 'Różny od',
  'LBL_DOWN' => 'Dół',
  'LBL_DO_ROUND' => 'Zaokrąglaj liczby ponad 100000',
  'LBL_DO_ROUND_HELP' => 'Liczby powyżej 100000 będą zaokrąglane w wykresach.<br>Przykład: 350000 będzie wyświetlone jako 350K.',
  'LBL_DUPLICATE_AS_MATRIX' => 'Jako Raport macierzowy',
  'LBL_DUPLICATE_AS_ORIGINAL' => 'Jako oryginalny typ',
  'LBL_DUPLICATE_AS_ROWS_AND_COLS' => 'Jako Raport tabelaryczny',
  'LBL_DUPLICATE_AS_SUMMATION_DETAILS' => 'Jako Raport podsumowujący szczegółowy',
  'LBL_DUPLICATE_AS_SUMMATON' => 'Jako Raport podsumowujący',
  'LBL_EDIT' => 'Edytuj',
  'LBL_EDITLAYOUT' => 'Edytuj widok',
  'LBL_EMAIL_REPORTS' => 'Raporty wiadomości e-mail',
  'LBL_ENDS_WITH' => 'Kończy się z',
  'LBL_END_DATE' => 'Data końcowa',
  'LBL_EQUALS' => 'Równy',
  'LBL_EXACT' => 'Dokładnie',
  'LBL_EXPORT' => 'Eksport',
  'LBL_FAILURE_REPORT' => 'Niepowodzenie: Raport',
  'LBL_FAVORITE' => 'ulubione',
  'LBL_FAVORITES_TITLE' => 'Raporty: Moje ulubione raporty',
  'LBL_FAVORITE_REPORTS' => 'Moje ulubione raporty',
  'LBL_FAVORITE_REPORTS_TITLE' => 'Moje ulubione raporty',
  'LBL_FIELDS_PANEL_HELP_DESC' => 'Wszystkie raportowalne pola z wybranego modułu pojawią się w <B>Modułach powiązanych</B>. Wybierz pole.',
  'LBL_FIELD_NAME' => 'Nazwa pola',
  'LBL_FILTER' => 'Filtr',
  'LBL_FILTERS' => 'Filtry',
  'LBL_FILTERS_END' => 'z następujących filtrów.',
  'LBL_FILTERS_HELP_DESC' => '<b>Kroki definiujące filtry</b><br/><br/>1) Kliknij na moduł w <b>Modułach powiązanych</b>, którego zamierzasz użyć w filtrach. Domyślnie, jest wybrany pierwszy moduł (najwyższy listek w widoku drzewa). <br/><br/>Możesz wybrać powiązane moduły (katalogi podrzędne w widoku drzewa) poprzez jednokrotne kliknięcie na odpowiednią nazwę. Kliknij w folderz na drzewie relacji, aby zobaczyć dodatkowe moduły powiązane ze sobą. Moduł, który wybierzesz określa które pola  raportowalne pojąwią się w tabeli <b>Dostępne pola</b>.<br/><br/>	2) Kliknij na pole w tabeli <b>Dostępnych pól</b>, aby dodać je do filtru. Możesz również wyszukać pola poprzez wpisanie tekstu w wyszukiwarce.<br/>	Po wybraniu dowolnej liczby pól z wybranego w tabeli <b>Modułów powiązanych</b> modułu, możesz wybrać inny moduł z którego możesz wybrać dowolną liczbę pól do użycia w filtrowaniu.<br/><br/>	3) Wybierz <b>I</b> lub <b>LUB</b>, aby wskazać czy wszystkie (I) lub dowolne (LUB) kryteria muszą zostać spełnione przez dane wyświetlone jako wyniki raportu.<br/><br/>	4) [Opcjonalnie] Kliknij na <b>Dodaj grupę filtrów</b>, aby utworzyć grupę filtrów. Możesz stworzyć dowolną liczbę grup filtrów, a także grupy zagnieżdżone.<br/><br/>	5) [Opcja] Zaznacz opcję Edycje dla wybranego filtra, aby pozwolić innym użytkownikom na modyfikację kryteriów w chwili wykonywania raportu.',
  'LBL_FILTER_AND' => 'I',
  'LBL_FILTER_CONDITIONS' => 'Wybierz operator',
  'LBL_FILTER_DATE_RANGE_FINISH' => 'do',
  'LBL_FILTER_DATE_RANGE_START' => 'Od',
  'LBL_FILTER_OR' => 'LUB',
  'LBL_FORECAST_REPORTS' => 'Raporty prognozujące',
  'LBL_FUNNEL' => 'Lejek',
  'LBL_GRAND_TOTAL' => 'Podsumowanie całkowite',
  'LBL_GREATER_THAN' => 'Większy niż',
  'LBL_GREATER_THAN_EQUAL' => 'Większe niż',
  'LBL_GROUP_BY' => 'Grupuj po',
  'LBL_GROUP_BY_HELP_DESC' => '<b>Kroki do zdefiniowania  grup</b><br></br>1) Kliknij na moduł, którego chcesz używać do grupowania rekordów w tabeli <b>Moduły powiązane</b>. Domyślnie wybrany jest nadrzędny moduł (katalog nadrzędny w widoku drzewa). <br/>	Możesz wybrać powiązany moduł (katalog podrzędny w widoku drzewa) poprzez jednokrotne kliknięcie na odpowiednią nazwę. Rozwiń katalogi, żeby zobaczyć dodatkowe powiązane ze sobą moduły. Moduł, który wybierzesz określa które pola raportowalne pojawią się w tabeli <b>Dostępne pola</b>.<br/><br/>	2) Kliknij na <b>Dostępne pola</b>, aby pogrupować rekordy po wybranych atrybutach w raporcie. Możesz również wyszukać pole poprzez wpisanie jego nazwy w wyszukiwarce.<br/>	Po wybraniu dowolnej liczby pól z wybranego modułu z <b>Modułów powiązanych</b> możesz kliknąć inny moduł, z którego możesz również wybrać pola, na podstawie których grupowane będą rekordów. Zalecany jest wybór maksymalnie kilku pól.<br/><br/>	Możesz zmieniać kolejność pól przez przeciąganie i upuszczanie ich na pożądaną pozycję. Zmiana kolejności wymusza zmianę sposobu wyświetlania wyników.<br/><br/>  	Do raportów macierzowych, możesz wybrać maksymalnie tzy pola grupujące.',
  'LBL_GROUP_BY_REQUIRED' => 'Co najmniej jedna kolumna Grupuj po i jedna kolumna Podsumowanie jest niezbędna do narysowania wykresu.',
  'LBL_HELLO' => 'Witaj',
  'LBL_HELP' => 'Pomoc',
  'LBL_HIDE_COLUMNS' => 'Ukryj kolumny',
  'LBL_HIDE_SUMMARIES' => 'Ukryj podsumowania',
  'LBL_HORIZ_BAR' => 'Wykres słupkowy poziomy',
  'LBL_IS' => 'Jest',
  'LBL_IS_BETWEEN' => 'Jest pomiędzy',
  'LBL_IS_EMPTY' => 'Jest pusty',
  'LBL_IS_NOT' => 'Nie jest',
  'LBL_IS_NOT_EMPTY' => 'Nie jest pusty',
  'LBL_IS_NOT_ONE_OF' => 'Nie jest jednym z',
  'LBL_IS_PUBLISHED' => 'Jest opublikowany',
  'LBL_LABEL' => 'Etykieta',
  'LBL_LAST_30_DAYS' => 'Ostatnie 30 dni',
  'LBL_LAST_7_DAYS' => 'Ostatnie 7 dni',
  'LBL_LAST_MONTH' => 'Poprzedni miesiąc',
  'LBL_LAST_QUARTER' => 'Ostatni kwartał',
  'LBL_LAST_WEEK' => 'Poprzedni tydzień',
  'LBL_LAST_YEAR' => 'Poprzedni rok',
  'LBL_LEAD' => 'Namiar',
  'LBL_LEADS' => 'Namiary',
  'LBL_LEAD_REPORTS' => 'Raporty namiarów',
  'LBL_LEFT' => 'Lewo',
  'LBL_LESS_THAN' => 'Mniejszy niż',
  'LBL_LESS_THAN_EQUAL' => 'Mniejsze niż',
  'LBL_LINE' => 'Wykres liniowy',
  'LBL_LIST_FORM_TITLE' => 'Raporty',
  'LBL_LIST_PUBLISHED' => 'Opublikowane',
  'LBL_MATRIX_LAYOUT' => 'Opcje wyglądu:',
  'LBL_MATRIX_REPORT' => 'Raport macierzowy',
  'LBL_MATRIX_REPORT_DESC' => 'Utwórz sumaryczny raport, który wyświetla wyniki w macierzy i przedstawia podsumowania zależne dla maksymalnie 3 pól.',
  'LBL_MAX' => 'Maksymalna',
  'LBL_MAXIMUM_3_GROUP_BY' => 'Raport macierzowy nie może mieć więcej niż trzy grupy.',
  'LBL_MEETING_REPORTS' => 'Raporty spotkań',
  'LBL_MIN' => 'Minimalna',
  'LBL_MINIMUM_2_GROUP_BY' => 'Raport macierzowy musi mieć co najmniej dwie grupy.',
  'LBL_MISSING_FIELDS' => 'Nieuzupełnione pola',
  'LBL_MISSING_INPUT_VALUE' => 'brak wartości.',
  'LBL_MISSING_SECOND_INPUT_VALUE' => 'brak wartości.',
  'LBL_MODULE' => 'Moduł',
  'LBL_MODULE_CHANGE_PROMPT' => 'Zmiana wybranego modułu spowoduje utratę filtrów, wyświetlanie kolumn itp. Czy na pewno chcesz kontynuować?',
  'LBL_MODULE_NAME' => 'Raporty',
  'LBL_MODULE_NAME_SAVED' => 'Nazwa modułu',
  'LBL_MODULE_NAME_SINGULAR' => 'Raport',
  'LBL_MODULE_TITLE' => 'Raporty: Strona główna',
  'LBL_MODULE_VIEWER_TITLE' => 'Podgląd raportów: Strona główna',
  'LBL_MONTH' => 'Miesiąc',
  'LBL_MORE' => 'Więcej',
  'LBL_MY_ACCOUNT_REPORTS' => 'Moi kontrahenci',
  'LBL_MY_BUG_REPORTS' => 'Moje błędy',
  'LBL_MY_CALL_REPORTS' => 'Moje rozmowy tel.',
  'LBL_MY_CASE_REPORTS' => 'Moje zgłoszenia',
  'LBL_MY_CONTACT_REPORTS' => 'Moje kontakty',
  'LBL_MY_CONTRACT_REPORTS' => 'Moje umowy',
  'LBL_MY_EMAIL_REPORTS' => 'Moje wiadomości e-mail',
  'LBL_MY_FORECAST_REPORTS' => 'Moje prognozu',
  'LBL_MY_LEAD_REPORTS' => 'Moje namiary',
  'LBL_MY_MEETING_REPORTS' => 'Moje spotkania',
  'LBL_MY_OPPORTUNITY_REPORTS' => 'Moje szanse',
  'LBL_MY_PROJECT_TASK_REPORTS' => 'Moje raporty etapów projektów',
  'LBL_MY_PROSPECT_REPORTS' => 'Moi potencjalni kontrahenci',
  'LBL_MY_QUOTE_REPORTS' => 'Moje oferty',
  'LBL_MY_REPORTS' => 'Moje raporty',
  'LBL_MY_SAVED_REPORTS' => 'Moje zapisane raporty',
  'LBL_MY_TASK_REPORTS' => 'Moje zadania',
  'LBL_MY_TEAMS_REPORTS' => 'Raporty mojego zespołu',
  'LBL_MY_TEAM_ACCOUNT_REPORTS' => 'Mój zespół - Raporty kontrahentów',
  'LBL_MY_TEAM_BUG_REPORTS' => 'Mój zespół - Raporty błędów',
  'LBL_MY_TEAM_CALL_REPORTS' => 'Mój zespół - Raporty rozmów telefonicznych',
  'LBL_MY_TEAM_CASE_REPORTS' => 'Mój zespół - Raporty zgłoszeń',
  'LBL_MY_TEAM_CONTACT_REPORTS' => 'Mój zespół - Raporty kontaktów',
  'LBL_MY_TEAM_CONTRACT_REPORTS' => 'Mój zespół - Raporty umów',
  'LBL_MY_TEAM_EMAIL_REPORTS' => 'Mój zespół - Raporty wiadomości pocztowych',
  'LBL_MY_TEAM_FORECAST_REPORTS' => 'Mój zespół - Raporty prognoz',
  'LBL_MY_TEAM_LEAD_REPORTS' => 'Mój zespół - Raporty namiarów',
  'LBL_MY_TEAM_MEETING_REPORTS' => 'Mój zespół - Raporty spotkań',
  'LBL_MY_TEAM_OPPORTUNITY_REPORTS' => 'Mój zespół - Raporty szans',
  'LBL_MY_TEAM_PROJECT_TASK_REPORTS' => 'Mój zespół - Raporty elementów projektów',
  'LBL_MY_TEAM_PROSPECT_REPORTS' => 'Mój zespół - Raporty celów',
  'LBL_MY_TEAM_QUOTE_REPORTS' => 'Mój zespół - Raporty szans',
  'LBL_MY_TEAM_TASK_REPORTS' => 'Mój zespół - Raporty zadań',
  'LBL_NEXT' => 'Dalej >',
  'LBL_NEXT_30_DAYS' => 'Następne 30 dni',
  'LBL_NEXT_7_DAYS' => 'Następne 7 dni',
  'LBL_NEXT_MONTH' => 'Następny miesiąc',
  'LBL_NEXT_QUARTER' => 'Następny kwartał',
  'LBL_NEXT_RUN' => 'Następna wiadomość',
  'LBL_NEXT_WEEK' => 'Następny tydzień',
  'LBL_NEXT_YEAR' => 'Następny rok',
  'LBL_NONE' => '--Brak--',
  'LBL_NONE_STRING' => 'Brak',
  'LBL_NOTHING_WAS_SELECTED' => 'nic nie zostało wybrane.',
  'LBL_NOT_ON' => 'Inna niż',
  'LBL_NO_ACCESS' => 'Twoje uprawnienia nie pozwalają na podgląd tego raportu.',
  'LBL_NO_CHART' => 'Brak wykresu',
  'LBL_NO_CHART_DRAWN_MESSAGE' => 'Wykres nie może zostać wygenerowany z powodu braku danych',
  'LBL_NO_FILTERS' => 'brak filtrów.',
  'LBL_NO_IMAGE' => 'Brak pliku graficznego',
  'LBL_NO_REPORTS' => 'Brak wyników.',
  'LBL_OF' => 'z',
  'LBL_ON' => 'Dokładnie',
  'LBL_ONE_OF' => 'Jest jednym z',
  'LBL_OPPORTUNITIES' => 'Szanse',
  'LBL_OPPORTUNITIES_BY_LEAD_SOURCE' => 'Szanse po źródle pozyskania',
  'LBL_OPPORTUNITY' => 'Szansa',
  'LBL_OPPORTUNITY_REPORTS' => 'Raporty szans',
  'LBL_OPTIONAL_HELP' => 'Zaznacz to pole, aby wyświetlić rekordy modułu nadrzędnego nawet wtedy, gdy rekordy modułu powiązanego nie istnieją. Gdy to pole nie jest zaznaczone, rekordy pierwszego modułu bedą wyświetlone tylko wówczas, gdy będą istniały rekordy z modułu powiązanego.',
  'LBL_OPTIONAL_MODULES' => 'Moduły opcjonalne',
  'LBL_ORDER_BY' => 'Kolejność',
  'LBL_OUTER_JOIN_CHECKBOX' => 'Wyśwetl gdy nie istnieją rekordy powiązane',
  'LBL_OWNER' => 'Przydzielono do',
  'LBL_PARTNER_ACCOUNT_LIST' => 'Lista kontrahentów - Partnerzy',
  'LBL_PDF_TIMESTAMP' => 'R_m_d_G_i',
  'LBL_PIE' => 'Wykres kołowy',
  'LBL_PREVIEW_REPORT' => 'Podgląd',
  'LBL_PREVIOUS' => '< Wstecz',
  'LBL_PROJECT_TASK_REPORTS' => 'Raporty etapów projektów',
  'LBL_PROSPECT_REPORTS' => 'Raporty potencjalnych kontrahentów',
  'LBL_PUBLISH' => 'publikuj',
  'LBL_PUBLISHED_ACCOUNT_REPORTS' => 'Publikuj raporty o kontrahentach',
  'LBL_PUBLISHED_BUG_REPORTS' => 'Publikuj raporty o błędach',
  'LBL_PUBLISHED_CALL_REPORTS' => 'Publikuj raporty o rozmowach telefonicznych',
  'LBL_PUBLISHED_CASE_REPORTS' => 'Publikuj raporty o zgłoszeniach',
  'LBL_PUBLISHED_CONTACT_REPORTS' => 'Publikuj raporty o kontaktach',
  'LBL_PUBLISHED_CONTRACT_REPORTS' => 'Opublikowane raporty umów',
  'LBL_PUBLISHED_EMAIL_REPORTS' => 'Publikuj raporty o wiadomościach pocztowych',
  'LBL_PUBLISHED_FORECAST_REPORTS' => 'Publikuj raporty o prognozach',
  'LBL_PUBLISHED_LEAD_REPORTS' => 'Publikuj raporty o namiarach',
  'LBL_PUBLISHED_MEETING_REPORTS' => 'Publikuj raporty o spotkaniach',
  'LBL_PUBLISHED_OPPORTUNITY_REPORTS' => 'Publikuj raporty o szansach',
  'LBL_PUBLISHED_PROJECT_TASK_REPORTS' => 'Publikuj raporty etapów projektów',
  'LBL_PUBLISHED_PROSPECT_REPORTS' => 'Publikuj raporty o celach',
  'LBL_PUBLISHED_QUOTA_REPORTS' => 'Opublikowane raporty kwot',
  'LBL_PUBLISHED_QUOTE_REPORTS' => 'Publikuj raporty o ofertach',
  'LBL_PUBLISHED_TASK_REPORTS' => 'Publikuj raporty o zadaniach',
  'LBL_QUARTER' => 'Kwartał',
  'LBL_QUARTER_ABBREVIATION' => 'Q',
  'LBL_QUERY' => 'Zapytanie',
  'LBL_QUOTE_REPORTS' => 'Raporty oferty',
  'LBL_RELATED' => 'Powiązane:',
  'LBL_RELATED_MODULES' => 'Moduły powiązane',
  'LBL_RELATED_MODULES_PANEL_HELP_DESC' => 'Pierwszy moduł i wszystkie powiązane pojawią się tutaj. Wybierz moduł.',
  'LBL_RELATED_TABLE_BLANK' => 'Wybierz moduł do połączenia.',
  'LBL_REMOVE' => 'Usuń',
  'LBL_REMOVED_FAVORITES' => 'raport(y) usunięte z moich ulubionych raportów.',
  'LBL_REMOVE_BTN_HELP' => 'Kliknij, aby usunąć tę Grupę filtrów.',
  'LBL_REMOVE_GROUP' => 'Usuń grupę filtru',
  'LBL_REPORTS' => 'Raporty',
  'LBL_REPORTS_TO' => 'Zwierzchnik',
  'LBL_REPORT_ATT_MODULES' => 'Moduły',
  'LBL_REPORT_ATT_NAME' => 'Nazwa',
  'LBL_REPORT_COLLAPSE_ALL' => 'Ukryj',
  'LBL_REPORT_DATA_COLUMN_ORDERS' => 'Ten raport zawiera dane w następującej kolejności kolumn:',
  'LBL_REPORT_DETAILS' => 'Szczegóły raportu',
  'LBL_REPORT_EXPAND_ALL' => 'Pokaż',
  'LBL_REPORT_FILTER_MODIFIED_MESSAGE' => 'Ostatnio zmodyfikowany filtr.',
  'LBL_REPORT_GRAND_TOTAL' => 'Suma całkowita',
  'LBL_REPORT_GROUP_BY' => 'Grupuj po',
  'LBL_REPORT_HIDE_CHART' => 'Ukryj wykres',
  'LBL_REPORT_HIDE_DETAILS' => 'Ukryj szczegóły',
  'LBL_REPORT_LAST_RUN_DATE' => 'Dostępny od',
  'LBL_REPORT_MODIFIED_MESSAGE' => 'Filtrowanie raportu zostało zmodyfikowane od ostatniego wykonania.',
  'LBL_REPORT_MODULES' => 'Raporty',
  'LBL_REPORT_MODULE_VIEWER_TITLE' => 'Podgląd raportów',
  'LBL_REPORT_NAME' => 'Nazwa raportu',
  'LBL_REPORT_RESET_FILTER' => 'Wyczyść',
  'LBL_REPORT_RESULTS' => 'Wyniki',
  'LBL_REPORT_RESULTS_MESSAGE' => 'Kliknij <b>Wykonaj raport</b>.',
  'LBL_REPORT_RUN_WITH_FILTER' => 'Zatwierdź filtrowanie',
  'LBL_REPORT_SCHEDULE_TITLE' => 'Harmonogram',
  'LBL_REPORT_SHOW_CHART' => 'Pokaż wykres',
  'LBL_REPORT_SHOW_DETAILS' => 'Pokaż szczegóły',
  'LBL_REPORT_TYPE' => 'Typ raportu',
  'LBL_REPORT__ATT_TYPE' => 'Typ',
  'LBL_RIGHT' => 'Prawo',
  'LBL_ROLLOVER' => 'Rozwiń, aby zobaczyć szczegóły.',
  'LBL_ROLLOVER_SQUARE' => 'Rozwiń, aby zobaczyć szczegóły.',
  'LBL_ROLLOVER_WEDGE' => 'Rozwiń, aby zobaczyć szczegóły.',
  'LBL_ROWS_AND_COLUMNS_REPORT' => 'Raport tabelaryczny',
  'LBL_ROWS_AND_COLUMNS_REPORT_DESC' => 'Utwórz raport tabelaryczny, zawierający wartości wybranych pól, spełniających określone kryteria z rekordu.',
  'LBL_RUNTIME_FILTERS' => 'Filtrowanie w czasie wykonywania',
  'LBL_RUNTIME_HELP' => 'Zaznacz to pole, aby zezwolić użytkownikom na zmianę wartości filtrów w czasie wykonywania raportu.',
  'LBL_RUN_BUTTON_TITLE' => 'Wykonaj raport',
  'LBL_RUN_REPORT_BUTTON_KEY' => 'R',
  'LBL_RUN_REPORT_BUTTON_LABEL' => 'Wykonaj raport',
  'LBL_RUN_TIME_LABEL' => 'Edycja',
  'LBL_SAVED_SEARCH' => 'Zapisz wyniki wyszukiwania i wygląd',
  'LBL_SAVE_AS' => 'Zapisz jako',
  'LBL_SAVE_RUN' => 'Zapisz i wykonaj',
  'LBL_SCHEDULED_REPORT_MSG_BODY1' => 'i zapisany pod nazwą',
  'LBL_SCHEDULED_REPORT_MSG_BODY2' => 'Jeżeli chcesz zmienić ustawienia raportu, zaloguj się i wybierz zakładkę Raporty.',
  'LBL_SCHEDULED_REPORT_MSG_INTRO' => 'Załącznik jest automatycznie generowanym raportem wysłanym do Ciebie przez system.  Ten raport został utworzony',
  'LBL_SCHEDULE_ACTIVE' => 'Aktywny',
  'LBL_SCHEDULE_EMAIL' => 'Harmonogram raportów',
  'LBL_SCHEDULE_REPORT' => 'Harmonogram raportów',
  'LBL_SCHEDULE_TYPE' => 'Typ harmonogramu',
  'LBL_SEARCH_FORM_TITLE' => 'Lista raportów',
  'LBL_SELECT' => 'Wybierz',
  'LBL_SELECT_GROUP_BY' => 'Definiuj grupowanie',
  'LBL_SELECT_MODULE' => 'Wybierz moduł',
  'LBL_SELECT_MODULE_BUTTON' => 'Kliknij ikonę aby wybrać moduł',
  'LBL_SELECT_RECORD' => 'Wybierz rekord',
  'LBL_SELECT_REPORT_TYPE' => 'Kliknij ikonę aby wybrać typ raportu',
  'LBL_SELECT_REPORT_TYPE_ICON' => 'Wybierz typ raportu',
  'LBL_SHOW' => 'Pokaż',
  'LBL_SHOW_DETAILS' => 'Pokaż szczegóły',
  'LBL_SHOW_QUERY' => 'Pokaż zapytanie',
  'LBL_SORT' => 'Sortuj',
  'LBL_STARTS_WITH' => 'Zaczyna się z',
  'LBL_START_DATE' => 'Data początkowa',
  'LBL_STATUS' => 'Status',
  'LBL_SUBJECT' => 'Temat',
  'LBL_SUBMIT_QUERY' => 'Wyślij zapytanie',
  'LBL_SUCCESS_REPORT' => 'Sukces: Raport',
  'LBL_SUM' => 'Sumuj',
  'LBL_SUMMARY_COLUMNS' => 'Podsumowanie kolumn',
  'LBL_SUMMATION_REPORT' => 'Raport podsumowujący',
  'LBL_SUMMATION_REPORT_DESC' => 'Utwórz raport tabelaryczny, wyliczający pełną liczbę rekordów, spełniających określone kryteria. Rezultat zostatnie wyświetlony na wykresie i może również zawierać wyrażenia arytmetyczne, takie jak: suma, średnia, wartość maksymalna, wartość minimalna itp.',
  'LBL_SUMMATION_REPORT_WITH_DETAILS' => 'Raport podsumowujący szczegółowy',
  'LBL_SUMMATION_REPORT_WITH_DETAILS_DESC' => 'Utwórz raport podsumowujący, który wyświetla szczegółowe dane podsumowań oraz pozwala na szybkie przejście do rekordów uwzględnionych w wynikach.',
  'LBL_SUMMATION_WITH_DETAILS' => 'Raport podsumowujący szczegółowy',
  'LBL_TABLE_CHANGED' => 'Lista modułów została zmodyfikowana. Sprawdź dwukrotnie warunki wprowadzone w zakładce grup',
  'LBL_TASK_REPORTS' => 'Raporty zadań',
  'LBL_TEAM' => 'Zespół',
  'LBL_THERE_ARE_NO_REPORTS_OF_THIS_TYPE' => 'Nie ma raportów tego typu.',
  'LBL_THIS_MONTH' => 'Bieżący miesiąc',
  'LBL_THIS_QUARTER' => 'Obecny kwartał',
  'LBL_THIS_WEEK' => 'Ten tydzień',
  'LBL_THIS_YEAR' => 'Ten rok',
  'LBL_TIME_INTERVAL' => 'Przedział czasu',
  'LBL_TITLE' => 'Nazwa',
  'LBL_TODAY' => 'Dzisiaj',
  'LBL_TOMORROW' => 'Jutro',
  'LBL_TOTAL' => 'Suma',
  'LBL_TOTAL_IS' => 'Suma wynosi',
  'LBL_TO_PDF' => 'Zapisz jako PDF',
  'LBL_TYPE' => 'Typ',
  'LBL_UNTITLED' => 'brak nazwy',
  'LBL_UN_PUBLISH' => 'usuń obublikowane',
  'LBL_UP' => 'Góra',
  'LBL_UPDATE_SCHEDULE' => 'Aktualizuj harmonogram',
  'LBL_USER_EMPTY_HELP' => 'Aby widzieć rekordy nieprzydzielone do żadnego użytkownika, zaznacz pole  &#39;Wyśwetl gdy nie istnieją rekordy powiązane&#39; w \\Szczegółach raportu&#39; razem z opcją &#39;Jest pusty&#39; dla filtrów Przydzielonego użytkownika. To pozwoli na wyświetlanie rekordów nieprzydzielonych do żadnego użytkownika.',
  'LBL_USE_COLUMN_FOR' => 'Serie danych',
  'LBL_VERT_BAR' => 'Wykres słupkowy pionowy',
  'LBL_VIEW' => 'podgląd',
  'LBL_VIEWER_RUNTIME_HELP' => 'Określ wartość dla <b>Filtrowania</b> i kliknij <b>Zatwierdź filtorowanie</b> aby wykonać zmodyfikowany raport.',
  'LBL_WAS_NOT_SAVED' => 'nie został zapisany',
  'LBL_WAS_SAVED' => 'został zapisany',
  'LBL_WEIGHTED_AVG_AMOUNT' => 'Kwota średnia ważona',
  'LBL_WEIGHTED_SUM_AMOUNT' => 'Kwota całkowita ważona',
  'LBL_WHOSE_MAXIMUM' => 'gdzie maksymalna',
  'LBL_WHOSE_MINIMUM' => 'gdzie minimalna',
  'LBL_WITH_AN_AVERAGE' => 'ze średnią',
  'LBL_WITH_A_TOTAL' => 'z sumą',
  'LBL_WITH_DETAILS' => 'szczegółowy',
  'LBL_WORKSHEET' => 'Arkusz roboczy',
  'LBL_YEAR' => 'Rok',
  'LBL_YESTERDAY' => 'Wczoraj',
  'LBL_YOU_HAVE_NO_SAVED_REPORTS.' => 'Brak zapisanych raportów.',
  'LNK_NEW_ACCOUNT' => 'Utwórz kontrahenta',
  'LNK_NEW_CALL' => 'Dodaj rozmowę tel.',
  'LNK_NEW_CASE' => 'Utwórz zgłoszenie',
  'LNK_NEW_CONTACT' => 'Utwórz kontakt',
  'LNK_NEW_EMAIL' => 'Napisz e-mail',
  'LNK_NEW_MEETING' => 'Dodaj spotkanie',
  'LNK_NEW_NOTE' => 'Dodaj notatkę lub załącznik',
  'LNK_NEW_OPPORTUNITY' => 'Utwórz szansę',
  'LNK_NEW_TASK' => 'Dodaj zadanie',
  'MSG_NO_PERMISSIONS' => 'Nie masz uprawnień do edycji tego raportu',
  'MSG_UNABLE_PUBLISH_ANOTHER' => 'Nie można opublikować. Jest inny opublikowany Raport o tej samej nazwie.',
  'MSG_UNABLE_PUBLISH_YOU_OWN' => 'Nie można cofnąć publikację raportu należącego do innego użytkownika.',
);

