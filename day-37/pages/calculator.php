<?php include 'includes/header.php'?>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">Calculator</h2>
                    </div>
                    <div class="card-body">
                        <form action="route.php?page=calculate" method="post">
                            <div class="row mb-4">
                                <div class="col-md-4">
                                    <label for="">First Number</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="number" value="<?php echo isset($_GET['first-number']) ? $_GET['first-number'] :''; ?>" name="first_number" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-md-4">
                                    <label for="">Second Number</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="number" value="<?php echo isset($_GET['second-number']) ? $_GET['second-number'] :''; ?>" name="second_number" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="" class="col-md-4">Option</label>
                                <div class="col-md-8">
                                    <label for="" style="margin-right: 5px"><input type="radio" name="option" checked value="+" style="margin-right: 2px">+</label>
                                    <label for="" style="margin-right: 5px"><input type="radio" name="option" checked value="-" style="margin-right: 2px">-</label>
                                    <label for="" style="margin-right: 5px"><input type="radio" name="option" checked value="*" style="margin-right: 2px">*</label>
                                    <label for="" style="margin-right: 5px"><input type="radio" name="option" checked value="/" style="margin-right: 2px">/</label>
                                    <label for="" style="margin-right: 5px"><input type="radio" name="option" checked value="%" style="margin-right: 2px">%</label>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-md-4">
                                    <label for="">Result</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="number" class="form-control" value="<?php echo isset($_GET['message']) ? $_GET['message'] :''; ?>" readonly>
                                </div>
                            </div>
                            <input type="submit" class="btn btn-outline-danger float-end">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'includes/footer.php'?>
