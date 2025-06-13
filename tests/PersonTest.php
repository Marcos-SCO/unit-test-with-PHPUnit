<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

use App\Person;

final class PersonTest extends TestCase
{

    public function testGetFullNameIsFirstNameAndSurname(): void
    {

        $person = new Person;
        $person->setFirstName('Marcos');
        $person->setSurname('sco');

        $this->assertSame('Marcos sco', $person->getFullName());
    }
}
