<?php include('../layouts/head.php'); ?>

    <header>
        <?php include('../layouts/nav.php'); ?>
        <div id="baner" class="peru">
            <h1 class="title-banner">PERU</h1>
        </div>
    </header>
    <main>
        <div class="text">
            <h2 id="text1" class="title-country">Quick story</h2>
            <p id="text2" class="text-country">Located near Colombia and Brazil, The Peru is the 19th largest country in the world and the third largest in South America. It was home of several ancient cultures and by this fact has now a lot of cultural diversity, from Spanish Native to
                Inca and other old civilizations.</p>
            <h2 id="text3" class="title-country">My personal throughts</h2>
            <p id="text4" class="text-country">After my trip there, I learned a lot about cultural diversity and it helped me see the world with a different eye, a lot of photos that I took over there are trying to express those feelings the best way possible. With differents habitats
                ranging from arid to humid, it was a great experience for me.
                <p>
        </div>
        <div class="container">
            <figure class="container1">
                <img src="../assets/ImagesPages/peru_resized/image01.jpg" alt="..." onclick="onClick(this)" class="modal-hover-opacity img-gallery" />
            </figure>
            <figure class="container1">
                <img src="../assets/ImagesPages/peru_resized/image02.jpg" alt="..." onclick="onClick(this)" class="modal-hover-opacity img-gallery" />
            </figure>
            <figure class="container1">
                <img src="../assets/ImagesPages/peru_resized/image03.jpg" alt="..." onclick="onClick(this)" class="modal-hover-opacity img-gallery" />
            </figure>
            <figure class="container1">
                <img src="../assets/ImagesPages/peru_resized/image04.jpg" alt="..." onclick="onClick(this)" class="modal-hover-opacity img-gallery" />
            </figure>
            <figure class="container1">
                <img src="../assets/ImagesPages/peru_resized/image05.jpg" alt="..." onclick="onClick(this)" class="modal-hover-opacity img-gallery" />
            </figure>
            <figure class="container1">
                <img src="../assets/ImagesPages/peru_resized/image06.jpg" alt="..." onclick="onClick(this)" class="modal-hover-opacity img-gallery" />
            </figure>
            <figure class="container1">
                <img src="../assets/ImagesPages/peru_resized/image07.jpg" alt="..." onclick="onClick(this)" class="modal-hover-opacity img-gallery" />
            </figure>
            <figure class="container1">
                <img src="../assets/ImagesPages/peru_resized/image08.jpg" alt="..." onclick="onClick(this)" class="modal-hover-opacity img-gallery" />
            </figure>
            <figure class="container1">
                <img src="../assets/ImagesPages/peru_resized/image09.jpg" alt="...1x" onclick="onClick(this)" class="modal-hover-opacity img-gallery" />
            </figure>
            <figure class="container1">
                <img src="../assets/ImagesPages/peru_resized/image10.jpg" alt="...1" onclick="onClick(this)" class="modal-hover-opacity img-gallery" />
            </figure>
            <figure class="container1">
                <img src="../assets/ImagesPages/peru_resized/image11.jpg" alt="..." onclick="onClick(this)" class="modal-hover-opacity img-gallery" />
            </figure>
            <figure class="container1">
                <img src="../assets/ImagesPages/peru_resized/image12.jpg" alt="..." onclick="onClick(this)" class="modal-hover-opacity img-gallery" />
            </figure>
            <div id="modal01" class="modal" onclick="this.style.display='none'">
                <span class="close">&times;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <div class="modal-content">
                    <img id="img01">
                </div>
            </div>
    </main>

<?php include('../layouts/footer.php'); ?>