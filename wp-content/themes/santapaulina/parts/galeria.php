<section id="galeria">
    <div class="container">
        <div class="row text-center">
            <div class="col-xs-12 col-md-12">
                <h2>Galeria</h2>
                <div class="container d-flex">
                <?php
                    $galeria = get_field('galeria', 'options');
                    $i = 0;
                    if (!empty($galeria)) {
                        foreach ($galeria as $key) {
                            $active = '';
                            if ($i == 1) {
                                $active = 'active';    
                            }
                            echo '
                                <img class="d-block img-fluid" src="'.$key.'">
                            ';
                            $i++;
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
