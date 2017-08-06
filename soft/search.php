<?php get_header(); ?>

  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <?php if(have_posts()):while(have_posts()):the_post();?>
        <a href="<?php the_permalink() ?>"><h4><?php the_title() ?></h4></a>
        <?php the_content(); ?><hr>
      <?php endwhile; ?>
    <?php else: ?>
      <h1 class="text-center">Sorry not found !</h1>
    <?php endif ?>
    </div>
  </div>
<?php get_footer(); ?>
