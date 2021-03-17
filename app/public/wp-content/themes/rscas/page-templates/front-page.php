
<?php
/**
 * Template Name: Front page template
 *
 * Template for displaying front page just with the header and footer area and a "naked" content area in between.
 * Good for landingpages and other types of pages where you want to add a lot of custom markup.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

?>

<div class="home-banner">
    <div class="container">
        
    </div>
</div>
<section id="promo-box">
    <div class="container">
            <h4 class="promo-header"><?php the_field('promotional_text_headline'); ?></h4>
                <p><?php the_field('promotional_text'); ?></p>
    </div>            
</section>



<?php $args = array(
            'post_type' => 'post',
            'posts_per_page' => 3
     
        );
        $_posts = new WP_Query($args);
    ?>

<?php if ($_posts->have_posts() ) : ?>
    
    

    
    <div class="container latest-posts">
    <div class="row mt-5">
    <div class="container box-title box-color box-border"><h4><?php the_field('latest_posts_title')?></h4></div>
        
        
            <?php while ( $_posts->have_posts() ) : $_posts->the_post();?>
            <div class="col-lg-4">
               
                    <div class="card">
                        <img src="<?php the_post_thumbnail_url('medium')?>" alt="" class="img-fluid card-img-top">
                            <div class="card-body">
                                <h4 class="card-title"><?php the_title();?></h4>
                                <small class="text-muted">Written by <?php the_author_posts_link(); ?></small>    
                                <p class="card-text"><?php the_excerpt(); ?></p>
                    </div>   
                </div>
            </div>
    
    <?php
    endwhile;
else :
    _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
endif;

?>
</div>

</div>




<?php
get_footer();
