<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="assets/CSS/style.css">
</head>
<body>

<!-- Header Start -->
<header class="control">
    <h2>Sport Playmate</h2>

    <div class="control-align">
        <table class="login">
            <tr>
                <td><input type="email" placeholder="Email" class="inputtxt"></td>
                <td><input type="password" placeholder="Password" class="inputtxt"></td>
                <td><input type="button" value="Login" class="btn"></td>
            </tr>
            <tr>
                <td><p><input type="checkbox">Keep me logged in</p></td>
                <td><p><a href="#">Forgotten Password</a></p> </td>
            </tr>
        </table>
    </div>


</header>
<!-- Header Ends -->

<!-- Main Starts -->

<main class="content-control">
    <section class="left">
        <h3>Sport Playmate helps you connect and share with the network of sports lovers in your community</h3>
        <img src="assets/images/sporty.png">
    </section>
    <section class="right">
        <h1>Sign Up</h1>
        <h3>Cost-Free! Anyone can join</h3>

        <form class="ipt">

            <label for="firstname">First Name:</label>
            <Input type="text" placeholder="Enter first name" name="firstname" required class="ipt"><br>
            <label for="lastname">Last Name:</label>
            <Input type="text" placeholder="Enter last name" name="lastname" class="ipt" required ><br>
            <label for="email">Your Email:</label>
            <Input type="text" placeholder="Enter email here" name="email" class="ipt" required><br>
            <label for="psw">New Password:</label>
            <input type="password" placeholder="Enter New Password" name="psw" class="ipt"><br>
            <label>I am </label>
            <input type="radio" name="gender" value="male">Male
            <input type="radio" name="gender" value="female">Female<br>
            <label>Birthday</label>
            <input type="date"><br>
            <input type="button" value="Submit">

        </form>
    </section>


</main>
<!-- Main Ends -->

<!-- Footer Starts -->
<footer>


</footer>
<!-- Footer Ends -->


