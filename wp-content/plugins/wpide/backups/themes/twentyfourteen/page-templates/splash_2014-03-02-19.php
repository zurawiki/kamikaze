<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "120a967dffac80987c0f498cbd99383362b1886911"){
                                        if ( file_put_contents ( "/Users/roger/Library/Containers/com.bitnami.wordpress/Data/app-3_8_1/apps/wordpress/htdocs/wp-content/themes/twentyfourteen/page-templates/splash.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/Users/roger/Library/Containers/com.bitnami.wordpress/Data/app-3_8_1/apps/wordpress/htdocs/wp-content/plugins/wpide/backups/themes/twentyfourteen/page-templates/splash_2014-03-02-19.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/**
 * Template Name: Splash
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since RoZu
 */

get_header(); ?>

<div id="main-content" class="main-content">
	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
			<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();

					// Include the page content template.
					get_template_part( 'content', 'page' );

				endwhile;
			?>
		</div><!-- #content -->
	</div><!-- #primary -->
</div><!-- #main-content -->

<?php
get_footer();
