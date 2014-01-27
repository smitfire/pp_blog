<?php
/*
Template Name: Custom Template
*/
?>
<section class="home row-fluid">
	

	<ul class="col-md-7 post_feed">
		
		<?php $the_query = new WP_Query( 'showposts=15' ); ?>
		
		<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
			<li>
				<a href="<?php the_permalink() ?>">
					<h3><?php the_title(); ?></h3>
				</a>
				<small>
					<strong>Posted: </strong><?php the_date(); ?> | <strong>Author: </strong><a href="<?php the_author_link() ?>"><?php the_author(); ?></a> <br> <?php the_tags(); ?>
				</small>
			</li>

			<li>
				<?php the_content(); ?>
			</li>

			<li class="comment-btn">
				<a href="<?php the_permalink() ?>">
					<p>Leave Comment...</p>
				</a>
			</li>

			<div class="clearfix"></div>
			<hr class="style-two">
		<?php endwhile;?>
	
	</ul>
	
	<div class="col-md-4 pull-right">
		<?php get_template_part('templates/sidebar'); ?>
	</div>

</section>