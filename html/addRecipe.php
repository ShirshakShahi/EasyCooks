<?php
    session_start();
    if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true){
        // Redirect to the login page or show an access denied message
        header("location: login.php");
        exit();
    }
?>
<?php
    if($_SERVER['REQUEST_METHOD']=="POST"){
        include '../partials/_dbconnect.php';
        $uno=$_SESSION['user_number'];
        $recipe_name=$_POST['recipe_title'];
        $kitchen_name=$_POST['kitchen_name'];
        $cooktime=$_POST['cook_time'];
        $temp=$_POST['temperature'];
        $servings=$_POST['servings'];
        $ingredients=$_POST['ingredients'];
        $direction=$_POST['directions'];
        $image = $_FILES['image']['tmp_name'];
        $imageData = file_get_contents($image);
        $imageName = $_FILES['image']['name'];
        
        // Insert the data into the database
        $query = "INSERT INTO recipes (recipe_name,kitchen_name,cooking_time,temperature,no_of_servings,ingredients,directions,user_no,food_image_name,food_image_data)VALUES(?,?,?,?,?,?,?,?,?,?)";
        $stmt=$conn->prepare($query);
        $stmt->bind_param("ssssssssss", $recipe_name, $kitchen_name, $cooktime, $temp, $servings, $ingredients, $direction, $uno, $imageName, $imageData);

        if ($stmt->execute()) {
            $showmsg = true;
        } else {
            $showmsg = false;
        }
        $stmt->close();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EasyCooks | Reach for the Recipes </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="../css/addrecipe.css" rel="stylesheet" />
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
            <a href="user.php"><div class="pfp-container">
                <img src="../assests/logo.png" alt="pfp pic">
            </div></a>
            <button class="button-control"><a href="../html/addRecipe.html">Add Recipe</a></button>
        </nav>
        </div>
    </header>
    <div class="container">
        <div class="main-container">
            <div class="card">
                <form action="<?php $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
                    <div class="form-header">
                        <label class="recipe-header">Recipe:</label>
                        <input type="text" name="recipe_title"/>
                    </div>
                    <div class="form-header">
                        <label>From the Kitchen of </label>
                        <input type="text" name="kitchen_name"/>
                    </div>
                    <div class="form-header">
                        <label>Cook time: </label>
                        <input type="text" name="cook_time" />
                        <label>Temperature: </label>
                        <input type="text" name="temperature"/>
                        <label>Servings: </label>
                        <input type="text" name="servings"/>
                    </div>
                    <label>
                        <h3>Ingredients</h3>
                    </label>
                    <div class="">
                        <div class="ingredients-left">
                           <textarea name="ingredients" id="" cols="30" rows="8" name="ingredients"></textarea>
                        </div>
                    </div>
                    <label>
                        <h3>Directions</h3>
                    </label>
                    <div class="">
                        <div class="ingredients-left">
                          <textarea name="directions" id="" cols="30" rows="8" name="directions"></textarea>
                        </div>
                    </div>
                    <div class="button">
                    <?php
                       
                        if(isset($showmsg) && $showmsg==true){
                            echo"uploaded successfully";
                        }
                        else if(isset($showmsg) && $showmsg==false){
                            echo" upload failed ";
                        }
                    ?>
                    <input type="file" name="image" id="image">
                        <button type="submit">POST</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</body>

</html>