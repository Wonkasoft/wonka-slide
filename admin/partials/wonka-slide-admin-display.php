<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://wonkasoft.com
 * @since      1.0.0
 *
 * @package    Wonka_Slide
 * @subpackage Wonka_Slide/admin/partials
 */
?>

<div class="page-wrapper">
	<div class="page-header">
		<div id="ws-slide-logo-wrap">
			<img src="<?php echo plugins_url( "../img/ws-slide-logo.svg", __FILE__ ); ?>">
		</div> <!-- /ws-slide-logo-wrap -->
		<h1>Wonka Slide Plugin</h1>
	</div> <!-- /page-header -->
	<div class="content-area">
		<p>Documentation for Wonka Slide</p>
		<h1>Shortcode Information</h1>
		<p>Default Shortcode</p>
		<code>[wonka-slider]</code>
		<p>Default option has all options enabled</p>
		<p>Slide Indicators Shortcode Option</p>
		<code>[wonka-slider slide_indicators="False"]</code>
		<p>Slide indicators option is a bool (True/False) for silde indicators</p>
		<p>Slider Count Shortcode Option</p>
		<code>[wonka-slider slide_count="5"]</code>
		<p>Slider count option sets the slider count (1-10) slides</p>
	</div> <!-- /content-area -->
</div> <!-- /page-wrapper -->
