<?php wp_footer(); ?>
<footer>
    <section id="footer">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <?php the_custom_logo(); ?>
                </div>
                <div class="col-xs-12 col-md-6 social-links">
                    <?php
                    $social = get_field('social_links', 'options');
                    foreach ($social as $key) {
                        echo '<div>';
                        echo '<i class="fa '.$key['font_awesome_icon_class'].'"></i>';
                        echo '<a target="_blank" href="'.$key['link'].'" ">'.$key['texto'].'</a>';
                        echo '</div>';

                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/easy-pie-chart/2.1.6/jquery.easypiechart.min.js" integrity="sha512-DHNepbIus9t4e6YoMBSJLwl+nnm0tIwMBonsQQ+W9NKN6gVVVbomJs9Ii3mQ+HzGZiU5FyJLdnAz9a63ZgZvTQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</footer>
