<?php

class Company {
    private int $id;
    private string $name;
    private string $img;

    public function __construct(string $name, string $img)
    {
        $this->name = $name;
        $this->img = $img;
    }
    
    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getImg(): string
    {
        return $this->img;
    }

    public function setImg(string $img)
    {
        $this->img = $img;
    }
}
