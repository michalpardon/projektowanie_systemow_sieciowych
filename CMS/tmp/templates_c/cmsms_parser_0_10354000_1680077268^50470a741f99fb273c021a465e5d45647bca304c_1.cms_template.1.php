<?php
/* Smarty version 3.1.31, created on 2023-03-29 10:07:48
  from "cms_template:1" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_6423f1d42bd862_24177186',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50470a741f99fb273c021a465e5d45647bca304c' => 
    array (
      0 => 'cms_template:1',
      1 => '1680077225',
      2 => 'cms_template',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6423f1d42bd862_24177186 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_global_content')) require_once 'C:\\xampp\\htdocs\\CMS\\lib\\plugins\\function.global_content.php';
if (!is_callable('smarty_function_title')) require_once 'C:\\xampp\\htdocs\\CMS\\lib\\plugins\\function.title.php';
echo smarty_function_global_content(array('name'=>'a_part_top'),$_smarty_tpl);?>


<section id="content">
		<h1><?php echo smarty_function_title(array(),$_smarty_tpl);?>
</h1>
		
	</section>

<?php echo smarty_function_global_content(array('name'=>'a_part_bottom'),$_smarty_tpl);
}
}
