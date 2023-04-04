<section id="dia-a-dia">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 d-flex justify-content-between align-items-center">
                <h2>Dia-a-dia</h2>
                <a href="/posts" target="_blank" class="btn btn-warning">
                    Ver mais
                </a>
            </div>
            <div class="col-xs-12">
                <div class="row">
                    <?php
                    $args = array(
                        'post_type' => 'post',
                        'status' => 'publish',
                        'post_per_page' => 6
                    );
                    $the_query = new WP_Query( $args );
                    $i = 0;
                    // The Loop
                    if ( $the_query->have_posts() ) {
                        while ( $the_query->have_posts() ) {
                            $the_query->the_post();
                            $post = get_post();
                            $size = 'col-xs-3 col-md-3 col-lg-3';
                            if ($i == 1 || $i == 4 ) {
                                $size = 'col-xs-5 col-md-5 col-lg-5';
                            }
                            $tags = get_the_tags();
                            
                            $content = '<a target="_blank" href="'.get_permalink().'" class="'.$size.' image-control"  style="background-image: url('.get_the_post_thumbnail_url($post->ID).');">';

                            if (!empty($tags)) {
                                $content .= '<div class="tags">';

                             foreach ($tags as $key) {
                                 $content .= '<span>'.$key->name.'</span>';
                             }
                             $content .= '</div>';

                            }
                            $content .= get_the_title().'...';
                            $content .= '</a>';
                            echo $content;
                            $i++;
                        }
                    } else {
                        // no posts found
                    }
                    ?>    
                </div>
            </div>
        </div>
    </div>
</section>
