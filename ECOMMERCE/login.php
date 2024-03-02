<?php
require_once 'header.php';
?>
<div class="container">
    <div class="row py-5">
        <div class="col-md-5 mx-auto border rounded shadow p-5">
            <h2>Login</h2>
            <form action="" method="post">
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="passwoed" class="form-label">Password</label>
                    <input type="passwoed" name="password" class="form-control" id="password" required>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
            <!-- sign up form link -->
            <p class="mt-3 small">Don't have an account? <a href="./signup.php">Sign up</a></p>
        </div>
    </div>
</div>

<?php
require_once 'footer.php';
?>
