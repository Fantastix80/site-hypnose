<!-- Intégration du header -->
<?php require_once "views/layouts/header.php" ?>

<!-- Header -->
<header class="header">

<<<<<<< HEAD
    <section class="navbar">
        <div class="logo">
            <img class="logo_image" src="assets/img/logo.png" alt="logo nicole westerhoek">
        </div>

        <nav>
            <div class="wrapper">
                <a class="actual_page" href="index.php">Accueil</a>
                <a href="#" class="underline_transition">Sophrologie</a>
                <a href="#" class="underline_transition">Hypnose</a>
                <a href="#" class="underline_transition">Tarifs</a>
                <a href="#" class="underline_transition">Contact</a>
                <a class="user" href="#"><img src="assets/img/user_icon_light.png" alt="User icon"></a>
            </div>
            <!-- <div class="user">
                <a href="#"></a>
            </div> -->
        </nav>

=======
    <section class="flex">

        <div class="logo">
            <a href="index.php">
                <img src="assets/img/logo-header.png" alt="logo nicole westerhoek">
            </a>
        </div>

        <nav class="navbar">
            <a href="index.php">Accueil</a>
            <a href="#">Sophrologie</a>
            <a href="#">Hypnose</a>
            <a href="#">Tarifs</a>
        </nav>

        <a href="#" class="contact-nav">Contactez-moi !</a>

>>>>>>> d474319ead9079e5cbe754f8783c527aa06d4182
    </section>

    <div id="mySidenav" class="sidenav">
        <a href="#" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="#" class="leftBorder_actual_page">Accueil</a>
        <a href="#" class="leftBorder_transition">Sophrologie</a>
        <a href="#" class="leftBorder_transition">Hypnose</a>
        <a href="#" class="leftBorder_transition">Tarifs</a>
        <a href="#" class="leftBorder_transition">Contact</a>
        <a href="#" class="leftBorder_transition">Mon compte</a>
    </div>

    <span onclick="openNav()">
        <i class="fa-solid fa-bars"></i>
    </span>

    <div id="main"></div>

</header>


<section class="slider">

    <div class="slideshow">
        <div class="mySlides fade">
            <img class="sliderImage" src="assets/img/slider_1.jpg">
        </div>
        <div class="mySlides fade">
            <img class="sliderImage" src="assets/img/slider_2.jpg">
        </div>
        <div class="mySlides fade">
            <img class="sliderImage" src="assets/img/slider_3.jpg">
        </div>
        <div class="mySlides fade">
            <img class="sliderImage" src="assets/img/slider_4.jpg">
        </div>
        <div class="mySlides fade">
            <img class="sliderImage" src="assets/img/slider_5.jpg">
        </div>

        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

        <div style="text-align: center;">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>
            <span class="dot" onclick="currentSlide(5)"></span>
        </div>
    </div>
    <br>

</section>

<section class="cas-courant">

    <div class="title">
        <h1>Les cas courants</h1>
        <h3>Petite description de l'hypnose et de la sophrologie pour montrer aux clients à quoi cela pourrait leur être utile.</h3>
    </div>

    <div class="box-container">
        <div class="box">
            <img src="assets/img/cas-courant-1.jpg" alt="">
            <div class="content">
                <h3>La cigarette</h3>
                <p>
                    L'hypnose est souvent utilisé pour se défaire de mauvaises habitudes, d'addictions dont la cigarette.
                    Elle peut tout simplement faire oublier à votre corps son addiction à la nicotine et de ce fait, à la cigarette.</p>
            </div>
        </div>
        <div class="box">
            <img src="assets/img/cas-courant-2.jpg" alt="">
            <div class="content">
                <h3>Le stress</h3>
                <p>
                    La sophrologie tout comme l'hypnose sont deux méthodes parmis tant d'autres qui peuvent diminuer votre taux de stress voire de complètement s'en débarasser.
                    Que ce soit en apprenant à positiver ou en se détachant du stress accumuler, la sophrologie tout comme l'hypnose sont efficaces. 
                </p>
            </div>
        </div>
        <div class="box">
            <img src="assets/img/cas-courant-3.jpg" alt="">
            <div class="content">
                <h3>Les phobies / peurs</h3>
                <p>
                    L'hypnose est souvent utilisé afin de vous permettre de surmonter des peurs, des phobies ou encore des traumatismes.
                    Une séance suffit et vous pourrez donc tester ses résultats le soir même avec l'araignée qui cohabite avec vous depuis votre emménagement.
                </p>
            </div>
        </div>
        <div class="box">
            <img src="assets/img/cas-courant-4.jpg" alt="">
            <div class="content">
                <h3>La quiétude</h3>
                <p>
                    La sophrologie est particulièrement efficace afin de permettre à votre corps et votre esprit d'être non seulement en symbiose, mais aussi d'être au meilleur de leurs capacités.
                    Ils impliquent des petites actions, pensées ou exercices que vous pouvez réaliser au quotidien afin d'entretenir ce bien être.
                </p>
            </div>
        </div>
    </div>

