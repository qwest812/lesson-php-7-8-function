<?php


function myDeferencing(){
    return [
        "sdf",  //0
        "sdg",//1
        "bxc",//2
        "asdg",//3
        [     //4
            "sdf",
            "sdg",
            "bxc",
            [
                "sdf",
                "sdg",
                "bxc",

            ],
            "asdg",
        ],
    ];
}
echo "<pre>";
var_dump(myDeferencing()[4][3][1]);
echo "</pre>";
//var_dump(myDeferencing()[2]);