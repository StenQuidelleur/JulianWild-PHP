<?php
    session_start();
    include('../layouts/head.php');
?>

    <header>
        <?php include('../layouts/nav.php'); ?>
        <div id="baner" class="mexico">
            <h1 class="title-banner">MEXICO</h1>
        </div>
    </header>

    <main>
        <div class="text">
            <h2 id="text1" class="title-country">Quick story</h2>
            <p id="text2" class="text-country">This other country is located near the US border, it’s the fifth largest country in the Americas covering almost 2,000,000 square kilometers. Comprising 31 states plus Mexico city, it is a federation, similar to the united states with their
                different states. It was home of the Aztec and Mayan Empires before first contact with Europeans.</p>
            <h2 id="text3" class="title-country">My personal throughts</h2>
            <p id="text4" class="text-country">By far, one of my best experience, even though some scary moments with the drug dealing problems. The people there are really nice to talk to and welcoming. This country got a nice luminosity and is nice to work with to take photos, so pretty
                good experience for my part !</p>
        </div>
        <div class="container">
            <figure class="container1">
                <img src="../assets/ImagesPages/mexico_resized/image01.jpg" alt="..." onclick="onClick(this)" class="modal-hover-opacity img-gallery" />
            </figure>
            <figure class="container1">
                <img src="../assets/ImagesPages/mexico_resized/image02.jpg" alt="..." onclick="onClick(this)" class="modal-hover-opacity img-gallery" />
            </figure>
            <figure class="container1">
                <img src="../assets/ImagesPages/mexico_resized/image03.jpg" alt="..." onclick="onClick(this)" class="modal-hover-opacity img-gallery" />
            </figure>
            <figure class="container1">
                <img src="../assets/ImagesPages/mexico_resized/image04.jpg" alt="..." onclick="onClick(this)" class="modal-hover-opacity img-gallery" />
            </figure>
            <figure class="container1">
                <img src="../assets/ImagesPages/mexico_resized/image05.jpg" alt="..." onclick="onClick(this)" class="modal-hover-opacity img-gallery" />
            </figure>
            <figure class="container1">
                <img src="../assets/ImagesPages/mexico_resized/image06.jpg" alt="..." onclick="onClick(this)" class="modal-hover-opacity img-gallery" />
            </figure>
            <figure class="container1">
                <img src="../assets/ImagesPages/mexico_resized/image07.jpg" alt="..." onclick="onClick(this)" class="modal-hover-opacity img-gallery" />
            </figure>
            <figure class="container1">
                <img src="../assets/ImagesPages/mexico_resized/image08.jpg" alt="..." onclick="onClick(this)" class="modal-hover-opacity img-gallery" />
            </figure>
            <figure class="container1">
                <img src="../assets/ImagesPages/mexico_resized/image09.jpg" alt="..." onclick="onClick(this)" class="modal-hover-opacity img-gallery" />
            </figure>
            <figure class="container1">
                <img src="../assets/ImagesPages/mexico_resized/image10.jpg" alt="..." onclick="onClick(this)" class="modal-hover-opacity img-gallery" />
            </figure>
            <figure class="container1">
                <img src="../assets/ImagesPages/mexico_resized/image11.jpg" alt="..." onclick="onClick(this)" class="modal-hover-opacity img-gallery" />
            </figure>
            <figure class="container1">
                <img src="../assets/ImagesPages/mexico_resized/image12.jpg" alt="..." onclick="onClick(this)" class="modal-hover-opacity img-gallery" />
            </figure>
            <div id="modal01" class="modal" onclick="this.style.display='none'">
                <span class="close">&times;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <div class="modal-content">
                    <img id="img01">
                </div>
            </div>
        </div>
    </main>

<?php include('../layouts/footer.php'); ?>