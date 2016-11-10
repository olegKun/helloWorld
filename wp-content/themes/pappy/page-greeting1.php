<?php get_header(); ?>

 <div id="templatemo_main">
        <div id="templatemo_content">
        	<form action="http://wordpress/greeting1/" method="get">
			Введите имя: <input type=text name="thename"><br>
			Введите возраст: <input type=text name="age"><br>
			<input type=submit value="GO!">
			</form>

			 <div id="greetng">
        <?php $nm= $_GET['thename']; 

        ?>
        <p style="display: inline-block;">Name:</p>
        <p><?php echo $nm ?></p>
        <!-- <h1>Surname:</h1>
        <p><?php echo $nm ?></p> -->
        </div>
        </div>

       
        <?php get_sidebar(); ?>
    
    	<div class="cleaner"></div>
 </div>

 <?php get_footer();  ?>