<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<base href="<?php echo URL_BASE_ADMIN ?>" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?php echo $this->doctitle;?></title>
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
#idimgImg1,#idimgImg2{
	width:80px;
}
.tab{display:none;}
.tabactive{display:table-header-group;}
.tabhead{cursor:pointer;font-size:11px;font-weight:normal;color:black;}
.tabheadactive{cursor:pointer;font-size:11px;font-weight:bold;color:green;}
</style>
</head>
<body class="text">
<form  action="<?php echo URL_SELF.'?act='.ACT_SAVE.'&id='.$this->id.'&catid='.$this->catid ?>" method="post" onSubmit="return checkForm(this);" enctype="multipart/form-data" id="idfrmItem">	
<input name="type" type="hidden" value="<?php echo $this->type; ?>" />
<table width="98%" border="0" onClick="parent.document.getElementById('newitemmenu').style.visibility='hidden';">
<tr>
	<td>
	<div class="title">M&#227; tour</div>
	<div><input type="text"  value="<?php echo $this->code; ?>" style="width:150px;" name="code" /></div>
	</td>
	<td width="66%">
	<div class="title">T&#234;n tour</div>
	<div><input type="text"  name="name" value="<?php echo $this->name; ?>" style="width:95%;" /></div>
	</td>
	<td>
		<div class="title">Gi&aacute; &#273;&#7841;i di&#7879;n</div>
		<div><input type="text"  name="price"  class="input" style="width:97%;"  value="<?php echo htmlspecialchars($this->price); ?>" /></div>
	</td>
</tr>
<tr>
	<td>
		<div class="title">Th&#7901;i l&#432;&#7907;ng</div>
		<div><input type="text"  name="manufacturer" class="input" style="width:150px;"  value="<?php echo htmlspecialchars($this->manufacturer); ?>" /></div>
	</td>
	<td colspan="2">
	<div style="float:left;width:49%;">
		<div class="title">&#272;i&#7875;m xu&#7845;t ph&#225;t</div>
		<div><input type="text" name="include" class="input" style="width:150px"  value="<?php echo htmlspecialchars($this->include); ?>" /><select onchange="this.previousSibling.value=this.options[this.selectedIndex].text">
		<option selected><?php echo $this->include ?></option>
		<?php echo @readfile(PATH_APPLICATION.'citycodes.htm'); ?>
		</select>
		</div>
	</div><div style="float:left;width:49%;margin-left:5px;">
		<div class="title">&#272;i&#7875;m k&#7871;t th&#250;c</div>
		<div><input type="text" name="unit" class="input" style="width:150px;"  value="<?php echo htmlspecialchars($this->unit); ?>" /><select onchange="this.previousSibling.value=this.options[this.selectedIndex].text">
		<option selected><?php echo $this->unit ?></option>
		<?php echo @readfile(PATH_APPLICATION.'citycodes.htm'); ?>
		</select>		
		</div>
	</div>
	</td>
	
</tr>
<tr>
	<td>
	<div class="title">T&#7847;n xu&#7845;t</div>
	<div><input type="text"  name="model" value="<?php echo $this->model; ?>" style="width:150px;" /></div>	
	</td>
	<td>
		<div class="title">Lá»™ trÃ¬nh</div>
		<div><input type="hidden"  name="type" class="input" style="width:150px;"  value="<?php echo htmlspecialchars($this->type); ?>" /></div>
		<div><input type="text"  name="cf[4]" class="input" style="width:350px;"  value="<?php echo htmlspecialchars($this->cf[4]); ?>" /></div>
	</td>
	<td>
		<div class="title">Gia</div>
		<div><input type="text"  name="class" class="input" style="width:150px;"  value="<?php echo htmlspecialchars($this->class); ?>" /></div>
	</td>
</tr>
<tr>
	<td colspan="3">
		<div class="title">Ulr rewrite</div>
		<div><input type="text"  name="urlrewrite" class="input" style="width:700px;"  value="<?php echo htmlspecialchars($this->urlrewrite); ?>" /></div>
	</td>
