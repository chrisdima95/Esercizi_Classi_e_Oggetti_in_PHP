<?php

class Contatore
{
    private $valore;

    public function __construct($iniziale = 0)
    {
        $this->valore = $iniziale;
    }

    public function incrementa()
    {
        $this->valore++;
    }

    public function valore()
    {
        return $this->valore;
    }
}

$contatore = new Contatore(10);
$contatore->incrementa();
$contatore->incrementa();
echo "Valore del contatore: " . $contatore->valore() . "\n";

$contatore = new Contatore(20);
$contatore->incrementa();
$contatore->incrementa();
$contatore->incrementa();
echo "Valore del contatore: " . $contatore->valore() . "\n";

$contatore = new Contatore(30);
$contatore->incrementa();
$contatore->incrementa();
$contatore->incrementa();
$contatore->incrementa();
echo "Valore del contatore: " . $contatore->valore() . "\n";
