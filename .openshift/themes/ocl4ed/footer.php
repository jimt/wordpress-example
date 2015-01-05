<?php

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Footer Template
 *
 *
 * @file           footer.php
 * @package        Responsive
 * @author         Emil Uzelac
 * @copyright      2003 - 2014 CyberChimps
 * @license        license.txt
 * @version        Release: 1.2
 * @filesource     wp-content/themes/responsive/footer.php
 * @link           http://codex.wordpress.org/Theme_Development#Footer_.28footer.php.29
 * @since          available since Release 1.0
 */

/*
 * Globalize Theme options
 */
global $responsive_options;
$responsive_options = responsive_get_options();
?>
<?php responsive_wrapper_bottom(); // after wrapper content hook ?>
</div><!-- end of #wrapper -->
<?php responsive_wrapper_end(); // after wrapper hook ?>
</div><!-- end of #container -->
<?php responsive_container_end(); // after container hook ?>

<div id="footer" class="clearfix">
	<?php responsive_footer_top(); ?>

	<div id="footer-wrapper">

		<?php get_sidebar( 'footer' ); ?>

		<div class="grid col-940">

			<div class="grid col-540">
				<?php if ( has_nav_menu( 'footer-menu', 'responsive' ) ) {
					wp_nav_menu( array(
						'container'      => '',
						'fallback_cb'    => false,
						'menu_class'     => 'footer-menu',
						'theme_location' => 'footer-menu'
					) );
				} ?>
			</div><!-- end of col-540 -->

			<div class="grid col-380 fit">
				<?php echo responsive_get_social_icons() ?>
			</div><!-- end of col-380 fit -->

		</div><!-- end of col-940 -->
		<?php get_sidebar( 'colophon' ); ?>

		<div class="grid col-620 copyright">
			<div>Content is available under the
			<a href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution Share-Alike License</a>.
			</div>
			<div>
			<a href="http://wikieducator.org/WikiEducator:Privacy_policy">Privacy Policy</a> | <a id="WEsource" href="http://WikiEducator.org/Practice:OCL4Ed">Source</a> | <a id="WEauthors" href="http://wikieducator.org/Practice:OCL4Ed?action=history">Authors</a> <a href="http://creativecommons.org/licenses/by-sa/3.0/"><img class="cc" src="http://i.creativecommons.org/l/by-sa/3.0/88x31.png" width=88 height=31 alt="Creative Commons Attribution Share-Alike License"></a>
			</div>
		</div><!-- end of .copyright -->

		<div class="grid col-300 fit powered">
				<div class="powerdby">Powered by WikiEducator &amp; WordPress</div>
		</div><!-- end .powered -->

	</div><!-- end #footer-wrapper -->

	<?php responsive_footer_bottom(); ?>
</div><!-- end #footer -->
<?php responsive_footer_after(); ?>

<?php wp_footer(); ?>
</body>
</html>
