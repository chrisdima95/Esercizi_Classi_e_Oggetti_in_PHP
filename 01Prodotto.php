<?php

// 1. Crea una classe Prodotto
class Prodotto
{
    public $nome;
    public $prezzo;

    // 3. Costruttore con parametri
    public function __construct($nome, $prezzo)
    {
        $this->nome = $nome;
        $this->prezzo = $prezzo;
    }

    // 2. Metodo sconto
    public function applicaSconto($percentuale)
    {
        $this->prezzo -= $this->prezzo * ($percentuale / 100);
    }
}

// Esempio: creo un oggetto
$prodotto1 = new Prodotto("Pasta", 2.50);

// Stampo le proprietà
echo "Nome prodotto: " . $prodotto1->nome . "\n";
echo "Prezzo: " . $prodotto1->prezzo . "€\n";

// Applico uno sconto del 20%
$prodotto1->applicaSconto(20);
echo "Prezzo dopo sconto: " . $prodotto1->prezzo . "€\n";

// Creo un secondo oggetto con valori diversi
$prodotto2 = new Prodotto("Riso", 3.00);
echo "Nuovo prodotto: " . $prodotto2->nome . ", prezzo: " . $prodotto2->prezzo . "€\n";
