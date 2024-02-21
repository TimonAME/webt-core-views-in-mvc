<?php

namespace src;
class hotel
{
    public string $name;
    public string $beschreibung;

    public function __construct($name, $beschreibung)
    {
        $this->name = $name;
        $this->beschreibung = $beschreibung;
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

}