<?php 
require_once("config.php");
require_once(PATH_INC."commonguest.php");
require_once(PATH_CLASS."cache.php");
require_once(PATH_COMPLS.'news.php');
require_once(PATH_COMPLS.'product.php');
require_once(PATH_COMPLS.'bannerlist.php');
require_once('function-add.php');
cache::start();
require_once(PATH_CLASS.'esnc.php');
esnc::process(PATH_TEMPLATES.'useful-information-list.htm',PATH_ESNC.'useful-information-list.php');
require_once(PATH_INC.'dbconguest.php');
metaBuild(@$CNid,'catnews');
include_once(PATH_ESNC.'useful-information-list.php');
cache::finish();
dbclose();
?>