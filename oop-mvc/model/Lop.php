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
    }