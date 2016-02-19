<?php
/*
 Template Name: Front Page
*/
?>
<?php get_header(); ?>

			<div id="content">
				<header class="summit-hero">
					<h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>
					<h2>A Committee of 200 Event Proudly Hosted by the Herbert Wertheim College of Engineering</h2>
				</header>

				<?php get_sidebar('subheader'); ?>
				

				<div id="inner-content" class="wrap cf">

						
						<main id="main" class="m-all t-all d-all cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

								<section class="entry-content cf" itemprop="articleBody">
									
									<?php
										// the content 
										the_content();

										wp_link_pages( array(
											'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'bonestheme' ) . '</span>',
											'after'       => '</div>',
											'link_before' => '<span>',
											'link_after'  => '</span>',
										) );
									?>
								</section> <?php // end article section ?>
								
								<?php comments_template(); ?>

							</article>


							<?php endwhile; endif; ?>

						</main>



				</div>

			</div>

<?php get_footer(); ?>
