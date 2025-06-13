<?php

declare(strict_types=1);

namespace App;

class Person
{
    private string $firstName;
    private string $surname;

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
    }

    public function getSurname(): string
    {
        return $this->surname;
    }

    public function setSurName(string $surname): void
    {
        $this->surname = $surname;
    }

    public function getFullName(): string
    {
        return $this->firstName . ' ' . $this->surname;
    }
}
