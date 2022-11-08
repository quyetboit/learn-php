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
    }