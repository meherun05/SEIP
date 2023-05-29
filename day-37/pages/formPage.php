<?php include "includes/header.php" ?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">Full Name</h2>
                    </div>
                    <div class="card-body">
                        <form action="route.php?page=get-full-name" method="post">
                            <div class="mb-4">
                                <label for="">First Name</label>
                                <input type="text" name="first_name" class="form-control">
<!--                                <input type="hidden" name="page" value="get-full-name">-->
                            </div>
                            <div class="mb-4">
                                <label for="">Last Name</label>
                                <input type="text" name="last_name" class="form-control">
                            </div>
                            <div class="mb-4">
                                <label for="">Full Name</label>
                                <input type="text" class="form-control" value="<?php echo isset($_GET['message']) ? $_GET['message'] :''; ?>" readonly>
                            </div>
                            <input type="submit" value="Get Full Name" class="btn btn-outline-success">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include "includes/footer.php" ?>