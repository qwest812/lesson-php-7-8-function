<?php
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

function myPrintR(array $arr)
{
    foreach ($arr as $key => $value) {
        if (is_array($value)) {
            echo "[".$key."] Array \n";
            myPrintR($value);
        }else{
            echo "[".$key."] ". $value."\n";
        }
    }
}

echo "<pre>";
myPrintR($arr);
echo "</pre>";
