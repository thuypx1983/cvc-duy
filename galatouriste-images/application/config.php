<?php /*created by system configuration editor*/ 
$EE = error_reporting(E_ALL & ~E_NOTICE);define('APPLICATION_CONFIG_FILE',__FILE__);

define('N_HOT_TOUR',4);
define('N_HOT_HOTEL',4);
define('N_TOP_GROUP_HOTEL',16);
define('N_HOT_USEFUL_INFO',30);
define('N_TOUR_PER_GROUP',10);
define('N_PRODUCT_PER_PAGE',30);
define('N_HOT_TESTMONIAL',3);
define('N_TOUR_SLIDE',6);
define('N_SERVICE_GROUP',7);
define('N_TOUR_SIMILAR',30);
define('BANNER_PAGESIZE_LINKEXCHANGE',40);
define('N_TESTIMONIAL_PER_PAGE',18);
define('EMAIL_WEBMASTER','info@galatourist.com');
define('EMAIL_CONTACT','info@galatourist.com');
define('EMAIL_SALES','info@galatourist.com');
define('EMAIL_MIME_DEFAULT','text/html; charset=utf-8');
define('DATE_FORMAT','%d-%m-%Y');
define('DATE_SEPERATOR','-');
define('URL_CTRL',4);
define('URL_DELIMETER','-');
define('TIME_ZONE','TIME_ZONE');
define('SESSION_ONLINE_INIT',0);
define('APP_VISIT_INIT',0);
define('JOB_INTERVAL',300);
define('MAX_LOGON_TRIES',5);
define('CACHE_OFF',0x00000001);
define('CHARSET','utf-8');
define('SESSION_NAME','PHPSESSIONIDESNC');
define('SESSION_CACHE','nocache');
define('SESSION_TIMEOUT',15);
define('SQL_NOW','(now())');
define('FORMAT_DATE','%d-%m-%Y');
define('FORMAT_DATETIME','%d-%m-%Y %H:%M:%S');
define('FORMAT_DB_DATE','%d-%m-%Y');
define('FORMAT_DB_DATETIME','%d-%m-%Y %T');
define('REGEX_DATE','/^[^\\d]*(\\d{1,2})[^\\d]+(\\d{1,2})[^\\d]+(\\d{4}|\\d{2}).*$/');
define('REGEX_DATETIME','/^[^\\d]*(\\d{1,2})[^\\d]+(\\d{1,2})[^\\d]+(\\d{4}|\\d{2})[^\\d]+(\\d{1,2})[^\\d]+(\\d{1,2})[^\\d]+(\\d{0,3}).*$/');
define('S_DB_DATE','$3-$2-$1');
define('S_DB_DATETIME','$3-$2-$1 $4:$5:$6');
date_default_timezone_set('Asia/Saigon');error_reporting($EE);?>