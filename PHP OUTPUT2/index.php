<?php
$pageTitle = "Home";
include "includes/header.php";
?>

<section class="hero">
    <h1>Welcome to MyWebsite</h1>
    <p>A simple PHP website with registration and login pages.</p>

    <div class="buttons">
        <a href="register.php" class="btn">Create an Account</a>
        <a href="login.php" class="btn secondary">Login</a>
    </div>
</section>

<section class="content">
    <h2>About This Website</h2>
    <p>
        This website demonstrates how PHP pages can be connected using
        reusable header and footer files with the include statement.
    </p>
</section>

<?php include "includes/foot.php"; ?>
<?php
$pageTitle = "Register";
include "includes/head.php";
?>

<div class="form-card">
    <h2>Create an Account</h2>

    <form action="#" method="POST">

        <label for="fullname">Full Name</label>
        <input
            type="text"
            id="fullname"
            name="fullname"
            placeholder="Enter your full name"
            required
        >

        <label for="email">Email Address</label>
        <input
            type="email"
            id="email"
            name="email"
            placeholder="Enter your email"
            required
        >

        <label for="password">Password</label>
        <input
            type="password"
            id="password"
            name="password"
            placeholder="Enter your password"
            required
        >

        <label for="confirm_password">Confirm Password</label>
        <input
            type="password"
            id="confirm_password"
            name="confirm_password"
            placeholder="Confirm your password"
            required
        >

        <button type="submit" class="btn">Register</button>
    </form>

    <p class="form-link">
        Already have an account?
        <a href="login.php">Login here</a>
    </p>
</div>

<?php include "includes/footer.php"; ?>
