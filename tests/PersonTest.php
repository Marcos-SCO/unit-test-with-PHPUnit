<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\Test;

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

    // All functions must start with a "test" name to be considered a listed item. Another Approach is marking it with a test attribute
    #[Test]
    public function fullNameIsFirstNAmeWhenNoSurname(): void
    {
        // $this->assertTrue(false, 'Test not implemented yet!');
        // $this->markTestIncomplete('This test has not been implemented yet');

        $person = new Person;
        $person->setFirstName('Marcos');

        $this->assertSame('Marcos', $person->getFullName());
    }
}
