<?php include 'views/partials/header.php' ?>
<form action="/register" method="POST">
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" placeholder="Email" name="email">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" placeholder="Password" name="password">
    </div>
    <div class="mb-3">
        <label for="password_confirm" class="form-label">Password Confirm</label>
        <input type="password" class="form-control" id="password_confirm" placeholder="Password Confirm" name="password_confirm">
    </div>
    <input type="submit" class="btn btn-primary" value="Register">
</form>
<?php include 'views/partials/footer.php' ?>