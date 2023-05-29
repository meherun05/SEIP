<?php

require_once "vendor/autoload.php";
use App\classes\FullName;
use App\classes\Calculator;

if(isset($_GET["page"]))
{
    if($_GET["page"] == "home")
    {
        include "pages/home.php";

    }
    elseif ($_GET["page"] == "formPage")
    {
        include "pages/formPage.php";
    }
    elseif ($_GET["page"] == "get-full-name")
    {

        $fullName = new FullName($_POST);
        $result = $fullName->getFullName();
        echo $result;
//        echo "<pre>";
//        print_r($_POST);
//        echo "<h1>" .$_POST["first_name"]. "</h1>";
    }
    elseif ($_GET["page"] == "calculator")
    {
        include "pages/calculator.php";
    }
    elseif ($_GET['page']=='calculate')
    {
        $calculator = new Calculator($_POST);
        $calculator ->calculate();

    }
}
