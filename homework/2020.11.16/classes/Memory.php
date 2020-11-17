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


$memory = $mentor ? 'mentor' : 'student';

echo "{$this->compLang}-{$memory} {$this->name} <br><br>";
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