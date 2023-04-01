<?php
/* Smarty version 3.1.31, created on 2023-04-01 11:16:42
  from "cms_template:News Detail Sample" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_6427f67a71e1b6_54263379',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '140c76613eafe22e17be9b0d49c8a85a0deb339d' => 
    array (
      0 => 'cms_template:News Detail Sample',
      1 => '1680340597',
      2 => 'cms_template',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6427f67a71e1b6_54263379 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_cms_escape')) require_once 'C:\\xampp\\htdocs\\CMS\\lib\\plugins\\modifier.cms_escape.php';
if (!is_callable('smarty_modifier_cms_date_format')) require_once 'C:\\xampp\\htdocs\\CMS\\lib\\plugins\\modifier.cms_date_format.php';
if (!is_callable('smarty_function_file_url')) require_once 'C:\\xampp\\htdocs\\CMS\\lib\\plugins\\function.file_url.php';
?>
<div class="container">

  <!-- Content -->
    <article class="box post">
      <header>
        <h2><?php echo smarty_modifier_cms_escape($_smarty_tpl->tpl_vars['entry']->value->title,'htmlall');?>
</h2>
        <?php if ($_smarty_tpl->tpl_vars['entry']->value->postdate) {?>
          <p>
              <?php echo smarty_modifier_cms_date_format($_smarty_tpl->tpl_vars['entry']->value->postdate);?>

          </p>
        <?php }?>
      </header>
      <p>
        <?php if ($_smarty_tpl->tpl_vars['entry']->value->summary) {?>
        
          <strong>
            <?php echo $_smarty_tpl->tpl_vars['entry']->value->summary;?>

          </strong>
        
      <?php }?>
      </p>
      <p>
        <?php echo $_smarty_tpl->tpl_vars['entry']->value->content;?>

      </p>
<p><a href="javascript: history.go(-1)" class="button alt">Wróc</a></p>
    </article>
</div>





<?php if (isset($_smarty_tpl->tpl_vars['entry']->value->canonical)) {?>
  
  <?php $_smarty_tpl->_assignInScope('canonical', $_smarty_tpl->tpl_vars['entry']->value->canonical ,false ,32);
}?>





<?php if (isset($_smarty_tpl->tpl_vars['entry']->value->fields)) {?>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['entry']->value->fields, 'field', false, 'fieldname');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['fieldname']->value => $_smarty_tpl->tpl_vars['field']->value) {
?>
     <div class="NewsDetailField">
        <?php if ($_smarty_tpl->tpl_vars['field']->value->type == 'file') {?>
	  
          <?php if (isset($_smarty_tpl->tpl_vars['field']->value->value) && $_smarty_tpl->tpl_vars['field']->value->value) {?>
            <img src="<?php echo $_smarty_tpl->tpl_vars['entry']->value->file_location;?>
/<?php echo $_smarty_tpl->tpl_vars['field']->value->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['field']->value->value;?>
"/>
          <?php }?>
        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value->type == 'linkedfile') {?>
          
          <?php if (!empty($_smarty_tpl->tpl_vars['field']->value->value)) {?>
            <img src="<?php echo smarty_function_file_url(array('file'=>$_smarty_tpl->tpl_vars['field']->value->value),$_smarty_tpl);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['field']->value->value;?>
"/>
          <?php }?>
        <?php } else { ?>
          <?php echo $_smarty_tpl->tpl_vars['field']->value->name;?>
:&nbsp;<?php echo $_smarty_tpl->tpl_vars['field']->value->value;?>

        <?php }?>
     </div>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

<?php }
}
}
