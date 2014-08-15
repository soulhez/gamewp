<?php get_header();?><!-- Page content    ================================================== --><!-- Wrap the rest of the page in another container to center all the content. --><div class="<?php if ( of_get_option('fullwidth') ) {  }else{ ?>container<?php } ?> blog">   	<?php if ( of_get_option('fullwidth') ) { ?> <div class="container"> <?php } ?>  <div class="row">     <div class="span8">        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>      <div class="blog-post">        <div class="blog-image">             <?php                $key_1_value = get_post_meta($post->ID, '_smartmeta_my-awesome-field77', true);                if($key_1_value != '') {                echo $key_1_value;                }elseif ( has_post_thumbnail() ) { ?>                  <a href="<?php the_permalink(); ?>"> <?php                   $thumb = get_post_thumbnail_id();                   $img_url = wp_get_attachment_url( $thumb,'full'); //get img URL                   $image = aq_resize( $img_url, 817, 320, true, '', true ); //resize & crop img                   ?><img src="<?php echo $image[0]; ?>" /></a>             <?php } ?>             <?php if ( has_post_thumbnail() or  $key_1_value != '') { ?>             <div class="blog-date">             <?php }else{?>             <div class="blog-date-noimg">             <?php } ?>                <span class="date"><?php the_time('M'); ?><br /><?php the_time('d'); ?></span>                <div class="plove"><?php if( function_exists('heart_love') ) heart_love(); ?></div>             </div>        </div>         <div class="blog-content">                    <h2><a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></h2>                    <?php the_excerpt(); ?>         </div>         <div class="blog-info">                    <div class="post-pinfo">                        <span class="icon-user"></span> <a data-original-title="View all posts by <?php echo get_the_author(); ?>" data-toggle="tooltip" href="#"><?php echo get_the_author(); ?></a> &nbsp;                        <span class="icon-comment"></span> <?php if ( is_plugin_active( 'disqus-comment-system/disqus.php' )){ ?>                        <a  href="<?php echo the_permalink(); ?>#comments" >                        <?php comments_number( __('No comments', 'One comment', '% comments' )); ?></a> &nbsp;                       <?php }else{ ?>                        <a data-original-title="<?php comments_number( __('No comments in this post', 'One comment in this post', '% comments in this post')); ?>" href="<?php echo the_permalink(); ?>#comments" data-toggle="tooltip">                        <?php comments_number( __('No comments', 'One comment', '% comments' )); ?></a> &nbsp;                       <?php } ?>                        <?php $posttags = get_the_tags();if ($posttags) {?>  <span class="icon-tags"></span>  <?php foreach($posttags as $tag) { ?>  <a href="<?php echo get_tag_link($tag->term_id); ?>"> <?php echo $tag->name . ', '; ?> </a><?php }}?></div>                    <a href="<?php the_permalink(); ?>" class="button-small"><?php _e("Read more", 'addict') ?></a>                    <div class="clear"></div>         </div>        </div>        <!-- /.blog-post -->        <div class="block-divider"></div>        <?php endwhile; endif; ?>        <div class="pagination">            <ul>              <li>                <?php            $additional_loop = new WP_Query('paged='.$paged );            $page=$additional_loop->max_num_pages;            echo kriesi_pagination($additional_loop->max_num_pages);            ?>            <?php wp_reset_query(); ?>              </li>            </ul>         </div>        <div class="clear"></div>    </div>    <!-- /.span8 -->    <div class="span4 sidebar">            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer widgets') ) : ?>                <?php dynamic_sidebar('two'); ?>           <?php endif; ?>    </div>    <!-- /.span4 -->  </div>  <!-- /.row -->  	<?php if ( of_get_option('fullwidth') ) { ?> </div> <?php } ?> <!-- /container --></div><!-- /.container --><?php get_footer(); ?>