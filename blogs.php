<?php
/*
Template Name: Blog Page
*/
?>
<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package _s
 */

get_header(); ?>
<main id="main-page" class="content container">
	<div id="main-content">
		<div class="container">
			<div class="row">
				<div class="col-md-4" style="padding-left:0;">
					<!--side bar-->
					<div class="data-wrap">
						<div id="latest-news" class="data-title hidden">
							Twitter Feeds
						</div>
						<div class="data-content">
							<a class="twitter-timeline" href="https://twitter.com/mboglobal" data-tweet-limit="3">Tweets by @mboglobal</a>
							<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
						</div>
					</div>

				</div>
				<div class="col-md-8" style="padding-right:0;">
					<!--content-->
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
								  'posts_per_page' => 5,
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
												<p class="hidden">Title :<a class="post-title post-meta-value" href="<?php echo the_permalink(); ?>"><?php echo the_title(); ?></a></p>
												<p class="hidden">Posted by :<a class="posted-by post-meta-value" href="#"><?php echo the_author_meta('display_name'); ?></a></p>
												<p class="hidden">Date :<a class="posted-date post-meta-value" href="#"><?php echo the_date(); ?></a></p>
												<p class="hidden">Time :<a class="posted-time post-meta-value" href="#"><?php echo the_time('h:i A'); ?></a></p>
												<p>
													<?php the_excerpt(); ?><a class="hidden post-meta-value" href="<?php echo the_permalink(); ?>">Read more</a>
												</p>
											</div>
										</li>
							  <?php }
									echo '</ul>';
							  ?>

									<div class="wp-pagination" style="margin-top:40px;">
										<?php if (function_exists('wp_paginate')) {
													wp_paginate();
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
