<nav class="menu-burger">
    <div class="topbar">
        <input type="checkbox" />
        <span></span>
        <span></span>
        <span></span>
        <ul class="topbar-menu">
            <li><a href="../index.php" class="photograph">Julian Wild</a></li>
            <li class="country"><a href="#">Country ></a>
                <ul>
                    <li><a href="../pages/brasil.php">Brasil</a></li>
                    <hr>
                    <li><a href="../pages/chile.php">Chile</a></li>
                    <hr>
                    <li><a href="../pages/mexico.php">Mexico</a></li>
                    <hr>
                    <li><a href="../pages/peru.php">Peru</a></li>
                </ul>
            </li>
            <li><a href="../pages/profile.php">Biography</a></li>
            <li><a href="../pages/contact.php">Contact</a></li>
        </ul>
    </div>
    <div class="julian">
        <a href="../index.php">JW</a>
    </div>
    <div class="login">
        <a href="../pages/login.php" >Login</a>
    </div>
</nav>
<nav class="nav-bar">
    <a href="../index.php" class="photograph">Julian Wild</a>
    <div class="scrol">
        <li class="country"><a href="#">Country</a>
            <ul>
                <li><a href="../pages/brasil.php">Brasil</a></li>
                <hr>
                <li><a href="../pages/chile.php">Chile</a></li>
                <hr>
                <li><a href="../pages/mexico.php">Mexico</a></li>
                <hr>
                <li><a href="../pages/peru.php">Peru</a></li>
            </ul>
        </li>
    </div>
    <a href="../pages/contact.php">Contact</a>
    <?php
        if (empty($_SESSION['isConnected']) && empty($_SESSION['username'])) { ?>
        <div class="login">
            <a href="../pages/login.php" >Login</a>
        </div>
    <?php } else {?>
        <a href="../pages/profile.php">Profile</a>
    <?php }?>
    <?php
        if (isset($_SESSION['isConnected']) && $_SESSION['isConnected'] === true) {
    ?>
         <form method='POST' action='../index.php' class='logout'>
             <button type="submit" name='logout' >Logout</button>
         </form>
    <?php } else { echo "";} ?>

</nav>