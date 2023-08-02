<?php
include  "../partials/_dbconnect.php";
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true){
    // Redirect to the login page or show an access denied message
    header("location: login.php");
    exit();
}
else{
    $uid=$_SESSION['user_number'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EasyCooks | Reach for the Recipes </title>
    <link href="../CSS/landing.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <header class="header">
        
        <nav class="header-first">
            <ul>
            <li><button name="button-control"><a href="logout.php">Logout</a></button></li>
                <li><a href="#"> <i class="fa-solid fa-house"></i></a></li>
                <li>
                   <img src="../assests/EasyCooksSum.png" alt="easycooks logo">
                </li>
            </ul>
        </nav>
        <nav class="header-second"> 
              <a href="user.php"><?php
            include '../partials/_dbconnect.php';
            $dpFetch=mysqli_query($conn,"select * from users where user_no='$uid'");
            $dparr=mysqli_fetch_assoc($dpFetch);
            echo '<div class="pfp-container">
            <img src="data:image/jpeg;base64,' . base64_encode($dparr['dp_image_data']) .'" alt="'. $dparr['dp_image_name'] .'">
            </div>'
            ?></a>
            <?php
            echo '<button type="submit" class="button-control"><a href="addRecipe.php?uid='.$uid.'">Add Recipe</a></button>';
            ?>
        </nav>
        </div>
    </header>
    <section>
        <div class="main-container">
            <div class="image-sec">
                <img src="../assests/stock-photo-fresh-homemade-italian-pizza-margherita-with-buffalo-mozzarella-and-basil-1829205563.jpg"
                    alt="food-pic" />

            </div>

            <div class="card-desc">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Totam qui dolorum voluptatem perferendis?
                    Culpa, tenetur nihil! Ipsam quos nostrum, aliquid fugiat nesciunt sequi. Repellat consequuntur
                    corrupti, vel atque exercitationem aspernatur?</p>
                <button><a href="#">View More</a></button>
            </div>
        </div>
    </section>
</body>

</html>