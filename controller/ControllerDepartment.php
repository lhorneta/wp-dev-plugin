<?php

class ControllerDepartment extends Controller {

    public $request;
    
    public $view; 
    
    function __construct(){
        $this->request = new Request();
        $this->view = new Controller_View();
        $this->response = new Response();
    }
    
    public function action_index() {}

}