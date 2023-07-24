<?php
    if($_SERVER['REQUEST_METHOD']=="POST"){
        include "../partials/_dbconnect.php";
        $form_email=$_POST['email'];
        $form_password=$_POST['password'];

        $user_exist_check=mysqli_query($conn,"select * from users where user_email='$form_email'");
        if(mysqli_num_rows($user_exist_check)==1){
            $row=mysqli_fetch_assoc($user_exist_check);
            if(password_verify($form_password,$row['password'])){
                session_start();
                $_SESSION['loggedin']=true;
                $_SESSION['user_email']=$row['user_email'];
                echo'logged in';
                // header("something to be added")
            }
            else{
                $_SESSION['loggedin']=false;
                echo"invalid login";
            }
        }

    }

?>