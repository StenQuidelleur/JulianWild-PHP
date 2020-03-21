<?php include('layouts/head.php'); ?>

<header class="bloc-menu">
    <?php include('layouts/nav.php'); ?>
    <div id="slider">
        <figure>
            <img src="assets/ImagesPages/landing_resized/image01.jpg" alt="...">
            <img src="assets/ImagesPages/landing_resized/image02.jpg" alt="...">
            <img src="assets/ImagesPages/landing_resized/image03.jpg" alt="...">
            <img src="assets/ImagesPages/landing_resized/image04.jpg" alt="...">
            <img src="assets/ImagesPages/landing_resized/image05.jpg" alt="...">
        </figure>
    </div>
</header>
<main>
    <h1 class="featured-galleries">currently featured <strong>galleries</strong></h1>
    <div class="container-index">
        <div class="container-country brasil">
            <a href="pages/brasil.php">
                <img src="assets/ImagesPages/brazil-resized/image07.jpg" alt="Brasil" class="image">
                <div class="overlay">
                    <div class="text-country-index">BRASIL</div>
                </div>
            </a>
        </div>

        <div class="container-country chile">
            <a href="pages/chile.php">
                <img src="assets/ImagesPages/chile_resizied/image10.jpg" alt="Chile" class="image">
                <div class="overlay">
                    <div class="text-country-index">CHILE</div>
                </div>
            </a>
        </div>
        <div class="container-country">
            <a href="pages/mexico.php">
                <img src="assets/ImagesPages/mexico_resized/image07.jpg" alt="Mexique" class="image">
                <div class="overlay">
                    <div class="text-country-index">MEXICO</div>
                </div>
            </a>
        </div>
        <div class="container-country">
            <a href="pages/peru.php">
                <img src="assets/ImagesPages/peru_resized/image11.jpg" alt="Peru" class="image">
                <div class="overlay">
                    <div class="text-country-index">PERU</div>
                </div>
            </a>
        </div>
</main>

<?php include('layouts/footer.php'); ?>