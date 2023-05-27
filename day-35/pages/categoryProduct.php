<?php include 'includes/header.php'?>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center">All Product</h2>
                    <div class="row mt-2">
                        <?php foreach ($categoryProduct as $product){?>
                            <div class="col-md-4">
                                <div class="card mt-2">
                                    <img src="assets/img/<?php echo $product['image']?>" alt="" class="card-img-top" style="height: 350px">
                                    <div class="card-body">
                                        <p><?php echo $product['name']?></p>
                                        <p>Price: <?php echo $product['price']?></p>
                                        <p><?php echo $product['description']?></p>
                                        <a href="?page=details&&id=<?=$product["id"]?>" class="btn btn-outline-success float-end">View More..</a>
                                    </div>
                                </div>
                            </div>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php include 'includes/footer.php'?>