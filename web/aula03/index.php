<?php



class conta{

    private $saldo;
    private $creditoImediato;

    public function deposito($valor){
        if($valor>0){
            $this->saldo += $valor;
        }
    }

    public function saque($valor){
        if($valor <= $this->saldo && $valor > 0){
            $this->saldo -= $valor;
        }
    }

    public function saldo(){
        return $this->saldo + $this->creditoImediato;
    }

    public function setCreditoImediato($valor){
        if($valor > 0){
            $this->creditoImediato = $valor;
        }
    }

    private function saldoTotal(){
        return $this->saldo + $this->creditoImediato;
    }
}

$conta = new conta();

$conta->deposito(67000);
echo "Saldo: " . $conta->saldo() ."<br/>";

$conta->deposito(800);
echo "Saldo: " . $conta->saldo() ."<br/>";

$conta->saque(5000);
echo "Saldo: " . $conta->saldo() ."<br/>";

