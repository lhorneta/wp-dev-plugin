<?php

class Category extends Controller {

    public $link;
    public $id;
    public $request;
    
    public $view;
    
    function __construct(){
        $this->request = new Request();
        $this->view = new Controller_View();
        $this->response = new Response();
    }
    
    public function action_index() {}
    
    public function getCategoryById($link) {
        

        $listCatgories = new ModelCategory();
        
        $content = $listCatgories->getCategories();
 

        $this->view->getContent(ADMIN.DS.'settings.tpl',$content);

    }
	
    public function getProductsByCategory($id) {

    }

}