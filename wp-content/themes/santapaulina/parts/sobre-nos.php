<section id="sobre-nos">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-6 col-lg-6">
                <img src="<?php the_field('sobre-nos-imagem', 'options');?>" alt="" class="img-fluid">
            </div>
            <div class="col-xs-12 col-md-6 col-lg-6">
               <div class="content">
                <h2>Sobre Nós</h2>
                <?php the_field('sobre-nos-texto', 'options');?>
               </div>
               <div class="conters">
               <?php
                $counters = get_field('sobre-nos-counters', 'options');
                foreach ($counters as $key) {
                    echo '
                    <div>
                    <p class="chart" data-percent="'.$key['preenchido'].'">
                        <span class="percent">'.$key['numero'].'</span>
                    </p>
                    <span>'.$key['descricao'].'</span>
                    </div>
                    ';
                }
               ?>
               </div>
            </div>
        </div>
    </div>
</section>
