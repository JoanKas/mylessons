<br><br>
<?php
$list = $myobject->pagelist();
foreach ($list as $v){
    ?>
    <a href="?edit=<?php echo $v["id"];?>"><?php echo $v["menu_name"];?></a>;
    <?php
}
//var_dump($list);

