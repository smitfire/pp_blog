
<section class="post-single">  
<?php while (have_posts()) : the_post(); ?>
  <div class="post-nav">
    <span class="pull-left"><?php previous_post_link('%link', '<< Previous Post') ?></span>
    <span class="pull-right"><?php next_post_link('%link', 'Next Post >>') ?></span>
    <div class="clearfix"></div>
  </div>
  <article <?php post_class(); ?>>
    <header>
    <h1 class="entry-title"><?php the_title(); ?></h1>
      <?php get_template_part('templates/entry-meta'); ?>
    </header>
    
    <div class="entry-content">
      <?php the_content(); ?>
    </div>
    <footer>
      <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
    </footer>
    <div class="clearfix"></div>
    <hr>
    <div>
    <?php comments_template('/templates/comments.php'); ?>
    </div>
  </article>
<?php endwhile; ?>
</section>