<?php
/**
 * Template Name: Splash
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since RoZu
 */

get_header('splash'); ?>

<span class="logo">Kamikaze Penguins</span>
<?php
    // Start the Loop.
    while ( have_posts() ) : the_post();

        // Include the page content template.
        get_template_part( 'content', 'page' );

    endwhile;
?>

<!--    <div id="floater"></div>-->
<!--    <div id="disc">Content Here</div>-->
<nav class="site-navigation nav-block">
    <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'main-menu' ) ); ?>
</nav>
<?php
