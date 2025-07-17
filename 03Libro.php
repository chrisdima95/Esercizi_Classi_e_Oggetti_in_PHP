<?php

class Libro
{
    public $titolo;
    public $autore;
    public $prezzo;

    public function __construct($titolo, $autore, $prezzo)
    {
        $this->titolo = $titolo;
        $this->autore = $autore;
        $this->prezzo = $prezzo;
    }

    public function scheda()
    {
        return "Titolo: $this->titolo, Autore: $this->autore, Prezzo: $this->prezzo €";
    }
}

$libro = new Libro("1984", "George Orwell", 14.50);
echo $libro->scheda();
