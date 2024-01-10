<?php snippet('nav'); ?>

<div class="voetreflexologie">

    <h1 class="voetreflexologie__title"><?= $page->pageTitle() ?></h1>
    <div class="voetreflexologie__buttons">
        <a href="<?= $page->url() ?>" class="voetreflexologie__buttons__active_button"><?= $page->firstButton() ?></a>
        <a href="vertebraal-correctie" class="voetreflexologie__buttons__button"><?= $page->secondButton() ?></a>
        <a href="psychozone-harmonisering" class="voetreflexologie__buttons__button"><?= $page->thirdButton() ?> </a>
    </div>

    <div class="voetreflexologie__container">
        <div class="voetreflexologie__images">
            <div class="voetreflexologie__images__img3">
                <h2 class="service_card__title">Voetreflexologie</h2>
                <div class="service_card__info">
                    <iconify-icon class="service_card__info__icon" icon="simple-line-icons:check" style="color:#BF4D1B;" width="30" height="30"></iconify-icon>
                    <p class="service_card__info__text">Stimuleert herstellend vermogen van je lichaam</p>
                </div>
                <div class="service_card__info">
                    <iconify-icon class="service_card__info__icon" icon="simple-line-icons:check" style="color:#BF4D1B;" width="30" height="30"></iconify-icon>
                    <p class="service_card__info__text">Heilzaam voor organen en stelsels</p>
                </div>
                <div class="service_card__info">
                    <iconify-icon class="service_card__info__icon" icon="simple-line-icons:check" style="color:#BF4D1B;" width="30" height="30"></iconify-icon>
                    <p class="service_card__info__text">Relaxerend en ontspannend</p>
                </div>
                <div class="service_card__info">
                    <iconify-icon class="service_card__info__icon" icon="simple-line-icons:check" style="color:#BF4D1B;" width="30" height="30"></iconify-icon>
                    <p class="service_card__info__text">Ontgiftende werking</p>
                </div>
            </div>
            <img class="voetreflexologie__images__img2" src="<?= $page->img()->toFile()->url() ?>" alt="">


        </div>


        <div class="voetreflexologie__content">
            <h2 class="voetreflexologie__subtitle"><?= $page->contentTitle() ?></h2>
            <div class="voetreflexologie__line"></div>
            <?php foreach ($page->contentText()->toStructure() as $paragraf) : ?>
                <p><?= $paragraf->text() ?></p>
            <?php endforeach ?>

            <a href="../contact"><button class="voetreflexologie__cta_button"><?= $page->contentButton() ?></button></a>
        </div>
    </div>

    <div class="service_card">
        <h2 class="service_card__title">Voetreflexologie</h2>
        <div class="service_card__info">
            <iconify-icon class="service_card__info__icon" icon="simple-line-icons:check" style="color:#BF4D1B;" width="30" height="30"></iconify-icon>
            <p class="service_card__info__text">Stimuleert herstellend vermogen van je lichaam</p>
        </div>
        <div class="service_card__info">
            <iconify-icon class="service_card__info__icon" icon="simple-line-icons:check" style="color:#BF4D1B;" width="30" height="30"></iconify-icon>
            <p class="service_card__info__text">Heilzaam voor organen en stelsels</p>
        </div>
        <div class="service_card__info">
            <iconify-icon class="service_card__info__icon" icon="simple-line-icons:check" style="color:#BF4D1B;" width="30" height="30"></iconify-icon>
            <p class="service_card__info__text">Relaxerend en ontspannend</p>
        </div>
        <div class="service_card__info">
            <iconify-icon class="service_card__info__icon" icon="simple-line-icons:check" style="color:#BF4D1B;" width="30" height="30"></iconify-icon>
            <p class="service_card__info__text">Ontgiftende werking</p>
        </div>
    </div>
</div>

<?php snippet('footer'); ?>