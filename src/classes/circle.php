<?php

class Circle extends Figure {
    private float $radius;

    // Constructor
    public function __construct(float $radius) {
        if ($radius <= 0) {
            throw new InvalidArgumentException("Radius must be a positive number.");
        }
        $this->radius = $radius;
    }

    // calculate area
    public function area(): float {
        return pi() * $this->radius ** 2;
    }

    // calculate perimeter (circumference)
    public function perimeter(): float {
        return 2 * pi() * $this->radius;
    }

    // get area
    public function getArea(): float {
        return $this->area();
    }

    // get perimeter
    public function getPerimeter(): float {
        return $this->perimeter();
    }
}