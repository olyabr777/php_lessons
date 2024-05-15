<?php

trait AnimalTraits {
    public string $name;
    public int $age;

    public function eat(string $food): string {
        return "{$this->name} їсть {$food}.<br>";
    }

    public function sleep(): string {
        return "{$this->name} спить.<br>";
    }
}