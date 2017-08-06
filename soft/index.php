<?php get_header();?>
<?php if(
        is_active_sidebar('home-opening')||
        is_active_sidebar('home-atas') ||
        is_active_sidebar('home-tengah-1')||
        is_active_sidebar('home-tengah-2')||
        is_active_sidebar('home-tengah-3') ||
        is_active_sidebar('home-bawah')
        ){
   get_template_part('template_home');
}
else{
    get_template_part('content/loop','grid');
}
?>

<?php get_footer(); ?>
