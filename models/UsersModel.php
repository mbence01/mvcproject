<?php
    class UsersModel {
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
            $getUsers = $this->sql->query("SELECT * FROM users");

            while($rows = $getUsers->fetch_array(MYSQLI_ASSOC)) {
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