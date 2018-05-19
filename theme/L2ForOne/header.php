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
	<!-- Ajout -->
	<link media="screen, handheld" type="text/css" href="theme/<?php show::theme("[id]"); ?>/css/generic.css" rel="stylesheet" />
	<link media="screen, handheld" type="text/css" href="theme/<?php show::theme("[id]"); ?>/css/form.css" rel="stylesheet" />	
	<link  href="theme/<?php show::theme("[id]"); ?>/css/font-awesome/css/font-awesome.css" rel="stylesheet" />	
	
</head>

<body>

	<div id="SuperGlobal">	
			<div id="global">		
				<!-- Début de la colonne de menu : Gauche -->
				<aside id="menu-left" class="toggle-left">
					<!-- Avant ceci ne pas toucher -->	

					<!-- VBloc LOGO -->
					<div class="module-mini-container">
						<div class="module-mini-top">
							<h5 class="sub_title"> Thème L2ForOne </h5>
						</div>
						<div class="module-mini-contents logo">
							<!-- Début de l'image : dans le "styles.css" à la ligne 52" -->
							<div id="logo"></div>
							<!-- fin -->
						</div>
						<div class="module-mini-bottom"></div>
					</div>		
									
					<!-- left-bloc 1 -->
					<div class="module-mini-container">
						<div class="module-mini-top"><h5 class="sub_title">Un peu d'aide ?</h5></div>
							<div class="module-mini-contents">
								<!-- Début de votre contenu -->
								<br /><a title="Forum EDN" href="http://easy-design.net/forum/index.php">- Support/Forum EDN</a>						
								<br /><a title="Notepad++" href="http://notepad-plus-plus.org/download/">- L'éditeur : Notepad++</a>
								<br /><a href="https://filezilla-project.org/" title="filezilla">- Free FTP: Filezilla</a>	
								<br /><a title="Bac à sable :: Page d'informations HTLM | CSS" href="theme/<?php show::theme("[id]"); ?>/sandbox.php">- Bac à sable</a>								
								<br /><a title="Exploiter ce thème :: Utilisation et conseils" href="theme/<?php show::theme("[id]"); ?>/explore.php">- Exploiter ce thème</a>
								<br /><a title="mon titre" href="page.php">- Un lien</a>
								<br /><a title="mon titre" href="page.php">- Un lien</a>
								<br /><a title="mon titre" href="page.php">- Un lien</a>
								<!-- fin de votre contenu -->
							</div>
						<div class="module-mini-bottom"></div>
					</div>		
					
					<!-- left-bloc 2 -->
					<div class="module-mini-container">
						<div class="module-mini-top"><h5 class="sub_title">Titre de menu</h5></div>
							<div class="module-mini-contents">
								<!-- Début de votre contenu -->
								<br /><a title="mon titre" href="page.php">- Un lien</a>
								<br /><a title="mon titre" href="page.php">- Un lien</a>
								<br /><a title="mon titre" href="page.php">- Un lien</a>
								<br /><a title="mon titre" href="page.php">- Un lien</a>

								<!-- fin de votre contenu -->
							</div>
						<div class="module-mini-bottom"></div>
					</div>	
					
						<!-- left-bloc 3 -->
					<div class="module-mini-container">
						<div class="module-mini-top"><h5 class="sub_title">Titre de menu</h5></div>
							<div class="module-mini-contents">
								<!-- Début de votre contenu -->
								<br /><a title="mon titre" href="page.php">- Un lien</a>
								<br /><a title="mon titre" href="page.php">- Un lien</a>
								<br /><a title="mon titre" href="page.php">- Un lien</a>
								<br /><a title="mon titre" href="page.php">- Un lien</a>
								<!-- fin de votre contenu -->
							</div>
						<div class="module-mini-bottom"></div>
					</div>	
					
						<!-- left-bloc 4 -->
					<div class="module-mini-container">
						<div class="module-mini-top"><h5 class="sub_title">Titre de menu</h5></div>
							<div class="module-mini-contents">
								<!-- Début de votre contenu -->
								<br /><a title="mon titre" href="page.php">- Un lien</a>
								<br /><a title="mon titre" href="page.php">- Un lien</a>
								<br /><a title="mon titre" href="page.php">- Un lien</a>
								<br /><a title="mon titre" href="page.php">- Un lien</a>
								<!-- fin de votre contenu -->
							</div>
						<div class="module-mini-bottom"></div>
					</div>	
					
						<!-- left-bloc 5 -->
					<div class="module-mini-container">
						<div class="module-mini-top"><h5 class="sub_title">Titre de menu</h5></div>
							<div class="module-mini-contents">
								<!-- Début de votre contenu -->
								<br /><a title="mon titre" href="page.php">- Un lien</a>
								<br /><a title="mon titre" href="page.php">- Un lien</a>
								<br /><a title="mon titre" href="page.php">- Un lien</a>
								<br /><a title="mon titre" href="page.php">- Un lien</a>
								<!-- fin de votre contenu -->
							</div>
						<div class="module-mini-bottom"></div>
					</div>	
					
						<!-- left-bloc 6 -->
					<div class="module-mini-container">
						<div class="module-mini-top"><h5 class="sub_title">Titre de menu</h5></div>
							<div class="module-mini-contents">
								<!-- Début de votre contenu -->
								<br /><a title="mon titre" href="page.php">- Un lien</a>
								<br /><a title="mon titre" href="page.php">- Un lien</a>
								<br /><a title="mon titre" href="page.php">- Un lien</a>
								<br /><a title="mon titre" href="page.php">- Un lien</a>
								<!-- fin de votre contenu -->
							</div>
						<div class="module-mini-bottom"></div>
					</div>	
					
					<!-- Après ceci ne pas toucher -->			
				</aside>
				<!-- Fin de la colonne de menu : Gauche -->
		
				
				<div id="main" class="main-with-left main-with-right" role="main">	
					<!-- Menu de navigation du cms 99ko -->
					<div id="sidebar">
						<nav id="navigation" class="small-screen">
							<?php eval($core->callHook('sidebar')); ?>
							<ul id="navigation">
								<?php show::mainNavigation(); ?>
							</ul>
							<?php eval($core->callHook('endSidebar')); ?>

						</nav>
					</div>	
					
					<div id="main-content" itemprop="mainContentOfPage">
						<!-- Après ceci ne pas toucher -->

						<div id="content" class="<?php show::pluginId(); ?>">
							<?php show::mainTitle(); ?>