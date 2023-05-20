<?php
    class Connexion {

        public $connection;

        function __construct()
        {
            include_once __DIR__. '/constants.php';

            $this->connection = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASSWORD);

            if($this->connection == null ) {
                die("erreeur de connxion à la base de donnees");
            }
        }

    }

?>