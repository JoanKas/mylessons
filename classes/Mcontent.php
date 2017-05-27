<?php
class Mcontent extends Db
{
    protected function addNewPage($sql){
        if($this->sql($sql)){
            echo " Страница была успешно добавлена";
        }

    }

    public function getAllPages(){
        $sql="SELECT * FROM pages";
        $result=$this->sql($sql);
        return $result;

    }
}