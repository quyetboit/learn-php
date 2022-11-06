<?php
    require ('./model/Connect.php');
    class Lop
    {
        private int $ma;
        private string $ten;

        function get_ma() {
            return $this->ma;
        }

        function set_ma($ma) {
            $this->ma = $ma;
        }

        function get_ten() {
            return $this->ten;
        }

        function set_ten($ten) {
            $this->ten = $ten;
        }

        public function get_all() {
            $sql = "select * from lop";
            $connect = new Connect();
            $result = $connect->select($sql);
            $arr = [];
            foreach($result as $row) {
                $lop = new self();
                $lop->set_ma($row['id']);
                $lop->set_ten($row['ten']);
                $arr[] = $lop;
            }
            return $arr;
        }

        public function get_by_id($id) {
            $connect = new Connect();
            $sql = "select * from lop where id = $id";
            $result = $connect->select($sql)->fetch_assoc();
            $lop = new self();
            $lop->set_ma($result['id']);
            $lop->set_ten($result['ten']);
            return $lop;
        }

        public function store() {
            $connect = new Connect();
            $sql = "insert into lop(ten) values('$this->ten')";
            $connect->execute($sql);
        }

        public function update() {
            $connect = new Connect();
            $sql = "update lop set ten = '$this->ten' where id = $this->ma";
            $connect->execute($sql);
        }

        public function delete() {
            $connect = new Connect();
            $sql = "delete from lop where id = $this->ma";
            $connect->execute($sql); 
        }
    }