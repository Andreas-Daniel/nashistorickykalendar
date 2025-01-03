<?php

$name = $_POST["name"];
$email = $_POST["email_address"];
$feedback = $_POST["feedback"];

$mailheader = "From:" .$name. "<" .$email. ">\r\n";

$recipient = "danandreas@seznam.cz";

mail($recipient, $email, $feedback, $mailheader)
or die("Error!");

echo'
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Náš kalendář</title>
    <link rel="icon" type="image/x-icon" href="./img/NK-logo.png">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <header>
        <nav class="navigation">
            <a href="./">Domů</a>
            <a href="./produkty/">Kalendář</a>
        </nav>
        <h1>NK</h1>
        <nav class="navigation">
            <a href="./o-nas/">O nás</a>
            <a href="./vitejte-na-nasem-blogu/">Blog</a>
        </nav>
    </header>
    <div class="home-news-background">
        <div class="home-news">
            <h2>Nový</h2>
            <h2>historický</h2>
            <h2>kalendář!</h2>
            <p class="paragraph-on-background">Důležité události v oblastech politiky, umění, vědy i sportu od národního
                obrození až do 21. století.</p>
            <a href="./produkty/kalendar/" class="button">
                Pro vás zde
                <i class="fa fa-arrow-right"></i>
            </a>
        </div>
    </div>
    <main>
        <div class="motto">
            <p>Abychom věděli jak daleko jsme došli...</p>
            <h2>Nezapomeneme</h2>
        </div>
        <div class="main-section">
            <h2 class="basic-heading">NK - Historický kalendář 2025</h2>
            <div class="calendar-columns">
                <div class="calendar-column">
                    <img src="./img/kalendar1.JPG" alt="foto kalendáře">
                    <h3>Česká výroba</h3>
                    <p>Celý výrobní proces probíhá tady u nás v České republice.</p>
                </div>
                <div class="calendar-column">
                    <img src="./img/kalendar2.JPG" alt="foto kalendáře">
                    <h3>Jedinečnost</h3>
                    <p>V současné době na našem trhu nenajdete žádný podobný produkt.</p>
                </div>
                <div class="calendar-column">
                    <img src="./img/kalendar3.JPG" alt="foto kalendáře">
                    <h3>Kvalita</h3>
                    <p>Kalendář je vyroben profesionály a z kvlaitních materiálů.</p>
                </div>
            </div>
            <a href="./produkty/kalendar/" class="button">
                Prozkoumat kalendář
                <i class="fa fa-arrow-right"></i>
            </a>
        </div>
        <div class="main-section">
            <h2 class="basic-heading">Poslední příspěvky</h2>
            <div class="blog-columns">
                <div class="blog-column">
                    <a href="">
                        <img src="./img/namesti.jpeg" alt="article-foto">
                        <article>
                            <h3>Vítejte na našem blogu!</h3>
                            <time datetime="2024-09-15">15 září, 2024</time>
                            <p>S radostí vám přinášíme tento blog jako přirozený doplněk našeho kalendáře. Na tomto blogu
                                najdete příběhy a detaily, které jdou do větší hloubky a bohužel se nám už nevešly na značně
                                omezený prostor stránek kalendáře. </p>
                        </article>
                    </a>
                </div>
                <div class="blog-column">
                    <a href="">
                        <img src="./img/namesti.jpeg" alt="article-foto">
                        <article>
                            <h3>Den vzniku samostatného Československa</h3>
                            <time datetime="2024-10-28">28 října, 2024</time>
                            <p>Každého 28. října slavíme Den vzniku samostatného československého státu v úctě na dobu, kdy
                                se
                                naši předci rozhodli směle vykročit směrem k samostatnosti a svobodě. Tento den v sobě nese
                                symboliku národní odvahy...</p>
                        </article>
                    </a>
                </div>
                <div class="blog-column">
                    <a href="">
                        <article>
                            
                        </article>
                    </a>
                </div>
            </div>
            <a href="./vitejte-na-nasem-blogu/" class="button">
                Přečtěte si více
                <i class="fa fa-arrow-right"></i>
            </a>
        </div>
    </main>
    <div class="home-contact-background">
        <div class="home-contact">
            <h2>Cokoliv máte na srdci</h2>
            <p class="paragraph-on-background">Můžete se na nás kdykoliv obrátit</p>
            <a href="./kontakt/" class="button">Kontaktujte nás</a>
        </div>
    </div>
    <footer>
        <div class="copyright">
            <p>2024, nashistorickykalendar</p>
        </div>
        <div class="e-mail">
            <p>KONTAKT: nashistorickykalendar@gmail.com</p>
        </div>
        <div class="socials">
            <a href="https://www.instagram.com/naskalendar/"><i class="fa fa-instagram fa-lg"></i></a>
            <a href="https://www.youtube.com/@n%C3%A1%C5%A1historick%C3%BDkalend%C3%A1%C5%99">
                <i class="fa fa-youtube fa-lg"></i>
            </a>
        </div>
    </footer>
</body>

</html>
';

?>