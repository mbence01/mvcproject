<?php
    /**
     * The ViewLoader class loads the specific view file if the file exists otherwise it includes the 404 file
     */
    class ViewLoader {
        private $file;
        private $data = array();

        /**
         * The constructor scans the specific file and if the file exists, set the file class variable
         */
        public function __construct($fileName) {
            $targetFile = "views/" . ucfirst($fileName) . "View.php";

            if(file_exists($targetFile)) {
                $this->file = $targetFile;
            } else $this->file = null;
        }

        /**
         * Sets the $data variable to data in parameter
         * The parameter comes from the model file, which communicates with the database
         */
        public function setData($data) {
            $this->data = $data;
        }

        /**
         * Loads the view, if the variable is not null, otherwise it includes the 404 file
         */
        public function loadView() {
            if($this->file == null) {
                include_once("views/404.html");
            } else {
                include_once($this->file);
            }
        }
    }
?>