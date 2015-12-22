<?php /* Smarty version 3.1.27, created on 2015-12-22 02:33:46
         compiled from "application/views/templates/header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:154560542156789a6a1df7a8_09459394%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd304e7d7913bc61a5ba57117e97d53a86f77f79d' => 
    array (
      0 => 'application/views/templates/header.tpl',
      1 => 1254661442,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '154560542156789a6a1df7a8_09459394',
  'variables' => 
  array (
    'title' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56789a6a1e56a5_36136042',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56789a6a1e56a5_36136042')) {
function content_56789a6a1e56a5_36136042 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '154560542156789a6a1df7a8_09459394';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en"> 
 
<head> 
	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</title> 
	<meta http-equiv="content-type" content="application/xhtml+xml;charset=utf-8" /> 
	<style type="text/css">
	
		body {background-color: #fff; color: #000; width: 800px; font-family: 'courier', 'courier new', monotype;}
		h1, h2 {background-color: #fff; color: #999; font-family:"Times New Roman",Georgia,serif;}
		h1 {font-size: 2em;}
		h2 {font-size: 1.5em;}
		em {border: solid #000 1px; padding: 0 5px; font-style: normal;}
		.error {background-color: #ff0; color: #c00;}
		.message {background-color: #fff; color: #0c0;}
	
	</style>
</head> 
<body>
<?php }
}
?>