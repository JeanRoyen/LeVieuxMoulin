<?php /* Template Name: Template La vie au foyer */ ?>

<?php get_header(); ?>
    <div class="life">
        <nav class="nav">
            <h2 class="sro">Navigation inter-maisons</h2>
            <ul class="nav__container">
                <?php
                $links = dw_get_navigation_links('middle_life');
                foreach ($links as $index => $link):
                    $is_last = $index === count($links) - 1; // détecte le dernier lien
                    $extra_class = $is_last ? 'nav__item--right' : '';
                    ?>
                    <li class="nav__item nav__item--<?= $link->icon; ?> <?= $extra_class ?>">
                        <a href="<?= $link->href; ?>" class="nav__link"><?= $link->label; ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </nav>
        <?php include('templates/content/flexible.php') ?>
        <section class="where">
            <h2>Où sommes-nous ? </h2>
            <div class="where__map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2571.201755894864!2d5.674967076640503!3d49.876237628541865!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47eaa07e8fd83f07%3A0x366afd87048196be!2sLe%20Vieux%20Moulin!5e0!3m2!1sfr!2sbe!4v1747575977493!5m2!1sfr!2sbe"
                        width="1180" height="400" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>
    </div>

<?php get_footer(); ?>