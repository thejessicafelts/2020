<?php get_header(); ?>

        <!-- INDEX -->
        <section id="section--index" class="layout__page--index">
            <div class="layout__container--fixed-width">
            
                <?php if(have_posts()): 
                    while(have_posts()): the_post(); ?> 
                        
                        <article id="article-id-<?php the_ID(); ?>">
                            <a href="<?php get_permalink('url'); ?>"><h2 class="post-title"><?php the_title(); ?></h2></a>
                            <p><?php the_author(); ?> | <?php the_time(); ?></p>
                            <p><?php the_excerpt(); ?></p>
                            <hr>
                            <p><?php the_content(); ?></p>
                            <p><?php the_category(); ?> | <?php the_tags(); ?></p>
                            <p><a href="<?php get_previous_post_link(); ?>">Previous Post</a> | <a href="<?php get_next_post_link(); ?>">Next Post</a></p>
                        </article>

                    <?php endwhile; 
                endif; 
                ?>

            </div>
        </section>
        <!-- end INDEX -->

<?php get_footer(); ?>