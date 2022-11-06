<?php
    class Connect 
    {
        private $host_name = 'localhost';
        private $username = 'root';
        private $password = '';
        private $database_name = 'mvc_2_table';

        private function connect() {
            $conn = new mysqli($this->host_name, $this->username, $this->password, $this->database_name);

            if ($conn->connect_error) {
                die ('Xảy ra lỗi khi kết nối đến cơ sở dữ liệu.');
            }
            return $conn;
        } 

        public function select ($sql) {
            $conn = $this->connect();
            $result = $conn->query($sql);
            $conn->close();
            return $result;
        }

        public function execute ($sql) {
            $conn = $this->connect();
            $conn->query($sql);
        }
    }