<?php
//function recursion($a)
//{
//    if ($a <= 20) {
//        echo $a."<br>";
//        recursion($a + 1);
//    }
//}
//
//recursion(1);


function arProgressive($startNumber,$step){

    if($startNumber<100){
        echo $startNumber."<br>";
        $startNumber= $startNumber +$step;

        arProgressive($startNumber,$step);
    }

}

arProgressive(1,5);

//функция которая возводит в степень
//2^3 =8
//    2 * 2* 2 =8
//
//        3^4=81
//        3*3*3*3 = 81
