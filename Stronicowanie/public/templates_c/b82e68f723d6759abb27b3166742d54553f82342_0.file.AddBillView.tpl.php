<?php
/* Smarty version 4.2.1, created on 2023-03-11 22:23:29
  from 'C:\xampp\htdocs\amelia\app\views\AddBillView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_640cf151c2ec32_02699875',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b82e68f723d6759abb27b3166742d54553f82342' => 
    array (
      0 => 'C:\\xampp\\htdocs\\amelia\\app\\views\\AddBillView.tpl',
      1 => 1670367428,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:menu.tpl' => 1,
  ),
),false)) {
function content_640cf151c2ec32_02699875 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1366232801640cf1516e5c94_24241032', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1932039584640cf15171e6c1_24066104', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'footer'} */
class Block_1366232801640cf1516e5c94_24241032 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1366232801640cf1516e5c94_24241032',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Michał Pardon<?php
}
}
/* {/block 'footer'} */
/* {block 'messages'} */
class Block_1799541195640cf151892309_14045929 extends Smarty_Internal_Block
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
class Block_1932039584640cf15171e6c1_24066104 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1932039584640cf15171e6c1_24066104',
  ),
  'messages' => 
  array (
    0 => 'Block_1799541195640cf151892309_14045929',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\amelia\\lib\\smarty\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>


<?php $_smarty_tpl->_subTemplateRender('file:menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    
<header class="major">
    <section id="addBill">
        <h2>Dodaj nowy rachunek</h2>
            <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
addBill">
                    <div class="row gtr-uniform gtr-50">
                            <div class="col-6 col-12-xsmall">
                                    <select name="bill_name_idName" id="bill_name_idName">
                                            <option value="">- Nazwa rachunku -</option>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['billNames']->value, 'name');
$_smarty_tpl->tpl_vars['name']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->do_else = false;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['name']->value["idName"];?>
"><?php echo $_smarty_tpl->tpl_vars['name']->value["name"];?>
</option>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </select>
                            </div>
                            <div class="col-6 col-12-xsmall">
                                    <input type="text" name="amount" id="amount" value="" placeholder="Kwota" />
                            </div>
                            <div class="col-6 col-12-xsmall">
                                    <input type="text" name="month" id="month" value="<?php echo smarty_modifier_date_format(time(),"%Y-%m-%d");?>
" placeholder="" />
                            </div>
                            <div class="col-12">
                                    <ul class="actions">
                                            <li><input type="submit" value="Dodaj rachunek" class="primary" /></li>
                                            <li><input type="reset" value="Wyczyść" /></li>
                                    </ul>
                            </div>
                    </div>
                    <input type="hidden" name="login" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->login;?>
">
            </form>
    </section>
</header>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1799541195640cf151892309_14045929', 'messages', $this->tplIndex);
?>

            
<header class="major">
    <h2>Lista dodanych rachunków</h2>

    
<div class="table-wrapper" id="bill">
    <table class="alt">
            <thead>
                    <tr>
                            <th>Rachunek</th>
                            <th>Data wpłynięcia</th>
                            <th>Kwota</th>
                            <th>Typ</th>
                            <th>Status</th>
                            <th>Dodał</th>
                    </tr>
            </thead>
            <tbody> 
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['billsList']->value, 'bill');
$_smarty_tpl->tpl_vars['bill']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['bill']->value) {
$_smarty_tpl->tpl_vars['bill']->do_else = false;
?>
                    <tr><td><?php echo $_smarty_tpl->tpl_vars['bill']->value["name"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['bill']->value["month"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['bill']->value["amount"];?>
 zł</td><td><?php echo $_smarty_tpl->tpl_vars['bill']->value["type"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['bill']->value["state"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['bill']->value["who"];?>
</td></tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
    </table>
</div>
</header>                    

<?php
}
}
/* {/block 'content'} */
}
