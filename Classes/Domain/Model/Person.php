<?php
declare(strict_types=1);

namespace AMartinNo1\Typo3TypeConverterExample\Domain\Model;

class Person
{
    protected $firstname;
    protected $lastname;
    public function __construct(string $firstname, string $lastname)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
    }
}