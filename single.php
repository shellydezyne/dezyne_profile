<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package dezyne_profile
 */

 get_template_part('header','blog'); ?>
 <!-- Header Section Over -->

 <div class="container-fluid no-padding">
<!--	<div class="beautiful-image">
		 <img src=<?php the_permalink(); ?> title="<?php the_title_attribute(); ?>" class="media-box grid-featured-img">
						 <?php the_post_thumbnail(); ?>-->


		
	 </div>



 <div id="main-container">
	<div class="content">

			<div class="container">
					<div class="row">


                  	<div class="col-md-12 col-sm-12">
<center>
								<br>
								<br>
								<?php
	while ( have_posts() ) : the_post();

		get_template_part( 'template-parts/content-detail', get_post_format() );

		the_post_navigation();


		// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;

	endwhile;
	?>
</center>
		 </div>
	 </div>
 </div>
 </div>




</div>


<?php
get_template_part('footer','blog');
?>
