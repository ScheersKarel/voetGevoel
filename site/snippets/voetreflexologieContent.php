<div class="voetreflexologie__content">
    <h2 class="voetreflexologie__subtitle"><?= $page->contentTitle() ?></h2>
    <div class="voetreflexologie__line"></div>
    <?php foreach ($page->contentText()->toStructure() as $paragraf) : ?>
        <p><?= $paragraf->text() ?></p>
    <?php endforeach ?>

    <a href="../contact"><button class="voetreflexologie__cta_button"><?= $page->contentButton() ?></button></a>
</div>