<?php
    if(!defined('ABSPATH')){
    header("Location: /youtube");
    die();
}      

    $user = get_userdata(get_current_user_id());
    $user_id = get_current_user_id();

    if($user != false){
        $user_type = get_usermeta($user_id, 'type');
        $display_name = get_usermeta($user_id, 'display_name');
        echo $display_name;
    }
?>