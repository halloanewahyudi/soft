<?php get_header(); ?>
<?php if(is_active_sidebar('sidebar')): ?>
  <div class="row">
    <div class="col-md-9 col-sm-8">
      <?php get_template_part('content/loop','list'); ?>
    </div>
    <div class="col-md-3 col-sm-4">
      <?php dynamic_sidebar( 'sidebar' ); ?>
    </div>
  </div>
<?php else: ?>
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <?php get_template_part('content/loop','list'); ?>
    </div>
  </div>
<?php endif; ?>
<div class="jarak_60"></div>
<?php get_footer(); ?>
