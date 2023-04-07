<?php

abstract class handler
{

    abstract protected function index();

    public function checkAction()
    {
        if (isset($_GET['action']) and !empty($_GET['action'])) {
            $action = $_GET['action'];

        } else {

            $action = null;
        }

        if (is_null($action)) {
            return false;
        }
        return true ;
  
    }

    public function showActionPage () {

        $action = $_GET['action'];
        if (method_exists($this, $action)) {

            $this->{$action}();

      

        }
    }


}