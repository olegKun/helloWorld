<?php wp_head() ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>design blog - free css template</title>
<meta name="keywords" content="free css templates, blog design, 2-column, web design, CSS, HTML" />
<meta name="description" content="Design Blog - free css template, 2-column blog layout" />

<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>









<script type="text/javascript">
  // jQuery(document).ready( function($) {
    function myclick(){
    var cnt=document.getElementById('templatemo_content');
    var c=1;

   
    

    $.ajax({
        url: "http://wordpress/",
        <?php query_posts('post_type=post') ?>
         success : function(){                  
                 <?php 
            if (have_posts()) :
            while (have_posts()) : 
               the_post();  ?>
           var post_box=document.createElement('div');
           post_box.className='post_box';

            <?php $content = get_the_content(); ?> 
           
       



          
           document.getElementById('templatemo_content').appendChild(post_box);
           var post_title=document.createElement('h2');
           var post_title_ref=document.createElement('a');
          
           
            post_title_ref.innerHTML="<?php the_title(); ?>;";
           post_title_ref.href="#";
           post_box.appendChild(post_title);
           post_title.appendChild(post_title_ref);
           var post_meta=document.createElement('div');
           post_meta.className="news_meta";
           post_meta.innerHTML="Posted on ";
           var web_templates=document.createElement('a');
           web_templates.innerHTML="Web templates";
           web_templates.href="#";
           post_meta.appendChild(web_templates);
           post_meta.appendChild(document.createTextNode(","));
           post_meta.appendChild(document.createTextNode("<?php the_date('j M Y'); ?>"));
           post_meta.appendChild(document.createTextNode("| Tags: Blog, Templates, Design, Free"));
           post_box.appendChild(post_meta);
           <?php if(has_post_thumbnail()): ?>
           var img_wrapper=document.createElement('div');
           img_wrapper.className='image_wrapper';
         
            document.getElementById('qua').innerHTML="<?php echo addslashes(the_content()); ?>"
            
           
          
           post_box.appendChild(img_wrapper);
            <?php endif; ?>
          

             <?php endwhile;
endif;

?>             
         }  

});
}
</script>







</head>
<body>


<h1 id="qua" onclick="myclick()">
   hjkjjk
</h1>


<div id="templatemo_body_wrapper">
<div id="templatemo_wrapper">
    
    <div id="templatemo_header">
            
        <div id="site_title">
            <a href="<?php echo get_bloginfo('url'); ?>" target="_parent">Peppa
            	<span>Blog </span>
                <span class="tagline" onclick="myclick">Designed by Oleg Kunetskyi</span>
            </a>
        </div> <!-- end of site_title -->
        
        <div id="search_box">
            <form action="#" method="get">
                <input type="text" value="Enter keyword here..." name="q" size="10" id="searchfield" title="searchfield" onfocus="clearText(this)" onblur="clearText(this)" />
              <input type="submit" name="Search" value="Search" id="searchbutton" title="Search" />
            </form>
        </div>
    
   
        <div class="cleaner"></div>
        
    </div> <!-- end of header -->
    
    <div id="templatemo_menu">
        <ul>
            <li><a href="#" class="current"><span></span>Home</a></li>
            <li><a href="wordpress/aja"><span></span>Page</a></li>
            <li><a href="#"><span></span>Dreams</a></li>
            <?php   $category_id = get_cat_ID( 'Category Name' ); ?>
            <li><a href="<?php echo get_category_link(3); ?> "><span></span>Hobbiess</a></li>
            <li><a href="#"><span></span>Inspirations</a></li>
            <li><a href="wordpress/greeting1"><span></span>Message</a></li>
        </ul>    	
        
        <div id="register_box">
        	<p id="reg_box_text">Already Registered? Click</p>
             <a href="wordpress/register" class="signup">Here</a> | <a href="wordpress/login" class="new_reg" id="dostalo" onClick="ShowDIV();" 
             >Log in</a>
        </div>
    </div> <!-- end of templatemo_menu -->