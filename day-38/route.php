<?php

require_once 'vendor/autoload.php';
use App\classes\FullName;
use App\classes\Series;
use App\classes\Student;
use App\classes\Auth;

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
    }elseif ($_GET['page']=='series')
    {
        include 'pages/series.php';
    }elseif ($_GET['page']=='get-series-result'){
        $series=new Series($_POST);
        $result=$series->getOddEvenResult();
        include 'pages/series.php';
    }elseif ($_GET['page']=='add-student'){
        include 'pages/student.php';
    }elseif ($_GET['page']=='create-student'){
       $student = new Student($_POST, $_FILES);
       $message= $student->addStudent();
        include 'pages/student.php';
    }elseif ($_GET['page']=='manage-student')
    {
        $student=new Student();
        $students=$student->getAllStudents();
        include 'pages/manage-student.php';
    }elseif ($_GET['page']=='login')
    {
        include 'pages/login.php';
    }elseif ($_GET['page']=='login-submit')
    {
        $auth= new Auth($_POST);
        $message=$auth->login();
        include 'pages/login.php';
    }
}