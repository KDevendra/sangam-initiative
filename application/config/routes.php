<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// route for base URL's
$route['default_controller'] = 'BaseController';
$route['registration'] = 'Authorization/signUp';
$route['login'] = 'Authorization/signIn';
// Routes for About section
$route['about'] = 'BaseController/about';
$route['get-core-competency'] = 'BaseController/getCoreCompetency';
$route['about/why-sangam'] = 'BaseController/whySangam';
$route['about/why-now'] = 'BaseController/whyNow';
$route['about/why-join'] = 'BaseController/whyJoin';
$route['about/participate'] = 'BaseController/participate';
$route['about/process'] = 'BaseController/process';
$route['about/faqs'] = 'BaseController/faqs';
$route['about/curated-content'] = 'BaseController/curatedContent';
$route['about/pre-registration'] = 'BaseController/preRegistration';
// Routes for Events section
$route['events'] = 'BaseController/events';
$route['events/upcoming-events'] = 'BaseController/upcomingEvents';
$route['events/dashboard'] = 'BaseController/dashboard';
$route['events/why-attend'] = 'BaseController/whyAttend';
$route['events/speakers'] = 'BaseController/speakers';
$route['events/schedule'] = 'BaseController/schedule';
$route['events/register'] = 'BaseController/registerEvent';
// Routes for Expression of Interest section
$route['expression-of-interest'] = 'BaseController/expressionOfInterest';
$route['expression-of-interest/about-eoi'] = 'BaseController/aboutEoi';
$route['expression-of-interest/purpose'] = 'BaseController/purposeEoi';
$route['expression-of-interest/stages'] = 'BaseController/stagesEoi';
$route['expression-of-interest/why-participate'] = 'BaseController/whyParticipate';
$route['expression-of-interest/participation-details'] = 'BaseController/participationDetails';
$route['expression-of-interest/submit'] = 'BaseController/submitResponse';
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
$route['eoi-form'] = 'AdminController/eoiForm';
//route for theme-customizer-options
$route['project-settings'] = 'AdminController/projectSettings';
$route['theme-customizer-options'] = 'AdminController/themeCustomizerOptions';
$route['404_override'] = '';
$route['translate_uri_dashes'] = TRUE;