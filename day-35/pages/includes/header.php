<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <div class="container">
        <a href="" class="navbar-brand">LOGO</a>
        <ul class="navbar-nav mx-auto">
            <li><a href="?page=home" class="nav-link">Home</a></li>
            <li class="dropdown"><a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Categories</a>
                <ul class="dropdown-menu">
                    <?php foreach ($categories as $category) {?>
                    <li><a href="?page=category-Product&&category_id=<?php echo $category['id']?>" class="dropdown-item"><?= $category['name']?></a></li>
                    <?php }?>
                </ul>
            </li>
            <li><a href="" class="nav-link">About</a></li>
            <li><a href="" class="nav-link">Service</a></li>
        </ul>
    </div>
</nav>
