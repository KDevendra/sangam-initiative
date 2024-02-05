<?php defined("BASEPATH") or exit("No direct script access allowed");
function generateSalt($length = 6)
{
    $str = "";
    $characters = array_merge(range("A", "Z"), range("a", "z"), range("0", "9"));
    $max = count($characters) - 1;
    for ($i = 0; $i < $length; $i++) {
        $rand = mt_rand(0, $max);
        $str .= $characters[$rand];
    }
    $str = hash("sha512", $str);
    return $str;
}
function AntiFixationInit()
{
    $obj = &get_instance();
    $value = generateSalt();
    $obj->load->helper('cookie');
    set_cookie("ci_fixation", $value, 30 * 60);
    $obj->session->ci_fixation = $value;
}
function generateOTP($length = 4)
{
    $str = "";
    $characters = array_merge(range("0", "9"));
    $max = count($characters) - 1;
    for ($i = 0; $i < $length; $i++) {
        $rand = mt_rand(0, $max);
        $str .= $characters[$rand];
    }
    return $str;
}
function customEncrypt($string)
{
    if ($string === null) {
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
function customDecrypt($string)
{
    $secretKey = 'evbDXau3dj9ASJG3PWundQ==';
    $cipher = 'AES-256-CBC';
    $iv = '!#%&\'()*+,/:;=?@[]';
    $iv = substr(hash('sha256', $iv), 0, 16);
    $output = base64_decode($string);
    $output = openssl_decrypt($output, $cipher, $secretKey, 0, $iv);
    $output = rtrim($output);
    return $output;
}
if (!function_exists('checkMenuAccess')) {
    function checkMenuAccess($userLevel)
    {
        $CI = &get_instance();
        $menuItems = $CI->db->get('master_menu_items')->result_array();
        $accessQuery = $CI->db->get_where('user_menu_access', ['user_level' => $userLevel]);
        $accessData = $accessQuery->result_array();
        $menuTree = buildMenuTreeWithAccess($menuItems, $accessData);
        return $menuTree;
    }
}
function buildMenuTreeWithAccess($menuItems, $accessData, $parent = 0)
{
    $tree = [];
    foreach ($menuItems as $menuItem) {
        if ($menuItem['menu_item_level'] == $parent) {
            $hasAccess = hasAccess($menuItem['menu_item_id'], $accessData);
            if ($hasAccess) {
                $menuItem['has_access'] = true;
                $children = buildMenuTreeWithAccess($menuItems, $accessData, $menuItem['menu_item_id']);
                if ($children) {
                    $menuItem['children'] = $children;
                }
                $tree[] = $menuItem;
            }
        }
    }
    return $tree;
}
function hasAccess($menuItemId, $accessData)
{
    foreach ($accessData as $access) {
        if ($access['menu_item_id'] == $menuItemId) {
            return true;
        }
    }
    return false;
}
function checkPermissionHelper($userLevel, $userId)
{
    if ($userLevel === 0 || $userLevel === 1) {
        $permissions = array('set_user_permission' => true, 'client_add' => true, 'client_view' => true, 'client_edit' => true, 'client_delete' => true,);
    } else {
        $CI = &get_instance();
        $CI->load->database();
        $query = $CI->db->get_where('user_permissions', array('login_id' => $userId));
        $row = $query->row();
        $permissions = array('client_add' => false, 'client_view' => false, 'client_edit' => false, 'client_delete' => false,);
        if ($row) {
            $permissions['client_add'] = $row->client_add;
            $permissions['client_view'] = $row->client_view;
            $permissions['client_edit'] = $row->client_edit;
            $permissions['client_delete'] = $row->client_delete;
        }
    }
    return json_encode($permissions);
}
function checkLanguage()
{
    $CI = &get_instance();
    $query = $CI->db->where(['status' => 1])->get('language')->result_array();
    return $query;
}
function countVisitors()
{
    $CI = &get_instance();
    $query = $CI->db->get('visitors')->result_array();
    return $query;
}
function themeCustomizerOptions()
{
    $CI = &get_instance();
    $query = $CI->db->where(['id' => 1])->get('theme_customizer_options')->row();
    if (!empty($query)) {
        return $query;
    } else {
        return (object)['layout' => 'vertical', 'topbar' => 'light', 'sidebar' => 'dark', 'sidebar_size' => 'lg', 'sidebar_image' => 'none', 'preloader' => 'disable', 'theme' => 'default', 'theme_colors' => 'default'];
    }
}
function encryptAndPartiallyDisplayEmail($email)
{
    $parts = explode('@', $email);
    $username = $parts[0];
    $domain = $parts[1];
    $len = strlen($username);
    $hiddenChars = max(2, ceil($len / 3));
    $hiddenUsername = substr($username, 0, $len - $hiddenChars) . str_repeat('*', $hiddenChars);
    return $hiddenUsername . '@' . $domain;
}
function dd($data = null)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
    die();
}
function pr($data = null)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}
