<?php
$showAlert=false;
$showError=false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
    include '../partials/_dbconnect.php';
     $email=$_POST["email"];
     $password=$_POST["password"];
     $cpassword=$_POST["cpassword"];
     $usernameArr=explode("@",$email);
     $username=$usernameArr[0];
     $image = $_FILES['image']['tmp_name'];
     $imageData = file_get_contents($image);
     $imageName = $_FILES['image']['name'];

     //Checking whether the email already exists
     $existSql="Select * from users where user_email='$email'";
     $result= mysqli_query($conn,$existSql);
     $numExistrows=mysqli_num_rows($result);
     if($numExistrows>0){
        $showError="Email Already exists, Please try with a new Email!!";
    }
    else{
        if($password==$cpassword){
            $hash= password_hash($password,PASSWORD_DEFAULT);
            $sql="Insert into users(`user_email`,`user_name`,`password`,`created_in`,`dp_image_name`,`dp_image_data`) values(?,?,?,current_timestamp(),?,?)";
            $stmt=$conn->prepare($sql);
            $stmt->bind_param("sssss",$email,$username,$hash,$imageName,$imageData);
            if ($stmt->execute()) {
                $showAlert = true;
            }
            $stmt->close();
}
else{
    $showError="Passwords do not match";
}
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/signup.css" rel="stylesheet" type="text/css">
    <link rel="icon" href="../assests/favicon.png" type="image/x-icon">
    <title>EasyCooks | Reach for the Recipes </title>
</head>
<body>
<?php 
    ?>
    <div class="container">
        <div class="main-container">
            <div class="card">
                <div class="card-heading">
                    <h2>EasyCooks Signup</h2>
                   <?php if($showAlert){
        header('location:login.php');
    }
    
    else{
        if($showError){
            echo ' <div style="color:red;background-color:white"> <b>'. $showError.'</b>
            </div> ';
            }
       echo ' <p>Hey, Enter your details to be one of us.</p>';
    }
    ?>
                </div>
                <form action="<?php $_SERVER['PHP_SELF'] ?>
" method="POST" enctype="multipart/form-data">
                    <input type="mail" autocomplete="off" placeholder="enter email " required name="email"/>
                    <input type="password" autocomplete="off" placeholder="password" id="password" required name="password"/>
                    <div id="passwordReq" class="error"></div>
                    <input type="password" autocomplete="off" placeholder="re-enter password" id="confirmPassword" name="cpassword"/>
                    <div id="confirmPasswordReq" class="error"></div>
                    <input type="file" name="image" id="image" required >
                    <button id="btn" type="submit">Sign Up</button>
                    <p>&mdash; Or sign up with &mdash;</p>
                </form>
                <div class="card-footer">
                    <span class="card-footer-items">Google</span>
                    <span class="card-footer-items">Apple ID</span>
                    <span class="card-footer-items">Facebook</span>
                </div>
                <p>Already have an account ? <a href="../html/login.php"><span class="sign-up">Sign in</span></a></p>
            </div>
        </div>
        <div class="side-image">
            <img src="../assests/signup.png" alt="test" height="500" width="500" />
            <p>Each recipe is a story waiting to be told, a symphony of ingredients harmonizing to create a masterpiece on the plate.</p>
        </div>
    </div>
    <script src="../js/signup.js"></script>
</body>

</html>