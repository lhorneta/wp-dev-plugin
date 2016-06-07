<?php

/**
 * Template Name: index
 */
class Controller_View extends View{


    /*
     * @set params to layout
     * @type array
     */
    public $content;

    /*
     * @set comments to layout
     * @type array
     */
    public $comments;

    /*
     * @set name template
     * @type string
     */
    public $template;

    public function indexAction() {
        
    }

    public function getHeader($template, $content) {
        parent::doHeader($template, $content);
    }


    public function getContent($template, $content='') {

        if ($template) {
            parent::doDisplay($template, $content);
        }
    }

    public function getFooter($tpl,$content='') {
        parent::doFooter($tpl,$content);
    } 
    
}