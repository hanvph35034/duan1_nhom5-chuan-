<?php 

function is_error($form_err){
    global $error;
    if(!empty($error[$form_err])){
        return $error[$form_err];
    }
}