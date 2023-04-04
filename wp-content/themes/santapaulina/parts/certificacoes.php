<section id="certificacoes">
    <div class="container">
        <div class="row text-center">
            <div class="col-xs-12 col-md-12">
                <h2>Certificações</h2>
            </div>
            <div id="carouselCertificacoes" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                <?php
                    $certificacoes = get_field('certificacoes', 'options');
                    $i = 0;
                    if (!empty($certificacoes)) {
                        foreach ($certificacoes as $key) {
                            $active = '';
                            if ($i == 1) {
                                $active = 'active';    
                            }
                            echo '
                            <div class="carousel-item '.$active.'">
                                <div class="d-flex justify-content-center">
                                    <img class="d-block img-fluid" src="'.$key['image_url'].'">
                                </div>
                            </div>    
                            ';
                            $i++;
                        }
                    }
                    ?>
                    
                </div>
                <a class="carousel-control-prev" href="#carouselCertificacoes" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only"></span>
                </a>
                <a class="carousel-control-next" href="#carouselCertificacoes" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only"></span>
                </a>
            </div>
            
        </div>
    </div>
</section>
