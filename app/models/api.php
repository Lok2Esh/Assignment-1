<?php 

function getApiUrl(){
    if(isset($_GET['url'])){
        $url = $_GET['url'];
        $url = explode('/',$url);
        // $url .= dirname(dirname(__FILE__));
        // print_r($url);

        foreach($url as $i => $val){
            $i>0;
        }
        
        return $url[$i];
    }
}

// getUrl();

switch(getApiUrl()){
    case 'c-user-register':
        require_once (APPROOT.'/app/controller/c-user-register.php');
        break;
    case 'c-user-login':
        require_once (APPROOT.'/app/controller/c-user-login.php');
        break;
}