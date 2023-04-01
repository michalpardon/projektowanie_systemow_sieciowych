<?php
/* Smarty version 3.1.31, created on 2023-04-01 13:10:22
  from "module_db_tpl:Gallery;Lightbox" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_6428111e574567_59145299',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f4b43aaf42daec8e4579a702a5cf898749d5110' => 
    array (
      0 => 'module_db_tpl:Gallery;Lightbox',
      1 => 1680347412,
      2 => 'module_db_tpl',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6428111e574567_59145299 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
<div class="col-12">
<header class="major">
											<h2 style="background-color: white;" >Galeria</h2>
										</header>
<div class="row">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['images']->value, 'image');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
?>
              
              <div class="col-4 col-6-medium col-12-small">
                
                  <a class="group" href="<?php echo $_smarty_tpl->tpl_vars['image']->value->file;?>
" data-title="<?php echo $_smarty_tpl->tpl_vars['image']->value->titlename;
if (!empty($_smarty_tpl->tpl_vars['image']->value->comment)) {?> &bull; &lt;em&gt;<?php echo htmlspecialchars(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['image']->value->comment), ENT_QUOTES, 'UTF-8', true);?>
&lt;em&gt;<?php }?>" data-lightbox="cmsmsgallery<?php echo $_smarty_tpl->tpl_vars['galleryid']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['image']->value->thumb;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['image']->value->titlename;?>
" /></a><br />

               
              </div>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</div> </div> </div><?php }
}
