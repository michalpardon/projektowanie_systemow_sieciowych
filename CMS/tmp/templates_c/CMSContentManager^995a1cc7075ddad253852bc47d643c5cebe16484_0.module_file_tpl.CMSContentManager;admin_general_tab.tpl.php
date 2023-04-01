<?php
/* Smarty version 3.1.31, created on 2023-04-01 00:23:33
  from "module_file_tpl:CMSContentManager;admin_general_tab.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_64275d65a2f418_05044981',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '995a1cc7075ddad253852bc47d643c5cebe16484' => 
    array (
      0 => 'module_file_tpl:CMSContentManager;admin_general_tab.tpl',
      1 => 1679647579,
      2 => 'module_file_tpl',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64275d65a2f418_05044981 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_form_start')) require_once 'C:\\xampp\\htdocs\\CMS\\lib\\plugins\\function.form_start.php';
if (!is_callable('smarty_function_cms_help')) require_once 'C:\\xampp\\htdocs\\CMS\\admin\\plugins\\function.cms_help.php';
if (!is_callable('smarty_function_html_options')) require_once 'C:\\xampp\\htdocs\\CMS\\lib\\smarty\\plugins\\function.html_options.php';
if (!is_callable('smarty_function_form_end')) require_once 'C:\\xampp\\htdocs\\CMS\\lib\\plugins\\function.form_end.php';
echo smarty_function_form_start(array('action'=>'admin_general_tab'),$_smarty_tpl);?>

<div class="pageoverflow">
  <p class="pagetext"></p>
  <p class="pageinput">
    <input type="submit" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
submit" value="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('submit');?>
" accesskey="s"/>
  </p>
</div>
<div class="pageoverflow">
  <p class="pagetext"><label for="locktimeout"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_locktimeout');?>
:</label>&nbsp;<?php echo smarty_function_cms_help(array('key2'=>'help_general_locktimeout','title'=>$_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_locktimeout')),$_smarty_tpl);?>
</p>
  <p class="pageinput">
    <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
locktimeout" value="<?php echo $_smarty_tpl->tpl_vars['locktimeout']->value;?>
" size="3" maxlength="3"/>
  </p>
</div>
<div class="pageoverflow">
  <p class="pagetext"><label for="lockrefresh"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_lockrefresh');?>
:</label>&nbsp;<?php echo smarty_function_cms_help(array('key2'=>'help_general_lockrefresh','title'=>$_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_lockrefresh')),$_smarty_tpl);?>
</p>
  <p class="pageinput">
    <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
lockrefresh" value="<?php echo $_smarty_tpl->tpl_vars['lockrefresh']->value;?>
" size="4" maxlength="4"/>
  </p>
</div>
<div class="pageoverflow">
  <p class="pagetext"><label for="lockrefresh"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_template_list_mode');?>
:</label>&nbsp;<?php echo smarty_function_cms_help(array('key2'=>'help_general_templatelistmode','title'=>$_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_template_list_mode')),$_smarty_tpl);?>
</p>
  <p class="pageinput">
    <select name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
template_list_mode">
    <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['template_list_opts']->value,'selected'=>$_smarty_tpl->tpl_vars['template_list_mode']->value),$_smarty_tpl);?>

    </select>
  </p>
</div>
<?php echo smarty_function_form_end(array(),$_smarty_tpl);
}
}
