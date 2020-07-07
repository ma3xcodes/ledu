<?php

if(!function_exists('hash_main_encode')){
    function hash_main_encode($id){
        return \Hashids::encode($id);
    }
}
if(!function_exists('hash_main_decode')){
    function hash_main_decode($id){
        return \Hashids::decode($id);
    }
}
if(!function_exists('hash_alt_encode')){
    function hash_alt_encode($id){
        return \Hashids::connection('alternative')->encode($id);
    }
}
if(!function_exists('hash_alt_decode')){
    function hash_alt_decode($id){
        return \Hashids::connection('alternative')->decode($id);
    }
}