</tr>
<tr><td colspan="3">
	<table width="100%">
	<thead>
		<tr height="23" style="background-image:url(images/bg-product.gif);">
		  <td align="center">
			<span name="tabhead" class="tabhead" onClick="showTab('_summary',this);">Summary</span>
			<strong> | </strong><span name="tabhead" class="tabhead" onClick="showTab('_detail',this);">Chi tiáº¿t </span>
			<strong> | </strong><span name="tabhead" class="tabhead" onClick="showTab('_cf0',this);">Policy</span>
			<strong> | </strong><span name="tabhead" class="tabhead" onClick="showTab('_cf3',this);">Overview</span>
			<strong> | </strong><span name="tabhead" class="tabhead" onClick="showTab('_cf5',this);">Hotel</span>
			<strong> | </strong><span name="tabhead" class="tabhead" onClick="showTab('_cf1',this);">Customize information</span>
		    <strong> | </strong><span name="tabhead" class="tabhead" onClick="showTab('_cf2',this);">Duration</span>
		</td>
		</tr>
	</thead>
	<tbody id="tab_summary" class="tab">
	<tr><td>
	<div style="width:100% ">
		<?php
		include_once("../fckeditor/fckeditor.php") ;
		$sBasePath = URL_ADMIN.'fckeditor/' ;
		//echo $sBasePath;
		$oFCKeditor = new FCKeditor('summary') ;

		$oFCKeditor->BasePath	= $sBasePath ;
		$oFCKeditor->Height = 300 ;
		//$oFCKeditor->Config[ 'ToolbarLocation' ] = 'Out:xToolbar' ;
		$oFCKeditor->Value		=  $this->summary;
		$oFCKeditor->Config['EnterMode'] = 'br';$oFCKeditor->Create() ;
		?>
	</div>
	</td></tr>
	</tbody>
	<tbody id="tab_detail" class="tab">
	<tr><td>
	<div style="width:100% ">
		<?php
		$oFCKeditor = new FCKeditor('detail') ;
		$oFCKeditor->BasePath	= $sBasePath ;
		$oFCKeditor->Height = 300 ;
		//$oFCKeditor->Config[ 'ToolbarLocation' ] = 'Out:xToolbar' ;
		$oFCKeditor->Value		=  $this->detail;
		$oFCKeditor->Config['EnterMode'] = 'br';$oFCKeditor->Create() ;
		?>
	</div>
	</td></tr>
	</tbody>
	<tbody id="tab_warranty" class="tab">
	<tr><td>
	<div style="width:100% ">
<?php
	$oFCKeditor = new FCKeditor('warranty') ;
		$oFCKeditor->BasePath	= $sBasePath ;
		$oFCKeditor->Height = 300 ;
		//$oFCKeditor->Config[ 'ToolbarLocation' ] = 'Out:xToolbar' ;
		$oFCKeditor->Value		=  $this->warranty;
		$oFCKeditor->Config['EnterMode'] = 'br';$oFCKeditor->Create() ;
?>
	</div>
	</td></tr>
	</tbody>
	<tbody id="tab_cf0" class="tab">
	<tr><td>
	<div style="width:100% ">
		<?php
		$oFCKeditor = new FCKeditor('cf[0]') ;
		$oFCKeditor->BasePath	= $sBasePath ;
		$oFCKeditor->Height = 300 ;
		//$oFCKeditor->Config[ 'ToolbarLocation' ] = 'Out:xToolbar' ;
		$oFCKeditor->Value		=  $this->cf[0];
		$oFCKeditor->Config['EnterMode'] = 'br';$oFCKeditor->Create() ;
		?>
	</div>
	</td></tr>
	</tbody>
	<tbody id="tab_cf1" class="tab">
	<tr><td>
	<div style="width:100% ">
		<?php
		//$oFCKeditor = new FCKeditor('cf[1]') ;
		//$oFCKeditor->BasePath	= $sBasePath ;
		//$oFCKeditor->Height = 300 ;
		//$oFCKeditor->Config[ 'ToolbarLocation' ] = 'Out:xToolbar' ;
		//$oFCKeditor->Value		=  $this->cf[1];
		//$oFCKeditor->Config['EnterMode'] = 'br';$oFCKeditor->Create() ;
		
		?>
		<textarea style="width:100%; height:300px;" name="cf[1]"><?php echo $this->cf[1];?>
		</textarea>
	</div>
	</td></tr>
	</tbody>
	<tbody id="tab_cf2" class="tab">
	<tr><td>
	<div style="width:100% ">
		<textarea style="width:100%; height:300px;" name="cf[2]"><?php echo $this->cf[2];?>
		</textarea>
	</div>
	</td></tr>
	</tbody>
	<tbody id="tab_cf3" class="tab">
	<tr><td>
	<div style="width:100% ">
		<?php
		$oFCKeditor = new FCKeditor('cf[3]') ;
		$oFCKeditor->BasePath	= $sBasePath ;
		$oFCKeditor->Height = 300 ;
		//$oFCKeditor->Config[ 'ToolbarLocation' ] = 'Out:xToolbar' ;
		$oFCKeditor->Value		=  $this->cf[3];
		$oFCKeditor->Config['EnterMode'] = 'br';$oFCKeditor->Create() ;
		?>
	</div>
	</td></tr>
	</tbody>
	<tbody id="tab_cf4" class="tab">
	<tr><td>
	<div style="width:100% ">	

	</div>
	</td></tr>
	</tbody>
	<tbody id="tab_cf5" class="tab">
	<tr><td>
	<div style="width:100% ">	
		<?php
		$oFCKeditor = new FCKeditor('cf[5]') ;
		$oFCKeditor->BasePath	= $sBasePath ;
		$oFCKeditor->Height = 300 ;
		//$oFCKeditor->Config[ 'ToolbarLocation' ] = 'Out:xToolbar' ;
		$oFCKeditor->Value		=  $this->cf[5];
		$oFCKeditor->Config['EnterMode'] = 'br';$oFCKeditor->Create() ;
		?>
	</div>
	</td></tr>
	</tbody>
	<tbody id="tab_cf10" class="tab">
	<tr><td>
	<div style="width:100% ">	
		<?php
		$oFCKeditor = new FCKeditor('cf[10]') ;
		$oFCKeditor->BasePath	= $sBasePath ;
		$oFCKeditor->Height = 300 ;
		//$oFCKeditor->Config[ 'ToolbarLocation' ] = 'Out:xToolbar' ;
		$oFCKeditor->Value		=  $this->cf[10];
		$oFCKeditor->Config['EnterMode'] = 'br';$oFCKeditor->Create() ;
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
	<td>
		<div class="title">T&#7915; g&#7907;i nh&#7899;</div>
		<div><input type="text"  name="keyword" class="input" value="<?php echo $this->keyword ?>" style="width:100%;"/></div>
	</td>
	<td>
		<div class="title">Th&#7913; t&#7921; hi&#7875;n th&#7883;</div>
		<div><input type="text"  size="2" name="view" class="input" value="<?php echo $this->view; ?>" style="width:30px;"/></div>
	</td>
