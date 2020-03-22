<?php
    session_start();
    include('../layouts/head.php');

    if (isset($_POST)) {
        if (!empty($_POST['password']) && (!empty($_POST['username']) && $_POST['password']=== '1234')) {
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['isConnected'] = true ;
            if ($_POST['profile_image']){
                $_SESSION['profile_image'] =$_POST['profile_image'];
            } else {
                $_SESSION['profile_image'] = 'https://i.pinimg.com/564x/6c/ed/7a/6ced7a633a312d93915d15cdd939bd4a.jpg';
            }
            if ($_SESSION['isConnected'] === true){
                Header('Location:http://localhost:8000/pages/profile.php');
            }
        } else {
            $error['password'] = "Please try enter 1234 to try app !";
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