<?php

namespace src;
class hotel
{
    public string $name;
    public string $beschreibung;
    public string $bild;

    public function __construct($name, $beschreibung, $bild)
    {
        $this->name = $name;
        $this->beschreibung = $beschreibung;
        $this->bild = $bild;
    }
    public function __toString(): string
    {
        return $this->name;
    }


    public function getName(): string
    {
        return $this->name;
    }
    public function getBeschreibung(): string
    {
        return $this->beschreibung;
    }
    public function getBild(): string
    {
        return $this->bild;
    }
}