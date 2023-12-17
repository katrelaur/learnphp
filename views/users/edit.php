<?php include 'views/partials/header.php' ?>
<form action="/admin/users/edit?id=<?=$user->id?>" method="POST">
    <div class="mb-3">
        <label for="title" class="form-label">E-mail</label>
        <input type="text" value="<?=$user->email?>" class="form-control" id="email" placeholder="Email" name="email">
    </div>
    <div class="mb-3">
        <label for="body" class="form-label">Password</label>
        <input type="password" value="<?=$user->password?>" class="form-control" id="password" placeholder="Password" name="password">
    </div>
    <input type="submit" class="btn btn-primary" value="Update">
</form>
<?php include 'views/partials/footer.php' ?>