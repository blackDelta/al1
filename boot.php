<?php
/**
 * Created by JetBrains PhpStorm.
 * Developer: sohail.ahmad
 * Date: 11/2/12
 * Time: 6:13 PM
 * This file contains all configuration of project */
session_start();
$config = array();

/**
 * $config['db'] ; contains array of database configuration */

$config['app']['name'] = "GariPk";
$config['app']['ads_dir'] = "advertisements/";
//220 x 146 medium-thumb
//60 x 40 small-thumb
$config['app']['ads_dir'] = "advertisements/thumbs/";
/*
$config['db']['host'] = "localhost";
$config['db']['user'] = "pakmotor_gpk";
$config['db']['password'] = "pakmotorgpk";
$config['db']['dbName'] = "pakmotor_gpk_db";
*/
$config['db']['host'] = "localhost";
$config['db']['user'] = "root";
$config['db']['password'] = "";
$config['db']['dbName'] = "gpk_db";

/*
 *	
 * 
 */
$config['general']['baseUrl'] = "localhost:85/garipk/";
$config['general']['dbTime'] = "Y-m-d H:i:s";
$config['general']['userTime'] = "d-m-Y H:i:s";


function request($key)
{
    $val = $_REQUEST[$key];
    $val = strip_tags($val);
    $val = stripslashes($val);
    return $val;
}
$config['general']['cities'] = array(
    '1'=>'Lahore',
    '2'=>'Faisalabad',
    '3'=>'Multan',
    '4'=>'Rawalpindi',
    '5'=>'Gujranwala',
    '6'=>'Sargodha',
    '7'=>'sialkot',
    '8'=>'Peshawar',
    '9'=>'Islamabad',
    '10'=>'Haiderabad',
);