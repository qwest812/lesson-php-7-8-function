<?php

function myStatic(){
    static $count= 0;
    echo $count."<br>";
    $count++;

}


myStatic(); //0
myStatic(); //1
myStatic(); //1


function sql(){
    static $sqlValue="";
    echo $sqlValue;
    if($sqlValue==""){
        echo "test"."<br>";
      $sqlValue ="connect";
    }
    return $sqlValue;
}

sql();
sql();
sql();