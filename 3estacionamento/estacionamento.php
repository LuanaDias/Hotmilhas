
<?php

class estacionamento{
	private $tempoDePermanencia;
	private $valor;
	private $vagas;
	private $hEntrada;
	private $hSaida;
		
	    public function getTempoDePermanencia() {
            return $this->tempoDePermanencia;
        }
		
		 public function setTempoDePermanencia($tempoDePermanencia) {
            $this->tempoDePermanencia = $tempoDePermanencia;
        }

        public function getValor() {
            return $this->valor;
        }
		
		 public function setValor($valor) {
            $this->valor = $valor;
        }

        public function getVagas() {
            return $this->vagas;
        }
		
		public function setVagas($vagas) {
            $this->vagas = $vagas;
        }

        public function getHEntrada() {
            return $this->hEntrada;
        }

		 public function setHEntrada($hEntrada) {
            $this->hEntrada = $hEntrada;
        }
		
        public function getHSaida() {
            return $this->hSaida;
        }       

        public function setHSaida($hSaida) {
            $this->hSaida = $hSaida;
        }
}
?>