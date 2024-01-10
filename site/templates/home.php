<?php snippet('nav'); ?>
<div class="container">


    <div class="cta" style="background-image: url(<?= $page->ctaImg()->toFile()->url() ?>);">
        <div class="cta__content">
            <h1 class="cta__title"><?= $page->ctaTitle() ?></h1>
            <h2><?= $page->ctaSubtitle() ?></h2>
            <a href="./contact.php"><button class="cta__button"><?= $page->ctaButton() ?></button></a>
        </div>
    </div>

    <!-- Wie ben ik -->
    <div class="about">
        <div class="about__content">
            <h2 class="about__content__title"><?= $page->aboutTitle() ?></h2>
            <p class="about__content__text">
                <?= $page->aboutTextFirstP() ?>
            </p>
            <p class="about__content__text">
                <?= $page->aboutTextSecondP() ?>
            </p>
            <a href="./about.php"><button class="about__content__button"><?= $page->aboutButton() ?></button></a>
        </div>

        <div class="about__img">
            <img class="about__img__mobile" src="<?= $page->aboutImg()->toFile()->url() ?>" alt="">
            <img class="about__img__bg" src="./resources/images/dic rectangle.png" alt="">
            <img class="about__img__isabel" src="./resources/images/img isabel.png" alt="">
            <img class="about__img__strand" src="./resources/images/img strand.png" alt="">
            <img class="about__img__hey" src="./resources/images/hey !.png" alt="">
        </div>
    </div>

    <!-- treatment -->

    <div class="treatments">
        <h2 class="treatments__title"><?= $page->treatmentTitle() ?></h2>
        <div class="treatments__text">
            <p><?= $page->traetmentTextP1() ?></p>
            <p><?= $page->traetmentTextP2() ?></p>
            <p><?= $page->traetmentTextP3() ?></p>
        </div>

        <div class="treatment">
            <?php foreach ($page->treatmentsCard()->toStructure() as $item) : ?>
                <div class="treatment__card">
                    <img class="treatment__card__img" src="<?= $item->cardImg()->toFile()->url() ?>" alt="">
                    <h3 class="treatment__card__title"><?= $item->cardTitle() ?></h3>
                    <div class="treatment__card__line"></div>
                    <p class="treatment__card__text"><?= $item->cardText() ?></p>
                    <a href="./voetreflexologie.php"> <button class="treatment__card__button"><?= $item->cardButton() ?></button></a>
                </div>
            <?php endforeach ?>
        </div>
    </div>

    <!-- customers -->

    <div class="customers">
        <h2 class="customers__title"><?= $page->customerTitle() ?></h2>
        <!-- Slideshow container -->
        <div class="slideshow-container">

            <!-- Full-width images with number and caption text -->
            <?php foreach ($page->customerCard()->toStructure() as $item) : ?>
                <div class="mySlides fade">
                    <div class="slider_content">

                        <div class="slider_content__content">
                            <p class="slider_content__content__date">
                                <?= $item->customerDate() ?>
                            </p>
                            <h2 class="slider_content__content__title"> <?= $item->customerTitle() ?></h2>
                            <p class="slider_content__content__text"><?= $item->customerText() ?></p>
                        </div>

                    </div>
                </div>
            <?php endforeach ?>


            <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>

        </div>
        <br>

        <!-- The dots/circles -->
        <div style="text-align:center">
            <?php foreach ($page->customerCard()->toStructure() as $index => $item) : ?>
                <span class="dot" onclick="currentSlide(<?= $index + 1 ?>)"></span>
            <?php endforeach ?>
        </div>
    </div>


</div>
<?php snippet('footer'); ?>
</body>