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
    }