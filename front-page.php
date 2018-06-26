<?php get_header(); ?>
<main id="page-wrapper" class="content container">
	<div id="main-content">
		<div class="container">
			<div class="row">
				<div class="col-md-4" style="padding-left:0;">
					<!--side bar-->
					<div class="data-wrap">
						<div class="data-content">
							<a class="twitter-timeline" href="https://twitter.com/mboglobal?ref_src=twsrc%5Etfw&" data-height="1190">Tweets by mboglobal</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
						</div>
					</div>

				</div>
				<div class="col-md-8" style="padding-right:0;">
					<!--content-->
					<p style="padding:15px; border:solid 3px #A20000;">
						As a company we’re personally invested in helping you achieve your goals by delivering reliability and accountability. Our services are flexible and can be customized to suit your particular business. We’re committed to helping you optimize your business functionality and improve performance to grow your company.
						<!--As a company we’re personally invested in helping you achieve your goals and doing this by delivering reliability and accountability every minute. In building long term client relationships, we ensure that we fully grasp your business so that we can better tailor our offerings to fit your specific needs. Our services are flexible and can be molded to suit your particular business model so you can do away with certain expenses that drain your coffers. We’re committed to helping you boost your ROI, optimize your business structure and performance which will ultimately grow your company.-->
					</p>


					<div id="homeCarousel" class="carousel slide" data-ride="carousel">
					  <ol class="carousel-indicators">
					    <li data-target="#homeCarousel" data-slide-to="0" class="active"></li>
					    <li data-target="#homeCarousel" data-slide-to="1"></li>
					    <li data-target="#homeCarousel" data-slide-to="2"></li>
							<li data-target="#homeCarousel" data-slide-to="3"></li>
					  </ol>
					  <div class="carousel-inner">
					    <div class="carousel-item active">
								<img class="d-block w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/images/lp-header-bg-services-accounting.jpg">
							  <div class="carousel-caption d-none d-md-block">
								<h2>Accounting: The Importance of Knowing the Language of Business</h2>
								<p>In any business, understanding and communication are two of the key factors that are crucial in achieving and maintaining success. Communicating with consumers as well as that of your peers is important, but keeping tabs of internal communication, especially of the financial sort, and understanding what this material entails, is something that must be given the attention and bearing it deserves.</p>
							  </div>
					    </div>
					    <div class="carousel-item">
								<img class="d-block w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/images/lp-header-bg-features-visionary_reporting.jpg" >
							  <div class="carousel-caption d-none d-md-block">
								<h2>Visionary Reporting</h2>
								<p>MBO Global knows your business and your business needs. In today’s competitive global economic climate, ensuring that the information you have is up-to-date is one of the key factors that will lead you to success. However, not all information is worth having and some only detract from the ultimate goal of optimizing your business segments and processes. Here at MBO Global, we will help you sift and filter through minutiae of details and break it down into solid, actionable information that will boost your company’s performance, help you reach your goals and ultimately grow your business. We’re concerned not only with how your business is performing today, but on how we can help you make it perform better in the future.</p>
							  </div>
					    </div>
					    <div class="carousel-item">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/lp-header-bg-services-payroll.jpg" alt="..." style="margin:0 auto;">
								<div class="carousel-caption d-none d-md-block">
								<h2>Keeping Track: Taking Steps Toward Employee Satisfaction and Retention</h2>
								<p>Payroll mainly has to do with compensation: the calculation of employees’ salaries, along with their benefits and tax deductions, factoring in their leaves and all the while ensuring that everything is in line with the legalities and regulations enforced in the area in which they work and function.</p>
								</div>
					    </div>
							<div class="carousel-item">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/lp-header-bg-features-less_expensive_than_Inhouse.jpg" alt="..." style="margin:0 auto;">
							  <div class="carousel-caption d-none d-md-block">
								<h2>Less expensive than Inhouse</h2>
								<p>Working with MBO Global means working with a team of dedicated experts trained to cater to your specific needs. Our offerings are flexible enough and can be molded to suit and fit your particular business model so you can do away with expensive auxiliary expenses that drain your coffers. Choose MBO Global and channel your money towards ways that can grow your business and expand your industry footprint.</p>
							  </div>
					    </div>
					  </div>
					  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
					    <span class="sr-only">Previous</span>
					  </a>
					  <a class="carousel-control-next" href="#homeCarousel" role="button" data-slide="next">
					    <span class="carousel-control-next-icon" aria-hidden="true"></span>
					    <span class="sr-only">Next</span>
					  </a>
					</div>


					<div id="recent-posts" class="data-wrap">
						<div class="data-title">
							Recent Posts
						</div>
						<div class="data-content">
						  <?php
								$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

								$args = array(
								  //'category_name' => 'blog',
								  'orderby' => 'date',
								  'order' => 'DESC',
								  'paged' => $paged,
								  'posts_per_page' => 3,
								);

								$wp_query = new WP_Query($args);
								if ( $wp_query->have_posts() ) {
									echo '<ul>';
									while ($wp_query->have_posts()) {
										$wp_query->the_post();
						  ?>
										<li class="post-wrap blog-item">
											<div class="post-img-wrap">
												<?php if(has_post_thumbnail( get_the_ID() )) {?>
												<?php the_post_thumbnail( 'full' ) ?>
												<?php } else { ?>
												<img class="empty-image" style="width:130px; height:130px;" src="<?php echo get_template_directory_uri(); ?>/images/empty-image-207x152.png" alt="...">
												<?php } ?>
											</div>
											<div class="post-content-wrap" style="width:70%;">
												<a class="post-title post-meta-value" href="<?php echo the_permalink(); ?>"><?php echo the_title(); ?></a>
												<p><?php the_excerpt(); ?></p>
											</div>
										</li>
							  <?php }
									echo '</ul>';
							  ?>

									<div class="wp-pagination" style="margin-top:40px;">
										<?php if (function_exists('wp_paginate')) {
													//wp_paginate();
												}
											  wp_reset_query();
										?>
									</div>

						  <?php }
								else{ ?>
									<div class="text-error no-post">No News Found!</div>;
						  <?php } ?>

						</div>
					</div><!--CLIENT RESULTS STORIES End-->
				</div>
			</div>
		</div>
	</div>
</main><!--main-->
<?php get_footer(); ?>
