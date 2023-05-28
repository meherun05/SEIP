<?php

require_once 'vendor/autoload.php';
use App\classes\FullName;

if (isset($_GET['page']))
{
    if ($_GET['page']=='home')
    {
        include 'pages/home.php';
    }elseif ($_GET['page']=='formPage')
    {
        include 'pages/formPage.php';
    }elseif ($_GET['page']=='get-full-name')
    {
//        echo '<pre>';
////        print_r($_POST);
//        echo $_POST['first_name'];
        $fullName= new FullName($_POST);
        $result=$fullName->getFullName();
        echo $result;
    }
}