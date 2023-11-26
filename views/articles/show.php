<?php include 'views/partials/header.php' ?>
    <table class="table table-striped table-hover">
        <tr>
            <th>Id</th>
            <td><?=$article->id?></td>
        </tr>
        <tr>
            <th>Title</th>
            <td><?=$article->title?></td>
        </tr>
        <tr>
            <th>Content</th>
            <td><?=$article->body?></td>
        </tr>
    </table>
<?php include 'views/partials/footer.php' ?>