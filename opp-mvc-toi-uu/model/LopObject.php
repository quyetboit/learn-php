<?php
    class LopObject 
    {
        private $id;
        private $ten;

        function __construct($param) {
            $this->id = $param['id'] ?? '';
            $this->ten = $param['ten'] ?? '';
        }

        function get_id() {
            return $this->id;
        }

        function set_id($id) {
            $this->id = $id;
        }

        function get_ten() {
            return $this->ten;
        }

        function set_ten($ten) {
            $this->ten = $ten;
        }
    }