<?php

class veiculo{
    private $modelo;
	private $marca;
	private $cor;
	private $placa;
	private $tipodeveiculo; //carro ou moto
	
        public function getModelo() {
            return $this->modelo;
        }
		
		public function setModelo($modelo) {
            $this->modelo = $modelo;
        }

        public function getMarca() {
            return $this->marca;
        }
		
		public function setMarca($marca) {
            $this->marca = $marca;
        }

        public function getCor() {
            return $this->cor;
        }
		
		public function setCor($cor) {
            $this->cor = $cor;
        }

        public function getPlaca() {
            return $this->placa;
        }
		
		 public function setPlaca($placa) {
            $this->placa = $placa;
        }

        public function getTipodeveiculo() {
            return $this->tipodeveiculo;
        }  
		
        public function setTipodeveiculo($tipodeveiculo) {
            $this->tipodeveiculo = $tipodeveiculo;
        }
?>