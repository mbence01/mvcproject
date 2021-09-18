<?php
    class AdsModel {
        private $data;
        private $sql;

        /**
         * Set the data to az empty array, then create an SQL connection, finally set the charset.
         */
        public function __construct() {
            $this->data = array();
            $this->sql = new mysqli("localhost", "root", "", "mvcproject");

            $this->sql->set_charset("utf8");
        }

        /**
         * Do an SQL query, then store the result in $data variable
         */
        public function doQuery() {
            // Selects all of ads' title and writer's name
            $queryString = "SELECT title, name FROM advertisements INNER JOIN users ON users.id = advertisements.userid ORDER BY advertisements.id DESC";

            $getAds = $this->sql->query($queryString);

            // Store the result array in the $data variable, which can be available by getData() later
            while($rows = $getAds->fetch_array(MYSQLI_ASSOC)) {
                array_push($this->data, $rows);
            }
        }

        /**
         * Returns the data from the database
         */
        public function getData() {
            return $this->data;
        }
    }
?>