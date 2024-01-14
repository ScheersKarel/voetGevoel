<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voet Gevoel</title>
    <?= css('assets/css/main.css') ?>
</head>

<body>

    <div class="navMobile">
        <div class="header">
            <img src="<?= $site->navImg()->toFile()->url() ?>" alt="">
            <iconify-icon style="cursor: pointer;" class="hamburger-icon" icon="ci:hamburger-lg" style="color: #053F41;" width="50" height="50"></iconify-icon>
        </div>


        <div id="navbarMobile" class="">

            <?php foreach ($site->children()->listed() as $item) :   ?>
                <!--- Kijkt of de item children heeft (onderliggende paginas)  -->
                <?php if ($item->hasChildren()) : ?>
                    <div class="dropdown" class="dropdownButton">
                        <a href="#" class="dropbtn">Behandelingen <iconify-icon icon="gridicons:dropdown" style="color: #10587B; " width="20" height="20"></iconify-icon></a>
                        <div class="dropdown-content">
                            <?php foreach ($pages->children() as $child) : ?>
                                <a href="<?= $child->url() ?>"><?= $child->title() ?></a>
                            <?php endforeach ?>
                        </div>
                    </div>
                <?php endif ?>
                <!--- als het item geen children heeft voor deze code uit  -->
                <?php if (!$item->hasChildren()) : ?>
                    <!--- als de item contact als title heeft voor deze code uit -->
                    <?php if ($item->title() == 'Contact') : ?>
                        <a href="<?= $item->url() ?>" class="nav_cta"><?= $item->title() ?> </a>
                    <?php endif ?>
                    <!--- als de item contact NIET als title heeft voor deze code uit -->
                    <?php if ($item->title() != 'Contact') : ?>
                        <a href="<?= $item->url() ?>"><?= $item->title() ?> </a>
                    <?php endif ?>
                <?php endif ?>

            <?php endforeach ?>
        </div>

    </div>


    <div class="navDesctop">
        <div class="header">
            <img src="<?= $site->navImg()->toFile()->url() ?>" alt="">
        </div>


        <div id="navbar" class="">

            <?php foreach ($site->children()->listed() as $item) :   ?>
                <!--- Kijkt of de item children heeft (onderliggende paginas)  -->
                <?php if ($item->hasChildren()) : ?>
                    <div class="dropdown" class="dropdownButton">
                        <a href="#" class="dropbtn">Behandelingen <iconify-icon icon="gridicons:dropdown" style="color: #10587b; " width="20" height="20"></iconify-icon></a>
                        <div class="dropdown-content">
                            <?php foreach ($pages->children() as $child) : ?>
                                <a href="<?= $child->url() ?>"><?= $child->title() ?></a>
                            <?php endforeach ?>
                        </div>
                    </div>
                <?php endif ?>
                <!--- als het item geen children heeft voor deze code uit  -->
                <?php if (!$item->hasChildren()) : ?>
                    <!--- als de item contact als title heeft voor deze code uit -->
                    <?php if ($item->title() == 'Contact') : ?>
                        <a href="<?= $item->url() ?>" class="nav_cta"><?= $item->title() ?> </a>
                    <?php endif ?>
                    <!--- als de item contact NIET als title heeft voor deze code uit -->
                    <?php if ($item->title() != 'Contact') : ?>
                        <a href="<?= $item->url() ?>"><?= $item->title() ?> </a>
                    <?php endif ?>
                <?php endif ?>

            <?php endforeach ?>
        </div>

    </div>