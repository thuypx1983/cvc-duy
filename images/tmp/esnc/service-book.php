<!DOCTYPE html>
<html lang="en">
<head><base href="http://www.circuit-vietnam-cambodge.com/" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link type="text/css" rel="stylesheet" href="/images/bootstrap.css" />
    <link href="/images/jquery.mmenu.all.css" type="text/css" rel="stylesheet" />
    <link href="/images/style.css" type="text/css" rel="stylesheet" />
    <link href="/images/font-awesome.css" type="text/css" rel="stylesheet" />
    <link href="/images/promotion-box.css" type="text/css" rel="stylesheet" />
    <link href="/images/stylemenu.css" type="text/css" rel="stylesheet"  >
    <script type="text/javascript" src="/js/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="/js/jcarousellite.js"></script>
    <script type="text/javascript" src="/js/jquery.cycle.js"></script>
    <script language="javascript" src="js/jquery.mmenu.min.all.js"></script>
    <script language="javascript" src="js/lib.js"></script>
    <script type="text/javascript" src="/js/bootstrap.js"></script>
    <link rel="stylesheet" media="only screen and (max-width: 1024px) and (min-width: 769px)" href="/images/1024.css">
    <link rel="stylesheet" media="only screen and (max-width: 991px) and (min-width: 768px)" href="/images/768.css">
    <link rel="stylesheet" media="only screen and (max-width: 767px)" href="/images/480.css">

<?php 
if(!isset($title)) $title=TEXT_SITE_TITLE;
if(!isset($keyword)) $keyword = TEXT_KEYWORD;
if(!isset($description)) $description = TEXT_DESCRIPTION;
$xtitle=str_replace('"','&quot;',$title);
$keyword = str_replace('"','&quot;',$keyword);
$description = str_replace('"','&quot;',$description);
@define('METADATA','/home/circuitvncambod/public_html/galatouriste-images/meta/service-book.html');
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
<?php include PATH_COMPONENT.'box-flash.php' ?><body id="service_book">
<div class="container">
    <div id="wrapper">
        <div class="top_content">
            <?php include '/home/circuitvncambod/public_html/component/banner.php';include '/home/circuitvncambod/public_html/component/main-menu.php' ?>
            <div class="clearfix" id="content">
                <div id="left_content">
                    <?php include '/home/circuitvncambod/public_html/component/service-book.php';include '/home/circuitvncambod/public_html/component/box-social2.php' ?>
                </div>
                <div id="right_content">
                    <?php include '/home/circuitvncambod/public_html/component/box-new.php';include '/home/circuitvncambod/public_html/component/box-about-us.php';include '/home/circuitvncambod/public_html/component/box-comment.php';include '/home/circuitvncambod/public_html/component/box-gallery.php';include '/home/circuitvncambod/public_html/component/box-support.php' ?>
                </div>
                <div class="clear"><span></span></div>
            </div>
        </div>
        <div id="footer">
            <?php include '/home/circuitvncambod/public_html/component/footer-menu.php' ?>
        </div>
    </div><?php include '/home/circuitvncambod/public_html/component/copyright.php' ?>
</div>
<?php 
foreach(Esnc::$x_append as $value) echo $value;
?><script src="/js/library.js" language="javascript" type="text/javascript"></script>

<script src="/galatouriste-images/application/lang.js" language="javascript" type="text/javascript"></script>
<script src="/js/init.js" language="javascript" type="text/javascript"></script>
</body>
</html>