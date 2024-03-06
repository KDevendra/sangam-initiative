<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// route for base URL's
$route['default_controller'] = 'BaseController';
$route['registration'] = 'Authorization/signUp';
$route['login'] = 'Authorization/signIn';
$route['about'] = 'BaseController/about';
$route['living-list'] = 'BaseController/livingList';
$route['get-core-competency'] = 'BaseController/getCoreCompetency';
$route['why-does-it-matter-now'] = 'BaseController/whySangam';
$route['join-as-speaker'] = 'BaseController/joinAsSpeaker';
$route['get-involved'] = 'BaseController/getInvolved';
$route['post-case-submission-form'] = 'BaseController/postCaseSubmissionForm';
$route['submit-speaker-request'] = 'BaseController/submitSpeakerRequest';
$route['events'] = 'BaseController/events';
$route['expression-of-interest'] = 'BaseController/expressionOfInterest';
$route['sangam-timeline'] = 'BaseController/sangamTimeline';
$route['curated/(:any)'] = 'BaseController/curatedContentDetail/$1';
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
$route['submit-report-issue/(:any)'] = 'AdminController/submitReporIssue/$1';
$route['submit-curated-content'] = 'AdminController/submitCuratedContent';
$route['register-for-event'] = 'AdminController/registerForEvent';
$route['submit-event-registration'] = 'AdminController/submitEventRegistration';
// route for admin
$route['user-list'] = 'AdminController/userList';
$route['get-user-list'] = 'AdminController/getUserList';
$route['get-event-registration'] = 'AdminController/getEventRegistration';
$route['get-approved-event-registration'] = 'AdminController/getApprovedEventRegistration';
$route['get-rejected-event-registration'] = 'AdminController/getRejectedEventRegistration';
$route['get-pending-event-registration'] = 'AdminController/getPendingEventRegistration';
$route['get-submit-use-cases'] = 'AdminController/getSuggestUseCases';
$route['get-submited-use-cases'] = 'AdminController/getSuggestedUseCases';
$route['get-submitted-speaker-request'] = 'AdminController/getSubmittedSpeakerRequest';
$route['get-reported-issue'] = 'AdminController/getReportedIssue';
$route['get-eoi-application/(:any)'] = 'AdminController/getEoIApplication/$1';
$route['get-curated-content'] = 'AdminController/getCuratedContent';
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
$route['eoi-application-action/(:any)/(:any)'] = 'AdminController/eoiApplicationAction/$1/$2';
$route['submited-use-cases'] = 'AdminController/submitedUseCases';
$route['submited-use-cases/(:any)'] = 'AdminController/submitedUseCases/$1';
$route['submited-use-cases/(:any)/(:any)'] = 'AdminController/submitedUseCases/$1/$2';
$route['submitted-speaker-request'] = 'AdminController/submittedSpeakerRequest';
$route['submitted-speaker-request/(:any)'] = 'AdminController/submittedSpeakerRequest/$1';
$route['submitted-speaker-request/(:any)/(:any)'] = 'AdminController/submittedSpeakerRequest/$1/$2';
$route['report-issue'] = 'AdminController/reportIssue';
$route['report-issue/(:any)'] = 'AdminController/reportIssue/$1';
$route['reported-issue'] = 'AdminController/reportedIssue';
$route['reports']= 'AdminController/reports';
$route['curated-content'] = 'AdminController/curatedContent';
$route['curated-content/(:any)'] = 'AdminController/curatedContent/$1';
$route['curated-content/(:any)/(:any)'] = 'AdminController/curatedContent/$1/$2';
$route['send-email-unverified-users'] = 'AdminController/sendEmailsUnverifiedUsers';
$route['approved-event-applications'] = 'AdminController/approvedEventApplications';
$route['rejected-event-applications'] = 'AdminController/rejectedEventApplications';
$route['pending-event-applications'] = 'AdminController/pendingEventApplications';
$route['event-registration'] = 'AdminController/eventRegistration';
$route['event-registration/view/(:any)'] = 'AdminController/eventRegistrationView/$1';
$route['event-registration-ation/(:any)'] = 'AdminController/eventRegistrationAction/$1';
$route['event-registration-ation/(:any)/(:any)'] = 'AdminController/eventRegistrationAction/$1/$2';
$route['user-curated-content'] = 'AdminController/userCuratedContent';
$route['user-curated-content/view/(:any)'] = 'AdminController/eventRegistrationView/$1';
$route['user-curated-content-ation/(:any)/(:any)'] = 'AdminController/userCuratedContentAction/$1/$2';
$route['post-send-message'] = 'AdminController/postSendMessage';
$route['send-busk-message'] = 'AdminController/sendBuskMessage';
//route for team
$route['team'] = 'TeamManagementController/team';
$route['get-team-list'] = 'AdminController/getTeamList';
$route['post-create-team'] = 'TeamManagementController/postCreateTeam';
$route['post-update-team'] = 'TeamManagementController/postUpdateTeam';
//route for report excel
$route['download-event-registration/(:any)'] = 'ReportExcelController/downloadEventRegistration/$1';
$route['download-event-registration/(:any)/(:any)'] = 'ReportExcelController/downloadEventRegistration/$1/$2';
$route['download-submitted-speaker-request/(:any)'] = 'ReportExcelController/downloadSubmittedSpeakerRequest/$1';
$route['download-submitted-speaker-request/(:any)/(:any)'] = 'ReportExcelController/downloadSubmittedSpeakerRequest/$1/$2';
$route['download-user-list/(:any)'] = 'ReportExcelController/downloadUserList/$1';
$route['download-user-list/(:any)/(:any)'] = 'ReportExcelController/downloadUserList/$1/$2';
//route for PDFController
$route['download-eoi-application/(:any)'] = 'PDFController/index/$1';
//route for theme-customizer-options
$route['project-settings'] = 'AdminController/projectSettings';
$route['theme-customizer-options'] = 'AdminController/themeCustomizerOptions';
$route['404_override'] = 'ErrorController/index';
$route['translate_uri_dashes'] = TRUE;
