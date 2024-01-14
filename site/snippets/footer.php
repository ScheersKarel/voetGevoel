<div class="footer">
    <hr class="footer__line">
    <div class="footer__container">

        <div class="footer__container__item">
            <h2 class="footer__container__item__title"><?= $site->footerCard1Title() ?> </h2>
            <p class="footer__container__item__text"><?= $site->footerCard1Text() ?></p>
            <a href="<?= $site->footerCard1ButtonUrl() ?>"><button class="footer__container__item__button"><?= $site->footerCard1Button() ?></button></a>

            <div class="footer__container__item__socials">
                <a class="footer__container__item__socials__button" href="<?= $site->footerCard1icon1Url() ?>">
                    <iconify-icon icon="carbon:location" style="color: white;" width="20" height="20"></iconify-icon>
                    <span class="tooltip"><?= $site->footerCard1icon1() ?></span>
                </a>
                <a class="footer__container__item__socials__button" href="mailto:<?= $site->footerCard1icon2() ?>">
                    <iconify-icon icon="material-symbols:mail-outline" style="color: white;" width="20" height="20"></iconify-icon>
                    <span class="tooltip"><?= $site->footerCard1icon2() ?></span>
                </a>
                <a class="footer__container__item__socials__button" href="tel:<?= $site->footerCard1icon3() ?>">
                    <iconify-icon icon="iconoir:phone" style="color: white;" width="20" height="20"></iconify-icon>
                    <span class="tooltip"><?= $site->footerCard1icon3() ?></span>
                </a>
            </div>
        </div>

        <div class="footer__container__item">
            <h2 class="footer__container__item__title"><?= $site->footerCard2Title() ?> </h2>
            <p class="footer__container__item__text"><?= $site->footerCard2text() ?></p>
            <a href="<?= $site->footerCard2ButtonUrl() ?>"><button class="footer__container__item__button"><?= $site->footerCard2Button() ?></button></a>

            <div class="footer__container__item__socials">
                <a class="footer__container__item__socials__button" href="<?= $site->footerCard2icon1Url() ?>">
                    <iconify-icon icon="streamline:instagram-solid" style="color: white;" width="20" height="20"></iconify-icon>
                    <span class="tooltip"><?= $site->footerCard2icon1() ?></span>
                </a>

                <a class="footer__container__item__socials__button" href="<?= $site->footerCard2icon2Url() ?>">
                    <iconify-icon icon="ri:facebook-fill" style="color: white;" width="20" height="20"></iconify-icon>
                    <span class="tooltip"><?= $site->footerCard2icon2() ?></span>
                </a>

            </div>
        </div>

        <img class="footer__container__img" src="<?= $site->footerImg()->toFile()->url() ?>" alt="">

    </div>

    <div class="footer__rights">
        <p class="footer__rights__text">© VOET GEVOEL</p>
        <p class="footer__rights__text"><a href="#">PRIVACY</a> | <a href="#">TERMS</a> | <a href="#">SITE CREDIT</a></p>
    </div>
</div>
</body>

</html>
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
<?= js('assets/js/main.min.js') ?>