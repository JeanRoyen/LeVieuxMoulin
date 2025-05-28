<?php $headline = get_sub_field('headline') ?>
<?php $text = get_sub_field('text') ?>
<?php $link = get_sub_field('link') ?>
<?php $class = get_sub_field('class') ?>

<div class="div_container_section">
    <section class="section_container-text <?= $class !== '' ? $class : '' ?>">
        <?php if ($headline !== '' && isset($headline)): ?>
            <h2 class="div_project_h2">
                <?= $headline ?>
            </h2>
        <?php endif; ?>
        <div class="div_project">
            <?php if ($text !== '' && isset($text)): ?>
                <div class="div_project_text">
                    <?= $text ?>
                </div>
            <?php endif; ?>
            <?php if (!empty($link)): ?>
                <a href="<?= $link['url'] ?>" target="<?= $link['target'] ?>"
                   title="<?= $link['title'] ?>"><?= $link['title'] ?></a>
            <?php endif; ?>
        </div>
    </section>
</div>