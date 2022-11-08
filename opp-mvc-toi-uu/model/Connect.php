<?php
    class Connect
    {
        private $server_name = 'localhost';
        private $username = 'root';
        private $password = '';
        private $database_name = 'mvc_2_table';

        private function connect(): object {
            $connection = new mysqli($this->server_name, $this->username, $this->password, $this->database_name);
            if ($connection->connect_error) {
                die('Xảy ra lỗi khi kết nối cơ sở dữ liệu');
            }
            return $connection;
        }

        public function query($sql): object {
            $connection = $this->connect();
            $results = $connection->query($sql);
            return $results;
        }

        public function execute($sql): void {
            $connection = $this->connect();
            $results = $connection->query($sql);
        }
    }