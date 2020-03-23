<?php
    session_start();
    include('../layouts/head.php');

    if (isset($_POST)) {
        if(empty($_POST['username'])){
            $error['username'] = "** Username est obligatoire";
        }
        if(empty($_POST['password'])){
            $error['password'] = "** Password est obligatoire";
        } else {
            getLoginAuth($_POST);
        }
    }
?>

<header>
    <?php include('../layouts/nav.php'); ?>
    <div id="baner" class="contact">
        <h1 class="tit_contactde">LOGIN</h1>
    </div>
</header>
<main>
    <div>
        <?php if (isset($error['password'])) {
            echo $error['password'];
        }?>
    </div>
    <div class="formulairediv">
        <form method="POST">
            <input type="text" name="username" class="form" placeholder="Username">
            <br>
            <input type="password" name="password" class="form" placeholder="Password">
            <br>
            <input type="text" name="profile_image" class="form" placeholder="Upload picture">
            <br>
            <button class="button-contact" name="submit">Submit</button>
        </form>
    </div>
</main>

<?php include('../layouts/footer.php'); ?>