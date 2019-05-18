<?php
function myPow($number, $pow){
    if($number==1){
        return 1;
    }
    if($pow==0){
        return  0;
    }
    if($pow==1){
        return $number;
    }
    return $number * myPow($number, $pow-1);

};


echo myPow(2,4);


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
            "asdg",
        ],
        "asdg",
    ],
];


echo "<pre>";
print_r($arr);
echo"</pre>";

//функция которая возводит в степень
//2^3 =8
//    2 * 2* 2 =8
//
//        3^4=81
//        3*3*3*3 = 81