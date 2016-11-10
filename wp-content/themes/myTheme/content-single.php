    <?php  if ( have_posts() ): while (have_posts() ): the_post(); ?>


        <article class="article">
          <h3 class="article_title"><a href="<?php echo get_permalink(); ?>"><?php  the_title(); ?></a><span>  </span>, <span class="date"><?php the_date('d.m.Y'); ?></span></h3>
          <?php the_post_thumbnail('full'); ?>



           <?php the_excerpt(); ?>
          <!-- <footer class="article_footer"> -->
            <!-- <div class="tags"><?php the_tags( ); ?> </div> -->
          <!-- </footer> -->
          <footer class="entry-meta">
            <?php edit_post_link( __( 'Edit', 'striped' ), '<div class="edit-link">', '</div>' ); ?>
            <p class="tags"><?php the_tags(__( 'Tagged as: ', 'striped' ),', '); ?></p>
            <p class="categories"><?php _e( 'Categorized in&#58; ', 'striped' ) . the_category(', '); ?></p>
          </footer>
        </article>
    <?php  endwhile;?>

    <?php else: ?>

    <?php endif; ?>