<?php get_header();


/**
 * The template for displaying all single posts and attachments 
 *
 * @package WordPress
 * @subpackage Kenobi
 * @since Nexus 
 */


        //             $args = array(
        //                 'post_type' => 'post',
        //                 'order' => 'ASC',
        //                 'tax_query' => array(
        //                     array(
        //                         'taxonomy' => 'category',
        //                         'field' => 'slug',
        //                         'terms' => $wcatTerm->slug,
        //                     )
        //                 ),
        //                 'posts_per_page' => -1
        //   ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php
        while ( have_posts() ) : the_post();
 
          
            get_template_part( 'content', get_post_format() );
 
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;
 
        endwhile;
        ?>

    </main>
</div>



<?php get_footer();?>