<html><head><title><?php echo $this->doctitle;?></title>
<base href="<?php echo URL_BASE_ADMIN ?>"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link type="text/css" rel="stylesheet" href="images/style.css" />
<link href="images/rtestyle.css" type="text/css" rel="stylesheet" />
<comment>
<link type="text/css" rel="stylesheet" href="images/style-nonie.css" />
</comment>
<script language="javascript" type="text/javascript" src="js/library.js"></script>
<script language="javascript" type="text/javascript" src="js.php"></script>
<style type="text/css">
#idimgImg1,#idimgImg2{
	width:80px;
	overflow:auto;
}
DIV.title{
	float:left;
}
FORM#idfrmItem{
	width:100%;
}
</style>
</head>
<body class="text" style="width:750px; ">
<form  action="<?php echo "{$this->url}?act=".ACT_SAVE."&id={$this->id}&catid={$this->catid}" ?>" method="post" onSubmit="return checkForm(this);" enctype="application/x-www-form-urlencoded" id="idfrmItem" autocomplete="off" autofill="off">	
<input name="type" type="hidden" value="<?php echo $this->type; ?>">
<table border="0" onClick="parent.document.getElementById('newitemmenu').style.visibility='hidden';" style="table-layout:fixed;width:750px; ">
<col width="26%" /><col width="26%" /><col width="26%" /><col width=""/>
<tr>
	<td >
		<div class="title">M&atilde;</div>
	</td>
	<td >
		<div class="title">T&ecirc;n</div>
	</td>
	
	<td >		
			<div class="title">Gi&aacute; c&#417; b&#7843;n</div>
	</td>
	<td >
		<div class="title">&#272;&#417;n v&#7883; t&iacute;nh</div>
	</td>
</tr>
<tr>
	<td >	
		<div><input type="text" onFocus="HIDE('attribute');" value="<?php echo htmlspecialchars($this->code); ?>" style="width:190px;" name="code" /></div>
	</td>
	<td >
		<div><input type="text" onFocus="HIDE('attribute');" name="name" value="<?php echo htmlspecialchars($this->name); ?>" style="width:100%;"></div>	
	</td>
	<td >
			<div><input type="text" onFocus="HIDE('attribute');" name="saleprice" value="<?php echo currency_format_number($this->saleprice); ?>" style="width:100%;"></div>
	</td>
	<td >
		<div><input type="text" onFocus="HIDE('attribute');" name="unit"  class="input" style="width:90px;"  value="<?php echo htmlspecialchars($this->unit); ?>" /></div>
	</td>
</tr>
</table>
<table border="0" onClick="parent.document.getElementById('newitemmenu').style.visibility='hidden';" style="table-layout:fixed;width:750px; ">
<tr>
	<td col="2"><div class="title"><?php echo TEXT_SPECIFICATIONS;?></div></td>
