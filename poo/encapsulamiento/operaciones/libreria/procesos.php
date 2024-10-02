<?php

    class operaciones{
        private $numeroUno;
        private $numeroDos;

        public $suma;
        public $resta;
        public $division;
        public $multiplicacion;
        
        public function setsumando($numeroUno,$numeroDos){
            $this->suma= $numeroUno +$numeroDos;
        }
        public function getsumando(){
            return $this->suma;
        }

        public function setresta($numeroUno,$numeroDos){
            $this->resta=$numeroUno - $numeroDos;
        }
        public function getresta(){
            return $this->resta;
        }

        public function setdivision($numeroUno,$numeroDos){
            $this->division=$numeroUno/$numeroDos;
        }
        public function getdivision(){
            return $this->division;
        }

        public function setmultiplicacion($numeroUno,$numeroDos){
            $this->multiplicacion=$numeroUno*$numeroDos;
        }
        public function getmultiplicacion(){
            return $this->multiplicacion;
        }


    }
?>