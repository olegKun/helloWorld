
<?php get_header(); ?>
<div id="templatemo_main">
	<div id="templatemo_content">
		 <?php 
            if (have_posts()) :
            while (have_posts()) : 
               the_post();  ?>
           <?php get_template_part('content') ?>
            <?php endwhile;
endif; ?>
	</div>

	<?php get_sidebar(); ?>
	 <?php // If comments are open or we have at least one comment, load up the comment template.
 if ( comments_open() || '0' != get_comments_number() ) :
 	comments_template();
 endif;
?>  
</div>

 

  

<?php get_footer(); ?>