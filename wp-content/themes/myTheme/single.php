<?php get_header(); ?>
<?php get_sidebar(); ?>


<!-- <?php  if ( have_posts() ): while (have_posts() ): the_post(); ?>


        <article class="article">
          <h3 class="article_title"><a href="<?php echo get_permalink(); ?>"><?php  the_title(); ?></a><span>  </span>, <span class="date"><?php the_date('d.m.Y'); ?></span></h3>
          
          <?php the_post_thumbnail('full'); ?>



           <?php the_excerpt(); ?>
          <footer class="article_footer">
            <div class="tags"><?php the_tags( ); ?> </div>
          </footer>
        </article>
      </div>
    <?php  endwhile;?>

    <?php else: ?>

    <?php endif; ?> -->

 <?php get_template_part('content', 'single') ?>
 <?php if ( comments_open() || '0' != get_comments_number() ) :
  comments_template();
 endif;?>




<div class="clearfix"></div>
<div class="push"></div>
<?php get_footer(); ?> 

 

 
    

    

