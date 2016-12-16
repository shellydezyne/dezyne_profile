<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dezyne_profile
 */

?>
</div>

<footer id="" class="footer-section">



  <div class="container">
        	<div class="row">
<!--  <div class="back-home">
    <a href="/">Go Back Home</a>
  </div>-->
<div class="col-md-4 col-sm-4">
  <hr>


  </div>
  <div class="col-md-4 col-sm-4">

<hr>


    <h4 class="widgettitle">Tags::</h4>
    <div id="Tcomments" class="tab-pane">
   								<div class="tag-cloud">
   									<?php
   									$tags = get_tags();
   									$html = '';
   									foreach ( $tags as $tag ) {
   										$tag_link = get_tag_link( $tag->term_id );

   										$html .= "<a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug}'>";

   										$html .= "{$tag->name}</a>";


   									}


                    echo $html;
   									?>
   								</div>
   						</div>

  </div>



    <div class="col-md-4 col-sm-4">
      <hr>



<div class="widget footer_widget widget_links">
    <?php
    if (! function_exists('catList')) {
	function catList() {
		$args = array(
		'orderby'            => 'name',
		'order'              => 'ASC',
		'show_last_update'   => 0,
		'style'              => 'none',
		'show_count'         => 1,
		'hide_empty'         => 1,
		'use_desc_for_title' => 1,
		'child_of'           => 0,
		'current_category'   => 0,
		'hierarchical'       => true,
		'number'             => NULL,
		'echo'               => 1,
		'depth'              => 1
		);
		wp_list_categories( $args );
	}
}
?>
<h4 class="widgettitle">Categories</h4>


 <?php catList(); ;?>


   								</div>

</div>




</footer>
<div id="config-panel" class="config-panel hidden-xs hidden-sm">
		<div class="panel-inner">
				<a id="config-trigger" class="config-trigger config-panel-hide" href="#"><i class="fa fa-cog"></i></a>
				<h5 class="panel-title">Choose Colour</h5>
				<ul id="color-options" class="list-unstyled list-inline">
						<li class="theme-1 active"><a data-style="assets/css/styles.css" data-chart="#00BCD4" href="#"></a></li>
						<li class="theme-2"><a data-style="assets/css/styles-2.css" data-chart="#03A9F4" href="#"></a></li>
						<li class="theme-3"><a data-style="assets/css/styles-3.css" data-chart="#009688" href="#"></a></li>
						<li class="theme-4"><a data-style="assets/css/styles-4.css" data-chart="#4CAF50" href="#"></a></li>
						<li class="theme-5"><a data-style="assets/css/styles-5.css" data-chart="#8BC34A" href="#"></a></li>
						<li class="theme-6"><a data-style="assets/css/styles-6.css" data-chart="#C0CA33" href="#"></a></li>
						<li class="theme-7"><a data-style="assets/css/styles-7.css" data-chart="#FFC107" href="#"></a></li>
						<li class="theme-8"><a data-style="assets/css/styles-8.css" data-chart="#FF9800" href="#"></a></li>
						<li class="theme-9"><a data-style="assets/css/styles-9.css" data-chart="#FF5722" href="#"></a></li>
						<li class="theme-10"><a data-style="assets/css/styles-10.css" data-chart="#795548" href="#"></a></li>
						<li class="theme-11"><a data-style="assets/css/styles-11.css" data-chart="#607D8B" href="#"></a></li>
						<li class="theme-12"><a data-style="assets/css/styles-12.css" data-chart="#673AB7" href="#"></a></li>
						<li class="theme-13"><a data-style="assets/css/styles-13.css" data-chart="#3F51B5" href="#"></a></li>
						<li class="theme-14"><a data-style="assets/css/styles-14.css" data-chart="#2196F3" href="#"></a></li>
						<li class="theme-15"><a data-style="assets/css/styles-15.css" data-chart="#9C27B0" href="#"></a></li>
						<li class="theme-16"><a data-style="assets/css/styles-16.css" data-chart="#E91E63" href="#"></a></li>
				</ul>
				<a id="config-close" class="close" href="#"><i class="fa fa-times-circle"></i></a>
		</div><!--//panel-inner-->
</div><!--//configure-panel-->

<!-- Javascript -->
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/plugins/jquery-1.12.4.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/plugins/back-to-top.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/plugins/jquery-scrollTo/jquery.scrollTo.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/plugins/easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/plugins/imagesloaded.pkgd.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/plugins/isotope.pkgd.min.js"></script>

<!-- custom js -->
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>

<!-- Style Switcher (REMOVE ON YOUR PRODUCTION SITE) -->
<script src="<?php bloginfo('template_directory'); ?>/assets/js/demo/style-switcher.js"></script>
</div>
</div>
</body>
</html>
