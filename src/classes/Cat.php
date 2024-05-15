<?php

class Cat {
    use AnimalTraits;

    public function __construct(string $name, int $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function meow(): string {
        return "{$this->name} мявкає.<br>";
    }
}