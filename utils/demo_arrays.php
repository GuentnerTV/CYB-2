<?php

$data = [1,2,3,44,55,66];
echo ( $data[1]."<br />");
$data[] =77 ;

echo ($data [6]."<br />");

for ($i=0; $i< 7 ; $i++) {

    echo ( $data[$i]."<br />");

}

/* $people = [
    ["Yuri", "Andrienko", 12345],
    ["Vasya", "Pupkin", 7777],


];

for ($i = 0; $i < count($people); $i++){
    echo ($people[$i][0]." - ".$people[$i][2]."<br />");


}                      */





$people = [
    array("FirstName"=>"Yuri", "LastName"=>"Andrienko","salary"=>12345),
    array("FirstName"=>"Vasya", "LastName"=>"Pupkin", "salary"=>7777),
];

for ($i = 0; $i < count($people); $i++){
    echo ($people[$i]["FirstName"]." - ".$people[$i]["salary"]."<br />");
}

