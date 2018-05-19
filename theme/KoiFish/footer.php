							<?php defined('ROOT') OR exit('No direct script access allowed'); ?>
						<!-- Après ceci ne pas toucher -->
						</div>	
					</div>					
				</div>			
			</div><!-- fermeture du global-->
			</div>	<!-- fermeture du G-top-->		
			
			<footer id="footer">
		<!-- debut : modifier ou supprimer tout -->
			<div id="footer-bis">
				<div id="footer_left">
					<div id="footer_title">
						<h5 class="sub_title">
						<!-- debut : modifier l'image et le titre-->
						<img src="{PATH_TO_ROOT}/templates/{THEME}/images/rss.png" alt="" class="valign_middle" />&nbsp;Les dernières actualités du Blog
						<!-- fin : modifier l'image et le titre -->
						</h5>					
					</div>
					<br /> -....		
					<br /> -....
					<br /> -....
					<br /> -....		
					<br /> -....
					<br /> -....
				</div>
			</div>
		<!-- fin : modifier ou supprimer tout -->	
				<div class="footer-infos">
					<span> &copy2002-2017 <a class="small_link" alt="http://easy-design.net" href="http://easy-design.net"> Easy-design.Net</a> </span>
					<span class="footer-infos-separator">&nbsp;|&nbsp;</span> <span> Thème  <?php show::theme(); ?> par  <a class="small_link" alt="http://easy-design.net" href="http://easy-design.net">Swan | EDN</a> </span>
					<span class="footer-infos-separator">&nbsp;|&nbsp;</span> <span> <a rel="nofollow" href="<?php echo ADMIN_PATH ?>">Administration</a></span>
					<br/><span class="center"><a target="_blank" href="http://99ko.org">Just using 99ko</a></span>
				</div>
			</footer>
			<?php eval($core->callHook('endFrontBody')); ?>
		</div>	<!-- fermeture du SuperGlobal-->		
	</body>
	
</html>
