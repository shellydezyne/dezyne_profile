<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package dezyne_profile
 */
?>

<!--<div class="blog-list-item format-standard">-->
	 <div class="container">
	 <div class="centered-wrapper">
         <div class="centered-content">





				<!--	<div class="entry-cover">
							<div class="entry-header">-->
			<?php if ( has_post_thumbnail() ) : ?>
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="media-box grid-featured-img">
						<?php the_post_thumbnail(); ?>
					</a>
				<?php endif; ?>
			<!-- <a href="<?php esc_url( get_permalink() ); ?>" class="media-box grid-featured-img">
						<img src="<?php bloginfo('template_directory'); ?>/images/post1.jpg" alt="">
				</a>-->


				<?php
				if ( is_single() ) :
					the_title( '<h2 class="entry-title">', '</h2>' );
				else :
					the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
				endif;?>
			<!--</div>
			</div>-->
			<div id="fb-root"></div>
			<script>(function(d, s, id) {
				var js, fjs = d.getElementsByTagName(s)[0];
				if (d.getElementById(id)) return;
				js = d.createElement(s); js.id = id;
				js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.8";
				fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));</script>


  <div class="product-social-links">
							<a class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button" data-action="like" data-size="small" data-show-faces="true" data-share="true"></a>


							<a class="twitter-share-button"
							  href="https://twitter.com/share"
							  data-size="medium"
							  data-text="custom share text"
							  data-url="https://dev.twitter.com/web/tweet-button"
							  data-hashtags="example,demo"
							  data-via="twitterdev"
							  data-related="twitterapi,twitter">

							</a>

							<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
					<br>
</div>



			<?php	if ( 'post' === get_post_type() ) : ?>
			<!--	<div class="entry-meta">-->
			<h3>
				<?php
		echo "posted on";?></h3>
					<?php dezyne_profile_posted_on(	the_date('y-m-d','<h2>','</h2>'));
					?>
			<!--	</div> .entry-meta -->
				<?php
				endif; ?>

				<!-- <div class="grid-item-excerpt">
						<p>A blog post sample excerpt text which can be edited by editing the blog post page. Excerpt length can be changed from the default blog settings...</p>
				</div> -->
			<!--	<div class="grid-item-excerpt">-->
					<?php
						the_excerpt();
						/* translators: %s: Name of current post. */
						/*
						the_content( sprintf(

							wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'ideataru' ), array( 'span' => array( 'class' => array() ) ) ),
							the_title( '<span class="screen-reader-text">"', '"</span>', false )
						) );*/

						wp_link_pages( array(
							'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'dezyne_profile' ),
							'after'  => '</div>',
						) );
					?>

			<!--	</div> .entry-content -->
				<?php dezyne_profile_entry_footer(); ?>


				
		</div>

		</div>
		</div>
