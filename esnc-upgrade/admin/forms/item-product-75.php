﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<base href="<?php echo URL_BASE_ADMIN ?>" />
<head><title><?php echo $this->doctitle;?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link type="text/css" rel="stylesheet" href="images/style.css" />
<comment>
<link type="text/css" rel="stylesheet" href="images/style-nonie.css" />
</comment>
<link type="text/css" rel="stylesheet" href="images/rtestyle.css"/>
<script language="javascript" src="js/library.js"></script>
<script language="javascript" type="text/javascript" src="js.php"></script>
<script language="javascript" src="js/rte.js" type="text/javascript"></script>
<script language="javascript" type="text/javascript">
function SHOW(id){	
	var o = document.getElementById(id);	
	if (o.style.visibility =='hidden' || o.style.visibility ==''){
		o.style.visibility='visible';
	}
	else{
		o.style.visibility='hidden';
	}
	if (o.clientWidth<154) o.style.width= '154px';
}
function HIDE(id){
	var o = document.getElementById(id);	
	o.style.visibility ='hidden';
}
</script>
<style type="text/css">
div#attribute{
	font-size:11px;
	visibility:hidden;
	position:absolute;
	border:1px solid #96969D;
	border-top:0px;
	background:#FFFFFF;	
}
div#attributetext{
	padding:5px 0px 0px 20px;
	font-size:11px;
	background:url(images/selectbox.gif);
	width:136px;
	height:17px;
}
#idimgImg1,#idimgImg2{
	width:80px;
}
.tab{display:none;}
.tabactive{display:table-header-group;}
.tabhead{cursor:pointer;font-size:11px;font-weight:normal;color:black;}
.tabheadactive{cursor:pointer;font-size:11px;font-weight:bold;color:green;}
</style>
</head>
<body class="text" style="overflow:hidden;width:97%; ">
<form action="<?php echo URL_SELF.'?act='.ACT_SAVE.'&id='.$this->id.'&catid='.$this->catid ?>" method="post" onSubmit="return checkForm(this);" enctype="multipart/form-data" id="idfrmItem">	
<input name="type" type="hidden" value="<?php echo $this->type; ?>" />
<table width="100%" border="0" onClick="parent.document.getElementById('newitemmenu').style.visibility='hidden';">
<tr>
	<td width="16%">
	<div class="title">M&#227; hotel</div>
	<div><input type="text" onFocus="HIDE('attribute');" value="<?php echo $this->code; ?>" style="width:150px;" name="code" /></div>
	</td>
	<td colspan="2">
	<table width="100%"><tr>
	<td width="40%">
		<div class="title">T&#234;n hotel</div>
		<div><input type="text" onFocus="HIDE('attribute');" name="name" value="<?php echo $this->name; ?>" style="width:100%;"></div>
	</td>
	<td width="10%">
		<div class="title">Sao</div>
		<div><select onFocus="HIDE('attribute');" name="manufacturer" style="width:100%;font-family:Tahoma;font-size:11px; ">
		<option value="<?php echo $this->manufacturer ?>"><?php echo $this->manufacturer ?></option>
		<?php readfile(PATH_APPLICATION.'hotelstar.htm');?>
		</select></div>
	</td>
	<td> &nbsp;
		
	</td>
	</tr>
	</table>
	</td>
</tr>
<tr>
	<td>
		<div class="title">Gi&#225; hotel t&#7915; - &#273;&#7871;n</div>
		<div>
			<input type="text" onFocus="HIDE('attribute');" name="price" class="input" style=" width:60px"  value="<?php echo htmlspecialchars($this->price); ?>" />
			<input type="text" onFocus="HIDE('attribute');" name="quantity" class="input" style="width:60px"  value="<?php echo htmlspecialchars($this->quantity); ?>" />
		</div>
	</td>
<td colspan="2">
	<div style="float:left;width:60%;">
		<div class="title">&#272;&#7883;a ch&#7881;</div>
		<div><input type="text" onFocus="HIDE('attribute');" name="include" class="input" style="width:100%;"  value="<?php echo htmlspecialchars($this->include); ?>" /></div>
	</div>
	<div style="float:left;width:35%;margin-left:5px;">
		<div class="title">T&#7881;nh/Th&#224;nh ph&#7889;</div>
		<div><nobr><input type="text" onFocus="HIDE('attribute');" name="model" class="input" style="width:50%;"  value="<?php echo htmlspecialchars($this->model); ?>" /><select onchange="this.previousSibling.value=this.options[this.selectedIndex].text">		<option value="<?php echo $this->model ?>" selected><?php echo $this->model ?></option><?php echo @readfile(PATH_APPLICATION.'citycodes.htm'); ?></select></nobr></div>
	</div>
	</td>
