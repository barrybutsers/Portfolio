<?php
    
define ('SALT','portfol1o');

function sendEmail($sendArgs){
    if (isset($sendArgs['to']) && !empty($sendArgs['to'])) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"http://itstudy.eu/kw1c/php/send.php");
        curl_setopt($ch, CURLOPT_POST, 1);
        //curl_setopt($ch, CURLOPT_POSTFIELDS, "postvar1=value1&postvar2=value2");
        $sendArgs['ha'] = hash('sha256', SALT.$sendArgs['to']);
        curl_setopt($ch, CURLOPT_POSTFIELDS, 
             http_build_query($sendArgs));
        // receive server response ...
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec ($ch);
        curl_close ($ch);
        return $response;
    }  
    else {
      return "geen to";   
    } 
}
function checkCookie(){
    // Het aanmaken van de cookie
    if(!isset($_COOKIE)){
       setcookie("loginAmount", 1); 
    }
    // Het uitlezen van de cookie
    $timesLoggedIn = 0;
    if( isset($_COOKIE['loginAmount'])){
        $timesLoggedIn = $_COOKIE['loginAmount'];
        setcookie ("loginAmount", $timesLoggedIn + 1);
    }
    // Het veranderen van een cookie
    if(isset($_COOKIE['loginAmount'])){
        $timesLoggedIn = $_COOKIE['loginAmount'];
    }
    else{
        setcookie("loginAmount",1);
    }
    return $timesLoggedIn;
}
?>