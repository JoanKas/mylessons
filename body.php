<a href="?page=list">Список страниц</a>
<a href="?page=add">Добавить страницу</a>
<?php

$connection_to_DB = new Db(); // подключаемся к БД
$myobject = new Ccontent();

if($_GET["page"]=="list"){
    require_once ("views/list.php");
}
elseif ($_GET["page"]=="add"){
    require_once ("views/add.php");
}
else{

}