</tr>
<tr>
	<td><div style="height:100px;overflow:auto; width:712px; z-index:100;">
		<table><col width="26%" /><col width="" />
			<tr>
				<td><?php echo T_ATTR_0 ;?></td>
				<td style="width:400px;"><input type="text" onFocus="HIDE('attribute');" value="<?php echo htmlspecialchars($this->a_attr[0]); ?>" style="width:620px;" name="a_attr[0]" /></td>
			</tr>
			<tr>
				<td><?php echo T_ATTR_1; ?></td>
				<td><input type="text" onFocus="HIDE('attribute');" value="<?php echo htmlspecialchars($this->a_attr[1]); ?>" style="width:620px;" name="a_attr[1]" /></td>
			</tr>
			<tr>
				<td><?php echo T_ATTR_2; ?></td>
				<td><input type="text" onFocus="HIDE('attribute');" value="<?php echo htmlspecialchars($this->a_attr[2]); ?>" style="width:620px;" name="a_attr[2]" /></td>
			</tr>
			<tr>
				<td><?php echo T_ATTR_3; ?></td>
				<td><input type="text" onFocus="HIDE('attribute');" value="<?php echo htmlspecialchars($this->a_attr[3]); ?>" style="width:620px;" name="a_attr[3]" /></td>
			</tr>
			<tr>
				<td><?php echo T_ATTR_4; ?></td>
				<td><input type="text" onFocus="HIDE('attribute');" value="<?php echo htmlspecialchars($this->a_attr[4]); ?>" style="width:620px;" name="a_attr[4]" /></td>
			</tr>
			<tr>
				<td><?php echo T_ATTR_5; ?></td>
				<td><input type="text" onFocus="HIDE('attribute');" value="<?php echo htmlspecialchars($this->a_attr[5]); ?>" style="width:620px;" name="a_attr[5]" /></td>
			</tr>
			<tr>
				<td><?php echo T_ATTR_6; ?></td>
				<td><input type="text" onFocus="HIDE('attribute');" value="<?php echo htmlspecialchars($this->a_attr[6]); ?>" style="width:620px;" name="a_attr[6]" /></td>
			</tr>
			<tr>
				<td><?php echo T_ATTR_7; ?></td>
				<td><input type="text" onFocus="HIDE('attribute');" value="<?php echo htmlspecialchars($this->a_attr[7]); ?>" style="width:620px;" name="a_attr[7]" /></td>
			</tr>
			<tr>
				<td><?php echo T_ATTR_8; ?></td>
				<td><input type="text" onFocus="HIDE('attribute');" value="<?php echo htmlspecialchars($this->a_attr[8]); ?>" style="width:620px;" name="a_attr[8]" /></td>
			</tr>
			<tr>
				<td><?php echo T_ATTR_9; ?></td>
				<td><input type="text" onFocus="HIDE('attribute');" value="<?php echo htmlspecialchars($this->a_attr[9]); ?>" style="width:620px;" name="a_attr[9]" /></td>
			</tr>
		</table></div>
	</td>
</tr>
</table>
</table>
<table border="0" onClick="parent.document.getElementById('newitemmenu').style.visibility='hidden';" style="table-layout:fixed;width:750px; ">
<col width="26%" /><col width="26%" /><col width="26%" /><col width=""/>
<tr>
	<td>
		<div class="title">Xu&#7845;t x&#7913; (qu&#7889;c gia)</div>
	</td>
	<td>
		<div class="title">Nh&agrave; s&#7843;n xu&#7845;t/nh&agrave; cung c&#7845;p</div>
	</td>		
	<td>
		<div class="title">B&#7843;o h&agrave;nh</div>
	</td>
	<td>
		<div class="title">Th&#7913; t&#7921; hi&#7875;n th&#7883;</div>
	</td>
</tr>
<tr>
	<td>
		<input type="text" onFocus="HIDE('attribute');" value="<?php echo htmlspecialchars($this->country); ?>" style="width:190px;" name="country" />
	</td>
	<td>
		<input type="text" onFocus="HIDE('attribute');" name="manufacturer" value="<?php echo htmlspecialchars($this->manufacturer); ?>" style="width:95%;">
	</td>
	<td>
		<input type="text" onFocus="HIDE('attribute');" size="2" name="view" class="input" value="<?php echo $this->view; ?>" style="width:100%;"/>
	</td>
	<td>
		<input type="text" onFocus="HIDE('attribute');" size="2" name="view" class="input" value="<?php echo $this->view; ?>" style="width:90px;"/>
	</td>
</tr>
<tr>
</table>

<table>
<tr>
	<td><div class="title">M&#244; t&#7843; t&#243;m t&#7855;t&nbsp;|&nbsp;<span onClick="showContent(this);" style="cursor:pointer;color:#0000FF; ">M&#244; t&#7843; chi ti&#7871;t</span></div></td>
</tr>
</table>

