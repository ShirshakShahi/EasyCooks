<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/signup.css" rel="stylesheet" type="text/css">
    <link rel="icon" href="/assests/favicon.png" type="image/x-icon">
    <title>EasyCooks | Reach for the Recipes </title>
</head>
<body>
    <div class="container">
        <div class="main-container">
            <div class="card">
                <div class="card-heading">
                    <h2>EasyCooks Signup</h2>
                    <p>Hey, Enter your details to be one of us.</p>
                </div>
                <form action="/partials/_handleSignUp.php" method="POST">
                    <input type="mail" autocomplete="off" placeholder="enter email / phone number" required name="mail"/>
                    <input type="password" autocomplete="off" placeholder="password" id="password" required name="password"/>
                    <div id="passwordReq" class="error"></div>
                    <input type="password" autocomplete="off" placeholder="re-enter password" id="confirmPassword" name="cpassword"/>
                    <div id="confirmPasswordReq" class="error"></div>

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