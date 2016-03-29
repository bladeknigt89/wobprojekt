<?php

class View {

    function __construct() {
         $this->db = new Database(DB_TYPE, DB_HOST, DB_NAME, DB_USER, DB_PASS);
    }

    public function render($name, $noInclude = false)
    {
        require 'views/' . $name . '.php'; 
          
    }

}