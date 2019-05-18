<?php
function differentArgs($asdas){
    echo "<pre>";
    var_dump(func_num_args());
    echo "</pre>";


    echo "<pre>";
    var_dump(func_get_args());
    echo "</pre>";

}

//differentArgs("dsd","12sa","sdas","asdasd","asdas");


// функция должна возвращать сумму всех аргументов

function sumArgs(){
    $numberArgs =func_num_args();
    $arrArg=func_get_args();
    $result=0;
    for($i =0; $i<$numberArgs;$i++){
        $result+=$arrArg[$i];
//        $result=$result+$arrArg[$i];
    }
    return $result;
}


//echo sumArgs(1,"daas",[],4,[],6, "sadsa", "asdas", 32, []); //21

//функция должна возвращать массив
function countTypeArgs(){
    $arrArg=func_get_args();
    $countArr=0;
    $countString=0;
    $countNumber=0;
    foreach ($arrArg as $value){
        if(is_array($value)){
            $countArr++;
        }
        if(is_string($value)){
            $countString++;
        }
        if(is_numeric($value)){
            $countNumber++;
        }
    }
    return [
        "string"=>$countString,
        "array"=>$countArr,
        "number"=>$countNumber,
    ];
}
echo "<pre>";
var_dump(countTypeArgs(1,"daas",[],4,[],6, "sadsa", "asdas", 32, [],3,4,5,[]));
echo "</pre>";
