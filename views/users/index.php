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
                        <a class="btn btn-info" href="/admin/users/show?id=<?=$user->id?>">View</a>
                        <a class="btn btn-warning" href="/admin/users/edit?id=<?=$user->id?>">Edit</a>
                        <form action="/admin/users/delete?id=<?=$user->id?>" method="POST" style="display: inline;">
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php include 'views/partials/footer.php' ?>