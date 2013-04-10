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

	

$app_list_strings = array (
  'account_type_dom' => 
  array (
    '' => '',
    'Analyst' => 'Analityk',
    'Competitor' => 'Konkurencja',
    'Customer' => 'Klient',
    'Integrator' => 'Integrator',
    'Investor' => 'Inwestor',
    'Other' => 'Pozostali',
    'Partner' => 'Partner',
    'Press' => 'Prasa',
    'Prospect' => 'Potencjalny kontrahent',
    'Reseller' => 'Reseller',
  ),
  'activity_dom' => 
  array (
    'Call' => 'Rozmowa tel.',
    'Email' => 'E-mail',
    'Meeting' => 'Spotkanie',
    'Note' => 'Notatka',
    'Task' => 'Zadanie',
  ),
  'bopselect_type_dom' => 
  array (
    'Equals' => 'Jest równe',
  ),
  'bselect_type_dom' => 
  array (
    'bool_false' => 'Nie',
    'bool_true' => 'Tak',
  ),
  'bug_priority_dom' => 
  array (
    'High' => 'Wysoki',
    'Low' => 'Niski',
    'Medium' => 'Średni',
    'Urgent' => 'Pilny',
  ),
  'bug_resolution_dom' => 
  array (
    '' => '',
    'Accepted' => 'Zaakceptowany',
    'Duplicate' => 'Duplikat',
    'Fixed' => 'Naprawiony',
    'Invalid' => 'Nieprawidłowy',
    'Later' => 'Odłożony',
    'Out of Date' => 'Przedawniony',
  ),
  'bug_status_dom' => 
  array (
    'Assigned' => 'Przydzielono',
    'Closed' => 'Zamknięte',
    'New' => 'Nowy',
    'Pending' => 'Oczekujące',
    'Rejected' => 'Odrzucone',
  ),
  'bug_type_dom' => 
  array (
    'Defect' => 'Defekt',
    'Feature' => 'Cecha',
  ),
  'call_direction_dom' => 
  array (
    'Inbound' => 'Przychodząca',
    'Outbound' => 'Wychodząca',
  ),
  'call_status_dom' => 
  array (
    'Held' => 'Przeprowadzona',
    'Not Held' => 'Nieprzeprowadzona',
    'Planned' => 'Planowana',
  ),
  'campaign_status_dom' => 
  array (
    '' => '',
    'Active' => 'Aktywne',
    'Complete' => 'Zakończone',
    'In Queue' => 'W kolejce',
    'Inactive' => 'Nieaktywne',
    'Planning' => 'Planowane',
    'Sending' => 'Wysyłanie',
  ),
  'campaign_type_dom' => 
  array (
    '' => '',
    'Email' => 'E-mail',
    'Mail' => 'Poczta',
    'Print' => 'Druk',
    'Radio' => 'Radio',
    'Telesales' => 'Telesprzedaż',
    'Television' => 'Telewizja',
    'Web' => 'Strona internetowa',
  ),
  'campainglog_activity_type_dom' => 
  array (
    '' => '',
    'contact' => 'Utworzone kontakty',
    'invalid email' => 'Nieprawidłowy adres',
    'lead' => 'Utworzone namiary',
    'link' => 'Link przekierowania',
    'removed' => 'Wypisy z kampanii',
    'send error' => 'Wiadomości zwrócone (błąd wysyłania)',
    'targeted' => 'Wiadomości wysłane',
    'viewed' => 'Wiadomości przeczytane',
  ),
  'campainglog_target_type_dom' => 
  array (
    'Contacts' => 'Kontakty',
    'Leads' => 'Namiary',
    'Prospects' => 'Odbiorcy',
    'Users' => 'Użytkownicy',
  ),
  'case_priority_dom' => 
  array (
    'P1' => 'Wysoki',
    'P2' => 'Średni',
    'P3' => 'Niski',
  ),
  'case_relationship_type_dom' => 
  array (
    '' => '',
    'Alternate Contact' => 'Kontakt alternatywny',
    'Primary Contact' => 'Kontakt podstawowy',
  ),
  'case_status_dom' => 
  array (
    'Assigned' => 'Przydzielone',
    'Closed' => 'Zamknięte',
    'Duplicate' => 'Powtórzone',
    'New' => 'Nowe',
    'Pending Input' => 'Oczekujące',
    'Rejected' => 'Odrzucone',
  ),
  'checkbox_dom' => 
  array (
    '' => '',
    1 => 'Tak',
    2 => 'Nie',
  ),
  'contract_expiration_notice_dom' => 
  array (
    1 => '1 dzień',
    3 => '3 dni',
    5 => '5 dni',
    7 => '1 tydzień',
    14 => '2 tygodnie',
    21 => '3 tygodnie',
    31 => '1 miesiąc',
  ),
  'contract_payment_frequency_dom' => 
  array (
    'halfyearly' => 'Półrocznie',
    'monthly' => 'Miesięcznie',
    'quarterly' => 'Kwartalnie',
    'yearly' => 'Rocznie',
  ),
  'contract_status_dom' => 
  array (
    'inprogress' => 'W trakcie',
    'notstarted' => 'Nierozpoczęty',
    'signed' => 'Podpisany',
  ),
  'cselect_type_dom' => 
  array (
    'Does not Equal' => 'Nie jest równe',
    'Equals' => 'Jest równe',
  ),
  'document_category_dom' => 
  array (
    '' => '',
    'Knowledege Base' => 'Baza Wiedzy',
    'Marketing' => 'Marketing',
    'Sales' => 'Sprzedaż',
  ),
  'document_status_dom' => 
  array (
    'Active' => 'Aktywny',
    'Draft' => 'Wersja robocza',
    'Expired' => 'Wygasły',
    'FAQ' => 'FAQ',
    'Pending' => 'Oczekujący',
    'Under Review' => 'W recenzji',
  ),
  'document_subcategory_dom' => 
  array (
    '' => '',
    'FAQ' => 'FAQ',
    'Marketing Collateral' => 'Materiały marketingowe',
    'Product Brochures' => 'Broszury produktowe',
  ),
  'document_template_type_dom' => 
  array (
    '' => '',
    'eula' => 'Warunki udzielenia licencji końcowemu użytkownikowi (EULA)',
    'license' => 'Umowa Licencyjna',
    'mailmerge' => 'Scalanie Poczty',
    'nda' => 'Umowa o poufności (NDA)',
  ),
  'dom_cal_month_long' => 
  array (
    1 => 'Styczeń',
    2 => 'Luty',
    3 => 'Marzec',
    4 => 'Kwiecień',
    5 => 'Maj',
    6 => 'Czerwiec',
    7 => 'Lipiec',
    8 => 'Sierpień',
    9 => 'Wrzesień',
    10 => 'Październik',
    11 => 'Listopad',
    12 => 'Grudzień',
  ),
  'dom_email_bool' => 
  array (
    'bool_false' => 'Nie',
    'bool_true' => 'Tak',
  ),
  'dom_email_distribution' => 
  array (
    '' => '--Brak--',
    'direct' => 'Przydziel bezpośrednio',
    'leastBusy' => 'Najmniej zajęty',
    'roundRobin' => 'Algorytm Round-Robin',
  ),
  'dom_email_editor_option' => 
  array (
    '' => 'Domyślny format wiadomości e-mail',
    'html' => 'HTML',
    'plain' => 'Tekst niesformatowny',
  ),
  'dom_email_errors' => 
  array (
    1 => 'W przypadku opcji Przydziel bezpośrednio, możliwy jest wybór tylko jednego użytkownika.',
    2 => 'Możesz przydzielić tylko zaznaczone elementy podczas bezpośredniego przydzielania.',
  ),
  'dom_email_link_type' => 
  array (
    '' => '--Brak--',
    'mailto' => 'Zewnętrzny klient pocztowy',
    'sugar' => 'Klient pocztowy SugarCRM',
  ),
  'dom_email_server_type' => 
  array (
    '' => '--Brak--',
    'imap' => 'IMAP',
    'pop3' => 'POP3',
  ),
  'dom_email_status' => 
  array (
    'archived' => 'Zarchiwizowane',
    'closed' => 'Zamknięte',
    'draft' => 'Wersja robocza',
    'read' => 'Przeczytano',
    'replied' => 'Odpowiedziano',
    'send_error' => 'Błąd wysyłania',
    'sent' => 'Wysłano',
    'unread' => 'Nieprzeczytane',
  ),
  'dom_email_types' => 
  array (
    'archived' => 'Zarchiwizowane',
    'draft' => 'Wersja robocza',
    'inbound' => 'Przychodząca',
    'out' => 'Wysłano',
  ),
  'dom_int_bool' => 
  array (
    1 => 'Tak',
  ),
  'dom_mailbox_type' => 
  array (
    'bounce' => 'Zwrot w przypadku niedoręczenia',
    'bug' => 'Utwórz Błąd',
    'contact' => 'Utwórz Kontakt',
    'pick' => 'Utwórz',
    'sales' => 'Utwórz Namiar',
    'support' => 'Utwórz Zgłoszenie',
    'task' => 'Dodaj zadanie',
  ),
  'dom_meeting_accept_options' => 
  array (
    'accept' => 'Akceptuj',
    'decline' => 'Odrzuć',
    'tentative' => 'Wstępna akceptacja',
  ),
  'dom_meeting_accept_status' => 
  array (
    'accept' => 'Zaakceptowany',
    'decline' => 'Odrzucony',
    'none' => 'Brak',
    'tentative' => 'Wstępna akceptacja',
  ),
  'dom_report_types' => 
  array (
    'detailed_summary' => 'Podsumowanie szczegółowe',
    'summary' => 'PodsumowanieSuma',
    'tabular' => 'Wiersze i Kolumny',
  ),
  'dom_switch_bool' => 
  array (
    '' => 'Nie',
    'off' => 'Nie',
    'on' => 'Tak',
  ),
  'dom_timezones' => 
  array (
    -12 => '(GMT - 12) International Date Line West',
    -11 => '(GMT - 11) Midway Island, Samoa',
    -10 => '(GMT - 10) Hawaii',
    -9 => '(GMT - 9) Alaska',
    -8 => '(GMT - 8) San Francisco',
    -7 => '(GMT - 7) Phoenix',
    -6 => '(GMT - 6) Saskatchewan',
    -5 => '(GMT - 5) New York',
    -4 => '(GMT - 4) Santiago',
    -3 => '(GMT - 3) Buenos Aires',
    -2 => '(GMT - 2) Mid-Atlantic',
    -1 => '(GMT - 1) Azores',
    1 => '(GMT + 1) Madrid',
    2 => '(GMT + 2) Athens',
    3 => '(GMT + 3) Moscow',
    4 => '(GMT + 4) Kabul',
    5 => '(GMT + 5) Ekaterinburg',
    6 => '(GMT + 6) Astana',
    7 => '(GMT + 7) Bangkok',
    8 => '(GMT + 8) Perth',
    9 => '(GMT + 9) Seol',
    10 => '(GMT + 10) Brisbane',
    11 => '(GMT + 11) Solomone Is.',
    12 => '(GMT + 12) Auckland',
  ),
  'dom_timezones_extra' => 
  array (
    -12 => '(GMT-12) International Date Line West',
    -11 => '(GMT-11) Midway Island, Samoa',
    -10 => '(GMT-10) Hawaii',
    -9 => '(GMT-9) Alaska',
    -8 => '(GMT-8) (PST)',
    -7 => '(GMT-7) (MST)',
    -6 => '(GMT-6) (CST)',
    -5 => '(GMT-5) (EST)',
    -4 => '(GMT-4) Santiago',
    -3 => '(GMT-3) Buenos Aires',
    -2 => '(GMT-2) Mid-Atlantic',
    -1 => '(GMT-1) Azores',
    1 => '(GMT+1) Madrid',
    2 => '(GMT+2) Athens',
    3 => '(GMT+3) Moscow',
    4 => '(GMT+4) Kabul',
    5 => '(GMT+5) Ekaterinburg',
    6 => '(GMT+6) Astana',
    7 => '(GMT+7) Bangkok',
    8 => '(GMT+8) Perth',
    9 => '(GMT+9) Seol',
    10 => '(GMT+10) Brisbane',
    11 => '(GMT+11) Solomone Is.',
    12 => '(GMT+12) Auckland',
  ),
  'dselect_type_dom' => 
  array (
    'Does not Equal' => 'Nie jest równe',
    'Equals' => 'Jest równe',
    'Less Than' => 'Mniej niż',
    'More Than' => 'Wiecej niż',
  ),
  'dtselect_type_dom' => 
  array (
    'Less Than' => 'jest mniej niż',
    'More Than' => 'było więcej niż',
  ),
  'duration_intervals' => 
  array (
    15 => '15',
    30 => '30',
    45 => '45',
  ),
  'email_marketing_status_dom' => 
  array (
    '' => '',
    'active' => 'Aktywny',
    'inactive' => 'Nieaktywny',
  ),
  'employee_status_dom' => 
  array (
    'Active' => 'Aktywny',
    'Leave of Absence' => 'Nieobecny',
    'Terminated' => 'Nie pracuje',
  ),
  'forecast_schedule_status_dom' => 
  array (
    'Active' => 'Aktywny',
    'Inactive' => 'Nieaktywny',
  ),
  'forecast_type_dom' => 
  array (
    'Direct' => 'Bezpośredni',
    'Rollup' => 'Rozwijany',
  ),
  'industry_dom' => 
  array (
    '' => '',
    'Apparel' => 'Branża odzieżowa',
    'Banking' => 'Bankowość',
    'Biotechnology' => 'Biotechnologia',
    'Chemicals' => 'Branża chemiczna',
    'Communications' => 'Komunikacja',
    'Construction' => 'Budownictwo',
    'Consulting' => 'Konsulting',
    'Education' => 'Edukacja',
    'Electronics' => 'Branża elektroniczna',
    'Energy' => 'Branża energetyczna',
    'Engineering' => 'Inżynieria',
    'Entertainment' => 'Branża rozrywkowa',
    'Environmental' => 'Ochrona środowiska',
    'Finance' => 'Usługi finansowe',
    'Government' => 'Instytucje publiczne',
    'Healthcare' => 'Ochrona zdrowia',
    'Hospitality' => 'Hotelarstwo',
    'Insurance' => 'Ubezpieczenia',
    'Machinery' => 'Przemysł maszynowy',
    'Manufacturing' => 'Przemysł wytwórczy',
    'Media' => 'Media',
    'Not For Profit' => 'Organizacje NonProfit',
    'Other' => 'Pozostałe',
    'Recreation' => 'Turystyka i rekreacja',
    'Retail' => 'Sprzedaż detaliczna',
    'Shipping' => 'Spedycja',
    'Technology' => 'Branża IT',
    'Telecommunications' => 'Telekomunikacja',
    'Transportation' => 'Transport',
    'Utilities' => 'Usługi',
  ),
  'language_pack_name' => 'Polski',
  'layouts_dom' => 
  array (
    'Invoice' => 'Faktura',
    'Standard' => 'Propozycja',
    'Terms' => 'Warunki płatności',
  ),
  'lead_source_dom' => 
  array (
    '' => '',
    'Cold Call' => 'Telemarketing',
    'Conference' => 'Uczestnik konferencji',
    'Direct Mail' => 'Reklama bezpośrednia',
    'Email' => 'Z e-maila',
    'Employee' => 'Pracownik',
    'Existing Customer' => 'Istniejący kontrahent',
    'Other' => 'Inne',
    'Partner' => 'Partner',
    'Public Relations' => 'Public Relations',
    'Self Generated' => 'Inicjatywa własna',
    'Trade Show' => 'Uczestnik prezentacji',
    'Web Site' => 'Ze strony WWW',
    'Word of mouth' => 'Z polecenia',
  ),
  'lead_status_dom' => 
  array (
    '' => '',
    'Assigned' => 'Przydzielony',
    'Converted' => 'Przekształcony',
    'Dead' => 'Utracony',
    'In Process' => 'W trakcie',
    'New' => 'Nowy',
    'Recycled' => 'Odzyskany',
  ),
  'lead_status_noblank_dom' => 
  array (
    'Assigned' => 'Przydzielony',
    'Converted' => 'Przekształcony',
    'Dead' => 'Utracony',
    'In Process' => 'W trakcie',
    'New' => 'Nowy',
    'Recycled' => 'Odzyskany',
  ),
  'meeting_status_dom' => 
  array (
    'Held' => 'Przeprowadzone',
    'Not Held' => 'Nieprzeprowadzone',
    'Planned' => 'Planowane',
  ),
  'messenger_type_dom' => 
  array (
    '' => '',
    'AOL' => 'Skype',
    'MSN' => 'MSN',
    'Yahoo!' => 'Yahoo!',
  ),
  'moduleList' => 
  array (
    'Bugs' => 'Błędy',
    'Cases' => 'Zgłoszenia',
    'FAQ' => 'FAQ',
    'Home' => 'Strona główna',
    'KBDocuments' => 'Baza wiedzy',
    'Newsletters' => 'Newslettery',
    'Notes' => 'Notatki',
    'Teams' => 'Zespoły',
    'Users' => 'Użytkownicy',
  ),
  'moduleListSingular' => 
  array (
    'Bugs' => 'Błąd',
    'Cases' => 'Zgłoszenie',
    'Home' => 'Strona główna',
    'Notes' => 'Notatka',
    'Teams' => 'Zespół',
    'Users' => 'Użytkownik',
  ),
  'mselect_type_dom' => 
  array (
    'Equals' => 'Jest',
    'in' => 'Jest jednym z',
  ),
  'notifymail_sendtype' => 
  array (
    'SMTP' => 'SMTP',
  ),
  'opportunity_relationship_type_dom' => 
  array (
    '' => '',
    'Business Decision Maker' => 'Decydent biznesowy',
    'Business Evaluator' => 'Opiniodawca biznesowy',
    'Executive Sponsor' => 'Sponsor wykonawczy',
    'Influencer' => 'Wpływający na decyzję',
    'Other' => 'Inny',
    'Primary Decision Maker' => 'Opiniodawca wstępny',
    'Technical Decision Maker' => 'Decydent techniczny',
    'Technical Evaluator' => 'Opiniodawca techniczny',
  ),
  'opportunity_type_dom' => 
  array (
    '' => '',
    'Existing Business' => 'Istniejący projekt',
    'New Business' => 'Nowy projekt',
  ),
  'order_stage_dom' => 
  array (
    'Cancelled' => 'Anulowane',
    'Confirmed' => 'Potwierdzone',
    'On Hold' => 'Wstrzymane',
    'Pending' => 'Oczekujące',
    'Shipped' => 'Wysłane',
  ),
  'payment_terms' => 
  array (
    '' => '',
    'Net 15' => 'Netto 15',
    'Net 30' => 'Netto 30',
  ),
  'pricing_formula_dom' => 
  array (
    'Fixed' => 'Cena stała',
    'IsList' => 'Jak w cenniku',
    'PercentageDiscount' => 'Upust',
    'PercentageMarkup' => 'Marża na koszcie',
    'ProfitMargin' => 'Marża z zysku',
  ),
  'product_category_dom' => 
  array (
    '' => '',
    'Accounts' => 'Kontrahenci',
    'Activities' => 'Wydarzenia',
    'Bug Tracker' => 'Śledzenie błędów',
    'Calendar' => 'Kalendarz',
    'Calls' => 'Telefony',
    'Campaigns' => 'Kampanie',
    'Cases' => 'Zgłoszenia',
    'Contacts' => 'Kontakty',
    'Currencies' => 'Kursy',
    'Dashboard' => 'Raporty',
    'Documents' => 'Dokumenty',
    'Emails' => 'Wiadomości e-mail',
    'Feeds' => 'Kanały',
    'Forecasts' => 'Prognozy',
    'Help' => 'Pomoc',
    'Home' => 'Strona główna',
    'Leads' => 'Namiary',
    'Meetings' => 'Spotkania',
    'Notes' => 'Notatki',
    'Opportunities' => 'Szanse',
    'Outlook Plugin' => 'Wtyczki Outlook',
    'Product Catalog' => 'Katalog produktów',
    'Products' => 'Produkty',
    'Projects' => 'Projekty',
    'Quotes' => 'Oferty',
    'RSS' => 'Kanały RSS',
    'Releases' => 'Wersje',
    'Studio' => 'Studio',
    'Upgrade' => 'Aktualizacja',
    'Users' => 'Użytkownicy',
  ),
  'product_status_dom' => 
  array (
    'Orders' => 'Zamówiono',
    'Quotes' => 'Ofertowano',
    'Ship' => 'Wysłano',
  ),
  'product_status_quote_key' => 'Oferty',
  'product_template_status_dom' => 
  array (
    'Available' => 'Dostępny',
    'Unavailable' => 'Niedostępny',
  ),
  'project_task_priority_options' => 
  array (
    'High' => 'Wysoki',
    'Low' => 'Niski',
    'Medium' => 'Średni',
  ),
  'project_task_status_options' => 
  array (
    'Completed' => 'Zakończony',
    'Deferred' => 'Przeoczony',
    'In Progress' => 'W realizacji',
    'Not Started' => 'Nierozpoczęty',
    'Pending Input' => 'Oczekujący',
  ),
  'project_task_utilization_options' => 
  array (
    25 => '25',
    50 => '50',
    75 => '75',
    100 => '100',
  ),
  'prospect_list_type_dom' => 
  array (
    'default' => 'Domyślny',
    'exempt' => 'Lista ograniczeń po ID',
    'exempt_address' => 'Lista ograniczeń po adresie e-mail',
    'exempt_domain' => 'Lista ograniczeń po domenie',
    'seed' => 'Recenzenci',
    'test' => 'Test',
  ),
  'query_calc_oper_dom' => 
  array (
    '*' => '(X) mnożone przez',
    '+' => '(+) plus',
    '-' => '(-) minus',
    '/' => '(/) dzielone przez',
  ),
  'quote_relationship_type_dom' => 
  array (
    '' => '',
    'Business Decision Maker' => 'Decydent biznesowy',
    'Business Evaluator' => 'Opiniodawca biznesowy',
    'Executive Sponsor' => 'Sponsor wykonawczy',
    'Influencer' => 'Wpływający na decyzję',
    'Other' => 'Inny',
    'Primary Decision Maker' => 'Opiniodawca wstępny',
    'Technical Decision Maker' => 'Decydent techniczny',
    'Technical Evaluator' => 'Opiniodawca techniczny',
  ),
  'quote_stage_dom' => 
  array (
    'Closed Accepted' => 'Zamknięte - Akceptacja',
    'Closed Dead' => 'Zamknięte - Przegrany',
    'Closed Lost' => 'Zamknięte - Utracony',
    'Confirmed' => 'Potwierdzone',
    'Delivered' => 'Dostarczone',
    'Draft' => 'Wersja robocza',
    'Negotiation' => 'Negocjowane',
    'On Hold' => 'Wstrzymane',
  ),
  'quote_type_dom' => 
  array (
    'Orders' => 'Zamówienie',
    'Quotes' => 'Oferta',
  ),
  'record_type_display' => 
  array (
    'Accounts' => 'Kontrahenci',
    'Bugs' => 'Błąd',
    'Cases' => 'Zgłoszenia',
    'Contacts' => 'Kontakty',
    'Leads' => 'Namiary',
    'Opportunities' => 'Szanse',
    'ProductTemplates' => 'Produkty',
    'Project' => 'Realizacja',
    'ProjectTask' => 'Zadania projektu',
    'Quotes' => 'Oferta',
    'Tasks' => 'Zadanie',
  ),
  'record_type_display_notes' => 
  array (
    'Accounts' => 'Kontrahenc',
    'Bugs' => 'Błąd',
    'Calls' => 'Rozmowa tel.',
    'Cases' => 'Zgłoszenie',
    'Contacts' => 'Kontakt',
    'Contracts' => 'Umowa',
    'Emails' => 'E-mail',
    'Leads' => 'Namiar',
    'Meetings' => 'Spotkanie',
    'Opportunities' => 'Szansa',
    'ProductTemplates' => 'Produkt',
    'Products' => 'Produkt',
    'Project' => 'Projekt',
    'ProjectTask' => 'Zadania projektu',
    'Quotes' => 'Oferta',
  ),
  'reminder_max_time' => '3600',
  'reminder_time_options' => 
  array (
    60 => '1 minutę przed',
    300 => '5 minut przed',
    600 => '10 minut przed',
    900 => '15 minut przed',
    1800 => '30 minut przed',
    3600 => '1 godzinę przed',
  ),
  'sales_probability_dom' => 
  array (
    'Closed Lost' => '',
    'Closed Won' => '100',
    'Id. Decision Makers' => '40',
    'Needs Analysis' => '25',
    'Negotiation/Review' => '80',
    'Perception Analysis' => '50',
    'Proposal/Price Quote' => '65',
    'Prospecting' => '10',
    'Qualification' => '20',
    'Value Proposition' => '30',
  ),
  'sales_stage_dom' => 
  array (
    'Closed Lost' => 'Zakończone porażką',
    'Closed Won' => 'Zakończone sukcesem',
    'Id. Decision Makers' => 'Ident. osób decyzyjnych',
    'Needs Analysis' => 'Wymagana analiza',
    'Negotiation/Review' => 'Negocjacje',
    'Perception Analysis' => 'Analiza oferty',
    'Proposal/Price Quote' => 'Propozycja cenowa',
    'Prospecting' => 'Wstępna analiza',
    'Qualification' => 'Klasyfikacja klienta',
    'Value Proposition' => 'Pocz. prop. cenowa',
  ),
  'salutation_dom' => 
  array (
    '' => '',
    'Dr.' => 'Dr.',
    'Mr.' => 'Sz. Pan',
    'Mrs.' => 'Sz. Pani',
    'Ms.' => 'Sz. Pani',
    'Prof.' => 'Prof.',
  ),
  'schedulers_times_dom' => 
  array (
    'completed' => 'Zakończony',
    'failed' => 'Nieudany',
    'in progress' => 'W trakcie',
    'no curl' => 'Moduł cURL niedostępny',
    'not run' => 'Nie wykonano',
    'ready' => 'Gotowy',
  ),
  'source_dom' => 
  array (
    '' => '',
    'Forum' => 'Forum',
    'InboundEmail' => 'E-mail',
    'Internal' => 'Pracownik',
    'Web' => 'Strona internetowa',
  ),
  'support_term_dom' => 
  array (
    '+1 year' => '1 rok',
    '+2 years' => '2 lata',
    '+6 months' => '6 miesięcy',
  ),
  'task_priority_dom' => 
  array (
    'High' => 'Wysoki',
    'Low' => 'Niski',
    'Medium' => 'Średni',
  ),
  'task_status_dom' => 
  array (
    'Completed' => 'Zakończone',
    'Deferred' => 'Odroczone',
    'In Progress' => 'W trakcie',
    'Not Started' => 'Nierozpoczęte',
    'Pending Input' => 'W kolejce',
  ),
  'tax_class_dom' => 
  array (
    'Non-Taxable' => 'Niepodlegający opodatkowaniu',
    'Taxable' => 'Podlegający opodatkowaniu',
  ),
  'tselect_type_dom' => 
  array (
    14440 => '4 godziny',
    28800 => '8 godzin',
    43200 => '12 godzin',
    86400 => '1 dzień',
    172800 => '2 dni',
    259200 => '3 dni',
    345600 => '4 dni',
    432000 => '5 dni',
    604800 => '1 tydzień',
    1209600 => '2 tygodnie',
    1814400 => '3 tygodnie',
    2592000 => '30 dni',
    5184000 => '60 dni',
    7776000 => '90 dni',
    10368000 => '120 dni',
    12960000 => '150 dni',
    15552000 => '180 dni',
  ),
  'user_status_dom' => 
  array (
    'Active' => 'Aktywny',
    'Inactive' => 'Nieaktywny',
  ),
  'wflow_action_datetime_type_dom' => 
  array (
    'Existing Value' => 'Obecna wartość',
    'Triggered Date' => 'Data wykonania',
  ),
  'wflow_action_type_dom' => 
  array (
    'new' => 'Nowy rekord',
    'update' => 'Aktualizuj rekord',
    'update_rel' => 'Aktualizuj powiązane rekordy',
  ),
  'wflow_address_type_dom' => 
  array (
    'bcc' => 'UDW:',
    'cc' => 'DW:',
    'to' => 'Do:',
  ),
  'wflow_address_type_invite_dom' => 
  array (
    'bcc' => 'UDW:',
    'cc' => 'DW:',
    'invite_only' => '(Tylko zaproszeni)',
    'to' => 'Do:',
  ),
  'wflow_address_type_to_only_dom' => 
  array (
    'to' => 'Do:',
  ),
  'wflow_adv_enum_type_dom' => 
  array (
    'advance' => 'Przesuń pozycję listy w górę o',
    'retreat' => 'Przesuń pozycję listy w dół o',
  ),
  'wflow_adv_team_type_dom' => 
  array (
    'current_team' => 'Zespół zalogowanego użytkownika',
    'team_id' => 'Aktualny zespół rekordu',
  ),
  'wflow_adv_user_type_dom' => 
  array (
    'assigned_user_id' => 'Użytkownik przydzielony do rekordu',
    'created_by' => 'Użytkownik, który utworzył rekord',
    'current_user' => 'Zalogowany użytkownik',
    'modified_user_id' => 'Użytkownik ostatnio modyfikujący rekord',
  ),
  'wflow_alert_type_dom' => 
  array (
    'Email' => 'E-mail',
    'Invite' => 'Zaproszenie',
  ),
  'wflow_array_type_dom' => 
  array (
    'future' => 'Nowa wartość',
    'past' => 'Stara wartość',
  ),
  'wflow_fire_order_dom' => 
  array (
    'actions_alerts' => 'Działaj, potem ostrzeż',
    'alerts_actions' => 'Ostrzeż, potem działaj',
  ),
  'wflow_record_type_dom' => 
  array (
    'All' => 'Nowe i istniejace rekordy',
    'New' => 'Tylko nowe rekordy',
    'Update' => 'Tylko istniejące rekordy',
  ),
  'wflow_rel_type_dom' => 
  array (
    'all' => 'Wszystkie powiązane',
    'filter' => 'Powiązane filtrem',
  ),
  'wflow_relate_type_dom' => 
  array (
    'Manager' => 'Menedżer użytkownika',
    'Self' => 'Użytkownik',
  ),
  'wflow_relfilter_type_dom' => 
  array (
    'all' => 'wszystkie powiązane',
    'any' => 'jakiekolwiek powiązane',
  ),
  'wflow_set_type_dom' => 
  array (
    'Advanced' => 'Opcje zaawansowane',
    'Basic' => 'Opcje podstawowe',
  ),
  'wflow_source_type_dom' => 
  array (
    'Custom Template' => 'Własny szablon',
    'Normal Message' => 'Zwykła wiadomość',
    'System Default' => 'Domyślne systemu',
  ),
  'wflow_type_dom' => 
  array (
    'Normal' => 'Podczas zapisywania rekordu',
    'Time' => 'Po upływie czasu',
  ),
  'wflow_user_type_dom' => 
  array (
    'current_user' => 'Aktualny użytkownik',
    'rel_user' => 'Powiązani użytkownicy',
    'rel_user_custom' => 'Powiązany użytkownik własny',
    'specific_role' => 'Określona rola',
    'specific_team' => 'Określony zespół',
    'specific_user' => 'Określony użytkownik',
  ),
);

