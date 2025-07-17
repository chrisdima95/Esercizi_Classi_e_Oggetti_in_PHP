<?php

// 4. Crea una classe Studente
class Studente
{
    public $nome;
    public $voto;

    public function __construct($nome, $voto)
    {
        $this->nome = $nome;
        $this->voto = $voto;
    }
    public function promosso()
    {
        return $this->voto >= 6;
    }
}

// Creo uno studente
$studente = new Studente("Giulia", 5);

// Stampo il voto
echo "Voto iniziale: " . $studente->voto . "\n";
echo "Promosso? " . ($studente->promosso() ? 'Sì' : 'No') . "\n";

// Modifico il voto a mano
$studente->voto = 7;
echo "Nuovo voto: " . $studente->voto . "\n";
echo "Promosso? " . ($studente->promosso() ? 'Sì' : 'No') . "\n";
