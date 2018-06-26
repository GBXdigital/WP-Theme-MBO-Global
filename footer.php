<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_sidebar( 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">
	<div class="<?php echo esc_html( $container ); ?>">
		<div class="row">
			<div class="col-md-12">
				<footer class="site-footer" id="colophon">
					<div class="site-info row">
						<div class="col-lg-3 -md-12 icon-info col-xs-12 col-sm-12">
							<span class="phone-icon footer-icon" style="font-size:22px;"></span>
							<a href="tel:646-355-1354">646-355-1354</a>
						</div>
						<div class="col-lg-4 col-md-12 icon-info col-xs-12 col-sm-12">
							<span class="email-icon footer-icon"></span>
							<a href="mailto:info@mboglobal.com" style="font-size:22px;">info@mboglobal.com</a>
						</div>
						<div class="col-lg-5 col-md-12 icon-info col-xs-12 col-sm-12">
							<span class="location-icon footer-icon"></span><span  style="font-size:19px; color:#fff; position:relative; top:-3px;">888 Seventh Avenue New York, NY 10019</span>
						</div>
					</div><!-- .site-info -->
				</footer><!-- #colophon -->
			</div><!--col end -->
		</div><!-- row end -->
	</div><!-- container end -->
</div><!-- wrapper end -->

<div id="wrapper-copyright">
	<div class="<?php echo esc_html( $container ); ?>">
		<div class="row">
			<div class="col-md-8">
				© Copyright <script>document.write(new Date().getFullYear().toString());</script> MBO Global. All Rights Reserved.
			</div>
			<div class="col-md-4">
				<div class="social">
					<a href="https://www.facebook.com/MBOGlobalNY/" id="facebook" target="_blank"></a>
					<a href="https://twitter.com/mboglobal" id="twitter" target="_blank"></a>
					<a href="#" id="instagram" target="_blank"></a>
					<a href="https://plus.google.com/b/111398800517390688771/111398800517390688771" id="google-plus" target="_blank"></a>
				</div>
			</div>
		</div>
	</div>
</div>

</div><!-- #page -->

<?php wp_footer(); ?>

<script type="text/javascript">
jQuery(document).ready(function(){
	jQuery('.wpcf7-form .your-location .wpcf7-select > option[value=""]').html('Select Location');
	return false;
});
</script>

<?php
// exit intent
if( is_front_page() && !is_user_logged_in() ):
?>
<script type="text/javascript">
jQuery(document).ready(function( $ ) {
	$.exitIntent('enable', { 'sensitivity': 100 });
	$(document).bind('exitintent',
	    function() {
	       if (!!$.cookie('pum-359')) {
	         // have cookie
	         console.log('cookie found');
	        } else {
	         // no cookie
	         $('#pum-359').popmake('open');
	         $.pm_cookie(
	              'pum-359', // The cookie name that is checked prior to auto opening.
	              true, // Setting a cookie value of true.
	              '1 month', // Plain english time frame.
	               window.location.href // Cookie path of / means site wide.
	          );
	        }
	    }
	);
});

</script>
<?php endif; ?>

</body>

</html>
