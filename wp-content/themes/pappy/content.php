<div class="post_box">
            
                <h2>
                  <a href=" <?php get_permalink(); ?>"><?php the_title();  ?></a>
                 
                </h2>   
                <div class="news_meta">Posted on <a href="#">Web Templates</a>,<?php the_date('j M Y'); ?> | Tags: <a href="#">Blog</a>, <a href="#">Templates</a>, <a href="#">Design</a>, <a href="#">Free</a>
                </div>
                <?php  if(has_post_thumbnail()): ?>
                <div class="image_wrapper">
                <a href="http://www.templatemo.com/page/1" target="_parent">
                 <?php 
                the_post_thumbnail(); 

                ?>
              </a>
                </div>
                <?php endif; ?>
              <?php the_content('Continue'); ?> 
              <div class="cleaner"></div>
            </div>
