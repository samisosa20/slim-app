<?php
    declare(strict_types=1);

    namespace App\Config;
    use PDO;

    class db {
        private $dbHost ='localhost';
        private $dbUser ='root';
        private $dbPass ='Gpax@FSn';
        private $dbName ='test';

        //connection
        public function connectionDB(){
            $mysqlConnect = "mysql:host=$this->dbHost;dbname=$this->dbName";
            $dbConnection = new PDO($mysqlConnect, $this->dbUser, $this->dbPass);
            $dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $dbConnection;
        }
    }