<?php include 'includs/header.php'?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">Series</h2>
                    </div>
                    <div class="card-body">
                        <form action="route.php?page=get-series-result" method="post">
                            <div class="row mb-4">
                                <label for="" class="col-md-4">First Number</label>
                                <div class="col-md-8">
                                    <input type="number" name="first_number" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="" class="col-md-4">second Name</label>
                                <div class="col-md-8">
                                    <input type="number" name="second_number" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-md-4">
                                    <label for="">Option</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="radio"  value="Odd" name="Option" style="margin-right: 2px">Odd
                                    <input type="radio" value="Even" name="Option" style="margin-right: 2px">Even
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="" class="col-md-4">Result</label>
                                <div class="col-md-8">
                                    <textarea name="" id="" cols="30" rows="10"><?php
//                                        echo isset($_GET['result']) ? rtrim($_GET['result'], '') :'';
                                        echo isset($result) ? $result :''
                                        ?>
                                    </textarea>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="" class="col-md-4"></label>
                                <div class="col-md-8">
                                    <input type="submit" class="btn btn-outline-success" value="Get Result">
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'includs/footer.php'?>
