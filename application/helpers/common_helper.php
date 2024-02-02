<?php defined("BASEPATH") or exit("No direct script access allowed");
function generateSalt($length = 6) {
    $str = "";
    $characters = array_merge(range("A", "Z"), range("a", "z"), range("0", "9"));
    $max = count($characters) - 1;
    for ($i = 0;$i < $length;$i++) {
        $rand = mt_rand(0, $max);
        $str.= $characters[$rand];
    }
    $str = hash("sha512", $str);
    return $str;
}
function AntiFixationInit() {
    $obj = & get_instance();
    $value = generateSalt();
    $obj->load->helper('cookie');
    set_cookie("ci_fixation", $value, 30 * 60);
    $obj->session->ci_fixation = $value;
}
function generateOTP($length = 4) {
    $str = "";
    $characters = array_merge(range("0", "9"));
    $max = count($characters) - 1;
    for ($i = 0;$i < $length;$i++) {
        $rand = mt_rand(0, $max);
        $str.= $characters[$rand];
    }
    return $str;
}
function customEncrypt($string) {
    // Check if $string is null and handle it appropriately
    if ($string === null) {
        $string = ''; // Or handle it in another way that makes sense for your application
        
    }
    $secretKey = 'evbDXau3dj9ASJG3PWundQ==';
    $cipher = 'AES-256-CBC';
    $iv = '!#%&\'()*+,/:;=?@[]';
    $iv = substr(hash('sha256', $iv), 0, 16);
    if (strlen($string) < 80) {
        $string = str_pad($string, 80, ' ', STR_PAD_RIGHT);
    }
    $output = openssl_encrypt($string, $cipher, $secretKey, 0, $iv);
    $output = base64_encode($output);
    return $output;
}
function customDecrypt($string) {
    $secretKey = 'evbDXau3dj9ASJG3PWundQ==';
    $cipher = 'AES-256-CBC';
    $iv = '!#%&\'()*+,/:;=?@[]';
    $iv = substr(hash('sha256', $iv), 0, 16);
    $output = base64_decode($string);
    $output = openssl_decrypt($output, $cipher, $secretKey, 0, $iv);
    $output = rtrim($output);
    return $output;
}
function hasAccess($userId, $menuItemAccess) {
    $CI = &get_instance();
    $query = $CI->db->where(['UserId'=>$userId, 'MenuItemId'=>$menuItemAccess])->get('user_menu_access');
    return $query->result_array();
}
function menuItems() {
    $CI = &get_instance();
    $query = $CI->db->get('menu_items')->result_array();
    return $query;
}
function checkLanguage() {
    $CI = &get_instance();
    $query = $CI->db->where(['status'=>1])->get('language')->result_array();
    return $query;
}
function countVisitors() {
    $CI = &get_instance();
    $query = $CI->db->get('visitors')->result_array();
    return $query;
}
function themeCustomizerOptions() {
    $CI = &get_instance();
    $query = $CI->db->where(['id'=>1])->get('theme_customizer_options')->row();
    if (!empty($query)) {
        return $query;
    } else {
        return (object) array(
            'layout' => 'vertical',
            'topbar' => 'light',
            'sidebar' => 'dark',
            'sidebar_size' => 'lg',
            'sidebar_image' => 'none',
            'preloader' => 'disable',
            'theme' => 'default',
            'theme_colors' => 'default'
        );
    }
}

function encryptAndPartiallyDisplayEmail($email) {
    $parts = explode('@', $email);
    $username = $parts[0];
    $domain = $parts[1];
    $len = strlen($username);
    $hiddenChars = max(2, ceil($len / 3));
    $hiddenUsername = substr($username, 0, $len - $hiddenChars) . str_repeat('*', $hiddenChars);
    return $hiddenUsername . '@' . $domain;
}
function dd($data=null){
    echo "<pre>";
    print_r($data);
    echo "</pre>";
    die;
}
function pr($data=null){
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}