<?php if(!is_home() || !is_front_page() ): ?>
</div><!--container-->
<?php endif; ?>
</div><!--wrapper-->
<!-- footer -->
<?php wp_footer(); ?>
<footer class="footer" role="contentinfo">
  <?php if ( is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) || is_active_sidebar( 'footer-3' ) ) : ?>
    <div class="footer-widget">
    <div class="container">
  <div class="row">
  <div class="col-sm-4">
      <?php dynamic_sidebar( 'footer-1' ); ?>
  </div>
  <div class="col-sm-4">
      <?php dynamic_sidebar( 'footer-2' ); ?>
  </div>
  <div class="col-sm-4">
      <?php dynamic_sidebar( 'footer-3' ); ?>
  </div>
  </div>
  </div>
  </div>
  <?php endif; ?>

<div class="container">
  <!-- copyright -->
 
   <div class="copyright ">
    &copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>. <?php _e('Powered by', 'soft'); ?>
    <a href="//wordpress.org" title="WordPress">WordPress</a> &amp; <a href="//anewahyudi.com" title="Ane Wahyudi">ane wahyudi</a>.
  </div>
  <!-- /copyright -->
</div>
</footer>

<!-- analytics -->
<script>
(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
ga('send', 'pageview');
</script>
</body>
</html>
