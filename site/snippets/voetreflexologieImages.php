<div class="voetreflexologie__images">

    <div class="voetreflexologie__images__img3">

        <h2 class="service_card__title"><?= $page->serviceTitle() ?></h2>

        <div class="service_card__info">
            <iconify-icon class="service_card__info__icon" icon="simple-line-icons:check" style="color:#BF4D1B;" width="30" height="30"></iconify-icon>
            <p class="service_card__info__text"><?= $page->serviceText1() ?></p>
        </div>

        <div class="service_card__info">
            <iconify-icon class="service_card__info__icon" icon="simple-line-icons:check" style="color:#BF4D1B;" width="30" height="30"></iconify-icon>
            <p class="service_card__info__text"><?= $page->serviceText2() ?></p>
        </div>

        <div class="service_card__info">
            <iconify-icon class="service_card__info__icon" icon="simple-line-icons:check" style="color:#BF4D1B;" width="30" height="30"></iconify-icon>
            <p class="service_card__info__text"><?= $page->serviceText3() ?></p>
        </div>

        <div class="service_card__info">
            <iconify-icon class="service_card__info__icon" icon="simple-line-icons:check" style="color:#BF4D1B;" width="30" height="30"></iconify-icon>
            <p class="service_card__info__text"><?= $page->serviceText4() ?></p>
        </div>

    </div>

    <img class="voetreflexologie__images__img2" src="<?= $page->img()->toFile()->url() ?>" alt="">

</div>