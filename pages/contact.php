<?php
    include('../layouts/head.php');

    if(isset($_POST)) {
        $errors = [];
        if(empty($_POST['email'])) {
            $errors['email']= "Le champs email est obligatoire !";
        }
        if(empty($_POST['message'])) {
            $errors['message']= "Le champs message est obligatoire !";
        }
    }

?>

    <header>
        <?php include('../layouts/nav.php'); ?>
        <div id="baner" class="contact">
            <h1 class="tit_contactde">CONTACT</h1>
        </div>
    </header>

    <!-- FORMULAIRE -->
    <main>
        <div class="formulairediv">
            <form method="POST" action="contact.php">
                <input type="text" name="firstname" id="first" class="form" placeholder="Firstname" value= <?php if (isset($_POST['firstname'])) echo $_POST['firstname']?> >
                <br>
                <input type="text" name="lastname" id="last" class="form" placeholder="Lastname" value= <?php if (isset($_POST['lastname'])) echo $_POST['lastname']?> >
                <br>
                <input type="email" name="email" id="email" class="form" placeholder="Email" value= <?php if (isset($_POST['email'])) echo $_POST['email']?> >
                <p>
                    <code>
                        <?php if(isset($errors['email'])) echo $errors['email']; ?>
                    </code>
                </p>
                <br>
                <textarea name="message" id="message" placeholder="Message" ></textarea>
                <p>
                    <code>
                        <?php if(isset($errors['message'])) echo $errors['message']; ?>
                    </code>
                </p>
                <br>
                <button class="button-contact" name="send">Send</button>
                <br>
                <label for="checkbox"><input type="checkbox" name="checkbox" id="checkbox">Sign up to the newsletter</label>
            </form>
            <?php
                if (isset($_POST['send'])) {
            ?>
                <div>
                    <h1>SUCCESS</h1>
                </div>
                <?php /*
                    $to= sten.quidelleur36@gmail.com;
                    $from= sten.quidelleur@outlook.fr;
                    if (isset($_POST['firstname'])){
                        $firstname= $_POST['firstname'];
                    }
                    $message = $_POST['message'];
                    $email = $_POST['email'];
                    $subject= "New message from your contact";
                    $content = "Le message vous a été envoyé par " . $email . ": <br>" . $message;
                    $headers = "From: " . $from;
                    mail($to, $subject, $content, $headers);*/
                ?>
            <?php
                }
            ?>
        </div>
    </main>

<?php include('../layouts/footer.php'); ?>