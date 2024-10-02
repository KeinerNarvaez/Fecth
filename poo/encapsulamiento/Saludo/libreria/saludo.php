<?php
    class saludo{

        private $saludar;

        public function setsaluda($saludar){
            $this->saludar=$saludar;
        }
        public function getsaluda(){
        return $this->saludar;
        }
    };
?>