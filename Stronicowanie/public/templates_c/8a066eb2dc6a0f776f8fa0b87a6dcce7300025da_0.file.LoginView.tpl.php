<?php
/* Smarty version 4.2.1, created on 2023-03-11 21:04:00
  from 'C:\xampp\htdocs\amelia\app\views\LoginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_640cdeb07c1fb6_08791623',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a066eb2dc6a0f776f8fa0b87a6dcce7300025da' => 
    array (
      0 => 'C:\\xampp\\htdocs\\amelia\\app\\views\\LoginView.tpl',
      1 => 1670398572,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_640cdeb07c1fb6_08791623 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1033455419640cdeb06e9247_23917993', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2039004597640cdeb06ea561_12774337', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'footer'} */
class Block_1033455419640cdeb06e9247_23917993 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1033455419640cdeb06e9247_23917993',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Michał Pardon<?php
}
}
/* {/block 'footer'} */
/* {block 'messages'} */
class Block_1719501547640cdeb071be38_26655049 extends Smarty_Internal_Block
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
class Block_2039004597640cdeb06ea561_12774337 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2039004597640cdeb06ea561_12774337',
  ),
  'messages' => 
  array (
    0 => 'Block_1719501547640cdeb071be38_26655049',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div style="width:90%; margin: 2em auto;">

<section>
        <h3>Podaj dane do logowania</h3>
        <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login">
                <div class="row gtr-uniform gtr-50">
                        <div class="col-6 col-12-xsmall">
                            <input id="id_login" type="text" name="login" placeholder="Login" />
                        </div>
                        <div class="col-6 col-12-xsmall">
                               <input id="id_pass" type="password" name="pass" placeholder="Hasło" />
                        </div>
                        <div class="col-12">
                                <ul class="actions">
                                    <li><input type="submit" value="Zaloguj" class="primary" /></li></form>
                                    <li><form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
register" method="post"><input type="submit" value="Załóż konto" class="button" /></form></li>      
                                </ul>
                        </div>
                </div>
        </form>

</section>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1719501547640cdeb071be38_26655049', 'messages', $this->tplIndex);
?>


</div>
<?php
}
}
/* {/block 'content'} */
}
