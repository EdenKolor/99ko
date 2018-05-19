<?php
defined('ROOT') OR exit('No direct script access allowed');
include_once(THEMES.$core->getConfigVal('theme').'/functions.php');
?>

<!DOCTYPE html>
<html lang="fr">

<head>
	<?php eval($core->callHook('frontHead')); ?>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title><?php show::titleTag(); ?></title>
	<base href="<?php show::siteUrl(); ?>/" />
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1" />
	<meta name="description" content="<?php show::metaDescriptionTag(); ?>" />
	<link rel="icon" href="theme/<?php show::theme("[id]"); ?>/favicon.gif" />
	<?php show::linkTags(); ?>
	<?php show::scriptTags(); ?>
	<?php eval($core->callHook('endFrontHead')); ?>
</head>
<body>
<div id="global">
		<aside id="menu-left" class="toggle-left">
			<!-- Avant ceci ne pas toucher -->
			<div id="sidebar">
				<p id="siteName"><a href="<?php show::siteUrl(); ?>"><?php show::siteName(); ?></a></p>
				<?php eval($core->callHook('sidebar')); ?>
				<ul id="navigation">
					<?php show::mainNavigation(); ?>
				</ul>
				<?php eval($core->callHook('endSidebar')); ?>
			</div>
			</aside>
			
			<div id="main-content" itemprop="mainContentOfPage">
				<!-- Après ceci ne pas toucher -->

				<div id="content" class="<?php show::pluginId(); ?>">
					<?php show::mainTitle(); ?>