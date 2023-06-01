<?php include 'includs/header.php'?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">Manage Students</h2>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Image</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($students as $index =>$student){?>
                                <tr>
                                    <td>1</td>
                                    <td><?php echo $student['name']?></td>
                                    <td><?php echo $student['email']?></td>
                                    <td><?php echo $student['phone']?></td>
                                    <td>
                                        <img src="<?=$student['image']?>" class="img-fluid" style="height: 80px" alt="">
                                    </td>
                                </tr>
                            <?php }?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'includs/footer.php'?>
