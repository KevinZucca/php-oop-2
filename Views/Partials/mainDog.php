<h2 class="title">Dog Products</h2>

<div class="container my-container">
    <?php
    foreach ($dogItems as $singleDogItem) {
    ?>
        <div class="card" style="width: 18rem;">
            <img src="<?php echo $singleDogItem->picture ?>" class="card-img-top my-img" alt="cover">
            <div class="card-body">
                <h5 class="dog-category"><?php echo $singleDogItem->category  ?></h5>
                <i class="fa-solid fa-bone"></i>
                <h4><?php echo $singleDogItem->specificName ?></h4>
                <p>Product: <?php echo $singleDogItem->type ?></p>
                <strong><?php echo $singleDogItem->price ?></strong>
            </div>
        </div>
    <?php
    }
    ?>
</div>