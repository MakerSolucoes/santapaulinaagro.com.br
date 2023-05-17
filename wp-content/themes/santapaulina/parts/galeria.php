<section id="galeria">
    <div class="container">
        <div class="row text-center">
            <div class="col-xs-12 col-md-12">
                <h2>Galeria</h2>
            </div>
            <div id="carouselGaleria" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                <?php
                    $galeria = get_field('galeria', 'options');
                    $totalImagens = count($galeria);
                    $i = 0;
                    $j = 0;
                    $active = 'active';
                    while ($i < $totalImagens) {
                        echo '<div class="carousel-item '.$active.'">';
                        echo '<div class="row justify-content-center">';
                        for ($k = 0; $k < 3 && $i < $totalImagens; $k++) {
                            echo '<div class="col-md-3">';
                            echo '<img class="d-block img-fluid" src="'.$galeria[$i].'">';
                            echo '</div>';
                            $i++;
                        }
                        echo '</div>';
                        echo '</div>';
                        $active = '';
                    }
                ?>
                </div>
                <a class="carousel-control-prev" href="#carouselGaleria" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselGaleria" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</section>
