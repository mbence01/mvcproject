<?php
    class MainController {
        private $page = "main";

        public function __construct() {
            include_once("ViewLoader.php");

            $viewLoader = new ViewLoader($this->page);

            $viewLoader->loadView();
        }
    }
?>