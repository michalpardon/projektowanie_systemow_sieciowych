<?php
/* Smarty version 4.2.1, created on 2023-03-13 11:27:49
  from 'C:\xampp\htdocs\amelia\app\views\ListView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_640efaa5780b46_80634352',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd26bbdaa4de03c81fe429baf79366c6c6be84fca' => 
    array (
      0 => 'C:\\xampp\\htdocs\\amelia\\app\\views\\ListView.tpl',
      1 => 1678703266,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:menu.tpl' => 1,
  ),
),false)) {
function content_640efaa5780b46_80634352 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1744723199640efaa4db1897_26434046', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1693207856640efaa4ded211_68834555', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'footer'} */
class Block_1744723199640efaa4db1897_26434046 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1744723199640efaa4db1897_26434046',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Michał Pardon<?php
}
}
/* {/block 'footer'} */
/* {block 'messages'} */
class Block_595486124640efaa5503766_34115566 extends Smarty_Internal_Block
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
class Block_1693207856640efaa4ded211_68834555 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1693207856640efaa4ded211_68834555',
  ),
  'messages' => 
  array (
    0 => 'Block_595486124640efaa5503766_34115566',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php $_smarty_tpl->_subTemplateRender('file:menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
showAll" method="post" class="">  
    <ul class="actions">
        <li><input type="text" name="login" id="login" value="<?php if ($_smarty_tpl->tpl_vars['filtr']->value->login != '') {
echo $_smarty_tpl->tpl_vars['filtr']->value->login;
}?>" <?php if ($_smarty_tpl->tpl_vars['filtr']->value->login == '') {?>placeholder="Login"<?php }?> /></li>
        <li><input type="submit" value="Wyszukaj" class="primary" /></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
showAll" class="button"><i class="fa-solid fa-reply-all"></i> Reset</a></li>
    </ul>
</form>    
    
<div class="table-wrapper">
    <table class="alt">
            <thead>
                    <tr>
                            <th>Login</th>
                            <th>Data utworzenia</th>
                            <th>Rola</th>
                            <th>Aktywność</th>
                            <th>Data deaktywowania</th>
                            <th></th>
                    </tr>
            </thead>
            <tbody> 
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['view']->value, 'user');
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
?>
                    <tr><td><?php echo $_smarty_tpl->tpl_vars['user']->value["login"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['user']->value["creatAt"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['user']->value["roleName"];?>
</td><td><?php if ($_smarty_tpl->tpl_vars['user']->value["isActive"] == 1) {?> Aktywne <?php }
if ($_smarty_tpl->tpl_vars['user']->value["isActive"] == 0) {?> Nieaktywne <?php }?></td><td><?php echo $_smarty_tpl->tpl_vars['user']->value["deleteAt"];?>
</td><td><?php if ($_smarty_tpl->tpl_vars['user']->value["idRoles"] == 2) {?><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
addAdmin/<?php echo $_smarty_tpl->tpl_vars['user']->value["idUser"];?>
" class="button small">Nadaj admina</a><?php }
if ($_smarty_tpl->tpl_vars['user']->value["isActive"] == 1) {?>&nbsp<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
roleInactive/<?php echo $_smarty_tpl->tpl_vars['user']->value["idUser_has_role"];?>
" class="button small">Deaktywuj rolę</a><?php }?>&nbsp<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
userDelete/<?php echo $_smarty_tpl->tpl_vars['user']->value["idUser"];?>
" class="button primary small">Usuń użytkownika</a></td></tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
    </table>
    <center> 
    <?php if ($_smarty_tpl->tpl_vars['pagination']->value->page > 1) {?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
showAll/<?php echo $_smarty_tpl->tpl_vars['pagination']->value->page-1;
if ($_smarty_tpl->tpl_vars['filtr']->value->login != '') {?>/<?php echo $_smarty_tpl->tpl_vars['filtr']->value->login;
}?>" class="button small"><<</a>
    <?php }?>
        <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? ($_smarty_tpl->tpl_vars['pagination']->value->max-1)+1 - (0) : 0-(($_smarty_tpl->tpl_vars['pagination']->value->max-1))+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
showAll/<?php echo $_smarty_tpl->tpl_vars['i']->value+1;
if ($_smarty_tpl->tpl_vars['filtr']->value->login != '') {?>/<?php echo $_smarty_tpl->tpl_vars['filtr']->value->login;
}?>" class="button small"><?php echo $_smarty_tpl->tpl_vars['i']->value+1;?>
</a>        
        <?php }
}
?>
    <?php if ($_smarty_tpl->tpl_vars['pagination']->value->page < $_smarty_tpl->tpl_vars['pagination']->value->max) {?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
showAll/<?php echo $_smarty_tpl->tpl_vars['pagination']->value->page+1;
if ($_smarty_tpl->tpl_vars['filtr']->value->login != '') {?>/<?php echo $_smarty_tpl->tpl_vars['filtr']->value->login;
}?>" class="button small">>></a>
    <?php }?>
    </center>  
</div>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_595486124640efaa5503766_34115566', 'messages', $this->tplIndex);
?>



<?php
}
}
/* {/block 'content'} */
}
