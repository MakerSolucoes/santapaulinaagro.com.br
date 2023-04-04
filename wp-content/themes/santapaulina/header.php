<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title><?php echo get_bloginfo('name'); ?></title>
    </head>
<?php wp_head(); ?>
<header>
    <div class="container-fluid">
        <div class="row text-center">
            <div class="col-xs-12 col-md-12">
                <nav class="navbar stycky-top navbar-dark navbar-expand-lg">
                    <div class="container-fluid justify-content-center">
                        <a class="navbar-brand" href="#"><img src="<?php echo wp_get_attachment_url(get_theme_mod('custom_logo')); ?>" alt="" class="img-fluid"></a>

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">

                                <?php
                                $home = get_home_url();
                                $header = get_field('menus', 'options');
                                foreach ($header as $key) {
                                    echo '
                                    <li class="nav-item">
                                        <a class="nav-link" aria-current="page" href="'.$home . $key['link'] . '">' . $key['text'] . '</a>
                                    </li>
                                    ';
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>

<body>
