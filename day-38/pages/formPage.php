<?php include 'includs/header.php'?>

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
                                <div class="row mb-4">
                                <label class="col-3">First Name</label>
                               <div class="col-9">
                                   <input type="text" name="first_name" class="form-control">
                               </div>
                             </div>
                            <div class="row mb-4">
                                <label class="col-md-3">Last Name</label>
                                <div class="col-9">
                                    <input type="text" class="form-control" name="last_name">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label class="col-md-3">Full Name</label>
                                <div class="col-9">
                                    <input type="text" class="form-control"  readonly>
                                </div>
                            </div>
                            <input type="submit" value="Get Full Name" class="btn btn-outline-success float-end">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includs/footer.php'?>