$app_strings = array (
  'ERROR_FULLY_EXPIRED' => 'Licencja na system SugarCRM dla Twojej firmy wygasła wiecej  niż 30 dni temu i musi zostać odnowiona. Tylko Administrator może sie zalogować',
  'ERROR_LICENSE_EXPIRED' => 'Licencja na system SugarCRM dla Twojej firmy musi zostać odnowiona. Tylko administrator może się zalogować',
  'ERROR_NO_RECORD' => 'Błąd wyszukiwania rekordu.  Został on prawdopodobnie usunięty lub nie masz uprawnień, aby go zobaczyć',
  'ERR_CREATING_FIELDS' => 'Błąd wypełnienia dodatkowego pola:',
  'ERR_CREATING_TABLE' => 'Błąd przy utworzeniu tabeli:',
  'ERR_DELETE_RECORD' => 'Musi być podany numer rekordu, aby usunąc kontakt.',
  'ERR_EXPORT_DISABLED' => 'Eksport wyłączony.',
  'ERR_EXPORT_TYPE' => 'Błąd podczas eksportu',
  'ERR_INVALID_AMOUNT' => 'Wprowadź prawidłową wartość.',
  'ERR_INVALID_DATE' => 'Wprowadź prawidłową datę.',
  'ERR_INVALID_DATE_FORMAT' => 'Format daty musi być następujący:',
  'ERR_INVALID_DAY' => 'Wprowadź prawidłowy dzień.',
  'ERR_INVALID_EMAIL_ADDRESS' => 'nieprawidłowy format adresu e-mail.',
  'ERR_INVALID_HOUR' => 'Wprowadź prawidłową godzinę.',
  'ERR_INVALID_MONTH' => 'Wprowadź prawidłowy miesiąc.',
  'ERR_INVALID_REQUIRED_FIELDS' => 'Nieprawidłowy format wymaganego pola:',
  'ERR_INVALID_TIME' => 'Wprowadź prawidłowy czas.',
  'ERR_INVALID_VALUE' => 'Nieprawidowa wartość:',
  'ERR_INVALID_YEAR' => 'Wprowadź poprawny czterocyfrowy format roku.',
  'ERR_MISSING_REQUIRED_FIELDS' => 'Brakuje wymaganego pola:',
  'ERR_NEED_ACTIVE_SESSION' => 'Wymagana jest aktywna sesja, aby wyeksportować zawartość.',
  'ERR_NOTHING_SELECTED' => 'Dokonaj wyboru przed kontynuacją.',
  'ERR_OPPORTUNITY_NAME_DUPE' => 'Szansa o nazwie %s już istnieje.  Wprowadź inną nazwę poniżej.',
  'ERR_OPPORTUNITY_NAME_MISSING' => 'Nazwa szansy nie została podana.  Wprowadź nazwę szansy poniżej.',
  'ERR_PORTAL_LOGIN_FAILED' => 'Nie można utworzyć sesji logowania do portalu. Skontaktuj się z administratorem.',
  'ERR_RESOURCE_MANAGEMENT_INFO' => 'Wróć do <a href="index.php">Strony głównej</a>',
  'ERR_SELF_REPORTING' => 'Użytkownik nie może być swoim zwierzchnikiem.',
  'ERR_SQS_NO_MATCH' => 'Nie pasuje',
  'ERR_SQS_NO_MATCH_FIELD' => 'Niepoprawne dane dla pola:',
  'LBL_ACCOUNT' => 'Kontrahent',
  'LBL_ACCOUNTS' => 'Kontrahenci',
  'LBL_ACCUMULATED_HISTORY_BUTTON_KEY' => 'H',
  'LBL_ACCUMULATED_HISTORY_BUTTON_LABEL' => 'Zobacz podsumowanie',
  'LBL_ACCUMULATED_HISTORY_BUTTON_TITLE' => 'Zobacz podsumowanie',
  'LBL_ADDITIONAL_DETAILS' => 'Informacje dodatkowe',
  'LBL_ADDITIONAL_DETAILS_CLOSE' => 'Zamknij',
  'LBL_ADDITIONAL_DETAILS_CLOSE_TITLE' => 'Kliknij, aby zamknąć',
  'LBL_ADD_BUTTON' => 'Dodaj',
  'LBL_ADD_BUTTON_KEY' => 'A',
  'LBL_ADD_BUTTON_TITLE' => 'Dodaj',
  'LBL_ADD_DOCUMENT' => 'Dodaj dokument',
  'LBL_ADD_TO_PROSPECT_LIST_BUTTON_KEY' => 'L',
  'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL' => 'Dodaj do grupy odbiorców',
  'LBL_ADD_TO_PROSPECT_LIST_BUTTON_TITLE' => 'Dodaj do grupy odbiorców',
  'LBL_ADMIN' => 'Administrator',
  'LBL_ALT_HOT_KEY' => '',
  'LBL_ARCHIVE' => 'Archiwum',
  'LBL_ASSIGNED_TO' => 'Przydzielono do:',
  'LBL_ASSIGNED_TO_USER' => 'Przydzielono do użytkownika',
  'LBL_BACK' => 'Powrót',
  'LBL_BILL_TO_ACCOUNT' => 'Zafakturuj dla kontrahenta',
  'LBL_BILL_TO_CONTACT' => 'Zafakturuj dla kontaktu',
  'LBL_BROWSER_TITLE' => 'SugarCRM - Komercyjny Open Source CRM',
  'LBL_BUGS' => 'Błędy',
  'LBL_BY' => 'przez',
  'LBL_CALLS' => 'Rozmowy tel.',
  'LBL_CAMPAIGNS_SEND_QUEUED' => 'Wyślij oczekującą Pocztę Kampanii',
  'LBL_CANCEL_BUTTON_KEY' => 'X',
  'LBL_CANCEL_BUTTON_LABEL' => 'Usuń',
  'LBL_CANCEL_BUTTON_TITLE' => 'Usuń',
  'LBL_CASE' => 'Zgłoszenie',
  'LBL_CASES' => 'Zgłoszenia',
  'LBL_CHANGE_BUTTON_KEY' => 'G',
  'LBL_CHANGE_BUTTON_LABEL' => 'Zmień',
  'LBL_CHANGE_BUTTON_TITLE' => 'Zmień',
  'LBL_CHANGE_PASSWORD' => 'Zmień hasło',
  'LBL_CHARSET' => 'UTF-8',
  'LBL_CHECKALL' => 'Zaznacz wszystko',
  'LBL_CLEARALL' => 'Wyczyść wszystko',
  'LBL_CLEAR_BUTTON_KEY' => 'C',
  'LBL_CLEAR_BUTTON_LABEL' => 'Wyczyść',
  'LBL_CLEAR_BUTTON_TITLE' => 'Wyczyść',
  'LBL_CLOSEALL_BUTTON_KEY' => 'Q',
  'LBL_CLOSEALL_BUTTON_LABEL' => 'Zamknij wszystko',
  'LBL_CLOSEALL_BUTTON_TITLE' => 'Zamknij wszystko',
  'LBL_CLOSE_WINDOW' => 'Zamknij okno',
  'LBL_COMPOSE_EMAIL_BUTTON_KEY' => 'L',
  'LBL_COMPOSE_EMAIL_BUTTON_LABEL' => 'Napisz e-mail',
  'LBL_COMPOSE_EMAIL_BUTTON_TITLE' => 'Napisz e-mail',
  'LBL_CONTACT' => 'Kontakt',
  'LBL_CONTACTS' => 'Kontakty',
  'LBL_CONTACT_LIST' => 'Kontakty',
  'LBL_CREATED' => 'Utworzone przez',
  'LBL_CREATED_BY_USER' => 'Utworzone przez użytkownika',
  'LBL_CREATE_BUTTON_LABEL' => 'Utwórz',
  'LBL_CURRENT_USER_FILTER' => 'Tylko moje obiekty:',
  'LBL_DATE_ENTERED' => 'Data utworzenia:',
  'LBL_DATE_MODIFIED' => 'Ostatnia modyfikacja:',
  'LBL_DELETE' => 'Usuń',
  'LBL_DELETED' => 'Usunięto',
  'LBL_DELETE_BUTTON' => 'Usuń',
  'LBL_DELETE_BUTTON_KEY' => 'D',
  'LBL_DELETE_BUTTON_LABEL' => 'Usuń',
  'LBL_DELETE_BUTTON_TITLE' => 'Usuń',
  'LBL_DIRECT_REPORTS' => 'Raporty bezpośrednie',
  'LBL_DISPLAY_COLUMNS' => 'Wyświetl kolumny',
  'LBL_DONE_BUTTON_KEY' => 'X',
  'LBL_DONE_BUTTON_LABEL' => 'Wykonano',
  'LBL_DONE_BUTTON_TITLE' => 'Wykonano',
  'LBL_DST_NEEDS_FIXIN' => 'Aplikacja wymaga użycia funkcji korekty czasu letniego.  Kliknij <a href="index.php?module=Administration&action=DstFix">Napraw</a> w Panelu Administracyjnym i zatwierdź Korektę Czasu.',
  'LBL_DUPLICATE_BUTTON' => 'Duplikuj',
  'LBL_DUPLICATE_BUTTON_KEY' => 'U',
  'LBL_DUPLICATE_BUTTON_LABEL' => 'Duplikuj',
  'LBL_DUPLICATE_BUTTON_TITLE' => 'Duplikuj',
  'LBL_DUP_MERGE' => 'Wyszukaj duplikaty',
  'LBL_EDIT_BUTTON' => 'Edytuj',
  'LBL_EDIT_BUTTON_KEY' => 'E',
  'LBL_EDIT_BUTTON_LABEL' => 'Edytuj',
  'LBL_EDIT_BUTTON_TITLE' => 'Edytuj',
  'LBL_EMAILS' => 'Wiadomości',
  'LBL_EMAIL_PDF_BUTTON_KEY' => 'M',
  'LBL_EMAIL_PDF_BUTTON_LABEL' => 'Wyślij jako PDF',
  'LBL_EMAIL_PDF_BUTTON_TITLE' => 'Wyślij jako PDF',
  'LBL_EMPLOYEES' => 'Pracownicy',
  'LBL_ENTER_DATE' => 'Wprowadź datę',
  'LBL_EXPORT' => 'Eksport',
  'LBL_EXPORT_ALL' => 'Eksportuj wszystko',
  'LBL_FULL_FORM_BUTTON_KEY' => 'F',
  'LBL_FULL_FORM_BUTTON_LABEL' => 'Pełna wersja formularza',
  'LBL_FULL_FORM_BUTTON_TITLE' => 'Pełna wersja formularza',
  'LBL_HIDE' => 'Ukryj',
  'LBL_HIDE_COLUMNS' => 'Ukryj kolumny',
  'LBL_ID' => 'ID',
  'LBL_IMPORT' => 'Import',
  'LBL_IMPORT_PROSPECTS' => 'Importuj odbiorców',
  'LBL_LAST_VIEWED' => 'Ostatnio oglądane',
  'LBL_LEADS' => 'Namiary',
  'LBL_LISTVIEW_MASS_UPDATE_CONFIRM' => 'Czy na pewno chcesz uaktualnić listę?',
  'LBL_LISTVIEW_NO_SELECTED' => 'Wybierz co najmniej jeden rekord, aby kontynuować',
  'LBL_LISTVIEW_OPTION_CURRENT' => 'Bieżąca strona',
  'LBL_LISTVIEW_OPTION_ENTIRE' => 'Cała lista',
  'LBL_LISTVIEW_OPTION_SELECTED' => 'Wybrane rekordy',
  'LBL_LISTVIEW_SELECTED_OBJECTS' => 'Wybrane:',
  'LBL_LIST_ACCOUNT_NAME' => 'Nazwa kontrahenta',
  'LBL_LIST_ASSIGNED_USER' => 'Użytkownik',
  'LBL_LIST_CONTACT_NAME' => 'Nazwa kontaktu',
  'LBL_LIST_CONTACT_ROLE' => 'Rola kontaktu',
  'LBL_LIST_EMAIL' => 'E-mail',
  'LBL_LIST_NAME' => 'Nazwa',
  'LBL_LIST_OF' => 'z',
  'LBL_LIST_PHONE' => 'Telefon',
  'LBL_LIST_TEAM' => 'Zespół',
  'LBL_LIST_USER_NAME' => 'Nazwa użytkownika',
  'LBL_LOADING' => 'Ładowanie..',
  'LBL_LOCALE_NAME_EXAMPLE_FIRST' => 'Jan',
  'LBL_LOCALE_NAME_EXAMPLE_LAST' => 'Nowak',
  'LBL_LOCALE_NAME_EXAMPLE_SALUTATION' => 'Sz. Pan',
  'LBL_LOGIN_SESSION_EXCEEDED' => 'Serwer jest zbyt obciążony. Spróbuj później.',
  'LBL_LOGIN_TO_ACCESS' => 'Zaloguj się, aby przejść dalej.',
  'LBL_LOGOUT' => 'Wyloguj',
  'LBL_MAILMERGE' => 'Scal pocztę',
  'LBL_MAILMERGE_KEY' => 'M',
  'LBL_MASS_UPDATE' => 'Masowa aktualizacja',
  'LBL_MEETINGS' => 'Spotkania',
  'LBL_MEMBERS' => 'Uczestnicy',
  'LBL_MODIFIED' => 'Zmodyfikowane przez',
  'LBL_MODIFIED_BY_USER' => 'Zmodyfikowane przez użytkownika',
  'LBL_MY_ACCOUNT' => 'Moje konto',
  'LBL_NAME' => 'Nazwa',
  'LBL_NEW_BUTTON_KEY' => 'N',
  'LBL_NEW_BUTTON_LABEL' => 'Utwórz',
  'LBL_NEW_BUTTON_TITLE' => 'Utwórz',
  'LBL_NEXT_BUTTON_LABEL' => 'Dalej',
  'LBL_NONE' => '--Brak--',
  'LBL_NOTES' => 'Notatki',
  'LBL_NO_RECORDS_FOUND' => '- Znaleziono 0 rekordów -',
  'LBL_OPENALL_BUTTON_KEY' => 'O',
  'LBL_OPENALL_BUTTON_LABEL' => 'Otwórz wszystko',
  'LBL_OPENALL_BUTTON_TITLE' => 'Otwórz wszystko',
  'LBL_OPENTO_BUTTON_KEY' => 'T',
  'LBL_OPENTO_BUTTON_LABEL' => 'Otwórz Do:',
  'LBL_OPENTO_BUTTON_TITLE' => 'Otwórz Do:',
  'LBL_OPPORTUNITIES' => 'Szanse',
  'LBL_OPPORTUNITY' => 'Szansa',
  'LBL_OPPORTUNITY_NAME' => 'Nazwa szansy',
  'LBL_OR' => 'Lub',
  'LBL_PERCENTAGE_SYMBOL' => '%',
  'LBL_PRODUCTS' => 'Produkty',
  'LBL_PRODUCT_BUNDLES' => 'Produkty powiązane',
  'LBL_PROJECTS' => 'Projekty',
  'LBL_PROJECT_TASKS' => 'Zadania projektowe',
  'LBL_QUOTES' => 'Oferty',
  'LBL_QUOTES_SHIP_TO' => 'Wyślij ofertę do',
  'LBL_QUOTE_TO_OPPORTUNITY_KEY' => 'O',
  'LBL_QUOTE_TO_OPPORTUNITY_LABEL' => 'Utwórz szansę z oferty',
  'LBL_QUOTE_TO_OPPORTUNITY_TITLE' => 'Utwórz szansę z oferty',
  'LBL_RELATED_RECORDS' => 'Powiązane rekordy',
  'LBL_REMOVE' => 'Usuń',
  'LBL_REQUIRED_SYMBOL' => '*',
  'LBL_SAVED' => 'Zapisano',
  'LBL_SAVED_LAYOUT' => 'Wygląd został zapisany.',
  'LBL_SAVED_VIEWS' => 'Zapisane widoki',
  'LBL_SAVE_BUTTON_KEY' => 'S',
  'LBL_SAVE_BUTTON_LABEL' => 'Zapisz',
  'LBL_SAVE_BUTTON_TITLE' => 'Zapisz',
  'LBL_SAVE_NEW_BUTTON_KEY' => 'V',
  'LBL_SAVE_NEW_BUTTON_LABEL' => 'Zapisz i utwórz nowe',
  'LBL_SAVE_NEW_BUTTON_TITLE' => 'Zapisz i utwórz nowe',
  'LBL_SAVING' => 'Zapisywanie',
  'LBL_SAVING_LAYOUT' => 'Zapisz wygląd ...',
  'LBL_SEARCH' => 'Wyszukiwanie',
  'LBL_SEARCH_BUTTON_KEY' => 'Q',
  'LBL_SEARCH_BUTTON_LABEL' => 'Wyszukiwanie',
  'LBL_SEARCH_BUTTON_TITLE' => 'Wyszukiwanie',
  'LBL_SEARCH_CRITERIA' => 'Kryteria wyszukiwania',
  'LBL_SELECT_BUTTON_KEY' => 'T',
  'LBL_SELECT_BUTTON_LABEL' => 'Wybierz',
  'LBL_SELECT_BUTTON_TITLE' => 'Wybierz',
  'LBL_SELECT_CONTACT_BUTTON_KEY' => 'T',
  'LBL_SELECT_CONTACT_BUTTON_LABEL' => 'Wybierz kontakt',
  'LBL_SELECT_CONTACT_BUTTON_TITLE' => 'Wybierz kontakt',
  'LBL_SELECT_REPORTS_BUTTON_LABEL' => 'Wybierz z raportów',
  'LBL_SELECT_REPORTS_BUTTON_TITLE' => 'Wybierz raporty',
  'LBL_SELECT_USER_BUTTON_KEY' => 'U',
  'LBL_SELECT_USER_BUTTON_LABEL' => 'Wybierz użytkownika',
  'LBL_SELECT_USER_BUTTON_TITLE' => 'Wybierz użytkownika',
  'LBL_SERVER_RESPONSE_RESOURCES' => 'Źródła użyte do konstrukcji tej strony (zapytania, pliki)',
  'LBL_SERVER_RESPONSE_TIME' => 'Czas odpowiedzi serwera:',
  'LBL_SERVER_RESPONSE_TIME_SECONDS' => 'sekund.',
  'LBL_SHIP_TO_ACCOUNT' => 'Wyślij do klienta',
  'LBL_SHIP_TO_CONTACT' => 'Wyślij do kontaktu',
  'LBL_SHORTCUTS' => 'Skróty',
  'LBL_SHOW' => 'Pokaż',
  'LBL_SQS_INDICATOR' => '',
  'LBL_STATUS' => 'Status:',
  'LBL_STATUS_UPDATED' => 'Twój status dla tego zdarzenia został uaktualniony!',
  'LBL_SUBJECT' => 'Temat',
  'LBL_SYNC' => 'Synchronizacja',
  'LBL_TASKS' => 'Zadania',
  'LBL_TEAM' => 'Zespół;',
  'LBL_TEAMS_LINK' => 'Zespoł',
  'LBL_TEAM_ID' => 'ID zespołu:',
  'LBL_THOUSANDS_SYMBOL' => 'K',
  'LBL_TRACK_EMAIL_BUTTON_KEY' => 'K',
  'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'Archiwizuj e-mail',
  'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'Archiwizuj e-mail',
  'LBL_UNAUTH_ADMIN' => 'Nieautoryzowany dostęp do modułu Administracji',
  'LBL_UNDELETE' => 'Odzyskaj',
  'LBL_UNDELETE_BUTTON' => 'Odzyskaj',
  'LBL_UNDELETE_BUTTON_LABEL' => 'Odzyskaj',
  'LBL_UNDELETE_BUTTON_TITLE' => 'Odzyskaj',
  'LBL_UNSYNC' => 'Cofnij synchronizację',
  'LBL_UPDATE' => 'Aktualizuj',
  'LBL_USERS' => 'Użytkownicy',
  'LBL_USERS_SYNC' => 'Synchronizacja użytkowników',
  'LBL_USER_LIST' => 'Użytkownicy',
  'LBL_VIEW_BUTTON' => 'Zobacz',
  'LBL_VIEW_BUTTON_KEY' => 'V',
  'LBL_VIEW_BUTTON_LABEL' => 'Zobacz',
  'LBL_VIEW_BUTTON_TITLE' => 'Zobacz',
  'LBL_VIEW_PDF_BUTTON_KEY' => 'P',
  'LBL_VIEW_PDF_BUTTON_LABEL' => 'Drukuj jako PDF',
  'LBL_VIEW_PDF_BUTTON_TITLE' => 'Drukuj jako PDF',
  'LNK_ABOUT' => 'O Twórcach',
  'LNK_ADVANCED_SEARCH' => 'Wyszukiwanie zaawansowane',
  'LNK_BASIC_SEARCH' => 'Wyszukiwanie podstawowe',
  'LNK_DELETE' => 'usuń',
  'LNK_DELETE_ALL' => 'usuń wszystko',
  'LNK_EDIT' => 'edytuj',
  'LNK_GET_LATEST' => 'Pobierz najnowsze',
  'LNK_GET_LATEST_TOOLTIP' => 'Zamień na najnowszą wersję',
  'LNK_HELP' => 'Pomoc',
  'LNK_LIST_END' => 'Koniec',
  'LNK_LIST_NEXT' => 'Następny',
  'LNK_LIST_PREVIOUS' => 'Poprzedni',
  'LNK_LIST_RETURN' => 'Wróć do listy',
  'LNK_LIST_START' => 'Początek',
  'LNK_LOAD_SIGNED' => 'Podpis',
  'LNK_LOAD_SIGNED_TOOLTIP' => 'Zamień na podpisany dokument',
  'LNK_PRINT' => 'Drukuj',
  'LNK_REMOVE' => 'usuń',
  'LNK_RESUME' => 'Wznów',
  'LNK_VIEW_CHANGE_LOG' => 'Zobacz historię zmian',
  'LOGIN_LOGO_ERROR' => 'Proszę, zamień loga SugarCRM na swoje.',
  'NTC_CLICK_BACK' => 'Kliknij "Wstecz" w przeglądarce, aby zmienić ustawienia',
  'NTC_DATE_FORMAT' => '(yyyy-mm-dd)',
  'NTC_DATE_TIME_FORMAT' => '(yyyy-mm-dd 24:00)',
  'NTC_DELETE_CONFIRMATION' => 'Czy na pewno chcesz usunąć ten rekord?',
  'NTC_DELETE_CONFIRMATION_MULTIPLE' => 'Czy na pewno chcesz usunąć zaznaczony(e) rekord(y)?',
  'NTC_LOGIN_MESSAGE' => 'Wprowadź nazwę użytkownika i hasło.',
  'NTC_NO_ITEMS_DISPLAY' => 'brak',
  'NTC_REMOVE_CONFIRMATION' => 'Czy na pewno chcesz usunac tę zależność',
  'NTC_REQUIRED' => 'Pola wymagane',
  'NTC_SUPPORT_SUGARCRM' => 'Wesprzyj projekt wpłacając dobrowolny datek korzystając z szybkiego, darmowego i bezpiecznego systemu PayPal!',
  'NTC_TIME_FORMAT' => '(24:00)',
  'NTC_WELCOME' => 'Witaj',
  'NTC_YEAR_FORMAT' => '(rrrr)',
);

