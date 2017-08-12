<?php
// автозагрузка классов
function __autoload($name)
{
    require_once('classes/' . $name . '.php');
}
?>

<!DOCTYPE html>
<html lang="ru">

<head>

    <!--Meta-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--End Meta-->

    <title></title>

    <!--CSS-->
    <link href="style/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="style/style.css" rel="stylesheet" />

    <!--End CSS-->

    <!--Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Marck+Script&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <!--End Fonts-->

    <!--Favicon-->
    <link rel="shortcut icon" href="favicon.ico" />
    <!--End Favicon-->

    <!--Java scripts-->
    <script src="admin/js/bootstrap/bootstrap.min.js"></script>
    <!--End Java scripts-->

</head>

<body>
