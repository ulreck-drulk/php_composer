<?php

if (! function_exists('upper')) {
    function upper($value){
        return Text\format::upperText($value);
    }
}

if (! function_exists('lower')) {
    function lower($value){
        return Text\format::lowerText($value);
    }    
}


