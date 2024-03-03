<?php
require_once 'header.php';
?>

<div class="container">
    <div class="row py-r">
        <div class="col-md-5 mx-auto border rounded shadow p-5">
            <h2>Sing Up</h2>
            <form action="" method="post">
                <div class="md-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="email" required>
                </div>
                <div class="md-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password" required>
                </div>
                <button type="submit" class="btn btn-primary">Sing Up</button>
            </form>
            <p class="mt-3 small">Already have an account? <a href="./login.php">Log in</a></p>
        </div>
    </div>
</div>

<?php
require_once 'footer.php';
?>
