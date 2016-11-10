
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
</div>

 

      

<?php get_footer(); ?>