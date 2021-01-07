<?php
/*  Template Name: Full Width Post
*   Template Post Type: Post
*/
get_header(); 
get_template_part('template_parts/headers/header2') ?>

<div class="container border-bottom pt-7 pb-3 mb-3" id="<?php the_ID(); ?>">

    <section class="s-100">
        <?php
        
            while ( have_posts() ) : the_post();

            $authorId   =   $post->post_author;
            $authorUrl  =   get_author_posts_url( $authorId );

        ?>
            <div class="blog-details content">
                <article class="blog-post-details">
                    <div class="post-thumbnail">
                    
                        <?php

                        if( has_post_thumbnail() ){
                            ?>
                                <div class="rounded overflow-hidden shadow-box shadow-hover bg-contrast">
                                    
                                    <div class="img-dest" style="background-image: url(<?php the_post_thumbnail_url('full')?>);">
                                    
                                    </div>
                                    
                                </div>
                            
                            <?php
                        }

                        ?>
                    
                    </div>
                    <div class="post_wrapper">
                        <div class="post_header">
                            <h2><?php  the_title(); ?></h2>
                            <div class="blog-date-categori">
                                <ul>
                                    <li><?php _e('Publicado el: ', 'ser'); ?> <?php the_date(); ?></li>
                                    
                                    <li> <?php _e('Por:', 'ser'); echo'<a href="'.$authorUrl.'" > '; the_author(); ?></a></li>
                                    
                                    
                                </ul>
                            </div>
                        </div>
                        <div class="post_content">

                            <?php
                            
                                the_content();

                                $defaults = array(
                                    'before'           => '<p class="text-center">' . __( 'Páginas:', 'ser' ),
                                    'after'            => '</p>',
                                );

                                wp_link_pages( $defaults );
                            
                            ?>

                        </div>
                        <ul class="blog_meta">
                            <li><a href="#"><?php comments_number(); ?></a></li>
                            <li><?php _e('Tags: ', 'ser')?> <div class="column"> <?php the_tags('<span>', ' ', '</span>'); ?></div></li>
                            <li><?php _e('Categorias:', 'ser'); ?>  <div class="column"> <?php the_category(' '); ?></div> </li>
                        </ul>
                    </div>
                </article>

                <?php 

                    if(comments_open() || get_comments_number() ){
                        comments_template();
                    }

                    
                ?>
                
            </div>
        <?php endwhile; ?>
        
    </section><!-- Content -->
    

</div>

<?php get_footer(); ?>