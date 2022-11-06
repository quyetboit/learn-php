<?php
    class LopController 
    {
        public function index() {
            require ('./model/Lop.php');
            $result = (new Lop())->get_all();
            require('./view/lop/index.php');
        }

        public function create() {
            require ('./view.lop.create.php');
        }
    }