<p class="info">
  <span class="date"><?php the_time('F j, Y'); ?><i class="fa fa-date"></i> </span>
  <span class="author"><?php _e( 'Published by', 'soft' ); ?><i class="fa fa-user"></i> <?php the_author_posts_link(); ?></span>
  <span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'soft' ), __( '1 Comment', 'soft' ), __( '% Comments', 'soft' )); ?></span>
</p>
