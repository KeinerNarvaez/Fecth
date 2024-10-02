<?php
    class suma{
        public $numeroUno;
        public $numeroDos;

        public function sumado($numeroUno,$numeroDos){
            $this->numeroUno=$numeroUno;
            $this->numeroDos=$numeroDos;
            $resultado=$this->numeroUno + $this->numeroDos;
            return $resultado;
        }
    }

    class resta{
        public $numeroUno;
        public $numeroDos;

        public function restando($numeroUno,$numeroDos){
            $this->numeroUno=$numeroUno;
            $this->numeroDos=$numeroDos;
            $resultado=$this->numeroUno - $this->numeroDos;
            return $resultado;
        }
    }

    class dividir{
        public $numeroUno;
        public $numeroDos;

        public function dividiendo($numeroUno,$numeroDos){
            $this->numeroUno=$numeroUno;
            $this->numeroDos=$numeroDos;
            $resultado=$this->numeroUno / $this->numeroDos;
            return $resultado;
        }
    }
    class multiplicar{
        public $numeroUno;
        public $numeroDos;

        public function multiplicando($numeroUno,$numeroDos){
            $this->numeroUno=$numeroUno;
            $this->numeroDos=$numeroDos;
            $resultado=$this->numeroUno * $this->numeroDos;
            return $resultado;
        }
    }
?>