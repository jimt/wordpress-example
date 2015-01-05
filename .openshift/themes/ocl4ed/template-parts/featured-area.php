<?php

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
	exit;
}

$responsive_options = responsive_get_options();
//test for first install no database
$db = get_option( 'responsive_theme_options' );
//test if all options are empty so we can display default text if they are
$empty     = ( empty( $responsive_options['home_headline'] ) && empty( $responsive_options['home_subheadline'] ) && empty( $responsive_options['home_content_area'] ) ) ? false : true;
$emtpy_cta = ( empty( $responsive_options['cta_text'] ) ) ? false : true;

?>

<div id="featured" class="grid col-940">

	<div id="featured-content" class="grid col-620">
	<h1 class="featured-title">Open content licensing for educators</h1>
	<p>Learn about the concepts of open educational resources, copyright and Creative Commons open licenses to achieve a more sustainable education for all.</p>
	</div><!-- end of .col-460 -->

	<div id="featured-image" class="grid col-300 fit">
		<img class="courseimg" alt="course logo" src="http://wikieducator.org/course/OCL4Ed_OERu/images/Yamashita_Yohei_-_CC_on_Orange_(by).jpg">

	</div><!-- end of #featured-image -->

</div><!-- end of #featured -->
