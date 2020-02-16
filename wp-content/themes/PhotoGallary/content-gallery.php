
           
            <!--  -->
                <!--  -->
                    <div class="col-md-4 ">
                        <?php if(has_post_thumbnail()) : ?>
                           
                            <?php
                            $attr = array(
                                'class'=>'animated rollIn delay-0.5s img-fluid mg-thumbnail rounded mx-auto'

                            );
                            ?>
                            <a href="<?php echo the_permalink(); ?>">
                            <?php echo get_the_post_thumbnail($id,'large',$attr); ?>
                            </a>   
                            
                        <?php endif; ?> 
                            <div class=" mt-2">
                                <?php the_excerpt(); ?>
                           </div> 
                    </div>
                        
                <!--  -->
            <!--  -->


