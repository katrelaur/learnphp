<?php include 'views/partials/header.php' ?>
    <table class="table table-bordered table-hover">
        <tr>
            <th>Id</th>
            <td><?=$user->id?></td>
        </tr>
        <tr>
            <th>E-mail</th>
            <td><?=$user->email?></td>
        </tr>
        <tr>
            <th>Password</th>
            <td><?=$user->password?></td>
        </tr>
    </table>
<?php include 'views/partials/footer.php' ?>