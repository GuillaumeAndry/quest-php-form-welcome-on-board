<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome on board</title>
    <link rel="stylesheet" href="/assets/styles/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Source+Sans+3:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">
</head>

<header style="min-height: 3vh">
    <nav>
        <a href="/" aria-label="retour à la page d'accueil">
            <img class="logo" src="/assets/images/logo.svg" alt="">
        </a>
        <ul>
            <li><a href="/#articles">Articles</a></li>
            <li><a href="/#about">About</a></li>
            <li><a href="/#contact">Contact</a></li>
        </ul>
    </nav>
</header>

<body>
    <div class="center">
        <h1 id="contact" class="hone">Get in touch</h1>
        <div>
            <h2 id="contact2">Please fix errors below</h2>
            <ul class="list-form">
                <?php foreach ($errors as $error): ?>
                    <li class="list-margin"><?= $error ?></li>
                <?php endforeach ?>
            </ul>


        </div>
        <form id="myForm" action="treatment.php" method="post">
            <label>
                <h3>Name <p class="star-color">*</p>
                </h3>
                <input type="text" id="name" name="name" class="width">
            </label>

            <label>
                <h3>Email <p class="star-color">*</p>
                </h3>
                <input type="email" id="email" name="email" class="width">
            </label>

            <label for="subject-select">
                <h3>Subject <p class="star-color">*</p>
                </h3>
            </label>

            <select name="subject" id="subject" class="width">
                <option value="rdv">Prendre rendez-vous</option>
                <option value="subscribe">Inscription à la newsletter</option>
                <option value="claim">Réclamation</option>
                <option value="contract">Demander un devis</option>
            </select>

            <label>
                <h3>Message</h3>
                <textarea id="message" name="message" class="width width2"></textarea>
            </label>
        </form>
        <input form="myForm" type="submit" name="" id="" value="Send" class="button">
    </div>

    <?php /*@todo Add a contact form */ require_once './treatment.php' ?>
    </main>
</body>

<?php include '_footer.php' ?>