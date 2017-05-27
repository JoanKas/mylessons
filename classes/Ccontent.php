<?php

class Ccontent extends Mcontent
{
   // добавляем новую страницу
    public function addpage($data){

        $result = $this->prepareSQL($data);
        $this->addNewPage($result);
    }

    // подготовим запрос
    protected function prepareSQL($data){
        $sql = "INSERT INTO pages (";
        foreach ($data as $k=>$v){
            $sql .=$k.",";
        }

        $sql = substr($sql,0,-1); //удаляем последний символ
        $sql .=") VALUES(";

        foreach ($data as $v){
            $sql .="\"".$v."\",";
        }

        $sql = substr($sql,0,-1); //удаляем последний символ
        $sql .=")";

        return $sql;
    }

    public function pagelist(){
        $allpages = $this->getAllPages();
        while ($result = mysqli_fetch_array($allpages)){
            $data[] = $result;
        }
        var_dump($data);
    }

}