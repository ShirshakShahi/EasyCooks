<?php
    $showerr=false;
    if($_SERVER['REQUEST_METHOD']=="POST"){
        include "../partials/_dbconnect.php";
        $form_email=$_POST['email'];
        $form_password=$_POST['password'];
        $user_exist_check=mysqli_query($conn,"select * from users where user_email='$form_email'");
        $num_recs=mysqli_num_rows($user_exist_check);
        if($num_recs==1){
            $row=mysqli_fetch_assoc($user_exist_check);
            if(password_verify($form_password,$row['password'])){  
                session_start();
                $_SESSION['loggedin']=true;
                $_SESSION['user_email']=$row['user_email'];
                header("location: landing.php"); 
            }
            else{
                $showerr=true;
            }
        }
        else{
            $showerr=true;
            // $showerr="Invalid email or password. Please try again."
        }

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" zcontent="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <title>EasyCooks | Reach for the Recipes </title>
</head>
<body>
    <?php 
        include '../partials/_dbconnect.php';
    ?>
    <div class="container">
        <div class="main-container">
            <div class="card">
                <div class="card-heading">
                    <h2>EasyCooks Login</h2>
                    <?php
                        if($showerr){
                            echo'<p style="color: red">Invalid email or password. Please try again.</p>';
                        }
                        else{
                            echo ' <p>Hey, Enter your details to get sign in to your account</p>';
                        }
                    ?>
                </div>
                <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                    <input type="text" name="email" autocomplete="off" placeholder="Enter Email / Phone number" required />
                    <input type="password" name="password" autocomplete="off" placeholder="Password" required/>
                    <p>Having trouble in sign in?</p>
                    <button type="submit">Sign in</button>
                    <p>&mdash; Or sign in with &mdash;</p>
                </form>
               
                <div class="card-footer">
                    <span class="card-footer-items">Google</span>
                    <span class="card-footer-items">Apple ID</span>
                    <span class="card-footer-items">Facebook</span>
                </div>
                <p>Don't have an account ? <a href="../html/signup.php"><span class="sign-up">Sign up</span></p>
            </div>
        </div>
    </div>
</body>
</html>