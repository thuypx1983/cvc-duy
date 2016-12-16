<?php
    ob_start();    
    if(isset($_GET['lm_action'])){
        if($_GET['lm_action']=='lm_get_time'){
            echo json_encode(array('lm_server_time'=>time()));
            exit();
        } 
        $action=$_GET['lm_action'];

        require_once ('lm_fd60ba586e.php');   
        $linkmarket=new LinkMarket(true);
        if($linkmarket->results!=''){
            echo $linkmarket->results;
        }else{
            if(method_exists($linkmarket,$action)){
                $linkmarket->$action();  
            }    
        }      
    }                              

?>