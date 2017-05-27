<a href="?page=add">Добавить страницу</a>
<a href="?page=list">Список страниц</a>
<?php

// создаем обьекты
$connectDB = new Db();
$myobject = new Ccontent();

// если от пользователя получены данные
if($_POST){
    if ($_GET["page"]=="add"){
        $myobject->addpage($_POST);
    }
}

// если нажата ссылка
if ($_GET["page"]=="add"){
    require_once ("views/add.php");
}
elseif($_GET["page"]=="list") {
    require_once("views/list.php");
}
else{

}
