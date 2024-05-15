<?php



class Dog {
    use AnimalTraits;

    public function __construct(string $name, int $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function bark(): string {
        return "{$this->name} гавкає.<br>";
    }
}