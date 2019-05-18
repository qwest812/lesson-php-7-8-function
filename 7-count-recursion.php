<?php
function myCount(array $arr){
    $count[0]=0;
    foreach ($arr as $item) {
        if(is_array($item)){
            array_push($count,"---");
            array_push($count,myCount($item));
        }else{
            $count[0]++;
        }
    }
    return $count;
}
$arr = [
    "sdf",
    "sdg",
    "bxc",
    "asdg",
    [
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
echo "<pre>";
var_dump( myCount($arr));
echo "</pre>";
