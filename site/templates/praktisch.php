<?php snippet('nav'); ?>


<div class="praktisch_cta" style="background-image: url(<?= $page->ctaImg()->toFile()->url() ?>);">
    <h1 class="praktisch_cta__title"><?= $page->ctaTitle() ?></h1>
    <a href="contact" class="praktisch_cta__button"><?= $page->ctaButton() ?></a>
</div>

<div class="praktisch__text">
    <?php foreach ($page->praktischText()->toStructure() as $paragraf) : ?>
        <p><?= $paragraf->text() ?></p>
    <?php endforeach ?>

</div>

<div class="praktisch_service_cards">

    <div class="service_card">
        <h2 class="service_card__title">Voetreflexologie preventief en curatief</h2>
        <h3 class="service_card__subtitle">Wat kan je verwachten?</h3>
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
        <a href="./voetreflexologie.php"><button class="service_card__button">ONTDEK MEER</button></a>

    </div>

    <div class="service_card">
        <h2 class="service_card__title">Energetische Vertebraal Correctie</h2>
        <h3 class="service_card__subtitle">Wat kan je verwachten?</h3>
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
        <a href="./vertebraal-correctie.php"><button class="service_card__button">ONTDEK MEER</button></a>

    </div>

    <div class="service_card">
        <h2 class="service_card__title">Psychozone Harmonisering</h2>
        <h3 class="service_card__subtitle">Wat kan je verwachten?</h3>
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
        <a href="./psychozone-harmonisering.php"><button class="service_card__button">ONTDEK MEER</button></a>

    </div>
</div>
<div class="praktisch_bonnen_container">
    <div class="praktisch_bonnen">
        <h2 class="praktisch_bonnen__title">
            <?= $page->cadeaubonTitle() ?>
        </h2>
        <p class="praktisch_bonnen__text">
            <?= $page->cadeaubontext() ?>
        </p>
        <p class="praktisch_bonnen__highlight_text">
            <?= $page->cadeaubonHighlightText() ?>
        </p>
        <form action="https://formsubmit.co/karel.scheers@telenet.be" method="post">
            <div class="form_container">

                <div class="praktisch_bonnen__form">
                    <p class="praktisch_bonnen__form__text">Naam</p>
                    <input type="text" class="praktisch_bonnen__form__field " name="name" required placeholder="Johan Dirckx">
                </div>
                <div class="praktisch_bonnen__form">
                    <p class="praktisch_bonnen__form__text">E-mailadres</p>
                    <input type="email" class="praktisch_bonnen__form__field" name="email" required placeholder="johan.dirckx@gmail.com">
                </div>
                <div class="praktisch_bonnen__form">
                    <p class="praktisch_bonnen__form__text">Aantal</p>
                    <input type="text" class="praktisch_bonnen__form__field" name="aantal" required placeholder="Aantal">
                </div>
            </div>
            <input type="hidden" name="_captcha" value="false">
            <button class="praktisch_bonnen__button"><?= $page->cadeaubonButton() ?></button>


        </form>
    </div>
    <div class="praktisch_bonnen__img_container">
        <img src="./resources/images/praktisch_bon.png" alt="" class="praktisch_bonnen__img_container__img">
    </div>
</div>

<?php snippet('footer'); ?>