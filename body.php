<a href="?page=add">Добавить страницу</a>
<?php
$connectDB = new Db();
$myobject = new Ccontent();

if ($_GET["page"]=="add"){
    require_once ("views/add.php");
}