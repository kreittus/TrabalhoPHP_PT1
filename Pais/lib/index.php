
        <?php
           
            class Pais{
		private $ISO;
		private $nome;
		private $populacao;
		private $dimensao;
		public $Pfronteira = array();
		
		public function __construct($ISO,$nome,$dimensao){
			$this ->ISO = $ISO;
			$this ->nome = $nome;
			$this ->dimensao = $dimensao; 
		
		}
			
		public function GetISO() {
			return $this ->ISO;
		
		}
		public function Getnome() {
			return $this ->nome;
		
		}
		public function Getpopulacao() {
			return $this ->populacao;
		
		}
		public function Getdimensao() {
			return $this ->dimensao;
		
		}
		
		
		public function SetISO($ISO){
			$this ->ISO = $ISO; 
		}
		public function Setnome($nome){
			$this ->nome = $nome; 
		}
		public function Setpopulacao($populacao){
			$this ->populacao = $populacao; 
		}
		public function Setdimensao($dimensao){
			$this ->dimensao = $dimensao; 
		}
		
		public function VereficaIgualdade(Pais $p1, Pais $p2){
			if ($p1->ISO == $p2->ISO){
				return false;
			}
			return true;
		}
		
		public function VerificaFront(Pais $p1){
			if ($p1->Pfronteira != NULL ){
				return false;			
			}
			return true;
		}
		
		
		public function DensidadePop($populacao,$dimensao){
			$densidade = $populacao/ $dimensao;
			return $densidade;
		}
		
		public function ListarVizinhos(Pais $p1, Pais $p2){
                    foreach ($p1 -> Pfronteira as $key => $value) {
                        if($p1->Pfronteira[$key] == $p2->Pfronteira[$key]){
                            echo $p1->Pfronteira[$key];
                        }
                    }
		
		}
		
			
	
	} 

        
 