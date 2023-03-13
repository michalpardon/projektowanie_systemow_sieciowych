<?php
/* Smarty version 4.2.1, created on 2023-03-13 19:48:29
  from 'C:\xampp\htdocs\amelia\app\views\ListView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_640f6ffdaa74f4_24571433',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd26bbdaa4de03c81fe429baf79366c6c6be84fca' => 
    array (
      0 => 'C:\\xampp\\htdocs\\amelia\\app\\views\\ListView.tpl',
      1 => 1678733306,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:menu.tpl' => 1,
    'file:ListTableView.tpl' => 1,
  ),
),false)) {
function content_640f6ffdaa74f4_24571433 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1179616104640f6ffd7484a9_02931179', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1134622965640f6ffd77ebf2_23515080', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'footer'} */
class Block_1179616104640f6ffd7484a9_02931179 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1179616104640f6ffd7484a9_02931179',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Michał Pardon<?php
}
}
/* {/block 'footer'} */
/* {block 'messages'} */
class Block_385610221640f6ffd8ab8e3_29684841 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isMessage()) {?>
<div class="messages bottom-margin">
	<ul>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
	<li class="msg <?php if ($_smarty_tpl->tpl_vars['msg']->value->isError()) {?>error bottom-margin<?php }?> <?php if ($_smarty_tpl->tpl_vars['msg']->value->isWarning()) {?>info bottom-margin<?php }?> <?php if ($_smarty_tpl->tpl_vars['msg']->value->isInfo()) {?>info bottom-margin<?php }?>"><?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>
</li>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ul>
</div>
<?php }?>

<?php
}
}
/* {/block 'messages'} */
/* {block 'content'} */
class Block_1134622965640f6ffd77ebf2_23515080 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1134622965640f6ffd77ebf2_23515080',
  ),
  'messages' => 
  array (
    0 => 'Block_385610221640f6ffd8ab8e3_29684841',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php $_smarty_tpl->_subTemplateRender('file:menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<form id="search-form" onsubmit="ajaxPostForm('search-form','<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
showAllTable','table'); return false;" method="post" class="">  
    <ul class="actions">
        <li><input type="text" name="login" id="login" value="<?php if ($_smarty_tpl->tpl_vars['filtr']->value->login != '') {
echo $_smarty_tpl->tpl_vars['filtr']->value->login;
}?>" <?php if ($_smarty_tpl->tpl_vars['filtr']->value->login == '') {?>placeholder="Login"<?php }?> /></li>
        <li><input type="submit" value="Wyszukaj" class="primary" /></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
showAll" class="button"><i class="fa-solid fa-reply-all"></i> Reset</a></li>
    </ul>
</form>    
    
<div id="table">
<?php $_smarty_tpl->_subTemplateRender("file:ListTableView.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_385610221640f6ffd8ab8e3_29684841', 'messages', $this->tplIndex);
?>



<?php
}
}
/* {/block 'content'} */
}
