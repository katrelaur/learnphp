<?php include 'partials/header.php' ?>
<div class="row">
    <?php foreach($articles as $article): ?>
        <div class="col-3 mt-3">
            <div class="card">
            <!-- <img src="..." class="card-img-top" alt="..."> -->
                <div class="card-body">
                    <h5 class="card-title"><?=$article->title?></h5>
                    <p class="card-text"><?=$article->body?></p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
<?php include 'partials/footer.php' ?>