<?php
    class Areas{
        private $altura;
        private $base;
        private $lado;
        public $cuadrado;
        public $triangulo;
        public $rectangulo;

        public function __construct(Lado $altura, Lado $base, Lado $lado){
            $this->altura=$altura;
            $this->base=$base;
            $this->lado=$lado;
        }

        public function areaCuadrado(){
            $this->cuadrado=$this->lado->getvalor()*$this->lado->getvalor();
            return $this->cuadrado;
        }

        public function areaTriangulo(){
            $this->triangulo=($this->altura->getvalor()* $this->base->getvalor())/2;
            return $this->triangulo;
        }
        public function areaRectangulo(){
            $this->rectangulo=$this->altura->getvalor()* $this->base->getvalor();
            return $this->rectangulo;
        }
    }
?>