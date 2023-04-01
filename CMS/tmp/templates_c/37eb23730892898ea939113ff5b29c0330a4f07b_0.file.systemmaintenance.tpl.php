<?php
/* Smarty version 3.1.31, created on 2023-04-01 00:24:29
  from "C:\xampp\htdocs\CMS\admin\templates\systemmaintenance.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_64275d9d9a9511_99629788',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '37eb23730892898ea939113ff5b29c0330a4f07b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\CMS\\admin\\templates\\systemmaintenance.tpl',
      1 => 1679647567,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64275d9d9a9511_99629788 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="pagecontainer">

<?php echo $_smarty_tpl->tpl_vars['theme']->value->StartTabHeaders();?>

	<?php echo $_smarty_tpl->tpl_vars['theme']->value->SetTabHeader('content',lang('sysmaintab_content'),isset($_smarty_tpl->tpl_vars['active_content']->value));?>

	<?php echo $_smarty_tpl->tpl_vars['theme']->value->SetTabHeader('database',lang('sysmaintab_database'),isset($_smarty_tpl->tpl_vars['active_database']->value));?>

	<?php if (isset($_smarty_tpl->tpl_vars['changelog']->value)) {?>
		<?php echo $_smarty_tpl->tpl_vars['theme']->value->SetTabHeader('changelog',lang('sysmaintab_changelog'),isset($_smarty_tpl->tpl_vars['active_changelog']->value));?>

	<?php }
echo $_smarty_tpl->tpl_vars['theme']->value->EndTabHeaders();?>


<?php echo $_smarty_tpl->tpl_vars['theme']->value->StartTabContent();?>


	<?php echo $_smarty_tpl->tpl_vars['theme']->value->StartTab('content');?>

		<form action="<?php echo $_smarty_tpl->tpl_vars['formurl']->value;?>
" method="post">
			<fieldset>
				<legend><?php echo lang('sysmain_cache_status');?>
&nbsp;</legend>
				<div class="pageoverflow">
					<p class="pagetext"><?php echo lang('clearcache');?>
:</p>
					<p class="pageinput">
						<input class="pagebutton" type="submit" name="clearcache" value="<?php echo lang('clear');?>
"/>
					</p>
				</div>
			</fieldset>
		</form>

		<fieldset>
			<legend><?php echo lang('sysmain_content_status');?>
&nbsp;</legend>
			<form action="<?php echo $_smarty_tpl->tpl_vars['formurl']->value;?>
" method="post">
				<?php echo $_smarty_tpl->tpl_vars['pagecount']->value;?>
 <?php echo lang('sysmain_pagesfound');?>


				<div class="pageoverflow">
					<p class="pagetext"><?php echo lang('sysmain_updatehierarchy');?>
:</p>
					<p class="pageinput">
						<input class="pagebutton" type="submit" name="updatehierarchy" value="<?php echo lang('sysmain_update');?>
"/>
					</p>
				</div>
			</form>

			<form action="<?php echo $_smarty_tpl->tpl_vars['formurl']->value;?>
" method="post">
				<div class="pageoverflow">
					<p class="pagetext"><?php echo lang('sysmain_updateurls');?>
:</p>
					<p class="pageinput">
						<input class="pagebutton" type="submit" name="updateurls" value="<?php echo lang('sysmain_update');?>
"/>
					</p>
				</div>
			</form>

			<?php if ($_smarty_tpl->tpl_vars['withoutaliascount']->value != "0") {?>
				<form action="<?php echo $_smarty_tpl->tpl_vars['formurl']->value;?>
" method="post" onsubmit="return confirm('<?php echo strtr(lang('sysmain_confirmfixaliases'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
')" >
					<div class="pageoverflow">
						<p class="pagetext"><?php echo $_smarty_tpl->tpl_vars['withoutaliascount']->value;?>
 <?php echo lang('sysmain_pagesmissinalias');?>
:</p>
						<p class="pageinput">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pagesmissingalias']->value, 'page');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['page']->value) {
?>
								 <?php echo $_smarty_tpl->tpl_vars['page']->value['content_name'];?>
<br/>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

							<br />
							<input class="pagebutton" type="submit" name="addaliases" value="<?php echo lang('sysmain_fixaliases');?>
"/>
						</p>
					</div>
				</form>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['invalidtypescount']->value != "0") {?>
				<form action="<?php echo $_smarty_tpl->tpl_vars['formurl']->value;?>
" method="post" onsubmit="return confirm('<?php echo strtr(lang('sysmain_confirmfixtypes'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
')" >
					<div class="pageoverflow">
						<p class="pagetext"><?php echo $_smarty_tpl->tpl_vars['invalidtypescount']->value;?>
 <?php echo lang('sysmain_pagesinvalidtypes');?>
:</p>
						<p class="pageinput">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pageswithinvalidtype']->value, 'page');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['page']->value) {
?>
								<?php echo $_smarty_tpl->tpl_vars['page']->value['content_name'];?>
 <em>(<?php echo $_smarty_tpl->tpl_vars['page']->value['content_alias'];?>
) - <?php echo $_smarty_tpl->tpl_vars['page']->value['type'];?>
</em><br/>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

							<br />
							<input class="pagebutton" type="submit" name="fixtypes" value="<?php echo strtr(lang('sysmain_fixtypes'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
"/>
						</p>
					</div>
				</form>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['invalidtypescount']->value == "0" && $_smarty_tpl->tpl_vars['withoutaliascount']->value == '') {?>
				<p class='green'><strong><?php echo lang('sysmain_nocontenterrors');?>
</strong></p>
			<?php }?>

		</fieldset>
	<?php echo $_smarty_tpl->tpl_vars['theme']->value->EndTab();?>


	<?php echo $_smarty_tpl->tpl_vars['theme']->value->StartTab('database');?>

		<form action="<?php echo $_smarty_tpl->tpl_vars['formurl']->value;?>
" method="post">
			<fieldset>
				<legend><?php echo lang('sysmain_database_status');?>
:&nbsp;</legend>
				<p><?php echo $_smarty_tpl->tpl_vars['tablecount']->value;?>
 <?php echo lang('sysmain_tablesfound',$_smarty_tpl->tpl_vars['nonseqcount']->value);?>
</p>

				<?php if ($_smarty_tpl->tpl_vars['errorcount']->value == 0) {?>
					<p class='green'><strong><?php echo lang('sysmain_nostr_errors');?>
</strong></p>
				<?php } else { ?>
					<p class='red'><strong><?php echo $_smarty_tpl->tpl_vars['errorcount']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['errorcount']->value > 1) {
echo lang('sysmain_str_errors');
} else {
echo lang('sysmain_str_error');
}?>:  <?php echo $_smarty_tpl->tpl_vars['errortables']->value;?>
</strong></p>
				<?php }?>

				<div class="pageoverflow">
					<p class="pagetext"><?php echo lang('sysmain_optimizetables');?>
:</p>
					<p class="pageinput">
						<input class="pagebutton" type="submit" name="optimizeall" value="<?php echo lang('sysmain_optimize');?>
"/>
					</p>
				</div>
				<div class="pageoverflow">
					<p class="pagetext"><?php echo lang('sysmain_repairtables');?>
:</p>
					<p class="pageinput">
						<input class="pagebutton" type="submit" name="repairall" value="<?php echo lang('sysmain_repair');?>
"/>
					</p>
				</div>
			</fieldset>
		</form>
	<?php echo $_smarty_tpl->tpl_vars['theme']->value->EndTab();?>


	<?php if (isset($_smarty_tpl->tpl_vars['changelog']->value)) {?>
		<?php echo $_smarty_tpl->tpl_vars['theme']->value->StartTab('changelog');?>

			<p class='file'><?php echo $_smarty_tpl->tpl_vars['changelogfilename']->value;?>
</p>
			<div class="changelog"><?php echo $_smarty_tpl->tpl_vars['changelog']->value;?>
</div>
		<?php echo $_smarty_tpl->tpl_vars['theme']->value->EndTab();?>

	<?php }?>

<?php echo $_smarty_tpl->tpl_vars['theme']->value->EndTabContent();?>


</div><?php }
}
