<main>
    <div class="container mt-4">
        <div class="row">
            <div class="col">
                <h1><?=$title?></h1>
            </div>
        </div>
        <div class="row">

        <!-- News -->
            <?php foreach ($results as $result): ?>
                <div class="col-md-12 col-lg-10 offset-lg-1">
                    <div class="card border-primary mb-3">

                        <!-- News header -->
                        <div class="card-header">
                            <div class="row">
                                <div class="col"><h4><?= $result['name']; ?></h4></div>
                                <div class="col d-flex justify-content-end"><?= $result['date']; ?></div>
                            </div>
                        </div>

                        <!-- News content -->
                        <div class="card-body">
                            <h4 class="card-title">
                                <?= $result['title']; ?>
                            </h4>
                            <p class="card-text">
                                <?= $result['content']; ?>
                            </p>
                        </div>

                    </div>
                </div>
            <?php endforeach;?>

        </div>
    </div>
</main>