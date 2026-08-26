<?php
include 'header.php';
?>

<main>

    <div class="form-container">

        <h2>Welcome Back</h2>

        <form action="#" method="post">

            <label>Email Address</label>
            <input type="email" name="email" placeholder="Enter your email" required>

            <label>Password</label>
            <input type="password" name="password" placeholder="Enter your password" required>

            <div class="forgot">
                <a href="forgot_password.php">Forgot Password?</a>
            </div>

            <button type="submit">Login</button>

        </form>

        <p>
            Don't have an account?
            <a href="register.php">Register here</a>
        </p>

    </div>

</main>

<?php
include 'footer.php';
?>