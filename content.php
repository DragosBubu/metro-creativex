<?php/** * The default template for displaying content. Used for both single and index/archive/search. * * @package metrox */?>			<article <?php post_class(); ?>>				<?php 					$posttitle = get_the_title();					$feat_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );					if(isset($feat_image[0])):						echo '<div class="img"><img src='.$feat_image[0].' alt="'.$posttitle.'"></div>';					endif;					?>				<div class="post_icon" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/pt_standard.png);"></div>				<div class="post_content">					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>					<div class="short_excerpt">						<?php echo metrox_excerpt_max_charlength(160); ?>					</div><!--/excerpt-->					<div class="post_date"><?php echo get_the_date('d M Y'); ?></div>				</div><!--/post_content-->			</article>