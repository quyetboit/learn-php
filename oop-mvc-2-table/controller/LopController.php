<?php

    class LopController
    {
        public function get_all() {
            require './model/Lop.php';
            return (new Lop())->get_all();
        }
    }