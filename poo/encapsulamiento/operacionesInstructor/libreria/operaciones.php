<?php
    class operaciones{
        private $numeroUno;
        private $numeroDos;
        public $suma;
        public $resta;
        public $multiplicacion;
        public $division;

        public function __construct(Numero $numeroUno, Numero $numeroDos){
            $this->numeroUno=$numeroUno;
            $this->numeroDos=$numeroDos;
        }

        public function sumar(){
            $this->suma=$this->numeroUno->getvalor()+ $this->numeroDos->getvalor();
            return $this->suma;
        }

        public function restar(){
            $this->resta=$this->numeroUno->getvalor()- $this->numeroDos->getvalor();
            return $this->resta;
        }
        public function multiplicar(){
            $this->multiplicacion=$this->numeroUno->getvalor()* $this->numeroDos->getvalor();
            return $this->multiplicacion;
        }
        public function dividir(){
            $this->division=$this->numeroUno->getvalor()/ $this->numeroDos->getvalor();
            return $this->division;
        }

    }
?>