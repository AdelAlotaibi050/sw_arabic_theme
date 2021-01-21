  <?php get_header();?>
            <div class="heading">
            </div>
            <div class="row">

                 <?php
                  if(have_posts()) {
                    while(have_posts()) {
                        the_post();
                     ?>
                     <div class="col-md-6 col-lg-4">
                    <div class="card border-0 transform-on-hover">
                        <a href=""><?php the_post_thumbnail('thumbnails',array('class' => 'card-img-top'));  ?></a>
                        <div class="card-body">
                            <h6> <?php the_title(); ?></h6>
                            <p class="text-muted card-text">
                            <?php 
                             the_excerpt();
                             ?>

                            </p>
                        </div>
                        <a type="button" href="<?php the_permalink(); ?>" class="btn read mb-2">للمزيد</a>
                    </div>
                </div>
                    <?php } ?> 
                    <?php } ?> 
            </div>
        </div>
    </section>
    <div class="row">
        <div class="col-lg-4 offset-lg-4 col-md-4 offset-md-4  col-sm-6 offset-sm-3">
            <?php the_posts_pagination( 
                array('prev_text' => '<i class="fa fa-arrow-left" aria-hidden="true"></i><span class="screen-reader-text">' . __( 'Previous Page', 'helpwp' ) . '</span>',
                      'next_text' => '<span class="screen-reader-text">' . __( 'Next Page', 'helpwp' ) . '</span><i class="fa fa-arrow-right" aria-hidden="true"></i>',
                      'screen_reader_text'=> '&nbsp;'
) );?>
            <!-- <button id="more" class="btn btn-block btn-light text-dark mb-5" >المزيد</button> -->
        </div>

    </div>
 <?php get_footer(); ?>