<?php

    /* Logger */
    define("_LOGS_FOLDER_", "./logs/");
    
    /**
     * 
     * If you want to log all your app activity, we need to create a switch
     * for activating or deactivating the logger.
     * So, the switch is going to be a file called "_logging_", if the file exists
     * the logger will be activated, however, if not exist the logger will be deactivated
     * 
     */
    if(file_exists(_LOGS_FOLDER_."_logging_")){
        define("logging", true);
    }else{
        define("logging", false);
    }
    
    if(logging){
        error_reporting(E_ALL);
        ini_set("display_errors", 1);
    }
    
    /**
     * 
     * Our app is going to be connected to a database, so we must define all the parameters
     * At the type parameter, we should define the type of the database, for example,
     * if we use a database in SQL, the type is going to be "mysql".
     * 
     */
    define("_HOST_", "localhost");
    define("_BBDD_", "database");
    define("_USER_", "username");
    define("_PASS_", "password");
    define("_TYPE_", "type");
    
    /**
     * 
     * Our app is going to load the controllers and the models qhen is necesary,
     * so qe will use an autoloader.
     * 
     */
    spl_autoload_register(function($class){
       if(strtr($class, "controller")){
           include "./controllers/" . $class . ".php";
       } else {
           include "./models/" . $class . ".php";
       }
    });