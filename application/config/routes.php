<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// route for base URL's
$route['default_controller'] = 'BaseController';
$route['registration'] = 'Authorization/signUp';
$route['login'] = 'Authorization/signIn';
// Routes for About section
$route['about'] = 'BaseController/about';
$route['living-list'] = 'BaseController/livingList';
$route['get-core-competency'] = 'BaseController/getCoreCompetency';
$route['why-does-it-matter-now'] = 'BaseController/whySangam';
$route['about/why-now'] = 'BaseController/whyNow';
$route['about/why-join'] = 'BaseController/whyJoin';
$route['about/participate'] = 'BaseController/participate';
$route['about/process'] = 'BaseController/process';
$route['about/faqs'] = 'BaseController/faqs';
$route['about/curated-content'] = 'BaseController/curatedContent';
$route['about/pre-registration'] = 'BaseController/preRegistration';
$route['get-involved'] = 'BaseController/getInvolved';
$route['post-case-submission-form'] = 'BaseController/postCaseSubmissionForm';
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
$route['post-forgot-verify-account'] = 'Authorization/postForgotVerifyAccount';
$route['post-verify-account'] = 'Authorization/postVerifyAccount';
$route['post-forgot-password'] = 'Authorization/postForgotPassword';
$route['resendOTP'] = 'Authorization/resendOTP';
$route['forgot-password'] = 'Authorization/forgotPassword';
$route['outgoing-server-down'] = 'Authorization/serverDown';
$route['check-email'] = 'Authorization/checkEmail';
// route for user admin
$route['admin-dashboard'] = 'AdminController/adminDashboard';
$route['user-dashboard'] = 'AdminController/adminDashboard';
$route['profile'] = 'AdminController/profile';
$route['update-profile-image'] = 'AdminController/updateProfileImage';
$route['edit-profile/(:any)'] = 'AdminController/editProfile/$1';
$route['logout'] = 'AdminController/logout';
$route['change-password'] = 'AdminController/changePassword';
$route['post-change-password'] = 'AdminController/postChangePassword';
$route['eoi-registration'] = 'AdminController/eoiRegistration';
$route['eoi-status'] = 'AdminController/eoiStatus';
$route['submit-eoi-registration'] = 'AdminController/postEoIRegistration';
$route['post-final-submit'] = 'AdminController/postFinalSubmit';
$route['submit-use-cases'] = 'AdminController/suggestUseCases';
$route['submit-use-cases'] = 'AdminController/suggestUseCases';
$route['submit-use-cases/(:any)'] = 'AdminController/suggestUseCases/$1';
$route['submit-use-cases/(:any)/(:any)'] = 'AdminController/suggestUseCases/$1/$2';
$route['submit-submit-use-cases'] = 'AdminController/submitSuggestUseCases';
$route['submit-submit-use-cases/(:any)'] = 'AdminController/submitSuggestUseCases/$1';
// route for admin
$route['user-list'] = 'AdminController/userList';
$route['get-user-list'] = 'AdminController/getUserList';
$route['get-submit-use-cases'] = 'AdminController/getSuggestUseCases';
$route['get-submited-use-cases'] = 'AdminController/getSuggestedUseCases';
$route['get-eoi-application'] = 'AdminController/getEoIApplication';
$route['verifed-users'] = 'AdminController/verifedUsers';
$route['unverified-users'] = 'AdminController/unverifiedUsers';
$route['get-unverified-user-list'] = 'AdminController/getUnverifiedUserList';
$route['get-verified-user-list'] = 'AdminController/getVerifiedUserList';
$route['users'] = 'AdminController/users';
$route['users/(:any)'] = 'AdminController/users/$1';
$route['users/(:any)/(:any)'] = 'AdminController/users/$1/$2';
$route['eoi-application'] = 'AdminController/application';
$route['eoi-application/(:any)'] = 'AdminController/application/$1';
$route['eoi-application/(:any)/(:any)'] = 'AdminController/application/$1/$2';
$route['submited-use-cases'] = 'AdminController/submitedUseCases';
$route['submited-use-cases/(:any)'] = 'AdminController/submitedUseCases/$1';
$route['submited-use-cases/(:any)/(:any)'] = 'AdminController/submitedUseCases/$1/$2';
//route for theme-customizer-options
$route['project-settings'] = 'AdminController/projectSettings';
$route['theme-customizer-options'] = 'AdminController/themeCustomizerOptions';
$route['404_override'] = 'ErrorController/index';
$route['translate_uri_dashes'] = TRUE;
