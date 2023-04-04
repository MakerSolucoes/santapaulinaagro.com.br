<section id="depoimentos" style="background-image:url(<?php echo get_field('depoimento_background', 'options'); ?>)">
    <div class="container">
        <div class="row text-center">
            <div id="carouselDepoimentos" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                <?php




                        $args = array(
                            'post_type' => 'depoimentos',
                            'status' => 'publish',
                        );
                        $the_query = new WP_Query( $args );
                        $i = 0;
                        // The Loop
                        if ( $the_query->have_posts() ) {
                            while ( $the_query->have_posts() ) {
                                $the_query->the_post();
                                $active = '';
                                if ($i == 0) {
                                    $active = 'active';    
                                }
                                echo '
                                <div class="carousel-item '.$active.'">
                                    <div class="d-flex justify-content-center">
                                        <div class="content">
                                            <img src="'.get_the_post_thumbnail_url().'" class="img-fluid">
                                            <div class="text">'.get_the_content().'</div>
                                            <div class="name">'.get_the_title().'</div>
                                        </div>
                                    </div>
                                </div>';
                                $i++;
                                
                                // $size = 'col-xs-3 col-md-3 col-lg-3';
                                // if ($i == 1 || $i == 4 ) {
                                //     $size = 'col-xs-5 col-md-5 col-lg-5';
                                // }
                                // $tags = get_the_tags();
                                // $content = '<a target="_blank" href="'.get_permalink().'" class="'.$size.' image-control"  style="background-image: url('.get_the_post_thumbnail_url().');">';
                                // if (!empty($tags)) {
                                //     $content .= '<div class="tags">';

                                //  foreach ($tags as $key) {
                                //      $content .= '<span>'.$key->name.'</span>';
                                //  }
                                //  $content .= '</div>';

                                // }
                                // $content .= get_the_title().'...';
                                // $content .= '</a>';
                                // echo $content;
                                // $i++;
                            }
                        } else {
                            // no posts found
                        }
                    ?>
                    
                </div>
                <a class="carousel-control-prev" href="#carouselDepoimentos" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only"></span>
                </a>
                <a class="carousel-control-next" href="#carouselDepoimentos" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only"></span>
                </a>
            </div>
            
        </div>
    </div>
</section>
