<?php


declare(strict_types=1);

function getAllColors():array
{
    //throw new \BadMethodCallException("Implement the getAllColors function");
    $arr=array("black","brown","red","orange","yellow","green","blue","violet","grey","white");
    return $arr;
}

function colorCode(string $color): int
{
    //throw new \BadMethodCallException("Implement the colorCode function");
    $arr=array(
        "black"=>0,
        "brown"=>1,
        "red"=>2,
        "orange"=>3,
        "yellow"=>4,
        "green"=>5,
        "blue"=>6,
        "violet"=>7,
        "grey"=>8,
        "white"=>9,
    );
    return $arr[$color];
}
