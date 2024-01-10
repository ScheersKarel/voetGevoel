<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./resources/css/main.css">
</head>

<body>

    <div class="contact">

        <h1 class="contact__title">Contacteer Mij</h1>

        <div class="contact__container">

            <div class="contact__container__content">
                <h2 class="contact__container__content__title">
                    Graag meer informatie?
                </h2>
                <p class="contact__container__content__text">
                    Wilt u graag meer informatie over mijn werkwijze, mogelijkheden of tarieven? Neem gerust vrijblijvend contact op. Ik informeer u graag over wat ik voor u kan betekenen. U kan natuurlijk ook een afspraak maken via het formulier of telefonisch. <br><br>U kan mij bereiken op:
                </p>

                <a href="tel:0485604888">
                    <div class="contact__container__content__info">
                        <iconify-icon class="contact__container__content__info__icon" icon="iconoir:phone" style="color: white;" width="20" height="20"></iconify-icon>
                        <p class="contact__container__content__info__text">0485 60 48 88</p>
                    </div>
                </a>

                <a href="mailto:isabel.vandeneynde@hotmail.com">
                    <div class="contact__container__content__info">
                        <iconify-icon class="contact__container__content__info__icon" icon="material-symbols:mail-outline" style="color: white;" width="20" height="20"></iconify-icon>
                        <p class="contact__container__content__info__text">isabel.vandeneynde@hotmail.com</p>
                    </div>
                </a>

                <a href="https://www.google.com/maps/place/Herenboslaan+12A,+2500+Lier/@51.0950966,4.6052671,17z/data=!3m1!4b1!4m6!3m5!1s0x47c3fd2e941050e1:0x6f4db5f2aa4e8abc!8m2!3d51.0950933!4d4.607842!16s%2Fg%2F11krgxxqq6?entry=ttu">
                    <div class="contact__container__content__info">
                        <iconify-icon class="contact__container__content__info__icon" icon="carbon:location" style="color: white;" width="20" height="20"></iconify-icon>
                        <p class="contact__container__content__info__text">Herenboslaan 12A, 2500 Lier</p>
                    </div>
                </a>


                <div class="contact__container__content__line"></div>

                <a href="https://www.instagram.com/voet_gevoel/">
                    <div class="contact__container__content__info">
                        <iconify-icon class="contact__container__content__info__icon" icon="streamline:instagram-solid" style="color: white;" width="20" height="20"></iconify-icon>
                        <p class="contact__container__content__info__text">Voet Gevoel</p>
                    </div>
                </a>

                <a href="https://www.facebook.com/IsabelVoetGevoel?locale=nl_NL">
                    <div class="contact__container__content__info">
                        <iconify-icon class="contact__container__content__info__icon" icon="ri:facebook-fill" style="color: white;" width="20" height="20"></iconify-icon>
                        <p class="contact__container__content__info__text">Voet gevoel</p>
                    </div>
                </a>

                <div class="contact__container__content__line"></div>

                <div class="contact__container__content__info">
                    <iconify-icon class="contact__container__content__info__icon" icon="mdi:paper-outline" style="color: white;" width="20" height="20"></iconify-icon>
                    <p class="contact__container__content__info__text">BE19 9734 5653 8012</p>
                </div>


            </div>

            <div class="contact__container__formulier">
                <h2 class="contact__container__formulier__title">
                    Of stuur een berichtje!
                </h2>
                <form action="https://formsubmit.co/karel.scheers@telenet.be" method="POST">
                    <div class="contact__container__formulier__form">
                        <p class="contact__container__formulier__form__text">Voornaam</p>
                        <input class="contact__container__formulier__form__field" type="text" name="first_name" required placeholder="Voornaam">
                    </div>

                    <div class="contact__container__formulier__form">
                        <p class="contact__container__formulier__form__text">Achternaam</p>
                        <input class="contact__container__formulier__form__field" type="text" name="last_name" required placeholder="Achternaam">
                    </div>

                    <div class="contact__container__formulier__form">
                        <p class="contact__container__formulier__form__text">E-mailadres</p>
                        <input class="contact__container__formulier__form__field" type="email" name="E-mailadres" required placeholder="E-mailadres">
                    </div>

                    <div class="contact__container__formulier__form">
                        <p class="contact__container__formulier__form__text">Telefoonnummer</p>
                        <input class="contact__container__formulier__form__field" type="number" name="number" placeholder="Telefoonnummer">
                    </div>

                    <div class="contact__container__formulier__form">
                        <p class="contact__container__formulier__form__text">Indien u een service wil boeken, mag u hier aangeven welke </p>
                        <select class="contact__container__formulier__form__field" name="service">
                            <option value="none"></option>
                            <option value="voetreflexologie">Voetreflexologie</option>
                            <option value="energetische_vertebraal_correctie">Energetische vertebraal correctie</option>
                            <option value="psychozone_harmonisering">Psychozone harmonisering</option>
                        </select>
                    </div>

                    <div class="contact__container__formulier__form">
                        <p class="contact__container__formulier__form__text">Onderwerp bericht</p>
                        <input class="contact__container__formulier__form__field" type="text" name="subject" required placeholder="Onderwerp bericht">
                    </div>

                    <div class="contact__container__formulier__form">
                        <p class="contact__container__formulier__form__text">Bericht</p>
                        <textarea class="contact__container__formulier__form__bericht" name="bericht" id="bericht" rows="10" name="message" required placeholder="Bericht"></textarea>
                    </div>
                    <input type="hidden" name="_captcha" value="false">
                    <button class="contact__container__formulier__button"> Verzenden</button>

                </form>
            </div>
        </div>

    </div>
    <div class="contact_map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2505.724232072339!2d4.605267075944225!3d51.095096640740515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3fd2e941050e1%3A0x6f4db5f2aa4e8abc!2sHerenboslaan%2012A%2C%202500%20Lier!5e0!3m2!1snl!2sbe!4v1704712553057!5m2!1snl!2sbe" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

</body>

</html>
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
<script src="./resources/js/main.js"></script>