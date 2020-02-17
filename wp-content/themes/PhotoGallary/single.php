<?php get_header(); ?>

       
            <?php while(have_posts()):the_post(); ?>
              
                        <div class="col-md-12">
                            <?php
                            $attr = array(
                                'class'=>'animated rollIn delay-0.5s img-fluid mg-thumbnail rounded mx-auto'

                            );
                            ?>
                            
                            <?php echo get_the_post_thumbnail($id,'large',$attr); ?>
                          
                            
                     
                           
                                <?php the_content(); ?>
                        </div> 
                          
            <?php endwhile; ?>
      
           


<?php get_footer(); ?>