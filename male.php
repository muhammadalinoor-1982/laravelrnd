<?php

include "abshuman.php";
class male extends abshuman
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
        echo "male voice";
    }
}