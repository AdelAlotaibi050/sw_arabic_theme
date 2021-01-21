<?php get_header();?>
            <div class="heading">
            </div>
            <div class="row">
                 <div class="col-md-10 offset-md-2">
                 <h1 class="text-white not-found">:| لقد ضللت الطريق ياصاحبي لايوجد شيء هنا </h1>
                 </div>
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
        </div>

    </div>
 <?php get_footer(); ?>