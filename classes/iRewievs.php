<?php

interface iRewievs{
    public function add_rewiev($rewiev);
    public function change_rewiev($id);
    public function delete_rewiev($id);
    public function show_rewievs();
}