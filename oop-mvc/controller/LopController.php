<?php
    class LopController 
    {
        public function index() {
            require ('./model/Lop.php');
            $result = (new Lop())->get_all();
            require('./view/lop/index.php');
        }

        public function create() {
            require ('./view/lop/create.php');
        }

        public function store() {
            require ('./model/Lop.php');
            $ten = $_POST['name'];
            $lop = new Lop();
            $lop->set_ten($ten);
            $lop->store();
            header('Location: ./index.php');
        }

        public function edit() {
            require ('./model/Lop.php');
            $ma = $_GET['ma'];
            $lop = (new Lop())->get_by_id($ma);
            require ('./view/lop/edit.php');
        }

        public function update() {
            require ('./model/Lop.php');
            $ma = $_POST['id'];
            $ten = $_POST['name'];
            $lop = new Lop();
            $lop->set_ma($ma);
            $lop->set_ten($ten);
            $lop->update();
            header('Location: ./index.php');
        }

        public function delete() {
            require ('./model/Lop.php');
            $ma = $_GET['ma'];
            $lop = new Lop();
            $lop->set_ma($ma);
            $lop->delete();
            header('Location: ./index.php');
        }
    }