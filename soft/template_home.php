<?php get_header(); ?>

<!---home atas------------>
<?php if(is_active_sidebar('home-atas')): ?>
  <div class="home-atas">
    <div class="container">
    <?php dynamic_sidebar( 'home-atas' ); ?>
    </div>
  </div>
<?php endif; ?>
<!---home tengah------------>
  <?php if ( is_active_sidebar( 'home-tengah-1' ) || is_active_sidebar( 'home-tengah-2' ) || is_active_sidebar( 'home-tengah-3' ) ) : ?>
    <div class="home-tengah">
    <div class="container">
<div class="row">
  <?php if ( is_active_sidebar( 'home-tengah-1' ) ): ?>
  <div class="col-sm-4">
    <div class="ht-widget">
      <?php dynamic_sidebar( 'home-tengah-1' ); ?>
    </div>
  </div>
<?php endif; ?>
<?php if ( is_active_sidebar( 'home-tengah-2' ) ): ?>
  <div class="col-sm-4">
    <div class="ht-widget">
      <?php dynamic_sidebar( 'home-tengah-2' ); ?>
    </div>
  </div>
<?php endif; ?>
<?php if ( is_active_sidebar( 'home-tengah-3' ) ): ?>
  <div class="col-sm-4">
    <div class="ht-widget">
      <?php dynamic_sidebar( 'home-tengah-3' ); ?>
    </div>
  </div>
<?php endif; ?>
</div>
</div>
</div>
  <?php endif; ?>

<!---home bawah------------>
  <?php if(is_active_sidebar('home-bawah')): ?>
    <div class="home-bawah">
      <div class="container">
      <?php dynamic_sidebar( 'home-bawah' ); ?>
      </div>
    </div>
  <?php endif; ?>

<?php get_footer(); ?>
