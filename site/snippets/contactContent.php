<div class="contact__container__content">
    <h2 class="contact__container__content__title">
        <?= $page->contactSubtitle() ?>
    </h2>
    <p class="contact__container__content__text">
        <?= $page->contactText() ?>
    </p>

    <a href="tel:<?= $page->number() ?>">
        <div class="contact__container__content__info">
            <iconify-icon class="contact__container__content__info__icon" icon="iconoir:phone" style="color: white;" width="20" height="20"></iconify-icon>
            <p class="contact__container__content__info__text"><?= $page->number() ?></p>
        </div>
    </a>

    <a href="mailto:<?= $page->email() ?>">
        <div class="contact__container__content__info">
            <iconify-icon class="contact__container__content__info__icon" icon="material-symbols:mail-outline" style="color: white;" width="20" height="20"></iconify-icon>
            <p class="contact__container__content__info__text"><?= $page->email() ?></p>
        </div>
    </a>

    <a href="https://www.google.com/maps/place/Herenboslaan+12A,+2500+Lier/@51.0950966,4.6052671,17z/data=!3m1!4b1!4m6!3m5!1s0x47c3fd2e941050e1:0x6f4db5f2aa4e8abc!8m2!3d51.0950933!4d4.607842!16s%2Fg%2F11krgxxqq6?entry=ttu">
        <div class="contact__container__content__info">
            <iconify-icon class="contact__container__content__info__icon" icon="carbon:location" style="color: white;" width="20" height="20"></iconify-icon>
            <p class="contact__container__content__info__text"><?= $page->address() ?></p>
        </div>
    </a>


    <div class="contact__container__content__line"></div>

    <a href="<?= $page->intagramUrl() ?>">
        <div class="contact__container__content__info">
            <iconify-icon class="contact__container__content__info__icon" icon="streamline:instagram-solid" style="color: white;" width="20" height="20"></iconify-icon>
            <p class="contact__container__content__info__text"><?= $page->instagram() ?></p>
        </div>
    </a>

    <a href="<?= $page->facebookUrl() ?>">
        <div class="contact__container__content__info">
            <iconify-icon class="contact__container__content__info__icon" icon="ri:facebook-fill" style="color: white;" width="20" height="20"></iconify-icon>
            <p class="contact__container__content__info__text"><?= $page->facebook() ?></p>
        </div>
    </a>





</div>