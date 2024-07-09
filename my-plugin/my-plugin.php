<?php
/*
Plugin Name: Form
Author: Himanshu
Description: This is for the login and registration functionality
Version: 1.0
*/

if(!defined('ABSPATH')){
    header("Location: /youtube");
    die();
}



function my_registration_form(){
    ob_start();
    include "public/register.php";
    return ob_get_clean();
}

add_shortcode('my-registration-form', 'my_registration_form');


function my_login_form(){
    ob_start();
    include "public/login.php";
    return ob_get_clean();
}

add_shortcode('my-login-form', 'my_login_form');


function my_login(){
    if(isset($_POST['user_login'])){
        $username =esc_sql($_POST['username']);
        $password = esc_sql($_POST['user-pass']);
        $credentials = array(
            'user_login' => $username,
            'user_password' => $password
        );
        $user = wp_signon($credentials);
        if(!is_wp_error($user)){
          if($user->roles[0] === 'administrator'){
            wp_redirect(admin_url());
            exit;
          }else{
            wp_redirect(site_url('profile'));
            exit;
          }
        }else{
            echo $user->get_error_message();
        }
    }
}
add_action('template_redirect', 'my_login');



function my_profile(){
    ob_start();
    include "public/profile.php";
    return ob_get_clean();
}
add_shortcode('my-profile','my_profile');


function my_check_redirect(){
    $is_user_logged_in = is_user_logged_in();
    if($is_user_logged_in && is_page('login')){
        wp_redirect(site_url('profile'));
        exit;
    }elseif(!$is_user_logged_in && is_page('profile')){
        wp_redirect(site_url('login'));
        exit;
    }
}

add_action('template_redirect', 'my_check_redirect');