<?php get_header(); ?>


<div class="row">

     <?php
      if(have_posts()) {
        while(have_posts()) {
            the_post();
         ?>


<div class="row">
                <div class="col-md-12">
                    <div class="d-flex justify-content-center">
                        <?php the_post_thumbnail('full',array('class' => 'body-img'));  ?>
                    </div>
                    <div class="body">
                        <h1 class="text-center"><?php the_title(); ?></h1>
                        <p class="text-right">   <?php the_date(); ?> <i class="fas fa-clock"></i> </p>
                        <p class="text-right">
                           <?php 
                            the_content();
                            ?>
                        </p>

                    </div>
                    <div class="sharethis-inline-share-buttons"></div>
                </div>
                
              </div>
        <?php } ?> 
        <?php } ?> 
</div>
</div>
</section>

</div>
<?php get_footer(); ?>