<table>	
	<tr>
		<td colspan="2">
			<?php 
				$rte= new RTE('myrte',URL_ADMIN.'images/rteimages/',RTE_B_PREVIEW|RTE_B_DEFAULT);
				$rte->show('summary',$this->summary,'100px','711px');
			?>
		</td>
	</tr>
	<tr>
		<td>
			<div class="title">&#272;&#7863;c t&#237;nh</div>
		</td>
		<td >
			<div class="title">T&#7915; g&#7907;i nh&#7899; / T&#7915; kho&aacute;</div>
		</td>
	</tr>
	<tr>
		<td>	
			<div id="attributetext" onClick="SHOW('attribute');">&#272;&#259;c t&#237;nh</div>
			<div id="attribute">
			<?php 
			foreach($this->a_ctrl as $ctl=>$text){
				echo '<div><input type="checkbox" value="'.$ctl.'" name="ctrl[]" ';
				if($this->ctrl & $ctl) echo ' checked';
				echo '  />&nbsp;'.$text.'</div>';
			}?>
			<div style="text-align:right; "><a href="#" onClick="SHOW('attribute');return false;">&#272;&#243;ng</a></div>
			</div>
		</td>
		<td width="515px">
			<input type="text" onFocus="HIDE('attribute');" name="keyword" class="input" value="<?php echo htmlspecialchars($this->keyword) ?>" style="width:513px;"/>
		</td>
	</tr>
	<tr>
		<td>		
			<div style="text-align:center;"><img src="images/picture1.gif" align="absmiddle">&nbsp;<?php htmlview(URL_PRODUCT_IMG1,$this->img1,' id="idimgImg1" align="absmiddle"','<IMG SRC="images/noimage.gif" id="idimgImg1" align="absmiddle" />');?></div>
		</td>
		<td>		
			<div style="clear:both; margin:0px 0px 0px 0px;"><input type="text" onFocus="HIDE('attribute');" name="img1" class="input" value="<?php echo htmlspecialchars($this->img1); ?>" style="width:513px; height:20px;" />&nbsp;<br/><iframe height="35" style="padding-top:5px; " width="300" frameborder="0" scrolling="no" src="document-upload-one.php?fn=doSaveImg1"></iframe></div>
		</td>
	</tr>
	<tr>
		<td><div class="title" style="margin:5px 0px 10px 0px; clear:both;">Ch&#250; th&#237;ch &#7843;nh</div></td>
		<td><div style="margin:0px 0px 0px 0px;"><input type="text" onFocus="HIDE('attribute');" name="alt1" class="input" value="<?php echo htmlspecialchars($this->alt1); ?>"  style="width:513px; height:20px;" /></div></td>
	</tr>
	<tr>
		<td valign="middle">		
			<div style="text-align:center;"><img src="images/picture2.gif" align="absmiddle">&nbsp;<?php htmlview(URL_PRODUCT_IMG2,$this->img2,' id="idimgImg2" align="absmiddle"','<IMG SRC="images/noimage.gif" id="idimgImg2" align="absmiddle" />');?></div>
		</td>
		<td>		
			<div style="clear:both; margin:0px 0px 0px 0px;"><input type="text" onFocus="HIDE('attribute');" name="img2" class="input" value="<?php echo htmlspecialchars($this->img2); ?>" style="width:513px; height:20px" />&nbsp;<br/><iframe height="35" style="padding-top:5px; " width="300" frameborder="0" scrolling="no" src="document-upload-one.php?fn=doSaveImg2"></iframe></div>
		</td>
	</tr>
	<tr>
		<td><div class="title" style="margin:5px 0px 10px 0px; clear:both;">Ch&#250; th&#237;ch &#7843;nh</div></td>
		<td><div><input type="text" onFocus="HIDE('attribute');" name="alt2" class="input" value="<?php echo htmlspecialchars($this->alt2); ?>"  style="width:513px;" /></div></td>
	</tr>
</table>
<input type="hidden" name="contentfile" value="<?php echo $this->contentfile; ?>">
<?php RTE::loadRTEDialog();?>	
<script language="javascript" type="text/javascript" src="js/rte.js"></script>
<?php $rte->initRteObjectScript();?>
<script language="javascript" type="text/javascript">
window.top.document.title = self.document.title;
var url_rte = URL_ADMIN + 'rte.php?filename=<?php echo $this->contentfile;?>';
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
	myrte.rteToInput();
	if(f.name.value == ''){
		parent.banner.setStatus("B&#7841;n ph&#7843;i nh&#7853;p ti&ecirc;u &#273;&#7873;");
		f.name.focus();return false;
	}
	return true;
}
</script>
<script language="javascript" src="js/item-script.js"></script>
</form>
</body>
</html>
