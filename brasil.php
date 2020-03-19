<?php include('layouts/head.php'); ?>

    <header>
        <?php include('layouts/nav.php'); ?>
        <div id="baner" class="brasil">
            <h1 class="title-banner">BRASIL</h1>
        </div>
    </header>
    <main>
        <div class="text">
            <h2 id="text1" class="title-country">Quick story</h2>
            <p id="text2" class="text-country">An old Portuguese colony in the middle of South America, located next to Venezuela and Colombia, Brazil is considered an advanced emerging economy. Well known for his famous carnival at Rio, it got a lot of cultural diversity, mixing a lot
                of ethnicity together in one place.</p>
            <h2 id="text3" class="title-country">My personal throughts</h2>
            <p id="text4" class="text-country">As a photographer it was a real opportunity of capturing colorful images. I had the chance to assist at Rio carnival so I took a lot of pictures of that event. Like I said for the other Latin countries, the people there are extremely nice
                with strangers and love to be photographed.</p>
        </div>
        <div class="container">
            <figure class="container1">
                <img src="assets/ImagesPages/brazil-resized/image01.jpg" alt="beautiful parrot yellow red and blue" onclick="onClick(this)" class="modal-hover-opacity img-gallery" />
            </figure>
            <figure class="container1">
                <img src="assets/ImagesPages/brazil-resized/image02.jpg" alt="a beach at the sunset" onclick="onClick(this)" class="modal-hover-opacity img-gallery" />
            </figure>
            <figure class="container1">
                <img src="assets/ImagesPages/brazil-resized/image03.jpg" alt="ancient street" onclick="onClick(this)" class="modal-hover-opacity img-gallery" />
            </figure>
            <figure class="container1">
                <img src="assets/ImagesPages/brazil-resized/image04.jpg" alt="ancient street with colored houses" onclick="onClick(this)" class="modal-hover-opacity img-gallery" />
            </figure>
            <figure class="container1">
                <img src="assets/ImagesPages/brazil-resized/image05.jpg" alt="green lizard" onclick="onClick(this)" class="modal-hover-opacity img-gallery" />
            </figure>
            <figure class="container1">
                <img src="assets/ImagesPages/brazil-resized/image06.jpg" alt="three boys who are playing foorball" onclick="onClick(this)" class="modal-hover-opacity img-gallery" />
            </figure>
            <figure class="container1">
                <img src="assets/ImagesPages/brazil-resized/image07.jpg" alt="beach with orange sky" onclick="onClick(this)" class="modal-hover-opacity img-gallery" />
            </figure>
            <figure class="container1">
                <img src="assets/ImagesPages/brazil-resized/image08.jpg" alt="green parrot into a tree" onclick="onClick(this)" class="modal-hover-opacity img-gallery" />
            </figure>
            <figure class="container1">
                <img src="assets/ImagesPages/brazil-resized/image09.jpg" alt="parrot blue and yellow" onclick="onClick(this)" class="modal-hover-opacity img-gallery" />
            </figure>
            <figure class="container1">
                <img src="assets/ImagesPages/brazil-resized/image10.jpg" alt="Corcovado with the statue" onclick="onClick(this)" class="modal-hover-opacity img-gallery" />
            </figure>
            <figure class="container1">
                <img src="assets/ImagesPages/brazil-resized/image11.jpg" alt="Corcovado with the sea" onclick="onClick(this)" class="modal-hover-opacity img-gallery" />
            </figure>
            <figure class="container1">
                <img src="assets/ImagesPages/brazil-resized/image12.jpg" alt="dancer to the Rio's carnival" onclick="onClick(this)" class="modal-hover-opacity img-gallery" />
            </figure>
            <div id="modal01" class="modal" onclick="this.style.display='none'">
                <span class="close">&times;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <div class="modal-content">
                    <img id="img01">
                </div>
            </div>
    </main>

<?php include('layouts/footer.php'); ?>