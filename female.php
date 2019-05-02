<?php
include "abshuman.php";
class female extends abshuman
{
    public function move(){
        echo 'human can move';
    }
    public function sleep(){
        echo 'human can sleep';
    }
    public function eat(){
        echo 'human can eat';
    }
    public function voice(){
        echo 'female voice';
    }
}