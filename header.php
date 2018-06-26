<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,300italic,300,100italic,100,400italic,500,500italic,700,700italic,900' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="hfeed site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">

		<a class="skip-link screen-reader-text sr-only" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>
    <div id="top-menu">
			<div class="<?php echo esc_html( $container ); ?>">
				<div class="row">
					<div id="top-menu-left" class="col-md-8 col-xs-12">
						<div class="top-menu-wrapper">
							<!--Got Questions? -->
							<div class="item-contact">
								<i class="fa fa-phone"></i>
								<a href="tel:646-355-1354">646-355-1354</a>
							</div>
							<div class="item-contact">
								<i class="fa fa-envelope"></i>
								<a href="http://www.mboglobal.com/contact-us/">info@mboglobal.com</a>
							</div>
						</div>
					</div>
					<div id="top-menu-right" class="col-md-4 text-right col-xs-12">
						<div class="social-icons">
							<a href="https://www.facebook.com/MBOGlobalNY/" target="_blank">
								<i class="fa fa-facebook"></i>
							</a>
							<a href="https://twitter.com/mboglobal" target="_blank">
								<i class="fa fa-twitter"></i>
							</a>
							<a href="https://www.linkedin.com/company/mbo-global" target="_blank">
								<i class="fa fa-linkedin"></i>
							</a>
							<a href="https://plus.google.com/b/111398800517390688771/111398800517390688771" target="_blank">
								<i class="fa fa-google-plus"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<nav class="navbar navbar-expand-md navbar-dark bg-primary">

		<?php if ( 'container' == $container ) : ?>
			<div class="container" >
		<?php endif; ?>

					<!-- Your site title as branding in the menu -->
					<?php if ( ! has_custom_logo() ) { ?>

						<?php if ( is_front_page() && is_home() ) : ?>

							<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>

						<?php else : ?>

							<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>

						<?php endif; ?>


					<?php } else {
						the_custom_logo();
					} ?><!-- end custom logo -->

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<!-- The WordPress Menu goes here -->
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				); ?>
			<?php if ( 'container' == $container ) : ?>
			</div><!-- .container -->
			<?php endif; ?>

		</nav><!-- .site-navigation -->

	</div><!-- #wrapper-navbar end -->
  <div class="container" style="position:relative">
    <?php if($id != 199){ ?>
      <?php if( $id == 300): ?>
        <!-- our founder -->
        <div id="slider-info-wrapper" style="margin-top:30px; margin-bottom:30px;">
          <div class="content">
            <h2 style="font-size: 20px;">MBO embodies experience and entrepreneurship </h2>
            <p style="font-size:18px;">Captained by an Industry Specialist</p>
            <p style="width: 90%; font-size: 14px;">The captain at the helm of the ship charts the path and sets the tone for the journey and etched into the very keel our business model is desire to help you chart a path that will take you and your business to a productive and successful future. </p>
          </div>
          <!--a href="javascript:void(0)" meta-target="#page-wrapper" class="learnmore">Learn More</a-->
          <a href="http://www.mboglobal.com/services/" class="learnmore">Learn More</a>
        </div>
      <?php elseif ($id == 295): ?>
        <!-- charity -->
        <div id="slider-info-wrapper" style="margin-top:30px; margin-bottom:30px;">
          <div class="content">
            <h2 style="font-size: 20px;">MBO believes in giving back </h2>
            <p style="font-size:18px;">Beyond Responsibility is the Call to Action</p>
            <p style="width: 90%; font-size: 14px;">At the core of our business model is the ideal of responsible entrepreneurship. We strive to underscore fairness and incorporate corporate social responsibility in all aspects of our work., aware that we exist within a community and the impact we bear.</p>
          </div>
          <!--a href="javascript:void(0)" meta-target="#page-wrapper" class="learnmore">Learn More</a-->
          <a href="http://www.mboglobal.com/services/" class="learnmore">Learn More</a>
        </div>
      <?php elseif ($id == 36): ?>
            <!-- PAYROLL SERVICES  -->
            <div id="slider-info-wrapper" style="margin-top:30px; margin-bottom:30px;">
              <div class="content">
                <h2 style="font-size: 20px;">MBO is scalable and flexible</h2>
                <p style="font-size:18px;">Designed to help you grow your business at any level</p>
                <p style="width: 90%; font-size: 14px;">Whether you are an established multi-national company, a small family business with a long tradition, or a start-up in the industry, we at MBO Global can calibrate our services to offer you the best deal that suits your needs!</p>
              </div>
              <a href="http://www.mboglobal.com/services/" class="learnmore">Learn More</a>
            </div>
      <?php elseif ($id == 34): ?>
            <!-- ACCOUNTING SERVICES  -->
            <div id="slider-info-wrapper" style="margin-top:30px; margin-bottom:30px;">
              <div class="content">
                <h2 style="font-size: 20px;">MBO is expert and precise </h2>
                <p style="font-size:18px;">Specialized service tailored for your needs</p>
                <p style="width: 90%; font-size: 14px;">MBO is made up of a team equipped with specialized knowledge to help you navigate through a plethora of data and information and deliver concrete and scaled information that will allow you to make sound economic decisions geared towards growing your business!</p>
              </div>
              <a href="http://www.mboglobal.com/services/" class="learnmore">Learn More</a>
            </div>
      <?php elseif ($id == 38): ?>
            <!-- ADMINISTRATIVE SERVICES   -->
            <div id="slider-info-wrapper" style="margin-top:30px; margin-bottom:30px;">
              <div class="content">
                <h2 style="font-size: 20px;">MBO thorough and consistent</h2>
                <p style="font-size:18px;">We allow you to focus on the really important decisions</p>
                <p style="width: 90%; font-size: 14px;">Here at MBO, we help you take care of the mundane day to day grind of every day business transactions, tracking and cataloguing simple processes like the logistics of the supply chain to ensure that your business operations is optimized so you can focus on how best to take your business to the next level.</p>
              </div>
              <a href="http://www.mboglobal.com/services/" class="learnmore">Learn More</a>
            </div>
      <?php elseif ($id == 44): ?>
            <!-- ACCOUNTS PAYABLE SERVICES   -->
            <div id="slider-info-wrapper" style="margin-top:30px; margin-bottom:30px;">
              <div class="content">
                <h2 style="font-size: 20px;">MBO is scrupulous and meticulous</h2>
                <p style="font-size:18px;">We offer regulatory adherence and continuity across borders</p>
                <p style="width: 90%; font-size: 14px;">At MBO we understand that your business is an entity that develops over time and it is our promise to grow with you as you change and as your needs change, from payroll to regulatory changes to expansion into other countries or states, we will provide you with services you need to maintain financial growth and help with liquidity.</p>
              </div>
              <a href="http://www.mboglobal.com/services/" class="learnmore">Learn More</a>
            </div>
      <?php elseif ($id == 46): ?>
            <!-- MANAGEMENT REPORTING   -->
            <div id="slider-info-wrapper" style="margin-top:30px; margin-bottom:30px;">
              <div class="content">
                <h2 style="font-size: 20px;">MBO is relevant and succinct</h2>
                <p style="font-size:18px;">We offer timely reporting in a streamlined fashion</p>
                <p style="width: 90%; font-size: 14px;">Running a business means optimizing information and at MBO, we understand and deliver management and financial reports that help you track key performance indicators (KPI). Our aim is to help you make actionable decisions backed by thorough and up-to-date data about your business and it processes.</p>
              </div>
              <a href="http://www.mboglobal.com/services/" class="learnmore">Learn More</a>
            </div>
      <?php else: ?>
        <div id="slider-info-wrapper" style="margin-top:30px; margin-bottom:30px;">
          <div class="content">
            <h2 style="font-size: 20px;">MBO is Accountable and Dependable</h2>
            <p style="font-size:18px;">Designed for Smart Businesses</p>
            <p style="width: 90%; font-size: 14px;">Need higher margins, operational reliability and efficiency? Choose MBO today! We deliver pinpoint precision bundled with high quality accountability to help your business achieve excellence!</p>
          </div>
          <!--a href="javascript:void(0)" meta-target="#page-wrapper" class="learnmore">Learn More</a-->
          <a href="http://www.mboglobal.com/services/" class="learnmore">Learn More</a>
        </div>
      <?php endif; ?>

    <?php } else {?>
    <style type="text/css">
      #primary {
        padding-left:0 !important;
        padding-right:0 !important;
      }
      #primary > #main {
        min-height:220px !important;
      }
      .entry-content a:not([href="#"]){
        color:#a20000;
      }
    </style>
    <?php } ?>
    <?php
        $contact_us_page_id = 22;
        if($id == $contact_us_page_id){
      ?>
      <div class="g-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1796.8057048686371!2d-73.98384883640145!3d40.76521485483556!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c258f79a9059f7%3A0xe9096baa403b151d!2s888+7th+Avenue%2C+New+York%2C+NY+10106!5e0!3m2!1sen!2s!4v1501642148884" width="430" height="272" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>

      <style type="text/css">
        body > div{
          z-index:9999 !important;
          position:relative;
        }
        body .g-map{
          /* margin:60px auto; */
          position: absolute;
          right: 15px;
          top: 0;
        }
        body .g-map, body .g-map *{
          z-index:1 !important;
        }
      </style>

    <?php }?>
  </div>
