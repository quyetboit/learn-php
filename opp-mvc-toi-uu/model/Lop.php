<?php
    class Lop
    {
        public function index() {
            require './model/Connect.php';
            require './model/LopObject.php';
            $sql = "select * from lop";
            $connect = new Connect();
            $results = $connect->query($sql);
            $lops = [];
            foreach ($results as $lop) {
                $lopObject = new LopObject($lop);
                $lops[] = $lopObject;
            }
            return $lops;
        }

        public function store($param) {
            require './model/Connect.php';
            $sql = "insert into lop(ten) values('" . $param['ten'] . "')";
            $connect = new Connect();
            $connect->execute($sql);
        }

        public function get_by_id($ma) {
            require './model/Connect.php';
            require './model/LopObject.php';
            $sql = "select * from lop where id = $ma";
            $connect = new Connect();
            $result = $connect->query($sql);
            $lopObject = new LopObject($result->fetch_assoc());
            return $lopObject;
        }

        public function update($param) {
            require './model/Connect.php';
            $sql = "update Lop set ten = '" . $param['ten'] . "' where id = " . $param['id'];
            $connect = new Connect();
            $connect->execute($sql);
        }

        public function delete($ma) {
            require './model/Connect.php';
            $sql = "delete from Lop where id = $ma";
            $connect = new Connect();
            $connect->execute($sql);
        }
    }