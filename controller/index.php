<?php

class Controller_Index extends Controller {
    
    /*
     * @get type of content
     * @type string
     */
    public $type;

    /*
     * @set url address layout
     * @type string
     */
    public $url_param;

    /*
     * @create new object class controller 
     * @type object
     */
    public $obj;

    /*
     * @create saves parent category
     * @type session
     */
    public $parent_category = null;
    
    public $view;
    public $request;
    
    function __construct(){
        $this->view = new Controller_View();
	    $this->request = new Request();
        $this->response = new Response();
    }
    
    public function indexAction($type, $url_param) {
   //     $this->getStaticPage($type);
        $this->setStaticTemplates();
        $this->getTypeOfTemplateDisplay($type, $url_param);
        $this->setDinamicTemplates($type);
    }
    
    public function getTDKStaticPagesHelper(){
        return parent::load(HELPERS_PATH,'helper_tdk_inner_pages.php');
    }
	
    public function getTypeOfTemplateDisplay($type, $url_param) {

        switch ($type) {
            case "category":
                $this->getStaticPage("mainpage");
                $obj = new Category();
                $obj->getCategoryById($url_param);
                break;
            default: $this->getStaticPage("mainpage");break;
        }
    }
	
    public function getStaticPage($page_type) {
        $this->view->getContent($page_type.TPL);
    }
	
    public function setStaticTemplates() {
        $this->view->indexAction();
    }

    public function setDinamicTemplates($type) {

    }

}