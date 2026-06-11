<?php

require_once 'core/Config.class.php';
require_once 'core/App.class.php';

use core\App;
use core\Config;

/**
 * -Jest to plik inicjalizujący, kóry powinnien być dołączany na poczatku każdego skryptu.
 * -Zawiera on podstawową konfigurację, która jest potrzebna do działania aplikacji,oraz tworzy i inicjalizuje główny obiekt aplikacji.
 */

$_PARAMS = array();
$conf = new Config();


$conf->clean_urls = true;           
$conf->action_param = 'action';     
$conf->action_script = '/ctrl.php'; 

include 'config.php'; 


$conf->root_path = dirname(__FILE__);
$conf->server_url = $conf->protocol.'://'.$conf->server_name;
$conf->app_url = $conf->server_url.$conf->app_root;
if ($conf->clean_urls) $conf->action_root = $conf->app_root."/"; #for clean urls
else $conf->action_root = $conf->app_root.'/index.php?'.$conf->action_param.'='; #for regular urls
$conf->action_url = $conf->server_url.$conf->action_root;

App::createAndInitialize($conf);
