<?php

class BoletoWavy
{
	public $valorDoBoletoWavy = 0;
	public function estorno(float $valorDoBoletoRMV)
	{
		$this->valorDoBoletoWavy += (($valorDoBoletoRMV * 10) / 100);
	}
}

$refJunho = new BoletoWavy();
$refJulho = new BoletoWavy();
$refAgosto = new BoletoWavy();

$refJunho->valorDoBoletoWavy = 21.35;
$refJulho->valorDoBoletoWavy = 71.70;
$refAgosto->valorDoBoletoWavy = 94.65;

$refJunho->estorno($refJunho->valorDoBoletoWavy);
$refJulho->estorno($refJulho->valorDoBoletoWavy);
$refAgosto->estorno($refAgosto->valorDoBoletoWavy);

echo "Valor para beyond em Junho, Julho e Agosto, respectivamente: R$$refJunho->valorDoBoletoWavy, R$$refJulho->valorDoBoletoWavy, R$$refAgosto->valorDoBoletoWavy" . PHP_EOL;
