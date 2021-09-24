<?php
class Conta
{
    private $titular;
    private $saldo;
    private static $numeroDeContas = 0;
    
    public function __construct(Titular $titular) 
    {
        $this->titular = $titular;
        $this->saldo = 0;

        self::$numeroDeContas++;
        
    }

    public function __destruct()
    {
        if (self::$numeroDeContas > 2) 
        {
            self::$numeroDeContas--;
        }
    }

    public static function mostraNumeroDeContas() : int
    {
        return self::$numeroDeContas;
    }

    

    public function saca(float $valorASacar)
    {
        if ($this->saldo < $valorASacar)
        {
            echo "Você não pode sacar";
            return;
        }
        $this->saldo -= $valorASacar;
    }
    public function deposita(float $valorADepositar)
    {
        if ($valorADepositar <= 0)
        {
            echo "Valor precisa ser maior";
            return;
        }
            $this->saldo += $valorADepositar;
    }
    public function transfere(float $valorATransferir, Conta $contaDestino)
    {
        if ($valorATransferir > $this->saldo)
        {
            echo "Valor a transferir maior do saldo atual.";
            return;
        }
        $this->saca($valorATransferir);
        $contaDestino->deposita($valorATransferir);
    }
    public function mostraSaldo() : float
    {
        return $this->saldo;
    }

    public function defineTitular(string $titular)
    {
        $this->titular = $titular;
    }

    public function defineCpf($cpf)
    {
        $this->cpfTitular = $cpf;
    }

    public function mostraNomeTitular(): string
    {
        return $this->titular->mostraNome();
    }

    public function mostraCpfTitular(): string
    {
        return $this->titular->mostraCpf();
    }

    
}
