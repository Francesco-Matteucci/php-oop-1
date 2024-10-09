<?php
class Director {
    public string $name;
    public string $nationality;

    public function __construct(string $name, string $nationality) {
        $this->name = $name;
        $this->nationality = $nationality;
    }

    public function getDirectorInfo(): string {
        return "{$this->name}, Nazionalità: {$this->nationality}";
    }
}