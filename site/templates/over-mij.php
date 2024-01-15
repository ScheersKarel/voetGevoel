<?php snippet('nav'); ?>

<div class="over_mij">

    <div class="over_mij__content">

        <h1 class="over_mij__title"><?= $page->aboutTitle() ?></h1>

        <div class="over_mij__text">
            <?php foreach ($page->aboutText()->toStructure() as $paragraf) : ?>
                <p><?= $paragraf->text() ?></p>
            <?php endforeach ?>
        </div>

    </div>

    <img class="over_mij__img" src="<?= $page->aboutImg()->toFile()->url() ?>" alt="">
</div>

<?php snippet('footer'); ?>