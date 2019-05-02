<?php

/**
 * Created by PhpStorm.
 * User: Aupu
 * Date: 5/2/2019
 * Time: 8:28 AM
 */
include 'humaninterface.php';
abstract class abshuman implements humaninterface
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
    abstract public function voice();
}