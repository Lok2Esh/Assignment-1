<?php 
function getUrl(){
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

switch(getUrl()){
    case '':
        require_once (APPROOT.'/app/views/home/index.php');
        break;
    case 'user-login':
        require_once (APPROOT.'/app/views/home/user-login.php');
        break;
    case 'home':
        require_once (APPROOT.'/app/views/home/index.php');
        break;
    case 'add-product':
        require_once (APPROOT.'/app/views/home/add-product.php');
        break;
    default:
        require_once (APPROOT.'/app/views/home/index.php');
        break;
}