<?php
    echo"hello";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/signup.css" rel="stylesheet">
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
                <form>
                    <input type="mail" autocomplete="off" placeholder="enter email / phone number" required />
                    <input type="password" autocomplete="off" placeholder="password" id="password" required />
                    <div id="passwordReq" class="error"></div>
                    <input type="password" autocomplete="off" placeholder="re-enter password" id="confirmPassword" />
                    <div id="confirmPasswordReq" class="error"></div>
                    <button id="btn">Sign up</button>
                    <p>&mdash; Or sign up with &mdash;</p>
                </form>
                <div class="card-footer">
                    <span class="card-footer-items">Google</span>
                    <span class="card-footer-items">Apple ID</span>
                    <span class="card-footer-items">Facebook</span>
                </div>
                <p>Already have an account ? <a href="/html/login.html"><span class="sign-up">Sign in</span></a></p>
            </div>
        </div>
        <div class="side-image">
            <img src="/assests/signup.png" alt="test" height="500" width="500" />
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing possimus, dolore tenetur! Ipsa.</p>
        </div>
    </div>
    <script src="/js/signup.js"></script>
</body>

</html>