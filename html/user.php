<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true){
    // Redirect to the login page or show an access denied message
    header("location: login.php");
    exit();
}
$user_email=$_SESSION['user_email']; 
$uid=$_SESSION['user_number']; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EasyCooks | Reach for the Recipes </title>
    <link href="../css/user.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header class="header">
        <nav class="header-first">
            <ul>
                <li><a href="#"> <i class="fa-solid fa-house"></i></a></li>
                <li>
                    <img src="../assests/EasyCooksSum.png" alt="easycooks logo">
                </li>
            </ul>
        </nav>
        <nav class="header-second">
            <div class="pfp-container">
                <img src="../assests/logo.png" alt="pfp pic">
            </div>
            <button type="submit" class="button-control"><a href="../html/addRecipe.php">Add Recipe</a></button>
        </nav>
        </div>
    </header>
    <?php
        include  "../partials/_dbconnect.php";
        $res=mysqli_query($conn,"select * from users where user_no='$uid'");
        $row=mysqli_fetch_assoc($res);
        echo '<div class="photo-container">
            <div class= "user-pp">
                <img src="../assests/favicon.png" alt="recipe_image">
            </div>
            </div>
        <div class="personal-inf">
            <h3>'.$row['user_name'].'</h3>
            <h3>'.$row['user_email'].'</h3>
        </div>
        <div class="profile-options">
        </div>
        <div class="post-header">
            <h3 align="center">Your Posts</h3>
        </div>
        ';


        // include '../partials/_dbconnect.php';
        $user_posts=mysqli_query($conn,"select * from recipes where user_no='$uid'");
        while($row=mysqli_fetch_assoc($user_posts)){
            echo '
            <div class="container">
                <div class="main-container">
                    <div class="image-sec">
                        <img src="data:image/jpeg;base64,' . base64_encode($row['food_image_data']) .'" alt="'. $row['food_image_name'] .'">
                    </div>
                    <div class="card-desc">
                        <h2 align="center">'.$row['recipe_name'].'</h2>
                        <h3>Ingredients</h3>
                        <p>'.$row['ingredients'].'</p>
                        <h3>Directions</h3>
                        <p>'.$row['directions'].'</p>
                        <div class="btn-container">
                            <button id="trash"><a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a></button>
                            <button><a href="#">View More</a></button>
                        </div>
                    </div>
                </div>
        </div> 
            ';
        }
    ?>
</body>
</html>