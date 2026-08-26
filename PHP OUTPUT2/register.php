<?php
include 'header.php';
?>

<main>

    <div class="form-container">

        <h2>Create Account</h2>

        <form action="#" method="post">

            <label>Full Name</label>
            <input type="text" name="fullname" placeholder="Enter your full name" required>

            <label>Email Address</label>
            <input type="email" name="email" placeholder="Enter your email" required>

            <label>Password</label>
            <input type="password" name="password" placeholder="Enter your password" required>

            <label>Confirm Password</label>
            <input type="password" name="confirm_password" placeholder="Confirm your password" required>

            <button type="submit">Register</button>

        </form>

        <p>
            Already have an account?
            <a href="login.php">Login here</a>
        </p>

    </div>

</main>

<?php
include 'footer.php';
?>