<?php include 'views/partials/header.php' ?>
<form action="/admin/users" method="POST">
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" placeholder="email" name="email">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" placeholder="password" name="password">
    </div>
    <div class="mb-3">
        <label for="password_confirm" class="form-label">Password</label>
        <input type="password" class="form-control" id="password-confirm" placeholder="password" name="password_confirm">
    </div>
    <input type="submit" class="btn btn-primary" value="Create">
</form>
<?php include 'views/partials/footer.php' ?>