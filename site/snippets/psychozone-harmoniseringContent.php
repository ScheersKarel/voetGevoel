<div class="psychozone_harmonisering__content">
    <h2 class="psychozone_harmonisering__subtitle"><?= $page->contentTitle() ?></h2>
    <div class="psychozone_harmonisering__line"></div>

    <?php foreach ($page->contentText()->toStructure() as $paragraf) : ?>
        <p><?= $paragraf->text() ?></p>
    <?php endforeach ?>
    <a href="./contact.php"><button class="psychozone_harmonisering__cta_button"><?= $page->contentButton() ?></button></a>
</div>