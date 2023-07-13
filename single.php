<?php get_header()?>

<section class="banner__blog">
    <div class="container">
        <div class="banner__wrapper__blog">
                  
                    <?php if(have_posts()) : while(have_posts()) : the_post()?>
            <div class="banner__blog__content">
                    <?php echo get_the_post_thumbnail(); ?>
                <div class="banner__text__blog">
                    <h5> ——— TRENDING NEWS</h5>
                    <p><?php the_excerpt();?></p>
                </div>
            </div>
                        <?php
                        endwhile;
                        else :
                        echo "There is no content!";
                        endif;
                        wp_reset_postdata();
                        ?>  
        </div>
    </div>
</section>

<section class="parag">
    <div class="container">
        <div class="parag__wrapper">
            <div class="parag__content">
                  
                    <?php if(have_posts()) : while(have_posts()) : the_post()?>
                <div class="parag__text">
                    <h2><?php the_title();?></h2>
                    <?php the_content();?>
                </div>
                        <?php
                        endwhile;
                        else :
                        echo "There is no content!";
                        endif;
                        wp_reset_postdata();
                        ?>  
                <div class="parag__box">
                    <div class="parag__box__text">
                    <h4>Published: <span> Feb 21, 2022</span></h4>
                    <h4>Author: <span> <?php echo get_the_author_meta('nickname')?></span></h4>
                    <h4>Category: <span> <?php print_r (get_the_category()[0]->name)?></span></h4>
                    <h4>Tag: <span> Fashion, Hot, Fresh</span></h4>
                    <h4>Time: <span> 12 mins</span></h4>

                    <h3 class="top">Share this article</h3>
                    <ul>
                        <li><i class="fa-brands fa-facebook"></i></li>
                        <li><i class="fa-brands fa-twitter"></i></li>
                        <li><i class="fa-brands fa-instagram"></i></li>
                        <li><i class="fa-brands fa-youtube"></i></li>
                    </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="related">
    <div class="container">
        <div class="related__wrapper">
            <h1>More Related Articles</h1>
            <div class="related__content">
                    <?php
                    $newQuery = new WP_Query(array(
                    'post_type' => 'blogPost',
                    'posts_per_page' => 3,
                    'tax_query'=> array(
                        array(
                        'taxonomy' => 'category',
                        'field' => 'slug',
                        'terms' => 'related'
                        ),
                    ),
                    ));
                    ?>
                    <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post()?>
                <div class="related__items">
                    <?php echo get_the_post_thumbnail(); ?>
                    <div class="related__items__text">
                        <div class="related__items__ul">
                            <ul>
                                <li>Feb 11 • 12 mins</li>
                                <li>— BY: AWESOME ME</li>
                            </ul>
                        </div>
                        <div class="related__items__story">
                            <h2><?php the_title();?> </h2>
                            <p><?php the_content();?></p>
                        </div>
                        <h3><a href="<?php the_permalink()?>">READ MORE</a></h3>
                    </div> 
                </div>
                        <?php
                        endwhile;
                        else :
                        echo "There is no content!";
                        endif;
                        wp_reset_postdata();
                        ?> 

               

                
            </div>
        </div>
    </div>
</section>

<section class="subscribe">
    <div class="container">
        <div class="subscribe__wrapper">
                    <?php
                    $newQuery = new WP_Query(array(
                    'post_type' => 'blogPost',
                    'posts_per_page' => 1,
                    'tax_query'=> array(
                        array(
                        'taxonomy' => 'category',
                        'field' => 'slug',
                        'terms' => 'subs'
                        ),
                    ),
                    ));
                    ?>
                    <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post()?>
            <div class="subscribe__text">
                <h1><?php the_title();?> </h1>
                <p><?php the_excerpt();?></p>
            </div>
                        <?php
                        endwhile;
                        else :
                        echo "There is no content!";
                        endif;
                        wp_reset_postdata();
                        ?> 
            <div class="subscribe__btn">
                <a href="">SUBSCRIBE NOW</a>
                <a href="">LEADER MORE</a>
            </div>
        </div>
    </div>
</section>

<?php get_footer()?>