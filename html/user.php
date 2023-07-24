<?php


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
            <button type="submit" class="button-control"><a href="../html/addRecipe.html">Add Recipe</a></button>
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
                <div class="btn-container">
                    <button id="trash"><a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a></button>
                    <button><a href="#">View More</a></button>
                </div>
            </div>
        </div>
    </section>
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
                <div class="btn-container">
                    <button id="trash"><a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a></button>
                    <button><a href="#">View More</a></button>
                </div>
            </div>
        </div>
    </section>
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
                <div class="btn-container">
                    <button id="trash"><a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a></button>
                    <button><a href="#">View More</a></button>
                </div>
            </div>
        </div>
    </section>
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
                <div class="btn-container">
                    <button id="trash"><a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a></button>
                    <button><a href="#">View More</a></button>
                </div>
            </div>
        </div>
    </section>
    <aside>
        <div class="aside-container">
            <div class="dp-container">
                <img src="../assests/EasyCooksLogo.png" a;t="profile picture" id="profilepic" />
            </div>

            <div class="profile-info">
            <?php

           ?>
       <h3> <?php echo $fetch['user_email']; ?></h3>
            </div>
            <button><a href="../html/login.html">Log out</a></button>
        </div>
    </aside>
</body>

</html>