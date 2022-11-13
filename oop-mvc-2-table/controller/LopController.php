<?php

    class LopController
    {
        public function get_all() {
            require './model/Lop.php';
            return (new Lop())->get_all();
        }

        public function create() {
            require './view/lop/create.php';
        }

        public function store() {
            require './model/Lop.php';
            $lop = new Lop();
            $lop->store($_POST);
            header('Location: ./index.php?controller=lop');
        }

        public function edit() {
            require './model/Lop.php';
            $id = $_GET['ma'];
            $lop = new Lop();
            $currentLop = $lop->get_by_id($id);
            require './view/lop/edit.php';
        }

        public function update() {
            require './model/Lop.php';
            $lop = new Lop();
            $lop->update($_POST);
            header('Location: ./index.php?controller=lop');
        }

        public function delete() {
            require './model/Lop.php';
            $id = $_GET['ma'];
            $lop = new Lop();
            $lop->delete($id);
            header('Location: ./index.php?controller=lop');
        }
    }