<?php
//Phurl V3 Config File
//Not directly compatible with v2 Config Files
$config = array();

//MySQL Config
$config['mysql_server'] = 'localhost'; //Mysql Server Hostname/IP
$config['mysql_user']   = 'root'; //Mysql Username
$config['mysql_pass']   = ''; //MySQL Password
$config['mysql_db']     = 'phurl'; //MySQL Database
$config['mysql_prefix'] = 'ph_'; //MySQL Table prefix

//Site Config
$config['site_name']    = 'Phurl Version 3'; //Site name
$config['site_slogan']	= 'URLs made shorter, URLs made simpler.'; //Site Slogan
$config['site_url']		= 'http://localhost'; //URL without trailing slash
$config['theme']		= 'default'; //Theme folder name in /phurl-themes
$config['language']		= 'en'; //Language of site

//Extra
$config['debug']		= true; //Enable or disable debug
?>