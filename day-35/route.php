<?php
require_once 'vendor/autoload.php';
use App\classes\Category;
use App\classes\Product;

$category=new Category();
$categories=$category->getAllCategories();


if (isset($_GET['page']))
{

    if ($_GET['page']=='home')
    {
        $product=new Product();
        $products =$product->getAllProducts();
        include 'pages/home.php';
    }elseif ($_GET['page']=='category-Product')
    {
        $product=new Product();
        $categoryProduct=$product->getCategoryProduct($_GET['category_id']);
        include 'pages/categoryProduct.php';
    }elseif ($_GET['page']=='details') {
        $product = new Product();
        $productdetails = $product->getProductDetails($_GET["id"]);
        if ($productdetails != null)
        {
            include 'pages/details.php';
        }else{
            include 'pages/error.php';
        }

    }
}