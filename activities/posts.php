<?php 
namespace activities;
class posts{
    public function postPage_EN(){
        require_once (BASE_PATH . "/template/postPage.php");
    }
    public function postPage(){
        require_once (BASE_PATH . "/template/postPage-fn.php");
    }


}


?>