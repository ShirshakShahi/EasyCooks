<?php
session_start();
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
    <div class="container">
        <div class="main-container">
            <div class="image-sec">
                <img src="../assests/stock-photo-fresh-homemade-italian-pizza-margherita-with-buffalo-mozzarella-and-basil-1829205563.jpg"
                    alt="food-pic" />
            </div>
            <div class="card-desc">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Totam qui dolorum voluptatem perferendis?
                    Culpa, tenetur nihil! Ipsam quos nostrum, aliquid fugiat nesciunt sequi. Repellat consequuntur
                    corrupti, vel atque exercitationem aspernatur?</p>
                <div class="btn-container">
                    <button id="trash"><a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a></button>
                    <button><a href="#">View More</a></button>
                </div>
            </div>
        </div>
</div> 
</body>
</html>