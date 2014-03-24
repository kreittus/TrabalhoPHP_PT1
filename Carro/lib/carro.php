<?
	require 'veiculo.php';
	class carro extends veiculo{
		
		public function acelerar {
			$velocidade++;
		
		}
		
		public function TrocarMarcha{
			
			$marcha++;
		
		}
		
		private function AtualizarVelocidade{
			$velocidade = $velocidade;
		
		}
		
		
	
	
	}


?>