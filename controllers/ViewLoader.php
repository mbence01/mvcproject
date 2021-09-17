<?php
    class ViewLoader {
        public function __construct($fileName) {
            $targetFile = "views/" . ucfirst($fileName) . "View.php";

            if(file_exists($targetFile)) {
                $this->file = $targetFile;
            } else $this->file = null;
        
            include_once($targetFile);
        }

        public function loadView() {
            if($this->file == null) {
                include_once("views/404.html");
            } else {
                include_once($this->file);
            }
        }
    }
?>