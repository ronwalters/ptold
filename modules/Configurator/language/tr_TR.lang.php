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
  'LBL_PROXY_PORT' => 'Port',
  'LBL_REG_EXP' => 'Reg Exp:',
  'LBL_FONT_TYPE_CID0' => 'CID-0',
  'ADVANCED' => 'Gelişmiş',
  'DEFAULT_CURRENCY_ISO4217' => 'ISO 4217 para birimi kodu',
  'DEFAULT_CURRENCY_NAME' => 'Para birimi adı',
  'DEFAULT_CURRENCY_SYMBOL' => 'Para birimi simgesi',
  'DEFAULT_CURRENCY' => 'Varsayılan Para Birimi',
  'DEFAULT_DATE_FORMAT' => 'Varsayılan tarih biçimi',
  'DEFAULT_DECIMAL_SEP' => 'Ondalık Sembolü',
  'DEFAULT_LANGUAGE' => 'Varsayılan dil',
  'DEFAULT_NUMBER_GROUPING_SEP' => '1000\'ler ayracı',
  'DEFAULT_SYSTEM_SETTINGS' => 'Kullanıcı Arayüzü',
  'DEFAULT_THEME' => 'Varsayılan Tema',
  'DEFAULT_TIME_FORMAT' => 'Varsayılan zaman biçimi',
  'DISPLAY_RESPONSE_TIME' => 'Sunucu yanıt verme zamanlarını göster',
  'IMAGES' => 'Logolar',
  'LBL_ADMIN_WIZARD' => 'Admin Sihirbazı',
  'LBL_ALLOW_USER_TABS' => 'sekmeleri gizlemeleri için kullanıcılara izin ver',
  'LBL_CONFIGURE_SETTINGS_TITLE' => 'Sistem Ayarları',
  'LBL_ENABLE_MAILMERGE' => 'E-Posta Birleştirme Etkinleştirilsin mi?',
  'LBL_LOGVIEW' => 'Kayıt Ayarlarını Yapılandır',
  'LBL_MAIL_SMTPAUTH_REQ' => 'SMTP Kimlik Doğrulaması Kullanılsın mı?',
  'LBL_MAIL_SMTPPASS' => 'SMTP Şifresi:',
  'LBL_MAIL_SMTPPORT' => 'SMTP Portu',
  'LBL_MAIL_SMTPSERVER' => 'SMTP Sunucusu:',
  'LBL_MAIL_SMTPUSER' => 'SMTP Kullanıcı adı:',
  'LBL_MAIL_SMTPTYPE' => 'SMTP Sunucu Türü:',
  'LBL_MAIL_SMTP_SETTINGS' => 'SMTP Sunucu Özellikleri',
  'LBL_CHOOSE_EMAIL_PROVIDER' => 'E-posta Servis sağlayıcınızı seçiniz',
  'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! E-Posta Şifresi',
  'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! E-Posta ID:',
  'LBL_GMAIL_SMTPPASS' => 'Gmail Şifresi:',
  'LBL_GMAIL_SMTPUSER' => 'Gmail E-Posta Adresi:',
  'LBL_EXCHANGE_SMTPPASS' => 'Exchange Şifresi:',
  'LBL_EXCHANGE_SMTPUSER' => 'Exchange Kullanıcı Adı:',
  'LBL_EXCHANGE_SMTPPORT' => 'Exchange Sunucu Portu:',
  'LBL_EXCHANGE_SMTPSERVER' => 'Exchange Sunucusu:',
  'LBL_ALLOW_DEFAULT_SELECTION' => 'Giden e-posta için bu hesabı kullanan tüm kullanıcılar için izin ver:',
  'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'Bu seçenek seçildiğinde, tüm kullanıcılar sistem bildiri ve uyarılarını göndermek için kullanılan giden posta hesabını kullarak e-postalarını gönderebilecek. Eğer bu seçenek seçilmezse, kullanıcılar kendi hesap bilgilerini girdikten sonra giden mesaj sunucusunu kullanmaya devam edebilirler',
  'LBL_MAILMERGE_DESC' => 'Bu kutu, Microsoft® Word® için Sugar Plug-in sahibi iseniz işaretlenmelidir.',
  'LBL_MAILMERGE' => 'Posta Birleştir',
  'LBL_MODULE_FAVICON' => 'Modül ikonunu favikon olarak görüntüle',
  'LBL_MODULE_FAVICON_HELP' => 'İkona sahip bir modülde iseniz, tarayıcı sekmesindeki temayı kullanmak yerine modülün ikonunu favikon gibi kullanın.',
  'LBL_MODULE_NAME' => 'Sistem Ayarları',
  'LBL_MODULE_ID' => 'Yapılandırıcı',
  'LBL_MODULE_TITLE' => 'Kullanıcı Arayüzü',
  'LBL_NOTIFY_FROMADDRESS' => 'Gönderen Adres:',
  'LBL_NOTIFY_SUBJECT' => 'E-Posta konusu:',
  'LBL_PORTAL_ON_DESC' => 'Kontak kayıtları içindeki portal kullanıcı bilgilerinin yönetimi için kullanıcıya izin ver. Portal kullanıcı Taleplere, Hatalara, Bilgi Tabanlı başlıklara ve Sugar Portal uygulamasındaki diğer tüm verilere erişebilir.',
  'LBL_PORTAL_ON' => 'Portal Kullanıcı Yönetimini Etkinleştir',
  'LBL_PORTAL_TITLE' => 'Müşteri Self-Servis Portalı',
  'LBL_PROXY_AUTH' => 'Kimlik Denetleme?',
  'LBL_PROXY_HOST' => 'Proxy Hostu',
  'LBL_PROXY_ON_DESC' => 'Proxy Sunucu adresini ve onaylama ayarlarını yapılandır.',
  'LBL_PROXY_ON' => 'Proxy sunucusu kullanılsın mı?',
  'LBL_PROXY_PASSWORD' => 'Şifre',
  'LBL_PROXY_TITLE' => 'Proxy Ayarları',
  'LBL_PROXY_USERNAME' => 'Kullanıcı Adı',
  'LBL_RESTORE_BUTTON_LABEL' => 'Geri Yükle',
  'LBL_SYSTEM_SETTINGS' => 'Sistem Ayarları',
  'LBL_SKYPEOUT_ON_DESC' => 'Kullanıcılara SkypeOut® kullanarak telefon numarası tuşlamalarına izin verir. Numaralar bu özelliğin kullanılabilmesi için uygun şekilde biçimlendirilmiş olmalıdır. "+" "ülke Kodu""Telefon Numarası" şeklindedir. Örneğin; +1 (555) 555-1234. Daha fazla bilgi için, <a href="http://www.skype.com/help/faq/skypeout.html#calling" target="skype">skype&reg; faq</a> deki SkypeSSS\'ı inceleyiniz.',
  'LBL_SKYPEOUT_ON' => 'SkypeOut® entegrasyonunu etkinleştir',
  'LBL_SKYPEOUT_TITLE' => 'SkypeOut®',
  'LBL_USE_REAL_NAMES' => 'Ad - Soyad göster',
  'LBL_USE_REAL_NAMES_DESC' => 'Atanan alanlardaki Kullanıcı Adı yerine Kullanıcıların tam isimlerini göster.',
  'LIST_ENTRIES_PER_LISTVIEW' => 'Her sayfa için öğeleri listele',
  'LIST_ENTRIES_PER_SUBPANEL' => 'Her sayfa için altpanel öğeleri',
  'LBL_WIRELESS_LIST_ENTRIES' => 'Her sayfa için öğeleri listele',
  'LBL_WIRELESS_SUBPANEL_LIST_ENTRIES' => 'Her sayfa için altpanel öğeleri',
  'LOG_MEMORY_USAGE' => 'Hafıza kullanımını kaydet',
  'LOG_SLOW_QUERIES' => 'Yavaş soruguları kaydet',
  'LOCK_HOMEPAGE_HELP' => 'Bu ayarlar <br />1)yeni ana sayfalarını ve Anasayfa modülündeki dashletleri,<br />2)ana sayfadaki dashlet yerleşimini sürükle bırak yöntemiyle özelleştirmeyi engellemek içindir.',
  'CURRENT_LOGO' => 'Mevcut Logo:',
  'CURRENT_LOGO_HELP' => 'Bu logo Sugar uygulamasının en üst sol köşesinde görünür.',
  'NEW_LOGO' => 'Logo seç:',
  'NEW_LOGO_HELP' => 'Dosya formatı ya jpg ya da .png olabilir. Önerilen boyut 212x40 pikseldir.',
  'NEW_QUOTE_LOGO' => 'Yeni teklif logolarını yükle',
  'NEW_QUOTE_LOGO_HELP' => 'Gerekli görüntü dosya biçimi .jpg. Önerilen boyut 867x74 pikseldir.',
  'QUOTES_CURRENT_LOGO' => 'Teklif logosu',
  'SLOW_QUERY_TIME_MSEC' => 'Yavaş sorgu zamanı eşiği (milisaniye)',
  'STACK_TRACE_ERRORS' => 'Hataların yığıldığı yerleri görüntüle',
  'UPLOAD_MAX_SIZE' => 'Maksimum karşıya yükleme boyutu',
  'VERIFY_CLIENT_IP' => 'Kullanıcı IP adresini doğrula',
  'LOCK_HOMEPAGE' => 'Kullanıcının özelleştirilmiş Anasayfa düzenini engelle',
  'LOCK_SUBPANELS' => 'Kullanıcının özelleştirilmiş altpanel düzenini engelle',
  'MAX_DASHLETS' => 'Anasayfadaki maksimum Sugar Dashlet sayısı',
  'SYSTEM_NAME' => 'Sistem Adı:',
  'SYSTEM_NAME_WIZARD' => 'İsim:',
  'SYSTEM_NAME_HELP' => 'Tarayıcınızın başlık çubuğunda görünen isim budur.',
  'LBL_OC_STATUS' => 'Çevrimdışı İstemci Durumu',
  'DEFAULT_OC_STATUS' => 'Çevrimdışı İstemcisini varsayılan olarak etkinleştir',
  'LBL_OC_STATUS_DESC' => 'Herhangi bir kullanıcının Çevrimdışı İstemciye erişim sahibi olması için buraya tıklayınız. Ya da bu değişikliği kullanıcı seviyesinde gerçekleştirebilirsiniz.',
  'SESSION_TIMEOUT' => 'Portal Oturum Zaman Aşımı',
  'SESSION_TIMEOUT_UNITS' => 'saniye',
  'LBL_LDAP_TITLE' => 'LDAP Onay Desteği',
  'LBL_LDAP_ENABLE' => 'LDAP etkinleştir',
  'LBL_LDAP_SERVER_HOSTNAME' => 'Sunucu:',
  'LBL_LDAP_SERVER_PORT' => 'Port Numarası:',
  'LBL_LDAP_ADMIN_USER' => 'Kullanıcı İsmi:',
  'LBL_LDAP_ADMIN_USER_DESC' => 'Sugar kullanıcısı için arama amacıyla kullanıldı. [Tümüyle yetki sahibi olmak gerekebilir] Temin edilmediyse anonim olarak bağlanacak.',
  'LBL_LDAP_ADMIN_PASSWORD' => 'Şifre:',
  'LBL_LDAP_AUTHENTICATION' => 'Kimlik Denetimi:',
  'LBL_LDAP_AUTHENTICATION_DESC' => 'LDAP sunucuya belirli kullanıcıların kimliğiyle bağlan',
  'LBL_LDAP_AUTO_CREATE_USERS' => 'Otomatik Kullanıcı Yarat:',
  'LBL_LDAP_USER_DN' => 'Kullanıcı DN:',
  'LBL_LDAP_GROUP_DN' => 'Grup DN:',
  'LBL_LDAP_GROUP_DN_DESC' => 'Örneğin; ou=gruplar, dc=örnek, dc=com',
  'LBL_LDAP_USER_FILTER' => 'Kullanıcı Filtresi:',
  'LBL_LDAP_GROUP_MEMBERSHIP' => 'Grup Üyeliği:',
  'LBL_LDAP_GROUP_MEMBERSHIP_DESC' => 'Kullanıcılar belirli bir gruba üye olması gerekmektedir',
  'LBL_LDAP_GROUP_USER_ATTR' => 'Kullanıcı Özelliği:',
  'LBL_LDAP_GROUP_USER_ATTR_DESC' => 'Bir kişinin tekil tanıtıcısı, o kişinin grup üyesi olup olmadığının kontrolü için kullanılacak. Örneğin:uid',
  'LBL_LDAP_GROUP_ATTR_DESC' => 'Kullanıcı Özelliği\'ne karşı filtrelemek amacıyla Grup özelliği kullanılacak. Örneğin: memberUid',
  'LBL_LDAP_GROUP_ATTR' => 'Grup Özelliği:',
  'LBL_LDAP_USER_FILTER_DESC' => 'Kullanıcıları onaylarken herhangi bir filtre parametresi uygulamak için örn. is_sugar_user=1 or (is_sugar_user=1)(is_sales=1)',
  'LBL_LDAP_LOGIN_ATTRIBUTE' => 'Oturum Açma Özelliği:',
  'LBL_LDAP_BIND_ATTRIBUTE' => 'Özellik bağla:',
  'LBL_LDAP_BIND_ATTRIBUTE_DESC' => 'LDAP\'a bağlanmak için Kullanıcı Örnekleri: [AD: userPrincipalName] [openLDAP: userPrincipalName] [Mac OS X: uid]',
  'LBL_LDAP_LOGIN_ATTRIBUTE_DESC' => 'LDAP için arama yaparken kullanıcı Örnekleri: [AD: userPrincipalName] [openLDAP: dn] [Mac OS X: dn]',
  'LBL_LDAP_SERVER_HOSTNAME_DESC' => 'Örnek: ldap.example.com or ldaps://ldap.example.com for SSL',
  'LBL_LDAP_SERVER_PORT_DESC' => 'Örnek: 389 veya SSL için 636',
  'LBL_LDAP_GROUP_NAME' => 'Grup İsmi:',
  'LBL_LDAP_GROUP_NAME_DESC' => 'Örnek: cn=sugarcrm',
  'LBL_LDAP_USER_DN_DESC' => 'Örnek: ou=kişiler, dc=örnek, dc=com',
  'LBL_LDAP_AUTO_CREATE_USERS_DESC' => 'Eğer onaylanan bir kullanıcı mevcut değilse Sugar içinde yaratılır.',
  'LBL_LDAP_ENC_KEY' => 'Şifreleme Anahtarı:',
  'DEVELOPER_MODE' => 'Geliştirici Modu',
  'LBL_LDAP_ENC_KEY_DESC' => 'LDAP kullanırken SOAP için onaylama.',
  'LDAP_ENC_KEY_NO_FUNC_DESC' => 'php_mcrypt uzantısı php.ini dosyasında seçilmiş olmalı.',
  'LBL_ALL' => 'Hepsi',
  'LBL_MARK_POINT' => 'İşaret Noktası',
  'LBL_NEXT_' => 'Sonraki>>',
  'LBL_REFRESH_FROM_MARK' => 'İşaretten Yenileme',
  'LBL_SEARCH' => 'Ara:',
  'LBL_IGNORE_SELF' => 'Kendini Yoksay',
  'LBL_MARKING_WHERE_START_LOGGING' => 'Loglama nereden başlıyorsa işaretle',
  'LBL_DISPLAYING_LOG' => 'Log görüntülüyor',
  'LBL_YOUR_PROCESS_ID' => 'Süreç ID\'niz',
  'LBL_YOUR_IP_ADDRESS' => 'IP adresiniz',
  'LBL_IT_WILL_BE_IGNORED' => 'yok sayılacak',
  'LBL_LOG_NOT_CHANGED' => 'log değişmedi',
  'LBL_ALERT_JPG_IMAGE' => 'İmajın dosya formatı JPEG olmalı. Uzantısı .jpg olan yeni bir dosya yükleyin.',
  'LBL_ALERT_TYPE_IMAGE' => 'İmajın dosya formatı JPEG veya PNG olmalı. Uzantısı .jpg veya .png olan yeni bir dosya yükleyin.',
  'LBL_ALERT_SIZE_RATIO' => 'İmajın en boy oranı 1:1 ve 10:1 arasında olmalı. İmaj yeniden boyutlandırılacaktır.',
  'LBL_ALERT_SIZE_RATIO_QUOTES' => 'İmajın en boy oranı 3:1 ve 20:1 arasında olmalı. Bu boyutlarda yeni bir imaj yükle.',
  'ERR_ALERT_FILE_UPLOAD' => 'Görüntü yükleme sırasında hata.',
  'LBL_LOGGER' => 'Kaydedici Ayarları',
  'LBL_LOGGER_FILENAME' => 'Log Dosya Adı',
  'LBL_LOGGER_FILE_EXTENSION' => 'Uzantı',
  'LBL_LOGGER_MAX_LOG_SIZE' => 'Maksimum log boyutu',
  'LBL_LOGGER_DEFAULT_DATE_FORMAT' => 'Varsayılan tarih biçimi',
  'LBL_LOGGER_LOG_LEVEL' => 'Log Seviyesi',
  'LBL_LOGGER_MAX_LOGS' => 'Maksimum Log Sayısı (düzeltmeden önce)',
  'LBL_LOGGER_FILENAME_SUFFIX' => 'Dosya adından sonra ekle',
  'LBL_VCAL_PERIOD' => 'vCal Güncelleme Zamanı Periyodu:',
  'vCAL_HELP' => 'Bu ayarı bildirilen toplantılar ve telefon aramaları konusunda kaç ay öncesinden Uygun/Meşgul durumunun belirlenmesi kullanın. Uygun/Meşgul bildirisini kapatmak için "0" girin. Minimum 1 ay; maksimum 12 Ay.',
  'LBL_PDFMODULE_NAME' => 'PDF Ayarları',
  'SUGARPDF_BASIC_SETTINGS' => 'Doküman Özellikleri',
  'SUGARPDF_ADVANCED_SETTINGS' => 'Gelişmiş Ayarlar',
  'SUGARPDF_LOGO_SETTINGS' => 'Görüntüler',
  'PDF_CREATOR' => 'PDF Oluşturucusu',
  'PDF_CREATOR_INFO' => 'Doküman yaratıcısını tanımlar.<br />Bu, PDF üreten uygulamaların tipik ismidir.',
  'PDF_AUTHOR' => 'Yazar',
  'PDF_AUTHOR_INFO' => 'Doküman özelliklerinde gözüken yazar.',
  'PDF_HEADER_LOGO' => 'Teklif PDF Dokümanları\'nda',
  'PDF_HEADER_LOGO_INFO' => 'Bu imaj Teklif PDF Dokümanları\'ndaki varsayılan başlıkta gözükür.',
  'PDF_NEW_HEADER_LOGO' => 'Teklifler için Yeni İmaj Seçiniz',
  'PDF_NEW_HEADER_LOGO_INFO' => 'Dosya formatı ya jpg ya da .png olabilir. (Sadece EZPDF için .jpg) Önerilen büyüklük 867x74 pikseldir.',
  'PDF_HEADER_LOGO_WIDTH' => 'Teklif İmajı Genişliği',
  'PDF_HEADER_LOGO_WIDTH_INFO' => 'Teklif PDF Dokümanlarında yer alan yüklenmiş imajın ölçüsünü değiştir. (Sadece TCPDF)',
  'PDF_SMALL_HEADER_LOGO' => 'Rapor PDF Dokümanları için',
  'PDF_SMALL_HEADER_LOGO_INFO' => 'Bu imaj Rapor PDF Dokümanlarındaki yer alan varsayılan başlık içinde gözükür. Bu imaj aynı zamanda Sugar uygulamasının en üst sol köşesinde de ortaya çıkmaktadır.',
  'PDF_NEW_SMALL_HEADER_LOGO' => 'Raporlar için Yeni İmaj seçiniz',
  'PDF_NEW_SMALL_HEADER_LOGO_INFO' => 'Dosya formatı ya jpg ya da .png olabilir. (Sadece EZPDF için .jpg) Önerilen büyüklü 212x40 pikseldir.',
  'PDF_SMALL_HEADER_LOGO_WIDTH' => 'Raporların İmajlarının Genişliği',
  'PDF_SMALL_HEADER_LOGO_WIDTH_INFO' => 'Teklif PDF Dokümanlarında yer alan yüklenmiş imajın ölçüsünü değiştir. (Sadece TCPDF)',
  'PDF_HEADER_STRING' => 'Başlık String',
  'PDF_HEADER_STRING_INFO' => 'Başlık Tanım  Stringi',
  'PDF_HEADER_TITLE' => 'Başlık',
  'PDF_HEADER_TITLE_INFO' => 'Doküman başlığındaki gibi başmak için string et.',
  'PDF_FILENAME' => 'Varsayılan Dosya Adı',
  'PDF_FILENAME_INFO' => 'PDF dosyaları meydana getirmek için varsayılan dosya adları',
  'PDF_TITLE' => 'Başlık',
  'PDF_TITLE_INFO' => 'Doküman özelliklerinde gözüken başlık.',
  'PDF_SUBJECT' => 'Konu',
  'PDF_SUBJECT_INFO' => 'Doküman özelliklerinde gözüken konu.',
  'PDF_KEYWORDS' => 'Anahtar kelime(ler)',
  'PDF_KEYWORDS_INFO' => 'Doküman ile bağdaştırılan Anahtar Sözcükler. Genellikle "anahtar sözcük 1 anahtar sözcük 2..." şeklindedir.',
  'PDF_COMPRESSION' => 'Baskı',
  'PDF_COMPRESSION_INFO' => 'Sayfa baskılarını ya aktif yada pasif hale getir.<br />Aktif hale getirildiğinde, baskı oranı yaklaşık 2 olan potansiyellerin  sonuçlanması için her sayfa için olan internal temsil basılır,',
  'PDF_JPEG_QUALITY' => 'JPEG Kalitesi (1-100)',
  'PDF_JPEG_QUALITY_INFO' => 'Varsayılan JPEG baskı kalitesini ayarla (1-100)',
  'PDF_PDF_VERSION' => 'PDF Versiyonu',
  'PDF_PDF_VERSION_INFO' => 'PDF versiyonunu ayarla (geçerli değerler için PDF referansını kontrol et).',
  'PDF_PROTECTION' => 'Doküman Koruma',
  'PDF_PROTECTION_INFO' => 'Doküman Koruma Ayarı<br />-Kopyala: metin ve imajı geçici taşıma panosuna kopyala<br />-Print et: Dokümanı print et<br />-Değiştir: Değiştir (Dipnotlar ve Formlar hariç)<br />-Dipnot-Formları: Dipnot ve form ekle<br />Not: Değişime karşı koruma Acrobat ürününün tümüne sahip olan kişiler içindir.',
  'PDF_USER_PASSWORD' => 'Kullanıcı Şifresi',
  'PDF_USER_PASSWORD_INFO' => 'Eğer herhangi bri şifre oluşturmazsanız, doküman genele açılır.<br />Eğer bir kullanıcı şifresi oluşturursanız, PDF görüntüleyici dokümanı görüntülemeden önce soracaktır.<br />Ana şifre, bir kullanıcıdan farklı ise, ful erişim için kullanılabilir.',
  'PDF_OWNER_PASSWORD' => 'Sahip Şifresi',
  'PDF_OWNER_PASSWORD_INFO' => 'Eğer herhangi bri şifre oluşturmazsanız, doküman genele açılır.<br />Eğer bir kullanıcı şifresi oluşturursanız, PDF görüntüleyici dokümanı görüntülemeden önce soracaktır.<br />Ana şifre, bir kullanıcıdan farklı ise, ful erişim için kullanılabilir.',
  'PDF_ACL_ACCESS' => 'Erişim Kontrolü',
  'PDF_ACL_ACCESS_INFO' => 'PDF üretimi için Varsayılan Erişim Kontrolü',
  'K_CELL_HEIGHT_RATIO' => 'Hücre Yükseklik Oranı',
  'K_CELL_HEIGHT_RATIO_INFO' => 'Eğer hücre yüksekliği (Yazı Tipi Yüksekliği x Hücre Yükseklik Oranı)\'nden küçük ise (Yazı Tipi Yüksekliği x Hücre Yükseklik Oranı) hücre yüksekliği gibi kullanılır. (Yazı Tipi Yüksekliği x Hücre Yükseklik Oranı)  yükseklik tanımlanmadığından aynı zamanda hücre yüksekliği olarak kullanılır',
  'K_TITLE_MAGNIFICATION' => 'Başlık Büyütme',
  'K_TITLE_MAGNIFICATION_INFO' => 'Başlık büyütme ana yazı tipi büyüklüğüne uyar.',
  'K_SMALL_RATIO' => 'Küçük Yazı Tipi Faktörü',
  'K_SMALL_RATIO_INFO' => 'Küçük yazı tipi için azaltma faktörü',
  'HEAD_MAGNIFICATION' => 'Konu Başlığı Büyütme',
  'HEAD_MAGNIFICATION_INFO' => 'Başlıklar için Büyütme Faktörü',
  'PDF_IMAGE_SCALE_RATIO' => 'Şmaj Ölçü Oranı',
  'PDF_IMAGE_SCALE_RATIO_INFO' => 'Oran imajların ölçülmesi için kullanılır.',
  'PDF_UNIT' => 'Birim',
  'PDF_UNIT_INFO' => 'Doküman Ölçü Birimi',
  'PDF_GD_WARNING' => 'PHP için indirilen GD belgeliğine sahip değilsiniz. GD belgeliği indirilmeden, sadece JPEG logoları PDF dokümanlarındaki görüntülenebilir.',
  'ERR_EZPDF_DISABLE' => 'Uyarı: EZPDF sınıfı yapılandırma tablosunda devre dışı bırakılmıştır ve PDF sınıfı olarak ayarlanmıştır. Lütfen TCPDF\'İ PDF Sınıfı olarak ayarlamak için bu formu "Kaydet" ve sabit bir duruma çevir.',
  'LBL_IMG_RESIZED' => '(görüntü için yeniden boyunlandırıldı)',
  'LBL_FONTMANAGER_BUTTON' => 'PDF Yazı Tipi Yöneticisi',
  'LBL_FONTMANAGER_TITLE' => 'PDF Yazı Tipi Yöneticisi',
  'LBL_FONT_BOLD' => 'Kalın',
  'LBL_FONT_ITALIC' => 'İtalik',
  'LBL_FONT_BOLDITALIC' => 'Kalın/İtalik',
  'LBL_FONT_REGULAR' => 'Çoğul',
  'LBL_FONT_TYPE_CORE' => 'Ana',
  'LBL_FONT_TYPE_TRUETYPE' => 'Doğru Tip',
  'LBL_FONT_TYPE_TYPE1' => 'Tip1',
  'LBL_FONT_TYPE_TRUETYPEU' => 'DoğruTipUnicode',
  'LBL_FONT_LIST_NAME' => 'İsim',
  'LBL_FONT_LIST_FILENAME' => 'Dosya adı',
  'LBL_FONT_LIST_TYPE' => 'Tipi',
  'LBL_FONT_LIST_STYLE' => 'Stili',
  'LBL_FONT_LIST_STYLE_INFO' => 'Yazı Tipi Stili:',
  'LBL_FONT_LIST_ENC' => 'Şifreleme',
  'LBL_FONT_LIST_EMBEDDED' => 'Gömülü',
  'LBL_FONT_LIST_EMBEDDED_INFO' => 'PDF dosyasında yazı tipini gömmek için kontrol et',
  'LBL_FONT_LIST_CIDINFO' => 'CID Bilgisi',
  'LBL_FONT_LIST_CIDINFO_INFO' => 'Geleneksel Çince :<br /><br />$enc=\\\'UniCNS-UTF16-H\\\';$cidinfo=array(\\\'Registry\\\'=>\\\'Adobe\\\', \\\'Ordering\\\'=>\\\'CNS1\\\',\\\'Supplement\\\'=>0);include(\\\'include/tcpdf/fonts/uni2cid_ac15.php\\\');<br /><br />Basitleştirilmiş Çince :<br /><br />$enc=\\\'UniGB-UTF16-H\\\';$cidinfo=array(\\\'Registry\\\'=>\\\'Adobe\\\', \\\'Ordering\\\'=>\\\'GB1\\\',\\\'Supplement\\\'=>2);include(\\\'include/tcpdf/fonts/uni2cid_ag15.php\\\');<br /><br />Korece :<br /><br />$enc=\\\'UniKS-UTF16-H\\\';$cidinfo=array(\\\'Registry\\\'=>\\\'Adobe\\\', \\\'Ordering\\\'=>\\\'Korea1\\\',\\\'Supplement\\\'=>0);include(\\\'include/tcpdf/fonts/uni2cid_ak12.php\\\');<br /><br />Japonca :<br /><br />$enc=\\\'UniJIS-UTF16-H\\\';$cidinfo=array(\\\'Registry\\\'=>\\\'Adobe\\\', \\\'Ordering\\\'=>\\\'Japan1\\\',\\\'Supplement\\\'=>5);include(\\\'include/tcpdf/fonts/uni2cid_aj16.php\\\');<br /><br />Daha fazla bilgi için : www.tcpdf.org',
  'LBL_FONT_LIST_FILESIZE' => 'Font Boyutu (KB)',
  'LBL_ADD_FONT' => 'Font ekle',
  'LBL_BACK' => 'Geri',
  'LBL_REMOVE' => 'sil',
  'LBL_JS_CONFIRM_DELETE_FONT' => 'Bu fontu silmek istediğinize emin misiniz?',
  'LBL_ADDFONT_TITLE' => 'PDF Fontu ekle',
  'LBL_PDF_PATCH' => 'Yama',
  'LBL_PDF_PATCH_INFO' => 'Şifrelemenin değişimini özelleştir. Bir PHP dizisi yazınız.<br /><br />Örnek:<br />ISO-8859-1 Avro sembolü içermemektedir. 164 pozisyonu eklemek için, "dizi (164=>\\\'Avro\\2)" yazınız.',
  'LBL_PDF_ENCODING_TABLE' => 'Şifreleme Tablosu',
  'LBL_PDF_ENCODING_TABLE_INFO' => 'Şifreleme Tablosunun Adı.<br />Bu opsiyon TrueType Unicode, OpenType Unicode ve sembolik yazı tipleri için için yoksayıldı.<br />Şifreleme, kod (0\'dan 255\'e kadar) ile yazı tipinde içerilen bir karakter arasında birleşimi tanımlar.<br />İlk 128 sabitlenir ve ASCII \'a uyar.',
  'LBL_PDF_FONT_FILE' => 'Yazı Tipi Dosyası',
  'LBL_PDF_FONT_FILE_INFO' => '.ttf veya .otf veya .pfb dosyası',
  'LBL_PDF_METRIC_FILE' => 'Ölçü Dosyası',
  'LBL_PDF_METRIC_FILE_INFO' => '.afm veya .ufm dosyası',
  'LBL_ADD_FONT_BUTTON' => 'Ekle',
  'JS_ALERT_PDF_WRONG_EXTENSION' => 'Bu dosya istenilen dosya uzantısına sahip değil.',
  'LBL_PDF_INSTRUCTIONS' => 'Talimatlar',
  'PDF_INSTRUCTIONS_ADD_FONT' => 'SugarPDF tarafından desteklenen Yazı Tipleri: <br />1-TrueTypeUnicode (UTF-8 Unicode) <br />2-OpenTypeUnicode <br />3-TrueType <br />4-OpenType <br />5-Type1 <br />6-CID-0 <br /><br />PDF içinde yazı tipini gömmek  istemiyorsanız, üretilen PDF dosyası daha açık olacaktır, ama eğer okuyucu sistemi içindeki yazı tipi kullanılabilir değil ise, bir ikame kullanılacaktır.<br /><br />SugarCRM gereksinimlerine bir PDF yazı tipini eklemek için  TCPDF website\'ın "DOCS" bölümünde yer alan TCPDF Yazı Tipleri dokümantasyonunun 1 ve 2 no\'lu adımlarını takip edin.<br /><br />TCPDF website\'taki "DOWNLOAD" bölümüne TCPDF paketindeki yazı tipleri/birimler içindeki <br />pfm2afm ve ttf2ufm birimleri kullanılabilir.<br /><br />Aşağıdaki yazı tipi dosyasını ve 2 no\'lu adımda üretilen ölçi dosyasını yükle.',
  'ERR_MISSING_CIDINFO' => 'CID Bilgi alanı boş olamaz.',
  'LBL_ADDFONTRESULT_TITLE' => 'Yazı tipi süreç ekleme sonucu',
  'LBL_STATUS_FONT_SUCCESS' => 'BAŞARI: Yazı tipi SugarCRM\' eklendi.',
  'LBL_STATUS_FONT_ERROR' => 'HATA: Yazı tipi aklenmedi. Aşağıdaki log\'a bak.',
  'LBL_FONT_MOVE_DEFFILE' => 'Yazı Tipi tanım dosyası harekete geçer:',
  'LBL_FONT_MOVE_FILE' => 'Yazı Tipi dosyası harekete geçer:',
  'ERR_LOADFONTFILE' => 'HATA: YazıtipiDosyasıYükleme Hatası!',
  'ERR_FONT_EMPTYFILE' => 'HATA: Boş dosya adı!',
  'ERR_FONT_UNKNOW_TYPE' => 'HATA: Bilinmeyen Yazı Tipi Cinsi:',
  'ERR_DELETE_CORE_FILE' => 'HATA: Ana yazı tipini silmek imkansızdır.',
  'ERR_NO_FONT_PATH' => 'HATA: Kullanılabilir Yazı tipi yolu !',
  'ERR_NO_CUSTOM_FONT_PATH' => 'HATA: Kullanılabilir Özel Yazı Tipi dizini yok!',
  'ERR_FONT_NOT_WRITABLE' => 'yazılabilir değil.',
  'ERR_FONT_FILE_DO_NOT_EXIST' => 'mevcut değil veya',
  'ERR_FONT_MAKEFONT' => 'HATA: YazıtipiOluşturma Hatası',
  'ERR_FONT_ALREADY_EXIST' => 'HATA: Bu yazı tipi zate mevcut. Geri dön...',
  'ERR_PDF_NO_UPLOAD' => 'Yazı tipi veya dosya ölçüsü yükleme işlemi esnasında hata oluştu.',
  'LBL_WIZARD_TITLE' => 'Admin Sihirbazı',
  'LBL_WIZARD_WELCOME_TAB' => 'Hoşgeldiniz',
  'LBL_WIZARD_WELCOME_TITLE' => 'Sugar\'a Hoşgeldiniz!',
  'LBL_WIZARD_WELCOME' => 'Sugar\'ı şimdi yapılandırmak, yerini tespit etmek ve markalamak için "Sonraki"\'ni tıklayınız. Sugar\'ı daha sonra yapılandırmak için "Geç"\'e tıklayın.',
  'LBL_WIZARD_NEXT_BUTTON' => 'Sonraki >',
  'LBL_WIZARD_BACK_BUTTON' => '< Önceki',
  'LBL_WIZARD_SKIP_BUTTON' => 'Atla',
  'LBL_WIZARD_FINISH_BUTTON' => 'Bitir',
  'LBL_WIZARD_CONTINUE_BUTTON' => 'Devam Et',
  'LBL_WIZARD_FINISH_TAB' => 'Bitir',
  'LBL_WIZARD_FINISH_TITLE' => 'Basit sistem ayarları tamamlandı',
  'LBL_WIZARD_FINISH' => 'Kullanıcı ayarlarını yapılandırmak için "Devam et"e tıklayınız. <br /><br />Ekli sistem ayarlarını yapılandırmak için, burayı tıklayınız.',
  'LBL_WIZARD_SYSTEM_TITLE' => 'Markala',
  'LBL_WIZARD_SYSTEM_DESC' => 'Sugar\'ınızı markalamak için organizsayonunuzun ismini ve logosunu temin ediniz.',
  'LBL_WIZARD_LOCALE_DESC' => 'Coğrafik lokasyonunuza bağlı olarak verinin Sugar\'da nasıl görünmesini istediğinizi belirleyin. Burada gerçekleştirdiğiniz ayarlar varsayılan ayarlar olacaktır. Kullanıcılar kendi tercihlerini ayarlayacaklardır.',
  'LBL_WIZARD_SMTP_DESC' => 'Atama bildirileri ve yeni kullanıcı şifresi gibi E-postaların gönderilmesi için kullanılacak e-posta hesabı temin edin. Kullanıcılar belirli bir e-posta hesabından gönderilmiş gibi Sugar\'dan e-posta alacaklar.',
  'LBL_MOBILE_MOD_REPORTS_RESTRICTION' => '*Raporlar modülü sadece Sugar Mobile iPhone kullanıcısı için mevcuttur.',
);