</tr>
<tr>
	<td>
		<div class="title">S&#7889; &#273;i&#7879;n tho&#7841;i</div>
		<div>
			<input type="text" onFocus="HIDE('attribute');" name="unit" class="input" style=" width:200px"  value="<?php echo htmlspecialchars($this->unit); ?>" />
		</div>
	</td>
	<td colspan="2">
		<div class="title">urlrewrite</div>
		<div>
			<input type="text" onFocus="HIDE('attribute');" name="urlrewrite" class="input" style="width:500px" value="<?php echo htmlspecialchars($this->urlrewrite); ?>" />
		</div>
	</td>
</tr>
<tr><td colspan="3">
	<table width="97%">
	<thead>
		<tr height="23" style="background-image:url(images/bg-product.gif);"><td align="center">
			<span name="tabhead" class="tabhead" onClick="showTab('_summary',this);">T&#243;m t&#7855;t</span>
			<strong> | </strong><span name="tabhead" class="tabhead" onClick="showTab('_detail',this);">Chi ti&#7871;t</span>
			<strong> | </strong><span name="tabhead" class="tabhead" onClick="showTab('_cf0',this);">Ph&#242;ng ngh&#7881;</span>
			<strong> | </strong><span name="tabhead" class="tabhead" onClick="showTab('_cf2',this);">Ch&#237;nh s&#225;ch quy &#273;&#7883;nh</span>
			<strong> | </strong><span name="tabhead" class="tabhead" onClick="showTab('_cf1',this);">Vi tri tuong quan</span>
			
		</td></tr>
	</thead>
	<tbody id="tab_summary" class="tab">
	<tr><td>
	<div style="width:100% ">
<?php
include_once("../fckeditor/fckeditor.php");
$sBasePath= URL_ADMIN.'fckeditor/';
	$oFCKeditor= new FCKeditor('summary');
	$oFCKeditor->BasePath= $sBasePath;
	$oFCKeditor->Height= 300;
	$oFCKeditor->Value= $this->summary;
	$oFCKeditor->Create();
?>
	</div>
	</td></tr>
	</tbody>
	<tbody id="tab_detail" class="tab">
	<tr><td>
	<div style="width:100% ">
<?php
	$oFCKeditor= new FCKeditor('detail');
	$oFCKeditor->BasePath= $sBasePath;
	$oFCKeditor->Height= 300;
	$oFCKeditor->Value= $this->detail;
	$oFCKeditor->Create();
?>
	</div>
	</td></tr>
	</tbody>
	<tbody id="tab_cf0" class="tab">
	<tr><td>
	<div style="width:100% ">
<?php
	$oFCKeditor= new FCKeditor('cf[0]');
	$oFCKeditor->BasePath= $sBasePath;
	$oFCKeditor->Height= 300;
	$oFCKeditor->Value= $this->cf[0];
	$oFCKeditor->Create();
?>
	</div>
	</td></tr>
	</tbody>
	<tbody id="tab_cf1" class="tab">
	<tr><td>
	<div style="width:100% ">
<?php
	$oFCKeditor= new FCKeditor('cf[1]');
	$oFCKeditor->BasePath= $sBasePath;
	$oFCKeditor->Height= 300;
	$oFCKeditor->Value= $this->cf[1];
	$oFCKeditor->Create();
?>
	</div>
	</td></tr>
	</tbody>
	<tbody id="tab_cf2" class="tab">
	<tr><td>
	<div style="width:100% ">
<?php
	$oFCKeditor= new FCKeditor('cf[2]');
	$oFCKeditor->BasePath= $sBasePath;
	$oFCKeditor->Height= 300;
	$oFCKeditor->Value= $this->cf[2];
	$oFCKeditor->Create();
?>
	</div>
	</td></tr>
	</tbody>
	</table>
</td></tr>
<tr>
	<td>
		<div class="title">&#272;&#7863;c t&#237;nh</div>
		<div>
			<div id="attributetext" onClick="SHOW('attribute');">&#272;&#259;c t&#237;nh hi&#7875;n th&#7883;</div>
			<div id="attribute">
			<?php 
			foreach($this->a_ctrl as $ctl=>$text){
				echo '<div><input type="checkbox" value="'.$ctl.'" name="ctrl[]" ';
				if($this->ctrl & $ctl) echo ' checked';
				echo ' />&nbsp;'.$text.'</div>';
			}?>
				<div style="text-align:right; "><a href="#" onClick="SHOW('attribute');return false;">&#272;&#243;ng</a></div>
			</div>
		</div>
	</td>
	<td width="59%">
		<div class="title">T&#7915; g&#7907;i nh&#7899;</div>
		<div><input type="text" onFocus="HIDE('attribute');" name="keyword" class="input" value="<?php echo $this->keyword ?>" style="width:100%;"/></div>
	</td>
	<td width="25%" style="padding:0px 5px 0px 0px; ">
		<div class="title">Th&#7913; t&#7921;</div>
		<div><input type="text" onFocus="HIDE('attribute');" size="2" name="view" class="input" value="<?php echo $this->view; ?>" style="width:30px;"/></div>
	</td>
