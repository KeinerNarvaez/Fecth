<?php
    class Areas{
        private $taltura;
        private $tbase;
        private $raltura;
        private $rbase;
        private $lado;
        public $cuadrado;
        public $triangulo;
        public $rectangulo;

        public function __construct(Lado $taltura, Lado $tbase,Lado $raltura,Lado $rbase, Lado $lado){
            $this->taltura=$taltura;
            $this->tbase=$tbase;
            $this->lado=$lado;
            $this->raltura=$raltura;
            $this->rbase=$rbase;
        }

        public function areaCuadrado(){
            $this->cuadrado=$this->lado->getvalor()*$this->lado->getvalor();
            return $this->cuadrado;
        }

        public function areaTriangulo(){
            $this->triangulo=($this->taltura->getvalor()* $this->tbase->getvalor())/2;
            return $this->triangulo;
        }
        public function areaRectangulo(){
            $this->rectangulo=$this->raltura->getvalor()* $this->rbase->getvalor();
            return $this->rectangulo;
        }
    }
?>