<?php
/* Smarty version 4.2.1, created on 2023-03-13 20:19:47
  from 'C:\xampp\htdocs\amelia\app\views\ListTableView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_640f77534f7548_41504436',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1e528fae677fa9d8d1ed72b6dfc2fba9e215a266' => 
    array (
      0 => 'C:\\xampp\\htdocs\\amelia\\app\\views\\ListTableView.tpl',
      1 => 1678735182,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_640f77534f7548_41504436 (Smarty_Internal_Template $_smarty_tpl) {
?>   <div class="table-wrapper">
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
if ($_smarty_tpl->tpl_vars['user']->value["isActive"] == 1) {?>&nbsp<a onclick="confirmLink('<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
roleInactive/<?php echo $_smarty_tpl->tpl_vars['user']->value["idUser_has_role"];?>
','Czy na pewno deaktywować rolę?')" class="button small">Deaktywuj rolę</a><?php }?>&nbsp<a onclick="confirmLink('<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
userDelete/<?php echo $_smarty_tpl->tpl_vars['user']->value["idUser"];?>
','Czy na pewno usunąć użytkownika?')" class="button primary small">Usuń użytkownika</a></td></tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
    </table>
    <center> 
    <?php if ($_smarty_tpl->tpl_vars['pagination']->value->page > 1) {?>
        <button onclick="ajaxPostForm('search-form','<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
showAllTable/<?php echo $_smarty_tpl->tpl_vars['pagination']->value->page-1;
if ($_smarty_tpl->tpl_vars['filtr']->value->login != '') {?>/<?php echo $_smarty_tpl->tpl_vars['filtr']->value->login;
}?>','table'); " class="button small"><<</button>
    <?php }?>
        <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? ($_smarty_tpl->tpl_vars['pagination']->value->max-1)+1 - (0) : 0-(($_smarty_tpl->tpl_vars['pagination']->value->max-1))+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
            <?php if ($_smarty_tpl->tpl_vars['pagination']->value->page-1 == $_smarty_tpl->tpl_vars['i']->value) {?>
                <button onclick="ajaxPostForm('search-form','<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
showAllTable/<?php echo $_smarty_tpl->tpl_vars['i']->value+1;
if ($_smarty_tpl->tpl_vars['filtr']->value->login != '') {?>/<?php echo $_smarty_tpl->tpl_vars['filtr']->value->login;
}?>','table'); "  class="button primary small"><?php echo $_smarty_tpl->tpl_vars['i']->value+1;?>
</button>
            <?php } else { ?>
                <button onclick="ajaxPostForm('search-form','<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
showAllTable/<?php echo $_smarty_tpl->tpl_vars['i']->value+1;
if ($_smarty_tpl->tpl_vars['filtr']->value->login != '') {?>/<?php echo $_smarty_tpl->tpl_vars['filtr']->value->login;
}?>','table'); "  class="button small"><?php echo $_smarty_tpl->tpl_vars['i']->value+1;?>
</button> 
            <?php }?>
        <?php }
}
?>
    <?php if ($_smarty_tpl->tpl_vars['pagination']->value->page < $_smarty_tpl->tpl_vars['pagination']->value->max) {?>
        <button onclick="ajaxPostForm('search-form','<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
showAllTable/<?php echo $_smarty_tpl->tpl_vars['pagination']->value->page+1;
if ($_smarty_tpl->tpl_vars['filtr']->value->login != '') {?>/<?php echo $_smarty_tpl->tpl_vars['filtr']->value->login;
}?>','table');" class="button small">>></a>
    <?php }?>
    </center>  
</div>
<?php }
}
