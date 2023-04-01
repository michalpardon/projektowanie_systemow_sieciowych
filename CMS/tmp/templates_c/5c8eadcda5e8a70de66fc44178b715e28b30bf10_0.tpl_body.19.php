<?php
/* Smarty version 3.1.31, created on 2023-04-01 12:00:43
  from "tpl_body:19" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_642800cb1c7305_65001833',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c8eadcda5e8a70de66fc44178b715e28b30bf10' => 
    array (
      0 => 'tpl_body:19',
      1 => '1680343238',
      2 => 'tpl_body',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_642800cb1c7305_65001833 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_global_content')) require_once 'C:\\xampp\\htdocs\\CMS\\lib\\plugins\\function.global_content.php';
echo smarty_function_global_content(array('name'=>'a_part_top'),$_smarty_tpl);?>

<section id="main">

<div class="container">

  <!-- Content -->
    <article class="box post">
      <p>
        <?php CMS_Content_Block::smarty_internal_fetch_contentblock(array(),$_smarty_tpl); ?>
      </p>

    </article>

</div>

</section>
<?php echo smarty_function_global_content(array('name'=>'a_part_bottom'),$_smarty_tpl);
}
}
