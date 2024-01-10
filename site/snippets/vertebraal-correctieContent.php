<div class="vertebraal_correctie__content">
    <h2 class="vertebraal_correctie__subtitle"><?= $page->contentTitle() ?></h2>
    <div class="vertebraal_correctie__line"></div>
    <?php foreach ($page->contentText()->toStructure() as $paragraf) : ?>
        <p><?= $paragraf->text() ?></p>
    <?php endforeach ?>

    <a href="../contact"> <button class="vertebraal_correctie__cta_button"><?= $page->contentButton() ?></button></a>
</div>