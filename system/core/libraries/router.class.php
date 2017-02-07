<?php

class router {

    public static function runController($controller_name){
        //get the path to the proper controller file based on the controller name 
        $controller_file = static::getControllerFile($controller_name);
        //include the file 
        include $controller_file;
    }

    /**
    * find the name of the page to display in URL and determine
    * the right NAME of the controller to use
    **/
    public static function getControllerName(){
        //get the name of the page from the URL 
        $page_name = request::get("page", "home");

        //get the path of the proper controller file based on the page name
        $controller_file = static::getControllerFile($page_name);

        //if such a controller exists
        if(file_exists($controller_file)){
            //return the name of the page
            return $page_name;
        }else{
            //return name "error404"
            return "error404";
        }
    }

    /**
    *determines what php file should be used to prepare a page 
    * based on the page's name ("home", "contact", etc)
    **/
    protected static function getControllerFile($page_name){

        $filename = $page_name . ".controller.php";
        $filepath = CONTROLLERS_DIR . "/" . $filename;
        return $filepath;
    }
}