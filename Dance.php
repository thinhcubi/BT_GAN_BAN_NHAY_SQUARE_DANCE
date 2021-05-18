<?php

class Dance
{
    public string $name;
    public string $gender;

    public function __construct(string $name,string $gender)
    {
        $this->name = $name;
        $this->gender= $gender;
    }
    public function getGender(): string
    {
        return $this->gender;
    }
    public function getName(): string
    {
        return $this->name;
    }
}