<a href="?page=add">Добавить страницу</a>
<a href="?page=list">Список страниц</a>

<?php

// создаем обьекты
$connectDB = new Db();
$myobject = new Ccontent();
$myhouse = new House1(1,2);
$myhouse1 = new House1(2,3);
$myhouse2 = new House1(3,4);

$myhouse3 = new House2(1,5);
$myhouse4 = new House2(2,6);

echo "<br>Количество построенных домов: ".House1::$count;
echo "<br>Количество построенных домов: ".House2::$count."<br>";

$myrewiev = new Rewievs();
$myrewiev2 = new Rewievs();
$myrewiev3 = new Rewievs();

$myrewiev4 = new libs\rewievs\Rewievs();

$myrewiev->giveCountRewievs();
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