</tr>
<tr>
	<td>		
		<div style="text-align:center;"><img src="images/picture1.gif" align="absmiddle">&nbsp;<?php htmlview(URL_PRODUCT_IMG1,$this->img1 ? $this->img1:URL_ADMIN.'images/noimage.gif'," id='idimgImg1' align='absmiddle'");?></div>
	</td>
	<td colspan="2">		
		<div><input type="text"  name="img1" class="input" value="<?php echo htmlspecialchars($this->img1); ?>" style="width:250px;" />&nbsp;<iframe height="25" style="padding-top:5px; " width="340" frameborder="0" scrolling="no" src="document-upload-one.php?fn=doSaveImg1"></iframe></div>
		<div class="title">Ch&#250; th&#237;ch </div>
		<div><input type="text"  name="alt1" class="input" value="<?php echo htmlspecialchars($this->alt1); ?>"  style="width:99%;" /></div>
	</td>
</tr>
<tr>
	<td valign="middle">		
		<div style="text-align:center;"><img src="images/picture2.gif" align="absmiddle">&nbsp;<?php htmlview(URL_PRODUCT_IMG2,$this->img2 ? $this->img2:URL_ADMIN.'images/noimage.gif'," id='idimgImg2' align='absmiddle'");?></div>
	</td>
	<td colspan="2">		
		<div><input type="text"  name="img2" class="input" value="<?php echo htmlspecialchars($this->img2); ?>" style="width:250px;" />&nbsp;<iframe height="25" style="padding-top:5px; " width="340" frameborder="0" scrolling="no" src="document-upload-one.php?fn=doSaveImg2"></iframe></div>
		<div class="title">Ch&#250; th&#237;ch </div>
		<div><input type="text"  name="alt2" class="input" value="<?php echo htmlspecialchars($this->alt2); ?>"  style="width:99%;" /></div>
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
var self_type = '<?php echo $this->type;?>';
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
	case '_warranty':
		if(!rte_warranty ) rte_warranty_init();break;
	case '_cf0':
		if(!rte_cf0 ) rte_cf0_init();break;
	case '_cf1':
		if(!rte_cf1 ) rte_cf1_init();break;
	case '_cf4':
		if(!rte_cf4 ) rte_cf4_init();break;
	case '_cf2':
		if(!rte_cf2 ) rte_cf2_init();break;
	case '_cf3':
		if(!rte_cf3 ) rte_cf3_init();break;
	case '_cf9':
		if(!rte_cf9 ) rte_cf9_init();break;
	case '_cf10':
		if(!rte_cf10 ) rte_cf10_init();break;
	}
}
</script>
<script language="javascript" src="js/item-script.js"></script>