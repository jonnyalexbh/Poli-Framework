<?php
//DATABASE CONFIGURATIONS (change to the correct values)
define("DB_SERVER", 'localhost');
define("DB_USERNAME", 'root');
define("DB_PASS", 'root'); 
define("DB_DBASE", 'empresa');

//-----------DO NOT CHANGE ------------------------

//SERVER CONFIGURATIONS (It is not recommended change this values)
define("BASE_PATH",'localhost');
define("BASE_MODELS",'/modelo');
define("BASE_CONTROLLERS",'/controladores');
define("BASE_VIEWS",'/vistas');
define("BASE_CLASSES",'/clases');



//load the folders
$folders = [BASE_CLASSES , BASE_MODELS, BASE_CONTROLLERS];
foreach ($folders as $folder) {      
    foreach (glob(".{$folder}/*.php") as $file) {
        require  $file;
    }    
}


 