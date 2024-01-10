<?php snippet('nav'); ?>

<div class="psychozone_harmonisering">

    <h1 class="psychozone_harmonisering__title"><?= $page->pageTitle() ?></h1>
    <div class="psychozone_harmonisering__buttons">
        <a href="voetreflexologie" class="psychozone_harmonisering__buttons__button"><?= $page->firstButton() ?></a>
        <a href="vertebraal-correctie" class="psychozone_harmonisering__buttons__button"><?= $page->secondButton() ?></a>
        <a href="psychozone-harmonisering" class="psychozone_harmonisering__buttons__active_button"><?= $page->thirdButton() ?> </a>
    </div>
    <div class="psychozone_harmonisering__container">
        <div class="psychozone_harmonisering__images">

            <div class="psychozone_harmonisering__images__img3">

                <h2 class="service_card__title">Psychozone Harmonisering</h2>
                <div class="service_card__info">
                    <iconify-icon class="service_card__info__icon" icon="simple-line-icons:check" style="color:#BF4D1B;" width="30" height="30"></iconify-icon>
                    <p class="service_card__info__text">Combinatie van reflexologie en acupressuur</p>
                </div>
                <div class="service_card__info">
                    <iconify-icon class="service_card__info__icon" icon="simple-line-icons:check" style="color:#BF4D1B;" width="30" height="30"></iconify-icon>
                    <p class="service_card__info__text">Heilzaam bij diverse psychische en emotionele problemen</p>
                </div>
                <div class="service_card__info">
                    <iconify-icon class="service_card__info__icon" icon="simple-line-icons:check" style="color:#BF4D1B;" width="30" height="30"></iconify-icon>
                    <p class="service_card__info__text">Relaxerend en ontgiftend</p>
                </div>
                <div class="service_card__info">
                    <iconify-icon class="service_card__info__icon" icon="simple-line-icons:check" style="color:#BF4D1B;" width="30" height="30"></iconify-icon>
                    <p class="service_card__info__text">Zelftherapie mogelijk dankzij acupressuurpunten</p>
                </div>

            </div>

            <img class="psychozone_harmonisering__images__img2" src="<?= $page->img()->toFile()->url() ?>" alt="">
        </div>


        <div class="psychozone_harmonisering__content">
            <h2 class="psychozone_harmonisering__subtitle"><?= $page->contentTitle() ?></h2>
            <div class="psychozone_harmonisering__line"></div>

            <?php foreach ($page->contentText()->toStructure() as $paragraf) : ?>
                <p><?= $paragraf->text() ?></p>
            <?php endforeach ?>

            <p>

            </p>
            <p>

            </p>
            <p>

            </p>

            <a href="./contact.php"><button class="psychozone_harmonisering__cta_button"><?= $page->contentButton() ?></button></a>
        </div>
    </div>

    <div class="service_card">
        <h2 class="service_card__title">Psychozone Harmonisering</h2>
        <div class="service_card__info">
            <iconify-icon class="service_card__info__icon" icon="simple-line-icons:check" style="color:#BF4D1B;" width="30" height="30"></iconify-icon>
            <p class="service_card__info__text">Combinatie van reflexologie en acupressuur</p>
        </div>
        <div class="service_card__info">
            <iconify-icon class="service_card__info__icon" icon="simple-line-icons:check" style="color:#BF4D1B;" width="30" height="30"></iconify-icon>
            <p class="service_card__info__text">Heilzaam bij diverse psychische en emotionele problemen</p>
        </div>
        <div class="service_card__info">
            <iconify-icon class="service_card__info__icon" icon="simple-line-icons:check" style="color:#BF4D1B;" width="30" height="30"></iconify-icon>
            <p class="service_card__info__text">Relaxerend en ontgiftend</p>
        </div>
        <div class="service_card__info">
            <iconify-icon class="service_card__info__icon" icon="simple-line-icons:check" style="color:#BF4D1B;" width="30" height="30"></iconify-icon>
            <p class="service_card__info__text">Zelftherapie mogelijk dankzij acupressuurpunten</p>
        </div>
    </div>
</div>
<?php snippet('footer'); ?>