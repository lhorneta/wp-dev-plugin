<?php

class Router {

    /*
     * @string
     * @url address
     */
    public $url;

    /*
     * @string
     * @url param
     */
    public $param;

    /*
     * @string
     * @url param
     */
    public $param_type;

    /*
     * @array
     * @url params
     */
    public $params;

    /*
     * @string
     * @url parameters
     */
    public $parameters;

    /*
     * @string
     * @url type of content
     */
    public $type;

    function __construct() {
        $this->response = new Response();
    }
     
    public function action_index() {}

    public function getUrlParameters() {

        $url = $this->response->getUrl();
 
        $request = new Request();

        if(!isset($request->post['key'])){

           //      $params = array(
           // //         'category'      => '-c-'
           //       );

           //      $redirect = null;
           //      foreach ($params as $key => $param_type) {

           //          $pos_begin = stripos($url, $param_type);
           //          $parts = explode(".html", substr($url, $pos_begin));
           //          $param = $parts[0];

           //          if ($pos_begin !== false) {
           //              $this->frontController($key, $param);
           //              $redirect .= $param;
           //              break;
           //          } else {
           //              $redirect .= '';
           //          }
           //      }
            $key = 'category';
            $param = '';

            $this->frontController($key, $param);
            
        }else{
            $ajax = new Ajax();
            $ajax->hendler($request->post['key']);
        }

    }

    public function frontController($tpl_controller, $parameters='') {
        // echo "<p>tpl_controller: ".$tpl_controller." ".$parameters."</p>";
        
        switch ($tpl_controller) {

            case "category": 	$type = "category"; break;
            default:'';
        }

        $controllerIndex = new Controller_Index();
        $controllerIndex->indexAction($type, $parameters);
    }
}