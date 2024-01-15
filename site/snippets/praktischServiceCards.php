<div class="praktisch__text">
    <?php foreach ($page->praktischText()->toStructure() as $paragraf) : ?>
        <p><?= $paragraf->text() ?></p>
    <?php endforeach ?>

</div>

<div class="praktisch_service_cards">

    <?php foreach ($page->serviceCard()->toStructure() as $item) : ?>
        <div class="service_card">

            <h2 class="service_card__title"><?= $item->title() ?></h2>
            <h3 class="service_card__subtitle"><?= $item->subtitle() ?></h3>
            <div class="service_card__info">
                <iconify-icon class="service_card__info__icon" icon="simple-line-icons:check" style="color:#BF4D1B;" width="30" height="30"></iconify-icon>
                <p class="service_card__info__text"><?= $item->text1() ?></p>
            </div>
            <div class="service_card__info">
                <iconify-icon class="service_card__info__icon" icon="simple-line-icons:check" style="color:#BF4D1B;" width="30" height="30"></iconify-icon>
                <p class="service_card__info__text"><?= $item->text2() ?></p>
            </div>
            <div class="service_card__info">
                <iconify-icon class="service_card__info__icon" icon="simple-line-icons:check" style="color:#BF4D1B;" width="30" height="30"></iconify-icon>
                <p class="service_card__info__text"><?= $item->text3() ?></p>
            </div>
            <div class="service_card__info">
                <iconify-icon class="service_card__info__icon" icon="simple-line-icons:check" style="color:#BF4D1B;" width="30" height="30"></iconify-icon>
                <p class="service_card__info__text"><?= $item->text4() ?></p>
            </div>
            <a href="<?= $item->buttonUrl() ?>"><button class="service_card__button"><?= $item->button() ?></button></a>

        </div>
    <?php endforeach ?>
</div>