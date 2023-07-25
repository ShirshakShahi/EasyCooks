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
            <div class="pfp-container">
                <img src="../assests/logo.png" alt="pfp pic">
            </div>
            <button type="submit" class="button-control"><a href="../html/addRecipe.html">Add Recipe</a></button>
        </nav>
        </div>
    </header>
    <div class="container">
        <div class="main-container">
            <div class="card">
                <form>
                    <div class="form-header">
                        <label class="recipe-header">Recipe:</label>
                        <input type="text" />
                    </div>
                    <div class="form-header">
                        <label>From the Kitchen of </label>
                        <input type="text" />
                    </div>
                    <div class="form-header">
                        <label>Cook time: </label>
                        <input type="text" />
                        <label>Temperature: </label>
                        <input type="text" />
                        <label>Servings: </label>
                        <input type="text" />
                    </div>
                    <label>
                        <h3>Ingredients</h3>
                    </label>
                    <div class="">
                        <div class="ingredients-left">
                           <textarea name="ingredients" id="" cols="30" rows="8"></textarea>
                        </div>
                    </div>
                    <label>
                        <h3>Directions</h3>
                    </label>
                    <div class="">
                        <div class="ingredients-left">
                          <textarea name="directions" id="" cols="30" rows="8"></textarea>
                        </div>
                    </div>
                    <div class="button">
                        <button>POST</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</body>

</html>