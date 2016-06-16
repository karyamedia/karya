<?php
/* Smarty version 3.1.29, created on 2016-06-15 08:07:39
  from "/vagrant/htdocs/karya/app/views/welcome_message.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57610ccbb09db5_50558183',
  'file_dependency' => 
  array (
    '3b545f3348e6f9a846f164cc129e3437079e86d4' => 
    array (
      0 => '/vagrant/htdocs/karya/app/views/welcome_message.tpl',
      1 => 1465978058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57610ccbb09db5_50558183 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	
	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
		margin-left:auto;
        margin-right:auto;
		width: 300px;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
	
</head>
<body>

<div id="container">

	<div id="body">
		<img src="assets/img/logo.png" width="260px">
	</div>

	<p class="footer"> 
	<?php ob_start();
echo ENVIRONMENT;
$_tmp1=ob_get_clean();
if ($_tmp1 == 'development') {?>
		<strong><?php echo CI_VERSION;?>
</strong>
	<?php } else { ?>
		''
	<?php }?>
	</p>
</div>

</body>
</html><?php }
}
