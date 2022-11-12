<?php
    class LopObject 
    {
        private $id;
        private $ten;

        function __construct($param)
        { 
            $this->id = $param['id'];
            $this->ten = $param['ten'];
        }

        public function get_id() {
            return $this->id;
        }

        public function set_id($id) {
            $this->id = $id;
        }

        public function get_ten() {
            return $this->ten;
        }

        public function set_ten($ten) {
            $this->ten = $ten;
        }
    }