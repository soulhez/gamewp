<?php/* * Template name: Normal page - no title*/?><?php get_header(); ?><?php if (class_exists('MultiPostThumbnails')) : $custombck = MultiPostThumbnails::get_post_thumbnail_url(get_post_type(), 'header-image', $post->ID, 'full'); endif; ?><?php if(empty($custombck)){}else{ ?><style>    body.page{    background-image:url(<?php echo $custombck; ?>) !important;    background-position:center top !important;    background-repeat:  no-repeat !important;}</style><?php } ?><div class="page normal-page <?php if ( of_get_option('fullwidth') ) {  }else{ echo "container"; } ?>">      <?php if ( of_get_option('fullwidth') ) { ?><div class="container"><?php } ?>		<div class="row">			<div class="span12">				<?php while ( have_posts() ) : the_post(); ?>				<?php  the_content(); ?>				<?php endwhile; // end of the loop. ?>			<div class="clear"></div>			</div>		</div>	 <?php if ( of_get_option('fullwidth') ) { ?></div><?php } ?></div><?php get_footer(); ?>