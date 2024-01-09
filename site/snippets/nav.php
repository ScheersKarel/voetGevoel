<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?= css('assets/css/main.css') ?>
</head>

<body>

    <nav>
        <div class="header">
            <img src="<?= $site->navImg()->toFile()->url() ?>" alt="">
            <iconify-icon style="cursor: pointer;" class="hamburger-icon" icon="ci:hamburger-lg" style="color: #053F41;" width="50" height="50"></iconify-icon>
        </div>


        <div id="navbar" class="">

            <?php foreach ($site->children()->listed() as $item) :   ?>
                <!--- Kijkt of de item children heeft (onderliggende paginas)  -->
                <?php if ($item->hasChildren()) : ?>
                    <div class="dropdown" id="dropdownButton">
                        <a href="#" class="dropbtn">Behandelingen <iconify-icon icon="gridicons:dropdown" style="color: #10587b; " width="20" height="20"></iconify-icon></a>
                        <div class="dropdown-content">
                            <a href="./voetreflexologie.php">Voetreflexologie</a>
                            <a href="./vertebraal-correctie.php">Energetische Vertebraal Correctie</a>
                            <a href="./psychozone-harmonisering.php">Psychozone harmonisering</a>
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

    </nav>