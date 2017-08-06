<div class="grid">
<?php if(have_posts()): while(have_posts()):the_post() ?>
  <div class="col-sm-4 item">
<div class="loop-grid">
  <?php if(has_post_thumbnail()):?>
  <div class="image">
  <img src="<?php  the_post_thumbnail_url() ?>" class="img-responsive">
  </div>
  <?php endif; ?>
  <h4 class="judul"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
  <div class="excerpt">
  <?php soft_excerpt('length_20'); ?>
  </div>
 </div>
</div>
<?php endwhile; endif; ?>
</div>