</section>

<section class="presentation">
    <h1 class="titre">Découvrez-en plus sur votre thérapeute...</h1>
    <div class="container">
        <div class="video">
            <iframe src="https://www.youtube.com/embed/7m3VkqLDTp4" title="Présentation de votre thérapeute" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="divider"></div>
        <div class="content">
            <h3>Nicole Westerhoek</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur aut, consectetur dolorum error est et ex harum hic iure magni maxime provident quam quidem quos ut, vero voluptas voluptatibus? Cum!</p>
        </div>
    </div>
</section>

<section class="cabinet">
    <h1>Le cabinet</h1>
    <div class="caroussel_diapo">
        <input checked id="carou_un" name="rotation" type="radio">
        <label for="carou_un"></label>
        <input id="carou_deux" name="rotation" type="radio">
        <label for="carou_deux"></label>
        <input id="carou_trois" name="rotation" type="radio">
        <label for="carou_trois"></label>
        <input id="carou_quatre" name="rotation" type="radio">
        <label for="carou_quatre"></label>
        <input id="carou_cinq" name="rotation" type="radio">
        <label for="carou_cinq"></label>
        <input id="carou_six" name="rotation" type="radio">
        <label for="carou_six"></label>
        <input id="carou_sept" name="rotation" type="radio">
        <label for="carou_sept"></label>
        <input id="carou_huit" name="rotation" type="radio">
        <label for="carou_huit"></label>

        <div class="contenu_carou">
            <div class="caroussel">
                <img src="assets/img/cabinet-1.jpg" alt>
                <img src="assets/img/cabinet-2.jpg" alt>
                <img src="assets/img/cabinet-3.jpg" alt>
                <img src="assets/img/cabinet-4.jpg" alt>
                <img src="assets/img/cabinet-5.jpg" alt>
                <img src="assets/img/cabinet-6.jpg" alt>
                <img src="assets/img/cabinet-7.jpg" alt>
                <img src="assets/img/cabinet-8.jpg" alt>
            </div>
        </div>
    </div>
</section>

<section class="avis">
    <h1>Elles m'ont fait confiance !</h1>
    <div class="quote"><img src="assets/img/avis-citation.png" alt=""></div>
    <div class="box">
        <div class="profil"><img src="assets/img/pp-avis.png" alt=""></div>
        <div class="content">
            <h3 class="date">20 Novembre 2022</h3>
            <p class="contenu">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid amet debitis deleniti distinctio eligendi ex facilis impedit inventore laborum veniam! Amet, harum illo nemo odit optio saepe sapiente sequi sit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam asperiores beatae delectus ducimus eum facilis harum ipsam libero mollitia quidem similique ullam, ut vitae! Libero magni modi rem tempora temporibus.</p>
            <h3 class="auteur">J. VAN WITTENBERGE</h3>
        </div>
    </div>
    <div class="quote"><img src="assets/img/avis-citation.png" alt=""></div>
    <div class="box">
        <div class="profil"><img src="assets/img/pp-avis.png" alt=""></div>
        <div class="content">
            <h3 class="date">20 Novembre 2022</h3>
            <p class="contenu">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid amet debitis deleniti distinctio eligendi ex facilis impedit inventore laborum veniam! Amet, harum illo nemo odit optio saepe sapiente sequi sit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam asperiores beatae delectus ducimus eum facilis harum ipsam libero mollitia quidem similique ullam, ut vitae! Libero magni modi rem tempora temporibus.</p>
            <h3 class="auteur">J. VAN WITTENBERGE</h3>
        </div>
    </div>
    <div class="quote"><img src="assets/img/avis-citation.png" alt=""></div>
    <div class="box">
        <div class="profil"><img src="assets/img/pp-avis.png" alt=""></div>
        <div class="content">
            <h3 class="date">20 Novembre 2022</h3>
            <p class="contenu">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid amet debitis deleniti distinctio eligendi ex facilis impedit inventore laborum veniam! Amet, harum illo nemo odit optio saepe sapiente sequi sit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam asperiores beatae delectus ducimus eum facilis harum ipsam libero mollitia quidem similique ullam, ut vitae! Libero magni modi rem tempora temporibus.</p>
            <h3 class="auteur">J. VAN WITTENBERGE</h3>
        </div>
    </div>
</section>


<script src="assets/js/sidenav.js"></script>
<script src="assets/js/slider.js"></script>

<!-- Intégration du footer -->
<?php require_once "views/layouts/footer.php" ?>