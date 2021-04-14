<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'pages/viewhome';
$route['feedback'] = 'pages/view_feedback/feedback';
$route['app'] = 'pages/view_app/app';
$route['pending'] = 'pages/view_pending/pending';
$route['reviewed'] = 'pages/view_reviewed/reviewed';
$route['dashboard'] = 'pages/view_dashboard/dashboard';
$route['edit_template'] = 'pages/view_edittmpl/edit_template';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
