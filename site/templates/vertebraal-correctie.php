<?php snippet('nav'); ?>

<div class="vertebraal_correctie">

    <h1 class="vertebraal_correctie__title"><?= $page->pageTitle() ?></h1>
    <div class="vertebraal_correctie__buttons">
        <a href="voetreflexologie" class="vertebraal_correctie__buttons__button"><?= $page->firstButton() ?></a>
        <a href="vertebraal-correctie" class="vertebraal_correctie__buttons__active_button"><?= $page->secondButton() ?></a>
        <a href="psychozone-harmonisering" class="vertebraal_correctie__buttons__button"><?= $page->thirdButton() ?> </a>
    </div>
    <div class="vertebraal_correctie__container">
        <div class="vertebraal_correctie__images">
            <div class="vertebraal_correctie__images__img3">

                <h2 class="service_card__title">Energetische vertebraal correctie</h2>

                <div class="service_card__info">
                    <iconify-icon class="service_card__info__icon" icon="simple-line-icons:check" style="color:#BF4D1B;" width="30" height="30"></iconify-icon>
                    <p class="service_card__info__text">Zeer heilzaam bij rugklachten</p>
                </div>
                <div class="service_card__info">
                    <iconify-icon class="service_card__info__icon" icon="simple-line-icons:check" style="color:#BF4D1B;" width="30" height="30"></iconify-icon>
                    <p class="service_card__info__text">Zachte en aangename behandeling</p>
                </div>
                <div class="service_card__info">
                    <iconify-icon class="service_card__info__icon" icon="simple-line-icons:check" style="color:#BF4D1B;" width="30" height="30"></iconify-icon>
                    <p class="service_card__info__text">Snel zichtbare en voelbare resultaten</p>
                </div>
                <div class="service_card__info">
                    <iconify-icon class="service_card__info__icon" icon="simple-line-icons:check" style="color:#BF4D1B;" width="30" height="30"></iconify-icon>
                    <p class="service_card__info__text">Inzetbaar bij diverse problemen of pijnen</p>
                </div>
            </div>
            <img class="vertebraal_correctie__images__img2" src="<?= $page->img()->toFile()->url() ?>" alt="">
        </div>


        <div class="vertebraal_correctie__content">
            <h2 class="vertebraal_correctie__subtitle"><?= $page->contentTitle() ?></h2>
            <div class="vertebraal_correctie__line"></div>
            <?php foreach ($page->contentText()->toStructure() as $paragraf) : ?>
                <p><?= $paragraf->text() ?></p>
            <?php endforeach ?>

            <a href="../contact"> <button class="vertebraal_correctie__cta_button"><?= $page->contentButton() ?></button></a>
        </div>
    </div>

    <div class="service_card">
        <h2 class="service_card__title">Energetische vertebraal correctie</h2>
        <div class="service_card__info">
            <iconify-icon class="service_card__info__icon" icon="simple-line-icons:check" style="color:#BF4D1B;" width="30" height="30"></iconify-icon>
            <p class="service_card__info__text">Zeer heilzaam bij rugklachten</p>
        </div>
        <div class="service_card__info">
            <iconify-icon class="service_card__info__icon" icon="simple-line-icons:check" style="color:#BF4D1B;" width="30" height="30"></iconify-icon>
            <p class="service_card__info__text">Zachte en aangename behandeling</p>
        </div>
        <div class="service_card__info">
            <iconify-icon class="service_card__info__icon" icon="simple-line-icons:check" style="color:#BF4D1B;" width="30" height="30"></iconify-icon>
            <p class="service_card__info__text">Snel zichtbare en voelbare resultaten</p>
        </div>
        <div class="service_card__info">
            <iconify-icon class="service_card__info__icon" icon="simple-line-icons:check" style="color:#BF4D1B;" width="30" height="30"></iconify-icon>
            <p class="service_card__info__text">Inzetbaar bij diverse problemen of pijnen</p>
        </div>
    </div>
</div>
<?php snippet('footer'); ?>