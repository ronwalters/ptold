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
  'ERR_CRON_SYNTAX' => 'Geçersiz Cron söz dizimi',
  'ERR_DELETE_RECORD' => 'Bu planı silmek için bir kayıt numarası belirtmelisiniz.',
  'LBL_ADV_OPTIONS' => 'Gelişmiş Seçenekler',
  'LBL_ALL' => 'Her gün',
  'LBL_ALWAYS' => 'Her zaman',
  'LBL_AND' => 've',
  'LBL_AT' => 'burada',
  'LBL_AT_THE' => 'Burada',
  'LBL_BASIC_OPTIONS' => 'Basit Kurulum',
  'LBL_CATCH_UP' => 'Vakti geçmiş ise çalıştır',
  'LBL_CATCH_UP_WARNING' => 'Eğer bu iş bir saniyeden daha fazla sürecek ise işareti kaldırın.',
  'LBL_CLEANJOBQUEUE' => 'İş Kuyruğunu Temizle',
  'LBL_CRONTAB_EXAMPLES' => 'Yukarısı standart crontab gösterimini kullanır.',
  'LBL_CRONTAB_SERVER_TIME_POST' => '). Lütfen planlayıcının zamanını buna göre belirleyiniz.',
  'LBL_CRONTAB_SERVER_TIME_PRE' => 'Sunucunun cron tanımlarını çalıştırdığı zaman dilimi (',
  'LBL_CRON_INSTRUCTIONS_LINUX' => 'Crontab Kurulumu için',
  'LBL_CRON_INSTRUCTIONS_WINDOWS' => 'Windows Planlayıcı Kurulumu için',
  'LBL_CRON_LINUX_DESC' => 'Not: Sugar Planlayıcısını çalıştırabilmek için şu satırları crontab dosyasına ekleyin:',
  'LBL_CRON_WINDOWS_DESC' => 'Not: Sugar Planlayıcısını çalıştırmak için batch dosyası oluşturup, Windows Planlanmış Görevleri kullanın. Batch dosyası şu komutları içermelidir:',
  'LBL_DATE_TIME_END' => 'Tarih & Bitiş Zamanı',
  'LBL_DATE_TIME_START' => 'Tarih & Başlangıç Zamanı',
  'LBL_DAY_OF_MONTH' => 'tarih',
  'LBL_DAY_OF_WEEK' => 'gün',
  'LBL_EVERY' => 'Her',
  'LBL_EVERY_DAY' => 'Her gün',
  'LBL_EXECUTE_TIME' => 'Çalıştırılma Zamanı',
  'LBL_FRI' => 'Cuma',
  'LBL_FROM' => 'Kimden',
  'LBL_HOUR' => 'saat',
  'LBL_HOURS' => 'sa',
  'LBL_HOUR_SING' => 'saat',
  'LBL_IN' => 'içinde',
  'LBL_INTERVAL' => 'Sıklık Derecesi',
  'LBL_JOB' => 'Görev',
  'LBL_JOBS_SUBPANEL_TITLE' => 'Görev Log&#39;u',
  'LBL_JOB_URL' => 'İş URL',
  'LBL_LAST_RUN' => 'Son Başarılı Çalışma',
  'LBL_LIST_EXECUTE_TIME' => 'Burada Çalışacak:',
  'LBL_LIST_JOB_INTERVAL' => 'Sıklık Derecesi:',
  'LBL_LIST_LIST_ORDER' => 'Planlayıcılar:',
  'LBL_LIST_NAME' => 'Planlayıcı:',
  'LBL_LIST_RANGE' => 'Aralık:',
  'LBL_LIST_REMOVE' => 'Kaldır:',
  'LBL_LIST_STATUS' => 'Durum:',
  'LBL_LIST_TITLE' => 'Planlayıcı Listesi:',
  'LBL_MINS' => 'dak',
  'LBL_MINUTES' => 'dakika',
  'LBL_MIN_MARK' => 'dakika işareti',
  'LBL_MODULE_NAME' => 'Sugar Planlayıcı',
  'LBL_MODULE_NAME_SINGULAR' => 'Sugar Planlayıcı',
  'LBL_MODULE_TITLE' => 'Planlayıcılar',
  'LBL_MON' => 'Pazartesi',
  'LBL_MONTH' => 'ay',
  'LBL_MONTHS' => 'ay',
  'LBL_NAME' => 'Görev İsmi',
  'LBL_NEVER' => 'Hiç',
  'LBL_NEW_FORM_TITLE' => 'Yeni Plan',
  'LBL_NO_PHP_CLI' => 'Eğer sunucunuzda PHP binary yoksa, İşleri çalıştırmak için wget veya curl kullanabilirsiniz.<br>wget için: <b>*    *    *    *    *    wget --quiet --non-verbose http://translate.sugarcrm.com/latest/cron.php > /dev/null 2>&1</b><br>curl için: <b>*    *    *    *    *    curl --silent http://translate.sugarcrm.com/latest/cron.php > /dev/null 2>&1',
  'LBL_OFTEN' => 'Olabildiğince sık.',
  'LBL_ON_THE' => 'Üstünde',
  'LBL_OOTB_BOUNCE' => 'Gecelik Çalışan Geri Dönen Kampanya E-Postaları',
  'LBL_OOTB_CAMPAIGN' => 'Gecelik Çalışan Kitlesel E-Posta Kampanyaları',
  'LBL_OOTB_CLEANUP_QUEUE' => 'İş Kuyruğunu Temizle',
  'LBL_OOTB_CREATE_NEXT_TIMEPERIOD' => 'Gelecek Zaman Aralıkları Oluştur',
  'LBL_OOTB_IE' => 'Gelen Posta kutularını Kontrol et',
  'LBL_OOTB_PRUNE' => 'Ayın 1 inde Veritabanında temizlik yap',
  'LBL_OOTB_REPORTS' => 'Rapor Üretimi Planlanmış Görevleri Çalıştırın',
  'LBL_OOTB_SEND_EMAIL_REMINDERS' => 'E-Posta Hatırlatıcı Bildirimlerini Çalıştır',
  'LBL_OOTB_TRACKER' => 'Takipçi Tabloları Temizle',
  'LBL_OOTB_WORKFLOW' => 'Süreç İş Akışı Görevleri',
  'LBL_PERENNIAL' => 'sürekli',
  'LBL_PERFORMFULLFTSINDEX' => 'Tam-Metin Arama İndeks Sistemi',
  'LBL_POLLMONITOREDINBOXES' => 'Kontrol Et',
  'LBL_POLLMONITOREDINBOXESFORBOUNCEDCAMPAIGNEMAILS' => 'Gecelik Çalışan Geri Dönen Kampanya E-Postaları',
  'LBL_PROCESSQUEUE' => 'Rapor Üretimi Planlanmış Görevleri Çalıştırın',
  'LBL_PROCESSWORKFLOW' => 'Süreç İş Akışı Görevleri',
  'LBL_PRUNEDATABASE' => 'Ayın 1 inde Veritabanında temizlik yap',
  'LBL_RANGE' => 'kime',
  'LBL_REFRESHJOBS' => 'İşleri Yenile',
  'LBL_RUNMASSEMAILCAMPAIGN' => 'Gecelik Çalışan Kitlesel E-Posta Kampanyaları',
  'LBL_SAT' => 'Cumartesi',
  'LBL_SCHEDULER' => 'Planlayıcı:',
  'LBL_SEARCH_FORM_TITLE' => 'Planlayıcı Arama',
  'LBL_SENDEMAILREMINDERS' => 'E-Posta Hatırlatıcı Gönderimini Çalıştır',
  'LBL_STATUS' => 'Durum',
  'LBL_SUGARJOBCREATENEXTTIMEPERIOD' => 'Gelecek Zaman Aralıkları Oluştur',
  'LBL_SUN' => 'Pazar',
  'LBL_THU' => 'Perşembe',
  'LBL_TIME_FROM' => 'Aktif Form',
  'LBL_TIME_TO' => 'Aktifleştirmek İçin',
  'LBL_TOGGLE_ADV' => 'Gelişmiş Seçenekleri Gösterin',
  'LBL_TOGGLE_BASIC' => 'Temel Seçenekleri Göster',
  'LBL_TRIMTRACKER' => 'Takipçi Tabloları Temizle',
  'LBL_TUE' => 'Salı',
  'LBL_UPDATETRACKERSESSIONS' => 'Takipçi Oturum Tablolarını Güncelle',
  'LBL_UPDATE_TRACKER_SESSIONS' => 'takipçi_oturumlar Çizelgesini Güncelleyin',
  'LBL_WARN_CURL' => 'Uyarı:',
  'LBL_WARN_CURL_TITLE' => 'cURL Uyarısı:',
  'LBL_WARN_NO_CURL' => 'Bu sistem PHP modülü içerisine etkinleştirilmiş/derlenmiş cURL kütüphanelerine (--with-curl=/path/to/curl_library) sahip değil. Bu problemin çözümü için, sistem yöneticisi ile temasa geçiniz. Planlayıcı cURL işlevselliği olmadan görevlerini gerçekleştiremez.',
  'LBL_WED' => 'Çarşamba',
  'LNK_LIST_SCHEDULED' => 'Planlanmış İşler',
  'LNK_LIST_SCHEDULER' => 'Planlayıcılar',
  'LNK_NEW_SCHEDULER' => 'Planlayıcı Oluştur',
  'NTC_DELETE_CONFIRMATION' => 'Bu kaydı silmek istediğinizden emin misiniz?',
  'NTC_LIST_ORDER' => 'Bu planlayıcının, Planlayıcı açılır-listesinde görünmesini istediğiniz sırayı belirleyin',
  'NTC_STATUS' => 'Bu planlayıcının durumunu Planlayıcı açılır-listesinden kaldırmak için, İnaktif olarak belirleyerek',
  'SOCK_GREETING' => 'Bu ara yüz SugarCRM Planlayıcı Servisi içindir. [Mevcut daemon komutları: start|restart|shutdown|status] Çıkmak için &#39;quit&#39; yazın. Servisi kapatmak için &#39;shutdown&#39; yazın',
);

