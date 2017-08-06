<?php if(have_posts()): while(have_posts()):the_post() ?>
<div class="loop-list">
  <div class="row">
<?php if(has_post_thumbnail()):?>
  <div class="col-sm-4">
<div class="image">
<img src="<?php  the_post_thumbnail_url() ?>" class="img-responsive">
</div>
</div>
<?php endif; ?>

<div class="col-sm-8">
<h4 class="judul"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
<div class="excerpt">
<?php soft_excerpt('length_20'); ?>
</div>
</div>
</div>
</div>
<?php endwhile; endif;?>
