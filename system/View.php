<?php

class View {
     
    public function checkPathIncude($tpl, $item = '', $i='') {

        $path = WP_PATH_PLUGINS. DS . WP_PLIGIN_DEV . DS .TEMPLATE_PATH . DS . $tpl;

        if (file_exists($path) && $tpl !== '') {
            include($path);
        }
    
    }

    public function doHeader($template, $content='') {
        $this->checkPathIncude($template, $content);
    }

    public function doDisplay($template, $content='') {

        if ($content) {
            // if (is_array($content)) {
            //     foreach ($content as $key => $items) {
            //         $this->checkPathIncude($template, $items, $key);
            //     }
            // } else {
                $this->checkPathIncude($template, $content);
            // }
        } else {
            $this->checkPathIncude($template);
        }
    }

    public function doFooter($template,$content='') {
        $this->checkPathIncude($template);
    }

    public function showModal($template) {
        $this->checkPathIncude($template);
    }

    public function end($template) {
        $this->checkPathIncude($template);
    }
 
}