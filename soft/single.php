<?php get_header(); ?>
<?php if(is_active_sidebar('sidebar')): ?>
  <div class="row">
    <div class="col-md-9 col-sm-8">
      <?php get_template_part('content/content','single'); ?>
    </div>
    <div class="col-md-3 col-sm-4">
      <?php dynamic_sidebar( 'sidebar' ); ?>
    </div>
  </div>
<?php else: ?>
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <?php get_template_part('content/content','single'); ?>
    </div>
  </div>
<?php endif; ?>
<?php get_footer(); ?>
