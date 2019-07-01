<?php
    class Connection {
        public $connection;

        public function __construct($name, $username, $password, $db="db5000115955.hosting-data.io") {
            $this->connection = new PDO("mysql:host=".$db.";dbname=".$name.";charset=utf8mb4", $username, $password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
    }
?>