<?php

class config {
    protected static $data = array();
    

    public static function get($key, $default = null){
        //if a configuration value exists within $data with the $key
        // not good enough: if(isset(static::$data[$key])) so use:
        if(array_key_exists($key, static::$data)){
            //return it
            return static::$data[$key];
        // if not
        } else {
            // return the defult value
            return $default;
        }
    }

    /**
    * load all the configuration settings from config.php and
    * put it inside statis::$data
    */
    public static function load(){
        //include the configuration file (which hopefully includes $config variable)
        include CONFIG_DIR."/config.php";
        //assign $config as the value of static::$data
        static::$data = $config;
    }
    
} // end class