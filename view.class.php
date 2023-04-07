<?php


class view {

    public static function load ($view_file , $data = [],  $layouts = 'defualt') {

        $defualt_path = UPP_VIEWS . '/layouts/' .  $layouts . '.php' ;

 
        if(file_exists($defualt_path) and is_readable($defualt_path)) {
            $type = explode(".", $view_file);
            $view = str_replace('.' , DIRECTORY_SEPARATOR ,$view_file ) ;
            $view_file = $view . '.php' ;


            extract($data) ;

            include $defualt_path ;

        }


    }






}