</tr>
<tr>
	<td>		
		<div style="text-align:center;"><img src="images/picture1.gif" align="absmiddle">&nbsp;<?php htmlview(URL_PRODUCT_IMG1,$this->img1 ? $this->img1:URL_ADMIN.'images/noimage.gif'," id='idimgImg1' align='absmiddle'");?></div>
	</td>
	<td colspan="2">		
		<div><input type="text" onFocus="HIDE('attribute');" name="img1" class="input" value="<?php echo htmlspecialchars($this->img1); ?>" style="width:40%;" />&nbsp;<iframe height="25" style="padding-top:5px; " width="340" frameborder="0" scrolling="no" src="document-upload-one.php?fn=doSaveImg1"></iframe></div>
		<div class="title">Ch&#250; th&#237;ch </div>
		<div><input type="text" onFocus="HIDE('attribute');" name="alt1" class="input" value="<?php echo htmlspecialchars($this->alt1); ?>" style="width:90%" /></div>
	</td>
</tr>
<tr>
	<td valign="middle">		
		<div style="text-align:center;"><img src="images/picture2.gif" align="absmiddle">&nbsp;<?php htmlview(URL_PRODUCT_IMG2,$this->img2 ? $this->img2:URL_ADMIN.'images/noimage.gif'," id='idimgImg2' align='absmiddle'");?></div>
	</td>
	<td colspan="2">		
		<div><input type="text" onFocus="HIDE('attribute');" name="img2" class="input" value="<?php echo htmlspecialchars($this->img2); ?>" style="width:40%;" />&nbsp;<iframe height="25" style="padding-top:5px; " width="340" frameborder="0" scrolling="no" src="document-upload-one.php?fn=doSaveImg2"></iframe></div>
		<div class="title">Ch&#250; th&#237;ch </div>
		<div><input type="text" onFocus="HIDE('attribute');" name="alt2" class="input" value="<?php echo htmlspecialchars($this->alt2); ?>" style="width:90% "  /></div>
	</td>
</tr>
</table>
</form>
<?php RTE::loadRTEDialog();?>	
</body>
</html>
<script language="javascript" type="text/javascript">
window.top.document.title = self.document.title;
var self_id = '<?php echo $this->id;?>';
var frmItem = document.getElementById("idfrmItem");
var imgImg1 = document.getElementById('idimgImg1');
var imgImg2 = document.getElementById('idimgImg2');
var imgImg = document.getElementById('idimgImg');
var url_self = '<?php echo URL_SELF;?>';
var url_up = '<?php echo dirname(URL_SELF) ?>/item-list.php?<?php echo urlmodify($this->alias.'id',NULL,$this->catalias.'id',$this->catid); ?>';
var url_newitem=url_self + '?<?php echo urlmodify('catid',$this->catid,$this->alias.'id',0,'id',0,'type',$_GET['type']); ?>';
function showContent(o){
	window.open(url_rte, "subWindow",sParams);
}
function checkForm(f){
	if(f.name.value == ''){
		parent.banner.setStatus("B&#7841;n ph&#7843;i nh&#7853;p ti&ecirc;u &#273;&#7873;");
		f.name.focus();return false;
	}
	return true;
}
function showTab(id,o){
	a = document.getElementsByTagName('tbody');
	n = a.length;
	for(i=0;i < n; ++i){
		if(a.item(i).className == 'tabactive'){
			a.item(i).className='tab';
//			a.item(i).style.display='none';
		}
	}
	document.getElementById('tab' + id).className='tabactive';
//	document.getElementById('tab' + id).style.display='table-header-group';
	a = document.getElementsByTagName('span');
	n = a.length;
	for(i=0;i < n; ++i){
		if(a.item(i).className == 'tabheadactive') {
			a.item(i).className = 'tabhead';
		}
	}
	o.className='tabheadactive';
	switch(id){
	case '_summary':
		if(!rte_summary ) rte_summary_init();break;
	case '_detail':
		if(!rte_detail ) rte_detail_init();break;
	case '_cf0':
		if(!rte_cf0 ) rte_cf0_init();break;
	case '_cf1':
		if(!rte_cf1 ) rte_cf1_init();break;
	case '_cf2':
		if(!rte_cf2 ) rte_cf2_init();break;
	}
}
</script>
<script language="javascript" src="js/item-script.js"></script>
<script language="javascript" src="<?php echo URL_BASE ?>'js/admin-overload.js"></script>
<?php dbclose(); ?>