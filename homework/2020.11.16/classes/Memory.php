<?php


class Memory
{
    public const SCHOOL = 'skillUp';


    public string $name;
    public string $compLang;

    public function __construct(string $name, string $compLang, bool $mentor = false)
    {
        $this->name = $name;
        $this->compLang = $compLang;

        $school = self::SCHOOL;
        $memory = $mentor ? 'mentor' : 'student';

        echo "{$school} {$this->compLang}-{$memory} {$this->name} successfully created.<br><br>";
    }


    public function getName(): string
    {
        return $this->name;
    }


    public function getCompLang (): string
    {
        return $this->compLang;
    }
}