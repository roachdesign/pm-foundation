<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <div class="row">
    <div class="columns">
      <div class="post-excerpt">
        <a href="<?php the_permalink();?>"><h3><?php the_title(); ?></h3></a>
        <p><?php echo excerpt(50); ?></p>
      </div>
    </div>
  </div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>