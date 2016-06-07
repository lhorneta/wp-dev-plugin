<?php

class ModelCategory extends Model {

    public $id;
    public $query;


    public function __construct()
    {
        parent::__construct();
        $this->table = DEV_PREFIX."categories";
    }
 
    public function getCategories() {

        $q = "
            SELECT *
            FROM `" . $this->table . "`
        ";

        return $this->wpdb->get_results($q);
    }

    public function getCategoryById($id) {

        $q = "
            SELECT 
            `" . $this->table . "`.`post_content`,
            `" . $this->table . "`.`post_title`,
            `" . $this->table . "`.`post_modified`
            FROM `" . $this->table . "`
            WHERE `" . $this->table . "`.`ID` = '" . $id . "'
        ";

        return $this->wpdb->get_results($q);
    }

}
