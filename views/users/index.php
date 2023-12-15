<?php include 'views/partials/header.php' ?>
    <a class="btn btn-primary" href="/admin/users/new">New User</a>
    <table class="table table-striped table-hover">
        <thead>
            <th>Id</th>
            <th>E-Mail</th>
            <th class="text-end">Actions</th>
        </thead>
        <tbody>
            <?php foreach($users as $user): ?>
                <tr>
                    <td><?=$user->id?></td>
                    <td><?=$user->email?></td>
                    <td class="text-end">
                    <div class="btn-group" role="group" aria-label="New User">
                        <a class="btn btn-info">View</a>
                        <a class="btn btn-warning">Edit</a>
                        <a class="btn btn-danger">Delete</a>
                    </div>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php include 'views/partials/footer.php' ?>