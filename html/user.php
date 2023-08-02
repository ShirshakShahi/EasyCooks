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
                <li><a href="landing.php"> <i class="fa-solid fa-house"></i></a></li>
                <li>
                    <img src="../assests/EasyCooksSum.png" alt="easycooks logo">
                </li>
            </ul>
        </nav>
        <nav class="header-second">
            <?php
            include '../partials/_dbconnect.php';
            $dpFetch=mysqli_query($conn,"select * from users where user_no='$uid'");
            $dparr=mysqli_fetch_assoc($dpFetch);
            echo '<div class="pfp-container">
            <img src="data:image/jpeg;base64,' . base64_encode($dparr['dp_image_data']) .'" alt="'. $dparr['dp_image_name'] .'">
            </div>'
            ?>
            <button type="submit" class="button-control"><a href="../html/addRecipe.php" class="teko-font">Add Recipe</a></button>
        </nav>
        </div>
    </header>
    <?php
    include  "../partials/_dbconnect.php";
    $res=mysqli_query($conn,"select * from users where user_no='$uid'");
    $row=mysqli_fetch_assoc($res);
    echo '<div class="banner">
    <div class="profile-container">
    <div class="user-pp">
    <img src="data:image/jpeg;base64,' . base64_encode($row['dp_image_data']) .'" alt="'. $row['dp_image_name'] .'">
    </div>
    <div class="personal-inf">
        <h1 class="teko-font">'.$row['user_name'].'</h1>
        <p class="lighter-font"><i>'.$row['user_email'].'</i></p>
    </div>
    </div>
    </div>
    <div class="post-header">
        <h1 class="teko-font">Your Posts</h1>
    </div>';
    ?>
    <?php
        include '../partials/_dbconnect.php';
        $user_posts=mysqli_query($conn,"select * from recipes where user_number='$uid'");
        while($row=mysqli_fetch_assoc($user_posts)){
            echo '
            <div class="container">
                <div class="main-container">
                    <div class="image-sec">
                        <img src="data:image/jpeg;base64,' . base64_encode($row['food_image_data']) .'" alt="'. $row['food_image_name'] .'">
                    </div>
                    <div class="card-desc">
                        <h2 align="center" style="font-size:2.5em;" class="teko-font"><u>'.$row['recipe_title'].'</u></h2>

                        <div class="scroll-content">

                        <h3 style="font-size:1.7em;" class="teko-font para-scroll">From the Kitchen of: '.$row['kitchen_name'].'</h3>
                    
                        <h3 style="font-size:1.7em;" class="teko-font para-scroll">Cooking temperature: '.$row['temperature'].'</h3>
                        
                        
                        <h3 style="font-size:1.7em;" class="teko-font para-scroll">Number of Servings: '.$row['servings'].'</h3>
                        
                        
                        <h3 style="font-size:1.7em;" class="teko-font para-scroll">Cook Time: '.$row['cook_time'].'</h3>
                        
                        <h3 style="font-size:1.7em;" class="teko-font ">Ingredients:</h3>
                        <p class="para-scroll">'.$row['ingredients'].'</p>

                        <h3 style="font-size:1.7em;" class="teko-font ">Directions:</h3>
                        <p class="para-scroll">'.$row['directions'].'</p>
                        </div>
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
