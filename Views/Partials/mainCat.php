<h2 class="title">Cat Products</h2>

<div class="container my-container">
    <?php
    foreach ($catItems as $singleCatItem) {
    ?>
        <div class="card" style="width: 18rem;">
            <img src="<?php echo $singleCatItem->picture ?>" class="card-img-top my-img" alt="cover">
            <div class="card-body">
                <h5><?php echo $singleCatItem->category ?></h5>
                <h4><?php echo $singleCatItem->specificName ?></h4>
                <p>Product: <?php echo $singleCatItem->type ?></p>
                <strong><?php echo $singleCatItem->price ?></strong>
            </div>
        </div>
    <?php
    }
    ?>
</div>