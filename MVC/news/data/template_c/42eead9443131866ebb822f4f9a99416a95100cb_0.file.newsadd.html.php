<?php
/* Smarty version 3.1.31, created on 2017-10-11 05:35:15
  from "D:\php_demo\imooc\MVC\news\tpl\admin\newsadd.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59ddad9313d9e5_92805220',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42eead9443131866ebb822f4f9a99416a95100cb' => 
    array (
      0 => 'D:\\php_demo\\imooc\\MVC\\news\\tpl\\admin\\newsadd.html',
      1 => 1507689577,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/leftmenu.html' => 1,
  ),
),false)) {
function content_59ddad9313d9e5_92805220 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>后台管理系统</title>
	
	<link rel="stylesheet" href="img/css/layout.css" type="text/css" media="screen" />
	<!--[if lt IE 9]>
	<link rel="stylesheet" href="img/css/ie.css" type="text/css" media="screen" />
	<?php echo '<script'; ?>
 src="img/js/html5.js"><?php echo '</script'; ?>
>
	<![endif]-->

	<?php echo '<script'; ?>
 src="img/js/jquery-1.5.2.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="img/js/hideshow.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="img/js/jquery.tablesorter.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="img/js/jquery.equalHeight.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="img/js/ckeditor/ckeditor.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="img/js/ckeditor/adapters/jquery.js"><?php echo '</script'; ?>
>

	<?php echo '<script'; ?>
>
	$(document).ready(function() { 
      	$(".tablesorter").tablesorter(); 
   	});

	$(document).ready(function() {

		//When page loads...
		$(".tab_content").hide(); //Hide all content
		$("ul.tabs li:first").addClass("active").show(); //Activate first tab
		$(".tab_content:first").show(); //Show first tab content

		//On Click Event
		$("ul.tabs li").click(function() {
			$("ul.tabs li").removeClass("active"); //Remove any "active" class
			$(this).addClass("active"); //Add "active" class to selected tab
			$(".tab_content").hide(); //Hide all tab content

			var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
			$(activeTab).fadeIn(); //Fade in the active ID content
			return false;
		});
	});
    <?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
>
    $(function(){
        $('.column').equalHeight();
    });
	<?php echo '</script'; ?>
>

	<?php echo '<script'; ?>
>
		$(document).ready(function() {  // 富文本编辑器
			$("#editor").ckeditor();
		});
	<?php echo '</script'; ?>
>

</head>

<body>

	<header id="header">
		<hgroup>
			<h1 class="site_title">
				<a href="index.html">后台管理面板</a>
			</h1>
			<h2 class="section_title"></h2>
			<div class="btn_view_site">
				<a href="index.php">查看网站</a>
			</div>
		</hgroup>
	</header> <!-- end of header bar -->
	
	<section id="secondary_bar">
		<div class="user">
			<p>admin</p>
			<!-- <a class="logout_user" href="#" title="Logout">Logout</a> -->
		</div>
		<div class="breadcrumbs_container">
			<article class="breadcrumbs">
				<a href="admin.php？controller=admin">后台管理系统</a> 
				<div class="breadcrumb_divider"></div> 
				<a class="current">文章发布</a>
			</article>
		</div>
	</section><!-- end of secondary bar -->
	
	<?php $_smarty_tpl->_subTemplateRender('file:admin/leftmenu.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	
	<section id="main" class="column">
		<form id="form1" name="form1" method="post" action="admin.php?controller=admin&method=newsadd">
			<article class="module width_full">
				<header><h3>发表新文章</h3></header>
					<div class="module_content">
						<fieldset>
							<label>标题</label>
							<input type="text" name="title" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['title'])===null||$tmp==='' ? '' : $tmp);?>
">
						</fieldset>
						<fieldset>
							<textarea rows="12" name="content" id="editor"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['content'])===null||$tmp==='' ? '' : $tmp);?>
</textarea>
						</fieldset>
						<fieldset style="width:48%; float:left; margin-right: 3%;">
							<label>作者</label>
							<input type="text" name="author" style="width:92%;" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['author'])===null||$tmp==='' ? '' : $tmp);?>
">
						</fieldset>
						<fieldset style="width:48%; float:left;">
							<label>出处</label>
							<input type="text" name="source" style="width:92%;" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['source'])===null||$tmp==='' ? '' : $tmp);?>
">
						</fieldset><div class="clear"></div>
					</div>
				<footer>
					<div class="submit_link">
						<input type="hidden" name="id" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['id'])===null||$tmp==='' ? '' : $tmp);?>
">
						<input type="submit" name="submit" value="发布" class="alt_btn">
					</div>
				</footer>
			</article>
		</form>

		<div class="spacer"></div>

	</section>

</body>

</html><?php }
}
