<?php /* Template Name: Template La vie au foyer */ ?>

<?php get_header(); ?>
    <div class="life">
        <nav class="nav">
            <h2>Navigation inter-maisons</h2>
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
    </div>

<?php get_footer(); ?>