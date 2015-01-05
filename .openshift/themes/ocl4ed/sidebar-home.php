<?php

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Home Widgets Template
 *
 *
 * @file           sidebar-home.php
 * @package        Responsive
 * @author         Emil Uzelac
 * @copyright      2003 - 2014 CyberChimps
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive/sidebar-home.php
 * @link           http://codex.wordpress.org/Theme_Development#Widgets_.28sidebar.php.29
 * @since          available since Release 1.0
 */
?>
<?php responsive_widgets_before(); // above widgets container hook ?>
	<div id="widgets" class="home-widgets">
		<div id="home_widget_1" class="grid col-300">
			<?php responsive_widgets(); // above widgets hook ?>

			<?php if ( !dynamic_sidebar( 'home-widget-1' ) ) : ?>
				<div class="widget-wrapper">

					<div class="widget-title-home"><h3>Register</h3></div>
					<div
						class="textwidget"><b>Step 1:</b> Register to receive course announcements via email. We recommend that you register selected social media accounts to interact with fellow learners using your own preferred tools. If you are planning to consider certification for participation, you should register these accounts <b>before</b> you start the course. You can also update your links or unsubscribe from the registration page.<br><br>
<a href="/startup-4/registration/"><div class="button">Register</div></a></div>

				</div><!-- end of .widget-wrapper -->
			<?php endif; //end of home-widget-1 ?>

			<?php responsive_widgets_end(); // responsive after widgets hook ?>
		</div><!-- end of .col-300 -->

		<div id="home_widget_2" class="grid col-300">
			<?php responsive_widgets(); // responsive above widgets hook ?>

			<?php if ( !dynamic_sidebar( 'home-widget-2' ) ) : ?>
				<div class="widget-wrapper">

					<div class="widget-title-home"><h3>Review</h3></div>
					<div
						class="textwidget"><b>Step 2:</b> Explore the course website to find out what is required on this course, where the course materials, assessments and schedule are located. Complete your orientation by establishing your own learning environment and declare yourself to the group.<br><br>
<a href="/startup-4/start-here/"><div class="button">Start Here</div></a><a href="/course-guide-4/learning-environment/"><div class="button">Learning Environment</div></a><a href="/support-3/support/"><div class="warningbutton">Help</div></a></div>

				</div><!-- end of .widget-wrapper -->
			<?php endif; //end of home-widget-2 ?>

			<?php responsive_widgets_end(); // after widgets hook ?>
		</div><!-- end of .col-300 -->

		<div id="home_widget_3" class="grid col-300 fit">
			<?php responsive_widgets(); // above widgets hook ?>

			<?php if ( !dynamic_sidebar( 'home-widget-3' ) ) : ?>
				<div class="widget-wrapper">

					<div class="widget-title-home"><h3>Study</h3></div>
					<div
						class="textwidget"><b>Step 3:</b> Commence your study from the learning console which is the launch pad and hub of activity for your OERu learning journey. Bookmark this page. Here you will find copies of the course announcements, a summary of the schedule and timeline of interactions with fellow students.<br><br>
<a href="/learning-console/learning-console/"><div class="button">Learning console</div></a></div>

				</div><!-- end of .widget-wrapper -->
			<?php endif; //end of home-widget-3 ?>

			<?php responsive_widgets_end(); // after widgets hook ?>
		</div><!-- end of .col-300 fit -->
	</div><!-- end of #widgets -->
<?php responsive_widgets_after(); // after widgets container hook ?>
