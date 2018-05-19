									<?php defined('ROOT') OR exit('No direct script access allowed'); ?>
								<!-- Après ceci ne pas toucher -->
								</div>	
							</div>					
						</div>
					</div><!-- fermeture du sous-main-->		
				</div><!-- fermeture du global-->
			</div>	<!-- fermeture du SuperGlobal-->
			
			<footer id="footer">
				<div class="footer-infos">
					<div id="social">
						<ul>   
							<li><a href="#" target="_blank"><span><div id="fb" class="fade"><i class="fa fa-facebook"></i></div></span></a></li>
							<li><a href="#" target="_blank"><span><div id="twt" class="fade"><i class="fa fa-twitter"></i></div></span></a></li>
							<li><a href="#" target="_blank"><span><div id="yt" class="fade"><i class="fa fa-youtube"></i></div></span></a></li>
						</ul>
					</div>
					
					<span> &copy2002-2017 <a class="small_link" alt="http://easy-design.net" href="http://easy-design.net"> Easy-design.Net</a> </span>
					<span class="footer-infos-separator">&nbsp;|&nbsp;</span> <span> Thème  <?php show::theme(); ?> par  <a class="small_link" alt="http://easy-design.net" href="http://easy-design.net">Swan | EDN</a> </span>
					<span class="footer-infos-separator">&nbsp;|&nbsp;</span> <span> <a rel="nofollow" href="<?php echo ADMIN_PATH ?>">Administration</a></span>
					<br/><span class="center"><a target="_blank" href="http://99ko.org">Just using 99ko</a></span>
				</div>
			</footer>
			<?php eval($core->callHook('endFrontBody')); ?>
		
	</body>
	
</html>
