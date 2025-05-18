<?php $headline = get_sub_field('headline'); ?>
<?php $description = get_sub_field('description'); ?>
<?php $experiences = get_sub_field('experiences'); ?>

<section class="cards__container">
    <?php if (!empty($headline)): ?>
        <h2 class="section_container_title"><?= esc_html($headline); ?></h2>
    <?php endif; ?>

    <?php if (!empty($description)): ?>
        <div class="section_container_description">
            <?= $description; ?>
        </div>
    <?php endif; ?>

    <div class="cards__flex">
        <?php foreach ($experiences as $ex): ?>
            <article class="card">
                <h3 class="div_project_h2"><?= esc_html($ex['title']) ?></h3>

                <?php if (!empty($ex['description'])): ?>
                    <div>
                        <?= $ex['description']; ?>
                    </div>
                <?php endif; ?>

                <div class="card_img">
                    <?= responsive_image($ex['image'], ['classes' => 'card__img']) ?>
                </div>

                <?php if (!empty($ex['cta'])): ?>
                    <a href="<?= esc_url($ex['cta']['url']) ?>"
                       class="card__cta"
                       target="<?= esc_attr($ex['cta']['target']) ?>">
                        <?= esc_html($ex['cta']['title']) ?>
                    </a>
                <?php endif; ?>
            </article>
        <?php endforeach; ?>
    </div>
</section>
