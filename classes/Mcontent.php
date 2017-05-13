<?php
class Mcontent extends Db
{
    protected function addNewPage($sql){
        if($this->sql($sql)){
            echo " Страница была успешно добавлена";
        }

    }
}