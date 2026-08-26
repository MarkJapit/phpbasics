<?php
include 'header.php';
?>

<main>

    <div class="form-container">

        <h2>Forgot Password?</h2>

        <p class="description">
            Enter your email address and we will help you reset your password.
        </p>

        <form action="#" method="post">

            <label>Email Address</label>

            <input 
                type="email" 
                name="email" 
                placeholder="Enter your email"
                required
            >

            <button type="submit">
                Reset Password
            </button>

        </form>

        <p>
            <a href="login.php">Back to Login</a>
        </p>

    </div>

</main>

<?php
include 'footer.php';
?>