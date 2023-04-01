<?php
/* Smarty version 3.1.31, created on 2023-04-01 10:20:36
  from "cms_template:a_news_summary" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_6427e9549fa4a8_09678609',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd215feecc76d76024c97e4282dba6312fdea58d5' => 
    array (
      0 => 'cms_template:a_news_summary',
      1 => '1680337227',
      2 => 'cms_template',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6427e9549fa4a8_09678609 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_cms_escape')) require_once 'C:\\xampp\\htdocs\\CMS\\lib\\plugins\\modifier.cms_escape.php';
if (!is_callable('smarty_modifier_cms_date_format')) require_once 'C:\\xampp\\htdocs\\CMS\\lib\\plugins\\modifier.cms_date_format.php';
?>
<div class="container">
<div class="row">
<div class="col-12">
<section>

<div class="row">


<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'entry');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->value) {
?>






  
  
    <div class="col-6 col-12-small">
      <section class="box">
        
        <header>
          <a href="<?php echo $_smarty_tpl->tpl_vars['entry']->value->moreurl;?>
" title="<?php echo smarty_modifier_cms_escape($_smarty_tpl->tpl_vars['entry']->value->title,'htmlall');?>
" style="text-decoration: none"><h3><?php echo smarty_modifier_cms_escape($_smarty_tpl->tpl_vars['entry']->value->title);?>
</h3></a>
          
          <?php if ($_smarty_tpl->tpl_vars['entry']->value->postdate) {?>
            
          <p><?php echo smarty_modifier_cms_date_format($_smarty_tpl->tpl_vars['entry']->value->postdate);?>
</p>
            
          <?php }?>

        </header>
        
        
        <?php if ($_smarty_tpl->tpl_vars['entry']->value->summary) {?>
        
          
            <?php echo $_smarty_tpl->tpl_vars['entry']->value->summary;?>

          


        <?php } elseif ($_smarty_tpl->tpl_vars['entry']->value->content) {?>
                
          
            <?php echo $_smarty_tpl->tpl_vars['entry']->value->content;?>

          
        <?php }?>
        
        
        <?php if ($_smarty_tpl->tpl_vars['entry']->value->summary) {?>
        <footer>
          <ul class="actions">
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['entry']->value->moreurl;?>
" class="button icon solid fa-file-alt">Więcej</a></li>
          </ul>
        </footer>
      </section>
    </div>
    <?php }?>
 
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

<!-- End News Display Template -->


</div>
</div>
</div>




<div class="col-12">
<center>
<?php if ($_smarty_tpl->tpl_vars['pagecount']->value > 1) {?>
</br></br></br>
<header class="major">

<h2>
<?php if ($_smarty_tpl->tpl_vars['pagenumber']->value > 1) {
echo $_smarty_tpl->tpl_vars['firstpage']->value;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['prevpage']->value;?>
&nbsp;
<?php }?>
Strona &nbsp;<?php echo $_smarty_tpl->tpl_vars['pagenumber']->value;?>
&nbsp; z &nbsp;<?php echo $_smarty_tpl->tpl_vars['pagecount']->value;?>

<?php if ($_smarty_tpl->tpl_vars['pagenumber']->value < $_smarty_tpl->tpl_vars['pagecount']->value) {?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['nextpage']->value;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['lastpage']->value;?>

<?php }?>
</header></h2>
</center>
</div>
<?php }
}
}
