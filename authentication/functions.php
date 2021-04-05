<?php
function passwordMatch($pass1, $pass2){
    if($pass1 === $pass2){
        return true;
    }else{
        return false;
    }
}

function verify_code_generator($length): string
{
    $text  ="";

    $len = rand($length, $length);

    for ($i=0; $i<$len; $i++){
        $text .= rand(0,9);
    }

    return $text;
}
