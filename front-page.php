<?php get_header()?>

<section class="banner">
        <div class="container">
            <div class="banner__grid">
                <div class="banner__grid__lg">
                    <?php
                    $newQuery = new WP_Query(array(
                    'post_type' => 'blogPost',
                    'posts_per_page' => 1,
                    'tax_query'=> array(
                        array(
                        'taxonomy' => 'category',
                        'field' => 'slug',
                        'terms' => 'main'
                        ),
                    ),
                    ));
                    ?>
                    <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post()?>

                    <?php echo get_the_post_thumbnail(); ?>
                <div class="banner__content">
                <div class="banner__lg__ul">
                    <ul>
                        <li>Feb 11 • 12 mins</li>
                        <li>— BY: AWESOME ME </li>
                    </ul>
                </div>
                <div class="banner__lg__story">
                    <h1> <a href="<?php the_permalink(); ?>"> <?php the_title();?></a></h1>
                    <p><?php the_excerpt();?></p>

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

                <div class="banner__sidebar">
                <?php
                $newQuery = new WP_Query(array(
                  'post_type' => 'blogPost',
                  'posts_per_page' => 2,
                  'tax_query'=> array(
                    array(
                      'taxonomy' => 'category',
                      'field' => 'slug',
                      'terms' => 'mini'
                    ),
                  ),
                ));
              ?>
              <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post()?>
                <div class="card__sm">
                    <?php echo get_the_post_thumbnail(); ?>
                      <div class="card__sm__content">
                        <div class="sm__ul">
                            <ul>
                                <li>Feb 11 • 12 mins</li>
                                <li>— BY: AWESOME ME</li>
                            </ul>
                        </div>
                        <div class="sm__story">
                            <h1><?php echo wp_trim_words(get_the_title());?></h1>
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

            </div>
        </div>
</section>


<section class="trending">
        <div class="container">
            <div class="trending__wrapper">
                <h1>Hot Trending Article</h1>
            <div class="trending__grid">
            <?php
                    $newQuery = new WP_Query(array(
                    'post_type' => 'blogPost',
                    'posts_per_page' => 3,
                    'tax_query'=> array(
                        array(
                        'taxonomy' => 'category',
                        'field' => 'slug',
                        'terms' => 'trending'
                        ),
                    ),
                    ));
                    ?>
                    <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post()?>
                <div class="trending__content">
                        <div class="fashion">
                            <ul>
                                <li>FASHION</li>
                                <li>02.21.22 by: Awesome Me</li>
                            </ul>
                        </div>
                        <div class="story">
                            <h2><?php the_excerpt();?></h2>
                        </div>
                        <?php echo get_the_post_thumbnail(); ?>
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

<section class="latest">
        <div class="container">
            <div class="latest__wrapper">
                <h1>The Latest Stories</h1>
                <div class="latest__grid">
                <?php    
                    $newQuery = new WP_Query(array(
                    'post_type' => 'blogPost',
                    'posts_per_page' => 3,
                    'tax_query'=> array(
                        array(
                        'taxonomy' => 'category',
                        'field' => 'slug',
                        'terms' => 'content1'
                        ),
                    ),
                    ));
                    ?>

                <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post()?>
                    <div class="latest__content__1">
                  
                    <div class="latest__content">
                        <?php echo get_the_post_thumbnail(); ?>
                        <div class="latest__text__ul">
                            <ul>
                                <li>Feb 11 • 12 mins</li>
                                <li>-BY: AWESOME ME</li>
                            </ul>
                        </div>
                        <h2><a href="<?php the_permalink()?>"><?php the_title() ?></a></h2>
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

                
            