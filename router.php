<?php

class router
{

    public function __construct()
    {


        add_action('init', [$this, 'rounts']);

    }

    public function rounts()
    {

        $request_url = $_SERVER['REQUEST_URI'];
        $this->dispatch_req($request_url);
    }

    private function dispatch_req($req_uri)
    {
        if (strpos($req_uri, 'dashboard') == false) {
            return;
        }
        //return last text
        $handler = $this->parse_uri($req_uri);

        $handler_name = $this->format_handler_name($handler);

        if (!$this->is_handler_valid($handler_name)) {
            throw new Exception('req not valid');
        } else {
            $handler_path = $this->get_handler_file($handler_name);
            include_once $handler_path;
            $handlerObject = new $handler_name;
            $handlerObject->index();
            exit;

        }

    }

    private function parse_uri($uri)
    {
        $uri_parts = explode('/', strtok($uri, '?'));
        return end($uri_parts);
    }

    private function is_handler_valid($handler)
    {

        $handler_file_path = $this->get_handler_file($handler);
        return file_exists($handler_file_path) and is_readable($handler_file_path);

    }

    private function get_handler_file($handler)
    {
        $handler_file_path = USERPANEL_DIR . 'panel/handlers/' . $handler . '.php';

        return $handler_file_path;
    }



    private function format_handler_name($handler)
    {

        $formatted_handler = ucfirst($handler) . 'Handler';
        return $formatted_handler;

    }

}