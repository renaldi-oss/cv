<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['admin']             = 'admin/view';
$route['admin/biodata']     = 'admin/biodata';
$route['admin/education']   = 'admin/education';
$route['admin/experiencce'] = 'admin/experiencce';
$route['admin/info']        = 'admin/info';
$route['admin/portofolio']  = 'admin/portofolio';
$route['admin/skill']       = 'admin/skill';
$route['admin/sosmed']      = 'admin/sosmed';
