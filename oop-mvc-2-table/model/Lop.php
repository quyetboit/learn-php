<?php

    class Lop 
    {
        function get_all() {
            require './model/Connect.php';
            require './model/LopObject.php';
            $connetion = new Connect();
            $sql = "select * from lop";
            $result = $connetion->query($sql);
            $lops = [];
            foreach ($result as $lop) {
                $lopObject = new LopObject($lop);
                $lops[] = $lopObject;
            }
            return $lops;
        }

        function get_by_id($id) {
            require './model/Connect.php';
            require './model/LopObject.php';

            $sql = "select * from Lop where id=$id";
            $connet = new Connect();
            
            $result = $connet->query($sql);
            return new LopObject($result->fetch_assoc());
        }

        function store($param) {
            require './model/Connect.php';
            $sql = "insert into Lop(ten) values('" . $param['ten'] . "')";
            $connet = new Connect();
            $connet->execute($sql);
        }

        function update($param) {
            require './model/Connect.php';
            $sql = "update lop set ten = '" . $param['ten'] . "' where id = " . $param['id'];
            $connet = new Connect();
            $connet->execute($sql);
        }
        
        function delete($id) {
            require './model/Connect.php';
            $sql = "delete from lop where id = $id";
            $connet = new Connect();
            $connet->execute($sql);
        }
    }