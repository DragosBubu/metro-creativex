<?php/** * The template for displaying all pages. * @package metrox */get_header(); ?>	<?php  while ( have_posts() ) : the_post(); ?>				<h1 class="insidepost"><?php the_title(); ?></h1>		</div><!--/topside-->		<div id="content">			<div class="post">				<?php 					the_content(); 					wp_link_pages();				?>			</div><!--/post-->			<?php metrox_pagination(); ?>			<?php comments_template(); ?>		</div><!-- /content -->	<?php endwhile; ?><?php get_footer(); ?>