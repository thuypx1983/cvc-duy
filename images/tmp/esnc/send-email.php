<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:esnc="http://www.esnc.net/xhtml">
<head><base href="http://www.circuit-vietnam-cambodge.com/" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7; charset=utf-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--<style type="text/css">@import url("images/style.css");</style>-->
<link href="/images/style.css" type="text/css" rel="stylesheet" />
<link href="/images/stylemenu.css" type="text/css" rel="stylesheet"  >
<script src="js/library.js" language="javascript" type="text/javascript"></script>
<!--[if lte IE 6]>
		<link href="/images/style_ie6.css" rel="stylesheet" type="text/css" />
	<![endif]-->
	<!--[if IE 7]>
		<link href="/images/style_ie7.css" rel="stylesheet" type="text/css" />
	<![endif]-->
<?php 
if(!isset($title)) $title=TEXT_SITE_TITLE;
if(!isset($keyword)) $keyword = TEXT_KEYWORD;
if(!isset($description)) $description = TEXT_DESCRIPTION;
$xtitle=str_replace('"','&quot;',$title);
$keyword = str_replace('"','&quot;',$keyword);
$description = str_replace('"','&quot;',$description);
@define('METADATA','/home/circuitvncambod/public_html/galatouriste-images/meta/send-email.html');
if($s=@fileread(METADATA) or $s=@fileread(dirname(METADATA).'/default.html') or $s = @fileread(PATH_META.'/default.html'));
else $s = '<title>{{TITLE}}</title><meta name="keywords" content="{{KEYWORD}}" /><meta name="description" content="{{DESCRIPTION}}" />';
echo strtr($s,array('{{TITLE}}'=>$xtitle,'{{KEYWORD}}'=>$keyword,'{{DESCRIPTION}}'=>$description));
unset($xtitle,$description,$keyword,$active_meta,$default_meta,$default_meta_db,$row);?>
</script>
<script>(function() {
  var _fbq = window._fbq || (window._fbq = []);
  if (!_fbq.loaded) {
    var fbds = document.createElement('script');
    fbds.async = true;
    fbds.src = '//connect.facebook.net/en_US/fbds.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(fbds, s);
    _fbq.loaded = true;
  }
  _fbq.push(['addPixelId', '451184261714571']);
})();
window._fbq = window._fbq || [];
window._fbq.push(['track', 'PixelInitialized', {}]);
</script>
<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?id=451184261714571&amp;ev=PixelInitialized" /></noscript>

<script>(function() {
  var _fbq = window._fbq || (window._fbq = []);
  if (!_fbq.loaded) {
    var fbds = document.createElement('script');
    fbds.async = true;
    fbds.src = '//connect.facebook.net/en_US/fbds.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(fbds, s);
    _fbq.loaded = true;
  }
  _fbq.push(['addPixelId', '1436852683279295']);
})();
window._fbq = window._fbq || [];
window._fbq.push(['track', 'PixelInitialized', {}]);
</script>
<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?id=1436852683279295&amp;ev=PixelInitialized" /></noscript>
<style type="text/css">@import url("/galatouriste-images/application/style.css");</style>
<script src="/galatouriste-images/application/config.js" language="JavaScript" type="text/javascript"></script>
</head>
<body class="send_email_bd">
<?php include '/home/circuitvncambod/public_html/component/send-email.php';foreach(Esnc::$x_append as $value) echo $value;
?><script src="/js/library.js" language="javascript" type="text/javascript"></script>

<script src="/galatouriste-images/application/lang.js" language="javascript" type="text/javascript"></script>
<script src="/js/init.js" language="javascript" type="text/javascript"></script>
</body>
</html>