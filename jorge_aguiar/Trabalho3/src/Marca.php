<?php

namespace UniAlfa\Poo;

class Marca
{
    private string $marca;

    public function setMarca(string $marca): void
    {
        $this->marca = $marca;
    }

    public function getMarca(): string
    {
        return $this->marca;
    }
}
