<?php
include  "../partials/_dbconnect.php";
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true){
    // Redirect to the login page or show an access denied message
    header("location: login.php");
    exit();
}
    $uid=$_SESSION['user_number'];
    if(isset($_GET['rid'])){
    $recipeId=$_GET['rid'];
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $comment_content=$_POST['comment'];
        $result=mysqli_query($conn,"insert into comments values(' ','$uid','$comment_content',current_timestamp,'$recipeId')");        
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EasyCooks | Reach for the Recipes </title>
    <link rel="stylesheet" href="../css/landing1.css">
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
            <a href="user.php"><?php
                include '../partials/_dbconnect.php';
                $dpFetch=mysqli_query($conn,"select * from users where user_number='$uid'");
                $dparr=mysqli_fetch_assoc($dpFetch);
                echo '<div class="pfp-container">
                <img src="data:image/jpeg;base64,' . base64_encode($dparr['dp_image_data']) .'" alt="'. $dparr['dp_image_name'] .'" >
                </div>';
            ?>
            </a>
            <button type="submit" class="button-control"><a href="addRecipe.php" class="teko-font">Add
                    Recipe</a></button>
            <button class="button-control"><a style="background-color: inherit;" class="teko-font"
                    href="logout.php">Logout</a></button>
        </nav>
        </div>
    </header>
    <h1 style="text-align: center;margin-top: 10px;" class="teko-font">Look for other's recipe</h1>
    <?php
         include '../partials/_dbconnect.php';
         $user_posts=mysqli_query($conn,"select * from recipes where user_number!='$uid'");
         while($row=mysqli_fetch_assoc($user_posts)){
             $rid=$row['recipe_id'];
             $comment_fetch=mysqli_query($conn,"select * from comments where recipe_id='$rid'");
             echo'
             <section>
                <div class="main-container">
                    <div class="upper-section">
                        <div class="image-sec">
                            <img src="data:image/jpeg;base64,' . base64_encode($row['food_image_data']) .'" alt="'. $row['food_image_name'] .'">
                        </div>
                         <div class="food-desc">
                            <h2 align="center" style="font-size:2.5em;" class="teko-font">'.$row['recipe_title'].'</h2>
                                <div class="scroll-content">
                                <p style="font-size:1.7em;" class="teko-font para-scroll">From the Kitchen of: '.$row['kitchen_name'].'</p>

                                <h3 style="font-size:1.7em;" class="teko-font para-scroll">Cooking temperature: '.$row['temperature'].'</h3>
 
                                <h3 style="font-size:1.7em;" class="teko-font para-scroll">Number of Servings: '.$row['servings'].'</h3>
 
                                <h3 style="font-size:1.7em;" class="teko-font para-scroll">Cook Time: '.$row['cook_time'].'</h3>
 
                                <h3 style="font-size:1.7em;" class="teko-font ">Ingredients:</h3>
                                <p class="para-scroll">'.$row['ingredients'].'</p>
 
                                <h3 style="font-size:1.7em;" class="teko-font ">Directions:</h3>
                                <p class="para-scroll">'.$row['directions'].'</p>
                                </div>
                        </div>
                    </div>
                    <div class="lower-section">
                        <form action="landing.php?rid='.$rid.'" method="post" >
                            <div class="input-section">
                                <input type="text" placeholder="add comment" name="comment" />
                                <button type="submit">submit</button>
                            </div>
                        </form>
                        <div class="comments-section">
                            <h2 class="teko-font" align="center">All comments</h2>
                            <div class="comment-sec">
                                <div class="comment-dp">
                                    <img src="data:image/jpeg;base64,'.base64_encode($dparr   ['dp_image_data']) .'" alt="'. $dparr   ['dp_image_name'] .'">
                                 </div>
                                 <div class="comment-content">
                                    <div class="comment-user-info">

                                    </div>
                                    <p>'.$comm_cont.'</p>
                                </div>
                        </div>
                    </div>
                </div>
            </section>';
            
         }
    ?>
   
</body>

</html>