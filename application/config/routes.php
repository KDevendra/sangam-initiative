<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// route for base URL's
$route['default_controller'] = 'BaseController';
$route['registration'] = 'Authorization/signUp';
// route for authorization
$route['sign-up'] = 'Authorization/signUp';
$route['sign-in'] = 'Authorization/signIn';
$route['post-sign-up'] = 'Authorization/postSignUp';
$route['post-sign-in'] = 'Authorization/postSignIn';
$route['reset-password'] = 'Authorization/resetPassword';
$route['verify-account/(:any)'] = 'Authorization/verifyAccount/$1';
$route['verify-reset-password/(:any)'] = 'Authorization/verifyResetPassword/$1';
$route['post-reset-verify-account'] = 'Authorization/postResetVerifyAccount';
$route['post-verify-account'] = 'Authorization/postVerifyAccount';
$route['post-forgot-password'] = 'Authorization/postForgotPassword';
$route['resendOTP'] = 'Authorization/resendOTP';
$route['forgot-password'] = 'Authorization/resetPassword';
$route['server-down'] = 'Authorization/serverDown';
// route for admin
$route['admin-dashboard'] = 'AdminController/adminDashboard';
$route['profile'] = 'AdminController/profile';
$route['update-profile-image'] = 'AdminController/updateProfileImage';
$route['edit-profile/(:any)'] = 'AdminController/editProfile/$1';
$route['logout'] = 'AdminController/logout';
$route['change-password'] = 'AdminController/changePassword';
$route['post-change-password'] = 'AdminController/postChangePassword';
//route for theme-customizer-options
$route['project-settings'] = 'AdminController/projectSettings';
$route['theme-customizer-options'] = 'AdminController/themeCustomizerOptions';
$route['404_override'] = '';
$route['translate_uri_dashes'] = TRUE;