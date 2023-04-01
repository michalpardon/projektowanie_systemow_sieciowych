<?php
/* Smarty version 3.1.31, created on 2023-04-01 00:14:08
  from "cms_template:a_part_top" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_64275b30c01695_27658746',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e52a7ff02015b3437281cd41feed83ce74fdc3f' => 
    array (
      0 => 'cms_template:a_part_top',
      1 => '1680300827',
      2 => 'cms_template',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64275b30c01695_27658746 (Smarty_Internal_Template $_smarty_tpl) {
echo CMS_Content_Block::smarty_fetch_pagedata(array(),$_smarty_tpl);?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Naczynia żeliwne</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="temp/assets/css/main.css" />
	</head>
	<body class="homepage is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<section id="header">

					<!-- Logo -->
						<h1><a href="index.html"><sub><img src="temp/logbot.png"></sub> Patelka</a></h1>

					<!-- Nav -->
                                                <nav id="nav">
						<?php echo Navigator::function_plugin(array('template'=>"a_menu_main"),$_smarty_tpl);?>

						</nav>

<section id="banner">
	<header>
		<h2>Patelnie i naczynia żeliwne.</h2>
		<p>Uniwersalny sprzęt na lata</p>
	</header>
</section>
</section><?php }
}
