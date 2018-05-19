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

	<script>
// On attend que la page soit chargée 
jQuery(document).ready(function()
{
   // On cache la zone de texte
   jQuery('#toggle').hide();
   // toggle() lorsque le lien avec l'ID #toggler est cliqué
   jQuery('a#toggler-left').click(function()
  {
	  jQuery('.toggle-left').toggle(400);
	  return false;
   });
});

// On attend que la page soit chargée 
jQuery(document).ready(function()
{
   // On cache la zone de texte
   jQuery('#toggle').hide();
   // toggle() lorsque le lien avec l'ID #toggler est cliqué
   jQuery('a#toggler-right').click(function()
  {
	  jQuery('.toggle-right').toggle(400);
	  return false;
   });
});
	</script>
<div id="SuperGlobal">	

	<header id="header">
		<div id="header_content">
			<p id="siteName"><a href="<?php show::siteUrl(); ?>"><?php show::siteName(); ?></a></p>
				<img class="entete" src="theme/<?php show::theme("[id]"); ?>/images/header.png" />
				<div id="top-header"></div>
				<div id="sub-header">
					<div id="sub-header-content">
					
						<div id="hide-left">
							<a href="#" id="toggler-left"><i class="fa fa-arrow-left" aria-hidden="true"></a></i>
						</div>
						
						<div id="hide-right">
							<a href="#" id="toggler-right"><i class="fa fa-arrow-right" aria-hidden="true"></a></i>
						</div>	
						
						<div id="sidebar">
							<nav id="navigation" class="small-screen">
								<?php eval($core->callHook('sidebar')); ?>
								<ul id="navigation">
									<?php show::mainNavigation(); ?>
								</ul>
								<?php eval($core->callHook('endSidebar')); ?>
							</nav>
						</div>	
					
					</div>
					<div class="spacer"></div>
				</div>
				<div class="spacer"></div>			
		</div>
		<div id="banner"></div>
	</header>
	
	<div id="body">
	


		<div id="global">		
			<!-- Début de la colonne de menu : Gauche -->
			<aside id="menu-left" class="toggle-left">
				<!-- Avant ceci ne pas toucher -->		
				
				<!-- left-bloc 1 -->
				<div class="module-mini-container">
					<div class="module-mini-top"><h5 class="sub_title">Un peu d'aide ?</h5></div>
						<div class="module-mini-contents">
							<!-- Début de votre contenu -->
							<br /><a title="Forum EDN" href="http://easy-design.net/forum/index.php">- Support/Forum EDN</a>						
							<br /><a title="Notepad++" href="http://notepad-plus-plus.org/download/">- L'éditeur : Notepad++</a>
							<br /><a href="https://filezilla-project.org/" title="filezilla">- Free FTP: Filezilla</a>	
							<br /><a title="Bac à sable :: Page d'informations HTLM | CSS" href="theme/<?php show::theme("[id]"); ?>/sandbox.php">- Bac à sable</a>
							<br /><a title="mon titre" href="page.php">- Un lien</a>
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
			
			<!-- Début de la colonne de menu : Droite -->
			<aside id="menu-right" class="toggle-right">
				<!-- Avant ceci ne pas toucher -->		
				
				<!-- left-bloc 1 -->
				<div class="module-mini-container">
					<div class="module-mini-top"><h5 class="sub_title">Titre de menu</h5></div>
						<div class="module-mini-contents">
							<!-- Début de votre contenu -->
							<br /><a title="mon titre" target="_blank" href="page.php">- J'ai rencontré un Lama!</a>
							<br /><a title="mon titre" target="_blank" href="page.php">- Un lien</a>
							<br /><a title="mon titre" target="_blank" href="page.php">- Un lien</a>
							<br /><a title="mon titre" target="_blank" href="page.php">- Un lien</a>
							<!-- fin de votre contenu -->
						</div>
					<div class="module-mini-bottom"></div>
				</div>	
				
				<!-- left-bloc 2 -->
				<div class="module-mini-container">
					<div class="module-mini-top"><h5 class="sub_title">Titre de menu</h5></div>
						<div class="module-mini-contents">
							<!-- Début de votre contenu -->
							<br /><a title="mon titre" target="_blank" href="page.php">- Un lien</a>
							<br /><a title="mon titre" target="_blank" href="page.php">- Un lien</a>
							<br /><a title="mon titre" target="_blank" href="page.php">- Un lien</a>
							<br /><a title="mon titre" target="_blank" href="page.php">- Un lien</a>
							<!-- fin de votre contenu -->
						</div>
					<div class="module-mini-bottom"></div>
				</div>	
				
					<!-- left-bloc 3 -->
				<div class="module-mini-container">
					<div class="module-mini-top"><h5 class="sub_title">Titre de menu</h5></div>
						<div class="module-mini-contents">
							<!-- début de votre contenu -->
							<br /><a title="mon titre" target="_blank" href="page.php">- Un lien</a>
							<br /><a title="mon titre" target="_blank" href="page.php">- Un lien</a>
							<br /><a title="mon titre" target="_blank" href="page.php">- Un lien</a>
							<br /><a title="mon titre" target="_blank" href="page.php">- Un lien</a>
							<!-- fin de votre contenu -->
						</div>
					<div class="module-mini-bottom"></div>
				</div>	
				
					<!-- left-bloc 4 -->
				<div class="module-mini-container">
					<div class="module-mini-top"><h5 class="sub_title">Titre de menu</h5></div>
						<div class="module-mini-contents">
							<!-- début de votre contenu -->
							<br /><a title="mon titre" target="_blank" href="page.php">- Un lien</a>
							<br /><a title="mon titre" target="_blank" href="page.php">- Un lien</a>
							<br /><a title="mon titre" target="_blank" href="page.php">- Un lien</a>
							<br /><a title="mon titre" target="_blank" href="page.php">- Un lien</a>
							<!-- fin de votre contenu -->
						</div>
					<div class="module-mini-bottom"></div>
				</div>	
				
					<!-- left-bloc 5 -->
				<div class="module-mini-container">
					<div class="module-mini-top"><h5 class="sub_title">Titre de menu</h5></div>
						<div class="module-mini-contents">
							<!-- début de votre contenu -->
							<br /><a title="mon titre" target="_blank" href="page.php">- Un lien</a>
							<br /><a title="mon titre" target="_blank" href="page.php">- Un lien</a>
							<br /><a title="mon titre" target="_blank" href="page.php">- Un lien</a>
							<br /><a title="mon titre" target="_blank" href="page.php">- Un lien</a>
							<!-- fin de votre contenu -->
						</div>
					<div class="module-mini-bottom"></div>
				</div>	
				
					<!-- left-bloc 6 -->
				<div class="module-mini-container">
					<div class="module-mini-top"><h5 class="sub_title">Titre de menu</h5></div>
						<div class="module-mini-contents">
							<!-- début de votre contenu -->
							<br /><a title="mon titre" target="_blank" href="page.php">- Un lien</a>
							<br /><a title="mon titre" target="_blank" href="page.php">- Un lien</a>
							<br /><a title="mon titre" target="_blank" href="page.php">- Un lien</a>
							<br /><a title="mon titre" target="_blank" href="page.php">- Un lien</a>
							<!-- fin de votre contenu -->
						</div>
					<div class="module-mini-bottom"></div>
				</div>	
				
				<!-- Après ceci ne pas toucher -->			
			</aside>

			<!-- Fin de la colonne de menu : Droite -->
			
			<div id="main" class="main-with-left main-with-right" role="main">	
				<div id="main-content" itemprop="mainContentOfPage">
					<!-- Après ceci ne pas toucher -->
					<div id="content" class="<?php show::pluginId(); ?>">
						<?php show::mainTitle(); ?>