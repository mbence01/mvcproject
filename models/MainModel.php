<?php
    class MainModel {
        /**
         * Main page is a static page, so it does not need SQL connection and queries
         */
        public function doQuery() {}

        public function getData() {
            return array();
        }
    }
?>