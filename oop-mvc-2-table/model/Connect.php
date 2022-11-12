<?php

    class Connect 
    {
        private $host_name = 'localhost';
        private $username = 'root';
        private $password = '';
        private $database_name = 'mvc_2_table';

        private function connect() {
            return new mysqli($this->host_name, $this->username, $this->password, $this->database_name);
        }

        public function query($sql): object {
            $conn = $this->connect();
            $result = $conn->query($sql);
            $conn->close();
            return $result;
        }

        public function execute($sql): void {
            $conn = $this->connect();
            $conn->query($sql);
        }
    }