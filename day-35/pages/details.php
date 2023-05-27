<?php include 'includes/header.php'?>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="assets/img/<?=$productdetails["image"]?>" alt="" class="w-100">
            </div>
            <div class="col-md-6">
                <h3><?=$productdetails["name"]?></h3>
                <p>price: <?=$productdetails["price"]?></p>
            </div>
            <div class="col-md-12">
                <p><?=$productdetails["description"]?></p>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'?>