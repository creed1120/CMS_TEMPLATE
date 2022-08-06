<?php

    class User {

        /******************
         *  Properties
         ******************/
         public $id;
         public $username;
         public $first_name;
         public $last_name;

        /******************
         *  Methods
         ******************/

        /**
         * 
         * Returns ALL users from database)
         * 
         * @return object mysqli result
         */
        public static function find_all_users() {
            return self::get_this_query("SELECT * FROM users");
        }

        /**
         * 
         * Returns the user by ID from database
         * 
         * @param $id
         * @return object mysqli result
         */
        public static function find_user_by_id($id) {
            $the_result_array = self::get_this_query("SELECT * FROM users WHERE id = $id LIMIT 1");

            return !empty($the_result_array) ? $the_result_array : false;
        }

        // Auto Instantiate the class properties (self)
        public static function instantiate($the_sql_record) {
            $the_obj = new self;

            foreach ($the_sql_record as $the_property => $value) {
                if($the_obj->has_the_property($the_property)) {

                   $the_obj->$the_property = $value;
                }
            }
            return $the_obj;
        }

        // Check if ($this) class has properties
        private function has_the_property($the_property) {
            $propety_vars = get_object_vars($this);

            return array_key_exists($the_property, $propety_vars);
        }

        /*********************
         *  Helper Functions
         *********************/

        /**
         * 
         * returns the query given to the get_this_query() function
         * 
         * @param $sql
         * @return object $sql
         */
        public static function get_this_query($sql) {
            global $database;

            $result_set = $database->query($sql);
            $the_obj_array = array();

            while($row = mysqli_fetch_array($result_set)) {

                $the_obj_array[] = self::instantiate($row);
            }
            return $the_obj_array;
        }

    }

?>