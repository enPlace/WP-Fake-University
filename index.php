<?php
get_header();
 
$myName = "Nick";
$names = ['Nick', 'Bob', 'Jerry', 'Terry']
?>



<?php
if ( have_posts() ) {
    while ( have_posts() ) {
 
        the_post(); ?>
 
        <h2><a href = "<?php the_permalink();?>"><?php the_title(); ?></a></h2>
 
        <?php the_content(); ?>
 
    <?php }
}

get_footer();

?>