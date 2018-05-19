<?php
defined('ROOT') OR exit('No direct script access allowed');
include_once(THEMES.$core->getConfigVal('theme').'/functions.php');
?>

<!DOCTYPE html>
<html lang="fr">

<head>
	<?php eval($core->callHook('frontHead')); ?>
	<meta charset="utf-8" />
	<title><?php show::titleTag(); ?></title>
	<base href="<?php show::siteUrl(); ?>/" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta name="description" content="<?php show::metaDescriptionTag(); ?>" />
	<link rel="icon" href="theme/<?php show::theme("[id]"); ?>/images/favicon.gif" />
	<?php show::linkTags(); ?>
	<?php show::scriptTags(); ?>
	<?php eval($core->callHook('endFrontHead')); ?>
</head>

	<body>
	
		<div class="header-container">
			<header class="wrapper clearfix">
			   <div id="logo"><a href="<?php show::siteUrl(); ?>"><?php show::siteName(); ?></a></div>
				<h2 class="title"><a href="<?php show::siteUrl(); ?>"><?php show::siteName(); ?></a></h2>
				<div id="sidebar">
					<nav id="navigation" class="small-screen">
						<?php eval($core->callHook('sidebar')); ?>
						<ul id="navigation">
							<?php show::mainNavigation(); ?>
						</ul>
						<?php eval($core->callHook('endSidebar')); ?>
					</nav>
				</div>	

			</header>
		</div>	

		<div class="main-container">
			<div class="main wrapper clearfix">
				<article>
					<section>
					<div id="content" class="<?php show::pluginId(); ?>">
						<?php show::mainTitle(); ?>
