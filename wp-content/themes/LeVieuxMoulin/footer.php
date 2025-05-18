
</main>
<footer>
    <?php wp_footer(); ?>
    <nav class="nav__bottom__container">
        <h2>Navigation</h2>
        <?php
        $links = dw_get_navigation_links('footer'); ?>

        <ul>
            <?php
            foreach ($links as $link): ?>
                <li><a class="nav__footer__items" href="<?= esc_url($link->href) ?>">
                        <?= esc_html($link->label) ?>
                    </a></li>

            <?php endforeach; ?>
        </ul>
    </nav>
    <section>
        <h2>Nous contacter</h2>
        <ul>
            <li>063 / 60.11.50</li>
            <li>srglevieuxmoulin@levm.be</li>
            <li>6637 Strainchamps (Fauvillers)</li>
            <li>Belgique</li>
        </ul>
    </section>
    <nav>
        <h2>Nos réseaux sociaux</h2>
        <?php
        $links = dw_get_navigation_links('footer_sm'); ?>

        <ul>
            <?php
            foreach ($links as $link): ?>
                <li><a class="nav__footer__items" href="<?= esc_url($link->href) ?>">
                        <?= esc_html($link->label) ?>
                    </a></li>

            <?php endforeach; ?>
    </nav>

</footer>
</body>
</html>
