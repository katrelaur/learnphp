<?php include 'views/partials/header.php' ?>
    <a class="btn btn-primary" href="/admin/articles/new">New Article</a>
    <table class="table table-striped table-hover">
        <thead>
            <th>Id</th>
            <th>Title</th>
            <th class="text-end">Actions</th>
        </thead>
        <tbody>
            <?php foreach($articles as $article): ?>
                <tr>
                    <td><?=$article->id?></td>
                    <td><?=$article->title?></td>
                    <td class="text-end">
                    <div class="btn-group" role="group" aria-label="Basic example">
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