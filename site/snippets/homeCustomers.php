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