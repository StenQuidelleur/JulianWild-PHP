<?php
    function getLoginAuth($form){
        if (!empty($form['password']) && (!empty($form['username']) && $form['password']=== '1234')) {
            $_SESSION['username'] = $form['username'];
            $_SESSION['isConnected'] = true ;
            if ($form['profile_image']){
                $_SESSION['profile_image'] =$form['profile_image'];
            } else {
                $_SESSION['profile_image'] = 'https://i.pinimg.com/564x/6c/ed/7a/6ced7a633a312d93915d15cdd939bd4a.jpg';
            }
            if ($_SESSION['isConnected'] === true){
                Header('Location:http://localhost:8000/pages/profile.php');
            }
        } else {
            return $error['password'] = "Please try enter 1234 to try app !";
        }
    }
?>

<?php
    function getUserLogout(){
        unset($_SESSION['isConnected']);
        unset($_SESSION['username']);
        return session_destroy();
    }
?>
