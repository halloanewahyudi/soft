<?php if(have_posts()): while(have_posts()):the_post() ?>
<div class="content-page">
  <h2 class="judul"><?php the_title(); ?></h2>
  <div class="content">
  <?php the_content(); ?>
  </div>
 </div>
<?php endwhile; endif; ?>
