<section id="newsletter">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-md-6 col-lg-6">
                <h2>Se inscreva para receber nossas novidades</h2>
            </div>
            <div class="col-xs-12 col-md-6 col-lg-6">
                <?php
                $formID = get_field('form_id', 'options');
                echo do_shortcode('[contact-form-7 id="'.$formID.'" title="Newsletter"]')
                ?>
            </div>
        </div>
    </div>
</section>
